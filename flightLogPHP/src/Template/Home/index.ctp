<h1>Custom Home Page in src/Template/Hom</h1>
<?php
dump( $allControllers );

foreach( $allControllers as $key => $value ){
    echo( "<p style='color:blue'>". $key . "</p>");
    foreach( $value as $k=>$v){
        echo("<span> $v </span>");
    }
}
?>
