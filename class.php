<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<?php 
class cars {
    var $name;
    var $color;

    // Method
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }
}

$BMW = new cars();
$audi = new cars();
$volvo = new cars();

$BMW->set_name("BMW");
$BMW->set_color("Red");

$audi->set_name("Audi");
$audi->set_color("Black");

$volvo->set_name("Volvo");
$volvo->set_color("White");

echo $BMW->get_name() . " " . $BMW->get_color() . "<br>";
echo $audi->get_name() . " " . $audi->get_color() . "<br>";
echo $volvo->get_name() . " " . $volvo->get_color() . "<br>";



?>

    
</body>
</html>