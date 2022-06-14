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
    $.ajax({
      method: "POST",
      url: "updateBasicDetails.php",
      data: new FormData(this),
      contentType: false,
      dataType: "json",
      processData: false,
      success: function (data) {
        console.log(data.dir_desk_id);
        // location.reload();
        if (data == 1) {
          swal({
            type: "success",
            title: "Done!",
            html: "Successfully Added",
          }).then(function () {
            location.reload();
          });
        }
      },
    });
  });

  //update director basic details
  $("#edit_basic").submit(function (e) {
    e.preventDefault();
    $.ajax({
      method: "POST",
      url: "updateBasicDetails.php",
      data: new FormData(this),
      contentType: false,
      dataType: "json",
      processData: false,
      success: function (data) {
        console.log(data.dir_desk_id);
        // location.reload();
        if (data == 1) {
          swal({
            type: "success",
            title: "Done!",
            html: "Successfully Added",
          });
        }
      },
    });
  });

  // // edit the basic details
  // $(document).ready(function (e) {
  //   console.log("sghg");
  //   var dir_id = $(this).attr("data-dir_id");
  //   var dir_name = $(this).attr("data-dir_name");
  //   var dir_position = $(this).attr("data-dir_position");
  //   var dir_qualifi = $(this).attr("data-dir_qualifi");
  //   var position_held = $(this).attr("data-position_held");
  //   var dir_photo = $(this).attr("data-dir_photo");

  //   $("#Director_id").val(dir_id);
  //   $("#Director_name").val(dir_name);
  //   $("#Director_position").val(dir_position);
  //   $("#Director_qualification").val(dir_qualifi);
  //   $("#Position_held").val(position_held);
  //   $("#Dir_photo").attr("src", dir_photo);
  //   // $("#director_photo").val(dir_photo);
  // });

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

  var form_ele = "#update_Basic";
  // make eveything disabled
  var disableFormEdit = function (selector) {
    $(selector).removeClass("form--enabled").addClass("form--disabled");
    $(
      selector + " input, " + selector + " select, " + selector + " button"
    ).prop("disabled", true);
  };
  // make eveything enabled
  var enableFormEdit = function (selector) {
    $(
      selector + " input, " + selector + " select, " + selector + " button "
    ).prop("disabled", false);
    $(selector).removeClass("form--disabled").addClass("form--enabled");
  };
  disableFormEdit(form_ele);
  $("#editBasicInline").on("click", function () {
    // get the status of form
    var form_status = $(form_ele).hasClass("form--disabled")
      ? "disabled"
      : "enabled";

    // check if disabled or enabled
    switch (form_status) {
      case "disabled":
        enableFormEdit(form_ele);
        $(this).text("undo");
        break;
      case "enabled":
        disableFormEdit(form_ele);
        $(this).text("Edit");
        break;
    }
  });

  var form_elem = "#edit_pro";
  // make eveything disabled
  var disableFormEdit = function (selector) {
    $(selector).removeClass("form--enabled").addClass("form--disabled");
    $(
      selector + " input, " + selector + " select, " + selector + " button"
    ).prop("disabled", true);
  };
  // make eveything enabled
  var enableFormEdit = function (selector) {
    $(
      selector + " input, " + selector + " select, " + selector + " button "
    ).prop("disabled", false);
    $(selector).removeClass("form--disabled").addClass("form--enabled");
  };
  disableFormEdit(form_elem);
  $("#editPro").on("click", function () {
    // get the status of form
    var form_status = $(form_elem).hasClass("form--disabled")
      ? "disabled"
      : "enabled";

    // check if disabled or enabled
    switch (form_status) {
      case "disabled":
        enableFormEdit(form_elem);
        $(this).text("undo");
        break;
      case "enabled":
        disableFormEdit(form_elem);
        $(this).text("Edit");
        break;
    }
  });

  // add achivement
  $("#add_achive").on("change", function () {
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
});
