<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = "member_tbl_02";

    protected $fillable = ['custno', 'custname', 'phone', 'address', 'joindate', 'grade', 'city'];

}
