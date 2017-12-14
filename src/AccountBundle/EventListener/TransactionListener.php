<?php
namespace AccountBundle\EventListener;

use AccountBundle\Entity\Transaction;
use Doctrine\ORM\Events;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\EventDispatcher\EventsSubscriberInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Common\EventSubscriber;
use AccountBundle\Service\TransactionService;

class TransactionListener implements EventSubscriber
{
    private $transactionSv;

    public function __construct(TransactionService $transactionSv)
    {
      $this->transactionSv = $transactionSv;
    }

    public function getSubscribedEvents()
    {
        return array(
            Events::preUpdate,
            Events::prePersist,
        );
    }

    public function preUpdate(preUpdateEventArgs $event)
    {
      $this->handleEvent($event);
    }

    public function prePersist(LifecycleEventArgs $event)
    {
      $this->handleEvent($event);
    }

    private function handleEvent($event) {
      $entity = $event->getEntity();
      if ($entity instanceof Transaction)
      {
        $this->transactionSv->calculAccountBalance($entity->getStartAccount(), $entity->getAmount());
        $this->transactionSv->calculAccountBalance($entity->getEndAccount(), $entity->getAmount(), false);
      }
    }
}
