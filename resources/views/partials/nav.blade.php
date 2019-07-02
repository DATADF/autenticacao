<nav>
    <ul>
        <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/">Home</a></li> <!--{{ setActive('home') }}-->
        <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="/about">About</a></li>
        <li class="{{ request()->routeIs('services') ? 'active' : '' }}"><a href="/services">Services</a></li>
        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>

    </ul>
</nav>
