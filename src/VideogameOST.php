<?php

declare(strict_types=1);

class VideogameOST implements JsonSerializable
{
    public int $ID;
    public string $name;
    public string $videoGameName;
    public int $releaseYear;
    public $trackList;

    /**
     * @param int $ID ID of OST
     * @param string $name name of OST
     * @param string $videoGameName name of OST
     * @param int $releaseYear year of the game's release
     * @param $trackList array containing all of the OST's tracks
     */

    function __construct(int $ID, string $name, string $videoGameName, int $releaseYear, $trackList)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }

    function jsonSerialize(): mixed
    {
        return [
            'ID' => $this->ID,
            'name' => $this->name,
            'videoGameName' => $this->videoGameName,
            'releaseYear' => $this->releaseYear,
            'trackList' => [$this->trackList]
        ];
    }
}
