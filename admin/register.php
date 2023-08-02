<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>
<body style="background: #FBC2EB;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #78A3EB, #FBC2EB);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FBC2EB, #78A3EB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4>Admin Register</h4>
			<p class="message"></p>
			<form id="admin-register-form">
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="cpassword">Confirm Password</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_register" value="1">
			  <button type="button" class="btn btn-primary register-btn">Register</button>
			</form>
		</div>
	</div>
</div>

</body>



<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
