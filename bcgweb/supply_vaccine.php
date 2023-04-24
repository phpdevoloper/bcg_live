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
<?php include('inc/simple_footer.php'); 

$sql = "SELECT * FROM mst_supply_bcgvl"; 
        $res = pg_query($db, $sql);
        $supply = pg_fetch_all($res);
        var_dump($supply);
      
?>
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
                },
                {
                    type: 'circle',
                    id: '2022',
                    backgroundColor: '#163D6B',
                    borderColor: '#a5a5a5',
                    borderWidth: '1px',
                    cursor: 'pointer',
                    label: {
                        text: '2021-2022',
                        fontColor: '#666666',
                        fontFamily: 'arial',
                        offsetX: '50px'
                    },
                    size: '10px',
                    x: '5%',
                    y: '27%'
                },
                {
                    type: 'circle',
                    id: '2021',
                    backgroundColor: '#4E6C90',
                    borderColor: '#a5a5a5',
                    borderWidth: '1px',
                    cursor: 'pointer',
                    label: {
                        text: '2020-2021',
                        fontColor: '#666666',
                        fontFamily: 'arial',
                        offsetX: '50px'
                    },
                    size: '10px',
                    x: '5%',
                    y: '37%'
                },
            ]
            };

            zingchart.loadModules('maps,maps-ind');
            zingchart.render({
            id: 'myChart',
            data: chartConfig,
            height: '100%',
            width: '100%',
            });

            // Keep track of last shape clicked
            let lastClick = null;

            // Population data for updating the chart
            let population = {
                2022: {
                    bgColor: '#3bc053',
                    states: ['TN']
                },
                2022: {
                    bgColor: '#4E6C90',
                    states: ['AP']
                },
            };


            let createItems = (year) => {
            let data = population[year];
            let items = {};
            data.states.forEach((state) => {
                let stateItem = {
                tooltip: {
                    borderRadius: '0px'
                },
                backgroundColor: data.bgColor,
                borderColor: '#a5a5a5',
                borderWidth: '1px',
                hoverState: {
                    visible: false
                },
                label: {
                    visible: false
                }
                }
                items[state] = stateItem;
            });
            return items;
            }

            // Deep copy a Javascript object
            let copy = (obj) => {
            return JSON.parse(JSON.stringify(obj));
            }

            // Bind the shapeclick
            zingchart.shape_click = (p) => {
            let year = p.shapeid;
            if (Object.keys(population).indexOf(year) < 0) {
                return;
            }
            if (lastClick == year) {
                lastClick = null;
                zingchart.exec('myChart', 'setdata', {
                data: chartConfig
                });
            }
            else {
                lastClick = year;
                let newData = copy(chartConfig);
                newData.shapes[0].options.style.items = createItems(year);
                zingchart.exec('myChart', 'setdata', {
                data: newData
                });
            }
            }
       

    });
</script>