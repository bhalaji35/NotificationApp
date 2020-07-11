<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Available Course Lists')); ?></div>

                <div class="card-body">
                    <table class="table table-bordered"  style="width: 100%">
                        <tbody  style="width: 100%">
                            <tr style="width: 100%">
                                <th>Course Code</th>
                                <th>Course Name</th>
                            </tr>
                            <?php $__currentLoopData = $Courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr style="width: 100%">
                                <td><?php echo e($course->course_code); ?></td>
                                <td><?php echo e($course->course_name); ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody>

                    </table>






                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>