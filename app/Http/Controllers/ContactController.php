<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'    => 'required|string|min:3|max:255',
                'email'   => 'required|email',
                'message' => 'required|string|min:10',
            ], [
                'name.required'    => __('contact.error_name_required'),
                'email.required'   => __('contact.error_email_required'),
                'email.email'      => __('contact.error_email_invalid'),
                'message.required' => __('contact.error_message_required'),
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'errors' => $e->errors(),
            ], 422);
        }

        $name    = (string) $validated['name'];
        $email   = (string) $validated['email'];
        $subject = (string) $request->input('subject', '');
        $msgBody = (string) $validated['message'];

        $html  = '<div style="font-family: Arial, sans-serif; font-size:14px; color:#333; line-height:1.5;">';
        $html .= '<p style="margin:0 0 12px 0;">Anda menerima pesan baru dari <strong>form kontak website dwidamartirta.co.id</strong>.</p>';
        $html .= '<hr style="border:none; border-top:1px solid #ddd; margin:12px 0;">';
        $html .= '<p style="margin:0 0 4px 0;"><strong>Nama Pengguna:</strong></p>';
        $html .= '<p style="margin:0 0 12px 0;">' . e($name) . '</p>';
        $html .= '<p style="margin:0 0 4px 0;"><strong>Email Pengguna:</strong></p>';
        $html .= '<p style="margin:0 0 12px 0;">' . e($email) . '</p>';
        if ($subject !== '') {
            $html .= '<p style="margin:0 0 4px 0;"><strong>Subjek:</strong></p>';
            $html .= '<p style="margin:0 0 12px 0;">' . e($subject) . '</p>';
        }
        $html .= '<p style="margin:0 0 4px 0;"><strong>Pesan:</strong></p>';
        $html .= '<p style="margin:0 0 16px 0;">' . nl2br(e($msgBody)) . '</p>';
        $html .= '<hr style="border:none; border-top:1px solid #ddd; margin:16px 0;">';
        $html .= '<p style="font-size:12px; color:#777; margin:0;">Pesan ini dikirim secara otomatis dari halaman <strong>Contact Us</strong> di website DWIDAMARTIRTA.<br>Silakan balas langsung ke alamat email pengirim jika diperlukan.</p>';
        $html .= '</div>';

        try {
            Mail::html($html, function ($mail) use ($name, $email) {
                $mail->to(env('MAIL_CONTACT_TO', env('MAIL_FROM_ADDRESS')))
                     ->from(env('MAIL_FROM_ADDRESS'), 'Website DWIDAMARTIRTA')
                     ->replyTo($email, $name)
                     ->subject('Pesan baru dari website - ' . $name);
            });

            return response()->json([
                'status' => 'ok',
                'icon'   => 'success',
                'title'  => __('contact.alert_success_title'),
                'text'   => __('contact.alert_success_text'),
            ]);
        } catch (Throwable $e) {
            Log::error('Contact email failed', ['error' => $e->getMessage()]);

            return response()->json([
                'status' => 'error',
                'icon'   => 'error',
                'title'  => __('contact.alert_error_title'),
                'text'   => __('contact.alert_error_text'),
            ], 500);
        }
    }
}
