<?php
$base_url   = "http://localhost/latihan3/";


function koneksi()
{
  return  mysqli_connect('localhost:3307', 'root', '', 'latihan3');
}
