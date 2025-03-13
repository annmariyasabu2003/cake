<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cake extends Model
{
    protected $table = 'product';
    protected $fillable= ['name','price','path'];

}
