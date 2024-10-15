<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='<?php echo e(route("product.store")); ?>' method="GET">
        <h1>Add A Product</h1>
        <input type="text" name="name" class="form" placeholder="name"><br><br>
        <input type="text" name="price" class="form" placeholder="price"><br><br>
        <textarea name="name" class="form" placeholder="name"></textarea><br><br>
        <input type="submit" >
    </form>
</body>
</html><?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\laptop-app\resources\views/product/create.blade.php ENDPATH**/ ?>