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
