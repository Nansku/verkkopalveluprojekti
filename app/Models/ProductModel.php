<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'product';

    public function getWithCategory($categorynum) {
        return $this->getWhere(['categorynum' => $categorynum])->getResultArray();
    }
}