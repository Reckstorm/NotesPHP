<?php
include (__DIR__ . '/../Services/NotesService.php');
function getNotes(): array
{
    $Notes = new NotesService();
    return $Notes->getNotes();
}
function addNote($noteData): void
{
    $Notes = new NotesService();
    if ($noteData["id"] != ''){
        $Notes->UpdateNote($noteData["id"], $noteData["title"], $noteData["text"], $noteData["date"]);
    }
    else{
        $Notes->AddNote($noteData["title"], $noteData["text"], $noteData["date"]);
    }
}
function removeNote($noteId): void
{
    $Notes = new NotesService();
    $Notes->RemoveNote($noteId);
}