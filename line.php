 <?php
  

function send_LINE($msg){
 $access_token = 'D8rY4iCGBn9HQkzO+EKoTWPDL+uoxD7rQWhKlMv36VQfkd5IkP5CEUd/2q+nyCy3cXxbSz6bL2rDJ2mRnszhJxg0psMNOuZwp200CzoWUhQpcuCocWtMGcWJtjJzKEBAlbcFyZ/eWr7kqwI7hKUuawdB04t89/1O/w1cDnyilFU='; 

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
