<?php $__env->startSection('title', 'Add New Client'); ?>
<?php $__env->startSection('content'); ?>
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add Product</div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="<?php echo e(route('client.store')); ?>">
                        <?php echo e(csrf_field()); ?>


                         <div class="form-group<?php echo e($errors->has('product_name') ? ' has-error' : ''); ?>"><!--product_name-->
                            <label for="client_name" class="col-md-4 control-label">Client Name</label>

                            <div class="col-md-6">
                                <input id="client_name" type="text" class="form-control" name="client_name" value="<?php echo e(old('client_name')); ?>" required autofocus>

                                <?php if($errors->has('client_name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('client_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div><!--product_name-->
                          <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>"><!--product_name-->
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div><!--product_name-->
                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>"><!--product_name-->
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" required autofocus>

                                <?php if($errors->has('phone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div><!--product_name-->
                        <div class="row">
                        	<div class="col-sm-6">
                        		 <input type="submit" class="btn btn-lg btn-primary btn-block">
                        	</div>
                        	<div class="col-sm-6">
                        		 <input type="reset" class="btn btn-lg btn-info btn-block">
                        	</div>
                        </div>
                         </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>