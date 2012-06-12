<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link href='http://fonts.googleapis.com/css?family=Questrial|Cardo:400,700,400italic' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/search.js"></script>

<script language="JavaScript" type="text/javascript">
  function login(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox').style.visibility="visible";
    }else if(showhide == "hide"){
        document.getElementById('popupbox').style.visibility="hidden"; 
    }
  }
  </script>
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Creeperstash</title>
</head>

<body>

<div id="header">

	<div class="container_12">

		<div class="grid_7">
        
        	<div id="logo">
        
    			<h1><img src="img/logo_new3a.png" /></h1>
    			
            </div>
        
        </div>
        
        <div class="grid_5">
        
        	<div id="topbuttons">
            
            <a class="button" href="javascript:login('show');">Login</a> <a class="button" href="javascript:login('show');">Sign Up</a>
            
            </div>
                            
        
        </div>

	</div>

</div>

<div class="container_12">
	<div class="grid_12">
		<div id="popupbox"> 
        	<p class="centerclose"><a href="javascript:login('hide');"><img src="img/close.png" /></a></p>
			<form name="login" action="loggedin.php" method="post">
            	<fieldset>
                <legend>
				<label for="username">Username:</label><input name="username" size="14" />
                <br />
				<label for="password">Password:</label><input name="password" type="password" size="14" />
                <br />
				<input type="submit" name="submit" value="Login" class="submit"/>
                </legend>
                </fieldset>                
			</form>
			 
			</div>             
	</div>
</div>

<div class="container_12">
	<div class="grid_12">
		<div id="popupbox"> 
        	<p class="centerclose"><a href="javascript:login('hide');"><img src="img/close.png" /></a></p>
			<form name="login" action="loggedin.php" method="post">
            	<fieldset>
                <legend>
				<label for="username">Username:</label><input name="username" size="14" />
                <br />
				<label for="password">Password:</label><input name="password" type="password" size="14" />
                <br />
				<input type="submit" name="submit" value="Login" class="submit"/>
                </legend>
                </fieldset>                
			</form>
			 
			</div>             
	</div>
</div>


<div class="bar">

	<div class="container_12">
    	
        <div class="grid_6">
        
        	<div id="newnavtop">	
            
            	<ul class="newnavtop">
            		<li id="home"><a href="#">Home</a></li>
                	<li id="search"><a href="#">Search</a></li>
                	<li id="stories"><a href="#">Stories</a></li>            
            	</ul>
                        
        	</div>
        
        </div>
        
        <div class="grid_6">
        
        	<div id="search">
        
				<form onsubmit="return false">
        
    			<input type="text" name="search" id="Search"/>
        
    			<input type="image" src="img/search1.png" alt="Submit" id="Submit"/>
        
    			</form>
    
    		</div>	
        
        </div>
        
    </div>
    
</div>

<div class="container_12">
	
    <div class="grid_3">

		<div id="leftnav">
        
        <h3>Some Stuff</h3>
        
      
        
        
        
        </div>

	</div>
    
    <div class="grid_6">
    
		<div id="main_content">
        
        <h3>Latest Creeps</h3>
        
        <h5>You're not going to believe this one!</h5>
        
        <h6>6/2/12</h6>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis tellus non tortor sodales vitae pretium purus rutrum. Vestibulum adipiscing, mauris ac feugiat commodo, quam nisl tempor nisl, at lobortis leo nisi eu lorem. Nullam auctor, sem id egestas ullamcorper, dui ipsum dapibus felis, in consectetur nisl quam condimentum ipsum. Phasellus hendrerit placerat metus et aliquam. Etiam ante mi, adipiscing non porta ac, elementum non lectus... 
        <a href="readmore.html">read more</a></p>
        
        
        
        
        <h5>Tickle Fetish Fiend</h5>
        
        <h6>6/1/12</h6>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis tellus non tortor sodales vitae pretium purus rutrum. Vestibulum adipiscing, mauris ac feugiat commodo, quam nisl tempor nisl, at lobortis leo nisi eu lorem. Nullam auctor, sem id egestas ullamcorper, dui ipsum dapibus felis, in consectetur nisl quam condimentum ipsum. Phasellus hendrerit placerat metus et aliquam. Etiam ante mi, adipiscing non porta ac, elementum non lectus... 
        <a href="readmore.html">read more</a></p>
        
        
        
        </div>
	
    </div>
    
    <div class="grid_3">
    
    	<div id="right_content">
    
    		<h3>Tag Cloud Here</h3>
    
   	 		</div>
    
    </div>
    
</div>

<div class="footerbar">

	<div class="container_12">
    	
        <div class="grid_12">
        
        </div>
        
    </div>
    
</div>

<div id="footer">
	
<div class="container_12">
	
    <div class="grid_12">       
        
       	 		<p id="footer1">
                
                <a href="about.html">About</a> |
        
        		<a href="contact.html">Contact</a> |
        
        		<a href="help.html">Help</a> 
        
        		</p>
                
                <p id="footer2">
        
        		<a href="terms.html">Terms of Use</a> |
        
        		<a href="copyright.html">Copyright</a> |
        
        		<a href="privacy.html">Privacy Policy</a> |
         
                
                </p>
                
                </div>
        
        </div>
	
    </div>

</body>

</html>
