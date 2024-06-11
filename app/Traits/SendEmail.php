<?php

namespace App\Traits;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;

trait SendEmail{

    public function send_email($subject,$name,$email,$idtemplate, $anios) {
        $client = new \GuzzleHttp\Client();
        // $headers = [
        //     'Authorization' => 'Basic TElMSVBJTksuTUFJTDpMaWxpcGluay4yMDIw'
        // ];
        $headers = [
          'Authorization' => "Basic " . base64_encode("LILIPINK.GESTIONHUMANA:L1lipink.2024")
      ];
        $json = '{"type":"'.$anios.'"}';
        $options = [
        'multipart' => [
          [
            'name' => 'from',
            'contents' => 'comunicacion.interna@liligestionhumana.com'
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
          [
            'name' => 'defaultPlaceholders',
            'contents' => $json
          ],
        ]];
        $request = new Request('POST', 'http://api.messaging-service.com/email/3/send', $headers);
        $res = $client->sendAsync($request, $options)->wait();

        return json_decode($res->getBody());
    }
}