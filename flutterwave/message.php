<?php
$data = array(    
              "sender"=>'+250789775066',
              "recipients"=>$phno,
              "message"=>@$messages,    
            );

            $url = "https://www.intouchsms.co.rw/api/sendsms/.json";            
            $data = http_build_query ($data);
            $username="Jean.Claude.JeanClaudeT.TJC";$password="TJC/1996/T1J2C3/Tjc.1996@/123/tjc@1996.t";$username=explode(".",$username);$username=$username[2];$password=explode("/",$password);$password=$password[3];         
            //open connection
            $ch = curl_init();
            //set the url, number of POST vars, POST data
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
            curl_setopt($ch,CURLOPT_POST,true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
            //execute post
            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);            
            // echo $result;
            //close connection
            curl_close($ch);


$data = json_decode($result, true);

if ($data && isset($data['details'][0]['message'])) {
    $message = $data['details'][0]['message'];
}
?>