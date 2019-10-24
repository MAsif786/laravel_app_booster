<?php

namespace App\Http\Controllers\UserManagement;

use App\UserGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserGroupController extends Controller
{

    public function index(){

        $usergroups = UserGroup::all();
        return view("usergroup.index", compact('usergroups'));

    }

    public function show($slug){

        $usergroup = UserGroup::where('slug', $slug)->firstorFail();
        return view("usergroup.show", compact('usergroup'));

    }

    public function toggleStatus($id)
    {
        $usergroup = UserGroup::find($id);
        if($usergroup->status){
            $usergroup->status = 0;
        } else {
            $usergroup->status = 1;
        }
        $usergroup->save();
        return redirect()->back();
    }
}
