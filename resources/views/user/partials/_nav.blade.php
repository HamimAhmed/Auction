

<nav class="main-nav float-right d-none d-lg-block">
    <ul>
        <li class="active"><a href="{{route('home')}}">Home</a></li>

        @auth

        <li><a href="{{route('seller.profile')}}">Profile</a></li>
        <li class="drop-down"><a href="">Join Auction</a>
            <ul>
                <li><a href="{{route('single.show')}}"> Single Auction</a></li>
                <li class="drop-down"><a href="{{route('business.show')}}">Business Auction</a>

                </li>
            </ul>
        </li>



        <li class="drop-down"><a href="">Sell Auction</a>
            <ul>
                <li><a href="{{route('business.auction')}}"> As Business Purpose</a></li>
                <li class="drop-down"><a href="{{route('individual.auction')}}">As Individual Purpose</a>

                </li>
            </ul>
        </li>


            <li><a href="{{route('logout')}}">Logout</a></li>
        @endauth
      @guest
        <li class="drop-down"><a href="">Registration</a>
            <ul>
                <li><a href="{{route('seller.register')}}"> As Seller</a></li>
                <li class="drop-down"><a href="{{route('buyer.register')}}">As Buyer</a>

                </li>
            </ul>
        </li>

        <li><a href="{{route('login')}}">Login</a></li>
      @endguest
    </ul>
</nav>
