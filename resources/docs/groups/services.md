# Services

Services provided by this API.

## Highlight bad words in a text.


Given some text, this endpoint will highlight any bad words in it, surrounding them with `<em></em>` HTML tags.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/services/highlightBadWordsInText',
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
curl -X POST \
    "http://localhost/api/services/highlightBadWordsInText" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/services/highlightBadWordsInText"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost/api/services/highlightBadWordsInText'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```



### Request
<small class="badge badge-black">POST</small>
 **`api/services/highlightBadWordsInText`**



## Censor bad words in texts.


This endpoint will censor any bad words in a list of texts.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/services/censorTexts/accusantium',
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
curl -X POST \
    "http://localhost/api/services/censorTexts/accusantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/services/censorTexts/accusantium"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost/api/services/censorTexts/accusantium'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```



### Request
<small class="badge badge-black">POST</small>
 **`api/services/censorTexts/{mode?}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<code><b>mode</b></code>&nbsp;          <i>optional</i>    <br>
    Censorship mode. 'full' will replace the entire word with =====, 'partial' will replace all characters, but the first and last. Defaults to 'partial'.



## Censor bad words in an image.


This endpoint will censor any bad words in the provided image and return the censored image. All bad words will be replaced by ======.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/services/censorImage',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'content' => 'voluptatem',
            'title' => 'My First Post',
            'author_display_name' => 'accusamus',
            'author_homepage' => 'http://rohan.com/molestias-aperiam-consequatur-dolorem-voluptatem-sint',
            'author_timezone' => 'America/North_Dakota/Center',
            'author_email' => 'woodrow49@example.net',
            'publication_date' => '2020-05-16',
            'category' => 'opinion',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X POST \
    "http://localhost/api/services/censorImage" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"content":"voluptatem","title":"My First Post","author_display_name":"accusamus","author_homepage":"http:\/\/rohan.com\/molestias-aperiam-consequatur-dolorem-voluptatem-sint","author_timezone":"America\/North_Dakota\/Center","author_email":"woodrow49@example.net","publication_date":"2020-05-16","category":"opinion"}'

```

```javascript
const url = new URL(
    "http://localhost/api/services/censorImage"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "voluptatem",
    "title": "My First Post",
    "author_display_name": "accusamus",
    "author_homepage": "http:\/\/rohan.com\/molestias-aperiam-consequatur-dolorem-voluptatem-sint",
    "author_timezone": "America\/North_Dakota\/Center",
    "author_email": "woodrow49@example.net",
    "publication_date": "2020-05-16",
    "category": "opinion"
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

url = 'http://localhost/api/services/censorImage'
payload = {
    "content": "voluptatem",
    "title": "My First Post",
    "author_display_name": "accusamus",
    "author_homepage": "http:\/\/rohan.com\/molestias-aperiam-consequatur-dolorem-voluptatem-sint",
    "author_timezone": "America\/North_Dakota\/Center",
    "author_email": "woodrow49@example.net",
    "publication_date": "2020-05-16",
    "category": "opinion"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### Request
<small class="badge badge-black">POST</small>
 **`api/services/censorImage`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>content</b></code>&nbsp; <small>string</small>     <br>
    Contents of the post.

<code><b>title</b></code>&nbsp; <small>string</small>     <br>
    The title of the post.

<code><b>author_display_name</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>author_homepage</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    The value must be a valid URL.

<code><b>author_timezone</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    The value must be a valid time zone, such as <code>Africa/Accra</code>.

<code><b>author_email</b></code>&nbsp; <small>string</small>     <br>
    The value must be a valid email address.

<code><b>publication_date</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    Date to be used as the publication date. The value must be a valid date in the format Y-m-d.

<code><b>category</b></code>&nbsp; <small>string</small>     <br>
    Category the post belongs to. The value must be one of <code>news</code>, <code>opinion</code>, or <code>quiz</code>.



## Get the most frequently used bad words.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/services/getTopBadWords',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'content' => 'eligendi',
            'title' => 'My First Post',
            'author_display_name' => 'rerum',
            'author_homepage' => 'http://walsh.com/',
            'author_timezone' => 'Pacific/Pago_Pago',
            'author_email' => 'rau.lauriane@example.org',
            'publication_date' => '2020-05-16',
            'category' => 'opinion',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X GET \
    -G "http://localhost/api/services/getTopBadWords" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"content":"eligendi","title":"My First Post","author_display_name":"rerum","author_homepage":"http:\/\/walsh.com\/","author_timezone":"Pacific\/Pago_Pago","author_email":"rau.lauriane@example.org","publication_date":"2020-05-16","category":"opinion"}'

```

