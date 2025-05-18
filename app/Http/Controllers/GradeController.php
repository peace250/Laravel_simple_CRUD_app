<?php
namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\Grade;
use Illuminate\Http\Request;
class GradeController extends Controller{
    public function create(){
        // with expects the relationship name
        $candidates=Candidate::get();
        return view('grade.create', compact('candidates'));
    }    

    public function store(Request $req){
        $validated=$req->validate([
            'candidate_id'=>'required|exists:candidates,candidate_id',
            'license_exam_category'=>'required',
            'obtained_marks'=>'required|numeric|min:0|max:20',
            'decision'=>'in:pass,fail'
        ]);
        $validated['decision']=$validated['obtained_marks']>=10?'pass':'fail';
        $validated=Grade::create($validated);
        return redirect()->route('grade.index');
    }


    public function index(){
         if(!session()->has('admin_name') || !session()->has('admin_id')){
            session()->flash('error','login first');
        return redirect('/');
                                                       }
        $join=Grade::with('candidate')->get();
        return view('grade.index',compact('join'));
    }
    
    public function report(){
        $join=Grade::with('candidate')->get();
        return view('grade.report',compact('join'));
    }

    function edit($id){
        $fetch = Grade::with('candidate')->findOrFail($id);
        return view('grade.edit',['fetch'=>$fetch]);

    }

    function update(Request $req, $id){
        $validate=$req->validate([
            'candidate_id'=>'required|exists:candidates,candidate_id',
            'license_exam_category'=>'required',
            'obtained_marks'=>'required|numeric|min:0|max:20',
            'decision'=>'in:pass,fail'
        ]);
        $validate['decision']=$validate['obtained_marks']>=10?'pass':'fail';
        $update=Grade::findOrFail($id);
        $update->update($validate);
        return redirect()->route('grade.index')->with('success','grades added successfully');
    }

    function delete($id){
        $delId=Grade::findOrFail($id);
        $delete = $delId->delete();
        return redirect()->route('grade.index');
    }
}
