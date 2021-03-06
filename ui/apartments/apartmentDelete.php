<?php include('apartmentTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "apartmentDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the apartment you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="propertyID" name = "propertyID" placeholder="propertyID">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> Property ID </th>
                                <th> Floor Number</th>
                                <th> Association </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('apartmentOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('apartmentBottomHalf.php'); ?>