<!-- Navigation -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <a class="navbar-brand" href="{{ route('product.index') }}">PC SHOP</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.shoppingCart') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                        <span class="badge badge-pill badge-default">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> {{{ isset(Auth::user()->name) ? Auth::user()->name : ' User' }}}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @if(Auth::check())
                            <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                        @else
                            <a class="dropdown-item" href="{{ route('register') }}">SignUp</a>
                            <a class="dropdown-item" href="{{ route('login') }}">SignIn</a>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>