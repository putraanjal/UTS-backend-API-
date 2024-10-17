<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
//nama tabel
 protected $table = 'product';

 //field/kolom yang berada pada table product di database
 protected $fillable =[
'caregorty_id'
'product'

 ]

}
