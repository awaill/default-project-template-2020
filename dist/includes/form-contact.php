<div class="primary-container">
  <form action="/mail/send-contact.php" enctype="multipart/form-data" method="post">
    <div><label for="user_input_name">Name</label><input type="text" name="user_input_name" title="Name" required placeholder="Wilson Smith"></input></div>
    <div><label for="user_input_phone_number">Phone number</label><input type="tel" name="user_input_phone_number" title="Phone number" required placeholder="0753 442 4464"></input></div>
    <div><label for="user_input_email_address">Email address</label><input type="email" name="user_input_email_address" title="Email address" required placeholder="will@gmail.com"></input></div>
    <div><label for="user_input_comment">Comment</label><textarea rows="10" name="user_input_comment" title="Comment" required placeholder="I'd like some more information."></textarea></div>
    <div><div class="g-recaptcha" data-sitekey="6LcqtskUAAAAAK9FcV5h3bCamU9bD3s3b8kRd6qo" data-callback="recaptcha_callback"></div></div>
    <div><button type="submit" name="submit" value="Send" class="send-button disabled">Send</button></div>
  </form>
</div>
