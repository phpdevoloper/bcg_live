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
                    <a href="#" class="sub_bread">Divisions</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="div_production.php">Production</a>
                </li>
              </ul>
            </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="form-group">
                    <input type="hidden" name="content_id" id="content_id" value="PRO">
                    <textarea class="form-control" id="production" rows="5">
                    </textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button class="btn btn-success updateadm">Submit</button>
              <a href="viewOBJ.php" class="btn btn-danger">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('inc/footer.php');  
 $sql    = "SELECT * FROM division WHERE div_name='PRO'";
 $res    = pg_query($db,$sql);
 $result = pg_fetch_assoc($res);
?>
<script>
  var content_desc = <?php echo json_encode(html_entity_decode($result['div_content'])??'');?>;
  tinymce.init({
    selector: "textarea#production",
    height:500,
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

//  About us updating;
$(".updateadm").on("click", function () {
    var div_id = $("#content_id").val();
    var content = tinymce.get("production").getContent();
    var updated_by = <?php echo json_encode($_SESSION['user']['uname']); ?>;
    // alert(updated_by);
    // console.log(content_id);
    $.ajax({
      type: "POST",
      url: "updateAdministration.php",
      data: {
        div_id: div_id,
        content_desc: content,
        updated_by: updated_by,
      },
      success: function (data) {
        if (data == 1) {
          swal({
            type: "success",
            title: "Done!",
            html: "Successfully Updated",
          });
          location.reload();
        }
      },
    });
  });
</script>
<?php } else{
  header("Location:index.php");
} ?>