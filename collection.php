<?php

$db = new PDO('mysql:host=DB;dbname=collection', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->query('SELECT `name` FROM `characterinfo`;');
$data = $query->fetchAll();
