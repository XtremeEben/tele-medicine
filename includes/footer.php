<?php if ($loggedin) { ?>
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
					<button id="btn-getInTouch" class="card btn-group-lg col-lg-5">
						<div>
							<a href="#">
								<div class="container-fluid">
									<h4><b>Chat</b></h4>
									<p>Choose to live chat</p>
							</a>
						</div>
					</button>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		</div>
	</div>
</div>
<?php 
		} else { ?>
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
							<p>You've got to be logged in first! <br> Click on sign in or sign up</p>
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
							<p>You've got to be logged in first! <br> Click on sign in or sign up</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		</div>
	</div>
</div>
<?php 
} ?>
</div>

<!-- login modal -->
<div class="modal fade login" id="loginModal" data-backdrop="static">
	<div class="modal-dialog login animated">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title text-center">TeleMedicine Meeting System</h3>
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
								<input id="password" class="form-control" type="password" placeholder="Password"
									name="password">
								<input class="btn btn-default btn-login" type="button" value="Login"
									onclick="loginAjax()">
							</form>
						</div>
						<div class="form registerBox">
							<form method="post" action="/login" accept-charset="UTF-8" id="reg-form">
								<fieldset id="firstside">
									<input id="f_email" class="form-control" type="text" placeholder="Email"
										name="email">
									<input id="password" class="form-control" type="password" placeholder="Password"
										name="password">
								</fieldset>
							</form>
							<form id="detail">
								<input id="d_email" class="form-control" type="hidden" placeholder="Email" name="email">
								<fieldset id="secondside">
									<input type="text" class="form-control" placeholder="First name" name="fname">
									<input type="text" class="form-control" placeholder="Last name" name="lname">
									<div class="form-group">
										<select name="gender" class="form-control">
											<option value="">Select one</option>
											<option value="female">Female</option>
											<option value="male">Male</option>
										</select>
									</div>
									<div class="form-group">
										<input type="date" class="form-control" name="dob">
									</div>
									<div class="form-group">
										<input type="tel" class="form-control" placeholder="Phone number"
											name="contact">
									</div>
								</fieldset>
								<fieldset id="thirdside">
									<div class="form-group">
										<textarea rows="2" class="form-control" placeholder="Address"
											name="address"></textarea>
									</div>
									<div class="form-group">
										<input type="tel" class="form-control" placeholder="Emergency number"
											name="em_contact">
									</div>
									<input class="btn btn-default btn-login" type="button" value="Sign up"
										onclick="signupAjax()">
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
					<a href="javascript: openLoginModal();">Login</a>
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
<script src="js/wizard.js"></script>
<!--<script src="js/talkjs.js"></script>-->
 <script src="https://static.opentok.com/v2/js/opentok.min.js"></script>
<!-- <script type="text/javascript" src="js/app.js"></script> -->

