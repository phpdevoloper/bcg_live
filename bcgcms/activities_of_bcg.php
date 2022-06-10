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
            <a href="#">About BCG</a>
        </li>
    </ul>
</div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Activities</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="form-group">
                    <input type="hidden" name="content_id" id="content_id" value="ACT">
                    <textarea class="form-control" id="activity" rows="5">
                    </textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button class="btn btn-success updatehis">Submit</button>
              <button class="btn btn-danger">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('inc/footer.php');  
 $sql    = "SELECT * FROM about_us WHERE content_id = 'ACT'";
 $res    = pg_query($db,$sql);
 $result = pg_fetch_assoc($res);
?>
<script>
  var content_desc = <?php echo json_encode($result['content_description'] ??'');?>;
  tinymce.init({
    selector: "textarea#activity",
    plugins:
      "a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker",
    toolbar:
      "a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents",
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
    var content = tinymce.get("activity").getContent();
    var updated_by = <?php echo json_encode($_SESSION['user']['uname']); ?>;
    $.ajax({
      type: "POST",
      url: "updateACT.php",
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
          });
        }
      },
    });
  });
</script>