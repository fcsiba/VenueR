<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>List</title>
    @include('includes.css')

</head>

<body>
    <script>
        dataLayer = [{
            'name': "User not logged in",
            'email': "n/a"
        }]

    </script>




    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="main">
                <a href="/">
                    <img class="big-logo top-sm-margin bottom-sm-margin" src="images/logo2.png" ALIGN="center" BR
                        CLEAR="center" /> </a>

                <h4 class="text-center bottom-sm-margin">Already have an account?&nbsp;<a href="{{url('/login')}}">Log
                        in</a></h4>
                <div class="well">

                    <div class="container bg-light">

                        <form action="/Account/List" method="post"><input name="__RequestVerificationToken"
                                type="hidden"
                                value="J2aD2IWNd5rPfFLCPlkWr4ZvfW2jyjMPOze7eB2pAyPt1R5NFDvreJldT4r6C50jHR4h_LUbnDm4yfUUdk3mxked7uY1" />
                            <h1 class="text-center bottom-sm-margin">Sign Up</h1>
                            <div class="form-group">
                                <input type="text" class="form-control" name="fullName" required id="fullName"
                                    placeholder="Your Full Name" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="emailAddress" required id="emailAddress"
                                    placeholder="Email Address" />
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="telephoneNumber" required
                                    id="telephoneNumber" placeholder="Telephone Number" />
                            </div>
                            <div class="form-group">
                                <input type="CNIC" class="form-control" name="Number" required id="CNIC"
                                    placeholder="CNIC" />
                            </div>



                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="accept"> I agree to the <a href="policy.html" _blank
                                        rel="noopener">Terms of Use</a>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="gdprOptIn" name="gdprOptIn" value="true"> Keep me
                                    informed of latest news and updates
                                </label>
                            </div>
                            <button type="submit" id="elist" class="btn btn-primary btn-wide btn-large explorebtn"
                                data-alt-text="List Your Venue" data-loading-text="List Your Venue">
                                Sign Up
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>







</body>

</html>
