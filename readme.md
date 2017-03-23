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
$tickets = $this->omnivoreTickets->ticketList($locationId)
return response()->json($tickets);
```

Open a new ticket
```
$ticket = $this->omnivoreTickets->ticketOpen($locationId, $content)
return response()->json($ticket);
```

Retrieve data for a specific ticket
```php
$ticket = $this->omnivoreTickets->ticketRetrieve($locationId, $ticketId);
return response()->json($ticket);
```

Void a locations ticket
```php
$ticket = $this->omnivoreTickets->ticketVoid($locationId, $ticketId)
return response()->json($ticket);
```

List discounts for a ticket
```php
$discounts = $this->omnivoreTickets->ticketDiscountList($locationId, $ticketId)
return response()->json($discounts);
```

Apply a discount to a ticket
```php
$discount = $this->omnivoreTickets->ticketDiscountApply($locationId, $ticketId, $discount, $value)
return response()->json($discount);
```

Retrieve a discount that was applied to a ticket
```php
$discount = $this->omnivoreTickets->ticketDiscountRetrieve($locationId, $ticketId, $ticketDiscountId)
return response()->json($discount);
```

```php
function ticketItemList($locationId, $ticketId)
return response()->json(
```

```php
function ticketItemAdd($locationId, $ticketId, $content)
return response()->json(
```

```php
function ticketItemRetrieve($locationId, $ticketId, $ticketItemId)
return response()->json(
```

```php
function ticketItemVoid($locationId, $ticketId, $ticketItemId)
return response()->json(
```

```php
function ticketItemModifierList($locationId, $ticketId, $ticketItemId)
return response()->json(
```

```php
function ticketItemModifierRetrieve($locationId, $ticketId, $ticketItemId, $ticketItemModifierId)
return response()->json(
```

```php
function ticketItemDiscountList($locationId, $ticketId, $ticketItemId)
return response()->json(
```

```php
function ticketItemDiscountRetrieve($locationId, $ticketId, $ticketItemId, $ticketItemDiscountId)
return response()->json(
```

```php
function paymentList($locationId, $ticketId)
return response()->json(
```

```php
function paymentRetrieve($locationId, $ticketId, $paymentId)
return response()->json(
```

```php
function paymentCardNotPresent($locationId, $ticketId, $content)
return response()->json(
```

```php
function paymentCardPresent($locationId, $ticketId, $content)
return response()->json(
```

```php
function payment3rdParty($locationId, $ticketId, $content)
return response()->json(
```

```php
function paymentGiftCard($locationId, $ticketId, $content)
return response()->json(
```

```php
function paymentCash($locationId, $ticketId, $content)
return response()->json(
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
