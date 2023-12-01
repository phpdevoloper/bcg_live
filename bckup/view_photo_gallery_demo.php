 <?php 
 
include('inc/dbconnection.php');



$sql= "update  mst_subs_rti set file_type='',rti_upload = 'annual_report.php' where subs_rti_id = 16";
                                $res = pg_query($db,$sql);
                                // $result = pg_fetch_all($res);
                                // var_dump($result);