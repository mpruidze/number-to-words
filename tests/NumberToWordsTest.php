<?php

namespace Kwn\NumberToWords;

use Kwn\NumberToWords\Factory\TransformerFactoriesRegistry;
use Kwn\NumberToWords\Language\Polish\PolishTransformerFactory;
use Kwn\NumberToWords\Language\Romanian\RomanianTransformerFactory;
use Kwn\NumberToWords\Model\Subunit;

class NumberToWordsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NumberToWords
     */
    private $numberToWords;

    public function setUp()
    {
        $registry = new TransformerFactoriesRegistry([
            new PolishTransformerFactory(),
            new RomanianTransformerFactory()
        ]);

        $this->numberToWords = new NumberToWords($registry);
    }

    public function testGetExistingNumberTransformer()
    {
        $transformer = $this->numberToWords->getNumberTransformer('pl');

        $this->assertInstanceOf('Kwn\NumberToWords\Language\Polish\Transformer\NumberTransformer', $transformer);
    }

    /**
     * @expectedException \Kwn\NumberToWords\Exception\InvalidArgumentException
     */
    public function testGetUnexistingNumberTransformer()
    {
        $this->numberToWords->getNumberTransformer('cd');
    }

    public function testGetExistingCurrencyTransformer()
    {
        $transformer = $this->numberToWords->getCurrencyTransformer(
            'pl',
            'EUR',
            Subunit::FORMAT_IN_WORDS
        );

        $this->assertInstanceOf(
            'Kwn\NumberToWords\Language\Polish\Transformer\Decorator\CurrencyTransformerDecorator',
            $transformer
        );
    }

    /**
     * @expectedException \Kwn\NumberToWords\Exception\InvalidArgumentException
     */
    public function testGetUnexistingCurrencyTransformer()
    {
        $this->numberToWords->getCurrencyTransformer(
            'cd',
            'EUR',
            Subunit::FORMAT_IN_WORDS
        );
    }
}