<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
        $data['users'] = User::get();
        return view('admin.user.listData', $data);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email'
            ]
        );

        if ($validator->passes()) {
            User::create(
                [
                    'name'     => $request->name,
                    'email'    => $request->email,
                    'password' => $request->password,
                ]

            );
            Toastr::success('User Created Successfully', 'Success', ["positionClass" => "toast-top-center"]);
        } else {
            $errorMsg = $validator->messages();
            foreach ($errorMsg->all() as $msg) {
                Toastr::error($msg, 'Required');
            }
        }
        return redirect('users/create');
    }

    public function edit($id)
    {
        $users['users'] = User::find($id);
        return view('admin.user.update', $users);
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email'
            ]
        );
        if ($validator->passes()) {
            $users->update(
                [
                    'name'     => $request->name,
                    'email'    => $request->email,
                    'password' => $request->password,
                ]
            );
            Toastr::success('User Updated Successfully', 'Success', ["positionClass" => "toast-top-center"]);
        } else {
            $errorMsg = $validator->messages();
            foreach ($errorMsg->all() as $msg) {
                Toastr::error($msg, 'Required');
            }
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        Toastr::warning('User Removed Successfully', 'Success', ["positionClass" => "toast-top-center"]);
        //return redirect('users');
    }
}