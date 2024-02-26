<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="shortcut icon" href="logo.png">
  <style>
      .container{
          background-image: url('sign.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          margin:10% auto auto auto;
      }
      .form-horizontal{
          margin:auto 30% auto 30%;
      }
      .form-group{
          font-size: 100%;
      }
      body{
        background-color: rgb(223, 237, 243);
      }
  </style>
</head>
<body>
    <div class="container">
        <form class="form-horizontal" action="connect.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-4" for="username">User name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="username" placeholder="Enter your name" name="username">
                </div>
              </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="email">Email:</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="pwd">Password:</label>
              <div class="col-sm-8">          
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
              </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="pwd">Confirm Password:</label>
                <div class="col-sm-8">          
                  <input type="password" class="form-control" id="repwd" placeholder="Re-Enter password" name="cmpassword">
                </div>
              </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="mobilenumber">Mobile Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="mobilenumber" placeholder="mobilenumber" name="mobilenumber">
                </div>
              </div>
            <div class="form-group">        
              <div class="col-sm-offset-4 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-4 col-sm-10">
                <button type="submit" style="font-size: 20px;" class="btn btn-success">Submit</a></button>
              </div>
            </div>
            
          </form>
    </div>
    
</body>
</html>