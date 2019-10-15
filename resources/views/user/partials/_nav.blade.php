<nav class="main-nav float-right d-none d-lg-block">
    <ul>
        <li class="active"><a href="{{route('home')}}">Home</a></li>
        <li><a href="">Auction</a></li>
        <li><a href="">Registration</a></li>
        <li><a href="{{route('auction')}}">Sell Auction</a></li>
        <li><a href="{{route('login')}}">Login</a></li>
        <li class="drop-down"><a href="">Drop Down</a>
            <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="drop-down"><a href="#">Drop Down 2</a>
                    <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
            </ul>
        </li>
        <li class="drop-down"><a href="">Registration</a>
            <ul>
                <li><a href="{{route('seller.register')}}"> As Seller</a></li>
                <li class="drop-down"><a href="{{route('buyer.register')}}">As Buyer</a>

                </li>
            </ul>
        </li>
        <li><a href="">Contact Us</a></li>
    </ul>
</nav>
