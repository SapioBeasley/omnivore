# Omnivore classes and functions

Place these values into your .ENV
```
OMNIVORE_API_URL
OMNIVORE_API_KEY
OMNIVORE_LOCATION_ID
ES_FROM
ES_SIZE
OMNIVORE_API_URL
```

Add the following into the construct that will utilize the wrapper
```php
function locationList()
{
  $this->omnivoreGeneral = new OmnivoreGeneral;

  $this->omnivoreTickets = new OmnivoreTickets;

  $this->omnivoreTables = new OmnivoreTables;
}
```

## Class OmnivoreTickets

Interact with tickets of claimed locations from the POS.

### Available Functions

List tickets for location
```php
$ticketList = $this->omnivoreTickets->ticketList($locationId)
return response()->json($ticketList);
```

Open a new ticket
```php
$ticketOpen = $this->omnivoreTickets->ticketOpen($locationId, $content)
return response()->json($ticketOpen);
```

Retrieve data for a specific ticket
```php
$ticketRetrieve = $this->omnivoreTickets->ticketRetrieve($locationId, $ticketId);
return response()->json($ticketRetrieve);
```

Void a locations ticket
```php
$ticketVoid = $this->omnivoreTickets->ticketVoid($locationId, $ticketId)
return response()->json($ticketVoid);
```

List discounts for a ticket
```php
$ticketDiscountList = $this->omnivoreTickets->ticketDiscountList($locationId, $ticketId)
return response()->json($ticketDiscountList);
```

Apply a discount to a ticket
```php
$ticketDiscountApply = $this->omnivoreTickets->ticketDiscountApply($locationId, $ticketId, $discount, $value)
return response()->json($ticketDiscountApply);
```

Retrieve a discount that was applied to a ticket
```php
$ticketDiscountRetrieve = $this->omnivoreTickets->ticketDiscountRetrieve($locationId, $ticketId, $ticketDiscountId)
return response()->json($ticketDiscountRetrieve);
```
List items on a ticket
```php
$ticketItemList = $this->omnivoreTickets->ticketItemList($locationId, $ticketId)
return respons$ticketItemListe()->json();
```

Add an item to a ticket
```php
$ticketItemAdd = $this->omnivoreTickets->ticketItemAdd($locationId, $ticketId, $content)
return respon$ticketItemAddse()->json();
```

Retrieve an item from a ticket
```php
$ticketItemRetrieve = $this->omnivoreTickets->ticketItemRetrieve($locationId, $ticketId, $ticketItemId)
return response()-$ticketItemRetrieve>json();
```

Void an item from a ticket
```php
$ticketItemVoid = $this->omnivoreTickets->ticketItemVoid($locationId, $ticketId, $ticketItemId)
return respons$ticketItemVoide()->json();
```

List modifiers form a ticket
```php
$ticketItemModifierList = $this->omnivoreTickets->ticketItemModifierList($locationId, $ticketId, $ticketItemId)
return response()->jso$ticketItemModifierListn();
```

Retrieve a modifier form a ticket
```php
$ticketItemModifierRetrieve = $this->omnivoreTickets->ticketItemModifierRetrieve($locationId, $ticketId, $ticketItemId, $ticketItemModifierId)
return response()->json($ticketItemModifierRetrieve);
```

List dicounts on a ticket
```php
$ticketItemDiscountList = $this->omnivoreTickets->ticketItemDiscountList($locationId, $ticketId, $ticketItemId)
return response()->jso$ticketItemDiscountListn();
```

Retrieve a discount from a ticket
```php
$ticketItemDiscountRetrieve = $this->omnivoreTickets->ticketItemDiscountRetrieve($locationId, $ticketId, $ticketItemId, $ticketItemDiscountId)
return response()->json($ticketItemDiscountRetrieve);
```

List payments
```php
$paymentList = $this->omnivoreTickets->paymentList($locationId, $ticketId)
return resp$paymentListonse()->json();
```

Retrieve a payment
```php
$paymentRetrieve = $this->omnivoreTickets->paymentRetrieve($locationId, $ticketId, $paymentId)
return response$paymentRetrieve()->json();
```

Make a payment where a card is not present
```php
$paymentCardNotPresent = $this->omnivoreTickets->paymentCardNotPresent($locationId, $ticketId, $content)
return response()->js$paymentCardNotPresenton();
```

Make a payment where a card is present
```php
$paymentCardPresent = $this->omnivoreTickets->paymentCardPresent($locationId, $ticketId, $content)
return response()-$paymentCardPresent>json();
```

Make a payment with a 3rd party
```php
$payment3rdParty = $this->omnivoreTickets->payment3rdParty($locationId, $ticketId, $content)
return response$payment3rdParty()->json();
```

Make a payment with a card
```php
$paymentGiftCard = $this->omnivoreTickets->paymentGiftCard($locationId, $ticketId, $content)
return response$paymentGiftCard()->json();
```

Make a payment with cash
```php
$paymentCash = $this->omnivoreTickets->paymentCash($locationId, $ticketId, $content)
return resp$paymentCashonse()->json();
```

# Class OmnivoreTables

Interact with tables of claimed locations from the POS.

### Available Functions

```php
function tableList($locationId)
return response()->json(
```

```php
function tableRetrieve($locationId, $tableId)
return response()->json(
```

# Class OmnivoreGeneral

Interact with general labeled actions of claimed locations from the POS.

### Available Functions

List all locations claimed.
```php
$locations = $this->omnivoreGeneral->locationList();
return response()->json($locations);
```

```
function locationRetrieve($locationId)
function employeeList($locationId)
function employeeRetrieve($locationId, $employeeId)
function orderTypeList($locationId)
function orderTypeRetrieve($locationId, $orderTypeId)
function tenderTypeList($locationId)
function tenderTypeRetrieve($locationId, $tenderTypeId)
function revenueCenterList($locationId)
function revenueCenterRetrieve($locationId, $revenueCenterId)
function discountList($locationId)
function discountRetrieve($locationId, $discountId)
function menu($locationId)
function categoryList($locationId)
function categoryRetrieve($locationId, $categoryId)
function menuItemList($locationId)
function menuItemRetrieve($locationId, $menuItemId)
function modifierList($locationId)
function modifierRetrieve($locationId, $modifierId)
function modifierGroupList($locationId, $menuItemId)
function modifierGroupRetrieve($locationId, $menuItemId, $modifierGroupId)
```
