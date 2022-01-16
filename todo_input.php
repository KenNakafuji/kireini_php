<?php
session_start();
include("functions.php");
check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Kireini</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="todo_read.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>衛生評価</div>
                            </a>
                                
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i>衛生動画</div>
                            </a>
                                
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">居酒屋にぎわい駅前店</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        <div class="row">
          
                        <div class="card" style="width: 18rem;">

                        <img src="images/handwash.jpeg" class="card-img-top" alt="手洗い">
                            <div class="card-body">
                                <h5 class="card-title">個人衛生</h5>
                                <p class="card-text">検査結果から、手洗いの不備がありました。ノロウイルス・食中毒防止のために個人衛生の管理について学びましょう</p>
                                <a href="#" class="btn btn-primary">視聴する</a>
                            </div>
                            </div>
  

                            <div class="card" style="width: 18rem;">

                            <img src="images/food.jpeg" class="card-img-top" alt="食品">
                                <div class="card-body">
                                    <h5 class="card-title">食品の管理</h5>
                                    <p class="card-text">検査結果から、日付管理の不備がありました。食中毒・品質劣化防止のために食品の管理について学びましょう</p>
                                    <a href="#" class="btn btn-primary">視聴する</a>
                                </div>
                                </div>

                                
                                <div class="card" style="width: 18rem;">

                            <img src="images/kitchenware.jpeg" class="card-img-top" alt="調理器具">
                                <div class="card-body">
                                    <h5 class="card-title">調理器具の管理</h5>
                                    <p class="card-text">検査結果から、洗浄の不備がありました。二次汚染防止のために調理器具の洗浄について学びましょう</p>
                                    <a href="#" class="btn btn-primary">視聴する</a>
                                </div>
                                </div>

                                <div class="card" style="width: 18rem;">

                            <img src="images/restaurant.jpeg" class="card-img-top" alt="施設">
                                <div class="card-body">
                                    <h5 class="card-title">施設の管理</h5>
                                    <p class="card-text">検査結果から、排水溝の汚れがありました。異臭・害虫発生防止のために施設の清掃や管理について学びましょう</p>
                                    <a href="#" class="btn btn-primary">視聴する</a>
                                </div>
                                </div>



                        </div>
                    </div>
                </main>
                
        </div>


</html>