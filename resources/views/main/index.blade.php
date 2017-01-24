@extends('layouts.main')

@section('content')

    <header id="header-full-top" class="hidden-xs header-full">
        <div class="container">
            <div class="header-full-title" style="float:none; text-align:center; margin-top:10px; margin-bottom:10px; padding-right:8%; padding-left:5%;">
                <img src="{{ asset('images/logo_horizontal_blue_325.png') }}" alt="BWS Logo">
            </div>
        </div> <!-- container -->
    </header> <!-- header-full -->

    <nav class="navbar navbar-default navbar-header-full navbar-dark yamm navbar-static-top" role="navigation" id="header">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a id="ar-brand" class="navbar-brand hidden-lg hidden-md hidden-sm" href="{{ url('/') }}">buckhead <span style="text-transform: capitalize">WebServices</span></a>
            </div> <!-- navbar-header -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="max-height:50px">
                <ul class="nav navbar-nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#process">Process</a>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!-- navbar-collapse -->
        </div><!-- container -->
    </nav>

    <header id="header-full">
        <div class="wrap-primary">
            <div class="container">
                <h1 class="head-title animated bounceInDown animation-delay-8">Buckhead Web Services</h1>
                <h2 class="secondary-color text-center head-subtitle animated fadeInUp animation-delay-14">make your business' presence known</h2>
                <p class="lead text-center animated fadeInUp animation-delay-14">Quick and quality custom websites to engage your customers/users. <br/> Leave a lasting impression.</p>
                <div class="row header-full-icons text-center" style="margin-top:60px;">
                    <div class="col-sm-3 animated fadeInDown animation-delay-15">
                        <span class="icon-ar icon-ar-circle icon-ar-xl-lg icon-ar-white icon-ar-inverse"><i class="fa fa-desktop"></i></span>
                        <h3>Responsive</h3>
                        <p class="text-center">We build our websites and applications to be 100% mobile friendly</p>
                    </div>
                    <div class="col-sm-3 animated fadeInDown animation-delay-16">
                        <span class="icon-ar icon-ar-circle icon-ar-xl-lg icon-ar-white icon-ar-inverse"><i class="fa fa-shopping-cart"></i></span>
                        <h3>E-Commerce</h3>
                        <p class="text-center">We can create a fully custom e-commerce store or build one using the <a target="_blank" href="https://www.shopify.com/" style="color:white">Shopify</a> platform.</p>
                    </div>
                    <div class="col-sm-3 animated fadeInDown animation-delay-17">
                        <span class="icon-ar icon-ar-circle icon-ar-xl-lg icon-ar-white icon-ar-inverse"><i class="fa fa-sign-in"></i></span>
                        <h3>Login Systems</h3>
                        <p class="text-center">We offer custom login systems that allow you to manage and monitor users.</p>
                    </div>
                    <div class="col-sm-3 animated fadeInDown animation-delay-18">
                        <span class="icon-ar icon-ar-circle icon-ar-xl-lg icon-ar-white icon-ar-inverse"><i class="fa fa-list-ul"></i></span>
                        <h3>Content/Blog Websites</h3>
                        <p class="text-center">Looking for just a content/blog website? We got you covered there as well!</p>
                    </div>
                </div>
                <div class="row text-center animated fadeInDown animation-delay-20" style="margin-top:60px; margin-bottom:120px" data-toggle="modal" data-target="#scheduleModal">
                    <button type="submit" class="btn btn-lg btn-home"><span style="font-weight:500">Schedule Free Phone Consultation</span></button>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <section class="margin-bottom" id="process">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="right-line">Process</h2>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="text-icon wow fadeInUp">
                        <span class="icon-ar icon-ar-lg"><i class="fa fa-phone"></i></span>
                        <div class="text-icon-content">
                            <h3 class="no-margin">FREE Consultation</h3>
                            <p>Talk one-on-one with one of our professionals to discuss your must haves, wants, and end goal for your web project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="text-icon wow fadeInUp">
                        <span class="icon-ar icon-ar-lg"><i class="fa fa-bars"></i></span>
                        <div class="text-icon-content">
                            <h3 class="no-margin">Receive A Quote</h3>
                            <p>After we gather the necessary information, we will put together a quote for the project duration and total cost.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="text-icon wow fadeInUp">
                        <span class="icon-ar icon-ar-lg"><i class="fa fa-play"></i></span>
                        <div class="text-icon-content">
                            <h3 class="no-margin">Project Start</h3>
                            <p>Once we agree on the quote and receive a signed contract, we will start phase one of the project after confirming your requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="text-icon wow fadeInUp">
                        <span class="icon-ar icon-ar-lg"><i class="fa fa-users"></i></span>
                        <div class="text-icon-content">
                            <h3 class="no-margin">Periodic Two Week Meetings</h3>
                            <p>Every two weeks, we will meet with you to present our progress and get any feedback and discuss phase two which will be done the next two weeks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="text-icon wow fadeInUp">
                        <span class="icon-ar icon-ar-lg"><i class="fa fa-hourglass-end"></i></span>
                        <div class="text-icon-content">
                            <h3 class="no-margin">Project Deadline</h3>
                            <p>As we near the projected completion date, we will discuss the look, layout, and features of the project and make sure they are to your satisfaction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="text-icon wow fadeInUp">
                        <span class="icon-ar icon-ar-lg"><i class="fa fa-wrench"></i></span>
                        <div class="text-icon-content">
                            <h3 class="no-margin">Post Maintenance</h3>
                            <p>We will provide 6 months maintenance of the website (fixing any issues that may arrise), plus an additional 10 hours of work for any changes you may need.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </section>
    </div>

    <div class="container">
        <section class="margin-bottom" id="portfolio">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="right-line">Porfolio</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="img-caption-ar wow fadeInUp">
                        <img src="{{ asset('images/portfolio/portfolio_iao.jpg') }}" class="img-responsive" alt="portfolio_iao">
                        <div class="caption-ar">
                            <div class="caption-content">
                                <h4 class="caption-title" style="margin-bottom:10px;">Iron Age Office</h4>
                                <a href="http://ironageoffice.com" target="_blank" class="animated fadeInDown">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="img-caption-ar wow fadeInUp">
                        <img src="{{ asset('images/portfolio/portfolio_viva_chicken.jpg') }}" class="img-responsive" alt="portfolio_viva_chicken">
                        <div class="caption-ar">
                            <div class="caption-content">
                                <h4 class="caption-title" style="margin-bottom:10px;">Viva Chicken</h4>
                                <a href="http://vivachicken.com" target="_blank" class="animated fadeInDown">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="img-caption-ar wow fadeInUp">
                        <img src="{{ asset('images/portfolio/portfolio_smf.jpg') }}" class="img-responsive" alt="portfolio_smf">
                        <div class="caption-ar">
                            <div class="caption-content">
                                <h4 class="caption-title" style="margin-bottom:10px;">SMF</h4>
                                <a href="http://smfco.org" target="_blank" class="animated fadeInDown">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="img-caption-ar wow fadeInUp">
                        <img src="{{ asset('images/portfolio/portfolio_ugmonk.jpg') }}" class="img-responsive" alt="portfolio_ugmonk">
                        <div class="caption-ar">
                            <div class="caption-content">
                                <h4 class="caption-title" style="margin-bottom:10px;">Ugmonk</h4>
                                <a href="http://ugmonk.com" target="_blank" class="animated fadeInDown">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="img-caption-ar wow fadeInUp">
                        <img src="{{ asset('images/portfolio/portfolio_ctc.jpg') }}" class="img-responsive" alt="portfolio_ctc">
                        <div class="caption-ar">
                            <div class="caption-content">
                                <h4 class="caption-title" style="margin-bottom:10px;">Cash To Crypto</h4>
                                <a href="http://cashtocrypto.com" target="_blank" class="animated fadeInDown">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="img-caption-ar wow fadeInUp">
                        <img src="{{ asset('images/portfolio/portfolio_slipakoff.jpg') }}" class="img-responsive" alt="portfolio_slipakoff">
                        <div class="caption-ar">
                            <div class="caption-content">
                                <h4 class="caption-title" style="margin-bottom:10px;">Slipakoff Law</h4>
                                <a href="http://slipakoff.com" target="_blank" class="animated fadeInDown">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <section class="margin-bottom" id="contact">
            <div class="row">
                <div class="col-md-12 wow fadeInRight">
                    <h2 class="no-margin-top">Contact Us</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 wow fadeInRight">

                    {{ Form::open(['method' => 'post', 'route' => 'contact', 'id' => 'contact-form']) }}

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif


                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Full Name (required)', 'required']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email (required)', 'required']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::text('company', '', ['class' => 'form-control', 'placeholder' => 'Company']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'Message/Project Description (required)', 'required']) }}
                        </div>

                        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

                        <div class="clearfix"></div>
                    {{ Form::close() }}

                </div>
                <div class="col-md-6">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default wow fadeInUp">
                            <div class="panel-heading panel-heading-link">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="fa fa-lightbulb-o"></i> Talent and creativity
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati molestiae id ipsum ipsa repudiandae. Voluptatum, molestias, quas magnam repellat quos facilis sequi. Ullam optio eius deleniti dolore quasi doloribus ipsam incidunt perferendis.</p>
                                    <p>Dolores, corrupti, laborum, officia sit aliquam doloremque accusantium nemo sunt veniam est incidunt perferendis minima obcaecati ex aperiam voluptatibus blanditiis eum suscipit magnam dolorum in adipisci nihil ipsam perspiciatis molestiae!</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default wow fadeInUp">
                            <div class="panel-heading panel-heading-link">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                    <i class="fa fa-desktop"></i> Design and code
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit dignissimos inventore cupiditate expedita saepe enim nobis nostrum? Laborum, laudantium, maiores, cupiditate, perspiciatis at ad accusamus corporis sed ipsam et velit!</p>
                                    <p>Incidunt, harum itaque voluptatum asperiores recusandae explicabo maiores. Alias, quos, ex impedit at error id laborum fugit architecto qui beatae molestiae dolorum rem veritatis quia aliquam totam accusamus perferendis. Nulla!</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default wow fadeInUp">
                            <div class="panel-heading panel-heading-link">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                    <i class="fa fa-user"></i> Quality and Support
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, rerum unde doloribus accusamus pariatur non expedita quibusdam velit totam obcaecati. Consequatur, deserunt, asperiores quam nisi earum voluptates animi labore tempore!</p>
                                    <p>Dolorum, aliquam, totam labore saepe error a eum culpa assumenda sint laudantium ipsa iure ullam et dicta nesciunt repellendus optio voluptatibus reprehenderit odit officia fugiat necessitatibus recusandae architecto ad neque?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Modal -->
                <div class="modal fade" id="scheduleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            {{ Form::open(['id' => 'book-form']) }}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Schedule Free Phone Consultation</h4>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    {{ Form::email('bookEmail', '', ['id' => 'bookEmail', 'class' => 'form-control', 'placeholder' => 'Email (required)', 'required']) }}
                                </div>

                                <div class="form-group">
                                    <label for="dtp_input2" class="col-md-4 control-label">Date Picking</label>
                                    <div class="input-group date form_date col-md-8" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                        <input id="dateInput" class="form-control" size="16" type="text" value="" readonly>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                    <input type="hidden" id="dtp_input2" value="" /><br/>
                                </div>
                                <div class="form-group">
                                    <label for="dtp_input3" class="col-md-4 control-label">Time Picking</label>
                                    <select id="timeSelect">

                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="save">Save changes</button>
                            </div>
                            {{ Form::close() }}

                            <div id="bookMessage" class="hidden">

                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <script type="text/javascript" src="./js/jquery-3.1.1.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/moment.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="application/javascript">


        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

        });

        $("#save").on('click', function(e){
            var email = $("#bookEmail").val();
            var date = $("#dtp_input2").val();
            var time = $("#timeSelect").val();

            if(time != "" && date != "" && email != "") {
                $.ajax({
                            type: "POST",
                            url: "book",
                            data: {email: email, date: date, time: time }
                        })
                        .done(function (data) {
                            $("#bookMessage").removeClass('hidden').html(data.message).addClass(data.class).delay(3000).fadeOut();
                        });
            } else {
                if(email == ""){
                    $("#bookMessage").html("You have to fill the email input!");
                } else {
                    $("#bookMessage").html("You have to select date and time!");
                }
                $("#bookMessage").removeClass('hidden').addClass("alert alert-danger").delay(3000).fadeOut();

                e.preventDefault(); // prevents default
                return false;
            }
        });

        $("#dateInput").change(function(e){
            var date = $("#dtp_input2").val();
            $('#timeSelect')
                    .find('option')
                    .remove()
                    .end();

            $.ajax({
                        type: "GET",
                        url: "time/" + date
                    })
                    .done(function (data) {
                        console.log(data);
                        $.each(data, function(k, v) {
                            $('#timeSelect').append($('<option>').text(v).attr('value', v));
                        });
                    });
        });

        var date = new Date();
        date.setDate(date.getDate() + 14);
        var day = date.getDate(),
         month = date.getMonth()+1,
         year = date.getFullYear(),
         hour = date.getHours(),
         min = date.getMinutes();


        $('.form_date').datetimepicker({
            startDate: year+"-"+month+"-"+day,
            weekStart: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            hoursDisabled: '[0,6]'
        });
        $('.form_time').datetimepicker({
            weekStart: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0,
            minuteStep: 30,
            hoursDisabled: '0,1,2,3,4,5,6,7,8,17,18,19,20,21,22,23',
        });
    </script>
@endsection