```javascript
const url = new URL(
    "http://localhost/api/services/getTopBadWords"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "eligendi",
    "title": "My First Post",
    "author_display_name": "rerum",
    "author_homepage": "http:\/\/walsh.com\/",
    "author_timezone": "Pacific\/Pago_Pago",
    "author_email": "rau.lauriane@example.org",
    "publication_date": "2020-05-16",
    "category": "opinion"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost/api/services/getTopBadWords'
payload = {
    "content": "eligendi",
    "title": "My First Post",
    "author_display_name": "rerum",
    "author_homepage": "http:\/\/walsh.com\/",
    "author_timezone": "Pacific\/Pago_Pago",
    "author_email": "rau.lauriane@example.org",
    "publication_date": "2020-05-16",
    "category": "opinion"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, json=payload)
response.json()
```


> Example response (200):

```json
[
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
    },
    {
        "id": 3,
        "word": "dolores",
        "how_bad_is_it": "very bad",
        "created_at": "2020-04-13T21:26:30.000000Z",
        "updated_at": "2020-04-13T21:26:30.000000Z"
    },
    {
        "id": 4,
        "word": "eos",
        "how_bad_is_it": "horrible",
        "created_at": "2020-04-13T21:26:30.000000Z",
        "updated_at": "2020-04-13T21:26:30.000000Z"
    },
    {
        "id": 5,
        "word": "vel",
        "how_bad_is_it": "very bad",
        "created_at": "2020-04-13T21:26:30.000000Z",
        "updated_at": "2020-04-13T21:26:30.000000Z"
    },
    {
        "id": 6,
        "word": "qui",
        "how_bad_is_it": "bad",
        "created_at": "2020-04-13T21:26:31.000000Z",
        "updated_at": "2020-04-13T21:26:31.000000Z"
    },
    {
        "id": 7,
        "word": "distinctio",
        "how_bad_is_it": "bad",
        "created_at": "2020-04-13T21:26:31.000000Z",
        "updated_at": "2020-04-13T21:26:31.000000Z"
    },
    {
        "id": 8,
        "word": "alias",
        "how_bad_is_it": "horrible",
        "created_at": "2020-04-13T21:26:31.000000Z",
        "updated_at": "2020-04-13T21:26:31.000000Z"
    },
    {
        "id": 9,
        "word": "aliquid",
        "how_bad_is_it": "horrible",
        "created_at": "2020-04-13T21:26:31.000000Z",
        "updated_at": "2020-04-13T21:26:31.000000Z"
    },
    {
        "id": 10,
        "word": "cupiditate",
        "how_bad_is_it": "bad",
        "created_at": "2020-04-13T21:26:31.000000Z",
        "updated_at": "2020-04-13T21:26:31.000000Z"
    },
    {
        "id": 11,
        "word": "hei",
        "how_bad_is_it": "very bad",
        "created_at": "2020-04-27T18:56:56.000000Z",
        "updated_at": "2020-04-27T18:56:56.000000Z"
    },
    {
        "id": 12,
        "word": "hpoop",
        "how_bad_is_it": "bad",
        "created_at": "2020-04-27T18:57:21.000000Z",
        "updated_at": "2020-04-27T18:57:21.000000Z"
    }
]
```

### Request
<small class="badge badge-green">GET</small>
 **`api/services/getTopBadWords`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>content</b></code>&nbsp; <small>string</small>     <br>
    Contents of the post.

<code><b>title</b></code>&nbsp; <small>string</small>     <br>
    The title of the post.

<code><b>author_display_name</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    

<code><b>author_homepage</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    The value must be a valid URL.

<code><b>author_timezone</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    The value must be a valid time zone, such as <code>Africa/Accra</code>.

<code><b>author_email</b></code>&nbsp; <small>string</small>     <br>
    The value must be a valid email address.

<code><b>publication_date</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    Date to be used as the publication date. The value must be a valid date in the format Y-m-d.

<code><b>category</b></code>&nbsp; <small>string</small>     <br>
    Category the post belongs to. The value must be one of <code>news</code>, <code>opinion</code>, or <code>quiz</code>.




