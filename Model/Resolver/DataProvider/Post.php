<?php


namespace Mage2gen\BlogGraphQl\Model\Resolver\DataProvider;

class Post
{

    private $postRepository;

    /**
     * @param \Aheadworks\Blog\Api\PostRepositoryInterface $postRepository
     */
    public function __construct(
        \Aheadworks\Blog\Api\PostRepositoryInterface $postRepository
    ) {
        $this->postRepository = $postRepository;
    }

    /* GENERATED FUNCTION
    public function getPost()
    {
        return 'proviced data';
    } */

    /* CUSTOM FUNCTION */
    public function getPost($id)
    {
        $post = $this->postRepository->get($id);
        return [
            'post_id' => $post->getId(),
            'title' => $post->getTitle(),
            'featured_image_file' => $post->getFeaturedImageFile(),
            'content' => $post->getContent(),
        ];
    }
}
