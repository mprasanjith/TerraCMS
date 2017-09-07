<section class="text-block" id="videos">
    <div class="container">
        <h3>Videos</h3>
        <p>On-location video footage</p>
        <div class="row">
            <?php
            
                // Get videos details
                $queryVideosData = "SELECT * FROM `GalleryItems` WHERE itemType='video'";
                $queryResult = queryDatabase($conn, $queryVideosData);
                
                // Render each video
                while($row = mysqli_fetch_assoc($queryResult))
                {
                    // Get comment count for each video
                    $queryCommentData = "SELECT * FROM Comments WHERE galleryItemId = " . $row['galleryItemId'];
                    $CommentsQueryResult = queryDatabase($conn, $queryCommentData);
                    $commentCount = mysqli_num_rows($CommentsQueryResult);
                    
                    echo "<div class='col-lg-6 content-card'><div class='embed-responsive embed-responsive-16by9'>";
                    echo "<iframe class='embed-responsive-item' src='https://www.youtube.com/embed/" . $row['itemURL'] . "?rel=0' allowfullscreen></iframe>";
                    echo "<a data-featherlight='iframe' data-featherlight-iframe-width='500' data-featherlight-iframe-max-width='80%' data-featherlight-iframe-height='700'";
                    echo " href='/templates/comments.php?id=" . $row['galleryItemId'] . "'>";
                    echo "<div class='card-info card-info-bg'><div class='icon-bg icon-basic-message-txt text-white'> " . $commentCount . "</div></div></a></div></div>";
                }

            ?>
        </div>
    </div>
</section>