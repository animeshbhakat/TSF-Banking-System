<?php
  include 'navbar01.php';
?>

	<div class="container">
        <h1 class="text-center pt-4"><span class="text-primary">Transaction History</span> </h1>        
       <br>

       <div class="table-responsive-sm table-container">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Sr.No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include 'config.php';

                    $sql ="select * from transaction";

                    $query =mysqli_query($conn, $sql);

                    while($rows = mysqli_fetch_assoc($query))
                    {
                ?>
                    <tr>
                    <td class="py-2"><?php echo $rows['sno']; ?></td>
                    <td class="py-2"><?php echo $rows['sender']; ?></td>
                    <td class="py-2"><?php echo $rows['receiver']; ?></td>
                    <td class="py-2"><?php echo $rows['balance']; ?> </td>
                    <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                        
                <?php
                    }

                ?>
                </tbody>
            </table>
        </div>                        
    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>