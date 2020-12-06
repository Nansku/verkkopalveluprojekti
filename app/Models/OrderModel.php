<?php namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model {
    
    protected $table = 'ordr';

    protected $allowedFields = 
    ['customername','address','postalnum',
    'city','email','phonenumber','delivery'];


   /* public function getOrdernum() {
        $this->select('ordernum');
        $query = $this->get();
        $ordernum = $query->getRowArray();
        return $ordernum;
    }*/
}

