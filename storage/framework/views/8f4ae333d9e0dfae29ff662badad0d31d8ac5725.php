<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="auth-container">
                <?php if($status = Session::get('status')): ?>
                <div class="alert alert-info"><?php echo e($status); ?></div>
                <?php endif; ?>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <nav class="navbar">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                  <a class="navbar-brand" href="/">
                                    <img src="/images/logo.png">
                                  </a>
                                </div>
                                <div class="collapse navbar-collapse" >
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                                        <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="tab-content">
                       <br>
                       <br>
                       <br>
                       <br>




                                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('password.email')); ?>">
                                        <?php echo e(csrf_field()); ?>


                                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                                <?php if($errors->has('email')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Send Password Reset Link
                                                </button>
                                            </div>
                                        </div>
                                    </form>
 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>