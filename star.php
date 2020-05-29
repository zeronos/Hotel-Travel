<?php

$result = (array)json_decode($_POST['array']);
$name = $_POST['name'];
$cost = $_POST['cost'];
$location = $_POST['location'];
$name = $_POST['name'];

$new = array();
$new['cost'] = $cost;
$new['location'] = $location;

$array = array();
$array = array_merge($result,$new);

//print_r(var_dump($array));

if($array["weddingFacilities"]=="yes")
{
        if($array["meetingRoom"]=="yes")
        {
                if($array["cost"]=="1")
                {
                        if($array["massageService"]=="yes")
                        {
                                if($array["shuttleService"]=="yes")
                                {
                                        echo ("star 5");
                                }
                                if($array["shuttleService"]=="no")
                                {
                                        echo ("star 4");
                                }
                        }
                        if($array["massageService"]=="no")
                        {
                                echo ("star 4");
                        }
                }
                if($array["cost"]=="2")
                {
                        echo ("star 5");
                }
                if($array["cost"]=="3")
                {
                        echo ("star 4");
                }
                if($array["cost"]=="4")
                {
                        echo ("star 5");
                }
                if($array["cost"]=="5")
                {
                        echo ("star 5");
                }
                if($array["cost"]=="6")
                {
                        echo ("star 5");
                }
        }
        if($array["meetingRoom"]=="no")
        {
                echo ("star 3");
        }
}
if($array["weddingFacilities"]=="no")
{
        if($array["bar"]=="yes")
        {
                if($array["swimmingPool"]=="yes")
                {
                        echo ("star 4");
                }
                if($array["swimmingPool"]=="no")
                {
                        if($array["curencyExchange"]=="yes")
                        {
                                echo ("star 3");
                        }
                        if($array["curencyExchange"]=="no")
                        {
                                if($array["location"]=="Bang-Khen")
                                {
                                echo ("star = 3");
                                }
                                if($array["location"]=="Ratchathewi")
                                {
                                echo ("star = 3");
                                }
                                if($array["location"]=="Sathon")
                                {
                                echo ("star = 3");
                                }
                                if($array["location"]=="radkrabang")
                                {
                                echo ("star = 4");
                                }
                                if($array["location"]=="Thon-Buri")
                                {
                                        if($array["cost"]=="1")
                                        {
                                                echo ("star 3");
                                        }
                                        if($array["cost"]=="2")
                                        {
                                                echo ("star 3");
                                        }
                                        if($array["cost"]=="3")
                                        {
                                                echo ("star 4");
                                        }
                                        if($array["cost"]=="4")
                                        {
                                                echo ("star 4");
                                        }
                                        if($array["cost"]=="5")
                                        {
                                                echo ("star 4");
                                        }
                                        if($array["cost"]=="6")
                                        {
                                                echo ("star 4");
                                        }
                                }
                                if($array["location"]=="Bang-Kapi")
                                { 
                                        if($array["lift"]=="yes")
                                        { 
                                                echo ("star 3");
                                        }
                                        if($array["lift"]=="no")
                                        { 
                                                echo ("star 4");
                                        }
                                }
                                if($array["location"]=="Phaya-Thai")
                                {
                                echo ("star = 3");
                                }
                                if($array["location"]=="pathumwan")
                                {
                                        if($array["fitness"]=="yes")
                                        { 
                                                echo ("star 4");
                                        }
                                        if($array["fitness"]=="no")
                                        { 
                                                if($array["cost"]=="1")
                                                {
                                                        echo ("star 3");
                                                }
                                                if($array["cost"]=="2")
                                                {
                                                        echo ("star 4");
                                                }
                                                if($array["cost"]=="3")
                                                {
                                                        echo ("star 4");
                                                }
                                                if($array["cost"]=="4")
                                                {
                                                        echo ("star 4");
                                                }
                                                if($array["cost"]=="5")
                                                {
                                                        echo ("star 4");
                                                }
                                                if($array["cost"]=="6")
                                                {
                                                        echo ("star 4");
                                                }
                                        }
                                }
                        }
                }
        }
        if($array["bar"]=="no")
        {
                if($array["cost"]=="1")
                {
                        if($array["swimmingPool"]=="yes")
                        {
                                echo ("star 3");
                        }
                        if($array["swimmingPool"]=="no")
                        {
                                if($array["airConditioner"]=="yes")
                                {
                                        if($array["fitness"]=="yes")
                                        {
                                                if($array["massageService"]=="yes")
                                                {
                                                        echo ("star 4");
                                                }
                                                if($array["massageService"]=="no")
                                                {
                                                        if($array["laundry"]=="yes")
                                                        {
                                                                echo ("star 3");
                                                        }
                                                        if($array["laundry"]=="no")
                                                        {
                                                                if($array["restaurant"]=="yes")
                                                                {
                                                                        if($array["beautySalon"]=="yes")
                                                                        {
                                                                                echo ("star 2");
                                                                        }
                                                                        if($array["beautySalon"]=="no")
                                                                        {
                                                                                echo ("star 4");
                                                                        } 
                                                                }
                                                                if($array["restaurant"]=="no")
                                                                {
                                                                        echo ("star 3");
                                                                }     
                                                        }           
                                                }     
                                        }
                                        if($array["fitness"]=="no")
                                        {
                                                if($array["babysittingService"]=="yes")
                                                {
                                                        echo ("star 3");
                                                }
                                                if($array["babysittingService"]=="no")
                                                {
                                                        if($array["multilinggualStaff"]=="yes")
                                                        {
                                                                if($array["television"]=="yes")
                                                                {
                                                                        if($array["laundry"]=="yes")
                                                                        {
                                                                                echo ("star 2");
                                                                        }
                                                                        if($array["laundry"]=="no")
                                                                        {
                                                                                echo ("star 3");
                                                                        } 
                                                                }
                                                                if($array["television"]=="no")
                                                                {
                                                                        echo ("star 3");
                                                                } 
                                                        }
                                                        if($array["multilinggualStaff"]=="no")
                                                        {
                                                                if($array["location"]=="Bang-Khen")
                                                                {
                                                                        if($array["restaurant"]=="yes")
                                                                        {
                                                                             echo ("star = 3");
                                                                        }
                                                                        if($array["restaurant"]=="no")
                                                                        {
                                                                                if($array["roomService"]=="yes")
                                                                                {
                                                                                     echo ("star = 3");
                                                                                }
                                                                                if($array["roomService"]=="no")
                                                                                {
                                                                                     echo ("star = 2");
                                                                                }
                                                                        }
                                                                }
                                                                if($array["location"]=="Ratchathewi")
                                                                {
                                                                        if($array["meetingRoom"]=="yes")
                                                                        {
                                                                             echo ("star = 3");
                                                                        }
                                                                        if($array["meetingRoom"]=="no")
                                                                        {
                                                                                if($array["currencyExchange"]=="yes")
                                                                                {
                                                                                     echo ("star = 2");
                                                                                }
                                                                                if($array["currencyExchange"]=="no")
                                                                                {
                                                                                        if($array["safe"]=="yes")
                                                                                        {
                                                                                             echo ("star = 3");
                                                                                        }
                                                                                        if($array["safe"]=="no")
                                                                                        {
                                                                                             echo ("star = 2");
                                                                                        }
                                                                                }
                                                                        }
                                                                }
                                                                if($array["location"]=="Sathon")
                                                                {
                                                                     echo ("star = 2");
                                                                }
                                                                if($array["location"]=="radkrabang")
                                                                {
                                                                     echo ("star = 2");
                                                                }
                                                                if($array["location"]=="Thon-Buri")
                                                                {
                                                                        echo ("star = 2");
                                                                }
                                                                if($array["location"]=="Bang-Kapi")
                                                                {
                                                                        echo ("star = 3");
                                                                }
                                                                if($array["location"]=="Phaya-Thai")
                                                                {
                                                                        if($array["shuttleService"]=="yes")
                                                                        {
                                                                             echo ("star = 2");
                                                                        }
                                                                        if($array["shuttleService"]=="no")
                                                                        {
                                                                             echo ("star = 3");
                                                                        }
                                                                }
                                                                if($array["location"]=="pathumwan")
                                                                {
                                                                        echo ("star = 2");
                                                                }
                                                            }
                                                        } 
                                                } 
                                        } 
                                }
                                if($array["airConditioner"]=="no")
                                {
                                        
                                }     
                        }
                }
                if($array["cost"]=="2")
                {
                        if($array["spa"]=="yes")
                        {
                                echo ("star 4");
                        }
                        if($array["spa"]=="no")
                        {
                                echo ("star 3");
                        }
                }
                if($array["cost"]=="3")
                {
                        if($array["meetingRoom"]=="yes")
                        {
                                echo ("star 4");
                        }
                        if($array["meetingRoom"]=="no")
                        {
                                echo ("star 3");
                        }
                }
                
                if($array["cost"]=="4")
                {
                        echo ("star 4");
                }
                if($array["cost"]=="5")
                {
                        echo ("star 4");
                }
                if($array["cost"]=="6")
                {
                        echo ("star 3");
                }      
        }
