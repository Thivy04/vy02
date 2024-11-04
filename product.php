<?php
// Khai báo nhóm sản phẩm
  // Khai báo sản phẩm
  class San_Pham {
    public $id;
    public $tensanpham;
    public $gia;
    public $hinhanh;
    public $thongtin;
    public $link;
    
    public function __construct($id, $tensanpham, $gia, $thongtin, $hinhanh,$link) {
      $this->id = $id;
      $this->tensanpham = $tensanpham;
      $this->gia = $gia;
      $this->hinhanh = $hinhanh; 
      $this->thongtin = $thongtin; 
      $this->link = $link;
    }
    
    public function HienThi_SanPham() {
      echo "<div class='khungsp'>
              <img src='{$this->hinhanh}' alt=''>
              <h3><a href='{$this->link}'>{$this->tensanpham}</a></h3>
              <h2>{$this->gia} vnđ </h2>
              <span>{$this->thongtin}</span>
            </div>";
    }
  }
  $mang = array(
    array(
      'tensp' => 'Kẹp nơ lông ',
      'gia' => '80.000',
      'hinhanh' => './img/kepnolongnhung.jpg',
      'thongtin' => 'xem chi tiet',
      'link' =>'#'
    ),
    array(
      'tensp' => 'Trâm cài tóc',
      'gia' => '100.000',
      'hinhanh' => './img/tramcaitoc.jpg',
      'thongtin' => 'xem chi tiet',
      'link' =>'#'
    ),
    array(
      'tensp' => 'Băng đô cài tóc',
      'gia' => '30.000',
      'hinhanh' => './img/bangdocaitoc.jpg',
      'thongtin' => 'xem chi tiet',
      'link' =>'#'
    ),
    array(
      'tensp' => 'Kẹp tóc Hàn Quốc',
      'gia' => '15.000',
      'hinhanh' => './img/keptochan.jpg',
      'thongtin' => 'xem chi tiet',
      'link' =>'#'
    ),
    array(
      'tensp' => 'Kẹp tóc hình hoa ',
      'gia' => '10.000',
      'hinhanh' => './img/keptochinhhoa.jpg',
      'thongtin' => 'xem chi tiet',
      'link' =>'#'
    ),
    array(
      'tensp' => 'Kẹp ngôi sao',
      'gia' => '5.000',
      'hinhanh' => './img/kepngoisao.jpg',
      'thongtin' => 'xem chi tiet',
      'link' =>'#'
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
                      include_once('control/menu.php')
                      ?>
                </div> 
                <!-- end phần menutop -->
        <!-- Phần CONTENT -->
                <div id="content">

                    <!-- Phần CONTENT bên trái web-->
                    <div id="maincontent"> 
                      <div class="sanpham">
                                <?php
                                // Hiển thị sản phẩm
                                foreach ($mang as $item) {
                                $San_Pham = new San_Pham('', $item['tensp'],$item['gia'],$item['thongtin'], $item['hinhanh'],$item['link']);
                                $San_Pham->HienThi_SanPham();
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