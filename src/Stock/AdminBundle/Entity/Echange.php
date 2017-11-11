<?php

namespace Stock\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echange
 *
 * @ORM\Table(name="echange", indexes={@ORM\Index(name="fk_echange_branche1_idx", columns={"from_branche_id"}), @ORM\Index(name="fk_echange_branche2_idx", columns={"to_branche_id"}), @ORM\Index(name="fk_echange_produit1_idx", columns={"produit_id"})})
 * @ORM\Entity
 */
class Echange
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

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
     *   @ORM\JoinColumn(name="to_branche_id", referencedColumnName="id")
     * })
     */
    private $toBranche;

    /**
     * @var \Stock\AdminBundle\Entity\Branche
     *
     * @ORM\ManyToOne(targetEntity="Stock\AdminBundle\Entity\Branche")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="from_branche_id", referencedColumnName="id")
     * })
     */
    private $fromBranche;


}
