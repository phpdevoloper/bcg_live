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
                        <div class="page-header">
                           <ul class="breadcrumbs">
                              <li class="nav-item">
                                 <a href="#">Director Desk</a>
                              </li>
                              <li class="separator">
                                 <i class="flaticon-right-arrow"></i>
                              </li>
                              <li class="nav-item">
                                 <a href="#">Director Message</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                  <?php $sql = "SELECT * FROM director_desk";
                     $res    = pg_query($db,$sql);
                     $list   = pg_fetch_assoc($res);
                  ?>
                  <form id="edit_messa">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label for="name">Director Message</label>
                              <input type="hidden" class="form-control" id="Director_id" name="director_id" value="<?php echo $list['dir_desk_id'];?>">
                              <textarea class="form-control" id="director_message" rows="30%"></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer no-bd">
                        <button type="submit" id="addRowButton" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                     </div>
                  </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include('inc/footer.php');


?>
<script>
   var content_desc = <?php echo json_encode($list['director_message']);?>;
   
	tinymce.init({
    selector: "textarea#director_message",
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
  // edit the director message
 
</script>
	