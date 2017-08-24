# Swagger\Client\DefaultApi

All URIs are relative to *https://localhost/api/v2/operations*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePremadeResponse**](DefaultApi.md#deletePremadeResponse) | **DELETE** /tickets/premade_responses/{ticket_premade_response_id} | 
[**deleteTicketReminder**](DefaultApi.md#deleteTicketReminder) | **DELETE** /tickets/{ticket_id}/reminders/{ticket_reminder_id} | 
[**deleteTicketTag**](DefaultApi.md#deleteTicketTag) | **DELETE** /tickets/{ticket_id}/tags/{tag_id} | 
[**getPremadeResponse**](DefaultApi.md#getPremadeResponse) | **GET** /tickets/premade_responses/{ticket_premade_response_id} | 
[**getPremadeResponses**](DefaultApi.md#getPremadeResponses) | **GET** /tickets/premade_responses | 
[**getTicket**](DefaultApi.md#getTicket) | **GET** /tickets/{ticket_id} | 
[**getTicketReminder**](DefaultApi.md#getTicketReminder) | **GET** /tickets/{ticket_id}/reminders/{ticket_reminder_id} | 
[**getTicketReminders**](DefaultApi.md#getTicketReminders) | **GET** /tickets/{ticket_id}/reminders | 
[**getTicketTags**](DefaultApi.md#getTicketTags) | **GET** /tickets/{ticket_id}/tags | 
[**getTickets**](DefaultApi.md#getTickets) | **GET** /tickets | 
[**postTicketMessages**](DefaultApi.md#postTicketMessages) | **POST** /ticket_messages | 
[**postTicketReminders**](DefaultApi.md#postTicketReminders) | **POST** /tickets/{ticket_id}/reminders | 
[**postTickets**](DefaultApi.md#postTickets) | **POST** /tickets | 
[**putPremadeResponses**](DefaultApi.md#putPremadeResponses) | **PUT** /tickets/premade_responses | 
[**putTicketMessages**](DefaultApi.md#putTicketMessages) | **PUT** /ticket_messages | 
[**putTicketReminders**](DefaultApi.md#putTicketReminders) | **PUT** /tickets/{ticket_id}/reminders | 
[**putTicketReview**](DefaultApi.md#putTicketReview) | **PUT** /ticket_review | 
[**putTicketTags**](DefaultApi.md#putTicketTags) | **PUT** /tickets/{ticket_id}/tags | 
[**putTickets**](DefaultApi.md#putTickets) | **PUT** /tickets | 


# **deletePremadeResponse**
> \Swagger\Client\Model\TicketPremadeResponse deletePremadeResponse($ticket_premade_response_id, $authentication_token)



Remove from ticket_premade_response_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ticket_premade_response_id = 56; // int | 
$authentication_token = "authentication_token_example"; // string | 

try {
    $result = $api_instance->deletePremadeResponse($ticket_premade_response_id, $authentication_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deletePremadeResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_premade_response_id** | **int**|  |
 **authentication_token** | **string**|  |

### Return type

[**\Swagger\Client\Model\TicketPremadeResponse**](../Model/TicketPremadeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTicketReminder**
> deleteTicketReminder($ticket_id, $ticket_reminder_id, $authentication_token)



Remove from ticket_reminder_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ticket_id = "ticket_id_example"; // string | 
$ticket_reminder_id = "ticket_reminder_id_example"; // string | 
$authentication_token = "authentication_token_example"; // string | 

try {
    $api_instance->deleteTicketReminder($ticket_id, $ticket_reminder_id, $authentication_token);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTicketReminder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **string**|  |
 **ticket_reminder_id** | **string**|  |
 **authentication_token** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTicketTag**
> deleteTicketTag($ticket_id, $tag_id, $authentication_token)



Remove from tag_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ticket_id = "ticket_id_example"; // string | 
$tag_id = "tag_id_example"; // string | 
$authentication_token = "authentication_token_example"; // string | 

try {
    $api_instance->deleteTicketTag($ticket_id, $tag_id, $authentication_token);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTicketTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **string**|  |
 **tag_id** | **string**|  |
 **authentication_token** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPremadeResponse**
> \Swagger\Client\Model\TicketPremadeResponse getPremadeResponse($ticket_premade_response_id, $authentication_token)



Retrieve ticket_premade_response_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ticket_premade_response_id = "ticket_premade_response_id_example"; // string | 
$authentication_token = "authentication_token_example"; // string | 

try {
    $result = $api_instance->getPremadeResponse($ticket_premade_response_id, $authentication_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPremadeResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_premade_response_id** | **string**|  |
 **authentication_token** | **string**|  |

### Return type

[**\Swagger\Client\Model\TicketPremadeResponse**](../Model/TicketPremadeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPremadeResponses**
> \Swagger\Client\Model\TicketPremadeResponse getPremadeResponses($authentication_token, $draw, $category, $sort_by, $start, $sort_by_order, $q, $length, $statuses, $fields)



Retrieve premade_responses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$authentication_token = 3.4; // float | User authentication uuid
$draw = 56; // int | Number of times table has been reloaded
$category = "category_example"; // string | Filter by category
$sort_by = "sort_by_example"; // string | Column name to order table by
$start = 56; // int | Start query value
$sort_by_order = "sort_by_order_example"; // string | Sort by ascending or descending
$q = "q_example"; // string | 
$length = 56; // int | Number of rows query
$statuses = "statuses_example"; // string | Filter by statuses
$fields = 56; // int | Column headers in order

try {
    $result = $api_instance->getPremadeResponses($authentication_token, $draw, $category, $sort_by, $start, $sort_by_order, $q, $length, $statuses, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPremadeResponses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_token** | **float**| User authentication uuid |
 **draw** | **int**| Number of times table has been reloaded | [optional]
 **category** | **string**| Filter by category | [optional]
 **sort_by** | **string**| Column name to order table by | [optional]
 **start** | **int**| Start query value | [optional]
 **sort_by_order** | **string**| Sort by ascending or descending | [optional]
 **q** | **string**|  | [optional]
 **length** | **int**| Number of rows query | [optional]
 **statuses** | **string**| Filter by statuses | [optional]
 **fields** | **int**| Column headers in order | [optional]

### Return type

[**\Swagger\Client\Model\TicketPremadeResponse**](../Model/TicketPremadeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicket**
> \Swagger\Client\Model\Ticket getTicket($ticket_id, $authentication_token, $category, $statuses, $ordered_column, $ordered_by)



Retrieve ticket_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ticket_id = "ticket_id_example"; // string | 
$authentication_token = "authentication_token_example"; // string | 
$category = "category_example"; // string | 
$statuses = "statuses_example"; // string | 
$ordered_column = "ordered_column_example"; // string | 
$ordered_by = "ordered_by_example"; // string | 

try {
    $result = $api_instance->getTicket($ticket_id, $authentication_token, $category, $statuses, $ordered_column, $ordered_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **string**|  |
 **authentication_token** | **string**|  |
 **category** | **string**|  | [optional]
 **statuses** | **string**|  | [optional]
 **ordered_column** | **string**|  | [optional]
 **ordered_by** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketReminder**
> \Swagger\Client\Model\Ticket getTicketReminder($ticket_id, $ticket_reminder_id, $authentication_token)



Retrieve ticket_reminder_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ticket_id = "ticket_id_example"; // string | 
$ticket_reminder_id = "ticket_reminder_id_example"; // string | 
$authentication_token = "authentication_token_example"; // string | 

try {
    $result = $api_instance->getTicketReminder($ticket_id, $ticket_reminder_id, $authentication_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTicketReminder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **string**|  |
 **ticket_reminder_id** | **string**|  |
 **authentication_token** | **string**|  |

### Return type

[**\Swagger\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketReminders**
> \Swagger\Client\Model\Ticket getTicketReminders($ticket_id, $authentication_token)



Retrieve reminders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ticket_id = "ticket_id_example"; // string | 
$authentication_token = "authentication_token_example"; // string | 

try {
    $result = $api_instance->getTicketReminders($ticket_id, $authentication_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTicketReminders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **string**|  |
 **authentication_token** | **string**|  |

### Return type

[**\Swagger\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketTags**
> \Swagger\Client\Model\Ticket getTicketTags($ticket_id, $authentication_token, $start, $length, $draw, $q, $sort_by, $sort_by_order, $fields, $tag_id)



Retrieve tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ticket_id = "ticket_id_example"; // string | 
$authentication_token = "authentication_token_example"; // string | 
$start = 56; // int | Start query value
$length = 56; // int | Number of rows query
$draw = 56; // int | Number of times table has been reloaded
$q = "q_example"; // string | Values provided in q are tokenized and search on columns: TICKET_ID,SUBJECT,REQUESTOR_UERNAME, REQUESTOR_EMAIL, TICKET_MESSAGES
$sort_by = "sort_by_example"; // string | Column name to order table by
$sort_by_order = "sort_by_order_example"; // string | Sort by ascending or descending
$fields = "fields_example"; // string | Column headers in order
$tag_id = 56; // int | 

try {
    $result = $api_instance->getTicketTags($ticket_id, $authentication_token, $start, $length, $draw, $q, $sort_by, $sort_by_order, $fields, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTicketTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **string**|  |
 **authentication_token** | **string**|  |
 **start** | **int**| Start query value | [optional]
 **length** | **int**| Number of rows query | [optional]
 **draw** | **int**| Number of times table has been reloaded | [optional]
 **q** | **string**| Values provided in q are tokenized and search on columns: TICKET_ID,SUBJECT,REQUESTOR_UERNAME, REQUESTOR_EMAIL, TICKET_MESSAGES | [optional]
 **sort_by** | **string**| Column name to order table by | [optional]
 **sort_by_order** | **string**| Sort by ascending or descending | [optional]
 **fields** | **string**| Column headers in order | [optional]
 **tag_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTickets**
> \Swagger\Client\Model\Ticket[] getTickets($authentication_token, $start, $length, $draw, $q, $sort_by, $sort_by_order, $fields, $statuses, $category, $account_id, $tag_id, $user_id)



Retrieve tickets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$authentication_token = 3.4; // float | User athentication uuid
$start = 56; // int | Start query value
$length = 56; // int | Number of rows query
$draw = 56; // int | Number of times table has been reloaded
$q = "q_example"; // string | Values provided in q are tokenized and search on columns: TICKET_ID,SUBJECT,REQUESTOR_UERNAME, REQUESTOR_EMAIL, TICKET_MESSAGES
$sort_by = "sort_by_example"; // string | Column name to order table by
$sort_by_order = "sort_by_order_example"; // string | Sort by ascending or descending
$fields = "fields_example"; // string | Column headers in order
$statuses = "statuses_example"; // string | Filter by statuses
$category = "category_example"; // string | Filter by category
$account_id = "account_id_example"; // string | 
$tag_id = 56; // int | 
$user_id = "user_id_example"; // string | 

try {
    $result = $api_instance->getTickets($authentication_token, $start, $length, $draw, $q, $sort_by, $sort_by_order, $fields, $statuses, $category, $account_id, $tag_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTickets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_token** | **float**| User athentication uuid |
 **start** | **int**| Start query value | [optional]
 **length** | **int**| Number of rows query | [optional]
 **draw** | **int**| Number of times table has been reloaded | [optional]
 **q** | **string**| Values provided in q are tokenized and search on columns: TICKET_ID,SUBJECT,REQUESTOR_UERNAME, REQUESTOR_EMAIL, TICKET_MESSAGES | [optional]
 **sort_by** | **string**| Column name to order table by | [optional]
 **sort_by_order** | **string**| Sort by ascending or descending | [optional]
 **fields** | **string**| Column headers in order | [optional]
 **statuses** | **string**| Filter by statuses | [optional]
 **category** | **string**| Filter by category | [optional]
 **account_id** | **string**|  | [optional]
 **tag_id** | **int**|  | [optional]
 **user_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTicketMessages**
> \Swagger\Client\Model\TicketMessage postTicketMessages($body, $authentication_token)



Insert a ticket_messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$body = array(new \Swagger\Client\Model\TicketMessage()); // \Swagger\Client\Model\TicketMessage[] | The request body for the operation
$authentication_token = "authentication_token_example"; // string | 

try {
    $result = $api_instance->postTicketMessages($body, $authentication_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postTicketMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TicketMessage[]**](../Model/TicketMessage.md)| The request body for the operation |
 **authentication_token** | **string**|  |

### Return type

[**\Swagger\Client\Model\TicketMessage**](../Model/TicketMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTicketReminders**
> postTicketReminders($ticket_id, $body, $authentication_token)



Insert a reminders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ticket_id = "ticket_id_example"; // string | 
$body = new \Swagger\Client\Model\Ticket(); // \Swagger\Client\Model\Ticket | The request body for the operation
$authentication_token = "authentication_token_example"; // string | 

try {
    $api_instance->postTicketReminders($ticket_id, $body, $authentication_token);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postTicketReminders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Ticket**](../Model/Ticket.md)| The request body for the operation |
 **authentication_token** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTickets**
> \Swagger\Client\Model\Ticket postTickets($body, $authentication_token)



Insert a tickets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$body = array(new \Swagger\Client\Model\TicketMessage()); // \Swagger\Client\Model\TicketMessage[] | The request body for the operation
$authentication_token = 3.4; // float | User athentication uuid

try {
    $result = $api_instance->postTickets($body, $authentication_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postTickets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TicketMessage[]**](../Model/TicketMessage.md)| The request body for the operation |
 **authentication_token** | **float**| User athentication uuid | [optional]

### Return type

[**\Swagger\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPremadeResponses**
> \Swagger\Client\Model\TicketPremadeResponse putPremadeResponses($body, $authentication_token)



Update premade_responses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$body = new \Swagger\Client\Model\TicketPremadeResponse(); // \Swagger\Client\Model\TicketPremadeResponse | The request body for the operation
$authentication_token = "authentication_token_example"; // string | 

try {
    $result = $api_instance->putPremadeResponses($body, $authentication_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putPremadeResponses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TicketPremadeResponse**](../Model/TicketPremadeResponse.md)| The request body for the operation |
 **authentication_token** | **string**|  |

### Return type

[**\Swagger\Client\Model\TicketPremadeResponse**](../Model/TicketPremadeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTicketMessages**
> \Swagger\Client\Model\TicketMessage putTicketMessages($body, $authentication_token)



Update ticket_messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$body = new \Swagger\Client\Model\TicketMessage(); // \Swagger\Client\Model\TicketMessage | The request body for the operation
$authentication_token = "authentication_token_example"; // string | 

try {
    $result = $api_instance->putTicketMessages($body, $authentication_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putTicketMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TicketMessage**](../Model/TicketMessage.md)| The request body for the operation |
 **authentication_token** | **string**|  |

### Return type

[**\Swagger\Client\Model\TicketMessage**](../Model/TicketMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTicketReminders**
> putTicketReminders($ticket_id, $body, $authentication_token)



Update reminders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ticket_id = "ticket_id_example"; // string | 
$body = new \Swagger\Client\Model\Ticket(); // \Swagger\Client\Model\Ticket | The request body for the operation
$authentication_token = "authentication_token_example"; // string | 

try {
    $api_instance->putTicketReminders($ticket_id, $body, $authentication_token);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putTicketReminders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Ticket**](../Model/Ticket.md)| The request body for the operation |
 **authentication_token** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTicketReview**
> putTicketReview($body, $ticket_uuid, $rating)



Update ticket_review

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$body = new \Swagger\Client\Model\Ticket(); // \Swagger\Client\Model\Ticket | The request body for the operation
$ticket_uuid = "ticket_uuid_example"; // string | 
$rating = "rating_example"; // string | 

try {
    $api_instance->putTicketReview($body, $ticket_uuid, $rating);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putTicketReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Ticket**](../Model/Ticket.md)| The request body for the operation |
 **ticket_uuid** | **string**|  |
 **rating** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTicketTags**
> putTicketTags($ticket_id, $body, $authentication_token)



Update tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$ticket_id = "ticket_id_example"; // string | 
$body = new \Swagger\Client\Model\Ticket(); // \Swagger\Client\Model\Ticket | The request body for the operation
$authentication_token = "authentication_token_example"; // string | 

try {
    $api_instance->putTicketTags($ticket_id, $body, $authentication_token);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putTicketTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Ticket**](../Model/Ticket.md)| The request body for the operation |
 **authentication_token** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTickets**
> \Swagger\Client\Model\Ticket[] putTickets($body, $authentication_token)



Update tickets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$body = array(new \Swagger\Client\Model\Ticket()); // \Swagger\Client\Model\Ticket[] | The request body for the operation
$authentication_token = true; // bool | User athentication uuid

try {
    $result = $api_instance->putTickets($body, $authentication_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putTickets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Ticket[]**](../Model/Ticket.md)| The request body for the operation |
 **authentication_token** | **bool**| User athentication uuid | [optional]

### Return type

[**\Swagger\Client\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

