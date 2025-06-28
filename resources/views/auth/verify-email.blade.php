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
    <div style="justify-items:center;">
        <div class="email-verify-content shadow">
            <img src="{{ asset('build/assets/Tasku.png') }}" style="width:180px; margin-bottom:30px;">
            <div class="email-verify">
                <h1>Verify your e-mail address</h1>
                <p style="color:  slategray;">Hello {{auth()->user()->name}}.
                    We have sent you an email verification to: {{auth()->user()->email}}.
                    Before proceeding, please click on the verification link.
                    If you don't see it in your inbox, check your SPAM or junk folder.</p>
                <div class="button-content">
                    <a href="{{ route('verification.send') }}" class="link-Button">Resend e-mail</a>
                    <a href="/login" class="link-Button">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>
