<?php include 'inc/header.php' ?>

  <h2 class="page-header">Edit Comment</h2>
  <form class="" action="edit.php?id=<?php echo $comment->id; ?>" method="post">
    <div class="form-group">
      <label for="Name">Name</label>
      <input class="form-control" type="text" name="user_name" id="Name" value="<?php echo $comment->user_name ?>" required>
    </div>
    <div class="form-group">
      <label for="Email">Email</label>
      <input class="form-control" type="email" name="email" id="Email" value="<?php echo $comment->email ?>" required>
    </div>
    <div class="form-group">
      <label for="Message">Message</label>
      <textarea class="form-control" name="message" id="Message" rows="6" required><?php echo $comment->message ?></textarea>
    </div>
    <input type="submit" class="btn btn-info" name="submit" value="Comment">
  </form>

  <br>
  <br>
  <a href="index.php">Back</a>
  <br>
  <br>
<?php include 'inc/footer.php' ?>
