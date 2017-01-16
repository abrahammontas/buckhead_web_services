<section class="margin-bottom" id="contact">
    <div class="row">
        <div class="col-md-12 wow fadeInRight">
            <h2 class="no-margin-top">Contact Us</h2>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 wow fadeInRight">

            {{ Form::open(['method' => 'post', 'route' => 'contact', 'id' => 'contact-form']) }}

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
</section>