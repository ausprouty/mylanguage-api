<?php namespace App\MyLanguageApi\Languages;

use Opis\ORM\{
    Entity,
    IEntityMapper,
    IMappableEntity
};


class Language extends Entity implements IMabbableEntity
{


    public function findByHL($id)
    {
        return $this->connection->from('hl_language')
            ->where('hl_id', '=', $id)
            ->first();
    }

    public function findByIso($iso)
    {
        return $this->connection->from('hl_language')
            ->where('language_iso', '=', $iso)
            ->all();
    }
}