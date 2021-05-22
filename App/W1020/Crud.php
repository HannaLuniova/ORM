<?php


namespace W1020;


class Crud extends Db
{
    /**
     * Строка содержащая имя таблицы
     * @var string
     */
    protected string $tableName;

    /**
     * Задает имя таблицы
     * @param string $tableName
     * @return $this
     */
    public function setTableName(string $tableName)
    {
        $this->tableName = $tableName;
        return $this;
    }

    /**
     * Возвращает все поля таблицы
     * @return array
     */
    public function get(): array
    {
        return $this->query("SELECT * FROM $this->tableName;");
    }

    /**
     * Добавляет данные в соответствующие поля таблицы
     * @return $this
     */
    public function create(): static
    {
        $this->mysqli->query("INSERT INTO $this->tableName (`message`, `name`) VALUES ('Hi all, im Vitya!!', 'Vitya')");
        return $this;
    }

    /**
     * Обновляет данные в соответствующих полях таблицы по id
     * @param int $id
     * @return $this
     */
    public function update(int $id): static
    {
        $this->mysqli->query("UPDATE $this->tableName SET `message`= 'Test message', `name`= 'Vitya test' WHERE `id`=$id");
        return $this;
    }

    /**
     * Удаляет данные из соответствующих полей таблицы по id
     * @param int $id
     * @return $this
     */
    public function delete(int $id): static
    {
        $this->mysqli->query("DELETE FROM $this->tableName WHERE id=$id");
        return $this;
    }
}