<div id="nav-wrapper">
    <h1><a href="{{ route('home') }}">@lang('messages.brand')</a></h1>
    <nav>
        <ul>
            <li><a href="{{ route('users') }}">@lang('messages.navigation.users')</a></li>
            <li><a href="{{ route('bans') }}">@lang('messages.navigation.bans')</a></li>
            <li><a href="{{ route('mutes') }}">@lang('messages.navigation.mutes')</a></li>
            <li><a href="{{ route('kicks') }}">@lang('messages.navigation.kicks')</a></li>
            <li><a href="{{ route('warns') }}">@lang('messages.navigation.warns')</a></li>
            <li><a href="{{ route('punishmentactions') }}">@lang('messages.navigation.punishmentactions')</a></li>
        </ul>
    </nav>
</div>

<div id="welcome">
    <h2>@lang('messages.homepage.header.title')</h2>
    <p>
        @lang('messages.homepage.header.text')
    </p>
</div>

<div class="wrapper"></div>
