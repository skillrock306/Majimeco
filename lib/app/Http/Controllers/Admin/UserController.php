<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MUser;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function getUser(){
    	$data['userlist'] = MUser::all();
    	return view('backend.user',$data);
    }
    public function getAddUser()
    {
    	$data['userlist'] = MUser::all();
    	return view('backend.adduser',$data);
    }
    public function postAddUser(AddUserRequest $request)
    {	
    	$user = new MUser;
    	$user->email = $request->Email;
    	$user->password = Hash::make($request->Password);
    	$user->level = 1;
    	$user->save();
    }
    public function getEditUser($id)
    {
    	$data['user'] = MUser::find($id);
    	return view('backend.edituser',$data);
    }
    public function postEditUser(EditUserRequest $request,$id)
    {
    	$user = MUser::find($id);
    	$user->email = $request->Email;
    	$user->password = Hash::make($request->Password);
    	$user->save();
    	return redirect('admin/user');
    }

    public function getDeleteUser($id)
    {
    	MUser::destroy($id);
    	return back();
    }

}
