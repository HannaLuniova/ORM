<?php

namespace W1020;

class Db
{
    /**
     * Переменная, преднаязначенная для создания объекта класса mysqli(), который используется для рабрты с БД в PHP
     * @var \mysqli
     */
    protected \mysqli $mysqli;

    /**
     * Db constructor.
     * Принимает на вход информацию(конфигурацию) для подключения к БД и производит его
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->mysqli = new \mysqli($config["servername"], $config["username"], $config["password"], $config["dbname"]);
    }

    /**
     * Возвращает многомерный(ассоциотивный) массив, содержащий 'обработаный' результат sql запроса
     * @param string $sql
     * @return array
     */
    public function query(string $sql): array
    {
        $result = $this->mysqli->query($sql);

        $res = [];

        while ($row = $result->fetch_assoc()) {
            $res[] = $row;
        }
        return $res;
    }
}