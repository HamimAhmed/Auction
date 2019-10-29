<nav class="main-nav float-right d-none d-lg-block">
    <ul>
        <li class="active"><a href="{{route('home')}}">Home</a></li>

        @auth


            @if(auth()->user()->role == 'seller')



                <li class="drop-down"><a href="">Sell Auction</a>
                    <ul>

                        <li class="drop-down"><a href="{{route('auction')}}">Auction Form</a>

                        </li>
                    </ul>
                <li>
                    <a href="{{route('profile')}}" class="fa fa-user">{{auth()->user()->seller->first_name}}</a>
                </li>

            @elseif(auth()->user()->role == 'buyer')

                <li class="drop-down"><a href="">Join Auction</a>
                    <ul>
                        <li>
                            <a href="{{route('auction.show')}}"> Single Auction</a>
                        </li>

                    </ul>
                </li>
                <li><a href="{{route('profile')}}">{{auth()->user()->buyer->first_name}}</a>
            @endif

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
