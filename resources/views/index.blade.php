<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskU | Home</title>
    {{-- Bootstrap 5.3 vía CDN --}}
    <link rel = "stylesheet" href="{{asset('build/assets/styles.css')}}">
</head>
<body>
    <x-nav-menu
    logo="build/assets/Tasku.png"
    :items="[
        [
            'message'=>'Already have an account',
            'button'=>'Login',
            'link'=>'/login'
        ],
        [
            'message'=>'Dont have an account yet',
            'button'=>'Sign up',
            'link'=>'/signup'
        ]
    ]"
    ></x-nav-menu>
    <x-card-content></x-card-content>
    <div class="bottom-content">
        <x-card
            :items="[
                [
                    'icon' => asset('build/assets/calendar-week.svg'),
                    'title' => 'Organize tasks',
                    'paragraph' => 'Group and organize your tasks in a simple way.',
                ]
            ]">
        </x-card>
        <x-card
            :items="[
                [
                    'icon' => asset('build/assets/clock.svg'),
                    'title' => 'Set deadlines',
                    'paragraph' => 'Easily set deadlines for your tasks.',
                ]
            ]">
        </x-card>
        <x-card
            :items="[
                [
                    'icon' => asset('build/assets/calendar2-check.svg'),
                    'title' => 'Track progress',
                    'paragraph' => 'Monitor and analyze your progress on tasks.',
                ]
            ]"
        ></x-card>
    </div>
    <x-footer></x-footer>
</body>
</html>
