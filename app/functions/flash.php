<?php

function flash(string $key, string $message, string $type = 'danger') {
    if (!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = "<div class='alert alert-{$type} alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        $message
      </div>";
    }
}

function get($key) {
    if (isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];

        unset($_SESSION['flash'][$key]);

        return $message ?? '';
    }
}