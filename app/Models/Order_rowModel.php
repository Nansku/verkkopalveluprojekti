<?php namespace App\Models;

use CodeIgniter\Model;

class Order_rowModel extends Model {
    protected $table = 'ordr_row';

    protected $allowedFields = ['ordernum', 'productID','amount', 'rownum'];
}