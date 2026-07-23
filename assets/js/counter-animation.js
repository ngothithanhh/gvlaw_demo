document.addEventListener("DOMContentLoaded", () => {

    const section = document.querySelector(".banner-intro");
    const counters = document.querySelectorAll(".counter");

    function startCounter() {

        counters.forEach(counter => {

            const target = Number(counter.dataset.target);
            const duration = 2000;
            const start = 0;
            const startTime = performance.now();

            function update(currentTime) {

                const elapsed = currentTime - startTime;

                const progress = Math.min(elapsed / duration, 1);

                const value = Math.floor(progress * (target - start) + start);

                counter.textContent = value.toLocaleString('en-US');

                if (progress < 1) {
                    requestAnimationFrame(update);
                } else {
                    counter.textContent = target.toLocaleString('en-US');
                }

            }

            requestAnimationFrame(update);

        });

    }

    const observer = new IntersectionObserver((entries, observer) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                startCounter();

                observer.unobserve(entry.target);

            }

        });

    }, {
        threshold: 0.4
    });

    observer.observe(section);

});