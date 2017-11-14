<?
abstract class Plane
{
    public $act;
    public $plane;

    public function __construct()
    {

    }

    public function getTakeoff()
    {
        $this->act = "Взлет";
        return $this->act;
    }

    public function getLanding()
    {
        $this->act = "Посадка";
        return $this->act;
    }
}

class Mig extends Plane
{
    function __construct()
    {
        parent::__construct();
        $this->plane = "Миг";
    }

    public function getAttack()
    {
        $this->act = "Атака";
        return $this->act;
    }
}

class Tu154 extends Plane
{
    function __construct()
    {
        parent::__construct();
        $this->plane = 'Ту154';
    }
}

$mig = new Mig();
$tu154 = new Tu154();

if (isset($_POST['migTakeoff']))
{
    $result = "Самолет ".$mig->plane." - ".$mig->getTakeoff();
}
elseif (isset($_POST['migLanding']))
{
    $result = "Самолет ".$mig->plane." - ".$mig->getLanding();;
}
elseif (isset($_POST['migAttack']))
{
    $result = "Самолет ".$mig->plane." - ".$mig->getAttack();
}
elseif (isset($_POST['tu154Takeoff']))
{
    $result = "Самолет ".$tu154->plane." - ".$mig->getTakeoff();
}
elseif (isset($_POST['tu154Landing']))
{
    $result = "Самолет ".$tu154->plane." - ".$mig->getLanding();
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Взлет посадка самолетов</title>
</head>
<body>
<form action="" method="post">
    <h1>Миг</h1>
    <input type="submit" name="migTakeoff" value="Взлет">
    <input type="submit" name="migLanding" value="Посадка">
    <input type="submit" name="migAttack" value="Атака">
    <br>
    <h2>Ту154</h2>
    <input type="submit" name="tu154Takeoff" value="Взлет">
    <input type="submit" name="tu154Landing"  value="Посадка">
    <br>
</form>


<h1><? echo $result?></h1>
</body>
</html>
