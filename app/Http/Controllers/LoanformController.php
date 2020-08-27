<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Financial;
use App\Loan;
use App\Payment;

class LoanformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $financials = Financial::all();
        return view('frontend.loans.create',compact('financials'));
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
            'amount'=>'required',
            'loantime'=>'required',
            'date'=>'required',
            'financial1'=>'required',
            'financial2'=>'required',
            'financial3'=>'required',
            
        ]);
        // If include file, upload
        // file upload
        
        // Data insert
        $loan=new Loan;
        $loan->amount=$request->amount;
        $loan->loantime=$request->loantime;
        $loan->date= date('Y-m-d');
        $loan->financial_id=$request->financial1;
        $loan->financial_id=$request->financial2;
        $loan->financial_id=$request->financial3;
        
        $loan->save();
        // return redirect()->route('payment.create');
                return redirect('/');

        // Redirect
        // 
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
