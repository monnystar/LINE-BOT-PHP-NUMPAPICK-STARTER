 <?php
  

function send_LINE($msg){
 $access_token = 'B00E1woGO3nx5SX/CaOhpMEY7jZwmcPYKlEb3nvh0/6VcH6msm99vOCdxisS1cDkcXxbSz6bL2rDJ2mRnszhJxg0psMNOuZwp200CzoWUhRFxq4zvLMAvfj50+j1NWmva4wZDImDiN/euuUQz9/WuwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U09793a2f585d3ca2c2e7fdbe41acea8e',
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
