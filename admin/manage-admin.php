<?php include('partials/menu.php'); ?>

        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
              <h1>Manage Admin</h1>

              <br/>

              <?php 
                if(isset($_SESSION['add']))
                  {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                  }
              ?>    
              <br/><br/>

              <!-- Button to Add Admin -->
              <a href="add-admin.php" class="btn-primary">Add Admin</a>

                <br/><br/><br/>

              <table class="tbl-full">
                <tr>
                    <th>S/N</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <?php
                  $sql = "SELECT * FROM tbl_admin";

                  $res = mysqli_query($conn, $sql);

                    if($res == TRUE) {
                      $count = mysqli_num_rows($res);
                      $sn = 1;

                      if($count > 0 && $count != '') {
                        while($rows = mysqli_fetch_assoc($res))
                        {
                          $id = $rows['id'];
                          $full_name = $rows['full_name'];
                          $username = $rows['username'];
                          // $password = $rows['password']

                          ?>
                            <tr>
                              <td><?php echo $sn++; ?></td>
                              <td><?php echo $full_name; ?></td>
                              <td><?php echo $username; ?></td>
                              <td>
                                <a href="" class="btn-secondary">Update Admin</a>
                                <a href="" class="btn-danger">Delete Admin</a>
                              </td>
                            </tr>
                          <?php  
                        }
                      }
                    }
                ?>

                <!-- <tr>
                    <td>1.</td>
                    <td>Sarah Samson</td>
                    <td>sarahsamson</td>
                    <td>
                       <a href="" class="btn-secondary">Update Admin</a>
                       <a href="" class="btn-danger">Delete Admin</a>
                    </td>
                </tr> -->
              </table>
            </div>    
        </div>
        <!-- Main Content Section Ends -->

<?php include('partials/footer.php'); ?>