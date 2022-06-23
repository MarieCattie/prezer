<?php
error_reporting(0);
header('Content-type: application/zip');
header('Content-Disposition: attachment; filename=archive1.zip');
require_once __DIR__ . '/assets/php/PHPExcel-1.8/Classes/PHPExcel.php';
$excel = PHPExcel_IOFactory::load('students.xlsx');
$arr = array(
);
for($i = 2; $i < $excel->setActiveSheetIndex(0)->getHighestRow(); $i++) {
  $row = new stdClass();
  $name = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
  $arr[] = $name;
}
$zip = new ZipArchive();
$zip->open("archive1.zip", ZIPARCHIVE::CREATE);
clearFolder();
foreach($arr as $value) {
  $filename = rand(1000, 9999) . '.png';
  $font = 'OpenSans.ttf';
  $image = imagecreatetruecolor(800, 600);
  $pink = imagecolorallocate($image, 255, 214, 206);
  $black = imagecolorallocate($image, 0, 0, 0);
  imagefill($image, 0, 0, $pink);
  putenv('GDFONTPATH=' . dirname(__FILE__));
  imagettftext($image, 20, 0, 45, 45, $black, $font, $value);
  imagepng($image, 'images/' . $filename);
  imagedestroy($image);
  $zip->addFile('images/' . $filename, $filename);
}
$zip->close();
readfile("archive1.zip");
unlink("archive1.zip");
function clearFolder() {
  if(file_exists("images/")) {
    foreach(glob("images/*") as $file) {
      unlink($file);
    }
  }
}
?>