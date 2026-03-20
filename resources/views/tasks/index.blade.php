<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        display: flex;
        align-items: center;
        min-height: 90vh;
    }

    .container {
        border: 2px solid #7c7b7b;
        border-radius: 8px;
        padding: 20px;
        max-width: 900px;
    }

    @media (max-width: 768px) {
        .container {
            width: 90%;
            padding: 15px;
        }
        
    }
</style>
<body>
<div class="container mt-5">
    <h2>Task Management System</h2>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">+ Add New Task</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->status }}</td>
                <td>
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tasks->links() }}
</div>
</body>
</html>