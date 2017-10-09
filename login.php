<?php
session_start();
?>
<!doctype html>
<html>
 <head>
 <meta charset="UTF-8">
<title>Login PHPJobs</title>
<link href = "css.css" rel = "stylesheet" />
</head>
<body>
<?php 
       include "menu.php";
?>
<div id="divCenter">
    <form action="index.php" method="post">
        <table>
            <tr>
                <td>Login</td>
            </tr>
            <tr>
                <td><input type="text" name="usuario" required></td>
            </tr>

            <tr>
                <td>Senha</td>
            </tr>

            <tr>

                <td><input type="password" name="senha" required></td>
            </tr>
 
 <?php if ( ! empty( $_SESSION['login_erro'] ) ) :?>
    <tr>
        <td><?php echo $_SESSION['login_erro'];?></td>
 <?php $_SESSION['login_erro'] = ''; ?>
    </tr>
 <?php endif; ?>
 
    <tr>
        <td><input type="submit" value="Entrar"></td>
    </tr>
        </table>
 </form>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=167345997177659";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>