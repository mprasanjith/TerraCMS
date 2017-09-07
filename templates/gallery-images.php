<section class="text-block" id="images">
    <div class="container">
        <h3>Captures</h3>
        <p>What we do, from the photographer's viewpoint</p>
        <div class="row">
            <?php
            
                // Get images details
                $queryGalleryItemData = "SELECT * FROM `GalleryItems` WHERE itemType='image'";
                $queryResult = queryDatabase($conn, $queryGalleryItemData);
                
                // Render each image
                while($row = mysqli_fetch_assoc($queryResult))
                {
                    // Get comment count for each image
                    $queryCommentData = "SELECT * FROM Comments WHERE galleryItemId = " . $row['galleryItemId'];
                    $CommentsQueryResult = queryDatabase($conn, $queryCommentData);
                    $commentCount = mysqli_num_rows($CommentsQueryResult);
                    
                    echo "<div class='col-lg-6 content-card'><a href='#' data-featherlight='" . $row['itemURL'] . "'>";
                    echo "<img src='" . $row['itemURL'] . "' width='100%' style='max-height: 300px;'></a>";
                    echo "<a data-featherlight='iframe' data-featherlight-iframe-width='500' data-featherlight-iframe-max-width='80%' data-featherlight-iframe-height='700'";
                    echo " href='/templates/comments.php?id=" . $row['galleryItemId'] . "'>";
                    echo "<div class='card-info card-info-bg'><div class='icon-bg icon-basic-message-txt text-white'> " . $commentCount . "</div></div></a></div>";
                }

            ?>
        </div>
    </div>
</section>