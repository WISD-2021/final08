<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users=User::orderBy('id', 'ASC')->get();
        $data=['users'=>$users];
        return view('admin.users.index',$data);
    }

    public function create()
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function store(UserRequest $request)
    {
        //
    }

    public function update(UserRequest $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.users.index');
    }

    public function show()
    {
        $user=Auth::user();
        $data=['user'=>$user];
        return view('home.user_information',$data);
    }

    public function user_information_edit($id)
    {
        $user=User::find($id);
        $data=['user'=> $user];
        return view('home.user_information_edit',$data);
    }

    public function user_information_update($id)
    {
        $user=User::find($id);
        if(!empty($user->name) && !empty($user->email) && !empty($user->password))
        {

            $user->update([
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make($user->password),
            ]);
            return redirect()->route('/');
        }
        else
        {
            return redirect()->route('users.user_information');
        }
    }
}
