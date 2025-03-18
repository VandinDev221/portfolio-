<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio de Vanderson Andrade</title>

    <!-- Adicionar o Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Adicionar o AOS (Animações) via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Adicionar o JavaScript para animações -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="bg-gray-900 text-gray-100 flex flex-col min-h-screen">
    <!-- Header -->
    <header>
        <!-- Incluir o cabeçalho dinâmico -->
        <?php include 'templates/header.html'; ?>
    </header>
<main class="flex-grow">
    <!-- Seção Sobre -->
    <section id="sobre" class="bg-gradient-to-r from-gray-800 via-gray-900 to-blue-800 py-16" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold text-white mb-6">Sobre Mim</h2>
            
            <!-- Foto de Perfil -->
            <div class="flex justify-center mb-6">
                <img src="assets/images/perfil.jpg" alt="Foto de Perfil" class="rounded-full w-64 h-64 object-cover shadow-lg border-4 border-indigo-600">
            </div>
            <div class="max-w-6xl mx-auto p-2">
    <p class="text-lg text-gray-300 mb-4 text-justify">
        Técnico em Desenvolvimento de Sistemas pelo Instituto Federal do Maranhão e atualmente curso Tecnólogo em Desenvolvimento Web pela Anhanguera. Tenho experiência sólida em HTML, CSS, JavaScript, PHP e MySQL, além de um grande interesse em criar soluções web inovadoras e interativas.
    </p>
    <p class="text-lg text-gray-300 mb-4 text-justify">
        Atualmente, mantenho um projeto web em funcionamento, onde aplico na prática os conhecimentos adquiridos, aprimorando minhas habilidades técnicas e explorando novas tecnologias. Meu foco está no desenvolvimento de interfaces responsivas, intuitivas e de alto desempenho, buscando sempre a melhor experiência para o usuário. Além disso, tenho interesse por frameworks modernos como React e Vue.js, bem como no aprimoramento das boas práticas de desenvolvimento back-end com Node.js e PHP.
    </p>
    <p class="text-lg text-gray-300 mb-4 text-justify">
        Sou movido pela curiosidade e pelo desejo de aprendizado contínuo, acompanhando tendências do setor para garantir que minhas soluções sejam eficientes, escaláveis e alinhadas com as melhores práticas do mercado. Acredito na importância da colaboração e do trabalho em equipe, e estou sempre aberto a desafios que me permitam expandir meu conhecimento e impactar positivamente projetos e negócios.
    </p>
    <p class="text-lg text-gray-300 mb-4 text-justify">
        Atualmente, busco oportunidades de trabalho ou projetos freelance para aplicar minhas habilidades em desenvolvimento web, contribuir com soluções inovadoras e evoluir profissionalmente. Meu objetivo é não apenas desenvolver aplicações funcionais, mas também criar experiências digitais que facilitem o dia a dia das pessoas e agreguem valor aos negócios.
    </p>
    <p class="text-lg text-gray-300 text-justify">
        Se você procura um profissional comprometido, criativo e apaixonado por tecnologia, estou pronto para agregar ao seu projeto!
    </p>
</div>
    </section>

