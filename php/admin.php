<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Accounts</title>
        <link rel = "icon" href = "../Movie icons/logo.png" type = "image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin  
                    </div>
                    <button type="submit" id="logoutbtn" onclick="LogOut();">LogOut</button>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Accounts</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <?php
                                    $host="localhost";
                                    $dbUsername="root";
                                    $dbPassword="";
                                    $dbName="bdcinemagic";
                                
                                    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);
                                    if(mysqli_connect_error()){
                                        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
                                     }else{
                                        $SELECT ="SELECT * From register";
                                        
                                        $result = mysqli_query($conn, $SELECT);
                                  
                                        echo "<table id='datatablesSimple'>";
                                                echo "<thead>
                                                    <tr>
                                                        <th>FirstName</th>
                                                        <th>LastName</th>
                                                        <th>EmailID</th>
                                                        <th>Password</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>FirstName</th>
                                                        <th>LastName</th>
                                                        <th>EmailID</th>
                                                        <th>Password</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>";
                                                    while($row=$result->fetch_assoc()){
                                                        echo "<tr><td>".htmlspecialchars($row["FirstName"])."</td><td>".htmlspecialchars($row["LastName"])."</td><td>".htmlspecialchars($row["EmailID"])."</td><td>".htmlspecialchars($row["Password"])."</td></tr>";
                                                    }
                                                echo "</tbody>";
                                            echo "</table>";
                                        }
                                ?>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
        <script src="../js/admin.js"></script>
        <script src="../js/jquery-3.6.0.js"></script>
    </body>
</html>