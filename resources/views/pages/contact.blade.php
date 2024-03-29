@extends('master.master')
@section('page_title')
    <title>Library | Contact</title>
@endsection

@section('content')

    <div class="page-content-col">
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="c-content-contact-1 c-opt-1">
            <div class="row" data-auto-height=".c-height">
                <div class="col-lg-8 col-md-6 c-desktop"></div>
                <div class="col-lg-4 col-md-6">
                    <div class="c-body">
                        <div class="c-section">
                            <h3>L<em><span style="color: orange">!</span></em>brary</h3>
                        </div>
                        <div class="c-section">
                            <div class="c-content-label uppercase bg-blue">Address</div>
                            <p>
                                1, Lateef Bamidele Street,
                                <br>Ago Palace Way, Okota,
                                <br>Lagos, Nigeria</p>
                        </div>
                        <div class="c-section">
                            <div class="c-content-label uppercase bg-blue">Contacts</div>
                            <p>
                                <strong>Tel</strong> +234 706 6003 851
                                <br>
                                <strong></strong> +234 905 9614 402</p>
                        </div>
                        <div class="c-section">
                            <div class="c-content-label uppercase bg-blue">Social</div>
                            <br>
                            <ul class="c-content-iconlist-1 ">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map" class="c-content-contact-1-gmap" style="height: 615px;"></div>
        </div>


        <div class="c-content-feedback-1 c-option-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="c-container bg-green">
                        <div class="c-content-title-1 c-inverse">
                            <h3 class="uppercase">Need to know more?</h3>
                            <div class="c-line-left"></div>
                            <p class="c-font-lowercase">Try visiting our FAQ page to learn more about our greatest ever expanding theme, Metronic.</p>
                            <button class="btn grey-cararra font-dark">Learn More</button>
                        </div>
                    </div>
                    <div class="c-container bg-grey-steel">
                        <div class="c-content-title-1">
                            <h3 class="uppercase">Have a question?</h3>
                            <div class="c-line-left bg-dark"></div>
                            <form action="#">
                                <div class="input-group input-group-lg c-square">
                                    <input type="text" class="form-control c-square" placeholder="Ask a question">
                                    <span class="input-group-btn">
                                        <button class="btn uppercase" type="button">Go!</button>
                                    </span>
                                </div>
                            </form>
                            <p>Ask your questions away and let our dedicated customer service help you look through our FAQs to get your questions answered!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="c-contact">
                        <div class="c-content-title-1">
                            <h3 class="uppercase">Keep in touch</h3>
                            <div class="c-line-left bg-dark"></div>
                            <p class="c-font-lowercase">Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.</p>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name" class="form-control input-md"> </div>
                            <div class="form-group">
                                <input type="text" placeholder="Your Email" class="form-control input-md"> </div>
                            <div class="form-group">
                                <input type="text" placeholder="Contact Phone" class="form-control input-md"> </div>
                            <div class="form-group">
                                <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control input-md"></textarea>
                            </div>
                            <button type="submit" class="btn grey">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>

    <script>
        function myMap() {

            // This will Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 5.5093520, lng: 7.0417650},
                zoom: 10
            });

        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyAzcTdKkDBo1lcMr68fPwiX2fIsUR9ZVc8" async defer></script>

@endsection