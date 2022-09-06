<!-- Footer -->
<footer class="simple_footer">
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col">
          <div
            class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start"
          >
            <div class="cr">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              Content Owned & Maintained by BCG Vaccine Laboratory,<br />
              Developed and Hosted by National Informatics Centre(NIC),
              Ministry Of Electronics & Information Technology, Government
              Of India
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header_container nav_light" style="height: 35px">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="foo_nav">
            <ul>
              <li>
                <a href=""
                  >Last Updated :
                  <script>
                    let today = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth() + 1;
                    var yyyy = today.getFullYear();
                    document.write(dd + "/" + mm + "/" + yyyy);
                  </script></a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- </div> -->

<script src="js/jquery-3.2.1.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script> -->

<script src="plugins/dataTables/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<!-- <script src="js/fontsize.min.js"></script> -->
<script src="js/custom.js"></script>
<script>
$(".item-slider").slick({
  // autoplay: true,
  arrows: false,
  cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
//------- Custom Arrows click functionality
$(document).on("click", ".prevSlide", function () {
  $(".item-slider").slick("slickPrev");
});

$(document).on("click", ".nextSlide", function () {
  $(".item-slider").slick("slickNext");
});

//------- Click to filter slides according to user's choice
$(document).on("click", ".filter-option li a", function () {
  $(".filter-option li a").removeClass("active");
  $(this).addClass("active");

  var cat = $(this).attr("data-category");

  if (cat !== "all") {
    $(".item-slider").slick("slickUnfilter");

    $(".item-slider li").each(function () {
      $(this).removeClass("slide-shown");
    });

    $(".item-slider li[data-match=" + cat + "]").addClass("slide-shown");

    $(".item-slider").slick("slickFilter", ".slide-shown");
  } else {
    $(".item-slider li").each(function () {
      $(this).removeClass("slide-shown");
    });
    $(".item-slider").slick("slickUnfilter");
  }
});
</script>
</body>
</html>
