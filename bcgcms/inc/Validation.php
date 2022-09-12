<?php 

class  Validation{
    function clean($data)
    {
       var_dump('sfd'.$data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        $data = strip_tags($data);
        return $data;
    }
  }


?>