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
                            <div class="row">
                                <?php $sql = "select * from director_desk"; 
                                  $res = pg_query($db,$sql);
                                  $result = pg_fetch_assoc($res);
                                //   var_dump($result);
                                    ?>
                                <div class="col-md-4">
                                    <div>
                                      <img class="profile" src="<?php echo $result['director_photo'];?>" alt="">                  
                                    </div>
                                </div>
                                <div class="col-md-8">
                                <table class="table">
                                     <tbody class="profile">
                                        <tr>
                                            <td>Name</td>
                                            <td><?php echo $result['director_name'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Designation</td>
                                            <td><?php echo $result['director_position'];?></td>
                                        <tr>
                                            <td>Qualification</td>
                                            <td><?php echo $result['director_qualification'];?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="held">
                                    <h5>Position held</h5>
                                    <p><?php echo $result['position_held'];?></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="basic_details.php" id="editBasicInline"
                                    class="btn btn-primary">Edit</a>
                        </div>
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
    plugins:
      "advlist link autolink lists media anchor imagetools image save table spellchecker media lists contextmenu insertdatetime preview",
    toolbar:
      "advlist link anchor imagetools image save table spellchecker media lists contextmenu insertdatetime preview",
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