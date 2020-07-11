<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Add course')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(url('store' )); ?>" >
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="course_code" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Course Code')); ?></label>

                            <div class="col-md-6">
                                <input id="course_code" type="text" class="form-control<?php echo e($errors->has('course_code') ? ' is-invalid' : ''); ?>" name="course_code" value="<?php echo e(old('course_code')); ?>" required autofocus>

                                <?php if($errors->has('course_code')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('course_code')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="course_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Course Name')); ?></label>

                            <div class="col-md-6">
                                <input id="course_name" type="text" class="form-control<?php echo e($errors->has('course_name') ? ' is-invalid' : ''); ?>" name="course_name" value="<?php echo e(old('course_name')); ?>" required autofocus>

                                <?php if($errors->has('course_name')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('course_name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('ADD')); ?>

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