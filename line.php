 <?php
  

function send_LINE($msg){
 $access_token = 'pmc4QkO66rnCdqBtfBuP1IVWXnCAobmjZvP6vp+dVFcdgCPYAlNylL7pKWDcKsQ/2uWa78W12A0BafcwDagfATUhkfEo0vFnvoPkNBmJKlLmcJQd9D+kuXbf3tKCwaAbMYKatrJZhkp64CnkBx82UQdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U10598e2c4a91261df760ffa85d8e7b4e',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
