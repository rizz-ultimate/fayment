
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Rizz ultimate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="rizzultimate.png" type="image/x-icon">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            animation: fadeIn 1.5s ease-in-out;
        }

        .container {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            max-width: 600px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
            border: 4px solid;
            animation: borderGlow 1.5s infinite alternate, fadeIn 1.5s ease-in-out;
        }

        .title {
            font-size: 28px;
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
            animation: animateTitle 1.5s cubic-bezier(0.25, 1, 0.5, 1) forwards;
        }

        @keyframes animateTitle {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(0); }
        }

        .description {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .qr-section h2 {
            font-size: 22px;
            color: #222;
            margin-bottom: 10px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .qr-container {
            position: relative;
            margin-bottom: 20px;
            border: 4px solid;
            border-radius: 8px;
            padding: 10px;
            background-color: #fafafa;
            animation: borderGlow 1.5s infinite alternate, fadeIn 1.5s ease-in-out;
        }

        .qr-container img {
            width: 300px;
            height: auto;
            border-radius: 8px;
        }

        .qr-controls {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .qr-controls button, .qr-controls a {
            padding: 10px 20px;
            margin: 5px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: buttonGlow 2s infinite;
        }

        .qr-controls button:hover, .qr-controls a:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        @keyframes buttonGlow {
            0% { 
                background-color: #ff4d4d;
                box-shadow: 0 4px 8px rgba(255, 77, 77, 0.6);
            }
            25% { 
                background-color: #4d79ff;
                box-shadow: 0 4px 8px rgba(77, 121, 255, 0.6);
            }
            50% { 
                background-color: #33cc33;
                box-shadow: 0 4px 8px rgba(51, 204, 51, 0.6);
            }
            75% { 
                background-color: #ffb74d;
                box-shadow: 0 4px 8px rgba(255, 183, 77, 0.6);
            }
            100% { 
                background-color: #ff4d4d;
                box-shadow: 0 4px 8px rgba(255, 77, 77, 0.6);
            }
        }

        .payment-section {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .payment-method {
            border: 4px solid;
            border-radius: 8px;
            padding: 10px;
            margin: 10px;
            background-color: #fafafa;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 200px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: borderGlow 1.5s infinite alternate, fadeIn 1.5s ease-in-out;
        }

        .payment-method img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .payment-method p {
            margin: 5px 0;
            color: #444;
            font-size: 14px;
        }

        .copy-btn {
            margin-top: 5px;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            animation: buttonGlow 2s infinite;
        }

        .copy-btn:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #888;
            animation: borderGlow 1.5s infinite alternate, fadeIn 1.5s ease-in-out;
        }

        .whatsapp-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #25d366;
            color: #fff;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: inline-block;
        }

        .whatsapp-btn:hover {
            background-color: #1ebe57;
            transform: scale(1.05);
        }

        .social-icons {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            background-color: white;
            border-radius: 50%;
            color: black;
            font-size: 28px;
            text-decoration: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: borderGlow 2s infinite;
        }

.social-icon:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 12px rgba(255, 255, 255, 0.8);
}


        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes borderGlow {
            0% { border-color: #ff4d4d; box-shadow: 0 0 10px rgba(255, 77, 77, 0.6); }
            25% { border-color: #4d79ff; box-shadow: 0 0 10px rgba(77, 121, 255, 0.6); }
            50% { border-color: #33cc33; box-shadow: 0 0 10px rgba(51, 204, 51, 0.6); }
            75% { border-color: #ffb74d; box-shadow: 0 0 10px rgba(255, 183, 77, 0.6); }
            100% { border-color: #ff4d4d; box-shadow: 0 0 10px rgba(255, 77, 77, 0.6); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">PAYMENT RIZZ ULTIMATE</h1>
        <p class="description">HI GUYS!!! MAKASIH TELAH ORDER<br>E-WALLET RIZZ ULTIMATE NICH!!!</p>
                <div class="social-icons">
            <a href="https://wa.me/6283177882117" class="social-icon"><i class="fab fa-whatsapp"></i></a>
            <a href="https://wa.me/6283874438641" class="social-icon"><i class="fab fa-twhatsapp"></i></a>
            <a href="https://t.me/@rizzultimate" class="social-icon"><i class="fab fa-telegram-plane"></i></a>
            
      
        </div>
        <div class="qr-section">
            <h2>Scan untuk Pembayaran</h2>
            <div class="qr-container">
                <img id="qris" src="qris.jpg" alt="QRIS RIZZ ULTIMATE">
            </div>
            <div class="qr-controls">
                <button id="zoomBtn" class="oval-btn">Zoom QRIS</button>
                <a id="downloadLink" class="oval-btn" href="qris.jpg" download="QRIS_RIZZULTIMATE.jpg">Download QRIS</a>
            </div>
        </div>

        <div class="payment-section">
            <div class="payment-method">
                <img src="dana.png" alt="Dana Logo">
                <p>Nomor: <span id="danaNumber">089607133433</span></p>
                <p>Atas Nama: INDRIYANI</p>
                <button class="copy-btn" onclick="copyToClipboard('danaNumber')">Copy Nomor</button>
            </div>
            <div class="payment-method">
                <img src="ovo.png" alt="Ovo Logo">
                <p>Nomor: <span id="ovoNumber">083177882117</span></p>
                <p>Atas Nama: RIZZ ULTIMATE</p>
                <button class="copy-btn" onclick="copyToClipboard('ovoNumber')">Copy Nomor</button>
            </div>
            <div class="payment-method">
                <img src="gopay.png" alt="Gopay Logo">
                <p>Nomor: <span id="gopayNumber">083874438641</span></p>
                <p>Atas Nama: RIZZ ULTIMATE</p>
                <button class="copy-btn" onclick="copyToClipboard('gopayNumber')">Copy Nomor</button>
            </div>
        </div>

        <a href="https://wa.me/6283177882117" class="whatsapp-btn">
            Hubungi Penjual di WhatsApp
        </a>



        <div class="footer">
            &copy; 2024 Rizz ultimate. All Rights Reserved.
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('zoomBtn').addEventListener('click', function() {
            const qrImage = document.getElementById('qris');
            if (qrImage.style.transform === 'scale(1.5)') {
                qrImage.style.transform = 'scale(1)';
            } else {
                qrImage.style.transform = 'scale(1.5)';
            }
            qrImage.style.transition = 'transform 0.3s ease';
        });

        function copyToClipboard(elementId) {
            const textToCopy = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(textToCopy).then(() => {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Nomor telah disalin ke clipboard!',
                    showConfirmButton: false,
                    timer: 1500
                });
            }).catch(err => {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Gagal menyalin ke clipboard!',
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        }
    </script>
</body>
</html>

