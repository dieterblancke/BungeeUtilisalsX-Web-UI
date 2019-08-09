@extends('template.main')

@section('title')
    @lang('messages.homepage.title')
@endsection

@section('content')
    <div id="newusers">
        <article>
            <h3>@lang('messages.users.newusers')</h3>

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
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
