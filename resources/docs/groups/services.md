# Services

Services provided by this API.

## Highlight bad words in texts.


This endpoint will highlight any bad words in the provided texts, surrounding them with `<em></em>` HTML tags.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/services/highlightBadWordsInText" \
    -H "Content-Type: application/x-www-form-urlencoded" \
    -H "Accept: application/json" \
    -d '{"texts":["He loves his family sooo much","But they don't fucking love him back."],"things":[{"name":"sapiente"},{"name":"sapiente"}]}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/services/highlightBadWordsInText"
);

let headers = {
    "Content-Type": "application/x-www-form-urlencoded",
    "Accept": "application/json",
};

let body = {
    "texts": [
        "He loves his family sooo much",
        "But they don't fucking love him back."
    ],
    "things": [
        {
            "name": "sapiente"
        },
        {
            "name": "sapiente"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "highlighted": "He <em>loves<\/em> his <em>family<\/em> sooo much!"
}
```
<div id="execution-results-POSTapi-services-highlightBadWordsInText" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-services-highlightBadWordsInText"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-services-highlightBadWordsInText"></code></pre>
</div>
<div id="execution-error-POSTapi-services-highlightBadWordsInText" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-services-highlightBadWordsInText"></code></pre>
</div>
<form id="form-POSTapi-services-highlightBadWordsInText" data-method="POST" data-path="api/services/highlightBadWordsInText" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/x-www-form-urlencoded","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-services-highlightBadWordsInText', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-tryout-POSTapi-services-highlightBadWordsInText" onclick="tryItOut('POSTapi-services-highlightBadWordsInText');">Try it out ⚡</button>
        <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-canceltryout-POSTapi-services-highlightBadWordsInText" onclick="cancelTryOut('POSTapi-services-highlightBadWordsInText');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-executetryout-POSTapi-services-highlightBadWordsInText" hidden>Send Request 💥</button>
</h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/services/highlightBadWordsInText</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>texts</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
<input type="text" name="texts.0" data-endpoint="POSTapi-services-highlightBadWordsInText" data-component="body"  hidden>
<input type="text" name="texts.1" data-endpoint="POSTapi-services-highlightBadWordsInText" data-component="body" hidden>
<br>
Texts to be highlighted.</p>
<p>
<details>
<summary>
<b><code>things</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>
Things to be done.</summary>
<br>
<p>
<b><code>things[].name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="things.0.name" data-endpoint="POSTapi-services-highlightBadWordsInText" data-component="body" required  hidden>
<br>
Thing.</p>
</details>
</p>

</form>


## Censor bad words in texts.


This endpoint will censor any bad words in a list of texts.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/services/censorTexts/ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"texts":"He loves his family sooo much","items":{"inttt":4},"things":[{"name":"nam"},{"name":"nam"}]}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/services/censorTexts/ea"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "texts": "He loves his family sooo much",
    "items": {
        "inttt": 4
    },
    "things": [
        {
            "name": "nam"
        },
        {
            "name": "nam"
        }
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
[
    "He l===s his f====y sooo much",
    "But they don't fucking l===e him back."
]
```
<div id="execution-results-POSTapi-services-censorTexts--mode--" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-services-censorTexts--mode--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-services-censorTexts--mode--"></code></pre>
</div>
<div id="execution-error-POSTapi-services-censorTexts--mode--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-services-censorTexts--mode--"></code></pre>
</div>
<form id="form-POSTapi-services-censorTexts--mode--" data-method="POST" data-path="api/services/censorTexts/{mode?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-services-censorTexts--mode--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-tryout-POSTapi-services-censorTexts--mode--" onclick="tryItOut('POSTapi-services-censorTexts--mode--');">Try it out ⚡</button>
        <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-canceltryout-POSTapi-services-censorTexts--mode--" onclick="cancelTryOut('POSTapi-services-censorTexts--mode--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-executetryout-POSTapi-services-censorTexts--mode--" hidden>Send Request 💥</button>
</h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/services/censorTexts/{mode?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>mode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="mode" data-endpoint="POSTapi-services-censorTexts--mode--" data-component="url"  hidden>
<br>
Censorship mode. `full` will replace the entire word with `=====`,
`partial` will replace all characters but the first and last. Defaults to `partial`.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>texts</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
<input type="text" name="texts.0" data-endpoint="POSTapi-services-censorTexts--mode--" data-component="body"  hidden>
<input type="text" name="texts.1" data-endpoint="POSTapi-services-censorTexts--mode--" data-component="body" hidden>
<br>
Text to be censored.</p>
<p>
<details>
<summary>
<b><code>items</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>
An it</summary>
<br>
<p>
<b><code>items.inttt</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="items.inttt" data-endpoint="POSTapi-services-censorTexts--mode--" data-component="body"  hidden>
<br>
Other it</p>
</details>
</p>
<p>
<details>
<summary>
<b><code>things</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>
Things to be done.</summary>
<br>
<p>
<b><code>things[].name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="things.0.name" data-endpoint="POSTapi-services-censorTexts--mode--" data-component="body" required  hidden>
<br>
Thing.</p>
</details>
</p>

</form>


## Censor bad words in an image.


This endpoint will censor any bad words in the provided image and return the censored image. All bad words will be replaced by ======.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/services/censorImage" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "image=@C:\Users\shalvah\Projects\Temp\TheCensorshipAPI\public\images\logo-scribe.png" 
```

```javascript
const url = new URL(
    "http://localhost:8000/api/services/censorImage"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
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
<div id="execution-results-POSTapi-services-censorImage" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-services-censorImage"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-services-censorImage"></code></pre>
</div>
<div id="execution-error-POSTapi-services-censorImage" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-services-censorImage"></code></pre>
</div>
<form id="form-POSTapi-services-censorImage" data-method="POST" data-path="api/services/censorImage" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-services-censorImage', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-tryout-POSTapi-services-censorImage" onclick="tryItOut('POSTapi-services-censorImage');">Try it out ⚡</button>
        <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-canceltryout-POSTapi-services-censorImage" onclick="cancelTryOut('POSTapi-services-censorImage');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-executetryout-POSTapi-services-censorImage" hidden>Send Request 💥</button>
</h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/services/censorImage</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="image" data-endpoint="POSTapi-services-censorImage" data-component="body" required  hidden>
<br>
The image containing text to be censored.</p>

</form>


## Get the most frequently used bad words.


PS: This response was generated using the `@apiResource` and `@apiResourceModel` tag. 😏

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/services/getTopBadWords" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/services/getTopBadWords"
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
    "data": [
        {
            "word": "sed",
            "how_bad_is_it": "very bad"
        },
        {
            "word": "consequatur",
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
<div id="execution-results-GETapi-services-getTopBadWords" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-services-getTopBadWords"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-services-getTopBadWords"></code></pre>
</div>
<div id="execution-error-GETapi-services-getTopBadWords" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-services-getTopBadWords"></code></pre>
</div>
<form id="form-GETapi-services-getTopBadWords" data-method="GET" data-path="api/services/getTopBadWords" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-services-getTopBadWords', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-tryout-GETapi-services-getTopBadWords" onclick="tryItOut('GETapi-services-getTopBadWords');">Try it out ⚡</button>
        <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-canceltryout-GETapi-services-getTopBadWords" onclick="cancelTryOut('GETapi-services-getTopBadWords');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-executetryout-GETapi-services-getTopBadWords" hidden>Send Request 💥</button>
</h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/services/getTopBadWords</code></b>
</p>
</form>


## Get stats for a word&#039;s usage.


PS: This response was generated using the `@transformer` tag. 😏

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/services/getBadWordStats" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/services/getBadWordStats"
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
    "data": {
        "word": "earum",
        "last_used": 1602167486,
        "frequency": 1240354959
    }
}
```
<div id="execution-results-GETapi-services-getBadWordStats" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-services-getBadWordStats"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-services-getBadWordStats"></code></pre>
</div>
<div id="execution-error-GETapi-services-getBadWordStats" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-services-getBadWordStats"></code></pre>
</div>
<form id="form-GETapi-services-getBadWordStats" data-method="GET" data-path="api/services/getBadWordStats" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-services-getBadWordStats', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-tryout-GETapi-services-getBadWordStats" onclick="tryItOut('GETapi-services-getBadWordStats');">Try it out ⚡</button>
        <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-canceltryout-GETapi-services-getBadWordStats" onclick="cancelTryOut('GETapi-services-getBadWordStats');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-executetryout-GETapi-services-getBadWordStats" hidden>Send Request 💥</button>
</h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/services/getBadWordStats</code></b>
</p>
</form>

### Response
<h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
<p>
<b><code>word</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
The word</p>
<p>
<b><code>last_used</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<br>
Timestamp the word was last used anywhere in the world.</p>
<p>
<b><code>frequency</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<br>
The number of times people have used this word.</p>


