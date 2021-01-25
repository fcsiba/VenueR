<!DOCTYPE html>
<html lang="en">

<head>
    <title>Others</title>
    <?php echo $__env->make('includes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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


        <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <div class="slide-one-item home-slider owl-carousel">

        <div class="site-blocks-cover overlay" style="background-image: url(images/others/cover.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <!--<span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">For Rent</span> -->
                        <h1 class="mb-2">Others</h1>
                        <p class="mb-5"><strong class="h5">
                                <p> Select your venue based on what spaces our users provide if you can find a hall for
                                    your date or your budget.
                            </strong></p>
                        <!-- <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">See Details</a></p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url(images/others/cover\ 2.jpeg);"
            data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">

                        <h1 class="mb-2"> Others</h1>
                        <p class="mb-5"><strong class="h5">
                                <p> Select your venue based on what spaces our users provide if you can find a hall for
                                    your date or your budget.
                            </strong></p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="site-section site-section-sm pb-0">
        <div class="container">
            <div class="row">
                <form class="form-search col-md-12" method="post" action="<?php echo e(url('/unusual_search')); ?>"  style="margin-top: -100px;">
                    <?php echo e(csrf_field()); ?>

                    <div class="row  align-items-end">
                        <div class="col-md-3">
                            <label for="list-types">Types</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="types" id="list-types" class="form-control d-block rounded-0">
                                    <option value="-1">All</option>
                                   <?php $__currentLoopData = $subtype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?> </option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="offer-types">Price</label>
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
                <?php $__currentLoopData = $venue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="property-entry h-100">
                        <a href="<?php echo e(url('/unusual/detail/'.$item->id)); ?>" class="property-thumbnail">
                            <div class="offer-type-wrap">
                            </div>
                            <img src="http://callingdesk.com.pk/venueadmin/adminfyp/storage/app/public/img/<?php echo e($item->image); ?>" alt="Image" class="img-fluid">
                        </a>
                        <div class="p-4 property-body">
                            <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                            <h2 class="property-title"><a
                                    href="<?php echo e(url('/unusual/detail/'.$item->id)); ?>"><?php echo e($item->name); ?></a></h2>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>
                                <?php echo e($item->address); ?> </span>
                            <strong
                                class="property-price text-primary mb-3 d-block text-success"><?php echo e($item->subtype->name); ?></strong>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Size/Yards</span>
                                    <span class="property-specs-number"><?php echo e($item->size); ?> </span>

                                </li>
                                <li>
                                    <span class="property-specs">Accomodation</span>
                                    <span class="property-specs-number"><?php echo e($item->accomodation); ?></span>

                                </li>
                                <li>
                                    <span class="property-specs">Price/hr</span>
                                    <span class="property-specs-number"><?php echo e($item->price); ?> </span>

                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>

        <div class="d-flex justify-content-center">
            <?php echo $venue->links("pagination::bootstrap-4"); ?>

        </div>



    </div>

    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('includes.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /home2/callingdeskcom/public_html/fyp/fyp/resources/views/unusual.blade.php ENDPATH**/ ?>