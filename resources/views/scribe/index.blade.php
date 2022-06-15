<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Docs</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.30.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.30.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
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
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GET-">
                        <a href="#endpoints-GET-">GET /</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETrequest-docs">
                        <a href="#endpoints-GETrequest-docs">GET request-docs</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETsanctum-csrf-cookie">
                        <a href="#endpoints-GETsanctum-csrf-cookie">Return an empty response simply to trigger the storage of the CSRF cookie in the browser.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GET_ignition-health-check">
                        <a href="#endpoints-GET_ignition-health-check">GET _ignition/health-check</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POST_ignition-execute-solution">
                        <a href="#endpoints-POST_ignition-execute-solution">POST _ignition/execute-solution</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POST_ignition-update-config">
                        <a href="#endpoints-POST_ignition-update-config">POST _ignition/update-config</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                        <a href="#endpoints-GETapi-user">GET api/user</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GEThome">
                        <a href="#endpoints-GEThome">GET home</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETproducts">
                        <a href="#endpoints-GETproducts">GET products</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETuser--id-">
                        <a href="#endpoints-GETuser--id-">GET user/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTuser--id-">
                        <a href="#endpoints-PUTuser--id-">PUT user/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEuser--id-">
                        <a href="#endpoints-DELETEuser--id-">DELETE user/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETuser--user--shoppinglist">
                        <a href="#endpoints-GETuser--user--shoppinglist">GET user/{user}/shoppinglist</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTuser--user--shoppinglist">
                        <a href="#endpoints-POSTuser--user--shoppinglist">POST user/{user}/shoppinglist</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETuser--user--shoppinglist--id-">
                        <a href="#endpoints-GETuser--user--shoppinglist--id-">GET user/{user}/shoppinglist/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEuser--user--shoppinglist--id-">
                        <a href="#endpoints-DELETEuser--user--shoppinglist--id-">DELETE user/{user}/shoppinglist/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTuser--user--shoppinglist--shoppinglist--items--item-">
                        <a href="#endpoints-PUTuser--user--shoppinglist--shoppinglist--items--item-">PUT user/{user}/shoppinglist/{shoppinglist}/items/{item}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEuser--user--shoppinglist--shoppinglist--items--item-">
                        <a href="#endpoints-DELETEuser--user--shoppinglist--shoppinglist--items--item-">DELETE user/{user}/shoppinglist/{shoppinglist}/items/{item}</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 14 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is authenticated by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GET-">GET /</h2>

<p>
</p>



