/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Home Slider
5. Init SVG


******************************/

$(document).ready(function () {
  //mouse outside of click event
  // $(".menu_clos").on("click", function (event) {
  //   $("#sidebarMenu").removeClass("show");
  // });

  //footer slick slide
  $(".items").slick({
    arrows: true,
    accessibility: true,
    // autoplay: true,
    variableWidth: false,
    autoplaySpeed: 3000,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          adaptiveHeight: true,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
    ],
  });

  //photo gallery slider
  $(".gallery").slick({
    arrows: true,
    accessibility: true,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          adaptiveHeight: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  ("use strict");

  /* 

	1. Vars and Inits

	*/

  var header = $(".header");
  var hamb = $(".hamburger");
  var hambActive = false;
  var menuActive = false;

  setHeader();

  $(window).on("resize", function () {
    setHeader();
  });

  $(document).on("scroll", function () {
    setHeader();
  });

  initMenu();
  initHomeSlider();
  initSvg();

  /* 

	2. Set Header

	*/

  function setHeader() {
    if ($(window).scrollTop() > 100) {
      header.addClass("scrolled");
    } else {
      header.removeClass("scrolled");
    }
  }

  /* 

	3. Init Menu

	*/

  function initMenu() {
    if ($(".hamburger").length) {
      var hamb = $(".hamburger");

      hamb.on("click", function (event) {
        event.stopPropagation();

        if (!menuActive) {
          openMenu();

          $(document).one("click", function cls(e) {
            if ($(e.target).hasClass("menu_mm")) {
              $(document).one("click", cls);
            } else {
              closeMenu();
            }
          });
        } else {
          $(".menu_container").removeClass("active");
          menuActive = false;
        }
      });
    }
  }

  function openMenu() {
    var fs = $(".menu_container");
    fs.addClass("active");
    hambActive = true;
    menuActive = true;
  }

  function closeMenu() {
    var fs = $(".menu_container");
    console.log(fs);
    fs.removeClass("active");
    hambActive = false;
    menuActive = false;
  }
  /* 

	2. Init Home Slider

	*/

  function initHomeSlider() {
    if ($(".home_slider").length) {
      var homeSlider = $(".home_slider");
      homeSlider.owlCarousel({
        items: 1,
        loop: true,
        autoplay: false,
        autoplayTimeout: 10000,
        nav: false,
        dots: false,
        smartSpeed: 1200,
        onInitialized: startProgressBar,
        onTranslate: resetProgressBar,
        onTranslated: startProgressBar,
      });

      function startProgressBar() {
        if ($(".home_slider_progress").length) {
          $(".home_slider_progress").css({
            width: "100%",
            transition: "width 8500ms",
          });
        }
      }

      function resetProgressBar() {
        if ($(".home_slider_progress").length) {
          $(".home_slider_progress").css({
            width: "0",
            transition: "width 0s",
          });
        }
      }
    }
  }

  /* 

	6. Init SVG

	*/

  function initSvg() {
    jQuery("img.svg").each(function () {
      var $img = jQuery(this);
      var imgID = $img.attr("id");
      var imgClass = $img.attr("class");
      var imgURL = $img.attr("src");

      jQuery.get(
        imgURL,
        function (data) {
          // Get the SVG tag, ignore the rest
          var $svg = jQuery(data).find("svg");

          // Add replaced image's ID to the new SVG
          if (typeof imgID !== "undefined") {
            $svg = $svg.attr("id", imgID);
          }
          // Add replaced image's classes to the new SVG
          if (typeof imgClass !== "undefined") {
            $svg = $svg.attr("class", imgClass + " replaced-svg");
          }

          // Remove any invalid XML tags as per http://validator.w3.org
          $svg = $svg.removeAttr("xmlns:a");

          // Replace image with new SVG
          $img.replaceWith($svg);
        },
        "xml"
      );
    });
  }

  $(".ig-box > div").on("click", "img", function () {
    var src = $(this).attr("src");
    $(".ig-view > img").attr("src", src);
  });

  var c1 = $(".c1").attr("src");
  var c2 = $(".c2").attr("src");
  var c3 = $(".c3").attr("src");
  var c4 = $(".c4").attr("src");
  var arr = [c1, c2, c3, c4];
  var n = 0;

  $(".right").on("click", function () {
    $(".ig-view > img").attr("src", arr[n]);
    n += 1;
    if (n == 4) {
      n = 0;
    }
  });

  $(document).delegate('*[data-toggle="lightbox"]', "click", function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

  $("a .btn-gallery").on("click", function (event) {
    event.preventDefault();
    var gallery = $(this).attr("href");
    // $(gallery)
    //   .magnificPopup({
    //     delegate: "a",
    //     type: "image",
    //     gallery: {
    //       enabled: true,
    //     },
    //   })
    //   .magnificPopup("open");
  });

  $(".close_btn").on("click", function (event) {
    event.preventDefault();
    // console.log("sidebarMenu");
    $("#sidebarMenu").removeClass("show");
  });

  //Font size event
  $(".fontSizeEvent").on("fontSelected", function () {
    let fontSizeStatus = _getCookie("fontSizeStatus");

    if (fontSizeStatus == null) {
      fontSizeStatus = "normal";
    }
    console.log(fontSizeStatus);
    let label = $(
      '.fontSizeEvent a[data-event-type="' + fontSizeStatus + '"]'
    ).attr("data-label");
    let dataSelected = $(
      '.fontSizeEvent a[data-event-type="' + fontSizeStatus + '"]'
    ).attr("data-selected-text");

    $('.fontSizeEvent a[data-event-type="' + fontSizeStatus + '"')
      .attr("aria-label", label + " - " + dataSelected)
      .attr("title", label + " - " + dataSelected)
      .addClass("link-selected");

    $('.fontSizeEvent a[data-event-type="' + fontSizeStatus + '"')
      .parent()
      .siblings()
      .each(function () {
        let label = $(this).find("a").attr("data-label");
        $(this)
          .find("a")
          .attr("aria-label", label)
          .attr("title", label)
          .removeClass("link-selected");
      });
  });

  $(".fontSizeEvent").trigger("fontSelected");

  $(".fontSizeEvent a").on("click", function (event) {
    event.stopPropagation();
    event.preventDefault();
    let fontEvent = $(this).attr("data-event-type");

    if (fontEvent == "increase") {
      if (parseInt(fontSize) < 18) {
        fontSize = parseInt(fontSize) + 2;
        _setCookie("fontSizeStatus", "increase");
      }
    } else if (fontEvent == "decrease") {
      if (parseInt(fontSize) > 10) {
        fontSize = parseInt(fontSize) - 2;
      }
      _setCookie("fontSizeStatus", "decrease");
    } else {
      fontSize = 14;
      _setCookie("fontSizeStatus", "normal");
    }

    $(this)
      .addClass("link-selected")
      .parent()
      .siblings()
      .find("a")
      .removeClass("link-selected");
    _setCookie("fontSize", fontSize);
    $("body").css("font-size", fontSize + "px");
    $(".fontSizeEvent").trigger("fontSelected");
  });

  $("#owl-carousel").owlCarousel({
    arrows: false,
    autoplay: true,
    loop: true,
    margin: 30,
    dots: true,
    nav: true,
    items: 1,
  });
});
