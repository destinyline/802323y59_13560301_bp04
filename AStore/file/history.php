<?php 
  $output = NULL;

  if(isset($_POST['submit'])){
    $mysqli = mysqli_connect("localhost","root","","a_store") or die('Unable to Connect');
    $search = $mysqli->real_escape_string($_POST['search']);

    // $resultSet = $mysqli->query("SELECT * FROM `product_code` WHRER `Product_code` = `%".$search."%`");


$sql = "SELECT * FROM product_code WHERE Product_code LIKE '%".$search."%' ";
$resultSet = mysqli_query($mysqli,$sql);


    if($resultSet->num_rows > 0){
      while($rows = $resultSet->fetch_assoc())
      {
        
        $Product_number = $rows['Product_number'];
        $Product_price = $rows['Product_price'];
        $Product_status = $rows['Product_status'];

        $output .= "คำสั่งซื้อที่ $Product_number <br/>";
        $output .= "ราคาสินค้า $Product_price<br/>";
        $output .= "สถานะ $Product_status<br/>";


      }
    }else{
      $Product_number = "No Result";
      $Product_price = "No Result";
      $Product_status = "No Result";
    }
  }
 ?>


<html>
<head>
  <title></title>

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="//code.jquery.com/jquery-2.1.4.min.js"></script> 

<link rel="stylesheet" href="css/index.css" />
    
    <link rel="stylesheet" href="css/sidebar.css" />
    <link rel="stylesheet" href="css/lib/fontello.css" />
    <link rel="stylesheet" href="css/lib/normalize.css" />

<link rel="stylesheet" type="text/css" href="boxstyle.css"/>



</head>
<body>


<div class='wrapper'>
  <div class='sidebar'>
    <div class='title'>
      A STORE
    </div>
    <ul class='nav'>
     
     <li>
        <a href="index.php">หน้าแรก</a>
      </li>
      <li>
        <a>รถเข็นของฉัน</a>
      </li>
      <li>
        <a href="check_status.php">ตรวจสอบสถานะ</a>
      </li>
      <li>
        <a class="active">ประวัติการสั่งซื้อ</a>
      </li>
      <li>
        <a>ออกจากระบบ</a>
      </li>
    </ul>
  </div>


  <div class='content isOpen'>
    <a class='button' style="color: #d49f31;"></a>



  <div class="head_name">
     <div class="text1">ประวัติการสั่งซื้อ</div>
  </div>

  <div class="allpage">
  <div class="search_box">
      <div class="text6"></div>
      
          <div class="button_box2">
            
          </div>
        
  
 
<div class="list_product" style="margin-top:30px;">
  <div class="text3" style="padding-top:10px; padding-left:5px; font-size:15px; color:#d49f31;">
      คำสั่งซื้อที่ 00001 <br/><br/>
      <div style="margin-left:60px; font-size:18px; margin-top:25px;">รหัสสถานะสินค้า AS0001</div>
  </div>
</div>

<div class="list_product" style="margin-top:30px;">
  <div class="text3" style="padding-top:10px; padding-left:5px; font-size:15px; color:#d49f31;">
      คำสั่งซื้อที่ 00002 <br/><br/>
      <div style="margin-left:60px; font-size:18px; margin-top:25px;">รหัสสถานะสินค้า AS0002</div>
  </div>
</div>

<div class="list_product" style="margin-top:30px;">
  <div class="text3" style="padding-top:10px; padding-left:5px; font-size:15px; color:#d49f31;">
      คำสั่งซื้อที่ 00003 <br/><br/>
      <div style="margin-left:60px; font-size:18px; margin-top:25px;">รหัสสถานะสินค้า AS0003</div>
  </div>
</div>



</div>
</div>
  </div>

  



</div>
<script src="js/classie.js"></script>
    <script src="js/uisearch.js"></script>
    <script>
      new UISearch( document.getElementById( 'sb-search' ) );
    </script>

<script type="text/javascript">
$(document).ready(function() {
  $('.button').on('click', function() {
    $('.content').toggleClass('isOpen');
  });
});
</script>

<script type="text/javascript">
  $("ul li").click(function(e) {

  if ($(this).hasClass('slider')) {
    return;
  }



  var whatTab = $(this).index();

  var howFar = 117 * whatTab;

  $(".slider").css({
    left: howFar + "px"
  });

  $(".ripple").remove();

  var posX = $(this).offset().left,
      posY = $(this).offset().top,
      buttonWidth = $(this).width(),
      buttonHeight = $(this).height();

  $(this).prepend("<span class='ripple'></span>");

  if (buttonWidth >= buttonHeight) {
    buttonHeight = buttonWidth;
  } else {
    buttonWidth = buttonHeight;
  }

  var x = e.pageX - posX - buttonWidth / 2;
  var y = e.pageY - posY - buttonHeight / 2;

  $(".ripple").css({
    width: buttonWidth,
    height: buttonHeight,
    top: y + 'px',
    left: x + 'px'
  }).addClass("rippleEffect");
  
});

  </script>
 


  
</body>
</html>

