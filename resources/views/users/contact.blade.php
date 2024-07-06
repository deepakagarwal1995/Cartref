@extends('users.layout', ['title' => 'Contact'])
@section('content')
    <style>
        .contact-page .card {
            background: #f7f7f7;
            padding: 10px;
            border-radius: 0;
            color: #000;
            margin-bottom: 38px;
        }

        .contact-page .card p {
            color: #000;
        }
    </style>

    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="contact-page section-b-space">
        <div class="container container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy">

                        <h2 class="title-inner1">Contact Us</h2>

                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <p>We always love hearing from our customers! Please do not hesitate to contact us should you have
                            any questions regarding our products and sizing recommendations or inquiries about your current
                            order.<br>
                            <br>
                            Contact our Customer Care team through the contact form below, email us at hello@modimal.com or
                            live chat with us via our chat widget on the bottom right hand corner of this page.
                            <br><br>
                            We will aim to respond to you within 1-2 business days.
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Write Us</h2>
                    <form class="theme-form">
                        <div class="form-row row">
                            <div class="col-md-6">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Last Name</label>
                                <input type="text" class="form-control" id="last-name" placeholder="Email"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Phone number</label>
                                <input type="text" class="form-control" id="review" placeholder="Enter your number"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email"
                                    required="">
                            </div>
                            <div class="col-md-12">
                                <label for="review">Write Your Message</label>
                                <textarea class="form-control" placeholder="Write Your Message" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-solid" type="submit">Send Your Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mt-5">

                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="ti ti-email" aria-hidden="true"></i>
                            <h5 class="card-title"><b>Chat with us</b></h5>
                            <p class="card-text">We are here and ready to chat</p>
                            <div class="collection-content">
                                <a href="#0" class="btn btn-outline">Start chat</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h5 class="card-title"><b>Call us</b></h5>
                            <p class="card-text">We're here to Talk to You</p>
                            <div class="collection-content">
                                <a href="#0" class="btn btn-outline">+1(929)460-3208</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="ti ti-email" aria-hidden="true"></i>
                            <h5 class="card-title"><b>Email Us</b></h5>
                            <p class="card-text">You are welcome to send us an email</p>
                            <div class="collection-content">
                                <a href="#0" class="btn btn-outline">Send email</a>
                            </div>
                        </div>
                    </div>


                </div>




            </div>
        </div>
    </section>
    <!--Section ends-->
@endsection
