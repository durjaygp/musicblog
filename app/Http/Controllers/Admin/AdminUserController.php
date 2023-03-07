<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public $admin;
    public function index(){
        return view('admin.user.user',[
            'user'=> User::find(auth()->user()->id),
        ]);
    }
    public function update(Request $request){

        $this->admin = User::find(auth()->user()->id);
        $this->admin->name = $request->name;
        $this->admin->email = $request->email;
        $this->admin->password = bcrypt($request->password);
        $this->admin->description = $request->description;
        if ($request->file('image')!=null){
            $this->admin->image = $this->saveImage($request);
        }

        $this->admin->save();
        return redirect()->back()->with('success', 'Profile Updated Successfully');

    }

    public function saveImage($request){
        $image = $request->file('image');
        $imageName = rand().'.'.$image->extension();
        $directory = 'uploads/admin/image/';
        $imageurl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imageurl;
    }
}
