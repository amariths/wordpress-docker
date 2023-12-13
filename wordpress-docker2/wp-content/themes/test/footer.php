




    <div class="mainfooter">
    <div class="container-fluid" >
    <div class="foot-items" class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h4>Kort om oss</h4>
						<p>det här är wordpress skapad för skolans syfte</p>
						<p>hejsan svejsan</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Kontaktuppgifter</h4>
						<p>
							The Company<br>
							Gatgatan 1<br>
							123 45 Någonstans
						</p>
						<p>
							Tel: 0123456789<br>
							E-post: <a href="">info@thecompany.com</a>
						</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						<ul class="social">
							<li>
								<i class="fa fa-facebook"></i> <a href="">Facebook</a>
							</li>
							<li>
								<i class="fa fa-twitter"></i> <a href="">Twitter</a>
							</li>
							<li>
								<i class="fa fa-instagram"></i> <a href="">Instagram</a>
							</li>
							<li>
								<i class="fa fa-linkedin" aria-hidden="true"></i> <a href="">LinkedIn</a>
							</li>
						</ul>
					</div>
				</div>

                <div class="line" >

                </div>

                <div class="bottom" class="row bottom">
					<div class="col-xs-12">
						<p>Copyright © IT-högskolan, 2016</p>
					</div>
				</div>

    </div>
    <p class="info" ><?php if (is_active_sidebar("adress widget")) {
 dynamic_sidebar("adress widget");
 }
?></p>
    </div>
    <?php wp_footer(); ?>

</body>
</html>
