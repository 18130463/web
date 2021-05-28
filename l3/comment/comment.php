<?php
header('Content-Type: application/json');
$name = $_POST['post_name'];
$email = $_POST['post_email'];
$comment = $_POST['post_comment'];
$res = file_get_contents('comment.json');

$data = json_decode($res, true);
$l = count($data);
$i=$l;
$data[$i]['name'] = $name;
$data[$i]['email'] = $email;
$data[$i]['comment'] = $comment;

$jsonData = json_encode($data, JSON_UNESCAPED_UNICODE);
file_put_contents('comment.json', $jsonData);

?>