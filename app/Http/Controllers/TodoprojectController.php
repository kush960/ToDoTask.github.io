<?php

namespace App\Http\Controllers;

use App\Models\Todoproject;
use Illuminate\Http\Request;
use Validator;
use Input;

class TodoprojectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todoproject::latest()->get();
        return view('welcome')->with('todos', $todos);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:225',
        ]);
        $todo = Todoproject::create([
            'title' => $request->title,
            'completed' => 0,
        ]);

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todoproject  $todoproject
     * @return \Illuminate\Http\Response
     */
    public function show(Todoproject $todoproject)
    {
        
    }
    public function show_data()
    {
        $todos = Todoproject::all();
        return view('todo.show_data',compact('todos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todoproject  $todoproject
     * @return \Illuminate\Http\Response
     */
    public function edit(Todoproject $todo)
    {
        return view('todo.edit')->with('todo',$todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todoproject  $todoproject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todoproject $todo)
    {
        $todo->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todoproject  $todoproject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todoproject $todo)
    {
        $todo->delete();
        return redirect('/');
    }
}
