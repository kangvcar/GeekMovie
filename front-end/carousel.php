<!-- 轮播图 start -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox" >
    <?php 
      include("dbconnection.php");
      $carouselsql = "SELECT mid, mname, mimgurl FROM movie ORDER BY mid DESC LIMIT 3;";
      $result1 = $conn->query($carouselsql);
      if ($result1->num_rows > 0) {
        $i = 1;
        while ($row = $result1->fetch_row()) {
          
          $active = ($i == 1) ? 'active' : '';
          print <<<EOI
          <div class="item $active">
            <a href="./details.php?movieid=$row[0]"><img src="$row[2]" alt="$row[1]" style="width: 100%;height: 300px;"></a>
            <div class="carousel-caption">
              <h3>$row[1]</h3>
            </div>
          </div>
EOI;
          $i++;
        }
      }
     ?>
  </div> 

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

</div>
<!-- 轮播图 end -->