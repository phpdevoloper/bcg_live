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
                            <div class="d-flex align-items-center">
                                <!-- <h4 class="card-title">Basic Details</h4> -->
                                <div class="page-header">
                                    <ul class="breadcrumbs">
                                        <li class="nav-item">
                                            <a href="#" class="sub_bread">Director Desk</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#">Basic Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php $sql = "select * from director_desk"; 
                                  $res = pg_query($db,$sql);
                                  $result = pg_fetch_assoc($res);
                            ?>
                            <form id="update_Basic">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="hidden" class="form-control" id="director_id"
                                                name="director_id" value="<?php echo $result['dir_desk_id'] ?? '';?>">
                                            <input type="text" class="form-control" id="director_name"
                                                name="director_name" value="<?php echo $result['director_name'] ?? '';?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group">
                                            <label for="email2">Director Photo</label>
                                            <input type="file" class="form-control" id="director_photo"
                                                name="director_photo">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Designation</label>
                                            <input type="text" class="form-control" id="director_position"
                                                name="director_position" value="<?php echo $result['director_position'] ?? ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group">
                                            <img class="js--image-preview" src="<?php echo $result['director_photo'] ??'';?>"
                                                alt="">
                                            <!-- <button type="button" id="addRowButton" class="form-text btn">upload</button> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="qualifi">Director's Qualification</label>
                                            <textarea class="form-control" id="director_qualification" name="director_qualification" rows="5">
                                            <?php echo $result['director_qualification'] ?? '';?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="comment">Position Held</label>
                                            <textarea class="form-control" id="position_held"
                                                name="position_held" rows="15%">
                                                                        </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer no-bd">
                                    <button type="submit" id="addRowButton"
                                        class="btn btn-primary">Update</button>
                                    <a href="basic_details1.php"
                                        class="btn btn-primary">cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php');?>
<script>
  var content_desc = <?php echo json_encode($result['position_held'] ?? '');?>;
  tinymce.init({
    selector: "textarea#position_held",
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
</script>