---
title: 

language_tabs:
- bash
- javascript

includes:
- "./prepend.md"
- "./authentication.md"
- "./groups/*"
- "./errors.md"
- "./append.md"

logo: 

toc_footers:
- <a href="./collection.json">View Postman Collection</a>
- <a href="./openapi.yaml">View OpenAPI (Swagger) Spec</a>
- <a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a>

---

# Introduction

Welcome to our API documentation!

<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile), and you can switch the programming language of the examples with the tabs in the top right (or from the nav menu at the top left on mobile).</aside>

<aside class="warning">PS: the interactive requests will always fail because I haven't hosted the API anywhere.
If you want to see them in action, clone <a href="https://github.com/shalvah/TheCensorshipAPI">the repo</a>, run <code>php artisan serve</code>, and then open up docs/index.html in the browser..</aside>

<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://localhost:8000";
</script>
<script src="js/tryitout.js"></script>

> Base URL:

```yaml
http://localhost:8000
```