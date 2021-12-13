<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    
    
    $msg = "Hello World concatenado";
    echo '<p>' . $msg   .  '</p>';

    // 4 elementos y van del indice 0 al 3
    $miarreglo = array( "Sergio","Carlos", "Bautista", "Paula" ) ;
    /*
    echo '<p> imprimo uno a uno </p>'; 
    echo '<p>' . $miarreglo[0]   .  '</p>';
    echo '<p>' . $miarreglo[1]   .  '</p>';
    echo '<p>' . $miarreglo[2]   .  '</p>';
    echo '<p>' . $miarreglo[3]   .  '</p>';
    */

/*
    echo '<p> imprimo con FOR  </p>';
    for ($i=0; $i <4; $i++){
        echo '<p>' . $miarreglo[$i]   .  '</p>';
    } 

    echo '<p> imprimo con FOREACH  </p>';
    foreach ($miarreglo as $item){
        echo '<p>' . $item   .  '</p>';
    } 
*/
//productos
/*
    $productos = array ("Mouse", "Teclado", "Monitor");
    $precios   = array (  "500",    "1000",    "3500");
    
    $i=0;
    echo '<ol> listado de productos ';
    foreach ($productos as $producto){
        echo '<li>' . $producto   .  ' ( ' . $precios[$i]  . ')  </li>';
        $i = $i + 1;
    } 
    echo '</ol>';
*/
/*
  $productos =  array(
        array("producto" => "Mouse",   "precio" => 500),
        array("producto" => "Teclado", "precio" => 1000),
        array("producto" => "Monitor", "precio" => 3500)
        );
    
  
    echo '<ol> listado de productos ';
    foreach ($productos as $item){
        echo '<li>' . $item["producto"] . ' ( ' . $item["precio"]  . ' )  </li>';
    } 
    echo '</ol>';
*/

 $productos =  array(
        array("src" => "imagenes/canelones.jpg",   
              "alt" => "Foto de filtro de aceite", 
              "txt_a" => "Filtros de aceite"),
        array("src" => "imagenes/risotto.jpg",    
              "alt" => "imagen filtro aceite",
             "txt_a" => "Filtro de aceite"   ),
        array("src" => "/imgagenes/repuestos/filtroaceite.jpg",   
              "alt" => "imagen filtro aceite",
              "txt_a" => "Filtro de aceite")
        );
    
  
    foreach ($productos as $producto){
    echo '<div class="col-lg-4 col-md-6 col-sm-12">
                   <ul>
                       <li>
                        <img src="'. $producto["src"] . '" alt="'. $producto["alt"]  .'">
                        <a href="#" class="btn btn-danger btn-block btn-xs">' . $producto["txt_a"] . '    </a>
                       </li>
                   </ul>
                </div>';
    } 
    





     ?> 
  </body>
</html>