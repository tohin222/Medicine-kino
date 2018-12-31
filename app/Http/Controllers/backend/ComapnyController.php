<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\Company;
use Carbon\Carbon;

class ComapnyController extends Controller
{
  public function company_add()
  {
  return view('backend.company.company_add');
  }
  public function company_create(Request $request)
    {
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
      Company::where('id',$company_id)->delete();
      return redirect()->route('company_show')->with('success', 'Company delete Succesfully');
    }
    public function company_edit($company_id)
    {
      $company_info = Company::findOrFail($company_id);
      return view('backend.company.company_edit',compact('company_info'));
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
