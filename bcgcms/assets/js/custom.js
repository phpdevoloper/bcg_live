$(document).ready(function () {
  $(".upload_event").attr("style", "display:none");
  $(".event_url").attr("style", "display:none");
  // $(".upload_event").remove(); // option 4
  // $(".event_url").remove(); // option 4

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

  // edit the profile details
  $(document).on("click", ".get_what", function (e) {
    e.preventDefault();
    var whats_id = $(this).attr("data-whats_id");
    var whats_title = $(this).attr("data-whats_title");
    var whats_desc = $(this).attr("data-whats_desc");
    var what_file = $(this).attr("data-what_file");
    $("#Whats_id").val(whats_id);
    $("#What_new_title").val(whats_title);
    $("#Whats_desc").val(whats_desc);
    $("#file_lable").text(what_file);
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
  //Edit what's new Ajax
  $("#edit_whats_new").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Update!",
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
          processData: false,
          success: function (response) {
            swal({
              title: "Updated!",
              text: "New Record Updated successfully!",
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

  //Edit organisation Chart Ajax
  $("#add_orgchart").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Update!",
      icon: "warning",
      buttons: ["No, cancel it!", "Yes, I am sure!"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "UpdateorgchartAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            swal({
              title: "Updated!",
              text: "Record Updated successfully!",
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

  // edit the staff details
  $(document).on("click", ".get_staff", function (e) {
    e.preventDefault();
    var staff_id = $(this).attr("data-staff_id");
    var staff_name = $(this).attr("data-staff_name");
    var deg_name = $(this).attr("data-deg_name");
    var cate_name = $(this).attr("data-cate_name");
    var status = $(this).attr("data-status");
    console.log(deg_name);
    console.log(staff_name);
    $("#Staff_id").val(staff_id);
    $("#Staff_name").val(staff_name);
    $("#Deg_code").val(deg_name);
    $("#Group_cate").val(cate_name);
    $("#Staff_status").val(status);
  });

  //Edit pro Chart Ajax
  $("#add_prochart").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Update!",
      icon: "warning",
      buttons: ["No, cancel it!", "Yes, I am sure!"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        console.log(data);

        $.ajax({
          method: "POST",
          url: "UpdateprochartAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            swal({
              title: "Updated!",
              text: "Record Updated successfully!",
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

  //Edit pro Chart Ajax
  $("#add_new_event").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to add New Event!",
      icon: "warning",
      buttons: ["No, cancel it!", "Yes, I am sure!"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        console.log(data);

        $.ajax({
          method: "POST",
          url: "eventsAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            swal({
              title: "Updated!",
              text: "Event Added successfully!",
              icon: "success",
            }).then(function () {
              // location.reload();
            });
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  $("#file_check").change(function () {
    if ($(this).prop("checked") === true) {
      $(".event_url").attr("style", "display:none");
      $(".upload_event").attr("style", "display:block");
    } else {
      $(".upload_event").attr("style", "display:none");
    }
  });
  $("#url_check").change(function () {
    if ($(this).prop("checked") === true) {
      $(".upload_event").attr("style", "display:none");
      $(".event_url").attr("style", "display:block");
    } else {
      $(".event_url").attr("style", "display:none");
    }
  });

  //Add New Product
  $("#addProduct").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to add New Product!",
      icon: "warning",
      buttons: ["No, cancel it!", "Yes, I am sure!"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        console.log(data);

        $.ajax({
          method: "POST",
          url: "addProductAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            swal({
              title: "Updated!",
              text: "Product Added successfully!",
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

  $("#pro_name").change(function () {
    var id = $("#pro_name").val();
    $.ajax({
      method: "POST",
      dataType: "json",
      url: "getProductAjax.php",
      data: { pro_id: id },
      success: function (response) {
        $(".content_pro").html(response.product_desc);
      },
    });
    var addNew = $("#pro_name option:selected").text();
    if (addNew == "Add New Product") {
      $("#addProductModal").modal("show");
    }
  });
});
