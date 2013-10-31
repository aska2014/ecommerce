# ECommerce system
These set of classes creates a base ecommerce system for you to use

## Usage example

```php

// 1. Create new product with different languages

$product = new Product(array('price' => '232', 'title' => 'me', 'language' => 'en'));

$category->save($product);

// Add product languages
$product->update(array('title' => 'moi', 'language' => 'fr'));
$product->update(array('title' => 'мне', 'language' => 'ru'));

// See image documentation to know how to create images
$product->replaceImage($image, 'main');

//-------------------------------------------------------------------------------------//


// 1. Create new order

$order = new Order();

$order->addProduct($product1);
$order->setUserInfo($userInfo); // See membership documentation for more.

//-------------------------------------------------------------------------------------//


```