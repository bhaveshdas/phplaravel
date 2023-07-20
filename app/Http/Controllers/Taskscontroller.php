<?php

namespace App\Http\Controllers;
// use \App\task;
use Illuminate\Http\Request;

class Taskscontroller extends Controller
{
    //
    public function index(){
        //retrieve all the task and then display them
        $Tasks = \App\Models\task::orderBy('completed_at')->orderBy('id', 'DESC')->get();


        return view('tasks.index', [
            'tasks' =>$Tasks,
        ]);
        
    }

    public function create(){
        return view('tasks.create');
    }

   public function store(){
    $Task = \App\Models\task::create([
        'description' => request('description'),
        ]);

        return redirect('/');
   }
   public function update($id){
    $Task = \App\Models\task::where('id',$id)-> first();
    $Task -> completed_at = now();
    $Task-> save();
    return  redirect('/');
   }
}
