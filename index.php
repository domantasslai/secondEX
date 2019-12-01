<?php include_once 'config/init.php'; ?>

<?php
$comment = new Comment;

$template = new Template('templates/frontpage.php');


$template->comments = $comment->getAllComments();
$template->comment = $comment->parseToJsonFile();


echo $template;
