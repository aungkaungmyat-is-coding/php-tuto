<?php

$_SESSION['errors'] = [];
function setError($message)
{
    $_SESSION['errors'][] = $message;
}

function showError() {
    $errors = $_SESSION['errors'];
    $_SESSION['errors'] = [];
    if(count($errors)) {
        foreach($errors as $e) {
            echo "<div class='alert alert-danger>$e</div>";
        }
    }
}

function hasError() {
    $errors = $_SESSION['errors'];
    if(count($errors)) {
        return true;
    }
    return false;
}

function go($path) {
    header("Location:$path");
}