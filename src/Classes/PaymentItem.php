<?php

namespace LaravelDaily\Invoices\Classes;

use Exception;
use LaravelDaily\Invoices\Services\PricingService;

/**
 * Class PaymentItem
 */
class PaymentItem
{
    /**
     * @var string
     */
    public $referance;


    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $user;
    /**
     * @var float
     */
    public $amount;

    /**
     * @var
     */
    public $created_at;

    /**
     * PaymentItem constructor.
     */
    public function __construct()
    {
        $this->amount = 0.0;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function referance(string $ref)
    {
        $this->referance = $ref;

        return $this;
    }

    /**
     * @param string $method
     * @return $this
     */
    public function method(string $method)
    {
        $this->method = $method;

        return $this;
    }


    /**
     * @param float $amount
     * @return $this
     */
    public function amount(float $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @param string $user
     * @return $this
     */
    public function user(string $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @param  $created_at
     * @return $this
     */
    public function created_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @param float $amount
     * @param bool $byPercent
     * @return $this
     * @throws Exception
     */
    // public function discount(float $amount, bool $byPercent = false)
    // {
    //     if ($this->hasDiscount()) {
    //         throw new Exception('InvoiceItem: unable to set discount twice.');
    //     }

    //     $this->discount                            = $amount;
    //     ! $byPercent ?: $this->discount_percentage = $amount;

    //     return $this;
    // }

    // /**
    //  * @param float $amount
    //  * @param bool $byPercent
    //  * @return $this
    //  * @throws Exception
    //  */
    // public function tax(float $amount, bool $byPercent = false)
    // {
    //     if ($this->hasTax()) {
    //         throw new Exception('InvoiceItem: unable to set tax twice.');
    //     }

    //     $this->tax                            = $amount;
    //     ! $byPercent ?: $this->tax_percentage = $amount;

    //     return $this;
    // }

    // /**
    //  * @param float $amount
    //  * @return $this
    //  * @throws Exception
    //  */
    // public function discountByPercent(float $amount)
    // {
    //     $this->discount($amount, true);

    //     return $this;
    // }

    // /**
    //  * @param float $amount
    //  * @return $this
    //  * @throws Exception
    //  */
    // public function taxByPercent(float $amount)
    // {
    //     $this->tax($amount, true);

    //     return $this;
    // }

    // /**
    //  * @return bool
    //  */
    // public function hasUnits()
    // {
    //     return ! is_null($this->units);
    // }

    // /**
    //  * @return bool
    //  */
    // public function hasDiscount()
    // {
    //     return $this->discount !== 0.0;
    // }

    // /**
    //  * @return bool
    //  */
    // public function hasTax()
    // {
    //     return $this->tax !== 0.0;
    // }

    // /**
    //  * @param int $decimals
    //  * @return $this
    //  */
    // public function calculate(int $decimals)
    // {
    //     if (! is_null($this->sub_total_price)) {
    //         return $this;
    //     }

    //     $this->sub_total_price = PricingService::applyQuantity($this->price_per_unit, $this->quantity, $decimals);
    //     $this->calculateDiscount($decimals);
    //     $this->calculateTax($decimals);

    //     return $this;
    // }

    // /**
    //  * @param int $decimals
    //  */
    // public function calculateDiscount(int $decimals): void
    // {
    //     $subTotal = $this->sub_total_price;

    //     if ($this->discount_percentage) {
    //         $newSubTotal = PricingService::applyDiscount($subTotal, $this->discount_percentage, $decimals, true);
    //     } else {
    //         $newSubTotal = PricingService::applyDiscount($subTotal, $this->discount, $decimals);
    //     }

    //     $this->sub_total_price = $newSubTotal;
    //     $this->discount        = $subTotal - $newSubTotal;
    // }

    // /**
    //  * @param int $decimals
    //  */
    // public function calculateTax(int $decimals): void
    // {
    //     $subTotal = $this->sub_total_price;

    //     if ($this->tax_percentage) {
    //         $newSubTotal = PricingService::applyTax($subTotal, $this->tax_percentage, $decimals, true);
    //     } else {
    //         $newSubTotal = PricingService::applyTax($subTotal, $this->tax, $decimals);
    //     }

    //     $this->sub_total_price = $newSubTotal;
    //     $this->tax             = $newSubTotal - $subTotal;
    // }

    /**
     * @throws Exception
     */
    public function validate()
    {
        if (is_null($this->referance)) {
            throw new Exception('InvoiceItem: ref not defined.');
        }

        if (is_null($this->amount)) {
            throw new Exception('InvoiceItem: amount not defined.');
        }
    }
}
