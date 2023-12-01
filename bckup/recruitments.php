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
            <li class=""><a href="staff_list.php">Recruitments</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="section">
            <h3 class="text-center txt" style="color: #299adc;">Recruitments</h3>
        </div>
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <div class="section_title">
                </div>
                <?php $sql = "SELECT * FROM recruitment where last_date_to_apply >= current_date and  rec_dstatus = 'L'"; 
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
                                function formatSizeUnits($bytes)
                                {
                                    if ($bytes >= 1073741824) {
                                        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                    } elseif ($bytes >= 1048576) {
                                        $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                    } elseif ($bytes >= 1024) {
                                        $bytes = number_format($bytes / 1024, 2) . ' KB';
                                    } elseif ($bytes > 1) {
                                        $bytes = $bytes . ' bytes';
                                    } elseif ($bytes == 1) {
                                        $bytes = $bytes . ' byte';
                                    } else {
                                        $bytes = '0 bytes';
                                    }

                                    return $bytes;
                                }

                                if (is_array($result) || is_object($result)){
                                    foreach($result as $value){ 
                                        ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $value['rect_title'];?></td>
                                            <td><?php echo $dt = date("d-m-Y", strtotime($value['date_of_announce']));?></td>
                                            <td><?php echo $tt = date("d-m-Y", strtotime($value['last_date_to_apply']));?></td>
                                            <td><a href="uploads/recruitment/<?php echo $value['upload_advt'];?>" target="_blank">
                                            <img src="images/pdf.png" class="ficon" alt=""> View(<?php echo $file_size = formatSizeUnits($value['file_size']);?>)
                                            </a></td>
                                            <!-- <td><?php //$directory_s = $value['doc_attachment'];
                                            //echo $file_size = round($value['file_size'] / 1024, 2).'KB';?></td> -->
                                    <?php $i++; } 
                                }?>
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
    $("#example").DataTable({
        responsive: true,
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
    });
    $(".dataTables_length").addClass("bs-select");
  });
</script>