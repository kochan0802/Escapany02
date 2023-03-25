<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TasksRequest;  

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('updated_at', 'desc')->get();  
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.detail', compact('task'));
    }

    public function add()
    {
        return view ('tasks.add');
    }

    public function store(TasksRequest $request)
    {
        $result = Task::create([
            'name' =>$request->name,
            'content' => $request->content
        ]);
        
        return redirect()->route('tasks.store');
    }
    
    public function edit($id)
    {
         $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }
    
    public function update(TasksRequest $request, $id)
    {
        $task = Task::find($id);
        $task->fill([
            'name' => $request->name,
            'content' => $request->content,
        ])
        ->save();

        return redirect()->route('tasks.index');
    }
    
    public function delete($id)
    {
        $task = Task::destroy($id);

        return redirect()->route('tasks.index');
    }

}
