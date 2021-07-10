<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mybank";

    //creating connection
    $conn=new mysqli($servername,$username,$password,$dbname);
    //check connection
    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }

    /*
    $sql="select id,firstname,lastname from MyGuests";
    $result=$conn->query($sql);

    if($result->num_rows >0){
        while($row=$result->fetch_assoc()){
            echo "id: ".$row["id"]." - Name: ".$row["firstname"]." ".$row["lastname"]."<br>";
        }
    }else{
        echo "0 results";
    }
    
    if($result->num_rows >0){
        echo "<table border=1><tr><th>ID</th><th>Name</th><th>Transfer</th></tr>";
        //Output data of each row
        while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td>
            <td><a href='transfer.php'><button>Transfer</button></a></td></tr>";
        }
        echo "</table>";
    }else{
        echo "0 results";
    }

    $conn->close();
*/
    
    ?>
