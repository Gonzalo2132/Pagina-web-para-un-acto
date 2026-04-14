document.addEventListener('DOMContentLoaded', () => {
    function crearFooterCreditos() {
        if (document.querySelector('.footer-bar')) {
            return;
        }

        const footerBar = document.createElement('div');
        footerBar.className = 'footer-bar';
        footerBar.innerHTML = `
            <div class="container">
                <p>Creado por los estudiantes de 3er año de análisis y desarrollo de software</p>
            </div>
        `;

        document.body.appendChild(footerBar);
    }

    crearFooterCreditos();
});

