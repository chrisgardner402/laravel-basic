@extends('layout')

@section('title', 'Task detail')

@section('content')
    <div class="px-64 mt-4">
        <div class="flex">
            <h1 class="font-bold text-3xl flex-1"> Task</h1>
            <a href="/tasks/{{ $task->id }}/edit"><button class="flex-initial bg-green-500 text-white hover:bg-green-600 px-4 py-1">Edit</button></a>
        </div>
        Title: {{ $task->title }} <small class="float-right">Created at {{ $task->created_at }}</small><br/>
        <small class="float-right">Updated at {{ $task->updated_at }}</small><br/>
        Body
        <div class="border p-3">{{ $task->body }}</div>
    </div>
@endsection
