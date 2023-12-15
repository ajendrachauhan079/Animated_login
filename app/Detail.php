<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table ='products';
    protected $guarded = ['id'];
    // protected $fillable =['name','description'];
}
