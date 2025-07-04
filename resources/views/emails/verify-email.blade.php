<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TaskU | Signup</title>
        {{-- <link rel = "stylesheet" href="{{asset('build/assets/styles.css')}}"> --}}
        <style>
            .email-notification-content{
                background-color: rgb(255, 223, 208);
                width:100%;
                border-radius: 10px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin:0;
                padding-inline: 5px;
            }
            .email-notification{
                display: flex;
                flex-direction: column;
                text-align: justify;
                align-items: center;
                width: 90%;
                background-color: white;
                font-family: Arial, Helvetica, sans-serif;
                margin-block: 30px;
            }
            .watermark{
                width:50px;
                opacity: 0.1;
                margin-top: 20px;
            }
            .email-notification p{
                color:lightslategrey;
                word-break: break-all;
            }
            .copy-link{
                color:lightslategray;
                word-break: break-all;
                font-size: smaller;
                margin-inline: 15px;
            }
            .link-content{
                word-break: break-all;
            }
            .link-Button{
                display: inline-flex;
                justify-content: center;
                align-items: center;
                text-decoration: none;
                color: white;
                font-weight: 400;
                border-radius: 6px;
                background-color: black;
                height: 36px;
                padding-inline: 10px;
                cursor: pointer;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                transition: background-color 0.2s ease-in-out, transform 0.2s ease-in-out;
            }
            .link-Button:hover{
                transform: scale(1.06);
                box-shadow: 0 8px 12px rgba(0,0,0,0.3);
                opacity: 0.9;
            }
            .shadow{
               box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            }
        </style>
    </head>
    <body>
        <div class="email-notification-content">
            <img class="watermark" src="{{ asset('build/assets/TaskuBlack.png') }}" href="localhost:8000/" style="width:180px; margin-bottom:30px;">
            <div class="email-notification shadow">
                <h3>Hello!</h3>
                <h1 style="color:orangered;">{{auth()->user()->name;}}</h1>
                <p>Please click the button bellow to verify your email address.</p><br>
                <a class="link-Button" href="{{ $url }}">Verify email address</a><br>
                <p>If you did not create an account, no further action is required.<br><br>
                    Regards,<br>
                    TaskU Team.
                </p><br>
                <p class="copy-link">
                    If you're having trouble clicking the "Verify Email Address" button,
                    copy and paste the URL bellow into your web browser:
                    <a style="color:cornflowerblue;" href="{{ $url }}">{{ $url }}</a>
                </p>
            </div>
            <div style="margin-bottom: 20px; font-family: Arial, Helvetica, sans-serif; font-size: small; opacity:0.1;">
                &copy; {{ date('Y') }} TaskU. All rights reserved.
            </div>
        </div>
    </body>
</html>
