<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-language" content="pt-BR">
    <meta name="robots" content="index, follow">
    <title>EEEP Salaberga Torquato Gomes de Matos | Hub Educacional</title>
    <meta name="description"
        content="EEEP Salaberga Torquato Gomes de Matos: Hub Educacional em Maranguape.">
    <meta name="author" content="EEEP Salaberga Torquato Gomes de Matos">
    <meta name="keywords"
        content="educação profissional, ensino médio técnico, [Maranguape] educação, cursos técnicos, EEEP Salaberga Torquato">
    <meta name="keywords" content="EEEP Salaberga, Salaberga, Escola Salaberga, Salaberga Torquato">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://salaberga.com/">
    <meta property="og:title" content="EEEP Salaberga Torquato Gomes de Matos | Hub Educacional">
    <meta property="og:description"
        content="Educação profissional de qualidade em Maranguape. Preparando alunos para um futuro brilhante com ensino médio integrado ao técnico.">
    <meta property="og:image" content="https://www.seusite.com.br/imagem-da-escola.jpg">
    <meta name="geo.region" content="BR-Ceará">
    <meta name="geo.placename" content="Maranguape">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, maximum-scale = 1, user-scalable = no ">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../main/assets/js/timeline.js"></script>
    <script src="../main/assets/js/parallax.js"></script>
    <script src="../main/assets/js/movelbtn.js"></script>
    <script src="../main/assets/js/timeline-function.js"></script>
    <script src="../main/assets/js/tecsSEO.json"></script>
    <script src="../main/assets/js/main.js"></script>
    <link rel="stylesheet" href="../main/assets/css/timeline.css">
    <link rel="stylesheet" href="../main/assets/css/acessibility.css">
    <link rel="stylesheet" href="../main/assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="shortcut icon" href="../main/assets/img/Design sem nome.svg" type="image/x-icon">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'ceara-green': '#008C45',
                        'ceara-orange': '#FFA500',
                        'ceara-white': '#FFFFFF',
                        primary: '#4CAF50',
                        secondary: '#FFB74D',
                    }
                }
            }
        }
    </script>
    <style>
        .gallery-img {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-img:hover {
            transform: scale(1.05);
        }

        #imageModal {
            transition: opacity 0.3s ease;
        }

        #modalImage {
            transition: opacity 0.3s ease;
        }

        #prevButton,
        #nextButton {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 50%;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        section {
            opacity: 0;
        }

        .hover-scale {
            transition: transform 0.3s ease-in-out;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }


        .section.lb.page-section {
            background-color: #f8f9fa;
            color: #333;
            padding: 80px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h3 {
            color: #007a33;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-title h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50%;
            height: 3px;
            background-color: #ffa500;
        }

        .section-title p.lead {
            color: #555;
            font-size: 20px;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
        }

     

        /* Responsive Adjustments */
        @media (max-width: 1200px) {
            .container {
                max-width: 960px;
            }
        }

        @media (max-width: 992px) {
            .container {
                max-width: 720px;
            }

            .section-title h3 {
                font-size: 36px;
            }

            .section-title p.lead {
                font-size: 18px;
            }
        }

        @media (max-width: 768px) {
            .container {
                max-width: 540px;
            }

            .section-title h3 {
                font-size: 32px;
            }

            .section-title p.lead {
                font-size: 16px;
            }
        }

        @media (max-width: 576px) {
            .container {
                max-width: 100%;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadeIn {
            animation: fadeIn 0.5s ease-out;
        }

        body {
            min-height: 100vh;
            overflow-x: hidden;
        }

        .content-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            will-change: transform;
        }
    </style>

<body class="select-none">
    <script type="text/javascript">
            (function (d, t) {
                var g = d.createElement(t),
                    s = d.getElementsByTagName(t)[0];
                g.src = "https://cdn.pushalert.co/integrate_3e3979b887cb8c83ce2f425dde988024.js";
                s.parentNode.insertBefore(g, s);
            }(document, "script"));
    </script>
    <!-- End PushAlert -->
    </head>
    <!--- Adicione esse CSS no seu arquivo de estilos --->
<style>
        [x-cloak] { display: none !important; }
        .header-active {
            color: #FFA500 !important; /* Cor de destaque do header */
        }
    </style>
</head>
<body class="select-none">
    <script type="text/javascript">
        (function (d, t) {
            var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
            g.src = "https://cdn.pushalert.co/integrate_3e3979b887cb8c83ce2f425dde988024.js";
            s.parentNode.insertBefore(g, s);
        }(document, "script"));
    </script>
    <!-- End PushAlert -->
    <header x-data="{ mobileMenuOpen: false, init() { this.$watch('mobileMenuOpen', value => { if (value) { document.body.classList.add('overflow-hidden'); } else { document.body.classList.remove('overflow-hidden'); } }); window.addEventListener('resize', () => { if (window.innerWidth >= 1024) { this.mobileMenuOpen = false; } }); } }" class="bg-ceara-green text-ceara-white sticky top-0 z-50 shadow-md">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between flex-wrap py-4">
            <!-- Accessibility Controls -->
            <div class="flex items-center space-x-2">
                <span class="text-sm"><b>Acessibilidade</b></span>
                <button class="text-sm hover:text-ceara-orange transition duration-300 px-1" aria-label="Diminuir tamanho do texto">
                    <i class="fa-solid fa-a"></i><b>-</b>
                </button>
                <button class="text-sm hover:text-ceara-orange transition duration-300 px-1" aria-label="Tamanho padrão do texto">
                    <i class="fa-solid fa-a"></i>
                </button>
                <button class="text-sm hover:text-ceara-orange transition duration-300 px-1" aria-label="Aumentar tamanho do texto">
                    <i class="fa-solid fa-a"></i><b>+</b>
                </button>
                <button id="screenReaderBtn" class="text-sm hover:text-ceara-orange transition duration-300 px-1 flex items-center" aria-label="Ativar narração de tela">
                    <i class="fa-solid fa-ear-listen mr-1"></i>
                </button>
                <div class="theme-toggle-container">
                    <button class="theme-toggle-btn hover:text-ceara-orange transition duration-300 px-1" aria-label="Opções de visualização" aria-expanded="false">
                        <i class="fa-solid fa-circle-half-stroke" style="color: white;"></i>
                    </button>
                   <div class="theme-options" style="color: #000000;">
    <!-- <button class="theme-option" data-theme="dark" aria-label="Alternar modo escuro">Modo Escuro</button> -->
                    <button class="theme-option" data-theme="monochrome" aria-label="Ativar monocromático">Monocromático</button>
                    <button class="theme-option" data-theme="inverted-grayscale" aria-label="Ativar escala de cinza invertida">Escala de cinza invertida</button>
                    <button class="theme-option" data-theme="inverted-color" aria-label="Ativar cor invertida">Cor invertida</button>
                    <button class="theme-option" data-theme="original" aria-label="Restaurar cores originais">Cores originais</button>
                </div>
                </div>
                <!-- <button id="vlibrasButton" class="hover:text-ceara-orange transition duration-300 px-1" aria-label="VLibras">
                    <img src="../main/assets/img/libras.svg" alt="VLibras" style="border-radius: 14%; width: 24px; height: auto;" class="zoom">
                </button> -->
            </div>
            <!-- Main Navigation -->
            <div class="flex items-center">
                <div class="hidden lg:flex space-x-4">
                    <a href="#home" class="text-ceara-white hover:text-ceara-orange transition duration-300 header-link">
                        <i class="fas fa-home mr-1"></i> Início
                    </a>
                    <a href="#sobre" class="text-ceara-white hover:text-ceara-orange transition duration-300 header-link">
                        <i class="fas fa-info-circle mr-1"></i> Sobre
                    </a>
                    <a href="#cursos" class="text-ceara-white hover:text-ceara-orange transition duration-300 header-link">
                        <i class="fas fa-book mr-1"></i> Cursos
                    </a>
                    <a href="#galeria" class="text-ceara-white hover:text-ceara-orange transition duration-300 header-link">
                        <i class="fas fa-newspaper mr-1"></i> Galeria
                    </a>
                    <a href="#parceiros" class="text-ceara-white hover:text-ceara-orange transition duration-300 header-link">
                        <i class="fas fa-images mr-1"></i> Parceiros
                    </a>
                </div>
                <!-- Mobile Menu Button -->
                <div class="block lg:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="flex items-center px-3 py-2 border rounded text-ceara-orange border-ceara-orange hover:text-ceara-white hover:border-ceara-white transition duration-300" aria-label="Toggle menu" :aria-expanded="mobileMenuOpen">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-cloak @click.away="mobileMenuOpen = false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-0 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="lg:hidden">
            <div class="py-2 space-y-2">
                <a href="#home" class="block text-ceara-white hover:text-ceara-orange transition duration-300 header-link" @click="mobileMenuOpen = false">
                    <i class="fas fa-home mr-1"></i> Início
                </a>
                <a href="#sobre" class="block text-ceara-white hover:text-ceara-orange transition duration-300 header-link" @click="mobileMenuOpen = false">
                    <i class="fas fa-info-circle mr-1"></i> Sobre
                </a>
                <a href="#cursos" class="block text-ceara-white hover:text-ceara-orange transition duration-300 header-link" @click="mobileMenuOpen = false">
                    <i class="fas fa-book mr-1"></i> Cursos
                </a>
                <a href="#galeria" class="block text-ceara-white hover:text-ceara-orange transition duration-300 header-link" @click="mobileMenuOpen = false">
                    <i class="fas fa-newspaper mr-1"></i> Galeria
                </a>
                <a href="#parceiros" class="block text-ceara-white hover:text-ceara-orange transition duration-300 header-link" @click="mobileMenuOpen = false">
                    <i class="fas fa-images mr-1"></i> Parceiros
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    document.querySelectorAll('.header-link').forEach(link => {
        link.addEventListener('click', function() {
            // Remove a classe de destaque de todos os links
            document.querySelectorAll('.header-link').forEach(l => l.classList.remove('header-active'));
            // Adiciona a classe de destaque ao link clicado
            this.classList.add('header-active');
        });
    });
</script>

    <script>
        // Variáveis globais
        let isReading = false;
        let currentSection = 0;
        const synth = window.speechSynthesis;
        let utterance = null;
        let initialInstructionsGiven = false;

        // Função para iniciar ou parar a narração
        function toggleScreenReader() {
            if (isReading) {
                stopReading();
            } else {
                startReading();
            }
        }

        // Função para iniciar a narração
        function startReading() {
            isReading = true;
            currentSection = 0;
            readNextSection();
            updateButtonState();
            window.addEventListener('scroll', handleScroll);
            document.addEventListener('click', handleElementClick);
            document.addEventListener('focus', handleElementFocus, true);
            announceStatus('Narração ativada');
        }

        // Função para parar a narração
        function stopReading() {
            if (synth.speaking) {
                synth.cancel();
            }
            isReading = false;
            updateButtonState();
            window.removeEventListener('scroll', handleScroll);
            document.removeEventListener('click', handleElementClick);
            document.removeEventListener('focus', handleElementFocus, true);
            announceStatus('Narração desativada');
        }

        // Função para ler a próxima seção
        function readNextSection() {
            const sections = document.querySelectorAll('section, article, div.section');
            if (currentSection < sections.length) {
                const textToRead = sections[currentSection].innerText;
                speakText(textToRead);
            } else {
                stopReading();
            }
        }

        // Função para lidar com o evento de rolagem
        function handleScroll() {
            if (!isReading) return;

            const sections = document.querySelectorAll('section, article, div.section');
            const scrollPosition = window.scrollY + window.innerHeight / 2;

            for (let i = 0; i < sections.length; i++) {
                const section = sections[i];
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    if (i !== currentSection) {
                        currentSection = i;
                        if (synth.speaking) {
                            synth.cancel();
                        }
                        readNextSection();
                    }
                    break;
                }
            }
        }

        // Função para rolar até a seção atual
        function scrollToSection(sectionIndex) {
            const sections = document.querySelectorAll('section, article, div.section');
            if (sections[sectionIndex]) {
                sections[sectionIndex].scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Função para atualizar o estado visual do botão
        function updateButtonState() {
            const btn = document.getElementById('screenReaderBtn');
            if (isReading) {
                btn.classList.add('text-ceara-orange');
                btn.setAttribute('aria-label', 'Desativar narração de tela');
            } else {
                btn.classList.remove('text-ceara-orange');
                btn.setAttribute('aria-label', 'Ativar narração de tela');
            }
        }

        // Função para anunciar o status da narração
        function announceStatus(message) {
            speakText(message);
        }

        // Função para fornecer instruções iniciais
        function provideInitialInstructions() {
            if (!initialInstructionsGiven) {
                const instructions = "Bem-vindo. Para ativar a narração de tela, pressione a tecla N ou use a tecla Tab para navegar até o botão de ativação e pressione Enter.";
                speakText(instructions);
                initialInstructionsGiven = true;
            }
        }

        // Função para lidar com cliques em elementos
        function handleElementClick(event) {
            if (!isReading) return;

            const element = event.target;
            const textToSpeak = getElementDescription(element);

            if (textToSpeak) {
                speakText(textToSpeak);
            }
        }

        // Função para lidar com foco em elementos
        function handleElementFocus(event) {
            if (!isReading) return;

            const element = event.target;
            const textToSpeak = getElementDescription(element);

            if (textToSpeak) {
                speakText(textToSpeak);
            }
        }

        // Função para obter a descrição de um elemento
        function getElementDescription(element) {
            if (element.tagName === 'IMG') {
                return element.alt || 'Imagem sem descrição';
            } else if (element.tagName === 'A') {
                return `Link: ${element.textContent || element.href}`;
            } else if (element.tagName === 'BUTTON') {
                return `Botão: ${element.textContent || element.value || 'Sem texto'}`;
            } else if (element.tagName === 'INPUT') {
                return `Campo de entrada: ${element.placeholder || element.name || 'Sem descrição'}`;
            } else {
                return element.textContent || 'Elemento sem texto';
            }
        }

        // Função para falar texto
        function speakText(text) {
            if (synth.speaking) {
                synth.cancel();
            }
            utterance = new SpeechSynthesisUtterance(text);

            // Configurar a voz (opcional)
            const voices = synth.getVoices();
            const portugueseVoice = voices.find(voice => voice.lang === 'pt-BR');
            if (portugueseVoice) {
                utterance.voice = portugueseVoice;
            }

            synth.speak(utterance);
        }

        // Adicionar evento de clique ao botão
        const screenReaderBtn = document.getElementById('screenReaderBtn');
        screenReaderBtn.addEventListener('click', toggleScreenReader);

        // Adicionar atalho de teclado (tecla 'N')
        document.addEventListener('keydown', function (event) {
            if (event.key === 'n' || event.key === 'N') {
                toggleScreenReader();
            }
        });

        // Focar o botão automaticamente e fornecer instruções quando a página carregar
        window.addEventListener('load', function () {
            screenReaderBtn.focus();
            provideInitialInstructions();
        });

        // Garantir que as vozes estejam carregadas
        if (speechSynthesis.onvoiceschanged !== undefined) {
            speechSynthesis.onvoiceschanged = function () {
                const voices = synth.getVoices();
                console.log('Vozes disponíveis:', voices);
            };
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetID = this.getAttribute('href');
                const targetElement = document.querySelector(targetID);

                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start' // ajuste o alinhamento se necessário
                    });

                    // Para ajustar a posição, considere o offset
                    window.scrollBy(0, -100); // ajuste conforme necessário
                }
            });
        });
    </script>

    <main>
        <section id="home"
            class="relative bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center fade-in overflow-hidden">
            <video class="absolute top-0 left-0 w-full h-full object-cover z-0" autoplay loop muted playsinline>
                <source src="../main/assets/img/background.mp4" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
            <div class="absolute inset-0 bg-black opacity-70"></div>

            <!-- Logo -->
            <div
                class="absolute top-4 left-4 md:top-8 md:left-8 z-20 w-full md:w-auto flex justify-center md:justify-start">
                <!-- <img src="img\Design sem nome.svg" alt="Logo da EEEP Salaberga Torquato Gomes de Matos" class="h-16 md:h-14"> -->
            </div>

            <div class="container mx-auto px-4 text-center relative z-10 mt-20 md:mt-0">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-white leading-tight">EEEP Salaberga
                    Torquato<br>Gomes de Matos</h1>
                <p class="text-xl md:text-2xl mb-12 text-white">Educação de qualidade para um futuro brilhante</p>
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#cursos"
                        class="bg-ceara-white text-ceara-green hover:bg-ceara-orange hover:text-ceara-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 shadow-lg flex items-center justify-center">
                        <i class="fas fa-graduation-cap mr-2"></i> Conheça nossos cursos
                    </a> <!--
                    <a href="../main/views/autenticação/login.php"
                        class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-ceara-green font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 shadow-lg flex items-center justify-center">
                        <i class="fas fa-user mr-2"></i> Login
                    </a>
                -->
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 text-center pb-8">
                <a href="#sobre" class="text-white hover:text-ceara-orange transition duration-300">
                    <i class="fas fa-chevron-down text-3xl animate-bounce"></i>
                </a>
            </div>
        </section>

        <section class="section lb page-section" id="sobre">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>Nossa Historia</h3>
                      
                    </div>
                </div><!-- end title -->
                <div class="timeline timeline--loaded timeline--horizontal" style="opacity: 1;">
                    <div class="timeline__wrap">
                        <div class="timeline__items"
                            style="width: 1658px; height: 682px; transform: translate3d(0px, 0px, 0px);">
                            <div class="timeline__item timeline__item--top fadeIn"
                                style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div  class="timeline__content img-bg-01 border-2 shadow-md  p-5 rounded-xl  ">
                                            <h2 style="color:#008C45">2009</h2>
                                            <p>A escola Santa Rita se torna a primeira escola profissionalizante do município, agora chamada de EEEP Santa Rita, oferecendo cursos técnicos em Enfermagem, Informática e Meio Ambiente.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--bottom fadeIn"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-02  border-2 shadow-md  p-5 rounded-xl">
                                            <h2 style="color:#008C45">2011</h2>
                                            <p>Formamos as primeiras turmas da nossa escola. Técnicos em Enfermagem, Informática e Meio Ambiente.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--top fadeIn"
                                style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-03  border-2 shadow-md  p-5 rounded-xl">
                                            <h2 style="color:#008C45">2014</h2>
                                            <p>Neste ano deixamos o prédio da Eeep Santa Rita no bairro da Guabiraba para ocupar o prédio atual, passando a se chamar Eeep Salaberga Torquato Gomes de Matos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--bottom fadeIn"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-05  border-2 shadow-md  p-4 rounded-xl">
                                            <h2 style="color:#008C45">2016</h2>
                                            <p>Os alunos José Carlos, Ana Byatriz e Gabriella Vital representaram o Brasil na 13ª Olimpíada Internacional de Geografia (IGEO) em Pequi - China, depois de concorrer com 35.000 inscritos até a final.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--top fadeIn"
                                style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-06  border-2 shadow-md  p-5 rounded-xl">
                                            <h2 style="color:#008C45">2019</h2>
                                            <p>Conquistamos o selo escola sustentável de organização da Secretaria Estadual de Educação com validação da Secretaria Estadual de Meio Ambiente.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                           
                            <div class="timeline__item timeline__item--bottom fadeIn"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-09  border-2 shadow-md  p-5 rounded-xl">
                                            <h2 style="color:#008C45">2021</h2>
                                            <p>Nos colocamos no seleto grupo das 100 melhores escolas públicas do país, ficando em 20º do estado. 77 das 100 melhores foram do nosso estado.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--top fadeIn"
                                style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-11  border-2 shadow-md  p-5 rounded-xl">
                                            <h2 style="color:#008C45">2022</h2>
                                            <p>Os alunos Kaiky Diniz e Leonardo de Sousa conquistaram vaga na final presencial da ONHB em Campinas (Unicamp).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                          
                              
                            <div class="timeline__item timeline__item--bottom fadeIn"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">   
                                        <div class="timeline__content img-bg-14  border-2 shadow-md  p-5 rounded-xl">
                                            <h2 style="color:#008C45">2023</h2>
                                            <p>É ofertado pela primeira vez o curso técnico em Administração.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="timeline__item timeline__item--top fadeIn"
                                style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-16  border-2 shadow-md  p-5 rounded-xl">
                                            <h2 style="color:#008C45">2024</h2>
                                            <p>Representamos o Brasil na primeira Expociência na Costa Rica por meio do projeto das alunas Natassa Uchôa e Gabriele Ferreira. Orientadas pela professora Diva.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="timeline-nav-button timeline-nav-button--prev" disabled=""
                        style="top: 341px;">Previous</button>
                    <button class="timeline-nav-button timeline-nav-button--next" style="top: 341px;">Next</button>
                    <span class="timeline-divider" style="top: 341px;"></span>
                </div>
            </div>
        </section>

        <style>
            .timeline__content h2::after {
                display: none !important;
            }
        </style>

        <section id="cursos" class="bg-gray-100 py-12 fade-in" x-data="{ activeSlide: 0 }">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-8 text-ceara-green">Nossos Cursos</h2>
                <div class="overflow-x-auto">
                    <div class="flex space-x-6 pb-6 carousel"
                        x-init="setInterval(() => { activeSlide = (activeSlide + 1) % 5; document.querySelector('.carousel').scrollLeft += 300; if(activeSlide === 0) { document.querySelector('.carousel').scrollLeft = 0; } }, 5000)">
                        <!-- Enfermagem -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale min-w-[300px] relative group card"
                            :class="{ 'active': activeSlide === 0 }">
                            <img src="../main/assets/img/img-logoscursos/enfermagem.jpg" alt="Curso de Enfermagem"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3
                                    class="font-bold text-xl mb-2 text-ceara-green border-b-2 border-ceara-green text-center">
                                    Enfermagem</h3>
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="content-overlay">
                                        <p class="text-white text-center text-xs"> O Curso Técnico em Enfermagem tem
                                            como objetivo formar profissionais para atuarem no processo de promoção,
                                            recuperação e manutenção da saúde da comunidade sob a supervisão do
                                            enfermeiro, com os objetivos de proporcionar ao aluno o desenvolvimento de
                                            conhecimentos e habilidades para o exercício da profissão, como também
                                            inserir no mercado de trabalho profissionais
                                            qualificados e competentes para atuarem nos diversos campos de prestação de
                                            serviços de técnico em Enfermagem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Informática -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale min-w-[300px] relative group card"
                            :class="{ 'active': activeSlide === 1 }">
                            <img src="../main/assets/img/img-logoscursos/informatica.jpg" alt="Curso de Informática"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3
                                    class="font-bold text-xl mb-2 text-ceara-green border-b-2 border-ceara-green text-center">
                                    Informática</h3>
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="content-overlay">
                                        <p class="text-white text-center text-xs">O Curso Técnico em Informática com
                                            ênfase em
                                            Desenvolvimento Web oferece formação prática focada no mercado. Os alunos
                                            aprendem a desenvolver softwares, abrangendo modelagem, banco de dados e
                                            testes, além de disciplinas em design, robótica e gestão de startups. Essa
                                            formação diversificada amplia as oportunidades de carreira e prepara os
                                            estudantes para se destacarem na tecnologia. Venha construir seu futuro!

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Meio Ambiente -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale min-w-[300px] relative group card"
                            :class="{ 'active': activeSlide === 2 }">
                            <img src="../main/assets/img/img-logoscursos/meio_ambiente.jpg" alt="Curso de Meio Ambiente"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3
                                    class="font-bold text-xl mb-2 text-ceara-green border-b-2 border-ceara-green text-center">
                                    Meio Ambiente</h3>
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="content-overlay">
                                        <p class="text-white text-center text-xs"> O Curso Técnico em Meio Ambiente
                                            forma profissionais para a preservação, recuperação e gestão dos recursos
                                            naturais, promovendo a sustentabilidade e a conscientização ambiental. O
                                            objetivo é desenvolver conhecimentos e habilidades essenciais para enfrentar
                                            desafios na proteção do meio ambiente, preparando os alunos para atuar em
                                            consultorias, órgãos públicos e empresas, contribuindo para um futuro
                                            sustentável. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Administração -->

                        <!-- Edificações -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale min-w-[300px] relative group card"
                            :class="{ 'active': activeSlide === 4 }">
                            <img src="../main/assets/img/img-logoscursos/edificações.jpg" alt="Curso de Edificações"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3
                                    class="font-bold text-xl mb-2 text-ceara-green border-b-2 border-ceara-green text-center">
                                    Edificações</h3>
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="content-overlay">
                                        <p class="text-white text-center text-xs"> O curso Técnico de Edificações forma
                                            profissionais para atuar na construção civil, como desenhar projetos,
                                            elaborar orçamentos, coordenar manutenção e realizar pesquisas. O técnico
                                            pode trabalhar
                                            em empresas de construção, escritórios, canteiros de obras, laboratórios ou
                                            como autônomo. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale min-w-[300px] relative group card"
                            :class="{ 'active': activeSlide === 3 }">
                            <img src="../main/assets/img/img-logoscursos/adm.jpg" alt="Curso de Administração"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3
                                    class="font-bold text-xl mb-2 text-ceara-green border-b-2 border-ceara-green text-center">
                                    Administração</h3>
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="content-overlay">
                                        <p class="text-white text-center text-xs">O Curso Técnico em Administração forma
                                            profissionais para a gestão de empresas em diversos setores. O objetivo é
                                            desenvolver conhecimentos e habilidades em planejamento, organização,
                                            direção e controle das atividades administrativas, preparando os alunos para
                                            enfrentar desafios no mundo corporativo e contribuir para a eficiência e
                                            competitividade das organizações.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  <style>
    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .card {
        transition: all 0.5s ease-in-out;
    }

    .carousel {
        scroll-behavior: smooth;
    }

    .text-xs {
        font-size: 0.75rem;
        line-height: 1.4;
    }
