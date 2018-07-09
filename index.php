
<?php

//include_once 'login.php';


require 'class.rest.php';
require 'config.php';



try 
{

if (isset($_POST['submit']) && isset($_POST['check']) && $val_1 = $_POST['name']&& $val_2 = $_POST['maile']) 
{
 
     
      $val_1 = $_POST['name'];
      $val_2 =  $_POST['maile'];
    
               
         
        
        $rest = new FmRestApi($list[0] = 'list', $email[1] = 'email');
        $postdata = array(
            'email' => $val_2,
            'list' => FM_API_LIST
        );
        
        $val_2 = 'list';
    
        $rest->doRequest('subscriber/add', $postdata);
     
        
    
    
    
}

   
        // przekieruj do strony z podziękowaniem za zapisanie do newslettera
       
}
    
catch (Exception $e) 
{
    header("Location: fault.php?errno= ". $e->getCode());
    print_r($rest->getResponse());
        //echo 'Code: '.$e->getCode().' Message: '.$e->getMessage()."\n";


}
       
    
    
       // print_r($rest->getResponse('/rest/ping'));
    
    

            /*try 
            {
               
                $data = array(
                    'subscriber' => 'skowalski@gmail.com',
                    
                    
                );

                $response = $rest->doRequest('/rest/ping', $data);
                
                
            } */
            
           
                
                
           
    
            
                
               

                    //echo 'Code: '.$e->getCode().' Message: '.$e->getMessage()."\n";
                 
            
    
    
            
                 
                
                        





               
                   /*strlen($val_1)>=5 && strlen($val_2)>=5 && strlen($val_1)>=20 && strlen($val_1)==0 && strlen($val_2)==0*/
        
                         
            
                 
      
            

    

    
   
   









?>

<!doctype html>

<html>
	<head>
	    <link rel="stylesheet" href="styl.css" type="text/css" />
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		
	</head>

	<body>
    
        

    
    
     <div class="box">
         <form class="box_1" action="" method="post">
             
             dane osobowe:<p class="nr_1">podaj imie i nazwisko: <input id="js" size="22" type="text" name="name" placeholder="imie i nazwisko" /></p>
             <p class="nr_2">podaj address email: <input id="js" size="22px" type="text" name="maile" placeholder="email address"/></p>
             
             <p class="nr_2">zgoda na przetwarzanie danych <input type="checkbox" name="check" /></p>
             <p class="nr_4"><input class="nr_5" name="submit" type="submit" value="wyślij" /></p>

        </form>
         
         
         
     </div>
     <div class="box_2">
         <a href="tworzenie_kont.php"><button class="but">zarejestruj się</button></a>
         
         
         
         
     </div>
     
       
       
	</body>
</html>