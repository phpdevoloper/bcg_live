 var val="bcgvl_Vaccine supply details for FY 2021-22.png";
  
  $(document).ready(function () {
        var year = $('#year_of_supply').val();
        var supply_report = $('#year_of_supply').find(':selected').attr('data-supply_report');
        val=supply_report;
		initMap(); 
		if(val=="bcgvl_Vaccine supply details for FY 2021-22.png")			
			{
			$("#divval1").hide();
			$("#divval").show();
			}
			else
			{
			$("#divval").hide();
			$("#divval1").show();
			}
        $("#year_of_supply").change(function(){
		
            var supply_report = $('#year_of_supply').find(':selected').attr('data-supply_report');
		
			val=supply_report;	
			if(val=="bcgvl_Vaccine supply details for FY 2021-22.png")			
			{
			$("#divval1").hide();
			$("#divval").show();
			}
			else
			{
			$("#divval").hide();
			$("#divval1").show();
			}
			initMap();
			
            
        });		


    });



function initMap() {
$(function()
{
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: { lat: 22.97596111014563, lng: 79.72124996165142 },
	
  });

var vals;
if(val=="bcgvl_Vaccine supply details for FY 2021-22.png")
  vals=[[{ lat:11.44592575767098,  lng: 78.17316877209173},"Tamil Nadu 5 lakh doses"],[{ lat: 13.115718780493578, lng: 80.25819311805569 }, "GMSD Chennai 34 lakh doses"],[{ lat: 15.131121171742631, lng:  75.86160469079088 }, "Karnataka 2.4 lakh doses"],[{ lat: 15.38644756351019, lng:  79.39159572915283 }, "Andhra Pradesh 4.4 lakh doses"],[{ lat: 18.16158826692175, lng: 79.1409824584627}, "Telangana 3 lakh doses"],[{ lat: 18.972496890251033, lng: 72.82013452520127 }, "GMSD Mumbai 24.2 lakh doses"],[{ lat: 19.82177209905293, lng:  75.73103889159803 }, "Maharastra 5.6 lakh doses"],[{ lat:21.295132, lng:81.828232}, "Chattisgarh 5.2 lakh doses"],[{ lat:23.473324, lng:77.947998}, "Madhya Pradesh 12.8 lakh doses"],[{ lat:22.309425, lng:72.136230}, "Gujarat 4.8 lakh doses"],[{ lat:22.55545125141169, lng:88.35752767715809}, "Kolkata 54.5 lakh doses"],[{ lat:28.207609, lng:79.826660}, "Uttar Pradesh 33.1 lakh doses"],[{ lat: 29.700668253252942, lng: 76.9932779138119}, "GMSD Karnal 54 lakh doses"],];
else
  vals=[[{ lat: 13.115718780493578, lng: 80.25819311805569 }, "GMSD Chennai 9.0"],[{ lat: 13.115718780493578, lng: 80.25819311805569 }, "DPH Chennai 3.0"],[{ lat: 18.972496890251033, lng: 72.82013452520127 }, "GMSD Mumbai 65.5 "],[{ lat: 22.307099656830598,  lng:  70.79725347390104 }, "Rajkot, Gujarat 0.8"],[{ lat: 22.295006930031867,  lng:  73.13963815767636 }, "Vodadara, Gujarat 1.6"],[{ lat: 21.203673914469224, lng: 72.89082413269384}, "Surat , Gujarat 0.8"],[{  lat:23.213475983973172, lng:72.5715079550968}, "Gandhi Nagar ,Gujarat 4.8"],[{ lat: 23.371057150456025, lng:  77.3863113431466  }, "Bhopal, Madhya Pradesh 2.4"],[{ lat:22.765108857885792,  lng:75.85127308362088}, "Indore, Madhya Pradesh 3.6"],[{ lat:23.17093931591078, lng:79.93269863200061}, "Jabalpur, Madhya Pradesh 4.0 "],[{ lat:26.198313553247914,  lng:78.20228710642179}, "Gwalior, Madhya Pradesh 2.8"],[{ lat:18.53105560026119,  lng: 73.85745194743154}, "Pune 12.0"],[{ lat:22.57789225221467,   lng: 88.3655434482418}, "Kolkata 54.5"],[{ lat:16.547019154241962,   lng: 80.80272415396385}, "Gannavaram 2.6"],];
 
const tourStops=vals;
const infoWindow = new google.maps.InfoWindow();
  const image ="injection.png"
    tourStops.forEach(([position, title], i) => {
    const marker = new google.maps.Marker({
      position,
      map,
     title: `${i + 1}. ${title}`,
      label: {text: `${i + 1}`,color:"#36013F"},
      optimized: true,
	  	   icon: image,
		   scrollwheel: true,
    navigationControl: true,
    mapTypeControl: true,
    scaleControl: true,
    draggable: false,

    });

    // Add a click listener for each marker, and set up the info window.
    marker.addListener("click", () => {
      infoWindow.close();
      infoWindow.setContent(marker.getTitle());
      infoWindow.open(marker.getMap(), marker);
    });
  }); 
    
});
}


 // google.maps.event.addDomListener(window, 'load', initMap());
	window.initMap = initMap();