</style>

<script>
    function smoothScroll(element, target, duration) {
        const start = element.scrollLeft;
        const change = target - start;
        const startTime = performance.now();
        
        function animation(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            element.scrollLeft = start + change * easeInOutQuad(progress);
            if (progress < 1) {
                requestAnimationFrame(animation);
            }
        }
        requestAnimationFrame(animation);
    }

    function easeInOutQuad(t) {
        return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
    }

    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.querySelector('.carousel');
        let currentIndex = 0;
        const cardWidth = 300; // Ajustando a largura da carta
        
        setInterval(() => {
            currentIndex = (currentIndex + 1) % 5;
            smoothScroll(carousel, currentIndex * cardWidth, 1000);
        }, 5000);
    });
</script>

        <!--
<section id="eventos" class="py-24 fade-in">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12 text-ceara-green">Próximos Eventos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-6 hover-scale">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-calendar-alt text-3xl text-ceara-orange mr-4"></i>
                            <div>
                                <h3 class="font-bold text-xl mb-1 text-ceara-green">Feira de Ciências</h3>
                                <p class="text-gray-600">15 de Outubro, 2023</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">Venha conhecer os projetos inovadores dos nossos alunos!</p>
                        <a href="#"
                            class="inline-block bg-ceara-white text-ceara-green border border-ceara-green hover:bg-ceara-green hover:text-ceara-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                            <i class="fas fa-info-circle mr-1"></i> Saiba mais
                        </a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 hover-scale">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-user-graduate text-3xl text-ceara-orange mr-4"></i>
                            <div>
                                <h3 class="font-bold text-xl mb-1 text-ceara-green">Processo Seletivo 2024</h3>
                                <p class="text-gray-600">1 de Novembro, 2023</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">Inscrições abertas para o processo seletivo do próximo ano letivo!
                        </p>
                        <a href="edital.html"
                            class="inline-block bg-ceara-white text-ceara-green border border-ceara-green hover:bg-ceara-green hover:text-ceara-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                            <i class="fas fa-file-alt mr-1"></i> Ler Edital
                        </a>
                    </div>
                  
                </div>
            </div>

        -->
        </section>

        <section id="galeria" class="py-24 fade-in">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12 text-ceara-green">Galeria de Fotos</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <img src="../main/assets/img/galeria/galeria-1.png" alt="Imagem 1"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-2.jpg" alt="Imagem 2"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-3.jpg" alt="Imagem 3"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-4.jpg" alt="Imagem 4"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-5.jpg" alt="Imagem 5"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-6.jpg" alt="Imagem 6"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-7.jpg" alt="Imagem 7"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-8.jpg" alt="Imagem 8"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div id="imageModal"
            class="fixed inset-0 bg-black bg-opacity-90 hidden items-center justify-center z-50 transition-all duration-300 ease-in-out opacity-0">
            <div class="relative max-w-4xl w-full mx-4">
                <button id="closeModal"
                    class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors duration-200 z-50">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
                <div class="relative">
                    <img id="modalImage" src="" alt="Imagem ampliada"
                        class="w-full h-auto max-h-[80vh] object-contain rounded-lg">
                    <button id="prevButton"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-75 text-white p-2 rounded-full transition-all duration-200">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>
                    <button id="nextButton"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-75 text-white p-2 rounded-full transition-all duration-200">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Elementos do Modal
                const modal = document.getElementById('imageModal');
                const modalImage = document.getElementById('modalImage');
                const closeButton = document.getElementById('closeModal');
                const prevButton = document.getElementById('prevButton');
                const nextButton = document.getElementById('nextButton');
                const galleryImages = document.querySelectorAll('.gallery-img');
                let currentIndex = 0;

                // Funções do Modal
                function openModal(index) {
                    if (modal && modalImage && galleryImages[index]) {
                        currentIndex = index;
                        updateModalImage();
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');
                        document.body.style.overflow = 'hidden';

                        // Adiciona animação de fade in
                        setTimeout(() => {
                            modal.classList.add('opacity-100');
                            modal.classList.remove('opacity-0');
                        }, 10);
                    }
                }

                function closeModal() {
                    if (modal) {
                        // Adiciona animação de fade out
                        modal.classList.add('opacity-0');
                        modal.classList.remove('opacity-100');

                        setTimeout(() => {
                            modal.classList.add('hidden');
                            modal.classList.remove('flex');
                            document.body.style.overflow = '';
                        }, 300);
                    }
                }

                function updateModalImage() {
                    if (modalImage && galleryImages[currentIndex]) {
                        const newSrc = galleryImages[currentIndex].src;
                        const newAlt = galleryImages[currentIndex].alt;

                        // Adiciona fade na transição da imagem
                        modalImage.style.opacity = '0';
                        setTimeout(() => {
                            modalImage.src = newSrc;
                            modalImage.alt = newAlt;
                            modalImage.style.opacity = '1';
                        }, 200);
                    }
                }

                function nextImage() {
                    currentIndex = (currentIndex + 1) % galleryImages.length;
                    updateModalImage();
                }

                function prevImage() {
                    currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
                    updateModalImage();
                }

                // Event Listeners
                galleryImages.forEach((img, index) => {
                    img.addEventListener('click', () => openModal(index));
                });

                if (closeButton) {
                    closeButton.addEventListener('click', (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        closeModal();
                    });
                }

                if (prevButton) {
                    prevButton.addEventListener('click', (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        prevImage();
                    });
                }

                if (nextButton) {
                    nextButton.addEventListener('click', (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        nextImage();
                    });
                }

                // Fechar modal ao clicar fora da imagem
                modal?.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        closeModal();
                    }
                });

                // Controles de teclado
                document.addEventListener('keydown', (e) => {
                    if (!modal?.classList.contains('hidden')) {
                        switch (e.key) {
                            case 'Escape':
                                closeModal();
                                break;
                            case 'ArrowLeft':
                                prevImage();
                                break;
                            case 'ArrowRight':
                                nextImage();
                                break;
                        }
                    }
                });

                // Adicionar CSS para transições
                const style = document.createElement('style');
                style.textContent = `
                    #modalImage {
                        transition: opacity 0.3s ease-in-out;
                    }
                    
                    .modal-button {
                        opacity: 0.7;
                        transition: opacity 0.2s ease-in-out;
                    }
                    
                    .modal-button:hover {
                        opacity: 1;
                    }
                `;
                document.head.appendChild(style);
            });
        </script>

        <!-- Seção Parceiros -->


        <section id="parceiros" class="bg-white py-8 md:py-16 fade-in overflow-hidden">
            <div class="container mx-auto px-4 md:px-8">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-8 md:mb-12 text-ceara-green">Nossos Parceiros
                </h2>

                <!-- Container do Carrossel -->
                <div class="relative w-full overflow-hidden">
                    <div class="swiper-container parceiros-swiper w-full">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/fenix Soluções.png" alt="Fenix"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/crede1.png" alt="Crede"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/netway cursoss.png" alt="netway"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/r2_telecom.jpeg" alt="R2"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/softway_fibra.webp" alt="software fibra"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/TRE_CE.png" alt="tre"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/vp23telecomm.png" alt="vp3"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/ifce.png" alt="ifce"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/prefeitura_municial.png" alt="prefeitura"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/EUNICE WEVER HH.jpg" alt="eunice"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/anchieta.png" alt="anchieta"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/mallory.png" alt="mallory"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/inovax (2).png" alt="inovax"
                                        class="h-24 md:h-40 w-auto object-contain hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex items-center justify-center">
                                    <img src="../main/assets/img/logo empresas/cl_delecom.jpeg" alt="Cl-telecom"
                                        class="h-24 md:h-40 w-32 md:w-40 object-contain rounded-full hover:grayscale-0 transition-all duration-300">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Scripts -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new Swiper('.parceiros-swiper', {
                    slidesPerView: 'auto',
                    spaceBetween: 40,
                    loop: true,
                    centeredSlides: false,
                    autoplay: {
                        delay: 2000, // Alterado de 3000 para 2000 (2 segundos)
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 20
                        },
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 30
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 40
                        },
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 40
                        },
                        1280: {
                            slidesPerView: 5,
                            spaceBetween: 40
                        }
                    },
                    speed: 800,
                    effect: 'slide',
                });

                // Opcional: Controle do autoplay com hover
                const swiperContainer = document.querySelector('.parceiros-swiper');
                if (swiperContainer) {
                    swiperContainer.addEventListener('mouseenter', function () {
                        const swiper = this.swiper;
                        swiper.autoplay.stop();
                    });
                    swiperContainer.addEventListener('mouseleave', function () {
                        const swiper = this.swiper;
                        swiper.autoplay.start();
                    });
                }
            }); 
        </script>

 <section id="localizacao" class="py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 text-ceara-green">Localização</h2>
        <div class="flex flex-wrap bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Mapa -->
            <div class="w-full lg:w-3/5">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4727.003608944703!2d-38.67658031627441!3d-3.888242185992357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c0aca1962c7027%3A0xe5da63c87e731b04!2sEscola%20Estadual%20de%20Educa%C3%A7%C3%A3o%20Profissional%20Salaberga%20Torquato%20Gomes%20de%20Matos!5e1!3m2!1spt-BR!2sbr!4v1728757517751!5m2!1spt-BR!2sbr"
                        loading="lazy"
                        class="w-full h-full"
                        allowfullscreen="">
                    </iframe>
                </div>
            </div>
            
            <!-- Informações de Contato -->
            <div class="w-full lg:w-2/5 bg-[#008C45] p-6 text-white">
                <h3 class="text-2xl mb-6">Informações de Contato</h3>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt mr-3 text-yellow-500"></i>
                        <span>Av. Marta Maria Carvalho Nojoza, sn - Outra Banda, Maranguape - CE</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone mr-3 text-yellow-500"></i>
                        <span>(85) 3101-2100</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-3 text-yellow-500"></i>
                        <span>eeepsalaberga@escola.ce.gov.br</span>
                    </li>
                </ul>
                <a href="https://www.google.com/maps?q=EEEP+Salaberga" 
                   target="_blank"
                   class="inline-block mt-6 px-6 py-3 bg-black text-white rounded-full hover:bg-blue-600 transition-all">
                    <i class="fas fa-directions mr-2"></i>Como Chegar
                </a>
            </div>
        </div>
    </div>
