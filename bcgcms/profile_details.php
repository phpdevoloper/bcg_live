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
                              <a href="#" class="sub_bread">Director Desk</a>
                           </li>
                           <li class="separator">
                              <i class="flaticon-right-arrow"></i>
                           </li> 
                           <li class="nav-item">
                              <a href="profile_details.php">Profile Details</a>
                           </li>
                        </ul>
                     </div>
                     </div>
                  </div>
                  <div class="card-body">
                  <form id="edit_pro">
                     <div class="row">
                        <div class="col-sm-12">
                           <?php $sql = "SELECT * FROM director_desk";
                              $res = pg_query($db,$sql);
                              $list = pg_fetch_assoc($res);
                           ?>
                           <div class="form-group">
                              <input type="hidden" class="form-control" id="Director_id" name="director_id" 
                              value="<?php echo $list['dir_desk_id'] ?? ''; ?>">
                              <div class="held">
                                <h5><?php echo $list['director_position'] ?? ''; ?></h5>
                                <img src="<?php echo $list['director_photo'] ?? ''; ?>" alt="">
                            </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email2">Short profile</label>
                              <input type="file" class="form-control" id="short_pro" name="short_pro">
                              <label id="short"><?php echo $list['short_profile'] ?? ''; ?></label>
                           </div>
                        </div>   
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email2">Detailed profile</label>
                              <input type="file" class="form-control" id="detail_pro" name="detail_pro" onchange=''>
                              <label id="detail"><?php echo $list['detail_profile'] ?? ''; ?></label>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer no-bd">
                        <button type="submit" id="addRowButton" class="btn btn-primary">Update</button>
                        <a href="viewProfile.php" class="btn btn-primary">cancel</a>
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
	function makeThumb(page) {
  // draw page to fit into 96x96 canvas
  var vp = page.getViewport(1);
  var canvas = document.createElement("canvas");
  canvas.width = canvas.height = 96;
  var scale = Math.min(canvas.width / vp.width, canvas.height / vp.height);
  return page.render({canvasContext: canvas.getContext("2d"), viewport: page.getViewport(scale)}).promise.then(function () {
    return canvas;
  });
}

// var getDoc = $('#short_pro').val();
// pdfjsLib.getDocument(getDoc).promise.then(function (doc) {
//   var pages = []; while (pages.length < doc.numPages) pages.push(pages.length + 1);
//   return Promise.all(pages.map(function (num) {
//     // create a div for each page and build a small canvas for it
//     var div = document.createElement("div");
//     document.body.appendChild(div);
//     return doc.getPage(num).then(makeThumb)
//       .then(function (canvas) {
//         div.appendChild(canvas);
//     });
//   }));
// }).catch(console.error);
</script>
	