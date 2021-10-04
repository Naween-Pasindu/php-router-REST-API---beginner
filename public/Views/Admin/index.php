<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title> Admin - Dashboard </title>
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
        include_once('./public/Views/Admin/includes/admin_sidebar.php');
     ?>
    <section class="dashboard-section">
        <?php 
        include_once('./public/Views/Admin/includes/admin_topnav.php'); 
        ?>
        <div class="space"></div>
        <!-- ======================================================================================================================================= -->
        <!-- content frome below -->
        <!-- STATS -->
        <div class="container">
            <h1>Dashboard</h1>
            <div class="stat-row">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Order</div>
                        <div class="number">40,876</div>

                    </div>
                    <i class='bx bx-cart-alt cart'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Sales</div>
                        <div class="number">38,876</div>

                    </div>
                    <i class='bx bxs-cart-add cart two'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Profit</div>
                        <div class="number">$12,876</div>

                    </div>
                    <i class='bx bx-cart cart three'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Return</div>
                        <div class="number">11,086</div>

                    </div>
                    <i class='bx bxs-cart-download cart four'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Return</div>
                        <div class="number">11,086</div>

                    </div>
                    <i class='bx bxs-cart-download cart four'></i>
                </div>
            </div>
        </div>


        <!-- BOXES -->
        <div class="container">
            <div class="row">
                <div class="col6">
                    <div class="box row-content">asdwexxxxxxxxxxxxxxxxxrweasdasd</div>
                    <div class="box row-content">asdaeeeqqqqqqqqqqqqqqqqqqsdasd</div>
                    <!-- <div class="box">asdaeeeqqqqqqqqqqqqqqqqqqsdasd</div>
                    <div class="box">asdaeeeqqqqqqqqqqqqqqqqqqsdasd</div> -->
                </div>
                <div class="col6" style="overflow: auto">
                    <div class="box row-content" style="height:100%;min-height: 300px;">aswerwerwerdfasdfas</div>
                </div>
            </div>
        </div>

        <!-- TABLE -->
        <div class="container">
            <div class="">

                <table class="table">
                    <thead>
                        <tr class="filters">
                            <th>Assigned User
                                <select id="assigned-user-filter" class="form-control">
                                    <option>None</option>
                                    <option>John</option>
                                    <option>Rob</option>
                                    <option>Larry</option>
                                    <option>Donald</option>
                                    <option>Roger</option>
                                </select>
                            </th>
                            <th>Status
                                <select id="status-filter" class="form-control">
                                    <option>Any</option>
                                    <option>Not Started</option>
                                    <option>In Progress</option>
                                    <option>Completed</option>
                                </select>
                            </th>
                            <th>Milestone
                                <select id="milestone-filter" class="form-control">
                                    <option>None</option>
                                    <option>Milestone 1</option>
                                    <option>Milestone 2</option>
                                    <option>Milestone 3</option>
                                </select>
                            </th>
                            <th>Priority
                                <select id="priority-filter" class="form-control">
                                    <option>Any</option>
                                    <option>Low</option>
                                    <option>Medium</option>
                                    <option>High</option>
                                    <option>Urgent</option>
                                </select>
                            </th>
                            <th>Tags
                                <select id="tags-filter" class="form-control">
                                    <option>None</option>
                                    <option>Tag 1</option>
                                    <option>Tag 2</option>
                                    <option>Tag 3</option>
                                </select>
                            </th>
                            <th>Search
                                <input type="text" id="search" placeholder="Search" title="Type " class="form-control">
                            </th>
                        </tr>
                    </thead>
                </table>


                <div class="panel panel-primary filterable">
                    <table id="task-list-tbl" class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Created</th>
                                <th>Due Date</th>
                                <th>Priority</th>
                                <th>Milestone</th>
                                <th>Assigned User</th>
                                <th>Tags</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr id="task-1" class="task-list-row" data-task-id="1" data-user="Larry" data-status="In Progress" data-milestone="Milestone 2" data-priority="Urgent" data-tags="Tag 2">
                                <td>Task title 1</td>
                                <td>01/24/2015</td>
                                <td>09/24/2015</td>
                                <td>Urgent</td>
                                <td>Milestone 2</td>
                                <td>Larry</td>
                                <td>Tag 2</td>
                            </tr>

                            <tr id="task-2" class="task-list-row" data-task-id="2" data-user="Larry" data-status="Not Started" data-milestone="Milestone 2" data-priority="Low" data-tags="Tag 1">
                                <td>Task title 2</td>
                                <td>03/14/2015</td>
                                <td>09/18/2015</td>
                                <td>Low</td>
                                <td>Milestone 2</td>
                                <td>Larry</td>
                                <td>Tag 1</td>
                            </tr>

                            <tr id="task-3" class="task-list-row" data-task-id="3" data-user="Donald" data-status="Not Started" data-milestone="Milestone 1" data-priority="Low" data-tags="Tag 3">
                                <td>Task title 3</td>
                                <td>11/16/2014</td>
                                <td>02/29/2015</td>
                                <td>Low</td>
                                <td>Milestone 1</td>
                                <td>Donald</td>
                                <td>Tag 3</td>
                            </tr>


                            <tr id="task-4" class="task-list-row" data-task-id="4" data-user="Donald" data-status="Completed" data-milestone="Milestone 1" data-priority="High" data-tags="Tag 1">
                                <td>Task title 4</td>
                                <td>11/16/2014</td>
                                <td>02/29/2015</td>
                                <td>High</td>
                                <td>Milestone 1</td>
                                <td>Donald</td>
                                <td>Tag 1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- FORM -->
        <div class="container">
            <form action="#" method="post">
                <h1>Order Your Pizza</h1>

                <div class="column">
                    <label for="your_name">Your Name</label>
                    <input type="text" id="your_name" name="yourname" />

                    <label for="your_email">Email Address</label>
                    <input type="email" id="your_email" name="youremail" />

                    <label for="your_phone">Phone Number</label>
                    <input type="tel" id="your_phone" name="yourphone" />

                    <label for="address">Delivery Delivery AddressDelivery AddressDelivery AddressDelivery
                        AddressDelivery AddressDelivery AddressDelivery AddressDelivery AddressDelivery AddressDelivery
                        AddressDelivery AddressDelivery AddressAddress</label>
                    <textarea id="address" name="youraddress"></textarea>

                    <label for="notes">Notes to driver</label>
                    <textarea id="notes" name="drivernotes"></textarea>

                </div>

                <div class="column">
                    <label for="crusttype">Choose Your Crust</label>
                    <select id="crusttype" name="crust">
                        <option value="wheat">Wheat</option>
                        <option value="white">White</option>
                        <option value="thin">Thin Crust</option>
                    </select>

                    <label>
                        <input type="checkbox" name="extracrispy" />
                        Extra Crispy Crust?
                    </label>


                    <fieldset>
                        <legend>Cheese:</legend>
                        <label>
                            <input type="radio" name="cheese" value="less" />
                            Less Cheese
                        </label>
                        <label>
                            <input type="radio" name="cheese" value="extra" />
                            Extra Cheese
                        </label>
                        <label>
                            <input type="radio" name="cheese" value="none" />
                            No Cheese
                        </label>
                    </fieldset>

                    <fieldset>
                        <legend>Toppings (choose as many as you want)</legend>
                        <label>
                            <input type="checkbox" name="toppings" value="pepperoni" />
                            Pepperoni
                        </label>
                        <label>
                            <input type="checkbox" name="toppings" value="veggies" />
                            Veggies
                        </label>
                        <label>
                            <input type="checkbox" name="toppings" value="ham" />
                            Ham
                        </label>
                        <label>
                            <input type="checkbox" name="toppings" value="sausage" />
                            Sausage
                        </label>

                    </fieldset>
                    <input type="submit" value="Give me PIZZA" />
                    <input type="reset" value="Start Over" />
                </div>

            </form>
        </div>


    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>
    <script src="/<?php echo baseUrl; ?>/public/assets/js/table.js"></script>
    
</body>

</html>