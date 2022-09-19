<?php

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

/*All Models Imports */

 use App\Models\app\companies\company;


/*  End of Models Imports  */






/**
 * It creates a new company object and sets the values of the object to the values passed in.
 *
 * @param company_name The name of the company
 * @param company_industry The industry the company is in.
 * @param company_size 1 = 1-10, 2 = 11-50, 3 = 51-200, 4 = 201-500, 5 = 501-1000, 6 = 1001-5000, 7 =
 * 5001-10000, 8 = 10001+
 * @param company_website http://www.google.com
 * @param owner_id The id of the user who is creating the company.
 */
function addCompany($company_name,$company_industry,$company_size,$company_website,$owner_id)
{
    $new_company = new company();
    $new_company->company_name = $company_name;
    $new_company->company_industry = $company_industry;
    $new_company->company_size = $company_size;
    $new_company->company_website = $company_website;
    $new_company->owner_id = $owner_id;
    $new_company->save();
}

/**
 * It sends an email
 *
 * @param to The email address of the person you're sending the email to.
 * @param subject The subject of the email
 * @param body The body of the email.
 *
 * @return the string "Mail not send!"
 */
function sendEmail($to, $subject, $body)
{
    try {
        $transport = Transport::fromDsn(
                env('MAIL_MAILER').'://'.env('MAIL_USERNAME').':'.env('MAIL_PASSWORD').'@'.env('MAIL_HOST').':'.env('MAIL_PORT')
            );
                //$mailer = new Mailer($transport);

                //"smtp://crmTop@1690.tk:1994_Xujaf@1690.tk:465"

                //$transport = Transport::fromDsn('smtp://localhost');
                $mailer = new Mailer($transport);

                $email = (new Email())
                    ->from(env('MAIL_USERNAME'))
                    ->to($to)
                    //->cc('cc@example.com')
                    //->bcc('bcc@example.com')
                    //->replyTo('fabien@example.com')
                    ->priority(Email::PRIORITY_HIGH)
                    ->subject($subject)
                    ->html($body);

                $mailer->send($email);
    } catch (\Throwable $th) {
        return "Mail not send!";
    }
}
