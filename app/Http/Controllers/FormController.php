<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $students=Student::all();

        return view('frontend.forms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.forms.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request);
        // Validation
        $request->validate([
            'name'=>'required',
            'photo'=>'required',
            'fathername'=>'required',
            'nrcno'=>'required',
            'state'=>'required',
            'city'=>'required',
            'phoneno'=>'required',
            
        ]);
        // If include file, upload
        // file upload
        $imageName=time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/studentimg'),$imageName);

        $myfile='backend/studentimg/'.$imageName;
        // Data insert
        $student=new Student;
        $student->name=$request->name;
        $student->photo=$myfile;
        $student->fathername=$request->fathername;
        $student->nrcno=$request->nrcno;
        $student->state=$request->state;
        $student->city=$request->city;
        $student->phoneno=$request->phoneno;
        
        
        $student->save();
        // Redirect
        return redirect()->route('edu.create');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
