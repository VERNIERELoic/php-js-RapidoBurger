<?php

namespace App\Repo;

use App\Models\User;
use App\Dependencies\PHPMailer\PHPMailer;

class ResetRepo extends BaseRepo
{

  public function genPassword()
  {
    $password = rand(999, 99999);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    return [$password,$hashed_password];
  }

  public function resetPsswd($userid)
  {

    $resetrepo = new ResetRepo();
    $userrepo = new UserRepo();
    $password = $resetrepo->genPassword();
    $userrepo->updatePassword($password[1], $userid);
    return $password[0];
  }

  public function sendMail()
  {
    if (isset($_POST) & !empty($_POST)) {
      $email = $_POST['email'];
      $sql = "SELECT id , email FROM users WHERE email = ?";
      $res = self::$bdd->prepare($sql);
      //$res->setFetchMode(\PDO::FETCH_CLASS, User::class);
     


      if ($res->execute(array($email))) {

        $resetrepo = new ResetRepo();
        $r = $res->fetch();
        $password = $resetrepo->resetPsswd($r['id']);

        $mail = new PHPMailer(true);

        try {
          $mail->SMTPDebug = 1;
          $mail->isSMTP();
          $mail->Host       = 'smtp.gmail.com';
          $mail->SMTPAuth   = true;
          $mail->Username   = 'rapidowebservive@gmail.com';
          $mail->Password   = 'rapido123$';
          $mail->SMTPSecure = 'tls';
          $mail->Port       = 587;

          $mail->setFrom('rapidowebservive@gmail.com', 'rapido');
          $mail->addAddress($email);

          $mail->isHTML(true);
          $mail->Subject = 'Récuperation mot de passe';
          $mail->Body    = '<b>Nouveau mot de passe : </b>' .$password;
          $mail->AltBody = 'Nouveau mot de passe :' . $password;
          $mail->send();
          echo "Mail has been sent successfully!";
        } catch (\Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
      }
    }
  }
}
