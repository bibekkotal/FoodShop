<nav class="navbar top-bar fixed-top">

		<p class="brand">Foods Plaza</p>

		<div class="search-box mb-3">
			<input type="text" name="search" autocomplete="">
				<button type="submit" class="btn" name="search">
					<i class="fas fa-search" style="color: white;"></i>
				</button>
		</div>

		<div class="profile mb-3">

			<a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-user" style="color: white; font-size: 20px;"></i></a>

				 <!-- Dropdown - User Information -->
				 <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

			<div class="col-md-12">
				<div class="row pl-3">
					<h4>Welcome <?php echo $_SESSION['an']; ?> !</h4>
				</div>
				<div class="row mr-2">
					<div class="col-md-6">
						<a class="dropdown-item mb-2" href="./cart.php"><i class="fas fa-cart-arrow-down"></i> Cart</a>
					</div>
					<div class="col-md-6">
						<a class="dropdown-item mb-2" href="./order.php"><i class="fas fa-cart-arrow-down"></i> My Order</a>
					</div>
				</div>
				<div class="row mr-2 mb-3">
					<div class="col-md-6">
			<a class="dropdown-item " href="./m-inc/usignup.php" style="color: #C51616"><i class="fas fa-sign-out-alt"></i> Register</a>
					</div>
					<div class="col-md-6">
			<a class="dropdown-item" href="./m-inc/ulogout.php" style="color: #C51616"><i class="fas fa-sign-out-alt"></i> Logout</a>
					</div>
				</div>
			</div>

                 </div>
		</div>

</nav>