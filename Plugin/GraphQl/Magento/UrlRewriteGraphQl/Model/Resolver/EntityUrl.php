<?php


namespace Mage2gen\BlogGraphQl\Plugin\GraphQl\Magento\UrlRewriteGraphQl\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class EntityUrl
{

    private $postFactory;

    /**
     * @param \Aheadworks\Blog\Model\PostFactory $postFactory
     */
    public function __construct(
        \Aheadworks\Blog\Model\PostFactory $postFactory
    ) {
        $this->postFactory = $postFactory;
    }

    /**
     * @param \Magento\UrlRewriteGraphQl\Model\Resolver\EntityUrl $subject
     * @param $result
     * @param Field $field
     * @param ContextInterface $context
     * @param ResolveInfo $info
     * @param array | null $value
     * @param array | null $args
     */
    public function afterResolve(
        \Magento\UrlRewriteGraphQl\Model\Resolver\EntityUrl $subject,
        $result,
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        if (!$result) {
            $url = $args['url'];
            if (substr($url, 0, 1) === '/' && $url !== '/') {
                $url = ltrim($url, '/');
            }
            if ($id = $this->getIdByUrlKey($url)) {
                $result = [
                    'id' => $id,
                    'canonical_url' => "aw_blog/post/view/post_id/{$id}",
                    'relative_url' => "aw_blog/post/view/post_id/{$id}",
                    'type' => "BLOG_POST_PAGE"
                ];
            }
        }

        return $result;
    }

    /**
     * Retrieves entity ID by URL-Key
     *
     * @param string $urlKey
     * @return int|null
     */
    public function getIdByUrlKey($urlKey)
    {
        /** @var \Aheadworks\Blog\Model\Post $post */
        $post = $this->postFactory->create();
        $post->load($urlKey, 'url_key');
        return $post->getId();
    }
}
