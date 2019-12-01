<?php include_once 'config/init.php'; ?>

<?php
$comment = new Comment;

$comment_id = isset($_GET['id']) ? $_GET['id'] : null;
if (isset($_POST['submit'])){
  $data = array();
  $data['user_name'] = $_POST['user_name'];
  $data['email'] = $_POST['email'];
  $data['message'] = $_POST['message'];

  if ($comment->editComment($comment_id, $data)) {
    redirect('index.php', 'Comment edited', 'success');
  }
  else {
    redirect('index.php', 'Comment not edited', 'error');
  }
}

$template = new Template('templates/comment_edit.php');

$template->comment= $comment->getComment($comment_id);


echo $template;
