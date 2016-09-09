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


    echo $write;


    $write = <<<EOF
    <figure class="white">
      <a href="$disp['path']">
        <img src="$disp['thumb_url']" alt="">
        <dl>
          <dt> $disp['title'] </dt>
          <dd> $disp['description']</dd>
        </dl>
      </a>
                    <div id="wrapper-part-info">
                      <div class="part-info-image"><img src="./source/letters/S.png" alt="" width="28" height="28"></div>
                      <div id="part-info">Supernatural</div>
      </div>
    </figure>



    </section>
EOF;
    }
}







?>
