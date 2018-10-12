<?php
require 'vendor/autoload.php';
use Google\Cloud\Storage\StorageClient;
use Google\Auth\Credentials\GCECredentials;

$projectId = 'pruebasydemos-218913';

// Authenticating with keyfile data.
$storage = new StorageClient([
	'keyFile' => json_decode(file_get_contents('pruebasydemos-5ea18d7c0e30.json'), true),
	'projectId' => $projectId
]);

$bucketName = 'pruebatest';
$bucket = $storage->bucket($bucketName);
//$bucket = $storage->bucket('pruebatest');
	

function uploadFile () {	
	// Upload a file to the bucket.
	/*$bucket->upload(
	   fopen('file.txt', 'r')
	);
	*/
	$source = 'file.txt';
	$file = fopen($source, 'r');

	$objectName = $source; //Same name for objectUpload name
	$object = $bucket->upload($file, [
		'name' => $objectName
	]);

	printf('Uploaded %s to gs://%s/%s' . PHP_EOL, basename($source), $bucketName, $objectName);
}

echo 'hola';
?>
