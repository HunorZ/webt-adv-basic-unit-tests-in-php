<?php
require_once 'Song.php';
require_once 'VideogameOST.php';
class OSTSeeder
{
    /**
     * @return osts an array consisting of 3 OSTs. Which consist of 4 Songs each.
     */
    public static function getOSTs(): array
    {
        $song1 = new Song(1, 'Rip & Tear', 'Mick Gordon', 2, 267);
        $song2 = new Song(2, 'At Doom\'s Gate', 'Mick Gordon', 3, 70);
        $song3 = new Song(3, 'Bfg Division', 'Mick Gordon', 11, 506);
        $song4 = new Song(4, 'Cyberdemon', 'Mick Gordon', 19, 378);
        $ost1 = new VideogameOST(1, 'Doom (Original Game Soundtrack)', 'Doom', 2016, array($song1, $song2, $song3, $song4));

        $song5 = new Song(5, 'Rythmortis', 'Danny Baranowsky', 2, 149);
        $song6 = new Song(6, 'Fungal Funk', 'Danny Baranowsky', 8, 160);
        $song7 = new Song(7, 'Igneous Rock', 'Danny Baranowsky, Familyjules7x', 13, 164);
        $song8 = new Song(8, 'Dance of the Decorous', 'Danny Baranowsky', 14, 167);
        $ost2 = new VideogameOST(2, 'Crypt of the Necrodancer (Original Game Soundtrack)', 'Crypt of the Necrodancer', 2015, array($song5, $song6, $song7, $song8));

        $song9 = new Song(9, 'Ruins', 'Toby Fox', 5, 92);
        $song10 = new Song(10, 'Bonetrousle', 'Toby Fox', 24, 57);
        $song11 = new Song(11, 'Another Medium', 'Toby Fox', 51, 142);
        $song12 = new Song(12, 'ASGORE', 'Toby Fox', 77, 156);
        $ost3 = new VideogameOST(3, 'UNDERTALE Soundtrack', 'UNDERTALE', 2015, array($song9, $song10, $song11, $song12));

        $osts = array($ost1->ID => $ost1, $ost2->ID => $ost2, $ost3->ID => $ost3);
        return $osts;
    }
}