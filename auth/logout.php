<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil logout dari SATGAS PPKS UNESA!'); window.location='../index.php';</script>";