<?php

    $path = explode('/',$_SERVER['PATH_INFO']);
    $requestedPath = $path[1];

    header('Access-Control-Allow-Origin: https://dzglobal-head.vercel.app');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    header("Content-Type : application/json");

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {    
       die();    
    }    


    $bodyOfRequest = file_get_contents('php://input');
    $arrayOfJSON = json_decode($bodyOfRequest, true);
    
    if(preg_match("/driver/i", $requestedPath)){
        switch($requestedPath){
            case "driver-register":
                if(true){
                    echo json_encode($arrayOfJSON);
                }
                break;

            case "driver-login":
                if($arrayOfJSON['driverMobile'] == '9876543210' && $arrayOfJSON['driverPassword'] == 'Password'){
                    echo '{';
                    echo '"Data" : {';
                    echo '    "driverId" : "5643",';
                    echo '    "driverName" : "RobertSoCool",';
                    echo '    "driverMobile" : "989496843",';
                    echo '    "driverEmail" : "robert@cool.com",';
                    echo '    "token" : "akhgfaisufhakuufbskdfg"';
                    echo '}';
                    echo '}';
                }
                else{
                    echo '{';
                    echo '"Data" : {';
                    echo '    "Error" : "Invaild Creds"';
                    echo '}';
                    echo '}';
                }
                break;

            case "driver-forgot-password":

                break;

            case "driver-details":
                if($arrayOfJSON['driverId'] == '5643'){
                echo '{';
                echo '"Data" : {';
                echo '    "driverId" : "5643",';
                echo '    "driverName" : "RobertSoCool",';
                echo '    "driverMobile" : "989496843"';
                echo '}';
                echo '}';
                }
                else{
                    echo '{';
                    echo '"Data" : {';
                    echo '    "Error" : "Invaild Creds"';
                    echo '}';
                    echo '}';
                }            
                break;

            case "driver-available-jobs":
                if($arrayOfJSON['driverId'] == '5643'){
                echo '{';
                echo '"Data" : {';
                echo '    "orderId" : "5643",';
                echo '    "customerName" : "Melisa Tan",';
                echo '    "deliveryTime" : "31 Aug 12:20PM",';
                echo '    "dropOffLocation" : "Toa Poyah",';
                echo '    "pickupLocation" : "Potang Pasir",';
                echo '    "requiredVehicle" : "Bike, (Weight < 8kg)"';
                echo '}';
                echo '}';
                }
                else{
                    echo '{';
                    echo '"Data" : {';
                    echo '    "Error" : "Invaild Creds"';
                    echo '}';
                    echo '}';
                }    
                break;

            case "driver-active-jobs":
                if($arrayOfJSON['driverId'] == '5643'){
                echo '{';
                echo '"Data" : {';
                echo '    "orderId" : "5643",';
                echo '    "customerName" : "Melisa Tan",';
                echo '    "deliveryTime" : "31 Aug 12:20PM",';
                echo '    "dropOffLocation" : "Toa Poyah",';
                echo '    "pickupLocation" : "Potang Pasir",';
                echo '    "requiredVehicle" : "Bike, (Weight < 8kg)"';
                echo '}';
                echo '}';
                }
                else{
                    echo '{';
                    echo '"Data" : {';
                    echo '    "Error" : "Invaild Creds"';
                    echo '}';
                    echo '}';
                }   
                break;

            case "driver-history-jobs":
                if($arrayOfJSON['driverId'] == '5643'){
                echo '{';
                echo '"Data" : [';
                echo '    {';
                echo '        "orderId" : "5643",';
                echo '        "customerName" : "Melisa Tan",';
                echo '        "deliveryTime" : "31 Aug 12:20PM",';
                echo '        "dropOffLocation" : "Toa Poyah",';
                echo '        "pickupLocation" : "Potang Pasir",';
                echo '        "requiredVehicle" : "Bike, (Weight < 8kg)"';
                echo '    },';
                echo '    {';
                echo '        "orderId" : "5643",';
                echo '        "customerName" : "Melisa Tan",';
                echo '        "deliveryTime" : "31 Aug 12:20PM",';
                echo '        "dropOffLocation" : "Toa Poyah",';
                echo '        "pickupLocation" : "Potang Pasir",';
                echo '        "requiredVehicle" : "Bike, (Weight < 8kg)"';
                echo '    },';
                echo '    {';
                echo '        "orderId" : "5643",';
                echo '        "customerName" : "Melisa Tan",';
                echo '        "deliveryTime" : "31 Aug 12:20PM",';
                echo '        "dropOffLocation" : "Toa Poyah",';
                echo '        "pickupLocation" : "Potang Pasir",';
                echo '        "requiredVehicle" : "Bike, (Weight < 8kg)"';
                echo '    }';
                echo ']';
                echo '}';
                }
                else{
                    echo '{';
                    echo '"Data" : {';
                    echo '    "Error" : "Invaild Creds"';
                    echo '}';
                    echo '}';
                }   
                break;

            case "driver-job-details":
                if($arrayOfJSON['driverId'] == '5643'){
                echo '{';
                echo '    "Data" : {';
                echo '        "orderId" : "5643",';
                echo '        "customerName" : "Melisa Tan",';
                echo '        "customerMobile" : "989496843",';
                echo '        "deliveryTime" : "31 Aug 12:20PM",';
                echo '        "dropOffLocation" : "Toa Poyah",';
                echo '        "dropUnitNumber" : "04-123",';
                echo '        "pickupLocation" : "Potang Pasir",';
                echo '        "pickupUnitNumber" : "04-123",';
                echo '        "requiredVehicle" : "Bike, (Weight < 8kg)",';
                echo '        "priceOfDelivery" : "400" ';
                echo '    }';
                echo '}';   
                }
                else{
                    echo '{';
                    echo '"Data" : {';
                    echo '    "Error" : "Invaild Creds"';
                    echo '}';
                    echo '}';
                }               
                break;

            default:
                echo '{';
                echo '"Data" : {';
                echo '    "Error" : "Invaild Creds"';
                echo '}';
                echo '}';
                die();
        }
    }



?>
