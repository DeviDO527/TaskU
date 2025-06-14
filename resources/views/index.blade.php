<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio | TaskU</title>
    {{-- Bootstrap 5.3 vía CDN --}}
    <link rel = "stylesheet" href="{{asset('build/assets/styles.css')}}">
</head>
<body>
    <x-navbar
    logo="{{asset('build/assets/Tasku.png')}}"
    message1="Already have an account"
    message2="Dont have an account yet"
    linkButton1="/login"
    button1="Login"
    linkButton2="/signup"
    button2="Signup"
    ></x-navbar>
    <x-card-content></x-card-content>
    <div class="bottom-content">
        <x-card title="Organize tasks" icon="{{asset('build/assets/calendar-week.svg')}}">
            Group and organize your tasks in a simple way.
        </x-card>
        <x-card title="Set deadlines" icon="{{asset('build/assets/clock.svg')}}">
            Easily set deadlines for your tasks.
        </x-card>
        <x-card title="Track progress" icon="{{asset('build/assets/calendar2-check.svg')}}">
            Monitor and analyze your progress on tasks.
        </x-card>
    </div>
</body>
</html>
