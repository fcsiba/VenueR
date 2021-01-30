<!DOCTYPE html>
<html lang="en">

<head>
    <title> VenueR </title>

    @include('includes.css')
</head>

<body>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Search Space</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
                <form  method="post" action="{{ url('/search_space') }}">
                    {{ csrf_field() }}
                    <h5><b>Venue Type</b></h5>
                    <p>Select the venue you are looking for</p>


                    <select class="form-control" name="mtype" id="type" >
                        
                            <option value="">Select</option>
                            @foreach ($type as $item)
                            <option  value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                    </select>
                    <br>
                    <h5><b>Select Price</b></h5>
                    <p>Select your range</p>


                    <select name="price" id="location" class="form-control" >
                        <option value="0">Select</option>
                        <option value="1">All</option>
                        <option value="2">0-5000</option> 
                        <option value="3">5000-10000</option>
                        <option value="4">10000-20000</option>
                        <option value="5">20000+</option>

                    </select>
                    <br>
                    <h5><b>Accomodation</b></h5>
                    <p>Select number of people</p>

                    <select name="capacity" id="accommodation" class="form-control" >
                        <div class="select-wrap">
                            <option value="0">Select</option>
                            <option value="1">All</option>
                            <option value="2">0-300 </option>
                            <option value="3">300-500</option>
                            <option value="4">500+</option>
                        </div>
                    </select>
                    <br>
                    <button id="" style="margin-top: 10px" class="btn btn-primary">Search</button>
                </form>
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
    </div>

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

        <div class="slide-one-item home-slider owl-carousel">

            <div class="site-blocks-cover overlay" style="background-image: url(images/CS/meeting\ cover.png);"
                data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-12">
                            <h1 class="mb-2">Events Made Easy</h1>
                            <p class="mb-5"><strong class="h5">
                                    <p>Organise the best in-person and hybrid events with VenueR. Make booking your
                                        event easy & hassle free.<br><br> Browse 1000s of unique venues and secure competitive prices.</h2>
                                </strong></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="site-blocks-cover overlay" style="background-image: url(images/Party/cover\ 2.jpg);"
                data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-12">

                            <h1 class="mb-2">Events Made Easy</h1>
                            <p class="mb-5"><strong class="h5">
                                    <p>Organise the best in-person and hybrid events with VenueR. Make booking your
                                        event easy & hassle free.<br><br> Browse 1000s of unique venues and secure competitive prices.</h2>
                                </strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-blocks-cover overlay" style="background-image: url(images/PG/badminton1.jpg);"
                data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-12">

                            <h1 class="mb-2">Events Made Easy</h1>
                            <p class="mb-5"><strong class="h5">
                                    <p>Organise the best in-person and hybrid events with VenueR. Make booking your
                                        event easy & hassle free.<br><br> Browse 1000s of unique venues and secure competitive prices.</h2>
                                </strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-blocks-cover overlay" style="background-image: url(images/halls/cover\ 2.jpg);"
                data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-12">

                            <h1 class="mb-2">Events Made Easy</h1>
                            <p class="mb-5"><strong class="h5">
                                    <p>Organise the best in-person and hybrid events with VenueR. Make booking your
                                        event easy & hassle free.<br><br> Browse 1000s of unique venues and secure competitive prices.</h2>
                                </strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-blocks-cover overlay" style="background-image: url(images/PS/cover.jpg);" data-aos="fade"
                data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-12">

                            <h1 class="mb-2">Events Made Easy</h1>
                            <p class="mb-5"><strong class="h5">
                                    <p>Organise the best in-person and hybrid events with VenueR. Make booking your
                                        event easy & hassle free.<br><br> Browse 1000s of unique venues and secure competitive prices.</h2>
                                </strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-blocks-cover overlay" style="background-image: url(images/TC/training\ cover.webp);"
                data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-12">

                            <h1 class="mb-2">Events Made Easy</h1>
                            <p class="mb-5"><strong class="h5">
                                    <p>Organise the best in-person and hybrid events with VenueR. Make booking your
                                        event easy & hassle free.<br><br> Browse 1000s of unique venues and secure competitive prices.</h2>
                                </strong></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="site-section site-section-sm pb-0">
            <div class="container">
               

                <div class="row">
                    <div class="col-md-12">
                        <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
                            <div class="mr-auto">
                                <a id="grid" class="icon-view view-module active"><span
                                        class="icon-view_module"></span></a>
                                <a id="vlist" class="icon-view view-list"><span
                                        class="icon-view_list"></span></a>

                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div> 


        <div id="gridv" class="site-section site-section-sm bg-light">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-100">
                            <a href="{{url('/meeting')}}" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                </div>
                                <img src="images/CS/1.jpg" alt="Image" class="img-fluid" height="600">
                            </a>
                            <div class="p-4 property-body">
                                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                                <h2 class="property-title"><a href="{{url('/meeting')}}">Meeting Rooms</a></h2>
                                <span class=""></span> Type <strong> Corporate Spaces </strong> </span>




                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-100">
                            <a href="{{url('/parties')}}" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                </div>
                                <img src="images/others/2.jpg" alt="Image" class="img-fluid" height="600">
                            </a>
                            <div class="p-4 property-body">
                                <a href="#" class="property-favorite "><span class="icon-heart-o"></span></a>
                                <h2 class="property-title"><a href="{{url('/parties')}}">Private Dinings</a></h2>
                                <span class=""></span> Type <strong> Party Spaces </strong> </span>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-80">
                            <a href="{{url('/playground')}}" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                </div>


                                <img src="images/pg1.jpeg" alt="Image" class="img-fluid">
                            </a>

                            <div class="p-4 property-body">
                                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                                <h2 class="property-title"><a href="{{url('/playgrounds')}}"> Football Ground</a></h2>
                                <span class=""></span> Type <strong> Play Ground </strong> </span>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-80">
                            <a href="{{url('/wedding')}}" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                </div>
                                <img src="images/GS/1.jpeg" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                                <h2 class="property-title"><a href="{{url('/wedding')}}">Weddings</a></h2>
                                <span class=""></span> Type <strong> Wedding Spaces </strong> </span>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-80">
                            <a href="{{url('/unusual')}}" class="property-thumbnail">
                                <div class="offer-type-wrap"> </div>
                                <img src="images/others/1.jpeg" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                                <h2 class="property-title"><a href="{{url('/unusual')}}"> The Unusuals </a></h2>
                                <span class=""></span> Type <strong> Other Spaces </strong> </span>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-80">
                            <a href="{{url('/professional')}}" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                </div>
                                <img src="images/PS/3.jpg" alt="Image" style="height:233px" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                                <h2 class="property-title"><a href="{{url('/professional')}}">Professional Spaces</a>
                                </h2>
                                <span class=""></span> Type <strong> Professional Spaces </strong> </span>




                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="vlistv" class="site-section site-section-sm bg-light">
            <div class="container">
            
              
                <div class="row mb-2">
                <div class="col-md-10">
                  <div class="property-entry horizontal d-lg-flex">
      
                    <a href="{{url('/meeting')}}" class="property-thumbnail h-500">
                      <div class="offer-type-wrap">
                    
                      </div>
                      <img src="images/CS/1.jpg" alt="Image" class="img-fluid" height="300">
                    </a>
      
                    <div class="p-4 property-body">
                      <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                      <h2 class="property-title"><a href="{{url('/meeting')}}">Meeting Rooms</a></h2>
                      <span class=""></span> Type <strong> Corporate Spaces </strong> </span>
                      
                        
                        </li>
                      </ul>
                    </div>
      
                  </div>
                </div>
              </div>
      
              <div class="row mb-2">
                <div class="col-md-10">
                  <div class="property-entry horizontal d-lg-flex">
      
                    <a href="{{url('/parties')}}" class="property-thumbnail h-100">
                      <div class="offer-type-wrap">
                        
                      </div>
                      <img src="images/others/2.jpg" alt="Image" class="img-fluid">
                    </a>
      
                    <div class="p-4 property-body">
                      <a href="" class="property-favorite "><span class="icon-heart-o"></span></a>
                      <h2 class="property-title"><a href="{{url('/parties')}}">Private Dinings</a></h2>
                      <span class=""></span> Type <strong> Party Spaces </strong> </span>
                     
                          
                        </li>
                      </ul>
                    </div>
      
                  </div>
                </div>
              </div>
      
              <div class="row mb-2">
                <div class="col-md-10">
                  <div class="property-entry horizontal d-lg-flex">
      
                    <a href="{{url('/playground')}}" class="property-thumbnail h-100">
                      <div class="offer-type-wrap">
                       
                      </div>
                      <img src="images/pg1.jpeg" alt="Image" class="img-fluid">
                    </a>
      
                    <div class="p-4 property-body">
                      <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                      <h2 class="property-title"><a href="{{url('/playground')}}"> Football Ground</a></h2>
                      <span class=""></span> Type <strong> Play Ground </strong> </span>
                          
                        </li>
                      </ul>
                    </div>
      
                  </div>
                </div>
              </div>
      
              <div class="row mb-2">
                <div class="col-md-10">
                  <div class="property-entry horizontal d-lg-flex">
      
                    <a href="{{url('/wedding')}}" class="property-thumbnail h-100">
                      <div class="offer-type-wrap">
                  
                      </div>
                      <img src="images/GS/1.jpeg" alt="Image" class="img-fluid">
                    </a>
      
                    <div class="p-4 property-body">
                      <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                      <h2 class="property-title"><a href="{{url('/wedding')}}">Weddings</a></h2>
                      <span class=""></span> Type <strong> Wedding Spaces </strong> </span>
                     
                          
                        </li>
                      </ul>
                    </div>
      
                  </div>
                </div>
              </div>
      
              <div class="row mb-2">
                <div class="col-md-10">
                  <div class="property-entry horizontal d-lg-flex">
      
                    <a href="{{url('/unusual')}}" class="property-thumbnail h-100">
                      <div class="offer-type-wrap">
                        
                      </div>
                      <img src="images/others/1.jpeg" alt="Image" class="img-fluid">
                    </a>
                    
                    <div class="p-4 property-body">
                      <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                      <h2 class="property-title"><a href="{{url('/unusual')}}">The Unusual</a></h2>
                      <span class=""></span> Type <strong> Other Spaces </strong> </span>
                      
                        </li>
                      </ul>
                    </div>
      
                  </div>
                </div>
              </div>
              
      
              
            </div>
        </div>

    </div>
    </div>




    <div class="field-new-home-page-image" id="sectionspace">
        <div class="site-blocks-cover overlay" style="background-image: url(images/feature9.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <!-- <img typeof="foaf:Image" class="img-responsive" src="C:\Users\Anfal\Desktop\FYP\images" width="2545" height="590" alt="" />  </div> -->
            <div class="field-new-home-description">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">

                        <h1 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to rent?</h1>
                        <p>Answer a few questions to find the right products for you.</p>
                        <p><button class="btn btn-primary btn-wide btn-large explorebtn" data-toggle="modal" data-target="#myModal">GET STARTED</button></p>
                    </div>
                </div>
            </div>


        </div>
        <div class="panel-separator"></div>
        <div class="panel-pane pane-node-links link-wrapper">



            <div class="pane-content">
            </div>


        </div>
    </div>
    </div>
    </div>
    </div>

    </section>
    </div>



    <div class="site-section site-section-sm bg-light">
        <div class="fleet-gallery block-content bg-image inner-offset" style="padding-top:25px; padding-bottom: 0;">
            <div class="container-fluid inner-offset">
                <div class="text-center hgroup wow zoomInUp" data-wow-delay="0.4s">
                    <h1>Top ways people use VenueR</h1>
                    <h5> VenueR creates work environments that help everybody get up and running and stay that way. From
                        formal working spaces to informal family gatherings, VEnueR provides custom solutions tailored
                        to your space needs.
                    </h5>

                    <br> <br>

                    <div class data-aos="fade" data-stellar-background-ratio="0.5">
                        <p
                            style="float: left; font-size: 15pt; margin-left: 120px;  text-align: center; width: 20%; margin-right: 1%; margin-bottom: 0.5em;">
                            <img src="images/Meeting.JPG" style="width: 100%">Corporate </p>
                        <div class data-aos="fade" data-stellar-background-ratio="0.5">
                            <p
                                style="float: left; font-size: 15pt; text-align: center; width: 20%; margin-right: 1%; margin-bottom: 0.5em;">
                                <img src="images/4.jpeg" style="width: 100%">Professional Setups</p>
                            <div class data-aos="fade" data-stellar-background-ratio="0.5">
                                <p
                                    style="float: left; font-size: 15pt; text-align: center; width: 20%; margin-right: 1%; margin-bottom: 0.5em;">
                                    <img src="images/Garden dholki.jpeg" style="width: 100%">Gardens</p>
                                <div class data-aos="fade" data-stellar-background-ratio="0.5">

                                    <p
                                        style="float: left; font-size: 15pt; margin-right: 150px; text-align: center; width: 20%; margin-right: 1%; margin-bottom: 0.5em;">
                                        <img src="images/4 others.jpeg" style="width: 100%">The Unusuals</p>



                                    <br>
                                    <p>

                                        <p style="clear: both;"></p>

                                        <div class="field-new-home-page-image">
                                            <div class="site-blocks-cover overlay"
                                                style="background-image: url(images/safevent.jpeg);" data-aos="fade">
                                                <div class="field-new-home-description">
                                                    <div
                                                        class="row align-items-center justify-content-center text-center">
                                                        <div class="col-md-10">

                                                            <h1 class="wow fadeInUp" data-wow-delay="300ms">RUN SAFER
                                                                EVENTS</h1>
                                                            <p>VenueR strictly adhere to COVID-19 Standard Operating Procedures (SOPs) in the wake of safety precautions in the largest metropolitan city of Pakistan - Karachi.</p>
                                                            <p><a class="btn btn-primary btn-wide btn-large explorebtn"
                                                                    href="{{url('/safeevent')}}" tabindex="-1">Find Out
                                                                    More</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                            </div>
                            <div class="panel-separator"></div>
                            <div class="panel-pane pane-node-links link-wrapper">



                                <div class="pane-content">
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            @include('includes.footer')


                            @include('includes.js')
                            <script>
                                $('#grid').click(function(){
                                    $('#vlistv').css('display','none');
                                    $('#gridv').css('display','block');
                                });
                                $('#vlist').click(function(){
                                    $('#gridv').css('display','none');
                                    $('#vlistv').css('display','block');
                                });
                            </script>
</body>

</html>
