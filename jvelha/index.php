<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/estil.css">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        include('conexao.php');
        $cont = 0;
        $naomar = "nmar.png";
        $x = "X.png";
        $o = "O.png";
        
        
       
    ?>
    <?php
        if (isset($_SESSION['cont'])) {
            $cont = $_SESSION['cont'];
        }
       echo $cont;
      if ($cont %2 !=0) {
        $botao = "show-next-buttonX";
        $questao = "questionO";
      }else {
        $botao = "show-next-buttonO";
        $questao = "questionX";
      }
        
    ?>

    <table class="col-md-2">
        <tr>
            <th>
                <?php 
                if (isset($_SESSION['permanenteA'])) {
                    echo "<img src='img/".$_SESSION['permanenteA']."'alt=''>";
                }else {
                    echo "<a href='controle.php?lav=1&val=$cont&quest=0'><img src='img/$naomar'alt=''></a>";
                    
                }
                ?>
            </th>
                
            <th>
                <?php
                if (isset($_SESSION['permanenteB'])) {
                    echo "<img src='img/".$_SESSION['permanenteB']."'alt=''>";
                }else {
                    echo "<a href='controle.php?lav=2&val=$cont&quest=0'><img src='img/$naomar'alt=''></a>";
                }
            ?>
            </th>
            <th>
                <?php 
                if (isset($_SESSION['permanenteC'])) {
                    echo "<img src='img/".$_SESSION['permanenteC']."'alt=''>";
                }else {
                    echo "<a href='controle.php?lav=3&val=$cont&quest=0'><img src='img/$naomar'alt=''></a>";
                }
            ?>
        </th>
        </tr>
        <tr>
            <th>
                <?php 
                if (isset($_SESSION['permanenteD'])) {
                    echo "<img src='img/".$_SESSION['permanenteD']."'alt=''>";
                }else {
                    echo "<a href='controle.php?lav=4&val=$cont&quest=0'><img src='img/$naomar'alt=''></a>";
                }
            ?>
            </th>
            <th>
                <?php 
                if (isset($_SESSION['permanenteE'])) {
                    echo "<img src='img/".$_SESSION['permanenteE']."'alt=''>";
                }else {
                    echo "<a href='controle.php?lav=5&val=$cont&quest=0'><img src='img/$naomar'alt=''></a>";
                }
            ?>
            </th>
            <th>
                <?php 
                if (isset($_SESSION['permanenteF'])) {
                    echo "<img src='img/".$_SESSION['permanenteF']."'alt=''>";
                }else {
                    echo "<a href='controle.php?lav=6&val=$cont&quest=0'><img src='img/$naomar'alt=''></a>";
                }
            ?>
            </th>
        </tr>
        <tr>
            <th>
                <?php 
                if (isset($_SESSION['permanenteG'])) {
                    echo "<img src='img/".$_SESSION['permanenteG']."'alt=''>";
                }else {
                    echo "<a href='controle.php?lav=7&val=$cont&quest=0'><img src='img/$naomar'alt=''></a>";
                }
            ?>
            </th>
            <th>
                <?php 
                if (isset($_SESSION['permanenteH'])) {
                    echo "<img src='img/".$_SESSION['permanenteH']."'alt=''>";
                }else {
                    echo "<a href='controle.php?lav=8&val=$cont&quest=0'><img src='img/$naomar'alt=''></a>";
                }
            ?>
            </th>
            <th>
                <?php 
                if (isset($_SESSION['permanenteI'])) {
                    echo "<img src='img/".$_SESSION['permanenteI']."'alt=''>";
                }else {
                    echo "<a href='controle.php?lav=9&val=$cont&quest=0'><img src='img/$naomar'alt=''></a>";
                }
            ?>
            </th>
        </tr>

        </tr>
    </table>
    <div  class="col-md-6">
        <div >
            <?php 
                if (isset($_GET['a'])) {
                   $a = $_GET['a'];

                   if ($a == 1) {
                       $lav = $_GET['lav'];
                       $val = $_GET['val'];
                       $quest = $_GET['quest'];
                    
                       $sql = "SELECT * FROM tb_questoes WHERE que_id = ".$_SESSION['id'];
                       $result = mysqli_query($conexao,$sql);
                       $linha = $result->fetch_assoc();
                        echo $linha['que_res'];
                       echo "
                       
                  
                       <div class='".$questao."'>
                           <h3>
                           <span id='question'>".$linha['que_enu']."</span><br><br>
                           </h3>
                       </div>
                       <ul>
                        
                          <li>
                          <a href='controle.php?resposta=A&lav=".$lav."&quest=".$quest."&val=".$val."&respo=".$linha['que_res']."'>".$linha['que_a']."</a>
                            
                          </li>
                          
                          <li>
                          <a href='controle.php?resposta=B&lav=".$lav."&quest=".$quest."&val=".$val."&respo=".$linha['que_res']."'>".$linha['que_b']."</a>
                            
                          </li>
                          
                          <li>
                          <a href='controle.php?resposta=C&lav=".$lav."&quest=".$quest."&val=".$val."&respo=".$linha['que_res']."'>".$linha['que_c']."</a>
                           
                          </li>
                          <li>
                          <a href='controle.php?resposta=D&lav=".$lav."&quest=".$quest."&val=".$val."&respo=".$linha['que_res']."'>".$linha['que_d']."</a>
                            
                          </li>
                        </ul>
                        <a href='controle.php?resposta=N&lav=".$lav."&quest=".$quest."&val=".$val."'><input type='button' id='".$botao."'  value='Não Sei a Resposta'></a>
                       
                       ";
                   }else {
                      
                   }
                }else {
                    
                }
            ?>
        </div>
    </div>
</body>
</html>