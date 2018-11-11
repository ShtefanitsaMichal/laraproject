<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
        public function index()
    {
    return view('tasks.index')
    ->with('tasks', Task::all());
    }
//Example 3-27. Common form input controller method
        public function store()
    {
    $task = new Task;
    $task->title = Input::get('title');
    $task->description = Input::get('description');
    $task->save();
    return redirect('tasks');
    }
}
