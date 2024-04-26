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
        <h1 class="fw-bold text-center pb-5">Social Media Channels</h1>
        <img src="./dist/img/social-media-channels.png" class="w-100" alt="Social Media Channels">
    </div>
</section>

<?php include realpath(__DIR__ . '/includes/layout/footer.php') ?>