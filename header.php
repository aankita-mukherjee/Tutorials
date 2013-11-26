<link type="text/css" rel="stylesheet" href="header.css">
<script type = "text/javascript" src="resources/plugins/jquery-1.10.0.js"></script>
<script type = "text/javascript" src="resources/scripts/login.js"></script>
<div class="header">
	<div>
		<a href="/index.php"><img class="logo" src="/resources/images/ohanaelogo.png"></a>
		<div>
			<div class="navBar">
				<ul>
					<li><a href="/index.php">Home</a></li>
					<li><a href="#">Features</a>
						<ul class="products">
							<li><a href="/identity_protection">Identity Protection</a></li>
							<li><a href="/information_protection">Information Protection</a></li>
                            <li><a href="/cloud_compliance">Cloud Compliance</a></li>
						</ul>
					</li>
					<li><a href="#">Solutions</a>
						<ul class="download">
							<li><a href="/business/">Business &nbsp;</a></li>
							<li><a href="/consumer/">Consumer</a></li>
                            <li><a href="/ohanae_method">The Ohanae Method</a></li>
						</ul>
					</li>
					<li><a href="#">Support</a>
						<ul class="faq">
							<li><a href="/faq">FAQ</a></li>
							
							<li><a href="/tutorials">Tutorials</a></li>
						</ul>
					</li>
					<li><a href="/blog">Blog</a></li>
					<li><a href="#">Company</a>
						<ul class="comp">
							<li><a href="/about_us">About Us</a></li>
                            <li><a href="/management_team">Management Team</a></li>
                            <li><a href="/careers">Careers</a></li>
                            <li><a href="/press_release">Press Releases</a></li>
							<li><a href="#contact">Contact Us</a></li>
                            
						</ul>
					</li>
				</ul>
			</div>
					
			<form id="search" action="http://www.google.com/search" target="_blank">
				<input type="hidden" name="domains" value="ohanae.com">
				<input type="hidden" name="oe" value="UTF-8">
				<input type="hidden" name="ie" value="UTF-8">
				<input type="hidden" name="sitesearch" value="www.ohanae.com" checked="checked">
				<input id="searchbox" name="q" type="text" placeholder="Search" class="input" onfocus="this.placeholder='';" onblur="this.placeholder='Search'">
			</form> 
            <span class="login">
				<a href="#"><span style="color:#bf2e1a; font-size:28px;">Login?</span></a>
				<span class="choice" style="font-size:28px;"><a href="#" onClick="businesslogin('')" title="Business Administrator Login">Administrator</a>|<a href="#" onClick="login('');" title="User Login">User</a></span>
			</span>
		</div>
	</div>
</div>
