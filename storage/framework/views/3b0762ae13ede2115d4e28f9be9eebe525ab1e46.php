<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo e(route('home')); ?>">Home</a>
    <form action="<?php echo e(route('simpan')); ?>"method="POST">
        <?php echo csrf_field(); ?>
        <label for="buah">Nama Buah</label><br>
        <input type="text" name="buah"><br>
        <button type="submit">simpan</button>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\namaproject\resources\views/tambah_data.blade.php ENDPATH**/ ?>