<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;

    protected $table = "money_tbl_02";

    protected $fillable = ['custno', 'saleno', 'pcost', 'amount', 'price', 'pcode', 'sdate'];

}
