<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\Disease;
use Carbon\Carbon;

class DiseaseController extends Controller
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
  public function disease_add()
  {

  return view('backend.disease.disease_add');
  }
  public function disease_create(Request $request)
    {
      $validatedData = $request->validate([
          'disease_name' => 'required|alpha',
      ]);
      Disease::insert([
        'disease_name'=> $request->disease_name,
          'created_at' => Carbon::now(),
      ]);
      return back()->with('success', 'Disease added Succesfully');
    }
    public function disease_show()
    {
      $diseasees = Disease::all();
      return view('backend.disease.disease_show',compact('diseasees'));
    }
    public function disease_delete($disease_id)
    {
      Disease::where('id',$disease_id)->delete();
      return redirect()->route('disease_show')->with('success', 'Disease delete Succesfully');
    }
    public function disease_edit($disease_id)
    {
      $disease_info = Disease::findOrFail($disease_id);
      return view('backend.disease.disease_edit',compact('disease_info'));
    }
    public function disease_update(Request $request)
    {
      $disease_id = $request->disease_id;
      Disease::where('id',$disease_id)->update([
        'disease_name'=> $request->disease_name,
      ]);
      return redirect()->route('disease_show')->with('success', 'Disease update Succesfully');
    }

}
