<?php


    require 'class.rest.php';
    require 'config.php';



if (isset($_POST['submit_1']))
{
    try
    {
        
        $login = $_POST['login'];
        $hash = hash('sha256', $login);
        $res_1 = htmlentities($login);
        
        
        
        $pass = $_POST['pass'];
        $hash = hash('sha256', $pass);
        $res_1 = htmlentities($pass);
        
        $name = $_POST['name'];
        $hash = hash('sha256', $name);   
        $res_1 = htmlentities($name);
        
        $surname = $_POST['surname'];
        $hash = hash('sha256', $surname);  
        $res_1 = htmlentities($surname);
        
        $phone = $_POST['phone'];
        $hash = hash('sha256', $surname);
        $res_1 = htmlentities($phone);
        
        
        
      
         if (isset($_POST['check']) ) 
         {
            //$check = $_POST['check'];
            
            throw new Exception("Please select checkbox", 1306);
     
         }
        if (empty($_POST['login']) ) 
         {
            //$check = $_POST['check'];
            
            throw new Exception("Please select checkbox", 1502);
     
         }
        if (empty($_POST['pass']) ) 
         {
            //$check = $_POST['check'];
            
            throw new Exception("Please select checkbox", 1504);
     
         }
          if (empty($_POST['name']) ) 
         {
            //$check = $_POST['check'];
            
            throw new Exception("Please select checkbox", 1506);
     
         }
          if (empty($_POST['surname']) ) 
         {
            //$check = $_POST['check'];
            
            throw new Exception("Please select checkbox", 1507);
     
         }
        if (empty($_POST['phone'])) 
         {
            //$check = $_POST['check'];
            
            throw new Exception("zly numer", 1509);
     
         }
        if (isset($_POST['check']) ) 
        {
            //$check = $_POST['check'];
            
            throw new Exception("Please select checkbox", 1306);
     
         }
    
        
        

        $rest = new FmRestApi($login[0] = 'login', 
                              $pass[1] = 'password',
                              $name[2] = 'firstname',
                              $surname[3] = 'lastname',
                              $phone[4] = 'phone'
                              



                             );
        
        $postdata = array(
            'login' => $login,
            'password' => $pass,
            'firstname' => $name,
            'lastname' => $surname,
            'phone' => $phone



        );
        $response = $rest->doRequest('/rest/account/create', $postdata);
        print_r($response);


        
        
    }
       






    
        
   
        catch (Exception $e) 
        {
            if (isset($_POST['submit_1']) && isset($_POST['check_1']) && $login && $pass && $name && $surname && $phone && strlen($phone)==12)
             {
                echo $login;
                header("Location:index.php?errno= ".$e->getCode());
                
                }
            else 
                {
                
                    header("Location: tworzenie_kont.php?errno= ".$e->getCode());
                
                }

        //echo 'Code: '.$e->getCode().' Message: '.$e->getMessage()."\n";
        print_r($rest->getResponse());
        }




    
    
}
   

?>



<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
    <div class="regist">
         <form class="regist_1" action="" method="post">
             <label>
                dane osobowe: <p class="nr_1">podaj swój nowy login: <input id="js" size="25" type="text" name="login" placeholder="Login nowego użytkownika " /></p>
                     
                     
                 <p class="nr_2">podaj nowe hasło: <input id="js" size="35" type="password" name="pass" placeholder="Hasło którym użytkownik będzie się logował"/></p>
                 
                 
                 <p class="nr_2">podaj swoje imie: <input id="js" size="25" type="text" name="name" placeholder="Imię użytkownika"/></p>
                 
                 
                  <p class="nr_2">podaj swoje nazwisko: <input id="js" size="25" type="text" name="surname" placeholder="Nazwisko użytkownika"/></p>
                  
                  
                  <p class="nr_2">podaj swój numer telefonu: <input id="js" maxlength="12" size="25" type="number" name="phone" placeholder="Numer telefonu"/></p>
                  
                  
                  
                   <p class="nr_2">potwierdzasz że wyrażasz zgodę na przetwarzanie danych <input type="checkbox" name="check_1" /></p>
                  
                  
                  
                 <p class="nr_2"><input id="js" size="25" type="submit" value="zarejestruj się" name="submit_1" placeholder="Nazwisko użytkownika"/></p>
                 
                 
                 
                 
             </label>
             
             
             

        </form>
         
         
         
     </div>
	</body>
</html>