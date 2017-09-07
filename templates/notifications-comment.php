<script type="text/javascript">
    // function to toggle likes
    function addComment(galleryItemId) {
        
        // check if a projectId is available
        if (galleryItemId) {
            
            let commentData = document.getElementById('textAreaComment').value;
            
            $.ajax({
                url:"/<?php echo BACKEND_URL ?>/comment.php",
                type:"GET",
                data:{id : galleryItemId, msg : commentData},
                success: function(response){
                    if (response == "added") {
                        alertify.success("Thank you for commenting!");
                        setTimeout(function(){
                            location.reload();
                        }, 500);
                    } else if (response == "notloggedin") {
                        alertify
                        .okBtn("Login")
                        .cancelBtn("Cancel")
                        .confirm("You need to be logged in to comment.", function () {
                            window.location.replace("/account.php");
                        });
                    }
                }
             });
        }
        
    }
</script>