<?php

abstract class PaymentMethod
{
    abstract public function processPayment($amount);
}

class CreditCard extends PaymentMethod
{
    private $cardNumber;
    private $expiryDate;
    private $cvv;

    public function __construct($cardNumber, $expiryDate, $cvv)
    {
        $this->cardNumber = $cardNumber;
        $this->expiryDate = $expiryDate;
        $this->cvv = $cvv;
    }

    public function processPayment($amount)
    {
        // validate card information and process the payment
        echo "Payment of $amount processed using credit card.\n";
    }
}

class PayPal extends PaymentMethod
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function processPayment($amount)
    {
        // log in to PayPal account and process the payment
        
        echo "Payment of $amount processed using PayPal.\n";
    }
}

class OnlineOrder
{
    private $items;
    private $totalAmount;
    private $paymentMethod;

    public function __construct($items, PaymentMethod $paymentMethod)
    {
        $this->items = $items;
        $this->totalAmount = array_sum($items);
        $this->paymentMethod = $paymentMethod;
    }

    public function processOrder()
    {
        $this->paymentMethod->processPayment($this->totalAmount);
        echo "Order processed.\n";
    }
}

$order = new OnlineOrder([10, 20, 30], new CreditCard("1234567812345678", "01/25", "123"));
$order->processOrder();

$order = new OnlineOrder([40, 50, 60], new PayPal("user@example.com", "password"));
$order->processOrder();

?>
