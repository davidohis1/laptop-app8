<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/main.css')); ?>">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        
        
    </head>
    <body class="antialiased">
        
            <div id="pizza">
                <h1>PIZZA LIST</h1>
                <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p id="text"><?php echo e($pizza['type']); ?> - <?php echo e($pizza['price']); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><br><br>
            
        </div>
    </body>
</html>
<?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\hotel-website\resources\views/pizzas.blade.php ENDPATH**/ ?>