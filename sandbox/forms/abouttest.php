<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<title>Twitter Bootstrap Popover Example</title> 
<meta name="description" content="Creating Modal Window with Twitter Bootstrap">
<link href="../styles/css/bootstrap.css" rel="stylesheet"> 
</head>
<body>
<div class="container">
<h2>Example of creating Modal with Twitter Bootstrap</h2>
<div class="well">
<a href="#" id="example" class="btn btn-danger" data-content="It's so simple to create a tooltop for my website!" data-original-title="Twitter Bootstrap Popover">
hover for popover
</a>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!--<script src="/twitter-bootstrap/twitter-bootstrap-v2/js/bootstrap-tooltip.js"></script>-->
<!--<script src="/twitter-bootstrap/twitter-bootstrap-v2/js/bootstrap-popover.js"></script>-->
<script src="js/bootstrap.js"></script>
<script>
$(function ()
{ $("#example").popover({placement:'right'});
});
</script>
</body>
</html>
            