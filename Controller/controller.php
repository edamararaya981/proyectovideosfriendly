<?php 
require_once('Views/views.php');
if(isset($_GET['cerrarSesion'])){
    session_destroy();
    header('location'.URL);
}
if(isset($_POST['botonRegistroFinal'])){
    require_once('Model/conexion.php');
    require_once('Model/consultasCuenta.php');
    $emailUsuario = $_POST['inputEmailRegistro'];
    $nombreUsuario= $_POST['inputUsuarioRegistro'];
    $passUsuario= $_POST['inputPasswordRegistro'];
    $passUsuarioEnc= crypt($passUsuario,"incuyo");
    //$imagenUsuario= ASSETS.'images/avatar/noavatar.png';
    // echo "PROBANDO";
    $datosUsuario= array($emailUsuario,$nombreUsuario,$passUsuarioEnc,$imagenUsuario);
    crearUsuario(conectar(),$datosUsuario);

}
if (isset($_POST['botonIngresar'])) {
    require_once('Model/conexion.php');
    require_once('Model/consultasCuenta.php');
    $emailUsuario = $_POST['inputEmail'];
    $claveUsuario= $_POST['inputPassword'];
    $claveUsuarioEnc= crypt($claveUsuario,"incuyo");
    // ,$passUsuario
    $datosUsuario= array(
        'email' => $emailUsuario,
        'clave' => $claveUsuarioEnc,
    );//$passUsuarioEnc,$imagenUsuario;
    loginUsuario(conectar(),$datosUsuario);
}
$ruta = array();
$ruta = $_GET['url'] ?? 'home';
$ruta = explode('/', $ruta);
            // echo $ruta;
            //var_dump($ruta);
$pagina = $ruta[0];
// var_dump($ruta);

$pagina($pagina);

function home($pagina){
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function nuevovideo($pagina){   
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function misvideo($pagina){   
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
// function tendencias($pagina){
//     $parametros = array('error' =>'No hay parametros');
//     getView($pagina,$parametros);
// }
function masvistos($pagina){
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function ver($pagina){
    $parametros =$_SERVER['REQUEST_URI'];
    $parametros= explode('=', $parametros);
    $parametros =array_splice($parametros, 1);
    // array_splice($aux,0,1);
    //$parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function categorias($pagina){
    // array_splice($aux,0,1);
    $parametros =$_SERVER['REQUEST_URI'];
    $parametros= explode('=', $parametros);
    $parametros =array_splice($parametros, 1);
    //$parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function micuenta($pagina){
    // array_splice($aux,0,1);
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function micuenta2($pagina){
    // array_splice($aux,0,1);
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function navbar($pagina){
    // array_splice($aux,0,1);
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}

function index($pagina){
    // array_splice($aux,0,1);
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function registro2($pagina){
    // array_splice($aux,0,1);
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function main($pagina){
    // array_splice($aux,0,1);
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function contenidoVideos($pagina){
    // array_splice($aux,0,1);
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function api($pagina){
    // array_splice($aux,0,1);
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function consultas($pagina){
    // array_splice($aux,0,1);
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function datatable($pagina){
    // array_splice($aux,0,1);
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function incuyoStudio($pagina){
    if(isset($_SESSION['login'])){
        //$parametros=parametrosStudio($GLOBALS['ruta']);
        //var_dump($GLOBALS['ruta']);
        //var_dump($parametros);
//     // array_splice($aux,0,1);
        //$parametros=getParamsStudio($GLOBALS['ruta'])
        $parametros = array('error' =>'No hay parametros');
         getView($pagina,$parametros);
}else{
    header('location:'.URL);
}
function getParamsStudio($ruta){
    if(count($ruta)>1){
        $aux =array_splice($ruta, 1);
        $parametros =array('contenido'=>$aux[0]);
        return $parametros;
    }else{
        $parametros =array('error' =>'No hay parametros');
    }
}
function parametrosStudio($pagina){
//function parametrosStudio($ruta){
        if(count($ruta)>1){
            $ruta=array_splice($ruta,1);
            $parametros = array("contenido"=>$rut[0]);
        }else{
            $parametros =array('error' =>'No hay parametros');
        }   
        //$ruta=array_splice($ruta,1);
        //$parametros=$GLOBALS['ruta'];
        //$parametros=array_splice($parametros,1);
        //$parametros = array("contenido"=>[0]);
//     // $parametros = array('error' =>'No hay parametros');
//     // getView($pagina,$parametros);
        return $parametros;
 }


function crudEmpleados($pagina){
    // $parametros =$_SERVER['REQUEST_URI'];
    // $parametros= explode('=', $parametros);
    // $parametros =array_splice($parametros, 1);
    $parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
    // // array_splice($aux,0,1);
    // $parametros = array('error' =>'No hay parametros');
    // getView($pagina,$parametros);
}
function crudEmpleados2($pagina){
    $parametros =$_SERVER['REQUEST_URI'];
    $parametros= explode('=', $parametros);
    $parametros =array_splice($parametros, 1);
    // array_splice($aux,0,1);
    //$parametros = array('error' =>'No hay parametros');
    getView($pagina,$parametros);
}
function registro($pagina){
    // array_splice($aux,0,1);
    if (isset($_POST['botonRegistroSiguiente'])) {
    $parametros = array('email' =>$_POST['inputEmail'], 'verificarEmail' =>verificarEmailRegistro());
    //getView($pagina,$parametros);
    }else{
        $parametros = array('error' =>'No hay parametros');
    }
    getView($pagina,$parametros);

}
function verificarEmailRegistro(){
    // array_splice($aux,0,1);
    $verificarEmail = True;
    return $verificarEmail;
}

function busqueda($pagina){ 
    // array_splice($aux,0,1);
    $parametros = array();
    $parametros = $_SERVER['REQUEST_URI'];
    $parametros = explode('=', $parametros);
    $parametros = array_splice($parametros,1);
    $parametros[0] = urldecode($parametros[0]);
    if (empty($parametros[0])) {
        header('location:'.URL);
    }
    getView($pagina,$parametros);
}
function perfil($pagina){
    // array_splice($aux,0,1);
    if (isset($_SESSION['login'])) {
        $parametros = array('error' =>'No hay parametros');
        getView($pagina,$parametros);
    }else{
        header('location:'.URL);
    }
}
}


?>

           