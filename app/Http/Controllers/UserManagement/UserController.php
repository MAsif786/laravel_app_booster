<?php

namespace App\Http\Controllers\UserManagement;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Toastr;

class UserController extends Controller
{

    public function index()
    {
    	$users = User::all();
    	return view("user.index", compact('users'));

    }

    public function show($slug){

        $user = User::where('slug', $slug)->firstorFail();
        return view("user.show", compact('user'));
    }

    public function toggleStatus($id)
    {
        $user = User::find($id);
        if($user->status){
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        $user->save();
        return redirect()->back();
    }

    public function ChangePassword()
    {
        return view('user.password_change');
    }

    public function UpdatePassword(Request $request)
    {
        $data = $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8'],
            'new_confirm_password' => ['required', 'same:new_password'],
        ]);

        if (Hash::check($data['current_password'], auth()->user()->password)){
            User::find(auth()->user()->id)->update(['password'=> Hash::make($data['new_password'])]);
            Toastr::success('Password Changed Successfully', 'Success', ["positionClass" => "toast-bottom-right"]);
        }else{
            $request->session()->flash('danger', 'Current Password Incorrect');
        }
        return redirect()->back();

    }

}
