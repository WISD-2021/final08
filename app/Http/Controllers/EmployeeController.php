<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Rules\Password;
use Laravel\Jetstream\Jetstream;

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

            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'type' => 1,
            ]);
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

    private function passwordRules()
    {
        return ['required', 'string', new Password, 'confirmed'];
    }

}
