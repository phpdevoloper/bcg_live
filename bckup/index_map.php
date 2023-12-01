<?php include('inc/header.php');
include('inc/dbconnection.php');
?>

  
<div class="about">
    <section>
        <ul class="breadcrumb wizard">
            <li class="completed"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="completed"><a href="javascript:void(0);">Who's who</a></li>
            <li class=""><a href="director_desk.php">Supply of BCG Vaccine</a></li>
        </ul>
    </section>
    <div class="container">
	<div class="section">
        <h3 class="text-center txt" style="color: #299adc;">Supply of BCG Vaccine</h3>
    </div>
        <div class="row">
            <div class="col-md-12" >           
                
				  <label for="" class="col-md-2" >Financial Year : </label>
                    <select name="" id="year_of_supply" class="text-left">
                        <?php   $sql = "SELECT * FROM supply_of_bcg"; 
                                $res = pg_query($db,$sql);
                                $result = pg_fetch_all($res);
                                foreach ($result as $year) {
                        ?>
                            <option value="<?php echo $year['supply_id'];?>" data-supply_report="<?php echo $year['supply_report']; ?>"><?php echo $year['year_of_supply']; ?></option>
                            <?php    } ?>
                    </select>
             
            </div>
        </div>
	<div class="row" class="overflow-hidden">	
	<div class="col-lg-8" >
    <div id="map" ></div>
	</div>
	<div class="col-lg-4"  >
	<div id="divval">
	<ul><li>1.Tamil Nadu 5 lakh doses</li>
    <li>2.GMSD Chennai 34 lakh doses</li>
	 <li>3.Karnataka 2.4 lakh doses</li>
	 <li>4.Andhra Pradesh 4.4 lakh doses</li>	  
	 <li>5.Telangana 3 lakh doses</li>    
	 <li>6.GMSD Mumbai 24.2 lakh doses</li>
	 <li>7.Maharastra 5.6 lakh doses</li>
	 <li>8.Chattisgarh 5.2 lakh doses</li>
	 <li>9.Madhya Pradesh 12.8 lakh doses</li>
	 <li>10.Gujarat 4.8 lakh doses</li>
	 <li>11.Kolkata 54.5 lakh doses</li>
	  <li>12.Uttar Pradesh 33.1 lakh doses</li>
	 <li>13.GMSD Karnal 54 lakh doses</li>
	</ul>
	 </div>
	<div id="divval1" style="display:none">
	<ul><li> GMSD Chennai 9.0</li>
<li>DPH Chennai 3.0</li>
<li>GMSD Mumbai 65.5 </li>
<li>Rajkot, Gujarat 0.8</li>
<li>Vodadara, Gujarat 1.6</li>
<li>Surat , Gujarat 0.8</li>
<li>Gandhi Nagar ,Gujarat 4.8</li>
<li>Bhopal, Madhya Pradesh 2.4</li>
<li>Indore, Madhya Pradesh 3.6</li>
<li>Jabalpur, Madhya Pradesh 4.0 </li>
<li>Gwalior, Madhya Pradesh 2.8</li>
<li>Pune 12.0</li>
<li>Kolkata 54.5</li>
<li>Gannavaram 2.6</li>
</ul>
</div>
	</div>
</div>
</div>
	</div>
    <link rel="stylesheet" type="text/css" href="./style_map.css" />
    <script type="module" src="./index.js"></script>
       <script
      src="./maps.js"
      defer
    ></script>
	<script type="text/javascript"  language = "javascript" >
	
	</script>
 
<?php include('inc/simple_footer.php'); ?>
  


