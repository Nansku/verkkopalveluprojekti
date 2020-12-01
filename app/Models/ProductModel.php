<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $allowedFields = ['productname','description','price','cost','picture','category_id'];

    public function getWithCategory($category_id)
    {
        return $this->getWhere(['category_id' => $category_id])->getResultArray();
    }

    public function getAllProducts()
    {
        return $this->findAll();
    }

    // product getteri
    public function getProduct($id)
    {
        $this->where('id', $id);
        $query = $this->get();
        $product = $query->getRowArray();
        return $product;
    }

    public function getProducts($ids)
    {
        $return = array();
        foreach ($ids as $id) {
            $this->table('product');
            $this->select('id, productname,price');
            $this->where('id', $id);
            $query = $this->get();
            $product = $query->getRowArray();
            array_push($return, $product);

            $this->resetQuery();
        }

        return $return;
    }
    // admin poistaa tuoteryhmällä
    public function deleteByCategory($category_id)
    {
        $this->where('category_id', $category_id);
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
  public function deleteProduct($category_id) {
    $this->where('category_id',$category_id);
    $this->delete();
  }
}
