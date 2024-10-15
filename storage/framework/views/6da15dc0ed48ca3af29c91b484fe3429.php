<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/main.css')); ?>">
</head>
<body>
    <div id="head">
        <nav>
            <label class="logo"><img src="images/logo(1).png" alt=""></label>
            
            <ul>
                <b><li><a href="#" id="active">Home</a></li></b>
                <b><li><a href="#section_2a">Mens</a></li></b>
                <b><li><a href="#section_2b">Women</a></li></b>
                <b><li><a href="#section_2c">Baby</a></li></b>
                <b><li><a href="#section_6">Blog</a></li></b>
                <b><li><a href="#">Contact</a></li></b>
            </ul>
            <div id="user">
                <a href="#" class="login">Cart</a>
            </div>
            
        </nav>
        <div id="discount">
            <h1>Sale up to 50% Biggest Discount. <span class="span_1">Shop Here</span> to Grab Your Item!</h1>
        </div>
        <div id="heading">
            <div id="head-content">
                <h1>Fashion Sale</h1> 
                <h2>Minimal Unisex Style</h2> 
                <h3>Lorem, ipsum dolor sit amet consectetur adipisicing <br>elit. Labore perferendis odio eligendi quibusdam<br> qui voluptate dolor atque asperiores assumenda nulla?</h3>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </h1>
                <a href="#" class="start">SHOP NOW</a>
            </div>
            <div id="head-img">
                <div id="back"></div>
                <img src="images/shoe1.png" alt="">
            </div>
        </div>

    </div>
    <div id="section_2a">
        <div class="nav2">
            <h1>TRENDING THIS WEEK</h1>
            <ul>
                <b><li><a href="#section_2a" class="active">Mens</a></li></b>
                <b><li><a href="#section_2b">Women</a></li></b>
                <b><li><a href="#section_2c">Baby</a></li></b>
                <b><li><a href="#">Fashion</a></li></b>
            </ul>
        </div>
    </div>
    
        <div id="section_3a">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="sec_3">
                    <div class="img1">
                        <img src="<?php echo e($user['name']); ?>" alt="" class="img">
                        <div class="img1_cont">
                            <h1 class="text"><?php echo e($user['name']); ?> <span class="span_2">$<?php echo e($user['price']); ?></span></h1>
                            <img src="images/icon-heart-01.png" alt="">
                        </div>
                        <a href='#' class="view">Quick View</a>

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
                    <li><a href="#" class="first">Clothing</a></li>
                    <li><a href="#">Winter</a></li>
                    <li><a href="#">Summer</a></li>
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Formal</a></li>
                </ul>
            </div>
        </div>
        
    </div>
</body>
</html><?php /**PATH C:\Users\HP\Desktop\example-app\htdocs\laptop-app - Copy\resources\views/users.blade.php ENDPATH**/ ?>