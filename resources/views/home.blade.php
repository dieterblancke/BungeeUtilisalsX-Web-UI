@extends('template.main')

@section('title')
    @lang('messages.homepage.title')
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
