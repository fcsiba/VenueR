<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Details</title>
    @include('includes.css')
    
  </head>
  <body>
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
    
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Alert</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
    
          <!-- Modal body -->
          <div class="modal-body">
            Your Message has been sent
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

  </div>

  <div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover overlay" style="background-image: url({{asset('images/Party/cover\ 2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <!--<span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">For Rent</span> -->
            <h1 class="mb-2">Party </h1>
            <p class="mb-5"><strong class="h5">
            <p> Keep on celebrating your events as we provide solutions in your budget. Make birthday parties, rozakushai and all the several events special</strong></p>
           <!-- <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">See Details</a></p> --> 
          </div>
        </div>
      </div>
    </div>  

    <div class="site-blocks-cover overlay" style="background-image: url({{asset('images/Party/cover.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
           
            <h1 class="mb-2">Party venues</h1>
            <p class="mb-5"><strong class="h5">
            <p> Keep on celebrating your events as we provide solutions in your budget. Make birthday parties, rozakushai and all the several events special</strong></p>
          </div>
        </div>
      </div>
    </div>  

  </div>


  </div>

  


             


  <div class="site-section site-section-sm">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div>
            <div class="slide-one-item home-slider owl-carousel">
              <div><img src="http://callingdesk.com.pk/venueadmin/adminfyp/storage/app/public/img/{{$venue->image}}" alt="Image" class="img-fluid"></div>
              
            </div>
          </div>
          <div class="bg-white property-body border-bottom border-left border-right">
            <div class="row mb-5">
              <div class="col-md-6">
                <strong class="text-success h1 mb-3">{{$venue->name}}</strong>
              </div>
              <div class="col-md-6">
                <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                <li>
                  <span class="property-specs">Size/Yards</span>
                  <span class="property-specs-number">{{$venue->size}} <sup>+</sup></span>
                  
                </li>
                <li>
                  <span class="property-specs">Accomodation</span>
                  <span class="property-specs-number">{{$venue->accomodation}}</span>
                  
                </li>
               
              </ul>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                <span class="d-inline-block text-black mb-0 caption-text">Event Type</span>
                <strong class="d-block">{{$venue->types->name}}</strong>
              </div>
              <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                <span class="d-inline-block text-black mb-0 caption-text">Availibility</span>
                <strong class="d-block">{{$venue->availiblity}}</strong>
              </div>
              <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                <span class="d-inline-block text-black mb-0 caption-text">Price</span>
                <strong class="d-block">Rs {{$venue->price}}</strong>
              </div>
            </div>
            <h2 class="h4 text-black">About this space</h2>
            <p>{{$venue->info}}</p>
            

            <div class="row no-gutters mt-5">
              <div class="col-12">
              
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">

          <div class="bg-white widget border rounded">

            <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
            <form method="POST" action="" class="form-contact-agent" id="contact_us">
              @csrf
              <div class="form-group">
                <label for="name">Name<span style="color: red">*</span></label>
                <input type="text" id="name" name="name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Message<span style="color: red">*</span></label>
                <input type="text" id="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone<span style="color: red">*</span></label>
                <input type="text" id="phone" name="phone" class="form-control" required>
              </div>
              <input type="hidden" value="{{$venue->name}}" name="vname">
              <input type="hidden" value="{{$venue->type}}" name="type">
              <input type="hidden" value="{{$venue->admin_id}}" name="admin_id">
              <div class="form-group">
                <input type="submit" id="submit" class="btn btn-primary" value="Send Message">
              </div>
            </form>
          </div>

          
        </div>
        
      </div>
    </div>
  </div>

   
  @include('includes.footer')


  <script>


    
    $("#contact_us").validate({
      
    submitHandler: function(form) {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      }); 
      $.ajax({
        url: 'message' ,
        type: "POST",
        data: $('#contact_us').serialize(),
        success: function( response ) {
           $('#myModal').modal('show'); 
            document.getElementById("contact_us").reset(); 
        },
       error: function(jqXHR, textStatus, errorThrown){
           alert(textStatus, errorThrown);
       }
      });
    }
  })


</script> 
  @include('includes.js')
    
  </body>
</html>