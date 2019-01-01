<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\Medicine;
use App\model\backend\Disease;
use App\model\backend\Company;

class RecycleBinController extends Controller
{
  public function recycle_bin_medicine()
   {

     $delete_medicines = Medicine::onlyTrashed()->get();
     return view('backend.recycle.recycle_bin_medicine',compact('delete_medicines'));
    }
    public function recycle_bin_medicine_restore($medicine_id)
     {
       Medicine::withTrashed()
        ->where('id', $medicine_id)
        ->restore();
        return back()->with('success','successfully restore!');
      }
  public function recycle_bin_company()
   {
     $delete_companies = Company::onlyTrashed()->get();
     return view('backend.recycle.recycle_bin_company',compact('delete_companies'));
    }
    public function recycle_bin_company_restore($company_id)
     {
       Company::withTrashed()
        ->where('id', $company_id)
        ->restore();
        return back()->with('success','successfully restore!');
      }
  public function recycle_bin_disease()
   {
     $delete_diseasees = Disease::onlyTrashed()->get();
     return view('backend.recycle.recycle_bin_disease',compact('delete_diseasees'));
    }
    public function recycle_bin_disease_restore($disease_id)
     {
       Disease::withTrashed()
        ->where('id', $disease_id)
        ->restore();
        return back()->with('success','successfully restore!');
      }
}
