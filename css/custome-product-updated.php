<?php
require_once 'inc/global.inc.php';
include 'header.php';
include 'top-menu-nav.php';
include 'track-visitor.php';

if(!isset($_SESSION['userid']))
{
    header("location: user-login.php");
}

$category_name = $db->select("tbl_category","1 AND status = 1"); 
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
    .buy1{
        float: right;
        width: calc(30% - 2px);
        /*padding: 5px;*/



        /*font-size: 14px;*/



        /*position: relative;*/



        /*z-index: 2;*/



    top: -31px;



    height: 100%;



    background: #f1f1f1;



    transition: background 0.5s;



    border-left: solid thin rgba(0, 0, 0, 0.1);



    display: flex;



    align-items: center;



    justify-content: center;



    }



    .middle-c{display: flex;



    align-items: center;



    justify-content: center;}



    .dummy-cart:hover{color:green; cursor:pointer;}



    .dummy-close:hover{color:brown !important; cursor:pointer;}
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

<style>

    .added {

        display: none;

        position: absolute;

        top: 50%;

        left: 50%;

        transform: translate(-50%, -50%);

        background-color:blue;

        color: #fff;

        padding: 15px 20px;

        border-radius: 5px;

        z-index: 9999;

        }

        .added.show {

            display: block;

        }

        .categories-box{

             position: relative;

             z-index:10;

             background:white;

             height:50vh;
             overflow-y:auto;

        }

        .sub-category-box {

            width: 146%;

            background: #f9f9f9;

            position: absolute;

            left: -170%;

            top: 0;

            transition: left 1s ease;

            z-index: 9;

            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;

            

        }

        .cut-icon {

            position: absolute;

            top: 0;

            right: 0;

            color: brown;

        }

        

        @media (max-width: 1000px) {

          .sub-category-box{display:none;}

        }

    .sold
    {
        margin-left:-13px;
        background-color: #ae2f2f;
        font-size: 15px;
        font-weight: 600;
    }
</style>

<style type="text/css">
    .new-product-label{
        width: 120px;
    box-sizing: border-box;
    display: block;
    position: absolute;
    left: 8px;
    z-index: 5;
    bottom: 100px;

    }
</style>



<!-- navbar end here -->



<main class="container-fluid">
   

<div class="product_section  category-container">

<div class="left-menu">
            <ul>
               <li class="active" data-category="GENTS_RING">
                  <img src="images/men/mj_4.png" alt="GENTS RING">
                  <span>GENTS RING</span>
               </li>
               <li data-category="GENTS_PANDENT">
                  <img src="images/men/mj_6.png" alt="GENTS PANDENT">
                  <span>GENTS PANDENT</span>
               </li>
               <li data-category="GENTS_KADA">
                  <img src="images/men/mj_3.png" alt="GENTS KADA">
                  <span>GENTS KADA</span>
               </li>
               <li data-category="BELT">
                  <img src="images/women/wj_11.png" alt="BELT">
                  <span>BELT</span>
               </li>
               <li data-category="LADIES_BRACELET">
                  <img src="images/women/wj_5.jpg" alt="LADIES BRACELET">
                  <span>LADIES BRACELET</span>
               </li>
               <li data-category="groceries">
                  <img src="images/women/wj_1.png" alt="HANGING TOPS">
                  <span>HANGING TOPS</span>
               </li>
               <li data-category="home-lifestyle">
                  <img src="images/women/wj_7.png" alt="PANDENT SET">
                  <span>PANDENT SET</span>
               </li>
               <li data-category="electronics">
                  <img src="images/women/wj_12.png" alt="BABY TOPS">
                  <span>BABY TOPS</span>
               </li>
               <li data-category="fashion">
                  <img src="images/women/wj_9.jpg" alt="BALI">
                  <span>BALI</span>
               </li>
               <li data-category="industrial-supplies">
                  <img src="images/women/wj_8.png" alt="BANGLE">
                  <span>BANGLE</span>
               </li>
               
             </ul>
         </div>
         <div class="left-menu">
            <h3 id="Category">
               All
            </h3>
            <ul>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>

               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>
               <li class="subCat electronics">
                  electronics
               </li>

               <li class="subCat fashion">
                  fashion
               </li>
               <li class="subCat fashion">
                  fashion
               </li>
               <li class="subCat fashion">
                  fashion
               </li>

               
             </ul>
         </div>
                            <article class="mb-2 fw-bold text-secondary">
                                <input type="checkbox" class="form-check-input me-1 border-grey" name="" id="getcateall" checked> 
                                <label class="" for="ALL">ALL</label>
                            </article>

                            <?php
                                foreach ($category_name as $key => $value) 
                                {?>
                                    <article class="mb-2 fw-bold text-secondary">
                                        <input type="checkbox" class="form-check-input me-1 border-grey getcate dummyChk" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" name="getcate" id="getcate<?= $value['id'];?>" value="<?= $value['id'];?>" onclick="getprodbycate(1,0, 'id', 'DESC');"> 
                                        <label class="" for="<?= $value['id'];?>"><?= $value['category_name'];?></label>
                                    </article>
                                <?php
                                }
                            ?>
                       

            

        <section class="right-content">
            <section class="row" id="alldata">
                
            </section>

            <section class="row" id="pagination">
            </section>
        </section>
    </div>
