<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';

    public $timestamps = false;

    public function commentOnProduct() {
        return $this->belongsTo('App\Product','product_id','id');
    }

    public function commentOnCustomer() {
        return $this->belongsTo('App\Customer','cust_id','id');
    }
}
