<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\Researches;
use App\Models\Department;
use Illuminate\Http\Request;

class researchesController extends Controller
{
    public function index()
    {
        $researches=Researches::get();
        $departments=Department::all();
        $users=user::where('userType','user')->get();
        return view('admin.researches.index',compact('researches','departments','users'));
    }
    public function show($id)
    {
        $research=Researches::where('id',$id)->get();
        return view('admin.researches.show',compact('research'));
    }

    public function create()
    {
        return view('admin.researches.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
        'title', 'image', 'user_id', 'abstract', 'publication_date', 'department_id', 'file','status',
        ]);

        Researches::create($data);
        return redirect()->route('researches');
    }
    public function approve($id)
    {
        $research = Researches::findOrFail($id);
        $research->status = 'approved';
        $research->save();

        return response()->json(['status' => 'success', 'message' => 'Research approved successfully.']);
    }

    public function reject($id)
    {
        $research = Researches::findOrFail($id);
        $research->status = 'rejected';
        $research->save();

        return response()->json(['status' => 'success', 'message' => 'Research approved successfully.']);
        }
    public function save(request $request){
      $data = $request->only([
        'title', 'image', 'user_id', 'abstract', 'publication_date', 'department_id', 'file','status',
      ]) ;

      $image=$request->file('image');
    $imageName=time().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('123'), $imageName);
    $data['image']=$imageName;
        
            $file = $request->file('file');
            $fileName = time(). '.' .$file->getClientOriginalExtension();
            $file ->move(public_path('files'), $fileName); 
            $data['file'] = $fileName;
        
        $research = Researches::create($data);
        $research->save();
        return redirect()->route('researches');
    
    }

   
}

