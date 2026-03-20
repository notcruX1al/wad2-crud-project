<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Task</title>
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
    <h2>Create New Task</h2>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">← Back</a>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="Pending">Pending</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Create Task</button>
    </form>
</div>
</body>
</html>