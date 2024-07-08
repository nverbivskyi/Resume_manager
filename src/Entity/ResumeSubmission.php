<?php

namespace App\Entity;

use App\Repository\ResumeSubmissionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResumeSubmissionRepository::class)]
class ResumeSubmission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Resume::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $resume;

    #[ORM\Column(type: 'datetime')]
    private $submissionDate;

    #[ORM\Column(type: 'string', length: 255)]
    private $companyName;

    #[ORM\Column(type: 'boolean')]
    private $positiveFeedback;
}
