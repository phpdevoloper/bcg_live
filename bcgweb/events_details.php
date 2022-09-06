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
            <li class=""><a href="events_details.php">Milestones/ Major Events</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="section">
            <h3 class="text-center txt" style="color: #299adc;">Milestones/ Major Events</h3>
        </div>
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <div class="section_title">
                </div>
                <?php $sql = "SELECT * FROM events ORDER BY date_from Desc"; 
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_all($res);
                        $i = 1;
                ?>
                <section id="about">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <div class="testimonial-item" style="padding-top: 20px;">
                        <a href="archive_events.php" class="archive_btn float-right">Archive <i class="fa fa-archive"></i> </a><br><br>
                            <table id="example" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead style="background: #a2dcfd; font-size: 15px;">
                                    <tr>
                                        <th style="width: 2%">S.No</th>
                                        <th style="width: 30%">Event Title</th>
                                        <th style="width: 40%">Event Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 13px;">
                                    <?php foreach($result as $value){ ?>
                                    <tr>
                                        <td><?php echo $i;//$value['event_id'];?></td>
                                        <td><?php echo $value['event_title'];?></td>
                                        <td><?php echo $value['event_desc'];?></td>
                                        <td><?php echo date('d/m/Y',strtotime($value['date_from']));?></td>
                                        <?php if($value['date_to'] == ''){ ?>
                                            <td class="text-center"><?php echo '-';?></td>    
                                        <?php }else{ ?>
                                            <td><?php echo date('d/m/Y',strtotime($value['date_to']));?></td>
                                        <?php } ?>
                                    <?php $i++;
                                 } ?>
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
            [10, 25, 50, 'All'],
        ],
    });
    $(".dataTables_length").addClass("bs-select");
  });
</script>