<html>
    <head>
    <title>Teacher Login and Registeration</title>
        <link rel="stylesheet" type="text/css" href="astyle.css">
    <link rel="stylesheet" type="text/css"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <h1 aling:center> Welcome to Teacher Login and Registeration page </h1>
    <body>
        <div class="container">
            <div class="login-box">
            <div class="col-md-6 login-left">
                <h2>Login Here</h2>
                <form action="avalidation.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                </form>
                </div >
    
            <div class="col-md-6 login-right">
                <h2>Register Here</h2>
                <form action="adminregisteration.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            </div>
        </div>
    </body>
          </html>