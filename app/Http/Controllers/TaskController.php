<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{

    public function index(Request $request)
    {
        if ($request->search) {
            $task = Task::where('task', 'LIKE', "%$request->search%")->get();
            return $task;
        }
        $task = Task::paginate(3);
        return view('task.index', [
            'data' => $task
        ]);
}

    public function show($id) {
        $task = Task::find($id);
        return $task;
    }

    public function create(){
        return view('task.create');
    }

    public function store(Request $request) {

        Task::create([
            'tasks' => $request->tasks,
            'user' => $request->user
        ]);

        return 'Success';
    }

    public function edit($id){
        return view('task.edit');
    }

    public function update(Request $request, $id){
        $task = Task::find($id);
        $task->update([
            'tasks' => $request->tasks,
            'user' => $request->user
        ]);
        return 'Success';
    }

    public function delete($id) {
        $task = Task::find($id)
            ->delete();
        return 'Success';
    }
}
