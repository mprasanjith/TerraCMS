<?php
    // load config file
    require_once("../config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    // include header to load css files
    require_once(TEMPLATES_PATH . "/header.php");
    
    // comment notifications and processing
    require_once(TEMPLATES_PATH . "/notifications-comment.php");
    
    $galleryItemId = $_GET["id"];
?>

<div class="container-fluid">
    <div class="row">
        <div class="list-group">
            <div class="list-group-item flex-column align-items-start">
                <h5 class="mb-1">Add new comment</h5>
                <p>Please be polite when commenting on this website. Do not share confidential personal details while commenting.</p>
                <textarea class="form-control" id="textAreaComment" rows="3" width="100%"></textarea>
                <button class="float-right btn btn-primary mt-1" onclick="addComment(<?php echo $galleryItemId ?>)">Post Comment</button>
            </div>
            
            <?php
                
                // Get project details
                $queryCommentsData = "SELECT commentData, firstName, lastName FROM `Comments`
                                    INNER JOIN Users ON Comments.userId = Users.userId
                                    WHERE galleryItemId = $galleryItemId;";
                $queryResult = queryDatabase($conn, $queryCommentsData);
                
                // Render each project
                while($row = mysqli_fetch_assoc($queryResult))
                {
                    echo "<div class='list-group-item flex-column align-items-start'><div class='d-flex w-100 justify-content-between'>";
                    echo "<h6 class='mb-1'>" . $row['firstName'] . " " . $row['lastName'] . "</h6></div>";
                    echo "<p class='mb-1'>" . $row['commentData'] . "</p></div>";
                }

            ?>
        </div>
    </div>
</div>

<!--  JavaScript dependencies  -->
<script type="text/javascript" src="/resources/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/resources/js/tether.min.js"></script>
<script type="text/javascript" src="/resources/js/popper.min.js"></script>
<script type="text/javascript" src="/resources/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/resources/js/alertify.js"></script>
</body>

</html>