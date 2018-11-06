<!-- 为你推荐 start -->
<div class="title text-right text-blue" id="recommend">
  <h1><i class="fa fa-instagram fa-1x" aria-hidden="true"></i>为你推荐</h1>
</div>
<div class="row">
  <?php 
      $recommendsql = "SELECT mid, mname, mimgurl FROM movie LIMIT 4;";
      $result32 = $conn->query($recommendsql);
      if ($row = $result32->num_rows > 0) {
        while ($row = $result32->fetch_row()) {
          print <<<EOY
              <div class="col-md-3 col-sm-3">
              <div class="img-class">
                  <a href="./details.php?movieid=$row[0]"><img src="$row[2]" alt="$row[1]" style="width: 100%;height: 250px;"></a>
              </div>
            </div>
EOY;
        }
      }
   ?>
</div>
<!-- 为你推荐 end -->