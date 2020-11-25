<?php namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model {
    protected $table = 'customer';

    protected $allowedFiels = ['name','address','postalnumber','city','email','phonenumber'];
}