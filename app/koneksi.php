<?php

$mysqli = new mysqli("localhost", "root", "", "kpu");


if (!$mysqli) {
    echo "Koneksi bermasalah !";
}
