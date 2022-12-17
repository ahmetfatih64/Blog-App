<?php

function filmAdd(string $title, string $comment, string $image, int $commentNumber = 0, int $likeNumber = 0, bool $vision = false)
{
    $new_item[count($_SESSION["films"]) + 1] = array(
        "title" => $title,
        "comment" => $comment,
        "image" => $image,
        "commentNumber" => $commentNumber,
        "likeNumber" => $likeNumber,
        "vision" => $vision
    );

    $_SESSION["films"] = array_merge($_SESSION["films"], $new_item);

    foreach ($_SESSION["films"] as $key => $film) {
        $_SESSION["films"][$key]["url"] = strtolower($_SESSION["filmler"][$key]["title"]);
        $_SESSION["films"][$key]["url"] = str_replace([" ", "ç"], ["-", "c"], $_SESSION["filmler"][$key]["url"]);
    }
}

function shortComment($comment, $limit)
{
    if (strlen($comment) > $limit) {
        echo substr($comment, 0, $limit) . "...";
    } else {
        echo $comment;
    };
}
?>