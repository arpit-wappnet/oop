<?php

abstract class Account {
    protected $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    abstract public function deposit($amount);
    abstract public function withdraw($amount);

    public function getBalance() {
        return $this->balance;
    }
}

class SavingsAccount extends Account {
    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($this->balance - $amount >= 0) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds\n";
        }
    }
}

class CheckingAccount extends Account {
    private $overdraft_limit;

    public function __construct($balance, $overdraft_limit) {
        parent::__construct($balance);
        $this->overdraft_limit = $overdraft_limit;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($this->balance - $amount >= -$this->overdraft_limit) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds\n";
        }
    }
}

$savings_account = new SavingsAccount(1000);
$checking_account = new CheckingAccount(500, 100);

$savings_account->deposit(500);
$checking_account->withdraw(600);

echo "Savings Account Balance: $" . $savings_account->getBalance() . "\n";
echo "Checking Account Balance: $" . $checking_account->getBalance() . "\n";

?>
