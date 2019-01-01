<?php

namespace App\model\backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
  protected $fillable = [
    'company_name',
];
protected $dates = ['deleted_at'];
}
