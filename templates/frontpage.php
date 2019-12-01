<?php include 'inc/header.php' ?>
<main role="main">

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">All comments</h1>
    </div>
  </div>

  <div class="container">
    <form class="" action="" method="POST">
      <input class="btn btn-info" type="submit" name="json" value="Extract all messages to Json"/>
    </form>
    <?php foreach($comments as $comment): ?>
    <div class="row">
      <div class="col-md-10">
        <h2><?php echo $comment->user_name; ?></h2>
        <i><?php echo $comment->post_date ?></i>
        <p><?php echo $comment->message; ?></p>
      </div>
      <div class="col-md-2">
        <a class="btn btn-default" href="comment.php?id=<?php echo $comment->id; ?>">View</a>
      </div>
    </div>
    <hr>
  <?php endforeach; ?>
  </div>



<?php include 'inc/footer.php' ?>
