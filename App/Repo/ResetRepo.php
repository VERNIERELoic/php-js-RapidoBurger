<?php

namespace App\Repo;

use App\Dependencies\PHPMailer\PHPMailer;

class ResetRepo extends BaseRepo
{

  function generate_password($length = 20)
  {
    $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz' .
      '0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|';

    $str = '';
    $max = strlen($chars) - 1;

    for ($i = 0; $i < $length; $i++)
      $str .= $chars[random_int(0, $max)];

    return $str;
  }

  public function genPassword()
  {
    $resetrepo = new ResetRepo();
    $password = $resetrepo->generate_password();
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    return [$password, $hashed_password];
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
          $mail->SMTPDebug = 0;
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
          $mail->Subject = 'Recuperation mot de passe Rapido project';
          $mail->Body    = '<b>Nouveau mot de passe : </b>' . $password;
          $mail->AltBody = 'Nouveau mot de passe :' . $password;
          $mail->send();
          return $email;
        } catch (\Exception $e) {
          $error = $mail->ErrorInfo;
          return true;
        }
      }
      
    }
  }
}
