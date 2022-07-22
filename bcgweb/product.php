<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<style>
    .testimonial-item h5{
        color:black;
        font-weight:700;
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
            <li class="completed"><a href="javascript:void(0);">Products</a></li>
            <li class=""><a href="director_desk.php">Products</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="section">
            <h3 class="text-center txt" style="color: #299adc;">PRODUCT DETAILS</h3>
        </div>
        <div class="row">
            <!-- About Content -->
            <div class="col-md-8">
                <div class="section_title">
                </div>
                <section id="about">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <?php $sql = "SELECT * FROM product";
                            $exe = pg_query($db,$sql);
                            $result = pg_fetch_all($exe);
                        ?>
                        <div class="testimonial-item">
                            <h4 class="text-center"><?php echo $result[0]['product_name']; ?></h4>
                            <div>
                                <?php echo $result[0]['product_desc']; ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <div class="testimonial-item">
                    <div>
                        <div class="pro_title">
                            <ul style="list-style: none;">
                                <li>
                                    <a href=""><?php echo $result[0]['product_name']; ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>