<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$judul;?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=base_url();?>konten/tema/lte/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>konten/tema/lte/plugins/font-awesome/css/font-awesome.min.css">    
    <link rel="stylesheet" href="<?=base_url();?>konten/tema/lte/plugins/ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url();?>konten/tema/lte/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url();?>konten/tema/lte/plugins/iCheck/square/blue.css">
	<link rel="stylesheet" href="<?=base_url();?>konten/tema/lte/dist/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
  
  
  <div class="wrapper">
  <div class="container">
		<h1>Sistem Pendukung Keputusan<br>Pemilihan Beasiswa</h1>
		
		<form action="<?=base_url();?>login" method="post">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  
  
  


    <script>
	$("#login-button").click(function(event) {
	event.preventDefault();

	$("form").fadeOut(500);
	$(".wrapper").addClass("form-success");
});
	</script>
	<!-- jQuery 2.1.4 -->
    <script src="<?=base_url();?>konten/tema/lte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?=base_url();?>konten/tema/lte/bootstrap/js/bootstrap.min.js"></script>    
  </body>
</html>