<Script>
		var part_id;
	$(document).ready(function () {
	    $("#loginModal").on('hidden.bs.modal', function (e) {
            $(this).find('input:text').val('');
            $(this).find('input:password').val('');
            $(this).find('select').val('');
        });
            function update_time() {
                $.get("service/update_user.php");
            }
	    if (window.location.href.indexOf('p=see-a-doctor') > -1) {

            function over() {
                $("#doc tr").on("hover", function () {
                    $(this).css('cursor', 'pointer');

                });
                $("#doc tbody tr").on('click', function (e) {
                    $(this).data('isSelected', true);
                    $(this).siblings().data('isSelected', false);
                    var st = $('table').find(this).find('.onlineSt').html();
                    part_id = $('table').find(this).find('.id').html();
                    if (st == 'Online') {
                        $(this).addClass('danger');
                        $("#exampleModalCenter").modal("show");

                    } else {
                        $(this).addClass('danger');
                        $("#exampleModalCenterr").modal("show");
                    }

                    startChat();

                });
                // console.log(part_id);
                $('.modal').on('hide.bs.modal', function () {
                    $("#doc tr").removeClass("danger");
                });
            }

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
                        var o = "ONline";
                        var f = "Offline";
                        // console.log(parseData);
                        $.each(parseData, function (indexInArray, valueOfElement) {
                            // console.log(valueOfElement);
                            items.push("<tr>");
                            items.push("<td class='id' id='" + indexInArray + "'>" + (indexInArray+1) + "</td>");
                            items.push("<td id='" + indexInArray + "'>" + valueOfElement.fname + " " + valueOfElement.lname + "</td>");
                            items.push("<td id='" + indexInArray + "'>" + valueOfElement.specialty + "</td>");
                            items.push("<td id='" + indexInArray + "'>" + valueOfElement.last_seen + "</td>");
                            items.push("<td class='onlineSt' id='" + indexInArray + "'>" + valueOfElement.status + "</td>");
                            items.push("</tr>");
                        });
                        $("<tbody/>", {html: items.join("")}).appendTo('table');
                        over();
                    }
                );
            }

            function clearTable() {
                $('tbody').html('');
            }

            // console.log($('#doc tbody tr'));

        } else {
            update_time();
	        loaDocs();
            function loaDocs() {
                $.get("service/loadPatients.php",
                    function (data, textStatus, jqXHR) {
                        var items = [];
                        parseData = JSON.parse(data);
                        var o = "ONline";
                        var f = "Offline";
                        // console.log(parseData);
                        $.each(parseData, function (indexInArray, valueOfElement) {
                            // console.log(valueOfElement);
                            items.push("<tr>");
                            items.push("<td class='id' id='" + indexInArray + "'>" + (indexInArray+1) + "</td>");
                            items.push("<td id='" + indexInArray + "'>" + valueOfElement.fname + " " + valueOfElement.lname + "</td>");
                            items.push("<td id='" + indexInArray + "'>" + valueOfElement.contact + "</td>");
                            items.push("<td id='" + indexInArray + "'>" + valueOfElement.em_contact + "</td>");
                            items.push("<td id='" + indexInArray + "'>" + valueOfElement.gender + "</td>");
                            items.push("</tr>");
                        });
                        $("<tbody/>", {html: items.join("")}).appendTo('table');
                        over();
                    }
                );
            }
        }

	});
</Script>


<script>
	(function (t, a, l, k, j, s) {
		s = a.createElement('script'); s.async = 1; s.src = "https://cdn.talkjs.com/talk.js"; a.head.appendChild(s)
			; k = t.Promise; t.Talk = {
				v: 1, ready: {
					then: function (f) {
						if (k) return new k(function (r, e) { l.push([f, r, e]) }); l
							.push([f])
					}, catch: function () { return k && new k() }, c: l
				}
			};
	})(window, document, []);
</script>
<script>
	function startChat() {
		let mySession = null;
	Talk.ready.then(function () {
		var userData;
		var me;
		$.get('./service/loadChatUser.php', function (user) {
			user = JSON.parse(user);
			console.log(user);
                    localStorage.setItem('pat_id', user.id);
			me = new Talk.User(user);
			window.talkSession = new Talk.Session({
				appId: "tjMFCMxh",
				me: me
			});
			other();
		});
		function other() {
            var other;

            $.get("./service/loadCurrentPart.php", { part_id: part_id },
                function (data, textStatus, jqXHR) {
                    userData = JSON.parse(data);
                    console.log(userData);
                    localStorage.setItem('doc_id', userData.id);
                    other = new Talk.User(userData);

                    // console.log(talkSession);

                    var conversation = window.talkSession.getOrCreateConversation(Talk.oneOnOneId(me, other));
                    conversation.setParticipant(me);
                    conversation.setParticipant(other);
                    var popup = window.talkSession.createPopup(conversation, { keepOpen: false });
                    console.log(popup);
                    popup.mount({ show: false });
                    $("#btn-getInTouch").click(function (e) {
                        $("#exampleModalCenter").modal("hide");
                        $("#exampleModalCenterr").modal("hide");
                        e.preventDefault();
                        popup.show();
                    });

                    // Session.setDesktopNotificationEnabled();
                    // inbox.mount(document.getElementById("talkjs-container"));


                });
        }
		// $.get("./service/loadCurrentPart.php", {part_id: 'gh'},
		//     function (data, textStatus, jqXHR) {
		//         console.log(data);                    
		//     }
		// );

	});
	}
</script>
</body>

</html>