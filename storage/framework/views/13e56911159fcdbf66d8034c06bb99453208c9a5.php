<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">

                    <li class="list-group-item" style="font-weight: bold;">Name : <?php echo e($users->name); ?></li>
                    <li class="list-group-item" style="font-weight: bold;">Date of Birth : <?php echo e($users->date_of_birth); ?></li>
                    <li class="list-group-item" style="font-weight: bold;">Age : <?php echo e($users->age); ?></li>
                    <li class="list-group-item" style="font-weight: bold;">Father name : <?php echo e($users->father_name); ?></li>
                    <li class="list-group-item" style="font-weight: bold;">Mother name : <?php echo e($users->mother_name); ?></li>
                    <li class="list-group-item" style="font-weight: bold;">Gender : <?php echo e($users->gender); ?></li>
                    <li class="list-group-item" style="font-weight: bold;">Address : <?php echo e($users->address); ?></li>
                    <li class="list-group-item" style="font-weight: bold;">Blood Group : <?php echo e($users->blood_group); ?></li>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>