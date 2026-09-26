@extends('layouts.app')

@section('content')
    <h1>Personal Task Manager</h1>
    <p>Track your daily routine efficiently</p>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <a href="{{ route('tasks.create') }}" class="btn btn-add">+ Add New Task</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Task Name</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $task)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $task->task_name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>
                        <span class="{{ $task->status === 'Pending' ? 'status-pending' : 'status-completed' }}">
                            {{ $task->status }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('tasks.updateStatus', $task->id) }}" method="POST" class="inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-status">
                                Mark as {{ $task->status === 'Pending' ? 'Completed' : 'Pending' }}
                            </button>
                        </form>

                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline"
                              onsubmit="return confirm('Delete this task?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align:center;">No tasks found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection