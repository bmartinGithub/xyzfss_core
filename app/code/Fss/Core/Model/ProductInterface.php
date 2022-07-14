<?php

declare(strict_types=1);

namespace Fss\Core\Model;

use InvalidArgumentException;

interface ProductInterface
{
    /**
     * @return string
     * @throws InvalidArgumentException
     */
    public function toJson():string;

    /**
     * @return array
     */
    public function toArray():array;

    /**
     * @return int
     */
    public function getEntityId():int;
    /**
     * @return string
     */
    public function getSku():string;

    /**
     * @return string
     */
    public function getName():string;

    /**
     * @return float
     */
    public function getMsrp():float;

    /**
     * @return string
     */
    public function getFormattedMsrp():string;

    /**
     * @return float
     */
    public function getPercentOff():float;

    /**
     * @return string
     */
    public function getFormattedPercentOff():string;

    /**
     * @return float
     */
    public function getPrice():float;

    /**
     * @return string
     */
    public function getFormattedPrice():string;
}
