// Função para alternar entre expandir e recolher a descrição do projeto
function toggleDescription(projectId, button) {
    var description = document.getElementById(projectId);
    
    // Verifica se a descrição está visível ou não
    if (description.style.display === "none" || description.style.display === "") {
        description.style.display = "block";  // Exibe a descrição
        button.innerText = "Ver menos";  // Muda o texto do botão
    } else {
        description.style.display = "none";  // Oculta a descrição
        button.innerText = "Ver mais";  // Restaura o texto do botão
    }
}

// Fechar menu mobile após clicar no item
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");
    const menuItems = document.querySelectorAll(".menu-item");

    // Verifica se os elementos existem antes de adicionar o evento
    if (menuToggle && menu) {
        // Alternar visibilidade do menu mobile
        menuToggle.addEventListener("click", function () {
            menu.classList.toggle("hidden");
        });
    }

    // Verifica se os itens do menu existem antes de adicionar os eventos
    if (menuItems.length > 0) {
        // Fecha o menu ao clicar em um item
        menuItems.forEach(item => {
            item.addEventListener("click", function () {
                if (menu) {
                    menu.classList.add("hidden");
                }
            });
        });
    }
});

// Funções para abrir e fechar modais
function openModal(language) {
    const modal = document.getElementById(`modal-${language}`);
    if (modal) {
        modal.classList.remove('hidden');
        
        // Definir o foco no botão de fechar
        const closeButton = modal.querySelector('.close-modal');
        if (closeButton) {
            closeButton.focus();
        }
    }
}

// Fechar o modal ao clicar no botão de fechar
document.addEventListener('DOMContentLoaded', () => {
    const closeModalButtons = document.querySelectorAll('.close-modal');
    if (closeModalButtons.length > 0) {
        closeModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modal = button.closest('.modal');
                if (modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    }

    // Fechar o modal clicando fora do conteúdo
    const modals = document.querySelectorAll('.modal');
    if (modals.length > 0) {
        modals.forEach(modal => {
            modal.addEventListener('click', (event) => {
                if (event.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    }

    // Fechar o modal ao pressionar a tecla ESC
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            const openModal = document.querySelector('.modal:not(.hidden)');
            if (openModal) {
                openModal.classList.add('hidden');
            }
        }
    });

    // Inicializar animações AOS
    AOS.init();
});

// Selecionar o botão "Clique Aqui" dentro do modal (Exemplo do Bootstrap)
const bootstrapButton = document.getElementById('bootstrap-btn');

// Verificar se o botão existe antes de adicionar o evento
if (bootstrapButton) {
    bootstrapButton.addEventListener('click', function () {

        // Exibir um alerta simples ou mensagem de interação
        alert('Você clicou no botão do Bootstrap!');

        // Mudando o fundo do modal para um tom mais escuro
        const modal = bootstrapButton.closest('.modal');
        if (modal) {
            modal.classList.add('bg-gray-800');
        }

        // Adicionando uma animação no botão para aumentar a escala
        bootstrapButton.classList.add('transform', 'scale-110', 'transition-transform', 'duration-200');

        // Após a animação, voltar ao tamanho normal
        setTimeout(() => {
            bootstrapButton.classList.remove('transform', 'scale-110');
        }, 200);

        // Adicionar uma mensagem de confirmação dentro do modal
        const modalContent = modal.querySelector('.modal-content');
        if (modalContent) {
            const confirmationMessage = document.createElement('p');
            confirmationMessage.textContent = 'Você interagiu com o botão do Bootstrap com sucesso!';
            confirmationMessage.classList.add('mt-4', 'text-center', 'text-teal-300', 'text-lg');
            modalContent.appendChild(confirmationMessage);

            // Remover a mensagem após 2 segundos
            setTimeout(() => {
                modalContent.removeChild(confirmationMessage);
            }, 2000);  // Tempo em milissegundos (5000ms = 5 segundos)
        }

        // adicionar mais interações aqui, como mudanças no layout ou animações adicionais.
    });
}

// Selecionar o botão de redirecionamento
const redirectButton = document.getElementById('redirect-btn');

// Verificar se o botão existe antes de adicionar o evento
if (redirectButton) {
    // Adicionar evento de clique ao botão
    redirectButton.addEventListener('click', function () {
        // Adicionar classe para a animação
        redirectButton.classList.add('clicked');

        // Definir um tempo para o redirecionamento após a animação
        setTimeout(function () {
            // Redirecionar para a página 'index.php'
            window.location.href = 'index.php';
        }, 300);  // Atraso de 300ms para permitir a animação
    });
}
