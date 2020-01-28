@extends('template.main')

@section('title')
    @lang('messages.homepage.title')
@endsection

@section('header')
    <div id="nav-wrapper">
        <h1>@lang('messages.brand')</h1>
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
@endsection

@section('content')
    <div id="user">
        <article>
            <h2>General Information</h2>


        </article>
    </div>
    <div id="recentpunishments">
        <ul>
            <li>
                <article>
                    <h3>@lang('messages.homepage.body.latestbans')</h3>

                    <ul id="recentbans">
                        <!-- recent bans -->
                        <li class="default" style="display: none; visibility: hidden;">
                            <a :href="'/users/' + username">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="'Player Skull of didjee2"
                                         title="'Player Skull of didjee2">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">unknown</span>
                            </a>
                        </li>

                    </ul>
                </article>
            </li>
            <li>
                <article>
                    <h3>@lang('messages.homepage.body.latestmutes')</h3>

                    <ul id="recentmutes">
                        <!-- recent mutes -->
                    </ul>
                </article>
            </li>
            <li>
                <article>
                    <h3>@lang('messages.homepage.body.latestkickwarns')</h3>

                    <ul id="recentkicksandwarns">
                        <!-- recent kicks and warns -->
                    </ul>
                </article>
            </li>
        </ul>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
