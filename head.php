    <?php
        $GLOBALS['www'] = 'http://localhost:81/luckypets/';
        //$GLOBALS['www'] = 'http://31.220.53.123/luckypets/';
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        //echo $actual_link;
        function verifyLocation($link) {
            if ($link != $GLOBALS['www'] . "/landing-page.php") {
                if (!isset($_SESSION['cidade']) && !isset($_SESSION['estado'])) {
                    header('Location: ' . $GLOBALS['www'] . "/landing-page.php");
                    exit;
                }
            }
        }
        verifyLocation($actual_link);
    ?>
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/luckypets-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        function make_base_auth(user, password) {
            var tok = user + ':' + password;
            var hash = btoa(tok);
            return "Basic " + hash;
        }
    </script>
    <script>
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '347116579081153',
      cookie     : false,  // enable cookies to allow the server to access
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });

    // Now that we've initialized the JavaScript SDK, we call
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
    if (response.status === 'connected') {
      // the user is logged in and has authenticated your
      // app, and response.authResponse supplies
      // the user's ID, a valid access token, a signed
      // request, and the time the access token
      // and signed request each expire
      var uid = response.authResponse.userID;
      var accessToken = response.authResponse.accessToken;
      console.log(uid);
      console.log(accessToken);
      FB.api('/me', {fields: 'name, email, picture.type(large)'}, function(response) {
        console.log(response.name);
    });
    } else if (response.status === 'not_authorized') {
      // the user is logged in to Facebook,
      // but has not authenticated your app
    } else {
      // the user isn't logged in to Facebook.
    }
   });

  //   FB.login(function(loginResponse) {
  //
  // });
    };

    // Load the SDK asynchronously
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    </script>
