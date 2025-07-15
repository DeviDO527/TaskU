<div class="card shadow">
    @foreach($items as $item)
        @if($item['icon'])
            <img src="{{$item['icon']}}" alt="icon" style="width:50px;">
        @endif
        @if($item['title'])
            <h2>{{$item['title']}}</h2>
        @endif
        @if($item['description'])
            <p class="card-p">
                {{$item['description']}}
            </p>
        @endif
        @if($item['category'])
            <h2>{{ $item['category'] }}</h2>
        @endif
</div>
