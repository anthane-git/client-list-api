<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../docs/css/theme-default.style.css" media="screen">
    <link rel="stylesheet" href="../docs/css/theme-default.print.css" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .javascript-example code { display: none; }
                    body .content .bash-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost:4500";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="../docs/js/tryitout-3.36.0.js"></script>

    <script src="../docs/js/theme-default-3.36.0.js"></script>

</head>

<body data-languages="[&quot;javascript&quot;,&quot;bash&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="../docs/images/navbar.png" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="client-management">
                    <a href="#client-management">Client Management</a>
                </li>
                                    <ul id="tocify-subheader-client-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="client-management-GETv1-clients">
                        <a href="#client-management-GETv1-clients">Display a listing of the clients.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="client-management-GETv1-clients-create">
                        <a href="#client-management-GETv1-clients-create">Show the form for creating a new client.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="client-management-POSTv1-clients">
                        <a href="#client-management-POSTv1-clients">Store a newly created client in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="client-management-GETv1-clients--id-">
                        <a href="#client-management-GETv1-clients--id-">Display the specified client.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="client-management-GETv1-clients--client_id--edit">
                        <a href="#client-management-GETv1-clients--client_id--edit">Show the form for editing the specified client.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="client-management-PUTv1-clients--id-">
                        <a href="#client-management-PUTv1-clients--id-">Update the specified client in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="client-management-DELETEv1-clients--id-">
                        <a href="#client-management-DELETEv1-clients--id-">Remove the specified client from storage.</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-3" class="tocify-header">
                <li class="tocify-item level-1" data-unique="company-mangement">
                    <a href="#company-mangement">Company Mangement</a>
                </li>
                                    <ul id="tocify-subheader-company-mangement" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="company-mangement-GETv1-companies">
                        <a href="#company-mangement-GETv1-companies">Display a listing of the companies.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="company-mangement-GETv1-companies-create">
                        <a href="#company-mangement-GETv1-companies-create">Show the form for creating a new company.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="company-mangement-POSTv1-companies">
                        <a href="#company-mangement-POSTv1-companies">Store a newly created company in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="company-mangement-GETv1-companies--id-">
                        <a href="#company-mangement-GETv1-companies--id-">Display the specified company.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="company-mangement-GETv1-companies--company_id--edit">
                        <a href="#company-mangement-GETv1-companies--company_id--edit">Show the form for editing the specified company.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="company-mangement-PUTv1-companies--id-">
                        <a href="#company-mangement-PUTv1-companies--id-">Update the specified company in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="company-mangement-DELETEv1-companies--id-">
                        <a href="#company-mangement-DELETEv1-companies--id-">Remove the specified company from storage.</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-4" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-management">
                    <a href="#user-management">User Management</a>
                </li>
                                    <ul id="tocify-subheader-user-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-management-GETv1-user">
                        <a href="#user-management-GETv1-user">Display authenticated user.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-management-DELETEv1-user">
                        <a href="#user-management-DELETEv1-user">Remove the specified user from storage.</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="../docs/collection.json">View Postman collection</a></li>
                            <li><a href="../docs/openapi.yaml">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: August 25 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Client List API Docs</p>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:4500</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is authenticated by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by authenticating with the identity provider.</p>

        <h1 id="client-management">Client Management</h1>

    <p>API to manage the client resource.</p>

            <h2 id="client-management-GETv1-clients">Display a listing of the clients.</h2>

<p>
</p>



<span id="example-requests-GETv1-clients">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/clients"
);

