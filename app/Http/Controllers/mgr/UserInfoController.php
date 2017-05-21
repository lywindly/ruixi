<?php

namespace App\Http\Controllers\mgr;


use Hash;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Auth;
use Auth;
use Session;


class UserInfoController extends Controller
{
    //
    public function changePassword(){

        return view ('Mgr.changepassword');
    }


    public function update(ChangePasswordRequest $request){


        if(Hash::check($request->get('old_password'),Auth::user()->password)) {
            Auth::user()->password = bcrypt($request->get('password'));
            Auth::user()->save();
             flash('密码修改成功','success');
           // flash()->success('文章发布成功');
            //Session::flash('flash_message', '文章发布成功');
            return back();
        }
       flash('密码修改失败','danger');
        return back();


    }




}
