<!DOCTYPE html>
<html lang="en">

<head>
    <title>Professional space</title>
    @include('includes.css')

</head>

<body>
    <div class="site-loader"></div>


    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        @include('includes.navbar')


    </div>

    <div class="slide-one-item home-slider owl-carousel">

        <div class="site-blocks-cover overlay" style="background-image: url(images/PS/cover.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <!--<span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">For Rent</span> -->
                        <h1 class="mb-2">Professional setups</h1>
                        <p class="mb-5"><strong class="h5">
                                <p> Professional setups are just a click away. Setups include different shoot locations,
                                    music composition room and much more
                            </strong></p>
                        <!-- <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">See Details</a></p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url(images/PS/cover\ 1.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">

                        <h1 class="mb-2">Professional setups</h1>
                        <p class="mb-5"><strong class="h5">
                                <p> Professional setups are just a click away. Setups include different shoot locations,
                                    music composition room and much more
                            </strong></p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="site-section site-section-sm pb-0">
        <div class="container">
            <div class="row">
                <form class="form-search col-md-12" method="post" action="{{ url('/professional_search') }}"  style="margin-top: -100px;">
                    {{ csrf_field() }}
                    <div class="row  align-items-end">
                        <div class="col-md-3">
                            <label for="list-types">Types</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="types" id="list-types" class="form-control d-block rounded-0">
                                    <option value="-1">All</option>
                                   @foreach ($subtype as $item)
                                        <option value="{{$item->id}}">{{$item->name}} </option>
                                   @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="offer-types">Price/hr</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="price" id="offer-types" class="form-control d-block rounded-0">
                                    <option value="1">All</option>
                                    <option value="2">0-5000</option>
                                    <option value="3">5000-10000</option>
                                    <option value="4">10000-20000</option>
                                    <option value="5">20000+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="select-city">Accomodation</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="capacity" id="select-city" class="form-control d-block rounded-0">
                                    <option value="1">All</option>
                                    <option value="2">0-300 </option>
                                    <option value="3">300-500</option>
                                    <option value="4">500+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input type="submit" class="btn btn-primary btn-wide btn-large explorebtn" value="Search">
                        </div>
                    </div>
                </form>
            </div>
    
            
        </div>
    </div>

    <div class="site-section site-section-sm bg-light">
        <div class="container">

            <div class="row mb-5">
                @foreach ($venue as $item)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="property-entry h-100">
                        <a href="{{url('/professional/detail/'.$item->id)}}" class="property-thumbnail">
                            <div class="offer-type-wrap">
                            </div>
                            <img src="http://callingdesk.com.pk/venueadmin/adminfyp/storage/app/public/img/{{$item->image}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                            <h2 class="property-title"><a
                                    href="{{url('/professional/detail/'.$item->id)}}">{{$item->name}}</a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>
                                {{$item->address}} </span>
                            <strong
                                class="property-price text-primary mb-3 d-block text-success">{{$item->subtype->name}}</strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Size/Yards</span>
                                    <span class="property-specs-number">{{$item->size}} </span>

                                </li>
                                <li>
                                    <span class="property-specs">Accomodation</span>
                                    <span class="property-specs-number">{{$item->accomodation}}</span>

                                </li>
                                <li>
                                    <span class="property-specs">Price/hr</span>
                                    <span class="property-specs-number">{{$item->price}} </span>

                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>

        <div class="d-flex justify-content-center">
            {!! $venue->links("pagination::bootstrap-4") !!}
        </div>



    </div>


    @include('includes.footer')

    @include('includes.js')

</body>

</html>
