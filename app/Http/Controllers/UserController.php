<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
      /*  $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'userType' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'degree' => 'required',
            'Workplace' => 'required',
        ]);*/
        $data = $request->only([
            'name', 
            'email',
            'phone',
            'address',
            'degree',
            'Workplace',
            'userType',
            
        ]);
          $password = Hash::make($request->password);
        $data['password'] = $password;
        $user = User::create($data);
        return redirect()->route('users');
    }

    public function edit($id)
    {
        $user=User::find($id);
        return view('admin.users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->update($request->all());
        return redirect()->route('users');
    }

    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('users');
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('name', 'LIKE', "%{$query}%")
            ->where('userType', 'user')
            ->get();

        return response()->json($users);
    }
}



