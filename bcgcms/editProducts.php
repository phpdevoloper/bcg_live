<?php 
	include('inc/dbconnection.php');
	include('inc/header.php');
	 $base_url = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 
    //  var_dump($_GET);die;
?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form id="editProduct">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <!-- <h4 class="card-title">Basic Details</h4> -->
                                    <div class="page-header">
                                        <ul class="breadcrumbs">
                                            <li class="nav-item">
                                                <a href="product.php">Products</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php $sql = "select * from product where product_id = '".$_GET['product_id']."'"; 
                                $res = pg_query($db,$sql);
                                $result = pg_fetch_assoc($res);
                                ?>
                                <table class="table">
                                    <tbody class="profile">
                                        <tr>
                                            <td class="held"><h5>Product Name</h5></td>
                                            <td>
                                                <input type="hidden" name="product_id" id="product_id" class="custom_text" value="<?php echo $result['product_id'];?>">
                                                <input type="text" name="product_name" id="product_name" class="custom_text" value="<?php echo $result['product_name'];?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="held"><h5>Product Name</h5></td>
                                            <td>
                                                <input type="file" name="product_img" id="product_img" class="custom_text"  accept="image/png, image/jpeg, image/gif">
                                                <img src="<?php echo $result['product_image'];?>" style="width:100px; height:80px; border: 2px solid" alt="">
                                                <label for="" class="text-center" style="color:green !important;font-size:17px !important">
                                                <?php echo $result['product_image'];?></label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="held">
                                    <h5>Product Description</h5>
                                    <div>
                                        <textarea name="product_desc" id="product_desc"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="product.php" id="editBasicInline" class="btn btn-danger">cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php');?>
<script>
  var content_desc = <?php echo json_encode($result['product_desc'] ?? '');?>;
  tinymce.init({
    height : "480",
    selector: "textarea#product_desc",
    plugins: ["advlist autolink textcolor colorpicker lists link image  charmap print anchor",
                    "searchreplace visualblocks code",
                    "insertdatetime media paste codesample table preview"
    ],
    toolbar: "preview undo redo | fontselect styleselect fontsizeselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample action section button | custom_button | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol ",
    toolbar_mode: "floating",
    tinycomments_mode: "embedded",
    tinycomments_author: "Author name",
    statusbar: false,
    setup: function (editor) {
      editor.on('init', function (e) {
        editor.setContent(content_desc);
      });
    }
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result+')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>