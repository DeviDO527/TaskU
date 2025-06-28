<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskU | Signup</title>
    {{-- Bootstrap 5.3 vía CDN --}}
    <link rel = "stylesheet" href="{{asset('build/assets/styles.css')}}">
</head>
<body>
    <x-nav-menu
    logo="{{asset('build/assets/Tasku.png')}}"
    linkLogo="/"
    :items="[
        [
            'message' => 'Already have an account',
            'button' => 'Login',
            'link' => '/login'
        ],
        [
            'message' => '',
            'button'=> 'Home',
            'link' => '/'
        ]
    ]"
    ></x-nav-menu>
    <div class="form-content">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <x-register-form></x-register-form>
    </div>
</body>

