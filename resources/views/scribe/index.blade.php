<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>TheCensorshipAPI API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/docs/css/style.css" media="screen" />
    <link rel="stylesheet" href="css/print.css" media="print" />
    <script src="/docs/js/all.js"></script>

    <link rel="stylesheet" href="css/highlight-darcula.css" media="" />
    <script src="js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;php&quot;,&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="php">php</a>
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.json") }}">View Postman Collection</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: May 3 2020</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>Welcome to our API documentation!</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile), and you can switch the programming language of the examples with the tabs in the top right (or from the nav menu at the top left on mobile).</aside><h1>Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {your-token}"</code></strong>. You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p><h1>Bad words</h1>
<p>Do it. Use a bad word today, make your family proud. This API will make that possible.</p>
<h2>Add a word to the list.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/badwords',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'word' =&gt; 'people',
            'how_bad_is_it' =&gt; 'very bad',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/badwords" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"word":"people","how_bad_is_it":"very bad"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/badwords</code></strong></p>
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
<h2>Fetch a specific bad word.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/badwords/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/badwords/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">"family"</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/badwords/{badword}</code></strong></p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
    <code><b>badword</b></code>&nbsp;      <br>
    The bad word ID.
</p>
<h2>Update a bad word.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/badwords/3',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer c6aEa8Zvk561PgbVDfehd43',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'how_bad_is_it' =&gt; 'very bad',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/badwords/3" \
    -H "Authorization: Bearer c6aEa8Zvk561PgbVDfehd43" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"how_bad_is_it":"very bad"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/badwords/3"
);

let headers = {
    "Authorization": "Bearer c6aEa8Zvk561PgbVDfehd43",
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-darkblue">PUT</small>
<strong><code>api/badwords/{badword}</code></strong></p>
<p><small class="badge badge-purple">PATCH</small>
<strong><code>api/badwords/{badword}</code></strong></p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
    <code><b>badword</b></code>&nbsp;      <br>
    The bad word ID.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
    <code><b>how_bad_is_it</b></code>&nbsp; <small>string</small>         <i>optional</i>    <br>
    One of: `unspeakable`, `horrible`, `very bad`, `bad`.
</p><h1>Endpoints</h1>
<h2>doc.json</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/doc.json',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/doc.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/doc.json"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "variables": [],
    "info": {
        "name": "TheCensorshipAPI API",
        "_postman_id": "b4b39ff6-4073-4d00-89d9-9dde13b9911b",
        "description": "",
        "schema": "https:\/\/schema.getpostman.com\/json\/collection\/v2.0.0\/collection.json"
    },
    "item": [
        {
            "name": "Other",
            "description": "",
            "item": [
                {
                    "name": "Fetch the list of bad words.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/badwords",
                            "query": [
                                {
                                    "key": "filter[how_bad_is_it]",
                                    "value": "bad",
                                    "description": "Duh.",
                                    "disabled": false
                                },
                                {
                                    "key": "filter[contains]",
                                    "value": "commodi",
                                    "description": "String that word must contain.",
                                    "disabled": false
                                },
                                {
                                    "key": "ids[]",
                                    "value": "voluptas",
                                    "description": "List of IDs.",
                                    "disabled": false
                                },
                                {
                                    "key": "pageSize",
                                    "value": "5",
                                    "description": "Um.",
                                    "disabled": false
                                }
                            ]
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Remove a bad word from the list.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/badwords\/:badword",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "general",
            "description": "",
            "item": [
                {
                    "name": "doc.json",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "doc.json",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/user",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/user",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "\/",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "\/",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        }
    ]
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>doc.json</code></strong></p>
<h2>api</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api</code></strong></p>
<h2>api/user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/user',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/user</code></strong></p>
<h2>/</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>/</code></strong></p><h1>Other</h1>
<p>Other bad words APIs. You shouldn't use these unless you're a bad boy.</p>
<h2>Fetch the list of bad words.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/badwords',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'filter[how_bad_is_it]'=&gt; 'bad',
            'filter[contains]'=&gt; 'eaque',
            'ids[]'=&gt; 'facere',
            'pageSize'=&gt; '5',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/badwords?filter[how_bad_is_it]=bad&amp;filter[contains]=eaque&amp;ids[]=facere&amp;pageSize=5" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/badwords"
);

let params = {
    "filter[how_bad_is_it]": "bad",
    "filter[contains]": "eaque",
    "ids[]": "facere",
    "pageSize": "5",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">[
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
]</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/badwords</code></strong></p>
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
<h2>Remove a bad word from the list.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/badwords/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/badwords/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>Request</h3>
<p><small class="badge badge-red">DELETE</small>
<strong><code>api/badwords/{badword}</code></strong></p>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["php","bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>