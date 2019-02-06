<!-- to video call or chat -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenterr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Unavailablr</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<div class="card col-lg-10">
							<div class="container-fluid">
								<h4><b>Sorry!</b></h4>
								<p>This doctor is offline. Check with another doctor or try again later ;)</p>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">See a Doctor</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<div class="card col-lg-5"><a href="?p=video-call">
							<div class="container-fluid">
								<h4><b>Video Call</b></h4>
								<p>Choose to have a video call only</p>
							</div>
						</a></div>
					<div class="col-lg-2"></div>
					<div class="card col-lg-5"><a href="#">
							<div class="container-fluid">
								<h4><b>Chat</b></h4>
								<p>Choose to live chat and you can still have a video call</p>
						</a></div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		</div>
	</div>
</div>
</div>

<!-- login modal -->
<div class="modal fade login" id="loginModal">
	<div class="modal-dialog login animated">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Login with</h4>
			</div>
			<div class="modal-body">
				<div class="box">
					<div class="content">
						<div class="division">
							<div class="line l"></div>
							<span></span>
							<div class="line r"></div>
						</div>
						<div class="error"></div>
						<div class="form loginBox">
							<form method="post" action="/login" accept-charset="UTF-8" id="login-form">
								<input id="email" class="form-control" type="text" placeholder="Email" name="email">
								<input id="password" class="form-control" type="password" placeholder="Password" name="password">
								<input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="forgot login-footer">
					<span>Looking to
						<a href="javascript: showRegisterForm();">create an account</a>
						?</span>
				</div>
				<div class="forgot register-footer" style="display:none">
					<span>Already have an account?</span>
					<a href="javascript: showLoginForm();">Login</a>
				</div>
			</div>
		</div>
	</div>
</div>











<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
						<strong>Target company Inc</strong>
						<br> JC Main Road, Near Silnile tower
						<br> Pin-21542 NewYork US.</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584
						<br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li>
							<a href="#">Latest Events</a>
						</li>
						<li>
							<a href="#">Terms and conditions</a>
						</li>
						<li>
							<a href="#">Privacy policy</a>
						</li>
						<li>
							<a href="#">Career</a>
						</li>
						<li>
							<a href="#">Contact us</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li>
							<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
						</li>
						<li>
							<a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a>
						</li>
						<li>
							<a href="#">Natus error sit voluptatem accusantium doloremque</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li>
							<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
						</li>
						<li>
							<a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a>
						</li>
						<li>
							<a href="#">Natus error sit voluptatem accusantium doloremque</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Target 2014 All right reserved. By </span>
							<a href="http://webthemez.com" target="_blank">WebThemez</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li>
							<a href="#" data-placement="top" title="Facebook">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#" data-placement="top" title="Twitter">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#" data-placement="top" title="Linkedin">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
						<li>
							<a href="#" data-placement="top" title="Pinterest">
								<i class="fa fa-pinterest"></i>
							</a>
						</li>
						<li>
							<a href="#" data-placement="top" title="Google plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<a href="#" class="scrollup">
	<i class="fa fa-angle-up active"></i>
</a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
<script src="js/login-register.js"></script>
<!-- <script src="https://static.opentok.com/v2/js/opentok.min.js"></script> -->
<!-- <script type="text/javascript" src="js/app.js"></script> -->

<Script>
	$(document).ready(function () {
		update_time();
		loaDocs();
		setInterval(() => {
			update_time();
			clearTable();
			loaDocs();
			clearTable();
		}, 60000);

		function loaDocs() {
			$.get("service/loadDocs.php",
				function (data, textStatus, jqXHR) {
					var items = [];
					parseData = JSON.parse(data);
					var o = "ONline"; var f = "Offline";
					// console.log(parseData);
					$.each(parseData, function (indexInArray, valueOfElement) {
						// console.log(valueOfElement);
						items.push("<tr>");
						items.push("<td id='" + indexInArray + "'>" + valueOfElement.doc_id + "</td>");
						items.push("<td id='" + indexInArray + "'>" + valueOfElement.fname + " " + valueOfElement.lname + "</td>");
						items.push("<td id='" + indexInArray + "'>" + valueOfElement.specialty + "</td>");
						items.push("<td id='" + indexInArray + "'>" + valueOfElement.last_seen + "</td>");
						items.push("<td class='onlineSt' id='" + indexInArray + "'>" + valueOfElement.status + "</td>");
						items.push("</tr>");
					});
					$("<tbody/>", { html: items.join("") }).appendTo('table');
				}
			);
		}
		function clearTable() {
			$('tbody').html('');
		}

		function update_time() {
			$.get("service/update_user.php");
		}
		$('.modal').on('hide.bs.modal', function () {
			$("#doc tr").removeClass("danger");
		});
		$("#doc tr").on("hover", function () {
			$(this).css('cursor', 'pointer');

		});
		$("#doc tr").on('click', function (e) {
			$(this).data('isSelected', true);
			$(this).siblings().data('isSelected', false);
			var st = $('table').find(this).find('.onlineSt').html();
			if(st == 'Online'){
			$(this).addClass('danger');
			$("#exampleModalCenter").modal("show");

			} else {
			$(this).addClass('danger');
			$("#exampleModalCenterr").modal("show");
			}


		});
	});
</Script>

</body>

</html>