<!DOCTYPE html>
<html>
<head>
	<title>macOs Sierra</title>
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">
	<link rel="stylesheet" type="text/css" href="dist/css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="dist/css/font-awesome.css">
	<style type="text/css">#bg{background-image: url(dist/img/bg-2.jpg);background-size: cover;}</style>
</head>
<body style="overflow:hidden;">
	<header>
		<ul class="nav left">
			<li><i class="fa fa-circle" aria-hidden="true"></i></li>
			<li><strong><a href="#!">Finder</a></strong></li>
			<li><a href="#!">File</a></li>
			<li><a href="#!">Edit</a></li>
			<li><a href="#!">View</a></li>
			<li><a href="#!">Go</a></li>
			<li><a href="#!">Windows</a></li>
			<li><a href="#!">Help</a></li>
		</ul>
		<ul class="nav right">			
			<li><i class="fa fa-wifi" aria-hidden="true"></i></li>
			<li><i class="fa fa-battery-3" aria-hidden="true"></i></li>
			<li id="top_clock">12:00 PM</li>
			<li><i class="fa fa-search" aria-hidden="true"></i></li>
			<li><i class="fa fa-tasks" aria-hidden="true"></i></li>
		</ul>
	</header>
	<div id="bg"> </div>
	<section class="wraper">
		<div class="window" style="margin:250px;">
			<div class="w_head">
				<ul class="left">
					<li><i class="fa fa-circle" aria-hidden="true"></i></li>
					<li><strong><a href="#!">Finder</a></strong></li>
					<li><a href="#!">File</a></li>
					<li><a href="#!">Edit</a></li>
					<li><a href="#!">View</a></li>
				</ul>
				<ul class="right">			
					<li style="color: #4CAF50;"><i class="fa fa-circle" aria-hidden="true"></i></li>
					<li style="color: #FFC107;"><i class="fa fa-circle" aria-hidden="true"></i></li>
					<li style="color: #F44336;"><i class="fa fa-circle" aria-hidden="true"></i></li>
				</ul>
			</div>
			<div class="w_body">
				<center style="padding:30% 0;font-weight:400;"><h1>macOs Sierra look-a-like challenge</h1></center>
			</div>
		</div>
	</section>
	<footer>
		
	</footer>

	<script type="text/javascript" src="dist/js/jquery.js"></script>	
	<script type="text/javascript" src="dist/js/stackblur.js"></script>
	<script type="text/javascript" src="dist/js/interact.js"></script>
	<script type="text/javascript">
		// target elements with the "draggable" class
		interact('.window')
		  .draggable({
		    // enable inertial throwing
		    //inertia: true,
		    // keep the element within the area of it's parent
		    restrict: {
		      // restriction: "parent",
		      endOnly: true,
		      elementRect: { top: 1, left: 1, bottom: 1, right: 1 }
		    },
		    // enable autoScroll
		    autoScroll: true,

		    // call this function on every dragmove event
		    onmove: dragMoveListener,
		    // call this function on every dragend event
		    onend: function (event) { }
		  }) .resizable({
		    preserveAspectRatio: true,
		    edges: { left: true, right: true, bottom: true, top: true }
		  })
		  .on('resizemove', function (event) {
		    var target = event.target,
		        x = (parseFloat(target.getAttribute('data-x')) || 0),
		        y = (parseFloat(target.getAttribute('data-y')) || 0);

		    // update the element's style
		    target.style.width  = event.rect.width + 'px';
		    target.style.height = event.rect.height + 'px';

		    // translate when resizing from top or left edges
		    x += event.deltaRect.left;
		    y += event.deltaRect.top;

		    target.style.webkitTransform = target.style.transform =
		        'translate(' + x + 'px,' + y + 'px)';

		    target.setAttribute('data-x', x);
		    target.setAttribute('data-y', y);
		  });

		  function dragMoveListener (event) {
		    var target = event.target,
		        // keep the dragged position in the data-x/data-y attributes
		        x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
		        y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

		    // translate the element
		    target.style.webkitTransform =
		    target.style.transform =
		      'translate(' + x + 'px, ' + y + 'px)';

		    // update the posiion attributes
		    target.setAttribute('data-x', x);
		    target.setAttribute('data-y', y);
		  }

		  // this is used later in the resizing and gesture demos
		  window.dragMoveListener = dragMoveListener;

	</script>
</body>
</html>