# Bad words

Do it. Use a bad word today, make your family proud. This API will make that possible.

## Add a word to the list.



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
            'word' => 'people',
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
    -d '{"word":"people","how_bad_is_it":"very bad"}'

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
    "word": "people",
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



### Request
<small class="badge badge-black">POST</small>
 **`api/badwords`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
    <code><b>word</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    The bad word.
</p>
<p>
    <code><b>how_bad_is_it</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    One of: `unspeakable`, `horrible`, `very bad`, `bad`.
</p>
<p>
    <code><b>nothing</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    A useless parameter for demo purposes.
</p>


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


> Example response (200):

```json
"family"
```

### Request
<small class="badge badge-green">GET</small>
 **`api/badwords/{badword}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
    <code><b>badword</b></code>&nbsp;      <br>
    The bad word ID.
</p>


## Update a bad word.
<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/badwords/3',
    [
        'headers' => [
            'Authorization' => 'Bearer a84Z3hd5abeDk6VvE6Pg1fc',
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
    "http://localhost/api/badwords/3" \
    -H "Authorization: Bearer a84Z3hd5abeDk6VvE6Pg1fc" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"how_bad_is_it":"very bad"}'

```

```javascript
const url = new URL(
    "http://localhost/api/badwords/3"
);

let headers = {
    "Authorization": "Bearer a84Z3hd5abeDk6VvE6Pg1fc",
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



### Request
<small class="badge badge-darkblue">PUT</small>
 **`api/badwords/{badword}`**

<small class="badge badge-purple">PATCH</small>
 **`api/badwords/{badword}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
    <code><b>badword</b></code>&nbsp;      <br>
    The bad word ID.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
    <code><b>how_bad_is_it</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    One of: `unspeakable`, `horrible`, `very bad`, `bad`.
</p>



