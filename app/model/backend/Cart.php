<?php

namespace App\model\backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
  use SoftDeletes;
protected $fillable = [
  'medicine_id','medicine_quantity',
];

public function cart(){
    return $this->hasOne("App\model\backend\Medicine","id","medicine_id");
  }


protected $dates = ['deleted_at'];
}
