<?php
include (__DIR__ . '/../Model/Note.php');
class NotesService{
    private mysqli $connection;
    private array $Notes;
    public function __construct()
    {
        $this->Notes = array();
        $this->connect();

        $result = $this->connection->query("SELECT * FROM `notes`");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $temp = new Note($row["title"], $row["text"], $row["date"], $row["id"]);
                $this->Notes[] = $temp;
            }
        }
        $this->disconnect();
    }

    /**
     * @return array
     */
    public function getNotes(): array
    {
        return $this->Notes;
    }
    public function AddNote($Title, $Text, $Date)
    {
        $this->connect();
        $this->Notes[] = new Note($Title, $Text, $Date);
        $this->connection->query("INSERT INTO `notes`(`title`, `text`, `date`) VALUES ('$Title' ,'$Text' ,'$Date') ");
        $this->disconnect();
    }
    public function RemoveNote($Id): bool
    {
        $this->connect();
        $index = null;
        if (isset($this->Notes)) $index = array_filter($this->Notes, function ($el) use ($Id) {
           return  $el->getId() == $Id;
        });
        if (isset($index))
        {
            $this->connection->query("DELETE FROM `notes` WHERE `id`='$Id'");
            $this->disconnect();
            return true;
        }
        $this->disconnect();
        return false;
    }

    public function UpdateNote($Id, $Title, $Text, $Date): bool
    {
        $this->connect();
        $index = null;
        if (isset($this->Notes)) $index = array_filter($this->Notes, function ($el) use ($Id) {
            return  $el->getId() == $Id;
        });
        if (isset($index))
        {
            $this->connection->query("UPDATE `notes` SET `title`='$Title',`text`='$Text', `date`='$Date'WHERE `id`='$Id'");
            $this->disconnect();
            return true;
        }
        $this->disconnect();
        return false;
    }

    private function connect(): void
    {
        $server = "127.0.0.1";
        $database = "mydb";
        $username = "root";
        $password = "";
        $this->connection = mysqli_connect($server, $username, $password, $database);
    }
    private function disconnect(): void
    {
        mysqli_close($this->connection);
    }
}