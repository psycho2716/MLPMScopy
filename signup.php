<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLPMS</title>

    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/png">
    
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header>
        <div class="top-nav">
            <div class="logo-container">
                <a href="login.php" class="logo">
                    <img src="images/logo.png" alt="Logo">
                    <span class="logo-name">MLPMS</span>
                </a>
            </div>
            <div class="link-container">
                <ul>
                    <li>
                        <a href="login.php" class="link">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    
    <div class="content">
        <!-- Form Starts Here! -->
        <div class="signup-form-container mt-5">
            <form action="/action.php" >
                <div class="form-header mb-3">
                    <span class="text-1">Sign Up</span>
                </div>

                <div class="form-body">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <span>Username</span>
                            <input type="text" placeholder="Username" class="form-control" name="username" required>
                            <span class="error"></span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <span>Password</span>
                            <input type="password" placeholder="Password" class="form-control" name="password" required>
                            <span class="error"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <span>Confirm Password</span>
                            <input type="password" placeholder="Password" class="form-control" name="confirm-password" required>
                            <span class="error"></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="form-footer">
                    <span class="mt-2">Already have an account? <a href="login.php">Login here!</a></span>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>