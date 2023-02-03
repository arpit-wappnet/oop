<?php

class BankAccount
{
    private $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        } else {
            return false;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

class BankAccountHistory
{
    private $transactions = [];

    public function addTransaction(BankAccount $account, $amount, $type)
    {
        $this->transactions[] = [
            'amount' => $amount,
            'type' => $type,
            'balance' => $account->getBalance()
        ];
    }

    public function getTransactions()
    {
        return $this->transactions;
    }
}

$account = new BankAccount(100);
$history = new BankAccountHistory();

$account->deposit(50);
$history->addTransaction($account, 50, 'deposit');

$withdrawSuccess = $account->withdraw(75);
if ($withdrawSuccess) {
    $history->addTransaction($account, 75, 'withdraw');
}

print_r($history->getTransactions());

?>
