<?php
require_once('src\php\connection.php');
require_once('src\php\shorter_cr.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script type="text/javascript" src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.6.4'></script>
<script type="text/javascript" src='src/js/ajax.js'></script>

<script type="text/javascript" src='https://developers.google.com/speed/libraries/#jquery'></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<title>URL Shortener</title>
<link href="styles/style.css" type="text/css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<main>
    
<div id="container">
    <h2 align="center">URL Shortener. Test task</h2>
    <div class="link-form">
        <form action="#" method="post" id="url-form">
            <div class="link-form__input-l">
                <input type="text" name="url_f" placeholder="Enter link here">
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
                <input type="text" name="link"  placeholder="Enter link here" <?php if ((isset($link)) && (isset($link_fake))) {echo 'value="' . $link . '"';}?>/>
                <a class="article-title smaller" href="<?php if ((isset($link))&& (isset($link_fake))) {echo($link_fake);}?>"> <?php if ((isset($link))&& (isset($link_fake))) {echo($link_fake);}?> </a>
            </div>
            <div class="link-form__button">
                <button class="link-form__button__s" name="send" onclick="send()">Create!</button>
            </div>
        </form>
    </div>
    
    <div class="link-form">
        <form action="#" method="post" id="url_form_add">
            <div class="link-form__input-l">
                <input type="text" name="My_url" placeholder="Enter link here">
                <input type="text" name="Fake_url" placeholder="Enter short url here">
                </form>
        <div class="link-form__button">
            <button class="link-form__button__s" name="sendF" onclick="add()">add!</button>
        </div>
        <div id="cre_res"> </div>
            </div> 
    </div>  
    
</div>   
</main> 
</body>
</html>     
        
        
        