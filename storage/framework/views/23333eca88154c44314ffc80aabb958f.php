<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Product List</h1>
    </div>
    <?php if(Session::has("success")): ?>
        <div>
            <?php echo e(Session::get("success")); ?>

        </div>
    <?php endif; ?>    
</body>
</html><?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\laptop-app\resources\views/product/index.blade.php ENDPATH**/ ?>