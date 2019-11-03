<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Input;


class UserController extends Controller
{



    public function profile(){
    	return view('admin.user.profile');
    }

    public function update(Request $request)
    {
        $user = User::find($request->user_id); //form id 
        $user->name = $request->name;
        $user->email = $request->email;
        //image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/dist/img/', $filename);
              $user->image = $filename;
        }

        $user->save();

        return redirect('/home')->with('message','User Updated Successfully.');
    }

    public function userpassword(){
    	return view('admin.user.userpassword');
    }

    public function userpasswordupdate(Request $request)
    {
    	$user = User::where('email', '=', Input::get('email'))->first();
		
		if ($user === null) {

			return back()->with('message','Email not found!');
		}
		else{
		$user = User::find($request->user_id); //form id 
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/home')->with('message','Password Updated Successfully.');
		}
	}


// new user form
    public function index(){
        return view('admin.user.new-user');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
 
        $user = new User(); 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $notification = array(
            'message' => 'User has been Created Successfully!',
            'alert-type' => 'success'
        );

        return redirect('/admin/user/manage')->with($notification);
    }

    public function manage(){
        $users =  User::all(); 
        return view('admin.user.new-manage', get_defined_vars());
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.user.new-user-update')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateuser(Request $request)
    {
        $user = User::find($request->user_id); //form id 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/admin/user/manage')->with('message','User Updated Successfully.'); 
    }

}
