<nav class = "nav-menu shadow">
    <div style="margin-right: auto;">
        @if($linkLogo)
            <a href="{{ $linkLogo }}">
                <img src="{{ $logo }}"alt="Task U Logo" style="height: 50px;cursor:pointer;">
            </a>
        @else
            <img src="{{ $logo }}"alt="Task U Logo" class="navbar-brand" style="height: 50px;">
        @endif

    </div>
    <div class="button-content">
        @foreach($items as $item)
            @if($item['message'])
                <h5 style="color:rgb(95, 95, 95);">{{$item['message']}}</h5>
            @endif
            @if($item['button']&&$item['link'])
                @if($item['button'] == 'Logout')
                    <form method="POST" action="{{ $item['link'] }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="link-Button">
                            {{ $item['button'] }}
                        </button>
                    </form>
                @else
                    <a class="link-Button" href={{$item['link']}}>
                    {{$item['button']}}
                    </a>
                @endif
            @endif
        @endforeach
    </div>
</nav>
