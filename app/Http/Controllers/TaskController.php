<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        //$tasks = DB::table('task')->get();
        //return view('tasks.index', compact('tasks'));


        return view('tasks.index', [
            'tasks' => Task::orderBy('id', 'desc')
            //'tasks'=> DB::table('tasks')->orderBy('id', 'desc')
            ->get(),
        ]);
    } 


    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        //DB::table('tasks')->insert([
        //Task::create([
        //    'list' => $request->list,
        //    'nama' =>$request->nama,
        //    'mark' => false,
        //]);
        //apabila semua field mau dimasukkan bisa pakai $request->all()

        $request->validate([
            'list' => ['required'],
            'nama' => ['required']
        ]);
       
        Task::create($request->all());
        //dd($task);

        return back();
    }

    public function edit($id)
    {
        //$task = DB::table('tasks')->where('id', $id)->first();


        $task = Task::find($id);

        return view('tasks.edit', ['task' => $task]);
    }


    public function update(Request $request, $id)
    {
        //DB::table('tasks')->where('id', $id)->update([ 'list' => $request->list ]);
        //DB::table('tasks')->where('id', $id)->update([ 'nama' => $request->nama ]);
        Task::find($id)->update([ 'list' => $request->list ]);
        Task::find($id)->update([ 'nama' => $request->nama ]);
        return redirect('task');
    }

    
    public function destroy($id)
    {
        Task::find($id)->delete();
        //DB::table('tasks')->where('id', $id)->delete();
        //$task->delete();
        return back();
    }
}
