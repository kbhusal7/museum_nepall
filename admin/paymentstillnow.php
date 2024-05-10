<?php 
require_once ("_session.php");
include "header.php"
    // session_start();
?>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            
            <br>
            <!-- <?php session_start(); echo $_SESSION["name"] ?> -->
        </div>
    </div>



    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>All payments</h3>

            </div>
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Museum name</th>
                        <th>Date Order</th>
                        <th>Number of Tickets</th>
                        <th>Total Price</th>
                        

                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "_dbconnect.php";
                    
                    $res=mysqli_query($conn,"SELECT * FROM `tbl_ticketbooking`");
                    while($row=mysqli_fetch_assoc($res)){
                        $id=$row["id"];
                        $name=$row["u_name"];
                        $bdate=$row["b_date"];
                        $total=$row["amount"];
                        $museumname=$row["m_name"];
                        $add=$row["no_of_nc"]+$row["no_of_ns"]+$row["no_of_fc"]+$row["no_of_sa"];
                        echo '
                        <tr>
                        <td>

                            <p> '.$name.'</p>
                        </td>
                        <td>'.$museumname.'</td>
                        <td>'.$bdate.'</td>
                        <td>'.$add.'</td>
                        <td>'.$total.'</td>

                        

                    </tr>
                        
                        ';

                    }

                    ?>
                 

                </tbody>
            </table>
        </div>

    </div>
</main>
<?php include "footer.php"; ?>

