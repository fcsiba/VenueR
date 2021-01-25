<div class="site-navbar">
    <div class="container py-1">
        <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
                <h1 class="mb-0"><a href="http://callingdesk.com.pk/fyp/" class="text-white h2 mb-0"><strong>
                            <img src="{{asset('images/logo2.png')}}" alt="CSGO Howl" style="width:25%"
                                style="height:25%" style="float:right" ;>
                        </strong></a></h1>
                </p>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
                <nav class="site-navigation text-right text-md-right" role="navigation">

                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                            class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
                    </div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <!--<li><a href="buy.html">Buy</a></li> -->
                        <!-- <li><a href="rent.html">Rent</a></li> -->
                        <li class="has-children">
                            <a> Venues</a>
                            <ul class="dropdown arrow-top">
                                <li class="has-children">
                                    <a href="#">Corporate</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('/meeting')}}">Meetings </a></li>
                                        <li><a href="{{url('/training')}}">Training & Courses</a></li>
                                        <li><a href="{{url('/offsite')}}">Offsite </a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a>Private</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('/wedding')}}">Wedding spaces</a></li>
                                        <li><a href="{{url('/halls')}}">Wedding halls</a></li>
                                        <li><a href="{{url('/parties')}}">Small Spaces</a></li>
                                        <li><a href="{{url('/playground')}}">Play grounds</a></li>


                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">The Unusuals</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('/professional')}}">Professional Setups</a></li>
                                        <li><a href="{{url('/unusual')}}">Others</a></li>
                                    </ul>

                                </li>
                            </ul>
                        </li>


                        {{-- <li><a href="blog.html">Event Managers </a></li>   --}}
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                        <li><a href="http://callingdesk.com.pk/venueadmin/admin/login">Venue Login</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
</div>
