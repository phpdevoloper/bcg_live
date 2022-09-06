<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<!-- Home -->
<!-- <div class="banner">
    <img src="images/about.jpg" alt="" />
</div> -->
<!-- product description -->
<div class="about">
    <section>
        <ul class="breadcrumb wizard">
            <li class="completed"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="completed"><a href="events_details.php">Events</a></li>
            <li class=""><a href="archive_events.php">Archived Events</a></li>
        </ul>
    </section>
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;">Archived Events</h3>
    </div>
    <div class="container aos-init aos-animate" data-aos="fade-up" style="padding-top: 38px;">
        <div class="container">
            <!-- About Content -->
            <section id="about">
                <div class="testimonial-item" style="padding-top: 20px;">
                    <div class="row">
                        <div class="col-lg-8"></div>
                        <div class="col-lg-4 text-center Groupfilter">
                            <label for="">Year</label>
                            <select class="custom-select-sm cate" id="year_drop">
                                <?php 
                                    $current_year = date('Y');
                                    $sql = "SELECT
                                    EXTRACT(year FROM date_from) AS year
                                    FROM events
                                    GROUP BY EXTRACT(year FROM date_from);"; 
                                    $res = pg_query($db,$sql);
                                    $results = pg_fetch_all($res);
                                    foreach($results as $result){ ?>
                                        <option value="<?php echo $result['year'];?>" <?php echo $current_year == $result['year']?"selected":""?>><?php echo $result['year'];?></option>
                                    <?php }?>
                            </select>
                        </div>
                    </div>
                    <table id="example" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead style="background: #a2dcfd; font-size: 15px;">
                            <tr>
                                <th style="width: 2%">S.No</th>
                                <th style="width: 30%">Event Title</th>
                                <th style="width: 40%">Event Description</th>
                                <th>Start Date</th>
                                <th style="display:none;"></th>
                                <th>End Date</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 13px;">
                            <?php  $sql = "SELECT * FROM events ORDER BY date_from Desc"; 
                            $res = pg_query($db,$sql);
                            $result = pg_fetch_all($res);
                            $j=1;
                            foreach($result as $value){ 
                                $date = DateTime::createFromFormat("Y-m-d", $value['date_from']);
                            ?>
                            <tr>
                                <td><?php echo $j;//$value['event_id'];?></td>
                                <td><?php echo $value['event_title'];?></td>
                                <td><?php echo $value['event_desc'];?></td>
                                <td><?php echo date('d/m/Y',strtotime($value['date_from']));?></td>
                                <td style="display:none;"><?php echo $date->format("Y");?></td>
                                <?php if($value['date_to'] == ''){ ?>
                                    <td class="text-center"><?php echo '-';?></td>    
                                <?php }else{ ?>
                                    <td><?php echo date('d/m/Y',strtotime($value['date_to']));?></td>
                                <?php } ?>
                            <?php $j++;
                            } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>
<script>
    $(document).ready(function () {
        table = $("#example").DataTable({

        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
        
    });
    $(".dataTables_length").addClass("bs-select");

    $('#year_drop').on('change', function () {
        console.log('sdf');
        table.columns(4).search( this.value ).draw();
    } );
  });
</script>