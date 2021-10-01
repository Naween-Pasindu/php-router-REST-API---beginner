<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="/<?php echo baseUrl; ?>/public/assets/css/main.css">
<style>
    /*
body{
    background-image: url("/<?php echo baseUrl; ?>/public/assets/a.jpg");
}  */
</style>
</head>
<body id="body">
this is admin<br>
<a href="/<?php echo baseUrl; ?>/">Home</a><br>
<a href="/<?php echo baseUrl; ?>/a">a</a><br>
<a href="/<?php echo baseUrl; ?>/b">b</a><br>
    <?php
        echo getcwd();
    ?>
     <a href="../test">view</a>
     <form method="POST" id="showA" name="showAll">
         <input type="text" name="name">
        <input type="submit" value="Submit">
     </form>
     <div id="show">sdszfsz</div>
</body>
<script type="text/javascript">
		$(document).ready(function() {
          /*  $("#showA").submit(function(e) {
                e.preventDefault();
                var str = $("form").serialize();
                console.log(str);
                $.ajax({
					type: "POST",
					url: "localhost/simple?api_key=api_key&&subSytem=inventory$task=addItem$variables=json",
                    data:str,
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
            }); */
		});
</script>
</html>