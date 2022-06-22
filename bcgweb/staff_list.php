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
<div class="banner">
    <img src="images/about.jpg" alt="" />
</div>
<!-- product description -->
<div class="about">
    <section>
        <ul class="breadcrumb wizard">
            <li class="completed"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="completed"><a href="javascript:void(0);">Who's who</a></li>
            <li class=""><a href="staff_list.php">Staff Details</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="section">
            <h3 class="text-center txt" style="color: #299adc;">Staff Details</h3>
        </div>
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <div class="section_title">
                </div>
                <?php $sql = "SELECT bs.*,bsd.deg_name,bsg.cate_name FROM  bcgvl_staff_details bs LEFT JOIN bcgvl_staff_designation bsd 
                              ON bs.deg_code = bsd.deg_code JOIN bcgvl_staff_groups bsg ON bs.cate_code = bsg.cate_code"; 
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_all($res);
                        //    var_dump($value['position_held']);die;
                ?>
                <section id="about" class="about">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <div class="testimonial-item" style="padding-top: 20px;">
                        <div class="row">
                            <div class="col-lg-9"></div>
                            <div class="col-lg-3 text-center" style="padding-bottom: 17px">
                                <label for="">Category</label>
                                <select class="custom-select-sm cate" id="group_cate">
                                    <option>Group A</option>
                                    <option>Group B</option>
                                    <option>Group C</option>
                                    <option>Group D</option>
                                </select>
                            </div>
                        </div>
                            <table id="example" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead style="background: #a2dcfd; font-size: 20px; vertical-align: middle;">
                                    <tr>
                                        <th>S.NO</th>
                                        <th>INCUMBENCY POSITION</th>
                                        <th>DESIGNATION</th>
                                        <th>GROUP</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 13px;">
                                <?php foreach($result as $value){ 
                                    ?>
                                    <tr>
                                        <td><?php echo $value['staff_id'];?></td>
                                        <td><?php echo $value['staff_name'];?></td>
                                        <td><?php echo $value['deg_name'];?></td>
                                        <td><?php echo $value['cate_name'];?></td>
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