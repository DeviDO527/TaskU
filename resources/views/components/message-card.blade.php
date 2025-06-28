<div class=" email-verify shadow">
    @foreach ($items as $item)
        @if($item['title'])
        <h1>{{$item['title']}}</h1>
        @endif
        @if($item['message'])
        <p>{{$item['message']}}</p>
        @endif
        @if($item['button'] && $item['link'])
        <a href="{{$item['link']}}" class="link-Button">{{$item['button']}}</a>
        @endif
    @endforeach
</div>
