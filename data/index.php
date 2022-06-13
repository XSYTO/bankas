<?php
       
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                   
    function get_data() {
        $Cash = '0';  
        $name = $_POST['name'];
        $file_name='ClientsData'. '.json';
   
        if(file_exists("$file_name")) { 
            $current_data=file_get_contents("$file_name");
            $array_data=json_decode($current_data, true);
                               
            $extra = [
                'Firstname' => $_POST['firstname'],
                'Lastname' => $_POST['lastname'],
                'Id' => $_POST['id'],
                'AccountNumber' => $_POST['accountNumber'],
                'Address' => $_POST['address'],
                'Phone' => $_POST['phone'],
                'Cash' => $Cash
            ];
            $array_data[]=$extra;
            echo "file exist<br/>";
            return json_encode($array_data);
        }
        else {
            $datae=[];
            $datae[]=[
                'Firstname' => $_POST['firstname'],
                'Lastname' => $_POST['lastname'],
                'Id' => $_POST['id'],
                'AccountNumber' => $_POST['accountNumber'],
                'Address' => $_POST['address'],
                'Phone' => $_POST['phone'],
                'Cash' => $Cash
            ];
            echo "file not exist<br/>";
            return json_encode($datae);   
        }
    }
  
    $file_name='ClientsData'. '.json';
      
    if(file_put_contents("$file_name", get_data())) {
        header('Location:http://localhost:8080/bankas/bankAccount/clientlist.php');
    }                
    else {
        echo 'There is some error';                
    }
}
       
?>