const params = {
    "page_size": "8",
    "page": "12",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:4500/v1/clients?page_size=8&amp;page=12" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-GETv1-clients">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;&quot;,
            &quot;email&quot;: null,
            &quot;title&quot;: null,
            &quot;first_name&quot;: null,
            &quot;last_name&quot;: null,
            &quot;primary_phone&quot;: null,
            &quot;secondary_phone&quot;: null,
            &quot;avatar&quot;: null,
            &quot;job_title&quot;: null,
            &quot;timezone&quot;: null,
            &quot;company_id&quot;: null,
            &quot;user&quot;: null
        },
        {
            &quot;id&quot;: &quot;&quot;,
            &quot;email&quot;: null,
            &quot;title&quot;: null,
            &quot;first_name&quot;: null,
            &quot;last_name&quot;: null,
            &quot;primary_phone&quot;: null,
            &quot;secondary_phone&quot;: null,
            &quot;avatar&quot;: null,
            &quot;job_title&quot;: null,
            &quot;timezone&quot;: null,
            &quot;company_id&quot;: null,
            &quot;user&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-clients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-clients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-clients"></code></pre>
</span>
<span id="execution-error-GETv1-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-clients"></code></pre>
</span>
<form id="form-GETv1-clients" data-method="GET"
      data-path="v1/clients"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-clients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-clients"
                    onclick="tryItOut('GETv1-clients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-clients"
                    onclick="cancelTryOut('GETv1-clients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-clients" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/clients</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>page_size</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page_size"
               data-endpoint="GETv1-clients"
               value="8"
               data-component="query" hidden>
    <br>
<p>Size per page. Defaults to 20.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETv1-clients"
               value="12"
               data-component="query" hidden>
    <br>
<p>int Page to view.</p>
            </p>
                </form>

            <h2 id="client-management-GETv1-clients-create">Show the form for creating a new client.</h2>

<p>
</p>



<span id="example-requests-GETv1-clients-create">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/clients/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:4500/v1/clients/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-GETv1-clients-create">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;email&quot;: null,
        &quot;title&quot;: null,
        &quot;first_name&quot;: null,
        &quot;last_name&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;avatar&quot;: null,
        &quot;job_title&quot;: null,
        &quot;timezone&quot;: null,
        &quot;company_id&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-clients-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-clients-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-clients-create"></code></pre>
</span>
<span id="execution-error-GETv1-clients-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-clients-create"></code></pre>
</span>
<form id="form-GETv1-clients-create" data-method="GET"
      data-path="v1/clients/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-clients-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-clients-create"
                    onclick="tryItOut('GETv1-clients-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-clients-create"
                    onclick="cancelTryOut('GETv1-clients-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-clients-create" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/clients/create</code></b>
        </p>
                    </form>

            <h2 id="client-management-POSTv1-clients">Store a newly created client in storage.</h2>

<p>
</p>



<span id="example-requests-POSTv1-clients">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/clients"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "maddison.mcdermott@example.com",
    "first_name": "quo",
    "last_name": "nostrum",
    "avatar": "https:\/\/www.bins.com\/voluptatem-aut-odit-hic-eos-amet-ipsam",
    "title": "veritatis",
    "primary_phone": "nostrum",
    "secondary_phone": "mollitia",
    "job_title": "vel",
    "timezone": "suscipit",
    "company_id": "neque",
    "user_id": "est"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:4500/v1/clients" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"maddison.mcdermott@example.com\",
    \"first_name\": \"quo\",
    \"last_name\": \"nostrum\",
    \"avatar\": \"https:\\/\\/www.bins.com\\/voluptatem-aut-odit-hic-eos-amet-ipsam\",
    \"title\": \"veritatis\",
    \"primary_phone\": \"nostrum\",
    \"secondary_phone\": \"mollitia\",
    \"job_title\": \"vel\",
    \"timezone\": \"suscipit\",
    \"company_id\": \"neque\",
    \"user_id\": \"est\"
}"
</code></pre></div>

</span>

<span id="example-responses-POSTv1-clients">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;email&quot;: null,
        &quot;title&quot;: null,
        &quot;first_name&quot;: null,
        &quot;last_name&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;avatar&quot;: null,
        &quot;job_title&quot;: null,
        &quot;timezone&quot;: null,
        &quot;company_id&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTv1-clients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTv1-clients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-clients"></code></pre>
</span>
<span id="execution-error-POSTv1-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-clients"></code></pre>
</span>
<form id="form-POSTv1-clients" data-method="POST"
      data-path="v1/clients"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTv1-clients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTv1-clients"
                    onclick="tryItOut('POSTv1-clients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTv1-clients"
                    onclick="cancelTryOut('POSTv1-clients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTv1-clients" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>v1/clients</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTv1-clients"
               value="maddison.mcdermott@example.com"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="first_name"
               data-endpoint="POSTv1-clients"
               value="quo"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="POSTv1-clients"
               value="nostrum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>avatar</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="avatar"
               data-endpoint="POSTv1-clients"
               value="https://www.bins.com/voluptatem-aut-odit-hic-eos-amet-ipsam"
               data-component="body" hidden>
    <br>
