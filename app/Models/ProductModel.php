<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $allowedFields = ['productname','description','price','cost','picture','categorynum'];

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
  public function deleteProduct($id) {
    $this->where('productID',$id);
    $this->delete();
  }

  /** 
   * Hakee tuotteita nimen perusteella.
   * 
   * @param $product Tuotteen nimi taia osa nimestä, jolla haetaan.
   * @return Array Nimen perusteella löydetyt tuotteet taulukossa.
    */
    public function getProductByName($productname) {
        $this->like('productname',$productname);
        $query = $this->get();
        return $query->getResultArray();
    }
}
