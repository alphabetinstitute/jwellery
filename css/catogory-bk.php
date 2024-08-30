<?php
	require_once 'inc/global.inc.php';
	include 'header.php';
	include 'top-menu-nav.php';

	$cate = '';
	$cateid = 0;
	$subcateid = 0;
	$costom = '';
	if(isset($_SESSION['userid']))
	{
		$product_data = array();

		if(isset($_GET['cateid']))
		{
			$cateid = $_GET['cateid'];
			$costom = $_GET['costom'];
			$cate = '1';
			//$product_data = $db->select("tbl_product","1 AND category_id = $cateid AND costom = $costom AND status = 1"); 
		}
		elseif (isset($_GET['subcateid'])) 
		{
			$subcateid = $_GET['subcateid'];
			$costom = $_GET['costom'];
			$cate = '2';
			//$product_data = $db->select("tbl_product","1 AND sub_category_id = $subcateid AND costom = $costom status = 1"); 
		}
	}
	else
	{
		header("location: user-login.php");
	}
?>

<style type="text/css">
    .buy1
    {
		float: right;
		width: calc(30% - 2px);
		top: -31px;
		height: 100%;
		background: #f1f1f1;
		transition: background 0.5s;
		border-left: solid thin rgba(0, 0, 0, 0.1);
		display: flex;
		align-items: center;
		justify-content: center;
    }
	.middle-c
	{
		display: flex;
		align-items: center;
		justify-content: center;
	}
    .dummy-cart:hover{color:green; cursor:pointer;}
    .dummy-close:hover{color:brown !important; cursor:pointer;}

	.sold
	{
		margin-left:-10px;
		background-color: #ae2f2f;
		font-size: 20px;
		font-weight: 600;
	}
</style>

