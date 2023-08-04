<?php
require_once("Set/phpmailer/PHPMailerAutoload.php");
include('smtp-config.php');
include('Configuration.php');

echo "                       \e[0m\e[1;91m                    \e[0m\r\n";




echo " \e[93m██╗   ██╗██╗ ██████╗████████╗ ██████╗ ██████╗     ██╗   ██╗██████╗ \e[1;32m \e[0m\r\n";
echo " \e[93m██║   ██║██║██╔════╝╚══██╔══╝██╔═══██╗╚════██╗    ██║   ██║╚════██╗\e[1;32m\e[0m\r\n";
echo " \e[37m██║   ██║██║██║        ██║   ██║   ██║ █████╔╝    ██║   ██║ █████╔╝\e[1;32m\e[0m\r\n";
echo " \e[0m\e[1;37m╚██╗ ██╔╝██║██║        ██║   ██║   ██║ ╚═══██╗    ╚██╗ ██╔╝██╔═══╝ \e[0m\r\n";
echo " \e[0m\e[1;91m ╚████╔╝ ██║╚██████╗   ██║   ╚██████╔╝██████╔╝     ╚████╔╝ ███████╗\e[0m\r\n";
echo " \e[0m\e[1;91m  ╚═══╝  ╚═╝ ╚═════╝   ╚═╝    ╚═════╝ ╚═════╝       ╚═══╝  ╚══════╝\e[0m\r\n";
echo "\e[0m\e[1;91m ⚚\e[1;93m  Victo3 Sender Office365 Bank Mail 163 Comcast Aol Yahoo 2022 \e[1;91m ⚚    \e[1;91m\r\n";
echo "\e[0m\e[0;93m████████\e[1;32mSETTINGS\e[1;93m█████████████████████████████████████████████████████       \e[1;32m \e[1;91m\r\n";
echo "\e[0m\e[1;93m     █                                                     \e[1;91m\r\n";
echo "\e[0m\e[1;93m     █       \e[1;37mSSL&TLS \e[1;91m: \e[1;32mON   \e[1;93m    \e[1;93m         \e[1;91m\r\n";
echo "\e[1;93m     █▀▀\e[1;32mFILES\e[1;93m▀▀▀▀▀▀▀▀▀▀▀▀▀▀█            \e[1;37mCopyright © Victo3 Sender 2022  \e[1;91m\r\n";
echo "\e[1;93m     █\e[1;37m Smtp   \e[1;91m:\e[1;32m Active   \e[1;93m  █    █▀▀\e[1;32mABOUT\e[1;93m▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀█ \e[0m\r\n";
echo "\e[1;93m     █\e[1;37m Leads  \e[1;91m:\e[1;32m Emails.txt\e[1;93m █▀▀▀▀█ \e[1;37mLatest Version Of Victo3 Sender V2 \e[1;93m           █   \e[0m\r\n";
echo "\e[1;93m     █\e[1;37m Letter \e[1;91m:\e[1;32m Newt.html  \e[1;93m█    █\e[1;37m Your Key \e[1;91m : \e[1;32m[MYSENDERV2]\e[1;32m";
echo $r = rand(100000, 999999);
echo "\e[1;32m**********\e[1;93m      █\r\n";
echo "\e[1;93m     █▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█   \e[1;93m █\e[1;37m CONTACT US \e[1;32mIcq \e[1;91m: \e[1;32m760502002 \e[1;91m& \e[1;36mTelg \e[1;91m: \e[1;36m@Vcto3\e[1;93m    █  \r\n";
echo "\e[1;32m                               \e[1;93m █▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█  \r\n";
function Kirim($email, $smtp_acc, $gx_setup) {
    $smtp           = new SMTP;
    $smtp->do_debug = 0;
    $smtpserver     = $smtp_acc['host'];
    $smtpport       = $smtp_acc['port'];
    $smtpuser       = $smtp_acc['username'];
    $smtppass       = $smtp_acc['password'];
    $priority       = $gx_setup['priority'];
    $userandom      = $gx_setup['userandom'];
    $sleeptime      = $gx_setup['sleeptime'];
    $replacement    = $gx_setup['replacement'];
    $userremoveline = $gx_setup['userremoveline'];
    $fromname       = $gx_setup['fromname'];
    $frommail       = $gx_setup['frommail'];
    $subject        = $gx_setup['subject'];
    $msgfile        = $gx_setup['msgfile'];
    $filepdf        = $gx_setup['filesend'];
    $randurl        = $gx_setup['scampage'];

    if (!$smtp->connect($smtpserver, $smtpport)) {
        throw new Exception('Connect failed');
    }

    //Say hello
    if (!$smtp->hello(gethostname())) {
        throw new Exception('EHLO failed: ' . $smtp->getError()['error']);
    }

    $e = $smtp->getServerExtList();

    if (array_key_exists('STARTTLS', $e)) {
        $tlsok = $smtp->startTLS();
        if (!$tlsok) {
            throw new Exception('Failed to start encryption: ' . $smtp->getError()['error']);
        }
        if (!$smtp->hello(gethostname())) {
            throw new Exception('EHLO (2) failed: ' . $smtp->getError()['error']);
        }
        $e = $smtp->getServerExtList();
    }

    if (array_key_exists('AUTH', $e)) {

        if ($smtp->authenticate($smtpuser, $smtppass)) {
            $mail           = new PHPMailer;
            $mail->Encoding = 'base64'; // 8bit base64 multipart/alternative quoted-printable
            $mail->CharSet  = 'UTF-8';
            $mail->headerLine("format", "flowed");
            /*  Smtp connect    */
            //$mail->addCustomHeader('X-Ebay-Mailtracker', '11400.000.0.0.df812eaca5dd4ebb8aa71380465a8e74');
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->Host     = $smtpserver;
            $mail->Port     = $smtpport;
            $mail->Priority = $priority;
            $mail->Username = $smtpuser;
            $mail->Password = $smtppass;

            if ($userandom == 1) {
                $rand     = rand(1, 50);
                $fromname = randName($rand);
                $frommail = randMail($rand);
                $subject  = randSubject($rand);
            }

            if ($gx_setup['filesend'] == 0) {
                $filepdf = file_get_contents($AddAttachment);
                $mail->AddAttachment($filepdf);
            }

            $asu       = RandString1(8);
            $asu1      = RandString(5);
            $asu2      = RandString1(5);
            $nmbr      = RandNumber(5);
            $fromnames = str_replace('##randstring##', $asu1, $fromname);
            $frommails = str_replace('##randstring##', $asu, $frommail);
            $subjects  = str_replace('##randstring##', $asu2, $subject);

            $mail->setFrom($frommails, $fromnames);

            $mail->AddAddress($email);

            $mail->Subject = $subjects;
            if ($replacement == 1) {
                $msg = lettering($msgfile, $email, $frommail, $fromname, $randurl, $subject);
            } else {
                $msg = file_get_contents($msgfile);
            }

            $mail->msgHTML($msg);

            if (!$mail->send()) {
                echo "SMTP Error : " . $mail->ErrorInfo;
                exit();
            } else {
                echo "\e[1;37m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ \r\n";
                echo "\e[1;93m⚚ Victo3 ⚚ ▌\e[1;93m ⌚ Time : \e[1;93m";
				echo $a = date('h:i:s A');
                echo "\e[1;93m ▌\e[1;93m \e[1;91mEmail : $email\e[0m \e[1;91m▌ \e[1;32m Done ツ ▌ ID \e[1;32m";
                echo $r = rand(1000000, 9999999);
                echo "\e[1;34m \r\n";
            }
            $mail->clearAddresses();

        } else {
            throw new Exception('Authentication failed: ' . $smtp->getError()['error']);
        }

        $smtp->quit(true);

    }

}



    $file = file_get_contents($gx_setup['mail_list']);
    if ($file) {
        $ext = preg_split('/\n|\r\n?/', $file);
        echo "                               \e[1;91m\e[1;91m \r\n";
        echo "\r\n";
        echo "\n";
        $smtp_key = 0;
        foreach ($ext as $num => $email) {

            if ($smtp_key == count($smtp_acc)) {
                $smtp_key = 0;
            }
            //kirim
            Kirim($email, $smtp_acc[$smtp_key], $gx_setup);

            $smtp_key++;

            ///
            sleep($gx_setup['sleeptime']);
        }
        if ($gx_setup['userremoveline'] == 1) {
            $remove = Removeline($mailist, $email);
        }
    }
