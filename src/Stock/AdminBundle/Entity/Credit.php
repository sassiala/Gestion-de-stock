<?php

namespace Stock\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credit
 *
 * @ORM\Table(name="credit", indexes={@ORM\Index(name="fk_credit_client1_idx", columns={"client_id"}), @ORM\Index(name="fk_credit_transaction1_idx", columns={"transaction_id"})})
 * @ORM\Entity
 */
class Credit
{
    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", precision=10, scale=0, nullable=false)
     */
    private $solde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_emprunt", type="date", nullable=false)
     */
    private $dateEmprunt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rendu", type="date", nullable=true)
     */
    private $dateRendu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Stock\AdminBundle\Entity\Transaction
     *
     * @ORM\ManyToOne(targetEntity="Stock\AdminBundle\Entity\Transaction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transaction_id", referencedColumnName="id")
     * })
     */
    private $transaction;

    /**
     * @var \Stock\AdminBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="Stock\AdminBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;


}
