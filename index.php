<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Api Proyecto Final - APF</title>
	</head>
	<body>
		<div class="jumbotron">
			<h1 class="display-4">Hello, Api!</h1>
			<p class="response"></p>
			<hr class="my-4">
			<p>Tal vez quieras ver otra respuesta de este mismo api</p>
			<a class="btn btn-primary btn-lg" href="#" role="button">Consultar</a>
		</div>

		<!-- {"service":"api","msg":"api for final project"} -->

		

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script  type="text/javascript">
		$(document).ready(function(){
			$.ajax({
                type: "POST",
                url: "http://localhost:80",
                dataType: "json",
                cache: false,
            }).done(function (data){
				console.log(data);
                $('.response').text('holii');
            }).fail(function (jqXHR, textStatus, errorThrown) {
                alert('Ha ocurrido un error');
            });
		})
		</script>

	</body>
</html>