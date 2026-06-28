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

    public function modifierArticle($id, $donnees)
    {
        if (isset($this->articles[$id])) {
            $this->articles[$id] = array_merge($this->articles[$id], $donnees);
        }
    }

    public function supprimerArticle($id)
    {
        unset($this->articles[$id]);
    }
}
