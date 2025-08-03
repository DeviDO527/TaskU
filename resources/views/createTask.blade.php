<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TaskU | Create Task</title>
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
            :items="[
                [
                    'message'=>'',
                    'button'=>'Home',
                    'link'=>'/dashboard'
                ]
            ]"
            ></x-nav-menu>
            <div class="dashboard-main">
                <h1>Create Task</h1>
                <form action="/tasks/create" method="POST">
                    @csrf
                    <div class="form-group">
                        Title<br>
                        <input type="text" id="title" name="title" required><br>
                        Description<br>
                        <textarea id="description" name="description" required></textarea><br>
                        Due date<br>
                        <input type="date" id="due_date" name="due_date" required><br>
                        Category<br>
                        <select id="category" name="category" required>
                            <option value="">Select a category</option>
                            <option value="1">Work</option>
                            <option value="2">Personal</option>
                            <option value="3">Urgent</option>
                            <option value="4">Other</option>
                        </select><br><br>
                        <button type="submit" style="width:100px;">Create Task</button>
                    </div>
                </form>
            <x-footer></x-footer>
        </div>
    </body>
</html>
