
<?php $__env->startSection('content'); ?>
 
 
<div class="card">
  <div class="card-header">product Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : <?php echo e($product->name); ?></h5>
        <p class="card-text">Image :  <img src="/images/<?php echo e($product->image); ?>" width="500px"></p>
        <p class="card-text">Price : <?php echo e($product->price); ?></p>
        <p class="card-text">Status : <?php echo e($product->status); ?></p>
		
  </div>
       
    </hr>
  
  </div>
</div>
<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\xampp\htdocs\InternshipAssignment\resources\views/product/show.blade.php ENDPATH**/ ?>