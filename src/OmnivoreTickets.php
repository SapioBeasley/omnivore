<?php namespace Sapioweb\Omnivore;

use Httpful\Request;

class OmnivoreTickets
{
    private $ES_FROM;

    private $ES_SIZE;

    private $omnivoreApiUrl;

    private $omnivoreApiKey;

    private $omnivoreLocationId;

    public function __construct()
    {
        $this->omnivoreApiUrl = env('OMNIVORE_API_URL');

        $this->omnivoreApiKey = env('OMNIVORE_API_KEY');

        $this->omnivoreLocationId = env('OMNIVORE_LOCATION_ID');

        $this->ES_FROM = env('ES_FROM', 0);

        $this->ES_SIZE = env('ES_SIZE', 10000);

        $this->client = new \GuzzleHttp\Client();
    }

    function ticketList($locationId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets', [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketOpen($locationId, $content)
    {
        $res = $this->client->request('POST', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets', [
            'json' => $content,
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketRetrieve($locationId, $ticketId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId, [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketVoid($locationId, $ticketId)
    {
        $res = $this->client->request('DELETE', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId, [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketDiscountList($locationId, $ticketId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/discounts', [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketDiscountApply($locationId, $ticketId, $discount, $value)
    {
        $res = $this->client->request('POST', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/discounts', [
            'body' => [
                'discount' => $discount,
                'value' => $value
            ],
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketDiscountRetrieve($locationId, $ticketId, $ticketDiscountId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/discounts/' . $ticketDiscountId, [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketItemList($locationId, $ticketId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/items', [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketItemAdd($locationId, $ticketId, $content)
    {
        $res = $this->client->request('POST', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/items', [
            'json' => $content,
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketItemRetrieve($locationId, $ticketId, $ticketItemId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/items/' . $ticketItemId, [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketItemVoid($locationId, $ticketId, $ticketItemId)
    {
        $res = $this->client->request('DELETE', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/items/' . $ticketItemId, [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketItemModifierList($locationId, $ticketId, $ticketItemId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/items/' . $ticketItemId . '/modifiers', [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketItemModifierRetrieve($locationId, $ticketId, $ticketItemId, $ticketItemModifierId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/items/' . $ticketItemId . '/modifiers/' . $ticketItemModifierId, [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketItemDiscountList($locationId, $ticketId, $ticketItemId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/items/' . $ticketItemId . '/discounts', [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function ticketItemDiscountRetrieve($locationId, $ticketId, $ticketItemId, $ticketItemDiscountId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/items/' . $ticketItemId . '/discount/' . $ticketItemDiscountId, [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function paymentList($locationId, $ticketId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/payments/', [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function paymentRetrieve($locationId, $ticketId, $paymentId)
    {
        $res = $this->client->request('GET', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/payments/' . $paymentId, [
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function paymentCardNotPresent($locationId, $ticketId, $content)
    {
        $res = $this->client->request('POST', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/payments', [
            'json' => $content,
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function paymentCardPresent($locationId, $ticketId, $content)
    {
        $res = $this->client->request('POST', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/payments', [
            'json' => $content,
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function payment3rdParty($locationId, $ticketId, $content)
    {
        $res = $this->client->request('POST', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/payments', [
            'json' => $content,
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function paymentGiftCard($locationId, $ticketId, $content)
    {
        $res = $this->client->request('POST', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/payments', [
            'json' => $content,
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }

    function paymentCash($locationId, $ticketId, $content)
    {
        $res = $this->client->request('POST', $this->omnivoreApiUrl . 'locations/' . $locationId . '/tickets/' . $ticketId . '/payments', [
            'json' => $content,
            'headers' => [
                'Api-Key' => $this->omnivoreApiKey
            ]
        ]);

        return json_decode($res->getBody());
    }
}
