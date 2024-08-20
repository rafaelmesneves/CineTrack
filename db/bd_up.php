<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";
if ($bd->exec($sql)) 
    echo "\ntabela filmes apagada\n"; 


$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR [200] NOT NULL,
        poster VARCHAR [200],
        sinopse TEXT,
        nota DECIMAL [2,1] 
    )
";

if ($bd->exec($sql)) 
    echo "\ntabela filmes criada\n"; 
else 
    echo "\nerro ao criar tabela filmes\n";

$sql ="INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    0,
    'Vingadores',
    'https://image.tmdb.org/t/p/w300/PtSapjHdDjlVcsqdEo0u7rDE6i.jpg',
    'Loki, o irmão de Thor, ganha acesso ao poder ilimitado do cubo cósmico ao roubá-lo de dentro das instalações da S.H.I.E.L.D. Nick Fury, o diretor desta agência internacional que mantém a paz, logo reúne os únicos super-heróis que serão capazes de defender a Terra de ameaças sem precedentes. Homem de Ferro, Capitão América, Hulk, Thor, Viúva Negra e Gavião Arqueiro formam o time dos sonhos de Fury, mas eles precisam aprender a colocar os egos de lado e agir como um grupo em prol da humanidade.',
    8.6
)";

if ($bd->exec($sql)) 
    echo "\nfilmes inseridos com sucesso\n"; 
else 
    echo "\nerro ao inserir filmes\n";

    $sql ="INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        1,
        'Vingadores: Era de Ultron',
        'https://image.tmdb.org/t/p/w300/uvzqTsRmUzk9mJVzX8cMSWMyM5l.jpg',
        'Ao tentar proteger o planeta de ameaças, Tony Stark constrói um sistema de inteligência artificial que cuidaria da paz mundial. O projeto acaba dando errado e gera o nascimento do Ultron. Com o destino da Terra em jogo, os Vingadores terão que se unir para mais uma vez salvar a raça humana da extinção.',
        7.5
    )";
    
    if ($bd->exec($sql)) 
        echo "\nfilmes inseridos com sucesso\n"; 
    else 
        echo "\nerro ao inserir filmes\n";
    



