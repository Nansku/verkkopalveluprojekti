<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    private $productModel = null;
    private $customerModel = null;
    private $order_rowModel = null;
    private $orderModel = null;

    function __construct()
    {
        $session = \Config\Services::session();
        $session->start();

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        $this->db = \Config\Database::connect();

        $this->productModel = new ProductModel();
        //$this->customerModel = new CustomerModel();
        $this->order_rowModel = new Order_rowModel();
        $this->orderModel = new OrderModel();
    }
    /**
     *    @return Array cart
     */

    public function cart()
    {
        return $_SESSION['cart'];
    }

    /**
     *  @return int
     *  
     */

    public function count()
    {
        return count($_SESSION['cart']);
    }

    /**
     *  @param Array $customer
     */


    public function modelAdd($productID)
    {   
        $product = $this->productModel->getProduct($productID);

        $cartProduct['productID'] = $product['productID'];
        $cartProduct['productname'] = $product['productname'];
        $cartProduct['price'] = $product['price'];
        $cartProduct['amount'] = 1;

        $this->addProductArray($cartProduct, $_SESSION['cart']);
    }

    

    private function addProductArray($product, &$array)
    {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i]['productID'] === $product['productID']) {
                $array[$i]['amount'] = $array[$i]['amount'] + 1;
                return;
            }
        }

        $product['amount'] = 1;
        array_push($array, $product);
    }

    public function remove($productID)
    {   for ($i = count($_SESSION['cart']) - 1; $i >= 0; $i--) {
            $product = $_SESSION['cart'][$i];
            if ($product['productID'] === $productID) {
                array_splice($_SESSION['cart'], $i, 1);
            }
        }
        
    }

    public function clear()
    {
        $_SESSION['cart'] = null;
        $_SESSION['cart'] = array();
    }


    public function order($customer) {
        $this->db->transStart();
        $this->orderModel->save($customer);

        /*$customerID = $this->insertID();

        $this->orderModel->save(['customerID' => $customerID]);*/

        foreach ($_SESSION['cart'] as $product) {
            $this->order_rowModel->save([
                // 'ordernum' => $orderID,
                'productID' => $product['productID'],
                'amount' => $product['amount']
            ]);
        }

        $this->clear();
        $this->db->transComplete();
    }

}
