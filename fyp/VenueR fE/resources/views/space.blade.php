<!DOCTYPE html>
<html lang="en">

<head>
    <title>Find </title>
    @include('includes.css')
    <style>
        html {
            scroll-behavior: smooth;
        }

        #section1 {
            height:  100vh;
            background-color: white;
        }

        #section2 {
            height:  100vh;
            background-color: white;
        }

        #section3 {
            height: 100vh;
            background-color: white;
        }

        #section4 {
            height: 100vh;
            background-color: white;
        }

    </style>


</head>

<body style="">

   

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



    <main>
        <div class="region region-content">
            <section id="block-system-main" class="block block-system clearfix">

                <div id="gun-finder">
                    <section class="section intro">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        
                        <div class=" w3-center w3-animate-zoom">
                            <div class="gun-finder-ad-content gun-finder-intro">
                                <div class="site-blocks-cover overlay"
                                    style="background-image: url(images/feature9.jpg);" data-aos="fade"
                                    data-stellar-background-ratio="0.5">
                                    <div class="row align-items-center justify-content-center text-center">
                                        <div class="col-md-10">


                                            <h2 class="sw" style="color: white ;"><span>Find a space</span></h2>
                                            <h1><b>RVenue</b></h1>
                                            <p>
                                                Answer a few questions to find
                                                the right products for you.
                                            </p> <br> <br>
                                            <div class="finder-scroll-down">
                                                <div class="scroll-mouse-container">

                                                    
                                                    <h6 style="cursor: pointer; color: white"> <a href="#section1" style="color: white"><br> Scroll <br />
                                                        Down</a> </h6>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                               
                                                    

                    </section>

                </div>
            </section>
        </div>
            <form  method="post" action="{{ url('/search_space') }}">
                {{ csrf_field() }}
                <div class="main" id="section1">
                    <div>
                        <p style="float: left;"><img src="images/CS/1.JPG" height="600px" width="700px">

                        </p>
                        <p>
                            <h1 style="background-color:lightgrey;"><b>3</b></h1>
                        </p>
                        <p>
                            <div class="row align-items-center justify-content-center text-center"
                                style="padding-top:15%;">
                                <div class="col-md-10">
                                    <h2><b>Venue Type</b></h2>
                                    <p>Select the venue you are looking for</p>


                                    <select name="mtype" id="type" style="width:200px;" onclick="urlch()">
                                        
                                            <option value="">Select</option>
                                            @foreach ($type as $item)
                                            <option  value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                    </div>


                    </p>
                </div>

                <div class="main" id="section2">
                    <div>
                        <p style="float: left;"><img src="images/PG/1.jpeg" height="600px" width="700px">

                        </p>
                        <p>
                            <h1 style="background-color:lightgrey;"><b>2</b></h1>
                        </p>
                        <p>
                            <div class="row align-items-center justify-content-center text-center"
                                style="padding-top:15%;">
                                <div class="col-md-10">
                                    <h2><b>Select Price</b></h2>
                                    <p>Select your range</p>


                                    <select name="price" id="location" style="width:200px;" >
                                        <option value="0">Select</option>
                                        <option value="1">All</option>
                                        <option value="2">0-5000</option> 
                                        <option value="3">5000-10000</option>
                                        <option value="4">10000-20000</option>
                                        <option value="5">20000+</option>

                                    </select>
                                </div>
                            </div>
                    </div>


                    </p>
                </div>
                
                  
                <div class="main" id="section3">
                    <div>
                        <p style="float: left;"><img src="images/CS/2.JPG" height="600px" width="700px"></p>
                        <p>
                            <h1 style="background-color:lightgrey;"><b>1</b></h1>
                        </p>
                        <p>
                            <div class="row align-items-center justify-content-center text-center" style="padding-top:15%;">
                                <div class="col-md-10">
                                    <h2><b>Accomodation</b></h2>
                                    <p>Select number of people</p>

                                    <select name="capacity" id="accommodation"  >
                                        <div class="select-wrap">
                                            <option value="0">Select</option>
                                            <option value="1">All</option>
                                            <option value="2">0-300 </option>
                                            <option value="3">300-500</option>
                                            <option value="4">500+</option>
                                        </div>
                                    </select>
                                    <br>
                                    <button id="" style="margin-top: 30px" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </p>

                    </div>
                </div>
                
            </form>
            

    </main>

    @include('includes.js')
    <script>
        $('#srchbtn').click(function()
        {

            var type=document.getElementsByName("mtype")[0].value;
            var price=document.getElementsByName("price")[0].value;
            var capacity=document.getElementsByName("capacity")[0].value;
            submitHandler: function(form) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }); 
            $.ajax({
                url: '/meeting_search' ,
                type: "POST",
                data:  {mtype:type, price:price,capacity:capacity},
                success: function( response ) {
                $('#myModal').modal('show'); 
                    document.getElementById("contact_us").reset(); 
                },
            error: function(jqXHR, textStatus, errorThrown){
                alert(textStatus, errorThrown);
            }
            });
            }
        }
    });
    </script>

</body>

</html>
