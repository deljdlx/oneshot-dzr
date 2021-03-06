<?php

namespace DZR\Application\Controller;

use DZR\Controller;
use DZR\Datasource;
use DZR\Application\Model\Song as EntitySong;

class Song extends Controller
{

    /**
     * @var Datasource
     */
    protected $datasource;

    public function search($search) {
        $entitySong = new EntitySong($this->datasource);

        return $entitySong->search($search);
    }

    public function getInfoById($id)
    {

        $entitySong = new EntitySong($this->datasource);

        if($entitySong->loadById($id)) {
            return $entitySong;
        }
        else {
            return false;
        }
    }
}
