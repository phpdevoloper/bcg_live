function getCookie(Name) {
    var re = new RegExp(Name + "=[^;]+", "i"); //construct RE to search for target name/value pair
    if (document.cookie.match(re))
      //if cookie found
      return document.cookie.match(re)[0].split("=")[1]; //return its value
    return null;
  }
  jQuery(document).ready(function () {
  
      
  if (getCookie("contrast") == "1") {
      jQuery("[href*='style.css']").remove();
    jQuery("head").append(
      '<link rel="stylesheet"   href="css/darktheme.css">'
    );
  }
  
  if (getCookie("contrast") == "0") {
      jQuery("[href*='darktheme.css']").remove();
    jQuery("head").append(
      '<link rel="stylesheet"   href="styles/main_styles.css">'
    );
    
  }
  
  jQuery(".dark").click(function (e) {
    e.preventDefault();
    var thirtyDays = 1000 * 60 * 60 * 24 * 30;
    var expireDate = new Date(new Date().valueOf() + thirtyDays);
  
    document.cookie =
      "contrast" + "=" + 1 + "; expires=" + expireDate.toGMTString() + "; path=/";
  
    jQuery("head").append(
      '<link rel="stylesheet" type="text/css" media="screen" href="css/darktheme.css">'
    );
  });
  
  jQuery(".light").click(function () {
    var thirtyDays = 1000 * 60 * 60 * 24 * 30;
    var expireDate = new Date(new Date().valueOf() + thirtyDays);
  
    document.cookie =
      "contrast" + "=" + 0 + "; expires=" + expireDate.toGMTString() + "; path=/";
  
    jQuery("head").append(
      '<link rel="stylesheet" type="text/css" media="screen" href="styles/main_styles.css">'
    );
    jQuery("[href*='darktheme.css']").remove();
  });
  
  });