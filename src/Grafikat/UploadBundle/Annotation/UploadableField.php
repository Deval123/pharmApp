<?php

namespace  Grafikat\UploadBundle\Annotation;


use  Doctrine\Common\Annotations\Annotation\Target;
/**
 * @Annotation
 * @Target("PROPERTY")
 */
class UploadableField{


    /*
     * @var string
     */
    private $path;

    /*
     * @var string
     */
    private $filename;

    public function __construct(array $options)
    {
        //dump($options);
        if(empty($options['filename'])){
            throw new \InvalidArgumentException("l'annotation UploadableField doit avoir un attribut 'filename'");
        }

        if(empty($options['path'])){
            throw new \InvalidArgumentException("l'annotation UploadableField doit avoir un attribut 'path'");
        }
        $this->filename = $options['filename'];
        $this->path = $options['path'];
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }


}