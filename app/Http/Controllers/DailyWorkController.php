<?php

namespace App\Http\Controllers;

use App\Models\DailyWork;
use App\Models\Project;
use Illuminate\Http\Request;

class DailyWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DailyWork::get();
        $proData = Project::get();
        // var_dump($data);
        return view('daily_work.index', compact('data', 'proData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proData = Project::get();
        return view('daily_work.create', compact('proData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = new DailyWork();
        $data->project_id = $request->project_id;
        $data->name = $request->name;
        $data->task = $request->daily_work;
        $data->save();
        return redirect('/task');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DailyWork::find($id);
        // var_dump($data);
        return view('daily_work.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = new DailyWork();
        $data->name = $request->name;
        $data->task = $request->daily_work;
        $data->save();
        return redirect('/task');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DailyWork::find($id)->delete();
        return redirect()->route('task.index');
    }
}
