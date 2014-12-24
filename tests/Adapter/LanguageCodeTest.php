<?php
namespace ConversioTest\Adapter;

use Conversio\Adapter\LanguageCode;
use Conversio\Adapter\Options\LanguageCodeOptions;
use Conversio\Conversion;

/**
 * Class LanguageCodeTest
 */
class LanguageCodeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Conversion
     */
    protected $conversion;

    public function setUp()
    {


//        $this->conversion = new Conversion();
//        $this->conversion->setOptions([
//            'options' => $opts,
//            'adapter' => new LanguageCode(),
//        ]);

//        $this->conversion = new Conversion([
//            'adapter' => '',
//            'adapterOptions' => ''
//        ]);

//        $this->conversion = new Conversion();
//        $this->conversion->setAdapterOptions($opts);
//        $this->conversion->setAdapter('Conversio\Adapter\LanguageCode');

//        $this->conversion = new Conversion('Conversio\Adapter\LanguageCode');
//        $this->conversion->setAdapterOptions($opts);
//        $this->conversion->getAdapter()->setOptions($opts);

//        $this->conversion = new Conversion(['adapter' => 'Conversio\Adapter\LanguageCode', 'adapterOptions' => ['output' => 'native']]);
    }

    public function testProva()
    {
        $conv1 = new Conversion();
        $conv1->setAdapter(new LanguageCode);
        $conv1->setAdapterOptions(new LanguageCodeOptions(['output' => 'native']));
        $a = $conv1->filter('it');
        var_dump($a);

//        $conv2 = new Conversion([
//            'adapter' => 'Conversio\Adapter\LanguageCode',
//            'adapterOptions' => new LanguageCodeOptions2(['output' => 'native'])
//        ]);
//        $conv2->filter('it');

//        $lc = new LanguageCode();
//        $lc->setOptions(new LanguageCodeOptions2(['output' => 'native']));
//        $a = $lc->convert('it');
//        var_dump($a);

    }

}
