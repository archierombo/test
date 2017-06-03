<?php $__env->startSection('title', 'View Client'); ?>
<?php $__env->startSection('content'); ?>
<div>
    <div class="row">
        <div class="col-md-12">
       <?php if(Session::has('flash_message')): ?>
    <div class="alert alert-success">
        <?php echo e(Session::get('flash_message')); ?>

    </div>
<?php endif; ?>
            <div class="panel panel-default">
                <div class="panel-heading">View Client</div>
                <div class="panel-body">
                
                <div class="row">
    <div class="col-md-12">
    <div class="row">
        <div class="col-md-3">
        <h5>Client Name</h5><br>
        <?php echo e($clients->client_name); ?>

       
        
        </div>
        <div class="col-md-3">
         <h5>E-Mail</h5><br>
          <?php echo e($clients->email); ?>

        </div>
         <div class="col-md-3">
           <h5>Phone</h5><br>
          <?php echo e($clients->phone); ?>

        </div>
         <div class="col-md-3">
              <a href="<?php echo e(route('client.edit', $clients->id)); ?>" class="btn btn-primary">Edit Client</a>
         <?php echo Form::open(['route'=> ['client.destroy',$clients->id],'method'=>'DELETE']); ?>

        <?php echo Form::submit('Delete?',['class' => 'btn btn-danger']); ?>

        <?php echo Form::close(); ?>

         </div>
        </div>
        <hr>
        </div>
        </div>
              
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>