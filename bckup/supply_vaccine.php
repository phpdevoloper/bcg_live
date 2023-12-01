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
            <li class="completed"><a href="javascript:void(0);">Who's who</a></li>
            <li class=""><a href="director_desk.php">Supply of BCG Vaccine</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="section">
            <h3 class="text-center txt" style="color: #299adc;">Supply of BCG Vaccine</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="" class="col-md-3">Financial Year : </label>
                <div class="col-md-9">
                    <select name="" id="year_of_supply" class="form-control">
                        <?php   $sql = "SELECT * FROM supply_of_bcg"; 
                                $res = pg_query($db,$sql);
                                $result = pg_fetch_all($res);
                                foreach ($result as $year) {
                        ?>
                            <option value="<?php echo $year['supply_id'];?>" data-supply_report="<?php echo $year['supply_report']; ?>"><?php echo $year['year_of_supply']; ?></option>
                            <?php    } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row"><div class="col-lg-2"></div>
        <div class="col-lg-8" data-aos="fade-up" style="margin-bottom : 30px">
            <img src="" id="suppy_report" alt="File Not Found" width = "100%">
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>
<script>
    
    $(document).ready(function () {
        var year = $('#year_of_supply').val();
        var supply_report = $('#year_of_supply').find(':selected').attr('data-supply_report');
        console.log(supply_report);

        $('#suppy_report').attr({src: "uploads/BCG_Supply/"+supply_report});
      

        $("#year_of_supply").change(function(){
            var supply_report = $('#year_of_supply').find(':selected').attr('data-supply_report');
            $('#suppy_report').attr({src: "uploads/BCG_Supply/"+supply_report});
        });
    });

    // $("#edit_recruitment").submit(function(e){
    //     e.preventDefault();
    //     var data = new FormData(this);
    //     swal({
    //     title: "Are you sure?",
    //     text: "You wants to Upadte recruitment!",
    //     icon: "warning",
    //     buttons: ["Cancel!", "Yes"],
    //     dangerMode: true,
    //     }).then(function (isConfirm) {
    //     if (isConfirm) {
    //         $.ajax({
    //         method: "POST",
    //         url: "addRecruitmentAjax.php",
    //         data: data,
    //         contentType: false,
    //         processData: false,
    //         success: function (response) {
    //             if (response == 1) {
    //             swal({
    //                 title: "Added!",
    //                 icon: "success",
    //             }).then(function () {
    //                 location.reload();
    //             });
    //             } else {
    //             swal({
    //                 title: "Something went wrong!",
    //                 icon: "error",
    //             }).then(function () {
    //                 location.reload();
    //             });
    //             }
    //         },
    //         });
    //     } else {
    //         swal("Cancelled", "Done :)", "error");
    //     }
    //     });
    // });
</script>