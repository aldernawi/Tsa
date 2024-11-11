<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Department;
use App\Models\Researches;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $Departments=Department::oldest()->take(4)->get();
        $Department=Department::all();
        $reserches=Researches::where('status','approved')->get();
        $reserche1=Researches::where('status','approved')->where('department_id','1')->get();
        $reserche2=Researches::where('status','approved')->where('department_id','2')->get();
        $reserche3=Researches::where('status','approved')->where('department_id','3')->get();
        $reserche4=Researches::where('status','approved')->where('department_id','4')->get();

        return view('home.main',compact('Departments','reserches','Department','reserche1','reserche2','reserche3','reserche4'));
    }

    public function explore($id)
    {
        $reserches=Researches::where('status','approved')->where('department_id',$id)->get();
        return view('home.explore',compact('reserches'));
    }
    public function show($id)
    {
        $researche=Researches::where('id',$id)->first();
        $researche->increment('views');
        return view('home.researche',compact('researche'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $reserches = Researches::where('title', 'like', '%' . $query . '%')->where('status', 'approved')->get();
        return response()->json($reserches);
    }
    public function ownresearch()
    {
        $reserches=Researches::where('user_id',auth()->user()->id)->get();
        return view('home.ownresearch',compact('reserches'));
    }

    public function create()
    {
        $departments=Department::all();
        $users=user::where('id',auth()->user()->id)->get();
        return view('home.create',compact('departments','users'));
    }
    public function store(Request $request)
    {
        $data = $request->only([
        'title', 'image', 'user_id', 'abstract', 'publication_date', 'department_id', 'file','status',
        ]);

        Researches::create($data);
        return redirect()->route('home');
    }
    public function app ()
    {
       
        return view('admin.app');

    }
    

}

