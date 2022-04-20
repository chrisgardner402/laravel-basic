<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->where('user_id', auth()->id())->get();
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $values = request(['title', 'body']);
        $values['user_id'] = auth()->id();
        $task = Task::create($values);
        return redirect('/tasks/'.$task->id);
    }

    public function show(Task $task)
    {
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    public function update(Task $task)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $task->update(request(['title', 'body']));
        return redirect('/tasks/'.$task->id);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }
}