</main>


<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="js/style.js"></script>

<?php include 'footer.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">

    getprodList(1,0, 'sku', 'DESC');
    getcartcount();

    function getprodList(page,id,orderBy, shortBy) 
    {
        $.ajax({
            type: "POST",
            url: "action/actionAjax.php",
            data: {action: 'getproduct-custom', page: page, orderBy: orderBy, shortBy: shortBy},
            beforeSend: function() 
            {
            },
            success: function(data) 
            {
                var dataArr = jQuery.parseJSON(data);
                $("#alldata").html(dataArr.datatable);
                $("#pagination").html(dataArr.msg);

                sitePlusMinus();
            }
        });
    }

    function addtocart(id)
    {
        $.ajax({
              type: "POST",
              url: "action/actionAjax.php",
              data: {action: "cart-add-costom-out",id:id},
              beforeSend: function() 
              {
              },
              success: function(data) 
              {
                var data = data.trim();
                if(data > 1)
                {
                    $('#p_name'+id).addClass('d-none');
                    $('#p_name_cart'+id).addClass('d-none');
                    $('#qtydiv'+id).removeClass('d-none');
                    $('#rowid'+id).val(data);
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
                $('#p_name'+prod_id).removeClass('d-none');
                $('#p_name_cart'+prod_id).removeClass('d-none');
                $('#qtydiv'+prod_id).addClass('d-none');
                $('#quantity_'+prod_id).html('1');
            }
            getcartcount();
          },
          error : function(e) 
          {
            alert('something went wrong..!');
          }
        });
    }

    function getprodbycate(page,id,orderBy, shortBy)
    {
        var selectedValues = [];
        $('input[name="getcate"]:checked').each(function() 
        {
            selectedValues.push($(this).val());
        });

        var category = selectedValues.join(",");
        if(category == '')
        {
            // alert('Please select altest one category..!');
            var allChecked = true;
            $('#getcateall').prop('checked', allChecked);
            getprodList(1,0, 'id', 'DESC');
            return;
        }

        getsubcategory(category);

        var costom = 2;

        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "getproductbycategory",category:category,page: page, orderBy: orderBy, shortBy: shortBy,costom:costom},
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

    function searchbygrm(page,id,orderBy, shortBy)
    {

        var from = $('#min').val();
        var to = $('#max').val();
        var costom = 2;

        var selectedValues = [];
        $('input[name="getcate"]:checked').each(function() 
        {
            selectedValues.push($(this).val());
        });

        var category = selectedValues.join(",");

        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "getproductbygrm",from:from,to:to,costom:costom,page: page, orderBy: orderBy, shortBy: shortBy,category:category},
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

    function searchbygrmMob(page,id,orderBy, shortBy)
    {
        var from = $('#gram-min').val();
        var to = $('#gram-max').val();
        var costom = 2;
        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "getproductbygrmMob",from:from,to:to,costom:costom,page: page, orderBy: orderBy, shortBy: shortBy},
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

    function updateqty(id,qty)
    {
        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "update-cart-qty",qty:qty,id:id},
          beforeSend: function() 
          {
          },
          success: function(data) 
          {
            //location.reload();
          },
          error : function(e) 
          {
            alert('something went wrong..!');
          }
        });
    }

    function getsubcategory(category)
    {
        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "getsubcategory1",category:category},
          beforeSend: function() 
          {
          },
          success: function(data) 
          {
            var data = data.trim();
            if(data !='')
            {
                $('#subcategorylist').html(data);
            }
          },
          error : function(e) 
          {
            alert('something went wrong..!');
          }
        });
    }

    $(document).ready(function() 
    {
        // When parent checkbox is clicked
        $('#getcateall').change(function() 
        {
            // var isChecked = $(this).prop('checked');
            // $('input[name="getcate"]').prop('checked', isChecked);
            getprodbycate();
        });

        // When any child checkbox is clicked
        $('.getcate').change(function() 
        {
            var allChecked = true;
            $('.getcate').each(function() 
            {
                if (!$(this).prop('checked')) 
                {
                    allChecked = false;
                    return false; // Exit the loop early
                }
            });
            $('#getcateall').prop('checked', allChecked);
        });
    });
</script>

