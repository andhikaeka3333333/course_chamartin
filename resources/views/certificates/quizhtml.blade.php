<!-- resources/views/certificates/quiz.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Certificate</title>
</head>
<body>
    <div class="certificate">
            <html>
            <head>
                <title>Sertifikat</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        background-color: #f4f4f4;
                    }

                    .certificate-container {
                        width: 850px;
                        height: 600px;
                        border: 10px solid #0e6eb8;
                        padding: 20px;
                        background-color: #fff;
                        position: relative;
                    }

                    .header {
                        text-align: center;
                        margin-bottom: 20px;
                    }

                    .header img {
                        max-width: 150px;
                    }

                    .badge {
                        position: absolute;
                        top: 30px;
                        right: 30px;
                        background-color: #0e6eb8;
                        color: #fff;
                        font-size: 16px;
                        font-weight: bold;
                        padding: 10px;
                        border-radius: 5px;
                    }

                    .content {
                        text-align: center;
                        margin-top: 30px;
                    }

                    .title {
                        font-size: 24px;
                        font-weight: bold;
                        margin-bottom: 10px;
                    }

                    .name {
                        font-size: 22px;
                        font-weight: bold;
                        color: #333;
                        margin-bottom: 5px;
                    }

                    .subtitle {
                        font-size: 18px;
                        color: #555;
                    }

                    .footer {
                        text-align: center;
                        margin-top: 30px;
                        font-size: 14px;
                        color: #777;
                    }

                    .footer .sign {
                        margin-top: 20px;
                    }

                    .footer img {
                        max-width: 100px;
                    }
                </style>
            </head>
            <body>
                <div class="certificate-container">
                    <div class="badge">Verified</div>
                    <div class="header">
                        <img src="images/logo.png" alt="Logo">
                        <h2>Chamartin</h2>
                    </div>
                    <div class="content">
                        <div class="title">Sertifikat Kompetensi Kelulusan</div>
                        <div class="name">Nama: {{ auth()->user()->name }}</div>
                        <div class="subtitle">Selamat! Kamu berhasil lulus kursus HTML dengan score {{ $score }}%.</div>
                    </div>
                    <div class="footer">

                        <div class="sign">
                            <p><img src="images/tanda-tangan-admin.png" alt="Tanda Tangan"></p>
                            <p>Andhika Eka Santosa</p>
                            <p>Chief Executive Officer</p>
                        </div>
                    </div>
                </div>
            </body>
            </html>
        </div>
    </div>
</body>
</html>
