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
                        $i=1;
                        //    var_dump($value['position_held']);die;
                ?>
                <section id="about">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <div class="testimonial-item" style="padding-top: 20px;">
                        <div class="row">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4 text-center Groupfilter">
                                <label for="">Category</label>
                                <select class="custom-select-sm cate" id="group_cate">
                                    <option value="">All</option>
                                    <option value="GROUP-A">GROUP-A</option>
                                    <option value="GROUP-B(Gazetted)">GROUP-B(Gazetted)</option>
                                    <option value="GROUP-B(Non-Gazetted)">GROUP-B(Non-Gazetted)</option>
                                    <option value="GROUP–C">GROUP–C</option>
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
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $value['staff_name'];?></td>
                                        <td><?php echo $value['deg_name'];?></td>
                                        <td><?php echo $value['cate_name'];?></td>
                                <?php $i++ ; }?>
                                    </tr>
                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>INCUMBENCY POSITION</th>
                                        <th>DESIGNATION</th>
                                        <th>GROUP</th>
                                    </tr>
                                </tfoot> -->
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
   
    // $(".dataTables_length").addClass("bs-select");
    var table = $('#example').DataTable({
        responsive: true,
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
    });
    $('#group_cate').on('change', function () {
        console.log('sdf');
        table.columns(3).search( this.value ).draw();
    } );
    // this.api().columns( 5 ).every( function () {});

  });
</script>