</section>


    </main>

    <footer class="bg-gradient-to-b from-black via-[#000] to-black text-white py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8">

                <!-- Logo e descrição da empresa -->
                <div class="md:col-span-3 space-y-6">
                    <img src="https://i.postimg.cc/yx26GhLv/lavosier-nas-3.png" alt="stgm Logo"
                        class="h-12 transition-all duration-300 hover:grayscale-0" style="background-color: #000000;">
                    <p class="text-gray-400 text-sm leading-relaxed">
                        © 2024 Eeep salaberga torquato gomes de matos. Todos os direitos reservados.
                        Sistema Educacional Integrado | CNPJ: 07.954.514/0256-24 |
                        Av. Marta Maria Carvalho Nojoza, sn - Outra Banda, Maranguape - CE
                        Tel: (85) 3341-3990| E-mail:eeepsantaritama@gmail.com |
                        Horário de Atendimento: Segunda a Sexta, das 7h às 17h
                    </p>
                </div>

                <!-- Links Rápidos -->
                <div class="md:col-span-3 space-y-4">
                    <h3 class="text-lg font-semibold text-[#FFF]">Links Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="https://www.instagram.com/eeepsalabergampe/"
                                class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Instagram</a>
                        </li>
                        <li><a href="https://www.facebook.com/groups/salaberga/"
                                class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Facebook</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Sobre
                                Nós</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Contato</a>
                        </li>
                    </ul>
                </div>

                <!-- Desenvolvedores -->
                <div class="md:col-span-3 space-y-4">
                    <h3 class="text-lg font-semibold text-[#FFF]">Desenvolvedores</h3>
                    <ul class="space-y-2">
                        <li><a href="https://www.instagram.com/otavio.ce/"
                                class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Otavio
                                Menezes</a>
                        </li>
                        <li><a href="https://www.instagram.com/mth_fl/"
                                class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Matheus
                                Felix</a>
                        </li>
                        <li><a href="https://www.instagram.com/lvnas._/"
                                class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Lavosier
                            Nascimento</a>
                        </li>

                        <li><a href="https://www.instagram.com/rogercavalcantetz/"
                                class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Roger
                                Cavalcante</a>
                        </li>
                        <li><a href="https://www.instagram.com/p_.uchoa/"
                                class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Pedro
                                Uchoa</a>
                        </li>
                    </ul>
                </div>

                <!-- Logo do desenvolvedor -->
                <div class="md:col-span-3 flex flex-col items-center justify-center space-y-4">
                    <img src="https://i.postimg.cc/SsTx6bC0/Dev-2.jpg" alt="DevStgm Logo"
                        class="h-16 w-16 transition-all duration-300 filter grayscale hover:grayscale-0">
                    <p class="text-xs text-gray-400 text-center">Desenvolvido por Dev.Stgm</p>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-12 pt-8 border-t border-gray-800 text-center">
                <p class="text-gray-400 text-sm">&copy; 2024 DevStgm. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <!-- <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <script>
        document.getElementById('vlibrasButton').addEventListener('click', function () {
            window.open('https://www.gov.br/governodigital/pt-br/acessibilidade-e-usuario/vlibras', '_blank');
        });

    </script> -->
</body>

</html>
