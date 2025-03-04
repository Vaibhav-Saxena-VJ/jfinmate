@extends('frontend.layouts.header')
@section('title', "Blog Details Page - Jfinserv")
@section('description', "")
@section('keywords', "")

@section('content')
<!-- Details Start -->
<div class="container-fluid about">
    <div class="container mb-5 pt-3 pb-5">
        <div class="row text-display" style="font-family: 'DM Sans';">
            <p><a href="{{ url('/') }}">Home</a> > <a href="#">Blogs</a> > Blog Title</p>
            <div class="col-xl-9 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="thumbnail_slider">
                                <!-- Primary Slider Start-->
                                <div id="primary_slider">
                                    <img src="{{ asset('theme') }}/frontend/img/banner-1.png" class="img-fluid rounded w-100" alt="Additional Property Image">
                                </div>
                                <!-- Primary Slider End-->
                            </div>
                        </div>
                        <div class="col-md-12 pt-2 pb-2">
                            <div class="property_block_wrap style-2">
                                <div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
                                    <div class="block-body">
                                        <div class="row mt-3">
                                            <div class="col-md-10">
                                                <p class="mb-1">Published On: 03/03/2025</p> 
                                                <p class="h3 mb-0 text-capitalize">Blog Title</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-item-content p-4 mt-3">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="property_block_wrap style-2">
                                <div class="block-body">
                                    <h2>Introduction:</h2>
                                    <p>Selling a house for cash can be overwhelming, especially when you need to close quickly. At DNT Home Buyers, We Buy Houses Fast New Jersey for cash, ensuring a fast and hassle-free process. Whether you’re facing foreclosure or divorce, or want to sell without the headaches of traditional real estate transactions, we are here to help.</p>
                                    <p>Last year, after receiving feedback from surveys and customer interviews, Realtor.com’s Enterprise Systems team was challenged to clarify our billing models for our customers. Internally, we were able to report on most of these questions and provide answers; however, customer self-service options were limited.</p>
                                    <p>Customers could access some billing information by accessing Account Statements and Invoices through their Product & Billing Portal. Although these documents had been revised a few times to mirror bank statements and other industry-standard documents, they still didn’t exist in a format that met customers’ needs.</p>
                                    <p>For example, the Account Statements and Invoices presented a running list of information in chronological order, which was often confusing and generated more questions than answers. Also, for larger customers, these documents could be many pages long without a clear summary to provide the information they need. To solve this problem, our business stakeholders came to us with a new proposal to modify the current Account Statements and Invoices. The new format would need to provide summary-level information and enable customers to drill down into specific data items. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-white rounded border p-3 shadow-sm">
                    <div class="row g-4 justify-content-center">
                        <div class="sides-widget">
                            <div class="sides-widget-header">
                                <!-- <div class="agent-photo">
                                    <img src="{{ asset('theme/frontend/img/contact-avatar.png') }}" alt="Jfinmate">
                                    
                                </div> -->
                                <div class="sides-widget-details">
                                    <h3>Are You Interested!</h3>
                                    <!-- <a href="tel:+17817548182"><span><i class="lni-phone-handset"></i> +17817548182</span></a> -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sides-widget-body simple-form">
                                <form method="POST" id="consult-form">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text" placeholder="Name *" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="contact" class="form-control" placeholder="Phone *" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email" placeholder="Email *" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="5" placeholder="Message *" required></textarea>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-primary btn-md rounded full-width" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                                <div id="thank-you-message" style="display: none;" class="alert alert-success mt-3">Thank you! Your message has been submitted.</div>
                            </div>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection