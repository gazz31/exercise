
<?php







    if (isset($_GET['errno'])) 
{
        $errno = $_GET['errno'];
        
        switch($errno) 
        {
            case 1301 : $message = "niepoprawny adres e-mail"; break;
            case 1302 : $message = "lista subsk..."; break;
            
            default: $message = false;
        }
    
    
    
    
    
    
}
    
   
    
    
    
    









?>

<html>



	<head>
	    <link rel="stylesheet" href="" type="text/css" />
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
      <div class="content">
              <p class="laal">Zapraszamy</p>
          
           
           <div class="akapit">
            
                 <div name="errno" class="blad_1" style="width: 200px; height:20px; background:#000; color:#fff"><?php if($message) { ?> <?php echo $message ?>masz błąd : </div>
                 
                 
             <?php } ?>
              <p class="p2">Dziękujemy za zalogowanie się.</p>
                

              <a href="index.php"><button class="but" value="wyloguj się">wyloguj się</button></a>
          

               
              
          </div>
          
      </div>
       
       
	</body>
</html>