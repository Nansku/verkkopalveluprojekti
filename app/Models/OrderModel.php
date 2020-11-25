<?php namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model {
    protected $table = 'customer';

    protected $allowedFields = ['customerID'];
}