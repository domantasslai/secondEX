<?php include 'inc/header.php' ?>

  <h2 class="page-header"><?php echo $single->user_name; ?></h2>
  <p class="page-header">Email: <?php echo $single->email;?></p>
  <hr>

  <p>Comment</p>
  <ul class="list-group">
    <li class="list-group-item"><?php echo $single->message ?></li>
  </ul>
  <i class="float-right">Posted: <?php echo $single->post_date ?></i>
  <br>
  <br>

  <div class="float-right">
    <a href="edit.php?id=<?php echo $single->id ?>" class="btn btn-info">Edit</a>

    <form class="" style="display: inline;"action="comment.php" method="post">
      <input type="hidden" name="del_id" value="<?php echo $single->id ?>">
      <input type="submit" name="" value="delete" class="btn btn-danger">
    </form>
  </div>
  <br>

  <a href="index.php">Back</a>
  <br>
  <br>
<?php include 'inc/footer.php' ?>
