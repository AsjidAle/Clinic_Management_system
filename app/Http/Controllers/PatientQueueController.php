<?php

namespace App\Http\Controllers;

use App\Models\PatientQueue;
use App\Http\Requests\StorePatientQueueRequest;
use App\Http\Requests\UpdatePatientQueueRequest;

class PatientQueueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = PatientQueue::all(); // $posts, not $post, because we are retrieving more than one

        return view('your_index_post_view', compact('posts'));
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
    public function store(StorePatientQueueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PatientQueue $patientQueue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PatientQueue $patientQueue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientQueueRequest $request, PatientQueue $patientQueue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PatientQueue $patientQueue)
    {
        //
    }
}
