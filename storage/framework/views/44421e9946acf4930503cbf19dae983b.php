<?php echo $__env->make('parts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container py-5 m-5">
    <div class="container-fluid">
        <button class="btn" data-toggle="modal" data-target="#myModal">Add Patient</button>
        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Add Patient for Appointment</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="get" action='/getappointment'>
                        <div class="form-group">
                            <label for="name">Enter Patient Name</label>
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
                        <button type="submit" class="btn btn-block">Send to client appointment time via email
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
    </div>
    <table class="border border-dark table my-5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Details</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php $__currentLoopData = $patient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patients): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($patients->id); ?></td>
            <td><?php echo e($patients->name); ?></td>
            <td><?php echo e($patients->email); ?></td>
            <td><?php echo e($patients->detail); ?></td>
            <td class="text-success"><a href="/edit/<?php echo e($patients->id); ?>">Edit</a></td>
            <td><a href="/delete/<?php echo e($patients->id); ?>" class="text-danger">Delete</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="container-fluid">
        <?php echo e($patient->links()); ?>

    </div>
</div>

<?php echo $__env->make('parts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/hospital/resources/views/patients.blade.php ENDPATH**/ ?>