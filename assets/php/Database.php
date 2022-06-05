<?php
class DB
{
    //В конструкторе подключение к БД
    public function __construct()
    {
        $this->sql = new mysqli('localhost', 'root', '', 'prezer');
    }
    //Функция выполнения запроса
    public function que(string $que)
    {
        return $this->sql->query($que);
    }
    //Функция выполнения запроса нахождения одной строки и преобразование в массив
    public function findOne(string $find)
    {
        $res = $this->sql->query($find);
        if ($res->num_rows > 0) {
            $one = $res->fetch_assoc();
            return $one;
        }
    }
    //возвращает строку о пользователе, у которого ид будет равен сессии
    public function findUser($userid)
    {
        $getRow = $this->findOne("SELECT * FROM 'users' WHERE `id` = " . $userid);
        return $getRow;
    }
    //универсальный селект
    public function get($condition)
    {
        //table-id:1,age:22 = select * from `table` WHERE `id` = 1 AND  `age` = 22
        $query = '';
        $array = explode('-', $condition);
        $table = $array[0];
        if ($array[1] == '' || $array[1] == null) {
            $q = "SELECT * FROM `" . $table . "`";
        } else {
            $query .= "SELECT * FROM `" . $table . "` WHERE";
            $conditions = explode(',', $array[1]);
            foreach ($conditions as $condition) {
                $condition = explode(':', $condition);
                $column = $condition[0];
                $value = $condition[1];
                if (is_numeric($value)) {
                    $query .= " `" . $column . "` = " . $value . " :";
                } else {
                    $query .= " `" . $column . "` = '" . $value . "' :";
                }

                $query =  str_replace(':', ' AND ', $query);
                $q = mb_substr($query, 0, -4);
            }
        }
        return $this->sql->query($q);
    }
    //подсчитывает count строк
    public function count($q) 
    {
        return count($q->fetch_all());
    }
}
$db = new DB();
