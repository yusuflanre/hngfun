<?php

      if ($_GET['password'] && $_GET['password'] === "xyzintern@hng.COM") {
        echo "True";
      }
      else {
          header("Location: " . "index.php");
      }
    // $dsn = 'mysql:host=localhost;dbname=vewpay_email';
    // $pdo = new PDO($dsn, 'vewpay_chidi', 'Physics6559');
    //
    // if ($pdo) {
    //
    //   $query = $pdo->prepare("SELECT email from emails");
    //   $success = $query->execute();
    //
    //   if ($success) {
    //
    //     while ($retrieve = $query->fetch(PDO::FETCH_ASSOC)) {
    //
    //       foreach ($retrieve as $mail) {
    //
    //         $to = $mail;
    //          $subject = 'vewpay is live';
    //          $body = "Hi vewpayers,\n\n
    //
    //                  We are glad to announce to you that your trusted peer to peer donation site vewpay.com.\n
    //                  Visit http://www.vewpay.com \n
    //                  Register and provide help to a member and in 24 hrs you shall receive help from another member\n
    //
    //                  --vewpay";
    //
    //          mail($to, $subject, $body , 'noreply@candidpay.com');
    //
    //       }
    //
    //     }
    //
    //     echo "Email Successfully sent.";
    //
    //   }
    //
    // } else {
    //   echo "false";
    // }

 ?>
