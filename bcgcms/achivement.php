<?php 
session_start();
if(isset($_SESSION['user'])){
include('inc/header.php');?>
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <div class="page-header">
                    <ul class="breadcrumbs">
                        <li class="nav-item">
                            <a href="#" class="sub_bread">About Us</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="achivement.php">Achivement/Milestones</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="form-group">
                    <input type="hidden" name="content_id" id="content_id" value="ACH">
                    <textarea class="form-control" id="revenue" rows="5">
                    </textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button class="btn btn-success updatehis">Submit</button>
              <a href="viewACH.php" class="btn btn-danger">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('inc/footer.php');  
 $sql    = "SELECT * FROM about_us WHERE content_id = 'ACH'";
 $res    = pg_query($db,$sql);
 $result = pg_fetch_assoc($res);
?>
<script>
  var content_desc = <?php echo json_encode($result['content_description'] ??'');?>;
  tinymce.init({
    height:400,
    selector: "textarea#revenue",
    plugins:
      "a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker",
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

//  About us updating;
$(".updatehis").on("click", function () {
    var content_id = $("#content_id").val();
    var content = tinymce.get("revenue").getContent();
    var updated_by = <?php echo json_encode($_SESSION['user']['uname']); ?>;
    $.ajax({
      type: "POST",
      url: "updateACH.php",
      data: {
        content_id: content_id,
        content_desc: content,
        updated_by: updated_by,
      },
      success: function (data) {
        if (data == 1) {
          swal({
            type: "success",
            title: "Successfully Updated",
          }).then(function () {
            location.reload();
          });
        }
      },
    });
  });
</script>
<?php }else {
  header("Location:index.php");
}?>