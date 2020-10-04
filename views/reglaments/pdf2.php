<?
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator("Зачем");
$pdf->SetAuthor('Зачем');
$pdf->SetTitle($model->message);
$pdf->SetSubject("Зачем");
$pdf->SetKeywords('Павел Кучин, Андрей Койков, Даша Соколова, Артём Ипатов');

// set default header data
$pdf->SetHeaderData("zachem", 1, "zachem".' zachem', "zachem");

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

/*
NOTES:
 - To create self-signed signature: openssl req -x509 -nodes -days 365000 -newkey rsa:1024 -keyout tcpdf.crt -out tcpdf.crt
 - To export crt to p12: openssl pkcs12 -export -in tcpdf.crt -out tcpdf.p12
 - To convert pfx certificate to pem: openssl pkcs12 -in tcpdf.pfx -out tcpdf.crt -nodes
*/

// set certificate file

// set additional information

// set document signature

// set font
$pdf->SetFont('dejavusans', '', 12);

// add a page
$pdf->AddPage();

// print a line of text
$text = 'Это <b color="#FF0000">Образец подписанного ПДФ файла созданного по регламенту</b> c использованием системных ключей подписи ( для примера ) Чтобы проверить, не изменялись ли данные после подписи, вам нужно открыть PDF в Acrobat Reader и посмотреть свойства документа</a>';
// $try = $model->message;
$text .=  '<br/>'.'<br/>' . $model->message . '<br/>'. '<br/>'. $model->date . '<br/>'. '<br/>'. $model->f11 . '<br/>'. '<br/>'. $model->f12 . '<br/>'. '<br/>'. $model->f131 . '<br/>'. '<br/>'. $model->f132 . '<br/>'. '<br/>'. $model->f21 . '<br/>'. '<br/>'. $model->f22 . '<br/>'. '<br/>';

$pdf->writeHTML($text, true, 0, true, 0);
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// *** set signature appearance ***

// create content for signature (image and/or text)
// define active area for signature appearance
$pdf->setSignatureAppearance(180, 60, 15, 15);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// *** set an empty signature appearance ***
$pdf->addEmptySignatureAppearance(180, 80, 15, 15);

// ---------------------------------------------------------
// ob_end_clean();
// ob_get_clean();
//Close and output PDF document
$certificado_crt = 'file://'. __DIR__ . "/tcpdf.crt";
$certificado_key = 'file://'. __DIR__ . "/tcpdf.key";
$pdf->setSignature($certificado_crt,$certificado_key, 'tcpdfdemo', '', 1);
$content = $pdf->Output( "$model->message" . '.pdf', 'S');
$file = fopen( "$model->message" . '.pdf', "w+");
fwrite($file, $content);
fclose($file);
\Yii::$app->response->sendFile("$model->message" .".pdf");