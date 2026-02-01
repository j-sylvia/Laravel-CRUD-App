@extends('layouts.app')

@section('content')
<div class="container">
    <h1>New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        @include('tasks._form')

        <button class="btn btn-primary">Create</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection
