<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
this is add item<br>
<a href="/<?php echo baseUrl; ?>/">Home</a><br>
<a href="/<?php echo baseUrl; ?>/InventoryManager/SafeHouse/dashboard">Safe House</a><br>
<a href="/<?php echo baseUrl; ?>/a">a</a><br>
<a href="/<?php echo baseUrl; ?>/b">b</a><br>
<br><br>
<form id='add' name="add" method="POST">
    <input type="text" name="company">
    <input type="text" name="email">
    <input type="submit" value="submit">   
</form>
<br>
<table id="myTable" border="0">
<thead>
    <th>Company name</th>
    <th>Email</th>
</thead>
<tbody id="trow">
</tbody>
</table>
</body>
<script type="text/javascript">
var output;
		$(document).ready(function() {
            getCompany();
            $("#add").submit(function(e) {
                e.preventDefault();
                var str = [];
                var formElement = document.querySelector("#add");
                var formData = new FormData(formElement);
                //var array = {'key':'ABCD'}
                var object = {};
                formData.forEach(function(value, key){
                    object[key] = value;
                });
                object['key'] = 'ABCD';
                var json = JSON.stringify(object);
                console.log(json);
                $.ajax({
					type: "POST",
					url: "localhost/<?php echo baseUrl; ?>/InventoryManager_addCompany/1234",
					data: json, 
					cache: false,
					success: function(result) {
						$('#trow').empty();
                        console.log(result); 
                        getCompany();
					},
					error: function(err) {
						alert(err);
					}
				});
            });
		});

        function getCompany(){
            output = $.parseJSON($.ajax({
                type: "POST",
                url: "localhost/<?php echo baseUrl; ?>/Home_viewDonations/1234",
                dataType: "json", 
                data : JSON.stringify({'key': 'ABCD'}),
                cache: false,
                async: false
            }).responseText);
            console.log(output);
            var table = document.getElementById("trow");
            for (var i = 0; i < output.length; i++){
                let obj = output[i];
                let row = table.insertRow(-1);
                let cell1 = row.insertCell(-1);
                let cell2 = row.insertCell(-1);
                let cell3 = row.insertCell(-1);
                var attribute = document.createElement("button");
                attribute.innerHTML = "update";
                attribute.setAttribute("onclick", "updateCompany("+ i +")");
                cell1.innerHTML = obj['caompanyName'];
                cell2.innerHTML = obj['email'];
                cell3.appendChild(attribute);
            }
        }

        function updateCompany(val){
            let person = prompt("Input new company name:", output[val]['caompanyName']);
            if (!(person == null || person == "")) {
                console.log("working");
                let id = output[val]['consumerId'];
                $.ajax({
					type: "POST",
					url: "localhost/<?php echo baseUrl; ?>/InventoryManager_updateCompany/1234",
					//data: {'key': 'ABCD',person,id}, 
                    data:JSON.stringify({'key': 'ABCD',person,id}),
					cache: false,
					success: function(result) {
						$('#trow').empty();
                        console.log(result); 
                        getCompany();
					},
					error: function(err) {
						console.log(err);
					}
				});
            } 
        }
</script>
</html>