<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Task</title>
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
    <h2>Task Details</h2>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">← Back</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <p class="card-text">{{ $task->description }}</p>
            <span class="badge bg-primary">{{ $task->status }}</span>
        </div>
    </div>
</div>
</body>
</html>