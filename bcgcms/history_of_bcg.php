<?php include('inc/header.php');?>
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
                      <a href="history_of_bcg.php">History Of BCG</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="form-group">
                    <input type="hidden" name="content_id" id="content_id" value="HIS">
                    <textarea class="form-control" id="history_of" rows="15%">
                    </textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button class="btn btn-success updatehis">Submit</button>
              <a href="viewHIS.php" class="btn btn-danger">Cancel</a >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('inc/footer.php');  
 $sql    = "SELECT * FROM about_us WHERE content_id = 'HIS'";
 $res    = pg_query($db,$sql);
 $result = pg_fetch_assoc($res);
?>
<script>
  var content_desc = <?php echo json_encode($result['content_description'] ??'');?>;
  tinymce.init({
    height : "480",
    selector: "textarea#history_of",
    plugins: ["advlist autolink textcolor colorpicker lists link image  charmap print anchor",
                    "searchreplace visualblocks code",
                    "insertdatetime media paste codesample table preview"
    ],
    toolbar: "preview undo redo | fontselect styleselect fontsizeselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample action section button | custom_button | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol ",
    toolbar_mode: "floating",
    tinycomments_mode: "embedded",
    statusbar: false,
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
    paste_data_images: true,
    setup: function (editor) {
      editor.on('init', function (e) {
        editor.setContent(content_desc);
      });
    }
});

//  About us updating;
$(".updatehis").on("click", function () {
    var content_id = $("#content_id").val();
    var content = tinymce.get("history_of").getContent();
    var updated_by = <?php echo json_encode($_SESSION['user']['uname']); ?>;
    // alert(updated_by);
    // console.log(content_id);
    $.ajax({
      type: "POST",
      url: "updateHIS.php",
      data: {
        content_id: content_id,
        content_desc: content,
        updated_by: updated_by,
      },
      success: function (data) {
        if (data == 1) {
          swal({
            type: "success",
            title: "Successfully Updated!",
          }).then(function () {
            location.reload();
          });
        }
      }
    });
  });
</script>