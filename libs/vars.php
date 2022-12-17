<?php

session_start();

const title = "Popüler Filmler";

const user = array(
    "username" => "sadikturan",
    "password" => "1234",
    "name" => "Sadık Turan"
);

$categories = array("Macera", "Dram", "Komedi", "Korku", "Bilim Kurgu");

$films = array(
    "1" => array(
        "title" => "Paper Lives",
        "comment" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "image" => "ic_paper_lives.jpeg",
        "commentNumber" => "0",
        "likeNumber" => "106",
        "vision" => true,
        "url" => "paper-lives"
    ),
    "2" => array(
        "title" => "Walking Dead",
        "comment" => "Zombi kıyametinin lives ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "image" => "ic_the_walking_dead.jpeg",
        "commentNumber" => "236",
        "likeNumber" => "305",
        "vision" => false,
        "url" => "walking-dead"
    )
,
    "3" => array(
        "title" => "yeni film 1",
        "comment" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "image" => "ic_lucifer.jpeg",
        "commentNumber" => "236",
        "likeNumber" => "305",
        "vision" => false,
        "url" => "paper-lives"
    )
,
    "4" => array(
        "title" => "yeni film 2",
        "comment" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "image" => "ic_paper_lives.jpeg",
        "commentNumber" => "236",
        "likeNumber" => "305",
        "vision" => false,
        "url" => "paper-lives"
    )
);

if (isset($_SESSION["films"]) and (count($_SESSION["films"]) > count($films))) {
    $films = $_SESSION["films"];
} else {
    $_SESSION["films"] = $films;
}
?>