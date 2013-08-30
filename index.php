<?php 

$username="YOUR_USER_NAME";
$password="YOUR_PASSWORD";
$database="DATABASE_NAME";
$link = mysql_connect("HOST_NAME",$username,$password);
session_start(); 
function browser() {
  $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
  // you can add different browsers with the same way ..
  if(preg_match('/(chromium)[ \/]([\w.]+)/', $ua))
    $browser = 0;//'chromium';
  elseif(preg_match('/(chrome)[ \/]([\w.]+)/', $ua))
    $browser = 1;//'chrome';
  elseif(preg_match('/(safari)[ \/]([\w.]+)/', $ua))
    $browser = 2;//'safari';
  elseif(preg_match('/(opera)[ \/]([\w.]+)/', $ua))
    $browser = 3;//'opera';
  elseif(preg_match('/(msie)[ \/]([\w.]+)/', $ua))
    $browser = 4;//'msie';
  elseif(preg_match('/(mozilla)[ \/]([\w.]+)/', $ua))
    $browser = 5;//'mozilla';
  preg_match('/('.$browser.')[ \/]([\w]+)/', $ua, $version);
return $browser;
}

$thebrowser =browser();

if (!$link) {
  die('Could not connect: ' . mysql_error());
}


print  "<head>                                                                                                                                                                             
    <meta charset='utf-8'>                                                                                                                                                           
    <title>Are you going to Happy Hour?</title>                                                                                                                          
    <link rel='stylesheet' type='text/css' href='http://www.zetiz.com/sitepoint/css/bootstrap.css'>                                                                                  

<style>

#myarea {
border:2px solid #000;
padding:10px;
height:50px;
width:800px;
}
</style>";

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

print "<div class='container'><form id='formid' method=\"post\" action=\"db.php\">";
print "<TABLE WIDTH=82% HEIGHT=100% bgcolor='#FFFFFF' BORDER=0 align='center' cellpadding='0'>";

print "<br><TR><TD><h1><b>Are you going to Happy Hour?</h1> </b></br>";
print "Name: <input name=\"name\" /></input>";

print "</br><center><input class='btn btn-primary btn-large' type='submit' name='1' value='+1'></input><input class='btn btn-primary btn-large' name='2' type='submit' value='+2'></input></TD></TR></form>"; 

print "</center>
</TD> </TR></table>


  <div class='row'>   
<div class='footer'>";                                                       

  print "<p>&copy; Data Science for Social Good 2013.</p>                                                                                                   
                                                                </div>                                                                                                               
                                                              </div>                                                                                                                 </div>
                                                                      

</body></html>";
print "<script scr='http://qcri.dssg.io/bootstrap/session2/dist/js/bootstrap.js'></script>"; 


?>