<?php

namespace  Grafikat\UploadBundle\Listener;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\EventArgs;
use Doctrine\Common\EventSubscriber;
use Grafikat\UploadBundle\Annotation\UploadAnnotationReader;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Grafikat\UploadBundle\Annotation\UploadableField;
use Symfony\Component\HttpFoundation\File\File;
use Grafikat\UploadBundle\Handler\UploadHandler;


class  UploadSubscriber implements EventSubscriber {

    /*
     *@var UploadAnnotationReader
     */
    private $reader;

    /*
     * @var UploadHandler
     */
    private $handler;

    public  function __construct(UploadAnnotationReader $reader, UploadHandler $handler)
    {
        $this ->reader=$reader;
        $this ->handler=$handler;
    }

    /*
     * Return an array of events this subscriber wants to listen to.
     * @Return array
     */
    public function getSubscribedEvents()
    {
        // TODO: Implement getSubscribedEvents() method.

        return[
            'prePersist',
            'preUpdate',
            'postRemove',
            'postLoad'
        ];
    }

    /*
     * @param EventArgs $event
     * @throws \Exception
     */
    public function prePersist(EventArgs $event) {
        $this->preEvent($event);

    }

    /*
    * @param EventArgs $event
    * @throws \Exception
    */
    public function preUpdate(EventArgs $event) {
        $this->preEvent($event);
    }

    /*
    * @param EventArgs $event
    * @throws \Exception
    */
    private function preEvent(EventArgs $event) {
        //$this->preEvent($event);
        $entity = $event->getEntity();
        foreach ($this->reader->getUploadableFields($entity) as $property => $annotation){
            $this->handler->uploadFile($entity, $property, $annotation);

        }
        //dump($event);
        //throw new \Exception('Au secour');
    }

    public function postLoad(EventArgs $event){
        $entity = $event->getEntity();
        foreach ($this->reader->getUploadableFields($entity) as $property => $annotation){
            $this->handler->setFileFromFilename($entity, $property, $annotation);


        }
    }

    public function postRemove(EventArgs $event) {
        $entity = $event->getEntity();
        foreach ($this->reader->getUploadableFields($entity) as $property => $annotation) {
            $this->handler->removeFile($entity, $property);
        }
    }




}

