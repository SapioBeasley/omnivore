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

List tables of claimed locations
```php
$tableList = $this->omnivoreTables->tableList($locationId)
return response()->json($tableList);
```

Retrieve data for a specific table
```php
$tableRetrieve = $this->omnivoreTables->tableRetrieve($locationId, $tableId)
return response()->json($tableRetrieve);
```

# Class OmnivoreGeneral

Interact with general labeled actions of claimed locations from the POS.

### Available Functions

List all locations claimed.
```php
$locations = $this->omnivoreGeneral->locationList();
return response()->json($locations);
```

Retrieve information about a location
```php
$locationRetrieve = $this->omnivoreGeneral->locationRetrieve($locationId)
return response()->json($locationRetrieve);
```

List employees of a location
```php
$employeeList = $this->omnivoreGeneral->employeeList($locationId)
return response()->json($employeeList);
```

Retrieve data of a specific location
```php
$employeeRetrieve = $this->omnivoreGeneral->employeeRetrieve($locationId, $employeeId)
return response()->json($employeeRetrieve);
```

List location types
```php
$orderTypeList = $this->omnivoreGeneral->orderTypeList($locationId)
return response()->json($orderTypeList);
```

Retrieve a locations type
```php
$orderTypeRetrieve = $this->omnivoreGeneral->orderTypeRetrieve($locationId, $orderTypeId)
return response()->json($orderTypeRetrieve);
```

List the types of tender the location accepts
```php
$tenderTypeList = $this->omnivoreGeneral->tenderTypeList($locationId)
return response()->json($tenderTypeList);
```

Retrive the tender type
```php
$tenderTypeRetrieve = $this->omnivoreGeneral->tenderTypeRetrieve($locationId, $tenderTypeId)
return response()->json($tenderTypeRetrieve);
```

List a locations revenue centers
```php
$revenueCenterList = $this->omnivoreGeneral->revenueCenterList($locationId)
return response()->json($revenueCenterList);
```

Retrieve information of a payment center
```php
$revenueCenterRetrieve = $this->omnivoreGeneral->revenueCenterRetrieve($locationId, $revenueCenterId)
return response()->json($revenueCenterRetrieve);
```

List the discounts of a location
```php
$discountList = $this->omnivoreGeneral->discountList($locationId)
return response()->json($discountList);
```

Retrieve the discount
```php
$discountRetrieve = $this->omnivoreGeneral->discountRetrieve($locationId, $discountId)
return response()->json($discountRetrieve);
```

Grab the menu from POS
```php
$menu = $this->omnivoreGeneral->menu($locationId)
return response()->json($menu);
```

List the menu categories
```php
$categoryList = $this->omnivoreGeneral->categoryList($locationId)
return response()->json($categoryList);
```

Retrieve a category
```php
$categoryRetrieve = $this->omnivoreGeneral->categoryRetrieve($locationId, $categoryId)
return response()->json($categoryRetrieve);
```

List items in a menu
```php
$menuItemList = $this->omnivoreGeneral->menuItemList($locationId)
return response()->json($menuItemList);
```

Retrieve a menu item
```php
$menuItemRetrieve = $this->omnivoreGeneral->menuItemRetrieve($locationId, $menuItemId)
return response()->json($menuItemRetrieve);
```

List location modifiers 
```php
$modifierList = $this->omnivoreGeneral->modifierList($locationId)
return response()->json($modifierList);
```

Retrieve a modifier
```php
$modifierRetrieve = $this->omnivoreGeneral->modifierRetrieve($locationId, $modifierId)
return response()->json($modifierRetrieve);
```

List modifier groups
```php
$modifierGroupList = $this->omnivoreGeneral->modifierGroupList($locationId, $menuItemId)
return response()->json($modifierGroupList);
```

Retrieve a modifier group
```php
$modifierGroupRetrieve = $this->omnivoreGeneral->modifierGroupRetrieve($locationId, $menuItemId, $modifierGroupId)
return response()->json($modifierGroupRetrieve);
```
