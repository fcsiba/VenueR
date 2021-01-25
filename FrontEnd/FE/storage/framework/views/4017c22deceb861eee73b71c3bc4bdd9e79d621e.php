<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About Us</title>
    <?php echo $__env->make('includes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
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
              <form  method="post" action="<?php echo e(url('/search_space')); ?>">
                  <?php echo e(csrf_field()); ?>

                  <h5><b>Venue Type</b></h5>
                  <p>Select the venue you are looking for</p>


                  <select class="form-control" name="mtype" id="type" >
                      
                          <option value="">Select</option>
                          <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option  value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>
</div>
</div>
</div>





 <!--change this to dark, agr grey color ko dard krna hai tou-->
 
<div class="container">
  <div class="row align-items-center justify-content-center text-center">
    <div class="col-md-15">
      <p class="mb-2"><br> <br> <br>
        
        <h1 style="font-size:250%;" alight="right" class="mt-4"> <strong>
        Share Space.<br> Connect the Community </p> </strong></h1>
        <div class="col-md-12" >
    <p class="mb-5" style="font-size:120%;">
       VenueR allows anyone to share and book community spaces by the hour. We all need spaces to meet, work, celebrate, and more. Find your SpacetoCo-nnect, Co-llaborate & Co-create!</strong></p>
      <p><button class="btn btn-primary btn-wide btn-large explorebtn"  data-toggle="modal" data-target="#myModal" tabindex="-1">Find space</button></p>    </div>
  </div>
</div>
</div> 
</div> 



    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <img src="images/aboutus.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
            <div class="site-section-title">
              <h2>VenueR</h2>
            </div>
            <p class="lead"><strong> Looking for a space? All your requirement is just a click away with VenueR. </strong></p>
            <p>We help you to search comfortable spaces in Karachi. Keeping in mind, the needs of the onlookers you will find the best office designs and best working environment
              with the help of VenueR. You will find the most innovative, unique, creative and playful designs on our website. You will find whatever you want within the best locations and affordable price.<br>
              You can also rent space on it. No need to worry just a click away and our team will get in touch with you to make your search easy.

            </p>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center"  data-aos="fade-up" >
          <div class="col-md-7">
            <div class="site-section-title text-center">
              <h2>Leadership</h2>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="200">
              <div class="team-member">
  
                <img src="images/person_1.jpeg" alt="Image" class="img-fluid rounded mb-4">
  
                <div class="text">
  
                  <h2 class="mb-2 font-weight-light text-black h4">Zunair Ali</h2>
                  <span class="d-block mb-3 text-white-opacity-05"> </span>
                 
                </div>
  
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="300">
              <div class="team-member">
  
                <img src="images/person_2.jpeg" alt="Image" class="img-fluid rounded mb-4">
  
                <div class="text">
  
                  <h2 class="mb-2 font-weight-light text-black h4">Anfal Siddiqui</h2>
                  <span class="d-block mb-3 text-white-opacity-05"> </span>
                 
                </div>
  
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="400">
              <div class="team-member">
  
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded mb-4">
  
                <div class="text">
  
                  <h2 class="mb-2 font-weight-light text-black h4">Maria Tanveer</h2>
                  <span class="d-block mb-3 text-white-opacity-05"></span>
                  
                </div>
  
              </div>
            </div>

            
    
            <div class="site-section bg-light"> <!--change this to dark, agr grey color ko dard krna hai tou-->
              <div class="container">
                <div class="row mb-5 justify-content-center"  data-aos="fade-up" >
                  <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Why we do what we do</h2>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">

              <img src="images/sustain.JPG" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Sustainability</h2>
                
                <p>We believe that there are plenty of spaces and it’s not always necessary to build more. By utilising existing assets more efficiently and by making it easier to book spaces online, we all play a part in a more sustainable future</p>
                
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">

              <img src="images/Communityconnection.JPG" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Local Economies</h2>
               
                <p>We believe in the importance of driving growth to local area economies. By providing a means for people to access local spaces, we hope to stimulate a buzz of activity within towns, precincts & localities . We believe that when local economies thrive, communities come to life.</p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">

              <img src="images/local economies.JPG" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Community Connection</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>We believe space activation plays an important role in community development and building connectedness between people.It is through this that we work towards building a supportive, inclusive and diverse society.</p>
              </div>

            </div>
          </div>
</div>
</div></div></div> </div>


  </div>
  <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('includes.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH C:\xampp\htdocs\fyp\resources\views/about.blade.php ENDPATH**/ ?>