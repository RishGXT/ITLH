<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>php</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<style>
.error {color: #FF0000;}
</style>

  </head>
  <body>


            
      
    <nav class="navbar navbar-default" style="background-color:white";>
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="text-color:white"; class="navbar-brand" href="home.html">HOME</a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group" style="background-color:black">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Go</button>
      </form>
      <ul class="nav navbar-nav navbar-left">
        
        <li class="Dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Buy</a></li>
            <li><a href="#">Sell</a></li>
            <li><a href="#">Rent</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Companies</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      
      
      

    <div class="container-fluid">
	<div class="row">
		<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 col-md-offset-3.5 col-md-5 col-lg-offset-4 col-lg-4">
			<h1 class="text-center">
				Register Account
			</h1>
            <hr/>
            <p>If you already have an account with us, please <a href="NEWlog.html">login</a>.</p>
            
            <hr/>
            
<?php




$EmailErr = $PasswordErr = $CPasswordErr = $FirstNameErr = $LastNameErr = $DOBErr = $QueErr = $AnsErr = "";


$Email = $Password = $CPassword = $FirstName = $LastName = $DOB = $Que = $Ans = "";




if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
   
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid email format"; 
    }
  }





if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Firstname"])) {
    $FirstNameErr = "First Name is required";
  } else {
    $FirstName = test_input($_POST["FirstName"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$FirstName)) {
      $FirstNameErr = "Only letters and white space allowed"; 
    }
  }



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["LastName"])) {
    $LastNameErr = "Last Name is required";
  } else {
    $LastName = test_input($_POST["LastName"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$LastName)) {
      $LastNameErr = "Only letters and white space allowed"; 
    }
  }

if(!empty($_POST["Password"]) && ($_POST["Password"] == $_POST["CPassword"])) {
        $Password = test_input($_POST["Password"]);
        $CPassword = test_input($_POST["CPassword"]);
        if (strlen($_POST["Password"]) <= '8') {
            $PasswordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$Password)) {
            $PasswordErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$Password)) {
            $PasswordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$Password)) {
            $PasswordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
            $CPasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
        }
    }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>

			<form role="form" action="" method="post">
				<div class="form-group">
					 
                    <div class="form-group">
					<input type="name"  class="form-control" id="Email" name="Email" placeholder="name@example.com"
value="<?php echo $Email;?>">
  <span class="error">* <?php echo $EmailErr;?></span>


				</div>
                
                    <div class="form-group">
					<input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
				</div>
                
                <div class="form-group">
					<input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Password">
				</div>
                    
                    <hr/>
                    
                   
                    <div class="row">
                    <div class="col-xs-6 form-group">
					<input type="name" class="form-control" id="FirstName" name="FirstName" placeholder="First Name">
                    </div>
                        
                    <div class="col-xs-6 form-group">    
					<input type="name" class="form-control" id="LastName" name="LastName" placeholder="Last Name">
                            </div>
                                </div>    
                
                    <div class="form-group">
                    
                        <input type="date" class="form-control" id="DOB" name="DOB" placeholder="Birthday" >
                    </div>


			
                <hr/>    
                    
                <div class="form-group">
                    <select class="form-control">
                    <option value="" selected="selected" disabled="" id="Que" name="Que">Security Question</option>
                        <option value="1">Which is your favorite book?</option>
                        <option value="2">What is your dream job?</option>
                        <option value="3">Which was your first car?</option>
                        <option value="4">Who is your favorite actor?</option>
                        <option value="5">When did you get your first pet?</option>
                </select>
				</div>
				    
                    
                <div class="form-group">
					<input type="name" class="form-control" id="Ans"  name="Ans" placeholder="Answer">
				</div>
                
                <p>This question will be used to verify your identity and recover your password if you ever forget it.</p>
                        
                    
                    <hr/> 
                    
                <div class="checkbox">
                <label><input type="checkbox" value="">Sign me up to news updates.</label>
                </div>
				
                    
                    
                    <!--div class="form-group">
					 
					<label for="exampleInputFile">
						File input
					</label>
					<input type="file" id="exampleInputFile">
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<div class="checkbox">
					 
					<label>
						<input type="checkbox"> Check me out
					</label>
				</div--> 
                    
                    <hr/>
        
                <button type="reset" class="btn btn-default">
					Reset
				</button>
        
				<button type="submit" class="btn btn-default">
					Continue
				</button>
        
        <hr/><hr/>

<?php
echo "<h2>Entered Record</h2>";
echo $Email;
echo "<br>";
echo $Password;
echo "<br>";
echo $ConfirmPassword;
echo "<br>";
echo $FirstName;
echo "<br>";
echo $LastName;
echo "<br>";
echo $DOB;
echo "<br>";
echo $Que;
echo "<br>";
echo $Ans;
echo "<br>";
?>



			</form>

		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

    



  </body>
</html>