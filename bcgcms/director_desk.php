<?php 
	include('inc/dbconnection.php');
	include('inc/header.php');
	 $base_url = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 
?>
<div class="main-panel">
   <div class="content">
      <div class="page-inner">
					<div class="page-header">
            <h4 class="page-title">Basic Details</h4>
            <ul class="breadcrumbs">
               <li class="nav-home">
                  <a href="#">
                  <i class="flaticon-home"></i>
                  </a>
               </li>
               <li class="separator">
                  <i class="flaticon-right-arrow"></i>
               </li>
               <li class="nav-item">
                  <a href="#">Director Desk</a>
               </li>
               <li class="separator">
                  <i class="flaticon-right-arrow"></i>
               </li>
               <li class="nav-item">
                  <a href="basic_details.php">Basic Details</a>
               </li>
            </ul>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <div class="d-flex align-items-center">
                        <h4 class="card-title">Basic Details</h4>
                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                        Add New
                        </button>
                     </div>
                  </div>
                  <div class="card-body">
                     <!-- Modal -->
                     <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header no-bd">
                                 <h5 class="modal-title">
                                    <span class="fw-mediumbold">
                                    Add</span> 
                                    <span class="fw-light">
                                    Basic Details
                                    </span>
                                 </h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <form id="update_Basic">
                                    <div class="row">
                                       <div class="col-sm-12">
																					<div class="form-group">
																							<label for="name">Name</label>
																							<input type="text" class="form-control" id="director_name" name="director_name">
																					</div>
                                       </div>
                                       <div class="col-sm-12">
																			 		<div class="form-group">
																						<label for="exampleFormControlSelect1">Please select designation</label>
																						<select class="form-control" id="director_position" name="director_position">
																								<option>Please select designation</option>
																								<?php $sql = 'SELECT * FROM emp_designation';
																											$res = pg_query($db, $sql);
																											$designations = pg_fetch_all($res);
																											foreach ($designations as $value) { ?>
																									<option value="<?php echo $value['designation_code'] ?>"><?php echo $value['designation_name'];?></option>
																									<?php }?>
																						</select>
																					</div>
                                       </div>
																			 <div class="col-sm-12">
																					<div class="form-group">
																							<label for="qualifi">Director's Qualification</label>
																							<input type="text" class="form-control" id="director_qualification" name="director_qualification">
																					</div>
																			 </div>
																			 <div class="col-sm-12">
																					<div class="form-group">
																						<label for="comment">Position Held</label>
																						<textarea class="form-control" id="position_held" name="position_held" rows="5">
																						</textarea>
																					</div>
																				</div>
																				<div class="col-md-6 pr-0">
																					<div class="form-group">
																							<label for="email2">Director Photo</label>
																							<input type="file" class="form-control" id="director_photo" name="director_photo">
																							<img class="js--image-preview" src="assets/img/profile.jpg" alt="">
																							<button type="button" id="addRowButton" class="form-text btn">upload</button>
																					</div>
																			 </div>
                                    </div>
																		<div class="modal-footer no-bd">
																			 <button type="submit" id="addRowButton" class="btn btn-primary">Add</button>
																			 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																		</div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="table-responsive">
                        <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                           <div class="row">
                              <div class="col-sm-12">
                                 <table id="add-row" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="add-row_info">
                                    <thead>
                                       <tr role="row">
                                          <th>Name</th>
                                          <th>Designation</th>
                                          <th>Qualification</th>
                                          <th>Position Held</th>
                                          <th>Director Photo</th>
                                          <th>BD</th>
                                          <th>PD</th>
                                          <th>DM</th>
                                          <th>Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
																			<?php $sql = "SELECT * FROM director_desk";
																				$res = pg_query($db,$sql);
																				$list = pg_fetch_all($res);
																				foreach ($list as $value) { ?>
																			<tr role="row" class="odd">
																				<td class="sorting_1"><?php echo $value['director_name'];?></td>
																				<td class="sorting_1"><?php echo $value['director_position'];?></td>
																				<td><?php echo $value['director_qualification'];?></td>
																				<td><?php echo $value['position_held'];?></td>
																				<td><?php echo $value['director_photo'];?></td>
																				<td>
																					<div class="form-button-action">
																					<input type="checkbox" id="bd" name="bd" value="">
																					</div>
																					<div class="modal fade" id="editPD" tabindex="-1" role="dialog" aria-hidden="true">
																						<div class="modal-dialog" role="document">
																							<div class="modal-content">
																									<div class="modal-header no-bd">
																										<h5 class="modal-title">
																												<span class="fw-mediumbold">
																												Edit</span> 
																												<span class="fw-light">
																												Basic Details
																												</span>
																										</h5>
																										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">×</span>
																										</button>
																									</div>
																									<div class="modal-body">
																										<form id="edit_pro">
																												<div class="row">
																													<div class="col-sm-12">
																															<div class="form-group">
																																<label for="name">Name</label>
																																<input type="hidden" class="form-control" id="Director_id" name="director_id">
																																<input type="text" class="form-control" id="director_name" disabled>
																															</div>
																													</div>
																													<div class="col-md-6 pr-0">
																															<div class="form-group">
																																<label for="email2">short profile</label>
																																<input type="file" class="form-control" id="short_pro" name="short_pro">
																																<label id="short"></label>
																															</div>
																													</div>
																													<div class="col-md-6 pr-0">
																															<div class="form-group">
																																<label for="email2">detailed profile</label>
																																<input type="file" class="form-control" id="detail_pro" name="detail_pro">
																																<label id="detail"></label>
																															</div>
																													</div>
																												</div>
																												<div class="modal-footer no-bd">
																													<button type="submit" id="addRowButton" class="btn btn-primary">Update</button>
																													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																												</div>
																										</form>
																									</div>
																							</div>
																						</div>
																				</div>
																				</td>
																				<td>
																					<div class="form-button-action">
																					<input type="checkbox" id="bd" name="bd" value="">
																					</div>
																				</td>
																				<td>
																					<div class="form-button-action">
																					<input type="checkbox" id="bd" name="bd" value="">
																					</div>
																				</td>
																				<td>
																						<div class="form-button-action">
																							<button type="button" data-toggle="modal" data-target="#editRowModal" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																							<i class="fa fa-edit get_basic"
																								data-dir_id 						="<?php echo $value['dir_desk_id'];?>"
																								data-dir_name 					="<?php echo $value['director_name'];?>"
																								data-dir_position 			="<?php echo $value['director_position'];?>"
																								data-dir_qualifi 				="<?php echo $value['director_qualification'];?>"
																								data-position_held 			="<?php echo $value['position_held'];?>"
																								data-dir_photo 					="<?php echo $value['director_photo'];?>"
																							></i>
																							</button>
																							<!-- Edit Modal -->
																							<div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
																								<div class="modal-dialog modal-lg" role="document">
																									<div class="modal-content">
																											<div class="modal-header no-bd">
																												<h5 class="modal-title">
																														<span class="fw-mediumbold">
																														Edit</span> 
																														<span class="fw-light">
																														Basic Details
																														</span>
																												</h5>
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																												<span aria-hidden="true">×</span>
																												</button>
																											</div>
																											<div class="modal-body">
																												<form id="edit_basic">
																														<div class="row">
																															<div class="col-sm-6">
																																	<div class="form-group">
																																			<label for="name">Name</label>
																																			<input type="hidden" class="form-control" id="Director_id" name="director_id">
																																			<input type="text" class="form-control" id="Director_name" name="director_name">
																																	</div>
																															</div>
																															<div class="col-sm-6">
																																	<div class="form-group">
																																		<label for="exampleFormControlSelect1">Designation</label>
																																		<select class="form-control" id="Director_position" name="director_position">
																																				<option>Please select designation</option>
																																				<?php $sql = 'SELECT * FROM emp_designation';
																																							$res = pg_query($db, $sql);
																																							$designations = pg_fetch_all($res);
																																							foreach ($designations as $value) { ?>
																																					<option value="<?php echo $value['designation_code'] ?>"><?php echo $value['designation_name'];?></option>
																																					<?php }?>
																																		</select>
																																	</div>
																															</div>
																															<div class="col-sm-6">
																																	<div class="form-group">
																																			<label for="qualifi">Director's Qualification</label>
																																			<input type="text" class="form-control" id="Director_qualification" name="director_qualification">
																																	</div>
																															</div>
																															<div class="col-sm-6">
																																	<div class="form-group">
																																		<label for="comment">Position Held</label>
																																		<textarea class="form-control" id="Position_held" name="position_held" rows="5">
																																		</textarea>
																																	</div>
																																</div>
																																<div class="col-md-6 pr-0">
																																	<div class="form-group">
																																			<label for="email2">Director Photo</label>
																																			<input type="file" class="form-control" id="Director_photo" name="director_photo">
																																			<button type="button" id="addRowButton" class="form-text btn">upload</button>
																																	</div>
																															    </div>
																																<div class="col-md-6 pr-0">
																																	<div class="form-group">
																																			<img id ="Dir_photo" class="form-control js--image-preview" src="<?php echo $base_url;?>assets/img/profile.jpg" alt="">
																																	</div>
																															    </div>
																														</div>
																														<div class="modal-footer no-bd">
																															<button type="submit" id="addRowButton" class="btn btn-primary">Add</button>
																															<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																														</div>
																												</form>
																											</div>
																									</div>
																								</div>
																						</div>
																							<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																							<i class="fa fa-times"></i>
																							</button>
																						</div>
																				</td>
																			</tr>
																			<?php } ?>
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
<script>
	// $(document).ready(function() {
	// 	$('#director_message').richText();
	// });
</script>
	