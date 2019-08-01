@extends('template.main')

@section('header')
    <div id="nav-wrapper">
        <h1>@lang('messages.brand')</h1>
        <nav>
            <ul>
                <li><a href="#">@lang('messages.navigation.users')</a></li>
                <li><a href="#">@lang('messages.navigation.bans')</a></li>
                <li><a href="#">@lang('messages.navigation.mutes')</a></li>
                <li><a href="#">@lang('messages.navigation.kicks')</a></li>
                <li><a href="#">@lang('messages.navigation.warns')</a></li>
                <li><a href="#">@lang('messages.navigation.punishmentactions')</a></li>
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
@endsection()

@section('content')
    <div id="recentpunishments">
        <ul>
            <li>
                <article>
                    <h3>@lang('messages.homepage.body.latestbans')</h3>

                    <ul>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                    </ul>
                </article>
            </li>
            <li>
                <article>
                    <h3>@lang('messages.homepage.body.latestmutes')</h3>

                    <ul>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>
                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                    </ul>
                </article>
            </li>
            <li>
                <article>
                    <h3>@lang('messages.homepage.body.latestkickwarns')</h3>

                    <ul>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>

                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>

                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>

                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                        <li>
                            <a href="//stats.staging.centrixpvp.eu/punishments/player/XxSoulCreeperxX">
                                <figure>
                                    <img src="//cravatar.eu/head/didjee2/32" alt="Player Skull" title="Player Skull">

                                    <figcaption>
                                        <span class="name">didjee2</span>
                                    </figcaption>
                                </figure>

                                <span class="date">2019-07-31 21:26:15</span>
                            </a>
                        </li>
                    </ul>
                </article>
            </li>
        </ul>
    </div>
@endsection
