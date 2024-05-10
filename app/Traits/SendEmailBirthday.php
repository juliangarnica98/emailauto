<?php

namespace App\Traits;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;

trait SendEmailBirthday{

    public function send_email($subject,$name,$email,$idtemplate) {
        $client = new \GuzzleHttp\Client();
        $headers = [
            'Authorization' => 'Basic TElMSVBJTksuTUFJTDpMaWxpcGluay4yMDIw'
        ];
        $options = [
        'multipart' => [
          [
            'name' => 'from',
            'contents' => 'comunicacion.interna@cartera.lilipink.net'
          ],
          [
            'name' => 'to',
            'contents' => $email
          ],
          [
            'name' => 'subject',
            'contents' => $subject
          ],
          [
            'name' => 'text',
            'contents' => $name
            //'contents' => 'Lilipink & Yoi ON ¡Tu pagaré CrediPink ya está listo para firmar! Factura N°'
          ],
          [
            'name' => 'html',
            'contents' => '<h1>Html body</h1><p>Rich HTML message body.</p>'
          ],
          [
            'name' => 'templateId',
            'contents' => $idtemplate
          ],

        ]];
        $request = new Request('POST', 'http://api.messaging-service.com/email/3/send', $headers);
        $res = $client->sendAsync($request, $options)->wait();

        return json_decode($res->getBody());
    }
}