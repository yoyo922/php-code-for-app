<?PHP 
    include_once("connection.php"); 
 
    $sql = "SELECT * FROM  cars";
    
    $result = mysqli_query($conn, $sql);
    $response = array();

    while($row = mysqli_fetch_array($result))
    {
        array_push($response, array("lotId"=>$row[0],"isOccupied"=>$row[1],"arrivalTime"=>$row[2],"purchasedTime"=>$row[3],"leavingTime"=>$row[4]));
    }
    echo json_encode(array("server_response"=>$response));
    mysqli_close($conn);
?>