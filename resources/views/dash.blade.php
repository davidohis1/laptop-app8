<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/main2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/dash.css')}}">
</head>
<body>
    <div id="head">
        <nav>
            <h1>ILARO <span class="span100">BOOKSTORE</span></h1>
            <h1>ADMIN DASHBOARD</h1>
            <div id="show">
                <button id="user">Orders</button>
                <button><a href="/logout">Logout</a></button>
            </div>
            
        </nav>
    </div>

    <div class="data">
        <div class="data1">
            <h1>1200+</h1>
            <h2>Books Uploaded</h2>
        </div>
        <div class="data1">
            <h1>2300+</h1>
            <h2>Copies Sold</h2>
        </div>
        <div class="data1">
            <h1>50000+</h1>
            <h2>Revenue Generated</h2>
        </div>
    </div>

    <div class="allbook">
        <div class="book1">
            <div class="input10">
                <form action="{{route('dashboardpost2')}}" method="post">
                @csrf
                <input type="search" class="input100" placeholder="search books" name="search">
                <input type="submit" class="input101" value="submit">
                </form>
            </div>
            @foreach($books as $book)
            <div class="book10">
                <img src="/uploads/{{$book->image}}" alt="">
                <div class="book100">
                    <h1>{{$book->title}}</h1>
                    <h2>{{$book->author}}</h2>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, et dolore rem sequi est nulla?</h3>
                    <div class="icons">
                        <img src="/images/interface.png" alt="">
                        <img src="/images/delete.png" alt="">
                        <img src="/images/edit.png" alt="">
                    </div>
                </div>                
            </div>
            @endforeach
            <div class="btn1">
                <button>see all</button>
            </div>
        </div>
        <div class="book2">
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            @if (Session::has('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif
            <h1 class="msg">Add a New Book</h1>
            <h1 class="msg2">Add a New Book <img src="/images/add.png" alt="" onclick="show()"></h1>
            <form method="post" action="{{route('dashboardpost')}}" enctype="multipart/form-data" class="form100">
                @csrf
            <div class="book20">
                <div class="form10">
                    <div class="input11">
                        <label for="">Title</label><br>
                        <input type="text" name="title">
                    </div>
                    <div class="input11">
                        <label for="">Author</label><br>
                        <input type="text" name="author">
                    </div>
                    <div class="input11">
                        <label for="">Price</label><br>
                        <input type="number" name="price">
                    </div>
                    <div class="input11">
                        <label for="">Page</label><br>
                        <input type="text" name="page">
                    </div>
                    <div class="input11">
                        <label for="">Format</label><br>
                        <input type="text" name="format">
                    </div>
                    <div class="input11">
                        <label for="">ISBN</label><br>
                        <input type="text" name="isbn">
                    </div>
                </div>
                <div class="form10">
                    <div class="input11">
                        <label for="">Language</label><br>
                        <input type="text" name="language">
                    </div>
                    <div class="input11">
                        <label for="">Dimension</label><br>
                        <input type="text" name="dimension">
                    </div>
                    <div class="input11">
                        <label for="">Category</label><br>
                        <input type="text" name="category">
                    </div>
                    <div class="input11">
                        <label for="">File</label><br>
                        <input type="file" name="file">
                    </div>
                    <div class="input11">
                        <label for="">About</label><br>
                        <textarea name="about" id="" cols="40" rows="8"></textarea>
                    </div>
                </div>
            </div>
            <div class="submit1">
                <button type="submit" name="submit" class="submit" value="Submit">submit</button>
            </div>
            </form>
        </div>
    </div>


    <div id="section_2a">
        <div class="nav2">
            <h1>TRENDING THIS WEEK</h1>
            <ul>
                <b><li><a href="#section_2a" class="active">Politics</a></li></b>
                <b><li><a href="#section_2b">Science</a></li></b>
                <b><li><a href="#section_2c">Art</a></li></b>
                <b><li><a href="#">Management</a></li></b>
            </ul>
        </div>
    </div>
    <div class="orders">
        <div class="cart" id="cart" style="display:none;">
            <button>Pending</button> <button>Accepted</button>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Buyer</th>
                        <th>accept</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
                        @foreach($carts as $details)
                            <tr>
                                <td><img src="/uploads/{{$details->image}}" alt="" width="50px" height="75px"></td>
                                <td class="span11">{{$details->title}} <br> <span class="span10">{{$details->author}}</span></td>
                                <td>${{$details->price}}</td>
                                <td>{{$details->quantity}}</td>
                                <td>{{$details->buyer}}</td>
                                <td><a href="#"><button>Accept Order</button><a></td>
                            </tr>
                        @endforeach
                    <tr>
                        
                        <?php $price = 0;?>
                        @foreach($carts as $details)
                            <?php
                            $com = intval($details['price']) * intval($details['quantity']);
                            $price += $com;
                            ?>
                         @endforeach
                        <td class="span12">Total $<?php echo $price;?></td>
                        <td><button>Pay Now</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="section_8">
        <div class="suscribe">
            <div class="cont">
                <h1>ILARO <span class="span">BOOKSTORE </span></h1>
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
        </div>
        
    </div>


    <script>
        function view(id){
            location.href= "show/"+ id;        
        }

       function show(){
                   
        }
    </script> 
    <script src="/css/jquery-3.7.1.js"></script>
    <script src="/css/script.js"></script> 
</body>
</html>