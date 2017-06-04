<!DOCTYPE html>
<html>
<head>
	<title>Cartão FreeTax</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		html,body{
			height: 100%;
			margin-top: 0px;
		}
		
		div.root{
			background-image: url(https://www.emprestimoconsignado.com.br/wp-content/imagens/482013441_1-1.jpg);
			background-size: cover;
			height: 100%;
		}
		h1{
			font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
			margin-left: 3%;
			margin-top: 0%;
			color: #DC143C;
			text-shadow: 5px;
		}
		label{
			color: #DC143C;
			font-size: 20px;
		}
		legend{
			font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
			font-size: 30px;
			color: #DC143C;
		}
		input[type=text]{
			border: none;
			border-bottom: 2px solid red;
			background-color: #ADD8E6;
		}
		
	</style>
	@section('script')
	@show
</head>
<body>
	<div class="root">
		<h1>Cartão FreeTax - 100% sem taxas!</h1>

		<div class="container">
			<div class="row">
				@section('body')
				 @show
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>