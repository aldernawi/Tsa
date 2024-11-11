<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Researches;
class AdminController extends Controller
{
    public function index()
{
    if(auth::id())
    {
        $userType=Auth::user()->userType;
        if($userType=='admin')
        {
            $users=user::where('userType','user')->count();
            $researches1=Researches::where('status','approved')->count();
            $departments=Department::count();
            $user=user::where('userType','admin')->count();
            $researches2=Researches::where('status','panding')->count();
            $researches3=Researches::where('status','rejected')->count();

            return view('admin.app',compact('users','researches1','departments','user','researches2','researches3'));
        }
        else if ($userType=='user')
        {
            $Departments=Department::latest()->take(4)->get();
            $Department=Department::all();
            $reserches=Researches::where('status','approved')->get();
            $reserche1=Researches::where('status','approved')->where('department_id','1')->get();
            $reserche2=Researches::where('status','approved')->where('department_id','2')->get();
            $reserche3=Researches::where('status','approved')->where('department_id','3')->get();
            $reserche4=Researches::where('status','approved')->where('department_id','4')->get();
    
            return view('home.main',compact('Departments','reserches','Department','reserche1','reserche2','reserche3','reserche4'));
        }
    }
    else
    {
        return redirect()->back();
    }

}

}