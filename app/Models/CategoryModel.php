<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model {
    protected $table = 'category';
    protected $allowedFields = ['categoryname'];

    public function getCategory() {
        return $this->findAll();
    }
    

  public function get($categorynum) {
    return $this->getWhere(['categorynum' => $categorynum])->getRowArray();
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
