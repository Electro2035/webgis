<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper" style="background-color: #f4f6f9;">
    <section class="content">
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="min-height: 80vh;">

            <div style="background:white; padding:40px 60px; border-radius:25px;
                        box-shadow:0 4px 15px rgba(0,0,0,0.1); text-align:center;">

                <h2 style="font-weight:700; color:#333; font-size:2rem; margin-bottom:10px;">MOHAMMAD CAESAR MAULANA</h2>
                <p style="color:#777;">11220930000016</p>

                <!-- Gimmick karakter doodle -->
                <div class="doodle-zone" style="margin-top:40px; display:flex; flex-wrap:wrap; justify-content:center; gap:35px;">
                    <div class="doodle" data-color="#ffebee"></div>
                    <div class="doodle" data-color="#e3f2fd"></div>
                    <div class="doodle" data-color="#e8f5e9"></div>
                    <div class="doodle" data-color="#fff3e0"></div>
                    <div class="doodle" data-color="#f3e5f5"></div>
                </div>
            </div>

        </div>
    </section>
</div>

<style>
    .doodle {
        position: relative;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        transition: transform 0.3s ease, box-shadow 0.3s;
        animation: bounce 3s ease-in-out infinite;
    }

    /* Mata */
    .eye {
        position: absolute;
        width: 12px;
        height: 12px;
        background: #000;
        border-radius: 50%;
        top: 22px;
        transition: all 0.3s ease;
    }
    .eye.left { left: 18px; }
    .eye.right { right: 18px; }

    /* Pupil */
    .pupil {
        position: absolute;
        width: 5px;
        height: 5px;
        background: #fff;
        border-radius: 50%;
        top: 3px;
        left: 3px;
        transition: transform 0.4s ease;
    }

    /* Mulut */
    .mouth {
        position: absolute;
        left: 50%;
        bottom: 20px;
        transform: translateX(-50%);
        width: 18px;
        height: 4px;
        background: #000;
        border-radius: 2px;
        transition: all 0.5s ease;
    }

    /* Animasi bounce tubuh */
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    /* Interaksi hover */
    .doodle:hover {
        transform: scale(1.15) rotate(-4deg);
        box-shadow: 0 6px 18px rgba(0,0,0,0.25);
    }

    /* Kedipan mata */
    @keyframes blink {
        0%, 90%, 100% { transform: scaleY(1); }
        95% { transform: scaleY(0.1); }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const doodles = document.querySelectorAll('.doodle');
    const moods = [
        { width: 16, height: 3, borderRadius: "2px" }, // senyum datar
        { width: 14, height: 6, borderRadius: "50%" }, // senyum lebar
        { width: 10, height: 2, borderRadius: "2px" }, // datar
        { width: 8, height: 8, borderRadius: "50%" }   // mulut O
    ];

    doodles.forEach(doodle => {
        // warna tubuh
        doodle.style.background = doodle.dataset.color;

        // mata
        const leftEye = document.createElement('div');
        leftEye.classList.add('eye', 'left');
        const rightEye = document.createElement('div');
        rightEye.classList.add('eye', 'right');

        // pupil
        const leftPupil = document.createElement('div');
        leftPupil.classList.add('pupil');
        const rightPupil = document.createElement('div');
        rightPupil.classList.add('pupil');

        leftEye.appendChild(leftPupil);
        rightEye.appendChild(rightPupil);

        // mulut
        const mouth = document.createElement('div');
        mouth.classList.add('mouth');

        doodle.appendChild(leftEye);
        doodle.appendChild(rightEye);
        doodle.appendChild(mouth);

        // animasi berkedip
        setInterval(() => {
            doodle.querySelectorAll('.eye').forEach(eye => {
                eye.style.animation = 'blink 4s ease-in-out';
                setTimeout(() => eye.style.animation = '', 4000);
            });
        }, 4000);

        // animasi melirik
        setInterval(() => {
            const direction = Math.random() > 0.5 ? 1 : -1;
            doodle.querySelectorAll('.pupil').forEach(p => {
                p.style.transform = `translateX(${direction * 2}px)`;
            });
        }, 2000);

        // ganti ekspresi acak tiap 3 detik
        setInterval(() => {
            const newMood = moods[Math.floor(Math.random() * moods.length)];
            Object.assign(mouth.style, {
                width: `${newMood.width}px`,
                height: `${newMood.height}px`,
                borderRadius: newMood.borderRadius
            });
        }, 3000);
    });
});
</script>
