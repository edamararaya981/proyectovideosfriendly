<?php 
require_once('Config/config.php');
require_once('Controller/controller.php');
 ?>

<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videos</title>
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS.'css/bootstrap.min.css';
    ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS.'css/estilosNav.css';
    ?>">
</head>
<body>

<?php 
 include_once('Templates/barraNavegacion.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-2" id="navIndexVertical" style="padding:    0;">
            <?php include_once('Templates/barraVertical.php');?>
        </div>
        <div class="col-10" id="bodyIndex">
            <?php require_once('Controller/controller.php');?>
            <?php 
            //include('Templates/home.php');
            // include('Views/home.php');   
            // require_once('Config/config.php');
            // require_once('Views/views.php');
/*            $ruta = array();
            $ruta = $_GET['url'] ?? 'home';
            $ruta = explode('/', $ruta);
            // echo $ruta;
            //var_dump($ruta);
            $pagina = $ruta[0];
            var_dump($ruta);

            $pagina($pagina);
            function home($pagina){
                $parametros = array('error' =>'No hay parametros');
                getView($pagina,$parametros);
            }
            function tendencias($pagina){
                $parametros = array('error' =>'No hay parametros');
                getView($pagina,$parametros);
            }
            function masvistos($pagina){
                $parametros = array('error' =>'No hay parametros');
                getView($pagina,$parametros);
            }
            function ver($pagina){
                $parametros = array('error' =>'No hay parametros');
                getView($pagina,$parametros);
            }*/

             ?>

        </div>
    </div>      
</div>

<script type="text/javascript" src="<?php echo ASSETS.'js/bootstrap.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo ASSETS.'js/navfunctions.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo ASSETS.'js/validationpass.min.js'; ?>"></script>

<script type="text/javascript">
    let buttonNav = document.getElementById("buttonNav");
    let navVertical = document.getElementById('navVertical');
    let navVertical2 = document.getElementById('navVertical2');
    let navIndexVertical = document.getElementById('navIndexVertical');
    let bodyIndex = document.getElementById('bodyIndex');
    let verticalNav = document.getElementById('verticalNav');
    buttonNav.onclick = function(){
        if(navVertical.classList.contains("displayBlock")){
            navVertical.classList.remove("displayBlock");
            navVertical.classList.add("displayNone");
            navVertical2.classList.remove("displayNone");
            navVertical2.classList.add("displayBlock");
            navIndexVertical.classList.remove("col-2");
            navIndexVertical.classList.add("col-1");
            bodyIndex.classList.remove("col-10");
            bodyIndex.classList.add("col-11");
            verticalNav.classList.remove("verticalNav");
            verticalNav.classList.add("verticalNav2");
        }else{
            navVertical.classList.remove("displayNone");
            navVertical.classList.add("displayBlock");
            navVertical2.classList.remove("displayBlock");
            navVertical2.classList.add("displayNone");
            navIndexVertical.classList.remove("col-1");
            navIndexVertical.classList.add("col-2");
            bodyIndex.classList.remove("col-11");
            bodyIndex.classList.add("col-10");
            verticalNav.classList.remove("verticalNav2");
            verticalNav.classList.add("verticalNav");

        }
    }

</script>

 </body>
</html>
 -->
