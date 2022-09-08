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
            <li class=""><a href="recruitments.php">Recruitments</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="section">
            <h3 class="text-center txt" style="color: #299adc;">Recruitments(Archived))</h3>
        </div>
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <div class="section_title">
                </div>
                <?php $sql = "SELECT * FROM recruitment order by rec_id"; 
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_all($res);
                        //    var_dump($value['position_held']);die;
                        $i = 1;
                ?>
                <section id="about">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <div class="testimonial-item" style="padding-top: 20px;">
                            <a href="archive_recruitments.php" class="archive_btn float-right">Archive <i class="fa fa-archive"></i> </a><br><br>
                            <table id="example" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead class="rec_thead">
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Title</th>
                                        <th>Date of Announcement</th>
                                        <th>Last date to apply</th>
                                        <th>Documents</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 13px;">
                                <?php 
                                if (is_array($result) || is_object($result)){
                                    foreach($result as $value){ 
                                        ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $value['rect_title'];?></td>
                                            <td><?php echo $dt = date("d-m-Y", strtotime($value['date_of_announce']));?></td>
                                            <td><?php echo $tt = date("d-m-Y", strtotime($value['last_date_to_apply']));?></td>
                                            <td><a href="uploads/recruitment/<?php echo $value['upload_advt'];?>" target="_blank">
                                            <img src="images/pdf.png" class="ficon" alt=""> View(<?php echo $file_size = round($value['file_size'] / 1024, 2).'KB';?>)
                                            </a></td>
                                    </tr>
                                    <?php $i++; } }?>
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