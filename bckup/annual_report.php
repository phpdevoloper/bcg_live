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
            <li class=""><a href="#">Document</a></li>
            <li class=""><a href="annual_report.php">Annual Reports</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="section">
            <h3 class="text-center txt" style="color: #299adc;">Annual Reports</h3>
        </div>
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <div class="section_title">
                </div>
                <?php $sql = "SELECT * FROM documents_bcg where doc_cate = 'ANNUAL' and report_status = 'L' order by doc_id"; 
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_all($res);
                        //    var_dump($value['position_held']);die;
                ?>
                <section id="about">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <div class="testimonial-item" style="padding-top: 20px;">
                            <table id="example" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead style="background: #a2dcfd; font-size: 20px; vertical-align: middle;">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Title</th>
                                        <th>Year</th>
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

                                    $i = 1;
                                    foreach($result as $value){ ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $value['doc_title'];?></td>
                                        <td><?php echo $value['year_of_report'];?></td>
                                        <td><a href="uploads/Documents/<?php echo $value['doc_attachment'];?>" target="_blank">
                                        <img src="images/pdf.png" class="ficon" alt=""> View(<?php
                                        echo $file_size = formatSizeUnits($value['file_size']);
                                        ?>)</a></td>
                                    </tr>
                                    <?php $i++; } ?>
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