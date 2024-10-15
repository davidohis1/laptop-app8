<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0 ?>
            <?php if(session('cart1')): ?>
                <?php $__currentLoopData = session('cart1'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id =>$details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($details['title']); ?></td>
                        <td><?php echo e($details['author']); ?></td>
                        <td><?php echo e($details['price']); ?></td>
                        <td><?php echo e($details['quantity']); ?></td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\laptop-app - Copy\resources\views/cart.blade.php ENDPATH**/ ?>