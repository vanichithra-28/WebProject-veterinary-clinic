<option>----Select----</option>

<?php
include('../Connection/connection.php');

          $select = "SELECT * FROM tbl_breed where category_id = ".$_GET['did']; 
          $result = $con->query($select);
          while ($row = $result->fetch_assoc()) {
          ?>
            <option value="<?php echo $row['breed_id']; ?>">
              <?php echo $row['breed_name']; ?>
            </option>
          <?php
          }
          ?>