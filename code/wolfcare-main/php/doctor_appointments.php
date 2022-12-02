<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../stylesheets/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../stylesheets/show_appointments.css" />
</head>
<body>
    <!-- <a class="btn btn-success"  style="float:left; margin:10px;" href="temp_homepage2.php">Back</a> -->
    <div class="main-div">
        <h1> Recieved Appointments </h1>
        <div class = "center-div">
            <div class="table-responsive">
                <table>
                   
                    <tbody>
                        <?php  
                            session_start();
                            $user = $_SESSION['doctor_id'];
                            $servername="localhost";
                            $username="root";
                            $password = "";
                            $dbname="kj_mini";

                            $conn = mysqli_connect($servername,$username,$password,$dbname);

                            $sql = "SELECT username, doc_id, apoin_date, apoin_time FROM appointment WHERE doc_id = '$user'";
                            

                            $query = mysqli_query($conn,$sql);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
                                
                        ?>
                                <tr>
                                    <!-- <td></td> -->
                                    <td><?php echo $res['username'];?></td>
                                    <td><?php echo $res['doc_id'];?></td>
                                    <td><?php echo $res['apoin_date'];?></td>
                                    <td><?php echo $res['apoin_time'];?></td>
                                </tr>
                            <?php
                            }?>
                        
                        
                    </tbody>
                </table>
        </div>
    </div>
    <a class="btn btn-success"  style="float:left; margin:10px;" href="doctor_home.php">Back</a>
</body>
</html>