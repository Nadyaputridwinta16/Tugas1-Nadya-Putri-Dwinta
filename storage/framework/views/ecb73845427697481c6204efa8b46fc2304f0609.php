<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<a href="<?php echo e(route('home')); ?>">Home</a>
    <form action="<?php echo e(route('update')); ?>"method="POST">
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="<?php echo e($buah->id); ?>">
        <label for="buah">Nama Buah</label><br>
        <input type="text" name="buah" value="<?php echo e($buah->nama); ?>"><br>
        <button type="submit">Edit</button>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\namaproject\resources\views/edit.blade.php ENDPATH**/ ?>