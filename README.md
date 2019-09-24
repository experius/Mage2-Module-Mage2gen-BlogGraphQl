# Mage2 Module Mage2gen BlogGraphQl

    ``mage2gen/module-bloggraphql``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities

GraphQl implementation of the Aheadworks Blog module to make it PWA ready!

The base code has been generated with Mage2gen and the following manual changes were made:

 - getPost in the DataProvider
 - resolve in the Post Resolver

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Mage2gen`
 - Enable the module by running `php bin/magento module:enable Mage2gen_BlogGraphQl`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require mage2gen/module-bloggraphql`
 - enable the module by running `php bin/magento module:enable Mage2gen_BlogGraphQl`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Specifications

 - GraphQl Endpoint
	- Post


## Additional information:

 - Mage2gen BlogPostPage PWA Studio Package
    - https://github.com/experius/Mage2gen-BlogPostPage-PWA-Studio-Package
 - Aheadworks Blog
    - https://ecommerce.aheadworks.com/magento-2-extensions/blog
    - Aheadworks also added GraphQl Support (but has no route for RootComponent)
        https://media.aheadworks.com/catalog/Blog/aheadworks-m2-module-blog-graph-ql-2.5.0.zip




