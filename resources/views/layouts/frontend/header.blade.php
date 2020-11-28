<header>
    <div id="logo_home">
        <h1><a href="{{ url('/') }}" title="{{ config('app.name', 'Laravel') }}">{{ config('app.name', 'Laravel') }}</a></h1>
    </div>

    <a id="menu-button-mobile" class="cmn-toggle-switch cmn-toggle-switch__htx" href="javascript:void(0);"><span>Menu mobile</span></a>
    <nav class="main_nav">
        <ul class="nav nav-tabs">
            <li><a href="{{ url('questions') }}">{{ __('home.register') }}</a></li>            
        </ul>
    </nav>
</header>