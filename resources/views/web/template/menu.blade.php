<div class="menu">
    <ul>
        <li>
            <a href="{{ route('web.home') }}" class="{{ request()->routeIs('web.home') ? 'active' : '' }}">
                <div class="hm"><i class="fas fa-house" style="font-size: 35pt;"></i></div>
            </a>
        </li>
        <li>
            <a href="videos.html">
                <div class="video"><i class="videos"></i><i class="videos1"></i></div>
            </a>
        </li>
        <li>
            <a href="{{ route('web.reviews') }}" class="{{ request()->routeIs('web.reviews') ? 'active' : '' }}">
                <div class="cat"><i class="fa-solid fa-masks-theater" style="font-size: 35pt;"></i></div>
            </a>
        </li>
        <li>
            <a href="404.html">
                <div class="bk"><i class="fas fa-star" style="font-size: 35pt;"></i></div>
            </a>
        </li>
        <li>
            <a href="contact.html">
                <div class="cnt"><i class="contact"></i><i class="contact1"></i></div>
            </a>
        </li>
    </ul>
</div>
