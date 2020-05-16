# Bad words

APIs for performing basic CRUD operations on our collection of bad words.

This group of endpoints will help you realise your dream of using a bad word. Thank us later.😎

## Fetch the list of bad words.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/badwords',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'filters[how_bad_is_it]'=> 'nihil',
            'filters[created_at]'=> 'nisi',
            'fields[]'=> 'adipisci',
            'page'=> '1',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X GET \
    -G "http://localhost/api/badwords?filters[how_bad_is_it]=nihil&filters[created_at]=nisi&fields[]=adipisci&page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/badwords"
);

let params = {
    "filters[how_bad_is_it]": "nihil",
    "filters[created_at]": "nisi",
    "fields[]": "adipisci",
    "page": "1",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost/api/badwords'
params = {
  'filters[how_bad_is_it]': 'nihil',
  'filters[created_at]': 'nisi',
  'fields[]': 'adipisci',
  'page': '1',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()
```


> Example response (200):

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "word": "minus",
            "how_bad_is_it": "bad",
            "created_at": "2020-04-13T21:26:30.000000Z",
            "updated_at": "2020-04-13T21:26:30.000000Z"
        },
        {
            "id": 2,
            "word": "consectetur",
            "how_bad_is_it": "very bad",
            "created_at": "2020-04-13T21:26:30.000000Z",
            "updated_at": "2020-04-13T21:26:30.000000Z"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/badwords?page=1",
    "from": 1,
    "last_page": 6,
    "last_page_url": "http:\/\/localhost\/api\/badwords?page=6",
    "next_page_url": "http:\/\/localhost\/api\/badwords?page=2",
    "path": "http:\/\/localhost\/api\/badwords",
    "per_page": 2,
    "prev_page_url": null,
    "to": 2,
    "total": 12
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/badwords`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<code><b>filters[how_bad_is_it]</b></code>&nbsp;          <i>optional</i>    <br>
    Filter by level of badness.

<code><b>filters[created_at]</b></code>&nbsp;          <i>optional</i>    <br>
    Filter for when the word was created.

<code><b>fields[]</b></code>&nbsp;          <i>optional</i>    <br>
    Fields to include in the response

<code><b>page</b></code>&nbsp;          <i>optional</i>    <br>
    Page number to return.

<code><b>pageSize</b></code>&nbsp;          <i>optional</i>    <br>
    Number of items to return in a page. Defaults to 10.



## Add a word to the list.


This endpoint allows you to add a word to the list. It's a really useful endpoint,
and you should play around with it for a bit.
<aside class="warning">We mean it; you really should.😕</aside>

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/badwords',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'word' => 'family',
            'how_bad_is_it' => 'very bad',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X POST \
    "http://localhost/api/badwords" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"word":"family","how_bad_is_it":"very bad"}'

```

```javascript
const url = new URL(
    "http://localhost/api/badwords"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "word": "family",
    "how_bad_is_it": "very bad"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost/api/badwords'
payload = {
    "word": "family",
    "how_bad_is_it": "very bad"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (201, Word added):

```json
{
    "id": "http:\/\/google.com?page=3"
}
```

### Request
<small class="badge badge-black">POST</small>
 **`api/badwords`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>word</b></code>&nbsp; <small>string</small>     <br>
    The bad word.

<code><b>how_bad_is_it</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    How bad the word is. The value must be one of <code>unspeakable</code>, <code>horrible</code>, <code>very bad</code>, or <code>bad</code>.



## Fetch a specific bad word.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/badwords/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X GET \
    -G "http://localhost/api/badwords/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/badwords/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost/api/badwords/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "id": 1,
    "word": "minus",
    "how_bad_is_it": "bad",
    "created_at": "2020-04-13T21:26:30.000000Z",
    "updated_at": "2020-04-13T21:26:30.000000Z"
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/badwords/{badword}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<code><b>badword</b></code>&nbsp;      <br>
    The ID of the word.



## Update a bad word.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/badwords/2',
    [
        'headers' => [
            'Authorization' => 'Bearer dVZec6gEvfk5ha8b43DP6a1',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'how_bad_is_it' => 'very bad',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X PUT \
    "http://localhost/api/badwords/2" \
    -H "Authorization: Bearer dVZec6gEvfk5ha8b43DP6a1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"how_bad_is_it":"very bad"}'

```

```javascript
const url = new URL(
    "http://localhost/api/badwords/2"
);

let headers = {
    "Authorization": "Bearer dVZec6gEvfk5ha8b43DP6a1",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "how_bad_is_it": "very bad"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost/api/badwords/2'
payload = {
    "how_bad_is_it": "very bad"
}
headers = {
  'Authorization': 'Bearer dVZec6gEvfk5ha8b43DP6a1',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```



### Request
<small class="badge badge-darkblue">PUT</small>
 **`api/badwords/{badword}`**

<small class="badge badge-purple">PATCH</small>
 **`api/badwords/{badword}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<code><b>badword</b></code>&nbsp;      <br>
    The bad word ID.

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>how_bad_is_it</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    One of: `unspeakable`, `horrible`, `very bad`, `bad`.



## Remove a bad word from the list.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/badwords/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X DELETE \
    "http://localhost/api/badwords/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/badwords/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost/api/badwords/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


> Example response (204):

```json
<Empty response>
```

### Request
<small class="badge badge-red">DELETE</small>
 **`api/badwords/{badword}`**




