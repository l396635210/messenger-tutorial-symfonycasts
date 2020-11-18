<?php


namespace App\Message;


use App\Entity\ImagePost;

class AddPonkaToImage
{
    /**
     * @var ImagePost
     */
    private $imagePost;

    /**
     * AddPonkaToImage constructor.
     */
    public function __construct(ImagePost $imagePost)
    {
        $this->imagePost = $imagePost;
    }

    /**
     * @return ImagePost
     */
    public function getImagePost(): ImagePost
    {
        return $this->imagePost;
    }


}