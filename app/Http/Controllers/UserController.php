<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users=User::orderBy('created_at', 'ASC')->get();
        $data=['users'=>$users];
        return view('admin.users.index', $data);
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
}
