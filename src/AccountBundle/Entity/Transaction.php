<?php

namespace AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="AccountBundle\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="num", type="integer", unique=true)
     */
    private $num;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Account", inversedBy="transaction")
     * @ORM\JoinColumn(name="startAccountId", referencedColumnName="id")
     */
    private $startAccount;

    /**
     * @ORM\ManyToOne(targetEntity="Account", inversedBy="endTransaction")
     * @ORM\JoinColumn(name="endAccountId", referencedColumnName="id")
     */
    private $endAccount;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set num
     *
     * @param integer $num
     *
     * @return Transaction
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return Transaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Transaction
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set startAccount
     *
     * @param \Account $account
     *
     * @return Transaction
     */
    public function setStartAccount($account)
    {
        $this->startAccount = $account;

        return $this;
    }

    /**
     * Get startAccount
     *
     * @return \Account
     */
    public function getStartAccount()
    {
        return $this->startAccount;
    }

    /**
     * Set endAccount
     *
     * @param \Account $account
     *
     * @return Transaction
     */
    public function setEndAccount($account)
    {
        $this->endAccount = $account;

        return $this;
    }

    /**
     * Get endAccount
     *
     * @return \Account
     */
    public function getEndAccount()
    {
        return $this->endAccount;
    }
}
