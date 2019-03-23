<?php 
    $recommend_MovieSql = "SELECT mid, mname, mimgurl, mtype, mstar FROM movie WHERE mtype LIKE '%片' ORDER BY mid DESC LIMIT 6 ;";
    $result3 = $conn->query($recommend_MovieSql);
    if ($row = $result3->num_rows > 0) {
        while ($row = $result3->fetch_row()) {
          print <<<EOG
            <li class="col-md-6 col-sm-4 col-xs-3">
                <div class="stui-vodlist__box">
                    <a class="stui-vodlist__thumb lazyload" style="background-image: url('$row[2]');" href="./vod-detail.php?movid=$row[0]" title="$row[1]">
                        <span class="play hidden-xs">
                        </span>
                        <span class="pic-text text-right">
                            $row[3]
                        </span>
                    </a>
                    <div class="stui-vodlist__detail">
                        <h4 class="title text-overflow">
                            <a href="vod-detail-id-97290.html" title="$row[1]">
                                $row[1]
                            </a>
                        </h4>
                        <p class="text text-overflow text-muted hidden-xs">
                            $row[4]
                        </p>
                    </div>
                </div>
            </li>
EOG;
        }
    }
 ?>