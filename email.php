<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/phpmailer/src/Exception.php';
require_once __DIR__ . '/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'zeeshanfaisal69@gmail.com'; // YOUR gmail email
    $mail->Password = 'Salmonpuff123'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('zeeshanfaisal69@gmail.com', 'Muhammad Zeeshan Faisal');
    $mail->addAddress('zeeshanf03@gmail.com', 'PHPMailer');
    $mail->addReplyTo('zeeshanfaisal69@gmail.com', 'Muhammad Zeeshan Faisal');
    $mail->addBcc("careersdubai.solutions@gmail.com");
$mail->addBcc("contact@azinova.info");
$mail->addBcc("hello@sudo.ae");
$mail->addBcc("info@brainsphereit.com");
$mail->addBcc("info@mtechme.com");
$mail->addBcc("info@webmasterstech.com");
$mail->addBcc("info@appstec-me.com");
$mail->addBcc("info@kodsmithinfospica.com");
$mail->addBcc("info@gligx.com");
$mail->addBcc("info@gzeeztech.com");
$mail->addBcc("info@oasys-me.com");
$mail->addBcc("info@fit.ae");
$mail->addBcc("sales@canias40.ae");
$mail->addBcc("sales@voiits.com");
$mail->addBcc("sales@mas-technology.com");
$mail->addBcc("sales@alphauae.com");
$mail->addBcc("sales.uae@infodynamic.net");
$mail->addBcc("uae@verbat.com");
$mail->addBcc("info@ipossoft.com");
$mail->addBcc("info@wmsspl.com");
$mail->addBcc("contact@azinova.info");
$mail->addBcc("info@intertecsys.com");
$mail->addBcc("info@fstuae.com");
$mail->addBcc("sales@xicom.ae");
$mail->addBcc("info@nexttech.me");
$mail->addBcc("mail@webcastle.ae");
$mail->addBcc("info@mohammedz52.sg-host.com");
$mail->addBcc("info@daffodilsw.com");
$mail->addBcc("sales@globaledgeme.com");
$mail->addBcc("info@masstechme.com");
$mail->addBcc("sales@coralme.com");
$mail->addBcc("info@synergiasoft.com");
$mail->addBcc("info@arabinfotechllc.com");
$mail->addBcc("info@hermosoft.com");
$mail->addBcc("info@bridgesol.com");
$mail->addBcc("info@ikyamuae.com");
$mail->addBcc("info@eaglestuae.com");
$mail->addBcc("info@palmira-itc.com");
$mail->addBcc("sales@anacity.com");
$mail->addBcc("info@quantasoftsolutions.com");
$mail->addBcc("salesuae@pactsoft.com");
$mail->addBcc("info@jldevelop.com");
$mail->addBcc("info@loyica.com");
$mail->addBcc("info@microexcel.ae");

$mail->addBcc("info@facts.ae");
$mail->addBcc("contact@azinova.info");
$mail->addBcc("uae@verbat.com");
$mail->addBcc("info@brainsphereit.com");
$mail->addBcc("info@fit.ae");
$mail->addBcc("info@diginixai.com");
$mail->addBcc("sales@canias40.ae");
$mail->addBcc("sales@coralme.com");
$mail->addBcc("info@webmasterstech.com");
$mail->addBcc("hello@sudo.ae");
$mail->addBcc("sales@beamsits.com");
$mail->addBcc("hello@techecs.com");
$mail->addBcc("info@gzeeztech.com");
$mail->addBcc("info@kodsmithinfospica.com");
$mail->addBcc("sales@alphauae.com");
$mail->addBcc("info@skynetcorp.ae");
$mail->addBcc("info@ezmartech.com");
$mail->addBcc("sales@inlogic.ae");
$mail->addBcc("info@cubezix.com");
$mail->addBcc("contact@mas-technology.com");
$mail->addBcc("info@annet.com");
$mail->addBcc("nochelpdesk@telelogix.net"); 
$mail->addBcc("info@ibtevolve.com");

$mail->addBcc("info@scientificwebs.com");
$mail->addBcc("info@ajath.ae");
$mail->addBcc("info@netdesire.ae");
$mail->addBcc("info@unipro.com.sg");
$mail->addBcc("Info@masstechme.com");
$mail->addBcc("info@dxminds.com");
$mail->addBcc("info@indglobal.in");
$mail->addBcc("info@brandbucket.com"); 
$mail->addBcc("info@arabinfotechllc.com");

