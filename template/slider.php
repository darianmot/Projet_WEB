<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/ajSlider.js"></script>

<title>ajSlider</title>
<script>
$(document).ready(function() {
    $('#ajSlider').ajSlider(3000,{
		"width":"100%",//width of slider
		"height":"100%",//height of slider
		"textPosition":"30%",//position of text from top
		"textSize":"60px"//font size of the text
		});
});
</script>
</head>

<body>

<div id="ajSlider">
	<img src="/media/images/ferrari.jpg" width="1600" height="1000" />
    <img src="/media/images/parking.jpg" width="1600" height="1000" />
    <img src="/media/images/accueil_park.jpg" width="1600" height="1000" />

	<a>first slide in the slider</a>
    <a>second slide in the slider</a>
    <a>third slide in the slider</a>
</div>

</body>
</html>
