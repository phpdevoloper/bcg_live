<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<style>
    * {
        margin: 0;
        padding: 0;
    }
    #c-container {
        position: relative;
        height: 80vh;
        overflow: hidden;
    }

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
                <?php   
                        // $sql = "SELECT * FROM supply_of_bcg"; 
                        // $res = pg_query($db,$sql);
                        // $result = pg_fetch_all($res);
                        // foreach ($result as $year) {
                ?>
                    <option value="2018">2017-2018</option>
                    <option value="2021">2020-2021</option>
            </select>
        </div>
        <div class="container aos-init aos-animate" data-aos="fade-up" style="margin-bottom : 30px">
         <div class="row">
             <div class="col-lg-7">
                 <div id="myChart" class="chart--container"></div>
             </div>
             <div class="col-lg-5">
                 <div class="card">
                     <div id="c-container"></div>
                 </div>
             </div>
         </div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); 


$sql = "SELECT * FROM mst_supply_bcgvl"; 
        $res = pg_query($db, $sql);
        $supply = pg_fetch_all($res);
        // // var_dump($supply);
        // $json = json_encode($supply, JSON_PRETTY_PRINT);
		// echo $json;die;      
?>
<script src="js/zingchart.min.js"></script>


<script>
    
    $(document).ready(function () { 
       
        zingchart.MODULESDIR="js/modules/";

        var stateData = {
            2021:
                {
                    KA : {
                    tooltip: {
                        text: 'Karnataka has 2,851 monthly users total',
                        backgroundColor: '#ff5722'
                    },
                    backgroundColor: '#99fecd',
                    label: {
                        text:'Karnataka',
                        visible: true
                    }
                    },
                    AP: {
                        tooltip: {
                            text: 'Andhra Pradesh has 4.4 lkhs',
                            backgroundColor: '#ff9800'
                        },
                        backgroundColor: '#ffcd66',
                        label: {
                            visible: true
                        }
                    },
                        TL: {
                        tooltip: {
                            text: 'Telangana 3 laks',
                            backgroundColor: '#fdf1dc'
                        },
                        backgroundColor: '#fdf1dc',
                        label: {
                            text:"Telangana",
                            visible: true
                        }
                    },
                        TN: {
                        tooltip: {
                            text: 'Tamil Nadu has 1,968 monthly users total',
                            backgroundColor: '#00bcd4'
                        },
                        backgroundColor: '#5a9dda',
                        label: {
                            text:'Tamil Nadu',
                            visible: true
                        },
                    },
                        GJ: {
                        tooltip: {
                            text: 'Gujarat 4.8 lkhs',
                            backgroundColor: '#00b2f1',
                            color:"#fff"
                        },
                        backgroundColor: '#00b2f1',
                        label: {
                            text:'Gujarat',
                            visible: true
                        },
                    },
                        MP: {
                        tooltip: {
                            text: 'Madhya Pradesh 12.8 lkhs',
                            backgroundColor: '#93d24e',
                            color:"#fff"
                        },
                        backgroundColor: '#93d24e',
                        label: {
                            text:'Gujarat',
                            visible: true
                        },
                    },
                        WB: {
                        tooltip: {
                            text: 'West Bengal 12.8 lkhs',
                            backgroundColor: '#00bcd4',
                            color:"#fff"
                        },
                        backgroundColor: '#bfc1c0',
                        label: {
                            text:'West Bengal',
                            visible: true
                        },
                    },
                        MH: {
                        tooltip: {
                            text: 'Maharashtra 24.5 lkhs',
                            backgroundColor: '#00bcd4',
                            color:"#fff"
                        },
                        backgroundColor: '#feda67',
                        label: {
                            text:'Maharashtra',
                            visible: true
                        },
                    },
                        UP: {
                        tooltip: {
                            text: 'Uttar Pradesh 33.1 lkhs',
                            backgroundColor: '#00bcd4',
                            color:"#fff"
                        },
                        backgroundColor: '#8697b2',
                        label: {
                            text:'UP',
                            visible: true
                        },
                    }
                },
            
            
            
        };
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
                    // borderColor: '#000',
                    borderWidth: '1px',
                    controls: {
                        visible: false, // turn of zooming. Doesn't work with bounding box

                    },
                    hoverState: {
                        alpha: .28
                    },
                    items: {},
                    label: { // text displaying. Like valueBox
                        fontSize: '15px',
                        visible: false
                    }
                    }
                }
                },
            ]
            };
            
            chartConfig.shapes[0].options.style.items = stateData[2021]
            document.getElementById('year_of_supply').addEventListener('change', function() {
                style.items = stateData[this.value];
            });



            zingchart.loadModules('maps,maps-ind');
            zingchart.render({
            id: 'myChart',
            data: chartConfig,
            height: '100%',
            width: '100%',
            });


    });
</script>
<script src="https://fastly.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
<script>

        var dom = document.getElementById('c-container');
        const jobDatasets = {
            
                2021 :[{
                        value: 5,
                        groupId: 'TN',
                        itemStyle: {
                            color: '#5a9dda'
                        },
                },
                {
                    value: 4,
                    groupId: 'AP',
                    itemStyle: {
                        color: '#ffcd66'
                    }
                },
                {
                    value: 4,
                    groupId: 'KA',
                    itemStyle: {
                        color: '#99fecd'
                    }
                },
                {
                    value: 8,
                    groupId: 'CJ',
                    itemStyle: {
                        color: '#8facdb'
                    }
                },
                {
                    value: 8,
                    groupId: 'MP',
                    itemStyle: {
                        color: '#93d24e'
                    }
                },
                {
                    value: 8,
                    groupId: 'UP',
                    itemStyle: {
                        color: '#8697b2'
                    }
                },
                {
                    value: 2,
                    groupId: 'GJ',
                    itemStyle: {
                        color: '#00b2f1'
                    }
                },
                {
                    value: 5,
                    groupId: 'WB',
                    itemStyle: {
                        color: '#bfc1c0'
                    }
                },
                {
                    value: 5,
                    groupId: 'TL',
                    itemStyle: {
                        color: '#fdf1dc'
                    }
                },
                {
                    value: 5,
                    groupId: 'MH',
                    itemStyle: {
                        color: '#feda67'
                    }
                },
            ],
                

        };

        // console.log(jobDatasets);

        var myChart = echarts.init(dom, null, {
        renderer: 'canvas',
        useDirtyRect: false
        });
        var app = {};

        var option;

        option = {
        xAxis: {
            data: ['TN', 'AP', 'KA','CJ','MP','UP','GJ','WB','TL','MH']
        },
        yAxis: {},
        dataGroupId: '',
        animationDurationUpdate: 500,
        series: {
            type: 'bar',
            id: 'sales',
            data: [],
            universalTransition: {
            enabled: true,
            divideShape: 'clone'
            }
        }
        };
        
        
        // console.log(option);
        document.getElementById('year_of_supply').addEventListener('change', function() {
            option.series.data = jobDatasets[this.value];
            myChart.setOption(option);
        });


        if (option && typeof option === 'object') {
        myChart.setOption(option);
        }



        window.addEventListener('resize', myChart.resize);
</script>