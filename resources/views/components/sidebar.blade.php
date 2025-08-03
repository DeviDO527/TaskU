<aside class="sidebar short-shadow">
    @if($logo && $linkLogo)
        <div class ="sidebar-header">
            <a href="{{ $linkLogo }}">
                <img class="sidebar-logo" src="{{ $logo }}" alt="Task U Logo" style=" margin-top:-25px; height: 50px; cursor: pointer;">
            </a>
        </div>
    @endif
    <ul class="sidebar-list">
        <li class="sidebar-element">
            <img src="{{asset('build/assets/house-door-fill.svg')}}">
            <a style="text-decoration: none; color: rgb(109, 64, 16);" href="/dashboard">
                Dashboard
            </a>
        </li>
        <li class="sidebar-element">
            <img src="{{asset('build/assets/list-task.svg')}}">
            <form>
                @csrf
                My Tasks
            </form>
        </li>
        <li class="sidebar-element">
            <img src="{{asset('build/assets/layout-wtf.svg')}}">
            <form>
                @csrf
                Categories
            </form>
        </li>
        <li class="sidebar-element">
            <img src="{{asset('build/assets/calendar.svg')}}">
            <form>
                @csrf
                schedule
            </form>
        </li>
        <li class="sidebar-element">
            <img src="{{asset('build/assets/person-fill.svg')}}">
            <form>
                @csrf
                Profile
            </form>
        </li>
        <li class="sidebar-element">
            <img src="{{asset('build/assets/nut-fill.svg')}}">
            <form>
                @csrf
                Settings
            </form>
        </li>
    </ul>
</aside>
