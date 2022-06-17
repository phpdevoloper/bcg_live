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
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="form-group">
                    <input type="hidden" name="content_id" id="content_id" value="ABG">
                    <textarea class="form-control" id="about_bcg" rows="15%">
                    </textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button class="btn btn-success updatehis">Submit</button>
              <a href="viewABT.php" class="btn btn-danger">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('inc/footer.php');  
 $sql    = "SELECT * FROM about_us WHERE content_id = 'ABG'";
 $res    = pg_query($db,$sql);
 $result = pg_fetch_assoc($res);
?>
<script>
  var content_desc = <?php echo json_encode($result['content_description'] ??'');?>;
  tinymce.init({
    selector: "textarea#about_bcg",
    plugins:
      "a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker",
    toolbar:
      "a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents",
    toolbar_mode: "floating",
    statusbar: false,
     /* enable title field in the Image dialog*/
    image_title: true,
    /* enable automatic uploads of images represented by blob or data URIs*/
    automatic_uploads: true,
    /*
      URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
      images_upload_url: 'postAcceptor.php',
      here we add custom filepicker only to Image dialog
    */
    file_picker_types: 'image',
    /* and here's our custom image picker*/
    file_picker_callback: function (cb, value, meta) {
      var input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');

      /*
        Note: In modern browsers input[type="file"] is functional without
        even adding it to the DOM, but that might not be the case in some older
        or quirky browsers like IE, so you might want to add it to the DOM
        just in case, and visually hide it. And do not forget do remove it
        once you do not need it anymore.
      */

      input.onchange = function () {
        var file = this.files[0];

        var reader = new FileReader();
        reader.onload = function () {
          /*
            Note: Now we need to register the blob in TinyMCEs image blob
            registry. In the next release this part hopefully won't be
            necessary, as we are looking to handle it internally.
          */
          var id = 'blobid' + (new Date()).getTime();
          var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
          var base64 = reader.result.split(',')[1];
          var blobInfo = blobCache.create(id, file, base64);
          blobCache.add(blobInfo);

          /* call the callback and populate the Title field with the file name */
          cb(blobInfo.blobUri(), { title: file.name });
        };
        reader.readAsDataURL(file);
      };

      input.click();
    },
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
    setup: function (editor) {
      editor.on('init', function (e) {
        editor.setContent(content_desc);
      });
    }
});

//  About us updating;
$(".updatehis").on("click", function () {
    var content_id = $("#content_id").val();
    var content = tinymce.get("about_bcg").getContent();
    var updated_by = <?php echo json_encode($_SESSION['user']['uname']); ?>;
    // alert(updated_by);
    // console.log(content_id);
    $.ajax({
      type: "POST",
      url: "updateABG.php",
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