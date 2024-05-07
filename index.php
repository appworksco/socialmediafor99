<?php

include realpath(__DIR__ . '/includes/layout/header.php');

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dateTime = $_POST["date_time"];

    $callScheduleFacade->scheduleCall($name, $email, $dateTime);
    if ($callScheduleFacade) {
        array_push($success, "You have successfully arranged a schedule; we'll email you at the designated time.");
    }
}

?>

<div class="container">
    <div class="py-2">
        <?php include('errors.php') ?>
    </div>
</div>

<section class="section-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-6">
                <img src="dist/img/logo.png" alt="Logo" style="width: 100px;">
                <h5 class="fw-bold text-black pt-3">Boost your online presence with our</h5>
                <h1 class="display-4 text-uppercase py-3"><span class="text-blue" style="font-weight: 700;">Social Media Management</span> <br> <span class="text-red" style="font-weight: 700;">For $99/Month!</span></h1>
                <h5 class="fw-bold pb-3">We'll create captivating content tailored to your brand, engaging your audience and elevating your social media game.</h5>
                <button type="button" class="btn btn-danger text-light text-uppercase rounded-pill px-4" data-toggle="modal" data-target="#tacModal">Get Started</button>
                <a href="login" class="btn btn-primary text-light text-uppercase rounded-pill px-4">Login</a>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-6 d-flex align-items-center">
                <img src="dist/img/section-1-img.png" class="w-100 rounded-start rounded-bottom pt-4 pt-sm-5" alt="Section 1 Image">
            </div>
        </div>
    </div>
</section>

<section class="section-2 py-5">
    <div class="container">
        <h1 class="fw-bold text-black pb-5">Upgrade your social media presence.</h1>
        <div class="row bg-light-dark">
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex align-iteml-center p-sm-0">
                <img src="dist/img/section-2-img1.png" class="w-100" alt="Section 2 Image">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex align-items-center px-4">
                <div>
                    <h5 class="fw-bold bg-purple text-light p-1 px-2 mt-3 rounded" style="width: 270px;">Quality social media content</h5>
                    <h5 class="fw-bold text-black">Engage your audience with top-tier social media content! We provide custom visuals, captivating captions, and effective hashtags across all platforms, ensuring maximum impact. Let us handle the creation while you impress your followers. Let us handle the creation while you impress your followers.</h5>
                    <br>
                    <h5 class="fw-bold bg-purple text-light p-1 px-2 rounded" style="width: 295px;">Effortless review and approval.</h5>
                    <h5 class="fw-bold text-black mb-3">Effortlessly review, provide feedback, make edits, and approve content with ease. Rest assured, we'll never post anything without your approval.</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-2">
    <div class="container">
        <div class="row bg-light-dark">
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex align-items-center px-4">
                <div>
                    <h5 class="fw-bold bg-purple text-light p-1 px-2 mt-3 rounded" style="width: 285px;">Scheduled and posted for you</h5>
                    <h5 class="fw-bold text-black">After your approval, we post your content on your social channels as per the agreed schedule, always punctual. Preview your upcoming posts effortlessly in our user-friendly platform.</h5>
                    <br>
                    <h5 class="fw-bold text-black">Our AI analyzes your follower activity, ensuring optimal content and posting times for your accounts.</h5>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex align-iteml-center p-sm-0">
                <img src="dist/img/section-2-img2.png" class="w-100" alt="Section 2 Image">
            </div>
        </div>
    </div>
</section>

