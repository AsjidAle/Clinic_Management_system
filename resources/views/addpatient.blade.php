@include('parts/header')
<button class="btn" data-toggle="modal" data-target="#myModal">Get Appointment</button>

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
@include('parts/footer')