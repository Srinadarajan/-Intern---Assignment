
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('product/' .$product->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($product->id); ?>" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($product->name); ?>" class="form-control"></br>
        <label>Image</label></br> <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/<?php echo e($product->image); ?>" width="300px">
		<label>Price</label></br>
        <input type="text" name="price" id="price" value="<?php echo e($product->price); ?>" class="form-control"></br>
		<label>Status</label></br>
        <input type="text" name="status" id="status" value="<?php echo e($product->status); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\xampp\htdocs\InternshipAssignment\resources\views/product/edit.blade.php ENDPATH**/ ?>