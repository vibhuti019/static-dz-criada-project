<?php

    $path = explode('/',$_SERVER['PATH_INFO']);
    $requestedPath = $path[1];
        
    header("Content-Type: application/json");
    $bodyOfRequest = file_get_contents('php://input');
    $arrayOfJSON = json_decode($bodyOfRequest, true);
    
    if(preg_match("/driver/i", $requestedPath)){
        switch($requestedPath){
            case "driver-register":
                if(true){
                    echo '{';
                    echo           '"Data" : {';
                    echo           '"orderId" : "1234567",';
                    echo           '"customerName" : "Melisa Tan",';
                    echo           '"customerMobile" : "989496843",';
                    echo           '"deliveryTime" : "31 Aug 12:20PM",';
                    echo           '"dropOffLocation" : "Toa Poyah",';
                    echo           '"dropUnitNumber" : "04-123",';
                    echo           '"pickupLocation" : "Potang Pasir",';
                    echo           '"pickupUnitNumber" : "04-123",';
                    echo           '"requiredVehicle" : "Bike, (Weight < 8kg)",';
                    echo           '"priceOfDelivery" : "400" ';
                    echo '} ';
                    echo '}';
                }
                break;

            case "driver-login":
                if($arrayOfJSON['driverMobile'] == '8646587689' && $arrayOfJSON['driverPassword'] == 'Password'){
                    echo '{';
                    echo '"Data" : {';
                    echo '    "driverId" : "1234567",';
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
                echo '{';
                echo '"Data" : {';
                echo '    "driverId" : "1234567",';
                echo '    "driverName" : "RobertSoCool",';
                echo '    "driverMobile" : "989496843"';
                echo '}';
                echo '}';                
                break;

            case "driver-available-jobs":
                echo '{';
                echo '"Data" : {';
                echo '    "orderId" : "1234567",';
                echo '    "customerName" : "Melisa Tan",';
                echo '    "deliveryTime" : "31 Aug 12:20PM",';
                echo '    "dropOffLocation" : "Toa Poyah",';
                echo '    "pickupLocation" : "Potang Pasir",';
                echo '    "requiredVehicle" : "Bike, (Weight < 8kg)"';
                echo '}';
                echo '}';
                break;

            case "driver-active-jobs":
                echo '{';
                echo '"Data" : {';
                echo '    "orderId" : "1234567",';
                echo '    "customerName" : "Melisa Tan",';
                echo '    "deliveryTime" : "31 Aug 12:20PM",';
                echo '    "dropOffLocation" : "Toa Poyah",';
                echo '    "pickupLocation" : "Potang Pasir",';
                echo '    "requiredVehicle" : "Bike, (Weight < 8kg)"';
                echo '}';
                echo '}';
                break;

            case "driver-history-jobs":
                echo '{';
                echo '"Data" : [';
                echo '    {';
                echo '        "orderId" : "1234567",';
                echo '        "customerName" : "Melisa Tan",';
                echo '        "deliveryTime" : "31 Aug 12:20PM",';
                echo '        "dropOffLocation" : "Toa Poyah",';
                echo '        "pickupLocation" : "Potang Pasir",';
                echo '        "requiredVehicle" : "Bike, (Weight < 8kg)"';
                echo '    },';
                echo '    {';
                echo '        "orderId" : "1234567",';
                echo '        "customerName" : "Melisa Tan",';
                echo '        "deliveryTime" : "31 Aug 12:20PM",';
                echo '        "dropOffLocation" : "Toa Poyah",';
                echo '        "pickupLocation" : "Potang Pasir",';
                echo '        "requiredVehicle" : "Bike, (Weight < 8kg)"';
                echo '    },';
                echo '    {';
                echo '        "orderId" : "1234567",';
                echo '        "customerName" : "Melisa Tan",';
                echo '        "deliveryTime" : "31 Aug 12:20PM",';
                echo '        "dropOffLocation" : "Toa Poyah",';
                echo '        "pickupLocation" : "Potang Pasir",';
                echo '        "requiredVehicle" : "Bike, (Weight < 8kg)"';
                echo '    }';
                echo ']';
                echo '}';
                break;

            case "driver-job-details":
                echo '{';
                echo '    "Data" : {';
                echo '        "orderId" : "1234567",';
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
                break;

            default:
                $requestHandler->setRequestResponse("Error","Invaild path");
                die();
        }
    }



?>