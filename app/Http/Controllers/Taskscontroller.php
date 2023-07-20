<?php

namespace App\Http\Controllers;
use App\task;
use Illuminate\Http\Request;

class Taskscontroller extends Controller
{
    //
    public function index(){
        return view('tasks.index');
    }

    public function create(){
        return view('tasks.create');
    }

   public function store(){
    $Task = task::create([
        'description' => request('description'),
        ]);
        return dd($Task);
   }
}
