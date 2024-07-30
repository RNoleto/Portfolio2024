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
                    <p><i class="fas fa-map-marker-alt"></i><?php echo get_post_meta(get_the_ID(), 'localizacao', true); ?></p>
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
                    <div class="image <?php echo $job['style']; ?>" data-title="<?php echo $job['nome']; ?>"><img src="<?php echo $job['imagem']; ?>" alt=""></div>
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
                    <p class="text-second">Pós Graduado em Engenharia de Software</p>
                    <p class="text-second">Freelancer & Desenvolvedor Web</p>
                </div>
            </div>
        </div>
        <!-- Fim de Inserção de Sobre Mim -->
    </section>
</body>

</html>