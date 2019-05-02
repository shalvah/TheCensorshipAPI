---
title: API Reference

language_tabs:
- php
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#All
<!-- START_18436022a4931004b0b4a495765d871d -->
## Fetch the list of bad words.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get("api/badwords", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X GET -G "http://localhost/api/badwords" 
```
```javascript
const url = new URL("http://localhost/api/badwords");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[]
```

### HTTP Request
`GET api/badwords`


<!-- END_18436022a4931004b0b4a495765d871d -->

<!-- START_dd624f6edeb53cb1c3c2d31f99ffd7e4 -->
## Add a word to the list.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("api/badwords", [
    'headers' => [
            "Content-Type" => "application/json",
        ],
    'json' => [
            "word" => "fudge",
            "how_bad_is_it" => "`very bad`",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X POST "http://localhost/api/badwords" \
    -H "Content-Type: application/json" \
    -d '{"word":"fudge","how_bad_is_it":"`very bad`"}'

```
```javascript
const url = new URL("http://localhost/api/badwords");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "word": "fudge",
    "how_bad_is_it": "`very bad`"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/badwords`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    word | string |  optional  | The bad word.
    how_bad_is_it | string |  optional  | One of: `unspeakable`, `horrible`, `very bad`, `bad`.

<!-- END_dd624f6edeb53cb1c3c2d31f99ffd7e4 -->

<!-- START_a1007de46f3a66a4ddde85ab670dedaf -->
## Fetch a specific bad word.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get("api/badwords/1", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X GET -G "http://localhost/api/badwords/1" 
```
```javascript
const url = new URL("http://localhost/api/badwords/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (404):

```json
{
    "message": "No query results for model [App\\BadWord]."
}
```

### HTTP Request
`GET api/badwords/{badword}`


<!-- END_a1007de46f3a66a4ddde85ab670dedaf -->

<!-- START_5b9e17569532ade8f1dbe350bc9c37ef -->
## Update a bad word.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->put("api/badwords/1", [
    'headers' => [
            "Content-Type" => "application/json",
        ],
    'json' => [
            "how_bad_is_it" => "`very bad`",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X PUT "http://localhost/api/badwords/1" \
    -H "Content-Type: application/json" \
    -d '{"how_bad_is_it":"`very bad`"}'

```
```javascript
const url = new URL("http://localhost/api/badwords/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "how_bad_is_it": "`very bad`"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/badwords/{badword}`

`PATCH api/badwords/{badword}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    how_bad_is_it | string |  optional  | One of: `unspeakable`, `horrible`, `very bad`, `bad`.

<!-- END_5b9e17569532ade8f1dbe350bc9c37ef -->

<!-- START_d54cfa54dc1612c7613dff8c49839f02 -->
## Remove a bad word from the list.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete("api/badwords/1", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X DELETE "http://localhost/api/badwords/1" 
```
```javascript
const url = new URL("http://localhost/api/badwords/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/badwords/{badword}`


<!-- END_d54cfa54dc1612c7613dff8c49839f02 -->


