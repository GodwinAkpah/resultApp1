<?php

namespace App\Http\Controllers;
use App\Models\User;



 use App\Imports\resultImport;


use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    //
    public function index(){
        return view('dashboards.admins.index');
    }
  public  function profile(){
        return view('dashboards.admins.profile');

    }
  public  function settings(){
        $users =User::all();

        return view('dashboards.admins.settings')->with('users',$users);
    }
   public function edit(Request $request, $id){
       $users= User::findOrFail($id);
       return view('dashboards.admins.edit')->with('users',$users);

    }
    public function update(Request $request, $id){

        $users = User::find($id);
        $users->name = $request->input('username');
        $users->role= $request->input('usertype');
        $users->update();
        return 'success';
        //  return redirect("{{ route('admin.settings')}}")->with("status", "your data is updated");
    }
    public function importView(){
        return view('dashboards.admins.upload');
    }
    public function importFunction(Request $request){
        try {
            Excel::import(new resultImport(), $request->file(key:'import_file'));
            // dd('j');
         }
         catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
           
            // foreach($failures as $failure){


            //     $failure->row();
            //     $failure->attributes();
            //     $failure->errors();
            //     $failure->values();

            // }

          return back()->with('errors', $failures);
            // return view('welcome', compact('failures'));
         }

    }
    

}
