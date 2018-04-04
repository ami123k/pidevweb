<?php

namespace BonPlanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BonPlanBundle;
/**
 * Publicite
 *
 * @ORM\Table(name="publicite", indexes={@ORM\Index(name="id_etablissement", columns={"id_etablissement"})})
 * @ORM\Entity
 */
class Publicite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_publicite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPublicite;

    /**
     * @var string
     *
     * @ORM\Column(name="description_publicite", type="string", length=2000, nullable=false)
     */
    private $descriptionPublicite;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_publicite", type="string", length=2000, nullable=false)
     */
    private $photoPublicite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=20, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_click", type="integer", nullable=true)
     */
    private $nbrClick;

    /**
     * @var BonPlanBundle\Entity\Etablissement
     *
     * @ORM\ManyToOne(targetEntity="Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etablissement", referencedColumnName="id_etablissement")
     * })
     */
    private $idEtablissement;


}