<!-- Seção Home resultados-->
<section id="home" class="bg-gradient-to-r from-gray-800 via-gray-900 to-blue-800 py-16" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-semibold text-white mb-6">Meus Resultados</h2>
        <p class="text-lg text-gray-300 mb-6">Aqui estão alguns resultados e gráficos que ilustram meu trabalho recente, com destaque para minhas conquistas em projetos de desenvolvimento web e dados relacionados ao meu portfólio.</p>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Resultado 1 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-2xl hover:scale-105 transition-transform duration-300">
                <h3 class="text-xl font-semibold text-white mb-4">Desempenho do Projeto Vida Saudável</h3>
                <img src="assets/images/resultados1.jpg" alt="Gráfico do desempenho do projeto Vida Saudável" class="w-full h-auto rounded-lg shadow-md transition-all duration-300 hover:scale-105">
                <p class="mt-4 text-gray-300">Visualização de desempenho de usuários na plataforma Vida Saudável. A análise de dados mostra um aumento no engajamento e cumprimento de metas.</p>
            </div>

            <!-- Resultado 2 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-2xl hover:scale-105 transition-transform duration-300">
                <h3 class="text-xl font-semibold text-white mb-4">Progresso no Projeto Web</h3>
                <img src="assets/images/resultados2.jpg" alt="Progresso no projeto web" class="w-full h-auto rounded-lg shadow-md transition-all duration-300 hover:scale-105">
                <p class="mt-4 text-gray-300">Aqui está um gráfico de progresso de desenvolvimento de uma funcionalidade chave no meu projeto de bem-estar, destacando a melhoria no tempo de resposta do sistema.</p>
            </div>

            <!-- Resultado 3 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-2xl hover:scale-105 transition-transform duration-300">
                <h3 class="text-xl font-semibold text-white mb-4">Desempenho de Usuários no Sistema</h3>
                <img src="assets/images/resultados3.jpg" alt="Gráfico de desempenho de usuários" class="w-full h-auto rounded-lg shadow-md transition-all duration-300 hover:scale-105">
                <p class="mt-4 text-gray-300">Gráfico mostrando o desempenho dos usuários ao longo do tempo, destacando o aumento na quantidade de registros e engajamento no sistema.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Seção Home -->
    <section class="bg-gradient-to-r from-gray-800 via-gray-900 to-blue-800 py-16 text-center" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-white">Bem-vindo ao meu portfólio!</h1>
            <p class="mt-4 text-xl text-gray-300">Sou estudante de Tecnólogo em Desenvolvimento Web e estou sempre em busca de aprender novas tecnologias. Confira meus projetos, habilidades e entre em contato para oportunidades de estágio ou freelance.</p>
        </div>
    </section>

    <!-- Seção de Projetos -->
    <section id="projetos" class="py-16 bg-gradient-to-b from-gray-900 to-gray-800" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold text-white mb-6">Meus Projetos</h2>
            <div id="project-list" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Projeto Vida Saudável -->
                <div class="project-card bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border-t-4 border-green-600">
                    <h3 class="text-xl font-semibold text-white">Vida Saudável</h3>
                    <div id="desc1" class="mt-4 text-gray-300" style="display: none;">
                        O Vida Saudável é uma plataforma interativa para monitoramento de bem-estar, incluindo funcionalidades como contagem de tempo de treino e estudo, monitoramento de caminhadas, controle de metas nutricionais, análise do sono e jogos interativos. A plataforma também conta com integração PWA (Progressive Web App), garantindo uma experiência fluida em desktop e dispositivos móveis.
                    </div>
                    <button class="mt-4 px-6 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition" onclick="toggleDescription('desc1', this)">Ver mais</button>
                    <a href="https://vida-saudavel01.fwh.is/" target="_blank" class="mt-4 px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">Acessar o Projeto</a>
                </div>
                <!-- Projeto 2 -->
                <div class="project-card bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border-t-4 border-yellow-500">
                    <h3 class="text-xl font-semibold text-white">Projeto 2</h3>
                    <p class="mt-4 text-gray-300">Descrição do projeto 2...</p>
                    <button class="mt-4 px-6 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition" onclick="toggleDescription('desc2')">Ver mais</button>
                    <div id="desc2" class="mt-4 text-gray-300" style="display: none;">Detalhes sobre o projeto 2...</div>
                </div>
                <!-- Projeto 3 -->
                <div class="project-card bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border-t-4 border-indigo-500">
                    <h3 class="text-xl font-semibold text-white">Projeto 3</h3>
                    <p class="mt-4 text-gray-300">Descrição do projeto 3...</p>
                    <button class="mt-4 px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition" onclick="toggleDescription('desc3')">Ver mais</button>
                    <div id="desc3" class="mt-4 text-gray-300" style="display: none;">Detalhes sobre o projeto 3...</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Blog -->
    <section id="blog" class="py-16 bg-gradient-to-b from-gray-800 via-gray-900 to-gray-800" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold text-white mb-6">Blog</h2>
            <p class="text-lg text-gray-300 mb-4">Compartilho aqui minhas experiências, tutoriais, dicas e reflexões sobre desenvolvimento web e tecnologia.</p>

            <div class="post">
                <h3><a href="templates/post1.html" class="text-xl font-semibold text-blue-600">Como Começar no Desenvolvimento Web</a></h3>
                <p><strong>Data:</strong> 9 de março de 2025</p>
                <p>Quer saber como dar os primeiros passos no desenvolvimento web? Neste post, explico o que você precisa saber para começar a construir sites do zero...</p>
                <a href="templates/post1.html" class="text-blue-600">Ler mais &rarr;</a>
            </div>

            <div class="post mt-6">
                <h3><a href="templates/post2.html" class="text-xl font-semibold text-blue-600">Entendendo o JavaScript Assíncrono</a></h3>
                <p><strong>Data:</strong> 5 de março de 2025</p>
                <p>O JavaScript assíncrono pode parecer complicado no começo, mas é uma das partes mais poderosas da linguagem. Veja como ele funciona e como usá-lo...</p>
                <a href="templates/post2.html" class="text-blue-600">Ler mais &rarr;</a>
            </div>

            <div class="post mt-6">
                <h3><a href="templates/post3.html" class="text-xl font-semibold text-blue-600">Melhores Práticas em Desenvolvimento Front-end</a></h3>
                <p><strong>Data:</strong> 1 de março de 2025</p>
                <p>Descubra as melhores práticas para criar sites rápidos e responsivos com HTML, CSS e JavaScript. Garanta uma excelente experiência de usuário!</p>
                <a href="templates/post3.html" class="text-blue-600">Ler mais &rarr;</a>
            </div>
        </div>
    </section>

    <!-- Seção de Contato -->
    <section id="contato" class="py-16 bg-gradient-to-b from-gray-800 via-gray-900 to-gray-800" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold text-white mb-6">Contato</h2>
            <p class="text-lg text-gray-300 mb-4">Se você tem uma oportunidade de estágio ou freelance, ou apenas quer bater um papo sobre desenvolvimento web, entre em contato comigo pelo WhatsApp!</p>
            <a href="https://wa.me/5598985894988?text=Vim%20através%20do%20seu%20site%20e%20gostaria%20de%20saber%20mais!" 
   target="_blank" 
   class="w-full py-4 bg-green-600 text-white rounded-lg hover:bg-green-700 transition text-center inline-block">
   Fale comigo no WhatsApp
</a>

                <i class="fab fa-whatsapp"></i> Enviar mensagem no WhatsApp
            </a>
        </div>
    </section>
</main>
    <!-- Footer -->
    <!-- Incluir o rodapé dinâmico -->
    <?php include 'templates/footer.html'; ?>

    <!-- Script personalizado -->
    <script src="js/main.js"></script>
    <script>
        // Inicializar AOS (para animações)
        AOS.init();
    </script>
</body>
</html>
