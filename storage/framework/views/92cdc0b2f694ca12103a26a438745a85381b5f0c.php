<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Add Instruction')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(url('notify' )); ?>" >
                        <?php echo csrf_field(); ?>
                        

                        <div class="form-group row">
                            <label for="instruction" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Instruction')); ?></label>

                            <div class="col-md-6">
                                <input id="instruction" type="text" class="form-control<?php echo e($errors->has('Instruction') ? ' is-invalid' : ''); ?>" name="instruction" value="<?php echo e(old('instruction')); ?>" required autofocus>

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Class')); ?></label>

                            <div class="col-md-6">
                                <select name="class" class="form-control<?php echo e($errors->has('class') ? ' is-invalid' : ''); ?>">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    
                                </select>

                                <?php if($errors->has('class')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('class')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('SEND')); ?>

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