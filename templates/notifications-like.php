<script type="text/javascript">
    // function to toggle likes
    function toggleLike(projectId) {
        
        // check if a projectId is available
        if (projectId) {
            
            $.ajax({
                url:"/<?php echo BACKEND_URL ?>/like.php",
                type:"GET",
                data:{id : projectId},
                success: function(response){
                    if (response == "liked") {
                        alertify.success("Thank you for liking!");
                        setTimeout(function(){
                            location.reload();
                        }, 500);
                    } else if (response == "unliked") {
                        alertify.success("You have unliked this project.");
                        setTimeout(function(){
                            location.reload();
                        }, 500);
                    } else if (response == "notloggedin") {
                        alertify
                        .okBtn("Login")
                        .cancelBtn("Cancel")
                        .confirm("You need to be logged in to like a project.", function () {
                            window.location.replace("/account.php");
                        });
                    }
                }
             });
        }
        
    }
</script>