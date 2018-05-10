<html>
 <head>
	 <!--This is a comment-->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Travel website">
	<meta name="keywords" content="travel, trip plan">
  	<meta name="author" content="CSC 350 Team">
    <title>Your Trip | Welcome</title>
	<link rel="stylesheet" href="./css/header_style.css">
	<link rel="stylesheet" href="./css/footer_style.css">
  </head>
<body>
 <!--include the header--> 
    <p><?php include ('./include/header.html'); ?></p>

<div style="text-align:center;">
<form action="sign_up_validation.php" method = "post">
<fieldset>
	<font size="14">
	<legend>SignUp Form </legend>
	</font>
	<label>Username: <br/>
	<input type="text" name="user_name" /></label><br/>
	<label>First Name: <br/>
	<input type="text" name="first_name" /></label><br/>
	<label>Last Name: <br/>
	<input type="text" name="last_name" /></label><br/>
	<label>Password: <br/>
	<input type="password" name="password" /></label><br/>
	<label>Email: <br/>
	<input type="text" name="email" /></label><br/>
	<label>Phone #: <br/>
	<input type="number" name="phone" /></label><br/>
    <label>Birthday:<br/>
	<select name="birthday">
      <option value="1">Jan</option> 
      <option value="2">Feb</option> 
      <option value="3">Mar</option> 
      <option value="4">Apr</option> 
      <option value="5">May</option> 
      <option value="6">Jun</option> 
      <option value="7">Jul</option> 
      <option value="8">Aug</option> 
      <option value="9">Sep</option> 
      <option value="10">Oct</option> 
      <option value="11">Nov</option> 
      <option value="12">Dec</option>
    </select>
    <select name="birthday">
      <option value="2">2</option> 
      <option value="3">3</option> 
      <option value="4">4</option> 
      <option value="5">5</option> 
      <option value="6">6</option> 
      <option value="7">7</option> 
      <option value="8">8</option> 
      <option value="9">9</option> 
      <option value="10">10</option> 
	  <option value="11">11</option> 
	  <option value="12">12</option> 
	  <option value="13">13</option> 
	  <option value="14">14</option> 
      <option value="15">15</option> 
      <option value="16">16</option> 
      <option value="17">17</option> 
      <option value="18">18</option> 
      <option value="19">19</option> 
      <option value="20">20</option> 
      <option value="21">21</option> 
      <option value="22">22</option> 
      <option value="23">23</option> 
      <option value="24">24</option> 
      <option value="25">25</option> 
      <option value="26">26</option> 
      <option value="27">27</option> 
	  <option value="28">28</option> 
      <option value="29">29</option> 
      <option value="30">30</option> 
      <option value="31">31</option>
    </select>
    <select type="number" name="birthday">
    <option value="2011">2011</option>
    <option value="2010">2010</option> 
    <option value="1905">1905</option>
    </select></label>	
</fieldset>
<input type="Submit" value="Submit"/>
</form>
</div>
   <!--include the footer--> 
	<p><?php include ('./include/footer.html'); ?> </p>
</body>
</html>


