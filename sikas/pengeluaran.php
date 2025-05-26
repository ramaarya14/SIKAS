<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi KAS</title>
    <link rel="stylesheet" href="style.css">
    <style>
  table {
    border-collapse: collapse;
    width: 1100px;
    background: white;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    border-radius: 10px;
    overflow: hidden;
    text-align: left;
  }
  thead {
    background-color: #2a9d8f;
    color: #fff;
  }
  thead th {
    padding: 15px 20px;
    font-size: 1.25rem;
  }
  tbody td {
    padding: 12px 20px;
    border-bottom: 1px solid #e1e5ee;
    font-size: 1.1rem;
    color: #394867;
    font-weight: 600;
  }
  tbody tr:nth-child(even) {
    background-color: #f5f8ff;
  }

</style>
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="logo"><a href="index.html">SIKAS</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="inputpemasukan.html">Input Pemasukan</a></li>
                    <li><a href="inputpengeluaran.html">Input Pengeluaran</a></li>
                    <li><a href="pemasukan.php"> History Pemasukan</a></li>
                    <li><a href="pengeluaran.php">History Pengeluaran</a></li>
                    <li><a href="login.html" class="tbl-green">Logout</a></li>
                </ul>
            </div>
  <table>
    <thead>
      <tr>
        <th>Tanggal</th>
        <th>Nominal</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM pengeluaran ORDER BY tanggal DESC";
      $result = mysqli_query($conn, $query);

      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . date('d/m/Y', strtotime($row['tanggal'])) . "</td>";
        echo "<td>Rp " . number_format($row['nominal'], 0, ',', '.') . "</td>";
        echo "<td>" . htmlspecialchars($row['keterangan']) . "</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
      </div>
    </section>
  </div>
    </nav>
</body>
</html>