<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account Login</title>
    @include('includes.css')

</head>


<body>




    <div class="container">
        <div class="row align-items-center justify-content-center text-center">


            <div class="main">
                <img class="big-logo top-sm-margin bottom-sm-margin" src="images/logo2.png" ALIGN="center" BR
                    CLEAR="center" />
                <p class="h4 text-center">Want to list a new venue? Sign up <a class="xs-block" href="{{url('/register')}}">Click here</a>
                </p>

                <div class="well">
                    <div class="bg-light">
                        <form action="/Account/Login?ReturnUrl=%2F" method="post"><input
                                name="__RequestVerificationToken" type="hidden"
                                value="uwyQ0KGh1XrJdsS25RoFvIT9A_of6yvkJACH2T8AQQJurhvdGTH5dDHM-SE8b6T0_Ev6j-eTmo6K5zfMz-BalNf8uTQ1" />
                            <div class="form-group">
                                <input type="email" class="form-control" name="emailAddress" id="emailAddress" required
                                    placeholder="Email Address" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" required
                                    placeholder="Password" />
                                <a class="pull-right forgot-link" href="/Account/Forgot">Forgot password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg top-sm-margin">Log In</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script src="/Js/Login?v=AaZephQcOV3se4YoGvclMYH8Oob86jc3WuMSkKQuF5M1"></script>


</body>

</html>
