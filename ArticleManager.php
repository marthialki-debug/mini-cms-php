<?php

class ArticleManager
{
    private array $articles = [];

    public function ajouterArticle($titre, $contenu)
    {
        $this->articles[] = [
            'titre' => $titre,
            'contenu' => $contenu
        ];
    }

    public function supprimerArticle($id)
    {
        unset($this->articles[$id]);
    }
}
