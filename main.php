<?php 
  $value = "hello world";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $result = mail("tarek3529@gmail.com", "Mail from myself", "test email");
    if ($result) {
      echo "<h1>sent</h1>";
    } else {
      echo "<h1>didn't</h1>";
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Email Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1>Contact Us</h1>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];        
          } else {
            $name = '';
            $email = '';
            $subject = '';
          }
        ?>
        <div class="npt name">
          <input type="text" name="name" placeholder="name" required value="<?php echo $name ?>"/>
        </div>
        <div class="npt email">
          <input type="text" name="email" placeholder="email" required value="<?php echo $email ?>"/>
        </div>
        <div class="npt subject">
          <textarea name="subject" class="subject" cols="30" rows="10" placeholder="your message..." minLength="2" required><?php echo $subject ?></textarea>
        </div>
        <input class="btn-submit" type="submit" />            
      </form>
    </div>
  </body>
</html>