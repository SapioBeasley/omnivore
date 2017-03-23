## Class OmnivoreTickets

Place in ENV
```
env('OMNIVORE_API_URL');
env('OMNIVORE_API_KEY');
env('OMNIVORE_LOCATION_ID');
env('ES_FROM', 0);
env('ES_SIZE', 10000);
env('OMNIVORE_API_URL');
```

Available Functions

```
function ticketList($locationId)
function ticketOpen($locationId, $content)
function ticketRetrieve($locationId, $ticketId)
function ticketVoid($locationId, $ticketId)
function ticketDiscountList($locationId, $ticketId)
function ticketDiscountApply($locationId, $ticketId, $discount, $value)
function ticketDiscountRetrieve($locationId, $ticketId, $ticketDiscountId)
function ticketItemList($locationId, $ticketId)
function ticketItemAdd($locationId, $ticketId, $content)
function ticketItemRetrieve($locationId, $ticketId, $ticketItemId)
function ticketItemVoid($locationId, $ticketId, $ticketItemId)
function ticketItemModifierList($locationId, $ticketId, $ticketItemId)
function ticketItemModifierRetrieve($locationId, $ticketId, $ticketItemId, $ticketItemModifierId)
function ticketItemDiscountList($locationId, $ticketId, $ticketItemId)
function ticketItemDiscountRetrieve($locationId, $ticketId, $ticketItemId, $ticketItemDiscountId)
function paymentList($locationId, $ticketId)
function paymentRetrieve($locationId, $ticketId, $paymentId)
function paymentCardNotPresent($locationId, $ticketId, $content)
function paymentCardPresent($locationId, $ticketId, $content)
function payment3rdParty($locationId, $ticketId, $content)
function paymentGiftCard($locationId, $ticketId, $content)
function paymentCash($locationId, $ticketId, $content)
```

## Class OmnivoreTables

```
function tableList($locationId)
function tableRetrieve($locationId, $tableId)
```

## Class OmnivoreGeneral

```
function locationList()
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
