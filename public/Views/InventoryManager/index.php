<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="/simple/assets/css/main.css">
<style>
    /*
body{
    background-image: url("/<?php echo baseUrl; ?>/public/assets/a.jpg");
}  */
</style>
</head>
<body id="body">
this is inventory<br>
<a href="/<?php echo baseUrl; ?>/">Home</a><br>
<a href="/<?php echo baseUrl; ?>/a">a</a><br>
<a href="/<?php echo baseUrl; ?>/b">b</a><br>
<a href="Inventory/AddItem">add item</a><br>
    <?php
        echo getcwd();
    ?>
     <a href="/public/test">view</a>
     <form method="POST" id="showAll">
        <input type="submit" value="Submit">
     </form>
     <div id="show">sdszfsz</div>
</body>
<script type="text/javascript">
		$(document).ready(function() {
            $("#showAll").submit(function(e) {
                e.preventDefault();
                $.ajax({
					type: "POST",
					contentType: "application/json; charset=utf-8",
					url: "localhost/simple",
					data: JSON.stringify({'name': name}),
					cache: false,
					success: function(result) {
						alert('Company added successfully');
                        console.log(result);
                        document.getElementById('show').innerHTML = result;
					},
					error: function(err) {
						alert(err);
					}
				});
            });
		});
</script>
</html>