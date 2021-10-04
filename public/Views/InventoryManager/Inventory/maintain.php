<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title> Inventory Manager - Inventory </title>
    <!-- CSS -->
    <link rel="stylesheet" href="/<?php echo baseUrl; ?>/public/assets/css/main.css">
    <link rel="stylesheet" href="/<?php echo baseUrl; ?>/public/assets/css/dashboard.css">
    <link rel="stylesheet" href="/<?php echo baseUrl; ?>/public/assets/css/dashboard_component.css">
    <link rel="stylesheet" href="/<?php echo baseUrl; ?>/public/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .radio-custom {
        opacity: 0;
        position: absolute;   
    }
    .radio-custom, .radio-custom-label {
        display: inline-block;
        vertical-align: middle;
        margin: 5px;
        cursor: pointer;
    }
    .radio-custom-label {
        position: relative;
    }
    .radio-custom + .radio-custom-label:before {
        content: '';
        background: #fff;
        border: 2px solid rgb(0, 0, 0);
        display: inline-block;
        vertical-align: middle;
        width: 20px;
        height: 20px;
        padding: 2px;
        margin-right: 10px;
        text-align: center;
    }
    .radio-custom + .radio-custom-label:before {
        border-radius: 10%;
    }

    .radio-custom:checked + .radio-custom-label:before {
        content: "\E9A4";
        font-family: 'boxicons';
        color: #000;
    }
    .radio-custom:focus + .radio-custom-label {
    outline: 1px solid #ddd; /* focus style */
    }
    </style>
</head>
<body>
    <?php
        include_once('./public/Views/InventoryManager/includes/sidebar_inventory.php');
     ?>
    <section class="dashboard-section">
        <?php 
        include_once('./public/Views/InventoryManager/includes/topnav.php'); 
        ?>
        <div class="space"></div>
        <div class="container">
        <div class="box">
                <form>
                <table class="table">
                    <thead>
                        <tr class="filters">
                            <th>Type
                                <select id="assigned-user-filter" class="form-control">
                                    <option>Electric</option>
                                    <option>Dry rations</option>
                                    <option>Rob</option>
                                    <option>Larry</option>
                                    <option>Donald</option>
                                    <option>Roger</option>
                                </select>
                            </th>
                            <th>Quantity
                                <select id="status-filter" class="form-control">
                                    <option>Any</option>
                                    <option>Ascending</option>
                                    <option>Descending </option>
                                </select>
                            </th>
                            <th>Availability
                                <select id="milestone-filter" class="form-control">
                                    <option>Any</option>
                                    <option>Availabile</option>
                                    <option>Not Availabile</option>
                                </select>
                            </th>
                            <th>Search
                                <input type="text" id="search" placeholder="Search" title="Type " class="form-control">
                            </th>
                            <th>
                                <input type="submit" id="search" class="form-control">
                            </th>
                        </tr>
                    </thead>
                </table>

                <div class="panel panel-primary filterable">
                    <table id="task-list-tbl" class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <tr id="task-1" class="task-list-row" data-task-id="1" data-user="Larry" data-status="In Progress" data-milestone="Milestone 2" data-priority="Urgent" data-tags="Tag 2">
                                    <td> 
                                        <input id="radio-1" class="radio-custom" name="radio-group" type="radio" checked>
                                        <label for="radio-1" class="radio-custom-label"></label>
                                    </td>
                                    <td>Task title 1</td>
                                    <td>01/24/2015</td>
                                    <td>09/24/2015</td>
                                </tr>
                                <tr id="task-2" class="task-list-row" data-task-id="2" data-user="Larry" data-status="Not Started" data-milestone="Milestone 2" data-priority="Low" data-tags="Tag 1">
                                    <td> 
                                        <input id="radio-2" class="radio-custom" name="radio-group" type="radio" checked>
                                        <label for="radio-2" class="radio-custom-label"></label>
                                    </td>
                                    <td>Task title 2</td>
                                    <td>03/14/2015</td>
                                    <td>09/18/2015</td>
                                </tr>
                                <tr id="task-3" class="task-list-row" data-task-id="3" data-user="Donald" data-status="Not Started" data-milestone="Milestone 1" data-priority="Low" data-tags="Tag 3">
                                    <td> 
                                        <input id="radio-3" class="radio-custom" name="radio-group" type="radio" checked>
                                        <label for="radio-3" class="radio-custom-label"></label>
                                    </td>
                                    <td>Task title 3</td>
                                    <td>11/16/2014</td>
                                    <td>02/29/2015</td>
                                </tr>
                                <tr id="task-4" class="task-list-row" data-task-id="4" data-user="Donald" data-status="Completed" data-milestone="Milestone 1" data-priority="High" data-tags="Tag 1">
                                    <td> 
                                        <input id="radio-4" class="radio-custom" name="radio-group" type="radio" checked>
                                        <label for="radio-4" class="radio-custom-label"></label>
                                    </td>
                                    <td>Task title 4</td>
                                    <td>11/16/2014</td>
                                    <td>02/29/2015</td>
                                </tr>
                            
                        </tbody>
                    </table>
                </div>
                </form>
        </div>
        </div>
    </section>
    <script>
        var thisPage = "#Maintain";
        $(document).ready(function() {
            $("#Dashboard,#Maintain,#Add,#Aid,#Add,#Service").each(function() {
                if ($(this).hasClass('active')){
                    $(this).removeClass("active");
                }
                $(thisPage).addClass("active");
            });

        });

        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>
</body>
</html>