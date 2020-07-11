<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('My Course Lists')); ?></div>

                <div class="card-body">
                    <div class="d-flex mb-3" style="justify-content: center;">
                        <a href="<?php echo e(url('complete')); ?>"class="btn btn-info">Click here to complete course</a>

                    </div>
                    <h4 style="text-align: center;color: green">REGISTERED COURSES</h4>
                    <table class="table table-bordered"  style="width: 100%">
                        <tbody  style="width: 100%">
                            <tr >
                                <th style="width: 50%">Course Code</th>
                                <th style="width: 50%">Status</th>
                            </tr>
                            <?php $__currentLoopData = $Mycourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr style="width: 100%">
                                <?php if($course->status=='REGISTERED'): ?>
                                    <td style="width: 50%"><?php echo e($course->course_code); ?></td>
                                    <td style="width: 50%"><?php echo e($course->status); ?></td>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </tbody> 
                       
                    </table>
                    <h4 style="text-align: center;color: blue">COMPLETED COURSES</h4>
                    <table class="table table-bordered"  style="width: 100%">
                        <tbody  style="width: 100%">
                            <tr>
                                <th style="width: 50%">Course Code</th>
                                <th style="width: 50%">Status</th>
                            </tr>
                             <?php $__currentLoopData = $Mycourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr style="width: 100%">
                                <?php if($course->status=='COMPLETED'): ?>
                                    <td style="width: 50%"><?php echo e($course->course_code); ?></td>
                                    <td style="width: 50%"><?php echo e($course->status); ?></td>
                                <?php endif; ?>
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