<?php

namespace Extellient\MailBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Extellient\MailBundle\Entity\Mail;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class MailRepository.
 */
class MailRepository extends ServiceEntityRepository
{
    /**
     * MailRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mail::class);
    }

    /**
     * @param null $sendDate
     *
     * @return array
     */
    public function findBySentDate($sendDate = null)
    {
        return parent::findBy([
            'sentDate' => $sendDate,
            'sentError' => false,
        ]);
    }
}
