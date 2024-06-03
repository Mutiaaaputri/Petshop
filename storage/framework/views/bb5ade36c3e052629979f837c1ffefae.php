
<?php $__env->startSection('content'); ?>

<div class="container mt-4">
   <div class= "table-responsive p-3 rounded-3">
       <table class="table table-bordered table-hover table-striped mb-o bg white">
           <thead>
               <tr class=" text-center">
                    <th> no</th>
                   <th> kode barang</th>
                   <th> Nama barang</th>
                   <th> Harga barang</th>
                   <th> jumlah</th>
                   <th> stok </th>
                   <th> Deskripsi barang</th>
                   <th></th>
           </thead>

<tbody>
   <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <tr>

       <td><?php echo e($product->code); ?></td>
       <td><?php echo e($product->namabarang); ?></td>
       <td><?php echo e($product->harga); ?></td>
       <td><?php echo e($product->jumlah); ?></td>
       <td><?php echo e($product->stok_id); ?></td>
       <td><?php echo e($product->Deskripsi); ?></td>
       <td>
                           <div class="d-flex">
                               
                               

                               <div>
                                   <form action="<?php echo e(route('product.destroy', ['product' => 1])); ?>" method="POST">
                                       <?php echo csrf_field(); ?>
                                       <?php echo method_field('delete'); ?>
                                       <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                   </form>
                               </div>
                           </div>
                       </td>
                   </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
       
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kuliah\Laravel2\Petshop-web\resources\views/product/index.blade.php ENDPATH**/ ?>