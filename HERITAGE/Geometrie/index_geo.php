<?php 

require_once "classRectangle.php" ;
require_once "classTriangle.php" ;
require_once "classCercle.php" ;
require_once "classPavéRect.php" ;
require_once "classPavéTri.php" ;


$rectangle1 = new Rectangle (100, 50) ;
$rectangle2 = new Rectangle (40,40) ;
$rectangle3 = new Rectangle (60,90) ;

$rectangles = [$rectangle1, $rectangle2, $rectangle3] ;


echo "\n" ."Rectangle" . "\n" ;

foreach($rectangles as $value){
    echo "Le périmètre est de : "  .$value->Perimetre(). "\n". "\n" ;

echo "*\n" ;
    echo "L'aire du rectangle est de : " . $value->Aire(). "\n". "\n" ;

echo "*\n" ;
    echo "Le rectangle est-il un carré ? " . $value->VerifierCarre(). "\n" . "\n";

echo "*\n" ;
    echo $value->__toString(). "\n" ;

// echo "**************" . "\n" ;
    
}



echo "*******************************" . "\n" ;

echo "Triangle Rectangle" . "\n" . "\n" ;

$triangle1 = new Triangle (4,6) ;
$triangle2 = new Triangle (10,8) ;
$triangle3 = new Triangle (7,3) ;

$triangles =[$triangle1, $triangle2, $triangle3] ;

foreach($triangles as $value){
    echo "Le périmètre est de : "  .$value->PerimetreTriangle(). "\n" ;
echo "*" . "\n" ;

    echo "L'aire est de : "  .$value->AireTriangle(). "\n" ;
echo "*" . "\n" ;

    echo $value->AfficherTriangle(). "\n" ;
echo "*" . "\n" ;

}



echo "*******************************" . "\n" ;


echo "Cercle" . "\n" ;
$cercle1 = new Cercle (10,5) ;
$cercle2 = new Cercle (20,10) ;

$cercles = [$cercle1, $cercle2] ;

foreach($cercles as $value){
    echo "Le périmètre est de : "  .$value->PerimetreCercle(). "\n" ;
echo "*" . "\n" ;

    echo "L'aire est de : "  .$value->AireCercle(). "\n" ;
echo "*" . "\n" ;

    echo $value->AfficherCercle(). "\n" ;
echo "*" . "\n" ;

}


echo "*******************************" . "\n" ;

$pave1 = new Pave (10,5,20) ;
$pave2 = new Pave (60,45,5) ;
$pave3 = new Pave (92,43,70) ;


$paves =[$pave1, $pave2, $pave3] ;
foreach($paves as $value){
    echo $value->Afficher(). "\n" ;
echo "*" . "\n" ;
}


echo "*******************************" . "\n" ;

echo "Pavé Triangle" . "\n" ;

$paveTri1 = new PaveTri (4,6) ;
$paveTri2 = new PaveTri (10,8) ;

$pavesTri = [$paveTri1, $paveTri2] ;
foreach($pavesTri as $value){
    echo $value->AfficherTri(). "\n" ;
echo "*" . "\n" ;
}












?>