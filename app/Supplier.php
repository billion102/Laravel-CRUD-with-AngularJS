<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    protected $fillable = array('id', 'supplierName', 'supplierEmail', 'supplierContact', 'supplierPosition');
}
