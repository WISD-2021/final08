<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees=User::orderBy('id', 'ASC')->get();
        $users=User::all();
        $data=['employees'=>$employees,'users'=>$users];
        return view('admin.employees.index',$data);
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function edit($id)
    {
        $users=User::find($id);
        $data=['users'=>$users];
        return view('admin.employees.edit',$data);
    }

    public function store(UserRequest $request)
    {
        User::create($request->all());
        return redirect()->route('admin.employees.index');
    }

    public function update(UserRequest $request, $id)
    {
        $users=User::find($id);
        $users->update($request->all());
        return redirect()->route('admin.employees.index');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.employees.index');
    }

}
