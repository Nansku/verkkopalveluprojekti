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

    public function getOrders() {
        $this->select('ordr.customername,
        ordr.address,
        ordr.ordernum,
        ordr.city,
        ordr.phonenumber,
        ordr.postalnum,
        ordr.email,
        ordr.delivery,
        ordr_row.amount,
        product.productname,
        ordr_row.product_id,
        ordr.date');
        $this->join('ordr_row','ordr_row.ordernum = ordr.ordernum');
        $this->join('product','product.id = ordr_row.product_id');
        $kysely = $this->get();
        return $kysely->getResultArray();
      }
}

