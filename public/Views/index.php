<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="public/assets/css/main.css">
</head>
<body>
this is home<br>
<a href="Admin/">Admin</a><br>
<a href="InventoryManager/">InventoryManager</a><br>
<a href="DisasterOfficer/">DisasterManager</a><br>
<a href="ResponsiblePerson/">ResponsiblePerson</a><br>
<a href="test">test</a><br>
<a href="a">a</a><br>
<a href="b">b</a><br>  
<div id="show">sdszfsz</div>
<table id="myTable" border="0">
<thead>
    <th>Company name</th>
    <th>Email</th>
</thead>
</table>
</body>
<script type="text/javascript">
		$(document).ready(function() {
            getCompany();
		});

function getCompany(){
    var output = $.parseJSON($.ajax({
        type: "POST",
        url: "localhost/<?php echo baseUrl; ?>/Home_viewDonations/1234",
        dataType: "json",
        data : JSON.stringify({'key': 'ABCD'}),
        cache: false,
        async: false
    }).responseText);
    console.log(output);
    //debugger;
    var table = document.getElementById("myTable");
    for (var i = 0; i < output.length; i++){
        let obj = output[i];
        let row = table.insertRow(-1);
        let cell1 = row.insertCell(-1);
        let cell2 = row.insertCell(-1);
        cell1.innerHTML = obj['caompanyName'];
        cell2.innerHTML = obj['email'];
    }
}
</script>
</html>