<section class="section-3 pt-5">
    <div class="container">
        <h1 class="fw-bold text-center pb-5">Social Media Posts Samples / Portfolio</h1>
        <div class="links text-center">
            <a href="/" class="text-decoration-none text-dark lead px-2">Real Estate</a>
            <a href="/" class="text-decoration-none text-dark lead px-2">Beauty / Skincare</a>
            <a href="/" class="text-decoration-none text-dark lead px-2">Food / Restaurant</a>
            <a href="/" class="text-decoration-none text-dark lead px-2">Fashion / Jewerly</a>
            <a href="/" class="text-decoration-none text-dark lead px-2">Health / Wellness</a>
            <a href="/" class="text-decoration-none text-dark lead px-2">Marketing Agencies</a>
            <a href="/" class="text-decoration-none text-dark lead px-2">Home Services</a>
            <a href="/" class="text-decoration-none text-dark lead px-2">Professional Services</a>
            <a href="/" class="text-decoration-none text-dark lead px-2">Others</a>
        </div>
        <div class="row py-4">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card border-0 mb-2">
                    <div class="card-body p-0">
                        <img src="dist/img/post-sample-1.png" class="w-100" alt="Post Sample 1">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card border-0 mb-2">
                    <div class="card-body p-0">
                        <img src="dist/img/post-sample-2.png" class="w-100" alt="Post Sample 2">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card border-0 mb-2">
                    <div class="card-body p-0">
                        <img src="dist/img/post-sample-3.png" class="w-100" alt="Post Sample 3">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card border-0 mb-2">
                    <div class="card-body p-0">
                        <img src="dist/img/post-sample-4.png" class="w-100" alt="Post Sample 4">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card border-0 mb-2">
                    <div class="card-body p-0">
                        <img src="dist/img/post-sample-5.png" class="w-100" alt="Post Sample 5">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card border-0 mb-2">
                    <div class="card-body p-0">
                        <img src="dist/img/post-sample-6.png" class="w-100" alt="Post Sample 6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-4 py-5">
    <div class="container">
        <h1 class="fw-bold text-center pb-5">Video Editing</h1>
        <div class="row py-4">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card my-2">
                    <div class="card-body p-0">
                        <img src="dist/img/sample-video-1-thumbnail.jpg" class="w-100" alt="Sample Video 1">
                        <a class="play-button btn p-0" data-toggle="modal" data-target="#playSampleVideo1Modal">
                            <img src="dist/img/play-btn.png" alt="Play Button" style="width: 90px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card my-2">
                    <div class="card-body p-0">
                        <img src="dist/img/sample-video-2-thumbnail.jpg" class="w-100" alt="Sample Video 2">
                        <a class="play-button btn p-0" data-toggle="modal" data-target="#playSampleVideo2Modal">
                            <img src="dist/img/play-btn.png" alt="Play Button" style="width: 90px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card my-2">
                    <div class="card-body p-0">
                        <img src="dist/img/sample-video-3-thumbnail.jpg" class="w-100" alt="Sample Video 3">
                        <a class="play-button btn p-0" data-toggle="modal" data-target="#playSampleVideo3Modal">
                            <img src="dist/img/play-btn.png" alt="Play Button" style="width: 90px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-5 py-5">
    <div class="container">
        <h1 class="fw-bold text-center pb-5">What Sets Us Apart</h1>
        <h5 class="text-center">$99 Social Media offers a competitive edge. While others charge up to $1000 for a limited number of posts, our all-inclusive social media strategy at just $99 a month is unparalleled.</h5>
        <div class="row py-4">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card my-2 p-5 bg-gradient-1 h-100">
                    <div class="text-center">
                        <img src="dist/img/logo-pad.png" class="bg-light rounded-pill pb-2" alt="Logo" style="width: 130px; height: 130px">
                    </div>
                    <div class="card-body text-light p-5">
                        <h5 class="card-title"><i class="bi bi-check-circle-fill"></i> Low-cost, high quality</h5>
                        <p>Experience top-tier services at unbeatable prices, thanks to our efficient team and optimized processes.</p>
                        <h5 class="card-title"><i class="bi bi-check-circle-fill"></i> Full transparency</h5>
                        <p>Gain complete visibility into our platform to review and approve content. Your trust matters to us, and we're committed to delivering quality work at accessible rates.</p>
                        <h5 class="card-title"><i class="bi bi-check-circle-fill"></i> Cancel anytime</h5>
                        <p>No lengthy contracts here. Feel free to end our services at any point, although we're sure you'll see the value in staying with us.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card my-2 p-5 bg-gradient-2 h-100">
                    <div class="text-center">
                        <h5 class="fw-bold text-light py-5">Other Agencies</h5>
                    </div>
                    <div class="card-body text-light p-5">
                        <h5 class="card-title"><i class="bi bi-x-circle-fill"></i> Low-cost, high quality</h5>
                        <p>Traditional social media agencies, accustomed to hefty expenses like large teams and lavish offices, often overlook the needs of small businesses.</p>
                        <h5 class="card-title"><i class="bi bi-x-circle-fill"></i> Full transparency</h5>
                        <p>To maintain competitive pricing, we've fine-tuned every aspect of our workflow. Other agencies, often paid hourly or through costly retainers, lack this incentive.</p>
                        <h5 class="card-title"><i class="bi bi-x-circle-fill"></i> Cancel anytime</h5>
                        <p>Many agencies push for lengthy contracts spanning 6-12 months or more. We believe in flexibility and see no necessity for such arrangements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-6 py-5">
    <div class="container">
        <div class="row py-4">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h1 class="fw-bold text-center pb-5">It's easy to get started today!</h1>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>We're your business's voice amplified, enhancing connections with your customers. Click here to schedule a call and experience the difference.</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card my-2 h-100">
                    <div class="card-body bg-purple text-light">
                        <h1 class="fw-bold">01</h1>
                        <h5>Select your plan</h5>
                        <p>Choose the package that suits your requirements, and feel free to add any extras you desire.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card my-2 h-100">
                    <div class="card-body bg-purple text-light">
                        <h1 class="fw-bold">02</h1>
                        <h5>Complete intake form</h5>
                        <p>Fill out a comprehensive questionnaire about your brand and target audience.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card my-2 h-100">
                    <div class="card-body bg-purple text-light">
                        <h1 class="fw-bold">03</h1>
                        <h5>Receive on-brand content</h5>
                        <p>Expect to receive fantastic posts for the entire month within 7 business days.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-7 py-5">
    <div class="container">
        <h1 class="fw-bold text-center pb-5">How it works</h1>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card my-2">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-8 py-5">
    <div class="container">
        <h1 class="fw-bold text-center pb-5">Client Feedback</h1>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row py-4">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="dist/img/testimonial-1.png" class="w-100" alt="Testimonial">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="dist/img/testimonial-2.png" class="w-100" alt="Testimonial">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="dist/img/testimonial-3.png" class="w-100" alt="Testimonial">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row py-4">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="dist/img/testimonial-4.png" class="w-100" alt="Testimonial">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-9">
    <div class="section-9-img-bg"></div>
    <div class="bg-gradient-1">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="fw-bold text-light">Relieve yourself from social media duties for just $99 per month.</h1>
                    <h5 class="text-light">$99 Social manages your social media posts for a fixed monthly fee. Enjoy top-notch content distributed across all your social media platforms.</h5>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 px-3 px-sm-5">
                    <div class="d-flex">
                        <a href="/" class="btn btn-outline-light btn-lg w-50 mr-1" data-toggle="modal" data-target="#tacModal">Get Started</a>
                        <a href="/" class="btn btn-outline-light btn-lg w-50 ml-1" data-toggle="modal" data-target="#scheduleACallModal">Schedule a Call</a>
                    </div>
                    <div class="text-center">
                        <img src="dist/img/logo-pad.png" class="bg-light rounded-pill mt-3 float-sm-right p-3" alt="Logo" style="width: 90px; height: 90px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include realpath(__DIR__ . '/includes/modals/tac-modal.php') ?>
<?php include realpath(__DIR__ . '/includes/modals/schedule-a-call-modal.php') ?>
<?php include realpath(__DIR__ . '/includes/modals/play-sample-video-1-modal.php') ?>
<?php include realpath(__DIR__ . '/includes/modals/play-sample-video-2-modal.php') ?>
<?php include realpath(__DIR__ . '/includes/modals/play-sample-video-3-modal.php') ?>
<?php include realpath(__DIR__ . '/includes/layout/footer.php') ?>