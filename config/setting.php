<?php
$base_url   = "http://localhost/latihan3/";


function koneksi()
{
  return  mysqli_connect('localhost:3307', 'root', '', 'latihan3');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasil hanya satu data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if ($username == 'admin' && $password == '12345') {

    $_SESSION['login'] = true;

    header("Location: ../dashboard/index.php");
    exit;
  } else {
    return [
      'error' => true,
      'pesan' => 'Username / Password salah'
    ];
  }
}
