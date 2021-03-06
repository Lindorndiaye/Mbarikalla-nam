<?php

namespace KEURGUI\immoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement.
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="KEURGUI\immoBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_paiement", type="date", nullable=true)
     */
    private $datePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="string", length=50)
     */
    private $montant;
    /**
     * @ORM\OneToOne(targetEntity="KEURGUI\immoBundle\Entity\contrat")
     */
    private $contrat;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datePaiement.
     *
     * @param \DateTime $datePaiement
     *
     * @return Paiement
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    /**
     * Get datePaiement.
     *
     * @return \DateTime
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * Set montant.
     *
     * @param string $montant
     *
     * @return Paiement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant.
     *
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set contrat
     *
     * @param \KEURGUI\immoBundle\Entity\contrat $contrat
     *
     * @return Paiement
     */
    public function setContrat(\KEURGUI\immoBundle\Entity\contrat $contrat = null)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return \KEURGUI\immoBundle\Entity\contrat
     */
    public function getContrat()
    {
        return $this->contrat;
    }
}
