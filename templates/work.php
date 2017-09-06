<!-- <section class="text-block">
    <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 content-card">
                    <a href="work-climate-change.html">
                        <img src="images/about-panel-1.jpg" width="100%">
                    </a>
                    <p class="h5">Fighting Global Warming</p>
                    <p>Our world is warmer than ever before, and people and wildlife are already suffering the consequences.
                        But that’s nothing compared to what we’re leaving future generations if these trends continue.
                        It’s time to stop the destruction and build the clean energy future we deserve.</p>
                    <div class='card-info card-info-bg' style="top: 20px; bottom: initial;">
                        <div class="icon-bg icon-basic-heart text-white"></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 content-card">
                    <a href="work-forests.html">
                        <img src="images/about-panel-2.jpg" width="100%">
                    </a>
                    <div class='card-info card-info-bg' style="top: 20px; bottom: initial;">
                        <div class="icon-bg icon-basic-heart text-white"></div>
                    </div>
                    <p class="h5">Protecting Forests</p>
                    <p>Forests are crucial for the health and well-being of people, wildlife and our planet. They’re home
                        to roughly two-thirds of all land-dwelling plant and animal species, critical lifelines for communities
                        big and small, and one of the last lines of defense against catastrophic climate change.</p>
                </div>
                <div class="col-sm-12 col-md-4 content-card">
                    <a href="work-water.html">
                        <img src="images/about-panel-3.jpg" width="100%">
                    </a>
                    <div class='card-info card-info-bg' style="top: 20px; bottom: initial;">
                        <div class="icon-bg icon-basic-heart text-white"></div>
                    </div>
                    <p class="h5">Conserving Fresh Water</p>
                    <p>Water is life. It’s vital. It supports the immense diversity of life on Earth. It’s a source of food,
                        health and energy. Fresh water makes civilization possible.​ But fresh water, in turn, isn’t
                        possible without a healthy planet — and human actions are putting a healthy planet at risk.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="text-block">
    <div class="container">
            <div class="row">
                <?php
                    $queryProjectData = "SELECT projectId, projectName, description, pages.pageId, pageURL FROM `projects`
                                        INNER JOIN pages ON projects.pageId = pages.pageId;";
                    $queryResult = queryDatabase($conn, $queryProjectData);
                    
                    while($row = mysqli_fetch_assoc($queryResult))
                    {
                        echo "<div class='col-sm-12 col-md-4 content-card'>";
                        //echo "<a href='$row[]'";
                        echo "<img src='resources/images/content/project-thumb-" . $row['projectId'] . ".jpg' width='100%'></a>";
                        echo "<p class='h5'>Fighting Global Warming</p>";
                    //     <p>Our world is warmer than ever before, and people and wildlife are already suffering the consequences.
                    //         But that’s nothing compared to what we’re leaving future generations if these trends continue.
                    //         It’s time to stop the destruction and build the clean energy future we deserve.</p>
                    //     <div class='card-info card-info-bg' style="top: 20px; bottom: initial;">
                    //         <div class="icon-bg icon-basic-heart text-white"></div>
                    //     </div>
                    // </div>
                    }

                ?>
            </div>
        </div>
    </div>
</section>