<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	body
	{
		background-color: #b3ffff;
		border-color: #8a8a5c;
		border-style: dotted;
		border-radius: 50px;
	}
	div
	{
		background-color: #66ff66;
		height: 150px;
	}
	div.special
	{
		background-color: #b3ffff;
		text-align: right;
		height: 150px;
	}
	div.head1
	{
		background-color: #66ff66;
		height: 150px;
	}
	button
	{
		margin-left: 800px;
		position: relative;
		height: 26px;
		border-radius: 10px;
		border-style: dotted;
		background-color: #c2c2a3;
		border-color: #8a8a5c;
	}
	#ani
	{
		height: 100px;
		width: 100px;
		background-color: red;
		position: absolute;
		border-radius: 70px;
		z-index: -1;
	}
</style>
<script src="assets/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
  $('#b1').click(function(){
    $("p:not(:has(*)):not(.ignore)").animate({fontSize: "3em"});

  });
});

$(document).ready(function()
{
  $('#b2').click(function(){
    $("p:contains(REPLACE_ME)").replaceWith("REPLACED!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1");

  });
});
/*$(document).ready(function()
{
  $("h1,h2,h3,h4,h5").click(function(){
    $(this).animate({fontSize: "3em"});

  });
});*/

$(document).ready(function()
{
  $("#b4").click(function(){
    $(":header").css({"color":"#ccff33"});

  });
});
$(document).ready(function()
{
  $('#b5').click(function(){
    $("li:visible").animate({fontSize: "3em"});

  });
});
$(document).ready(function()
{
	$('#b3').click(function(){
    $("div:has(.special)").animate({fontSize: "3em"});

  });
});

				$(document).ready(function()
				{
				$('#b6').click(function(){
				var div = $('#ani');
    		for(var i=1;i<9;i++){
    			
    			div.animate({bottom: '+=50%'}, "slow");
    			div.animate({left: '+=50%'}, "slow");
    			div.animate({bottom: '-=50%'}, "slow");
    			div.animate({left: '-=50%'},"slow");}
				});
			});
</script>
</head>
<body>
	<center>
		<p>
			p tag without class.
		</p>
		<p class="ignore">
			p tag with class ignore.
		</p>
		<p>
			<h5>p tag with child.</h5>
		</p>
		<button id="b1">button-1</button>

		<div><p class="ignore">
			 	REPLACE_ME
			 </p>
			 <button id="b2">button-2</button>
		</div>
		<div>
			<p class="special">
				DIV TAG WITH CHILD AND CLASS SPECIAL.<br>
				<button id="b3">button-3</button>
			</p>			
		</div>
		<div class="head1">			
		<h2>
			this is headding 2
		</h2>
		<h3>
			this is heading 3
		</h3>
		<h4>
			this heading 4
		</h4>
		<button id="b4">button-4</button>
		</div>
		<ul>
			<li>ELEMENT 1 VISIBLE</li>
			<li style="display: none;">element 2 invisible</li>
			<li>element 3</li>
		</ul>
		<button id="b5"> button-5</button>
		<div id="ani">		
		</div>
		<button id="b6">button6</button>
	</center>
</body>
</html>