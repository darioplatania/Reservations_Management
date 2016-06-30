<?php
function verificaHTTPS(){
	if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){
		session_destroy(); //distruggi la sessione aperta con l'http
		$redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".$redirect);
	}
};
?>
