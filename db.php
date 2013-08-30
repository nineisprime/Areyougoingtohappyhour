<?php 
$username="YOUR_USER_NAME";
$password="YOUR_PASSWORD";
$database="DATABASE_NAME";
$link = mysql_connect("HOST_NAME",$username,$password);
session_start();
if (!$link) {
  die('Could not connect: ' . mysql_error());
 }
//echo 'Connected successfully';
@mysql_select_db($database) or die( "Unable to select database");

print "<style>body {background-image:url('background.png');
  background-repeat:yes;
font-family: fontC;
 color:#111;
}



</style>";

print  "<head>                                                                                                                                                                                                                                                                                                                                                           
    <meta charset='utf-8'>                                                                                                                                                          \
                                                                                                                                                                            
    <title>Are you going to Happy Hour?</title>                                                                                                                                      
    <link rel='stylesheet' type='text/css' href='http://www.zetiz.com/sitepoint/css/bootstrap.css'>                                                                                 \
                                                                                                                                                                                     
                                                                                                                                                                                     
<style>                                                                                                                                                                              
                                                                                                                                                                                     
#myarea {                                                                                                                                                                            
border:2px solid #000;                                                                                                                                                               
padding:10px;                                                                                                                                                                        
height:50px;                                                                                                                                                                         
width:800px;                                                                                                                                                                         
}                                                                                                                                                                                    
</style>";


//Pass the data in the form of url page.php?variable=value and read the values as `echo $_GET['variable']




$h = $_POST["name"];
$num = $_POST["1"];
$num2 = $_POST["2"];


print "<style type='text/css'>                                                                                                                                                       
  .ui-widget-header {                                                                                                                                                                
  background-image: none !important;                                                                                                                                                 
  background-color: #ABFFBB !important; //Any colour can go here                                                                                                                     
}                                                                                                                                                                                    
</style>";
print "<body>";
   print "<div class='navbar navbar-fixed-top'>                                                                                                                                      
  <div class='navbar-inner'>                                                                                                                                                         
    <div class='container'>                                                                                                                                                          
      <a class='btn btn-navbar' data-toggle='collapse' data-target='.nav-collapse'>                                                                                                  
        <span class='icon-bar'></span>                                                                                                                                               
        <span class='icon-bar'></span>                                                                                                                                               
        <span class='icon-bar'></span>                                                                                                                                               
      </a>                                                                                                                                                                           
<br>                                                                                                                                                                                 
      <a class='brand' href='#'>DSSG Happy Hour Form</a>                                                                                                                             
      <div class='nav-collapse'>                                                                                                                                                     
                                                                                                                                                                                     
      <div id= 'progressbar'>                                                                                                                                                        
        <div class='bar' style='width: 16%;'></div>                                                                                                                                  
      </div>                                                                                                                                                                         
      </div><!--/.nav-collapse -->                                                                                                                                                   
    </div>                                                                                                                                                                           
  </div>                                                                                                                                                                             
</div>";

print "<div class='container'>";

print "<br><br><br><br><h1>Thank you " . $h . "!</h1></div>";

                                                                                                                                                                                     
                                                                                                                                                                                     
print "</body></html>";





if (isset($num)){
$request= "INSERT INTO happy_hour values (NULL, '$h', '$num')";
 $results = mysql_query($request, $link);
}else{
  $request= "INSERT INTO happy_hour values (NULL, '$h', '$num2')";
  $results = mysql_query($request, $link);

}


?>