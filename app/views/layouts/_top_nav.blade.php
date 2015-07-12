<header class="top-navigation">
    <div class="top-navigation-logo">
        <a href="{{ action('HomeController@getIndex') }}">
            <img class="logo" src="/images/laravel-io-logo.png">
        </a>
    </div>
    <nav>
        <ul>
            <li>
                <a class="{{ Request::is('forum*') ? 'active' : null }}" href="{{ action('ForumThreadsController@getIndex') }}">Forum</a>
            </li>
            <li>
                <a href="https://larajobs.com?partner=28">Jobs</a>
            </li>
            <li>
                <a class="{{ Request::is('chat*') ? 'active' : null }}" href="{{ action('ChatController@getIndex') }}">Live Chat</a>
            </li>
            <li>
                <a href="{{ action('PastesController@getCreate') }}">Pastebin</a>
            </li>
            <li>
                <a href="http://www.laravelpodcast.com">Podcast</a>
            </li>

            @if (Auth::check() && Auth::user()->hasRole('manage_users'))
                <li>
                    <a href="{{ action('Admin\UsersController@getIndex') }}">Admin</a>
                </li>
            @endif
        </ul>
    </nav>
    <ul class="user-navigation">
        @if (Auth::check())
            <li><a href="{{ url($currentUser->profileUrl) }}">{{ $currentUser->name }}</a></li>
            <li><a class="button" href="{{ action('AuthController@getLogout') }}">Logout</a></li>
        @else
            <li><a class="button" href="{{ action('AuthController@getLogin') }}">Login with GitHub</a></li>
        @endif
    </ul>
</header>
