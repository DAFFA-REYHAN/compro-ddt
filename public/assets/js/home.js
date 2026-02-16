AOS.init({
    duration: 800,
    once: true,
    offset: 100
});

window.addEventListener('load', function () {
    const loader = document.getElementById('page-loader');
    if (!loader) return;

    setTimeout(() => {
        loader.classList.add('hidden');
    }, 1200);
});
