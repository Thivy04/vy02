<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thị Vy - Phụ kiện Store</title>
</head>
<body>
<?php
    // Khai báo DichVu
    class Dich_vu {
        public $tendichvu;
      public $hinhanh;
      public $mota;
      public $link;
      
      public function __construct(  $tendichvu,$hinhanh,$mota,$link) {
        $this->hinhanh = $hinhanh;
        $this->tendichvu = $tendichvu; 
        $this->mota =$mota;
        $this->link =$link;
      }
      
      public function HienThi_Dichvu() {
        echo "<div class='khungtintuc'>
        <img src='{$this->hinhanh}' alt=''>
        <h4><a href='{$this->link}'>{$this->tendichvu}</a></h4>
        <p>{$this->mota}</p>
      </div>";
      }
    }
    $mang = array(
        array(
            'hinhanh' => './img/kepnolongnhung.jpg',
            'tendichvu' => 'Phiếu cảm ơn',
            'mota' => 'Trân thành cảm ơn quý khách đã ủng hộ sản phẩm của chúng tôi.',
            'link' => '#'
          ),
          array(
            'hinhanh' => './img/tramcaitoc.jpg',
            'tendichvu' => 'Bảo hành sản phẩm',
            'mota' => 'Khách gửi yêu cầu để shop gửi lại mẫu nếu shop gửi sai mẫu ',
            'link' => '#'
          ),
          array(
            'hinhanh' => './img/bangdocaitoc.jpg',
            'tendichvu' => 'Bảo hàng vận chuyển ',
            'mota' => 'Có video quay lại shope sẽ bồi thường nếu bị tổn thất',
            'link' => '#'
          ),
        
        
        );
    ?>

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
                        <div id="khungtintucbentrai">
                            
                            <?php
                                // Hiển thị dich vu
                                foreach ($mang as $item) {
                                    $Dich_vu = new Dich_vu( $item['tendichvu'],$item['hinhanh'],$item['mota'],$item['link']);
                                    $Dich_vu->HienThi_Dichvu();
                                }
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