<?php 
  include '../../js/function_db.php';
  $sql = "SELECT * FROM university WHERE uni_id<>0 ";
  $result = selectSql($sql);
 ?>

<h5>ผู้ใช้งาน</h5>
<br>
<div class="row mb-3">
    <button type="button" class="btn btn-success mr-2" onclick="showRegis()">
        register
    </button>
    <div class="form-group mr-2">
        <input id="searchs" onkeyup="showUsers();" class="form-control" type="text" onkeyup="" placeholder="ค้นหา">
    </div>
    <div class="form-group">
    <select id="uniFilter" onchange="showUsers();" class="form-control">
        <option value="">--- เลือกมหาวิทยาลัย ---</option>
        <?php  
            foreach ($result as $row) {?>
                <option value="<?php echo $row['uni_id'] ?>"><?php echo $row['uni_name'] ?></option>
            <?php };
            ?>
        </select>
    </div>
</div>

<div class="row" id="showUser">
</div>

<script type="text/javascript">
      
    const showUsers = () => {
        $.post("app/user/pro.php" , {
            status: 'r',
            searchs : $("#searchs").val() ,
            uniFilter : $("#uniFilter").val() || ""
        } ,data => $("#showUser").html(data));
    };
    showUsers();

    const showEditUser = (email) => {
        $("#showUser").load("app/user/edit.php" , {email});
    };

    const showRegis = () => {
        $("#showUser").load("app/user/register.php");
    };

    const editUser = (email) => {
        $.post("app/user/pro.php",{ 
            status : 'u' ,
            use_fname : $("#use_fname").val(),
            use_lname : $("#use_lname").val(),
            use_phone : $("#use_phone").val(),
            use_uni_id : $("#use_uni_id").val(),
            email : email
        },data => {
            showUsers();
            alert(data);
        });
    };

    const delUser = (email) => {
        $.post("app/user/pro.php" , {
            status : 'd' ,
            email : email
        } , data => {
            if(data == "ok"){
                alert("ลบข้อมูลสำเร็จ");
            };
            showUsers();
        });
    };

    const register = () => {
        $.post("app/user/pro.php",{ 
                    status : 'c' ,
                    use_email : $("#use_email").val(),
                    use_fname : $("#use_fname").val(),
                    use_lname : $("#use_lname").val(),
                    use_phone : $("#use_phone").val(),
                    use_uni_id : $("#use_uni_id").val(),
                },data => {
                    alert("เพิ่มข้อมูลสำเร็จ");
                    showUsers();
                });
    };


    // const filterUniversity = () => {

    // };
    
   
</script>