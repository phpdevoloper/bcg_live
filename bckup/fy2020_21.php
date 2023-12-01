<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<!-- Home -->
<!-- <div class="banner">
    <img src="images/about.jpg" alt="" />
</div> -->
<!-- product description -->
<div class="about">
    <section>
        <ul class="breadcrumb wizard">
            <li class="completed"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="completed"><a href="javascript:void(0);">Division</a></li>
            <li class=""><a href="administration.php">FY 2020-2021</a></li>
        </ul>
    </section>
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;">Supply of BCG Vaccine for FY 2020-21</h3>
    </div>
    <div class="container aos-init aos-animate" data-aos="fade-up" style="padding-top: 38px;">
        <div class="container">
            <!-- About Content -->
            <section id="about">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                <table id="example" class="table  table-striped" style="width:100%; height: 1194px;">
                    <tbody>
                    <tr style="height: 54px;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><strong><span style="color: #000000;">S.NO.</span></strong></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center; padding-left: 40px;"><strong>CONSIGNEE</strong></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><strong>TOTAL SUPPLIED</strong></p>
                    </td>
                    </tr>
                    <tr style="height: 54px;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">1</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">GMSD, Chennai</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">9.0</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">2</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">DPH, Chennai</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">3.0</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">3</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px;">
                    <p style="text-align: center;"><span style="font-weight: 400;">GMSD, Mumbai</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">65.5</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">4</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Rajkot, Gujarat</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">0.8</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">5</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Vadodara, Gujarat</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">1.6</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">6</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Surat, Gujarat</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">0.8</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">7</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Gandhinagar, Gujarat</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">4.8</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">8</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Bhopal, Madhya Pradesh</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">2.4</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">9</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Indore, Madhya Pradesh</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">3.6</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">10</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Jabalpur, Madhya Pradesh</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">4.0</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">11</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Gwalior, Madhya Pradesh</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">2.8</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">12</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Raipur, Chhattisgarh</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">2.6</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">13</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Pune</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">12.0</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px; text-align: center;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">14</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Kolkata</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">54.5</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px;">
                    <td style="height: 54px; width: 113.469px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">15</span></p>
                    </td>
                    <td style="height: 54px; width: 378.234px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">Gannavaram</span></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><span style="font-weight: 400;">2.6</span></p>
                    </td>
                    </tr>
                    <tr style="height: 54px;">
                    <td style="height: 54px; width: 505.484px; text-align: center;" colspan="2">
                    <p style="text-align: center;"><strong> &nbsp; &nbsp; Total Number of Vaccine Doses Supplied</strong></p>
                    </td>
                    <td style="height: 54px; width: 221.953px; text-align: center;">
                    <p style="text-align: center;"><strong>170 lakh doses&nbsp;</strong></p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>