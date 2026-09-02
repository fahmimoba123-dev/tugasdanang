document.addEventListener('DOMContentLoaded', () => {
    // 1. Scroll Animations using Intersection Observer
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Animate only once
            }
        });
    }, observerOptions);

    // Observe all cards and specific elements
    document.querySelectorAll('.glass-card, .page-header').forEach(el => {
        el.classList.add('fade-up-element');
        observer.observe(el);
    });

    // 2. Gamelan Audio Player Logic
    const playButtons = document.querySelectorAll('.play-audio-btn');
    playButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const instrument = this.getAttribute('data-instrument');
            
            // In a real app, you would play an actual audio file here
            // For now, we simulate the interaction visually
            
            // Toggle active state
            const isPlaying = this.classList.contains('playing');
            
            // Stop all others
            playButtons.forEach(b => {
                b.classList.remove('playing');
                b.innerHTML = '▶ Dengarkan Suara';
            });

            if (!isPlaying) {
                this.classList.add('playing');
                this.innerHTML = '⏸ Jeda Suara';
                // new Audio('/path/to/'+instrument+'.mp3').play();
            }
        });
    });
});

