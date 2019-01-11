<?php

namespace App\model\backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicine extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'medicine_name', 'medicine_description', 'company_id','disease_id','medicine_image','medicine_quantity','created_at',
  ];

  public function disease(){
      return $this->hasOne("App\model\backend\Disease","id","disease_id");
    }
  public function company(){
      return $this->hasOne("App\model\backend\Company","id","company_id");
    }


  protected $dates = ['deleted_at'];
}
