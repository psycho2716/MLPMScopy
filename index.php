<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Minified Extension CSS Links -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/png">
    <script src="https://kit.fontawesome.com/8eda353e2c.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- External CSS Link -->
    <link rel="stylesheet" href="css/dashboard.css">

</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo-container">
                <img src="images/logo.png" class="logo">
            </div>

            <div class="header-text">
                <span class="text-1">Montfort Learner</span>
                <span class="text-2">Profile Management System</span>
            </div>
        </div>

        <div class="sidebar-body">
            <ul class="link-container">
                <li>
                    <a href="#" class="link active">
                        <span class="link-icon"><i class="fa-solid fa-house"></i></span>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="link">
                        <span class="link-icon" style="font-size: 20px;"><i class="uil uil-file-check-alt"></i></span>
                        <span class="link-name">Qualifications</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="link">
                        <span class="link-icon"><i class="fa-solid fa-graduation-cap"></i></span>
                        <span class="link-name">Student</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="link">
                        <span class="link-icon"><i class="fa-solid fa-chalkboard-user"></i></span>
                        <span class="link-name">Trainer</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="link">
                        <span class="link-icon"><i class="fa-solid fa-list-check"></i></span>
                        <span class="link-name">Training</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="link">
                        <span class="link-icon"><i class='bx bxs-dashboard'></i></span>
                        <span class="link-name">Assessment</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="link">
                        <span class="link-icon" style="font-size: 20px;"><i class='bx bx-buildings'></i></span>
                        <span class="link-name">Employment</span>
                    </a>
                </li>
            </ul>

            <div class="sidebar-footer">
                <div class="footer-text">
                    <span class="footer-text-1">All Rights Reserve 2022</span>
                    <span class="footer-text-2">Montfort Academy Romblon, Romblon</span>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid navbar-content">
                <div class="sidebar-btn">
                    <i class="uil uil-bars"></i>
                </div>

                <div class="dropdown">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                       <span><i class="fa-solid fa-user-large"></i></span> Administrator
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Account Info</a></li>
                      <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
                    </ul>
                  </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <h2>Profiled</h2>
                                <span class="card-stats">9</span>
                            </div>
                            <div class="card-icon">
                                <i class="fa-solid fa-user-check"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <h2>Enrolled</h2>
                                <span class="card-stats">9</span>
                            </div>
                            <div class="card-icon">
                                <i class='bx bxs-school' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <h2>Graduated</h2>
                                <span class="card-stats">9</span>
                            </div>
                            <div class="card-icon">
                                <i class="fa-solid fa-user-graduate"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <h2>Assessed</h2>
                                <span class="card-stats">9</span>
                            </div>
                            <div class="card-icon">
                                <i class="uil uil-file-check-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <h2>Certified</h2>
                                <span class="card-stats">9</span>
                            </div>
                            <div class="card-icon">
                                <i class='bx bxs-user-detail'></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <h2>Employed</h2>
                                <span class="card-stats">9</span>
                            </div>
                            <div class="card-icon">
                                <i class='bx bxs-briefcase'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
    
</body>
</html>