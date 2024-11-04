<?php
    // Khai báo Menu
    class Video {
        public $name;
        public $link;

      
      public function __construct(  $name,$link) {
        $this->name = $name;
        $this->link = $link; 
      }
      
      public function HienThi_Video() {
        echo "<video Width='100' height='680'controls class='slideshow'>
        <source src='{$this->link}'>
            </video>
            <div class='info'>
            <p>{$this->name}</p>
            </div>";
      }
    }
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thị Vy - Phụ kiện Store</title>
</head>
<body>
    <!-- khung trang web -->
    <div id="main">
                <!-- phần banner -->
                <div id="head">
                <img src="./img/banner.jpg">
                </div> 
                <!-- end phần banner -->
                <!-- phần menutop -->
                <div id="main-menu"> 
                      <?php
                      include_once('control/menu.php')
                      ?>
                </div> 
                <!-- end phần menutop -->
        <!-- Phần CONTENT -->
                <div id="content">

                    <!-- Phần CONTENT bên trái web-->
                    <div id="maincontent"> 
                                <?php
                                $video=new Video("","./img/video1.mp4");
                                 $video->HienThi_Video();
                                 
                                ?>
                    </div>
                    <!-- END Phần CONTENT bên trái web-->

                    <!-- Phần CONTENT bên phải web-->
                    <div id="right"> 
                    <?php
                        include_once('control/menu_right.php')
                    ?>   
                    </div> 
                    <!-- Phần CONTENT bên phải web-->
                </div>
                <!--Phần FOOTER-->
                <div id="footer">
              <?php
              include_once('control/footer.php')
              ?>
                </div>
                <!--END Phần FOOTER-->
        <!-- END Phần CONTENT -->
    </div>  
    <!-- END khung trang web -->
</body>
</html>