<?php include('inc/header.php');?>
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
          <ul class="breadcrumbs">
              <li class="nav-home">
            <a href="#">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">About Us</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Objectives Of BCGVL</a>
        </li>
    </ul>
</div>
<h4 class="page-title">About Us</h4>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Objectives of BCGVL</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="form-group">
                    <input type="hidden" name="content_id" id="content_id" value="OBJ">
                    <textarea class="form-control" id="objective_bcg" rows="5">
                    </textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button class="btn btn-success updateobj">Submit</button>
              <button class="btn btn-danger">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('inc/footer.php');  
 $sql    = "SELECT * FROM about_us WHERE content_id = 'OBJ'";
 $res    = pg_query($db,$sql);
 $result = pg_fetch_assoc($res);
?>
<script>
  var content_desc = <?php echo json_encode($result['content_description']);?>;
  tinymce.init({
    selector: "textarea#objective_bcg",
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
    setup: function (editor) {
      editor.on('init', function (e) {
        editor.setContent(content_desc);
      });
    }
});

//  About us updating;
$(".updateobj").on("click", function () {
    var content_id = $("#content_id").val();
    var content = tinymce.get("objective_bcg").getContent();
    var updated_by = <?php echo json_encode($_SESSION['user']['uname']); ?>;
    // alert(updated_by);
    // console.log(content_id);
    $.ajax({
      type: "POST",
      url: "updateOBJ.php",
      data: {
        content_id: content_id,
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
        }
      },
    });
  });
</script>