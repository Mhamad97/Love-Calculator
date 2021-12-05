<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="style.css">
<style type="text/css" li>

</style>
	
<body>
	
	<div class="div1" >
	<form>
		<h1 style="text-align: center;">Find Love % Between</h1>
		<div style="background-color: skyblue" ;>
			<h3>Your Name</h3><br>
			<input id="fname-input" class="form-control" type="text" name="yourname" placeholder="your name" required=""><br>
			<label>Gender</label><br>
			<input class="f-gender" type="radio" name="f-gender" value="male" checked>MALE<br>
			<input class="f-gender" type="radio" name="f-gender" vlaue="female">FEMAlE<br>
		</div>
		<div style="background-color: pink">
			<h3>Your partner Name</h3><br>
			<input id="sname-input" class="form-control" type="text" name="partnerlname" placeholder="your partner name" required=""><br>
			<label>Gender</label><br>
			<input class="s-gender"  type="radio" name="s-gender" value="male" >MALE<br>
			<input class="s-gender" type="radio" name="s-gender" value="female" checked>FEMALE<br>	
		</div>
	
		<input id="submit" type="submit" name="Calculate" placeholder="Calculate" value="Calculate Love %" style="background-color:green">
	</form>
	</div>
	<div id="result" >
		<div class="child">
			<h2 id="f-name-res"></h2>
			<h3 id="f-gender-res"></h3>
		</div>
		<div class="child">
			<h1 id="result-precentage">

			</h1>
		</div>
		<div class="child">
			<h2 id="s-name-res"></h2>
			<h3 id="s-gender-res"></h3>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script>
		$('#submit').click(function (e) { 
			$('#result').hide();
			var result = Math.floor(Math.random() * 101);
			e.preventDefault();
			var fname = $('#fname-input').val();
			var sname = $('#sname-input').val();
			var fgender = $("input[name='f-gender']:checked").val();
			var sgender = $("input[name='s-gender']:checked").val();
			$('#f-name-res').text(fname);
			$('#s-name-res').text(sname);
			$('#f-gender-res').text(fgender);
			$('#s-gender-res').text(sgender);
			$("#result-precentage").text(result);
			$(".div1").hide();
			$("#result").show();
		});
	</script>
</body>

</html>