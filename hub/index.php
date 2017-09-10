<?php
    $activePage = 'Overview';    
    $userType = 1;


    // load config file
    require_once("../config.php");
    
    // check if user is logged in
    require_once(TEMPLATES_PATH . "/onlymembers.php");
    
    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    // render header
    require_once(TEMPLATES_PATH . "/header.php");
    
    // render sidebar and navigation
    require_once(TEMPLATES_PATH . "/cp-navigation.php");
    require_once(TEMPLATES_PATH . "/cp-sidebar.php");
?>

<div class="admin-content col-sm-9 ml-sm-auto col-md-10 pt-4">
    <h1>Welcome</h1>
    <h6 class="pb-4">Here's an overview of what you can do here.</h6>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Update your</h6>
                        <h4 class="card-title">Profile</h4>
                        <p class="card-text">Change your account details to better reflect you.</p>
                        <a href="profile.php" class="card-link">Update your profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    // render footer
    require_once(TEMPLATES_PATH . "/cp-footer.php");

    // close database connection
    closeConection($conn);
?>
