<?php include('propertyOverseesTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of buyers and number of properties they are interested in.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Buyer ID</th>
                                <th>Buyer Full Name</th>
                                <th>Number of interested properties</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('propertyOverseesOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('propertyOverseesBottomHalf.php'); ?>