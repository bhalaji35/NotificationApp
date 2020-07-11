<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Course Registration')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(url('reg' )); ?>" >
                        <?php echo csrf_field(); ?>
                        
                        <div class="form-group row">
                            <label for="course_code" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Course Code')); ?></label>

                            <div class="col-md-6">
                                <select name="course_code" class="form-control<?php echo e($errors->has('course_code') ? ' is-invalid' : ''); ?>" name="course_code" value="<?php echo e(old('course_code')); ?>" required autofocus>
                                    <?php $__currentLoopData = $Courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    {
                                       <option value="<?php echo e($course->course_code); ?>"><?php echo e($course->course_code); ?></option>
                                    }
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>

                               
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>