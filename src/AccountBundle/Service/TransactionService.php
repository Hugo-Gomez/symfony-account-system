<?php

namespace AccountBundle\Service;

use AccountBundle\Entity\Account;
use AccountBundle\Entity\Transaction;

class TransactionService
{
  public function calculAccountBalance(Account $account, $amount, $start = true)
  {
    $balance = $account->getBalance();
    if ($start)
    {
      $balance = $balance - $amount;
    }
    else
    {
        $balance = $balance + $amount;
    }
    $account->setBalance($balance);
  }
}
