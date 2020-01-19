---
title: API Reference

language_tabs:
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

#Bad words


Do it. Use a bad word today, make your family proud. This API will make that possible.
<!-- START_dd624f6edeb53cb1c3c2d31f99ffd7e4 -->
## Add a word to the list.

> Example request:

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



### HTTP Request
`POST api/badwords`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `word` | string |  optional  | The bad word.
        `how_bad_is_it` | string |  optional  | One of: `unspeakable`, `horrible`, `very bad`, `bad`.
        `nothing` | string |  optional  | A useless parameter for demo purposes.
    
<!-- END_dd624f6edeb53cb1c3c2d31f99ffd7e4 -->

<!-- START_a1007de46f3a66a4ddde85ab670dedaf -->
## Fetch a specific bad word.

> Example request:

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

### HTTP Request
`GET api/badwords/{badword}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `badword` |  required  | The bad word ID.

<!-- END_a1007de46f3a66a4ddde85ab670dedaf -->

<!-- START_5b9e17569532ade8f1dbe350bc9c37ef -->
## Update a bad word.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/badwords/3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"how_bad_is_it":"very bad"}'

```

```javascript
const url = new URL(
    "http://localhost/api/badwords/3"
);

let headers = {
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



### HTTP Request
`PUT api/badwords/{badword}`

`PATCH api/badwords/{badword}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `badword` |  required  | The bad word ID.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `how_bad_is_it` | string |  optional  | One of: `unspeakable`, `horrible`, `very bad`, `bad`.
    
<!-- END_5b9e17569532ade8f1dbe350bc9c37ef -->

#Other

Other bad words APIs. You shouldn't use these unless you're a bad boy.
<!-- START_18436022a4931004b0b4a495765d871d -->
## Fetch the list of bad words.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/badwords" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/badwords"
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


> Example response (201):

```json
[]
```

### HTTP Request
`GET api/badwords`


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



### HTTP Request
`DELETE api/badwords/{badword}`


<!-- END_d54cfa54dc1612c7613dff8c49839f02 -->


