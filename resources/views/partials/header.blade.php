<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('product.index') }}">PC SHOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
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
                        <i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>Shopping Cart
                        <span class="badge badge-secondary ml-1">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user mr-1"
                           aria-hidden="true"></i> {{{ isset(Auth::user()->name) ? Auth::user()->name : ' User' }}}
                    </a>
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