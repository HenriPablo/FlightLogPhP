<!--<h1>Custom Home Page in src/Template/Hom</h1>-->
<?php
echo $this->Less->less('less/home.less');
//dump( $allControllers );
//  Scan through outer loop
$controller = "";
foreach ($allControllers as $innerArray) {
    //  Check type
    echo "<ul class='home-list'>";
    if (!is_array($innerArray)){
        // one, two, three
        $controller = $innerArray;
        echo "<li style='font-weight: bold;'><a href='/$innerArray'>$innerArray</a></li>";

    }else{
        //  Scan through inner loop
        echo "<li><ul>";
        foreach ($innerArray as $value) {
            echo "<li><a href='/$controller/$value'>$value</a></li>";
        }
        echo "</ul></li>";
    }
    echo "</ul>";
}
?>
