<?php

namespace Stock\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contient
 *
 * @ORM\Table(name="contient", indexes={@ORM\Index(name="fk_contient_produit_idx", columns={"produit_id"}), @ORM\Index(name="fk_contient_branche1_idx", columns={"branche_id"})})
 * @ORM\Entity
 */
class Contient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Stock\AdminBundle\Entity\Produit
     *
     * @ORM\ManyToOne(targetEntity="Stock\AdminBundle\Entity\Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     * })
     */
    private $produit;

    /**
     * @var \Stock\AdminBundle\Entity\Branche
     *
     * @ORM\ManyToOne(targetEntity="Stock\AdminBundle\Entity\Branche")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="branche_id", referencedColumnName="id")
     * })
     */
    private $branche;


}
