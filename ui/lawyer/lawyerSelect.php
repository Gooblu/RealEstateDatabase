<?php include('lawyerTopHalf.php'); ?>

<div class = "row">
    <label class = "m-3" for="exampleFormControlSelect1"> Choose a selection for an lawyer</label>
</div>

<form method = "POST" action = "lawyerSelect.php">
    <input type="hidden" id="selectTupleRequest" name="selectTupleRequest">
    <div class = "row">
            <div class = "col">
                    <div class="form-group">
                        <select class="form-control" id="attriubte" name = "attribute">
                            <option value="0"> Cost </option>
                            <option value="1"> Rating </option>
                        </select>
                    </div>          
            </div>

            <div class = "col">
                <div class="form-group">
                    <select class="form-control" id="selection" name = "comparison">
                        <option value="0"> greater than </option>
                        <option value="1" > less than </option>
                        <option value="2"> equal </option>
                    </select>
                </div>
            </div>
            
            <div class = "col" >
                <td> <input class = "form-control" type="text" id="value" name="value"> </td>
            </div>  
            <div class = "col">
                <td> <input type="submit" class="btn btn-warning" value="Submit" name = "select"> </td>
            </div>
    </div>
</form>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>LawyerID</th>
                                <th>Rating</th>
                                <th>Cost</th>
                                <th>Law School</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('lawyerOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('lawyerBottomHalf.php'); ?>