<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('web.index') }}">
        {{--        <img src="{{ asset('slider/logo.jpeg') }}" width="100px" height="50px">--}}
        Rượu Việt
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-trigger="#navbarNav" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-icon"><i class="fas fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="offcanvas-header mt-3">
            <p class="btn-close float-left"><i class="fas fa-times"></i></p>
            <p class="text-black py-1"></p>
        </div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('web.qoatet') }}">HỘP QUÀ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('web.ruou-vang') }}">VANG/CHAMPAGNE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('web.whisky') }}">WHISKY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('web.vodkal') }}">VODKA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('web.cognac') }}">COGNAC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">RƯỢU PHA CHẾ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
            </li>
        </ul>
        <ul class="navbar-nav nav-item-cart">
            <li class="nav-item mr-4" id="cart"><a href="{{ route('cart.index') }}" >Giỏ Hàng <span class="text-primary">{{ session('Cart') ? session('Cart')->totalQuanty : " " }}</span></a></li>
        </ul>
    </div>
</nav>
