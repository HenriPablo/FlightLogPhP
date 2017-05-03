<h1>Custom Home Page in src/Template/Hom</h1>
<?php
dump( $allControllers );

foreach( $allController as $controller){
    echo( "<p>". $controller . "</p>");
    foreach( $allController as $action){
        echo("<span>" . $action . "</span>");
    }
}
?>
