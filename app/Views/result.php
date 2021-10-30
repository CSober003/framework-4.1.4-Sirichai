<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php 
require('navbar.php'); ?>
<div class="center1">
  <br><h2>ผลการลงทะเบียน</h2>
              <div class="container mt-4 bg-light py-3">
                        <?php 
                        $numItems = count($showregis);
                        $i = 0; 
                        if ($numItems == 0){ ?>
                        <p>ยังว่างๆอยู่นะจ๊ะ</p>
                          <?php 
                              }else{ ?>
                                <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">ไอดี</th>
                                    <th scope="col">รหัสบัตรประชาชน</th>
                                    <th scope="col">ประเภทกิจกรรม</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                              foreach ($showregis as $k) {
                              ?>
                            <tr>
                              <td>RUN<?php echo $k['ID']; ?></td>
                              <td><?php echo $k['member']; ?></td>
                              <?php
                              if($k['category_run'] == 1){
                                $k['category_run'] = "FUN RUN";
                              }
                              if($k['category_run'] == 2){
                                $k['category_run'] = "MINI MARATHON";
                              }
                              if($k['category_run'] == 3){
                                $k['category_run'] = "VIP";
                              }
                              if($k['category_run'] == 4){
                                $k['category_run'] = "";
                              }
                              if($k['category_run'] == 5){
                                $k['category_run'] = "Super VIP";
                              }
                              ?>
                              <td><?php echo $k['category_run']; ?></td>
                            </tr>
                            <?php }} ?>
                          </tbody>
                        </table>
                        </table>

              </div>
            </div>
</body>

</html>