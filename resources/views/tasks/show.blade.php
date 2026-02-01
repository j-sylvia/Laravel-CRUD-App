@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $task->title }}</h1>

    <p><strong>Status:</strong> {{ $task->status }}</p>

    <div class="mb-3">{{ $task->description }}</div>
    <p><strong>Due Date:</strong> {{ $task->due_date->format('Y-m-d') }}</p>

    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-secondary">Edit</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-link">Back</a>
</div>
@endsection