<p>Must be a valid URL.</p>
        </p>
                <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTv1-clients"
               value="veritatis"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>primary_phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="primary_phone"
               data-endpoint="POSTv1-clients"
               value="nostrum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>secondary_phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="secondary_phone"
               data-endpoint="POSTv1-clients"
               value="mollitia"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>job_title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="job_title"
               data-endpoint="POSTv1-clients"
               value="vel"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>timezone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="timezone"
               data-endpoint="POSTv1-clients"
               value="suscipit"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>company_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="company_id"
               data-endpoint="POSTv1-clients"
               value="neque"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="user_id"
               data-endpoint="POSTv1-clients"
               value="est"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="client-management-GETv1-clients--id-">Display the specified client.</h2>

<p>
</p>



<span id="example-requests-GETv1-clients--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/clients/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:4500/v1/clients/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-GETv1-clients--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;email&quot;: null,
        &quot;title&quot;: null,
        &quot;first_name&quot;: null,
        &quot;last_name&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;avatar&quot;: null,
        &quot;job_title&quot;: null,
        &quot;timezone&quot;: null,
        &quot;company_id&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-clients--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-clients--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-clients--id-"></code></pre>
</span>
<span id="execution-error-GETv1-clients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-clients--id-"></code></pre>
</span>
<form id="form-GETv1-clients--id-" data-method="GET"
      data-path="v1/clients/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-clients--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-clients--id-"
                    onclick="tryItOut('GETv1-clients--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-clients--id-"
                    onclick="cancelTryOut('GETv1-clients--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-clients--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/clients/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETv1-clients--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the client.</p>
            </p>
                    </form>

            <h2 id="client-management-GETv1-clients--client_id--edit">Show the form for editing the specified client.</h2>

<p>
</p>



<span id="example-requests-GETv1-clients--client_id--edit">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/clients/5/edit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:4500/v1/clients/5/edit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-GETv1-clients--client_id--edit">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;email&quot;: null,
        &quot;title&quot;: null,
        &quot;first_name&quot;: null,
        &quot;last_name&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;avatar&quot;: null,
        &quot;job_title&quot;: null,
        &quot;timezone&quot;: null,
        &quot;company_id&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-clients--client_id--edit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-clients--client_id--edit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-clients--client_id--edit"></code></pre>
</span>
<span id="execution-error-GETv1-clients--client_id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-clients--client_id--edit"></code></pre>
</span>
<form id="form-GETv1-clients--client_id--edit" data-method="GET"
      data-path="v1/clients/{client_id}/edit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-clients--client_id--edit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-clients--client_id--edit"
                    onclick="tryItOut('GETv1-clients--client_id--edit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-clients--client_id--edit"
                    onclick="cancelTryOut('GETv1-clients--client_id--edit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-clients--client_id--edit" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/clients/{client_id}/edit</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>client_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="client_id"
               data-endpoint="GETv1-clients--client_id--edit"
               value="5"
               data-component="url" hidden>
    <br>
<p>The ID of the client.</p>
            </p>
                    </form>

            <h2 id="client-management-PUTv1-clients--id-">Update the specified client in storage.</h2>

<p>
</p>



<span id="example-requests-PUTv1-clients--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/clients/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:4500/v1/clients/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-PUTv1-clients--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;email&quot;: null,
        &quot;title&quot;: null,
        &quot;first_name&quot;: null,
        &quot;last_name&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;avatar&quot;: null,
        &quot;job_title&quot;: null,
        &quot;timezone&quot;: null,
        &quot;company_id&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTv1-clients--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTv1-clients--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTv1-clients--id-"></code></pre>
</span>
<span id="execution-error-PUTv1-clients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTv1-clients--id-"></code></pre>
</span>
<form id="form-PUTv1-clients--id-" data-method="PUT"
      data-path="v1/clients/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTv1-clients--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTv1-clients--id-"
                    onclick="tryItOut('PUTv1-clients--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTv1-clients--id-"
                    onclick="cancelTryOut('PUTv1-clients--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTv1-clients--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>v1/clients/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>v1/clients/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTv1-clients--id-"
               value="16"
               data-component="url" hidden>
    <br>
