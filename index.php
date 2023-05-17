<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utenza</title>
</head>

<body>

<?php if (isset($_GET['message'])): ?>

  <p><?php echo $_GET['message']; ?> <a href="index.php">Torna alla home</a> </p>

  <?php elseif (isset($_SESSION['username'])) : ?>

    <p>Ciao <?php echo $_SESSION['username']; ?></p>

    <form action="logout.php" method="post">
    <input type="submit" value="Logout">
    </form>

  <?php else : ?>
   
      <fieldset>
        <legend>Login</legend>
        <form action="login.php" method="POST" class="to-ajax">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required><br><br>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required><br><br>

          <input type="submit" value="Login">
        </form>
      </fieldset>

      <div style="height: 100px;"></div>

      <fieldset>
        <legend>Register</legend>
        <form action="register.php" method="POST" class="to-ajax">

          <label for="firstname">Nome:</label>
          <input type="text" id="firstname" name="firstname" required><br><br>

          <label for="lastname">Cognome:</label>
          <input type="text" id="lastname" name="lastname" required><br><br>

          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required><br><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br><br>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required><br><br>

          <input type="submit" value="Registrati">
        </form>
      </fieldset>

  <?php endif; ?>

</body>

</html>