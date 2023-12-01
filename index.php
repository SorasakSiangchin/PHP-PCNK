<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-3.7.1.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" ></script>
    <title>
        KRU ทีม 1
    </title> 

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" onclick="userShows(); showUsers();">
            ผู้ใช้งาน
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="uniShows(); showlist();">
            มหาวิทยาลัย
        </a>
      </li>
    </ul>
  </div>
    </nav>

    <div class="container" id="showMain">

    </div>

    <footer>
        <p>มหาวิทยาลัยราชภัฎกาญจนบุรี</p>
    </footer>

    <script type="text/javascript">
   
        
        const userShows = () => {
            $('#showMain').load("app/user/show.php");
        };

        const uniShows = () => {
            $('#showMain').load("app/university/show.php");
        };  
        
        userShows();
        
    </script>

    
</body>
</html>