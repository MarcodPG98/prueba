<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'tt_order_detail';

    protected $primaryKey = 'order_detail_id';
    public $timestamps = false;
}
