<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe of Love 2025</title>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* --- CSS การตกแต่ง --- */
        body {
            font-family: 'Mali', cursive;
            background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
            margin: 0;
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background-color: #ffdde1; 
            background-image: linear-gradient(to right, #ffdde1, #ee9ca7);
        }

        .container {
            width: 100%;
            max-width: 400px;
            text-align: center;
            background: white;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            position: relative;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ซ่อนหน้าอื่นๆ ไว้ก่อน */
        .page {
            display: none;
            animation: fadeIn 0.8s ease;
        }
        
        .active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* --- หน้า 1: ตู้เซฟ --- */
        .display-screen {
            background: #333;
            color: rgb(255, 0, 0);
            font-size: 24px;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            letter-spacing: 5px;
            height: 20px;
        }

        .keypad {
            display: grid;
            grid-template-columns: repeat(3, 0.5fr);
            gap: 20px;
        }

        .key {
            background: #ff6b6b;
            color: white;
            border: none;
            padding: 30px;
            font-size: 25px;
            border-radius: 200%;
            cursor: pointer;
            transition: 0.2s;
        }

        .key:active { transform: scale(0.9); }
        .key.clear { background: #ff4757; font-size: 18px; }

        /* --- หน้า 2: แกลเลอรี่ --- */
        .gallery-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .photo-frame {
            background: white;
            padding: 5px;
            box-shadow: 0 8px 10px rgba(0,0,0,0.1);
            cursor: pointer;
        }
        
        .photo-frame:hover { transform: scale(1.05); }

        .photo-frame img {
            width: 100%;
            height: 150px; /* ปรับความสูงรูปตามต้องการ */
            object-fit: cover;
            border-radius: 5px;
        }

        /* Modal Popup */
        .modal {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.8);
            justify-content: center;
            align-items: center;
            z-index: 100;
        }

        .modal-content {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            max-width: 80%;
        }

        .close-btn, .next-btn {
            background: #ff6b6b;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            margin-top: 15px;
            font-family: 'Mali', cursive;
        }

        /* --- หน้า 3: คำอวยพร --- */
        .wishes-box {
            padding: 20px;
            border: 2px dashed #ff6b6b;
            border-radius: 15px;
            background: #fff0f0;
        }
        
        .wishes-text {
            font-size: 18px;
            line-height: 1.6;
            color: #d63031;
        }

        /* --- หน้า 4: วิดีโอ --- */
        video {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

    </style>
</head>
<body>

    <div class="container">
        <div id="page1" class="page active">
            <h2>🔐 รหัสหัวใจคนดีคืออะไรคร้าบ</h2>
            <p>กรอกรหัสผ่าน 6 หลักเพื่อเปิดหัวใจนะครับคนดี</p>
            <div class="display-screen" id="display">******</div>
            <div class="keypad">
                <button class="key" onclick="press(1)">1</button>
                <button class="key" onclick="press(2)">2</button>
                <button class="key" onclick="press(3)">3</button>
                <button class="key" onclick="press(4)">4</button>
                <button class="key" onclick="press(5)">5</button>
                <button class="key" onclick="press(6)">6</button>
                <button class="key" onclick="press(7)">7</button>
                <button class="key" onclick="press(8)">8</button>
                <button class="key" onclick="press(9)">9</button>
                <button class="key clear" onclick="clearCode()">C</button>
                <button class="key" onclick="press(0)">0</button>
                <button class="key clear" onclick="checkCode()">❤️</button>
            </div>
            <p style="font-size: 12px; color: #888; margin-top: 10px;">(รหัสคือ: 130169)</p>
        </div>

        <div id="page2" class="page">
            <h2>💖 รูปความทรงจำของคนดี</h2>
            <p>กดที่รูปเพื่ออ่านอาราย</p>
            <div class="gallery-grid">
                <div class="photo-frame" onclick="openModal('แมวอ้วนตัวนี้รักซามายมากๆ เลยนะคะรู้มั้ย ถึงปีนี้เราจะไม่ได้อยู่ด้วยกันตอนปีใหม่แต่เราจะได้อยู่ด้วยกันแน่นอนเลยนะครู้มั้ย🥺🫶🏻💖')">
                    <img src="Screenshot_20241128_110419 - Copy.jpg" alt="รูปที่ 1">
                    <p>จิ้มที่ 1</p>
                </div>
                <div class="photo-frame" onclick="openModal('จิ้มๆ เจ้าอู๊ดๆ ของเค้าฮี่ๆ ชอบนอนหลับน้ำลายยืด เค้าจะคอยอยู๋ข้างๆ อ้วนเสมอไปแล้วก็ตลอดไปเลยนะคะ🥺')">
                    <img src="1742887330782 - Copy.jpg" alt="รูปที่ 2">
                    <p>จิ้มที่ 2</p>
                </div>
                <div class="photo-frame" onclick="openModal('เค้าจาคอยจุ฿บเหม่งให้อ้วนตอนตุ๋นนอนตอนเช้าในทุกๆ วานเลยนะคะเจ้าหมูอ้วนนนน😽💖')">
                    <img src="1767012205805 - Copy.jpg" alt="รูปที่ 3">
                    <p>จิ้มที่ 3</p>
                </div>
                <div class="photo-frame" onclick="openModal('แมวอ้วนตุวนี้จาอยู่กาบซามอยในทุกเทศกาลเลยนะคะรู้มั้ย🥺😽💖')">
                    <img src="IMG_20250514_195437_434 - Copy.jpg" alt="รูปที่ 4">
                    <p>จิ้มที่ 4</p>
                </div>
            </div>
            <button class="next-btn" style="margin-top: 20px; width: 100%;" onclick="goToPage(3)">ถัดไป ➡️</button>
        </div>

        <div id="msgModal" class="modal">
            <div class="modal-content">
                <h3 style="color: #ff6b6b;">ถึงเธอคนดี...</h3>
                <p id="modalText" style="font-size: 18px;">ข้อความ...</p>
                <button class="close-btn" onclick="closeModal()">กลับ</button>
            </div>
        </div>

        <div id="page3" class="page">
            <h2>🎉 Happy New Year 2025</h2>
            <div class="wishes-box">
                <p class="wishes-text">
                    สวัสดีปีใหม่นะคนดีของเค้า<br>
                    ขอให้ปีนี้เป็นปีที่ดีของเรา<br>
                    ขอให้คนดีมีความสุขมากๆ<br>
                    สุขภาพแข็งแรง<br>
                    แล้วก็อยู่กาบเค้าให้นานๆเลยนะคะ<br>
                    เค้าสัญญาว่าจะอยู่ข้างๆ อ้วนแบบนี้
                    ตลอดไปเลยนะคะรู้มั้ย🥺🫶🏻💖
                </p>
            </div>
            <br>
            <p>ยังมีอีกอย่างที่อยากให้ดู...</p>
            <button class="next-btn" onclick="goToPage(4)">เปิดดูเลย 🎬</button>
        </div>

        <div id="page4" class="page">
            <h2>🎥 For You</h2>
            <video controls>
                <source src="เพลงรัก - Three Man Down _Official MV_.mp4" type="video/mp4">
                Browser ไม่รองรับวิดีโอ
            </video>
            <p style="margin-top: 20px;">เค้ารักอ้วนมากๆ เลยนะคะ🥺🫶🏻💖</p>
            <button class="close-btn" onclick="goToPage(1)">เริ่มใหม่</button>
        </div>

    </div>

    <script>
        /* --- JavaScript การทำงาน --- */
        let currentInput = "";
        const correctCode = "130169"; // ตั้งรหัสผ่านตรงนี้

        // ฟังก์ชันกดปุ่มตัวเลข
        function press(num) {
            if (currentInput.length < 6) {
                currentInput += num;
                updateDisplay();
            }
        }

        // อัปเดตหน้าจอ code
        function updateDisplay() {
            let hiddenText = "";
            for(let i=0; i<currentInput.length; i++) {
                hiddenText += "❤️"; // เปลี่ยนตัวเลขเป็นหัวใจ
            }
            document.getElementById('display').innerText = hiddenText;
        }

        // ล้างรหัส
        function clearCode() {
            currentInput = "";
            document.getElementById('display').innerText = "";
        }

        // ตรวจสอบรหัส
        function checkCode() {
            if (currentInput === correctCode) {
                goToPage(2);
            } else {
                alert("รหัสผิด! ลองใหม่อีกทีนะ (ใบ้ให้: 130169)");
                clearCode();
            }
        }

        // ฟังก์ชันเปลี่ยนหน้า
        function goToPage(pageNum) {
            // ซ่อนทุกหน้า
            document.querySelectorAll('.page').forEach(page => {
                page.classList.remove('active');
            });
            // โชว์หน้าที่เลือก
            document.getElementById('page' + pageNum).classList.add('active');
        }

        // ฟังก์ชัน Modal (หน้า 2)
        function openModal(text) {
            document.getElementById('modalText').innerText = text;
            document.getElementById('msgModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('msgModal').style.display = 'none';
        }
    </script>
</body>
</html>