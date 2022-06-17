$(document).ready(function () {
  var getUrl = window.location;
  var baseUrl =
    getUrl.protocol +
    "//" +
    getUrl.host +
    "/" +
    getUrl.pathname.split("/")[1] +
    "/";
  // Login ajax
  $("#admin_login").submit(function (e) {
    e.preventDefault();
    $.ajax({
      method: "POST",
      url: "Model/admin_login.php",
      data: new FormData(this),
      contentType: false,
      dataType: "json",
      processData: false,
      success: function (data) {
        console.log(data);
        if (data == 1) {
          window.location.href = "dashboard.php";
        }
      },
    });
  });
  // basic details of Director submit
  $("#update_Basic").submit(function (e) {
    e.preventDefault();
    var fdata = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You want to update this!",
      icon: "warning",
      buttons: ["No, cancel it!", "Yes, I am sure!"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "updateBasicDetails.php",
          data: fdata,
          contentType: false,
          dataType: "json",
          processData: false,
          success: function (data) {
            swal({
              title: "Updated!",
              text: "Director Details updated successfully!",
              icon: "success",
            }).then(function () {
              location.reload();
            });
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  // edit the profile details
  $(document).on("click", ".get_profile", function (e) {
    var dir_id = $(this).attr("data-dir_id");
    var dir_name = $(this).attr("data-dir_name");
    var short_pro = $(this).attr("data-short_pro");
    var detail_pro = $(this).attr("data-detail_pro");
    // console.log(baseUrl);

    $("#Director_id").val(dir_id);
    $("#director_name").text(dir_name);
    $("#short").text(short_pro);
    $("#detail").text(detail_pro);
  });

  // basic details of Director submit
  $("#edit_pro").submit(function (e) {
    e.preventDefault();
    $.ajax({
      method: "POST",
      url: "updateProDetails.php",
      data: new FormData(this),
      contentType: false,
      dataType: "json",
      processData: false,
      success: function (data) {
        if (data == 1) {
          swal({
            type: "success",
            title: "Done!",
            html: "Successfully Added",
          }).then(function () {
            location.reload();
          });
        } else {
          swal({
            type: "error",
            title: "Oops!",
            html: "Something Went Wrong!",
          }).then(function () {
            location.reload();
          });
        }
      },
    });
  });

  // edit the director message details
  $(document).on("click", ".get_messa", function (e) {
    var dir_id = $(this).attr("data-dir_id");
    var dir_name = $(this).attr("data-dir_name");
    var director_message = $(this).attr("data-director_message");
    // console.log(baseUrl);

    $("#Director_id").val(dir_id);
    $("#director_name").text(dir_name);
    $("#director_message").text(director_message);
  });

  // Director Message update
  $("#edit_messa").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    data.append(
      "director_message",
      tinymce.get("director_message").getContent()
    );
    $.ajax({
      method: "POST",
      url: "updateMessaDetails.php",
      data: data,
      contentType: false,
      dataType: "json",
      processData: false,
      success: function (data) {
        if (data == 1) {
          swal({
            type: "success",
            title: "Done!",
            text: "Successfully Updated!",
            icon: "success",
          }).then(function () {
            location.reload();
          });
        } else {
          swal({
            title: "OOPS!",
            text: "Something Went Wrong!",
            type: "danger",
          }).then(function () {
            location.reload();
          });
        }
      },
    });
  });

  // Director status updating
  $("#director_status").on("change", function () {
    var dir_status = $("#director_status").val();
    var dir_id = $(this).attr("data-dir_id");
    console.log(dir_status, dir_id);
    $.ajax({
      type: "POST",
      url: "updateDirectorStatus.php",
      data: {
        dir_id: dir_id,
        dir_status: dir_status,
      },
      success: function (data) {
        if (data == 1) {
          swal({
            type: "success",
            title: "Done!",
            html: "Successfully Updated",
          });
        }
      },
    });
  });

  //Add what's new Ajax
  $("#add_whats").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to add new!",
      icon: "warning",
      buttons: ["No, cancel it!", "Yes, I am sure!"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "addWhats_new.php",
          data: data,
          contentType: false,
          dataType: "json",
          processData: false,
          success: function (data) {
            swal({
              title: "Updated!",
              text: "New Record added and uploaded successfully!",
              icon: "success",
            }).then(function () {
              location.reload();
            });
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });
});
