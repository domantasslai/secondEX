<?php include_once 'config/init.php'; ?>

<?php
$comment = new Comment;

if(isset($_POST['del_id'])){
  $del_id = $_POST['del_id'];

  if ($comment->deleteComment($del_id)) {
    redirect('index.php', 'Comment deleted', 'success');
  }else {
    redirect('index.php', 'Comment not deleted', 'error');
  }
}



$template = new Template('templates/comment_single.php');


$comment_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->single= $comment->getComment($comment_id);
echo $template;
