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


    public function modelAdd($product_id)
    {   
        $product = $this->productModel->getProduct($product_id);

        $cartProduct['id'] = $product['id'];
        $cartProduct['productname'] = $product['productname'];
        $cartProduct['price'] = $product['price'];
        $cartProduct['amount'] = 1;

        $this->addProductArray($cartProduct, $_SESSION['cart']);
    }

    

    private function addProductArray($product, &$array)
    {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i]['id'] === $product['id']) {
                $array[$i]['amount'] = $array[$i]['amount'] + 1;
                return;
            }
        }

        $product['amount'] = 1;
        array_push($array, $product);
    }

    public function remove($product_id)
    {   for ($i = count($_SESSION['cart']) - 1; $i >= 0; $i--) {
            $product = $_SESSION['cart'][$i];
            if ($product['id'] === $product_id) {
                array_splice($_SESSION['cart'], $i, 1);
            }
        }
        
    }

    public function clear()
    {
        $_SESSION['cart'] = null;
        $_SESSION['cart'] = array();
    }
    
   /* public function rownum() {
        $rownum = 0;
        foreach ($_SESSION['cart'] as $rownum) {
            $rownum = count($_SESSION['cart']) + 1;
        }
    } */


    public function order($customer) {
        $this->db->transStart();
        $this->orderModel->save($customer);
        $orderID = $this->insertID();
        //$orderID = $this->orderModel->getOrdernum();
        $rownum = $this->rownum();

        foreach ($_SESSION['cart'] as $product) {
            $this->order_rowModel->save([
                // 'ordernum' => $orderID,
                'ordernum' => $orderID,
                'product_id' => $product['id'],
                'amount' => $product['amount'],
                'rownum' => $rownum
            ]);
        }

        $this->clear();
        $this->db->transComplete();
    }

}
