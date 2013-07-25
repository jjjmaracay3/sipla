<?php
class GMensages 
{
   static function getNecesitoTraduccion($event)
   {	
	$text="";
	$text= " Lenguaje: {$event->language} <br>";
	$text= " Categoria: {$event->category} <br>";
	$text= " Mensaje: {$event->message} <br>";
	mail ('jjjmaracay3@gmail.com','Necesito traduccion!!!',$text);
}
}
?>