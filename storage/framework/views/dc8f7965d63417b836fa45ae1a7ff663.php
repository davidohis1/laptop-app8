<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/show.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/main2.css')); ?>">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</head>
<body>
    
        <nav>
            <h1>ILARO <span class="span100">BOOKSTORE</span></h1>
            <ul>
                <b><li><input type="search" class="input1" name="search" placeholder="search books..."></li></b>
                <b><li><input type="submit" name="submit" class="input2" value="search"></li></b>
            </ul>
            <div id="user">
                <a onclick="show()" id="show"><img src="/images/cart.png" alt=""></a>
                <h1 class="span"><?php echo e($count); ?></h1>
            </div>
            
        </nav>
        <div class="cart" id="cart" style="display:none;">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0 ?>
                        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><img src="/uploads/<?php echo e($details->image); ?>" alt="" width="50px" height="75px"></td>
                                <td class="span11"><?php echo e($details->title); ?> <br> <span class="span10"><?php echo e($details->author); ?></span></td>
                                <td>$<?php echo e($details->price); ?></td>
                                <td><?php echo e($details->quantity); ?></td>
                                <td><a href="<?php echo e(route('clearcart', $details->bookid)); ?>"><img src="/images/delete.png" alt="" width="20px" height="20px"></a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        
                        <?php $price = 0;?>
                        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $com = intval($details['price']) * intval($details['quantity']);
                            $price += $com;
                            ?>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td class="span12">Total $<?php echo $price;?></td>
                        <td><button>Pay Now</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

    <div class="product">
        <div class="prod_img">
            <img src="/uploads/<?php echo e($view->image); ?>" alt="">
        </div>
        <div class="prod_detail">
            <?php if(Session::has('success')): ?>
            <script> alert('<?php echo e(Session::get('success')); ?>'); </script>
            <?php endif; ?>
            <?php if(Session::has('fail')): ?>
            <div class="alert alert-danger">
                <?php echo e(Session::get('fail')); ?>

            </div>
            <?php endif; ?>
            <h1><?php echo e($view->title); ?></h1>
            <div class="break">
                <h2 class="b2"><?php echo e($view->author); ?></h2>
                <h3 class="b2">$<?php echo e($view->price); ?></h3>
            </div>
            <div class="action">
                <a href="">Buy Now</a>
                <div>
                    <form action="">
                        <a href="<?php echo e(route('addtocart', $view->id)); ?>">Add to Cart</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="prod_about">
            <div class="table" id="t1">
                <div class="tr">
                    <h1>Title</h1>
                    <h2><?php echo e($view->title); ?></h2>
                </div class="tr">
                <div class="tr">
                    <h1>Author</h1>
                    <h2><?php echo e($view->author); ?></h2>
                </div class="tr">
                <div class="tr">
                    <h1>Pages</h1>
                    <h2><?php echo e($view->page); ?> Pages</h2>
                </div class="tr">
                <div class="tr">
                    <h1>Format</h1>
                    <h2><?php echo e($view->format); ?></h2>
                </div class="tr">
            </div>
            <div class="table">
                <div class="tr">
                    <h1>ISBN</h1>
                    <h2><?php echo e($view->isbn); ?></h2>
                </div class="tr">
                <div class="tr">
                    <h1>Language</h1>
                    <h2><?php echo e($view->language); ?></h2>
                </div class="tr">
                <div class="tr">
                    <h1>Dimension</h1>
                    <h2><?php echo e($view->dimension); ?></h2>
                </div class="tr">
                <div class="tr">
                    <h1>Category</h1>
                    <h2><?php echo e($view->category); ?></h2>
                </div class="tr">
            </div>
            <div class="table2">
                <h1>About</h1>
                <h2>Perspiciatis, dolore fuga, aperiam iure cum molestiae ullam possimus, dolores iste rem similique tempore recusandae fugit delectus facere eum dolorem nostrum magnam architecto explicabo? Ipsa, reprehenderit deleniti! Veniam ipsa iusto voluptatibus fuga.</h2>
            </div>
        </div>
    </div>


    <div id="section_2a">
        <div class="nav2">
            <h1>SIMILAR PRODUCTS</h1>
            <ul>
                <b><li><a href="#section_2a">Politics</a></li></b>
                <b><li><a href="#section_2b">Science</a></li></b>
                <b><li><a href="#section_2c">Art</a></li></b>
                <b><li><a href="#">Management</a></li></b>
            </ul>
        </div>
    </div>

    <div class="swiper-wrapper shelf" id="shelf">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="book">
            <div class="swiper-slide img">
                <img src="/uploads/<?php echo e($book->image); ?>" alt="">
                <div class="title">
                    <a href="/show/<?php echo e($book->id); ?>">CheckOut</a>
                </div>
                <div class="title2">
                <h1><?php echo e($book->title); ?></h1>
                    <div class="title3">
                        <h2><?php echo e($book->author); ?></h2>
                        <h3>$<?php echo e($book->price); ?></h3>
                    </div><br><br>
                    <a href="/show/<?php echo e($book->id); ?>">Buy Now</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div id="section_8">
        <div class="suscribe">
            <div class="cont">
                <h1>Suscribe Newsletter </h1>
                <h2>Suscribe to get Free 50% Discount</h2>
            </div>
            <div class="form">
                <input class="input1" type="text" placeholder="Enter Your Email">
                <input class="input2" type="submit" placeholder="submit">
            </div>
        </div>
        <div class="links">
            <div class="row">
                <img src="images/logo(1).png" alt="">
                <div id="section_7b">
                    <div class="service6">
                        <img src="images/icon-pay-01.png" alt="">
                    </div>
                    <div class="service6">
                        <img src="images/icon-pay-03.png" alt="">
                    </div>
                    <div class="service6">
                        <img src="images/icon-pay-04.png" alt="">
                    </div>
                    <div class="service6">
                        <img src="images/icon-pay-05.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="list">
                    <li><a href="#" class="first">Shop Men</a></li>
                    <li><a href="#">Winter</a></li>
                    <li><a href="#">Summer</a></li>
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Formal</a></li>
                </ul>
            </div>
            <div class="row">
                <ul class="list">
                    <li><a href="#" class="first">Shop Women</a></li>
                    <li><a href="#">Winter</a></li>
                    <li><a href="#">Summer</a></li>
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Formal</a></li>
                </ul>
            </div>
            <div class="row">
                <ul class="list">
                    <li><a href="#" class="first">Baby Shop</a></li>
                    <li><a href="#">Winter</a></li>
                    <li><a href="#">Summer</a></li>
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Formal</a></li>
                </ul>
            </div>
            <div class="row">
                <ul class="list">
                    <li><a href="#" class="first">Cloh1ing</a></li>
                    <li><a href="#">Winter</a></li>
                    <li><a href="#">Summer</a></li>
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Formal</a></li>
                </ul>
            </div>
        </div>
        
    </div>

    <script src="/css/jquery-3.7.1.js"></script>
    <script src="/css/script.js"></script>
</body>
</html>
<?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\laptop-app - Copy\resources\views/show.blade.php ENDPATH**/ ?>