<h5>มหาวิทยาลัย</h5><br>


<form class="form-inline w-100">
    <button type="button" class="btn btn-success" onclick="showAdd()">
        เพิ่ม
    </button>
    <div class="form-group mb-2">
        <input id="searchs"  class="form-control" type="text" onkeyup="showlist();" placeholder="ค้นหา">
    </div>
</form>

<div class="row" id="show">

</div>

<script>
  
    const showlist = () => {
        $.post("app/university/pro.php",{ 
            status : 'r' ,
            searchs : $("#searchs").val()
        },(data) => {
            $("#show").html(data);
            //alert("5555")
        });
    };
    showlist();

    const del = (id) => {
        if(confirm("คุณต้องการลบหรือไม่ !"))
            {
                $.post("app/university/pro.php",{ 
                status : 'd' ,
                id : id
            },data => {
                if(data == "ok"){
                    alert("ลบข้อมูลสำเร็จ");
                }
                showlist();
            });
        };
    };

    const showAdd = () => {
        $("#show").load("app/university/add.php");
    };

    const add = () => {
        if($("#uni_name").val() != ""){
            $.post("app/university/pro.php",{ 
                    status : 'c' ,
                    uni_name : $("#uni_name").val()
                },data => {
                    alert("เพิ่มข้อมูลสำเร็จ");
                    showlist();
                });
        }else{
            alert("กรุณากรอกชื่อ !");
        }
    };

    const showEdit = (id) => {
        $("#show").load("app/university/edit.php" , {id});
    };

    const edit = (id) => {
        $.post("app/university/pro.php",{ 
            status : 'u' ,
            uni_name : $("#uni_name").val(),
            id : id
        },data => {
            showlist();
            alert(data);
        });
    };

    
</script>