$mail->addBcc("leads@bluechipgulf.com");
$mail->addBcc("sales@cadgulf.com");
$mail->addBcc("sales@vrstech.com"); 
$mail->addBcc("contact@microsysnet.com");

    $mail->addBcc("info@fit.ae");
$mail->addBcc("sales@inlogic.ae");
$mail->addBcc("info@gcst.ae");
$mail->addBcc("marketing@raspberry.ae");
$mail->addBcc("info@oasys-me.com");
$mail->addBcc("info@kodsmithinfospica.com");
$mail->addBcc("hello@techecs.com");
$mail->addBcc("sales@canias40.ae");
$mail->addBcc("contact@mas-technology.com");
$mail->addBcc("info@ibtevolve.com");
$mail->addBcc("info@annet.com");
$mail->addBcc("info@emaratech.ae");
$mail->addBcc("info@telelogix.net");
$mail->addBcc("info@scientificwebs.com");
$mail->addBcc("info@netdesire.ae");
$mail->addBcc("info@facts.ae");
$mail->addBcc("contact@plaxonic.com");
$mail->addBcc("info@pentacodes.com");
$mail->addBcc("sales@pixel-digital.com");
$mail->addBcc("contact@inspirria.com");
$mail->addBcc("Info@masstechme.com");
$mail->addBcc("info@dxminds.com");
$mail->addBcc("sales@cadgulf.com");
$mail->addBcc("sales@vrstech.com");
$mail->addBcc("info@indglobaldigital.com");
$mail->addBcc("leads@bluechipgulf.com");
$mail->addBcc("info@arabinfotechllc.com");
$mail->addBcc("contact@microsysnet.com");
$mail->addBcc("hello@gs-it.ae");
$mail->addBcc("media@hawkeyeinnovations.com");
$mail->addBcc("support@fmeextensions.ae");
$mail->addBcc("info@tomsher.com");
$mail->addBcc("sales@revolsolutions.com");
$mail->addBcc("contact@wisoftsolutions.com");
$mail->addBcc("info@penielcomputer.com");
$mail->addBcc("info@gcc-marketing.com");
$mail->addBcc("support@maxinfotechit.com");
$mail->addBcc("info@rounakcomputers.com");
$mail->addBcc("info@redspider.ae");
$mail->addBcc("info@realsecure.ae");
$mail->addBcc("setup@creativezone.ae");
$mail->addBcc("info@nexuscomputeruae.com");
$mail->addBcc("contact@itfaq.global");
$mail->addBcc("info@techsupportdubai.com");

$mail->addBcc("hello@zeltamedia.com");
$mail->addBcc("info@sgp.technology");
$mail->addBcc("info@datawave.ae");
$mail->addBcc("ic@worldwideformations.com");
$mail->addBcc("info@sfm.com");
$mail->addBcc("info@blackswanbss.com");
$mail->addBcc("support@digitalnexa.com");
$mail->addBcc("info@uaefreezones.com");
$mail->addBcc("info@emrill.com");
$mail->addBcc("sales@sumtechnologies.com");
$mail->addBcc("info@itqans.com");
$mail->addBcc("info@hallmarkauditors.com");
 // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = 'Application for Job Related To Website Development --- M.Zeeshan Faisal"';
    $mail->Body = 'Subject:<b> "Website Developer looking for a job in website development or a related field at your reputable company"</b>
    <br><br>
    Dear HR Manager,
    <br><br>
    My name is M. Zeeshan Faisal,I am a passionate software engineer with the experience of 2+years in website development . 
    <br><br>
    During internships and jobs, I gained hands-on experience coding websites and applications at a variety of companies. I was in charge of creating PHP/CodeIgniter-based web-based applications for a variety of clients, such as e-commerce stores, CMS, point-of-sale systems, and so on. As a result of my various internships and jobs, I have gained valuable teamwork and communication skills that will make me a valuable asset to your company.
    <br><br>
    If you have any opportunities available for any suitable position then I would greatly appreciate to meet and talk further about how we may work together.
    <br><br>
    Please take your time to review my attached resume and cover letter. I believe that I would be an excellent candidate for the available position, and I’m waiting for the opportunity to meet you in person and discuss how my skills and experience can benefit your company.
    <br><br>
    Thank you.
    <br><br>
    Yours sincerely,
    <br><br>
    M. Zeeshan Faisal
    +971 521715950';
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $file_to_attach = 'files/resume.pdf';
    $file_to_attach1 = 'files/cover_letter.docx';
    $mail->AddAttachment( $file_to_attach , 'Official Resume.pdf' );
    $mail->AddAttachment( $file_to_attach1 , 'Cover Letter.docx' );

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}

?>