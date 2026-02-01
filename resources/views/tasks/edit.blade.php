@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        @include('tasks._form')

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection
