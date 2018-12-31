<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Medicine;
use Carbon\Carbon;

class MedicineController extends Controller
{
  public function medicine_add()
  {
  return view('backend.medicine.medicine_add');
  }
  public function medicine_show()
  {
    $medicines = Medicine::all();
  return view('backend.medicine.medicine_show',compact('medicines'));
  }
  public function medicine_create(Request $request)
  {
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
     return view('backend.medicine.medicine_edit',compact('medicine_info'));
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
