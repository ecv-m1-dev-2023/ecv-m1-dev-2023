<?php

function getArticleById(int $id, array $articles): array
{
    foreach ($articles as $article) {
        if ($article["id"] === $id) {
            return $article;
        }
    }
};
