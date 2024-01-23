<?php

declare(strict_types=1);
class Song implements JsonSerializable
{
    private int $id;
    private string $name;
    private string $artist;
    private int $trackNumber;
    private int $duration;

    /**
     * @param int $id a unique ID
     * @param string $name the song title
     * @param string $artist the name of the artist
     * @param int $trackNumber the track number
     * @param int $duration the duration of the song in seconds
     */
    public function __construct(int $id, string $name, string $artist, int $trackNumber, int $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'ID' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'trackNumber' => $this->trackNumber,
            'duration' => $this->duration
        ];
    }
}
