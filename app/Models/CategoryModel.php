<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model {
    protected $table = 'category';
    protected $allowedFields = ['categoryname'];

    public function getCategory() {
        return $this->findAll();
    }
}
