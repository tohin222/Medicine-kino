<?php

namespace App\model\backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disease extends Model
{
  use SoftDeletes;
protected $fillable = [
  'disease_name',
  ];
  protected $dates = ['deleted_at'];
}
