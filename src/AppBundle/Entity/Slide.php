<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @ORM\Table(name="slide")
 * @Vich\Uploadable
 */
class Slide
{
        /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

  /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;
    // ...

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image2;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image2")
     * @var File
     */
    private $imageFile2;

  /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt2;
    // ...

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image3;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image3")
     * @var File
     */
    private $imageFile3;

  /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt3;
    // ...    
        public function getId()
    {
        return $this->id;
    }
  
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
    
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }
    
//

public function setImageFile2(File $image2 = null)
{
    $this->imageFile2 = $image2;

    if ($image2) {

        $this->updatedAt2 = new \DateTime('now');
    }
}

public function getImageFile2()
{
    return $this->imageFile2;
}

public function setImage2($image2)
{
    $this->image2 = $image2;
}

public function getImage2()
{
    return $this->image2;
}

//

public function setImageFile3(File $image3 = null)
{
    $this->imageFile3 = $image3;

    if ($image3) {

        $this->updatedAt3 = new \DateTime('now');
    }
}

public function getImageFile3()
{
    return $this->imageFile3;
}

public function setImage3($image3)
{
    $this->image3 = $image3;
}

public function getImage3()
{
    return $this->image3;
}
}