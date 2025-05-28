<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectRequest;
use Illuminate\Http\Response;
use App\Models\Payment;
use App\Models\Enrollment;
use Illuminate\View\View;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        //$enrollments=Enrollment::pluck('enroll_no','id');
        $payments = Payment::all();
       // return view('payments.create',compact('enrollments'));
       return view ('payments.index')->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
        $enrollments=Enrollment::pluck('enroll_no','id');
        return view('payments.create',compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input=$request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message', 'Payment Addedd!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        //
      
        $payments = Payment::find($id);
return view('payments.show')->with('payments', $payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $payments = Payment::find($id);
        $enrollments=Enrollment::pluck('enroll_no','id');
return view('payments.edit',compact('payments', 'enrollments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $payment = Payment::find($id);
$input = $request->all();
$payment->update($input);
return redirect('payments')->with('flash_message', 'Contact Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Payment::destroy($id);
return redirect('payments')->with('flash_message', 'Contact deleted!');
    }
}
