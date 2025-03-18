// Configuração do Intersection Observer para animações
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        // Se o item estiver visível na tela
        if (entry.isIntersecting) {
            // Adiciona a classe de animação
            entry.target.classList.add('animate');
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.5 // Define que o elemento precisa estar 50% visível para a animação acontecer
});

// Seleciona as seções que serão animadas
const sections = document.querySelectorAll('#sobre, #projetos');

// Aplica o observer a essas seções
sections.forEach(section => {
    observer.observe(section);
});

// animacoes html abertura 

document.addEventListener('DOMContentLoaded', () => {
    // Selecionar todos os itens de tecnologia
    const techItems = document.querySelectorAll('.tech-item');

    // Adicionar animação de entrada para cada item
    techItems.forEach((item, index) => {
        // Definir delay de animação para criar um efeito gradual
        item.style.animationDelay = `${index * 0.2}s`;
    });

    // Animação de hover para cada item
    techItems.forEach(item => {
        item.addEventListener('mouseover', () => {
            // Adicionar efeito de animação ao passar o mouse
            item.style.transform = 'scale(1.2)';
        });

        item.addEventListener('mouseout', () => {
            // Retirar o efeito de animação ao remover o mouse
            item.style.transform = 'scale(1)';
        });
    });
});

