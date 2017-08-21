<?PHP 
    include_once("connection.php"); 
    $id = $_POST["lotId"];

    $query = "UPDATE cars SET isOccupied = '0', arrivalTime = null, purchasedTime = null, leavingTime = null WHERE lotId = '$id'";
    
    if(mysqli_query($conn, $query)){
        echo "data insert good <br/>";
    }
    else{
        echo "failed to get data <br/>".mysqli_error($conn);
     } 
?>