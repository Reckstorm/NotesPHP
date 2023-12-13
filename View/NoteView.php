<?php
include(__DIR__ . '/../Controller/NotesController.php');
echo '<link href="../style.css" rel="stylesheet">';

echo '<div class="flex mt" >
    <form id="addNote" class="input-form">
    <div class="form-container">
        <div class="mt">
            <label class="form-label"> Title:
            <br>
            <input id="title" class="form-control" type="text" name="noteData[title]" required>
        </label>
        </div>
        <div class="mt">
            <label class="form-label"> Text:
            <br>
            <textarea id="text" class="form-control" cols="40" rows="5" name="noteData[text]" required></textarea>
        </label>
        </div>
        <div class="mt">
            <label class="form-label"> Date:
            <br>
            <input id="date" class="form-control" type="date" name="noteData[date]" required>
        </label>
        </div>
        <div class="mt">
            <input id="id" class="hidden" type="text" value="" name="noteData[id]">
            <input type="submit" class="btn btn-primary">
            <input type="reset" class="btn btn-primary">
        </div>
    </div>
    </form>
    </div>';

$Notes = getNotes();

if (isset($_POST['noteData'])){
    addNote($_POST['noteData']);
    echo "<meta http-equiv='refresh' content='0'>";
}
else if (isset($_POST['noteId'])){
    removeNote($_POST['noteId']);
    echo "<meta http-equiv='refresh' content='0'>";
}

$output = '<div class="container">';
foreach ($Notes as $note) {
    $output .= '<div class="card">';
    $output .= '<form>';
    $output .= '<input class="" type="submit" value="X">';
    $output .= '<h4>' . $note->getTitle() . '</h4>';
    $output .= '<p>' . $note->getText() . '</p>';
    $output .= '<p>' . $note->getDate() . '</p>';
    $output .= '<input class="hidden" type="text" name="noteId" value="'. $note->getId() .'">';
    $output .= '</form>';
    $output .= '<button onclick="editNote(this)">Edit</button>';
    $output .= '</div>';
}
$output .= '</div>';
echo $output;

echo '<script type="text/javascript" src="../script.js"></script>';