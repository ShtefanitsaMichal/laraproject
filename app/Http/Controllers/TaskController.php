<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function task(){
     $tasks = [
        'To do list 1',
        'To do list 2',
        'To do list 3',
        'To do list 4',
        'To do list 5'
    ];
    return view('task', ['tasks'=>$tasks]);
}
}
