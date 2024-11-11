<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class departmentsController extends Controller
{
    public function index()
    {
        $departments=Department::all();
        return view('admin.departments.index',compact('departments'));
    }
    public function create()
    {
        return view('admin.departments.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'name',
        ]);
        Department::create($data);
        return redirect()->route('departments');
    }

    public function edit($id)
    {
        $department=Department::find($id);
        return view('admin.departments.edit',compact('department'));
    }

    public function update(Request $request, $id)
    {
        $department=Department::find($id);
        $department->update($request->all());
        return redirect()->route('departments');
    }

    public function destroy($id)
    {
        $department=Department::find($id);
        $department->delete();
        return redirect()->route('departments');
    }
 }
