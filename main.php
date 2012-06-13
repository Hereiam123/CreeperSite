<?php



function tag_cloud($tags){
	$maxsize=35;
	$minsize=10;
	
	$maxval=max(array_values($tags));
	$minval=min(array_values($tags));
	
	$spread= ($maxval - $minval);
	
	$step= (($maxsize - $minsize) / $spread);
	
	foreach($tags as $key => $value){
		$size=round($minsize +(($value - $minval) * $step));
		echo '<a href="#" style="font-size: '.$size.'px;">'.$key.'</a> ';
	}
}

$tags=array('Married'=>3,'Crazy'=>1,'Liar'=>3,'Douchey'=>6,'Weird Fetish'=>2,'Jealous'=>8,'Possessive'=>2,'Control Freak'=>1,'Late'=>3,'Vain'=>8,'Smelly'=>4,'Psycho'=>1,'Bossy'=>3,'Cheap'=>6,'Snob'=>2,'Clingy'=>1,'Boring'=>2);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link href='http://fonts.googleapis.com/css?family=Questrial|Marko+One' rel='stylesheet' type='text/css'/>
 
 
<script language="JavaScript" type="text/javascript">
  function login(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox').style.visibility="visible";
		document.getElementById('popupbox2').style.visibility="hidden"; 
    }else if(showhide == "hide"){
        document.getElementById('popupbox').style.visibility="hidden"; 
    }
  }
  
  function register(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox2').style.visibility="visible";
		document.getElementById('popupbox').style.visibility="hidden"; 
    }else if(showhide == "hide"){
        document.getElementById('popupbox2').style.visibility="hidden"; 
    }
  }
  
</script>   

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/search.js"></script>
<script type="text/javascript" src="js/returnTags.js"></script>
<script type="text/javascript" src="js/storyLoad.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Creeperstash</title>
</head>

<body>

<div id="header">

	<div class="container_12">

		<div class="grid_7">
        
        	<div id="logo">
        
    			<h1><a href="main.php"><img src="img/logo_new3a.png" alt="creeperstash"/></a></h1>
    			
            </div>
        
        </div>
        
        <div class="grid_5">
        
        	<div id="topbuttons">
            
            <a class="button" href="javascript:login('show');">Login</a> <a class="button" href="javascript:register('show');">Sign Up</a>
            
            </div>
                            
        
        </div>

	</div>

</div>

<div class="container_12">
	<div class="grid_12">
		<div id="popupbox"> 
        	<p class="centerclose"><a href="javascript:login('hide');"><img src="img/close.png" alt="close"/></a></p>
			<form name="login" action="loggedin.php" method="post">
            	<fieldset>
                <legend>
				<label for="username">Username:</label><br />
                <input name="username" size="14" />
                <br />
				<label for="password">Password:</label>
                <br />
                <input name="password" type="password" size="14" />
                <br /><br />
				<input type="submit" name="submit" value="Login" class="submit"/>
                </legend>
                </fieldset>                
			</form>
			 
			</div>             
	</div>
</div>

<div class="container_12">
	<div class="grid_12">
		<div id="popupbox2"> 
        	<p class="centerclose"><a href="javascript:register('hide');"><img src="img/close.png" alt="close" /></a></p>
			<form name="register" action="register.php" method="post">
            	<fieldset>
                <legend>
				<label for="username">Username:</label>
                <br />
                <input name="username" size="14" />
                <br />
				<label for="password1">Password:</label><br />
                <input name="password1" type="password" size="14" />
                <br />
                <label for="password2">Re-enter Password:</label>
                <br />
                <input name="password2" type="password" size="14" />
                <br /><br />
				<input type="submit" name="register" value="Sign Up" class="submit"/>
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
        
        	<div id="searchArea">
        
				<form onsubmit="return false" action="">
        
    			<input type="text" name="search" id="SearchBox"/>
        
    			<input type="image" src="img/search.png" id="SubmitSearch"/>
        
    			</form>
    
    		</div>	
        
        </div>
        
    </div>
    
</div>

<div class="container_12">

	<div class="grid_3">
    
    	<div id="leftnav">
        
        <h3>Welcome to CreeperStash!</h3>

<p>Wonder if that cool guy you're checking out at okCupid or match.com is a total catch or an epic fail? Creeperstash is here to help you take the plunge or place that creep on ignore!
Sign up for an account today and share your dating horror stories, and add your own Creepers to our stash!</p>
        
        </div>
    
    </div>	    
    
    <div class="grid_6">
    
		<div id="main_content">
        
                
        </div>
	
    </div>
    
    <div class="grid_3">
    
    	<div id="right_content">
    
    		<?php 
				tag_cloud($tags);
			?>
    
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
