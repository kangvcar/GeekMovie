<!-- 电影锦集 start -->
<div class="title text-primary">
  <h1><i class="glyphicon glyphicon-facetime-video" aria-hidden="true"></i> 精彩视频</h1>
</div>

<div class="class">
  <div class="class-head">
    <h3><i class="glyphicon glyphicon-film"></i>动作片</h3>
  </div>
  <div class="row" >
    <?php 
      $dongzuomoviesql = "SELECT mid, mname, mimgurl FROM movie WHERE mtype LIKE '%动作%' LIMIT 4;";
      $result2 = $conn->query($dongzuomoviesql);
      if ($row = $result2->num_rows > 0) {
        while ($row = $result2->fetch_row()) {
          print <<<EOG
            <div class="col-md-3 col-sm-3" >
              <div class="img-class" >
                  <a href="./details.php?movieid=$row[0]"><img src="$row[2]" alt="$row[1]" style="width: 100%;height: 250px;"></a>
              </div>
              <div class="class-body">
              <p align="center"><a href="./details.php?movieid=$row[0]">$row[1]</a></p>
              </div>
            </div>
EOG;
        }
      }
     ?>
  </div>

  <div class="class-head">
    <h3><i class="glyphicon glyphicon-expand"></i>剧情片</h3>
  </div>
  <div class="row">
    <?php 
      $juqingmoviesql = "SELECT mid, mname, mimgurl FROM movie WHERE mtype LIKE '%剧情%' LIMIT 4;";
      $result3 = $conn->query($juqingmoviesql);
      if ($row = $result3->num_rows > 0) {
        while ($row = $result3->fetch_row()) {
          print <<<EOG
            <div class="col-md-3 col-sm-3">
              <div class="img-class">
                  <a href="./details.php?movieid=$row[0]"><img src="$row[2]" alt="$row[1]" style="width: 100%;height: 250px;"></a>
              </div>
              <div class="class-body">
              <p align="center"><a href="./details.php?movieid=$row[0]">$row[1]</a></p>
              </div>
            </div>
EOG;
        }
      }
     ?>
  </div>

  <div class="class-head">
    <h3><i class="glyphicon glyphicon-fire"></i>动漫</h3>
  </div>
  <div class="row">
    <?php 
      $dongmanmoviesql = "SELECT mid, mname, mimgurl FROM movie WHERE mtype LIKE '%动漫%' LIMIT 4;";
      $result4 = $conn->query($dongmanmoviesql);
      if ($row = $result4->num_rows > 0) {
        while ($row = $result4->fetch_row()) {
          print <<<EOG
            <div class="col-md-3 col-sm-3">
              <div class="img-class">
                  <a href="./details.php?movieid=$row[0]"><img src="$row[2]" alt="$row[1]" style="width: 100%;height: 250px;"></a>
              </div>
              <div class="class-body">
              <p align="center"><a href="./details.php?movieid=$row[0]">$row[1]</a></p>
              </div>
            </div>
EOG;
        }
      }
     ?>
  </div>

  <div class="class-head">
    <h3><i class="glyphicon glyphicon-fire"></i>电视剧</h3>
  </div>
  <div class="row">
    <?php 
      $dianshijusql = "SELECT mid, mname, mimgurl FROM movie WHERE mtype LIKE '%剧%' AND NOT mtype='剧情片' AND NOT mtype='喜剧片' LIMIT 4;";
      $result5 = $conn->query($dianshijusql);
      if ($row = $result5->num_rows > 0) {
        while ($row = $result5->fetch_row()) {
          print <<<EOG
            <div class="col-md-3 col-sm-3">
              <div class="img-class">
                  <a href="./details.php?movieid=$row[0]"><img src="$row[2]" alt="$row[1]" style="width: 100%;height: 250px;"></a>
              </div>
              <div class="class-body">
              <p align="center"><a href="./details.php?movieid=$row[0]">$row[1]</a></p>
              </div>
            </div>
EOG;
        }
      }
     ?>
  </div>
</div>
<!-- 电影锦集 end -->