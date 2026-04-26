<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - Universitas Negeri Makassar</title>

    <!-- Feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background: white;
            width: 90%;
            max-width: 520px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
        }

        .logo-box {
            margin-bottom: 15px;
        }

        .logo-text {
            display: inline-block;
            background-color: #004aad;
            color: white;
            padding: 12px 18px;
            border-radius: 50%;
            font-weight: 700;
            font-size: 20px;
        }

        h1 {
            margin: 10px 0 8px;
            color: #222;
            font-size: 24px;
            line-height: 1.4;
        }

        .subtitle {
            margin: 0 0 25px;
            color: #666;
            font-size: 15px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin: 12px 0;
        }

        ul li a {
            text-decoration: none;
            color: #004aad;
            font-size: 17px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            background-color: #f8fafc;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            transition: 0.2s ease;
        }

        ul li a i {
            margin-right: 10px;
        }

        ul li a:hover {
            color: white;
            background-color: #004aad;
            transform: translateY(-2px);
        }

        .footer {
            margin-top: 25px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-box">
            <span class="logo-text">UNM</span>
        </div>

        <h1>SIAKAD UNIVERSITAS NEGERI MAKASSAR</h1>
        <p class="subtitle">Sistem Informasi Akademik Internal</p>

        <ul>
            <li>
                <a href="tambah_mahasiswa.php">
                    <i data-feather="plus-circle"></i> Tambah Mahasiswa
                </a>
            </li>
            <li>
                <a href="tambah_matkul.php">
                    <i data-feather="plus-circle"></i> Tambah Mata Kuliah
                </a>
            </li>
            <li>
                <a href="tampil_mahasiswa.php">
                    <i data-feather="eye"></i> Lihat Mahasiswa
                </a>
            </li>
            <li>
                <a href="tampil_matkul.php">
                    <i data-feather="eye"></i> Lihat Mata Kuliah
                </a>
            </li>
            <li>
                <a href="pilih_semester.php">
                    <i data-feather="book-open"></i> Pilih Semester
                </a>
            </li>
            <li>
                <a href="pilih_input_nilai.php">
                    <i data-feather="edit"></i> Input Nilai Mahasiswa
                </a>
            </li>
            <li>
                <a href="update_nilai.php">
                    <i data-feather="refresh-cw"></i> Update Nilai Mahasiswa
                </a>
            </li>
        </ul>

        <div class="footer">
            Web Server Internal - Proyek Keamanan Jaringan
        </div>
    </div>

    <script>
        feather.replace();
    </script>
</body>
</html>