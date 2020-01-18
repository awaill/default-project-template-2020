<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
      $fields_string = '';
      $fields = array(
        'secret' => '6LcqtskUAAAAAN2fZ-HRPWwrpetaitFYyXh9Kzv8',
        'response' => $user_response
      );
      foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result, true);
      }
    $res = post_captcha($_POST['g-recaptcha-response']);
    if (!$res['success']) {
      echo '
      <script>
        window.alert("Please make sure you have checked the reCAPTCHA box!");
      </script>
      ';
    }
    else {
      require_once('class.phpmailer.php');
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      $user_input_name = $_POST['user_input_name'];
      $user_input_phone_number = $_POST['user_input_phone_number'];
      $user_input_email_address = $_POST['user_input_email_address'];
      $user_input_comment = $_POST['user_input_comment'];

      $message = file_get_contents('email-contact.html');
      $message = str_replace('{{user_input_name}}', $user_input_name, $message);
      $message = str_replace('{{user_input_phone_number}}', $user_input_phone_number, $message);
      $message = str_replace('{{user_input_email_address}}', $user_input_email_address , $message);
      $message = str_replace('{{user_input_comment}}', $user_input_comment, $message);

      $email = new PHPMailer();
      $email->CharSet = 'UTF-8';
      $email->IsHTML(true);
      $email->SMTPDebug = 0;

      $email->From = $user_input_email_address;
      $email->FromName = $user_input_name;
      $email->Subject = '# | Enquiry';
      $email->Body = $message;

      $email->AddAddress('willcrawford162@gmail.com');

      $respond_message = file_get_contents('email-reply.html');
      $respond_message = str_replace('{{user_input_name}}', $user_input_name, $respond_message);

      $respond_email= new PHPMailer();
      $respond_email->CharSet = 'UTF-8';
      $respond_email->IsHTML(true);
      $respond_email->SMTPDebug = 0;

      $respond_email->From = 'willcrawford162@gmail.com';
      $respond_email->FromName = '#';
      $respond_email->Subject = '# | Thank you for getting in touch!';
      $respond_email->Body = $respond_message;

      $respond_email->AddAddress($user_input_email_address);

      if($email->send()) {
        $respond_email->send();
        http_response_code(200);
        header('Location: /thank-you/');
        die();
      }
      else {
        http_response_code(404);
        header('Location: /error/');
      }
    }
  }
?>
