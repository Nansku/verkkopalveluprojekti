<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model {
    protected $table = 'category';
    protected $allowedFields = ['categoryname'];

    public function getCategory() {
        return $this->findAll();
    }
    

     /**
   * Hakee tuotteen
   * 
   * @param int $id Haettavan tuotteen id.
   * @return Array Haetun tuoteryhmän tiedot taulukkona (yksi rivi).
   */
  public function categoryGet($categorynum) {
    return $this->getWhere(['categorynum' => $categorynum])->getRowArray();
  }


  /**
   * Hakee ensimmäisen tuoteryhmän tietokannassa.
   */
  public function getFirstCategory() {
    $this->select('categorynum');
    $this->orderBy('categorynum','asc');
    $this->limit(1);
    $query = $this->get();
    $category = $query->getRowArray();
    return $category['categorynum'];
  }


  /**
   * Poistaa tuoteryhmän.
   * 
   * @param int $id Poistettavan tuoteryhmän id.
   */
  public function deleteCategory($id) {
    $this->where('categorynum',$id);
    $this->delete();
  }

}
