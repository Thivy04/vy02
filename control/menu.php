<?php
    // Khai báo Menu
    class Menu_Main {
        public $name;
        public $link;

      
      public function __construct(  $name,$link) {
        $this->name = $name;
        $this->link = $link; 
      }
      
      public function HienThi_Menu_Main() {
        echo " <li><a href='{$this->link}'>{$this->name}</a></li>";
      }
    }
    $mang_MenuMain = array(
        array(
            'name' => 'TRANG CHỦ',
            'link' => 'index.php'
          ),
          array(
            'name' => 'Giới Thiệu ',
            'link' => 'info.php'
          ),
          array(
            'name' => 'Sản Phẩm',
            'link' => 'product.php'
          ),
          array(
            'name' => 'Tin Tức ',
            'link' => 'news.php'
          ),
          array(
            'name' => 'Dịch Vụ',
            'link' => 'dichvu.php'
          )
        
        );
    ?>
<ul>
<?php

foreach ($mang_MenuMain as $item) {
    $Menu_Main = new Menu_Main($item['name'],$item['link']);
    $Menu_Main->HienThi_Menu_Main();

}
?>

 <input type="text" placeholder="Search..">
</ul>