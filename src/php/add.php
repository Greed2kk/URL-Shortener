<?php
if (isset($_POST['My_url']) && isset($_POST['Fake_url'])){
    $furl=$_POST['My_url'];
    $surl=$_POST['Fake_url'];
    $db_table = "links"; // Имя Таблицы БД
    $db_name = "short_links";
    $link_fake = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $surl;
     
    if (preg_match("~^([a-zA-Z]+):\/\/~", $furl)) {
        if (!preg_match("~^(http|https|ftp):\/\/~", $furl)) {
            $furl = 'http://' . $furl;
        }
    }else {
        $furl = 'http://' . $furl;
    }
$mysqli = new mysqli("localhost", "root", "", "short_links");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
$query = "SELECT `link_fake` FROM ".$db_table." ";
$result = $mysqli->query($query);

while($row = $result->fetch_array())
{
$rows[] = $row;
}
$flag=0;

foreach($rows as $row)
{
if ($row['link_fake'] == $surl){
    $flag=1;
}
}
 $query = mysqli_query($mysqli, "SELECT `link_fake` FROM ".$db_table." ");

    if ($flag == 0)  {
   
     mysqli_query($mysqli, "INSERT INTO ".$db_table." (link_fake, link_real) VALUES ('$surl', '$furl')");
    
     echo "Url added to the database: ", $link_fake;
    }else 
    {
        echo "This short link is not available. Please enter another.";
}
}
?>       