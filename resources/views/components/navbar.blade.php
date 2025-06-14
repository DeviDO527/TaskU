<nav class = "nav-menu shadow">
        <div>
            @if($linkLogo)
            <a href="{{$linkLogo}}">
                <img src="{{$logo}}"alt="Task U Logo" class="navbar-brand" style="height: 50px;cursor:pointer;">
            </a>
            @else
            <img src="{{$logo}}"alt="Task U Logo" class="navbar-brand" style="height: 50px;">
            @endif

        </div>
        <div class="button-content">
            @if($message1)
            <h5 style="color:rgb(95, 95, 95);">{{$message1}}</h5>
            @endif
            @if($linkButton1)
            <button>
                <a class="link-Button" href={{$linkButton1}}>
                    {{$button1}}
                </a>
            </button>
            @endif
            @if($message2)
            <h5 style="color:rgb(95, 95, 95);">{{$message2}}</h5>
            @endif
            @if($linkButton2)
            <button>
                <a class="link-Button" href={{$linkButton2}}>
                    {{$button2}}
                </a>
            </button>
            @endif
        </div>
    </nav>
