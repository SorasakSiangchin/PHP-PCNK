
<?php 
  include '../../js/function_db.php';
  $sql = "SELECT * FROM university WHERE uni_id<>0 ";
  $result = selectSql($sql);
 ?>

<div class="card w-100">
  <div class="card-body">
  <form>
  <div class="f orm-group">
    <label for="exampleFormControlInput1">
        เพิ่มชื่อผู้ใช้งาน
    </label>
    <input type="email" id="use_email"  class="form-control" placeholder="อีเมล">
    <br/>
    <input type="text" id="use_fname"  class="form-control" placeholder="ชื่อจริง">
    <br/>
    <input type="text" id="use_lname"  class="form-control" placeholder="นามสกุล">
    <br/>
    <input type="phone" id="use_phone"  class="form-control" placeholder="เบอร์โทร">
    <br/>
    <select id="use_uni_id" class="form-control">
        <?php  
        foreach ($result as $row) {?>
            <option value="<?php echo $row['uni_id'] ?>"><?php echo $row['uni_name'] ?></option>
        <?php };
        ?>
    </select>

    <br/>

    <button type="button" class="btn btn-secondary" onclick="showUsers()">
        กลับ
    </button>
    <button type="button" class="btn btn-success" onclick="register()">
        บันทึก
    </button>
  </div>
</form>
  </div>
</div>