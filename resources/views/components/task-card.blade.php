<div class="card shadow">
    @foreach($items as $item)
        @if(!empty($item['icon']))
            <img src="{{ $item['icon'] }}" alt="icon" style="width:50px;">
        @endif

        @if(!empty($item['title']))
            <h2>{{ $item['title'] }}</h2>
        @endif

        @if(!empty($item['description']))
            <p class="card-p">
                {{ $item['description'] }}
            </p>
        @endif

        @if(!empty($item['category']))
            <p>Category: {{ $item['category'] }}</p>
        @endif
    @endforeach
</div>
