<?php

namespace App\Http\Controllers;

use Snowfire\Beautymail\Beautymail;

class MailController extends Controller
{
    /**
     * Welcome.
     *
     * @param integer $typeId Type Id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome($typeId)
    {
        $template = $this->getTemplate($typeId);
        $beautymail = app()->make(Beautymail::class);
        $beautymail->send($template, [], function($message) {
           $message
           ->from(config('mail.from.address'))
           ->to('henryleeworld@gmail.com', 'Henry Lee')
           ->subject('歡迎光臨！');
        });
    }

    /**
     * Show the application dashboard.
     *
     * @param integer $typeId Type Id
     *
     * @return string
     */
    public function getTemplate($typeId)
    {
        $template = 'emails.welcome-1';
        switch ($typeId) {
            case 2:
                $template = 'emails.welcome-2';
                break;
            case 3:
                $template = 'emails.welcome-3';
                break;
            case 4:
                $template = 'emails.welcome-4';
                break;
        }
        return $template;
    }
}
