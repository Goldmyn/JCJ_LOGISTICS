<?php

		include_once("header.php");
	
?>

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-success display-3">Services</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <form id="tracking-form">
                <div class="input-group form-group">
                    <input type="text" class="form-control border-light" id="tracking-number" style="padding: 30px;"  placeholder="e.g. 948830AJ43FH" name="tracking-number" >
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary px-3" id="submit-button">Track & Trace</button>
                    </div>
                </div>
                </form>
                
                 <!-- HTML form with input field and submit button -->
                

                <script>
                $(document).ready(function() {
                // Disable submit button if input field is empty
                $('#submit-button').attr('disabled', true);
                $('#tracking-number').keyup(function() {
                    if($(this).val().length !=0) {
                    $('#submit-button').attr('disabled', false);
                    } else {
                    $('#submit-button').attr('disabled', true);
                    }
                });

                // When form is submitted
                $('#tracking-form').submit(function(e) {
                    e.preventDefault(); // Prevent page from refreshing
                    var input = $('#tracking-number').val();
                    if (input == '948830AJ43FH') { // If tracking number is correct
                    Swal.fire({
                        title: 'Package Arrived!',
                        text: 'Contact +1 (213) 314-4350 or Jcjlogistics@fastservice.com.',
                        icon: 'success'
                    });
                    } else { // If tracking number is incorrect
                    Swal.fire({
                        title: 'Invalid Tracking Number',
                        text: 'Please check your tracking number and try again.',
                        icon: 'error'
                    });
                    }
                });
                });
                </script>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 bg-dark">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Our Services</h6>
                <h1 class="mb-4 text-success">Best Logistic Services</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Air Freight</h6>
                    </div>
                    <p class=" text-success ">Fast and reliable air freight services to get your products where they need to be. Contact us today for secure and efficient air transportation solutions that meet your needs.</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Ocean Freight</h6>
                    </div>
                    <p class=" text-success ">
                        Efficient ocean freight services that get your products where they need to be. Contact us today for secure and cost-effective transportation solutions.</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Land Transport</h6>
                    </div>
                    <p class=" text-success ">Reliable and efficient land transport solutions that get your products where they need to be. Contact us today for secure and timely transportation services.</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-store text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Cargo Storage</h6>
                    </div>
                    <p class=" text-success ">Secure and cost-effective cargo storage solutions for your products. Contact us today for reliable warehousing and distribution services that meet your needs.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!--  Quote Request Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Get A Quote</h6>
                    <h1 class="mb-4 text-success ">Request A Free Quote</h1>
                    <p class="mb-4">Get a free quote from our logistics experts today! Our personalized services are tailored to meet your specific needs and budget. Trust us for reliable and timely logistics solutions that will take your business to the next level.</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <i class="fa fa-map-marker-alt fa-2x text-blue mb-3"></i>
                            <h1 class="text-primary mb-2" data-toggle="counter-up">125</h1>
                            <h6 class="font-weight-bold mb-4">Locations</h6>
                        </div>
                        <div class="col-sm-4">
                            <i class="fa fa-users fa-2x text-blue mb-3"></i>
                            <h1 class="text-primary mb-2" data-toggle="counter-up">1050</h1>
                            <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                        </div>
                        <div class="col-sm-4 ">
                            <i class="fa fa-ship fa-2x text-blue mb-3"></i>
                            <h1 class="text-primary mb-2" data-toggle="counter-up">7243</h1>
                            <h6 class="font-weight-bold mb-4">Completed Shipments</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Air Freight</option>
                                    <option value="2">Ocean Freight</option>
                                    <option value="3">Land Transport</option>
                                    <option value="4">Cargo Storage</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get A Quote</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Request Start -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Testimonial</h6>
                <h1 class="mb-4">Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0"> Michael B.</h6>
                            <small>- Microbiologist</small>
                        </div>
                    </div>
                    <p class="m-0">"I was blown away by the exceptional service provided by this shipping company. My package arrived in perfect condition and in record time. I couldn't be more satisfied!" -  Michael B.</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Emily S.</h6>
                            <small>- Accountant</small>
                        </div>
                    </div>
                    <p class="m-0">"I've used many shipping companies over the years, but this one is by far the best. They went above and beyond to ensure my package arrived on time and in great condition. Thank you!" - Emily S.</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">Jennifer K.</h6>
                            <small>- Seller</small>
                        </div>
                    </div>
                    <p class="m-0">"The customer service at this shipping company is top-notch. They were so helpful and accommodating throughout the entire process. I wouldn't hesitate to use them again." - Jennifer K.</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">David L</h6>
                            <small>- CEO </small>
                        </div>
                    </div>
                    <p class="m-0">"The team at this shipping company is amazing. They are always willing to go above and beyond to make sure I'm satisfied with the service. I can't recommend them enough!" - David L.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->





<?php

		include_once("footer.php");
	
?>