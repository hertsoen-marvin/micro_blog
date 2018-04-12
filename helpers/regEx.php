
<?php
  function checkForRegEx($messages){
      $i=0;
      foreach ($messages as $row){
        foreach ($row as $key => $value){
          if ($key == 'contenu'){
            $messages[$i][$key] 				 = htmlspecialchars($value);
            $messages[$i]['raw_contenu'] = htmlspecialchars($value);

            $regex = "/[\w\d\.]+@([\w\d]+.[\w]+)/";
            if(preg_match($regex, $value)){
              $messages[$i][$key] = preg_replace($regex,"<a href='mailto:$0'>$0</a>" , htmlspecialchars($value));
            }

            $regex = "/https?\:+\/{2}(?:www\.)?([\w\d]+\.[\w]+)[\/\w\d\.]+\/+([^\/\s\?]+\??(?:[\w\d]+=[\w\d]+\&?)*)/";
            if(preg_match($regex, $value)){
              $messages[$i][$key] = preg_replace($regex,"<a href='$0'>$0</a>" , htmlspecialchars($value));
            }

            $regex = "/(?:([\d]{2})[\.|\-|\/]?){5}/";
            if(preg_match($regex, $value)){
              $messages[$i][$key] = preg_replace($regex,"<a href='https://www.google.fr/search?q=$0'>$0</a>" , htmlspecialchars($value));
            }

          }
        }
        $i++;
      }
      return $messages;
    }

?>
