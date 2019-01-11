<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\Medicine;
use App\model\backend\Disease;
use App\model\backend\Company;
use Auth;

class RecycleBinController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function recycle_bin_medicine()
   {

     $delete_medicines = Medicine::onlyTrashed()->get();
     return view('backend.recycle.recycle_bin_medicine',compact('delete_medicines'));

    }
    public function recycle_bin_medicine_restore($medicine_id)
     {
       if (auth::user()->role==1) {
       Medicine::withTrashed()
        ->where('id', $medicine_id)
        ->restore();
        return back()->with('success','successfully restore!');
      }
        else {
         return view('backend.404.404');
        }
      }
  public function recycle_bin_company()
   {

     $delete_companies = Company::onlyTrashed()->get();
     return view('backend.recycle.recycle_bin_company',compact('delete_companies'));

    }
    public function recycle_bin_company_restore($company_id)
     {
        if (auth::user()->role==1) {
       Company::withTrashed()
        ->where('id', $company_id)
        ->restore();
        return back()->with('success','successfully restore!');
      }
      else {
       return view('backend.404.404');
      }
      }
  public function recycle_bin_disease()
   {

     $delete_diseasees = Disease::onlyTrashed()->get();
     return view('backend.recycle.recycle_bin_disease',compact('delete_diseasees'));
   }

    public function recycle_bin_disease_restore($disease_id)
     {
          if (auth::user()->role==1) {
       Disease::withTrashed()
        ->where('id', $disease_id)
        ->restore();
        return back()->with('success','successfully restore!');
      }
        else {
         return view('backend.404.404');
        }
      }
}
