<?php include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Login </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
<form action="loginck.php" method="post">

  <table border="0" align="center" cellpadding="5" cellspacing="7">
	
	        <tr align="right">	
		     <td>  <br>
		      <a href="registration.php"> New User?</a></td>
		 </tr>
		<tr>
             <td> Enter your Username </td>
        <td> <input type="text" name="uid" placeholder="Enter Your Username" style="padding: 10px; width: 150%"> <br>  </td>
		
		</tr>

		<tr>
           <td>Enter your Password</td>
 <td> <input type="Password" name="pass" placeholder="Enter Your Password" style="padding: 10px; width: 150%"> <br>   </td>
		
		</tr>

		<tr>	    
 <td align="right"> <input type="submit" name="" value="Login Now" style="color: red; background-color: lightgreen; font-size: 1.5em; font-family: times new roman;"> </td> 
</tr>
               
              
</form>
		</table>			




				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>