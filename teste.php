<?php

function load_xml_super()
{
  header("Content-type: text/xml");
  move_uploaded_file($_FILES['myfile2']['tmp_name'], "./b.xml");
  $filename = "b.xml";
  $handle = fopen($filename, "r");
  $conteudo = fread($handle, filesize($filename));
  return $conteudo;
}

function load_xml()
{
  header("Content-type: text/xml");
  $filename = $_FILES['myfile2']['tmp_name'];
  $handle = fopen($filename, "r");
  $conteudo = fread($handle, filesize($filename));
  fclose($handle);
  return $conteudo;
}

echo load_xml();
