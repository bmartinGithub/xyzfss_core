<?php
declare(strict_types=1);

namespace Fss\Core\Model;

use \InvalidArgumentException;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\Serialize\Serializer\Json;

class Product implements ProductInterface
{

    protected Json $jsonSerializer;
    protected PriceCurrencyInterface $priceCurrency;
    private int $entity_id;
    private string $name;
    private string $sku;
    private float $msrp;
    private float $percentOff;
    private float $price;

    public function __construct(Json $jsonSerializer, PriceCurrencyInterface $priceCurrency)
    {

        $this->jsonSerializer = $jsonSerializer;
        $this->priceCurrency = $priceCurrency;
        $this->mockData();
    }

    /**
     * @inheritDoc
     */
    public function getEntityId (): int
    {
        return $this->entity_id;
    }

    /**
     * @inheritDoc
     */
    public function getSku (): string
    {
        return $this->sku;
    }

    /**
     * @inheritDoc
     */
    public function getName (): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function getMsrp (): float
    {
        return $this->msrp;
    }

    /**
     * @inheritDoc
     */
    public function getFormattedMsrp (): string
    {
        return $this->priceCurrency->format($this->msrp,true, 2);
    }

    /**
     * @inheritDoc
     */
    public function getPercentOff (): float
    {
        return $this->percentOff;
    }

    /**
     * @inheritDoc
     */
    public function getFormattedPercentOff (): string
    {
        return $this->getPercentOff()."%";
    }

    /**
     * @inheritDoc
     */
    public function getPrice (): float
    {
        return $this->price;
    }

    /**
     * @inheritDoc
     */
    public function getFormattedPrice (): string
    {
        return $this->priceCurrency->format($this->getPrice(), true, 2);
    }
    /** Utility Methods  **/

    /**
     * @return void
     */
    public function mockData(): void
    {
        $this->entity_id = 1001;
        $this->name = 'ACID 1400CC';
        $this->sku = 'CI-ACI-B140N';
        $this->msrp = 213.40;
        $this->percentOff = 18.0;
        $this->price = 174.99;
    }
    /**
     * @inheritDoc
     */
    public function toJson (): string
    {
        $properties = $this->toArray();
        $properties['msrp'] = $this->getFormattedMsrp();
        $properties['percent_off'] = $this->getFormattedPercentOff();
        $properties['price'] = $this->getFormattedPrice();
        return $this->jsonSerializer->serialize($properties);
    }

    /**
     * @inheritDoc
     */
    public function toArray (): array
    {
        return [
            'entity_id' => $this->getEntityId(),
            'name' => $this->getSku(),
            'sku' => $this->getSku(),
            'msrp' => $this->getMsrp(),
            'percent_off' => $this->getPercentOff(),
            'price' => $this->getPrice()

        ];
    }
}
