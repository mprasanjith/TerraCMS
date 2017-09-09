<link rel="stylesheet" type="text/css" href="/resources/css/font-linea-ecommerce.css" />
<style type="text/css">
    .simpleCart_items * {
        color: #fff;
    }
</style>

<!-- Load jQuery early to display cart on load -->
<script type="text/javascript" src="/resources/js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">

    function showCartInfo() {
        var msg = "<h5>Your Cart</h5>" +
          "<span class='text-white simpleCart_quantity'></span> items - <span class='text-white simpleCart_total'></span><br>" + 
          "<div class='simpleCart_items pb-3'></div><br>" +
          "<a href='javascript:;' class='simpleCart_checkout btn btn-primary btn-block'>Checkout</button>";
        alertify.delay(0).log(msg);
    }
    
    $(document).ready(function () {
        showCartInfo();
    });
    
</script>

<section class="text-block" id="images">
    <div class="container">
        <div class="row">
            
            <?php
                
                // Get product details
                $queryProductData = "SELECT * FROM `ShopItems`;";
                $queryResult = queryDatabase($conn, $queryProductData);
                
                // Render each project
                while($row = mysqli_fetch_assoc($queryResult))
                {
                    echo "<div class='col-sm-12 col-md-4 content-card simpleCart_shelfItem'><img src='" . $row['itemImage'] . "' width='100%'>";
                    echo "<div class='card-info'><span class='item_name'>" . $row['itemName'] . "</span> [<span class='item_price'>$" . $row['price'] . "</span>]";
                    echo "<a class='item_add' href='javascript:;'><div class='card-info card-info-bg h6' style='padding-top: 5px;'>";
                    echo "<span class='icon-bg icon icon-ecommerce-basket-plus text-white'></span></div></a></div></div>";
                }

            ?>
        </div>
    </div>
</section>