<?php

namespace Extellient\MailBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Extellient\MailBundle\Entity\MailTemplate;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class MailTemplateRepository.
 */
class MailTemplateRepository extends ServiceEntityRepository
{
    /**
     * MailTemplateRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MailTemplate::class);
    }

    /**
     * @param $code
     *
     * @return null|object
     */
    public function findOneByCode($code)
    {
        return parent::findOneBy([
            'code' => $code,
        ]);
    }
}
