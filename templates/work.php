<script type="text/javascript">
    // function to toggle comments
    function toggleLike(projectId) {
        
        // check if a projectId is available
        if (projectId) {
            
            $.ajax({
                url:"<?php echo BACKEND_URL ?>/like.php",
                type:"GET",
                data:{id : projectId},
                success: function(response){
                    if (response == "liked") {
                        alertify.success("Thank you for liking!");
                    } else if (response == "unliked") {
                        alertify.success("You have unliked this project successfully.");
                    } else if (response == "notloggedin") {
                        alertify
                        .okBtn("Login")
                        .cancelBtn("Cancel")
                        .confirm("You need to be logged in to like a project.", function () {
                            window.location.replace("account.php");
                        });
                    }
                }
             });
        }
        
    }
    
</script>

<section class="text-block">
    <div class="container">
            <div class="row">
                <?php
                
                    // Get project details
                    $queryProjectData = "SELECT projectId, projectName, description, Pages.pageId, pageURL FROM `Projects`
                                        INNER JOIN Pages ON Projects.pageId = Pages.pageId;";
                    $queryResult = queryDatabase($conn, $queryProjectData);
                    
                    // Render each project
                    while($row = mysqli_fetch_assoc($queryResult))
                    {
                        // Get like count for each project
                        $queryLikeData = "SELECT * FROM Likes WHERE projectId = " . $row['projectId'];
                        $likesQueryResult = queryDatabase($conn, $queryLikeData);
                        $likeCount = mysqli_num_rows($likesQueryResult);
                        
                        echo "<div class='col-sm-12 col-md-4 content-card'><a href='" . $row['pageURL'] . "'>";
                        echo "<img src='resources/images/content/project-thumb-" . $row['projectId'] . ".jpg' width='100%'></a>";
                        echo "<p class='h5'>" . $row["projectName"] . "</p>";
                        echo "<p>" . $row['description'] . "</p>";
                        echo "<div class='card-info card-info-bg' style='top: 20px; bottom: initial;' onclick='toggleLike(" . $row['projectId'] . ");'>";
                        echo "<div class='icon-bg icon-basic-heart text-white'> " . $likeCount . "</div></div></div>";
                    }

                ?>
            </div>
        </div>
    </div>
</section>