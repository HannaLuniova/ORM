<?php


namespace W1020;


class Crud extends Db
{
    protected string $tableName;

    /**
     * @param string $tableName
     * @return $this
     */
    public function setTableName(string $tableName)
    {
        $this->tableName = $tableName;
        return $this;
    }

    /**
     * @return array
     */
    public function get(): array
    {
        return $this->query("SELECT * FROM $this->tableName;");
    }
}