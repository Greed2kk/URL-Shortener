<?php
 require_once('src\php\connection.php');
require_once('src\php\shorter_cr.php');
?>

<!DOCTYPE html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src='src/js/ajax.js'></script>
<script type="text/javascript" src='https://developers.google.com/speed/libraries/#jquery'></script>
<title>URL Shortener</title>  
<link href="styles/style.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<main>
    
    <div id="container">
        <h2 class="display-4 text-center">Paste the URL </h2>
        <div class="link-form">
            <form action="#" method="post" id="url-form">
                <div class="link-form__input-l">
                    <input type="text" name="url_f" placeholder="Enter the link here">
                </div>
            </form>   
         <div class="link-form__button">
            <button class="link-form__button__s" name="sendR" onclick="send()">Check!</button>
         </div>
            <div id="result"> </div>
               
        </div>
        
        <div class="link-form">
            <form action="#" method="POST" id="url-form1" >
                <div class="link-form__input-l">
            <input type="text" name="link"  placeholder="Enter the link here" <?php            if ((isset($link)) && (isset($link_fake))) {
                echo 'value="' . $link . '"';
            }
            ?> />
            <a class="article-title smaller" href="<?php            if ((isset($link))&& (isset($link_fake))) {
                echo($link_fake);
            }
            ?>"> <?php            if ((isset($link))&& (isset($link_fake))) {
                echo($link_fake);
            }
            ?> </a>
                </div>
                <div class="link-form__button">
                    <button class="link-form__button__s" name="send" onclick="send()">Create!</button>
                </div>
            </form>
        </div>
        
        <div class="link-form">
            <form action="#" method="post" id="url_form_add">
                <div class="link-form__input-l">
                    <input type="text" name="My_url" placeholder="url here">
                    <input type="text" name="Fake_url" placeholder="short url">
                </div>
            </form>
            <div class="link-form__button">
                <button class="link-form__button__s" name="sendF" onclick="add()">add!</button>
            </div>
            <div id="cre_res"> </div>
          
        </div>
            
    </div>        
</main>
</body>
</html>     
        
        
        
 
