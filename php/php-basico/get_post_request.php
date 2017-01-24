<?php 

//echo $_GET['name'];
//echo $_POST['name'];
//echo $_REQUEST['name'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Forms</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $_POST['name']; ?>">
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $_POST['email']; ?>">
    <label>Mensagem:</label>
    <textarea name="message"><?php echo $_POST['message']; ?></textarea>
    <input type="submit" value="Submit">
  </form>
</body>
</html>