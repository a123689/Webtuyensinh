<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span><strong>administration</strong></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="User.html"><i class="fas fa-users"></i><span>User</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Post.html"><i class="fas fa-upload"></i><span>Posts</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="TuyenSinh.html"><i class="fab fa-wpforms"></i><span>Tuyển sinh</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <nav class="navbar navbar-light navbar-expand-md">
                            <div class="container-fluid"><a class="navbar-brand" href="#">User</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse"
                                    id="navcol-2">
                                    <ul class="nav navbar-nav">
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="Register.html">Thêm admin</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Câp quyền</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Xóa</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Admin Yh</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar5.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
                <form>
                    <h6 style="color: rgb(0,0,0);">Tài khoản</h6><input id="account" class="form-control" type="text"></form>
                <form>
                    <h6 style="color: rgb(0,0,0);">Email</h6><input id="email" class="form-control" type="email"></form>
                <form>
                    <h6 style="color: rgb(0,0,0);">Password</h6><input  id="password" class="form-control" type="password"></form>
                <div class="container-login100-form-btn">
                        <input  class="login100-form-btn"   id="btndangky" name="btndangky" type="button" value="Đăng ký" >

                    </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2019</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    

	<script type="text/javascript">
	$(document).ready(function(){
		$("#btndangky").click(function(){
			alert("đăng ký thất bại");
			var matkhau = $('#matkhau').val();
			var nhaplaimatkhau = $('#nhaplaimatkhau').val();
			var email = $('#email').val();
			var sodienthoai = $('#sodienthoai').val();
			var hoten = $('#hoten').val();
			var diachi = $('#diachi').val();
			var taikhoan = $('#taikhoan').val();
			var regextaikhoan = /^[a-zA-Z][A-z|0-9|\W|\s]{4,19}/;
			if(matkhau == '' || nhaplaimatkhau == '' || email == '' || sodienthoai == '' || hoten == '' || diachi == ''){
				$("#spanloidangnhap").html("Bạn phải nhập đầy đủ thông tin");
			  $(".loidangky").css("display","block");
			}else {

				if(!regextaikhoan.test(taikhoan)){
					$("#spanloidangnhap").html("Tài khoản phải từ 5 đến 20 ký tự, bắt đầu bằng chữ cái");
					$(".loidangky").css("display","block");
				}else {
					var filter = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
					if(!filter.test(matkhau)){
						$("#spanloidangnhap").html("Mật khẩu phải ít nhất 8 ký tự, ít nhất một chữ cái viết hoa, môt chữ cái viết thường, một số, một ký tự đặc biệt");
						$(".loidangky").css("display","block");
					}else {
						if(matkhau != nhaplaimatkhau){
							$("#spanloidangnhap").html("Nhập lại mật khẩu không chính xác");
							$(".loidangky").css("display","block");

						}else {


							var filter = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
							if (!filter.test(email)) {
								$("#spanloidangnhap").html("Địa chỉ email không hợp lệ");
								$(".loidangky").css("display","block");

							}else {

								var filter = /((09|03|07|08|05)+([0-9]{8})\b)/;
								if(!filter.test(sodienthoai)){
									$("#spanloidangnhap").html("Số điện thoại không hợp lệ");
									$(".loidangky").css("display","block");
								}else {
									$.post("kiemtrataikhoan.php",{username:$('#taikhoan').val()},function(data){
						         if(data == "false"){
											 $("#spanloidangnhap").html("Tài khoản đã tồn tại");
											 $(".loidangky").css("display","block");
										 }else {
											 $.post("kiemtraemail.php",{email:email},function(data){
												 if(data == "false"){
													 $("#spanloidangnhap").html("Email đã được sử dụng");
													 $(".loidangky").css("display","block");
												 }else {
													 $.post("dangkytaikhoan.php",{hoten:$('#hoten').val(),taikhoan:$('#taikhoan').val(),matkhau:$('#matkhau').val(),diachi:$('#diachi').val(),email:$('#email').val(),dienthoai:$('#sodienthoai').val()},function(data){
														 if(data != "false"){
															 alert("Đăng ký thành công");
															 let url = 'http://192.168.64.2/baitaplon/baitap_175A071324_175A071192/dangnhap/formdangnhap.php';
										           $('#form3').prop('action',url);
										           $('#form3').submit()
														 }else {
														 	alert("đăng ký thất bại");
														 }
														
				 						      });
												 }
												});

										 }

						      });
								}
					    }

						}
				   }

				}
			}




		});
	});

	</script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
