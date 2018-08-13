<?php
if(isset($_GET['link'])) {
    $link = $db->real_escape_string(trim($_GET['link']));
    $sql = "SELECT `link_real` FROM `links` WHERE `link_fake`='{$link}' LIMIT 1";
    $result = $db->query($sql)->fetch_assoc();
    if(!is_null($result)) $url = $result['link_real'];
    else $url = '/';
    header("Location: {$url}");
    exit;
}
$result_message = '';
if(isset($_POST['send'])) {
    $link = isset($_POST['link']) ? trim($_POST['link']) : '';
    if(empty($link)) $result_message = 'Field is empty!';
    if(empty($result_message)) {
        
        if(preg_match("~^([a-zA-Z]+):\/\/~", $link)) {
            if(!preg_match("~^(http|https|ftp):\/\/~", $link))
                $link = 'http://' . $link;
        }else $link = 'http://' . $link;
        
        $link_id = uniqid(true);
        $link_fake = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $link_id;
        $link = $db->real_escape_string($link);
        $sql = "INSERT INTO `links`(`link_fake`,`link_real`) VALUES('{$link_id}','{$link}')";
        $db->query($sql);
        $result_message = '<p class="success">' . $link_fake . '</p>'; 
    }else 
        $result_message = '<p class="error">' . $result_message . '</p>';
}
?>