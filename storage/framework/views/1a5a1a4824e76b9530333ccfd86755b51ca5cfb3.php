<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>" aria-label="<?php echo e(__('Register')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Date of Birth')); ?></label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control<?php echo e($errors->has('date_of_birth') ? ' is-invalid' : ''); ?>" name="date_of_birth" value="<?php echo e(old('date_of_birth')); ?>" required autofocus>

                                <?php if($errors->has('date_of_birth')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('date_of_birth')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Class')); ?></label>

                            <div class="col-md-6">
                                <select name="class" class="form-control<?php echo e($errors->has('class') ? ' is-invalid' : ''); ?>">
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    
                                </select>

                                <?php if($errors->has('class')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('class')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right"><?php echo e(__('AGE')); ?></label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control<?php echo e($errors->has('age') ? ' is-invalid' : ''); ?>" name="age" value="<?php echo e(old('age')); ?>" min="5" max="50" required autofocus>

                                <?php if($errors->has('age')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('age')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="father_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Father Name')); ?></label>

                            <div class="col-md-6">
                                <input id="father_name" type="text" class="form-control<?php echo e($errors->has('father_name') ? ' is-invalid' : ''); ?>" name="father_name" value="<?php echo e(old('father_name')); ?>" required autofocus>

                                <?php if($errors->has('father_name')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('father_name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mother_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mother Name')); ?></label>

                            <div class="col-md-6">
                                <input id="mother_name" type="text" class="form-control<?php echo e($errors->has('mother_name') ? ' is-invalid' : ''); ?>" name="mother_name" value="<?php echo e(old('mother_name')); ?>" required autofocus>

                                <?php if($errors->has('mother_name')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('mother_name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gender')); ?></label>

                            <div class="col-md-6">
                                <select name="gender" class="form-control<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    
                                </select>

                                <?php if($errors->has('gender')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('gender')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" name="address" value="<?php echo e(old('address')); ?>" required autofocus>

                                <?php if($errors->has('address')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('address')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="blood_group" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Blood group')); ?></label>

                            <div class="col-md-6">
                                <input id="blood_group" type="text" class="form-control<?php echo e($errors->has('blood_group') ? ' is-invalid' : ''); ?>" name="blood_group" value="<?php echo e(old('blood_group')); ?>" required autofocus>

                                <?php if($errors->has('blood_group')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('blood_group')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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