<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<style>
    ul {
        list-style: none !important;
        margin-bottom : 0px;
    }
</style>

<!-- Home -->
<!-- <div class="banner">
    <img src="images/about.jpg" alt="" />
</div> -->
<!-- product description -->
<div class="about">
    <section>
        <ul class="breadcrumb wizard">
            <li class="completed"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class=""><a href="staff_list.php">Documents</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="section">
            <h3 class="text-center txt" style="color: #299adc;">Recruitment Rules</h3>
        </div>
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <div class="section_title">
                </div>
                <?php $sql = "SELECT * FROM documents_bcg WHERE doc_cate='RECR' ORDER BY doc_id ASC"; 
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_all($res);
                        $i=0;
                ?>
                <section id="about">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <div class="testimonial-item" style="padding-top: 20px;">
                            <table id="example" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead style="background: #a2dcfd; font-size: 20px; vertical-align: middle;">
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Title</th>
                                        <th>file</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 13px;">
                                <?php foreach($result as $value){ 
                                    ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $value['doc_title'];?></td>
                                        <td><a href="<?php echo $value['doc_attachment'];?>" target="_blank">
                                        <img src="images/pdf.png" class="ficon" alt="">view</a></td>
                                <?php $i++; }?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>
<script>
    $(document).ready(function () {
    $("#example").DataTable();
    $(".dataTables_length").addClass("bs-select");
  });
</script>