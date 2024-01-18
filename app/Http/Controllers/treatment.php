<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Treatment as doctorTreatment;

class treatment extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
        ]);
        $new_user = new Patient;
        $new_user->name = $request['name'];
        $new_user->email = $request['email'];
        $new_user->detail = $request['description'];
        $new_user->save();
        return view('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function showall()
    {
        $patient = Patient::paginate(10);
        $data = compact('patient');
        return view('patients')->with($data); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {    
        Patient::find($id)->delete();
        return redirect()->back();
    
    }

    public function showForm()
    {    
        return view('treatment');
    }

    public function submitForm(Request $request)
    {    
        $doctorTreatment = new doctorTreatment();
        $doctorTreatment->mc_status = 1;
        $doctorTreatment->patient_id = 2;
        $doctorTreatment->remark = $request->remark;
        $doctorTreatment->save();

        return redirect()->route('show.form')->with('success', 'Form submitted successfully!');
    }
}
