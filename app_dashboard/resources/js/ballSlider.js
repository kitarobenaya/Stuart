document.addEventListener("DOMContentLoaded", () => {
    const balls = Array.from(document.querySelectorAll(".ball"));

    const state = balls.map((ball) => ({
        element: ball,
        isUnlocked: false,
    }));

    let activeBall = null;
    let sliderRect = null;
    let ballWidth = 0;
    let isDragging = false;
    let rafId = null;

    function updatePosition(clientX) {
        let x = clientX - sliderRect.left;
        x = Math.max(0, Math.min(x, sliderRect.width - ballWidth));

        activeBall.style.transform = `translateX(${x}px)`;

        checkUnlock(x);
    }

    function checkUnlock(x) {
        const current = state.find((b) => b.element === activeBall);
        if (!current || current.isUnlocked) return; 

        const ballRight = x + ballWidth;

        // toleransi 1px biar aman di device beda DPI
        if (ballRight >= sliderRect.width - 1) {
            current.isUnlocked = true;
            isDragging = false;

            onUnlock(activeBall);
        }
    }

    function onUnlock(ball) {

        // optional: snap ke ujung biar visually clean
        ball.style.transform = `translateX(${sliderRect.width - ballWidth}px)`;
        window.location.href = `/study-list/${ball.nextElementSibling.value}`;
    }

    function handlePointerMove(e) {
        if (!isDragging || !activeBall) return;
        if (rafId) return;

        rafId = requestAnimationFrame(() => {
            updatePosition(e.clientX);
            rafId = null;
        });
    }

    balls.forEach((ball) => {
        ball.addEventListener("pointerdown", (e) => {
            const current = state.find((b) => b.element === ball);
            if (current?.isUnlocked) return;

            activeBall = ball;
            isDragging = true;

            sliderRect = ball.parentElement.getBoundingClientRect();
            ballWidth = ball.getBoundingClientRect().width;

            ball.setPointerCapture(e.pointerId);
        });
    });

    window.addEventListener("pointermove", handlePointerMove);

    window.addEventListener("pointerup", (e) => {
        if (!activeBall) return;

        const current = state.find((b) => b.element === activeBall);

        if (!current?.isUnlocked) {
            // balik ke awal kalau belum unlock
            activeBall.style.transform = "translateX(0px)";
        }

        if (activeBall.hasPointerCapture(e.pointerId)) {
            activeBall.releasePointerCapture(e.pointerId);
        }

        isDragging = false;
    });
});