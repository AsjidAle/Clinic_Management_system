<!-- Container (The Band Section) -->
<div id="team" class="container text-center">
    <h3>THE Team</h3>
    <p><em>We love to serve!</em></p>
    <p><a href="/"><span class="text-primary">Hospital</span></a> is serving the people for more than
        36 years with its expert diverse staff.We are providing many medical solutions like from ENT to
        athopedics.</p>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <p class="text-center"><strong>Norma</strong></p><br>
            <a href="#demo" data-toggle="collapse">
                <img src="/femaled.avif" class="img-circle person" alt="Norma" width="100" height="255">
            </a>
            <div id="demo" class="collapse">
                <p>Dentist</p>
                <p>DMD</p>
                <p>Practicing since 1988</p>
            </div>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>Christane</strong></p><br>
            <a href="#demo2" data-toggle="collapse">
                <img src="/female.avif" class="img-circle person" alt="Christane" width="100" height="255">
            </a>
            <div id="demo2" class="collapse">
                <p>Physiotherapist</p>
                <p>FCPS</p>
                <p>Practicing since 1988</p>
            </div>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>David</strong></p><br>
            <a href="#demo3" data-toggle="collapse">
                <img src="/male.jpg" class="img-circle person" alt="David" width="100" height="100">
            </a>
            <div id="demo3" class="collapse">
                <p>Arthopedics</p>
                <p>MBBS, RDPs</p>
                <p>Practicing since 2005</p>
            </div>
        </div>
    </div>
</div>

<!-- Container (TOUR Section) -->
<div id="about" class="bg-1">
    <div class="container">
        <h3 class="text-center">About</h3>
        <p class="text-center"><a href="/"><span class="text-primary">Hospital</span></a> is providing
            medical problem solutions for more than 36 years free of cost. If you have any medical issue get
            your appointment.</p>

        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="/male.jpg" alt="Paris" width="400" height="300">
                    <p><strong>David</strong></p>
                    <button class="btn" data-toggle="modal" data-target="#myModal">Get Appointment</button>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="/female.avif" alt="New York" width="400" height="300">
                    <p><strong>Christane</strong></p>
                    <button class="btn" data-toggle="modal" data-target="#myModal">Get Appointment</button>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="femaled.avif" alt="San Francisco" width="400" height="300">
                    <p><strong>Norma</strong></p>
                    <button class="btn" data-toggle="modal" data-target="#myModal">Get Appointment</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Get Personalized Appointment</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="get" action='/getappointment'>
                        <div class="form-group">
                            <label for="name">Enter Name</label>
                            <input type="text" class="form-control" id="psw" placeholder="Enter Full Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="usrname" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Details</label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter details" name="description" required>
                        </div>
                        <button type="submit" class="btn btn-block">Send me my appointment time via email
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Cancel
                    </button>
                    <p>Need <a href="#">help?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
    <h3 class="text-center">Contact</h3>
    <p class="text-center"><em>We love to hear from you!</em></p>

    <div class="row">
        <div class="col-md-4">
            <p>Drop a note.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
            <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
            <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
        </div>
        <div class="col-md-8">
            <form action="" method="get">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                <br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <h3 class="text-center">From The Blog</h3>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
        <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
        <li><a data-toggle="tab" href="#menu2">Peter</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h2>Mike Ross, Manager</h2>
            <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h2>Chandler Bing, Guitarist</h2>
            <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h2>Peter Griffin, Bass player</h2>
            <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
        </div>
    </div>
</div>

<!-- Image of location/map -->
<img src="map.jpg" class="img-responsive" style="width:100%">