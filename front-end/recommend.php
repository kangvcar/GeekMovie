<!-- 精彩瞬间 start -->
<div class="title text-right text-blue" id="recommend">
  <h1><i class="fa fa-instagram fa-1x" aria-hidden="true"></i>为你推荐</h1>
</div>
<div class="row">
  <?php 
      $recommendsql = "SELECT mid, mname, mimgurl FROM movie LIMIT 4;";
      $result2 = $conn->query($dongzuomoviesql);
      if ($row = $result2->num_rows > 0) {
        while ($row = $result2->fetch_row()) {
          print <<<EOY
              <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                  <a href="./details.php?movieid=$row[0]"><img src="$row[2]" alt="$row[1]"></a>
                </a>
              </div>
EOY;
        }
      }
   ?>
</div>
<!-- 精彩瞬间 end -->