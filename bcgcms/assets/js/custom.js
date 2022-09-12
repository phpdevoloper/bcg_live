$(document).ready(function () {
  $(".upload_event").attr("style", "display:none");
  $(".event_url").attr("style", "display:none");
  $(".RTI_upload").attr("style", "display:none");
  $(".RTI_url").attr("style", "display:none");

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
        if (data == 1) {
          window.location.href = "dashboard.php";
        } else if (data == 3) {
          swal({
            title: "Invalid Username or password!",
            icon: "error",
          }).then(function () {
            location.reload();
          });
        } else if (data == 2) {
          swal({
            title: "Incorrect Captch!",
            icon: "error",
          }).then(function () {
            location.reload();
          });
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
  $("#editprofile").submit(function (e) {
    e.preventDefault();
    $.ajax({
      method: "POST",
      url: "updateProDetails.php",
      data: new FormData(this),
      contentType: false,
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

  //******************************************** Add what's new Ajax ********************************************
  $("#add_whats").validate({
    rules: {
      whats_title: {
        required: true,
      },
      description: {
        required: true,
      },
      what_file: {
        required: true,
      },
    },
    submitHandler: function (form, e) {
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
            data: new FormData($("#add_whats")[0]),
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
    },
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

  //********************************** Eevent Section **********************************
  $("#File_chec").change(function () {
    if ($(this).is(":checked")) {
      // $("#url_check").attr("checked", false);
      $("#Url_chec").prop("checked", false);
      $(".event_url").attr("style", "display:none");
      $(".upload_event").attr("style", "display:block");
    } else {
      $(".upload_event").attr("style", "display:none");
    }
  });
  $("#Url_chec").change(function () {
    if ($(this).is(":checked")) {
      $("#File_chec").prop("checked", false);
      $(".upload_event").attr("style", "display:none");
      $(".event_url").attr("style", "display:block");
    } else {
      $(".event_url").attr("style", "display:none");
    }
  });

  $(document).on("click", ".get_event", function (e) {
    e.preventDefault();
    var event_id = $(this).attr("data-event_id");
    var event_name = $(this).attr("data-event_name");
    var event_des = $(this).attr("data-event_des");
    var date_from = $(this).attr("data-date_from");
    var date_to = $(this).attr("data-date_to");
    var event_file = $(this).attr("data-event_file");
    var event_type = $(this).attr("data-event_file_type");
    $("#Event_id").val(event_id);
    $("#Event_title").val(event_name);
    $("#Event_desc").val(event_des);
    $("#Date_from").val(date_from);
    $("#Date_to").val(date_to);
    $("#Event_type").val(event_type);
    if (event_type == "pdf") {
      $("#Url_chec").removeAttr("checked");
      $("#File_chec").attr("checked", "checked");
      $(".event_url").attr("style", "display:none");
      $("#Event_file").attr("style", "display:block");
      $("#file_data").removeAttr("style");
      $("#file_data").text(event_file);
      $("#file_data").attr("style", "color:green !important");
    } else {
      $("#File_chec").removeAttr("checked");
      $("#Url_chec").attr("checked", "checked");
      $(".upload_event").attr("style", "display:none");
      $("#file_data").attr("style", "display:none");
      $("#Event_url").attr("style", "display:block");
      $("#Event_url").val(event_file);
    }
  });

  $("#edit_event").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to update the Event!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "eventsAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Updated!",
                text: "Event Updated successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  $("#add_new_event").validate({
    rules: {
      event_title: {
        required: true,
      },
      event_desc: {
        required: true,
      },
      date_from: {
        required: true,
      },
      // date_to: {
      //   greaterThan: "#date_from",
      // },
      // "upload_c[]": {
      //   required: true,
      //   maxlength: 1,
      // },
      // deg_code: {
      //   required: true,
      // },
      // group_cate: {
      //   required: true,
      // },
    },
    messages: {
      date_to: {
        greaterThan: "End date must be greaterthan Start Date",
      },
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      var data = new FormData($("#add_new_event")[0]);
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
                location.reload();
              });
            },
          });
        } else {
          swal("Cancelled", "Done :)", "error");
        }
      });
    },
  });
  // $.validator.addMethod("greaterThan", function (value, element) {
  //   var dateFrom = $("#date_from").val();
  //   var dateTo = $("#date_to").val();
  //   return dateTo >= dateFrom;
  // });

  // $("#add_new_event").submit(function (e) {});

  $("#file_check").change(function () {
    if ($(this).is(":checked")) {
      // $("#url_check").attr("checked", false);
      $("#url_check").prop("checked", false);
      $(".event_url").attr("style", "display:none");
      $(".upload_event").attr("style", "display:block");
    } else {
      $(".upload_event").attr("style", "display:none");
    }
  });
  $("#url_check").change(function () {
    if ($(this).is(":checked")) {
      $("#file_check").prop("checked", false);
      $(".upload_event").attr("style", "display:none");
      $(".event_url").attr("style", "display:block");
    } else {
      $(".event_url").attr("style", "display:none");
    }
  });

  //**************************  Add staff Details *************************************************
  $("#add_staff").validate({
    rules: {
      staff_name: {
        required: true,
      },
      deg_code: {
        required: true,
      },
      group_cate: {
        required: true,
      },
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      var data = new FormData($("#add_staff")[0]);
      swal({
        title: "Are you sure?",
        text: "You wants to add New Staff!",
        icon: "warning",
        buttons: ["Cancel!", "Yes"],
        dangerMode: true,
      }).then(function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            method: "POST",
            url: "staffDetailsAjax.php",
            data: data,
            contentType: false,
            processData: false,
            success: function (response) {
              if (response == 1) {
                swal({
                  title: "Updated!",
                  text: "Staff Updated successfully!",
                  icon: "success",
                }).then(function () {
                  location.reload();
                });
              } else {
                swal({
                  title: "Something went wrong!",
                  icon: "error",
                }).then(function () {
                  location.reload();
                });
              }
            },
          });
        } else {
          swal("Cancelled", "Done :)", "error");
        }
      });
    },
  });

  // $("#add_staff").submit(function (e) {});

  //Edit staff Details
  $("#editStaffDet").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to update!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "staffDetailsAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Updated!",
                text: "Staff Updated successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
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
        console.log(response.product_id);
        $("#editBasicInline").attr(
          "href",
          "editProducts.php?product_id=" + response.product_id
        );
        $(".content_pro").html(response.product_desc);
      },
    });
  });

  /* *************************************** Former Directors Section ********************************************/
  $("#addformer").validate({
    rules: {
      former_dir: {
        required: true,
      },
      service_from: {
        required: true,
      },
      service_to: {
        required: true,
      },
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      var data = new FormData($("#addformer")[0]);
      swal({
        title: "Are you sure?",
        text: "You wants to Add!",
        icon: "warning",
        buttons: ["Cancel!", "Yes"],
        dangerMode: true,
      }).then(function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            method: "POST",
            url: "formerDetailsAjax.php",
            data: data,
            contentType: false,
            processData: false,
            success: function (response) {
              if (response == 1) {
                swal({
                  title: "Updated!",
                  text: "New Director Successfully!",
                  icon: "success",
                }).then(function () {
                  location.reload();
                });
              } else {
                swal({
                  title: "Something went wrong!",
                  icon: "error",
                }).then(function () {
                  location.reload();
                });
              }
            },
          });
        } else {
          swal("Cancelled", "Done :)", "error");
        }
      });
    },
  });

  // $("#addformer").submit(function (e) {});

  $("#editformer").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Update!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "formerDetailsAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Updated!",
                text: "Updated Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  /************************* Products Section ************************* */
  $("#addProduct").validate({
    rules: {
      product_title: {
        required: true,
      },
      product_img: {
        required: true,
      },
      pro_desc: {
        required: true,
      },
    },
    messages: {},
    submitHandler: function (form, e) {
      e.preventDefault();
      var data = new FormData($("#addProduct")[0]);
      // console.log(data);
      // var form_date = $("form").serialize();

      swal({
        title: "Are you sure?",
        text: "You wants to add the contacts",
        icon: "warning",
        buttons: ["Cancel!", "Yes"],
        dangerMode: true,
      }).then(function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            method: "POST",
            dataType: "html",
            url: "addProductAjax.php",
            data: data,
            processData: false,
            contentType: false,
            success: function (response) {
              if (response == 1) {
                swal({
                  title: "Added!",
                  text: "Added Successfully!",
                  icon: "success",
                }).then(function () {
                  location.reload();
                });
              } else {
                swal({
                  title: "Something went wrong!",
                  icon: "error",
                }).then(function () {
                  location.reload();
                });
              }
            },
          });
        } else {
        }
      });
    },
  });

  $("#editProduct").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Update!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "addProductAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Updated!",
                text: "Updated Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  // edit the profile details
  $(document).on("click", ".get_former", function (e) {
    var dir_id = $(this).attr("data-dir_id");
    var dir_name = $(this).attr("data-dir_name");
    var service_from = $(this).attr("data-service_from");
    var service_to = $(this).attr("data-service_to");

    $("#Director_id").val(dir_id);
    $("#Former_dir").val(dir_name);
    $("#Service_fro").val(service_from);
    $("#Service_to").val(service_to);
  });

  $("#add-row").DataTable({
    lengthMenu: [
      [10, 25, 50, -1],
      [10, 25, 50, "All"],
    ],
  });

  // $("#form").validate({
  //   rules: {
  //     category_title: "required",
  //   },
  // });

  // ************************************* GALLERY SECTION ***********************************************

  $("#add_event_category").validate({
    rules: {
      category_title: {
        required: true,
      },
      from_date: {
        required: true,
      },
      to_date: {
        required: true,
        greaterThan: true,
      },
    },
    messages: {
      to_date: {
        greaterThan: "To date must be greater or equal to From date",
      },
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      var data = new FormData($("#add_event_category")[0]);
      swal({
        title: "Are you sure?",
        text: "You wants to Add New category!",
        icon: "warning",
        buttons: ["Cancel!", "Yes"],
        dangerMode: true,
      }).then(function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            method: "POST",
            url: "eventcategoryAjax.php",
            data: data,
            contentType: false,
            processData: false,
            success: function (response) {
              if (response == 1) {
                swal({
                  title: "Added!",
                  text: "Added Successfully!",
                  icon: "success",
                }).then(function () {
                  location.reload();
                });
              } else {
                swal({
                  title: "Something went wrong!",
                  icon: "error",
                }).then(function () {
                  location.reload();
                });
              }
            },
          });
        } else {
          swal("Cancelled", "Done :)", "error");
        }
      });
    },
  });
  $.validator.addMethod("greaterThan", function (value, element) {
    var dateFrom = $("#From_date").val();
    var dateTo = $("#To_date").val();
    return dateTo >= dateFrom;
  });

  $(document).on("click", ".get_gall_cate", function (e) {
    var cate_id = $(this).attr("data-cate_id");
    var cate_name = $(this).attr("data-cate_title");
    var d_from = $(this).attr("data-cate_from");
    var d_to = $(this).attr("data-cate_to");

    console.log(cate_name);
    $("#category_id").val(cate_id);
    $("#category_title").val(cate_name);
    $("#from_date").val(d_from);
    $("#to_date").val(d_to);
  });

  $("#edit_event_category").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Update the category!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "eventcategoryAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Updated!",
                text: "Updated Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  $("#add_event_photo").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Add New category!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "addEventPhoto.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  // Add photo gallery
  $("#add_photo_category").validate({
    rules: {
      category_title: {
        required: true,
      },
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      var data = new FormData($("#add_photo_category")[0]);
      swal({
        title: "Are you sure?",
        text: "You wants to Add New category!",
        icon: "warning",
        buttons: ["Cancel!", "Yes"],
        dangerMode: true,
      }).then(function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            method: "POST",
            url: "photocategoryAjax.php",
            data: data,
            contentType: false,
            processData: false,
            success: function (response) {
              if (response == 1) {
                swal({
                  title: "Added!",
                  text: "Added Successfully!",
                  icon: "success",
                }).then(function () {
                  location.reload();
                });
              } else {
                swal({
                  title: "Something went wrong!",
                  icon: "error",
                }).then(function () {
                  location.reload();
                });
              }
            },
          });
        } else {
          swal("Cancelled", "Done :)", "error");
        }
      });
    },
  });

  // $("#add_photo_category").submit(function (e) {});
  $(document).on("click", ".get_gp", function (e) {
    var cate_id = $(this).attr("data-cate_id");
    var cate_name = $(this).attr("data-cate_title");

    console.log(cate_name);
    $("#category_id").val(cate_id);
    $("#category_title").val(cate_name);
  });

  $("#edit_photo_category").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to update category!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "photocategoryAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Updated!",
                text: "Category Updated Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  $("#add_photo_galley").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to update the category!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "addPhotogallery.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });
  // Add videos gallery************************
  $(document).on("click", ".v_del", function (e) {
    console.log($(this).attr("data-cate_id"));
    swal({
      title: "Are you sure?",
      text: "You wants to Delete this!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "videocategoryAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });
  $(document).on("click", ".get_vide", function (e) {
    var cate_id = $(this).attr("data-cate_id");
    var cate_name = $(this).attr("data-cate_title");

    console.log(cate_name);
    $("#category_id").val(cate_id);
    $("#category_title").val(cate_name);
  });

  $("#add_video_category").validate({
    rules: {
      category_title: {
        required: true,
      },
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      var data = new FormData(this);
      swal({
        title: "Are you sure?",
        text: "You wants to Add New category!",
        icon: "warning",
        buttons: ["Cancel!", "Yes"],
        dangerMode: true,
      }).then(function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            method: "POST",
            url: "videocategoryAjax.php",
            data: data,
            contentType: false,
            processData: false,
            success: function (response) {
              if (response == 1) {
                swal({
                  title: "Added!",
                  text: "Added Successfully!",
                  icon: "success",
                }).then(function () {
                  location.reload();
                });
              } else {
                swal({
                  title: "Something went wrong!",
                  icon: "error",
                }).then(function () {
                  location.reload();
                });
              }
            },
          });
        } else {
          swal("Cancelled", "Done :)", "error");
        }
      });
    },
  });
  // $("#add_video_category").submit(function (e) {});

  $("#add_photo_galley").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Add New category!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "addPhotogallery.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  $("#add_video_galley").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Add New category!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "addVideogallery.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  // form validation
  $("#bcgvl_rti_contacts").validate({
    rules: {
      con_title: {
        required: true,
        minlength: 3,
      },
      con_name: {
        required: true,
      },
      designation: {
        required: true,
      },
      user_email: {
        required: true,
        email: true,
      },
      user_phone: {
        required: true,
        number: true,
      },
      office_addres: {
        required: true,
      },
    },
    messages: {
      con_title: {
        minlength: "Title should be at least 3 characters",
      },
      user_email: {
        email: "The email should be in the format: abc@domain.com",
      },
      user_phone: {
        number: "Please enter your phone no as a numerical value",
      },
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      // var data = $("form").serialize();
      // console.log(data);
      swal({
        title: "Are you sure?",
        text: "You wants to add RTI the contacts",
        icon: "warning",
        buttons: ["Cancel!", "Yes"],
        dangerMode: true,
      }).then(function (isConfirm) {
        if (isConfirm) {
          console.log("Form submitted");
          $.ajax({
            method: "POST",
            url: "addRTIContacts.php",
            data: $("form").serialize(),
            success: function (response) {
              if (response == 1) {
                swal({
                  title: "Added!",
                  text: "Added Successfully!",
                  icon: "success",
                }).then(function () {
                  location.reload();
                });
              } else {
                swal({
                  title: "Something went wrong!",
                  icon: "error",
                }).then(function () {
                  location.reload();
                });
              }
            },
          });
        } else {
        }
      });
    },
  });

  // BCGVL Contact form validation

  $(".get_bcgvl_contact").on("click", function () {
    var contact_id = $(this).attr("data-contact_id");
    var contact_email = $(this).attr("data-contact_email");
    var contact_phone = $(this).attr("data-contact_phone");
    var con_address = $(this).attr("data-con_address");
    var map_embeded = $(this).attr("data-map_embeded");

    $("#User_id").val(contact_id);
    $("#User_email").val(contact_email);
    $("#User_phone").val(contact_phone);
    $("#Office_addres").text(con_address);
    $("#Map_emb").text(map_embeded);
  });

  $("#bcgvl_contacts").validate({
    rules: {
      user_email: {
        required: true,
        email: true,
      },
      user_phone: {
        required: true,
      },
      office_addres: {
        required: true,
      },
      map_emb: {
        required: true,
      },
    },
    messages: {
      user_email: {
        email: "The email should be in the format: abc@domain.com",
      },
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      swal({
        title: "Are you sure?",
        text: "You wants to add the contacts",
        icon: "warning",
        buttons: ["Cancel!", "Yes"],
        dangerMode: true,
      }).then(function (isConfirm) {
        if (isConfirm) {
          console.log("Form submitted");
          $.ajax({
            method: "POST",
            url: "addContacts.php",
            data: $("form").serialize(),
            success: function (response) {
              if (response == 1) {
                swal({
                  title: "Added!",
                  text: "Added Successfully!",
                  icon: "success",
                }).then(function () {
                  location.reload();
                });
              } else {
                swal({
                  title: "Something went wrong!",
                  icon: "error",
                }).then(function () {
                  location.reload();
                });
              }
            },
          });
        } else {
        }
      });
    },
  });

  $("#edit_bcgvl_contact").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants Update the contacts",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "addContacts.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal({
          title: "Cancelled!",
          icon: "error",
        }).then(function () {
          location.reload();
        });
      }
    });
  });

  $(".logout").on("click", function () {
    $.ajax({
      method: "POST",
      url: "logoutAjax.php", // <-- point to server-side PHP script
      contentType: false,
      processData: false,
      success: function (response) {
        window.location = "index.php";
      },
    });
  });

  $(".gallery_edit").on("click", function () {
    var gallery_id = $(this).attr("data-gallery_id");
    var cate = $(this).attr("data-cate");
    var photofile = $(this).attr("data-photofile");
    var photo_caption = $(this).attr("data-photo_caption");

    $("#Event_id").val(gallery_id);
    $("#Even_cat").val(cate);
    $("#Event_cap").val(photo_caption);
    $(".photo_file").text(photofile);
  });
  // Edit event_photo file
  $("#edit_event_photo").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Update the photo!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "addEventPhoto.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  //
  $("#add_photo_gallery").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Add New category!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "addEventPhoto.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  $("#edit_photo_gallery").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Update the photo!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "PhotogalleryAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  // Edit Video gallery
  $(".vid_gallery_edit").on("click", function () {
    var gallery_id = $(this).attr("data-gallery_id");
    var cate = $(this).attr("data-cate");
    var photofile = $(this).attr("data-photofile");
    var photo_caption = $(this).attr("data-photo_caption");
    console.log(photofile);

    $("#Event_id").val(gallery_id);
    $("#Even_cat").val(cate);
    $("#Event_cap").val(photo_caption);
    $("#Event_photo").val(photofile);
  });

  $("#edit_video_gallery").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Update the photo!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "addVideogallery.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                // location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                // location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  // FAQ section
  $("#add_faq").validate({
    rules: {
      faq_title: {
        required: true,
      },
      faq_description: {
        required: true,
      },
      faq_status: {
        required: true,
      },
    },
    submitHandler: function (form, e) {
      swal({
        title: "Are you sure?",
        text: "You wants to add new FAQ!",
        icon: "warning",
        buttons: ["No, cancel it!", "Yes, I am sure!"],
        dangerMode: true,
      }).then(function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            method: "POST",
            url: "faqAjax.php",
            data: new FormData($("#add_faq")[0]),
            contentType: false,
            processData: false,
            success: function (response) {
              if (response == 1) {
                swal({
                  title: "Added!",
                  text: "New FAQ added successfully!",
                  icon: "success",
                }).then(function () {
                  location.reload();
                });
              } else {
                swal({
                  title: "Something went wrong!",
                  icon: "error",
                }).then(function () {
                  location.reload();
                });
              }
            },
          });
        } else {
          swal("Cancelled", "Done :)", "error");
        }
      });
    },
  });
  $(".get_faq").on("click", function () {
    var report_id = $(this).attr("data-faq_id");
    var report_title = $(this).attr("data-faq_title");
    var report_desc = $(this).attr("data-faq_desc");
    var report_attach = $(this).attr("data-faq_status");
    console.log(report_desc);

    $("#Faq_id").val(report_id);
    $("#Faq_title").val(report_title);
    $("#Faq_description").text(report_desc);
    $("#Faq_status").val(report_attach);
  });

  $("#edit_faq").submit(function (e) {
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
          url: "faqAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "New Report added and uploaded successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  $(".faq_del").on("click", function () {
    // e.preventDefault();
    var data = $(this).attr("data-faq_id");
    // console.log(data);
    swal({
      title: "Are you sure?",
      text: "You wants to delete this!",
      icon: "warning",
      buttons: ["No, cancel it!", "Yes, I am sure!"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "deleteFaq.php",
          data: { id: data },
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Deleted!",
                text: "Successfully Deleted!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  /* *********************** RTI Disclouser *****************************/
  //  get RTI Level 1
  $(document).on("click", ".getMSTRTI", function (e) {
    var rti_id = $(this).attr("data-mst_rti_id");
    var rti_name = $(this).attr("data-mst_rti_name");
    var rti_status = $(this).attr("data-mst_rti_status");
    console.log(rti_id);

    $("#Edit_Rti_id").val(rti_id);
    $("#Edit_rti_title").val(rti_name);
    $("#Edit_rti_status").val(rti_status);
  });

  $("#RTI_file_check").change(function () {
    if ($(this).is(":checked")) {
      // $("#url_check").attr("checked", false);
      $("#RTI_url_check").prop("checked", false);
      $(".RTI_url").attr("style", "display:none");
      $(".RTI_upload").attr("style", "display:block");
    } else {
      $(".RTI_upload").attr("style", "display:none");
    }
  });

  $("#RTI_url_check").change(function () {
    if ($(this).is(":checked")) {
      $("#RTI_file_check").prop("checked", false);
      $(".RTI_upload").attr("style", "display:none");
      $(".RTI_url").attr("style", "display:block");
    } else {
      $(".RTI_url").attr("style", "display:none");
    }
  });

  $("#add_mst_rti").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to add new RTI!",
      icon: "warning",
      buttons: ["No, cancel it!", "Yes, I am sure!"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "add_rtiAjax.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "New RTI added successfully!",
                icon: "success",
              }).then(function () {
                // location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                // location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });

  // RTI Level 3 Attachments
  $("#rti_file").change(function () {
    if ($(this).is(":checked")) {
      // $("#url_check").attr("checked", false);
      $("#rti_url").prop("checked", false);
      $(".event_url").attr("style", "display:none");
      $(".upload_event").attr("style", "display:block");
    } else {
      $(".upload_event").attr("style", "display:none");
    }
  });
  $("#rti_url").change(function () {
    if ($(this).is(":checked")) {
      $("#rti_file").prop("checked", false);
      $(".upload_event").attr("style", "display:none");
      $(".event_url").attr("style", "display:block");
    } else {
      $(".event_url").attr("style", "display:none");
    }
  });

  // Sub RTI Attachments
  $("#sub_rti_file").change(function () {
    if ($(this).is(":checked")) {
      // $("#url_check").attr("checked", false);
      $("#sub_rti_url").prop("checked", false);
      $(".event_url").attr("style", "display:none");
      $(".upload_event").attr("style", "display:block");
    } else {
      $(".upload_event").attr("style", "display:none");
    }
  });
  $("#sub_rti_url").change(function () {
    if ($(this).is(":checked")) {
      $("#sub_rti_file").prop("checked", false);
      $(".upload_event").attr("style", "display:none");
      $(".event_url").attr("style", "display:block");
    } else {
      $(".event_url").attr("style", "display:none");
    }
  });
  //Get the
  $(document).on("click", ".getRTI", function (e) {
    var subs_id = $(this).attr("data-subs_id");
    var subs_name = $(this).attr("data-subs_name");
    // console.log(subs_id);

    $("#Rti_id").val(subs_id);
    $("#Subs_name").val(subs_name);
  });

  //Get the sub RTI
  $(document).on("click", ".getSub_RTI", function (e) {
    var subs_id = $(this).attr("data-sub_id");
    var subs_name = $(this).attr("data-sub_name");
    // console.log(subs_id);

    $("#Sub_Rti_id").val(subs_id);
    $("#Sub_name").val(subs_name);
  });

  // Edit RTI file
  $("#edit_subs_rti").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Update the pdf/Url!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "updateRTI.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });
  // Edit Sub RTI file
  $("#edit_sub_rti").submit(function (e) {
    e.preventDefault();
    var data = new FormData(this);
    swal({
      title: "Are you sure?",
      text: "You wants to Update the pdf/Url!",
      icon: "warning",
      buttons: ["Cancel!", "Yes"],
      dangerMode: true,
    }).then(function (isConfirm) {
      if (isConfirm) {
        $.ajax({
          method: "POST",
          url: "updateSub_RTI.php",
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response == 1) {
              swal({
                title: "Added!",
                text: "Added Successfully!",
                icon: "success",
              }).then(function () {
                location.reload();
              });
            } else {
              swal({
                title: "Something went wrong!",
                icon: "error",
              }).then(function () {
                location.reload();
              });
            }
          },
        });
      } else {
        swal("Cancelled", "Done :)", "error");
      }
    });
  });
  // Add New RTI
  $("#add_rti").validate({
    rules: {
      rti_title: {
        required: true,
      },
      rti_status: {
        required: true,
      },
    },
    submitHandler: function (form, e) {
      swal({
        title: "Are you sure?",
        text: "You wants to add new RTI!",
        icon: "warning",
        buttons: ["No, cancel it!", "Yes, I am sure!"],
        dangerMode: true,
      }).then(function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            method: "POST",
            url: "add_rtiAjax.php",
            data: new FormData($("#add_rti")[0]),
            contentType: false,
            processData: false,
            success: function (response) {
              if (response == 1) {
                swal({
                  title: "Added!",
                  text: "New RTI added successfully!",
                  icon: "success",
                }).then(function () {
                  location.reload();
                });
              } else {
                swal({
                  title: "Something went wrong!",
                  icon: "error",
                }).then(function () {
                  location.reload();
                });
              }
            },
          });
        } else {
          swal("Cancelled", "Done :)", "error");
        }
      });
    },
  });

  $(".btnRefresh").click(function () {
    console.log("sdfsdf");
    $("#captcha_code").attr("src", "captcha.php");
    return false;
  });

  // Feedback section
  $(".viewMsg").click(function () {
    var name = $(this).attr("data-name");
    var sub = $(this).attr("data-sub");
    var msg = $(this).attr("data-msg");
    var feed_id = $(this).attr("data-feed_id");
    console.log(feed_id);

    $(".user_name").text(name);
    $(".msg_title").text(sub);
    $(".msg_desc").text(msg);

    $.ajax({
      method: "POST",
      url: "feedback_statusAjax.php",
      dataType: "json",
      data: { feed_id: feed_id },
      success: function (response) {
        if (response == 1) {
          $("#add-row").load(location.href + " #add-row");
        }
      },
    });
  });

  // Delete gallery Category
  $(document).on("click", ".delete_cate", function () {
    $.ajax({
      method: "POST",
      url: "feedback_statusAjax.php",
      dataType: "json",
      data: { feed_id: feed_id },
      success: function (response) {
        if (response == 1) {
          $("#add-row").load(location.href + " #add-row");
        }
      },
    });
  });
});
