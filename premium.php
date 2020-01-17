<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
</HEAD>
<BODY>

<H2>Podaj hasło dostępu</H2>
<FORM NAME = "formularz1"
      ACTION = "panel.php"
      METHOD = "POST">
<INPUT TYPE="password" NAME="haslo">
<BR><BR>
<INPUT TYPE="submit" VALUE="Wejdź">

 <STYLE>
     
     h2{
         margin-left:45%;
         font-size:40px;
     }
       
     body{
         background-color:black;
         color:gray;
     }
     
     input{
         background-color:yellow;
         margin-left:45%;
         font-size:20px;
         
     }
    
    
</STYLE>
    
    <?PHP

function checkPass()
{
  $haslo = $_POST["haslo"];
  if($haslo <> "tajny"){
    return false;
  }
  else{
    return true;
  }
}
if(isSet($_POST["haslo"]) && checkPass()){
  include('panel.php');
}
else{
  
}
?>
 