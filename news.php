<?php
    // Khai báo Tin Tức
    class Tin_Tuc {
        public $tintuc;
      public $hinhanh;
      public $thongtin;
      public $link;
      
      public function __construct( $hinhanh, $thongtin,$tintuc,$link) {
        $this->hinhanh = $hinhanh;
        $this->thongtin = $thongtin; 
        $this->tintuc =$tintuc;
        $this->link = $link;
      }
      
      public function HienThi_TinTuc() {
        echo "<div class='khungtintuc'>
        <img src='{$this->hinhanh}' alt=''>
        <h2><a href='{$this->link}'>{$this->tintuc}</a></h2>
        <p>{$this->thongtin}</p>
      </div>";
      }
    }
    $mangTin_Tuc = array(
        array(
            'hinhanh' => './img/kepnolongnhung.jpg',
            'tintuc' =>'Kẹp hiện đại',
            'thongtin' =>'Thiết kế mới lạ',
            'link' => '#'
          ),
        array(
          'tintuc' => 'Trâm cài cô dâu',
          'hinhanh' => './img/tramcaitoc.jpg',
          'thongtin' => 'Cổ trang, Cổ điển, Hiện đại, thanh lịch, nữ tính',
          'link' => '#'
        ),
        array(
            'tintuc' => 'Cài tóc',
            'hinhanh' => './img/bangdocaitoc.jpg',
            'thongtin' => 'Băng đô rửa mặt nhiều kiểu dễ thương tiện dụng phong cách nữ tính',
            'link' => '#'
          ),
          array(
            'tintuc' => 'Kẹp sang chảnh',
            'hinhanh' => './img/keptochan.jpg',
            'thongtin' => 'Kẹp tóc, phù hợp cho những dịp đi chơi hẹn hò giúp bạn nổi bật ở những bữa tiệc sang trọng',
            'link' => '#'
          ),array(
            'tintuc' => 'Kẹp nhí nhảnh',
            'hinhanh' => './img/keptochinhhoa.jpg',
            'thongtin' => 'Thời trang,ngọt ngào,thanh lịch',
            'link' => '#'
          ),
        
        );
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
                      include('control/menu.php')
                      ?>
                </div> 
                <!-- end phần menutop -->
        <!-- Phần CONTENT -->
                <div id="content">

                    <!-- Phần CONTENT bên trái web-->
                    <div id="maincontent"> 
                    <div id="khungtintucbentrai">
                            
                            <?php
                                // Hiển thị tin tuc
                                foreach ($mangTin_Tuc as $item) {
                                    $Tin_Tuc = new Tin_Tuc( $item['hinhanh'],$item['thongtin'],$item['tintuc'],$item['link']);
                                    $Tin_Tuc->HienThi_TinTuc();
                                }
                            ?>    
                                       
                         </div>

                        
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