<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskU | Dashboard</title>
    <link rel = "stylesheet" href="{{asset('build/assets/styles.css')}}">
</head>
<body>
    <x-nav-menu
    logo="build/assets/Tasku.png"
    :items="[
        [
            'message'=>'',
            'button'=>'Logout',
            'link'=>'/logout'
        ]
    ]"
    ></x-nav-menu>
    <div class="dashboard-content">
        <div style="height:570px;">
            <x-sidebar></x-sidebar>
        </div>
        <div class="dashboard-main">
            <h1>Welcome to your Dashboard</h1>
            <p>Here you can manage your tasks, view statistics, and more.</p>
            @if($tasks->isEmpty())
                <p>You have no tasks yet. Start by creating a new task!</p>
                <a class="link-Button">Create Task</a>
            @else
                <p>You have {{ $tasks->count() }} Tasks.</p>
                @foreach($tasks as $task)
                    <x-task-card
                    :items="[
                        [
                            'title'=>'{{ $task->title }}',
                            'description'=>'{{ $task->description }}',
                        ]
                    ]"
                    >

                    </x-task-card>
                @endforeach
            @endif
        </div>
    </div>
    <x-footer></x-footer>
</body>