<span id="example-requests-GET-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GET-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: laravel_session=eyJpdiI6Im00b0JmbTZ5WGxrTTY1RmpQUnZUSUE9PSIsInZhbHVlIjoiVWlXWXUvc3ZGdFFkbU5FOEM2WXpEUGZGcFZGZnRNb0VHMTdxeGJrMTY5MzcvM3kyOE90NGtaU25QcFc2ekE3VjdFd0ZwU016cVhmazFhdEhDV2M2ZFNKY1U5MlJyVk90OFlTeFNMbzlMVEdGb1piZzB0ZmJ5bmczNjhXZWFPSVYiLCJtYWMiOiI5MDA5NWIxMmQ1ODM2YTk0M2IxZDI3ZWU3OWI0OTVhZTM0ZmQ2OWJiNDNhZWFhMmRjNjhhZDY2NDBjN2UwYWVmIiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;title&gt;Laravel&lt;/title&gt;

        &lt;!-- Fonts --&gt;
        &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;

        &lt;!-- Styles --&gt;
        &lt;style&gt;
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        &lt;/style&gt;

        &lt;style&gt;
            body {
                font-family: &#039;Nunito&#039;, sans-serif;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body class=&quot;antialiased&quot;&gt;
        &lt;div class=&quot;relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0&quot;&gt;
            
            &lt;div class=&quot;max-w-6xl mx-auto sm:px-6 lg:px-8&quot;&gt;
                &lt;div class=&quot;flex justify-center pt-8 sm:justify-start sm:pt-0&quot;&gt;
                    &lt;svg viewBox=&quot;0 0 651 192&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;h-16 w-auto text-gray-700 sm:h-20&quot;&gt;
                        &lt;g clip-path=&quot;url(#clip0)&quot; fill=&quot;#EF3B2D&quot;&gt;
                            &lt;path d=&quot;M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z&quot;/&gt;
                        &lt;/g&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;

                &lt;div class=&quot;mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg&quot;&gt;
                    &lt;div class=&quot;grid grid-cols-1 md:grid-cols-2&quot;&gt;
                        &lt;div class=&quot;p-6&quot;&gt;
                            &lt;div class=&quot;flex items-center&quot;&gt;
                                &lt;svg fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2&quot; viewBox=&quot;0 0 24 24&quot; class=&quot;w-8 h-8 text-gray-500&quot;&gt;&lt;path d=&quot;M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class=&quot;ml-4 text-lg leading-7 font-semibold&quot;&gt;&lt;a href=&quot;https://laravel.com/docs&quot; class=&quot;underline text-gray-900 dark:text-white&quot;&gt;Documentation&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;ml-12&quot;&gt;
                                &lt;div class=&quot;mt-2 text-gray-600 dark:text-gray-400 text-sm&quot;&gt;
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l&quot;&gt;
                            &lt;div class=&quot;flex items-center&quot;&gt;
                                &lt;svg fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2&quot; viewBox=&quot;0 0 24 24&quot; class=&quot;w-8 h-8 text-gray-500&quot;&gt;&lt;path d=&quot;M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M15 13a3 3 0 11-6 0 3 3 0 016 0z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class=&quot;ml-4 text-lg leading-7 font-semibold&quot;&gt;&lt;a href=&quot;https://laracasts.com&quot; class=&quot;underline text-gray-900 dark:text-white&quot;&gt;Laracasts&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;ml-12&quot;&gt;
                                &lt;div class=&quot;mt-2 text-gray-600 dark:text-gray-400 text-sm&quot;&gt;
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;p-6 border-t border-gray-200 dark:border-gray-700&quot;&gt;
                            &lt;div class=&quot;flex items-center&quot;&gt;
                                &lt;svg fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2&quot; viewBox=&quot;0 0 24 24&quot; class=&quot;w-8 h-8 text-gray-500&quot;&gt;&lt;path d=&quot;M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class=&quot;ml-4 text-lg leading-7 font-semibold&quot;&gt;&lt;a href=&quot;https://laravel-news.com/&quot; class=&quot;underline text-gray-900 dark:text-white&quot;&gt;Laravel News&lt;/a&gt;&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;ml-12&quot;&gt;
                                &lt;div class=&quot;mt-2 text-gray-600 dark:text-gray-400 text-sm&quot;&gt;
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class=&quot;p-6 border-t border-gray-200 dark:border-gray-700 md:border-l&quot;&gt;
                            &lt;div class=&quot;flex items-center&quot;&gt;
                                &lt;svg fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2&quot; viewBox=&quot;0 0 24 24&quot; class=&quot;w-8 h-8 text-gray-500&quot;&gt;&lt;path d=&quot;M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;
                                &lt;div class=&quot;ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white&quot;&gt;Vibrant Ecosystem&lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class=&quot;ml-12&quot;&gt;
                                &lt;div class=&quot;mt-2 text-gray-600 dark:text-gray-400 text-sm&quot;&gt;
                                    Laravel&#039;s robust library of first-party tools and libraries, such as &lt;a href=&quot;https://forge.laravel.com&quot; class=&quot;underline&quot;&gt;Forge&lt;/a&gt;, &lt;a href=&quot;https://vapor.laravel.com&quot; class=&quot;underline&quot;&gt;Vapor&lt;/a&gt;, &lt;a href=&quot;https://nova.laravel.com&quot; class=&quot;underline&quot;&gt;Nova&lt;/a&gt;, and &lt;a href=&quot;https://envoyer.io&quot; class=&quot;underline&quot;&gt;Envoyer&lt;/a&gt; help you take your projects to the next level. Pair them with powerful open source libraries like &lt;a href=&quot;https://laravel.com/docs/billing&quot; class=&quot;underline&quot;&gt;Cashier&lt;/a&gt;, &lt;a href=&quot;https://laravel.com/docs/dusk&quot; class=&quot;underline&quot;&gt;Dusk&lt;/a&gt;, &lt;a href=&quot;https://laravel.com/docs/broadcasting&quot; class=&quot;underline&quot;&gt;Echo&lt;/a&gt;, &lt;a href=&quot;https://laravel.com/docs/horizon&quot; class=&quot;underline&quot;&gt;Horizon&lt;/a&gt;, &lt;a href=&quot;https://laravel.com/docs/sanctum&quot; class=&quot;underline&quot;&gt;Sanctum&lt;/a&gt;, &lt;a href=&quot;https://laravel.com/docs/telescope&quot; class=&quot;underline&quot;&gt;Telescope&lt;/a&gt;, and more.
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;

                &lt;div class=&quot;flex justify-center mt-4 sm:items-center sm:justify-between&quot;&gt;
                    &lt;div class=&quot;text-center text-sm text-gray-500 sm:text-left&quot;&gt;
                        &lt;div class=&quot;flex items-center&quot;&gt;
                            &lt;svg fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2&quot; viewBox=&quot;0 0 24 24&quot; stroke=&quot;currentColor&quot; class=&quot;-mt-px w-5 h-5 text-gray-400&quot;&gt;
                                &lt;path d=&quot;M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z&quot;&gt;&lt;/path&gt;
                            &lt;/svg&gt;

                            &lt;a href=&quot;https://laravel.bigcartel.com&quot; class=&quot;ml-1 underline&quot;&gt;
                                Shop
                            &lt;/a&gt;

                            &lt;svg fill=&quot;none&quot; stroke=&quot;currentColor&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2&quot; viewBox=&quot;0 0 24 24&quot; class=&quot;ml-4 -mt-px w-5 h-5 text-gray-400&quot;&gt;
                                &lt;path d=&quot;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&quot;&gt;&lt;/path&gt;
                            &lt;/svg&gt;

                            &lt;a href=&quot;https://github.com/sponsors/taylorotwell&quot; class=&quot;ml-1 underline&quot;&gt;
                                Sponsor
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;

                    &lt;div class=&quot;ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0&quot;&gt;
                        Laravel v9.17.0 (PHP v8.1.5)
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GET-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</span>
<span id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</span>
<form id="form-GET-" data-method="GET"
      data-path="/"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET-"
                    onclick="tryItOut('GET-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET-"
                    onclick="cancelTryOut('GET-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>/</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETrequest-docs">GET request-docs</h2>

<p>
</p>



<span id="example-requests-GETrequest-docs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/request-docs" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/request-docs"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETrequest-docs">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Method App\\Http\\Controllers\\UserController::store() does not exist&quot;,
    &quot;exception&quot;: &quot;ReflectionException&quot;,
    &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/rakutentech/laravel-request-docs/src/LaravelRequestDocs.php&quot;,
    &quot;line&quot;: 118,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/rakutentech/laravel-request-docs/src/LaravelRequestDocs.php&quot;,
            &quot;line&quot;: 118,
            &quot;function&quot;: &quot;__construct&quot;,
            &quot;class&quot;: &quot;ReflectionMethod&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/rakutentech/laravel-request-docs/src/LaravelRequestDocs.php&quot;,
            &quot;line&quot;: 18,
            &quot;function&quot;: &quot;appendRequestRules&quot;,
            &quot;class&quot;: &quot;Rakutentech\\LaravelRequestDocs\\LaravelRequestDocs&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/rakutentech/laravel-request-docs/src/Controllers/LaravelRequestDocsController.php&quot;,
            &quot;line&quot;: 23,
            &quot;function&quot;: &quot;getDocs&quot;,
            &quot;class&quot;: &quot;Rakutentech\\LaravelRequestDocs\\LaravelRequestDocs&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Controller.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;index&quot;,
            &quot;class&quot;: &quot;Rakutentech\\LaravelRequestDocs\\Controllers\\LaravelRequestDocsController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;callAction&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Controller&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 261,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 204,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 725,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 726,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 703,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 667,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 656,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php&quot;,
            &quot;line&quot;: 49,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 142,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 89,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 222,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 179,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 123,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 80,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 56,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Commands/GenerateDocumentation.php&quot;,
            &quot;line&quot;: 55,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Container/Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 651,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 136,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/symfony/console/Command/Command.php&quot;,
            &quot;line&quot;: 308,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 998,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Console/Application.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETrequest-docs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETrequest-docs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETrequest-docs"></code></pre>
</span>
<span id="execution-error-GETrequest-docs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETrequest-docs"></code></pre>
</span>
<form id="form-GETrequest-docs" data-method="GET"
      data-path="request-docs"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETrequest-docs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETrequest-docs"
                    onclick="tryItOut('GETrequest-docs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETrequest-docs"
                    onclick="cancelTryOut('GETrequest-docs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETrequest-docs" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>request-docs</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETsanctum-csrf-cookie">Return an empty response simply to trigger the storage of the CSRF cookie in the browser.</h2>

<p>
</p>



<span id="example-requests-GETsanctum-csrf-cookie">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/sanctum/csrf-cookie" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETsanctum-csrf-cookie">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
access-control-allow-origin: *
set-cookie: laravel_session=eyJpdiI6Ijh5QkxLVzRUa1hIMVg4aWZwSVlNc2c9PSIsInZhbHVlIjoiYWtKMDBQcjVjNW5CdldpMTFnSXhGbXVIckdRbHRqWVZQYzN4UGI5cGhPOXBCWnFvY0pzYllkcHlHVC9RQkYwTmRIeENJenhneWRrRDE5VWpqZGx2OW1jM2Z1UHl3cFlBZEZOc0EyNlRLSVRiYnpRR1hPZTRRbnF1WGwwVkFiMmoiLCJtYWMiOiJhOWQyYzQ5M2ZlZDc3ZGNlMzkyNWFkZGZkZWIyYWE0ZGZkYWNiNDlhNDRlOGZkNTRlZTdlNmE1MzY2NTlmN2JhIiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETsanctum-csrf-cookie"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</span>
<span id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</span>
<form id="form-GETsanctum-csrf-cookie" data-method="GET"
      data-path="sanctum/csrf-cookie"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETsanctum-csrf-cookie"
                    onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETsanctum-csrf-cookie"
                    onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>sanctum/csrf-cookie</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GET_ignition-health-check">GET _ignition/health-check</h2>

<p>
</p>



<span id="example-requests-GET_ignition-health-check">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/_ignition/health-check" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/_ignition/health-check"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GET_ignition-health-check">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;can_execute_commands&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-GET_ignition-health-check" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET_ignition-health-check"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET_ignition-health-check"></code></pre>
</span>
<span id="execution-error-GET_ignition-health-check" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_ignition-health-check"></code></pre>
</span>
<form id="form-GET_ignition-health-check" data-method="GET"
      data-path="_ignition/health-check"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GET_ignition-health-check', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET_ignition-health-check"
                    onclick="tryItOut('GET_ignition-health-check');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET_ignition-health-check"
                    onclick="cancelTryOut('GET_ignition-health-check');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET_ignition-health-check" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>_ignition/health-check</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POST_ignition-execute-solution">POST _ignition/execute-solution</h2>

<p>
</p>



<span id="example-requests-POST_ignition-execute-solution">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/_ignition/execute-solution" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"solution\": \"nihil\",
    \"parameters\": [
        \"quia\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/_ignition/execute-solution"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "solution": "nihil",
    "parameters": [
        "quia"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POST_ignition-execute-solution">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Solution could not be found&quot;,
    &quot;exception&quot;: &quot;Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException&quot;,
    &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Application.php&quot;,
    &quot;line&quot;: 1143,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/helpers.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;abort&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/helpers.php&quot;,
            &quot;line&quot;: 64,
            &quot;function&quot;: &quot;abort&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/spatie/laravel-ignition/src/Http/Requests/ExecuteSolutionRequest.php&quot;,
            &quot;line&quot;: 25,
            &quot;function&quot;: &quot;abort_if&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/spatie/laravel-ignition/src/Http/Requests/ExecuteSolutionRequest.php&quot;,
            &quot;line&quot;: 32,
            &quot;function&quot;: &quot;getSolution&quot;,
            &quot;class&quot;: &quot;Spatie\\LaravelIgnition\\Http\\Requests\\ExecuteSolutionRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/spatie/laravel-ignition/src/Http/Controllers/ExecuteSolutionController.php&quot;,
            &quot;line&quot;: 23,
            &quot;function&quot;: &quot;getRunnableSolution&quot;,
            &quot;class&quot;: &quot;Spatie\\LaravelIgnition\\Http\\Requests\\ExecuteSolutionRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php&quot;,
            &quot;line&quot;: 48,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 261,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 204,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 725,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/spatie/laravel-ignition/src/Http/Middleware/RunnableSolutionsEnabled.php&quot;,
            &quot;line&quot;: 15,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 726,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 703,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 667,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 656,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php&quot;,
            &quot;line&quot;: 49,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 142,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 89,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 222,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 179,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 123,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 80,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 56,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/knuckleswtf/scribe/src/Commands/GenerateDocumentation.php&quot;,
            &quot;line&quot;: 55,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Container/Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 651,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 136,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/symfony/console/Command/Command.php&quot;,
            &quot;line&quot;: 308,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 998,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Console/Application.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/rainaldo/Documents/GitHub/Boodschappenlijst/artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POST_ignition-execute-solution" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POST_ignition-execute-solution"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POST_ignition-execute-solution"></code></pre>
</span>
<span id="execution-error-POST_ignition-execute-solution" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POST_ignition-execute-solution"></code></pre>
</span>
<form id="form-POST_ignition-execute-solution" data-method="POST"
      data-path="_ignition/execute-solution"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POST_ignition-execute-solution', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POST_ignition-execute-solution"
                    onclick="tryItOut('POST_ignition-execute-solution');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POST_ignition-execute-solution"
                    onclick="cancelTryOut('POST_ignition-execute-solution');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POST_ignition-execute-solution" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>_ignition/execute-solution</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>solution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="solution"
               data-endpoint="POST_ignition-execute-solution"
               value="nihil"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>parameters</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="parameters[0]"
               data-endpoint="POST_ignition-execute-solution"
               data-component="body" hidden>
        <input type="text"
               name="parameters[1]"
               data-endpoint="POST_ignition-execute-solution"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-POST_ignition-update-config">POST _ignition/update-config</h2>

<p>
</p>



<span id="example-requests-POST_ignition-update-config">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/_ignition/update-config" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"theme\": \"dark\",
    \"editor\": \"hic\",
    \"hide_solutions\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/_ignition/update-config"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "theme": "dark",
    "editor": "hic",
    "hide_solutions": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POST_ignition-update-config">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">true</code>
 </pre>
    </span>
<span id="execution-results-POST_ignition-update-config" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POST_ignition-update-config"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POST_ignition-update-config"></code></pre>
</span>
<span id="execution-error-POST_ignition-update-config" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POST_ignition-update-config"></code></pre>
</span>
<form id="form-POST_ignition-update-config" data-method="POST"
      data-path="_ignition/update-config"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POST_ignition-update-config', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POST_ignition-update-config"
                    onclick="tryItOut('POST_ignition-update-config');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POST_ignition-update-config"
                    onclick="cancelTryOut('POST_ignition-update-config');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POST_ignition-update-config" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>_ignition/update-config</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>theme</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="theme"
               data-endpoint="POST_ignition-update-config"
               value="dark"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>light</code>, <code>dark</code>, or <code>auto</code>.</p>
        </p>
                <p>
            <b><code>editor</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="editor"
               data-endpoint="POST_ignition-update-config"
               value="hic"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>hide_solutions</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
                <label data-endpoint="POST_ignition-update-config" hidden>
            <input type="radio" name="hide_solutions"
                   value="true"
                   data-endpoint="POST_ignition-update-config"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="POST_ignition-update-config" hidden>
            <input type="radio" name="hide_solutions"
                   value="false"
                   data-endpoint="POST_ignition-update-config"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GEThome">GET home</h2>

<p>
</p>



<span id="example-requests-GEThome">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/home" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/home"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GEThome">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: laravel_session=eyJpdiI6IjBzVFcyVGdTeENCeTJrNHpsNE53M3c9PSIsInZhbHVlIjoiM294WGdTeHpFd3hyZnowVWxnT2laR2RzUENrKzh6QXB2Ty83RjJYRmd5NHJrWHhpTjI1SXZHMDI2R1hRVTg3a3h1c2lFeXJLVldvcTkwek9YdWNRbHB4ZWZQM0dVWkw5RTRrL0ROTnFZRWQ4SC95Ty9zMTVJUmZRYlliVVNhQ3IiLCJtYWMiOiI4MWRkYWIyYjdhN2ZhYjMyNTRmZTk1Mzk4OTNlZWVlZDU3Y2M0Njk2Yjg2YmEwNzhiYzNlZGFlMDExMzNlYjIyIiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GEThome" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GEThome"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GEThome"></code></pre>
</span>
<span id="execution-error-GEThome" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEThome"></code></pre>
</span>
<form id="form-GEThome" data-method="GET"
      data-path="home"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GEThome', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GEThome"
                    onclick="tryItOut('GEThome');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GEThome"
                    onclick="cancelTryOut('GEThome');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GEThome" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>home</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETproducts">GET products</h2>

<p>
</p>



<span id="example-requests-GETproducts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproducts">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: laravel_session=eyJpdiI6IlQrV05XWk9NVmkxSlZJSnJKM0tyVUE9PSIsInZhbHVlIjoiQ3ZTRkZSTHYweUU1TE1UNTVmYkFQODg0bXdkbzZ6SWI5ZWhVZlJDZkNHL1ptRWIycUNEOWlKcUdWRjN0ck0rMlJSdTJOZEdyOFlCRHlJd01jTWhpcEFSMUl2RU8yd3JJc254dXFTem5UdUpES1VMWG4zdWo1TzE5TFBtUy9aMmwiLCJtYWMiOiI2MjY4OTc4NTkxOWQ1YTY2Njg3YTdjMGZlMjk1MWJhZWZkZGVmZTkwNjc4NTNhMjI3M2E0Y2JkNTliZTQxMjVjIiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;current_page&quot;: 1,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Jumbo Knoflook 100g&quot;,
            &quot;image&quot;: &quot;82080NET-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.09&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Jumbo Ribbel Naturel Chips 250g&quot;,
            &quot;image&quot;: &quot;271120200354_398354ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Jumbo Boerenkool 400g&quot;,
            &quot;image&quot;: &quot;050920210128_452214ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.85&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Jumbo Achterham 100g&quot;,
            &quot;image&quot;: &quot;160120202336_338268KGR-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.00&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Cristaline Bronwater 12 x 500ml&quot;,
            &quot;image&quot;: &quot;060920210219_437703PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.98&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Bladmandarijnen 800g&quot;,
            &quot;image&quot;: &quot;061120190844_220757BAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Jumbo Mandarijnen 28 Stuks 2, 3kg&quot;,
            &quot;image&quot;: &quot;181220191137_317996KRT-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;5.49&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Jumbo Rucola Gewassen 85g&quot;,
            &quot;image&quot;: &quot;080420210941_362302ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.89&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Zespri Sungold Kiwifruit 3 Stuks&quot;,
            &quot;image&quot;: &quot;110520191813_211863BAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Jumbo Verse Karnemelk 1L&quot;,
            &quot;image&quot;: &quot;070820190213_172026PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.79&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;Jumbo Karnemelk &amp; Halfvolle Melk&quot;,
            &quot;image&quot;: &quot;030520211600_441710STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.68&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;Jumbo Biologische Verse Gember 100g&quot;,
            &quot;image&quot;: &quot;201220192359_208888KGR-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;Blue Band Halvarine Vegan en 100% Plantaardig met 8 Vitamines Kuip 500g&quot;,
            &quot;image&quot;: &quot;300620210016_206940STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.34&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;Jumbo - Witte Baguette - 2 Stuks&quot;,
            &quot;image&quot;: &quot;290720200416_225592PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.49&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 15,
            &quot;name&quot;: &quot;Jumbo Mini Wortelen 325g&quot;,
            &quot;image&quot;: &quot;171220191005_329564STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.00&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 16,
            &quot;name&quot;: &quot;Kanzi Appels 1kg&quot;,
            &quot;image&quot;: &quot;100920190348_283644STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 17,
            &quot;name&quot;: &quot;Jumbo Filet Americain Naturel 150g&quot;,
            &quot;image&quot;: &quot;061120210039_291849BAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.56&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 18,
            &quot;name&quot;: &quot;Jumbo Gerookte Spekreepjes 2 x 125g&quot;,
            &quot;image&quot;: &quot;060520190033_92452TRA-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;3.75&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 19,
            &quot;name&quot;: &quot;Zespri Green Kiwifruit 1kg&quot;,
            &quot;image&quot;: &quot;050420192320_155557BAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;3.69&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 20,
            &quot;name&quot;: &quot;Jumbo Volle Yoghurt 1L&quot;,
            &quot;image&quot;: &quot;070820190307_172424PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.95&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 21,
            &quot;name&quot;: &quot;Komo Trekbandzakken 60 Liter 15 Stuks&quot;,
            &quot;image&quot;: &quot;110620200441_28215ROL-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.67&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 22,
            &quot;name&quot;: &quot;Lay&#039;s Naturel Chips 335gr&quot;,
            &quot;image&quot;: &quot;050220210002_181217STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.93&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 23,
            &quot;name&quot;: &quot;Jumbo Chocolate Chip Cookies 12 Stuks 225g&quot;,
            &quot;image&quot;: &quot;191120190445_214363PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.79&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 24,
            &quot;name&quot;: &quot;Jumbo Snijworst 140g&quot;,
            &quot;image&quot;: &quot;271120200049_270770STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.42&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 25,
            &quot;name&quot;: &quot;Jumbo Rundergehakt 1kg&quot;,
            &quot;image&quot;: &quot;070520192357_180842BAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;5.50&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 26,
            &quot;name&quot;: &quot;Goudse Kaas Jong Belegen 48+ Stuk Voordeelverpakking 1000g&quot;,
            &quot;image&quot;: &quot;140920210529_453408STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;6.41&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 27,
            &quot;name&quot;: &quot;Jumbo Culinair voor Bakken, Koken en Roerbakken 750ml&quot;,
            &quot;image&quot;: &quot;191120200238_391993FLS-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.53&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 28,
            &quot;name&quot;: &quot;Chocomel Vol 1L&quot;,
            &quot;image&quot;: &quot;101120211954_75729PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.89&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 29,
            &quot;name&quot;: &quot;Jumbo Geraspt Jong Belegen Kaas 30+ 150g&quot;,
            &quot;image&quot;: &quot;101220201142_395038ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.07&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 30,
            &quot;name&quot;: &quot;Jumbo Naturel Beschuit 13 Stuks&quot;,
            &quot;image&quot;: &quot;190720192317_290514STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.35&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 31,
            &quot;name&quot;: &quot;Optimel Drinkyoghurt mango passievrucht 0% vet 1 x 1. 5L&quot;,
            &quot;image&quot;: &quot;030920212200_347823PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.95&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 32,
            &quot;name&quot;: &quot;Zespri Sun Gold Kiwifruit 6 Stuks&quot;,
            &quot;image&quot;: &quot;140520191239_206721BAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;4.75&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 33,
            &quot;name&quot;: &quot;Jumbo Mini Krieltjes Bistro 600g&quot;,
            &quot;image&quot;: &quot;020920201043_211763ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.00&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 34,
            &quot;name&quot;: &quot;Jumbo IJsbergsla Fijngesneden 100 g - Kleinverpakking&quot;,
            &quot;image&quot;: &quot;160120191138_212608STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.69&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 35,
            &quot;name&quot;: &quot;Jumbo Nieuwe Standaard Kip Filet 2 Stuks ca. 390g&quot;,
            &quot;image&quot;: &quot;050220212347_308406KGR-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;4.78&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 36,
            &quot;name&quot;: &quot;Jumbo Rode Uien 500g&quot;,
            &quot;image&quot;: &quot;030820190452_213005NET-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 37,
            &quot;name&quot;: &quot;Jumbo Franse Kwark Mager 500g&quot;,
            &quot;image&quot;: &quot;221020201651_198301STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.69&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 38,
            &quot;name&quot;: &quot;Jumbo Aardappelen Vastkokend 1kg&quot;,
            &quot;image&quot;: &quot;271020201100_380101ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.69&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 39,
            &quot;name&quot;: &quot;Neutraal Vanillevla 1L&quot;,
            &quot;image&quot;: &quot;181220201049_305470PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.85&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 40,
            &quot;name&quot;: &quot;Jumbo Sinaasappelsap 1, 5L&quot;,
            &quot;image&quot;: &quot;090520192018_204242PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.43&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 41,
            &quot;name&quot;: &quot;ERU Goudkuipje Naturel 200g&quot;,
            &quot;image&quot;: &quot;210520200900_360350STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.97&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 42,
            &quot;name&quot;: &quot;Schouderham Gerookt 175g&quot;,
            &quot;image&quot;: &quot;080520190139_193936PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.27&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 43,
            &quot;name&quot;: &quot;Jumbo Oven Frites 1kg&quot;,
            &quot;image&quot;: &quot;120520191742_180679ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.39&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 44,
            &quot;name&quot;: &quot;Jumbo Zuurkool Naturel 520g&quot;,
            &quot;image&quot;: &quot;060520190245_163474PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.59&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 45,
            &quot;name&quot;: &quot;Jumbo Tomaten Puree 140g&quot;,
            &quot;image&quot;: &quot;100320210446_218380BLK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.39&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 46,
            &quot;name&quot;: &quot;Scharreleieren 30 Stuks&quot;,
            &quot;image&quot;: &quot;130420212355_297037TRA-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;4.85&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 47,
            &quot;name&quot;: &quot;Jumbo - Witte Kaiserbroodjes - 4 Stuks&quot;,
            &quot;image&quot;: &quot;110820201542_308328ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.00&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 48,
            &quot;name&quot;: &quot;Jumbo Rijstwafels Zeezout 12 Stuks&quot;,
            &quot;image&quot;: &quot;090520192123_201237STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.88&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 49,
            &quot;name&quot;: &quot;Jumbo Nieuwe Standaard Kipdijfilet Blokjes 350g&quot;,
            &quot;image&quot;: &quot;140920190154_308373BAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;3.75&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 50,
            &quot;name&quot;: &quot;Jumbo Vanillevla 1L&quot;,
            &quot;image&quot;: &quot;040420200024_236884PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.18&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 51,
            &quot;name&quot;: &quot;Jumbo - Roomboter Croissants - 4 Stuks&quot;,
            &quot;image&quot;: &quot;170520211050_308317ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.00&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 52,
            &quot;name&quot;: &quot;Jumbo Courgette en Trostomaten&quot;,
            &quot;image&quot;: &quot;040220201027_354769STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;3.04&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 53,
            &quot;name&quot;: &quot;Jumbo Tros Tomaten 5 Stuks&quot;,
            &quot;image&quot;: &quot;100920200448_302231STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.39&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 54,
            &quot;name&quot;: &quot;Garlan Verse-Roomkaas met Kruiden 70+ 150g&quot;,
            &quot;image&quot;: &quot;270720190856_285530STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.69&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 55,
            &quot;name&quot;: &quot;Jumbo Franse Kwark Mager 1kg&quot;,
            &quot;image&quot;: &quot;140120211654_198300STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.29&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 56,
            &quot;name&quot;: &quot;Jumbo - Bruin Tijgerbrood&quot;,
            &quot;image&quot;: &quot;280720202350_300142STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.19&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 57,
            &quot;name&quot;: &quot;Jumbo Ribbel Paprika Chips 250g&quot;,
            &quot;image&quot;: &quot;281120200338_398872ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 58,
            &quot;name&quot;: &quot;Jumbo Perssinaasappelen 2kg&quot;,
            &quot;image&quot;: &quot;100520190450_40489NET-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 59,
            &quot;name&quot;: &quot;Jumbo Aardbei Extra Jam 440g&quot;,
            &quot;image&quot;: &quot;010520210148_420635POT-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.96&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 60,
            &quot;name&quot;: &quot;Jumbo Italiaanse Roerbakmix 400g&quot;,
            &quot;image&quot;: &quot;291220180343_211728STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.89&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 61,
            &quot;name&quot;: &quot;Jumbo Milde Halfvolle Yoghurt 1L&quot;,
            &quot;image&quot;: &quot;031120211311_384773PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.89&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 62,
            &quot;name&quot;: &quot;Campina Vlaflip Vanille 1L&quot;,
            &quot;image&quot;: &quot;021020210029_188332PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.79&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 63,
            &quot;name&quot;: &quot;Jumbo Aardappelschijfjes 600g&quot;,
            &quot;image&quot;: &quot;020920201041_211761ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.88&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 64,
            &quot;name&quot;: &quot;Jumbo Verse Volle Melk 1L&quot;,
            &quot;image&quot;: &quot;070820190428_31814PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.95&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 65,
            &quot;name&quot;: &quot;Jumbo Stamppot Aardappelen 1kg - Voordeelverpakking&quot;,
            &quot;image&quot;: &quot;200220210358_211819ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.29&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 66,
            &quot;name&quot;: &quot;Jumbo Avocado 2 Stuks&quot;,
            &quot;image&quot;: &quot;081220190908_300262STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 67,
            &quot;name&quot;: &quot;Jumbo Jonagold Extra Voordeel 1, 5kg&quot;,
            &quot;image&quot;: &quot;090920202348_306033ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.79&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 68,
            &quot;name&quot;: &quot;Jumbo Halvarine 500g&quot;,
            &quot;image&quot;: &quot;300920200059_383455CUP-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.89&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 69,
            &quot;name&quot;: &quot;Jumbo Volkoren Beschuit 13 Stuks&quot;,
            &quot;image&quot;: &quot;271120190431_290515STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.37&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 70,
            &quot;name&quot;: &quot;Jumbo Rundergehakt 300g&quot;,
            &quot;image&quot;: &quot;301220201334_173434BAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.39&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 71,
            &quot;name&quot;: &quot;Jumbo Eierkoeken 10 stuks&quot;,
            &quot;image&quot;: &quot;200120202241_42732PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.89&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 72,
            &quot;name&quot;: &quot;Jumbo Geschrapte Wortelen 500g&quot;,
            &quot;image&quot;: &quot;160120191135_212163STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.00&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 73,
            &quot;name&quot;: &quot;Jumbo Green Ice Tea Pure 1,5L&quot;,
            &quot;image&quot;: &quot;180920200144_293792PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.79&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 74,
            &quot;name&quot;: &quot;Jumbo - Roomboter Croissants Voorgebakken - 4 Stuks&quot;,
            &quot;image&quot;: &quot;230720202352_188503PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 75,
            &quot;name&quot;: &quot;Douwe Egberts Aroma Rood Filterkoffie 500g&quot;,
            &quot;image&quot;: &quot;061020210000_220752PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;6.30&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 76,
            &quot;name&quot;: &quot;Jumbo Kroepoek Cassave 75g&quot;,
            &quot;image&quot;: &quot;131220192237_220628ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.98&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 77,
            &quot;name&quot;: &quot;Iglo Spinazie &aacute; la cr&egrave;me 500g&quot;,
            &quot;image&quot;: &quot;061020210641_388824DS-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.38&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 78,
            &quot;name&quot;: &quot;Jumbo Achterham 150g&quot;,
            &quot;image&quot;: &quot;281120200146_63100PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.47&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 79,
            &quot;name&quot;: &quot;Jumbo - Pita Broodjes - 2 x 5 Stuks&quot;,
            &quot;image&quot;: &quot;240720202314_306323ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.69&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 80,
            &quot;name&quot;: &quot;Schouderham Blokjes 300g&quot;,
            &quot;image&quot;: &quot;080520190527_192680PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 81,
            &quot;name&quot;: &quot;Becel Light Margarine 575g&quot;,
            &quot;image&quot;: &quot;161120210025_455850CUP-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.97&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 82,
            &quot;name&quot;: &quot;Goudse Kaas 48+ Jong Stuk Voordeelverpakking 1000g&quot;,
            &quot;image&quot;: &quot;140920210041_453414STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;5.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 83,
            &quot;name&quot;: &quot;Jumbo Borrelnoten &amp; Paprika Ribbel Chips&quot;,
            &quot;image&quot;: &quot;100520211446_442790STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.56&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 84,
            &quot;name&quot;: &quot;Jumbo Cocktail Borrelnoten 300g&quot;,
            &quot;image&quot;: &quot;240720190713_268976STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.57&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 85,
            &quot;name&quot;: &quot;Jumbo Luchtige Crackers Volkoren met Rijstebloem 2 x 125g&quot;,
            &quot;image&quot;: &quot;120520190208_189693PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;0.78&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 86,
            &quot;name&quot;: &quot;Jumbo Knakworst 3 x 400g&quot;,
            &quot;image&quot;: &quot;200220200043_167019BLK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.79&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 87,
            &quot;name&quot;: &quot;Ontbijtspek Gerookt 150g&quot;,
            &quot;image&quot;: &quot;140220200852_351875PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.39&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 88,
            &quot;name&quot;: &quot;Jumbo Soepballetjes Rund ca. 250g&quot;,
            &quot;image&quot;: &quot;160120191159_136490KGR-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.99&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 89,
            &quot;name&quot;: &quot;Coca-Cola Zero Sugar 1L&quot;,
            &quot;image&quot;: &quot;090920211339_429170FLS-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.87&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 90,
            &quot;name&quot;: &quot;Coca-Cola Zero Sugar 5+1 Gratis PET Fles 6 x 1, 5L&quot;,
            &quot;image&quot;: &quot;220920210437_429169PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;11.35&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 91,
            &quot;name&quot;: &quot;Jumbo - Bruin Brood&quot;,
            &quot;image&quot;: &quot;290720200013_300143STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.00&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 92,
            &quot;name&quot;: &quot;LU Bastogne koekjes Original 260g&quot;,
            &quot;image&quot;: &quot;121020210616_173140KST-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.36&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 93,
            &quot;name&quot;: &quot;Jumbo Fijne Soepgroente 400 g - Voordeelverpakking&quot;,
            &quot;image&quot;: &quot;111220190552_329514ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.36&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 94,
            &quot;name&quot;: &quot;Campina Dessert Zacht en Luchtig Framboos 1L&quot;,
            &quot;image&quot;: &quot;011020212354_527059PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.63&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 95,
            &quot;name&quot;: &quot;Campina Vla Pakket&quot;,
            &quot;image&quot;: &quot;220120201123_351703STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;3.42&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 96,
            &quot;name&quot;: &quot;Cheetos Nibb-it Sticks Naturel Chips 150gr&quot;,
            &quot;image&quot;: &quot;050220210418_196235STK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;1.70&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 97,
            &quot;name&quot;: &quot;Jumbo Cola Zero Sugar 6 x 1,5L&quot;,
            &quot;image&quot;: &quot;180320211603_389703PAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;3.85&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 98,
            &quot;name&quot;: &quot;Lay&#039;s Superchips Paprika 300gr&quot;,
            &quot;image&quot;: &quot;050920212156_451801ZK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.12&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 99,
            &quot;name&quot;: &quot;Jumbo Hamburger Rund 4 stuks 440g&quot;,
            &quot;image&quot;: &quot;110520191354_87910BAK-1_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.96&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 100,
            &quot;name&quot;: &quot;Goudeerlijk Boeren Donker Meergranen Volkoren Brood - Vriesvers&quot;,
            &quot;image&quot;: &quot;190320211650_175931ZK-9_360x360_2.png&quot;,
            &quot;price&quot;: &quot;2.19&quot;,
            &quot;store_id&quot;: 2,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    ],
    &quot;first_page_url&quot;: &quot;http://localhost/products?page=1&quot;,
    &quot;from&quot;: 1,
    &quot;last_page&quot;: 313,
    &quot;last_page_url&quot;: &quot;http://localhost/products?page=313&quot;,
    &quot;links&quot;: [
        {
            &quot;url&quot;: null,
            &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=1&quot;,
            &quot;label&quot;: &quot;1&quot;,
            &quot;active&quot;: true
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=2&quot;,
            &quot;label&quot;: &quot;2&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=3&quot;,
            &quot;label&quot;: &quot;3&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=4&quot;,
            &quot;label&quot;: &quot;4&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=5&quot;,
            &quot;label&quot;: &quot;5&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=6&quot;,
            &quot;label&quot;: &quot;6&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=7&quot;,
            &quot;label&quot;: &quot;7&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=8&quot;,
            &quot;label&quot;: &quot;8&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=9&quot;,
            &quot;label&quot;: &quot;9&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=10&quot;,
            &quot;label&quot;: &quot;10&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: null,
            &quot;label&quot;: &quot;...&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=312&quot;,
            &quot;label&quot;: &quot;312&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=313&quot;,
            &quot;label&quot;: &quot;313&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost/products?page=2&quot;,
            &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
            &quot;active&quot;: false
        }
    ],
    &quot;next_page_url&quot;: &quot;http://localhost/products?page=2&quot;,
    &quot;path&quot;: &quot;http://localhost/products&quot;,
    &quot;per_page&quot;: 100,
    &quot;prev_page_url&quot;: null,
    &quot;to&quot;: 100,
    &quot;total&quot;: 31287
}</code>
 </pre>
    </span>
<span id="execution-results-GETproducts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproducts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproducts"></code></pre>
</span>
<span id="execution-error-GETproducts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproducts"></code></pre>
</span>
<form id="form-GETproducts" data-method="GET"
      data-path="products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproducts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproducts"
                    onclick="tryItOut('GETproducts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproducts"
                    onclick="cancelTryOut('GETproducts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproducts" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>products</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETuser--id-">GET user/{id}</h2>

<p>
</p>



<span id="example-requests-GETuser--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/user/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETuser--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: laravel_session=eyJpdiI6Inc1bHREUDU1WFBnb3RwU1pQTGdDTGc9PSIsInZhbHVlIjoiL3hPSTQyNTNJRVFSSFBkclRHeFNpZEdNdC9GUnZuRm9QZDR5eFlCZ212L3FaMVF2dzhXM0dxMmpOMktlTVREK3ZtV01kcHB3QmRTeG1jaHlHOXROc0xrK3NxNUZJSlNaeUpnYkszS0FaSzBycTZYT0ViM2JTL3lBakxNeXNIYXgiLCJtYWMiOiIwYjI3YTM5ODI4ZmQ4OWViNWZmZmQzMDkxMmJlYzQzNTMyMWE2NTY0OGRlNDUyZjZmMzcxMjVlZGIxMmRkNDU1IiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETuser--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETuser--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETuser--id-"></code></pre>
</span>
<span id="execution-error-GETuser--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser--id-"></code></pre>
</span>
<form id="form-GETuser--id-" data-method="GET"
      data-path="user/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETuser--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETuser--id-"
                    onclick="tryItOut('GETuser--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETuser--id-"
                    onclick="cancelTryOut('GETuser--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETuser--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>user/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETuser--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTuser--id-">PUT user/{id}</h2>

<p>
</p>



<span id="example-requests-PUTuser--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/user/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"tl\",
    \"email\": \"ua\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "tl",
    "email": "ua"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTuser--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: laravel_session=eyJpdiI6ImFZNUJtZitPdUZJYnBYUUpPdXo4cWc9PSIsInZhbHVlIjoiem0vZ3VkbytoRTlGZGNURWNOSU1TTkx4d1hmUUwyNVRBajcwbUQ3eXl4KzNDR2l2c3NDL2M5OG8zYVhtSUdlNnl4VkVvdWhJOUhHOE1BNnBIM1hzLytBbEgva2ZqTjM4b0l6NzRIQmVua3lvdVlKamFqYWpQNHNJOWdIMy9Uc0wiLCJtYWMiOiJmNTMwMzJkNTZlOTA5OGM4YjUzNDQyMGRkZDEyM2I4Mzg2ZjY2ODUxZWJkZmMxYWU1MWIzODBkYWE0YzIzNWRmIiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTuser--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTuser--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTuser--id-"></code></pre>
</span>
<span id="execution-error-PUTuser--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTuser--id-"></code></pre>
</span>
<form id="form-PUTuser--id-" data-method="PUT"
      data-path="user/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTuser--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTuser--id-"
                    onclick="tryItOut('PUTuser--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTuser--id-"
                    onclick="cancelTryOut('PUTuser--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTuser--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>user/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>user/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTuser--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTuser--id-"
               value="tl"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 50 characters. Must be at least 2 characters.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="PUTuser--id-"
               value="ua"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address. Must not be greater than 50 characters. Must be at least 2 characters.</p>
        </p>
        </form>

            <h2 id="endpoints-DELETEuser--id-">DELETE user/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEuser--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/user/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEuser--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: laravel_session=eyJpdiI6Ikh2dXNCYWI3RHJGa1BneU11S1lFc3c9PSIsInZhbHVlIjoiQjNrUDlWdTFWQ0tnblpRVkdqeFJ2WjNLUnJQQS9iSnlJRDdmRytETFo1MmlTdXZhclRoSUtMZTYzQWlybURYV2dHdmp1Y0syTWpnQ0g0OXVyZkU5REJvWDhtTGkzU0NaMzBZZit4STJrS29ZT2xmdmx4a3BXbVpQOW53bUIyU1EiLCJtYWMiOiI3OTYzYTNjOGI5ZmJlNDQwMDIyNjU4MjA4NGJkOTdlNDA4NGM2NjBlNmMyMjlmNTRkNDdlNTQ1YjFhNjI1MGYxIiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEuser--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEuser--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEuser--id-"></code></pre>
</span>
<span id="execution-error-DELETEuser--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEuser--id-"></code></pre>
</span>
<form id="form-DELETEuser--id-" data-method="DELETE"
      data-path="user/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEuser--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEuser--id-"
                    onclick="tryItOut('DELETEuser--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEuser--id-"
                    onclick="cancelTryOut('DELETEuser--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEuser--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>user/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEuser--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETuser--user--shoppinglist">GET user/{user}/shoppinglist</h2>

<p>
</p>



<span id="example-requests-GETuser--user--shoppinglist">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/user/19/shoppinglist" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/19/shoppinglist"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETuser--user--shoppinglist">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: laravel_session=eyJpdiI6InJrOXBKcjBuQW1jSXpWanlwTmdIY3c9PSIsInZhbHVlIjoiUnpEb3pHWUVTcTVEOFlsQXI2MWdXaDBoT2FIV0JXSTd1NEc5RlBIRG5yVnZ5K1JUNTQ1TDlUMlBnRVJPQ0I3akFyM3h1NjMwMFFDbjNPazRjSFcxZ1NZTWw2WndJTnJWQ2I2by9FWFF6TVRmVm4zRUpDbzBFY21DRmpMTHFLSFgiLCJtYWMiOiIzZjU0YzcwNjljM2RkOTMxNTU1NmU1MzcxZTI1YjYyZDBlZThjYzg2MTI5ZGUwMjg2NjQxNzViNzA5ZWYxNGJlIiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETuser--user--shoppinglist" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETuser--user--shoppinglist"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETuser--user--shoppinglist"></code></pre>
</span>
<span id="execution-error-GETuser--user--shoppinglist" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser--user--shoppinglist"></code></pre>
</span>
<form id="form-GETuser--user--shoppinglist" data-method="GET"
      data-path="user/{user}/shoppinglist"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETuser--user--shoppinglist', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETuser--user--shoppinglist"
                    onclick="tryItOut('GETuser--user--shoppinglist');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETuser--user--shoppinglist"
                    onclick="cancelTryOut('GETuser--user--shoppinglist');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETuser--user--shoppinglist" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>user/{user}/shoppinglist</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user"
               data-endpoint="GETuser--user--shoppinglist"
               value="19"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="endpoints-POSTuser--user--shoppinglist">POST user/{user}/shoppinglist</h2>

<p>
</p>



<span id="example-requests-POSTuser--user--shoppinglist">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/user/1/shoppinglist" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"pryiprbbcdcsrn\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/1/shoppinglist"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "pryiprbbcdcsrn"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTuser--user--shoppinglist">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: laravel_session=eyJpdiI6Im54N1ppSHQ2Wm1CSVZQMGpDTEJ1aGc9PSIsInZhbHVlIjoiam9ZSTRaR1I5c0U0a0pLYkNvUm8yVHpEeEx1UHpEUERSc3lNZ0JnU2oxbUdJblZTYTFhV1dRUnYxQmlMRlg4UUJMQWlUQWVxb0NMOWNCcmdMQkpZMGVFV0JSNjc1WnFvMnY2QWF6Z2lGQ3pXcnhySzBvU2wrUGIxZ0wwajlXTmgiLCJtYWMiOiI5ZGNkNTFmN2NlZDE0MTVjZGI4MzFiZmZlNjRkNGZiMzdiN2Q4Y2FkZDQwN2QwZDA5NjExMjZhZDFkZmI1NGM4IiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTuser--user--shoppinglist" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTuser--user--shoppinglist"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser--user--shoppinglist"></code></pre>
</span>
<span id="execution-error-POSTuser--user--shoppinglist" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser--user--shoppinglist"></code></pre>
</span>
<form id="form-POSTuser--user--shoppinglist" data-method="POST"
      data-path="user/{user}/shoppinglist"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTuser--user--shoppinglist', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTuser--user--shoppinglist"
                    onclick="tryItOut('POSTuser--user--shoppinglist');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTuser--user--shoppinglist"
                    onclick="cancelTryOut('POSTuser--user--shoppinglist');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTuser--user--shoppinglist" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>user/{user}/shoppinglist</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user"
               data-endpoint="POSTuser--user--shoppinglist"
               value="1"
               data-component="url" hidden>
    <br>

            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTuser--user--shoppinglist"
               value="pryiprbbcdcsrn"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
        </form>

            <h2 id="endpoints-GETuser--user--shoppinglist--id-">GET user/{user}/shoppinglist/{id}</h2>

<p>
</p>



<span id="example-requests-GETuser--user--shoppinglist--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/user/1/shoppinglist/5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/1/shoppinglist/5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETuser--user--shoppinglist--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: laravel_session=eyJpdiI6Inlpc2w5UGRJc3JodXFHbis0TGVna0E9PSIsInZhbHVlIjoiSndTSlFlNDJNZ2Q0Umw2NDQ4RnRKNG5IV284QXNWZXlaZ0pUamRXWHM5NkEyVWIwYWQxcXgvRTYyUmRGVWhVMGN3RnREM2VjNmZxOFNNSUdyR0pJSjVxaVlvbE9rWXRkVTYrdzZUbDh3Um90Q1pKY29IQXFsTGYyaVZlRHBIS24iLCJtYWMiOiJiMTNlOTI1MTc4MmE1MzhjNWJkMTViYTMzYTQ3NjM3YTEzZjI5MzZlN2NkMDRhMzhmYjZlNGM5MDQ2ZTYxNDdkIiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETuser--user--shoppinglist--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETuser--user--shoppinglist--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETuser--user--shoppinglist--id-"></code></pre>
</span>
<span id="execution-error-GETuser--user--shoppinglist--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser--user--shoppinglist--id-"></code></pre>
</span>
<form id="form-GETuser--user--shoppinglist--id-" data-method="GET"
      data-path="user/{user}/shoppinglist/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETuser--user--shoppinglist--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETuser--user--shoppinglist--id-"
                    onclick="tryItOut('GETuser--user--shoppinglist--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETuser--user--shoppinglist--id-"
                    onclick="cancelTryOut('GETuser--user--shoppinglist--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETuser--user--shoppinglist--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>user/{user}/shoppinglist/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user"
               data-endpoint="GETuser--user--shoppinglist--id-"
               value="1"
               data-component="url" hidden>
    <br>

            </p>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETuser--user--shoppinglist--id-"
               value="5"
               data-component="url" hidden>
    <br>
<p>The ID of the shoppinglist.</p>
            </p>
                    </form>

            <h2 id="endpoints-DELETEuser--user--shoppinglist--id-">DELETE user/{user}/shoppinglist/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEuser--user--shoppinglist--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/user/1/shoppinglist/5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/1/shoppinglist/5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEuser--user--shoppinglist--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: laravel_session=eyJpdiI6IklOTllXd3FtSW1XU2hRUUNpdDJXK2c9PSIsInZhbHVlIjoiTmpoeHRpd28rbGNuMHVpY1lUcWs0TjR1SXN1d1JuYlNTVGUxaklaOFBhaksvTThNSTZlNjNOMmRLNUQ2YkVKbDVOK2hqSWtmMi91cWF4dTRkVHFsQ0ZsVmZ2Y2xGdktHVzc4N01BQVpqSDF5dng0bXlFbUZTMWxkQW5RWHpVc0siLCJtYWMiOiIyNGUxOWU4YTViOWNhMWUyNmQxOTBmYTU4MmJkMmEwZDQwZGJmMGI4MGZiOTc1MTYxYTlmMGFhZTQ1ZWI1NmYxIiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEuser--user--shoppinglist--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEuser--user--shoppinglist--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEuser--user--shoppinglist--id-"></code></pre>
</span>
<span id="execution-error-DELETEuser--user--shoppinglist--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEuser--user--shoppinglist--id-"></code></pre>
</span>
<form id="form-DELETEuser--user--shoppinglist--id-" data-method="DELETE"
      data-path="user/{user}/shoppinglist/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEuser--user--shoppinglist--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEuser--user--shoppinglist--id-"
                    onclick="tryItOut('DELETEuser--user--shoppinglist--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEuser--user--shoppinglist--id-"
                    onclick="cancelTryOut('DELETEuser--user--shoppinglist--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEuser--user--shoppinglist--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>user/{user}/shoppinglist/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user"
               data-endpoint="DELETEuser--user--shoppinglist--id-"
               value="1"
               data-component="url" hidden>
    <br>

            </p>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEuser--user--shoppinglist--id-"
               value="5"
               data-component="url" hidden>
    <br>
<p>The ID of the shoppinglist.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTuser--user--shoppinglist--shoppinglist--items--item-">PUT user/{user}/shoppinglist/{shoppinglist}/items/{item}</h2>

<p>
</p>



<span id="example-requests-PUTuser--user--shoppinglist--shoppinglist--items--item-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/user/1/shoppinglist/5/items/20" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"amount\": 132
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/1/shoppinglist/5/items/20"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "amount": 132
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTuser--user--shoppinglist--shoppinglist--items--item-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: laravel_session=eyJpdiI6Im54Yjhxc0VIRVBGM2FSeDAxekdubXc9PSIsInZhbHVlIjoiWmQ2cnhiYmtodUhqZmNrTHRUUmlpNjVHeVFNbE5BSERSeXM4WlVTcitrYjBya0VpZGQrWmVmQXA1N3JIUHV1eDJia3RUd2VUWGk5RDlEVzhONWxUdjBlbkM2QmRTUHdMeEU1MW42MUtJNUNCVlU1ZlpSMFJXNFRnMG94bm9tN28iLCJtYWMiOiI2YzdkYjE5ZGQyZmIxYjlmZGJiOTczZjAwZjZlMTEwZmM1YTAxMjA4OTA1N2IxYWI2OWUyN2ZlZjFiZTRhMmNkIiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTuser--user--shoppinglist--shoppinglist--items--item-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTuser--user--shoppinglist--shoppinglist--items--item-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTuser--user--shoppinglist--shoppinglist--items--item-"></code></pre>
</span>
<span id="execution-error-PUTuser--user--shoppinglist--shoppinglist--items--item-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTuser--user--shoppinglist--shoppinglist--items--item-"></code></pre>
</span>
<form id="form-PUTuser--user--shoppinglist--shoppinglist--items--item-" data-method="PUT"
      data-path="user/{user}/shoppinglist/{shoppinglist}/items/{item}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTuser--user--shoppinglist--shoppinglist--items--item-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTuser--user--shoppinglist--shoppinglist--items--item-"
                    onclick="tryItOut('PUTuser--user--shoppinglist--shoppinglist--items--item-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTuser--user--shoppinglist--shoppinglist--items--item-"
                    onclick="cancelTryOut('PUTuser--user--shoppinglist--shoppinglist--items--item-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTuser--user--shoppinglist--shoppinglist--items--item-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>user/{user}/shoppinglist/{shoppinglist}/items/{item}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>user/{user}/shoppinglist/{shoppinglist}/items/{item}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user"
               data-endpoint="PUTuser--user--shoppinglist--shoppinglist--items--item-"
               value="1"
               data-component="url" hidden>
    <br>

            </p>
                    <p>
                <b><code>shoppinglist</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="shoppinglist"
               data-endpoint="PUTuser--user--shoppinglist--shoppinglist--items--item-"
               value="5"
               data-component="url" hidden>
    <br>

            </p>
                    <p>
                <b><code>item</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="item"
               data-endpoint="PUTuser--user--shoppinglist--shoppinglist--items--item-"
               value="20"
               data-component="url" hidden>
    <br>

            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>amount</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="amount"
               data-endpoint="PUTuser--user--shoppinglist--shoppinglist--items--item-"
               value="132"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255.</p>
        </p>
        </form>

            <h2 id="endpoints-DELETEuser--user--shoppinglist--shoppinglist--items--item-">DELETE user/{user}/shoppinglist/{shoppinglist}/items/{item}</h2>

<p>
</p>



<span id="example-requests-DELETEuser--user--shoppinglist--shoppinglist--items--item-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/user/1/shoppinglist/5/items/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/1/shoppinglist/5/items/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEuser--user--shoppinglist--shoppinglist--items--item-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: laravel_session=eyJpdiI6IkpNRFpFekN4QjczanU2RTQxQ3gxR3c9PSIsInZhbHVlIjoiS3ZMNHZZUmtsM2ppV0t1alROUnFnZUpYSEx2OU5LeTc2YytoKzZxc3pReW9INVN2YVkxNVg4Vld3Z2ROblM4SjMrTWhZTmZ2U1MzcXlMc1dBaUphVmh2dFh6VnAzSmRqQ2hHNk93TGFkM1dIMkYyNnc2NU5wVmVKN2VkTXBTOFIiLCJtYWMiOiIyNDIxOGQyYWE0M2M0ZTIyY2FlN2M2ODU3YTEwNDIxMjlkODA1YWJhNzYzMzg5N2YwY2VkZGIxMGNiNDk4YWMwIiwidGFnIjoiIn0%3D; expires=Tue, 14 Jun 2022 21:07:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEuser--user--shoppinglist--shoppinglist--items--item-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEuser--user--shoppinglist--shoppinglist--items--item-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEuser--user--shoppinglist--shoppinglist--items--item-"></code></pre>
</span>
<span id="execution-error-DELETEuser--user--shoppinglist--shoppinglist--items--item-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEuser--user--shoppinglist--shoppinglist--items--item-"></code></pre>
</span>
<form id="form-DELETEuser--user--shoppinglist--shoppinglist--items--item-" data-method="DELETE"
      data-path="user/{user}/shoppinglist/{shoppinglist}/items/{item}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEuser--user--shoppinglist--shoppinglist--items--item-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEuser--user--shoppinglist--shoppinglist--items--item-"
                    onclick="tryItOut('DELETEuser--user--shoppinglist--shoppinglist--items--item-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEuser--user--shoppinglist--shoppinglist--items--item-"
                    onclick="cancelTryOut('DELETEuser--user--shoppinglist--shoppinglist--items--item-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEuser--user--shoppinglist--shoppinglist--items--item-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>user/{user}/shoppinglist/{shoppinglist}/items/{item}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user"
               data-endpoint="DELETEuser--user--shoppinglist--shoppinglist--items--item-"
               value="1"
               data-component="url" hidden>
    <br>

            </p>
                    <p>
                <b><code>shoppinglist</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="shoppinglist"
               data-endpoint="DELETEuser--user--shoppinglist--shoppinglist--items--item-"
               value="5"
               data-component="url" hidden>
    <br>

            </p>
                    <p>
                <b><code>item</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="item"
               data-endpoint="DELETEuser--user--shoppinglist--shoppinglist--items--item-"
               value="3"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
