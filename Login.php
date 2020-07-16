<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="login-card" style="background-image:url(&quot;&quot;);background-size:cover;background-position:center center;"><img class="profile-img-card" src="assets/img/avatar_2x.png">
        <p class="profile-name-card"> </p>
        <form id="form1" class="form-signin"><span class="reauth-email"> </span><input class="form-control" type="email" id="email" required="" placeholder="Email address" autofocus=""><input class="form-control" type="password" id="password" required="" placeholder="Password">
            <div
                class="checkbox">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Remember me</label></div>
    </div><button class="btn btn-primary btn-block btn-lg btn-signin" id="btnLogin" type="submit">Sign in</button></form><a class="forgot-password" href="#">Forgot your password?</a></div>




    <script type="text/javascript">
        $(document).ready(function(){
            $("#btnLogin").click(function(){

                var password = $('#password').val();
                var email = $('#email').val();

                if(password == '' || email == ''){
                   alert("Bạn phải nhập email và mật khẩu");
               }else {
                
                $.post("checkLogin.php",{password:$('#password').val(), email:$('#email').val()},function(data){
                  alert("Bạn phải nhập email và mật khẩu"+data);
                  
                 if(data == 0){
                  
                   let url = 'http://192.168.64.3/design/index.php';
                    $('#form1').prop('action',url);
                    $('#form1').submit()
                    
                      
                 }else {
                     alert("Email hoặc mật khẩu không chính xác"+data);

                 }


              });

            }
        });
        });

    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>


<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================-->

</body>

</html>