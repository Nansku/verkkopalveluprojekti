<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $allowedFields = ['productname', 'description', 'price', 'cost', 'picture', 'categorynum'];

    public function getWithCategory($categorynum)
    {
        return $this->getWhere(['categorynum' => $categorynum])->getResultArray();
    }

    public function getAllProducts()
    {
        return $this->findAll();
    }

    // product getteri
    public function getProduct($id)
    {
        $this->where('productID', $id);
        $query = $this->get();
        $product = $query->getRowArray();
        return $product;
    }

    public function getProducts($ids)
    {
        $return = array();
        foreach ($ids as $id) {
            $this->table('product');
            $this->select('productID, productname,price');
            $this->where('productID', $id);
            $query = $this->get();
            $product = $query->getRowArray();
            array_push($return, $product);

            $this->resetQuery();
        }

        return $return;
    }
    // admin poistaa tuoteryhmällä
    public function deleteByCategory($categorynum)
    {
        $this->where('categorynum', $categorynum);
        $this->delete();
    }

    //  public function frontpageProduct($id)
    //  {
    //      $q = $this->select('*')->from('product')->where('productID',$id)->get(); 
    //      return $q->result();
    // }
    /**
     * Poistaa tuotteenn.
     * 
     * @param int $id Poistettavan tuotteen id.
     */
    public function deleteProduct($id)
    {
        $this->where('productID', $id);
        $this->delete();
    }

    public function randomProducts()
    {

        $random = array();
        $ids = array();

        $products = $this->findAll();

        if (count($products) > 3) {
            $amount = 0;
            while ($amount < 3) {
                $product = $products[rand(0, count($products) - 1)];
                if (!in_array($product['id'], $ids)) {
                    array_push($ids, $product['id']);
                    array_push($random, $product);
                    $amount++;
                }
            }
            return $random;
        } else {
            return $products;
        }
    }
}
