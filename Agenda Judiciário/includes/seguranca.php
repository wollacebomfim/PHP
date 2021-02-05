  <?php  
    session_start();
    if(!isset($_SESSION['logado'])){
    header('Location: ./login.php');
    }else{
      $_SESSION['logado'];
    }


 

    ?>