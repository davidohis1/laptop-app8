<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="main.css" rel="stylesheet" >

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
            <div id="pizza">
                <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($pizza['type']); ?> - <?php echo e($pizza['price']); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><br><br>
            
        </div>
    </body>
</html>
<?php /**PATH C:\Users\HP\Desktop\good\htdocs\hotel-website\resources\views/pizzas.blade.php ENDPATH**/ ?>