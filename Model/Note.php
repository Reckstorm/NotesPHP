<?php
class Note {
    private int $id;
    private string $Title = "";
    private string $Text = "";
    private string $Date;

    public function __construct($Title, $Text, $Date, $id = 0)
    {
        $this->Title = $Title;
        $this->Text = $Text;
        $this->Date = $Date;
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     */
    public function setTitle(string $Title): void
    {
        $this->Title = $Title;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     */
    public function setText(string $Text): void
    {
        $this->Text = $Text;
    }

    /**
     * @return string
     */
    public function getDate() : string
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     */
    public function setDate(string $Date): void
    {
        $this->Date = $Date;
    }
}