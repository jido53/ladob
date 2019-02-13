<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
      /**
      * @Route("/lucky/number")
      */
      public function number()
      {
        $number = random_int(0, 100);
        $number = urlencode ('bjNS@!6a');
        

/*
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
 */
        return $this->render('lucky/number.html.twig', [
          'number' => $number,
        ]);
      }
      /**
      * @Route("/lucky/mail")
      */
      public function index(\Swift_Mailer $mailer)
      {
        $data = $this->csv_to_array('C:\Users\gbuhl\Downloads\Horus.csv',',');

        foreach ($data as $array) {
        
        

        $message = (new \Swift_Message('Sistema de control de presentismo'))
        ->setFrom('beta.cade@jusbaires.gob.ar')
        ->setTo($array["correo"])
        ->setBody(
          $this->renderView(
            'lucky/body.html.twig',
            ['name' => $array["nombre"],
             'apellido'=> $array["apellido"],
             'sector'=> $array["descripcion"],
             'pass'=> $array["password"],
             'usuario'=> $array["usuario"],

          ]
          ),
          'text/html'
        );
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'emails/registration.txt.twig',
                ['name' => $name]
            ),
            'text/plain'
        )
        */
        

        //$mailer->send($message);
        
        };
        
        $number = 'Se envio el correo';

        return $this->render('lucky/number.html.twig', [
          'number' => $number,
        ]);}      /**
      * @Route("/lucky/testmail")
      */
      public function testmail(\Swift_Mailer $mailer)
      {
        $number = random_int(0, 100);
        $message = (new \Swift_Message('Prueba de correo'))
        ->setFrom('intranet.mpd@jusbaires.gob.ar')
        ->setTo('gbuhl@jusbaires.gob.ar')
        ->setBody(

                $this->renderView(
                'lucky/number.html.twig',
                ['number' => $number]
            ),
          'text/html'
        );
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'emails/registration.txt.twig',
                ['name' => $name]
            ),
            'text/plain'
        )
        */
        

        $mailer->send($message);
        
        
        
        $number = 'Se envio el correo';

        return $this->render('lucky/number.html.twig', [
          'number' => $number,
        ]);}



      /**
      * @Route("/lucky/csv")
      */
      public function csv(\Swift_Mailer $mailer) {
       $rowNo = 1;
        // $fp is file pointer to file sample.csv
       if (($fp = fopen("C:\Users\gbuhl\Downloads\Horus.csv", "r")) !== FALSE) {
        while (($row = fgetcsv($fp, 1000, ",")) !== FALSE) {
          $num = count($row);
          echo "<p> $num fields in line $rowNo: <br /></p>\n";
          $rowNo++;
          for ($c=0; $c < $num; $c++) {
            echo $row[$c] . "<br />\n";
          }
        }
        fclose($fp);
      }  
    }    
 
    public  function csv_to_array($filename, $delimiter)
      {
        if(!file_exists($filename) || !is_readable($filename))
          return FALSE;

        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== FALSE)
        {
          while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
          {
            if(!$header)
              $header = $row;
            else
              $data[] = array_combine($header, $row);
          }
          fclose($handle);
        }
        print_r($data);
        return $data;
      }
    }
    ?>