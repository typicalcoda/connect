<!Doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connect</title>
    
    <!-- Styles -->
    <style>
        body{
            background:#90a4ae;
        }
        .logo{
            text-align: center;
            padding-top:45px;
        }
        .logo img{
            width:200px;
        }
        .login{
            width: 300px;
            margin: 0 auto;
            background: #80949e;
            padding: 5px 20px;
            margin-top: 80px;
        }
        .title{
            font-size: 23px;
            color: #fbfbfb;
            font-family: 'Calibri light', sans-serif;
            padding: 20px 0;
            margin-bottom: 25px;
        }
        label{
            color: #fbfbfb;
            font-family: 'calibri light';
            display: block;
        }
        /* Change the white to any color ;) */
        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 30px #90a4ae inset;
            -webkit-text-fill-color: #4e5b61 !important;

        }
        input[type=text], input[type=password]{
            border: 0;
            padding: 8px 0px;
            width: 100%;
            outline:0;
            margin: 5px 0;
            color:#656363;
            background: #90a4ae;
        }
        #login{
          margin: 75px 0;
          padding: 12px;
          border-radius: 1px;
          border: 1px solid #80949e;
          background: #90a4ae;
          color: #47545a;
          text-transform: uppercase;
          font-weight: bold;
          font-size: 10px;
          margin-bottom: 15px;
          outline: 0;
          transition:.4s;
      }
      #login:hover{
        background:#758790;
        cursor:pointer;
    }
    .error{
       background: rgb(236, 214, 214);
       width: 100%;
       border: 1px solid rgb(232, 186, 186);
       border-radius: 5px;
       display:none;
   }
   .error >p{
     margin: 10px;
     color: #7b5555;
     font-family: tahoma;
     font-size: 12px;
 }
}
</style>

</head>
<body>
    <div class="logo">
        <img src="/img/els-logo.png" class="img-responsive" alt="">
    </div> 

    <div class="login">
        <form>
            <div class="title">Login</div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <label for="username">Username</label>
            <input id="username" type="text" name="username">

            <label for="password">Password</label>
            <input id="password" type="password" name="password">

            <div class="error"><p id="error"></p></div>
            <button type="submit" id="login">Login</button>      
        </form> 
    </div>
    {{-- --}}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $("#login").click(function(e){
            e.preventDefault();
            var _token      = $("[name=_token]").val();
            var username    = $("#username").val();
            var password    = $("#password").val();
            $("#login").load("/loading/#737373", function(){
                $.ajax({
                    type:'POST',
                    url:'/login',
                    data: {
                        '_token' : _token,
                        'username' : username,
                        'password' : password
                    },
                    success: function(res){
                        console.log(res);
                        if(!res.data){
                            $("#login").text("Login");
                            $("#error").text("Incorrect credentials, please try again.").parent().slideDown(300, function(){
                                setTimeout(function(){$(".error").slideUp();

                            }, 2000);
                            });
                        } else {
                            window.location.href = "/dashboard";
                        }


                    }
                });
            });

        });
    </script>

</body>
</html>