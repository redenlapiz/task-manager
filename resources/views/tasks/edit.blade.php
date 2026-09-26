@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Task Name</label>
        <input type="text" name="task_name" value="{{ old('task_name', $task->task_name) }}" required>

        <label>Description</label>
        <textarea name="description" rows="4">{{ old('description', $task->description) }}</textarea>

        <label>Due Date</label>
        <input type="date" name="due_date" value="{{ old('due_date', $task->due_date) }}">

        <label>Status</label>
        <select name="status">
            <option value="Pending" {{ $task->status === 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Completed" {{ $task->status === 'Completed' ? 'selected' : '' }}>Completed</option>
        </select>

        <button type="submit" class="btn btn-add">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-edit">Cancel</a>
    </form>
@endsection