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
                                        <a href="basic_details.php">Basic Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="update_Basic">
                            <div class="row">
                                <?php $sql = "select * from director_desk"; 
                                $res = pg_query($db,$sql);
                                $result = pg_fetch_assoc($res);
                                    ?>
                                <div class="col-lg-3 text-center">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" name="director_photo" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url('<?php echo $result['director_photo'];?>');">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <table class="table">
                                        <tbody class="profile">
                                            <tr>
                                                <td>Name</td>
                                                <td>
                                                    <input type="hidden" class="custom_text" id="director_id" name="director_id" value="<?php echo $result['dir_desk_id'] ?? '';?>">
                                                    <input type="text" id="director_name" name="director_name" class="custom_text" value="<?php echo $result['director_name'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Designation</td>
                                                <td>
                                                    <input type="text" name="director_position" id="director_position" class="custom_text" value="<?php echo $result['director_position'];?>">
                                                </td>
                                            <tr>
                                                <td>Qualification</td>
                                                <td>
                                                    <textarea name="director_qualification" id="director_qualification" class="custom_text" cols="60" rows="5"><?php echo $result['director_qualification'];?></textarea>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="held">
                                <h5>Position held</h5>
                                <textarea name="position_held" id="position_held"></textarea>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="basic_details1.php" id="editBasicInline" class="btn btn-danger">cancel</a>
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

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
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