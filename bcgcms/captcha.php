<?php 
  session_start();
  
  function randText(){
    $txt="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $str="";
    for($i=0;$i<5;$i++)
    {
      $index=rand(0,strlen($txt)-1);
      $str.=$txt[$index];
    }
    return $str;
  }

    header("Content-type:image/png");
    $image=imagecreate(70,30);
    $backColor=imagecolorallocate($image,255, 255, 255);
    $txtColor=imagecolorallocate($image,128, 0, 0);
    $line_color = imagecolorallocate($image, 151, 199, 214); 
    $pixel_color = imagecolorallocate($image, 0,0,255);
    
    for($i=0;$i<10;$i++) {
        imageline($image,0,rand()%50,50,rand()%50,$line_color);
    }  
    $code=randText();
    $_SESSION["captcha"] = $code;
    imagestring($image,5,10,7,$code,$txtColor);
    imagepng($image);
    imagecolordeallocate($backColor);
    imagecolordeallocate($txtColor);
   
    imagedestroy($image);
?>