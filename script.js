document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menuBtn');
    const fabMenu = document.getElementById('fabMenu');

    menuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        fabMenu.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (!fabMenu.contains(e.target) && !menuBtn.contains(e.target)) {
            fabMenu.classList.remove('active');
        }
    });

    const menuLinks = fabMenu.querySelectorAll('a');
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            fabMenu.classList.remove('active');
        });
    });

    const graduatesData = [
        { id: 'group-gastronomia', count: 5 },
        { id: 'group-agroecologia', count: 10 },
        { id: 'group-enologia', count: 12 },
        { id: 'group-software', count: 15 },
        { id: 'group-enfermeria', count: 23 }
    ];

    const firstNames = ["Ana", "Juan", "María", "Carlos", "Lucía", "Diego", "Elena", "Mateo", "Sofía", "Javier", "Valentina", "Nicolás", "Paula", "Andrés", "Camila", "Ricardo"];
    const lastNames = ["García", "Rodríguez", "Pérez", "Fernández", "López", "Martínez", "Sánchez", "González", "Gómez", "Díaz", "Álvarez", "Romero", "Sosa", "Ruiz"];

    function getRandomName() {
        const firstName = firstNames[Math.floor(Math.random() * firstNames.length)];
        const lastName = lastNames[Math.floor(Math.random() * lastNames.length)];
        const secondLastName = lastNames[Math.floor(Math.random() * lastNames.length)];
        return `${firstName} ${lastName} ${secondLastName}`;
    }

    graduatesData.forEach(group => {
        const container = document.getElementById(group.id);
        if (container) {
            let namesList = [];
            for (let i = 0; i < group.count; i++) {
                namesList.push(getRandomName());
            }
            
            namesList.sort((a, b) => a.localeCompare(b));

            namesList.forEach(name => {
                const card = document.createElement('div');
                card.className = 'graduate-card';
                card.innerHTML = `<p class="grad-name-cell">${name}</p>`;
                container.appendChild(card);
            });
        }
    });

    const revealElements = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    revealElements.forEach(el => revealObserver.observe(el));
});

