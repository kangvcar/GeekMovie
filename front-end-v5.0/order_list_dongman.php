<?php 
    $order_MovieSql = "SELECT mid, mname, mimgurl, mtype, mstar FROM movie WHERE mtype LIKE '动漫' LIMIT 30;";
    $result17 = $conn->query($order_MovieSql);
    if ($row = $result17->num_rows > 0) {
        $i = 1;
        while ($row = $result17->fetch_row()) {
          print <<<EOG
          <li class="list p-0">
              <a class="pull-left" href="./vod-detail.php?movid=$row[0]" title="$row[1]" >
                  <em class="num active">
                      ${i}
                  </em>
                  $row[1]
              </a>
              <span class="hits text-color">
              </span>
          </li>
EOG;
          $i++;
        }
    }
 ?>