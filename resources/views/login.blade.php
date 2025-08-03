<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TaskU | Login</title>
        {{-- Bootstrap 5.3 vía CDN --}}
        <link rel = "stylesheet" href="{{asset('build/assets/styles.css')}}">
    </head>
    <body>
        <x-nav-menu
            logo="{{asset('build/assets/Tasku.png')}}"
            linkLogo="/"
            :items="[
                [
                    'message' => 'Dont have an account yet',
                    'button' => 'Signup',
                    'link' => '/signup'
                ],
                [
                    'message' => '',
                    'button'=> 'Home',
                    'link' => '/'
                ]
            ]"
        ></x-nav-menu>
        <div class="login-form-content">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <x-login-form></x-login-form>
        </div>
        <x-footer></x-footer>
    </body>
