<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
<div class="auth-container">

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
					<!-- <li class="active"><a href="<?php echo e(route('register')); ?>">Register</a></li> -->
					<li><a href="<?php echo e(route('login')); ?>">Login</a></li>
				  </ul>
				</div>
			  </div>
			</nav>



	   
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="Register">
					<h3 class="text-center">Create an account or <a href="<?php echo e(route('login')); ?>">login.</a></h3>
					<div class="row">
										<div class="col-md-8 col-md-offset-2">
								<form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('register')); ?>">
									<?php echo e(csrf_field()); ?>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">
												<div class="col-md-12">
													<i class="input-icon fa fa-user"></i>
													<input id="first_name" type="text" class="form-control" name="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="First name" required autofocus>

													<?php if($errors->has('first_name')): ?>
														<span class="help-block">
															<strong><?php echo e($errors->first('first_name')); ?></strong>
														</span>
													<?php endif; ?>
												</div>
											</div>        
										</div>
										<div class="col-md-6">
											<div class="form-group<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">
												<div class="col-md-12">
													<input id="last_name" type="text" class="form-control nlp" name="last_name" value="<?php echo e(old('last_name')); ?>" placeholder="Last name" required autofocus>

													<?php if($errors->has('last_name')): ?>
														<span class="help-block">
															<strong><?php echo e($errors->first('last_name')); ?></strong>
														</span>
													<?php endif; ?>
												</div>
											</div>        
										</div>
									</div>

									<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
										<div class="col-md-12">
										<i class="input-icon fa fa-envelope-o"></i>
											<input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" required>

											<?php if($errors->has('email')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('email')); ?></strong>
												</span>
											<?php endif; ?>
										</div>
									</div>

									<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
										<div class="col-md-12">
										<i class="input-icon fa fa-lock"></i>
											<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

											<?php if($errors->has('password')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('password')); ?></strong>
												</span>
											<?php endif; ?>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<i class="input-icon fa fa-lock"></i>
											<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation" required>
										</div>
									</div>
									<div class="form-group<?php echo e($errors->has('tos') ? ' has-error' : ''); ?>">
										<div class="col-md-12">
											<div class="checkbox">
												
													<input class="check-toog left-toog" type="checkbox" name="tos" class="tos" value="yes" id="conditions"> 
													<label for="conditions">I agree to the <a target="_blank" href="https://bulk.ly/terms">terms and conditions.</a></label>

											<?php if($errors->has('tos')): ?>
												<span>
													<strong><?php echo e($errors->first('tos')); ?></strong>
												</span>
											<?php endif; ?>

												
											</div>
	
										</div>
									</div>



								








									<div class="form-group<?php echo e($errors->has('recaptcha') ? ' has-error' : ''); ?>">
										<div class="col-md-12 text-center">
											<div style="display: inline-block;" data-callback="recaptchaCallback"  class="g-recaptcha" data-sitekey="<?php echo env('RECAPTCHAKEY'); ?>"></div>

											<?php if($errors->has('recaptcha')): ?>
												<div>
													<strong><?php echo e($errors->first('recaptcha')); ?></strong>
												</div>
											<?php endif; ?>

												

	
										</div>
									</div>
	
									
									
									
									
									<div class="form-group text-center">
										<div class="col-md-12">
											<button id="CreateAcount" type="submit" class="btn btn-default width-btn btn-dc btn-block">
											
												Create Acount <i class="fa-btn fa fa-angle-right"></i>
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

		</div>
	</div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    document.getElementById("CreateAcount").disabled = true;
    function recaptchaCallback(response){
        console.log(response);
        if(response){
            document.getElementById("CreateAcount").disabled = false;
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>