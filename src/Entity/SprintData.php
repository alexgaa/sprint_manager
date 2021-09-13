<?php

namespace “AppEntity”;

use Doctrine\ORM\Mapping as ORM;

/**
 * SprintData
 *
 * @ORM\Table(name="sprint_data")
 * @ORM\Entity
 */
class SprintData
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="script_name", type="string", length=25, nullable=false)
     */
    private $scriptName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_time", type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="string", length=10, nullable=false)
     */
    private $result;


}
