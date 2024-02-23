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
            <li class=""><a href="tenders.php">Tenders</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="section">
            <h3 class="text-center txt" style="color: #299adc;">Tenders(Closed)</h3>
        </div>
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <div class="section_title">
                </div>
                <?php $sql = "SELECT * FROM tenders"; 
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_all($res);
                        $i = 1; 
                ?>
                <section id="about">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <div class="testimonial-item" style="padding-top: 20px;">
                            <table id="example" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Title</th>
                                        <th>Date of Published</th>
                                        <th>Closing Date</th>
                                        <th>Documents</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 13px;">
                                <?php foreach($result as $value){ 
                                    ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $value['tender_title'];?>    </td>
                                        <td><?php echo $dt = date("d-m-Y", strtotime($value['date_of_announce']));?></td>
                                        <td><?php echo $dt = date("d-m-Y", strtotime($value['date_of_closed']));?></td>
                                        <td><a href="uploads/tenders/<?php echo $value['tenders_notice'];?>" target="_blank">   
                                          <img src="images/pdf.png" class="ficon" alt="">View(<?php echo $file_size = round($value['file_size'] / 1024, 2).'KB';?>)</a>
                                        </td>
                                <?php }?>
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
        lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"],
            ],
    });
    $(".dataTables_length").addClass("bs-select");
  });
</script>