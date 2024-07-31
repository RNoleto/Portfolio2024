<?php
// Template Name: Home
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>RNoleto-2024</title>
</head>

<body>
    <header>
        <div>RNoleto</div>
        <!-- <main>
            <ul class="menu">
                <li><a href="#">Menu</a></li>
                <li><a href="#job">Trabalhos</a></li>
                <li><a href="#aboutme">Sobre Mim</a></li>
            </ul>
        </main> -->
    </header>
    <div class="relative">
        <section id="hero">
            <div class="container">
                <!-- Inserção de campos Hero usando wordpress como CMS -->
                <div class="content">
                    <p class="tag">Olá, sou</p>
                    <h1 class="text-principal" style="margin-left: 24px;"><?php echo get_post_meta(get_the_ID(), 'nome_hero', true); ?></h1>
                    <p class="sub" style="margin-left: 48px;"><?php echo get_post_meta(get_the_ID(), 'cargo_hero', true); ?></p>
                </div>
                <div class="content">
                    <p class="tag">E</p>
                    <p class="sub" style="margin-left: 12px;"><?php echo get_post_meta(get_the_ID(), 'cargo_hero', true); ?></p>
                    <p class="sub" style="margin-left: 12px; width: 386px;"><?php echo get_post_meta(get_the_ID(), 'descricao_hero', true); ?></p>
                    <p class="localization"><i class="fas fa-map-marker-alt"></i><?php echo get_post_meta(get_the_ID(), 'localizacao', true); ?></p>
                </div>
                <!-- Fim de Inserção de campos Hero usando wordpress como CMS -->
            </div>
        </section>
    </div>
    <div class="divider"></div>
    <section id="resume">
        <div class="container">
            <!-- Inserção de campos Resume usando wordpress como CMS -->
            <div class="content">
                <p class="tag">Sou</p>
                <p class="text-principal"><?php echo get_post_meta(get_the_ID(), 'titulo_resumo', true); ?></p>
                <p class="text-second"><?php echo get_post_meta(get_the_ID(), 'descricao_resumo', true); ?></p>
            </div>
            <div class="content">
                <img src="https://t4.ftcdn.net/jpg/00/84/13/15/360_F_84131506_fV8Szg1O5j9wB2ORZR6hxSv5PNCPIw0o.jpg"
                    alt="imagem">
            </div>
            <!-- Fim de Inserção de campos Resume usando wordpress como CMS -->
        </div>
    </section>
    <div class="divider"></div>
    <section id="job">
        <div class="container">
            <div class="content">
                <p class="tag">Trabalhos</p>
                <p class="text-principal">Alguns Trabalhos</p>
                <p class="text-second">Conheça alguns dos meus trabalhos.</p>
            </div>
            <div class="content">
                <div class="image-grid">
                    <!-- Inserção de trabalhos usando wordpress como CMS -->
                    <?php $jobs = get_field2('jobs');
                    if(isset($jobs)){
                        foreach($jobs as $job) { ?> 
                        <div class="image <?php echo $job['style']; ?>" data-title="<?php echo $job['nome']; ?>">
                        <a href="<?php echo $job['url'];?>" target="_blank">
                            <img src="<?php echo $job['imagem']; ?>" alt="">
                        </a>    
                        </div>
                    <?php }} ?>
                    <!-- Fim de Inserção de trabalhos -->
                </div>
            </div>
        </div>
    </section>
    <div class="divider"></div>
    <section id="aboutme">
        <!-- Inserção de Sobre Mim usando wordpress como CMS -->
        <div class="container">
            <div class="content">
                <p class="tag">Sobre Mim</p>
                <p class="text-principal"><?php echo get_post_meta(get_the_ID(), 'titulo_aboutme', true); ?></p>
            </div>
            <div class="grid">
                <div class="content">
                <p class="text-second"><?php echo get_post_meta(get_the_ID(), 'descricao_aboutme', true); ?></p>
                </div>
                <div class="content">
                    <!-- Inserção de informações usando wordpress como CMS -->
                    <?php $infos = get_field('infos'); 
                    if(isset($infos)){
                        foreach($infos as $info) { ?>
                        <p class="text-second"><i class="fa-solid fa-circle-check"></i><?php echo $info['info']; ?></p>
                    <?php }}?>
                    <!-- Fim de Inserção de Informações -->
                </div>
            </div>
        </div>
        <!-- Fim de Inserção de Sobre Mim -->
    </section>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        // Inicialização do ScrollReveal
        ScrollReveal().reveal('.tag', {
            distance: '50px',
            origin: 'left',
            duration: 1500,
            opacity: 0,
            reset: true
        });

        ScrollReveal().reveal('.text-principal', {
            distance: '100px',
            origin: 'left',
            duration: 2000,
            opacity: 0,
            reset: true
        });

        ScrollReveal().reveal('.sub', {
            distance: '100px',
            origin: 'left',
            duration: 2500,
            opacity: 0,
            reset: true
        });

        ScrollReveal().reveal('.text-second', {
            distance: '100px',
            origin: 'left',
            duration: 2500,
            opacity: 0,
            reset: true
        });

        ScrollReveal().reveal('.localization', {
            distance: '100px',
            origin: 'left',
            duration: 3000,
            opacity: 0,
            reset: true
        });

        const firstTextSecond = document.querySelectorAll('#aboutme .text-second')[1];
        const lastTextSecond = document.querySelectorAll('#aboutme .text-second')[2];

        //Animação de text-second em Aboutme
        ScrollReveal().reveal(firstTextSecond, {
            distance: '50px',
            origin: 'right',
            durantion: 2500,
            opacity: 0,
            reset: true
        });

        ScrollReveal().reveal(lastTextSecond, {
            distance: '50px',
            origin: 'right',
            durantion: 2500,
            opacity: 0,
            reset: true
        });

        //Animação de imagens dos projetos
        ScrollReveal().reveal('.image-rectangular', {
            distance: '50px',
            origin: 'bottom',
            duration: 2000,
            opacity: 0,
            reset: true
        });

        ScrollReveal().reveal('.image-large', {
            distance: '50px',
            origin: 'top',
            duration: 1000,
            opacity: 0,
            reset: true
        });

        //Animação de imagens pequenas dos projetos
        const firstImageSquare = document.querySelectorAll('.image-square')[0];
        const lastImageSquare = document.querySelectorAll('.image-square')[1];
        ScrollReveal().reveal(firstImageSquare, {
            distance: '50px',
            origin: 'top',
            duration: 3000,
            opacity: 0,
            reset: true
        });

        ScrollReveal().reveal(lastImageSquare, {
            distance: '50px',
            origin: 'bottom',
            duration: 3000,
            opacity: 0,
            reset: true
        });

    </script>
</body>

</html>