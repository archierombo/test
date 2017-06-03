<?php $__env->startSection('title', 'Edit Client'); ?>
<?php $__env->startSection('content'); ?>
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Client</div>
                 <p> <a href="<?php echo e(route('client.index')); ?>">Go back to all Clients.</a></p>
                   <div class="panel-body">
                <?php echo Form::model($clients,['route' => ['client.update', $clients->id],'method' => 'PUT','class'=>'form-horizontal','files' => 'true']); ?>


                 <div class="form-group"><!--product_name-->
                 <?php echo e(Form::label('client_name','Client Name',['class' => 'col-md-4 control-label'])); ?>

                 <div class="col-md-6">
                     <?php echo e(Form::text('client_name',null,["class" => 'form-control'])); ?>

                 </div>
                 </div><!--product_name-->
                 <div class="form-group"><!--sector-->
                       <?php echo e(Form::label('email','E-Mail',['class' => 'col-md-4 control-label'])); ?>

                       <div class="col-md-6">
                            <?php echo e(Form::text('email',null,["class" => 'form-control'])); ?>

                       </div>
                 </div><!--sector-->
                  <div class="form-group"><!--sub_sector-->
                        <?php echo e(Form::label('phone','Phone',['class' => 'col-md-4 control-label'])); ?>

                         <div class="col-md-6">
                            <?php echo e(Form::text('phone',null,["class" => 'form-control'])); ?>

                       </div>
                  </div><!--sub_sector-->
                  
                  
                 
                  
                   
                  
                 
                  
                   
                
                  
                   <div class="row" style="margin-bottom: 12px;">
                <div class="col-md-12">
                    <?php echo Form::submit('Update Client',array('class'=> 'btn btn-block btn-success')); ?>

                </div>
               
            </div>
                    <?php echo Form::close(); ?>

               
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>