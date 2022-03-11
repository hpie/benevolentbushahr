<?php
/**

 * This example shows making an SMTP connection with authentication.

 */

//SMTP needs accurate times, and the PHP time zone MUST be set

//This should be done in your php.ini, but this is how to do it if you don't have access to that

//date_default_timezone_set('Etc/UTC');

require 'smtp_mail/PHPMailerAutoload.php';

//require APP_INCLUDE_Library.'smtp_mail/Security.php';


class SMTP_mail {

    public $mail;

    public $sender_email;

    public $username;

    public $password;

    public $host;

    public $port;

    public $subject;   

    public $sender_name;

   // public $product_name;
    public function __construct() {
//        $this->mail = new PHPMailer;        
//        $this->port = 465;
//        $this->host = "hostingserver.leewaysoftech.com";       
//        $this->username = "info@aranyavilas.com";
//        $this->password = "@rany2!nf0#m21l";
        $this->mail = new PHPMailer;        
        $this->port = 465;
		//$this->port = 587;
        $this->host = "mail.benevolentbushahr.in";       
        $this->username = "noreply@benevolentbushahr.in";
        $this->password = "N0R#plyP@s5";
    }   
    public function sendResponseMail($data) {       
        
        $this->sender_email ='noreply@benevolentbushahr.in';

        $this->sender_name ='Benevolent Bushahr';

        $this->subject ='New Vulunteering Interest Received';

        $this->mail->isSMTP();

        $this->mail->SMTPDebug = 0;

        $this->mail->Debugoutput = 'html';

        $this->mail->Host = $this->host;

        $this->mail->Port = $this->port;

        $this->mail->SMTPAuth = true;

        $this->mail->SMTPSecure = true;

        $this->mail->Username = $this->username;

        $this->mail->Password = $this->password;

        $this->mail->setFrom($this->sender_email,"Benevolent Bushahr");

        $this->mail->addAddress("info@benevolentbushahr.in");

        $this->mail->Subject = $this->subject;

        $this->mail->isHTML(true);                                  // Set email format to HTML                                   
        $this->mail->Body = 'Name: '.$data['first-name'].' '.$data['last-name']. '<br> Mobile No: ' .$data['mobile-no']. '<br> Email: '.$data['email-id']. '<br> Current profession: '.$data['current-profession']. '<br> Volunteering Interest Shown: '. $data['select-sort'].' <br> &nbsp; &nbsp; Profession : '.$data['select-profession'].' <br>  &nbsp; &nbsp; &nbsp; &nbsp; Sub-Profession : '.$data['select-subprofession']. '<br> Please contact the volunteer ';

        $this->mail->AltBody = "";

        $resultMail=array();
        $resultMail['success']=0;
        $res=$this->mail->send();        
        if($res==1){
//            print_r($res);die;
            $resultMail['success']=1;
            return $resultMail;
        }else {
//            print_r($res);die;
            $resultMail['Error']="Mailer Error: " . $this->mail->ErrorInfo;
//            print_r($resultMail);die;
            return $resultMail;
        }
    } 

	public function sendThankyouMail($data) {       
        
        $this->sender_email ='noreply@benevolentbushahr.in';

        $this->sender_name ='Benevolent Bushahr';

        $this->subject ='Thank you for Contacting Benevolent Bushahr';

        $this->mail->isSMTP();

        $this->mail->SMTPDebug = 0;

        $this->mail->Debugoutput = 'html';

        $this->mail->Host = $this->host;

        $this->mail->Port = $this->port;

        $this->mail->SMTPAuth = true;

        $this->mail->SMTPSecure = true;

        $this->mail->Username = $this->username;

        $this->mail->Password = $this->password;

        $this->mail->setFrom($this->sender_email,"Benevolent Bushahr");

        $this->mail->addAddress($data['email-id']);

        $this->mail->Subject = $this->subject;

        $this->mail->isHTML(true);                                  // Set email format to HTML                                   
        $this->mail->Body = 'Thank you '. $data['first-name'].' '.$data['last-name']. '<br> We have received your intereset for volunteering and will contact back soon <br> Interest showen in : '. $data['select-sort'].' <br> &nbsp; &nbsp; Profession : '.$data['select-profession'].' <br>  &nbsp; &nbsp; &nbsp; &nbsp; Sub-Profession : '.$data['select-subprofession'];

        $this->mail->AltBody = "";

        $resultMail=array();
        $resultMail['success']=0;
        $res=$this->mail->send();        
        if($res==1){
//            print_r($res);die;
            $resultMail['success']=1;
            return $resultMail;
        }else {
//            print_r($res);die;
            $resultMail['Error']="Mailer Error: " . $this->mail->ErrorInfo;
//            print_r($resultMail);die;
            return $resultMail;
        }
    } 
}
?>