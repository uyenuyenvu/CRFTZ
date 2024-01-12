<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMailRequest;
use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __invoke(ContactMailRequest $request): RedirectResponse
    {
        try {
            $emailTo = Config::get('constants.mail_to_address');
            Mail::to($emailTo)->send(new ContactMail(
                name: $request->get('name'),
                leader: $request->get('leader'),
                email: $request->get('email'),
                phone: $request->get('phone'),
                address: $request->get('address'),
                type_require: $request->get('type_require'),
                type_contact: $request->get('type_contact'),
                content: $request->get('content'),
            ));

            return redirect()->route('top')
                ->with('notify', [
                    'type' => 'success',
                    'message' => 'お問い合わせを受け付けました。'
                ]);

        } catch (\Exception $e) {
            Log::error('Error send mail', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return redirect()->back()
                ->with('notify', [
                    'type' => 'error',
                    'message' => 'お問い合わせの送信に失敗しました。'
                ])
                ->withInput();
        }

    }
}
