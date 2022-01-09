<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $users=User::orderBy('created_at', 'ASC')->get();
        $data=['users'=>$users];
        return view('admin.users.index', $data);
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function edit($id)
    {
        $empolyees=User::find($id);
        $data=['employees'=>$empolyees];
        return view('admin.employees.edit',$data);
    }

    public function store(UserRequest $request)
    {
        User::create($request->all());
        return redirect()->route('admin.employees.index');
    }

    public function update(UserRequest $request, $id)
    {
        $product=User::find($id);
        $product->update($request->all());
        return redirect()->route('admin.employees.index');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.users.index');
    }

}
