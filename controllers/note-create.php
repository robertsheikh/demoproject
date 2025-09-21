<?php
$heading=  'create Note';

if($SERVER['REQUEST_METHOD'] === 'POST'){
    dd($POST);
}
require "view/note-create.view.php";
