<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['id','description','quantity','price','type'];
    protected $guarded = ['created_at', 'updated_at'];
    protected $table = 'produtos';
}
