<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once 'src/OSTSeeder.php';

class OSTTest extends TestCase
{
    protected array $testData;
    protected function setUp(): void
    {
        $this->testData = OSTSeeder::getOSTs();
    }

    public function testJsonSerialize(): void
    {
        $expectedDemoString = 'hallo';
        $DemoString = 'hallo';
        $this->assertEquals($expectedDemoString, $DemoString);

        $expectedJsonDoom = '{"ID":1,"name":"Doom (Original Game Soundtrack)","videoGameName":"Doom","releaseYear":2016,"trackList":[[{"ID":1,"name":"Rip & Tear","artist":"Mick Gordon","trackNumber":2,"duration":267},{"ID":2,"name":"At Doom\'s Gate","artist":"Mick Gordon","trackNumber":3,"duration":70},{"ID":3,"name":"Bfg Division","artist":"Mick Gordon","trackNumber":11,"duration":506},{"ID":4,"name":"Cyberdemon","artist":"Mick Gordon","trackNumber":19,"duration":378}]]}';
        $this->assertJsonStringEqualsJsonString($expectedJsonDoom, json_encode($this->testData[1]));

        $expectedJsonNecrodancer = '{"ID":2,"name":"Crypt of the Necrodancer (Original Game Soundtrack)","videoGameName":"Crypt of the Necrodancer","releaseYear":2015,"trackList":[[{"ID":5,"name":"Rythmortis","artist":"Danny Baranowsky","trackNumber":2,"duration":149},{"ID":6,"name":"Fungal Funk","artist":"Danny Baranowsky","trackNumber":8,"duration":160},{"ID":7,"name":"Igneous Rock","artist":"Danny Baranowsky, Familyjules7x","trackNumber":13,"duration":164},{"ID":8,"name":"Dance of the Decorous","artist":"Danny Baranowsky","trackNumber":14,"duration":167}]]}';
        $this->assertJsonStringEqualsJsonString($expectedJsonNecrodancer, json_encode($this->testData[2]));

        $expectedJsonUndertale = '{"ID":3,"name":"UNDERTALE Soundtrack","videoGameName":"UNDERTALE","releaseYear":2015,"trackList":[[{"ID":9,"name":"Ruins","artist":"Toby Fox","trackNumber":5,"duration":92},{"ID":10,"name":"Bonetrousle","artist":"Toby Fox","trackNumber":24,"duration":57},{"ID":11,"name":"Another Medium","artist":"Toby Fox","trackNumber":51,"duration":142},{"ID":12,"name":"ASGORE","artist":"Toby Fox","trackNumber":77,"duration":156}]]}';
        $this->assertJsonStringEqualsJsonString($expectedJsonUndertale, json_encode($this->testData[3]));
    }

    public function testAmountOSTs(): void
    {
        $this->assertCount(3, $this->testData);
    }

    public function testObjectsProperties(): void
    {
        $this->assert();
    }
}