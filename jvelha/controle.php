<?php 
session_start();
include("conexao.php");

$_SESSION['lav'] = $_GET['lav'];
$quadrado = $_SESSION['lav'];
$cont = $_GET['val'];

$quest = $_GET['quest'];
$naomar = "nmar.png";
$x = "X.png";
$o = "O.png";




$sql = "SELECT * FROM `tb_questoes` WHERE que_status like '0' ORDER BY RAND() LIMIT 1;";
$result = mysqli_query($conexao,$sql);
$linha = $result->fetch_assoc();

if (isset($_GET['resposta'])) {
    $resp = $_GET['resposta'];
    $respo = $_GET['respo'];
    echo $resp."   ".$respo;
    if ($resp == $respo) {
        $quest = 1;
        verifiafoto($cont,$quadrado,$x,$o);
        echo "parou no acertar";
    }elseif ($resp == 'N') {
        $quest = 1;
        $cont += 1;
        $_SESSION['cont'] = $cont;
       header('Location:index.php');
        echo "parou no n";
    }else {
        $quest = 1;
        $cont += 1;
        $_SESSION['cont'] = $cont;
       header('Location:index.php');
        echo "parou no nerro";
    }
}else{

if ($quest == 0) {

$_SESSION['id'] = $linha['que_id'];

header('Location:index.php?a=1&lav='.$quadrado.'&val='.$cont.'&quest='.$quest.'');

}else {
    verifiafoto($cont,$quadrado,$x,$o);

}
}


function verifiafoto($cont,$quadrado,$x,$o){
    $cont += 1;
    $_SESSION['cont'] = $cont;
    
    if ($quadrado == 1) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteA'] = $x;
        }else {
            $_SESSION['permanenteA'] = $o;
        }
    }
    if ($quadrado == 2) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteB'] = $x;
        }else {
            $_SESSION['permanenteB'] = $o;
        }
        
    }
    if ($quadrado == 3) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteC'] = $x;
        }else {
            $_SESSION['permanenteC'] = $o;
        }
    }
    if ($quadrado == 4) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteD'] = $x;
        }else {
            $_SESSION['permanenteD'] = $o;
        }
    }
    if ($quadrado == 5) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteE'] = $x;
        }else {
            $_SESSION['permanenteE'] = $o;
        }
    }
    if ($quadrado == 6) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteF'] = $x;
        }else {
            $_SESSION['permanenteF'] = $o;
        }
    }
    if ($quadrado == 7) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteG'] = $x;
        }else {
            $_SESSION['permanenteG'] = $o;
        }
    }
    if ($quadrado == 8) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteH'] = $x;
        }else {
            $_SESSION['permanenteH'] = $o;
        }
    }
    if ($quadrado == 9) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteI'] = $x;
        }else {
            $_SESSION['permanenteI'] = $o;
        }
    }
    header('Location:index.php');
    }








?>