<option value="">----Select----</option>

<?php
include('../Connection/connection.php');

          $select = "SELECT * FROM tbl_place where district_id = ".$_GET['did']; 
          $result = $con->query($select);
          while ($row = $result->fetch_assoc()) {
          ?>
            <option value="<?php echo $row['place_id']; ?>">
              <?php echo $row['place_name']; ?>
            </option>
          <?php
          }
          ?>