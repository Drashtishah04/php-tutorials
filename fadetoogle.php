<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
	$("button").click(function()
	{
		$("#div1").fadeToggle();
		$("#div2").fadeToggle("slow");
		$("#div3").fadeToggle(4000);
	});
});
</script>
<button>click here</button></br>
</br>
<div id="div1"style="width:100px;height:100px;background-color:blue;"></div></br>
<div id="div2"style="width:100px;height:100px;background-color:yellow;"></div></br>
<div id="div3"style="width:100px;height:100px;background-color:green;"></div>
