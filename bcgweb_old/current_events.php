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
            <li class="completed"><a href="javascript:void(0);">Events</a></li>
            <li class=""><a href="current_events.php">Current Events</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="section">
            <h3 class="text-center txt" style="color: #299adc;">Current Events</h3>
        </div>
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <div class="section_title">
                </div>
                <?php $current_date = date("Y/m/d");
                      $sql = "SELECT * FROM events where date_from >= '$current_date' ORDER BY event_id ASC";
                    //   echo $sql;exit; 
                      $res = pg_query($db,$sql);
                      $result = pg_fetch_all($res);
                        //    var_dump($value['position_held']);die;
                ?>
                <section id="about">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <div class="testimonial-item" style="padding-top: 20px;">
                            <table id="example" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead style="background: #a2dcfd; font-size: 15px;">
                                    <tr>
                                        <th style="width: 1%">S.No</th>
                                        <th style="width: 30%">Event Title</th>
                                        <th style="width: 40%">Event Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 13px;">
                                <?php foreach($result as $value){ 
                                    ?>
                                    <tr>
                                        <td><?php echo $value['event_id'];?></td>
                                        <td><a href="<?php echo $value['event_file'];?>"><?php echo $value['event_title'];?></a></td>
                                        <td><?php echo $value['event_desc'];?></td>
                                        <td><?php echo $value['date_from'];?></td>
                                        <td><?php echo $value['date_to'];?></td>
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
    $("#example").DataTable();
    $(".dataTables_length").addClass("bs-select");
  });
</script>