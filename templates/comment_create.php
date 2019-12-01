<?php include 'inc/header.php' ?>

  <h2 class="page-header text-center">Create Comment</h2>
  <form class="" action="create.php" method="post">
    <div class="form-group">
      <label for="Name">Name</label>
      <input class="form-control" type="text" name="user_name" id="Name" required>
    </div>
    <div class="form-group">
      <label for="Email">Email</label>
      <input class="form-control" type="email" name="email" id="Email" required>
    </div>
    <div class="form-group">
      <label for="Message">Message</label>
      <textarea class="form-control" name="message" id="Message" rows="6" required></textarea>
    </div>
    <input type="submit" class="btn btn-info" name="submit" value="Comment">
  </form>

  <br>
  <br>
  <a href="index.php">Back</a>
  <br>
  <br>
<?php include 'inc/footer.php' ?>
