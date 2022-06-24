<?php
session_start();
error_reporting(0);
header("Content-type: application/zip");
header("Content-Disposition: attachment; filename=students.zip");
require "Init.php";
require "phpExcel/Classes/PHPExcel.php";
//Сохраняем файл Excel в папку excel
$url = '../../excel/' . $_FILES["load"]["name"];
copy($_FILES["load"]["tmp_name"], $url);
//Находим выбранный шаблон по id
$template = $db->get("templates-id:" . $_POST["temp"])->fetch_assoc();
//читаем Excel
$filecontent = file_get_contents($url);
$tmpfname = tempnam(sys_get_temp_dir(), "tmpxls");
file_put_contents($tmpfname, $filecontent);
//создаем объект с ссылкой на файл excel
$excelObj = PHPExcel_IOFactory::load($tmpfname);
//очищаем папку Сертификаты на сервере
clearFolder();
//пустой массив
$studentsArr = array();
//циклом проходим excel файл и записываем фамилии в массив
for ($row = 1; $row <= $excelObj->setActiveSheetIndex(0)->getHighestRow(); $row++) {
    // $student = $worksheet->getCell('B' . $row)->getValue();
    $name = $excelObj->getActiveSheet()->getCell('B'.$row)->getValue();
    if ($name == 'ФИО' || $name == 'фио') {
        continue;
    }
    $studentsArr[] = $name;
}
//создание архива
$zip = new ZipArchive();
//открываем архив с указанным именем, если такого нет, то создаем (::CREATE)
$zip->open("students.zip", ZipArchive::CREATE);
//проходимся по массиву с фио и генерируем изображения в папку, и каждое добавляем в архив
foreach($studentsArr as $student) {
    //получаем шаблон
    $file = explode('.', $template["template_img"]);
    //тип файла загруженного шаблона
    $filetype = $file[1];
    if ($filetype == 'jpg') $filetype = "jpeg";
    if ($filetype == 'jpeg' || $filetype == 'jpg') {
        $img = imagecreatefromjpeg(dirname(__DIR__) . '\img\templates\\' . $template["template_img"]);
    } else if ($filetype == 'gif') {
        $img = imagecreatefromgif(dirname(__DIR__) . '\img\templates\\' . $template["template_img"]);
    } else {
        $img = imagecreatefrompng(dirname(__DIR__) . '\img\templates\\' . $template["template_img"]);
    }
    //Получаем и применяем настройки шаблона
    //FONT
    $font = dirname(__DIR__) . '\fonts\\' . $template["font_family"] . ".ttf";
    //COORD
    $coordinates = explode(',', $template["coordinate"]);
    $x = $coordinates[0];
    $y = $coordinates[1];
    //Рассчитываем координаты
    //Стандартное выравнивание по левому краю
    $x += $template["leftpad"];
    $y += $template["toppad"];
    $x -= $template["rightpad"];
    $y += 30;
    //Выравнивание по центру
    if ($template["align"] === 'center') {
        //Находим центр дочернего блока
        $center = (int)$template["width"] / 2;
        $x += $center;
        //Определяем длину, занимаемую текстом: размер шрифта * кол-во символов
        $length = mb_strlen($student, 'utf-8');
        //В зависимости от размера шрифта и количества символов, находим координаты расположения текста
        if ($template["font_size"] <= 18) {
            if ($length <= 15) {
                if ($length < 13) {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 10;
                } else {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 15;
                }
            } else if ($length > 15 && $length <= 18) {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9);
            } else {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9) + 10;
            }
        } else if ($template["font_size"] > 18 && $template["font_size"] <= 20) {
            if ($length <= 15) {
                if ($length < 13) {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 25;
                } else {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 35;
                }
            } else if ($length > 15 && $length < 18) {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9) - 13;
            } else if ($length > 25) {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9) + 10;
            }
        } else if ($template["font_size"] >= 21 && $template["font_size"] <= 25) {
            if ($length <= 15) {
                if ($length < 13) {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 30;
                } else {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 50;
                }
            } else if ($length > 15) {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9) + 10;
            } else {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9) + 20;
            }
        } else if ($template["font_size"] >= 26 && $template["font_size"] <= 30) {
            if ($length <= 15) {
                if ($length < 13) {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 35;
                } else {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 45;
                }
            } else if ($length > 15 && $length <= 18) {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9) + 15;
            } else {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9) + 10;
            }
        } else if ($template["font_size"] >= 31 && $template["font_size"] <= 34) {
            if ($length <= 15) {
                if ($length < 13) {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 40;
                } else {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 55;
                }
            } else if ($length > 15 && $length <= 18) {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9) + 20;
            } else {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9) + 10;
            }
        } else if ($template["font_size"] >= 35 && $template["font_size"] <= 44) {
            if ($length <= 15) {
                if ($length < 13) {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 55;
                } else {
                    $x = $x - (($length * ((int)$template["font_size"])) / 2) + 64;
                }
            } else if ($length > 15 && $length <= 18) {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9);
            } else {
                $x = $x - (($length * ((int)$template["font_size"]))) + (($length * ((int)$template["font_size"])) / 2) + (($length * ((int)$template["font_size"])) / 9) + 10;
            }
        }
    }
    //Выравнивание по правому краю
    if ($template["align"] === 'right') {
        $x += (int)$template["width"];
        $length = mb_strlen($student, 'utf-8');
        if ($template["font_size"] <= 18) {
            if ($length <= 15) {
                if ($length < 13) {
                    $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 25;
                } else {
                    $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 35;
                }
            } else {
                $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 45;
            }
        } else if ($template["font_size"] >= 19 && $template["font_size"] <= 23) {
            if ($length <= 15) {
                if ($length < 13) {
                    $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 25;
                } else {
                    $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 45;
                }
            } else {
                $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 65;
            }
        } else if ($template["font_size"] >= 24 && $template["font_size"] <= 33) {
            if ($length <= 15) {
                if ($length < 13) {
                    $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 45;
                } else {
                    $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 58;
                }
            } else {
                $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 80;
            }
        } else if ($template["font_size"] >= 34 && $template["font_size"] <= 44) {
            if ($length <= 15) {
                if ($length < 13) {
                    $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 65;
                } else {
                    $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 110;
                }
            } else {
                $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 140;
            }
        } else {
            if ($length <= 15) {
                if ($length < 13) {
                    $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 85;
                } else {
                    $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 140;
                }
            } else {
                $x = ($x - ($length * (int)$template["font_size"])) - $template["rightpad"] + 170;
            }
        }
    }
    //COLOR
    //убрать пробелы в строке, разделить на запятые
    $color = str_replace(" ", '', $template["color"]);
    $arr_color = explode(",", $color);
    $red = (int)$arr_color[0];
    $green = (int)$arr_color[1];
    $blue = (int)$arr_color[2];
    $textcolor = imagecolorallocate($img, $red, $green, $blue);
    //Генерирует уникальную строку из 5 символов с целью уникальности названия
    $hash = substr(str_shuffle('1234567890qwertyuiopasdfghjklzxcvbnm'), 0, 10);
    //название картинки
    $filename = $student . date('dmY-hi') . '_' . $hash . "." . $filetype;
    //Очищает папку с картинками на сервере
    imagettftext($img, $template["font_size"], 0, $x, $y, $textcolor, $font, $student);
    imagejpeg($img, $_SERVER["DOCUMENT_ROOT"] .'/Сертификаты/' . $filename);
    imagedestroy($img);
    $zip->addFile($_SERVER["DOCUMENT_ROOT"] .'/Сертификаты/' . $filename, 'sertificates/' . $filename);
}
$zip->close();
readfile("students.zip");
unlink("students.zip");
function clearFolder() {
    if(file_exists($_SERVER["DOCUMENT_ROOT"] .'/Сертификаты/')) {
      foreach(glob($_SERVER["DOCUMENT_ROOT"] .'/Сертификаты/*') as $file) {
        unlink($file);
      }
    }
}





