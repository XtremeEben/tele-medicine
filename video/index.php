<?php 
require '../class/class.SYS.php';
$app = new Sys();

$loggedin = false;

if($app->isLoggedIn()) {
    // print_r("I am loooooooged"); exit;
    $loggedin = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>TeleMedicine Meeting System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://webthemez.com" />
	<!-- css -->
	<link href="../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="../css/jcarousel.css" rel="stylesheet" />
	<link href="../css/flexslider.css" rel="stylesheet" />
	<link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet" />
	<link href="../css/app.css" rel="stylesheet" />
	<link rel="stylesheet" href="../css/login-register.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>getid()</script>
</head>


<body>
    <?php include '../includes/video.html' ?>
</body>


<script src="../js/jquery.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.fancybox.pack.js"></script>
<script src="../js/jquery.fancybox-media.js"></script>
<script src="../js/portfolio/jquery.quicksand.js"></script>
<script src="../js/portfolio/setting.js"></script>
<script src="../js/jquery.flexslider.js"></script>
<script src="../js/animate.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/owl-carousel/owl.carousel.js"></script>
<script src="../js/login-register.js"></script>
  <script src="https://static.opentok.com/v2/js/opentok.min.js"></script>
  <script type="text/javascript" src="../js/app.js"></script>

<script>
    function getid() {
        $part_id = localStorage.getItem('doc_id');
        return $part_id;
    }
    $(document).ready(function () {

        let $doc = localStorage.getItem('doc_id');
        let $pat = localStorage.getItem('pat_id');

        $.ajax({
            url: 'createsession.php',
            type: 'POST',
            data: {doc_id: $doc, pat_id: $pat}
        })
            .done(function (data) {

            data = JSON.parse(data);

// replace these values with those generated in your TokBox Account
            var apiKey = data.apiKey;
            var sessionId = data.sessionId;
            var token = data.token;

// (optional) add server code here
            initializeSession();

// Handling all of our errors here by alerting them
            function handleError(error) {
                if (error) {
                    alert(error.message);
                }
            }

            function initializeSession() {
                var session = OT.initSession(apiKey, sessionId);

                // Subscribe to a newly created stream
                session.on('streamCreated', function (event) {
                    session.subscribe(event.stream, 'subscriber', {
                        insertMode: 'append',
                        width: '100%',
                        height: '100%'
                    }, handleError);
                });

                // Create a publisher
                var publisher = OT.initPublisher('publisher', {
                    insertMode: 'append',
                    width: '100%',
                    height: '100%'
                }, handleError);

                // Connect to the session
                session.connect(token, function (error) {
                    // If the connection is successful, publish to the session
                    if (error) {
                        handleError(error);
                    } else {
                        session.publish(publisher, handleError);
                    }
                });
            }
        });


    });
</script>