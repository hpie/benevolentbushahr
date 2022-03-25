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
	public $send_to;
	public $send_cc;
	public $send_bcc;

   // public $product_name;
    public function __construct() {
        $this->mail = new PHPMailer;        
        $this->port = 465;
		//$this->port = 587;
        $this->host = "your-smtp";       
        $this->username = "smtp-user";
        $this->password = "smtp-pass";
		$this->sender_email ='sender';
		$this->sender_name ='Benevolent Bushahr';
		$this->send_to ='receiver';
		$this->send_bcc ='receiver-bcc';
    }   
    public function sendResponseMail($data) {       

        $this->subject ='New Volunteering Interest Received';

        $this->mail->isSMTP();

        $this->mail->SMTPDebug = 0;

        $this->mail->Debugoutput = 'html';

        $this->mail->Host = $this->host;

        $this->mail->Port = $this->port;

        $this->mail->SMTPAuth = true;

        $this->mail->SMTPSecure = true;

        $this->mail->Username = $this->username;

        $this->mail->Password = $this->password;

        $this->mail->setFrom($this->sender_email, $this->sender_name);

        $this->mail->addAddress($this->send_to);
		$this->mail->addBCC($this->send_bcc);

        $this->mail->Subject = $this->subject;

        $this->mail->isHTML(true);                                  // Set email format to HTML                                   
        $this->mail->Body = 'Name: '.$data['firstname'].' '.$data['lastname']. '<br> Mobile No: ' .$data['mobileno']. '<br> Email: '.$data['emailid']. '<br> Current profession: '.$data['currentprofession']. '<br> Volunteering Interest Shown: '. $data['sort'].' <br> &nbsp; &nbsp; Profession : '.$data['profession'].' <br>  &nbsp; &nbsp; Sub-Profession : '.$data['subprofession']. '<br> Please contact the volunteer ';

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

        $this->mail->setFrom($this->sender_email, $this->sender_name);

        $this->mail->addAddress($data['email-id']);
		$this->mail->addBCC($this->send_bcc);

        $this->mail->Subject = $this->subject;

        $this->mail->isHTML(true);                                  // Set email format to HTML                                   
        $this->mail->Body = 'Thank you '. $data['firstname'].' '.$data['lastname']. '<br> We have received your intereset for volunteering and will contact back soon <br> Interest showen in : '. $data['sort'].' <br> &nbsp; &nbsp; Profession : '.$data['profession'].' <br>  &nbsp; &nbsp; &nbsp; &nbsp; Sub-Profession : '.$data['subprofession'];

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


	public function sendDonationMail($data) {       


        $this->subject ='New Donation Interest Received';

        $this->mail->isSMTP();

        $this->mail->SMTPDebug = 0;

        $this->mail->Debugoutput = 'html';

        $this->mail->Host = $this->host;

        $this->mail->Port = $this->port;

        $this->mail->SMTPAuth = true;

        $this->mail->SMTPSecure = true;

        $this->mail->Username = $this->username;

        $this->mail->Password = $this->password;

        $this->mail->setFrom($this->sender_email, $this->sender_name);

        $this->mail->addAddress($this->send_to);
		$this->mail->addBCC($this->send_bcc);

        $this->mail->Subject = $this->subject;

        $this->mail->isHTML(true);                                  // Set email format to HTML                                   
        $this->mail->Body = 'Name: '.$data['firstname'].' '.$data['lastname']. '<br> Mobile No: ' .$data['mobileno']. '<br> Email: '.$data['emailid']. '<br> Donation Interest Shown: '. $data['sort'].' <br> &nbsp; &nbsp; Sub Sort : '.$data['subsort'].' <br>  &nbsp; &nbsp; Amount : '.$data['budget']. '<br> Please contact the Donor ';

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
	
	public function sendDonerThankyouMail($data) {       

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

        $this->mail->setFrom($this->sender_email, $this->sender_name);

        $this->mail->addAddress($data['email-id']);
		$this->mail->addBCC($this->send_bcc);

        $this->mail->Subject = $this->subject;

        $this->mail->isHTML(true);                                  // Set email format to HTML                                   
        $this->mail->Body = 'Thank you '. $data['name'].' '.$data['name']. '<br> We have received your intereset for donation and will contact back soon <br> Interest shown in : '. $data['sort'].' <br> &nbsp; &nbsp; Type : '.$data['subsort'].' <br>  &nbsp; &nbsp; Amount : '.$data['budget'];

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
