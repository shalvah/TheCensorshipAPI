# Endpoints


## Health check

<small class="badge badge-darkred">requires authentication</small>

Check if the API is still alive.

PS. This is a Closure route. 😄

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/healthcheck" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/healthcheck"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
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

Hi!! 👋
```
<div id="execution-results-GETapi-healthcheck" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-healthcheck"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-healthcheck"></code></pre>
</div>
<div id="execution-error-GETapi-healthcheck" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-healthcheck"></code></pre>
</div>
<form id="form-GETapi-healthcheck" data-method="GET" data-path="api/healthcheck" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-healthcheck', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-tryout-GETapi-healthcheck" onclick="tryItOut('GETapi-healthcheck');">Try it out ⚡</button>
        <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-canceltryout-GETapi-healthcheck" onclick="cancelTryOut('GETapi-healthcheck');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius 5px; border-width: thin;" id="btn-executetryout-GETapi-healthcheck" hidden>Send Request 💥</button>
</h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/healthcheck</code></b>
</p>
<p>
<label id="auth-GETapi-healthcheck" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-healthcheck" data-component="header"></label>
</p>
</form>



