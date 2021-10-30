<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php require('navbar.php'); ?>
<div class="center1">
<br><h2>ลงทะเบียนกิจกรรม</h2>
</div>
            <form action="/Addregis/regis" method="post">
              <div class="container mt-4">
                <div class="row justify-content-md-center">
                  <div class="col-md-6 bg-light py-4">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">หมายเลขบัตรประชาชน :</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" value="<?php echo $session->get('id_card');  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">ชื่อ-นามสกุล :</label>
                        <input type="text" name="name" class="form-control" id="inputforcard" value="<?php echo $session->get('name');  ?>">
                    </div>
                    <div class="mb-3">
                    <label for="inputforcatogory">ประเภทกิจกรรม :</label> <br>
                    <select class="form-control" name="category" id="inputforcatogory">
                      <option value="1">Fun Run</option>
                      <option value="2">Mini Marathon</option>
                      <option value="3">VIP</option>
                      <option value="5">Super VIP</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <?php
                      $numItems = count($showregis);
                      $i = 0; 
                      if($numItems == 0){
                      ?>
                        <label for="inputid_card" class="form-label">หมายเลขที่ได้รับ : <strong>RUN1</strong></label>
                        <input type="hidden" name="ID" class="form-control" id="inputforID" value="1">
                      <?php
                      }else{
                      foreach($showregis as $key) {
                        if(++$i === $numItems) {
                        ?>
                        <label for="inputid_card" class="form-label">หมายเลขที่ได้รับ : <strong>RUN<?php echo $key['ID']+1 ?></strong></label>
                          <input type="hidden" name="ID" class="form-control" id="inputforID" value="<?php echo $key['ID']+1 ?>">
                        <?php
                        }}}
                      ?>
                    </div>
                    <br><br>
                    <center><button type="submit" class="btn btn-success" style="width:100px;">ยืนยัน</button>
                    <a href="/username" class="btn btn-danger me-1" style="width:100px;">ยกเลิก</a></center>
                  </div>
                </div>
              </div>
            </form>
</body>

</html>