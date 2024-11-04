<?php
      class Menu_List {
        public $name;
        public $link;
    
      
      public function __construct(  $name,$link) {
        $this->name = $name;
        $this->link = $link; 
      }
      public function HienThi_MenuList() {
        echo " <li><a href='{$this->link}'>{$this->name}</a></li>";
      }
    }
    $mang_sanpham = array(
        array(
            'name' => 'Kẹp nơ lông ',
            'link' => '#'
          ),
          array(
            'name' => 'Trâm cài tóc',
            'link' => '#'
          ),
          array(
            'name' => 'Băng đô cài tóc',
            'link' => '#'
          ),
          array(
            'name' => 'Kẹp tóc Hàn Quốc',
            'link' => '#'
          ),
          array(
            'name' => 'Kẹp tóc hình hoa',
            'link' => '#'
          ),
          array(
            'name' => 'Kẹp ngôi sao ',
            'link' => '#'
          )
          );

    $mang_tintuc = array(
      array(
          'name' => 'Kẹp hiện đại',
          'link' => '#'
        ),
        array(
          'name' => 'Trâm cài cô dâu',
          'link' => '#'
        ),
        array(
          'name' => 'Cài tóc',
          'link' => '#'
        ),
        array(
          'name' => 'Kẹp nhí nhảnh',
          'link' => '#'
        )
        );

      $mang_dichvu = array(
        array(
            'name' => 'Phiếu cảm ơn',
            'link' => '#'
          ),
          array(
            'name' => 'Bảo hành sản phẩm',
            'link' => '#'
          ),
          array(
            'name' => 'Bảo hàng vận chuyển ',
            'link' => '#'
          )
          );

?>
<div class="intro">
                            <h3>SẢN PHẨM</h3>
                            <div class="list">
                                <ul>
                                <?php
                                // Hiển thị sản phẩm bên phải
                                foreach ($mang_sanpham as $item) {
                                    $Menu_List = new Menu_List( $item['name'],$item['link']);
                                    $Menu_List->HienThi_MenuList();
                                }
                            ?> 
                                </ul>
                            </div>
                        </div>
                        <div class="news">
                            <h3>Tin tức - Sự kiện</h3>
                            <div class="list">
                                <ul>
                                <?php
                                // Hiển thị sản phẩm bên phải
                                foreach ($mang_tintuc as $item) {
                                    $Menu_List = new Menu_List( $item['name'],$item['link']);
                                    $Menu_List->HienThi_MenuList();
                                }
                            ?> 
                                </ul>
                            </div>
                        </div>
                        <div class="info-1">
                            <h3>DỊCH VỤ</h3>
                            <div class="list">
                                <ul>
                                <?php
                                // Hiển thị sản phẩm bên phải
                                foreach ($mang_dichvu as $item) {
                                    $Menu_List = new Menu_List( $item['name'],$item['link']);
                                    $Menu_List->HienThi_MenuList();
                                }
                            ?> 
                            </ul>
                                    
                            </div>
                        </div>
                        <!-- <div class="video">
                            <h3>Video</h3>
                            <iframe src="https://www.youtube.com/embed/7amKmRDfSlg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>        -->
