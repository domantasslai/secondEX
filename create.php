<?php include_once 'config/init.php'; ?>

<?php
$comment = new Comment;

if (isset($_POST['submit'])){
  $data = array();
  $data['user_name'] = $_POST['user_name'];
  $data['email'] = $_POST['email'];
  $data['message'] = $_POST['message'];

  if ($comment->create($data)) {
    redirect('index.php', 'Comment sent', 'success');
  }
  else {
    redirect('index.php', 'Comment not sent', 'error');
  }
}

$template = new Template('templates/comment_create.php');



echo $template;
