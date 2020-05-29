<?php

$result = (array)json_decode($_POST['array']);

$name = $_POST['name'];

$cost = $_POST['cost'];
$room = $_POST['room'];

$new = array();
$new['cost'] = $cost;
$new['room'] = $room;

$array = array();
$array = array_merge($result,$new);

//print_r(var_dump($array));

if($array["cost"] == '1')
{
    echo "Traveling alone";
}
if($array["cost"] == '2')
{
    if($array["spa"] == "yes")
    {
        if($array["room"] == '1')
        {
            echo "Travel with family";
        }
        if($array["room"] == '2')
        {
            echo "Travel with family";
        }
        if($array["room"] == '3')
        {
            echo "Traveling alone";   
        }
        if($array["room"] == '4')
        {
            echo "Travel with family";
        }
        if($array["room"] == '5')
        {
            echo "Travel with family";
        }
    }
    if($array["spa"] == "no")
    {
        echo "Traveling alone";
    }

}
if($array["cost"] == '3')
{
    echo "Travel with family";
}
if($array["cost"] == '4')
{
    echo "Travel with family";
}
if($array["cost"] == '5')
{
    echo "Travel with family";
}
if($array["cost"] == '6')
{
    echo "Travel with family";
}
?>