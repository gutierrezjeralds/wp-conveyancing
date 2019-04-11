<?php
/**
 * Created by PhpStorm.
 * User: Jerald S. Gutierrez
 * Date: 4/10/2019
 * Time: 8:55 AM
 */

/**
Template Name: Index page
 */

get_template_part("template-part/main-html/header", "none");

?>

    <div class="wrapper-index-container mb-5">
        <div class="wrapper-index-head container-fluid py-5">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 mb-3">
                        <div class="index-head-title-hlr">
                            <span class="index-head-title-row-1 apple-text font-size-21px d-block">Buy or Sell property <em>with confidence</em></span>
                            <span class="index-head-title-row-2 white-text font-size-40px mt-2 d-block">Think Conveyancing Brisbane</span>
                        </div>
                        <!--divider-->
                        <div class="index-head-description-hlr mt-4">
                            <span class="index-head-description white-text font-size-25px d-block line-height-2pt-35rem">You’ll get an experienced Lawyer & Conveyancer. They’ll work on your legal paperwork, take you from frustration, and bring you to a safe, on-time settlement.</span>
                        </div>
                        <!--divider-->
                        <div class="index-head-sub-description-hlr mt-4 ml-4">
                            <ul class="font-size-22px line-height-2pt-35rem white-text">
                                <li>
                                    <span class="font-weight-bold d-inline-block">Local Legal Knowledge</span><span class="d-none d-md-inline d-lg-inline d-xl-inline">, With Responsive, 7-Day Caring Support.</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold d-inline-block mr-1">Affordable Fixed Professional Fee</span><span class="d-none d-md-inline d-lg-inline d-xl-inline">– No Surprise – 5-Star Service.</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold d-inline-block">FREE 20-Minute Consultation</span><span class="d-none d-md-inline d-lg-inline d-xl-inline">, Trusted By 16,000+ Aussies.</span>
                                </li>
                            </ul>
                        </div>
                        <!--divider-->
                        <div class="index-head-phone-hlr mt-5 py-4 white-text d-none d-md-block d-lg-block d-xl-block">
                            <span class="font-size-22px">
                                Call
                                <a href="tel:0731282003" class="font-weight-bold white-text">
                                    (07) 3128 2003
                                </a>
                                Or Request Pricing Now
                                <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/icon-arrow.png" class="pull-right mt-1 mr-5 pr-3 position-relative" alt="Arrow icon">
                            </span>
                        </div>
                        <!--divider-->
                        <div class="index-head-log-icons-hlr mt-5">
                            <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/real-estate-investing-trust-logo.png" alt="Logo icon">
                            <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/australian-business-awards-trust-logo.png" class="mx-5" alt="Logo icon">
                            <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/AFR-100.png" class="mr-5 d-none d-md-inline d-lg-inline d-xl-inline" alt="Logo icon">
                            <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/queensland-law-society-trust-logo.png" alt="Logo icon">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="index-head-quote-input-hlr">
                            <div class="index-head-quote-input-title denim-bg py-4 white-text text-center rounded-top">
                                <span class="font-size-19px font-weight-bold text-uppercase d-block mb-2">GET PRICING IN 10-SECONDS</span>
                                <span class="font-size-15px d-block">We’ll email it to you straight away.</span>
                            </div>
                            <!--divider-->
                            <div class="index-head-quote-input-cnt dark-cerulean-bg py-4 text-center rounded-bottom">
                                <div class="index-head-quote-input-cnt-head d-block d-md-none d-lg-none d-xl-none">
                                    <span class="font-size-20px white-text">
                                        CALL
                                        <a href="tel:0731282003" class="font-weight-bold white-text">
                                            (07) 3128 2003
                                        </a>
                                    </span>
                                    <span class="d-block font-size-16px white-text my-3">– or –</span>
                                    <span class="d-block font-size-16px white-text">Tell Us About Your Property,</span>
                                    <span class="d-block font-size-16px white-text mt-2 mb-3">We’ll Prepare A Quote!</span>
                                </div>
                                <!--divider-->
                                <div class="index-head-quote-input-cnt-bdy px-4">
                                    <div class="form-group">
                                        <select class="form-control" name="slc-buyer" id="slcBuyer-id">
                                            <option disabled="disabled" value="">Buying / Selling / Transferring?</option>
                                            <option selected="selected" value="buying">I am Buying</option>
                                            <option value="selling">I am Selling</option>
                                            <option value="transferring">I am Transferring</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="slc-property" id="slcProperty-id">
                                            <option disabled="disabled" selected="selected" value="">State of Property</option>
                                            <option value="NSW">NSW</option>
                                            <option selected="selected" value="QLD">QLD</option>
                                            <option value="TAS">TAS</option>
                                            <option value="VIC">VIC</option>
                                            <option value="WA">WA</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="slc-propertyType" id="slcPropertyType-id">
                                            <option disabled="disabled" value="">House / Land / OTP / Unit?</option>
                                            <option value="Land Only">Land Only</option>
                                            <option selected="selected" value="Existing House">Existing House</option>
                                            <option value="Apartment/Townhouse/Villa">Apartment/Townhouse/Villa</option>
                                            <option value="Off The Plan">Off The Plan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="firstName-id" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="lastName-id" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="emailName-id" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone-id" placeholder="Phone">
                                    </div>

                                    <button type="button" class="btn btn-success btn-block btn-lg font-weight-bold">
                                        <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/icon-arrow.png" alt="">
                                        <span>Get My Free Quote</span>
                                    </button>

                                    <span class="lock-security font-size-12px summer-sky-text mt-3 d-block">
                                        <i class="fa fa-lock fa-1x mr-1" aria-hidden="true"></i>
                                        SSL Security &
                                        <a href="https://www.thinkconveyancing.com.au/privacy-policy/" class="summer-sky-text"><u>Privacy Assured.</u></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--divider-->
        <div class="wrapper-index-property container-fluid py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="index-property-title text-center">
                            <span class="font-weight-bold font-size-36px black-text">Why Choose Us For Your Property?</span>
                        </div>
                        <!--divider-->
                        <div class="index-property-description text-center mt-5">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 index-property-description-col mb-2">
                                    <div class="card">
                                        <div class="card-head">
                                            <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/queensland-law-society-member-logo-300x107.png" class="card-img-top mx-auto" alt="Logo icon">
                                        </div>
                                        <div class="card-body position-relative text-center white-smoke-bg">
                                            <p class="card-text font-size-18px dim-gray-text">Our Lawyers Are</p>
                                            <p class="card-text font-size-18px mt-2 dim-gray-text">Members Of The QLS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 index-property-description-col mb-2">
                                    <div class="card">
                                        <div class="card-head">
                                            <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/AFR-Lists-2018-Fast-100-CMYK-1-285x300.jpg" class="card-img-top mx-auto" alt="Logo icon">
                                        </div>
                                        <div class="card-body position-relative text-center white-smoke-bg">
                                            <p class="card-text font-size-18px dim-gray-text">Rated #8 In The</p>
                                            <p class="card-text font-size-18px mt-2 dim-gray-text">AFR Top 100 for 2018</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 index-property-description-col mb-2">
                                    <div class="card">
                                        <div class="card-head">
                                            <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/realstate_au.png" class="card-img-top mx-auto" alt="Logo icon">
                                        </div>
                                        <div class="card-body position-relative text-center white-smoke-bg">
                                            <p class="card-text font-size-18px dim-gray-text">As Featured In</p>
                                            <p class="card-text font-size-18px mt-2 dim-gray-text">Realestate.com.au</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 index-property-description-col mb-2 d-none d-md-block d-lg-block d-xl-block">
                                    <div class="card">
                                        <div class="card-head">
                                            <img src="https://www.thinkconveyancing.com.au/wp-content/uploads/pexa-member-sm.png" class="card-img-top mx-auto" alt="Logo icon">
                                        </div>
                                        <div class="card-body position-relative text-center white-smoke-bg">
                                            <p class="card-text font-size-18px dim-gray-text">We Are An Official</p>
                                            <p class="card-text font-size-18px mt-2 dim-gray-text">Member of PEXA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--divider-->
        <div class="wrapper-index-rating container-fluid py-5 white-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                        <div class="index-rating-head">
                            <p class="font-weight-bold font-size-32px black-text">What Our Recent Clients Say</p>
                            <p class="mt-3 font-size-24px font-weight-normal">
                                Excellent
                                <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="ml-1" alt="Rating icon">
                            </p>
                            <p class="mt-2 dim-gray-text font-size-14px">
                                Rated <strong class="font-weight-bold">9.3</strong> out of 10 based on
                                <a href="https://au.trustpilot.com/review/thinkconveyancing.com.au?utm_medium=trustbox&amp;utm_source=Grid" target="_blank" class="dim-gray-text">
                                    <u class="font-weight-bold">406 reviews</u>
                                </a>
                                <a href="https://au.trustpilot.com/review/thinkconveyancing.com.au?utm_medium=trustbox&utm_source=Grid" target="_blank" class="dim-gray-text">
                                    <img src="<?php echo theme_img_path;?>/trustpilot-logo.png" class="align-bottom trustpilot-logo" alt="Rating icon">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--divider-->
                <div class="index-rating-cnt-boyd-hlr overflow-y-scroll overflow-x-hidden h-60vh">
                    <div class="row justify-content-start mt-5" id="indexRating-posts">
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">34 hours ago</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Mahesh Chelliah</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            Super excited to give feedback for such a wonderful service.
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            Even though buying / selling a home is incredibly stressful ThinkConveyancing team did a wonderful job for us. Very professional and thoughtful individuals who made our conveyancing smooth. We'll be happy to recommend them to our family and friends and of course we'll be getting the service of ThinkConveyancing for our future buying/selling house.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">36 hours ago</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">JMD</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            Exceeded our expectations!!!
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            Christina and the team at Think Conveyancing made our home purchasing experience feel effortless.  We were more than well informed and didn’t have any nasty surprises.  They exceeded our expectations and we are now very happy home owners 😊
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">36 hours ago</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Rod</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            Brooke from the Sunshine Coast office…
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            Brooke from the Sunshine Coast office was very professional and efficient.
                                            Highly recommended.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">5 days ago</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Brooke C</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            I had an excellent experience using…
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            I had an excellent experience using Dominique from Think in Hobart. She alerted me to TAS Property search (especially helpful as I live interstate and don't have local knowledge) and as a result of using that service I uncovered the property I was buying in Launceston was in a medium landslide hazard area. I was able to pull of the contract at no penalty and Dominique was even able to cancel the council certificates at no cost. I will definitely use Dominique again when I find the right investment property to purchase. Really impressed with the professional and thorough service.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">6 days ago</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Gerald Luo</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            I would recommend ThinkConveyancing to…
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            I would recommend ThinkConveyancing to anyone who needs help with a property transaction. Special thanks to Julia Salmon and Krizia Cham who handled my case and made it a worry free experience.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">3 April</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Kerrie Singh</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            I can highly recommend Think…
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            I can highly recommend Think Conveyancing. Robert Anderson and Rebecca McManus made the sale of my property effortless. I will definitely use again.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">2 April</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Jamie Baker</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            Outstanding Service
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            Outstanding. I dealt with Lisa Davies from the Sunshine Coast with both the selling and buying of my properties. Including a failed contract on a house 🙁. Professional, excellent at following up and always polite. Can’t recommend her more. Thank you for making a stressful process easy.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">1 April</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Justin Welch</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            Think Conveyancing were easy to deal…
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            Think Conveyancing were easy to deal with, particularly Dominique Teer Beek, who provided detailed explanations throughout the process and managed the conveyancing without issues.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">29 March</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Damian K.ten Bohmer</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            What a tremendous experience.
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            What a tremendous experience.
                                        </p>
                                        <p class="card-text font-size-14px black-text">
                                            Living in Dubai and buying on the Gold Coast presented some challenges with time zones and documentation, but Mardi looked after all the details, everything we needed was laid out so very clearly, we had no doubts this would be a good process.
                                        </p>
                                        <p class="card-text font-size-14px black-text">
                                            Would HIGHLY suggest anybody who wants to sell or buy make use of the team, we will for our next place for sure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">28 March</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Fer Buenagua</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            Dominique Ter Beek
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            Everything went well with my purchase of property with Dominique Ter Beek at Hobart office. Two thumbs up. 👍 👍
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">27 March</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Matt Hall</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            I can’t recommed these guys strongly…
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            I can’t recommed these guys strongly enough - Mike and the team were incredibly responsive and professional and made the process easy and painless.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">27 March</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">09wolfram</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            service provided met all expectations
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            service provided met all expectations, with timely and accurate advice, and result achieved
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">22 March</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Ray Biggs</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            Our experience with ThinkConvey was good
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            Our experience with ThinkConvey was very positive. We received good timely communications at all times and generally speaking their service was efficient and effective.
                                        </p>
                                        <div class="index-rating-cnt-body-reply mt-2 pl-3 pt-3">
                                            <div class="media">
                                                <i class="fa fa-reply muntain-meadow-text fa-1x mr-3" aria-hidden="true"></i>
                                                <div class="media-body">
                                                    <p class="font-size-14px dim-gray-text">Reply from</p>
                                                    <p class="font-size-14px dim-gray-text">ThinkConveyancing.com.au</p>
                                                    <p class="font-size-14px dim-gray-text mt-2">24 March</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">5 March</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Karen Parr</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            I purchased a property in ipswitch last…
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            I purchased a property in ipswitch last year,<br>
                                            Staff were very helpful and got the job done smoothly! Thankyou.<br>
                                            Ps and all by email and phone with a bit of post involved!
                                        </p>
                                        <div class="index-rating-cnt-body-reply mt-2 pl-3 pt-3">
                                            <div class="media">
                                                <i class="fa fa-reply muntain-meadow-text fa-1x mr-3" aria-hidden="true"></i>
                                                <div class="media-body">
                                                    <p class="font-size-14px dim-gray-text">Reply from</p>
                                                    <p class="font-size-14px dim-gray-text">ThinkConveyancing.com.au</p>
                                                    <p class="font-size-14px dim-gray-text mt-2">5 March</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                        <div class="col-md-3 col-sm-12 index-rating-content-hlr item">
                            <div class="card border-0">
                                <div class="card-head w-100">
                                    <img src="<?php echo theme_img_path;?>/star-5-trustpilot.png" class="mr-auto" alt="Rating icon">
                                    <span class="pull-right font-size-12px dim-gray-text index-rating-cnt-date">1 March</span>
                                    <div class="index-rating-cnt-author mt-2">
                                        <span class="font-size-12px dim-gray-text">Seasalt Peanut butter</span>
                                    </div>
                                </div>
                                <div class="card-body px-0 line-height-1pt-3rem">
                                    <div class="index-rating-cnt-title">
                                        <p class="card-text font-size-14px black-text font-weight-bold">
                                            Highly reccomend
                                        </p>
                                    </div>
                                    <div class="index-rating-cnt-body mt-2 pb-2">
                                        <p class="card-text font-size-14px black-text">
                                            The team at Think Converyening are super friendly and willing to help. There was never any confusion or mishaps along the road. I would definitely recommend these guys.
                                        </p>
                                        <div class="index-rating-cnt-body-reply mt-2 pl-3 pt-3">
                                            <div class="media">
                                                <i class="fa fa-reply muntain-meadow-text fa-1x mr-3" aria-hidden="true"></i>
                                                <div class="media-body">
                                                    <p class="font-size-14px dim-gray-text">Reply from</p>
                                                    <p class="font-size-14px dim-gray-text">ThinkConveyancing.com.au</p>
                                                    <p class="font-size-14px dim-gray-text mt-2">3 March</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--divider-->
                    </div>
                </div>
            </div>
        </div>
        <!--divider-->
        <div class="wrapper-index-yt-learn container-fluid py-4 white-bg">
            <div class="container">
                <div class="row justify-content-center index-yt-learn-row m-auto">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center wrapper-index-yt-learn-cnt-hlr w-100 h-100">
                        <iframe class="index-yt-learn-frame w-100 position-relative overflow-hidden" scrolling="no" frameborder="0" allowfullscreen="allowfullscreen" src="https://player.vimeo.com/video/327870650?title=0&amp;byline=0&amp;portrait=0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--divider-->
        <div class="wrapper-index-button-call container-fluid py-4 white-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-12 text-center mb-2">
                        <button type="button" class="btn btn-success btn-block btn-lg font-weight-bold py-3">
                            <i class="fa fa-angle-double-right"></i>
                            <span>Get My Free Quote</span>
                        </button>
                    </div>
                    <div class="col-md-1 col-sm-12 text-center d-none d-md-block d-lg-block d-xl-block align-middle align-self-center">
                        <span class="black-text font-weight-bold font-size-20px align-middle">OR</span>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center mb-2">
                        <button type="button" class="btn btn-primary btn-block btn-lg font-weight-bold py-3">
                            <i class="fa fa-phone-volume"></i>
                            <span>Call (07) 3128 2003</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_template_part("template-part/main-html/footer", "none"); ?>