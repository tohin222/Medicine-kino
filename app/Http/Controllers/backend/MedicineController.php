<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\Medicine;
use App\model\backend\Company;
use App\model\backend\Disease;
use Carbon\Carbon;


class MedicineController extends Controller
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
  public function medicine_add()
  {
    $companies = Company::all();
        $diseases = Disease::all();
  return view('backend.medicine.medicine_add',compact('companies','diseases'));
  }
  public function medicine_show()
  {
    $medicines = Medicine::all();
  return view('backend.medicine.medicine_show',compact('medicines'));
  }
  public function medicine_create(Request $request)
  {
    $validatedData = $request->validate([
        'medicine_name' => 'required|alpha_dash|unique:medicines',
        'medicine_quantity' => 'required|numeric',
        'medicine_price' => 'required|numeric',
        'company_id' => 'required',
        'disease_id' => 'required',
    ]);

      if($request->hasFile('medicine_image')){
        $medicine_id =  Medicine::insertGetId([
          'medicine_name'    =>$request->medicine_name,
          'medicine_quantity'    =>$request->medicine_quantity,
          'medicine_price'    =>$request->medicine_price,
          'medicine_description'    =>$request->medicine_description,
          'company_id'    =>$request->company_id,
          'disease_id'    =>$request->disease_id,
          'created_at' => Carbon::now(),
          ]);
          $path = $request->file('medicine_image')->store('medicine_image');
           Medicine::find($medicine_id)->update([
             'medicine_image'=> $path
           ]);
             return back()->with('success','Medicine add Succesfully');
        }
        else{
          Medicine::insert([
            'medicine_name'    =>$request->medicine_name,
            'medicine_quantity'    =>$request->medicine_quantity,
            'medicine_price'    =>$request->medicine_price,
            'medicine_description'    =>$request->medicine_description,
            'company_id'    =>$request->company_id,
            'disease_id'    =>$request->disease_id,
            'created_at' => Carbon::now(),
          ]);
            return back()->with('success','Medicine add Succesfully');
        }
  }
  public function medicine_delete($medicine_id)
  {
      Medicine::where('id',$medicine_id)->delete();
      return back()->with('alert','Medicine delete Succesfully');
  }
  public function medicine_edit(Request $request,$medicine_id)
   {
     $medicine_info = Medicine::findOrFail($medicine_id);
     $companies = Company::all();
         $diseases = Disease::all();
     return view('backend.medicine.medicine_edit',compact('medicine_info','companies','diseases'));
   }

    public function medicine_update(Request $request)
 {
   $medicine_im = $request->medicine_id;
   if($request->hasFile('medicine_image')){
     $medicine_id =  Medicine::where('id',$medicine_im)->update([
       'medicine_name'    =>$request->medicine_name,
       'medicine_quantity'    =>$request->medicine_quantity,
       'medicine_price'    =>$request->medicine_price,
       'medicine_description'    =>$request->medicine_description,
       ]);
       $path = $request->file('medicine_image')->store('medicine_image');
        Medicine::find($medicine_im)->update([
          'medicine_image'=> $path
        ]);
          return redirect()->route('medicine_show')->with('update','Medicine update Succesfully');
     }
     else{
     Medicine::where('id',$medicine_im)->update([
         'medicine_name'    =>$request->medicine_name,
         'medicine_quantity'    =>$request->medicine_quantity,
         'medicine_price'    =>$request->medicine_price,
         'medicine_description'    =>$request->medicine_description,
         ]);

            return redirect()->route('medicine_show')->with('update','Medicine update Succesfully');
     }
 }

}
