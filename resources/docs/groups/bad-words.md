# Bad words

APIs for performing basic CRUD operations on our collection of bad words.

This group of endpoints will help you realise your dream of using a bad word. Thank us later.😎

## Fetch the list of bad words.




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/badwords?filters[how_bad_is_it]=eaque&filters[created_at]=blanditiis&fields[]=corporis&page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/badwords"
);

let params = {
    "filters[how_bad_is_it]": "eaque",
    "filters[created_at]": "blanditiis",
    "fields[]": "corporis",
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
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "word": "est",
            "how_bad_is_it": "very bad",
            "created_at": "2020-09-10T17:19:10.000000Z",
            "updated_at": "2020-09-10T17:19:10.000000Z"
        },
        {
            "id": 2,
            "word": "molestiae",
            "how_bad_is_it": "very bad",
            "created_at": "2020-09-10T17:19:10.000000Z",
            "updated_at": "2020-09-10T17:19:10.000000Z"
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/badwords?page=1",
    "from": 1,
    "last_page": 6,
    "last_page_url": "http:\/\/localhost\/api\/badwords?page=6",
    "links": [
        {
            "url": null,
            "label": "Previous",
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/badwords?page=1",
            "label": 1,
            "active": true
        },
        {
            "url": "http:\/\/localhost\/api\/badwords?page=2",
            "label": 2,
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/badwords?page=3",
            "label": 3,
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/badwords?page=4",
            "label": 4,
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/badwords?page=5",
            "label": 5,
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/badwords?page=6",
            "label": 6,
            "active": false
        },
        {
            "url": "http:\/\/localhost\/api\/badwords?page=2",
            "label": "Next",
            "active": false
        }
    ],
    "next_page_url": "http:\/\/localhost\/api\/badwords?page=2",
    "path": "http:\/\/localhost\/api\/badwords",
    "per_page": 2,
    "prev_page_url": null,
    "to": 2,
    "total": 12
}
```
<div id="execution-results-GETapi-badwords" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-badwords"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-badwords"></code></pre>
</div>
<div id="execution-error-GETapi-badwords" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-badwords"></code></pre>
</div>
<form id="form-GETapi-badwords" data-method="GET" data-path="api/badwords" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-badwords', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-tryout-GETapi-badwords" onclick="tryItOut('GETapi-badwords');">Try it out ⚡</button>
        <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-canceltryout-GETapi-badwords" onclick="cancelTryOut('GETapi-badwords');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-executetryout-GETapi-badwords" hidden>Send Request 💥</button>
</h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/badwords</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>filters[how_bad_is_it]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filters[how_bad_is_it]" data-endpoint="GETapi-badwords" data-component="query"  hidden>
<br>
Filter by level of badness.</p>
<p>
<b><code>filters[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filters[created_at]" data-endpoint="GETapi-badwords" data-component="query"  hidden>
<br>
Filter for when the word was created.</p>
<p>
<b><code>fields[]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields.0" data-endpoint="GETapi-badwords" data-component="query"  hidden>
<br>
Fields to include in the response</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page" data-endpoint="GETapi-badwords" data-component="query"  hidden>
<br>
Page number to return.</p>
<p>
<b><code>pageSize</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="pageSize" data-endpoint="GETapi-badwords" data-component="query"  hidden>
<br>
Number of items to return in a page. Defaults to 10.</p>
</form>


## Add a word to the list.


This endpoint allows you to add a word to the list. It's a really useful endpoint,
and you should play around with it for a bit.
<aside class="warning">We mean it; you really should.😕</aside>

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/badwords" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"word":"\"children\"","how_bad_is_it":"very bad","dad":false}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/badwords"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "word": "\"children\"",
    "how_bad_is_it": "very bad",
    "dad": false
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (201, Word added):

```json
{
    "id": "http:\/\/google.com?page=3"
}
```
<div id="execution-results-POSTapi-badwords" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-badwords"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-badwords"></code></pre>
</div>
<div id="execution-error-POSTapi-badwords" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-badwords"></code></pre>
</div>
<form id="form-POSTapi-badwords" data-method="POST" data-path="api/badwords" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-badwords', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-tryout-POSTapi-badwords" onclick="tryItOut('POSTapi-badwords');">Try it out ⚡</button>
        <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-canceltryout-POSTapi-badwords" onclick="cancelTryOut('POSTapi-badwords');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-executetryout-POSTapi-badwords" hidden>Send Request 💥</button>
</h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/badwords</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>word</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="word" data-endpoint="POSTapi-badwords" data-component="body" required  hidden>
<br>
The word.</p>
<p>
<b><code>how_bad_is_it</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="how_bad_is_it" data-endpoint="POSTapi-badwords" data-component="body"  hidden>
<br>
One of: `unspeakable`, `horrible`, `very bad`, `bad`.</p>
<p>
<b><code>dad</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-badwords" hidden><input type="radio" name="dad" value="true" data-endpoint="POSTapi-badwords" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-badwords" hidden><input type="radio" name="dad" value="false" data-endpoint="POSTapi-badwords" data-component="body" ><code>false</code></label>
<br>
</p>

</form>


## Fetch a specific bad word.




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/badwords/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/badwords/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "word": "est",
    "how_bad_is_it": "very bad",
    "created_at": "2020-09-10T17:19:10.000000Z",
    "updated_at": "2020-09-10T17:19:10.000000Z"
}
```
<div id="execution-results-GETapi-badwords--badword-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-badwords--badword-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-badwords--badword-"></code></pre>
</div>
<div id="execution-error-GETapi-badwords--badword-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-badwords--badword-"></code></pre>
</div>
<form id="form-GETapi-badwords--badword-" data-method="GET" data-path="api/badwords/{badword}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-badwords--badword-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-tryout-GETapi-badwords--badword-" onclick="tryItOut('GETapi-badwords--badword-');">Try it out ⚡</button>
        <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-canceltryout-GETapi-badwords--badword-" onclick="cancelTryOut('GETapi-badwords--badword-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-executetryout-GETapi-badwords--badword-" hidden>Send Request 💥</button>
</h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/badwords/{badword}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>badword</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="badword" data-endpoint="GETapi-badwords--badword-" data-component="url" required  hidden>
<br>
The ID of the word.</p>
</form>


## Update a bad word.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/badwords/2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"how_bad_is_it":"very bad"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/badwords/2"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "how_bad_is_it": "very bad"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-badwords--badword-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-badwords--badword-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-badwords--badword-"></code></pre>
</div>
<div id="execution-error-PUTapi-badwords--badword-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-badwords--badword-"></code></pre>
</div>
<form id="form-PUTapi-badwords--badword-" data-method="PUT" data-path="api/badwords/{badword}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-badwords--badword-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-tryout-PUTapi-badwords--badword-" onclick="tryItOut('PUTapi-badwords--badword-');">Try it out ⚡</button>
        <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-canceltryout-PUTapi-badwords--badword-" onclick="cancelTryOut('PUTapi-badwords--badword-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-executetryout-PUTapi-badwords--badword-" hidden>Send Request 💥</button>
</h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/badwords/{badword}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/badwords/{badword}</code></b>
</p>
<p>
<label id="auth-PUTapi-badwords--badword-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-badwords--badword-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>badword</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="badword" data-endpoint="PUTapi-badwords--badword-" data-component="url" required  hidden>
<br>
The bad word ID.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>how_bad_is_it</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="how_bad_is_it" data-endpoint="PUTapi-badwords--badword-" data-component="body"  hidden>
<br>
One of: `unspeakable`, `horrible`, `very bad`, `bad`.</p>

</form>


## Remove a bad word from the list.




> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/badwords/fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/badwords/fugiat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (204):

```json
<Empty response>
```
<div id="execution-results-DELETEapi-badwords--badword-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-badwords--badword-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-badwords--badword-"></code></pre>
</div>
<div id="execution-error-DELETEapi-badwords--badword-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-badwords--badword-"></code></pre>
</div>
<form id="form-DELETEapi-badwords--badword-" data-method="DELETE" data-path="api/badwords/{badword}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-badwords--badword-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-tryout-DELETEapi-badwords--badword-" onclick="tryItOut('DELETEapi-badwords--badword-');">Try it out ⚡</button>
        <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-badwords--badword-" onclick="cancelTryOut('DELETEapi-badwords--badword-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-executetryout-DELETEapi-badwords--badword-" hidden>Send Request 💥</button>
</h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/badwords/{badword}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>badword</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="badword" data-endpoint="DELETEapi-badwords--badword-" data-component="url" required  hidden>
<br>
</p>
</form>



