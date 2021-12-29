<?php

function device_status_to_string($status)
{
  switch ($status) {
    case 0:
      return "Tersedia";
    case 1:
      return "Sedang Dipinjam";
    case 2:
      return "Dalam Perawatan";
  }
}

function order_status_to_string($status)
{
  // 0 = Masih Dipinjam, 1 = Selesai, 2 = Belum Kembali Tanpa Alasan yang Jelas
  switch ($status) {
    case 0:
      return "Masih Dipinjam";
    case 1:
      return "Selesai";
    case 2:
      return "Terlambat";
    case 3:
      return "Belum Kembali Tanpa Alasan yang Jelas";
  }
}
