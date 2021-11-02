<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>Nam libero tempore, cum soluta nobis est eligendi 
				optio cumque nihil impedit quo minus id quod maxime 
				placeat facere possimus.</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="{{ url('') }}">Home</a></li>
				<li><a href="{{ url('kitchen') }}">Kitchen</a></li>
				<li><a href="{{ url('care') }}">Personal Care</a></li>
				<li><a href="{{ url('hold') }}">Household</a></li>						 
				<li><a href="{{ url('codes') }}">Short Codes</a></li> 
				<li><a href="{{ url('contact') }}">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="{{ url('shipping') }}">Shipping</a></li>
				<li><a href="{{ url('terms') }}">Terms & Conditions</a></li>
				<li><a href="{{ url('faqs') }}">Faqs</a></li>
				<li><a href="{{ url('contact') }}">Contact</a></li>
				<li><a href="{{ url('offer') }}">Online Shopping</a></li>						 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="{{ url('login') }}">Login</a></li>
				<li><a href="{{ url('register') }}">Register</a></li>
				<li><a href="{{ url('wishlist') }}">Wishlist</a></li>
				
			</ul>
		</div>
		
		@include('partials.footer-bottom')
		@include('partials.copy-right')

	</div>
</div>