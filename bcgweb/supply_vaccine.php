<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<style>
   .chart--container {
        min-height: 600px;
        width: 100%;
        height: 100%;
    }

    .zc-ref {
    display: none;
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
            <li class=""><a href="director_desk.php">Supply of BCG Vaccine</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="text-center">
            <label for="">Year : </label>
            <select name="" id="year_of_supply">
                <?php   $sql = "SELECT * FROM supply_of_bcg"; 
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_all($res);
                        foreach ($result as $year) {
                ?>
                    <option value="<?php echo $year['supply_id'];?>" data-supply_report="<?php echo $year['supply_report']; ?>"><?php echo $year['year_of_supply']; ?></option>
                    <?php    } ?>
            </select>
        </div>
        <div class="container aos-init aos-animate" data-aos="fade-up" style="margin-bottom : 30px">
            <div id="myChart" class="chart--container">
            </div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>
<script src="js/zingchart.min.js"></script>

<script>
    
    $(document).ready(function () {
        zingchart.MODULESDIR="js/modules/";
        let chartConfig = {
            shapes: [
                {
                type: 'zingchart.maps',
                options: {
                    name: 'ind',
                    panning: false, // turn of zooming. Doesn't work with bounding box
                    zooming: true,
                    scrolling: false,
                    style: {
                    tooltip: {
                        borderColor: '#000',
                        borderWidth: '2px',
                        fontSize: '18px'
                    },
                    borderColor: '#000',
                    borderWidth: '2px',
                    controls: {
                        visible: false, // turn of zooming. Doesn't work with bounding box

                    },
                    hoverState: {
                        alpha: .28
                    },
                    items: {
                        KA: {
                        tooltip: {
                            text: 'Karnataka has 2,851 monthly users total',
                            backgroundColor: '#ff5722'
                        },
                        backgroundColor: '#ff5722',
                        label: {
                            visible: true
                        }
                        },
                        MH: {
                        tooltip: {
                            text: 'Maharashtra has 2,683 monthly users total',
                            backgroundColor: '#ff9800'
                        },
                        backgroundColor: '#ff9800',
                        label: {
                            visible: true
                        }
                        },
                        TL: {
                        tooltip: {
                            text: 'Telangana has 1,494 monthly users total',
                            backgroundColor: '#00AE4D'
                        },
                        backgroundColor: '#00AE4D',
                        label: {
                            visible: true
                        }
                        },
                        TN: {
                        tooltip: {
                            text: 'Tamil Nadu has 1,968 monthly users total',
                            backgroundColor: '#00bcd4'
                        },
                        backgroundColor: '#00bcd4',
                        label: {
                            text:'Tamil Nadu <br> 5',
                            visible: true
                        },
                        }
                    },
                    label: { // text displaying. Like valueBox
                        fontSize: '15px',
                        visible: false
                    }
                    }
                }
                }
            ]
            };

            zingchart.loadModules('maps,maps-ind');
            zingchart.render({
            id: 'myChart',
            data: chartConfig,
            height: '100%',
            width: '100%',
            });
    });
</script>