<style type="text/css">
    .pagination {
        margin: 20px 0;
        text-align: center;
    }

    .pagination a {
        color: #333;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .pagination a.active {
        background-color: #007bff;
        color: #fff;
    }

    .pagination li.active {
        background-color: #007bff;
        color: #fff;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }

    .pagination span {
        padding: 8px 16px;
        color: #333;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<main class="container-fluid">
    <section class="row my-3 padding-e p-30">
        <section class="col-lg-2">
            <section class="grams-box mt-5 px-2 pt-3 pb-5">
                <h3 class="fs-4 fw-bold">Grams</h3>
                <section class="d-flex">
                    <article class="me-1">
                        <label for="min" class="fw-bold text-secondary">Min</label>
                        <input type="text" class="form-control" name="" placeholder="in gm" id="min">
                    </article>

                    <article class="ms-1">
                        <label for="max" class="fw-bold text-secondary">Max</label>
                        <input type="text" class="form-control" name="" placeholder="in gm" id="max">
                    </article>
                </section>

                <section>
                    <article class="" style="margin-top: 10px;">
                        <button type="button" class="btn btn-outline-info" name="search" id="search" style="width: 100%;">Search</button>
                    </article>
                </section>
            </section>
        </section>

        <section class="col-lg-10">
        	<section class="row" id="alldata">
            </section>

            <section class="row" id="pagination">
            </section>
            <section class="row d-none">
                <?php
	                // if(count($product_data)> 0)
	                // {
	                	// foreach ($product_data as $key => $value) 
	                    // {
	                        // $prod_id = $value['id'];
	                        // $prod_img = $value['product_image'];
	                        // $prod_name = $value['product_name'];
	                        // $prod_sku = $value['sku'];
	                        // $prod_weight = $value['weight'];
	                        // $prod_desc = $value['description'];
	                        // $prod_size = $value['size'];
	                        // $prod_ston = $value['stone'];
	                        // $prod_melt = $value['melting'];
	                        // $prod_range = $value['weight_range'];
	                        // $prod_variety = $value['variety'];
	                        // $in_stock = $value['in_stock'];
	                        // $image = explode(',', $prod_img);
	                        ?>

	                        <!-- <section class=" col-lg-3 mb-4 p-0 card">
	                            <div class="wrapper10">
	                                <div class="container1">
	                                    <div class="top">
	                                        <a href="productdetails.php?prodid=<?php echo $prod_id;?>">
	                                            <img src="admin/images/<?php echo $image[0]; ?>" alt="prod-img">
	                                        </a>
	                                    </div>

	                                    <div class="bottom">
	                                        <section class="row">
	                                            <section class="col-9">
	                                                <div class="pt-1 ps-2">
	                                                    <h6 class="text-dark"><?php echo $prod_name;?></h6>
	                                                    <p class="fs-14 fw-bold"> <?php echo $prod_weight;?>gm</p>
	                                                </div>
	                                            </section> -->

	                                            <?php 

	                                            // if($in_stock == 0)
	                                            // {
	                                            	?>
	                                                <!-- <section class="col-3 middle-c sold">SOLD</section> -->
	                                            <?php
	                                            // } else{
	                                            	?>
	                                                <!-- <section class="col-3 middle-c">
	                                                    <div onclick="addtocart(<?= $prod_id?>);">
	                                                        <i id="addcart<?= $prod_id?>" class="material-icons dummy-cart fs-1 font-size">add_shopping_cart</i>
	                                                    </div>
	                                                    <div  onclick="removecart(<?= $prod_id?>);"><i id="removecart<?= $prod_id?>" class="material-icons fs-1 text-danger dummy-close d-none font-size">close</i></div>
	                                                </section> -->
	                                            <?php
	                                            // } 
	                                            ?>
                                    		<!-- </section>
	                                    </div>
	                                </div>
	                            </div>
	                        </section>   -->  
	                    <?php  
	                    // }
	                // }
	                // else
	                // {
	                	?>
	                	<!-- <div style="text-align:center; font-size: 20PX">Product Not Avaliable</div> -->
	                <?php
	                // }
                ?>
            </section>
        </section>
    </section>
</main>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="js/style.js"></script>

<?php include 'footer.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	getcartcount();
	getprodbycatemob(1,0, 'id', 'DESC');

    function addtocart(id)
    {
        $.ajax({

          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "cart-add",id:id},
          beforeSend: function() 
          {
          },
          success: function(data) 
          {
            var data = data.trim();
            if(data == 1)
            {
                $('#addcart'+id).addClass('d-none');
                $('#removecart'+id).removeClass('d-none');
            }
            getcartcount();
          },
          error : function(e) 
          {
            alert('something went wrong..!');
          }
        });
    }

    function removecart(prod_id) 
    {
        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "cart-remove",id:prod_id},
          beforeSend: function() 
          {
          },
          success: function(data) 
          {
            var data = data.trim();
            if(data == 1)
            {
                $('#addcart'+prod_id).removeClass('d-none');
                $('#removecart'+prod_id).addClass('d-none');
                // var cartIcon = document.querySelector('.dummy-cart');
                // var closeIcon = document.querySelector('.dummy-close');
                // closeIcon.classList.add("d-none");
                // cartIcon.classList.remove("d-none");
            }
            getcartcount();
          },
          error : function(e) 
          {
            alert('something went wrong..!');
          }
        });
    }

    function getcartcount()
    {
        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "cart-count"},
          beforeSend: function() 
          {
          },
          success: function(data) 
          {
            $('#cart-count').html(data);
          },
          error : function(e) 
          {
            alert('something went wrong..!');
          }

        });
    }

    function getprodbycatemob(page,id,orderBy, shortBy)
    {
    	var costom = <?=$costom;?>;
    	var category = <?=$cateid?>;
    	var subcategory = <?=$subcateid?>;

    	if(category == 0){
    		category = '';
    	}
    	if(subcategory == 0){
    		subcategory = '';
    	}
    		
        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "getproductbycategorymob",category:category,subcategory:subcategory,page: page, orderBy: orderBy, shortBy: shortBy,costom:costom},
          beforeSend: function() 
          {
          },
          success: function(data) 
          {
            var dataArr = jQuery.parseJSON(data);
            $("#alldata").html(dataArr.datatable);
            $("#pagination").html(dataArr.msg);
          },
          error : function(e) 
          {
            alert('something went wrong..!');
          }
        });
    }

    function searchbygrmMob(page,id,orderBy, shortBy)
    {
        var from = $('#gram-min').val();
        var to = $('#gram-max').val();
        var category = <?=$cateid?>;
        var costom = 2;
        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "getproductbygrmMob",from:from,to:to,costom:costom,page: page, orderBy: orderBy, shortBy: shortBy,category:category},
          beforeSend: function() 
          {
          },
          success: function(data) 
          {
            var dataArr = jQuery.parseJSON(data);
            $("#alldata").html(dataArr.datatable);
            $("#pagination").html(dataArr.msg);
            sitePlusMinus();
          },
          error : function(e) 
          {
            alert('something went wrong..!');
          }
        });
    }

	// var cards = document.querySelectorAll('.card');
	// cards.forEach(function(card) 
	// {
	//     // Get cart and close icons inside the card
	//     var cartIcon = card.querySelector('.dummy-cart');
	//     var closeIcon = card.querySelector('.dummy-close');
	//     // Add click event listener to cart icon
	//     cartIcon.addEventListener('click', function() 
	//     {
	//         // Hide cart icon and show close icon
	//         cartIcon.classList.add("d-none");
	//         closeIcon.classList.remove("d-none");
	//         // Add logic to add item to cart
	//         // You can add your AJAX call or any logic to add item to the cart here
	//     });

	//     // Add click event listener to close icon

	//     closeIcon.addEventListener('click', function() 
	//     {

	//         // Show cart icon and hide close icon

	//         closeIcon.classList.add("d-none");

	//         cartIcon.classList.remove("d-none");

	//     });
	// });
</script>