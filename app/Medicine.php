<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicine extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'medicine_name', 'medicine_description', 'company_id','disease_id','medicine_image','medicine_quantity','created_at',
  ];

  protected $dates = ['deleted_at'];
}
