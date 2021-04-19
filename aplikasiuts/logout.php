<?php
session_start();

unset($_SESSION['MEMBER']);
//landing page
header('location:http://localhost/aplikasiuts/index.php?hal=home');