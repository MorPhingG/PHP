<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Levy</title>
		<style type="text/css"> 
		#login{float:right;
		       margin-right:10px;}	
		#register{float:right;
		          margin-right:10px;}
		</style>
	</head>
	<body>
<div id="sidebar">
	<div class="buttonhome" onclick="home();">Home</div>
	<div class="buttonblog" onclick="blog();">Blog</div>
	<div class="buttonlink" onclick="link();">Link</div>
</div>
	<div id="content">
		<h1><center>Hello</center></h1>
		<div id="login">
		<button onclick="login();">Login</button>
		<button onclick="register();">Register</button>
		<button onclick="logout();">Logout</button>
		</div>
	</div>

		<script type="text/javascript">
		function register(){
			window.open("register.html", "newwindow", "height=700, width=500, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no")
		}
		function link(){
			window.open("link.html","newwindow")
		}
		</script>
<script>
function home(){location.href="./index.php";}
function blog(){location.href="./blog.html";}
function link(){location.href="./link.html";}
</script>

	</body>
</html>