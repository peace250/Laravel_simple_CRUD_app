<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;



class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if(!session()->has('admin_name') || !session()->has('admin_id')){
        return redirect('/');
                                                       }
        $candidates=Candidate::all();
        return view('candidate.index',compact('candidates'));
                                                       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidate.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $candidate=$request->validate([
'first_name'=>'required|max:130',
'last_name'=>'required|max:130',
'gender'=>'required',
'dob'=>'required',
'exam_date'=>'required',
'phone_number'=>'required|max:10',
        ]);
        $request=Candidate::create($candidate);
        return redirect()->route('candidate.index')->with('success','Candidate registered');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fetch=Candidate::findOrFail($id);
        return view('candidate.edit',compact('fetch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
     $updateCandidate=$req->validate([
'first_name'=>'required|max:130',
'last_name'=>'required|max:130',
'gender'=>'required',
'dob'=>'required|date',
'exam_date'=>'required|date',
'phone_number'=>'required|digits:10',
        ]);
        $update=Candidate::findOrFail($id);
        $update->update($updateCandidate);
return redirect()->route('candidate.index')->with('success','update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Candidate::findOrFail($id);
        $del->delete();
        return redirect()->route('candidate.index')->with('success','Delete successful');
    }
}
