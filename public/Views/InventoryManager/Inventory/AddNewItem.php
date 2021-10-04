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
                <table class="table">
                    <thead>
                        <tr class="filters">
                            <th rowspan="2">
                                <select id="assigned-user-filter" class="form-control">
                                    <option>Select Type</option>
                                    <option>Dry rations</option>
                                    <option>Rob</option>
                                    <option>Larry</option>
                                    <option>Donald</option>
                                    <option>Roger</option>
                                </select>
                            </th>
                            <th rowspan="2">
                                <input type="text" id="search" placeholder="Item Name" title="Type " class="form-control">
                            </th>
                            <th>
                                <input type="submit" id="search" value="+ Create New Item" class="form-control">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <input type="reset" value="Reset" id="search" class="form-control">
                            </th>
                        </tr>
                    </thead>
                </table>
        </div>
        <div class="box">
                <div class="panel panel-primary filterable">
                    <table id="task-list-tbl" class="table">
                        <thead>
                            <tr>
                                <th>
                                </th>
                                <th>Name</th>
                                <th>Type
                                    <select id="" class="form-control">
                                        <option>Select Type</option>
                                        <option>Dry rations</option>
                                        <option>Rob</option>
                                        <option>Larry</option>
                                        <option>Donald</option>
                                        <option>Roger</option>
                                    </select>
                                </th>
                                <th>
                                <input type="submit" id="search" value="+ Create New Item" class="form-control">
                                </th>
                                <th>
                                <input type="submit" id="search" value="+ Create New Item" class="form-control">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr id="task-1" class="task-list-row" data-task-id="1" data-user="Larry" data-status="In Progress" data-milestone="Milestone 2" data-priority="Urgent" data-tags="Tag 2">
                                    <td>Task title 1</td>
                                    <td>01/24/2015</td>
                                    <td>09/24/2015</td>
                                </tr>
                                <tr id="task-2" class="task-list-row" data-task-id="2" data-user="Larry" data-status="Not Started" data-milestone="Milestone 2" data-priority="Low" data-tags="Tag 1">
                                    <td>Task title 2</td>
                                    <td>03/14/2015</td>
                                    <td>09/18/2015</td>
                                </tr>
                                <tr id="task-3" class="task-list-row" data-task-id="3" data-user="Donald" data-status="Not Started" data-milestone="Milestone 1" data-priority="Low" data-tags="Tag 3">
                                    <td>Task title 3</td>
                                    <td>11/16/2014</td>
                                    <td>02/29/2015</td>
                                </tr>
                                <tr id="task-4" class="task-list-row" data-task-id="4" data-user="Donald" data-status="Completed" data-milestone="Milestone 1" data-priority="High" data-tags="Tag 1">
                                    <td>Task title 4</td>
                                    <td>11/16/2014</td>
                                    <td>02/29/2015</td>
                                </tr>
                            
                        </tbody>
                    </table>
                </div>
        </div>
        </div>
    </section>
    <script>
        var thisPage = "#Add";
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