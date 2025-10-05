<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "l00558166@gmail.com";
  $subject = "پیام جدید از سایت رزومه";
  $body = "نام: $name\nایمیل: $email\nپیام:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "✅ پیام با موفقیت ارسال شد!";
  } else {
    echo "❌ ارسال پیام با خطا مواجه شد.";
  }
}
?>