<p>The ID of the client.</p>
            </p>
                    </form>

            <h2 id="client-management-DELETEv1-clients--id-">Remove the specified client from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEv1-clients--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/clients/20"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:4500/v1/clients/20" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-DELETEv1-clients--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;email&quot;: null,
        &quot;title&quot;: null,
        &quot;first_name&quot;: null,
        &quot;last_name&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;avatar&quot;: null,
        &quot;job_title&quot;: null,
        &quot;timezone&quot;: null,
        &quot;company_id&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEv1-clients--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEv1-clients--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEv1-clients--id-"></code></pre>
</span>
<span id="execution-error-DELETEv1-clients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEv1-clients--id-"></code></pre>
</span>
<form id="form-DELETEv1-clients--id-" data-method="DELETE"
      data-path="v1/clients/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEv1-clients--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEv1-clients--id-"
                    onclick="tryItOut('DELETEv1-clients--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEv1-clients--id-"
                    onclick="cancelTryOut('DELETEv1-clients--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEv1-clients--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>v1/clients/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEv1-clients--id-"
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the client.</p>
            </p>
                    </form>

        <h1 id="company-mangement">Company Mangement</h1>

    <p>API to manage company resource.</p>

            <h2 id="company-mangement-GETv1-companies">Display a listing of the companies.</h2>

<p>
</p>



<span id="example-requests-GETv1-companies">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/companies"
);

const params = {
    "page_size": "5",
    "page": "6",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:4500/v1/companies?page_size=5&amp;page=6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-GETv1-companies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;&quot;,
            &quot;name&quot;: null,
            &quot;logo&quot;: null,
            &quot;email&quot;: null,
            &quot;domain&quot;: null,
            &quot;description&quot;: null,
            &quot;primary_phone&quot;: null,
            &quot;secondary_phone&quot;: null,
            &quot;address&quot;: null,
            &quot;user&quot;: null
        },
        {
            &quot;id&quot;: &quot;&quot;,
            &quot;name&quot;: null,
            &quot;logo&quot;: null,
            &quot;email&quot;: null,
            &quot;domain&quot;: null,
            &quot;description&quot;: null,
            &quot;primary_phone&quot;: null,
            &quot;secondary_phone&quot;: null,
            &quot;address&quot;: null,
            &quot;user&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-companies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-companies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-companies"></code></pre>
</span>
<span id="execution-error-GETv1-companies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-companies"></code></pre>
</span>
<form id="form-GETv1-companies" data-method="GET"
      data-path="v1/companies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-companies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-companies"
                    onclick="tryItOut('GETv1-companies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-companies"
                    onclick="cancelTryOut('GETv1-companies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-companies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/companies</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>page_size</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page_size"
               data-endpoint="GETv1-companies"
               value="5"
               data-component="query" hidden>
    <br>
<p>Size per page. Defaults to 20.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETv1-companies"
               value="6"
               data-component="query" hidden>
    <br>
<p>int Page to view.</p>
            </p>
                </form>

            <h2 id="company-mangement-GETv1-companies-create">Show the form for creating a new company.</h2>

<p>
</p>



<span id="example-requests-GETv1-companies-create">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/companies/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:4500/v1/companies/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-GETv1-companies-create">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;name&quot;: null,
        &quot;logo&quot;: null,
        &quot;email&quot;: null,
        &quot;domain&quot;: null,
        &quot;description&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;address&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-companies-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-companies-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-companies-create"></code></pre>
</span>
<span id="execution-error-GETv1-companies-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-companies-create"></code></pre>
</span>
<form id="form-GETv1-companies-create" data-method="GET"
      data-path="v1/companies/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-companies-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-companies-create"
                    onclick="tryItOut('GETv1-companies-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-companies-create"
                    onclick="cancelTryOut('GETv1-companies-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-companies-create" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/companies/create</code></b>
        </p>
                    </form>

            <h2 id="company-mangement-POSTv1-companies">Store a newly created company in storage.</h2>

<p>
</p>



<span id="example-requests-POSTv1-companies">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/companies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "laborum",
    "email": "cathrine.bogisich@example.com",
    "domain": "a",
    "primary_phone": "vitae",
    "secondary_phone": "dolore",
    "address": "quasi",
    "description": "architecto",
    "logo": "aut",
    "user_id": "corrupti",
    "client_ids": [
        "nihil"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:4500/v1/companies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"laborum\",
    \"email\": \"cathrine.bogisich@example.com\",
    \"domain\": \"a\",
    \"primary_phone\": \"vitae\",
    \"secondary_phone\": \"dolore\",
    \"address\": \"quasi\",
    \"description\": \"architecto\",
    \"logo\": \"aut\",
    \"user_id\": \"corrupti\",
    \"client_ids\": [
        \"nihil\"
    ]
}"
</code></pre></div>

