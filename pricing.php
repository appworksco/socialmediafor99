<?php

include realpath(__DIR__ . '/includes/layout/header.php');

// PayPal configuration 

define('PAYPAL_ID', 'sb-cs5jc6060103@business.example.com');
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 

define('PAYPAL_RETURN_URL', 'http://localhost/socialmediafor99-old/success');
define('PAYPAL_CANCEL_URL', 'http://localhost/socialmediafor99-old/cancel');
define('PAYPAL_CURRENCY', 'USD');

define('PAYPAL_URL', (PAYPAL_SANDBOX == true) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr");

?>

<section class="pricing pb-5">
    <div class="container py-3 mx-6">
        <img src="dist/img/logo.png" class="d-none d-lg-block" alt="Logo" style="width: 100px;">
        <h1 class="fw-bold text-uppercase text-center text-blue py-5">Affordable pricing plans <br> starts at $99</h1>
        <form action="<?= PAYPAL_URL; ?>" method="post">
            <input type="hidden" name="business" value="<?= PAYPAL_ID; ?>">
            <input type="hidden" name="currency_code" value="<?= PAYPAL_CURRENCY; ?>">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body pb-0 bg-border-dark rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="amount" id="basic" value="99" checked>
                                <div class="d-flex justify-content-between">
                                    <h6>Basic</h6>
                                    <p class="small">10 social media post per month</p>
                                    <h6>$99/mo</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-3">
                        <div class="card-body pb-0 bg-border-purple rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="amount" id="plus" value="189">
                                <div class="d-flex justify-content-between">
                                    <h6>Plus</h6>
                                    <p class="small">20 social media post per month</p>
                                    <h6>$189/mo</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body pb-0 bg-border-gradient-1 rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="amount" id="premium" value="279">
                                <div class="d-flex justify-content-between">
                                    <h6>Premium</h6>
                                    <p class="small">30 social media post per month</p>
                                    <h6>$279/mo</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="pt-2">Pricing is in USD. Auto-renews unless cancelled. By subscribing you agree to Terms & Conditions. Cancellation requires at least 7 days notice. 14-day money back guarantee.</p>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Plan Includes</h6>
                            <p><span class="text-purple">&check;</span> Engaging Captions & Strategic Hashtags</p>
                            <p><span class="text-purple">&check;</span> Scheduled Posting for Consistent Presence</p>
                            <p><span class="text-purple">&check;</span> Includes Management of 1 Social Channel</p>
                            <p><span class="text-purple">&check;</span> Additional Channels at +$10 Each</p>
                            <p><span class="text-purple">&check;</span> Priority Customer Support</p>
                            <button type="submit" value="submit" class="btn btn-primary w-100">Sign up now!</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Specify a Buy Now button. -->
            <input type="hidden" name="cmd" value="_xclick">
            <!-- Specify URLs -->
            <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
            <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
        </form>
    </div>
</section>

<section class="adds-on py-5">
    <div class="container">
        <h1 class="fw-bold text-center pb-5">Add-ons</h1>
        <h5 class="text-center">Enhance your marketing strategy with these powerful add-ons available at the checkout page.</h5>
        <div class="row py-4">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card h-100 py-2">
                    <div class="card-body text-center p-5 bg-border-purple rounded">
                        <h4>Short-Form Videos From $99/mo</h4>
                        <p class="py-3">Simple 15-45 second videos for Reels, Tiktok & Shorts.</p>
                        <p>4 videos: $99/mo <br> 8 videos: $189/mo <br> 12 videos: $269/mo</p>
                        <button type="button" class="btn btn-primary w-100">Buy stand-alone</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card h-100 py-2">
                    <div class="card-body text-center p-5 bg-border-purple rounded">
                        <h4>Email Marketing From $149/mo</h4>
                        <p class="py-3">Email design & copywriting inside your email marketing platform.</p>
                        <p>2 emails: $149/mo <br> 4 emails: $289/mo <br> 8 emails: $549/mo</p>
                        <button type="button" class="btn btn-primary w-100">Buy stand-alone</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card h-100 py-2">
                    <div class="card-body text-center p-5 bg-border-purple rounded">
                        <h4>Blog Posts From $49/mo</h4>
                        <p class="py-3">Fully SEO-optimized blog posts for your website.</p>
                        <p>500 words: $49/mo <br> 1000 words: $79/mo <br> 1500 words: $99/mo</p>
                        <button type="button" class="btn btn-primary w-100">Buy stand-alone</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card h-100 py-2">
                    <div class="card-body text-center p-5 bg-border-purple rounded">
                        <h4>Instagram Stories From $49/mo</h4>
                        <p class="py-3">Custom designed Instagram Stories.</p>
                        <p>10 stories: $49/mo <br> 20 stories: $89/mo <br> 30 stories: $129/mo</p>
                        <button type="button" class="btn btn-primary w-100">Buy stand-alone</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card h-100 py-2">
                    <div class="card-body text-center p-5 bg-border-purple rounded">
                        <h4>Instagram Carousels $5/mo each</h4>
                        <p class="py-3">Replace regular static Instagram posts with carousel posts that have between 2-4 slides each.</p>
                        <button type="button" class="btn btn-primary w-100">Buy stand-alone</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="social-media-channels py-5">
    <div class="container">
        <h1 class="text-center pb-5">Social Media Channels</h1>
        <img src="./dist/img/social-media-channels.png" class="w-100" alt="Social Media Channels">
    </div>
</section>

<section class="money-back pt-5 pb-4">
    <div class="container bg-gradient-1 text-center py-5">
        <img src="./dist/img/money-back.png" style="width: 200px; position: absolute; margin-top: -120px; margin-left: -100px" alt="Social Media Channels">
        <h1 class="text-light pt-5">14-Day Money Back Guarantee</h1>
        <p class="text-light pt-4">If you're not completely satisfied with the quality of your social media posts, you can cancel your subscription within the first 14 days and receive a full refund. This allows you to try out Social Media 99 risk-free.</p>
    </div>
</section>

<section class="pb-5">
    <div class="container bg-light-purple text-center py-5">
        <h6 class="text-dark">Looking to resell our services to your clients?</h6>
        <p class="text-dark">Interested in white-labeling or reselling our service to your clients? Explore our agency reseller program by clicking here to learn more.</p>
    </div>
</section>

<section>
    <div class="container text-center py-5">
        <h1 class="text-center pb-5">Included with each plan</h1>
        <p class="text-dark">For just $99, Social Media for 99 offers content management services tailored to busy entrepreneurs. We ensure your consistent presence on social platforms, bolstering your relevance, credibility, and approachability to customers and prospects alike.</p>
    </div>
</section>

<section class="pb-5">
    <div class="container bg-light-purple py-5">
        <div class="row">
            <div class="col-sm-12 col-lg-6 p-2">
                <h5 class="text-dark">High-quality content</h5>
                <p class="text-dark">Enhance your brand's digital footprint with our premium content services. Our skilled team crafts captivating posts tailored to resonate with your audience, elevating your brand's voice and online impact.</p>
            </div>
            <div class="col-sm-12 col-lg-6 p-2">
                <h5 class="text-dark">Graphic design posts</h5>
                <p class="text-dark">Revamp your social media profiles with our visually captivating graphic design posts. We merge eye-catching visuals with powerful messages, fostering engagement and enriching your brand identity.</p>
            </div>
            <div class="col-sm-12 col-lg-6 p-2">
                <h5 class="text-dark">Review & approval process</h5>
                <p class="text-dark">We guarantee that our content reflects your brand values. Easily review, provide feedback, and approve content using our intuitive platform. We prioritize transparency and will only publish content that meets your approval.</p>
            </div>
            <div class="col-sm-12 col-lg-6 p-2">
                <h5 class="text-dark">Dedicated content specialist</h5>
                <p class="text-dark">Partner with us and gain access to a dedicated content specialist who comprehends your brand's identity and goals. Together, we'll craft a tailored content strategy designed to deliver impactful results and cultivate a strong online presence.</p>
            </div>
            <div class="col-sm-12 col-lg-6 p-2">
                <h5 class="text-dark">Scheduled & posted for you</h5>
                <p class="text-dark">Sit back and let us take care of your content scheduling and posting. Through strategic timing and unwavering consistency, we ensure your brand remains forefront in the minds of your followers across multiple social media platforms.</p>
            </div>
            <div class="col-sm-12 col-lg-6 p-2">
                <h5 class="text-dark">Dedicated account manager</h5>
                <p class="text-dark">Count on our dedicated account managers for seamless and effective communication. They grasp your requirements, offer expert advice, and guarantee the delivery of premium service to elevate your brand to new heights.</p>
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

<?php include realpath(__DIR__ . '/includes/layout/footer.php') ?>