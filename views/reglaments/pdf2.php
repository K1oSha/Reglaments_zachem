<?
function sozdat_slag($stroka) {
		
    $rus=array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я','а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',' ');
    
    $lat=array('a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya','a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya',' ');
  
      $stroka = str_replace($rus, $lat, $stroka); // перевеодим на английский
      $stroka = str_replace('-', '', $stroka); // удаляем все исходные "-"
      $slag = preg_replace('/[^A-Za-z0-9-]+/', '-', $stroka); // заменяет все символы и пробелы на "-"
  return $slag;
}


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
$content = $pdf->Output( sozdat_slag("$model->message") . '.pdf', 'S');
$file = fopen( sozdat_slag("$model->message") . '.pdf', "w+");
fwrite($file, $content);
fclose($file);
\Yii::$app->response->sendFile(sozdat_slag("$model->message") .".pdf");