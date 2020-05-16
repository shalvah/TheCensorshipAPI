# Services

Services provided by this API.

## Highlight bad words in texts.


This endpoint will highlight any bad words in the provided texts, surrounding them with `<em></em>` HTML tags.

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
        'json' => [
            'texts' => [
                'He loves his family sooo much!',
            ],
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
    -H "Accept: application/json" \
    -d '{"texts":["He loves his family sooo much!"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/services/highlightBadWordsInText"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "texts": [
        "He loves his family sooo much!"
    ]
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

url = 'http://localhost/api/services/highlightBadWordsInText'
payload = {
    "texts": [
        "He loves his family sooo much!"
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (200):

```json
{
    "highlighted": "He <em>loves<\/em> his <em>family<\/em> sooo much!"
}
```

### Request
<small class="badge badge-black">POST</small>
 **`api/services/highlightBadWordsInText`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>texts.*</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    Texts to be highlighted.



## Censor bad words in texts.


This endpoint will censor any bad words in a list of texts.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/services/censorTexts/doloremque',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'texts' => [
                'He loves his family sooo much',
                'But they don\'t fucking love him back.',
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X POST \
    "http://localhost/api/services/censorTexts/doloremque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"texts":["He loves his family sooo much","But they don't fucking love him back."]}'

```

```javascript
const url = new URL(
    "http://localhost/api/services/censorTexts/doloremque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "texts": [
        "He loves his family sooo much",
        "But they don't fucking love him back."
    ]
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

url = 'http://localhost/api/services/censorTexts/doloremque'
payload = {
    "texts": [
        "He loves his family sooo much",
        "But they don't fucking love him back."
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (200):

```json
[
    "He l===s his f====y sooo much",
    "But they don't fucking l===e him back."
]
```

### Request
<small class="badge badge-black">POST</small>
 **`api/services/censorTexts/{mode?}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<code><b>mode</b></code>&nbsp;          <i>optional</i>    <br>
    Censorship mode. `full` will replace the entire word with `=====`,
`partial` will replace all characters but the first and last. Defaults to `partial`.

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>texts</b></code>&nbsp; <small>array</small>         <i>optional</i>    <br>
    Texts to be censored.



## Censor bad words in an image.


This endpoint will censor any bad words in the provided image and return the censored image. All bad words will be replaced by ======.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/services/censorImage',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'image',
                'contents' => fopen('C:\Users\shalvah\AppData\Local\Temp\php2D6D.tmp', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X POST \
    "http://localhost/api/services/censorImage" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "image=@C:\Users\shalvah\AppData\Local\Temp\php2D6D.tmp" 
```

```javascript
const url = new URL(
    "http://localhost/api/services/censorImage"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

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
files = {
  'image': open('C:\Users\shalvah\AppData\Local\Temp\php2D6D.tmp', 'rb')
}
headers = {
  'Content-Type': 'multipart/form-data',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, files=files)
response.json()
```


> Example response (200):

```json
<Binary data> -  The censored image
```
> Example response (400, When the image&#039;s words are too powerful😢):

```json
{
    "message": "Operation failed",
    "reason": "The words are too touching.😭"
}
```

### Request
<small class="badge badge-black">POST</small>
 **`api/services/censorImage`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>image</b></code>&nbsp; <small>file</small>     <br>
    The image containing text to be censored.



## Get the most frequently used bad words.


PS: This response was generated using the `@apiResource` and `@apiResourceModel` tag. 😏

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
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```bash
curl -X GET \
    -G "http://localhost/api/services/getTopBadWords" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/services/getTopBadWords"
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

url = 'http://localhost/api/services/getTopBadWords'
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
    "data": [
        {
            "word": "ut",
            "how_bad_is_it": "horrible"
        },
        {
            "word": "est",
            "how_bad_is_it": "horrible"
        }
    ],
    "links": {
        "first": "\/?page=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "\/",
        "per_page": "5",
        "to": 2
    }
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/services/getTopBadWords`**



## Get stats for a word&#039;s usage.


PS: This response was generated using the `@transformer` tag. 😏

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/services/getBadWordStats',
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
    -G "http://localhost/api/services/getBadWordStats" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/services/getBadWordStats"
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

url = 'http://localhost/api/services/getBadWordStats'
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
    "data": {
        "word": "ea",
        "last_used": 1589650029,
        "frequency": 2000245606
    }
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/services/getBadWordStats`**


<h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
<code><b>word</b></code>&nbsp; <small>string</small>     <br>
    The word

<code><b>last_used</b></code>&nbsp; <small>integer</small>     <br>
    Timestamp the word was last used anywhere in the world.

<code><b>frequency</b></code>&nbsp; <small>integer</small>     <br>
    The number of times people have used this word.



