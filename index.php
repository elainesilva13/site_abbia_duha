<?php require_once 'templates/header.php';
include('source/agenda.php');
?>

<section id="sobre-professora">
    <div class=row id=div-foto-sobre>
        <img src="assets\galeria\img5.jpg" alt="Bailarina de Danças Orientais" id=foto-sobre>
    </div>
    <h2>Sobre a Professora</h2>
    <div class=row id=div-p-sobre>
        <p>Dançarina desde 2013 em Dança do Ventre e Tribal Fusion desde 2015, Ana Flávia Gonçalves oferece através da
            Dança o despertar de todo o potencial feminino em todos aqueles que buscam por seus ensinamentos.
            Ministrando aulas desde 2016 no Abbia Duhha - Núcleo de Danças Étnicas, ela oferece em sua metodologia uma
            ótica ritualistica, sagrada, para que o aprendizado seja pleno e que a prática da Dança possa proporcionar
            uma conexão profunda alcançando um equilíbrio mental, emocional e físico.
            Sua formação é ampla, passando por mestres como: Long Nu (Argentina), Nadja El Balady, Kharyna Halla, Mari
            Garavelo, Warda Maravilha e entre outros profissionais incríveis.
            Já performou no Mercado Persa Brasil edição 2014, também está nas páginas do livro: Meu Legado da Poetisa
            Eliane Tróia, contando sua trajetória na dança.
        </p>
    </div>
</section>

<section id="o-nucleo">
    <h2>Sobre O Núcleo</h2>
    <p>Localizado em São José dos Campos, tem como filosofia o resgate do sagrado feminino através da dança.
        No núcleo são ministradas aulas individuais e em grupo, online e presencial, das seguintes modalidades:</p>
    <div><span><img src="assets/tribal.png" alt="bellydancer">Tribal Fusion</span>
        <span><img src="assets/bellydancer.png" alt="bellydancer">Dança do Ventre</span>
        <span><img src="assets/consciencia-corporal.png" alt="bellydancer" style='width:auto'>Consciência
            Corporal</span>
        <div>
</section>
<section id="servicos">
    <h2>Apresentações</h2>
    <p><svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#8a7d54">
            <path
                d="M80-80v-309l165-73v-131l205-105v-82h-80v-60h80v-80h60v80h80v60h-80v82l205 105v131l165 73v309H530v-160q0-21.25-14.32-35.63Q501.35-290 480.18-290q-21.18 0-35.68 14.37Q430-261.25 430-240v160H80Zm60-60h230v-102q0-46 32.12-79t78-33Q526-354 558-321q32 33 32 79v102h230v-214l-165-73v-133l-175-91-175 91v133l-165 73v214Zm340.06-285Q503-425 519-441.06q16-16.06 16-39T518.94-519q-16.06-16-39-16T441-518.94q-16 16.06-16 39T441.06-441q16.06 16 39 16Zm-.06 29Z" />
        </svg>Casamentos
    </p>
    <p><svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#8a7d54">
            <path
                d="m80-80 186-520 337 333L80-80Zm101-101 314-112-203-204-111 316Zm376-264-34-34 240-240q32-32 81-32.5t81 31.5l17 17-34 34-19-19q-19-19-44-19.5T800-688L557-445ZM398-600l-34-34 30-30q23-23 21.5-52.5T394-766l-28-28 34-34 26 26q35 35 34.5 87.5T425-627l-27 27Zm81 77-34-34 152-152q19-19 18.5-48.5T596-806l-61-61 34-34 63 63q31 32 32 80.5T633-677L479-523Zm158 159-34-34 47-47q35-35 84-36t84 34l51 51-34 34-52-52q-23-23-48-23t-48 23l-50 50ZM181-181Z" />
        </svg>Festas, Confraternizações de Empresas e Noites Temáticas</p>
    <p><svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#8a7d54">
            <path
                d="M120-80v-60h78v-141q-35-10-56.5-38.5T120-386v-334h216v334q0 35-21.5 65T258-281v141h78v60H120Zm60-419h96v-161h-96v161Zm48 161q19 0 33.5-14.5T276-386v-53h-96v53q0 19 14.5 33.5T228-338ZM520-80q-24 0-42-18t-18-42v-408q0-20 11-32t31-21l38-17q24-11 35-27t11-39v-161q0-16 9.5-25.5T621-880h94q16 0 25.5 9.5T750-845v161q0 23 13.5 39t37.5 27l38 17q19 8 30 20.5t11 32.5v408q0 24-18 42t-42 18H520Zm126-696h44v-44h-44v44ZM520-465h300v-83l-42-16q-40-15-64-49t-24-75v-28h-44v28q0 41-22.5 72T563-568l-43 20v83Zm0 325h300v-103H520v103Zm0-163h300v-102H520v102ZM228-439Zm292 136v-102 102Z" />
        </svg>
        Bares, restaurantes e pubs</p>
    </ul>
</section>

<section id="agenda">
    <h2>Agenda de Apresentações</h2>
    <p>Confira abaixo as datas das próximas apresentações de Abbia Duha em eventos e festivais ao redor do mundo:</p>
    <ul>
        <?php foreach ($eventos as $evento): ?>
        <li><strong><?php echo $evento['data']; ?>:</strong> <?php echo $evento['evento']; ?></li>
        <?php endforeach; ?>
    </ul>
</section>

<section id="galeria">
    <h2>Galeria</h2>
    <p>Confira <a style='color:#978137' href="/galeria.php"> AQUI </a>algumas imagens e vídeos das performances de
        Abbia Duha em diferentes eventos.</p>
</section>

<section id="contato">
    <h2>Contato</h2>
    <a style='color:white' href="https://www.instagram.com/abbiaduhha" target="_blank"><svg
            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50"
            style="fill:#FFFFFF;">
            <path
                d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z">
            </path>
        </svg> @abbiaduhha</a>

    <a href="wa.me/5512997706016"><i class="fa-brands fa-whatsapp"></i> (12) 99770-6016 </a>
</section>

<section id='localizacao'>
    <h2>Localização do Núcleo Abbia Duha</h2>

    <iframe id=mapa
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7332.20148139576!2d-45.904836318591975!3d-23.2394208913016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4aa4c7ef5f39%3A0x251fe42d4899f94a!2sJardim%20Oriente%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1730573446869!5m2!1spt-BR!2sbr"
        width="95%" height="400" style="border:0; margin: 20px" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<?php require_once 'templates/footer.php'; ?>