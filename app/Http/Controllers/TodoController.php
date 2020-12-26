<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::select('task','priority','deadline','status','users.name')
            ->join('users', 'users.id', '=', 'todos.user_id')
            ->get();
        return view('todo/index',compact('todos'));
    }

    public function register($name) {
        $todos = Todo::where('name','=',$name)->get();
        return view('todo/register',compact('todos','name'));


    }

    public function create() {
        return view('todo/create');
    }

    public function edit($id) {
        $todo = Todo::where('id','=',$id)->first();

        return view('todo/edit',compact('todo'));
    }

    public function update(Request $request,$id) {
        $task = $request->task;
        $priority = $request->priority;
        $deadline = $request->deadline;
        $status = $request->status;
        $user_id = Auth::id();
        $todo = Todo::where('id','=',$id)->first();


        $todo->update([
            'task'=> $task,
            'priority'=> $priority,
            'deadline'=> $deadline,
            'status'=> $status,
            'user_id'=> $user_id
        ]);

        return redirect('/todo');

    }


    public function store(Request $request) {
        $task = $request->task;
        $priority = $request->priority;
        $deadline = $request->deadline;
        $status = $request->status;
        $user_id = Auth::id();
        $name = Auth::user()->name;


        Todo::create([
            'task'=> $task,
            'priority'=> $priority,
            'deadline'=> $deadline,
            'status'=> $status,
            'user_id'=> $user_id,
            'name'=> $name
        ]);

        return redirect('/todo');
    }

    public function delete($id) {

        $todo = Todo::where('id','=',$id)->first();

        $todo->delete();

        return redirect('/todo');

    }

}




















