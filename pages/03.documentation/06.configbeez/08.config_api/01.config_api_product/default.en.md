---
title: 'Products API'
module_subtitle: "Retrieve product reviews through the product API"
template: docs
taxonomy:
    category: [docs]
    tag: [pro]
    
---

[doc-callout type="note" title="Earlier module settings"]
For settings in the current app, start with [System](/app-system). [Browse the legacy reference](/legacy).
[/doc-callout]

Display reviews beside a product mentioned on another page of your shop. The private product-reviews endpoint can return review records or HTML rendered by a shop template. Call it from your server so the API key stays out of the page source.

Choose HTML when the shop should control the review layout. Choose review records when the page calling the endpoint already has its own presentation for reviews.

## Request

Send a GET request to `/mailhive.php/api/private/v1.0/product/reviews/` on your shop over HTTPS. Provide `apikey` and a positive integer `products_id`. Results are ordered by review ID, newest first. With no template, a valid product with no matching reviews returns an empty result list. A missing or zero product ID returns `null` in `result`.

| Optional parameter | What it changes |
| --- | --- |
| `languages_id` | Return reviews for the selected language ID. |
| `count` | Limit the number of reviews. |
| `rating_min` | Set the minimum star rating. |
| `template` | Render the selected Smarty template. Omit the parameter to receive review records. |

## Embed the result

In a server-side PHP page with the cURL extension, set `MAILBEEZ_SHOP_URL` to the shop’s HTTPS base URL and `MAILBEEZ_API_KEY` to its private key in the server environment. The example requests up to three reviews of four stars or more for product 112. It uses the shop’s `productreviews` template.

```php
$shopUrl = getenv('MAILBEEZ_SHOP_URL');
$apiKey = getenv('MAILBEEZ_API_KEY');
if (!$apiKey || !$shopUrl || parse_url($shopUrl, PHP_URL_SCHEME) !== 'https') {
    throw new RuntimeException('Configure the HTTPS shop URL and API key.');
}

$query = http_build_query([
    'apikey' => $apiKey,
    'products_id' => 112,
    'count' => 3,
    'rating_min' => 4,
    'template' => 'productreviews',
]);
$url = rtrim($shopUrl, '/') . '/mailhive.php/api/private/v1.0/product/reviews/?' . $query;
$request = curl_init($url);
curl_setopt_array($request, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 5,
]);
$response = curl_exec($request);
$status = curl_getinfo($request, CURLINFO_HTTP_CODE);
if ($status !== 200 || $response === false) {
    throw new RuntimeException('Could not retrieve the product reviews.');
}

$data = json_decode($response, true);
if (!isset($data['result']) || !is_string($data['result'])) {
    throw new RuntimeException('Expected reviews rendered by the shop template.');
}
echo $data['result'];
```

For a custom layout, copy `default_productreviews.tpl.html` to `productreviews.tpl.html` in `mailhive/configbeez/config_api_product/apibeez/api_private_product_reviews/templates/`. Edit the copy so a module update can replace the default safely. The original example client is in the neighbouring `_client/` directory. That client disables TLS certificate checks. The example above uses cURL’s normal certificate verification.
