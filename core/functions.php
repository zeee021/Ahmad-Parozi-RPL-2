<?php
include '../core/Url.php';
include '../core/Controller.php';
include '../core/BaseModel.php';

$url = new Url();
$db = new BaseModel();
function checkIsNotLogin()
{
	if (!isset($_SESSION['login'])) {
		header("Location:http://localhost/ukk_perpus_zi/login");
	}
}

function urlTo($to)
{
	return 'http://localhost/ukk_perpus_zi' . $to;
}

function redirectTo($icon, $pesan, $tujuan)
{
	setcookie('alert', serialize([$icon, $pesan]), time() + 1, '/');
	header("Location:http://localhost/ukk_perpus_zi" . $tujuan);
}

function getTitle()
{
	global $url;
	$title = $url->getUrl();
	if (count($title) === 3) {
		$title = $title[2] . ' ' . $title[0];
	} elseif (count($title) === 2) {
		$title = $title[1] . ' ' . $title[0];
	} else {
		$title = $title[0];
	}

	return ucfirst($title);
}

function menuActive($menu)
{
	global $url;
	$m = $url->getUrl();
	foreach ($menu as $key) {
		if ($m[0] == $key) {
			return 'active';
		}
	}
}

function menuOpen($menu)
{
	global $url;
	$m = $url->getUrl();
	foreach ($menu as $key) {
		if ($m[0] == $key) {
			return 'menu-open';
		}
	}
	function hitung($table)
	{
		global $db;
		$result = $db->mysqli->query("SELECT * FROM " . $table);

		return $result->num_rows;
	}
}
include '../dompdf/autoload.inc.php';