<script>
    function showcategory()
    {
        let category = document.querySelector(".category-sec");
        let subCategory = document.querySelector(".sub-category-sec");
        category.classList.add("block");
        subCategory.classList.remove("block"); // This line ensures that only one section is displayed at a time
        getcategory();
    }

    function showsubcategory(category)
    {
        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "getsubcategory",category:category},
          beforeSend: function() 
          {
          },
          success: function(data) 
          {
            var data = data.trim();
            if(data !='')
            {
                let subCategory = document.querySelector(".sub-category-sec");
                subCategory.classList.add("block");
                $('#subcategorylist').html(data);
            }
          },
          error : function(e) 
          {
            alert('something went wrong..!');
          }
        });
    }

    function closecategory()
    {
        let category = document.querySelector(".category-sec");
        let subCategory = document.querySelector(".sub-category-sec");
        category.classList.remove("block");
        subCategory.classList.remove("block");

        let checkboxes = document.querySelectorAll('.getcatemob');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = false;
        });

        let checkboxes1 = document.querySelectorAll('.subcatemob');
        checkboxes1.forEach(function(checkbox) {
            checkbox.checked = false;
        });
    }

    function closesubcategory()
    {
        let category = document.querySelector(".category-sec");
        let subCategory = document.querySelector(".sub-category-sec");
        subCategory.classList.remove("block");

        let checkboxes = document.querySelectorAll('.subcatemob');

        checkboxes.forEach(function(checkbox) {
            checkbox.checked = false;
        });
    }

    function getprodbycatemob(page,id,orderBy, shortBy)
    {
        var selectedValues = [];
        $('input[name="getcatemob"]:checked').each(function() 
        {
            selectedValues.push($(this).val());
        });

        var category = selectedValues.join(",");
        if(category == '')
        {
            alert('Please select altest one category..!');
            var allChecked = true;
            $('#getcateall').prop('checked', allChecked);
            getprodList(1,0, 'id', 'DESC');
            return;
        }

        showsubcategory(category);


        var costom = 2;

        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "getproductbycategorymob",category:category,page: page, orderBy: orderBy, shortBy: shortBy,costom:costom},
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

    function getcategory()
    {
        $.ajax({
          type: "POST",
          url: "action/actionAjax.php",
          data: {action: "getcategory"},
          beforeSend: function() 
          {
          },
          success: function(data) 
          {
            $('#categorylist').html(data);
          },
          error : function(e) 
          {
            alert('something went wrong..!');
          }
        });
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () 
    {
        const categoryCheckboxes = document.querySelectorAll('.dummyChk');
        const subCategoryBox = document.querySelector('.sub-category-box');
        let sub_cat_cutBtn = document.querySelector("#dummycut");
        categoryCheckboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                let anyChecked = Array.from(categoryCheckboxes).some(checkbox => checkbox.checked);
                if (anyChecked) {
                    subCategoryBox.style.left = '101%'; // Move in from left
                } else {
                    subCategoryBox.style.left = '-170%'; // Move out to left
                }
            });
        });
        sub_cat_cutBtn.addEventListener("click",function(){
            subCategoryBox.style.left = '-170%'; // Move out to left
        })
    });
</script>

<script type="text/javascript">
    var sitePlusMinus = function() 
    {
        var value,quantity = document.getElementsByClassName('quantity-container');
        function createBindings(quantityContainer) 
        {
          var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
          var increase = quantityContainer.getElementsByClassName('increase')[0];
          var decrease = quantityContainer.getElementsByClassName('decrease')[0];
          increase.addEventListener('click', function (e) { increaseValue(e, quantityAmount); });
          decrease.addEventListener('click', function (e) { decreaseValue(e, quantityAmount); });
        }

        function init() 
        {
            for (var i = 0; i < quantity.length; i++ ) 
            {
                createBindings(quantity[i]);
            }
        };

        function increaseValue(event, quantityAmount,test) 
        {
            id = quantityAmount.id;
            result1 =  id.split("_");
            result = result1[1];
            int_result = parseInt(result);
            value = parseInt(quantityAmount.innerHTML, 10);
            value = isNaN(value) ? 1 : value;
            value++;
            quantityAmount.innerHTML = value;

            var rowid = $('#rowid'+result).val();
            updateqty(rowid,value);
        }

        function decreaseValue(event, quantityAmount,test) 
        {
                id = quantityAmount.id;
                result1 =  id.split("_");
                result = result1[1];
                int_result = parseInt(result);
                value = parseInt(quantityAmount.innerHTML, 10);
                value = isNaN(value) ? 1 : value;
                if (value > 1) value--;
                quantityAmount.innerHTML = value;
                var rowid = $('#rowid'+result).val();
                updateqty(rowid,value);
        }
        init();
    };

    $(function() 
    { 
        sitePlusMinus(); 
    });
</script>

    