</span>

<span id="example-responses-POSTv1-companies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;name&quot;: null,
        &quot;logo&quot;: null,
        &quot;email&quot;: null,
        &quot;domain&quot;: null,
        &quot;description&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;address&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTv1-companies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTv1-companies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-companies"></code></pre>
</span>
<span id="execution-error-POSTv1-companies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-companies"></code></pre>
</span>
<form id="form-POSTv1-companies" data-method="POST"
      data-path="v1/companies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTv1-companies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTv1-companies"
                    onclick="tryItOut('POSTv1-companies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTv1-companies"
                    onclick="cancelTryOut('POSTv1-companies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTv1-companies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>v1/companies</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTv1-companies"
               value="laborum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTv1-companies"
               value="cathrine.bogisich@example.com"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>domain</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="domain"
               data-endpoint="POSTv1-companies"
               value="a"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>primary_phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="primary_phone"
               data-endpoint="POSTv1-companies"
               value="vitae"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>secondary_phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="secondary_phone"
               data-endpoint="POSTv1-companies"
               value="dolore"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="address"
               data-endpoint="POSTv1-companies"
               value="quasi"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTv1-companies"
               value="architecto"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>logo</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="logo"
               data-endpoint="POSTv1-companies"
               value="aut"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="user_id"
               data-endpoint="POSTv1-companies"
               value="corrupti"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>client_ids</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="client_ids[0]"
               data-endpoint="POSTv1-companies"
               data-component="body" hidden>
        <input type="text"
               name="client_ids[1]"
               data-endpoint="POSTv1-companies"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="company-mangement-GETv1-companies--id-">Display the specified company.</h2>

<p>
</p>



<span id="example-requests-GETv1-companies--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/companies/10"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:4500/v1/companies/10" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-GETv1-companies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;name&quot;: null,
        &quot;logo&quot;: null,
        &quot;email&quot;: null,
        &quot;domain&quot;: null,
        &quot;description&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;address&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-companies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-companies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-companies--id-"></code></pre>
</span>
<span id="execution-error-GETv1-companies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-companies--id-"></code></pre>
</span>
<form id="form-GETv1-companies--id-" data-method="GET"
      data-path="v1/companies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-companies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-companies--id-"
                    onclick="tryItOut('GETv1-companies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-companies--id-"
                    onclick="cancelTryOut('GETv1-companies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-companies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/companies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETv1-companies--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the company.</p>
            </p>
                    </form>

            <h2 id="company-mangement-GETv1-companies--company_id--edit">Show the form for editing the specified company.</h2>

<p>
</p>



<span id="example-requests-GETv1-companies--company_id--edit">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/companies/8/edit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:4500/v1/companies/8/edit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-GETv1-companies--company_id--edit">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;name&quot;: null,
        &quot;logo&quot;: null,
        &quot;email&quot;: null,
        &quot;domain&quot;: null,
        &quot;description&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;address&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-companies--company_id--edit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-companies--company_id--edit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-companies--company_id--edit"></code></pre>
