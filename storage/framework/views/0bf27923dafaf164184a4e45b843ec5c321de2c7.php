<?php $__env->startSection('title', 'View Clients'); ?>
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
                <div class="panel-heading">View Clients</div>
                <div class="panel-body">
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
    <div class="col-md-12">
    <div class="row">
        <div class="col-md-3">
        <?php echo e($client->client_name); ?>&nbsp;
        <a href="<?php echo e(route('client.show',$client->id)); ?>" class="btn btn-success">View</a>

   
      
        </div>
        <div class="col-md-3">
           <a href="<?php echo e(route('client.edit', $client->id)); ?>" class="btn btn-primary">Edit Client</a>
        </div>
         <div class="col-md-3">
               <?php echo Form::open(['route'=> ['client.destroy',$client->id],'method'=>'DELETE']); ?>

        <?php echo Form::submit('Delete',['class' => 'btn btn-danger']); ?>

        <?php echo Form::close(); ?>

         </div>
          <div class="col-md-3">
              
        <a href="<?php echo e(route('invoice.create',$client->id)); ?>" class="btn btn-default">Add Invoice</a>
          </div>
        </div>
        <hr>
        </div>
        </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>