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
    <div class="combiner">
        <h2>@lang('messages.homepage.header.title')</h2>
        <p>
            @lang('messages.homepage.header.text')
        </p>
    </div>
    @if(config('settings.counter.enabled'))
        <div class="counter">
            <p class="count">JOIN <span>0</span> ONLINE PLAYERS</p>
            <p class="ip">SERVER IP » <span>{{ config('settings.counter.address') }}</span></p>
        </div>
    @endif
</div>

<div class="wrapper"></div>
