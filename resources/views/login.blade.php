<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <label class="logo"><img src="/css/images/logo(1).png" alt=""></label>
            <form action="{{route('welcomepost')}}" method="post">
                @csrf
            <ul>
                <b><li><input type="search" name="search" class="input1" placeholder="search books..."></li></b>
                <b><li><input type="submit" name="submit" class="input2" value="search"></li></b>
                <!-- <b><li><a href="#"><img src="/images/search.png" alt=""></a></li></b> -->
            </ul>
            </form>
            <div id="user">
                <img src="/images/cart.png" alt="">  
            </div>
            
        </nav>
    </header>
    <div class="section1">
        <div class="section10">
            <form action="{{ route('authenticate') }}" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                </div>
            </form>
        </div>
        <div class="section11">

        </div>
    </div>
</body>
</html>