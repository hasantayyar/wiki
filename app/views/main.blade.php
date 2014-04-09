@extends('foundation')

@section('content')
<nav class="top-bar" data-topbar>
    <ul class="title-area">
        <li class="name">
            <h1>
                <a href="#">
                    @if(isset($siteTitle))
                    {{{ h1 }}}
                    @else
                    Welcome to the Wiki
                    @endif
                </a>
            </h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <li class="active"><a href="#">Right Button Active</a></li>
            <li class="has-dropdown">
                <a href="#">Right Button Dropdown</a>
                <ul class="dropdown">
                    <li><a href="#">First link in dropdown</a></li>
                </ul>
            </li>
        </ul>

        <!-- Left Nav Section -->
        <ul class="left">
            <li><a href="#">Left Nav Button</a></li>
        </ul>
    </section>
</nav>
<aside class="left-off-canvas-menu">
    <ul class="off-canvas-list">
        @yield('leftNav')
    </ul>
</aside>

<section class="main-section">
    @yield('main')
</section>

<a class="exit-off-canvas"></a>

@stop