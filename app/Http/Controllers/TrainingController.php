<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrainingRequest;
use App\Http\Requests\UpdateTrainingRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::all();
        return view('admin.training.index',compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $students = Student::all();
        $training = new Training();
        return view('admin.training.create',compact('training','students','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainingRequest $request)
    {
        //dd($request->all());
        $data = $request->validated();
        Training::create($data);

        return redirect()->route('training.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training)
    {
        return view('admin.training.show',compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        $students = Student::all();
        return view('admin.training.edit',compact('training','students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainingRequest $request, Training $training)
    {
        $data = $request->validated();
        $training->update($data);

        return redirect()->route('training.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        $training->delete();

        return redirect()->route('training.index');

    }
}
