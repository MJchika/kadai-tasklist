<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;  

class tasksController extends Controller
{
    public function index()
    {    $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $tasks = $user->tasks()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'tasks' => $tasks,
            ];
            $data += $this->counts($user);
            return view('tasks.index', $data);
        }else {
            return view('welcome');
        }
    }
     
    public function create()
    {    $tasks = new Task;

        return view('tasks.create', [
            'tasks' => $tasks,
        ]);
    }

  
    public function store(Request $request)
    {   $tasks = new Task;
        $tasks->content = $request->content;
        $tasks->status = $request->status;
        $tasks->user_id = \Auth::id();
        
        $tasks->save();

        $this->validate($request, [
            'status' => 'required|max:10',  
            'content' => 'required|max:1000'
        ]);
         return redirect('/');
    }
     
    public function show($id)
    {
          $tasks = \App\Task::find($id);
        if (\Auth::id() === $tasks->user_id) {
        return view('tasks.show', [
            'tasks' => $tasks,
        ]);}
     return redirect('/');
    }

 public function edit($id)
    {
    $tasks = \App\Task::find($id);
    if (\Auth::id() === $tasks->user_id)
     return view('tasks.edit', [
    'tasks' => $tasks,
                                     ]);
     return redirect('/');         }

 public function update(Request $request, $id)
    {    $this->validate($request, [
            'status' => 'required|max:10', 
        ]);

        $tasks = \App\Task::find($id);
         if (\Auth::id() === $tasks->user_id) {
        $tasks->content = $request->content;
        $tasks->status = $request->status; 
        $tasks->save();
        }
        return redirect('/');
    }
    

        public function destroy($id)
    {
        $tasks = \App\Task::find($id);
        if (\Auth::id() === $tasks->user_id) {
            $tasks->delete();
        }
         return redirect('/');
        }
    }