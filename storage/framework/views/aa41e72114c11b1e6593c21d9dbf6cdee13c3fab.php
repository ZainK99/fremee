<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                <?php if($errors->has('social')): ?>
                <div class="alert alert-warning">
                    <?php echo e($errors->first('social')); ?>

                </div>
                <?php endif; ?>
                
                <div class="col-md-8 col-md-offset-4">
                    <a class="btn btn-default" href="auth/login/line">
                        Add Line Login
                    </a>             
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/test_project/resources/views/home.blade.php ENDPATH**/ ?>