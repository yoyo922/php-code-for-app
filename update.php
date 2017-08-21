<?PHP 
    include_once("connection.php"); 
    $id = $_POST["lotId"];
    $isOcc = $_POST["isOccupied"];
    $arrivalTime = $_POST["arrivalTime"];
    $purchasedTime = $_POST["purchasedTime"];
    $leavingTime = $_POST["leavingTime"];
    $query = "UPDATE cars SET isOccupied = '$isOcc', arrivalTime = '$arrivalTime', purchasedTime = '$purchasedTime', leavingTime = '$leavingTime' WHERE lotId = '$id'";
    
    if(mysqli_query($conn, $query)){
        echo "data insert good <br/>";
    }
    else{
        echo "failed to get data <br/>".mysqli_error($conn);
     } 
?>