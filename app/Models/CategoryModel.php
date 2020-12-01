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
  public function categoryGet($id) {
    return $this->getWhere(['id' => $id])->getRowArray();
  }


  /**
   * Hakee ensimmäisen tuoteryhmän tietokannassa.
   */
  public function getFirstCategory() {
    $this->select('id');
    $this->orderBy('id','asc');
    $this->limit(1);
    $query = $this->get();
    $category = $query->getRowArray();
    return $category['id'];
  }


  /**
   * Poistaa tuoteryhmän.
   * 
   * @param int $id Poistettavan tuoteryhmän id.
   */
  public function deleteCategory($id) {
    $this->where('id',$id);
    $this->delete();
  }

}
