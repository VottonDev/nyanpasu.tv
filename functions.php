<?php
    // Database Connect File
    require "connect.php";

    function category_comedy() {
      require "connect.php";
      $category = $_GET['category'];

      $getvars = $conn->prepare("SELECT * FROM anime WHERE category=:category");
      $getvars->bindParam(":category", $category);
      $getvars->execute();

      while ($disp = $getvars->fetch(PDO::FETCH_ASSOC)){
        echo "<figure class='white'>";
        echo "<a href=" . $disp['path'] . ">";
        echo "<img src=" . $disp['thumb_url'] . ">";
        echo "<dl>";
        echo "<dt> " . $disp['title'] . "</dt>";
        echo "<dd> " . $disp['description'] . "</dd>";
        echo "</dl>";
        echo "</a>";
        echo "</figure>";
        echo "<div id='wrapper-part-info'>";
        echo "<div class='part-info-image'><img src='./source/letters/S.png' alt='' width='28' height='28'></div>";
        echo "<div id='part-info'>Supernatural</div>";
        echo "</div>";
        echo "</figure>";
      }
    }
?>
