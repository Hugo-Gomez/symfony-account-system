<?php

namespace AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity(repositoryClass="AccountBundle\Repository\AccountRepository")
 */
class Account
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="balance", type="integer")
     */
    private $balance;

    /**
     * @ORM\OneToMany(targetEntity="Transaction", mappedBy="startAccount")
     */
    private $transaction;

    /**
     * @ORM\OneToMany(targetEntity="Transaction", mappedBy="endAccount")
     */
    private $endTransaction;

    /**
     * @ORM\ManyToMany(targetEntity="Account", indexBy="id")
     * @ORM\JoinTable(name="account_beneficiary", joinColumns={@ORM\JoinColumn(name="account_id", referencedColumnName="id")}, inverseJoinColumns={@ORM\JoinColumn(name="beneficiary_id", referencedColumnName="id")})
     */
    private $beneficiary;

    public function __construct()
    {
        $this->transaction = new ArrayCollection();
        $this->endTransaction = new ArrayCollection();
        $this->beneficiary = new ArrayCollection();
    }


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
     * @return Account
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
     * Set name
     *
     * @param string $name
     *
     * @return Account
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set balance
     *
     * @param integer $balance
     *
     * @return Account
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set transaction
     *
     * @param ArrayCollection $transaction
     *
     * @return Account
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return ArrayCollection
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set endTransaction
     *
     * @param ArrayCollection $transaction
     *
     * @return Account
     */
    public function setEndTransaction($endTransaction)
    {
        $this->endTransaction = $endTransaction;

        return $this;
    }

    /**
     * Get endTransaction
     *
     * @return ArrayCollection
     */
    public function getEndTransaction()
    {
        return $this->endTransaction;
    }

    /**
     * Set beneficiary
     *
     * @param ArrayCollection $transaction
     *
     * @return Account
     */
    public function setBeneficiary($beneficiary)
    {
        $this->beneficiary = $beneficiary;

        return $this;
    }

    /**
     * Get beneficiary
     *
     * @return ArrayCollection
     */
    public function getBeneficiary()
    {
        return $this->beneficiary;
    }

    public function addBeneficiary($beneficiary)
    {
        $this->beneficiary[$beneficiary->getId()] = $beneficiary;
    }
}
