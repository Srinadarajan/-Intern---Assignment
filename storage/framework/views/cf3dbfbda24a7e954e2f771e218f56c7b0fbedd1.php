
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">product Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('product')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Image</label></br>
        <input type="file" name="image" id="image" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
		<label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\xampp\htdocs\InternshipAssignment\resources\views/product/create.blade.php ENDPATH**/ ?>