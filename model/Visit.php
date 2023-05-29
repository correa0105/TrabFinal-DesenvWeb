<?php

class Visit {
    
    private $id;
    private $local;
    private $resume;
    private $date;
    private $done;

    function __construct(){}
 
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    public function getResume()
    {
        return $this->resume;
    }
 
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function getDone()
    {
        return $this->done;
    }

    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }
}

?>