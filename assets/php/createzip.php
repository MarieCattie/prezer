<?php
//сохдаем архив
$zip = new ZipArchive();
//сохрается файл с уникальным именем
// $tmp_file = tempnam('.', '');
//а здесь как вариант мы сами придумали имя архиву
$zipname = 'sertificates.zip';
//открываем архив для записи
$zip->open($zipname, ZipArchive::CREATE);
//добавляем в архив новый файл (в данном случае нашу созданную картинку в images)
for($i = 2; $i < count(scandir($_SERVER["DOCUMENT_ROOT"] .'/Сертификаты//')); $i++) {
    $filesArr = scandir($_SERVER["DOCUMENT_ROOT"] .'/Сертификаты//');
    // $zip->addFile($_SERVER["DOCUMENT_ROOT"] .'/Сертификаты//' . );

    // var_dump($filesArr[$i]);
    $zip->addFile('../../Сертификаты/' . $filesArr[$i], rand(1000, 9999).'.jpg');
}

//закрываем архив
$zip->close();
header('Content-disposition: attachment; filename="my file.zip"');
header('Content-type: application/zip');
readfile($zipname);
unlink($zipname);
?>