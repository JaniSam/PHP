<?php
    require 'vendor/autoload.php';

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();

    $html = file_get_contents('vista.php');

    $dompdf->loadHtml($html);

    $dompdf->render();

    $dompdf->stream('document',['Attachment'=>0]);
