document.addEventListener('DOMContentLoaded', () => {
    // Referencias a elementos del DOM
    const btnProgramaCompleto = document.getElementById('btnProgramaCompleto');
    const programaModal = document.getElementById('programaModal');
    const cerrarPrograma = document.querySelector('#programaModal .cerrar');
    const modalBody = document.querySelector('.modal-body'); // Donde cargaremos los datos

    // --- SIMULACIÓN DE BASE DE DATOS ---
    // Esta función imita un fetch() a un archivo PHP/MySQL
    const simularFetchBaseDatos = () => {
        return new Promise((resolve) => {
            console.log("Consultando base de datos...");
            setTimeout(() => {
                resolve({
                    id: 1,
                    titulo: "Programa de Desarrollo Web",
                    modulos: ["HTML & CSS", "JavaScript ES6", "PHP & MySQL", "React JS"],
                    duracion: "4 meses"
                });
            }, 1000); // Simula 1 segundo de espera del servidor
        });
    };

    // --- EVENTOS ---

    if (btnProgramaCompleto) {
        btnProgramaCompleto.onclick = async function() {
            // 1. Mostrar estado de carga (opcional pero profesional)
            if (modalBody) modalBody.innerHTML = "Cargando programa...";
            programaModal.style.display = 'block';

            try {
                // 2. Simular la llamada a la DB
                const datos = await simularFetchBaseDatos();

                // 3. Insertar los datos en el modal
                modalBody.innerHTML = `
                    <h3>${datos.titulo}</h3>
                    <p><strong>Duración:</strong> ${datos.duracion}</p>
                    <ul>
                        ${datos.modulos.map(m => `<li>${m}</li>`).join('')}
                    </ul>
                `;
                console.log('Datos cargados desde la "DB"');
            } catch (error) {
                console.error("Error al obtener datos:", error);
                modalBody.innerHTML = "Error al conectar con el servidor.";
            }
        };
    }

    // Cerrar con la X
    if (cerrarPrograma) {
        cerrarPrograma.onclick = function() {
            programaModal.style.display = 'none';
        };
    }

    // Cerrar al hacer clic fuera del contenido
    window.onclick = function(event) {
        if (event.target === programaModal) {
            programaModal.style.display = 'none';
        }
    };
});