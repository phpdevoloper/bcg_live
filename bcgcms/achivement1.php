<?php 
	 include('inc/dbconnection.php');
	include('inc/header.php');
	 $base_url = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 
?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="page-header">
                                    <ul class="breadcrumbs">
                                        <li class="nav-item">
                                            <a href="#">Director Desk</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#">Achivement</a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Add New
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Add</span>
                                                <span class="fw-light">
                                                    Achivement
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_achive">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualifi">Achivement Title</label>
                                                            <textarea class="form-control" name="director_qualification" id="director_qualification" cols="30" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Achivement year</label>
                                                            <select class="form-control" id="achivement_year"
                                                                name="achivement_year">
                                                                <option>Please select the year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <button type="submit" id="addRowButton"
                                                        class="btn btn-primary">Add</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="add-row"
                                                class="display table table-striped table-hover dataTable" role="grid"
                                                aria-describedby="add-row_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>Achivement Title</th>
                                                        <th>Achivement Year</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $sql = "SELECT * FROM director_desk"; ?>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php //echo $value['director_name'];?></td>
                                                        <td class="sorting_1"><?php //echo $value['director_position'];?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editAchivement" title=""
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Achivement">
                                                                    <i class="fa fa-edit get_achive"
                                                                        data-dir_id="<?php //echo $value['dir_desk_id'];?>"
                                                                        data-dir_name="<?php //echo $value['director_name'];?>"
                                                                        ></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php //} ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php');?>
<script type="text/javascript">
    window.onload = function () {
        //Reference the DropDownList.
        var ddlYears = document.getElementById("achivement_year");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = 1940; i <= currentYear; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
    };
</script>