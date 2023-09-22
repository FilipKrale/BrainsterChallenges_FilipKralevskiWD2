<?php  
// error_reporting(0);

require_once __DIR__ .  "/Furniture.php";
require_once __DIR__ . "/Sofa.php";
require_once __DIR__ . "/Bench.php";
require_once __DIR__ . "/Chair.php";

$furniture = new Furniture(20, 15, 10);

echo "Part 1:";
echo "<hr>";
echo $furniture->area();
echo "<br>";
echo $furniture->volume();
$furniture->setIs_for_sleeping(false);
echo "<br>";
echo "Not for sleeping.";
$furniture->setIs_for_sleeping(true);
echo "<br>";
echo "Its for seating.";
echo "<hr>";

echo "Part 2:";
echo "<hr>";
$sofa1 = new Sofa(200,330,540);
$sofa1->setIs_for_sleeping(false);
$sofa1->setSeats(2);
$sofa1->setArmrests(2);
$sofa1->setLength_opened(500);
echo $sofa1->getLength_opened();
echo "<br>";
echo $sofa1->area();
echo "<br>";
echo $sofa1->volume();
echo "<br>";
echo $sofa1->area_opened();
echo "<hr>";

$sofa2 = new Sofa(350,420,600);
$sofa2->setIs_for_sleeping(true);
$sofa2->setSeats(2);
$sofa2->setArmrests(2);
$sofa2->setLength_opened(740);
echo $sofa2->getLength_opened();
echo "<br>";
echo $sofa2->area();
echo "<br>";
echo $sofa2->volume();
echo "<br>";
echo $sofa2->area_opened();
echo "<hr>";

echo "Part 3:";
echo "<hr>";
$sofa = new Sofa(300,400,500);
$sofa->setIs_for_seating(true);
echo $sofa->print();
echo "<br>";
echo $sofa->sneakpeek();
echo "<br>";
echo $sofa->fullinfo();
echo "<hr>";

$bench = new Bench(400,500,550);
$bench->setIs_for_seating(false);
echo $bench->print();
echo "<br>";
echo $bench->sneakpeek();
echo "<br>";
echo $bench->fullinfo();
echo "<hr>";

$chair = new Chair(300,450,900);
$chair->setIs_for_seating(true);
echo $chair->print();
echo "<br>";
echo $chair->sneakpeek();
echo "<br>";
echo $chair->fullinfo();