</span>
<span id="execution-error-GETv1-companies--company_id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-companies--company_id--edit"></code></pre>
</span>
<form id="form-GETv1-companies--company_id--edit" data-method="GET"
      data-path="v1/companies/{company_id}/edit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-companies--company_id--edit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-companies--company_id--edit"
                    onclick="tryItOut('GETv1-companies--company_id--edit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-companies--company_id--edit"
                    onclick="cancelTryOut('GETv1-companies--company_id--edit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-companies--company_id--edit" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/companies/{company_id}/edit</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>company_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="company_id"
               data-endpoint="GETv1-companies--company_id--edit"
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the company.</p>
            </p>
                    </form>

            <h2 id="company-mangement-PUTv1-companies--id-">Update the specified company in storage.</h2>

<p>
</p>



<span id="example-requests-PUTv1-companies--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/companies/19"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:4500/v1/companies/19" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-PUTv1-companies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;name&quot;: null,
        &quot;logo&quot;: null,
        &quot;email&quot;: null,
        &quot;domain&quot;: null,
        &quot;description&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;address&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTv1-companies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTv1-companies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTv1-companies--id-"></code></pre>
</span>
<span id="execution-error-PUTv1-companies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTv1-companies--id-"></code></pre>
</span>
<form id="form-PUTv1-companies--id-" data-method="PUT"
      data-path="v1/companies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTv1-companies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTv1-companies--id-"
                    onclick="tryItOut('PUTv1-companies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTv1-companies--id-"
                    onclick="cancelTryOut('PUTv1-companies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTv1-companies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>v1/companies/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>v1/companies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTv1-companies--id-"
               value="19"
               data-component="url" hidden>
    <br>
<p>The ID of the company.</p>
            </p>
                    </form>

            <h2 id="company-mangement-DELETEv1-companies--id-">Remove the specified company from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEv1-companies--id-">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/companies/6"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:4500/v1/companies/6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-DELETEv1-companies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;&quot;,
        &quot;name&quot;: null,
        &quot;logo&quot;: null,
        &quot;email&quot;: null,
        &quot;domain&quot;: null,
        &quot;description&quot;: null,
        &quot;primary_phone&quot;: null,
        &quot;secondary_phone&quot;: null,
        &quot;address&quot;: null,
        &quot;user&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEv1-companies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEv1-companies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEv1-companies--id-"></code></pre>
</span>
<span id="execution-error-DELETEv1-companies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEv1-companies--id-"></code></pre>
</span>
<form id="form-DELETEv1-companies--id-" data-method="DELETE"
      data-path="v1/companies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEv1-companies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEv1-companies--id-"
                    onclick="tryItOut('DELETEv1-companies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEv1-companies--id-"
                    onclick="cancelTryOut('DELETEv1-companies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEv1-companies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>v1/companies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEv1-companies--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the company.</p>
            </p>
                    </form>

        <h1 id="user-management">User Management</h1>

    <p>API to manage the user resource.</p>

            <h2 id="user-management-GETv1-user">Display authenticated user.</h2>

<p>
</p>



<span id="example-requests-GETv1-user">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:4500/v1/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-GETv1-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;uuid&quot;: &quot;cf292f53-620a-32de-a97c-6ee9ad72df1e&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-user"></code></pre>
</span>
<span id="execution-error-GETv1-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-user"></code></pre>
</span>
<form id="form-GETv1-user" data-method="GET"
      data-path="v1/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-user"
                    onclick="tryItOut('GETv1-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-user"
                    onclick="cancelTryOut('GETv1-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/user</code></b>
        </p>
                    </form>

            <h2 id="user-management-DELETEv1-user">Remove the specified user from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEv1-user">
<blockquote>Example request:</blockquote>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:4500/v1/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:4500/v1/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>

</span>

<span id="example-responses-DELETEv1-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;uuid&quot;: &quot;01a7fbe3-4e1e-3379-98d0-5c2555db5225&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEv1-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEv1-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEv1-user"></code></pre>
</span>
<span id="execution-error-DELETEv1-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEv1-user"></code></pre>
</span>
<form id="form-DELETEv1-user" data-method="DELETE"
      data-path="v1/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEv1-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEv1-user"
                    onclick="tryItOut('DELETEv1-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEv1-user"
                    onclick="cancelTryOut('DELETEv1-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEv1-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>v1/user</code></b>
        </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                            </div>
            </div>
</div>
</body>
</html>
