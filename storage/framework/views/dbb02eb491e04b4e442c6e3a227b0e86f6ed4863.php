<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="width: 50%; margin: auto;">
<h1>List Buah</h1>
    <h2>Jumlah buah pada list sebanyak : <?php echo e($jumlah); ?></h2>
    <a href="<?php echo e(route('add')); ?>">Tambah data</a>
    <ul>
        <?php $__currentLoopData = $buah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($b->nama); ?>

            <a href ="<?php echo e(route('edit', $b->id)); ?>"><button>Edit</button></a>
            <form action ="<?php echo e(route('hapus')); ?>" method="POST">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($b->id); ?>">
                <button type="submit">Hapus</button>
            </form>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\namaproject\resources\views/buah.blade.php ENDPATH**/ ?>