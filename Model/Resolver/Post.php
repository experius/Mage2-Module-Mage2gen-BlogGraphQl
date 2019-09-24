<?php


namespace Mage2gen\BlogGraphQl\Model\Resolver;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Post implements ResolverInterface
{

    private $postDataProvider;

    /**
     * @param DataProvider\Post $postRepository
     */
    public function __construct(DataProvider\Post $postDataProvider)
    {
        $this->postDataProvider = $postDataProvider;
    }

    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        // START CUSTOM CODE
        if (!isset($args['post_id']) || !$args['post_id']) {
            throw new GraphQlInputException(__('"post_id" of Aheadworks Blog should be specified'));
        }
        $postData = $this->postDataProvider->getPost($args['post_id']);
        // END CUSTOM CODE
        // DISABLED BECAUSE post_id argument was missing $postData = $this->postDataProvider->getPost();
        return $postData;
    }
}
