---
title: API Reference

language_tabs:
- bash
- javascript
- php
- python

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

#Other

Other bad words APIs. You shouldn't use these unless you're a bad boy.
<!-- START_18436022a4931004b0b4a495765d871d -->
## Fetch the list of bad words.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/badwords?filter[how_bad_is_it]=bad&filter[contains]=vero&ids[]=sunt&pageSize=5
" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/badwords"
);

let params = {
    "filter[how_bad_is_it]": "bad",
    "filter[contains]": "vero",
    "ids[]": "sunt",
    "pageSize": "5",
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
            'filter[how_bad_is_it]'=> 'bad',
            'filter[contains]'=> 'vero',
            'ids[]'=> 'sunt',
            'pageSize'=> '5',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/badwords'
params = {
  'filter[how_bad_is_it]': 'bad',
  'filter[contains]': 'vero',
  'ids[]': 'sunt',
  'pageSize': '5',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers, params=params)
response.json()
```


> Example response (201):

```json
[]
```

### HTTP Request
`GET api/badwords`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `filter[how_bad_is_it]` |  optional  | Duh.
    `filter[contains]` |  optional  | String that word must contain.
    `ids[]` |  optional  | List of IDs.
    `pageSize` |  optional  | Um.

<!-- END_18436022a4931004b0b4a495765d871d -->

<!-- START_d54cfa54dc1612c7613dff8c49839f02 -->
## Remove a bad word from the list.

> Example request:

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



### HTTP Request
`DELETE api/badwords/{badword}`


<!-- END_d54cfa54dc1612c7613dff8c49839f02 -->


