  <?php
  if(!isset($_SESSION['logado'])):
    header('Location: /padi/login.php');
  endif;
  ?>