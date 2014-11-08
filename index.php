<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
function getData(str){
	$.ajax({
		type:'post',
		url:'ajax.php',
		data:{"sending":str},
		success: function(data){
			document.getElementById("out").innerHTML = data;
		}
	});
}
</script>
</head>
<body>
	<input type="text" id="textfield" onkeyup="getData(this.value)">
	<button onclick="getData(document.getElementById('textfield').value);">Click me!</button>
	<div id="out"></div>
</body>
</html>
