// Função para buscar repositórios do GitHub usando a API pública
async function fetchGitHubRepos() {
    const username = '[SEU_USERNAME]'; // Substitua pelo seu nome de usuário do GitHub
    const url = `https://api.github.com/users/${VandinDev221}/repos`;

    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error('Erro ao buscar repositórios');
        }
        const repos = await response.json();

        // Chama a função para exibir os repositórios
        displayRepos(repos);
    } catch (error) {
        console.error(error);
        alert('Erro ao carregar os repositórios');
    }
}

// Função para exibir os repositórios na página
function displayRepos(repos) {
    const projectList = document.getElementById('project-list');
    projectList.innerHTML = ''; // Limpa a lista existente

    repos.forEach(repo => {
        const projectItem = document.createElement('div');
        projectItem.classList.add('project-item');

        projectItem.innerHTML = `
            <h3><a href="${repo.html_url}" target="_blank">${repo.name}</a></h3>
            <p>${repo.description || 'Sem descrição'}</p>
            <span>⭐ ${repo.stargazers_count} Stars</span>
        `;
        projectList.appendChild(projectItem);
    });
}

// Chama a função para buscar e exibir os repositórios assim que a página carregar
document.addEventListener('DOMContentLoaded', fetchGitHubRepos);
