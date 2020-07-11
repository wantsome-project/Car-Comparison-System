<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index()
    {
       $user = User::all()->toArray();
       return view('permissions',compact('user'));
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        return view('user_edit',compact('user','id'));

    }

    public function update(Request $request,$id)
    { $this->validate($request,[
       'name'  =>  'required',
       ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->role_id = $request->input('role_id');
        $user->save();
        return redirect()->intended('super.admin/data')->with('success','Data updated');
    }


    public function show(Request $request, $id)
    {

    }

    public function destroy($id)
    {
            $user = User::find($id);
            $user->delete();
            return redirect()->intended('super.admin/data')->with('success','Data deleted');
    }
}


