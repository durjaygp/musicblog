<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminMakeController extends Controller
{
    public $admin;
    public function create(){
        return view('admin.user.create',[
            'users'=>User::latest()->get(),
        ]);
    }
    public function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users|max:150',
            'password'=>'required|max:150',
            'image'=>'required',
        ]);
        
        $this->admin = new User();
        $this->admin->name = $request->name;
        $this->admin->email = $request->email;
        $this->admin->password = bcrypt($request->password);
        $this->admin->description = $request->description;
        $this->admin->image = $this->saveImage($request);
        $this->admin->save();
        return redirect()->back()->with('success', 'New Admin Created Successfully');

    }
    public $image, $imageName, $imageUrl, $directory;
    public function saveImage($request)
    {
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'uploads/admin/image/';
        $this->imageUrl = $this->directory . $this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }

    public function edit($id){
        return view('admin.user.edit',[
            'user'=>User::find($id),
        ]);
    }
    public function update(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users|max:150',
            'password'=>'required|max:150',
            'image'=>'required',
        ]);
        $this->admin = User::find($request->id);
        $this->admin->name = $request->name;
        $this->admin->email = $request->email;
        $this->admin->password = bcrypt($request->password);
        $this->admin->description = $request->description;
        if($request->file('image')){
            if(file_exists($this->admin->image)){
                unlink($this->admin->image);
            }
            $this->admin->image = $this->saveImage($request);
        }
        $this->admin->save();
        return redirect()->back()->with('success', 'Admin Updated Successfully');
    }
    public function delete($id){
        $this->admin = User::find($id);
        if($this->admin->image){
            if(file_exists($this->admin->image)){
                unlink($this->admin->image);
            }
            // $this->admin->image = $this->saveImage($request);
        }
        $this->admin->delete();
        return redirect()->back()->with('success', 'Admin Has been deleted.');
    }


}
