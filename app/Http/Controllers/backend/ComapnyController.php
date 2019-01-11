<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\Company;
use Carbon\Carbon;
use auth;


class ComapnyController extends Controller
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
  public function company_add()
  {
  if (auth::user()->role==1) {
  return view('backend.company.company_add');
}
else {
 return view('backend.404.404');
}
  }
  public function company_create(Request $request)
    {
      $validatedData = $request->validate([
          'company_name' => 'required|alpha',
      ]);
      Company::insert([
        'company_name'=> $request->company_name,
          'created_at' => Carbon::now(),
      ]);
      return back()->with('success', 'Company added Succesfully');
    }
    public function company_show()
    {
      $companies = Company::all();
      return view('backend.company.company_show',compact('companies'));
    }
    public function company_delete($company_id)
    {
      if (auth::user()->role==1) {
      Company::where('id',$company_id)->delete();
      return redirect()->route('company_show')->with('success', 'Company delete Succesfully');
    }
 else {
     return view('backend.404.404');
 }
    }
    public function company_edit($company_id)
    {
      if (auth::user()->role==1) {
      $company_info = Company::findOrFail($company_id);
      return view('backend.company.company_edit',compact('company_info'));
    }
      else {
          return view('backend.404.404');
      }
    }
    public function company_update(Request $request)
    {
      $company_id = $request->company_id;
      Company::where('id',$company_id)->update([
        'company_name'=> $request->company_name,
      ]);
      return redirect()->route('company_show')->with('success', 'Company update Succesfully');
    }

}
