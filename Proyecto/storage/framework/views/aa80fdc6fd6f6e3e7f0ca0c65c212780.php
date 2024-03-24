    <body class="m-0" style="background-color: F1F1F1">
        <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container py-5 h-100 mt-4" style="background-color: F1F1F1; width:100%">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
					<div class="card shadow-2-strong" style="border-radius: 1rem;">
						<div class="card-body p-5 text-center">			
							<img class="img mx-auto d-block" width="175" src="http://127.0.0.1:8000/img/logo.png" alt="">
															
							<div class="my-4" style="background-color:black; height: 1px; border-radius: 2rem"></div>
								<?php if($errors->any()): ?>
									<div class="alert alert-danger my-2 pb-0">
										<ul>
											<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li><?php echo e($error); ?></li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
									</div>
								<?php endif; ?>
								<?php if(session('error')): ?>
									<div class="alert alert-danger">
										<?php echo e(session('error')); ?>

									</div>
								<?php endif; ?>
								<form method="POST" action="<?php echo e(route('login')); ?>">
									<?php echo csrf_field(); ?>
									<div class="input-group mb-3">
										<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
										<input type="text" class="form-control" placeholder="Usuario" aria-label="user" name="user">
									</div>
									<div class="input-group mb-3">
										<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
										<input type="password" class="form-control" placeholder="Contraseña" aria-label="password" name="password">
									</div>	
									<div class="row">
										<button class="btn btn-warning mt-2 mx-auto d-block " style="width:50%;" type="submit">Iniciar Sesión</button>
									</div>	
									<div class="row">
										<p class="mt-3"><a href="" class="link-underline-primary">Olvidé mi contraseña</a></p>
									</div>											
								</form>		
							</div>										
						</div>
					</div>
				</div>
			</div>
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProyectoSalarrue\resources\views/welcome.blade.php ENDPATH**/ ?>