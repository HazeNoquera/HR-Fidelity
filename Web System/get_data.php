<?php 
		if(isset($_POST["Data_value"]) && isset($_POST["Data_Convert_to"])){
            $User_Value = $_POST["Data_value"];
            $Select = $_POST["Data_Convert_to"];

        if($User_Value == ""){
                echo "Enter a Number";
            }
        

            else{
                if ($Select == "CM"){
                    Converter($User_Value,2.54,"Centimeters");
                }
                else if ($Select == "Foot"){
                    Converter($User_Value,12,"Feet");
                }
                else if ($Select == "Meter"){
                    Converter($User_Value,1000,"Meters");
                }
                else if ($Select == "default"){
                    echo"Choose unit to Convert";
                }

            }
        }
                    
                    
                
      function Converter($User_Value,$unit,$UnitName){
        $total = $User_Value * $unit;
        echo $total ." ". $UnitName ;
      }
?>