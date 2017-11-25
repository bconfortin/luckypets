<?php
    $GLOBALS['www'] = 'http://localhost/luckypets/';
    //$GLOBALS['www'] = 'http://31.220.53.123/luckypets/';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //echo $actual_link;
    function verifyLocation($link) {
        if ($link != $GLOBALS['www'] . "landing-page.php") {
            if (!isset($_SESSION['cidade']) && !isset($_SESSION['estado'])) {
                ?>
                    <script>
                        window.location = "<?= $GLOBALS['www']; ?>landing-page.php";
                    </script>
                <?php
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
// This is called with the results from from FB.getLoginStatus().
function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
        // Logged into your app and Facebook.
        loginFB();
    } else {
        // The person is not logged into your app or we are unable to tell.
        document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
}

// This function is called when someone finishes with the Login
// Button.  See the onlogin handler attached to it in the sample
// code below.
function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}

window.fbAsyncInit = function() {
    FB.init({
        appId: '347116579081153',
        cookie: false, // enable cookies to allow the server to access
        // the session
        xfbml: true, // parse social plugins on this page
        version: 'v2.8' // use graph api version 2.8
    });

    // FB.Event.subscribe('auth.login', function(response) {
    //     loginFB();
    // });
    //
    // FB.Event.subscribe('auth.logout', function(response) {
    //     $.get("clear-session.php");
    //     var www = 'http://localhost/luckypets/';
    //     location.href = www;
    // });

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
    // loginFB();
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
};

function loginFB() {
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            // the user is logged in and has authenticated your
            // app, and response.authResponse supplies
            // the user's ID, a valid access token, a signed
            // request, and the time the access token
            // and signed request each expire
            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;
            // console.log(uid);
            // console.log(accessToken);
            FB.api('/me', {
                fields: 'name, email, picture.type(large)'
            }, function(response) {
                var name = response.name;
                var email = response.email;
                var picture = response.picture.data.url;
                console.log("Email: " + email);
                console.log("UID: " + uid);
                $.post("http://31.220.53.123:8080/luckypets-servidor/api/usuario/checkFaceUser", {
                    "email": email,
                    "facebookID": uid
                }).done(function(data) {
                    console.log("Data Loaded: ");
                    console.log(data);
                    if (data == "NormalUserOnly") {
                        // Atualiza usuário usando /addFbToUser
                        pathAddFbToUser(email, uid);
                    } else if (data == "UsuarioNaoExiste") {
                        // Cria conta usando /salvaFacebook
                        pathSalvaFacebook(email, uid, name);
                    } else if (data == "NormaleFaceUser") {
                        // Já possui as duas contas
                        loginFacebook(uid);
                    } else if (data == "FaceUserOnly") {
                        loginFacebook(uid);
                    } else if (data == "Deu merda!" && "I have no idea what I'm doing!") {
                        console.log("Deu algum erro no Facebook ID ou e-mail.");
                    } else {
                        console.log("Erro desconhecido.");
                    }
               }).fail(function() {
                   console.log("Ops! Parece que temos algum problema de conexão. Tente novamente mais tarde.");
               });
            });
        } else if (response.status === 'not_authorized') {
            // the user is logged in to Facebook,
            // but has not authenticated your app
            console.log("Nós realmente precisamos dos seus dados.");
        } else {
            // the user isn't logged in to Facebook.
            console.log("Usuário não logado.");
        }
    });
}

function pathAddFbToUser(pEmail, pUserID) {
    var pUserProfile = "https://www.facebook.com/" + pUserID;
    $.ajax({
        tryCount : 0,
        retryLimit : 3,
        type: 'POST',
        crossOrigin: true,
        url:'http://31.220.53.123:8080/luckypets-servidor/api/usuario/addFbToUser',
        data: {
            email: pEmail,
            userID: pUserID,
            facebook: pUserProfile
        },
        success:function(x){
            if (x == undefined) {
                //location.href = "<?= $GLOBALS['www']; ?>dashboard.php";
                console.log("Ops! A requisição voltou vazia.");
            } else {
                loginFacebook(pUserID);
            }
        },
        error:function(xhr, textStatus, errorThrown) {
            if (textStatus == 'timeout' || xhr.status == 500 || xhr.status == 400) {
                this.tryCount++;
                if (this.tryCount <= this.retryLimit) {
                    //try again
                    $.ajax(this);
                    return;
                }
                return;
            }
            console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
        }
    });
}

function pathSalvaFacebook(pEmail, pUserID, pNome) {
    var pUserProfile = "https://www.facebook.com/" + pUserID;
    $.ajax({
        tryCount : 0,
        retryLimit : 3,
        type: 'POST',
        crossOrigin: true,
        url:'http://31.220.53.123:8080/luckypets-servidor/api/usuario/salvaFacebook',
        data: {
            email: pEmail,
            userID: pUserID,
            facebook: pUserProfile,
            nome: pNome
        },
        success:function(x){
            if (x == undefined) {
                //location.href = "<?= $GLOBALS['www']; ?>dashboard.php";
                console.log("Ops! A requisição voltou vazia.");
            } else {
                loginFacebook(pUserID);
            }
        },
        error:function(xhr, textStatus, errorThrown) {
            if (textStatus == 'timeout' || xhr.status == 500 || xhr.status == 400) {
                this.tryCount++;
                if (this.tryCount <= this.retryLimit) {
                    //try again
                    $.ajax(this);
                    return;
                }
                return;
            }
            console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
        }
    });
}

function loginFacebook(id) {
    $.ajax({
        tryCount : 0,
        retryLimit : 3,
        type: 'POST',
        crossOrigin: true,
        url:'http://31.220.53.123:8080/luckypets-servidor/api/usuario/login-facebook',
        data: {
            facebookID: id
        },
        success:function(data){
            if (data == undefined) {
                //location.href = "<?= $GLOBALS['www']; ?>dashboard.php";
                console.log("Ops! A requisição voltou vazia.");
            } else {
                // console.log(data);
                var basicAuth;
                if (data.email != null && data.email != "" && data.senha != null && data.senha != "") {
                    basicAuth = make_base_auth(data.email, data.senha);
                } else {
                    basicAuth = "";
                }
                $.post("<?= $GLOBALS['www']; ?>login-backend.php", {
                    "administrador": data.administrador,
                    "authToken": data.authToken,
                    "celular": data.celular,
                    "email": data.email,
                    "facebook": data.facebook,
                    "id": data.id,
                    "imagem": data.imagem,
                    "caminhoCompletoImagem": "http://31.220.53.123:8080/luckypets-servidor/api/file/" + data.id + "/" + data.imagem,
                    "nome": data.nome,
                    "senha": data.senha,
                    "telefone": data.telefone,
                    "basicAuth": basicAuth,
                    "logoucomface": "true"
                }).done(function(data) {
                    <?php if (!isset($_SESSION['logoucomface'])) { ?>
                        location.href = "<?= $GLOBALS['www']; ?>";
                    <?php } else { ?>
                        console.log("Usuário logado via facebook");
                    <?php } ?>
                });
            }
        },
        error:function(xhr, textStatus, errorThrown) {
            if (textStatus == 'timeout' || xhr.status == 500 || xhr.status == 400) {
                this.tryCount++;
                if (this.tryCount <= this.retryLimit) {
                    //try again
                    $.ajax(this);
                    return;
                }
                return;
            }
            console.log("Não foi possível fazer sua requisição. Tente novamente mais tarde.");
        }
    });
}

// Load the SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
