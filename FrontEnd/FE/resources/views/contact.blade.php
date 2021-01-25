<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact</title>
    @include('includes.css')
    
  </head>
  <body>
    <div class="modal" id="myModal1">
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
</div>
</div>
</div>

  
  <div class="site-blocks-cover overlay" style="background-image: url(images/cus.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-10">
          <h1 class="mb-2 mt-5">We’d love to hear <br> from you</h1>
          <p class="mb-5"><strong class="h5">
        
        </div>
      </div>
    </div>
  </div>  

    

  </div>



   
              
<style data-emotion-css="1du9ely">
.css-1du9ely {
margin: 80px 40px;
}

.css-1du9ely .grid-content {
padding: 30px 0 0;
margin: 40px;
}

@media (min-width:769px) {
.css-1du9ely .grid-content {
display: grid;
grid-template-columns: repeat(2, 1fr);
grid-gap: 20px;
}
}

@media (max-width:1025px) {
.css-1du9ely .grid-content {
grid-gap: 30px;
}
}

@media (max-width:769px) {
.css-1du9ely .grid-content {
max-width: 550px;
margin: 0 auto;
}
}

@media (max-width:400px) {
.css-1du9ely .grid-content {
padding-left: 40px;
padding-right: 40px;
}
}
</style>







<div class="grid-content-wrapper css-1du9ely">
    <section class=" css-822hj2">
        <div class="section-header css-19vm295">
          <div class="row mb-5 justify-content-center"  data-aos="fade-up" >
            <div class="site-section-title text-center">
             
            <h2 class="section-title">Are you someone who...</h2>
        </div> 
        <div class="grid-content">
            <style data-emotion-css="f4lm6y">
                .css-f4lm6y {
                    line-height: 2em;
                    padding: 40px;
                    background: #fdfcfc;
                }

                @media (max-width:769px) {
                    .css-f4lm6y p {
                        font-size: 15px;
                    }
                }

                .css-f4lm6y .actions {
                    text-align: center;
                }
            </style>
            <div class="css-f4lm6y">
                <p><strong>...has tried to FIND a Space</strong> <!-- -->and became quickly lost in
                    web searches, emails, calls and unanswered questions about pricing /
                    availability? Then it&#x27;s time to be our Guest and use SpacetoCo - the
                    sharing economy platform for spaces. Search, find, book and pay all in the one
                    place.</p>

   <div class="actions"><button data-toggle="modal" data-target="#myModal1"  class= "btn btn-primary btn-wide btn-large explorebtn" role="button">Find a Space</button></div>
            </div>
            <style data-emotion-css="g9vje">
                .css-g9vje {
                    line-height: 2em;
                    padding: 40px;
                    background: #9cd1d4;
                }

                @media (max-width:769px) {
                    .css-g9vje p {
                        font-size: 15px;
                    }
                }

                .css-g9vje .button {
                    background-color: #ffffff;
                }

                .css-g9vje .actions {
                    text-align: center;
                }
            </style>
            <div class="css-g9vje">
                <p><strong>...OWNS a Space</strong> <!-- -->that you&#x27;d like to share with more
                    people? Are you keen to reduce the admin of managing your space(s)? Then
                    it&#x27;s time to be a VenueR Host. List your spaces for free, get bookings
                    and receive payments. Make MORE from your Space!<br></p>
                    <div class="actions"><a href="http://callingdesk.com.pk/venueadmin/admin/login"   class= "btn btn-primary btn-wide btn-large explorebtn"  role="button">Become a Host</a></div>

            </div>
        </div>
    </section>
</div>



    <div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form method="POST" action="#" class="p-5 bg-white border" id="contact_us">
              @csrf
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" name="name" class="form-control" required placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" required placeholder="Email Address">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Subject</label>
                  <input type="text" id="subject" name="subject" class="form-control" required placeholder="Enter Subject">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h6 text-black mb-3 text-uppercase">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">IBA, university Road ,Karachi</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a>0300 8368370 (VenueR)</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a>venuer@gmail.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </div>

    
    @include('includes.footer')

  


  </div>
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