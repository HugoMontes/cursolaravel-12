<div class="menu">
    <ul>
        <li>
            <a href="{{ route('web.home') }}" class="{{ request()->routeIs('web.home') ? 'active' : '' }}">
                <div class="hm"><i class="fas fa-house" style="font-size: 34pt;"></i></div>
            </a>
        </li>
        <li>
            <a href="videos.html">
                <div class="video"><i class="fa-solid fa-circle-play" style="font-size: 34pt;"></i></div>
            </a>
        </li>
        <li>
            <a href="{{ route('web.reviews') }}" class="{{ request()->routeIs('web.reviews') ? 'active' : '' }}">
                <div class="cat"><i class="fa-solid fa-masks-theater" style="font-size: 34pt;"></i></div>
            </a>
        </li>
        <li>
            <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">
                <div class="cnt"><i class="fa-solid fa-right-to-bracket" style="font-size: 34pt;"></i></div>
            </a>
        </li>
    </ul>
</div>
