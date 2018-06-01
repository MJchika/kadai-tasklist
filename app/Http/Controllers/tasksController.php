<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tasks;  

class tasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tasks = tasks::all();

        return view('tasks.index', [
            'tasks' => $tasks,
              ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     
    public function create()
    {
         $tasks = new tasks;

        return view('tasks.create', [
            'tasks' => $tasks,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $tasks = new tasks;
        $tasks->content = $request->content;
        $tasks->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $tasks = tasks::find($id);

        return view('tasks.show', [
            'tasks' => $tasks,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function edit($id)
    {
        $tasks = tasks::find($id);

        return view('tasks.edit', [
            'tasks' => $tasks,
        ]);
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
        $tasks = tasks::find($id);
        $tasks->content = $request->content;
        $tasks->save();

        return redirect('/');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
   public function destroy($id)
    {
        $tasks = tasks::find($id);
        $tasks->delete();

        return redirect('/');
    }
    // omission

}

   