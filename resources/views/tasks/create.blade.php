@extends('layouts.app')

@section('content')
    <h1>Add New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <label>Task Name</label>
        <input type="text" name="task_name" value="{{ old('task_name') }}" required>

        <label>Description</label>
        <textarea name="description" rows="4">{{ old('description') }}</textarea>

        <label>Due Date</label>
        <input type="date" name="due_date" value="{{ old('due_date') }}">

        <button type="submit" class="btn btn-add">Save Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-edit">Cancel</a>
    </form>

    @if($errors->any())
        <div class="alert" style="background:#f8d7da; color:#721c24; margin-top:15px;">
            <ul style="margin:0; padding-left:18px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection