<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

body{
  margin:0;
  color:#6a6f8c;
  background:#c8c8c8;
  font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}
.login-wrap{
  width:100%;
  margin:auto;
  margin-top: 30px;
  max-width:525px;
  min-height:570px;
  position:relative;
  background:url(http://codinginfinite.com/demo/images/bg.jpg) no-repeat center;
  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
  width:100%;
  height:100%;
  position:absolute;
  padding:90px 70px 50px 70px;
  background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
  top:0;
  left:0;
  right:0;
  bottom:0;
  position:absolute;
  -webkit-transform:rotateY(180deg);
          transform:rotateY(180deg);
  -webkit-backface-visibility:hidden;
          backface-visibility:hidden;
  transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
  display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
  text-transform:uppercase;
}
.login-html .tab{
  font-size:22px;
  margin-right:15px;
  padding-bottom:5px;
  margin:0 15px 10px 0;
  display:inline-block;
  border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
  color:#fff;
  border-color:#1161ee;
}
.login-form{
  min-height:345px;
  position:relative;
  -webkit-perspective:1000px;
          perspective:1000px;
  -webkit-transform-style:preserve-3d;
          transform-style:preserve-3d;
}
.login-form .group{
  margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
  width:100%;
  color:#fff;
  display:block;
}
.login-form .group .input,
.login-form .group .button{
  border:none;
  padding:15px 20px;
  border-radius:25px;
  background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
  text-security:circle;
  -webkit-text-security:circle;
}
.login-form .group .label{
  color:#aaa;
  font-size:12px;
}
.login-form .group .button{
  background:#1161ee;
}
.login-form .group label .icon{
  width:15px;
  height:15px;
  border-radius:2px;
  position:relative;
  display:inline-block;
  background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
  content:'';
  width:10px;
  height:2px;
  background:#fff;
  position:absolute;
  transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
  left:3px;
  width:5px;
  bottom:6px;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
  top:6px;
  right:0;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
  color:#fff;
}
.login-form .group .check:checked + label .icon{
  background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
  -webkit-transform:scale(1) rotate(45deg);
          transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
  -webkit-transform:scale(1) rotate(-45deg);
          transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.hr{
  height:2px;
  margin:60px 0 50px 0;
  background:rgba(255,255,255,.2);
}
.foot-lnk{
  text-align:center;
}
</style>
<body>
<?php



$con = mysqli_connect("localhost","root","","proj") or die("Connection Failed");


$result = mysqli_query($con,"SELECT DISTINCT (city) FROM  `country` "); 



?>

<div class="login-wrap">
  <div class="login-html">
  
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registration</label>
    <div class="login-form">
      <form class="sign-in-htm" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" name="sub" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
 </form>
      <form class="sign-up-htm" method="post">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username"  type="text" class="input" name="name">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" type="password" class="input"  name="pass">
        </div>
         <div class="group">
          <label for="pass" class="label">Phone Number</label>
          <input id="password"  type="text" class="input" name="phone_number">
        </div>
        <div class="group">
          <label for="pass" class="label">Adress</label>
          <input id="pass" type="text" class="input" name="address">
        </div>
        <div class="dropdown group">
 
<select name="city">
<option  selected="selected">Choose..</option>
<?php
while ($row = mysqli_fetch_array($result))
    {
	 echo '<option value="'.$row['city'].'">'.$row['city'].'</option>';
	}
?>

</select>

</div>
        <div class="group">
         <?php
		
		
				
					
if(isset($_POST['sub2'])){
	
	
	 #code.... 
			
					$name = $_POST['name'];
					$pwd = $_POST['pass'];
					$Phone = $_POST['phone_number'];
					$add = $_POST['address'];
					$city = $_POST['city'];
			
					$query = "INSERT INTO register(name,pwd, phone,address,city) VALUES ('$name','$pwd','$Phone','$add','$city')";
				/*	echo "<pre>";	
		print_r($query);*/
		if(mysqli_query($con,$query)){
	  
	  echo "Acount created";
	  }
   else {
	    echo "Acount creation failed";
	   }			
					
  }
   
				/*	if(mysqli_query($con,$query))
						{
   							echo "Your account is created";
						} 
					else
						{
							echo "Account creation failed";
						}*/

				
	
/*	echo "<pre>";	
		print_r($row =  mysqli_fetch_array($result));*/
 	
		
		 /*$result = mysqli_query($con,"select City from country where Country = '". $Country."'");*/
	
?>
          <input type="submit" class="button" value="Sign Up" name="sub2">
         
       
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div></div>
      </form>
      
    </div>
  </div>
</div>
  

    </div>
  </div>
</div>
  
  
</body>

<?php
	
/*if(isset($_POST['sub'])){
	$name= $_POST['username'];
	$pass= $_POST['password'];
	if($name =='duk' && $pass == 'duk'){
	echo "welcome";
		
		}
		else{
			echo "wrong name and pasword";
			
			}
	
	
	}*/
if(isset($_POST['sub'])){

    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($uname != " " && $password != " "){

        $sql_query = "select count(*) as cntUser from register where name='".$uname."' and pwd='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $uname;

			echo "<script>location.href='Indexn.php'</script>" ;   
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
	
<!--admin code-->
<?php	
if(isset($_POST['sub'])){

    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($uname != " " && $password != " "){

        $sql_query = "select count(*) as cntUser from login where name='".$uname."' and pass='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $uname;

			echo "<script>location.href='advanced_form_components.php'</script>" ;   
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
	
	





</html>