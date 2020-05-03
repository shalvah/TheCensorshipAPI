# Other
Other bad words APIs. You shouldn't use these unless you're a bad boy.

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
            'filter[how_bad_is_it]'=> 'bad',
            'filter[contains]'=> 'magnam',
            'ids[]'=> 'vitae',
            'pageSize'=> '5',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X GET \
    -G "http://localhost/api/badwords?filter[how_bad_is_it]=bad&filter[contains]=magnam&ids[]=vitae&pageSize=5" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/badwords"
);

let params = {
    "filter[how_bad_is_it]": "bad",
    "filter[contains]": "magnam",
    "ids[]": "vitae",
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


> Example response (201):

```json
[
    {
        "id": 1,
        "word": "minus",
        "how_bad_is_it": "bad",
        "created_at": "2020-04-13 21:26:30",
        "updated_at": "2020-04-13 21:26:30"
    },
    {
        "id": 2,
        "word": "consectetur",
        "how_bad_is_it": "very bad",
        "created_at": "2020-04-13 21:26:30",
        "updated_at": "2020-04-13 21:26:30"
    },
    {
        "id": 3,
        "word": "dolores",
        "how_bad_is_it": "very bad",
        "created_at": "2020-04-13 21:26:30",
        "updated_at": "2020-04-13 21:26:30"
    },
    {
        "id": 4,
        "word": "eos",
        "how_bad_is_it": "horrible",
        "created_at": "2020-04-13 21:26:30",
        "updated_at": "2020-04-13 21:26:30"
    },
    {
        "id": 5,
        "word": "vel",
        "how_bad_is_it": "very bad",
        "created_at": "2020-04-13 21:26:30",
        "updated_at": "2020-04-13 21:26:30"
    },
    {
        "id": 6,
        "word": "qui",
        "how_bad_is_it": "bad",
        "created_at": "2020-04-13 21:26:31",
        "updated_at": "2020-04-13 21:26:31"
    },
    {
        "id": 7,
        "word": "distinctio",
        "how_bad_is_it": "bad",
        "created_at": "2020-04-13 21:26:31",
        "updated_at": "2020-04-13 21:26:31"
    },
    {
        "id": 8,
        "word": "alias",
        "how_bad_is_it": "horrible",
        "created_at": "2020-04-13 21:26:31",
        "updated_at": "2020-04-13 21:26:31"
    },
    {
        "id": 9,
        "word": "aliquid",
        "how_bad_is_it": "horrible",
        "created_at": "2020-04-13 21:26:31",
        "updated_at": "2020-04-13 21:26:31"
    },
    {
        "id": 10,
        "word": "cupiditate",
        "how_bad_is_it": "bad",
        "created_at": "2020-04-13 21:26:31",
        "updated_at": "2020-04-13 21:26:31"
    },
    {
        "id": 11,
        "word": "hei",
        "how_bad_is_it": "very bad",
        "created_at": "2020-04-27 18:56:56",
        "updated_at": "2020-04-27 18:56:56"
    },
    {
        "id": 12,
        "word": "hpoop",
        "how_bad_is_it": "bad",
        "created_at": "2020-04-27 18:57:21",
        "updated_at": "2020-04-27 18:57:21"
    }
]
```

### Request
<small class="badge badge-green">GET</small>
 **`api/badwords`**

<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
    <code><b>filter[how_bad_is_it]</b></code>&nbsp;          <i>optional</i>    <br>
    Duh.
</p>
<p>
    <code><b>filter[contains]</b></code>&nbsp;          <i>optional</i>    <br>
    String that word must contain.
</p>
<p>
    <code><b>ids[]</b></code>&nbsp;          <i>optional</i>    <br>
    List of IDs.
</p>
<p>
    <code><b>pageSize</b></code>&nbsp;          <i>optional</i>    <br>
    Um.
</p>


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



### Request
<small class="badge badge-red">DELETE</small>
 **`api/badwords/{badword}`**




