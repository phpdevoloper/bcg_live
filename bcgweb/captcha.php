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
    $image=imagecreate(150,25);
    $backColor=imagecolorallocate($image,255, 255, 255);
    $txtColor=imagecolorallocate($image,128, 0, 0);
    $line_color = imagecolorallocate($image, 64,64,64); 
    $pixel_color = imagecolorallocate($image, 0,0,255);
    
    for($i=0;$i<10;$i++) {
        imageline($image,0,rand()%50,50,rand()%50,$line_color);
    }  
    $code=randText();
    $_SESSION["captcha"] = $code;
    imagestring($image,5,15,7,$code,$txtColor);
    imagepng($image);
    imagecolordeallocate($backColor);
    imagecolordeallocate($txtColor);
   
    imagedestroy($image);



 
// session_start();
 
// $permitted_chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
  
// function generate_string($input, $strength = 10) {
//     $input_length = strlen($input);
//     $random_string = '';
//     for($i = 0; $i < $strength; $i++) {
//         $random_character = $input[mt_rand(0, $input_length - 1)];
//         $random_string .= $random_character;
//     }
  
//     return $random_string;
// }
 
// $image = imagecreatetruecolor(200, 50);
 
// imageantialias($image, true);
 
// $colors = [];
 
// $red = rand(125, 175);
// $green = rand(125, 175);
// $blue = rand(125, 175);
 
// for($i = 0; $i < 5; $i++) {
//   $colors[] = imagecolorallocate($image, $red - 20*$i, $green - 20*$i, $blue - 20*$i);
// }
 
// imagefill($image, 0, 0, $colors[0]);
 
// for($i = 0; $i < 10; $i++) {
//   imagesetthickness($image, rand(2, 10));
//   $line_color = $colors[rand(1, 4)];
//   imagerectangle($image, rand(-10, 190), rand(-10, 10), rand(-10, 190), rand(40, 60), $line_color);
// }
 
// $black = imagecolorallocate($image, 0, 0, 0);
// $white = imagecolorallocate($image, 255, 255, 255);
// $textcolors = [$black, $white];
 
// $fonts = [dirname(__FILE__).'\fonts\Acme.ttf', dirname(__FILE__).'\fonts\Ubuntu.ttf', dirname(__FILE__).'\fonts\Merriweather.ttf', dirname(__FILE__).'\fonts\PlayfairDisplay.ttf'];
 
// $string_length = 6;
// $captcha_string = generate_string($permitted_chars, $string_length);
 
// $_SESSION['captcha_text'] = $captcha_string;
 
// for($i = 0; $i < $string_length; $i++) {
//   $letter_space = 170/$string_length;
//   $initial = 15;
   
//   imagettftext($image, 24, rand(-15, 15), $initial + $i*$letter_space, rand(25, 45), $textcolors[rand(0, 1)], $fonts[array_rand($fonts)], $captcha_string[$i]);
// }
 
// header('Content-type: image/png');
// imagepng($image);
// imagedestroy($image);
?>