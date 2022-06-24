<?php 
	 include('inc/dbconnection.php');
	 include('inc/header.php');
	 $base_url = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 
?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="edit_btn">
                                <a href="editProduct.php" id="editBasicInline" class="btn btn-primary">Edit</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="page-header">
                                    <ul class="breadcrumbs">
                                        <li class="nav-item">
                                            <a href="objectives_of_bcgvl.php">Products</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                    </ul>
                                    <div>
                                        <select class="form-control" id="pro_name">
                                            <option value="">Choose Product</option>
                                            <?php $sql = "SELECT * FROM product";
                                                $exe = pg_query($db,$sql);
                                                $result = pg_fetch_all($exe);
                                                foreach ($result as $value) { ?>
                                                <option value="<?php echo $value['product_id']?>"><?php echo $value['product_name']?></option>
                                            <?php  } ?>
                                            <option value="">Add New Product</option>
                                        </select>

                                        <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header no-bd">
                                                        <h5 class="modal-title">
                                                            <span class="fw-mediumbold">
                                                            Add New</span>
                                                            <span class="fw-light">
                                                                Product
                                                            </span>
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="addProduct">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="qualifi" class="pro">Product Title</label>
                                                                        <input type="text" class="form-control" name="product_title" id="product_title">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="qualifi" class="pro">Product Image</label>
                                                                        <input type="file" class="form-control" name="product_img" id="product_img">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="qualifi" class="pro">Description</label>
                                                                        <textarea class="form-control" name="pro_desc" id="pro_desc" cols="20" rows="10"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer" style="justify-content: center !important;">
                                                                <button type="submit" id="addRowButton"
                                                                    class="btn btn-primary">Submit</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="product_section">
                                    <div class="content_pro"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php');?>
<script>
  var content_desc <?php //echo json_encode($result['content_description']);?>;
  tinymce.init({
    selector: "textarea#pro_desc",
    plugins: ["advlist autolink textcolor colorpicker lists link image  charmap print anchor",
                    "searchreplace visualblocks code",
                    "insertdatetime media paste codesample table preview"
    ],
    toolbar: "preview undo redo | fontselect styleselect fontsizeselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample action section button | custom_button | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol ",
    toolbar_mode: "floating",
    tinycomments_mode: "embedded",
    tinycomments_author: "Author name",
    statusbar: false,
    // setup: function (editor) {
    //   editor.on('init', function (e) {
    //     editor.setContent(content_desc);
    //   });
    // }
});

//  About us updating;
// $(".updateobj").on("click", function () {
//     var content_id = $("#content_id").val();
//     var content = tinymce.get("objective_bcg").getContent();
//     var updated_by = <?php //echo json_encode($_SESSION['user']['uname']); ?>;
//     // alert(updated_by);
//     // console.log(content_id);
//     $.ajax({
//       type: "POST",
//       url: "updateOBJ.php",
//       data: {
//         content_id: content_id,
//         content_desc: content,
//         updated_by: updated_by,
//       },
//       success: function (data) {
//         if (data == 1) {
//           swal({
//             type: "success",
//             title: "Done!",
//             html: "Successfully Updated",
//           });
//         }
//       },
//     });
//   });
</script>