<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <style>
        body {
            background-color:
            <?php
                $cor = $_POST['cor'];

                if (isset($_COOKIE['cookie_teste'])) {
                    echo "$cor";
            } else {
                '<br/>
                O cookie durará 60 segundos';
                setcookie('cookie_teste', time() + 120);
            }
            ?>
        }
    </style>
<center><img src='img/pngegg.png' width='250px';></center>
<form method="POST">
        <p> Escolha o tema de sua preferência</p>
        <input type="color" value="cor" name="cor" id="cor">
        <input type="submit">
    </select>
    <h3> <p>O Rock in Rio é um dos maiores e mais emblemáticos festivais de música do mundo, reunindo anualmente milhares de fãs de todos os cantos do planeta. Criado em 1985 pelo empresário Roberto Medina, o evento teve sua primeira edição no Rio de Janeiro e logo se consolidou como um marco na história da música, não só no Brasil, mas globalmente. Desde o seu início, o festival buscou oferecer uma plataforma para alguns dos maiores nomes da música internacional, com apresentações de artistas lendários como Queen, AC/DC, Rolling Stones e David Bowie, tornando-se um símbolo de diversidade musical e cultural.</p>

<p>A cada edição, o Rock in Rio não só celebra a música, mas também a arte e o entretenimento em suas mais diversas formas, misturando shows de gigantes do rock, pop, eletrônica, hip hop e outros gêneros, com espaços dedicados à gastronomia, moda e até ao meio ambiente. O evento tem sido uma vitrine para a inovação, tanto no que diz respeito ao cenário e à produção dos shows, como na forma de engajar seu público, seja por meio de transmissões ao vivo ou pela integração das redes sociais.</p>

<p>Apesar de ser um festival de dimensões globais, o Rock in Rio mantém uma forte conexão com a cidade do Rio de Janeiro, que serve de palco para o evento. A Cidade do Rock, local que recebe o festival, é projetada para abrigar uma vasta estrutura que inclui palcos gigantescos, áreas de lazer, espaços interativos e muito mais. Além disso, o evento é conhecido por atrair turistas de diversas partes do mundo, o que movimenta a economia local e promove a cultura carioca para um público internacional.</p>

<p>Nos últimos anos, o Rock in Rio se expandiu para outras partes do mundo, com edições realizadas em Lisboa, Las Vegas e, mais recentemente, em outros países da América Latina. Essa expansão tem ajudado a consolidar o Rock in Rio como uma marca de alcance global, sempre mantendo sua essência de celebração da música e da amizade entre povos de diferentes culturas. Mais do que um festival de música, o Rock in Rio é um evento que simboliza a união, a diversidade e a energia contagiante dos fãs de música em todas as suas formas.</p>

<p>Ao longo das edições, o festival não apenas proporcionou grandes performances, mas também se comprometeu com causas sociais e ambientais, promovendo ações de conscientização sobre sustentabilidade e responsabilidade social, algo que tem se tornado uma parte importante da sua identidade. Para muitas pessoas, o Rock in Rio não é apenas um evento de entretenimento, mas uma experiência única de vida, onde a música, a emoção e a diversão se encontram em um só lugar.</p>
</h3>
</body>
</html>