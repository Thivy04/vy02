<?php
    // Khai báo Menu
    class Info {
        public $title;
        public $desc;
        public  $img;

      
      public function __construct(  $title,$desc, $img) {
        $this->title = $title;
        $this->desc = $desc; 
        $this->img = $img; 
      }
      
      public function HienThi_Info() {
        echo "<div class='GT'>
                <p>{$this->title}</p>
              </div> 
              <p>{$this->desc}</p>
                <div class ='slideshow'>
                    <img src='{$this->img}'>
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
                                $tit="Giới thiệu về Phụ kiện Store";
                                $des="Kẹp tóc, phụ kiện làm tóc luôn là một dụng cụ làm đẹp đi kèm của các cô gái 
                                mà không thể thiếu được. Những năm trở lại gần đây chúng ta có thể thường xuyên bắt 
                                gặp các cô nàng với vô cùng nhiều kiểu tóc vô cùng đơn giản nhưng lại không kém phần
                                lung linh.Với triết lý “Chúng tôi không kiếm tiền từ việc bán hàng.chúng tôi kiếm tiền từ việc 
                                giúp khách hàng đưa ra quyết định mua sắm”,
                                Shop phụ kiện nhân đôi trải nghiệm từ cửa hàng";
                                 $hinh="./img/kep.jpg";
                                $info=new Info($tit,$des,$hinh);
                                 $info->HienThi_Info();
                                 
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