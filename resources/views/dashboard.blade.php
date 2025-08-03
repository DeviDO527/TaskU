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
    <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; height: 100vh;">
        <x-sidebar
        logo="{{ asset('build/assets/Tasku.png') }}"
        linkLogo="/dashboard"
        ></x-sidebar>
        <x-nav-menu
        class="d-nav-menu shadow"
        {{-- logo="build/assets/Tasku.png" --}}
        :items="[
            [
                'message'=>'',
                'button'=>'Logout',
                'link'=>'/logout'
            ]
        ]"
        ></x-nav-menu>
        <div class="dashboard-main">
            <h1>Welcome to your Dashboard</h1>
            <p>Here you can manage your tasks, view statistics, and more.</p><br><br>
            @if($tasks->isEmpty())
                <p>You have no tasks yet. Start by creating a new task!</p>
                <a href="/tasks"><img class="task-create-icon" src="{{ asset('build/assets/calendar2-plus-fill-orange.svg') }}"></a>
            @else
                <p>You have {{ $tasks->count() }} Tasks.</p>
                @foreach($tasks as $task)
                    <x-task-card
                        :items="[
                            [
                                'title' => $task->title,
                                'description' => $task->description,
                                'category' => $task->category->name ?? 'No category'
                            ]
                        ]"
                    />
                @endforeach
            @endif
            <a href="/tasks"><img class="task-create-icon" src="{{ asset('build/assets/calendar2-plus-fill-orange.svg') }}"></a>
        </div>
    </div>
    <x-footer></x-footer>
</body>
