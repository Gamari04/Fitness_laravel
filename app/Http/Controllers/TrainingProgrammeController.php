<?php

namespace App\Http\Controllers;

use App\Models\TrainingProgramme;
use App\Http\Requests\StoreTrainingProgrammeRequest;
use App\Http\Requests\UpdateTrainingProgrammeRequest;

class TrainingProgrammeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTrainingProgrammeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainingProgrammeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrainingProgramme  $trainingProgramme
     * @return \Illuminate\Http\Response
     */
    public function show(TrainingProgramme $trainingProgramme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrainingProgramme  $trainingProgramme
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingProgramme $trainingProgramme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrainingProgrammeRequest  $request
     * @param  \App\Models\TrainingProgramme  $trainingProgramme
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainingProgrammeRequest $request, TrainingProgramme $trainingProgramme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainingProgramme  $trainingProgramme
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingProgramme $trainingProgramme)
    {
        //
    }
}
