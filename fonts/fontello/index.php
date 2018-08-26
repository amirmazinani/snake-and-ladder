<!DOCTYPE html>
<html>
<head><!--[if lt IE 9]>
<script language="javascript" type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta charset="UTF-8">
<style>/*
 * Bootstrap v2.2.1
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */
.clearfix {
    *zoom: 1;
}

.clearfix:before,
.clearfix:after {
    display: table;
    content: "";
    line-height: 0;
}

.clearfix:after {
    clear: both;
}

html {
    font-size: 100%;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}

a:focus {
    outline: thin dotted #333;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}

a:hover,
a:active {
    outline: 0;
}

button,
input,
select,
textarea {
    margin: 0;
    font-size: 100%;
    vertical-align: middle;
}

button,
input {
    *overflow: visible;
    line-height: normal;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
    padding: 0;
    border: 0;
}

body {
    margin: 0;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 20px;
    color: #333;
    background-color: #fff;
}

a {
    color: #08c;
    text-decoration: none;
}

a:hover {
    color: #005580;
    text-decoration: underline;
}

.row {
    margin-left: -20px;
    *zoom: 1;
}

.row:before,
.row:after {
    display: table;
    content: "";
    line-height: 0;
}

.row:after {
    clear: both;
}

[class*="span"] {
    float: left;
    min-height: 1px;
    margin-left: 20px;
}

.container,
.navbar-static-top .container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {
    width: 940px;
}

.span12 {
    width: 940px;
}

.span11 {
    width: 860px;
}

.span10 {
    width: 780px;
}

.span9 {
    width: 700px;
}

.span8 {
    width: 620px;
}

.span7 {
    width: 540px;
}

.span6 {
    width: 460px;
}

.span5 {
    width: 380px;
}

.span4 {
    width: 300px;
}

.span3 {
    width: 220px;
}

.span2 {
    width: 140px;
}

.span1 {
    width: 60px;
}

[class*="span"].pull-right,
.row-fluid [class*="span"].pull-right {
    float: right;
}

.container {
    margin-right: auto;
    margin-left: auto;
    *zoom: 1;
}

.container:before,
.container:after {
    display: table;
    content: "";
    line-height: 0;
}

.container:after {
    clear: both;
}

p {
    margin: 0 0 10px;
}

.lead {
    margin-bottom: 20px;
    font-size: 21px;
    font-weight: 200;
    line-height: 30px;
}

small {
    font-size: 85%;
}

h1 {
    margin: 10px 0;
    font-family: inherit;
    font-weight: bold;
    line-height: 20px;
    color: inherit;
    text-rendering: optimizelegibility;
}

h1 small {
    font-weight: normal;
    line-height: 1;
    color: #999;
}

h1 {
    line-height: 40px;
}

h1 {
    font-size: 38.5px;
}

h1 small {
    font-size: 24.5px;
}

body {
    margin-top: 90px;
}

.header {
    position: fixed;
    top: 0;
    left: 50%;
    margin-left: -480px;
    background-color: #fff;
    border-bottom: 1px solid #ddd;
    padding-top: 10px;
    z-index: 10;
}

.footer {
    color: #ddd;
    font-size: 12px;
    text-align: center;
    margin-top: 20px;
}

.footer a {
    color: #ccc;
    text-decoration: underline;
}

.the-icons {
    font-size: 14px;
    line-height: 24px;
}

.switch {
    position: absolute;
    right: 0;
    bottom: 10px;
    color: #666;
}

.switch input {
    margin-right: 0.3em;
}

.codesOn .i-name {
    display: none;
}

.codesOn .i-code {
    display: inline;
}

.i-code {
    display: none;
}

@font-face {
    font-family: 'fontello';
    src: url('/fonts/fontello/font.eot?41639677');
    src: url('/fonts/fontello/font.eot?41639677#iefix') format('embedded-opentype'), url('/fonts/fontello/font.woff?41639677') format('woff'), url('/fonts/fontello/font.ttf?41639677') format('truetype'), url('/fonts/fontello/font.svg?41639677#fontello') format('svg');
    font-weight: normal;
    font-style: normal;
}

.demo-icon {
    font-family: "fontello";
    font-style: normal;
    font-weight: normal;
    speak: none;

    display: inline-block;
    text-decoration: inherit;
    width: 1em;
    margin-right: .2em;
    text-align: center;
    /* opacity: .8; */

    /* For safety - reset parent styles, that can break glyph codes*/
    font-variant: normal;
    text-transform: none;

    /* fix buttons height, for twitter bootstrap */
    line-height: 1em;

    /* Animation center compensation - margins should be symmetric */
    /* remove if not needed */
    margin-left: .2em;

    /* You can be more comfortable with increased icons size */
    /* font-size: 120%; */

    /* Font smoothing. That was taken from TWBS */
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;

    /* Uncomment for 3D effect */
    /* text-shadow: 1px 1px 1px rgba(127, 127, 127, 0.3); */
}
</style>
<link rel="stylesheet" href="css/animation.css">
<!--[if IE 7]>
<link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
<script>
    function toggleCodes(on) {
        var obj = document.getElementById('icons');

        if (on) {
            obj.className += ' codesOn';
        } else {
            obj.className = obj.className.replace(' codesOn', '');
        }
    }

</script>
</head>
<body>
<div class="container header">
    <h1>
        fontello
        <small>font demo</small>
    </h1>
    <label class="switch">
        <input type="checkbox" onclick="toggleCodes(this.checked)">show codes
    </label>
</div>
<div id="icons" class="container">
<div class="row">
    <div title="Code: 0xe800" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-happy">&#xe800;</i> <span
            class="i-name">-fnt-icon-emo-happy</span><span class="i-code">0xe800</span></div>
    <div title="Code: 0xe801" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-wink">&#xe801;</i> <span
            class="i-name">-fnt-icon-emo-wink</span><span class="i-code">0xe801</span></div>
    <div title="Code: 0xe802" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-unhappy">&#xe802;</i> <span
            class="i-name">-fnt-icon-emo-unhappy</span><span class="i-code">0xe802</span></div>
    <div title="Code: 0xe803" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-sleep">&#xe803;</i> <span
            class="i-name">-fnt-icon-emo-sleep</span><span class="i-code">0xe803</span></div>
</div>
<div class="row">
    <div title="Code: 0xe804" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-thumbsup">&#xe804;</i> <span
            class="i-name">-fnt-icon-emo-thumbsup</span><span class="i-code">0xe804</span></div>
    <div title="Code: 0xe805" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-devil">&#xe805;</i> <span
            class="i-name">-fnt-icon-emo-devil</span><span class="i-code">0xe805</span></div>
    <div title="Code: 0xe806" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-surprised">&#xe806;</i> <span
            class="i-name">-fnt-icon-emo-surprised</span><span class="i-code">0xe806</span></div>
    <div title="Code: 0xe807" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-tongue">&#xe807;</i> <span
            class="i-name">-fnt-icon-emo-tongue</span><span class="i-code">0xe807</span></div>
</div>
<div class="row">
    <div title="Code: 0xe808" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-coffee">&#xe808;</i> <span
            class="i-name">-fnt-icon-emo-coffee</span><span class="i-code">0xe808</span></div>
    <div title="Code: 0xe809" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-sunglasses">&#xe809;</i> <span
            class="i-name">-fnt-icon-emo-sunglasses</span><span class="i-code">0xe809</span></div>
    <div title="Code: 0xe80a" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-displeased">&#xe80a;</i> <span
            class="i-name">-fnt-icon-emo-displeased</span><span class="i-code">0xe80a</span></div>
    <div title="Code: 0xe80b" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-beer">&#xe80b;</i> <span
            class="i-name">-fnt-icon-emo-beer</span><span class="i-code">0xe80b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe80c" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-grin">&#xe80c;</i> <span
            class="i-name">-fnt-icon-emo-grin</span><span class="i-code">0xe80c</span></div>
    <div title="Code: 0xe80d" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-angry">&#xe80d;</i> <span
            class="i-name">-fnt-icon-emo-angry</span><span class="i-code">0xe80d</span></div>
    <div title="Code: 0xe80e" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-saint">&#xe80e;</i> <span
            class="i-name">-fnt-icon-emo-saint</span><span class="i-code">0xe80e</span></div>
    <div title="Code: 0xe80f" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-cry">&#xe80f;</i> <span
            class="i-name">-fnt-icon-emo-cry</span><span class="i-code">0xe80f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe810" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-shoot">&#xe810;</i> <span
            class="i-name">-fnt-icon-emo-shoot</span><span class="i-code">0xe810</span></div>
    <div title="Code: 0xe811" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-squint">&#xe811;</i> <span
            class="i-name">-fnt-icon-emo-squint</span><span class="i-code">0xe811</span></div>
    <div title="Code: 0xe812" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-laugh">&#xe812;</i> <span
            class="i-name">-fnt-icon-emo-laugh</span><span class="i-code">0xe812</span></div>
    <div title="Code: 0xe813" class="the-icons span3"><i class="demo-icon -fnt-icon-emo-wink2">&#xe813;</i> <span
            class="i-name">-fnt-icon-emo-wink2</span><span class="i-code">0xe813</span></div>
</div>
<div class="row">
    <div title="Code: 0xe814" class="the-icons span3"><i class="demo-icon -fnt-icon-glass">&#xe814;</i> <span
            class="i-name">-fnt-icon-glass</span><span class="i-code">0xe814</span></div>
    <div title="Code: 0xe815" class="the-icons span3"><i class="demo-icon -fnt-icon-music">&#xe815;</i> <span
            class="i-name">-fnt-icon-music</span><span class="i-code">0xe815</span></div>
    <div title="Code: 0xe816" class="the-icons span3"><i class="demo-icon -fnt-icon-search">&#xe816;</i> <span
            class="i-name">-fnt-icon-search</span><span class="i-code">0xe816</span></div>
    <div title="Code: 0xe817" class="the-icons span3"><i class="demo-icon -fnt-icon-mail">&#xe817;</i> <span
            class="i-name">-fnt-icon-mail</span><span class="i-code">0xe817</span></div>
</div>
<div class="row">
    <div title="Code: 0xe818" class="the-icons span3"><i class="demo-icon -fnt-icon-heart">&#xe818;</i> <span
            class="i-name">-fnt-icon-heart</span><span class="i-code">0xe818</span></div>
    <div title="Code: 0xe819" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-empty">&#xe819;</i> <span
            class="i-name">-fnt-icon-heart-empty</span><span class="i-code">0xe819</span></div>
    <div title="Code: 0xe81a" class="the-icons span3"><i class="demo-icon -fnt-icon-star">&#xe81a;</i> <span
            class="i-name">-fnt-icon-star</span><span class="i-code">0xe81a</span></div>
    <div title="Code: 0xe81b" class="the-icons span3"><i class="demo-icon -fnt-icon-star-empty">&#xe81b;</i> <span
            class="i-name">-fnt-icon-star-empty</span><span class="i-code">0xe81b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe81c" class="the-icons span3"><i class="demo-icon -fnt-icon-star-half">&#xe81c;</i> <span
            class="i-name">-fnt-icon-star-half</span><span class="i-code">0xe81c</span></div>
    <div title="Code: 0xe81d" class="the-icons span3"><i class="demo-icon -fnt-icon-user">&#xe81d;</i> <span
            class="i-name">-fnt-icon-user</span><span class="i-code">0xe81d</span></div>
    <div title="Code: 0xe81e" class="the-icons span3"><i class="demo-icon -fnt-icon-users">&#xe81e;</i> <span
            class="i-name">-fnt-icon-users</span><span class="i-code">0xe81e</span></div>
    <div title="Code: 0xe81f" class="the-icons span3"><i class="demo-icon -fnt-icon-video">&#xe81f;</i> <span
            class="i-name">-fnt-icon-video</span><span class="i-code">0xe81f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe820" class="the-icons span3"><i class="demo-icon -fnt-icon-videocam">&#xe820;</i> <span
            class="i-name">-fnt-icon-videocam</span><span class="i-code">0xe820</span></div>
    <div title="Code: 0xe821" class="the-icons span3"><i class="demo-icon -fnt-icon-picture">&#xe821;</i> <span
            class="i-name">-fnt-icon-picture</span><span class="i-code">0xe821</span></div>
    <div title="Code: 0xe822" class="the-icons span3"><i class="demo-icon -fnt-icon-camera">&#xe822;</i> <span
            class="i-name">-fnt-icon-camera</span><span class="i-code">0xe822</span></div>
    <div title="Code: 0xe823" class="the-icons span3"><i class="demo-icon -fnt-icon-camera-alt">&#xe823;</i> <span
            class="i-name">-fnt-icon-camera-alt</span><span class="i-code">0xe823</span></div>
</div>
<div class="row">
    <div title="Code: 0xe824" class="the-icons span3"><i class="demo-icon -fnt-icon-th-large">&#xe824;</i> <span
            class="i-name">-fnt-icon-th-large</span><span class="i-code">0xe824</span></div>
    <div title="Code: 0xe825" class="the-icons span3"><i class="demo-icon -fnt-icon-th">&#xe825;</i> <span
            class="i-name">-fnt-icon-th</span><span class="i-code">0xe825</span></div>
    <div title="Code: 0xe826" class="the-icons span3"><i class="demo-icon -fnt-icon-th-list">&#xe826;</i> <span
            class="i-name">-fnt-icon-th-list</span><span class="i-code">0xe826</span></div>
    <div title="Code: 0xe827" class="the-icons span3"><i class="demo-icon -fnt-icon-ok">&#xe827;</i> <span
            class="i-name">-fnt-icon-ok</span><span class="i-code">0xe827</span></div>
</div>
<div class="row">
    <div title="Code: 0xe828" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-circled">&#xe828;</i> <span
            class="i-name">-fnt-icon-ok-circled</span><span class="i-code">0xe828</span></div>
    <div title="Code: 0xe829" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-circled2">&#xe829;</i> <span
            class="i-name">-fnt-icon-ok-circled2</span><span class="i-code">0xe829</span></div>
    <div title="Code: 0xe82a" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel">&#xe82a;</i> <span
            class="i-name">-fnt-icon-cancel</span><span class="i-code">0xe82a</span></div>
    <div title="Code: 0xe82b" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-circled">&#xe82b;</i> <span
            class="i-name">-fnt-icon-cancel-circled</span><span class="i-code">0xe82b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe82c" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-circled2">&#xe82c;</i> <span
            class="i-name">-fnt-icon-cancel-circled2</span><span class="i-code">0xe82c</span></div>
    <div title="Code: 0xe82d" class="the-icons span3"><i class="demo-icon -fnt-icon-plus">&#xe82d;</i> <span
            class="i-name">-fnt-icon-plus</span><span class="i-code">0xe82d</span></div>
    <div title="Code: 0xe82e" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-circled">&#xe82e;</i> <span
            class="i-name">-fnt-icon-plus-circled</span><span class="i-code">0xe82e</span></div>
    <div title="Code: 0xe82f" class="the-icons span3"><i class="demo-icon -fnt-icon-minus">&#xe82f;</i> <span
            class="i-name">-fnt-icon-minus</span><span class="i-code">0xe82f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe830" class="the-icons span3"><i class="demo-icon -fnt-icon-spin1 animate-spin">&#xe830;</i>
        <span class="i-name">-fnt-icon-spin1</span><span class="i-code">0xe830</span></div>
    <div title="Code: 0xe831" class="the-icons span3"><i class="demo-icon -fnt-icon-spin2 animate-spin">&#xe831;</i>
        <span class="i-name">-fnt-icon-spin2</span><span class="i-code">0xe831</span></div>
    <div title="Code: 0xe832" class="the-icons span3"><i class="demo-icon -fnt-icon-spin3 animate-spin">&#xe832;</i>
        <span class="i-name">-fnt-icon-spin3</span><span class="i-code">0xe832</span></div>
    <div title="Code: 0xe833" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-circled">&#xe833;</i> <span
            class="i-name">-fnt-icon-minus-circled</span><span class="i-code">0xe833</span></div>
</div>
<div class="row">
    <div title="Code: 0xe834" class="the-icons span3"><i class="demo-icon -fnt-icon-spin4 animate-spin">&#xe834;</i>
        <span class="i-name">-fnt-icon-spin4</span><span class="i-code">0xe834</span></div>
    <div title="Code: 0xe835" class="the-icons span3"><i class="demo-icon -fnt-icon-help-circled">&#xe835;</i> <span
            class="i-name">-fnt-icon-help-circled</span><span class="i-code">0xe835</span></div>
    <div title="Code: 0xe836" class="the-icons span3"><i class="demo-icon -fnt-icon-info-circled">&#xe836;</i> <span
            class="i-name">-fnt-icon-info-circled</span><span class="i-code">0xe836</span></div>
    <div title="Code: 0xe837" class="the-icons span3"><i class="demo-icon -fnt-icon-home">&#xe837;</i> <span
            class="i-name">-fnt-icon-home</span><span class="i-code">0xe837</span></div>
</div>
<div class="row">
    <div title="Code: 0xe838" class="the-icons span3"><i class="demo-icon -fnt-icon-spin5 animate-spin">&#xe838;</i>
        <span class="i-name">-fnt-icon-spin5</span><span class="i-code">0xe838</span></div>
    <div title="Code: 0xe839" class="the-icons span3"><i class="demo-icon -fnt-icon-spin6 animate-spin">&#xe839;</i>
        <span class="i-name">-fnt-icon-spin6</span><span class="i-code">0xe839</span></div>
    <div title="Code: 0xe83a" class="the-icons span3"><i class="demo-icon -fnt-icon-link">&#xe83a;</i> <span
            class="i-name">-fnt-icon-link</span><span class="i-code">0xe83a</span></div>
    <div title="Code: 0xe83b" class="the-icons span3"><i class="demo-icon -fnt-icon-attach">&#xe83b;</i> <span
            class="i-name">-fnt-icon-attach</span><span class="i-code">0xe83b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe83c" class="the-icons span3"><i class="demo-icon -fnt-icon-lock">&#xe83c;</i> <span
            class="i-name">-fnt-icon-lock</span><span class="i-code">0xe83c</span></div>
    <div title="Code: 0xe83d" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open">&#xe83d;</i> <span
            class="i-name">-fnt-icon-lock-open</span><span class="i-code">0xe83d</span></div>
    <div title="Code: 0xe83e" class="the-icons span3"><i class="demo-icon -fnt-icon-pin">&#xe83e;</i> <span
            class="i-name">-fnt-icon-pin</span><span class="i-code">0xe83e</span></div>
    <div title="Code: 0xe83f" class="the-icons span3"><i class="demo-icon -fnt-icon-eye">&#xe83f;</i> <span
            class="i-name">-fnt-icon-eye</span><span class="i-code">0xe83f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe840" class="the-icons span3"><i class="demo-icon -fnt-icon-firefox">&#xe840;</i> <span
            class="i-name">-fnt-icon-firefox</span><span class="i-code">0xe840</span></div>
    <div title="Code: 0xe841" class="the-icons span3"><i class="demo-icon -fnt-icon-chrome">&#xe841;</i> <span
            class="i-name">-fnt-icon-chrome</span><span class="i-code">0xe841</span></div>
    <div title="Code: 0xe842" class="the-icons span3"><i class="demo-icon -fnt-icon-opera">&#xe842;</i> <span
            class="i-name">-fnt-icon-opera</span><span class="i-code">0xe842</span></div>
    <div title="Code: 0xe843" class="the-icons span3"><i class="demo-icon -fnt-icon-ie">&#xe843;</i> <span
            class="i-name">-fnt-icon-ie</span><span class="i-code">0xe843</span></div>
</div>
<div class="row">
    <div title="Code: 0xe844" class="the-icons span3"><i class="demo-icon -fnt-icon-crown">&#xe844;</i> <span
            class="i-name">-fnt-icon-crown</span><span class="i-code">0xe844</span></div>
    <div title="Code: 0xe845" class="the-icons span3"><i class="demo-icon -fnt-icon-crown-plus">&#xe845;</i> <span
            class="i-name">-fnt-icon-crown-plus</span><span class="i-code">0xe845</span></div>
    <div title="Code: 0xe846" class="the-icons span3"><i class="demo-icon -fnt-icon-crown-minus">&#xe846;</i> <span
            class="i-name">-fnt-icon-crown-minus</span><span class="i-code">0xe846</span></div>
    <div title="Code: 0xe847" class="the-icons span3"><i class="demo-icon -fnt-icon-marquee">&#xe847;</i> <span
            class="i-name">-fnt-icon-marquee</span><span class="i-code">0xe847</span></div>
</div>
<div class="row">
    <div title="Code: 0xe848" class="the-icons span3"><i class="demo-icon -fnt-icon-eye-off">&#xe848;</i> <span
            class="i-name">-fnt-icon-eye-off</span><span class="i-code">0xe848</span></div>
    <div title="Code: 0xe849" class="the-icons span3"><i class="demo-icon -fnt-icon-tag">&#xe849;</i> <span
            class="i-name">-fnt-icon-tag</span><span class="i-code">0xe849</span></div>
    <div title="Code: 0xe84a" class="the-icons span3"><i class="demo-icon -fnt-icon-tags">&#xe84a;</i> <span
            class="i-name">-fnt-icon-tags</span><span class="i-code">0xe84a</span></div>
    <div title="Code: 0xe84b" class="the-icons span3"><i class="demo-icon -fnt-icon-bookmark">&#xe84b;</i> <span
            class="i-name">-fnt-icon-bookmark</span><span class="i-code">0xe84b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe84c" class="the-icons span3"><i class="demo-icon -fnt-icon-flag">&#xe84c;</i> <span
            class="i-name">-fnt-icon-flag</span><span class="i-code">0xe84c</span></div>
    <div title="Code: 0xe84d" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-up">&#xe84d;</i> <span
            class="i-name">-fnt-icon-thumbs-up</span><span class="i-code">0xe84d</span></div>
    <div title="Code: 0xe84e" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-down">&#xe84e;</i> <span
            class="i-name">-fnt-icon-thumbs-down</span><span class="i-code">0xe84e</span></div>
    <div title="Code: 0xe84f" class="the-icons span3"><i class="demo-icon -fnt-icon-download">&#xe84f;</i> <span
            class="i-name">-fnt-icon-download</span><span class="i-code">0xe84f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe850" class="the-icons span3"><i class="demo-icon -fnt-icon-upload">&#xe850;</i> <span
            class="i-name">-fnt-icon-upload</span><span class="i-code">0xe850</span></div>
    <div title="Code: 0xe851" class="the-icons span3"><i class="demo-icon -fnt-icon-forward">&#xe851;</i> <span
            class="i-name">-fnt-icon-forward</span><span class="i-code">0xe851</span></div>
    <div title="Code: 0xe852" class="the-icons span3"><i class="demo-icon -fnt-icon-export">&#xe852;</i> <span
            class="i-name">-fnt-icon-export</span><span class="i-code">0xe852</span></div>
    <div title="Code: 0xe853" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil">&#xe853;</i> <span
            class="i-name">-fnt-icon-pencil</span><span class="i-code">0xe853</span></div>
</div>
<div class="row">
    <div title="Code: 0xe854" class="the-icons span3"><i class="demo-icon -fnt-icon-edit">&#xe854;</i> <span
            class="i-name">-fnt-icon-edit</span><span class="i-code">0xe854</span></div>
    <div title="Code: 0xe855" class="the-icons span3"><i class="demo-icon -fnt-icon-print">&#xe855;</i> <span
            class="i-name">-fnt-icon-print</span><span class="i-code">0xe855</span></div>
    <div title="Code: 0xe856" class="the-icons span3"><i class="demo-icon -fnt-icon-retweet">&#xe856;</i> <span
            class="i-name">-fnt-icon-retweet</span><span class="i-code">0xe856</span></div>
    <div title="Code: 0xe857" class="the-icons span3"><i class="demo-icon -fnt-icon-comment">&#xe857;</i> <span
            class="i-name">-fnt-icon-comment</span><span class="i-code">0xe857</span></div>
</div>
<div class="row">
    <div title="Code: 0xe858" class="the-icons span3"><i class="demo-icon -fnt-icon-chat">&#xe858;</i> <span
            class="i-name">-fnt-icon-chat</span><span class="i-code">0xe858</span></div>
    <div title="Code: 0xe859" class="the-icons span3"><i class="demo-icon -fnt-icon-bell">&#xe859;</i> <span
            class="i-name">-fnt-icon-bell</span><span class="i-code">0xe859</span></div>
    <div title="Code: 0xe85a" class="the-icons span3"><i class="demo-icon -fnt-icon-attention">&#xe85a;</i> <span
            class="i-name">-fnt-icon-attention</span><span class="i-code">0xe85a</span></div>
    <div title="Code: 0xe85b" class="the-icons span3"><i class="demo-icon -fnt-icon-attention-circled">&#xe85b;</i>
        <span class="i-name">-fnt-icon-attention-circled</span><span class="i-code">0xe85b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe85c" class="the-icons span3"><i class="demo-icon -fnt-icon-location">&#xe85c;</i> <span
            class="i-name">-fnt-icon-location</span><span class="i-code">0xe85c</span></div>
    <div title="Code: 0xe85d" class="the-icons span3"><i class="demo-icon -fnt-icon-trash-empty">&#xe85d;</i> <span
            class="i-name">-fnt-icon-trash-empty</span><span class="i-code">0xe85d</span></div>
    <div title="Code: 0xe85e" class="the-icons span3"><i class="demo-icon -fnt-icon-doc">&#xe85e;</i> <span
            class="i-name">-fnt-icon-doc</span><span class="i-code">0xe85e</span></div>
    <div title="Code: 0xe85f" class="the-icons span3"><i class="demo-icon -fnt-icon-folder">&#xe85f;</i> <span
            class="i-name">-fnt-icon-folder</span><span class="i-code">0xe85f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe860" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-open">&#xe860;</i> <span
            class="i-name">-fnt-icon-folder-open</span><span class="i-code">0xe860</span></div>
    <div title="Code: 0xe861" class="the-icons span3"><i class="demo-icon -fnt-icon-phone">&#xe861;</i> <span
            class="i-name">-fnt-icon-phone</span><span class="i-code">0xe861</span></div>
    <div title="Code: 0xe862" class="the-icons span3"><i class="demo-icon -fnt-icon-cog">&#xe862;</i> <span
            class="i-name">-fnt-icon-cog</span><span class="i-code">0xe862</span></div>
    <div title="Code: 0xe863" class="the-icons span3"><i class="demo-icon -fnt-icon-cog-alt">&#xe863;</i> <span
            class="i-name">-fnt-icon-cog-alt</span><span class="i-code">0xe863</span></div>
</div>
<div class="row">
    <div title="Code: 0xe864" class="the-icons span3"><i class="demo-icon -fnt-icon-wrench">&#xe864;</i> <span
            class="i-name">-fnt-icon-wrench</span><span class="i-code">0xe864</span></div>
    <div title="Code: 0xe865" class="the-icons span3"><i class="demo-icon -fnt-icon-basket">&#xe865;</i> <span
            class="i-name">-fnt-icon-basket</span><span class="i-code">0xe865</span></div>
    <div title="Code: 0xe866" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar">&#xe866;</i> <span
            class="i-name">-fnt-icon-calendar</span><span class="i-code">0xe866</span></div>
    <div title="Code: 0xe867" class="the-icons span3"><i class="demo-icon -fnt-icon-login">&#xe867;</i> <span
            class="i-name">-fnt-icon-login</span><span class="i-code">0xe867</span></div>
</div>
<div class="row">
    <div title="Code: 0xe868" class="the-icons span3"><i class="demo-icon -fnt-icon-logout">&#xe868;</i> <span
            class="i-name">-fnt-icon-logout</span><span class="i-code">0xe868</span></div>
    <div title="Code: 0xe869" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-off">&#xe869;</i> <span
            class="i-name">-fnt-icon-volume-off</span><span class="i-code">0xe869</span></div>
    <div title="Code: 0xe86a" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-down">&#xe86a;</i> <span
            class="i-name">-fnt-icon-volume-down</span><span class="i-code">0xe86a</span></div>
    <div title="Code: 0xe86b" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-up">&#xe86b;</i> <span
            class="i-name">-fnt-icon-volume-up</span><span class="i-code">0xe86b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe86c" class="the-icons span3"><i class="demo-icon -fnt-icon-headphones">&#xe86c;</i> <span
            class="i-name">-fnt-icon-headphones</span><span class="i-code">0xe86c</span></div>
    <div title="Code: 0xe86d" class="the-icons span3"><i class="demo-icon -fnt-icon-clock">&#xe86d;</i> <span
            class="i-name">-fnt-icon-clock</span><span class="i-code">0xe86d</span></div>
    <div title="Code: 0xe86e" class="the-icons span3"><i class="demo-icon -fnt-icon-block">&#xe86e;</i> <span
            class="i-name">-fnt-icon-block</span><span class="i-code">0xe86e</span></div>
    <div title="Code: 0xe86f" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full">&#xe86f;</i> <span
            class="i-name">-fnt-icon-resize-full</span><span class="i-code">0xe86f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe870" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-small">&#xe870;</i> <span
            class="i-name">-fnt-icon-resize-small</span><span class="i-code">0xe870</span></div>
    <div title="Code: 0xe871" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-vertical">&#xe871;</i> <span
            class="i-name">-fnt-icon-resize-vertical</span><span class="i-code">0xe871</span></div>
    <div title="Code: 0xe872" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-horizontal">&#xe872;</i>
        <span class="i-name">-fnt-icon-resize-horizontal</span><span class="i-code">0xe872</span></div>
    <div title="Code: 0xe873" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-in">&#xe873;</i> <span
            class="i-name">-fnt-icon-zoom-in</span><span class="i-code">0xe873</span></div>
</div>
<div class="row">
    <div title="Code: 0xe874" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-out">&#xe874;</i> <span
            class="i-name">-fnt-icon-zoom-out</span><span class="i-code">0xe874</span></div>
    <div title="Code: 0xe875" class="the-icons span3"><i class="demo-icon -fnt-icon-down-circled2">&#xe875;</i> <span
            class="i-name">-fnt-icon-down-circled2</span><span class="i-code">0xe875</span></div>
    <div title="Code: 0xe876" class="the-icons span3"><i class="demo-icon -fnt-icon-up-circled2">&#xe876;</i> <span
            class="i-name">-fnt-icon-up-circled2</span><span class="i-code">0xe876</span></div>
    <div title="Code: 0xe877" class="the-icons span3"><i class="demo-icon -fnt-icon-down-dir">&#xe877;</i> <span
            class="i-name">-fnt-icon-down-dir</span><span class="i-code">0xe877</span></div>
</div>
<div class="row">
    <div title="Code: 0xe878" class="the-icons span3"><i class="demo-icon -fnt-icon-up-dir">&#xe878;</i> <span
            class="i-name">-fnt-icon-up-dir</span><span class="i-code">0xe878</span></div>
    <div title="Code: 0xe879" class="the-icons span3"><i class="demo-icon -fnt-icon-left-dir">&#xe879;</i> <span
            class="i-name">-fnt-icon-left-dir</span><span class="i-code">0xe879</span></div>
    <div title="Code: 0xe87a" class="the-icons span3"><i class="demo-icon -fnt-icon-right-dir">&#xe87a;</i> <span
            class="i-name">-fnt-icon-right-dir</span><span class="i-code">0xe87a</span></div>
    <div title="Code: 0xe87b" class="the-icons span3"><i class="demo-icon -fnt-icon-down-open">&#xe87b;</i> <span
            class="i-name">-fnt-icon-down-open</span><span class="i-code">0xe87b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe87c" class="the-icons span3"><i class="demo-icon -fnt-icon-left-open">&#xe87c;</i> <span
            class="i-name">-fnt-icon-left-open</span><span class="i-code">0xe87c</span></div>
    <div title="Code: 0xe87d" class="the-icons span3"><i class="demo-icon -fnt-icon-right-open">&#xe87d;</i> <span
            class="i-name">-fnt-icon-right-open</span><span class="i-code">0xe87d</span></div>
    <div title="Code: 0xe87e" class="the-icons span3"><i class="demo-icon -fnt-icon-up-open">&#xe87e;</i> <span
            class="i-name">-fnt-icon-up-open</span><span class="i-code">0xe87e</span></div>
    <div title="Code: 0xe87f" class="the-icons span3"><i class="demo-icon -fnt-icon-down-big">&#xe87f;</i> <span
            class="i-name">-fnt-icon-down-big</span><span class="i-code">0xe87f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe880" class="the-icons span3"><i class="demo-icon -fnt-icon-left-big">&#xe880;</i> <span
            class="i-name">-fnt-icon-left-big</span><span class="i-code">0xe880</span></div>
    <div title="Code: 0xe881" class="the-icons span3"><i class="demo-icon -fnt-icon-right-big">&#xe881;</i> <span
            class="i-name">-fnt-icon-right-big</span><span class="i-code">0xe881</span></div>
    <div title="Code: 0xe882" class="the-icons span3"><i class="demo-icon -fnt-icon-up-big">&#xe882;</i> <span
            class="i-name">-fnt-icon-up-big</span><span class="i-code">0xe882</span></div>
    <div title="Code: 0xe883" class="the-icons span3"><i class="demo-icon -fnt-icon-right-hand">&#xe883;</i> <span
            class="i-name">-fnt-icon-right-hand</span><span class="i-code">0xe883</span></div>
</div>
<div class="row">
    <div title="Code: 0xe884" class="the-icons span3"><i class="demo-icon -fnt-icon-left-hand">&#xe884;</i> <span
            class="i-name">-fnt-icon-left-hand</span><span class="i-code">0xe884</span></div>
    <div title="Code: 0xe885" class="the-icons span3"><i class="demo-icon -fnt-icon-up-hand">&#xe885;</i> <span
            class="i-name">-fnt-icon-up-hand</span><span class="i-code">0xe885</span></div>
    <div title="Code: 0xe886" class="the-icons span3"><i class="demo-icon -fnt-icon-down-hand">&#xe886;</i> <span
            class="i-name">-fnt-icon-down-hand</span><span class="i-code">0xe886</span></div>
    <div title="Code: 0xe887" class="the-icons span3"><i class="demo-icon -fnt-icon-cw">&#xe887;</i> <span
            class="i-name">-fnt-icon-cw</span><span class="i-code">0xe887</span></div>
</div>
<div class="row">
    <div title="Code: 0xe888" class="the-icons span3"><i class="demo-icon -fnt-icon-ccw">&#xe888;</i> <span
            class="i-name">-fnt-icon-ccw</span><span class="i-code">0xe888</span></div>
    <div title="Code: 0xe889" class="the-icons span3"><i class="demo-icon -fnt-icon-arrows-cw">&#xe889;</i> <span
            class="i-name">-fnt-icon-arrows-cw</span><span class="i-code">0xe889</span></div>
    <div title="Code: 0xe88a" class="the-icons span3"><i class="demo-icon -fnt-icon-shuffle">&#xe88a;</i> <span
            class="i-name">-fnt-icon-shuffle</span><span class="i-code">0xe88a</span></div>
    <div title="Code: 0xe88b" class="the-icons span3"><i class="demo-icon -fnt-icon-play">&#xe88b;</i> <span
            class="i-name">-fnt-icon-play</span><span class="i-code">0xe88b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe88c" class="the-icons span3"><i class="demo-icon -fnt-icon-play-circled2">&#xe88c;</i> <span
            class="i-name">-fnt-icon-play-circled2</span><span class="i-code">0xe88c</span></div>
    <div title="Code: 0xe88d" class="the-icons span3"><i class="demo-icon -fnt-icon-stop">&#xe88d;</i> <span
            class="i-name">-fnt-icon-stop</span><span class="i-code">0xe88d</span></div>
    <div title="Code: 0xe88e" class="the-icons span3"><i class="demo-icon -fnt-icon-pause">&#xe88e;</i> <span
            class="i-name">-fnt-icon-pause</span><span class="i-code">0xe88e</span></div>
    <div title="Code: 0xe88f" class="the-icons span3"><i class="demo-icon -fnt-icon-to-end">&#xe88f;</i> <span
            class="i-name">-fnt-icon-to-end</span><span class="i-code">0xe88f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe890" class="the-icons span3"><i class="demo-icon -fnt-icon-to-end-alt">&#xe890;</i> <span
            class="i-name">-fnt-icon-to-end-alt</span><span class="i-code">0xe890</span></div>
    <div title="Code: 0xe891" class="the-icons span3"><i class="demo-icon -fnt-icon-to-start">&#xe891;</i> <span
            class="i-name">-fnt-icon-to-start</span><span class="i-code">0xe891</span></div>
    <div title="Code: 0xe892" class="the-icons span3"><i class="demo-icon -fnt-icon-to-start-alt">&#xe892;</i> <span
            class="i-name">-fnt-icon-to-start-alt</span><span class="i-code">0xe892</span></div>
    <div title="Code: 0xe893" class="the-icons span3"><i class="demo-icon -fnt-icon-fast-fw">&#xe893;</i> <span
            class="i-name">-fnt-icon-fast-fw</span><span class="i-code">0xe893</span></div>
</div>
<div class="row">
    <div title="Code: 0xe894" class="the-icons span3"><i class="demo-icon -fnt-icon-fast-bw">&#xe894;</i> <span
            class="i-name">-fnt-icon-fast-bw</span><span class="i-code">0xe894</span></div>
    <div title="Code: 0xe895" class="the-icons span3"><i class="demo-icon -fnt-icon-eject">&#xe895;</i> <span
            class="i-name">-fnt-icon-eject</span><span class="i-code">0xe895</span></div>
    <div title="Code: 0xe896" class="the-icons span3"><i class="demo-icon -fnt-icon-target">&#xe896;</i> <span
            class="i-name">-fnt-icon-target</span><span class="i-code">0xe896</span></div>
    <div title="Code: 0xe897" class="the-icons span3"><i class="demo-icon -fnt-icon-signal">&#xe897;</i> <span
            class="i-name">-fnt-icon-signal</span><span class="i-code">0xe897</span></div>
</div>
<div class="row">
    <div title="Code: 0xe898" class="the-icons span3"><i class="demo-icon -fnt-icon-award">&#xe898;</i> <span
            class="i-name">-fnt-icon-award</span><span class="i-code">0xe898</span></div>
    <div title="Code: 0xe899" class="the-icons span3"><i class="demo-icon -fnt-icon-inbox">&#xe899;</i> <span
            class="i-name">-fnt-icon-inbox</span><span class="i-code">0xe899</span></div>
    <div title="Code: 0xe89a" class="the-icons span3"><i class="demo-icon -fnt-icon-globe">&#xe89a;</i> <span
            class="i-name">-fnt-icon-globe</span><span class="i-code">0xe89a</span></div>
    <div title="Code: 0xe89b" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud">&#xe89b;</i> <span
            class="i-name">-fnt-icon-cloud</span><span class="i-code">0xe89b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe89c" class="the-icons span3"><i class="demo-icon -fnt-icon-flash">&#xe89c;</i> <span
            class="i-name">-fnt-icon-flash</span><span class="i-code">0xe89c</span></div>
    <div title="Code: 0xe89d" class="the-icons span3"><i class="demo-icon -fnt-icon-umbrella">&#xe89d;</i> <span
            class="i-name">-fnt-icon-umbrella</span><span class="i-code">0xe89d</span></div>
    <div title="Code: 0xe89e" class="the-icons span3"><i class="demo-icon -fnt-icon-flight">&#xe89e;</i> <span
            class="i-name">-fnt-icon-flight</span><span class="i-code">0xe89e</span></div>
    <div title="Code: 0xe89f" class="the-icons span3"><i class="demo-icon -fnt-icon-leaf">&#xe89f;</i> <span
            class="i-name">-fnt-icon-leaf</span><span class="i-code">0xe89f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8a0" class="the-icons span3"><i class="demo-icon -fnt-icon-font">&#xe8a0;</i> <span
            class="i-name">-fnt-icon-font</span><span class="i-code">0xe8a0</span></div>
    <div title="Code: 0xe8a1" class="the-icons span3"><i class="demo-icon -fnt-icon-bold">&#xe8a1;</i> <span
            class="i-name">-fnt-icon-bold</span><span class="i-code">0xe8a1</span></div>
    <div title="Code: 0xe8a2" class="the-icons span3"><i class="demo-icon -fnt-icon-italic">&#xe8a2;</i> <span
            class="i-name">-fnt-icon-italic</span><span class="i-code">0xe8a2</span></div>
    <div title="Code: 0xe8a3" class="the-icons span3"><i class="demo-icon -fnt-icon-text-height">&#xe8a3;</i> <span
            class="i-name">-fnt-icon-text-height</span><span class="i-code">0xe8a3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8a4" class="the-icons span3"><i class="demo-icon -fnt-icon-text-width">&#xe8a4;</i> <span
            class="i-name">-fnt-icon-text-width</span><span class="i-code">0xe8a4</span></div>
    <div title="Code: 0xe8a5" class="the-icons span3"><i class="demo-icon -fnt-icon-align-left">&#xe8a5;</i> <span
            class="i-name">-fnt-icon-align-left</span><span class="i-code">0xe8a5</span></div>
    <div title="Code: 0xe8a6" class="the-icons span3"><i class="demo-icon -fnt-icon-align-center">&#xe8a6;</i> <span
            class="i-name">-fnt-icon-align-center</span><span class="i-code">0xe8a6</span></div>
    <div title="Code: 0xe8a7" class="the-icons span3"><i class="demo-icon -fnt-icon-align-right">&#xe8a7;</i> <span
            class="i-name">-fnt-icon-align-right</span><span class="i-code">0xe8a7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8a8" class="the-icons span3"><i class="demo-icon -fnt-icon-align-justify">&#xe8a8;</i> <span
            class="i-name">-fnt-icon-align-justify</span><span class="i-code">0xe8a8</span></div>
    <div title="Code: 0xe8a9" class="the-icons span3"><i class="demo-icon -fnt-icon-list">&#xe8a9;</i> <span
            class="i-name">-fnt-icon-list</span><span class="i-code">0xe8a9</span></div>
    <div title="Code: 0xe8aa" class="the-icons span3"><i class="demo-icon -fnt-icon-indent-left">&#xe8aa;</i> <span
            class="i-name">-fnt-icon-indent-left</span><span class="i-code">0xe8aa</span></div>
    <div title="Code: 0xe8ab" class="the-icons span3"><i class="demo-icon -fnt-icon-indent-right">&#xe8ab;</i> <span
            class="i-name">-fnt-icon-indent-right</span><span class="i-code">0xe8ab</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8ac" class="the-icons span3"><i class="demo-icon -fnt-icon-scissors">&#xe8ac;</i> <span
            class="i-name">-fnt-icon-scissors</span><span class="i-code">0xe8ac</span></div>
    <div title="Code: 0xe8ad" class="the-icons span3"><i class="demo-icon -fnt-icon-briefcase">&#xe8ad;</i> <span
            class="i-name">-fnt-icon-briefcase</span><span class="i-code">0xe8ad</span></div>
    <div title="Code: 0xe8ae" class="the-icons span3"><i class="demo-icon -fnt-icon-off">&#xe8ae;</i> <span
            class="i-name">-fnt-icon-off</span><span class="i-code">0xe8ae</span></div>
    <div title="Code: 0xe8af" class="the-icons span3"><i class="demo-icon -fnt-icon-road">&#xe8af;</i> <span
            class="i-name">-fnt-icon-road</span><span class="i-code">0xe8af</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8b0" class="the-icons span3"><i class="demo-icon -fnt-icon-list-alt">&#xe8b0;</i> <span
            class="i-name">-fnt-icon-list-alt</span><span class="i-code">0xe8b0</span></div>
    <div title="Code: 0xe8b1" class="the-icons span3"><i class="demo-icon -fnt-icon-qrcode">&#xe8b1;</i> <span
            class="i-name">-fnt-icon-qrcode</span><span class="i-code">0xe8b1</span></div>
    <div title="Code: 0xe8b2" class="the-icons span3"><i class="demo-icon -fnt-icon-barcode">&#xe8b2;</i> <span
            class="i-name">-fnt-icon-barcode</span><span class="i-code">0xe8b2</span></div>
    <div title="Code: 0xe8b3" class="the-icons span3"><i class="demo-icon -fnt-icon-book">&#xe8b3;</i> <span
            class="i-name">-fnt-icon-book</span><span class="i-code">0xe8b3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8b4" class="the-icons span3"><i class="demo-icon -fnt-icon-adjust">&#xe8b4;</i> <span
            class="i-name">-fnt-icon-adjust</span><span class="i-code">0xe8b4</span></div>
    <div title="Code: 0xe8b5" class="the-icons span3"><i class="demo-icon -fnt-icon-tint">&#xe8b5;</i> <span
            class="i-name">-fnt-icon-tint</span><span class="i-code">0xe8b5</span></div>
    <div title="Code: 0xe8b6" class="the-icons span3"><i class="demo-icon -fnt-icon-check">&#xe8b6;</i> <span
            class="i-name">-fnt-icon-check</span><span class="i-code">0xe8b6</span></div>
    <div title="Code: 0xe8b7" class="the-icons span3"><i class="demo-icon -fnt-icon-asterisk">&#xe8b7;</i> <span
            class="i-name">-fnt-icon-asterisk</span><span class="i-code">0xe8b7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8b8" class="the-icons span3"><i class="demo-icon -fnt-icon-gift">&#xe8b8;</i> <span
            class="i-name">-fnt-icon-gift</span><span class="i-code">0xe8b8</span></div>
    <div title="Code: 0xe8b9" class="the-icons span3"><i class="demo-icon -fnt-icon-fire">&#xe8b9;</i> <span
            class="i-name">-fnt-icon-fire</span><span class="i-code">0xe8b9</span></div>
    <div title="Code: 0xe8ba" class="the-icons span3"><i class="demo-icon -fnt-icon-magnet">&#xe8ba;</i> <span
            class="i-name">-fnt-icon-magnet</span><span class="i-code">0xe8ba</span></div>
    <div title="Code: 0xe8bb" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-bar">&#xe8bb;</i> <span
            class="i-name">-fnt-icon-chart-bar</span><span class="i-code">0xe8bb</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8bc" class="the-icons span3"><i class="demo-icon -fnt-icon-credit-card">&#xe8bc;</i> <span
            class="i-name">-fnt-icon-credit-card</span><span class="i-code">0xe8bc</span></div>
    <div title="Code: 0xe8bd" class="the-icons span3"><i class="demo-icon -fnt-icon-floppy">&#xe8bd;</i> <span
            class="i-name">-fnt-icon-floppy</span><span class="i-code">0xe8bd</span></div>
    <div title="Code: 0xe8be" class="the-icons span3"><i class="demo-icon -fnt-icon-megaphone">&#xe8be;</i> <span
            class="i-name">-fnt-icon-megaphone</span><span class="i-code">0xe8be</span></div>
    <div title="Code: 0xe8bf" class="the-icons span3"><i class="demo-icon -fnt-icon-key">&#xe8bf;</i> <span
            class="i-name">-fnt-icon-key</span><span class="i-code">0xe8bf</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8c0" class="the-icons span3"><i class="demo-icon -fnt-icon-truck">&#xe8c0;</i> <span
            class="i-name">-fnt-icon-truck</span><span class="i-code">0xe8c0</span></div>
    <div title="Code: 0xe8c1" class="the-icons span3"><i class="demo-icon -fnt-icon-hammer">&#xe8c1;</i> <span
            class="i-name">-fnt-icon-hammer</span><span class="i-code">0xe8c1</span></div>
    <div title="Code: 0xe8c2" class="the-icons span3"><i class="demo-icon -fnt-icon-lemon">&#xe8c2;</i> <span
            class="i-name">-fnt-icon-lemon</span><span class="i-code">0xe8c2</span></div>
    <div title="Code: 0xe8c3" class="the-icons span3"><i class="demo-icon -fnt-icon-note">&#xe8c3;</i> <span
            class="i-name">-fnt-icon-note</span><span class="i-code">0xe8c3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8c4" class="the-icons span3"><i class="demo-icon -fnt-icon-note-beamed">&#xe8c4;</i> <span
            class="i-name">-fnt-icon-note-beamed</span><span class="i-code">0xe8c4</span></div>
    <div title="Code: 0xe8c5" class="the-icons span3"><i class="demo-icon -fnt-icon-music-1">&#xe8c5;</i> <span
            class="i-name">-fnt-icon-music-1</span><span class="i-code">0xe8c5</span></div>
    <div title="Code: 0xe8c6" class="the-icons span3"><i class="demo-icon -fnt-icon-search-1">&#xe8c6;</i> <span
            class="i-name">-fnt-icon-search-1</span><span class="i-code">0xe8c6</span></div>
    <div title="Code: 0xe8c7" class="the-icons span3"><i class="demo-icon -fnt-icon-flashlight">&#xe8c7;</i> <span
            class="i-name">-fnt-icon-flashlight</span><span class="i-code">0xe8c7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8c8" class="the-icons span3"><i class="demo-icon -fnt-icon-mail-1">&#xe8c8;</i> <span
            class="i-name">-fnt-icon-mail-1</span><span class="i-code">0xe8c8</span></div>
    <div title="Code: 0xe8c9" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-1">&#xe8c9;</i> <span
            class="i-name">-fnt-icon-heart-1</span><span class="i-code">0xe8c9</span></div>
    <div title="Code: 0xe8ca" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-empty-1">&#xe8ca;</i> <span
            class="i-name">-fnt-icon-heart-empty-1</span><span class="i-code">0xe8ca</span></div>
    <div title="Code: 0xe8cb" class="the-icons span3"><i class="demo-icon -fnt-icon-star-1">&#xe8cb;</i> <span
            class="i-name">-fnt-icon-star-1</span><span class="i-code">0xe8cb</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8cc" class="the-icons span3"><i class="demo-icon -fnt-icon-star-empty-1">&#xe8cc;</i> <span
            class="i-name">-fnt-icon-star-empty-1</span><span class="i-code">0xe8cc</span></div>
    <div title="Code: 0xe8cd" class="the-icons span3"><i class="demo-icon -fnt-icon-user-1">&#xe8cd;</i> <span
            class="i-name">-fnt-icon-user-1</span><span class="i-code">0xe8cd</span></div>
    <div title="Code: 0xe8ce" class="the-icons span3"><i class="demo-icon -fnt-icon-users-1">&#xe8ce;</i> <span
            class="i-name">-fnt-icon-users-1</span><span class="i-code">0xe8ce</span></div>
    <div title="Code: 0xe8cf" class="the-icons span3"><i class="demo-icon -fnt-icon-user-add">&#xe8cf;</i> <span
            class="i-name">-fnt-icon-user-add</span><span class="i-code">0xe8cf</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8d0" class="the-icons span3"><i class="demo-icon -fnt-icon-video-1">&#xe8d0;</i> <span
            class="i-name">-fnt-icon-video-1</span><span class="i-code">0xe8d0</span></div>
    <div title="Code: 0xe8d1" class="the-icons span3"><i class="demo-icon -fnt-icon-picture-1">&#xe8d1;</i> <span
            class="i-name">-fnt-icon-picture-1</span><span class="i-code">0xe8d1</span></div>
    <div title="Code: 0xe8d2" class="the-icons span3"><i class="demo-icon -fnt-icon-camera-1">&#xe8d2;</i> <span
            class="i-name">-fnt-icon-camera-1</span><span class="i-code">0xe8d2</span></div>
    <div title="Code: 0xe8d3" class="the-icons span3"><i class="demo-icon -fnt-icon-layout">&#xe8d3;</i> <span
            class="i-name">-fnt-icon-layout</span><span class="i-code">0xe8d3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8d4" class="the-icons span3"><i class="demo-icon -fnt-icon-menu-1">&#xe8d4;</i> <span
            class="i-name">-fnt-icon-menu-1</span><span class="i-code">0xe8d4</span></div>
    <div title="Code: 0xe8d5" class="the-icons span3"><i class="demo-icon -fnt-icon-check-1">&#xe8d5;</i> <span
            class="i-name">-fnt-icon-check-1</span><span class="i-code">0xe8d5</span></div>
    <div title="Code: 0xe8d6" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-1">&#xe8d6;</i> <span
            class="i-name">-fnt-icon-cancel-1</span><span class="i-code">0xe8d6</span></div>
    <div title="Code: 0xe8d7" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-circled-1">&#xe8d7;</i> <span
            class="i-name">-fnt-icon-cancel-circled-1</span><span class="i-code">0xe8d7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8d8" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-squared">&#xe8d8;</i> <span
            class="i-name">-fnt-icon-cancel-squared</span><span class="i-code">0xe8d8</span></div>
    <div title="Code: 0xe8d9" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-1">&#xe8d9;</i> <span
            class="i-name">-fnt-icon-plus-1</span><span class="i-code">0xe8d9</span></div>
    <div title="Code: 0xe8da" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-circled-1">&#xe8da;</i> <span
            class="i-name">-fnt-icon-plus-circled-1</span><span class="i-code">0xe8da</span></div>
    <div title="Code: 0xe8db" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-squared-1">&#xe8db;</i> <span
            class="i-name">-fnt-icon-plus-squared-1</span><span class="i-code">0xe8db</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8dc" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-1">&#xe8dc;</i> <span
            class="i-name">-fnt-icon-minus-1</span><span class="i-code">0xe8dc</span></div>
    <div title="Code: 0xe8dd" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-circled-1">&#xe8dd;</i> <span
            class="i-name">-fnt-icon-minus-circled-1</span><span class="i-code">0xe8dd</span></div>
    <div title="Code: 0xe8de" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-squared-1">&#xe8de;</i> <span
            class="i-name">-fnt-icon-minus-squared-1</span><span class="i-code">0xe8de</span></div>
    <div title="Code: 0xe8df" class="the-icons span3"><i class="demo-icon -fnt-icon-help-1">&#xe8df;</i> <span
            class="i-name">-fnt-icon-help-1</span><span class="i-code">0xe8df</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8e0" class="the-icons span3"><i class="demo-icon -fnt-icon-help-circled-1">&#xe8e0;</i> <span
            class="i-name">-fnt-icon-help-circled-1</span><span class="i-code">0xe8e0</span></div>
    <div title="Code: 0xe8e1" class="the-icons span3"><i class="demo-icon -fnt-icon-info-1">&#xe8e1;</i> <span
            class="i-name">-fnt-icon-info-1</span><span class="i-code">0xe8e1</span></div>
    <div title="Code: 0xe8e2" class="the-icons span3"><i class="demo-icon -fnt-icon-info-circled-1">&#xe8e2;</i> <span
            class="i-name">-fnt-icon-info-circled-1</span><span class="i-code">0xe8e2</span></div>
    <div title="Code: 0xe8e3" class="the-icons span3"><i class="demo-icon -fnt-icon-back">&#xe8e3;</i> <span
            class="i-name">-fnt-icon-back</span><span class="i-code">0xe8e3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8e4" class="the-icons span3"><i class="demo-icon -fnt-icon-home-1">&#xe8e4;</i> <span
            class="i-name">-fnt-icon-home-1</span><span class="i-code">0xe8e4</span></div>
    <div title="Code: 0xe8e5" class="the-icons span3"><i class="demo-icon -fnt-icon-link-1">&#xe8e5;</i> <span
            class="i-name">-fnt-icon-link-1</span><span class="i-code">0xe8e5</span></div>
    <div title="Code: 0xe8e6" class="the-icons span3"><i class="demo-icon -fnt-icon-attach-1">&#xe8e6;</i> <span
            class="i-name">-fnt-icon-attach-1</span><span class="i-code">0xe8e6</span></div>
    <div title="Code: 0xe8e7" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-1">&#xe8e7;</i> <span
            class="i-name">-fnt-icon-lock-1</span><span class="i-code">0xe8e7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8e8" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-1">&#xe8e8;</i> <span
            class="i-name">-fnt-icon-lock-open-1</span><span class="i-code">0xe8e8</span></div>
    <div title="Code: 0xe8e9" class="the-icons span3"><i class="demo-icon -fnt-icon-eye-1">&#xe8e9;</i> <span
            class="i-name">-fnt-icon-eye-1</span><span class="i-code">0xe8e9</span></div>
    <div title="Code: 0xe8ea" class="the-icons span3"><i class="demo-icon -fnt-icon-tag-1">&#xe8ea;</i> <span
            class="i-name">-fnt-icon-tag-1</span><span class="i-code">0xe8ea</span></div>
    <div title="Code: 0xe8eb" class="the-icons span3"><i class="demo-icon -fnt-icon-bookmark-1">&#xe8eb;</i> <span
            class="i-name">-fnt-icon-bookmark-1</span><span class="i-code">0xe8eb</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8ec" class="the-icons span3"><i class="demo-icon -fnt-icon-bookmarks">&#xe8ec;</i> <span
            class="i-name">-fnt-icon-bookmarks</span><span class="i-code">0xe8ec</span></div>
    <div title="Code: 0xe8ed" class="the-icons span3"><i class="demo-icon -fnt-icon-flag-1">&#xe8ed;</i> <span
            class="i-name">-fnt-icon-flag-1</span><span class="i-code">0xe8ed</span></div>
    <div title="Code: 0xe8ee" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-up-1">&#xe8ee;</i> <span
            class="i-name">-fnt-icon-thumbs-up-1</span><span class="i-code">0xe8ee</span></div>
    <div title="Code: 0xe8ef" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-down-1">&#xe8ef;</i> <span
            class="i-name">-fnt-icon-thumbs-down-1</span><span class="i-code">0xe8ef</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8f0" class="the-icons span3"><i class="demo-icon -fnt-icon-download-1">&#xe8f0;</i> <span
            class="i-name">-fnt-icon-download-1</span><span class="i-code">0xe8f0</span></div>
    <div title="Code: 0xe8f1" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-1">&#xe8f1;</i> <span
            class="i-name">-fnt-icon-upload-1</span><span class="i-code">0xe8f1</span></div>
    <div title="Code: 0xe8f2" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-cloud-1">&#xe8f2;</i> <span
            class="i-name">-fnt-icon-upload-cloud-1</span><span class="i-code">0xe8f2</span></div>
    <div title="Code: 0xe8f3" class="the-icons span3"><i class="demo-icon -fnt-icon-reply-1">&#xe8f3;</i> <span
            class="i-name">-fnt-icon-reply-1</span><span class="i-code">0xe8f3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8f4" class="the-icons span3"><i class="demo-icon -fnt-icon-reply-all-1">&#xe8f4;</i> <span
            class="i-name">-fnt-icon-reply-all-1</span><span class="i-code">0xe8f4</span></div>
    <div title="Code: 0xe8f5" class="the-icons span3"><i class="demo-icon -fnt-icon-forward-1">&#xe8f5;</i> <span
            class="i-name">-fnt-icon-forward-1</span><span class="i-code">0xe8f5</span></div>
    <div title="Code: 0xe8f6" class="the-icons span3"><i class="demo-icon -fnt-icon-quote">&#xe8f6;</i> <span
            class="i-name">-fnt-icon-quote</span><span class="i-code">0xe8f6</span></div>
    <div title="Code: 0xe8f7" class="the-icons span3"><i class="demo-icon -fnt-icon-code-1">&#xe8f7;</i> <span
            class="i-name">-fnt-icon-code-1</span><span class="i-code">0xe8f7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8f8" class="the-icons span3"><i class="demo-icon -fnt-icon-export-1">&#xe8f8;</i> <span
            class="i-name">-fnt-icon-export-1</span><span class="i-code">0xe8f8</span></div>
    <div title="Code: 0xe8f9" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-1">&#xe8f9;</i> <span
            class="i-name">-fnt-icon-pencil-1</span><span class="i-code">0xe8f9</span></div>
    <div title="Code: 0xe8fa" class="the-icons span3"><i class="demo-icon -fnt-icon-feather">&#xe8fa;</i> <span
            class="i-name">-fnt-icon-feather</span><span class="i-code">0xe8fa</span></div>
    <div title="Code: 0xe8fb" class="the-icons span3"><i class="demo-icon -fnt-icon-print-1">&#xe8fb;</i> <span
            class="i-name">-fnt-icon-print-1</span><span class="i-code">0xe8fb</span></div>
</div>
<div class="row">
    <div title="Code: 0xe8fc" class="the-icons span3"><i class="demo-icon -fnt-icon-retweet-1">&#xe8fc;</i> <span
            class="i-name">-fnt-icon-retweet-1</span><span class="i-code">0xe8fc</span></div>
    <div title="Code: 0xe8fd" class="the-icons span3"><i class="demo-icon -fnt-icon-keyboard-1">&#xe8fd;</i> <span
            class="i-name">-fnt-icon-keyboard-1</span><span class="i-code">0xe8fd</span></div>
    <div title="Code: 0xe8fe" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-1">&#xe8fe;</i> <span
            class="i-name">-fnt-icon-comment-1</span><span class="i-code">0xe8fe</span></div>
    <div title="Code: 0xe8ff" class="the-icons span3"><i class="demo-icon -fnt-icon-chat-1">&#xe8ff;</i> <span
            class="i-name">-fnt-icon-chat-1</span><span class="i-code">0xe8ff</span></div>
</div>
<div class="row">
    <div title="Code: 0xe900" class="the-icons span3"><i class="demo-icon -fnt-icon-bell-1">&#xe900;</i> <span
            class="i-name">-fnt-icon-bell-1</span><span class="i-code">0xe900</span></div>
    <div title="Code: 0xe901" class="the-icons span3"><i class="demo-icon -fnt-icon-attention-1">&#xe901;</i> <span
            class="i-name">-fnt-icon-attention-1</span><span class="i-code">0xe901</span></div>
    <div title="Code: 0xe902" class="the-icons span3"><i class="demo-icon -fnt-icon-alert">&#xe902;</i> <span
            class="i-name">-fnt-icon-alert</span><span class="i-code">0xe902</span></div>
    <div title="Code: 0xe903" class="the-icons span3"><i class="demo-icon -fnt-icon-vcard">&#xe903;</i> <span
            class="i-name">-fnt-icon-vcard</span><span class="i-code">0xe903</span></div>
</div>
<div class="row">
    <div title="Code: 0xe904" class="the-icons span3"><i class="demo-icon -fnt-icon-address">&#xe904;</i> <span
            class="i-name">-fnt-icon-address</span><span class="i-code">0xe904</span></div>
    <div title="Code: 0xe905" class="the-icons span3"><i class="demo-icon -fnt-icon-location-1">&#xe905;</i> <span
            class="i-name">-fnt-icon-location-1</span><span class="i-code">0xe905</span></div>
    <div title="Code: 0xe906" class="the-icons span3"><i class="demo-icon -fnt-icon-map-1">&#xe906;</i> <span
            class="i-name">-fnt-icon-map-1</span><span class="i-code">0xe906</span></div>
    <div title="Code: 0xe907" class="the-icons span3"><i class="demo-icon -fnt-icon-direction-1">&#xe907;</i> <span
            class="i-name">-fnt-icon-direction-1</span><span class="i-code">0xe907</span></div>
</div>
<div class="row">
    <div title="Code: 0xe908" class="the-icons span3"><i class="demo-icon -fnt-icon-compass-1">&#xe908;</i> <span
            class="i-name">-fnt-icon-compass-1</span><span class="i-code">0xe908</span></div>
    <div title="Code: 0xe909" class="the-icons span3"><i class="demo-icon -fnt-icon-cup">&#xe909;</i> <span
            class="i-name">-fnt-icon-cup</span><span class="i-code">0xe909</span></div>
    <div title="Code: 0xe90a" class="the-icons span3"><i class="demo-icon -fnt-icon-trash-1">&#xe90a;</i> <span
            class="i-name">-fnt-icon-trash-1</span><span class="i-code">0xe90a</span></div>
    <div title="Code: 0xe90b" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-1">&#xe90b;</i> <span
            class="i-name">-fnt-icon-doc-1</span><span class="i-code">0xe90b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe90c" class="the-icons span3"><i class="demo-icon -fnt-icon-docs-1">&#xe90c;</i> <span
            class="i-name">-fnt-icon-docs-1</span><span class="i-code">0xe90c</span></div>
    <div title="Code: 0xe90d" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-landscape">&#xe90d;</i> <span
            class="i-name">-fnt-icon-doc-landscape</span><span class="i-code">0xe90d</span></div>
    <div title="Code: 0xe90e" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-text-1">&#xe90e;</i> <span
            class="i-name">-fnt-icon-doc-text-1</span><span class="i-code">0xe90e</span></div>
    <div title="Code: 0xe90f" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-text-inv-1">&#xe90f;</i> <span
            class="i-name">-fnt-icon-doc-text-inv-1</span><span class="i-code">0xe90f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe910" class="the-icons span3"><i class="demo-icon -fnt-icon-newspaper-1">&#xe910;</i> <span
            class="i-name">-fnt-icon-newspaper-1</span><span class="i-code">0xe910</span></div>
    <div title="Code: 0xe911" class="the-icons span3"><i class="demo-icon -fnt-icon-book-open">&#xe911;</i> <span
            class="i-name">-fnt-icon-book-open</span><span class="i-code">0xe911</span></div>
    <div title="Code: 0xe912" class="the-icons span3"><i class="demo-icon -fnt-icon-book-1">&#xe912;</i> <span
            class="i-name">-fnt-icon-book-1</span><span class="i-code">0xe912</span></div>
    <div title="Code: 0xe913" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-1">&#xe913;</i> <span
            class="i-name">-fnt-icon-folder-1</span><span class="i-code">0xe913</span></div>
</div>
<div class="row">
    <div title="Code: 0xe914" class="the-icons span3"><i class="demo-icon -fnt-icon-archive">&#xe914;</i> <span
            class="i-name">-fnt-icon-archive</span><span class="i-code">0xe914</span></div>
    <div title="Code: 0xe915" class="the-icons span3"><i class="demo-icon -fnt-icon-box-1">&#xe915;</i> <span
            class="i-name">-fnt-icon-box-1</span><span class="i-code">0xe915</span></div>
    <div title="Code: 0xe916" class="the-icons span3"><i class="demo-icon -fnt-icon-rss-1">&#xe916;</i> <span
            class="i-name">-fnt-icon-rss-1</span><span class="i-code">0xe916</span></div>
    <div title="Code: 0xe917" class="the-icons span3"><i class="demo-icon -fnt-icon-phone-1">&#xe917;</i> <span
            class="i-name">-fnt-icon-phone-1</span><span class="i-code">0xe917</span></div>
</div>
<div class="row">
    <div title="Code: 0xe918" class="the-icons span3"><i class="demo-icon -fnt-icon-cog-1">&#xe918;</i> <span
            class="i-name">-fnt-icon-cog-1</span><span class="i-code">0xe918</span></div>
    <div title="Code: 0xe919" class="the-icons span3"><i class="demo-icon -fnt-icon-tools">&#xe919;</i> <span
            class="i-name">-fnt-icon-tools</span><span class="i-code">0xe919</span></div>
    <div title="Code: 0xe91a" class="the-icons span3"><i class="demo-icon -fnt-icon-share-1">&#xe91a;</i> <span
            class="i-name">-fnt-icon-share-1</span><span class="i-code">0xe91a</span></div>
    <div title="Code: 0xe91b" class="the-icons span3"><i class="demo-icon -fnt-icon-shareable">&#xe91b;</i> <span
            class="i-name">-fnt-icon-shareable</span><span class="i-code">0xe91b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe91c" class="the-icons span3"><i class="demo-icon -fnt-icon-basket-1">&#xe91c;</i> <span
            class="i-name">-fnt-icon-basket-1</span><span class="i-code">0xe91c</span></div>
    <div title="Code: 0xe91d" class="the-icons span3"><i class="demo-icon -fnt-icon-bag">&#xe91d;</i> <span
            class="i-name">-fnt-icon-bag</span><span class="i-code">0xe91d</span></div>
    <div title="Code: 0xe91e" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-1">&#xe91e;</i> <span
            class="i-name">-fnt-icon-calendar-1</span><span class="i-code">0xe91e</span></div>
    <div title="Code: 0xe91f" class="the-icons span3"><i class="demo-icon -fnt-icon-login-1">&#xe91f;</i> <span
            class="i-name">-fnt-icon-login-1</span><span class="i-code">0xe91f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe920" class="the-icons span3"><i class="demo-icon -fnt-icon-logout-1">&#xe920;</i> <span
            class="i-name">-fnt-icon-logout-1</span><span class="i-code">0xe920</span></div>
    <div title="Code: 0xe921" class="the-icons span3"><i class="demo-icon -fnt-icon-mic-1">&#xe921;</i> <span
            class="i-name">-fnt-icon-mic-1</span><span class="i-code">0xe921</span></div>
    <div title="Code: 0xe922" class="the-icons span3"><i class="demo-icon -fnt-icon-mute-1">&#xe922;</i> <span
            class="i-name">-fnt-icon-mute-1</span><span class="i-code">0xe922</span></div>
    <div title="Code: 0xe923" class="the-icons span3"><i class="demo-icon -fnt-icon-sound">&#xe923;</i> <span
            class="i-name">-fnt-icon-sound</span><span class="i-code">0xe923</span></div>
</div>
<div class="row">
    <div title="Code: 0xe924" class="the-icons span3"><i class="demo-icon -fnt-icon-volume">&#xe924;</i> <span
            class="i-name">-fnt-icon-volume</span><span class="i-code">0xe924</span></div>
    <div title="Code: 0xe925" class="the-icons span3"><i class="demo-icon -fnt-icon-clock-1">&#xe925;</i> <span
            class="i-name">-fnt-icon-clock-1</span><span class="i-code">0xe925</span></div>
    <div title="Code: 0xe926" class="the-icons span3"><i class="demo-icon -fnt-icon-hourglass-4">&#xe926;</i> <span
            class="i-name">-fnt-icon-hourglass-4</span><span class="i-code">0xe926</span></div>
    <div title="Code: 0xe927" class="the-icons span3"><i class="demo-icon -fnt-icon-lamp">&#xe927;</i> <span
            class="i-name">-fnt-icon-lamp</span><span class="i-code">0xe927</span></div>
</div>
<div class="row">
    <div title="Code: 0xe928" class="the-icons span3"><i class="demo-icon -fnt-icon-light-down">&#xe928;</i> <span
            class="i-name">-fnt-icon-light-down</span><span class="i-code">0xe928</span></div>
    <div title="Code: 0xe929" class="the-icons span3"><i class="demo-icon -fnt-icon-light-up">&#xe929;</i> <span
            class="i-name">-fnt-icon-light-up</span><span class="i-code">0xe929</span></div>
    <div title="Code: 0xe92a" class="the-icons span3"><i class="demo-icon -fnt-icon-adjust-1">&#xe92a;</i> <span
            class="i-name">-fnt-icon-adjust-1</span><span class="i-code">0xe92a</span></div>
    <div title="Code: 0xe92b" class="the-icons span3"><i class="demo-icon -fnt-icon-block-1">&#xe92b;</i> <span
            class="i-name">-fnt-icon-block-1</span><span class="i-code">0xe92b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe92c" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full-1">&#xe92c;</i> <span
            class="i-name">-fnt-icon-resize-full-1</span><span class="i-code">0xe92c</span></div>
    <div title="Code: 0xe92d" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-small-1">&#xe92d;</i> <span
            class="i-name">-fnt-icon-resize-small-1</span><span class="i-code">0xe92d</span></div>
    <div title="Code: 0xe92e" class="the-icons span3"><i class="demo-icon -fnt-icon-popup">&#xe92e;</i> <span
            class="i-name">-fnt-icon-popup</span><span class="i-code">0xe92e</span></div>
    <div title="Code: 0xe92f" class="the-icons span3"><i class="demo-icon -fnt-icon-publish">&#xe92f;</i> <span
            class="i-name">-fnt-icon-publish</span><span class="i-code">0xe92f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe930" class="the-icons span3"><i class="demo-icon -fnt-icon-window">&#xe930;</i> <span
            class="i-name">-fnt-icon-window</span><span class="i-code">0xe930</span></div>
    <div title="Code: 0xe931" class="the-icons span3"><i class="demo-icon -fnt-icon-arrow-combo">&#xe931;</i> <span
            class="i-name">-fnt-icon-arrow-combo</span><span class="i-code">0xe931</span></div>
    <div title="Code: 0xe932" class="the-icons span3"><i class="demo-icon -fnt-icon-down-circled-1">&#xe932;</i> <span
            class="i-name">-fnt-icon-down-circled-1</span><span class="i-code">0xe932</span></div>
    <div title="Code: 0xe933" class="the-icons span3"><i class="demo-icon -fnt-icon-left-circled-1">&#xe933;</i> <span
            class="i-name">-fnt-icon-left-circled-1</span><span class="i-code">0xe933</span></div>
</div>
<div class="row">
    <div title="Code: 0xe934" class="the-icons span3"><i class="demo-icon -fnt-icon-right-circled-1">&#xe934;</i> <span
            class="i-name">-fnt-icon-right-circled-1</span><span class="i-code">0xe934</span></div>
    <div title="Code: 0xe935" class="the-icons span3"><i class="demo-icon -fnt-icon-up-circled-1">&#xe935;</i> <span
            class="i-name">-fnt-icon-up-circled-1</span><span class="i-code">0xe935</span></div>
    <div title="Code: 0xe936" class="the-icons span3"><i class="demo-icon -fnt-icon-down-open-1">&#xe936;</i> <span
            class="i-name">-fnt-icon-down-open-1</span><span class="i-code">0xe936</span></div>
    <div title="Code: 0xe937" class="the-icons span3"><i class="demo-icon -fnt-icon-left-open-1">&#xe937;</i> <span
            class="i-name">-fnt-icon-left-open-1</span><span class="i-code">0xe937</span></div>
</div>
<div class="row">
    <div title="Code: 0xe938" class="the-icons span3"><i class="demo-icon -fnt-icon-right-open-1">&#xe938;</i> <span
            class="i-name">-fnt-icon-right-open-1</span><span class="i-code">0xe938</span></div>
    <div title="Code: 0xe939" class="the-icons span3"><i class="demo-icon -fnt-icon-up-open-1">&#xe939;</i> <span
            class="i-name">-fnt-icon-up-open-1</span><span class="i-code">0xe939</span></div>
    <div title="Code: 0xe93a" class="the-icons span3"><i class="demo-icon -fnt-icon-down-open-mini">&#xe93a;</i> <span
            class="i-name">-fnt-icon-down-open-mini</span><span class="i-code">0xe93a</span></div>
    <div title="Code: 0xe93b" class="the-icons span3"><i class="demo-icon -fnt-icon-left-open-mini">&#xe93b;</i> <span
            class="i-name">-fnt-icon-left-open-mini</span><span class="i-code">0xe93b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe93c" class="the-icons span3"><i class="demo-icon -fnt-icon-right-open-mini">&#xe93c;</i> <span
            class="i-name">-fnt-icon-right-open-mini</span><span class="i-code">0xe93c</span></div>
    <div title="Code: 0xe93d" class="the-icons span3"><i class="demo-icon -fnt-icon-up-open-mini">&#xe93d;</i> <span
            class="i-name">-fnt-icon-up-open-mini</span><span class="i-code">0xe93d</span></div>
    <div title="Code: 0xe93e" class="the-icons span3"><i class="demo-icon -fnt-icon-down-open-big">&#xe93e;</i> <span
            class="i-name">-fnt-icon-down-open-big</span><span class="i-code">0xe93e</span></div>
    <div title="Code: 0xe93f" class="the-icons span3"><i class="demo-icon -fnt-icon-left-open-big">&#xe93f;</i> <span
            class="i-name">-fnt-icon-left-open-big</span><span class="i-code">0xe93f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe940" class="the-icons span3"><i class="demo-icon -fnt-icon-right-open-big">&#xe940;</i> <span
            class="i-name">-fnt-icon-right-open-big</span><span class="i-code">0xe940</span></div>
    <div title="Code: 0xe941" class="the-icons span3"><i class="demo-icon -fnt-icon-up-open-big">&#xe941;</i> <span
            class="i-name">-fnt-icon-up-open-big</span><span class="i-code">0xe941</span></div>
    <div title="Code: 0xe942" class="the-icons span3"><i class="demo-icon -fnt-icon-down-1">&#xe942;</i> <span
            class="i-name">-fnt-icon-down-1</span><span class="i-code">0xe942</span></div>
    <div title="Code: 0xe943" class="the-icons span3"><i class="demo-icon -fnt-icon-left-1">&#xe943;</i> <span
            class="i-name">-fnt-icon-left-1</span><span class="i-code">0xe943</span></div>
</div>
<div class="row">
    <div title="Code: 0xe944" class="the-icons span3"><i class="demo-icon -fnt-icon-right-1">&#xe944;</i> <span
            class="i-name">-fnt-icon-right-1</span><span class="i-code">0xe944</span></div>
    <div title="Code: 0xe945" class="the-icons span3"><i class="demo-icon -fnt-icon-up-1">&#xe945;</i> <span
            class="i-name">-fnt-icon-up-1</span><span class="i-code">0xe945</span></div>
    <div title="Code: 0xe946" class="the-icons span3"><i class="demo-icon -fnt-icon-down-dir-1">&#xe946;</i> <span
            class="i-name">-fnt-icon-down-dir-1</span><span class="i-code">0xe946</span></div>
    <div title="Code: 0xe947" class="the-icons span3"><i class="demo-icon -fnt-icon-left-dir-1">&#xe947;</i> <span
            class="i-name">-fnt-icon-left-dir-1</span><span class="i-code">0xe947</span></div>
</div>
<div class="row">
    <div title="Code: 0xe948" class="the-icons span3"><i class="demo-icon -fnt-icon-right-dir-1">&#xe948;</i> <span
            class="i-name">-fnt-icon-right-dir-1</span><span class="i-code">0xe948</span></div>
    <div title="Code: 0xe949" class="the-icons span3"><i class="demo-icon -fnt-icon-up-dir-1">&#xe949;</i> <span
            class="i-name">-fnt-icon-up-dir-1</span><span class="i-code">0xe949</span></div>
    <div title="Code: 0xe94a" class="the-icons span3"><i class="demo-icon -fnt-icon-down-bold">&#xe94a;</i> <span
            class="i-name">-fnt-icon-down-bold</span><span class="i-code">0xe94a</span></div>
    <div title="Code: 0xe94b" class="the-icons span3"><i class="demo-icon -fnt-icon-left-bold">&#xe94b;</i> <span
            class="i-name">-fnt-icon-left-bold</span><span class="i-code">0xe94b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe94c" class="the-icons span3"><i class="demo-icon -fnt-icon-right-bold">&#xe94c;</i> <span
            class="i-name">-fnt-icon-right-bold</span><span class="i-code">0xe94c</span></div>
    <div title="Code: 0xe94d" class="the-icons span3"><i class="demo-icon -fnt-icon-up-bold">&#xe94d;</i> <span
            class="i-name">-fnt-icon-up-bold</span><span class="i-code">0xe94d</span></div>
    <div title="Code: 0xe94e" class="the-icons span3"><i class="demo-icon -fnt-icon-down-thin">&#xe94e;</i> <span
            class="i-name">-fnt-icon-down-thin</span><span class="i-code">0xe94e</span></div>
    <div title="Code: 0xe94f" class="the-icons span3"><i class="demo-icon -fnt-icon-left-thin">&#xe94f;</i> <span
            class="i-name">-fnt-icon-left-thin</span><span class="i-code">0xe94f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe950" class="the-icons span3"><i class="demo-icon -fnt-icon-right-thin">&#xe950;</i> <span
            class="i-name">-fnt-icon-right-thin</span><span class="i-code">0xe950</span></div>
    <div title="Code: 0xe951" class="the-icons span3"><i class="demo-icon -fnt-icon-up-thin">&#xe951;</i> <span
            class="i-name">-fnt-icon-up-thin</span><span class="i-code">0xe951</span></div>
    <div title="Code: 0xe952" class="the-icons span3"><i class="demo-icon -fnt-icon-ccw-1">&#xe952;</i> <span
            class="i-name">-fnt-icon-ccw-1</span><span class="i-code">0xe952</span></div>
    <div title="Code: 0xe953" class="the-icons span3"><i class="demo-icon -fnt-icon-cw-1">&#xe953;</i> <span
            class="i-name">-fnt-icon-cw-1</span><span class="i-code">0xe953</span></div>
</div>
<div class="row">
    <div title="Code: 0xe954" class="the-icons span3"><i class="demo-icon -fnt-icon-arrows-ccw">&#xe954;</i> <span
            class="i-name">-fnt-icon-arrows-ccw</span><span class="i-code">0xe954</span></div>
    <div title="Code: 0xe955" class="the-icons span3"><i class="demo-icon -fnt-icon-level-down-1">&#xe955;</i> <span
            class="i-name">-fnt-icon-level-down-1</span><span class="i-code">0xe955</span></div>
    <div title="Code: 0xe956" class="the-icons span3"><i class="demo-icon -fnt-icon-level-up-1">&#xe956;</i> <span
            class="i-name">-fnt-icon-level-up-1</span><span class="i-code">0xe956</span></div>
    <div title="Code: 0xe957" class="the-icons span3"><i class="demo-icon -fnt-icon-shuffle-1">&#xe957;</i> <span
            class="i-name">-fnt-icon-shuffle-1</span><span class="i-code">0xe957</span></div>
</div>
<div class="row">
    <div title="Code: 0xe958" class="the-icons span3"><i class="demo-icon -fnt-icon-loop">&#xe958;</i> <span
            class="i-name">-fnt-icon-loop</span><span class="i-code">0xe958</span></div>
    <div title="Code: 0xe959" class="the-icons span3"><i class="demo-icon -fnt-icon-switch">&#xe959;</i> <span
            class="i-name">-fnt-icon-switch</span><span class="i-code">0xe959</span></div>
    <div title="Code: 0xe95a" class="the-icons span3"><i class="demo-icon -fnt-icon-play-1">&#xe95a;</i> <span
            class="i-name">-fnt-icon-play-1</span><span class="i-code">0xe95a</span></div>
    <div title="Code: 0xe95b" class="the-icons span3"><i class="demo-icon -fnt-icon-stop-1">&#xe95b;</i> <span
            class="i-name">-fnt-icon-stop-1</span><span class="i-code">0xe95b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe95c" class="the-icons span3"><i class="demo-icon -fnt-icon-pause-1">&#xe95c;</i> <span
            class="i-name">-fnt-icon-pause-1</span><span class="i-code">0xe95c</span></div>
    <div title="Code: 0xe95d" class="the-icons span3"><i class="demo-icon -fnt-icon-record">&#xe95d;</i> <span
            class="i-name">-fnt-icon-record</span><span class="i-code">0xe95d</span></div>
    <div title="Code: 0xe95e" class="the-icons span3"><i class="demo-icon -fnt-icon-to-end-1">&#xe95e;</i> <span
            class="i-name">-fnt-icon-to-end-1</span><span class="i-code">0xe95e</span></div>
    <div title="Code: 0xe95f" class="the-icons span3"><i class="demo-icon -fnt-icon-to-start-1">&#xe95f;</i> <span
            class="i-name">-fnt-icon-to-start-1</span><span class="i-code">0xe95f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe960" class="the-icons span3"><i class="demo-icon -fnt-icon-fast-forward">&#xe960;</i> <span
            class="i-name">-fnt-icon-fast-forward</span><span class="i-code">0xe960</span></div>
    <div title="Code: 0xe961" class="the-icons span3"><i class="demo-icon -fnt-icon-fast-backward">&#xe961;</i> <span
            class="i-name">-fnt-icon-fast-backward</span><span class="i-code">0xe961</span></div>
    <div title="Code: 0xe962" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-0">&#xe962;</i> <span
            class="i-name">-fnt-icon-progress-0</span><span class="i-code">0xe962</span></div>
    <div title="Code: 0xe963" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-1">&#xe963;</i> <span
            class="i-name">-fnt-icon-progress-1</span><span class="i-code">0xe963</span></div>
</div>
<div class="row">
    <div title="Code: 0xe964" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-2">&#xe964;</i> <span
            class="i-name">-fnt-icon-progress-2</span><span class="i-code">0xe964</span></div>
    <div title="Code: 0xe965" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-3">&#xe965;</i> <span
            class="i-name">-fnt-icon-progress-3</span><span class="i-code">0xe965</span></div>
    <div title="Code: 0xe966" class="the-icons span3"><i class="demo-icon -fnt-icon-target-1">&#xe966;</i> <span
            class="i-name">-fnt-icon-target-1</span><span class="i-code">0xe966</span></div>
    <div title="Code: 0xe967" class="the-icons span3"><i class="demo-icon -fnt-icon-palette">&#xe967;</i> <span
            class="i-name">-fnt-icon-palette</span><span class="i-code">0xe967</span></div>
</div>
<div class="row">
    <div title="Code: 0xe968" class="the-icons span3"><i class="demo-icon -fnt-icon-list-1">&#xe968;</i> <span
            class="i-name">-fnt-icon-list-1</span><span class="i-code">0xe968</span></div>
    <div title="Code: 0xe969" class="the-icons span3"><i class="demo-icon -fnt-icon-list-add">&#xe969;</i> <span
            class="i-name">-fnt-icon-list-add</span><span class="i-code">0xe969</span></div>
    <div title="Code: 0xe96a" class="the-icons span3"><i class="demo-icon -fnt-icon-signal-1">&#xe96a;</i> <span
            class="i-name">-fnt-icon-signal-1</span><span class="i-code">0xe96a</span></div>
    <div title="Code: 0xe96b" class="the-icons span3"><i class="demo-icon -fnt-icon-trophy">&#xe96b;</i> <span
            class="i-name">-fnt-icon-trophy</span><span class="i-code">0xe96b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe96c" class="the-icons span3"><i class="demo-icon -fnt-icon-battery">&#xe96c;</i> <span
            class="i-name">-fnt-icon-battery</span><span class="i-code">0xe96c</span></div>
    <div title="Code: 0xe96d" class="the-icons span3"><i class="demo-icon -fnt-icon-back-in-time">&#xe96d;</i> <span
            class="i-name">-fnt-icon-back-in-time</span><span class="i-code">0xe96d</span></div>
    <div title="Code: 0xe96e" class="the-icons span3"><i class="demo-icon -fnt-icon-monitor">&#xe96e;</i> <span
            class="i-name">-fnt-icon-monitor</span><span class="i-code">0xe96e</span></div>
    <div title="Code: 0xe96f" class="the-icons span3"><i class="demo-icon -fnt-icon-mobile-1">&#xe96f;</i> <span
            class="i-name">-fnt-icon-mobile-1</span><span class="i-code">0xe96f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe970" class="the-icons span3"><i class="demo-icon -fnt-icon-network">&#xe970;</i> <span
            class="i-name">-fnt-icon-network</span><span class="i-code">0xe970</span></div>
    <div title="Code: 0xe971" class="the-icons span3"><i class="demo-icon -fnt-icon-cd">&#xe971;</i> <span
            class="i-name">-fnt-icon-cd</span><span class="i-code">0xe971</span></div>
    <div title="Code: 0xe972" class="the-icons span3"><i class="demo-icon -fnt-icon-inbox-1">&#xe972;</i> <span
            class="i-name">-fnt-icon-inbox-1</span><span class="i-code">0xe972</span></div>
    <div title="Code: 0xe973" class="the-icons span3"><i class="demo-icon -fnt-icon-install">&#xe973;</i> <span
            class="i-name">-fnt-icon-install</span><span class="i-code">0xe973</span></div>
</div>
<div class="row">
    <div title="Code: 0xe974" class="the-icons span3"><i class="demo-icon -fnt-icon-globe-1">&#xe974;</i> <span
            class="i-name">-fnt-icon-globe-1</span><span class="i-code">0xe974</span></div>
    <div title="Code: 0xe975" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-1">&#xe975;</i> <span
            class="i-name">-fnt-icon-cloud-1</span><span class="i-code">0xe975</span></div>
    <div title="Code: 0xe976" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-thunder">&#xe976;</i> <span
            class="i-name">-fnt-icon-cloud-thunder</span><span class="i-code">0xe976</span></div>
    <div title="Code: 0xe977" class="the-icons span3"><i class="demo-icon -fnt-icon-flash-1">&#xe977;</i> <span
            class="i-name">-fnt-icon-flash-1</span><span class="i-code">0xe977</span></div>
</div>
<div class="row">
    <div title="Code: 0xe978" class="the-icons span3"><i class="demo-icon -fnt-icon-moon-1">&#xe978;</i> <span
            class="i-name">-fnt-icon-moon-1</span><span class="i-code">0xe978</span></div>
    <div title="Code: 0xe979" class="the-icons span3"><i class="demo-icon -fnt-icon-flight-1">&#xe979;</i> <span
            class="i-name">-fnt-icon-flight-1</span><span class="i-code">0xe979</span></div>
    <div title="Code: 0xe97a" class="the-icons span3"><i class="demo-icon -fnt-icon-paper-plane-1">&#xe97a;</i> <span
            class="i-name">-fnt-icon-paper-plane-1</span><span class="i-code">0xe97a</span></div>
    <div title="Code: 0xe97b" class="the-icons span3"><i class="demo-icon -fnt-icon-leaf-1">&#xe97b;</i> <span
            class="i-name">-fnt-icon-leaf-1</span><span class="i-code">0xe97b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe97c" class="the-icons span3"><i class="demo-icon -fnt-icon-lifebuoy-1">&#xe97c;</i> <span
            class="i-name">-fnt-icon-lifebuoy-1</span><span class="i-code">0xe97c</span></div>
    <div title="Code: 0xe97d" class="the-icons span3"><i class="demo-icon -fnt-icon-mouse">&#xe97d;</i> <span
            class="i-name">-fnt-icon-mouse</span><span class="i-code">0xe97d</span></div>
    <div title="Code: 0xe97e" class="the-icons span3"><i class="demo-icon -fnt-icon-briefcase-1">&#xe97e;</i> <span
            class="i-name">-fnt-icon-briefcase-1</span><span class="i-code">0xe97e</span></div>
    <div title="Code: 0xe97f" class="the-icons span3"><i class="demo-icon -fnt-icon-suitcase-1">&#xe97f;</i> <span
            class="i-name">-fnt-icon-suitcase-1</span><span class="i-code">0xe97f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe980" class="the-icons span3"><i class="demo-icon -fnt-icon-dot">&#xe980;</i> <span
            class="i-name">-fnt-icon-dot</span><span class="i-code">0xe980</span></div>
    <div title="Code: 0xe981" class="the-icons span3"><i class="demo-icon -fnt-icon-dot-2">&#xe981;</i> <span
            class="i-name">-fnt-icon-dot-2</span><span class="i-code">0xe981</span></div>
    <div title="Code: 0xe982" class="the-icons span3"><i class="demo-icon -fnt-icon-dot-3">&#xe982;</i> <span
            class="i-name">-fnt-icon-dot-3</span><span class="i-code">0xe982</span></div>
    <div title="Code: 0xe983" class="the-icons span3"><i class="demo-icon -fnt-icon-brush-1">&#xe983;</i> <span
            class="i-name">-fnt-icon-brush-1</span><span class="i-code">0xe983</span></div>
</div>
<div class="row">
    <div title="Code: 0xe984" class="the-icons span3"><i class="demo-icon -fnt-icon-magnet-1">&#xe984;</i> <span
            class="i-name">-fnt-icon-magnet-1</span><span class="i-code">0xe984</span></div>
    <div title="Code: 0xe985" class="the-icons span3"><i class="demo-icon -fnt-icon-infinity">&#xe985;</i> <span
            class="i-name">-fnt-icon-infinity</span><span class="i-code">0xe985</span></div>
    <div title="Code: 0xe986" class="the-icons span3"><i class="demo-icon -fnt-icon-erase">&#xe986;</i> <span
            class="i-name">-fnt-icon-erase</span><span class="i-code">0xe986</span></div>
    <div title="Code: 0xe987" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-pie-1">&#xe987;</i> <span
            class="i-name">-fnt-icon-chart-pie-1</span><span class="i-code">0xe987</span></div>
</div>
<div class="row">
    <div title="Code: 0xe988" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-line-1">&#xe988;</i> <span
            class="i-name">-fnt-icon-chart-line-1</span><span class="i-code">0xe988</span></div>
    <div title="Code: 0xe989" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-bar-1">&#xe989;</i> <span
            class="i-name">-fnt-icon-chart-bar-1</span><span class="i-code">0xe989</span></div>
    <div title="Code: 0xe98a" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-area-1">&#xe98a;</i> <span
            class="i-name">-fnt-icon-chart-area-1</span><span class="i-code">0xe98a</span></div>
    <div title="Code: 0xe98b" class="the-icons span3"><i class="demo-icon -fnt-icon-tape">&#xe98b;</i> <span
            class="i-name">-fnt-icon-tape</span><span class="i-code">0xe98b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe98c" class="the-icons span3"><i class="demo-icon -fnt-icon-graduation-cap-1">&#xe98c;</i> <span
            class="i-name">-fnt-icon-graduation-cap-1</span><span class="i-code">0xe98c</span></div>
    <div title="Code: 0xe98d" class="the-icons span3"><i class="demo-icon -fnt-icon-language-1">&#xe98d;</i> <span
            class="i-name">-fnt-icon-language-1</span><span class="i-code">0xe98d</span></div>
    <div title="Code: 0xe98e" class="the-icons span3"><i class="demo-icon -fnt-icon-ticket-1">&#xe98e;</i> <span
            class="i-name">-fnt-icon-ticket-1</span><span class="i-code">0xe98e</span></div>
    <div title="Code: 0xe98f" class="the-icons span3"><i class="demo-icon -fnt-icon-water">&#xe98f;</i> <span
            class="i-name">-fnt-icon-water</span><span class="i-code">0xe98f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe990" class="the-icons span3"><i class="demo-icon -fnt-icon-droplet">&#xe990;</i> <span
            class="i-name">-fnt-icon-droplet</span><span class="i-code">0xe990</span></div>
    <div title="Code: 0xe991" class="the-icons span3"><i class="demo-icon -fnt-icon-air">&#xe991;</i> <span
            class="i-name">-fnt-icon-air</span><span class="i-code">0xe991</span></div>
    <div title="Code: 0xe992" class="the-icons span3"><i class="demo-icon -fnt-icon-credit-card-1">&#xe992;</i> <span
            class="i-name">-fnt-icon-credit-card-1</span><span class="i-code">0xe992</span></div>
    <div title="Code: 0xe993" class="the-icons span3"><i class="demo-icon -fnt-icon-floppy-1">&#xe993;</i> <span
            class="i-name">-fnt-icon-floppy-1</span><span class="i-code">0xe993</span></div>
</div>
<div class="row">
    <div title="Code: 0xe994" class="the-icons span3"><i class="demo-icon -fnt-icon-clipboard">&#xe994;</i> <span
            class="i-name">-fnt-icon-clipboard</span><span class="i-code">0xe994</span></div>
    <div title="Code: 0xe995" class="the-icons span3"><i class="demo-icon -fnt-icon-megaphone-1">&#xe995;</i> <span
            class="i-name">-fnt-icon-megaphone-1</span><span class="i-code">0xe995</span></div>
    <div title="Code: 0xe996" class="the-icons span3"><i class="demo-icon -fnt-icon-database-1">&#xe996;</i> <span
            class="i-name">-fnt-icon-database-1</span><span class="i-code">0xe996</span></div>
    <div title="Code: 0xe997" class="the-icons span3"><i class="demo-icon -fnt-icon-drive">&#xe997;</i> <span
            class="i-name">-fnt-icon-drive</span><span class="i-code">0xe997</span></div>
</div>
<div class="row">
    <div title="Code: 0xe998" class="the-icons span3"><i class="demo-icon -fnt-icon-bucket">&#xe998;</i> <span
            class="i-name">-fnt-icon-bucket</span><span class="i-code">0xe998</span></div>
    <div title="Code: 0xe999" class="the-icons span3"><i class="demo-icon -fnt-icon-thermometer-1">&#xe999;</i> <span
            class="i-name">-fnt-icon-thermometer-1</span><span class="i-code">0xe999</span></div>
    <div title="Code: 0xe99a" class="the-icons span3"><i class="demo-icon -fnt-icon-key-1">&#xe99a;</i> <span
            class="i-name">-fnt-icon-key-1</span><span class="i-code">0xe99a</span></div>
    <div title="Code: 0xe99b" class="the-icons span3"><i class="demo-icon -fnt-icon-flow-cascade">&#xe99b;</i> <span
            class="i-name">-fnt-icon-flow-cascade</span><span class="i-code">0xe99b</span></div>
</div>
<div class="row">
    <div title="Code: 0xe99c" class="the-icons span3"><i class="demo-icon -fnt-icon-flow-branch">&#xe99c;</i> <span
            class="i-name">-fnt-icon-flow-branch</span><span class="i-code">0xe99c</span></div>
    <div title="Code: 0xe99d" class="the-icons span3"><i class="demo-icon -fnt-icon-flow-tree">&#xe99d;</i> <span
            class="i-name">-fnt-icon-flow-tree</span><span class="i-code">0xe99d</span></div>
    <div title="Code: 0xe99e" class="the-icons span3"><i class="demo-icon -fnt-icon-flow-line">&#xe99e;</i> <span
            class="i-name">-fnt-icon-flow-line</span><span class="i-code">0xe99e</span></div>
    <div title="Code: 0xe99f" class="the-icons span3"><i class="demo-icon -fnt-icon-flow-parallel">&#xe99f;</i> <span
            class="i-name">-fnt-icon-flow-parallel</span><span class="i-code">0xe99f</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9a0" class="the-icons span3"><i class="demo-icon -fnt-icon-rocket-1">&#xe9a0;</i> <span
            class="i-name">-fnt-icon-rocket-1</span><span class="i-code">0xe9a0</span></div>
    <div title="Code: 0xe9a1" class="the-icons span3"><i class="demo-icon -fnt-icon-gauge-1">&#xe9a1;</i> <span
            class="i-name">-fnt-icon-gauge-1</span><span class="i-code">0xe9a1</span></div>
    <div title="Code: 0xe9a2" class="the-icons span3"><i class="demo-icon -fnt-icon-traffic-cone">&#xe9a2;</i> <span
            class="i-name">-fnt-icon-traffic-cone</span><span class="i-code">0xe9a2</span></div>
    <div title="Code: 0xe9a3" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-1">&#xe9a3;</i> <span
            class="i-name">-fnt-icon-cc-1</span><span class="i-code">0xe9a3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9a4" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-by">&#xe9a4;</i> <span
            class="i-name">-fnt-icon-cc-by</span><span class="i-code">0xe9a4</span></div>
    <div title="Code: 0xe9a5" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-nc">&#xe9a5;</i> <span
            class="i-name">-fnt-icon-cc-nc</span><span class="i-code">0xe9a5</span></div>
    <div title="Code: 0xe9a6" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-nc-eu">&#xe9a6;</i> <span
            class="i-name">-fnt-icon-cc-nc-eu</span><span class="i-code">0xe9a6</span></div>
    <div title="Code: 0xe9a7" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-nc-jp">&#xe9a7;</i> <span
            class="i-name">-fnt-icon-cc-nc-jp</span><span class="i-code">0xe9a7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9a8" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-sa">&#xe9a8;</i> <span
            class="i-name">-fnt-icon-cc-sa</span><span class="i-code">0xe9a8</span></div>
    <div title="Code: 0xe9a9" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-nd">&#xe9a9;</i> <span
            class="i-name">-fnt-icon-cc-nd</span><span class="i-code">0xe9a9</span></div>
    <div title="Code: 0xe9aa" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-pd">&#xe9aa;</i> <span
            class="i-name">-fnt-icon-cc-pd</span><span class="i-code">0xe9aa</span></div>
    <div title="Code: 0xe9ab" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-zero">&#xe9ab;</i> <span
            class="i-name">-fnt-icon-cc-zero</span><span class="i-code">0xe9ab</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9ac" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-share">&#xe9ac;</i> <span
            class="i-name">-fnt-icon-cc-share</span><span class="i-code">0xe9ac</span></div>
    <div title="Code: 0xe9ad" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-remix">&#xe9ad;</i> <span
            class="i-name">-fnt-icon-cc-remix</span><span class="i-code">0xe9ad</span></div>
    <div title="Code: 0xe9ae" class="the-icons span3"><i class="demo-icon -fnt-icon-github-1">&#xe9ae;</i> <span
            class="i-name">-fnt-icon-github-1</span><span class="i-code">0xe9ae</span></div>
    <div title="Code: 0xe9af" class="the-icons span3"><i class="demo-icon -fnt-icon-flickr-circled">&#xe9af;</i> <span
            class="i-name">-fnt-icon-flickr-circled</span><span class="i-code">0xe9af</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9b0" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-1">&#xe9b0;</i> <span
            class="i-name">-fnt-icon-facebook-1</span><span class="i-code">0xe9b0</span></div>
    <div title="Code: 0xe9b1" class="the-icons span3"><i class="demo-icon -fnt-icon-music-outline">&#xe9b1;</i> <span
            class="i-name">-fnt-icon-music-outline</span><span class="i-code">0xe9b1</span></div>
    <div title="Code: 0xe9b2" class="the-icons span3"><i class="demo-icon -fnt-icon-music-2">&#xe9b2;</i> <span
            class="i-name">-fnt-icon-music-2</span><span class="i-code">0xe9b2</span></div>
    <div title="Code: 0xe9b3" class="the-icons span3"><i class="demo-icon -fnt-icon-search-outline">&#xe9b3;</i> <span
            class="i-name">-fnt-icon-search-outline</span><span class="i-code">0xe9b3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9b4" class="the-icons span3"><i class="demo-icon -fnt-icon-search-2">&#xe9b4;</i> <span
            class="i-name">-fnt-icon-search-2</span><span class="i-code">0xe9b4</span></div>
    <div title="Code: 0xe9b5" class="the-icons span3"><i class="demo-icon -fnt-icon-mail-2">&#xe9b5;</i> <span
            class="i-name">-fnt-icon-mail-2</span><span class="i-code">0xe9b5</span></div>
    <div title="Code: 0xe9b6" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-2">&#xe9b6;</i> <span
            class="i-name">-fnt-icon-heart-2</span><span class="i-code">0xe9b6</span></div>
    <div title="Code: 0xe9b7" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-filled">&#xe9b7;</i> <span
            class="i-name">-fnt-icon-heart-filled</span><span class="i-code">0xe9b7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9b8" class="the-icons span3"><i class="demo-icon -fnt-icon-star-2">&#xe9b8;</i> <span
            class="i-name">-fnt-icon-star-2</span><span class="i-code">0xe9b8</span></div>
    <div title="Code: 0xe9b9" class="the-icons span3"><i class="demo-icon -fnt-icon-star-filled">&#xe9b9;</i> <span
            class="i-name">-fnt-icon-star-filled</span><span class="i-code">0xe9b9</span></div>
    <div title="Code: 0xe9ba" class="the-icons span3"><i class="demo-icon -fnt-icon-user-outline">&#xe9ba;</i> <span
            class="i-name">-fnt-icon-user-outline</span><span class="i-code">0xe9ba</span></div>
    <div title="Code: 0xe9bb" class="the-icons span3"><i class="demo-icon -fnt-icon-user-2">&#xe9bb;</i> <span
            class="i-name">-fnt-icon-user-2</span><span class="i-code">0xe9bb</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9bc" class="the-icons span3"><i class="demo-icon -fnt-icon-users-outline">&#xe9bc;</i> <span
            class="i-name">-fnt-icon-users-outline</span><span class="i-code">0xe9bc</span></div>
    <div title="Code: 0xe9bd" class="the-icons span3"><i class="demo-icon -fnt-icon-users-2">&#xe9bd;</i> <span
            class="i-name">-fnt-icon-users-2</span><span class="i-code">0xe9bd</span></div>
    <div title="Code: 0xe9be" class="the-icons span3"><i class="demo-icon -fnt-icon-user-add-outline">&#xe9be;</i> <span
            class="i-name">-fnt-icon-user-add-outline</span><span class="i-code">0xe9be</span></div>
    <div title="Code: 0xe9bf" class="the-icons span3"><i class="demo-icon -fnt-icon-user-add-1">&#xe9bf;</i> <span
            class="i-name">-fnt-icon-user-add-1</span><span class="i-code">0xe9bf</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9c0" class="the-icons span3"><i class="demo-icon -fnt-icon-user-delete-outline">&#xe9c0;</i>
        <span class="i-name">-fnt-icon-user-delete-outline</span><span class="i-code">0xe9c0</span></div>
    <div title="Code: 0xe9c1" class="the-icons span3"><i class="demo-icon -fnt-icon-user-delete">&#xe9c1;</i> <span
            class="i-name">-fnt-icon-user-delete</span><span class="i-code">0xe9c1</span></div>
    <div title="Code: 0xe9c2" class="the-icons span3"><i class="demo-icon -fnt-icon-video-2">&#xe9c2;</i> <span
            class="i-name">-fnt-icon-video-2</span><span class="i-code">0xe9c2</span></div>
    <div title="Code: 0xe9c3" class="the-icons span3"><i class="demo-icon -fnt-icon-videocam-outline">&#xe9c3;</i> <span
            class="i-name">-fnt-icon-videocam-outline</span><span class="i-code">0xe9c3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9c4" class="the-icons span3"><i class="demo-icon -fnt-icon-videocam-1">&#xe9c4;</i> <span
            class="i-name">-fnt-icon-videocam-1</span><span class="i-code">0xe9c4</span></div>
    <div title="Code: 0xe9c5" class="the-icons span3"><i class="demo-icon -fnt-icon-picture-outline">&#xe9c5;</i> <span
            class="i-name">-fnt-icon-picture-outline</span><span class="i-code">0xe9c5</span></div>
    <div title="Code: 0xe9c6" class="the-icons span3"><i class="demo-icon -fnt-icon-picture-2">&#xe9c6;</i> <span
            class="i-name">-fnt-icon-picture-2</span><span class="i-code">0xe9c6</span></div>
    <div title="Code: 0xe9c7" class="the-icons span3"><i class="demo-icon -fnt-icon-camera-outline">&#xe9c7;</i> <span
            class="i-name">-fnt-icon-camera-outline</span><span class="i-code">0xe9c7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9c8" class="the-icons span3"><i class="demo-icon -fnt-icon-camera-2">&#xe9c8;</i> <span
            class="i-name">-fnt-icon-camera-2</span><span class="i-code">0xe9c8</span></div>
    <div title="Code: 0xe9c9" class="the-icons span3"><i class="demo-icon -fnt-icon-th-outline">&#xe9c9;</i> <span
            class="i-name">-fnt-icon-th-outline</span><span class="i-code">0xe9c9</span></div>
    <div title="Code: 0xe9ca" class="the-icons span3"><i class="demo-icon -fnt-icon-th-1">&#xe9ca;</i> <span
            class="i-name">-fnt-icon-th-1</span><span class="i-code">0xe9ca</span></div>
    <div title="Code: 0xe9cb" class="the-icons span3"><i class="demo-icon -fnt-icon-th-large-outline">&#xe9cb;</i> <span
            class="i-name">-fnt-icon-th-large-outline</span><span class="i-code">0xe9cb</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9cc" class="the-icons span3"><i class="demo-icon -fnt-icon-th-large-1">&#xe9cc;</i> <span
            class="i-name">-fnt-icon-th-large-1</span><span class="i-code">0xe9cc</span></div>
    <div title="Code: 0xe9cd" class="the-icons span3"><i class="demo-icon -fnt-icon-th-list-outline">&#xe9cd;</i> <span
            class="i-name">-fnt-icon-th-list-outline</span><span class="i-code">0xe9cd</span></div>
    <div title="Code: 0xe9ce" class="the-icons span3"><i class="demo-icon -fnt-icon-th-list-1">&#xe9ce;</i> <span
            class="i-name">-fnt-icon-th-list-1</span><span class="i-code">0xe9ce</span></div>
    <div title="Code: 0xe9cf" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-outline">&#xe9cf;</i> <span
            class="i-name">-fnt-icon-ok-outline</span><span class="i-code">0xe9cf</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9d0" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-1">&#xe9d0;</i> <span
            class="i-name">-fnt-icon-ok-1</span><span class="i-code">0xe9d0</span></div>
    <div title="Code: 0xe9d1" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-outline">&#xe9d1;</i> <span
            class="i-name">-fnt-icon-cancel-outline</span><span class="i-code">0xe9d1</span></div>
    <div title="Code: 0xe9d2" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-2">&#xe9d2;</i> <span
            class="i-name">-fnt-icon-cancel-2</span><span class="i-code">0xe9d2</span></div>
    <div title="Code: 0xe9d3" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-alt">&#xe9d3;</i> <span
            class="i-name">-fnt-icon-cancel-alt</span><span class="i-code">0xe9d3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9d4" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-alt-filled">&#xe9d4;</i>
        <span class="i-name">-fnt-icon-cancel-alt-filled</span><span class="i-code">0xe9d4</span></div>
    <div title="Code: 0xe9d5" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-circled-outline">&#xe9d5;</i>
        <span class="i-name">-fnt-icon-cancel-circled-outline</span><span class="i-code">0xe9d5</span></div>
    <div title="Code: 0xe9d6" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-circled-2">&#xe9d6;</i> <span
            class="i-name">-fnt-icon-cancel-circled-2</span><span class="i-code">0xe9d6</span></div>
    <div title="Code: 0xe9d7" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-outline">&#xe9d7;</i> <span
            class="i-name">-fnt-icon-plus-outline</span><span class="i-code">0xe9d7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9d8" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-2">&#xe9d8;</i> <span
            class="i-name">-fnt-icon-plus-2</span><span class="i-code">0xe9d8</span></div>
    <div title="Code: 0xe9d9" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-outline">&#xe9d9;</i> <span
            class="i-name">-fnt-icon-minus-outline</span><span class="i-code">0xe9d9</span></div>
    <div title="Code: 0xe9da" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-2">&#xe9da;</i> <span
            class="i-name">-fnt-icon-minus-2</span><span class="i-code">0xe9da</span></div>
    <div title="Code: 0xe9db" class="the-icons span3"><i class="demo-icon -fnt-icon-divide-outline">&#xe9db;</i> <span
            class="i-name">-fnt-icon-divide-outline</span><span class="i-code">0xe9db</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9dc" class="the-icons span3"><i class="demo-icon -fnt-icon-divide">&#xe9dc;</i> <span
            class="i-name">-fnt-icon-divide</span><span class="i-code">0xe9dc</span></div>
    <div title="Code: 0xe9dd" class="the-icons span3"><i class="demo-icon -fnt-icon-eq-outline">&#xe9dd;</i> <span
            class="i-name">-fnt-icon-eq-outline</span><span class="i-code">0xe9dd</span></div>
    <div title="Code: 0xe9de" class="the-icons span3"><i class="demo-icon -fnt-icon-eq">&#xe9de;</i> <span
            class="i-name">-fnt-icon-eq</span><span class="i-code">0xe9de</span></div>
    <div title="Code: 0xe9df" class="the-icons span3"><i class="demo-icon -fnt-icon-info-outline">&#xe9df;</i> <span
            class="i-name">-fnt-icon-info-outline</span><span class="i-code">0xe9df</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9e0" class="the-icons span3"><i class="demo-icon -fnt-icon-info-2">&#xe9e0;</i> <span
            class="i-name">-fnt-icon-info-2</span><span class="i-code">0xe9e0</span></div>
    <div title="Code: 0xe9e1" class="the-icons span3"><i class="demo-icon -fnt-icon-home-outline">&#xe9e1;</i> <span
            class="i-name">-fnt-icon-home-outline</span><span class="i-code">0xe9e1</span></div>
    <div title="Code: 0xe9e2" class="the-icons span3"><i class="demo-icon -fnt-icon-home-2">&#xe9e2;</i> <span
            class="i-name">-fnt-icon-home-2</span><span class="i-code">0xe9e2</span></div>
    <div title="Code: 0xe9e3" class="the-icons span3"><i class="demo-icon -fnt-icon-link-outline">&#xe9e3;</i> <span
            class="i-name">-fnt-icon-link-outline</span><span class="i-code">0xe9e3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9e4" class="the-icons span3"><i class="demo-icon -fnt-icon-link-2">&#xe9e4;</i> <span
            class="i-name">-fnt-icon-link-2</span><span class="i-code">0xe9e4</span></div>
    <div title="Code: 0xe9e5" class="the-icons span3"><i class="demo-icon -fnt-icon-attach-outline">&#xe9e5;</i> <span
            class="i-name">-fnt-icon-attach-outline</span><span class="i-code">0xe9e5</span></div>
    <div title="Code: 0xe9e6" class="the-icons span3"><i class="demo-icon -fnt-icon-attach-2">&#xe9e6;</i> <span
            class="i-name">-fnt-icon-attach-2</span><span class="i-code">0xe9e6</span></div>
    <div title="Code: 0xe9e7" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-2">&#xe9e7;</i> <span
            class="i-name">-fnt-icon-lock-2</span><span class="i-code">0xe9e7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9e8" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-filled">&#xe9e8;</i> <span
            class="i-name">-fnt-icon-lock-filled</span><span class="i-code">0xe9e8</span></div>
    <div title="Code: 0xe9e9" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-2">&#xe9e9;</i> <span
            class="i-name">-fnt-icon-lock-open-2</span><span class="i-code">0xe9e9</span></div>
    <div title="Code: 0xe9ea" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-filled">&#xe9ea;</i> <span
            class="i-name">-fnt-icon-lock-open-filled</span><span class="i-code">0xe9ea</span></div>
    <div title="Code: 0xe9eb" class="the-icons span3"><i class="demo-icon -fnt-icon-pin-outline">&#xe9eb;</i> <span
            class="i-name">-fnt-icon-pin-outline</span><span class="i-code">0xe9eb</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9ec" class="the-icons span3"><i class="demo-icon -fnt-icon-pin-1">&#xe9ec;</i> <span
            class="i-name">-fnt-icon-pin-1</span><span class="i-code">0xe9ec</span></div>
    <div title="Code: 0xe9ed" class="the-icons span3"><i class="demo-icon -fnt-icon-eye-outline">&#xe9ed;</i> <span
            class="i-name">-fnt-icon-eye-outline</span><span class="i-code">0xe9ed</span></div>
    <div title="Code: 0xe9ee" class="the-icons span3"><i class="demo-icon -fnt-icon-eye-2">&#xe9ee;</i> <span
            class="i-name">-fnt-icon-eye-2</span><span class="i-code">0xe9ee</span></div>
    <div title="Code: 0xe9ef" class="the-icons span3"><i class="demo-icon -fnt-icon-tag-2">&#xe9ef;</i> <span
            class="i-name">-fnt-icon-tag-2</span><span class="i-code">0xe9ef</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9f0" class="the-icons span3"><i class="demo-icon -fnt-icon-tags-1">&#xe9f0;</i> <span
            class="i-name">-fnt-icon-tags-1</span><span class="i-code">0xe9f0</span></div>
    <div title="Code: 0xe9f1" class="the-icons span3"><i class="demo-icon -fnt-icon-bookmark-2">&#xe9f1;</i> <span
            class="i-name">-fnt-icon-bookmark-2</span><span class="i-code">0xe9f1</span></div>
    <div title="Code: 0xe9f2" class="the-icons span3"><i class="demo-icon -fnt-icon-flag-2">&#xe9f2;</i> <span
            class="i-name">-fnt-icon-flag-2</span><span class="i-code">0xe9f2</span></div>
    <div title="Code: 0xe9f3" class="the-icons span3"><i class="demo-icon -fnt-icon-flag-filled">&#xe9f3;</i> <span
            class="i-name">-fnt-icon-flag-filled</span><span class="i-code">0xe9f3</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9f4" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-up-2">&#xe9f4;</i> <span
            class="i-name">-fnt-icon-thumbs-up-2</span><span class="i-code">0xe9f4</span></div>
    <div title="Code: 0xe9f5" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-down-2">&#xe9f5;</i> <span
            class="i-name">-fnt-icon-thumbs-down-2</span><span class="i-code">0xe9f5</span></div>
    <div title="Code: 0xe9f6" class="the-icons span3"><i class="demo-icon -fnt-icon-download-outline">&#xe9f6;</i> <span
            class="i-name">-fnt-icon-download-outline</span><span class="i-code">0xe9f6</span></div>
    <div title="Code: 0xe9f7" class="the-icons span3"><i class="demo-icon -fnt-icon-download-2">&#xe9f7;</i> <span
            class="i-name">-fnt-icon-download-2</span><span class="i-code">0xe9f7</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9f8" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-outline">&#xe9f8;</i> <span
            class="i-name">-fnt-icon-upload-outline</span><span class="i-code">0xe9f8</span></div>
    <div title="Code: 0xe9f9" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-2">&#xe9f9;</i> <span
            class="i-name">-fnt-icon-upload-2</span><span class="i-code">0xe9f9</span></div>
    <div title="Code: 0xe9fa" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-cloud-outline">&#xe9fa;</i>
        <span class="i-name">-fnt-icon-upload-cloud-outline</span><span class="i-code">0xe9fa</span></div>
    <div title="Code: 0xe9fb" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-cloud-2">&#xe9fb;</i> <span
            class="i-name">-fnt-icon-upload-cloud-2</span><span class="i-code">0xe9fb</span></div>
</div>
<div class="row">
    <div title="Code: 0xe9fc" class="the-icons span3"><i class="demo-icon -fnt-icon-reply-outline">&#xe9fc;</i> <span
            class="i-name">-fnt-icon-reply-outline</span><span class="i-code">0xe9fc</span></div>
    <div title="Code: 0xe9fd" class="the-icons span3"><i class="demo-icon -fnt-icon-reply-2">&#xe9fd;</i> <span
            class="i-name">-fnt-icon-reply-2</span><span class="i-code">0xe9fd</span></div>
    <div title="Code: 0xe9fe" class="the-icons span3"><i class="demo-icon -fnt-icon-forward-outline">&#xe9fe;</i> <span
            class="i-name">-fnt-icon-forward-outline</span><span class="i-code">0xe9fe</span></div>
    <div title="Code: 0xe9ff" class="the-icons span3"><i class="demo-icon -fnt-icon-forward-2">&#xe9ff;</i> <span
            class="i-name">-fnt-icon-forward-2</span><span class="i-code">0xe9ff</span></div>
</div>
<div class="row">
    <div title="Code: 0xea00" class="the-icons span3"><i class="demo-icon -fnt-icon-code-outline">&#xea00;</i> <span
            class="i-name">-fnt-icon-code-outline</span><span class="i-code">0xea00</span></div>
    <div title="Code: 0xea01" class="the-icons span3"><i class="demo-icon -fnt-icon-code-2">&#xea01;</i> <span
            class="i-name">-fnt-icon-code-2</span><span class="i-code">0xea01</span></div>
    <div title="Code: 0xea02" class="the-icons span3"><i class="demo-icon -fnt-icon-export-outline">&#xea02;</i> <span
            class="i-name">-fnt-icon-export-outline</span><span class="i-code">0xea02</span></div>
    <div title="Code: 0xea03" class="the-icons span3"><i class="demo-icon -fnt-icon-export-2">&#xea03;</i> <span
            class="i-name">-fnt-icon-export-2</span><span class="i-code">0xea03</span></div>
</div>
<div class="row">
    <div title="Code: 0xea04" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-2">&#xea04;</i> <span
            class="i-name">-fnt-icon-pencil-2</span><span class="i-code">0xea04</span></div>
    <div title="Code: 0xea05" class="the-icons span3"><i class="demo-icon -fnt-icon-pen">&#xea05;</i> <span
            class="i-name">-fnt-icon-pen</span><span class="i-code">0xea05</span></div>
    <div title="Code: 0xea06" class="the-icons span3"><i class="demo-icon -fnt-icon-feather-1">&#xea06;</i> <span
            class="i-name">-fnt-icon-feather-1</span><span class="i-code">0xea06</span></div>
    <div title="Code: 0xea07" class="the-icons span3"><i class="demo-icon -fnt-icon-edit-1">&#xea07;</i> <span
            class="i-name">-fnt-icon-edit-1</span><span class="i-code">0xea07</span></div>
</div>
<div class="row">
    <div title="Code: 0xea08" class="the-icons span3"><i class="demo-icon -fnt-icon-print-2">&#xea08;</i> <span
            class="i-name">-fnt-icon-print-2</span><span class="i-code">0xea08</span></div>
    <div title="Code: 0xea09" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-2">&#xea09;</i> <span
            class="i-name">-fnt-icon-comment-2</span><span class="i-code">0xea09</span></div>
    <div title="Code: 0xea0a" class="the-icons span3"><i class="demo-icon -fnt-icon-chat-2">&#xea0a;</i> <span
            class="i-name">-fnt-icon-chat-2</span><span class="i-code">0xea0a</span></div>
    <div title="Code: 0xea0b" class="the-icons span3"><i class="demo-icon -fnt-icon-chat-alt">&#xea0b;</i> <span
            class="i-name">-fnt-icon-chat-alt</span><span class="i-code">0xea0b</span></div>
</div>
<div class="row">
    <div title="Code: 0xea0c" class="the-icons span3"><i class="demo-icon -fnt-icon-bell-2">&#xea0c;</i> <span
            class="i-name">-fnt-icon-bell-2</span><span class="i-code">0xea0c</span></div>
    <div title="Code: 0xea0d" class="the-icons span3"><i class="demo-icon -fnt-icon-attention-2">&#xea0d;</i> <span
            class="i-name">-fnt-icon-attention-2</span><span class="i-code">0xea0d</span></div>
    <div title="Code: 0xea0e" class="the-icons span3"><i class="demo-icon -fnt-icon-attention-filled">&#xea0e;</i> <span
            class="i-name">-fnt-icon-attention-filled</span><span class="i-code">0xea0e</span></div>
    <div title="Code: 0xea0f" class="the-icons span3"><i class="demo-icon -fnt-icon-warning-empty">&#xea0f;</i> <span
            class="i-name">-fnt-icon-warning-empty</span><span class="i-code">0xea0f</span></div>
</div>
<div class="row">
    <div title="Code: 0xea10" class="the-icons span3"><i class="demo-icon -fnt-icon-warning">&#xea10;</i> <span
            class="i-name">-fnt-icon-warning</span><span class="i-code">0xea10</span></div>
    <div title="Code: 0xea11" class="the-icons span3"><i class="demo-icon -fnt-icon-contacts">&#xea11;</i> <span
            class="i-name">-fnt-icon-contacts</span><span class="i-code">0xea11</span></div>
    <div title="Code: 0xea12" class="the-icons span3"><i class="demo-icon -fnt-icon-vcard-1">&#xea12;</i> <span
            class="i-name">-fnt-icon-vcard-1</span><span class="i-code">0xea12</span></div>
    <div title="Code: 0xea13" class="the-icons span3"><i class="demo-icon -fnt-icon-address-1">&#xea13;</i> <span
            class="i-name">-fnt-icon-address-1</span><span class="i-code">0xea13</span></div>
</div>
<div class="row">
    <div title="Code: 0xea14" class="the-icons span3"><i class="demo-icon -fnt-icon-location-outline">&#xea14;</i> <span
            class="i-name">-fnt-icon-location-outline</span><span class="i-code">0xea14</span></div>
    <div title="Code: 0xea15" class="the-icons span3"><i class="demo-icon -fnt-icon-location-2">&#xea15;</i> <span
            class="i-name">-fnt-icon-location-2</span><span class="i-code">0xea15</span></div>
    <div title="Code: 0xea16" class="the-icons span3"><i class="demo-icon -fnt-icon-map-2">&#xea16;</i> <span
            class="i-name">-fnt-icon-map-2</span><span class="i-code">0xea16</span></div>
    <div title="Code: 0xea17" class="the-icons span3"><i class="demo-icon -fnt-icon-direction-outline">&#xea17;</i>
        <span class="i-name">-fnt-icon-direction-outline</span><span class="i-code">0xea17</span></div>
</div>
<div class="row">
    <div title="Code: 0xea18" class="the-icons span3"><i class="demo-icon -fnt-icon-direction-2">&#xea18;</i> <span
            class="i-name">-fnt-icon-direction-2</span><span class="i-code">0xea18</span></div>
    <div title="Code: 0xea19" class="the-icons span3"><i class="demo-icon -fnt-icon-compass-2">&#xea19;</i> <span
            class="i-name">-fnt-icon-compass-2</span><span class="i-code">0xea19</span></div>
    <div title="Code: 0xea1a" class="the-icons span3"><i class="demo-icon -fnt-icon-trash-2">&#xea1a;</i> <span
            class="i-name">-fnt-icon-trash-2</span><span class="i-code">0xea1a</span></div>
    <div title="Code: 0xea1b" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-2">&#xea1b;</i> <span
            class="i-name">-fnt-icon-doc-2</span><span class="i-code">0xea1b</span></div>
</div>
<div class="row">
    <div title="Code: 0xea1c" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-text-2">&#xea1c;</i> <span
            class="i-name">-fnt-icon-doc-text-2</span><span class="i-code">0xea1c</span></div>
    <div title="Code: 0xea1d" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-add">&#xea1d;</i> <span
            class="i-name">-fnt-icon-doc-add</span><span class="i-code">0xea1d</span></div>
    <div title="Code: 0xea1e" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-remove">&#xea1e;</i> <span
            class="i-name">-fnt-icon-doc-remove</span><span class="i-code">0xea1e</span></div>
    <div title="Code: 0xea1f" class="the-icons span3"><i class="demo-icon -fnt-icon-news">&#xea1f;</i> <span
            class="i-name">-fnt-icon-news</span><span class="i-code">0xea1f</span></div>
</div>
<div class="row">
    <div title="Code: 0xea20" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-2">&#xea20;</i> <span
            class="i-name">-fnt-icon-folder-2</span><span class="i-code">0xea20</span></div>
    <div title="Code: 0xea21" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-add">&#xea21;</i> <span
            class="i-name">-fnt-icon-folder-add</span><span class="i-code">0xea21</span></div>
    <div title="Code: 0xea22" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-delete">&#xea22;</i> <span
            class="i-name">-fnt-icon-folder-delete</span><span class="i-code">0xea22</span></div>
    <div title="Code: 0xea23" class="the-icons span3"><i class="demo-icon -fnt-icon-archive-1">&#xea23;</i> <span
            class="i-name">-fnt-icon-archive-1</span><span class="i-code">0xea23</span></div>
</div>
<div class="row">
    <div title="Code: 0xea24" class="the-icons span3"><i class="demo-icon -fnt-icon-box-2">&#xea24;</i> <span
            class="i-name">-fnt-icon-box-2</span><span class="i-code">0xea24</span></div>
    <div title="Code: 0xea25" class="the-icons span3"><i class="demo-icon -fnt-icon-rss-outline">&#xea25;</i> <span
            class="i-name">-fnt-icon-rss-outline</span><span class="i-code">0xea25</span></div>
    <div title="Code: 0xea26" class="the-icons span3"><i class="demo-icon -fnt-icon-rss-2">&#xea26;</i> <span
            class="i-name">-fnt-icon-rss-2</span><span class="i-code">0xea26</span></div>
    <div title="Code: 0xea27" class="the-icons span3"><i class="demo-icon -fnt-icon-phone-outline">&#xea27;</i> <span
            class="i-name">-fnt-icon-phone-outline</span><span class="i-code">0xea27</span></div>
</div>
<div class="row">
    <div title="Code: 0xea28" class="the-icons span3"><i class="demo-icon -fnt-icon-phone-2">&#xea28;</i> <span
            class="i-name">-fnt-icon-phone-2</span><span class="i-code">0xea28</span></div>
    <div title="Code: 0xea29" class="the-icons span3"><i class="demo-icon -fnt-icon-menu-outline">&#xea29;</i> <span
            class="i-name">-fnt-icon-menu-outline</span><span class="i-code">0xea29</span></div>
    <div title="Code: 0xea2a" class="the-icons span3"><i class="demo-icon -fnt-icon-menu-2">&#xea2a;</i> <span
            class="i-name">-fnt-icon-menu-2</span><span class="i-code">0xea2a</span></div>
    <div title="Code: 0xea2b" class="the-icons span3"><i class="demo-icon -fnt-icon-cog-outline">&#xea2b;</i> <span
            class="i-name">-fnt-icon-cog-outline</span><span class="i-code">0xea2b</span></div>
</div>
<div class="row">
    <div title="Code: 0xea2c" class="the-icons span3"><i class="demo-icon -fnt-icon-cog-2">&#xea2c;</i> <span
            class="i-name">-fnt-icon-cog-2</span><span class="i-code">0xea2c</span></div>
    <div title="Code: 0xea2d" class="the-icons span3"><i class="demo-icon -fnt-icon-wrench-outline">&#xea2d;</i> <span
            class="i-name">-fnt-icon-wrench-outline</span><span class="i-code">0xea2d</span></div>
    <div title="Code: 0xea2e" class="the-icons span3"><i class="demo-icon -fnt-icon-wrench-1">&#xea2e;</i> <span
            class="i-name">-fnt-icon-wrench-1</span><span class="i-code">0xea2e</span></div>
    <div title="Code: 0xea2f" class="the-icons span3"><i class="demo-icon -fnt-icon-basket-2">&#xea2f;</i> <span
            class="i-name">-fnt-icon-basket-2</span><span class="i-code">0xea2f</span></div>
</div>
<div class="row">
    <div title="Code: 0xea30" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-outlilne">&#xea30;</i>
        <span class="i-name">-fnt-icon-calendar-outlilne</span><span class="i-code">0xea30</span></div>
    <div title="Code: 0xea31" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-2">&#xea31;</i> <span
            class="i-name">-fnt-icon-calendar-2</span><span class="i-code">0xea31</span></div>
    <div title="Code: 0xea32" class="the-icons span3"><i class="demo-icon -fnt-icon-mic-outline">&#xea32;</i> <span
            class="i-name">-fnt-icon-mic-outline</span><span class="i-code">0xea32</span></div>
    <div title="Code: 0xea33" class="the-icons span3"><i class="demo-icon -fnt-icon-mic-2">&#xea33;</i> <span
            class="i-name">-fnt-icon-mic-2</span><span class="i-code">0xea33</span></div>
</div>
<div class="row">
    <div title="Code: 0xea34" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-off-1">&#xea34;</i> <span
            class="i-name">-fnt-icon-volume-off-1</span><span class="i-code">0xea34</span></div>
    <div title="Code: 0xea35" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-low">&#xea35;</i> <span
            class="i-name">-fnt-icon-volume-low</span><span class="i-code">0xea35</span></div>
    <div title="Code: 0xea36" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-middle">&#xea36;</i> <span
            class="i-name">-fnt-icon-volume-middle</span><span class="i-code">0xea36</span></div>
    <div title="Code: 0xea37" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-high">&#xea37;</i> <span
            class="i-name">-fnt-icon-volume-high</span><span class="i-code">0xea37</span></div>
</div>
<div class="row">
    <div title="Code: 0xea38" class="the-icons span3"><i class="demo-icon -fnt-icon-headphones-1">&#xea38;</i> <span
            class="i-name">-fnt-icon-headphones-1</span><span class="i-code">0xea38</span></div>
    <div title="Code: 0xea39" class="the-icons span3"><i class="demo-icon -fnt-icon-clock-2">&#xea39;</i> <span
            class="i-name">-fnt-icon-clock-2</span><span class="i-code">0xea39</span></div>
    <div title="Code: 0xea3a" class="the-icons span3"><i class="demo-icon -fnt-icon-wristwatch">&#xea3a;</i> <span
            class="i-name">-fnt-icon-wristwatch</span><span class="i-code">0xea3a</span></div>
    <div title="Code: 0xea3b" class="the-icons span3"><i class="demo-icon -fnt-icon-stopwatch">&#xea3b;</i> <span
            class="i-name">-fnt-icon-stopwatch</span><span class="i-code">0xea3b</span></div>
</div>
<div class="row">
    <div title="Code: 0xea3c" class="the-icons span3"><i class="demo-icon -fnt-icon-lightbulb-1">&#xea3c;</i> <span
            class="i-name">-fnt-icon-lightbulb-1</span><span class="i-code">0xea3c</span></div>
    <div title="Code: 0xea3d" class="the-icons span3"><i class="demo-icon -fnt-icon-block-outline">&#xea3d;</i> <span
            class="i-name">-fnt-icon-block-outline</span><span class="i-code">0xea3d</span></div>
    <div title="Code: 0xea3e" class="the-icons span3"><i class="demo-icon -fnt-icon-block-2">&#xea3e;</i> <span
            class="i-name">-fnt-icon-block-2</span><span class="i-code">0xea3e</span></div>
    <div title="Code: 0xea3f" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full-outline">&#xea3f;</i>
        <span class="i-name">-fnt-icon-resize-full-outline</span><span class="i-code">0xea3f</span></div>
</div>
<div class="row">
    <div title="Code: 0xea40" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full-2">&#xea40;</i> <span
            class="i-name">-fnt-icon-resize-full-2</span><span class="i-code">0xea40</span></div>
    <div title="Code: 0xea41" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-normal-outline">&#xea41;</i>
        <span class="i-name">-fnt-icon-resize-normal-outline</span><span class="i-code">0xea41</span></div>
    <div title="Code: 0xea42" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-normal">&#xea42;</i> <span
            class="i-name">-fnt-icon-resize-normal</span><span class="i-code">0xea42</span></div>
    <div title="Code: 0xea43" class="the-icons span3"><i class="demo-icon -fnt-icon-move-outline">&#xea43;</i> <span
            class="i-name">-fnt-icon-move-outline</span><span class="i-code">0xea43</span></div>
</div>
<div class="row">
    <div title="Code: 0xea44" class="the-icons span3"><i class="demo-icon -fnt-icon-move-1">&#xea44;</i> <span
            class="i-name">-fnt-icon-move-1</span><span class="i-code">0xea44</span></div>
    <div title="Code: 0xea45" class="the-icons span3"><i class="demo-icon -fnt-icon-popup-1">&#xea45;</i> <span
            class="i-name">-fnt-icon-popup-1</span><span class="i-code">0xea45</span></div>
    <div title="Code: 0xea46" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-in-outline">&#xea46;</i> <span
            class="i-name">-fnt-icon-zoom-in-outline</span><span class="i-code">0xea46</span></div>
    <div title="Code: 0xea47" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-in-1">&#xea47;</i> <span
            class="i-name">-fnt-icon-zoom-in-1</span><span class="i-code">0xea47</span></div>
</div>
<div class="row">
    <div title="Code: 0xea48" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-out-outline">&#xea48;</i> <span
            class="i-name">-fnt-icon-zoom-out-outline</span><span class="i-code">0xea48</span></div>
    <div title="Code: 0xea49" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-out-1">&#xea49;</i> <span
            class="i-name">-fnt-icon-zoom-out-1</span><span class="i-code">0xea49</span></div>
    <div title="Code: 0xea4a" class="the-icons span3"><i class="demo-icon -fnt-icon-popup-2">&#xea4a;</i> <span
            class="i-name">-fnt-icon-popup-2</span><span class="i-code">0xea4a</span></div>
    <div title="Code: 0xea4b" class="the-icons span3"><i class="demo-icon -fnt-icon-left-open-outline">&#xea4b;</i>
        <span class="i-name">-fnt-icon-left-open-outline</span><span class="i-code">0xea4b</span></div>
</div>
<div class="row">
    <div title="Code: 0xea4c" class="the-icons span3"><i class="demo-icon -fnt-icon-left-open-2">&#xea4c;</i> <span
            class="i-name">-fnt-icon-left-open-2</span><span class="i-code">0xea4c</span></div>
    <div title="Code: 0xea4d" class="the-icons span3"><i class="demo-icon -fnt-icon-right-open-outline">&#xea4d;</i>
        <span class="i-name">-fnt-icon-right-open-outline</span><span class="i-code">0xea4d</span></div>
    <div title="Code: 0xea4e" class="the-icons span3"><i class="demo-icon -fnt-icon-right-open-2">&#xea4e;</i> <span
            class="i-name">-fnt-icon-right-open-2</span><span class="i-code">0xea4e</span></div>
    <div title="Code: 0xea4f" class="the-icons span3"><i class="demo-icon -fnt-icon-down-2">&#xea4f;</i> <span
            class="i-name">-fnt-icon-down-2</span><span class="i-code">0xea4f</span></div>
</div>
<div class="row">
    <div title="Code: 0xea50" class="the-icons span3"><i class="demo-icon -fnt-icon-left-2">&#xea50;</i> <span
            class="i-name">-fnt-icon-left-2</span><span class="i-code">0xea50</span></div>
    <div title="Code: 0xea51" class="the-icons span3"><i class="demo-icon -fnt-icon-right-2">&#xea51;</i> <span
            class="i-name">-fnt-icon-right-2</span><span class="i-code">0xea51</span></div>
    <div title="Code: 0xea52" class="the-icons span3"><i class="demo-icon -fnt-icon-up-2">&#xea52;</i> <span
            class="i-name">-fnt-icon-up-2</span><span class="i-code">0xea52</span></div>
    <div title="Code: 0xea53" class="the-icons span3"><i class="demo-icon -fnt-icon-down-outline">&#xea53;</i> <span
            class="i-name">-fnt-icon-down-outline</span><span class="i-code">0xea53</span></div>
</div>
<div class="row">
    <div title="Code: 0xea54" class="the-icons span3"><i class="demo-icon -fnt-icon-left-outline">&#xea54;</i> <span
            class="i-name">-fnt-icon-left-outline</span><span class="i-code">0xea54</span></div>
    <div title="Code: 0xea55" class="the-icons span3"><i class="demo-icon -fnt-icon-right-outline">&#xea55;</i> <span
            class="i-name">-fnt-icon-right-outline</span><span class="i-code">0xea55</span></div>
    <div title="Code: 0xea56" class="the-icons span3"><i class="demo-icon -fnt-icon-up-outline">&#xea56;</i> <span
            class="i-name">-fnt-icon-up-outline</span><span class="i-code">0xea56</span></div>
    <div title="Code: 0xea57" class="the-icons span3"><i class="demo-icon -fnt-icon-down-small">&#xea57;</i> <span
            class="i-name">-fnt-icon-down-small</span><span class="i-code">0xea57</span></div>
</div>
<div class="row">
    <div title="Code: 0xea58" class="the-icons span3"><i class="demo-icon -fnt-icon-left-small">&#xea58;</i> <span
            class="i-name">-fnt-icon-left-small</span><span class="i-code">0xea58</span></div>
    <div title="Code: 0xea59" class="the-icons span3"><i class="demo-icon -fnt-icon-right-small">&#xea59;</i> <span
            class="i-name">-fnt-icon-right-small</span><span class="i-code">0xea59</span></div>
    <div title="Code: 0xea5a" class="the-icons span3"><i class="demo-icon -fnt-icon-up-small">&#xea5a;</i> <span
            class="i-name">-fnt-icon-up-small</span><span class="i-code">0xea5a</span></div>
    <div title="Code: 0xea5b" class="the-icons span3"><i class="demo-icon -fnt-icon-cw-outline">&#xea5b;</i> <span
            class="i-name">-fnt-icon-cw-outline</span><span class="i-code">0xea5b</span></div>
</div>
<div class="row">
    <div title="Code: 0xea5c" class="the-icons span3"><i class="demo-icon -fnt-icon-cw-2">&#xea5c;</i> <span
            class="i-name">-fnt-icon-cw-2</span><span class="i-code">0xea5c</span></div>
    <div title="Code: 0xea5d" class="the-icons span3"><i class="demo-icon -fnt-icon-arrows-cw-outline">&#xea5d;</i>
        <span class="i-name">-fnt-icon-arrows-cw-outline</span><span class="i-code">0xea5d</span></div>
    <div title="Code: 0xea5e" class="the-icons span3"><i class="demo-icon -fnt-icon-arrows-cw-1">&#xea5e;</i> <span
            class="i-name">-fnt-icon-arrows-cw-1</span><span class="i-code">0xea5e</span></div>
    <div title="Code: 0xea5f" class="the-icons span3"><i class="demo-icon -fnt-icon-loop-outline">&#xea5f;</i> <span
            class="i-name">-fnt-icon-loop-outline</span><span class="i-code">0xea5f</span></div>
</div>
<div class="row">
    <div title="Code: 0xea60" class="the-icons span3"><i class="demo-icon -fnt-icon-loop-1">&#xea60;</i> <span
            class="i-name">-fnt-icon-loop-1</span><span class="i-code">0xea60</span></div>
    <div title="Code: 0xea61" class="the-icons span3"><i class="demo-icon -fnt-icon-loop-alt-outline">&#xea61;</i> <span
            class="i-name">-fnt-icon-loop-alt-outline</span><span class="i-code">0xea61</span></div>
    <div title="Code: 0xea62" class="the-icons span3"><i class="demo-icon -fnt-icon-loop-alt">&#xea62;</i> <span
            class="i-name">-fnt-icon-loop-alt</span><span class="i-code">0xea62</span></div>
    <div title="Code: 0xea63" class="the-icons span3"><i class="demo-icon -fnt-icon-shuffle-2">&#xea63;</i> <span
            class="i-name">-fnt-icon-shuffle-2</span><span class="i-code">0xea63</span></div>
</div>
<div class="row">
    <div title="Code: 0xea64" class="the-icons span3"><i class="demo-icon -fnt-icon-play-outline">&#xea64;</i> <span
            class="i-name">-fnt-icon-play-outline</span><span class="i-code">0xea64</span></div>
    <div title="Code: 0xea65" class="the-icons span3"><i class="demo-icon -fnt-icon-play-2">&#xea65;</i> <span
            class="i-name">-fnt-icon-play-2</span><span class="i-code">0xea65</span></div>
    <div title="Code: 0xea66" class="the-icons span3"><i class="demo-icon -fnt-icon-stop-outline">&#xea66;</i> <span
            class="i-name">-fnt-icon-stop-outline</span><span class="i-code">0xea66</span></div>
    <div title="Code: 0xea67" class="the-icons span3"><i class="demo-icon -fnt-icon-stop-2">&#xea67;</i> <span
            class="i-name">-fnt-icon-stop-2</span><span class="i-code">0xea67</span></div>
</div>
<div class="row">
    <div title="Code: 0xea68" class="the-icons span3"><i class="demo-icon -fnt-icon-pause-outline">&#xea68;</i> <span
            class="i-name">-fnt-icon-pause-outline</span><span class="i-code">0xea68</span></div>
    <div title="Code: 0xea69" class="the-icons span3"><i class="demo-icon -fnt-icon-pause-2">&#xea69;</i> <span
            class="i-name">-fnt-icon-pause-2</span><span class="i-code">0xea69</span></div>
    <div title="Code: 0xea6a" class="the-icons span3"><i class="demo-icon -fnt-icon-fast-fw-outline">&#xea6a;</i> <span
            class="i-name">-fnt-icon-fast-fw-outline</span><span class="i-code">0xea6a</span></div>
    <div title="Code: 0xea6b" class="the-icons span3"><i class="demo-icon -fnt-icon-fast-fw-1">&#xea6b;</i> <span
            class="i-name">-fnt-icon-fast-fw-1</span><span class="i-code">0xea6b</span></div>
</div>
<div class="row">
    <div title="Code: 0xea6c" class="the-icons span3"><i class="demo-icon -fnt-icon-rewind-outline">&#xea6c;</i> <span
            class="i-name">-fnt-icon-rewind-outline</span><span class="i-code">0xea6c</span></div>
    <div title="Code: 0xea6d" class="the-icons span3"><i class="demo-icon -fnt-icon-rewind">&#xea6d;</i> <span
            class="i-name">-fnt-icon-rewind</span><span class="i-code">0xea6d</span></div>
    <div title="Code: 0xea6e" class="the-icons span3"><i class="demo-icon -fnt-icon-record-outline">&#xea6e;</i> <span
            class="i-name">-fnt-icon-record-outline</span><span class="i-code">0xea6e</span></div>
    <div title="Code: 0xea6f" class="the-icons span3"><i class="demo-icon -fnt-icon-record-1">&#xea6f;</i> <span
            class="i-name">-fnt-icon-record-1</span><span class="i-code">0xea6f</span></div>
</div>
<div class="row">
    <div title="Code: 0xea70" class="the-icons span3"><i class="demo-icon -fnt-icon-eject-outline">&#xea70;</i> <span
            class="i-name">-fnt-icon-eject-outline</span><span class="i-code">0xea70</span></div>
    <div title="Code: 0xea71" class="the-icons span3"><i class="demo-icon -fnt-icon-eject-1">&#xea71;</i> <span
            class="i-name">-fnt-icon-eject-1</span><span class="i-code">0xea71</span></div>
    <div title="Code: 0xea72" class="the-icons span3"><i class="demo-icon -fnt-icon-eject-alt-outline">&#xea72;</i>
        <span class="i-name">-fnt-icon-eject-alt-outline</span><span class="i-code">0xea72</span></div>
    <div title="Code: 0xea73" class="the-icons span3"><i class="demo-icon -fnt-icon-eject-alt">&#xea73;</i> <span
            class="i-name">-fnt-icon-eject-alt</span><span class="i-code">0xea73</span></div>
</div>
<div class="row">
    <div title="Code: 0xea74" class="the-icons span3"><i class="demo-icon -fnt-icon-bat1">&#xea74;</i> <span
            class="i-name">-fnt-icon-bat1</span><span class="i-code">0xea74</span></div>
    <div title="Code: 0xea75" class="the-icons span3"><i class="demo-icon -fnt-icon-bat2">&#xea75;</i> <span
            class="i-name">-fnt-icon-bat2</span><span class="i-code">0xea75</span></div>
    <div title="Code: 0xea76" class="the-icons span3"><i class="demo-icon -fnt-icon-bat3">&#xea76;</i> <span
            class="i-name">-fnt-icon-bat3</span><span class="i-code">0xea76</span></div>
    <div title="Code: 0xea77" class="the-icons span3"><i class="demo-icon -fnt-icon-bat4">&#xea77;</i> <span
            class="i-name">-fnt-icon-bat4</span><span class="i-code">0xea77</span></div>
</div>
<div class="row">
    <div title="Code: 0xea78" class="the-icons span3"><i class="demo-icon -fnt-icon-bat-charge">&#xea78;</i> <span
            class="i-name">-fnt-icon-bat-charge</span><span class="i-code">0xea78</span></div>
    <div title="Code: 0xea79" class="the-icons span3"><i class="demo-icon -fnt-icon-plug-1">&#xea79;</i> <span
            class="i-name">-fnt-icon-plug-1</span><span class="i-code">0xea79</span></div>
    <div title="Code: 0xea7a" class="the-icons span3"><i class="demo-icon -fnt-icon-target-outline">&#xea7a;</i> <span
            class="i-name">-fnt-icon-target-outline</span><span class="i-code">0xea7a</span></div>
    <div title="Code: 0xea7b" class="the-icons span3"><i class="demo-icon -fnt-icon-target-2">&#xea7b;</i> <span
            class="i-name">-fnt-icon-target-2</span><span class="i-code">0xea7b</span></div>
</div>
<div class="row">
    <div title="Code: 0xea7c" class="the-icons span3"><i class="demo-icon -fnt-icon-wifi-outline">&#xea7c;</i> <span
            class="i-name">-fnt-icon-wifi-outline</span><span class="i-code">0xea7c</span></div>
    <div title="Code: 0xea7d" class="the-icons span3"><i class="demo-icon -fnt-icon-wifi-1">&#xea7d;</i> <span
            class="i-name">-fnt-icon-wifi-1</span><span class="i-code">0xea7d</span></div>
    <div title="Code: 0xea7e" class="the-icons span3"><i class="demo-icon -fnt-icon-desktop-1">&#xea7e;</i> <span
            class="i-name">-fnt-icon-desktop-1</span><span class="i-code">0xea7e</span></div>
    <div title="Code: 0xea7f" class="the-icons span3"><i class="demo-icon -fnt-icon-laptop-1">&#xea7f;</i> <span
            class="i-name">-fnt-icon-laptop-1</span><span class="i-code">0xea7f</span></div>
</div>
<div class="row">
    <div title="Code: 0xea80" class="the-icons span3"><i class="demo-icon -fnt-icon-tablet-1">&#xea80;</i> <span
            class="i-name">-fnt-icon-tablet-1</span><span class="i-code">0xea80</span></div>
    <div title="Code: 0xea81" class="the-icons span3"><i class="demo-icon -fnt-icon-mobile-2">&#xea81;</i> <span
            class="i-name">-fnt-icon-mobile-2</span><span class="i-code">0xea81</span></div>
    <div title="Code: 0xea82" class="the-icons span3"><i class="demo-icon -fnt-icon-contrast">&#xea82;</i> <span
            class="i-name">-fnt-icon-contrast</span><span class="i-code">0xea82</span></div>
    <div title="Code: 0xea83" class="the-icons span3"><i class="demo-icon -fnt-icon-globe-outline">&#xea83;</i> <span
            class="i-name">-fnt-icon-globe-outline</span><span class="i-code">0xea83</span></div>
</div>
<div class="row">
    <div title="Code: 0xea84" class="the-icons span3"><i class="demo-icon -fnt-icon-globe-2">&#xea84;</i> <span
            class="i-name">-fnt-icon-globe-2</span><span class="i-code">0xea84</span></div>
    <div title="Code: 0xea85" class="the-icons span3"><i class="demo-icon -fnt-icon-globe-alt-outline">&#xea85;</i>
        <span class="i-name">-fnt-icon-globe-alt-outline</span><span class="i-code">0xea85</span></div>
    <div title="Code: 0xea86" class="the-icons span3"><i class="demo-icon -fnt-icon-globe-alt">&#xea86;</i> <span
            class="i-name">-fnt-icon-globe-alt</span><span class="i-code">0xea86</span></div>
    <div title="Code: 0xea87" class="the-icons span3"><i class="demo-icon -fnt-icon-sun-1">&#xea87;</i> <span
            class="i-name">-fnt-icon-sun-1</span><span class="i-code">0xea87</span></div>
</div>
<div class="row">
    <div title="Code: 0xea88" class="the-icons span3"><i class="demo-icon -fnt-icon-sun-filled">&#xea88;</i> <span
            class="i-name">-fnt-icon-sun-filled</span><span class="i-code">0xea88</span></div>
    <div title="Code: 0xea89" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-2">&#xea89;</i> <span
            class="i-name">-fnt-icon-cloud-2</span><span class="i-code">0xea89</span></div>
    <div title="Code: 0xea8a" class="the-icons span3"><i class="demo-icon -fnt-icon-flash-outline">&#xea8a;</i> <span
            class="i-name">-fnt-icon-flash-outline</span><span class="i-code">0xea8a</span></div>
    <div title="Code: 0xea8b" class="the-icons span3"><i class="demo-icon -fnt-icon-flash-2">&#xea8b;</i> <span
            class="i-name">-fnt-icon-flash-2</span><span class="i-code">0xea8b</span></div>
</div>
<div class="row">
    <div title="Code: 0xea8c" class="the-icons span3"><i class="demo-icon -fnt-icon-moon-2">&#xea8c;</i> <span
            class="i-name">-fnt-icon-moon-2</span><span class="i-code">0xea8c</span></div>
    <div title="Code: 0xea8d" class="the-icons span3"><i class="demo-icon -fnt-icon-waves-outline">&#xea8d;</i> <span
            class="i-name">-fnt-icon-waves-outline</span><span class="i-code">0xea8d</span></div>
    <div title="Code: 0xea8e" class="the-icons span3"><i class="demo-icon -fnt-icon-waves">&#xea8e;</i> <span
            class="i-name">-fnt-icon-waves</span><span class="i-code">0xea8e</span></div>
    <div title="Code: 0xea8f" class="the-icons span3"><i class="demo-icon -fnt-icon-rain">&#xea8f;</i> <span
            class="i-name">-fnt-icon-rain</span><span class="i-code">0xea8f</span></div>
</div>
<div class="row">
    <div title="Code: 0xea90" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-sun">&#xea90;</i> <span
            class="i-name">-fnt-icon-cloud-sun</span><span class="i-code">0xea90</span></div>
    <div title="Code: 0xea91" class="the-icons span3"><i class="demo-icon -fnt-icon-drizzle">&#xea91;</i> <span
            class="i-name">-fnt-icon-drizzle</span><span class="i-code">0xea91</span></div>
    <div title="Code: 0xea92" class="the-icons span3"><i class="demo-icon -fnt-icon-snow">&#xea92;</i> <span
            class="i-name">-fnt-icon-snow</span><span class="i-code">0xea92</span></div>
    <div title="Code: 0xea93" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-flash">&#xea93;</i> <span
            class="i-name">-fnt-icon-cloud-flash</span><span class="i-code">0xea93</span></div>
</div>
<div class="row">
    <div title="Code: 0xea94" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-wind">&#xea94;</i> <span
            class="i-name">-fnt-icon-cloud-wind</span><span class="i-code">0xea94</span></div>
    <div title="Code: 0xea95" class="the-icons span3"><i class="demo-icon -fnt-icon-wind">&#xea95;</i> <span
            class="i-name">-fnt-icon-wind</span><span class="i-code">0xea95</span></div>
    <div title="Code: 0xea96" class="the-icons span3"><i class="demo-icon -fnt-icon-plane-outline">&#xea96;</i> <span
            class="i-name">-fnt-icon-plane-outline</span><span class="i-code">0xea96</span></div>
    <div title="Code: 0xea97" class="the-icons span3"><i class="demo-icon -fnt-icon-plane">&#xea97;</i> <span
            class="i-name">-fnt-icon-plane</span><span class="i-code">0xea97</span></div>
</div>
<div class="row">
    <div title="Code: 0xea98" class="the-icons span3"><i class="demo-icon -fnt-icon-leaf-2">&#xea98;</i> <span
            class="i-name">-fnt-icon-leaf-2</span><span class="i-code">0xea98</span></div>
    <div title="Code: 0xea99" class="the-icons span3"><i class="demo-icon -fnt-icon-lifebuoy-2">&#xea99;</i> <span
            class="i-name">-fnt-icon-lifebuoy-2</span><span class="i-code">0xea99</span></div>
    <div title="Code: 0xea9a" class="the-icons span3"><i class="demo-icon -fnt-icon-briefcase-2">&#xea9a;</i> <span
            class="i-name">-fnt-icon-briefcase-2</span><span class="i-code">0xea9a</span></div>
    <div title="Code: 0xea9b" class="the-icons span3"><i class="demo-icon -fnt-icon-brush-2">&#xea9b;</i> <span
            class="i-name">-fnt-icon-brush-2</span><span class="i-code">0xea9b</span></div>
</div>
<div class="row">
    <div title="Code: 0xea9c" class="the-icons span3"><i class="demo-icon -fnt-icon-pipette">&#xea9c;</i> <span
            class="i-name">-fnt-icon-pipette</span><span class="i-code">0xea9c</span></div>
    <div title="Code: 0xea9d" class="the-icons span3"><i class="demo-icon -fnt-icon-power-outline">&#xea9d;</i> <span
            class="i-name">-fnt-icon-power-outline</span><span class="i-code">0xea9d</span></div>
    <div title="Code: 0xea9e" class="the-icons span3"><i class="demo-icon -fnt-icon-power">&#xea9e;</i> <span
            class="i-name">-fnt-icon-power</span><span class="i-code">0xea9e</span></div>
    <div title="Code: 0xea9f" class="the-icons span3"><i class="demo-icon -fnt-icon-check-outline">&#xea9f;</i> <span
            class="i-name">-fnt-icon-check-outline</span><span class="i-code">0xea9f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeaa0" class="the-icons span3"><i class="demo-icon -fnt-icon-check-2">&#xeaa0;</i> <span
            class="i-name">-fnt-icon-check-2</span><span class="i-code">0xeaa0</span></div>
    <div title="Code: 0xeaa1" class="the-icons span3"><i class="demo-icon -fnt-icon-gift-1">&#xeaa1;</i> <span
            class="i-name">-fnt-icon-gift-1</span><span class="i-code">0xeaa1</span></div>
    <div title="Code: 0xeaa2" class="the-icons span3"><i class="demo-icon -fnt-icon-temperatire">&#xeaa2;</i> <span
            class="i-name">-fnt-icon-temperatire</span><span class="i-code">0xeaa2</span></div>
    <div title="Code: 0xeaa3" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-outline">&#xeaa3;</i> <span
            class="i-name">-fnt-icon-chart-outline</span><span class="i-code">0xeaa3</span></div>
</div>
<div class="row">
    <div title="Code: 0xeaa4" class="the-icons span3"><i class="demo-icon -fnt-icon-chart">&#xeaa4;</i> <span
            class="i-name">-fnt-icon-chart</span><span class="i-code">0xeaa4</span></div>
    <div title="Code: 0xeaa5" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-alt-outline">&#xeaa5;</i>
        <span class="i-name">-fnt-icon-chart-alt-outline</span><span class="i-code">0xeaa5</span></div>
    <div title="Code: 0xeaa6" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-alt">&#xeaa6;</i> <span
            class="i-name">-fnt-icon-chart-alt</span><span class="i-code">0xeaa6</span></div>
    <div title="Code: 0xeaa7" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-bar-outline">&#xeaa7;</i>
        <span class="i-name">-fnt-icon-chart-bar-outline</span><span class="i-code">0xeaa7</span></div>
</div>
<div class="row">
    <div title="Code: 0xeaa8" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-bar-2">&#xeaa8;</i> <span
            class="i-name">-fnt-icon-chart-bar-2</span><span class="i-code">0xeaa8</span></div>
    <div title="Code: 0xeaa9" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-pie-outline">&#xeaa9;</i>
        <span class="i-name">-fnt-icon-chart-pie-outline</span><span class="i-code">0xeaa9</span></div>
    <div title="Code: 0xeaaa" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-pie-2">&#xeaaa;</i> <span
            class="i-name">-fnt-icon-chart-pie-2</span><span class="i-code">0xeaaa</span></div>
    <div title="Code: 0xeaab" class="the-icons span3"><i class="demo-icon -fnt-icon-ticket-2">&#xeaab;</i> <span
            class="i-name">-fnt-icon-ticket-2</span><span class="i-code">0xeaab</span></div>
</div>
<div class="row">
    <div title="Code: 0xeaac" class="the-icons span3"><i class="demo-icon -fnt-icon-credit-card-2">&#xeaac;</i> <span
            class="i-name">-fnt-icon-credit-card-2</span><span class="i-code">0xeaac</span></div>
    <div title="Code: 0xeaad" class="the-icons span3"><i class="demo-icon -fnt-icon-clipboard-1">&#xeaad;</i> <span
            class="i-name">-fnt-icon-clipboard-1</span><span class="i-code">0xeaad</span></div>
    <div title="Code: 0xeaae" class="the-icons span3"><i class="demo-icon -fnt-icon-database-2">&#xeaae;</i> <span
            class="i-name">-fnt-icon-database-2</span><span class="i-code">0xeaae</span></div>
    <div title="Code: 0xeaaf" class="the-icons span3"><i class="demo-icon -fnt-icon-key-outline">&#xeaaf;</i> <span
            class="i-name">-fnt-icon-key-outline</span><span class="i-code">0xeaaf</span></div>
</div>
<div class="row">
    <div title="Code: 0xeab0" class="the-icons span3"><i class="demo-icon -fnt-icon-key-2">&#xeab0;</i> <span
            class="i-name">-fnt-icon-key-2</span><span class="i-code">0xeab0</span></div>
    <div title="Code: 0xeab1" class="the-icons span3"><i class="demo-icon -fnt-icon-flow-split">&#xeab1;</i> <span
            class="i-name">-fnt-icon-flow-split</span><span class="i-code">0xeab1</span></div>
    <div title="Code: 0xeab2" class="the-icons span3"><i class="demo-icon -fnt-icon-flow-merge">&#xeab2;</i> <span
            class="i-name">-fnt-icon-flow-merge</span><span class="i-code">0xeab2</span></div>
    <div title="Code: 0xeab3" class="the-icons span3"><i class="demo-icon -fnt-icon-flow-parallel-1">&#xeab3;</i> <span
            class="i-name">-fnt-icon-flow-parallel-1</span><span class="i-code">0xeab3</span></div>
</div>
<div class="row">
    <div title="Code: 0xeab4" class="the-icons span3"><i class="demo-icon -fnt-icon-flow-cross">&#xeab4;</i> <span
            class="i-name">-fnt-icon-flow-cross</span><span class="i-code">0xeab4</span></div>
    <div title="Code: 0xeab5" class="the-icons span3"><i class="demo-icon -fnt-icon-certificate-outline">&#xeab5;</i>
        <span class="i-name">-fnt-icon-certificate-outline</span><span class="i-code">0xeab5</span></div>
    <div title="Code: 0xeab6" class="the-icons span3"><i class="demo-icon -fnt-icon-certificate-1">&#xeab6;</i> <span
            class="i-name">-fnt-icon-certificate-1</span><span class="i-code">0xeab6</span></div>
    <div title="Code: 0xeab7" class="the-icons span3"><i class="demo-icon -fnt-icon-scissors-outline">&#xeab7;</i> <span
            class="i-name">-fnt-icon-scissors-outline</span><span class="i-code">0xeab7</span></div>
</div>
<div class="row">
    <div title="Code: 0xeab8" class="the-icons span3"><i class="demo-icon -fnt-icon-scissors-1">&#xeab8;</i> <span
            class="i-name">-fnt-icon-scissors-1</span><span class="i-code">0xeab8</span></div>
    <div title="Code: 0xeab9" class="the-icons span3"><i class="demo-icon -fnt-icon-flask">&#xeab9;</i> <span
            class="i-name">-fnt-icon-flask</span><span class="i-code">0xeab9</span></div>
    <div title="Code: 0xeaba" class="the-icons span3"><i class="demo-icon -fnt-icon-wine">&#xeaba;</i> <span
            class="i-name">-fnt-icon-wine</span><span class="i-code">0xeaba</span></div>
    <div title="Code: 0xeabb" class="the-icons span3"><i class="demo-icon -fnt-icon-coffee-1">&#xeabb;</i> <span
            class="i-name">-fnt-icon-coffee-1</span><span class="i-code">0xeabb</span></div>
</div>
<div class="row">
    <div title="Code: 0xeabc" class="the-icons span3"><i class="demo-icon -fnt-icon-beer-1">&#xeabc;</i> <span
            class="i-name">-fnt-icon-beer-1</span><span class="i-code">0xeabc</span></div>
    <div title="Code: 0xeabd" class="the-icons span3"><i class="demo-icon -fnt-icon-anchor-outline">&#xeabd;</i> <span
            class="i-name">-fnt-icon-anchor-outline</span><span class="i-code">0xeabd</span></div>
    <div title="Code: 0xeabe" class="the-icons span3"><i class="demo-icon -fnt-icon-anchor-1">&#xeabe;</i> <span
            class="i-name">-fnt-icon-anchor-1</span><span class="i-code">0xeabe</span></div>
    <div title="Code: 0xeabf" class="the-icons span3"><i class="demo-icon -fnt-icon-puzzle-outline">&#xeabf;</i> <span
            class="i-name">-fnt-icon-puzzle-outline</span><span class="i-code">0xeabf</span></div>
</div>
<div class="row">
    <div title="Code: 0xeac0" class="the-icons span3"><i class="demo-icon -fnt-icon-puzzle-1">&#xeac0;</i> <span
            class="i-name">-fnt-icon-puzzle-1</span><span class="i-code">0xeac0</span></div>
    <div title="Code: 0xeac1" class="the-icons span3"><i class="demo-icon -fnt-icon-tree-1">&#xeac1;</i> <span
            class="i-name">-fnt-icon-tree-1</span><span class="i-code">0xeac1</span></div>
    <div title="Code: 0xeac2" class="the-icons span3"><i class="demo-icon -fnt-icon-calculator">&#xeac2;</i> <span
            class="i-name">-fnt-icon-calculator</span><span class="i-code">0xeac2</span></div>
    <div title="Code: 0xeac3" class="the-icons span3"><i class="demo-icon -fnt-icon-infinity-outline">&#xeac3;</i> <span
            class="i-name">-fnt-icon-infinity-outline</span><span class="i-code">0xeac3</span></div>
</div>
<div class="row">
    <div title="Code: 0xeac4" class="the-icons span3"><i class="demo-icon -fnt-icon-infinity-1">&#xeac4;</i> <span
            class="i-name">-fnt-icon-infinity-1</span><span class="i-code">0xeac4</span></div>
    <div title="Code: 0xeac5" class="the-icons span3"><i class="demo-icon -fnt-icon-pi-outline">&#xeac5;</i> <span
            class="i-name">-fnt-icon-pi-outline</span><span class="i-code">0xeac5</span></div>
    <div title="Code: 0xeac6" class="the-icons span3"><i class="demo-icon -fnt-icon-pi">&#xeac6;</i> <span
            class="i-name">-fnt-icon-pi</span><span class="i-code">0xeac6</span></div>
    <div title="Code: 0xeac7" class="the-icons span3"><i class="demo-icon -fnt-icon-at-1">&#xeac7;</i> <span
            class="i-name">-fnt-icon-at-1</span><span class="i-code">0xeac7</span></div>
</div>
<div class="row">
    <div title="Code: 0xeac8" class="the-icons span3"><i class="demo-icon -fnt-icon-at-circled">&#xeac8;</i> <span
            class="i-name">-fnt-icon-at-circled</span><span class="i-code">0xeac8</span></div>
    <div title="Code: 0xeac9" class="the-icons span3"><i class="demo-icon -fnt-icon-looped-square-outline">&#xeac9;</i>
        <span class="i-name">-fnt-icon-looped-square-outline</span><span class="i-code">0xeac9</span></div>
    <div title="Code: 0xeaca" class="the-icons span3"><i class="demo-icon -fnt-icon-looped-square-interest">&#xeaca;</i>
        <span class="i-name">-fnt-icon-looped-square-interest</span><span class="i-code">0xeaca</span></div>
    <div title="Code: 0xeacb" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-alphabet-outline">&#xeacb;</i>
        <span class="i-name">-fnt-icon-sort-alphabet-outline</span><span class="i-code">0xeacb</span></div>
</div>
<div class="row">
    <div title="Code: 0xeacc" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-alphabet">&#xeacc;</i> <span
            class="i-name">-fnt-icon-sort-alphabet</span><span class="i-code">0xeacc</span></div>
    <div title="Code: 0xeacd" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-numeric-outline">&#xeacd;</i>
        <span class="i-name">-fnt-icon-sort-numeric-outline</span><span class="i-code">0xeacd</span></div>
    <div title="Code: 0xeace" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-numeric">&#xeace;</i> <span
            class="i-name">-fnt-icon-sort-numeric</span><span class="i-code">0xeace</span></div>
    <div title="Code: 0xeacf" class="the-icons span3"><i class="demo-icon -fnt-icon-dribbble-circled-1">&#xeacf;</i>
        <span class="i-name">-fnt-icon-dribbble-circled-1</span><span class="i-code">0xeacf</span></div>
</div>
<div class="row">
    <div title="Code: 0xead0" class="the-icons span3"><i class="demo-icon -fnt-icon-dribbble-2">&#xead0;</i> <span
            class="i-name">-fnt-icon-dribbble-2</span><span class="i-code">0xead0</span></div>
    <div title="Code: 0xead1" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-circled-1">&#xead1;</i>
        <span class="i-name">-fnt-icon-facebook-circled-1</span><span class="i-code">0xead1</span></div>
    <div title="Code: 0xead2" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-2">&#xead2;</i> <span
            class="i-name">-fnt-icon-facebook-2</span><span class="i-code">0xead2</span></div>
    <div title="Code: 0xead3" class="the-icons span3"><i class="demo-icon -fnt-icon-flickr-circled-1">&#xead3;</i> <span
            class="i-name">-fnt-icon-flickr-circled-1</span><span class="i-code">0xead3</span></div>
</div>
<div class="row">
    <div title="Code: 0xead4" class="the-icons span3"><i class="demo-icon -fnt-icon-flickr-2">&#xead4;</i> <span
            class="i-name">-fnt-icon-flickr-2</span><span class="i-code">0xead4</span></div>
    <div title="Code: 0xead5" class="the-icons span3"><i class="demo-icon -fnt-icon-github-circled-2">&#xead5;</i> <span
            class="i-name">-fnt-icon-github-circled-2</span><span class="i-code">0xead5</span></div>
    <div title="Code: 0xead6" class="the-icons span3"><i class="demo-icon -fnt-icon-github-2">&#xead6;</i> <span
            class="i-name">-fnt-icon-github-2</span><span class="i-code">0xead6</span></div>
    <div title="Code: 0xead7" class="the-icons span3"><i class="demo-icon -fnt-icon-lastfm-circled-1">&#xead7;</i> <span
            class="i-name">-fnt-icon-lastfm-circled-1</span><span class="i-code">0xead7</span></div>
</div>
<div class="row">
    <div title="Code: 0xead8" class="the-icons span3"><i class="demo-icon -fnt-icon-lastfm-2">&#xead8;</i> <span
            class="i-name">-fnt-icon-lastfm-2</span><span class="i-code">0xead8</span></div>
    <div title="Code: 0xead9" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-circled-1">&#xead9;</i>
        <span class="i-name">-fnt-icon-linkedin-circled-1</span><span class="i-code">0xead9</span></div>
    <div title="Code: 0xeada" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-2">&#xeada;</i> <span
            class="i-name">-fnt-icon-linkedin-2</span><span class="i-code">0xeada</span></div>
    <div title="Code: 0xeadb" class="the-icons span3"><i class="demo-icon -fnt-icon-pinterest-circled-2">&#xeadb;</i>
        <span class="i-name">-fnt-icon-pinterest-circled-2</span><span class="i-code">0xeadb</span></div>
</div>
<div class="row">
    <div title="Code: 0xeadc" class="the-icons span3"><i class="demo-icon -fnt-icon-pinterest-2">&#xeadc;</i> <span
            class="i-name">-fnt-icon-pinterest-2</span><span class="i-code">0xeadc</span></div>
    <div title="Code: 0xeadd" class="the-icons span3"><i class="demo-icon -fnt-icon-skype-outline">&#xeadd;</i> <span
            class="i-name">-fnt-icon-skype-outline</span><span class="i-code">0xeadd</span></div>
    <div title="Code: 0xeade" class="the-icons span3"><i class="demo-icon -fnt-icon-skype-2">&#xeade;</i> <span
            class="i-name">-fnt-icon-skype-2</span><span class="i-code">0xeade</span></div>
    <div title="Code: 0xeadf" class="the-icons span3"><i class="demo-icon -fnt-icon-tumbler-circled">&#xeadf;</i> <span
            class="i-name">-fnt-icon-tumbler-circled</span><span class="i-code">0xeadf</span></div>
</div>
<div class="row">
    <div title="Code: 0xeae0" class="the-icons span3"><i class="demo-icon -fnt-icon-tumbler">&#xeae0;</i> <span
            class="i-name">-fnt-icon-tumbler</span><span class="i-code">0xeae0</span></div>
    <div title="Code: 0xeae1" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-circled-1">&#xeae1;</i>
        <span class="i-name">-fnt-icon-twitter-circled-1</span><span class="i-code">0xeae1</span></div>
    <div title="Code: 0xeae2" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-2">&#xeae2;</i> <span
            class="i-name">-fnt-icon-twitter-2</span><span class="i-code">0xeae2</span></div>
    <div title="Code: 0xeae3" class="the-icons span3"><i class="demo-icon -fnt-icon-vimeo-circled-1">&#xeae3;</i> <span
            class="i-name">-fnt-icon-vimeo-circled-1</span><span class="i-code">0xeae3</span></div>
</div>
<div class="row">
    <div title="Code: 0xeae4" class="the-icons span3"><i class="demo-icon -fnt-icon-vimeo-2">&#xeae4;</i> <span
            class="i-name">-fnt-icon-vimeo-2</span><span class="i-code">0xeae4</span></div>
    <div title="Code: 0xeae5" class="the-icons span3"><i class="demo-icon -fnt-icon-search-3">&#xeae5;</i> <span
            class="i-name">-fnt-icon-search-3</span><span class="i-code">0xeae5</span></div>
    <div title="Code: 0xeae6" class="the-icons span3"><i class="demo-icon -fnt-icon-mail-3">&#xeae6;</i> <span
            class="i-name">-fnt-icon-mail-3</span><span class="i-code">0xeae6</span></div>
    <div title="Code: 0xeae7" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-3">&#xeae7;</i> <span
            class="i-name">-fnt-icon-heart-3</span><span class="i-code">0xeae7</span></div>
</div>
<div class="row">
    <div title="Code: 0xeae8" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-empty-2">&#xeae8;</i> <span
            class="i-name">-fnt-icon-heart-empty-2</span><span class="i-code">0xeae8</span></div>
    <div title="Code: 0xeae9" class="the-icons span3"><i class="demo-icon -fnt-icon-star-3">&#xeae9;</i> <span
            class="i-name">-fnt-icon-star-3</span><span class="i-code">0xeae9</span></div>
    <div title="Code: 0xeaea" class="the-icons span3"><i class="demo-icon -fnt-icon-user-3">&#xeaea;</i> <span
            class="i-name">-fnt-icon-user-3</span><span class="i-code">0xeaea</span></div>
    <div title="Code: 0xeaeb" class="the-icons span3"><i class="demo-icon -fnt-icon-video-3">&#xeaeb;</i> <span
            class="i-name">-fnt-icon-video-3</span><span class="i-code">0xeaeb</span></div>
</div>
<div class="row">
    <div title="Code: 0xeaec" class="the-icons span3"><i class="demo-icon -fnt-icon-picture-3">&#xeaec;</i> <span
            class="i-name">-fnt-icon-picture-3</span><span class="i-code">0xeaec</span></div>
    <div title="Code: 0xeaed" class="the-icons span3"><i class="demo-icon -fnt-icon-camera-3">&#xeaed;</i> <span
            class="i-name">-fnt-icon-camera-3</span><span class="i-code">0xeaed</span></div>
    <div title="Code: 0xeaee" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-2">&#xeaee;</i> <span
            class="i-name">-fnt-icon-ok-2</span><span class="i-code">0xeaee</span></div>
    <div title="Code: 0xeaef" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-circle">&#xeaef;</i> <span
            class="i-name">-fnt-icon-ok-circle</span><span class="i-code">0xeaef</span></div>
</div>
<div class="row">
    <div title="Code: 0xeaf0" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-3">&#xeaf0;</i> <span
            class="i-name">-fnt-icon-cancel-3</span><span class="i-code">0xeaf0</span></div>
    <div title="Code: 0xeaf1" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-circle">&#xeaf1;</i> <span
            class="i-name">-fnt-icon-cancel-circle</span><span class="i-code">0xeaf1</span></div>
    <div title="Code: 0xeaf2" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-3">&#xeaf2;</i> <span
            class="i-name">-fnt-icon-plus-3</span><span class="i-code">0xeaf2</span></div>
    <div title="Code: 0xeaf3" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-circle">&#xeaf3;</i> <span
            class="i-name">-fnt-icon-plus-circle</span><span class="i-code">0xeaf3</span></div>
</div>
<div class="row">
    <div title="Code: 0xeaf4" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-3">&#xeaf4;</i> <span
            class="i-name">-fnt-icon-minus-3</span><span class="i-code">0xeaf4</span></div>
    <div title="Code: 0xeaf5" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-circle">&#xeaf5;</i> <span
            class="i-name">-fnt-icon-minus-circle</span><span class="i-code">0xeaf5</span></div>
    <div title="Code: 0xeaf6" class="the-icons span3"><i class="demo-icon -fnt-icon-help-2">&#xeaf6;</i> <span
            class="i-name">-fnt-icon-help-2</span><span class="i-code">0xeaf6</span></div>
    <div title="Code: 0xeaf7" class="the-icons span3"><i class="demo-icon -fnt-icon-info-3">&#xeaf7;</i> <span
            class="i-name">-fnt-icon-info-3</span><span class="i-code">0xeaf7</span></div>
</div>
<div class="row">
    <div title="Code: 0xeaf8" class="the-icons span3"><i class="demo-icon -fnt-icon-home-3">&#xeaf8;</i> <span
            class="i-name">-fnt-icon-home-3</span><span class="i-code">0xeaf8</span></div>
    <div title="Code: 0xeaf9" class="the-icons span3"><i class="demo-icon -fnt-icon-link-3">&#xeaf9;</i> <span
            class="i-name">-fnt-icon-link-3</span><span class="i-code">0xeaf9</span></div>
    <div title="Code: 0xeafa" class="the-icons span3"><i class="demo-icon -fnt-icon-attach-3">&#xeafa;</i> <span
            class="i-name">-fnt-icon-attach-3</span><span class="i-code">0xeafa</span></div>
    <div title="Code: 0xeafb" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-3">&#xeafb;</i> <span
            class="i-name">-fnt-icon-lock-3</span><span class="i-code">0xeafb</span></div>
</div>
<div class="row">
    <div title="Code: 0xeafc" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-empty">&#xeafc;</i> <span
            class="i-name">-fnt-icon-lock-empty</span><span class="i-code">0xeafc</span></div>
    <div title="Code: 0xeafd" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-3">&#xeafd;</i> <span
            class="i-name">-fnt-icon-lock-open-3</span><span class="i-code">0xeafd</span></div>
    <div title="Code: 0xeafe" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-empty">&#xeafe;</i> <span
            class="i-name">-fnt-icon-lock-open-empty</span><span class="i-code">0xeafe</span></div>
    <div title="Code: 0xeaff" class="the-icons span3"><i class="demo-icon -fnt-icon-pin-2">&#xeaff;</i> <span
            class="i-name">-fnt-icon-pin-2</span><span class="i-code">0xeaff</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb00" class="the-icons span3"><i class="demo-icon -fnt-icon-eye-3">&#xeb00;</i> <span
            class="i-name">-fnt-icon-eye-3</span><span class="i-code">0xeb00</span></div>
    <div title="Code: 0xeb01" class="the-icons span3"><i class="demo-icon -fnt-icon-tag-3">&#xeb01;</i> <span
            class="i-name">-fnt-icon-tag-3</span><span class="i-code">0xeb01</span></div>
    <div title="Code: 0xeb02" class="the-icons span3"><i class="demo-icon -fnt-icon-tag-empty">&#xeb02;</i> <span
            class="i-name">-fnt-icon-tag-empty</span><span class="i-code">0xeb02</span></div>
    <div title="Code: 0xeb03" class="the-icons span3"><i class="demo-icon -fnt-icon-download-3">&#xeb03;</i> <span
            class="i-name">-fnt-icon-download-3</span><span class="i-code">0xeb03</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb04" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-3">&#xeb04;</i> <span
            class="i-name">-fnt-icon-upload-3</span><span class="i-code">0xeb04</span></div>
    <div title="Code: 0xeb05" class="the-icons span3"><i class="demo-icon -fnt-icon-download-cloud-1">&#xeb05;</i> <span
            class="i-name">-fnt-icon-download-cloud-1</span><span class="i-code">0xeb05</span></div>
    <div title="Code: 0xeb06" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-cloud-3">&#xeb06;</i> <span
            class="i-name">-fnt-icon-upload-cloud-3</span><span class="i-code">0xeb06</span></div>
    <div title="Code: 0xeb07" class="the-icons span3"><i class="demo-icon -fnt-icon-quote-left-1">&#xeb07;</i> <span
            class="i-name">-fnt-icon-quote-left-1</span><span class="i-code">0xeb07</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb08" class="the-icons span3"><i class="demo-icon -fnt-icon-quote-right-1">&#xeb08;</i> <span
            class="i-name">-fnt-icon-quote-right-1</span><span class="i-code">0xeb08</span></div>
    <div title="Code: 0xeb09" class="the-icons span3"><i class="demo-icon -fnt-icon-quote-left-alt">&#xeb09;</i> <span
            class="i-name">-fnt-icon-quote-left-alt</span><span class="i-code">0xeb09</span></div>
    <div title="Code: 0xeb0a" class="the-icons span3"><i class="demo-icon -fnt-icon-quote-right-alt">&#xeb0a;</i> <span
            class="i-name">-fnt-icon-quote-right-alt</span><span class="i-code">0xeb0a</span></div>
    <div title="Code: 0xeb0b" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-3">&#xeb0b;</i> <span
            class="i-name">-fnt-icon-pencil-3</span><span class="i-code">0xeb0b</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb0c" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-neg">&#xeb0c;</i> <span
            class="i-name">-fnt-icon-pencil-neg</span><span class="i-code">0xeb0c</span></div>
    <div title="Code: 0xeb0d" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-alt">&#xeb0d;</i> <span
            class="i-name">-fnt-icon-pencil-alt</span><span class="i-code">0xeb0d</span></div>
    <div title="Code: 0xeb0e" class="the-icons span3"><i class="demo-icon -fnt-icon-undo">&#xeb0e;</i> <span
            class="i-name">-fnt-icon-undo</span><span class="i-code">0xeb0e</span></div>
    <div title="Code: 0xeb0f" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-3">&#xeb0f;</i> <span
            class="i-name">-fnt-icon-comment-3</span><span class="i-code">0xeb0f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb10" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-inv">&#xeb10;</i> <span
            class="i-name">-fnt-icon-comment-inv</span><span class="i-code">0xeb10</span></div>
    <div title="Code: 0xeb11" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-alt">&#xeb11;</i> <span
            class="i-name">-fnt-icon-comment-alt</span><span class="i-code">0xeb11</span></div>
    <div title="Code: 0xeb12" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-inv-alt">&#xeb12;</i> <span
            class="i-name">-fnt-icon-comment-inv-alt</span><span class="i-code">0xeb12</span></div>
    <div title="Code: 0xeb13" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-alt2">&#xeb13;</i> <span
            class="i-name">-fnt-icon-comment-alt2</span><span class="i-code">0xeb13</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb14" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-inv-alt2">&#xeb14;</i> <span
            class="i-name">-fnt-icon-comment-inv-alt2</span><span class="i-code">0xeb14</span></div>
    <div title="Code: 0xeb15" class="the-icons span3"><i class="demo-icon -fnt-icon-chat-3">&#xeb15;</i> <span
            class="i-name">-fnt-icon-chat-3</span><span class="i-code">0xeb15</span></div>
    <div title="Code: 0xeb16" class="the-icons span3"><i class="demo-icon -fnt-icon-chat-inv">&#xeb16;</i> <span
            class="i-name">-fnt-icon-chat-inv</span><span class="i-code">0xeb16</span></div>
    <div title="Code: 0xeb17" class="the-icons span3"><i class="demo-icon -fnt-icon-location-3">&#xeb17;</i> <span
            class="i-name">-fnt-icon-location-3</span><span class="i-code">0xeb17</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb18" class="the-icons span3"><i class="demo-icon -fnt-icon-location-inv">&#xeb18;</i> <span
            class="i-name">-fnt-icon-location-inv</span><span class="i-code">0xeb18</span></div>
    <div title="Code: 0xeb19" class="the-icons span3"><i class="demo-icon -fnt-icon-location-alt">&#xeb19;</i> <span
            class="i-name">-fnt-icon-location-alt</span><span class="i-code">0xeb19</span></div>
    <div title="Code: 0xeb1a" class="the-icons span3"><i class="demo-icon -fnt-icon-compass-3">&#xeb1a;</i> <span
            class="i-name">-fnt-icon-compass-3</span><span class="i-code">0xeb1a</span></div>
    <div title="Code: 0xeb1b" class="the-icons span3"><i class="demo-icon -fnt-icon-trash-3">&#xeb1b;</i> <span
            class="i-name">-fnt-icon-trash-3</span><span class="i-code">0xeb1b</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb1c" class="the-icons span3"><i class="demo-icon -fnt-icon-trash-empty-1">&#xeb1c;</i> <span
            class="i-name">-fnt-icon-trash-empty-1</span><span class="i-code">0xeb1c</span></div>
    <div title="Code: 0xeb1d" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-3">&#xeb1d;</i> <span
            class="i-name">-fnt-icon-doc-3</span><span class="i-code">0xeb1d</span></div>
    <div title="Code: 0xeb1e" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-inv-1">&#xeb1e;</i> <span
            class="i-name">-fnt-icon-doc-inv-1</span><span class="i-code">0xeb1e</span></div>
    <div title="Code: 0xeb1f" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-alt">&#xeb1f;</i> <span
            class="i-name">-fnt-icon-doc-alt</span><span class="i-code">0xeb1f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb20" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-inv-alt">&#xeb20;</i> <span
            class="i-name">-fnt-icon-doc-inv-alt</span><span class="i-code">0xeb20</span></div>
    <div title="Code: 0xeb21" class="the-icons span3"><i class="demo-icon -fnt-icon-article">&#xeb21;</i> <span
            class="i-name">-fnt-icon-article</span><span class="i-code">0xeb21</span></div>
    <div title="Code: 0xeb22" class="the-icons span3"><i class="demo-icon -fnt-icon-article-alt">&#xeb22;</i> <span
            class="i-name">-fnt-icon-article-alt</span><span class="i-code">0xeb22</span></div>
    <div title="Code: 0xeb23" class="the-icons span3"><i class="demo-icon -fnt-icon-book-open-1">&#xeb23;</i> <span
            class="i-name">-fnt-icon-book-open-1</span><span class="i-code">0xeb23</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb24" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-3">&#xeb24;</i> <span
            class="i-name">-fnt-icon-folder-3</span><span class="i-code">0xeb24</span></div>
    <div title="Code: 0xeb25" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-empty-1">&#xeb25;</i> <span
            class="i-name">-fnt-icon-folder-empty-1</span><span class="i-code">0xeb25</span></div>
    <div title="Code: 0xeb26" class="the-icons span3"><i class="demo-icon -fnt-icon-box-3">&#xeb26;</i> <span
            class="i-name">-fnt-icon-box-3</span><span class="i-code">0xeb26</span></div>
    <div title="Code: 0xeb27" class="the-icons span3"><i class="demo-icon -fnt-icon-rss-3">&#xeb27;</i> <span
            class="i-name">-fnt-icon-rss-3</span><span class="i-code">0xeb27</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb28" class="the-icons span3"><i class="demo-icon -fnt-icon-rss-alt">&#xeb28;</i> <span
            class="i-name">-fnt-icon-rss-alt</span><span class="i-code">0xeb28</span></div>
    <div title="Code: 0xeb29" class="the-icons span3"><i class="demo-icon -fnt-icon-cog-3">&#xeb29;</i> <span
            class="i-name">-fnt-icon-cog-3</span><span class="i-code">0xeb29</span></div>
    <div title="Code: 0xeb2a" class="the-icons span3"><i class="demo-icon -fnt-icon-wrench-2">&#xeb2a;</i> <span
            class="i-name">-fnt-icon-wrench-2</span><span class="i-code">0xeb2a</span></div>
    <div title="Code: 0xeb2b" class="the-icons span3"><i class="demo-icon -fnt-icon-share-2">&#xeb2b;</i> <span
            class="i-name">-fnt-icon-share-2</span><span class="i-code">0xeb2b</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb2c" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-3">&#xeb2c;</i> <span
            class="i-name">-fnt-icon-calendar-3</span><span class="i-code">0xeb2c</span></div>
    <div title="Code: 0xeb2d" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-inv">&#xeb2d;</i> <span
            class="i-name">-fnt-icon-calendar-inv</span><span class="i-code">0xeb2d</span></div>
    <div title="Code: 0xeb2e" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-alt">&#xeb2e;</i> <span
            class="i-name">-fnt-icon-calendar-alt</span><span class="i-code">0xeb2e</span></div>
    <div title="Code: 0xeb2f" class="the-icons span3"><i class="demo-icon -fnt-icon-mic-3">&#xeb2f;</i> <span
            class="i-name">-fnt-icon-mic-3</span><span class="i-code">0xeb2f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb30" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-off-2">&#xeb30;</i> <span
            class="i-name">-fnt-icon-volume-off-2</span><span class="i-code">0xeb30</span></div>
    <div title="Code: 0xeb31" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-up-1">&#xeb31;</i> <span
            class="i-name">-fnt-icon-volume-up-1</span><span class="i-code">0xeb31</span></div>
    <div title="Code: 0xeb32" class="the-icons span3"><i class="demo-icon -fnt-icon-headphones-2">&#xeb32;</i> <span
            class="i-name">-fnt-icon-headphones-2</span><span class="i-code">0xeb32</span></div>
    <div title="Code: 0xeb33" class="the-icons span3"><i class="demo-icon -fnt-icon-clock-3">&#xeb33;</i> <span
            class="i-name">-fnt-icon-clock-3</span><span class="i-code">0xeb33</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb34" class="the-icons span3"><i class="demo-icon -fnt-icon-lamp-1">&#xeb34;</i> <span
            class="i-name">-fnt-icon-lamp-1</span><span class="i-code">0xeb34</span></div>
    <div title="Code: 0xeb35" class="the-icons span3"><i class="demo-icon -fnt-icon-block-3">&#xeb35;</i> <span
            class="i-name">-fnt-icon-block-3</span><span class="i-code">0xeb35</span></div>
    <div title="Code: 0xeb36" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full-3">&#xeb36;</i> <span
            class="i-name">-fnt-icon-resize-full-3</span><span class="i-code">0xeb36</span></div>
    <div title="Code: 0xeb37" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full-alt-1">&#xeb37;</i>
        <span class="i-name">-fnt-icon-resize-full-alt-1</span><span class="i-code">0xeb37</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb38" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-small-2">&#xeb38;</i> <span
            class="i-name">-fnt-icon-resize-small-2</span><span class="i-code">0xeb38</span></div>
    <div title="Code: 0xeb39" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-small-alt">&#xeb39;</i> <span
            class="i-name">-fnt-icon-resize-small-alt</span><span class="i-code">0xeb39</span></div>
    <div title="Code: 0xeb3a" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-vertical-1">&#xeb3a;</i>
        <span class="i-name">-fnt-icon-resize-vertical-1</span><span class="i-code">0xeb3a</span></div>
    <div title="Code: 0xeb3b" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-horizontal-1">&#xeb3b;</i>
        <span class="i-name">-fnt-icon-resize-horizontal-1</span><span class="i-code">0xeb3b</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb3c" class="the-icons span3"><i class="demo-icon -fnt-icon-move-2">&#xeb3c;</i> <span
            class="i-name">-fnt-icon-move-2</span><span class="i-code">0xeb3c</span></div>
    <div title="Code: 0xeb3d" class="the-icons span3"><i class="demo-icon -fnt-icon-popup-3">&#xeb3d;</i> <span
            class="i-name">-fnt-icon-popup-3</span><span class="i-code">0xeb3d</span></div>
    <div title="Code: 0xeb3e" class="the-icons span3"><i class="demo-icon -fnt-icon-down-3">&#xeb3e;</i> <span
            class="i-name">-fnt-icon-down-3</span><span class="i-code">0xeb3e</span></div>
    <div title="Code: 0xeb3f" class="the-icons span3"><i class="demo-icon -fnt-icon-left-3">&#xeb3f;</i> <span
            class="i-name">-fnt-icon-left-3</span><span class="i-code">0xeb3f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb40" class="the-icons span3"><i class="demo-icon -fnt-icon-right-3">&#xeb40;</i> <span
            class="i-name">-fnt-icon-right-3</span><span class="i-code">0xeb40</span></div>
    <div title="Code: 0xeb41" class="the-icons span3"><i class="demo-icon -fnt-icon-up-3">&#xeb41;</i> <span
            class="i-name">-fnt-icon-up-3</span><span class="i-code">0xeb41</span></div>
    <div title="Code: 0xeb42" class="the-icons span3"><i class="demo-icon -fnt-icon-down-circle">&#xeb42;</i> <span
            class="i-name">-fnt-icon-down-circle</span><span class="i-code">0xeb42</span></div>
    <div title="Code: 0xeb43" class="the-icons span3"><i class="demo-icon -fnt-icon-left-circle">&#xeb43;</i> <span
            class="i-name">-fnt-icon-left-circle</span><span class="i-code">0xeb43</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb44" class="the-icons span3"><i class="demo-icon -fnt-icon-right-circle">&#xeb44;</i> <span
            class="i-name">-fnt-icon-right-circle</span><span class="i-code">0xeb44</span></div>
    <div title="Code: 0xeb45" class="the-icons span3"><i class="demo-icon -fnt-icon-up-circle">&#xeb45;</i> <span
            class="i-name">-fnt-icon-up-circle</span><span class="i-code">0xeb45</span></div>
    <div title="Code: 0xeb46" class="the-icons span3"><i class="demo-icon -fnt-icon-cw-3">&#xeb46;</i> <span
            class="i-name">-fnt-icon-cw-3</span><span class="i-code">0xeb46</span></div>
    <div title="Code: 0xeb47" class="the-icons span3"><i class="demo-icon -fnt-icon-loop-2">&#xeb47;</i> <span
            class="i-name">-fnt-icon-loop-2</span><span class="i-code">0xeb47</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb48" class="the-icons span3"><i class="demo-icon -fnt-icon-loop-alt-1">&#xeb48;</i> <span
            class="i-name">-fnt-icon-loop-alt-1</span><span class="i-code">0xeb48</span></div>
    <div title="Code: 0xeb49" class="the-icons span3"><i class="demo-icon -fnt-icon-exchange-1">&#xeb49;</i> <span
            class="i-name">-fnt-icon-exchange-1</span><span class="i-code">0xeb49</span></div>
    <div title="Code: 0xeb4a" class="the-icons span3"><i class="demo-icon -fnt-icon-split">&#xeb4a;</i> <span
            class="i-name">-fnt-icon-split</span><span class="i-code">0xeb4a</span></div>
    <div title="Code: 0xeb4b" class="the-icons span3"><i class="demo-icon -fnt-icon-arrow-curved">&#xeb4b;</i> <span
            class="i-name">-fnt-icon-arrow-curved</span><span class="i-code">0xeb4b</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb4c" class="the-icons span3"><i class="demo-icon -fnt-icon-play-3">&#xeb4c;</i> <span
            class="i-name">-fnt-icon-play-3</span><span class="i-code">0xeb4c</span></div>
    <div title="Code: 0xeb4d" class="the-icons span3"><i class="demo-icon -fnt-icon-play-circle2">&#xeb4d;</i> <span
            class="i-name">-fnt-icon-play-circle2</span><span class="i-code">0xeb4d</span></div>
    <div title="Code: 0xeb4e" class="the-icons span3"><i class="demo-icon -fnt-icon-stop-3">&#xeb4e;</i> <span
            class="i-name">-fnt-icon-stop-3</span><span class="i-code">0xeb4e</span></div>
    <div title="Code: 0xeb4f" class="the-icons span3"><i class="demo-icon -fnt-icon-pause-3">&#xeb4f;</i> <span
            class="i-name">-fnt-icon-pause-3</span><span class="i-code">0xeb4f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb50" class="the-icons span3"><i class="demo-icon -fnt-icon-to-start-2">&#xeb50;</i> <span
            class="i-name">-fnt-icon-to-start-2</span><span class="i-code">0xeb50</span></div>
    <div title="Code: 0xeb51" class="the-icons span3"><i class="demo-icon -fnt-icon-to-end-2">&#xeb51;</i> <span
            class="i-name">-fnt-icon-to-end-2</span><span class="i-code">0xeb51</span></div>
    <div title="Code: 0xeb52" class="the-icons span3"><i class="demo-icon -fnt-icon-eject-2">&#xeb52;</i> <span
            class="i-name">-fnt-icon-eject-2</span><span class="i-code">0xeb52</span></div>
    <div title="Code: 0xeb53" class="the-icons span3"><i class="demo-icon -fnt-icon-target-3">&#xeb53;</i> <span
            class="i-name">-fnt-icon-target-3</span><span class="i-code">0xeb53</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb54" class="the-icons span3"><i class="demo-icon -fnt-icon-signal-2">&#xeb54;</i> <span
            class="i-name">-fnt-icon-signal-2</span><span class="i-code">0xeb54</span></div>
    <div title="Code: 0xeb55" class="the-icons span3"><i class="demo-icon -fnt-icon-award-1">&#xeb55;</i> <span
            class="i-name">-fnt-icon-award-1</span><span class="i-code">0xeb55</span></div>
    <div title="Code: 0xeb56" class="the-icons span3"><i class="demo-icon -fnt-icon-award-empty">&#xeb56;</i> <span
            class="i-name">-fnt-icon-award-empty</span><span class="i-code">0xeb56</span></div>
    <div title="Code: 0xeb57" class="the-icons span3"><i class="demo-icon -fnt-icon-list-2">&#xeb57;</i> <span
            class="i-name">-fnt-icon-list-2</span><span class="i-code">0xeb57</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb58" class="the-icons span3"><i class="demo-icon -fnt-icon-list-nested">&#xeb58;</i> <span
            class="i-name">-fnt-icon-list-nested</span><span class="i-code">0xeb58</span></div>
    <div title="Code: 0xeb59" class="the-icons span3"><i class="demo-icon -fnt-icon-bat-empty">&#xeb59;</i> <span
            class="i-name">-fnt-icon-bat-empty</span><span class="i-code">0xeb59</span></div>
    <div title="Code: 0xeb5a" class="the-icons span3"><i class="demo-icon -fnt-icon-bat-half">&#xeb5a;</i> <span
            class="i-name">-fnt-icon-bat-half</span><span class="i-code">0xeb5a</span></div>
    <div title="Code: 0xeb5b" class="the-icons span3"><i class="demo-icon -fnt-icon-bat-full">&#xeb5b;</i> <span
            class="i-name">-fnt-icon-bat-full</span><span class="i-code">0xeb5b</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb5c" class="the-icons span3"><i class="demo-icon -fnt-icon-bat-charge-1">&#xeb5c;</i> <span
            class="i-name">-fnt-icon-bat-charge-1</span><span class="i-code">0xeb5c</span></div>
    <div title="Code: 0xeb5d" class="the-icons span3"><i class="demo-icon -fnt-icon-mobile-3">&#xeb5d;</i> <span
            class="i-name">-fnt-icon-mobile-3</span><span class="i-code">0xeb5d</span></div>
    <div title="Code: 0xeb5e" class="the-icons span3"><i class="demo-icon -fnt-icon-cd-1">&#xeb5e;</i> <span
            class="i-name">-fnt-icon-cd-1</span><span class="i-code">0xeb5e</span></div>
    <div title="Code: 0xeb5f" class="the-icons span3"><i class="demo-icon -fnt-icon-equalizer">&#xeb5f;</i> <span
            class="i-name">-fnt-icon-equalizer</span><span class="i-code">0xeb5f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb60" class="the-icons span3"><i class="demo-icon -fnt-icon-cursor">&#xeb60;</i> <span
            class="i-name">-fnt-icon-cursor</span><span class="i-code">0xeb60</span></div>
    <div title="Code: 0xeb61" class="the-icons span3"><i class="demo-icon -fnt-icon-aperture">&#xeb61;</i> <span
            class="i-name">-fnt-icon-aperture</span><span class="i-code">0xeb61</span></div>
    <div title="Code: 0xeb62" class="the-icons span3"><i class="demo-icon -fnt-icon-aperture-alt">&#xeb62;</i> <span
            class="i-name">-fnt-icon-aperture-alt</span><span class="i-code">0xeb62</span></div>
    <div title="Code: 0xeb63" class="the-icons span3"><i class="demo-icon -fnt-icon-steering-wheel">&#xeb63;</i> <span
            class="i-name">-fnt-icon-steering-wheel</span><span class="i-code">0xeb63</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb64" class="the-icons span3"><i class="demo-icon -fnt-icon-book-2">&#xeb64;</i> <span
            class="i-name">-fnt-icon-book-2</span><span class="i-code">0xeb64</span></div>
    <div title="Code: 0xeb65" class="the-icons span3"><i class="demo-icon -fnt-icon-book-alt">&#xeb65;</i> <span
            class="i-name">-fnt-icon-book-alt</span><span class="i-code">0xeb65</span></div>
    <div title="Code: 0xeb66" class="the-icons span3"><i class="demo-icon -fnt-icon-brush-3">&#xeb66;</i> <span
            class="i-name">-fnt-icon-brush-3</span><span class="i-code">0xeb66</span></div>
    <div title="Code: 0xeb67" class="the-icons span3"><i class="demo-icon -fnt-icon-brush-alt">&#xeb67;</i> <span
            class="i-name">-fnt-icon-brush-alt</span><span class="i-code">0xeb67</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb68" class="the-icons span3"><i class="demo-icon -fnt-icon-eyedropper-1">&#xeb68;</i> <span
            class="i-name">-fnt-icon-eyedropper-1</span><span class="i-code">0xeb68</span></div>
    <div title="Code: 0xeb69" class="the-icons span3"><i class="demo-icon -fnt-icon-layers">&#xeb69;</i> <span
            class="i-name">-fnt-icon-layers</span><span class="i-code">0xeb69</span></div>
    <div title="Code: 0xeb6a" class="the-icons span3"><i class="demo-icon -fnt-icon-layers-alt">&#xeb6a;</i> <span
            class="i-name">-fnt-icon-layers-alt</span><span class="i-code">0xeb6a</span></div>
    <div title="Code: 0xeb6b" class="the-icons span3"><i class="demo-icon -fnt-icon-sun-2">&#xeb6b;</i> <span
            class="i-name">-fnt-icon-sun-2</span><span class="i-code">0xeb6b</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb6c" class="the-icons span3"><i class="demo-icon -fnt-icon-sun-inv">&#xeb6c;</i> <span
            class="i-name">-fnt-icon-sun-inv</span><span class="i-code">0xeb6c</span></div>
    <div title="Code: 0xeb6d" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-3">&#xeb6d;</i> <span
            class="i-name">-fnt-icon-cloud-3</span><span class="i-code">0xeb6d</span></div>
    <div title="Code: 0xeb6e" class="the-icons span3"><i class="demo-icon -fnt-icon-rain-1">&#xeb6e;</i> <span
            class="i-name">-fnt-icon-rain-1</span><span class="i-code">0xeb6e</span></div>
    <div title="Code: 0xeb6f" class="the-icons span3"><i class="demo-icon -fnt-icon-flash-3">&#xeb6f;</i> <span
            class="i-name">-fnt-icon-flash-3</span><span class="i-code">0xeb6f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb70" class="the-icons span3"><i class="demo-icon -fnt-icon-moon-3">&#xeb70;</i> <span
            class="i-name">-fnt-icon-moon-3</span><span class="i-code">0xeb70</span></div>
    <div title="Code: 0xeb71" class="the-icons span3"><i class="demo-icon -fnt-icon-moon-inv">&#xeb71;</i> <span
            class="i-name">-fnt-icon-moon-inv</span><span class="i-code">0xeb71</span></div>
    <div title="Code: 0xeb72" class="the-icons span3"><i class="demo-icon -fnt-icon-umbrella-1">&#xeb72;</i> <span
            class="i-name">-fnt-icon-umbrella-1</span><span class="i-code">0xeb72</span></div>
    <div title="Code: 0xeb73" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-bar-3">&#xeb73;</i> <span
            class="i-name">-fnt-icon-chart-bar-3</span><span class="i-code">0xeb73</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb74" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-pie-3">&#xeb74;</i> <span
            class="i-name">-fnt-icon-chart-pie-3</span><span class="i-code">0xeb74</span></div>
    <div title="Code: 0xeb75" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-pie-alt">&#xeb75;</i> <span
            class="i-name">-fnt-icon-chart-pie-alt</span><span class="i-code">0xeb75</span></div>
    <div title="Code: 0xeb76" class="the-icons span3"><i class="demo-icon -fnt-icon-key-3">&#xeb76;</i> <span
            class="i-name">-fnt-icon-key-3</span><span class="i-code">0xeb76</span></div>
    <div title="Code: 0xeb77" class="the-icons span3"><i class="demo-icon -fnt-icon-key-inv">&#xeb77;</i> <span
            class="i-name">-fnt-icon-key-inv</span><span class="i-code">0xeb77</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb78" class="the-icons span3"><i class="demo-icon -fnt-icon-hash">&#xeb78;</i> <span
            class="i-name">-fnt-icon-hash</span><span class="i-code">0xeb78</span></div>
    <div title="Code: 0xeb79" class="the-icons span3"><i class="demo-icon -fnt-icon-at-2">&#xeb79;</i> <span
            class="i-name">-fnt-icon-at-2</span><span class="i-code">0xeb79</span></div>
    <div title="Code: 0xeb7a" class="the-icons span3"><i class="demo-icon -fnt-icon-pilcrow">&#xeb7a;</i> <span
            class="i-name">-fnt-icon-pilcrow</span><span class="i-code">0xeb7a</span></div>
    <div title="Code: 0xeb7b" class="the-icons span3"><i class="demo-icon -fnt-icon-dial">&#xeb7b;</i> <span
            class="i-name">-fnt-icon-dial</span><span class="i-code">0xeb7b</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb7c" class="the-icons span3"><i class="demo-icon -fnt-icon-search-4">&#xeb7c;</i> <span
            class="i-name">-fnt-icon-search-4</span><span class="i-code">0xeb7c</span></div>
    <div title="Code: 0xeb7d" class="the-icons span3"><i class="demo-icon -fnt-icon-mail-4">&#xeb7d;</i> <span
            class="i-name">-fnt-icon-mail-4</span><span class="i-code">0xeb7d</span></div>
    <div title="Code: 0xeb7e" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-4">&#xeb7e;</i> <span
            class="i-name">-fnt-icon-heart-4</span><span class="i-code">0xeb7e</span></div>
    <div title="Code: 0xeb7f" class="the-icons span3"><i class="demo-icon -fnt-icon-star-4">&#xeb7f;</i> <span
            class="i-name">-fnt-icon-star-4</span><span class="i-code">0xeb7f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb80" class="the-icons span3"><i class="demo-icon -fnt-icon-user-4">&#xeb80;</i> <span
            class="i-name">-fnt-icon-user-4</span><span class="i-code">0xeb80</span></div>
    <div title="Code: 0xeb81" class="the-icons span3"><i class="demo-icon -fnt-icon-user-woman">&#xeb81;</i> <span
            class="i-name">-fnt-icon-user-woman</span><span class="i-code">0xeb81</span></div>
    <div title="Code: 0xeb82" class="the-icons span3"><i class="demo-icon -fnt-icon-user-pair">&#xeb82;</i> <span
            class="i-name">-fnt-icon-user-pair</span><span class="i-code">0xeb82</span></div>
    <div title="Code: 0xeb83" class="the-icons span3"><i class="demo-icon -fnt-icon-video-alt">&#xeb83;</i> <span
            class="i-name">-fnt-icon-video-alt</span><span class="i-code">0xeb83</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb84" class="the-icons span3"><i class="demo-icon -fnt-icon-videocam-2">&#xeb84;</i> <span
            class="i-name">-fnt-icon-videocam-2</span><span class="i-code">0xeb84</span></div>
    <div title="Code: 0xeb85" class="the-icons span3"><i class="demo-icon -fnt-icon-videocam-alt">&#xeb85;</i> <span
            class="i-name">-fnt-icon-videocam-alt</span><span class="i-code">0xeb85</span></div>
    <div title="Code: 0xeb86" class="the-icons span3"><i class="demo-icon -fnt-icon-camera-4">&#xeb86;</i> <span
            class="i-name">-fnt-icon-camera-4</span><span class="i-code">0xeb86</span></div>
    <div title="Code: 0xeb87" class="the-icons span3"><i class="demo-icon -fnt-icon-th-2">&#xeb87;</i> <span
            class="i-name">-fnt-icon-th-2</span><span class="i-code">0xeb87</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb88" class="the-icons span3"><i class="demo-icon -fnt-icon-th-list-2">&#xeb88;</i> <span
            class="i-name">-fnt-icon-th-list-2</span><span class="i-code">0xeb88</span></div>
    <div title="Code: 0xeb89" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-3">&#xeb89;</i> <span
            class="i-name">-fnt-icon-ok-3</span><span class="i-code">0xeb89</span></div>
    <div title="Code: 0xeb8a" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-4">&#xeb8a;</i> <span
            class="i-name">-fnt-icon-cancel-4</span><span class="i-code">0xeb8a</span></div>
    <div title="Code: 0xeb8b" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-circle-1">&#xeb8b;</i> <span
            class="i-name">-fnt-icon-cancel-circle-1</span><span class="i-code">0xeb8b</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb8c" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-4">&#xeb8c;</i> <span
            class="i-name">-fnt-icon-plus-4</span><span class="i-code">0xeb8c</span></div>
    <div title="Code: 0xeb8d" class="the-icons span3"><i class="demo-icon -fnt-icon-home-4">&#xeb8d;</i> <span
            class="i-name">-fnt-icon-home-4</span><span class="i-code">0xeb8d</span></div>
    <div title="Code: 0xeb8e" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-4">&#xeb8e;</i> <span
            class="i-name">-fnt-icon-lock-4</span><span class="i-code">0xeb8e</span></div>
    <div title="Code: 0xeb8f" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-4">&#xeb8f;</i> <span
            class="i-name">-fnt-icon-lock-open-4</span><span class="i-code">0xeb8f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb90" class="the-icons span3"><i class="demo-icon -fnt-icon-eye-4">&#xeb90;</i> <span
            class="i-name">-fnt-icon-eye-4</span><span class="i-code">0xeb90</span></div>
    <div title="Code: 0xeb91" class="the-icons span3"><i class="demo-icon -fnt-icon-tag-4">&#xeb91;</i> <span
            class="i-name">-fnt-icon-tag-4</span><span class="i-code">0xeb91</span></div>
    <div title="Code: 0xeb92" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-up-3">&#xeb92;</i> <span
            class="i-name">-fnt-icon-thumbs-up-3</span><span class="i-code">0xeb92</span></div>
    <div title="Code: 0xeb93" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-down-3">&#xeb93;</i> <span
            class="i-name">-fnt-icon-thumbs-down-3</span><span class="i-code">0xeb93</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb94" class="the-icons span3"><i class="demo-icon -fnt-icon-download-4">&#xeb94;</i> <span
            class="i-name">-fnt-icon-download-4</span><span class="i-code">0xeb94</span></div>
    <div title="Code: 0xeb95" class="the-icons span3"><i class="demo-icon -fnt-icon-export-3">&#xeb95;</i> <span
            class="i-name">-fnt-icon-export-3</span><span class="i-code">0xeb95</span></div>
    <div title="Code: 0xeb96" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-4">&#xeb96;</i> <span
            class="i-name">-fnt-icon-pencil-4</span><span class="i-code">0xeb96</span></div>
    <div title="Code: 0xeb97" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-alt-1">&#xeb97;</i> <span
            class="i-name">-fnt-icon-pencil-alt-1</span><span class="i-code">0xeb97</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb98" class="the-icons span3"><i class="demo-icon -fnt-icon-edit-2">&#xeb98;</i> <span
            class="i-name">-fnt-icon-edit-2</span><span class="i-code">0xeb98</span></div>
    <div title="Code: 0xeb99" class="the-icons span3"><i class="demo-icon -fnt-icon-chat-4">&#xeb99;</i> <span
            class="i-name">-fnt-icon-chat-4</span><span class="i-code">0xeb99</span></div>
    <div title="Code: 0xeb9a" class="the-icons span3"><i class="demo-icon -fnt-icon-print-3">&#xeb9a;</i> <span
            class="i-name">-fnt-icon-print-3</span><span class="i-code">0xeb9a</span></div>
    <div title="Code: 0xeb9b" class="the-icons span3"><i class="demo-icon -fnt-icon-bell-3">&#xeb9b;</i> <span
            class="i-name">-fnt-icon-bell-3</span><span class="i-code">0xeb9b</span></div>
</div>
<div class="row">
    <div title="Code: 0xeb9c" class="the-icons span3"><i class="demo-icon -fnt-icon-attention-3">&#xeb9c;</i> <span
            class="i-name">-fnt-icon-attention-3</span><span class="i-code">0xeb9c</span></div>
    <div title="Code: 0xeb9d" class="the-icons span3"><i class="demo-icon -fnt-icon-info-4">&#xeb9d;</i> <span
            class="i-name">-fnt-icon-info-4</span><span class="i-code">0xeb9d</span></div>
    <div title="Code: 0xeb9e" class="the-icons span3"><i class="demo-icon -fnt-icon-question">&#xeb9e;</i> <span
            class="i-name">-fnt-icon-question</span><span class="i-code">0xeb9e</span></div>
    <div title="Code: 0xeb9f" class="the-icons span3"><i class="demo-icon -fnt-icon-location-4">&#xeb9f;</i> <span
            class="i-name">-fnt-icon-location-4</span><span class="i-code">0xeb9f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeba0" class="the-icons span3"><i class="demo-icon -fnt-icon-trash-4">&#xeba0;</i> <span
            class="i-name">-fnt-icon-trash-4</span><span class="i-code">0xeba0</span></div>
    <div title="Code: 0xeba1" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-4">&#xeba1;</i> <span
            class="i-name">-fnt-icon-doc-4</span><span class="i-code">0xeba1</span></div>
    <div title="Code: 0xeba2" class="the-icons span3"><i class="demo-icon -fnt-icon-article-1">&#xeba2;</i> <span
            class="i-name">-fnt-icon-article-1</span><span class="i-code">0xeba2</span></div>
    <div title="Code: 0xeba3" class="the-icons span3"><i class="demo-icon -fnt-icon-article-alt-1">&#xeba3;</i> <span
            class="i-name">-fnt-icon-article-alt-1</span><span class="i-code">0xeba3</span></div>
</div>
<div class="row">
    <div title="Code: 0xeba4" class="the-icons span3"><i class="demo-icon -fnt-icon-rss-4">&#xeba4;</i> <span
            class="i-name">-fnt-icon-rss-4</span><span class="i-code">0xeba4</span></div>
    <div title="Code: 0xeba5" class="the-icons span3"><i class="demo-icon -fnt-icon-wrench-3">&#xeba5;</i> <span
            class="i-name">-fnt-icon-wrench-3</span><span class="i-code">0xeba5</span></div>
    <div title="Code: 0xeba6" class="the-icons span3"><i class="demo-icon -fnt-icon-basket-3">&#xeba6;</i> <span
            class="i-name">-fnt-icon-basket-3</span><span class="i-code">0xeba6</span></div>
    <div title="Code: 0xeba7" class="the-icons span3"><i class="demo-icon -fnt-icon-basket-alt">&#xeba7;</i> <span
            class="i-name">-fnt-icon-basket-alt</span><span class="i-code">0xeba7</span></div>
</div>
<div class="row">
    <div title="Code: 0xeba8" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-4">&#xeba8;</i> <span
            class="i-name">-fnt-icon-calendar-4</span><span class="i-code">0xeba8</span></div>
    <div title="Code: 0xeba9" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-alt-1">&#xeba9;</i> <span
            class="i-name">-fnt-icon-calendar-alt-1</span><span class="i-code">0xeba9</span></div>
    <div title="Code: 0xebaa" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-off-3">&#xebaa;</i> <span
            class="i-name">-fnt-icon-volume-off-3</span><span class="i-code">0xebaa</span></div>
    <div title="Code: 0xebab" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-down-1">&#xebab;</i> <span
            class="i-name">-fnt-icon-volume-down-1</span><span class="i-code">0xebab</span></div>
</div>
<div class="row">
    <div title="Code: 0xebac" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-up-2">&#xebac;</i> <span
            class="i-name">-fnt-icon-volume-up-2</span><span class="i-code">0xebac</span></div>
    <div title="Code: 0xebad" class="the-icons span3"><i class="demo-icon -fnt-icon-bullhorn">&#xebad;</i> <span
            class="i-name">-fnt-icon-bullhorn</span><span class="i-code">0xebad</span></div>
    <div title="Code: 0xebae" class="the-icons span3"><i class="demo-icon -fnt-icon-clock-4">&#xebae;</i> <span
            class="i-name">-fnt-icon-clock-4</span><span class="i-code">0xebae</span></div>
    <div title="Code: 0xebaf" class="the-icons span3"><i class="demo-icon -fnt-icon-clock-alt">&#xebaf;</i> <span
            class="i-name">-fnt-icon-clock-alt</span><span class="i-code">0xebaf</span></div>
</div>
<div class="row">
    <div title="Code: 0xebb0" class="the-icons span3"><i class="demo-icon -fnt-icon-stop-4">&#xebb0;</i> <span
            class="i-name">-fnt-icon-stop-4</span><span class="i-code">0xebb0</span></div>
    <div title="Code: 0xebb1" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full-4">&#xebb1;</i> <span
            class="i-name">-fnt-icon-resize-full-4</span><span class="i-code">0xebb1</span></div>
    <div title="Code: 0xebb2" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-small-3">&#xebb2;</i> <span
            class="i-name">-fnt-icon-resize-small-3</span><span class="i-code">0xebb2</span></div>
    <div title="Code: 0xebb3" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-in-2">&#xebb3;</i> <span
            class="i-name">-fnt-icon-zoom-in-2</span><span class="i-code">0xebb3</span></div>
</div>
<div class="row">
    <div title="Code: 0xebb4" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-out-2">&#xebb4;</i> <span
            class="i-name">-fnt-icon-zoom-out-2</span><span class="i-code">0xebb4</span></div>
    <div title="Code: 0xebb5" class="the-icons span3"><i class="demo-icon -fnt-icon-popup-4">&#xebb5;</i> <span
            class="i-name">-fnt-icon-popup-4</span><span class="i-code">0xebb5</span></div>
    <div title="Code: 0xebb6" class="the-icons span3"><i class="demo-icon -fnt-icon-down-dir-2">&#xebb6;</i> <span
            class="i-name">-fnt-icon-down-dir-2</span><span class="i-code">0xebb6</span></div>
    <div title="Code: 0xebb7" class="the-icons span3"><i class="demo-icon -fnt-icon-left-dir-2">&#xebb7;</i> <span
            class="i-name">-fnt-icon-left-dir-2</span><span class="i-code">0xebb7</span></div>
</div>
<div class="row">
    <div title="Code: 0xebb8" class="the-icons span3"><i class="demo-icon -fnt-icon-right-dir-2">&#xebb8;</i> <span
            class="i-name">-fnt-icon-right-dir-2</span><span class="i-code">0xebb8</span></div>
    <div title="Code: 0xebb9" class="the-icons span3"><i class="demo-icon -fnt-icon-up-dir-2">&#xebb9;</i> <span
            class="i-name">-fnt-icon-up-dir-2</span><span class="i-code">0xebb9</span></div>
    <div title="Code: 0xebba" class="the-icons span3"><i class="demo-icon -fnt-icon-down-4">&#xebba;</i> <span
            class="i-name">-fnt-icon-down-4</span><span class="i-code">0xebba</span></div>
    <div title="Code: 0xebbb" class="the-icons span3"><i class="demo-icon -fnt-icon-up-4">&#xebbb;</i> <span
            class="i-name">-fnt-icon-up-4</span><span class="i-code">0xebbb</span></div>
</div>
<div class="row">
    <div title="Code: 0xebbc" class="the-icons span3"><i class="demo-icon -fnt-icon-cw-4">&#xebbc;</i> <span
            class="i-name">-fnt-icon-cw-4</span><span class="i-code">0xebbc</span></div>
    <div title="Code: 0xebbd" class="the-icons span3"><i class="demo-icon -fnt-icon-signal-3">&#xebbd;</i> <span
            class="i-name">-fnt-icon-signal-3</span><span class="i-code">0xebbd</span></div>
    <div title="Code: 0xebbe" class="the-icons span3"><i class="demo-icon -fnt-icon-award-2">&#xebbe;</i> <span
            class="i-name">-fnt-icon-award-2</span><span class="i-code">0xebbe</span></div>
    <div title="Code: 0xebbf" class="the-icons span3"><i class="demo-icon -fnt-icon-mobile-4">&#xebbf;</i> <span
            class="i-name">-fnt-icon-mobile-4</span><span class="i-code">0xebbf</span></div>
</div>
<div class="row">
    <div title="Code: 0xebc0" class="the-icons span3"><i class="demo-icon -fnt-icon-mobile-alt">&#xebc0;</i> <span
            class="i-name">-fnt-icon-mobile-alt</span><span class="i-code">0xebc0</span></div>
    <div title="Code: 0xebc1" class="the-icons span3"><i class="demo-icon -fnt-icon-tablet-2">&#xebc1;</i> <span
            class="i-name">-fnt-icon-tablet-2</span><span class="i-code">0xebc1</span></div>
    <div title="Code: 0xebc2" class="the-icons span3"><i class="demo-icon -fnt-icon-ipod">&#xebc2;</i> <span
            class="i-name">-fnt-icon-ipod</span><span class="i-code">0xebc2</span></div>
    <div title="Code: 0xebc3" class="the-icons span3"><i class="demo-icon -fnt-icon-cd-2">&#xebc3;</i> <span
            class="i-name">-fnt-icon-cd-2</span><span class="i-code">0xebc3</span></div>
</div>
<div class="row">
    <div title="Code: 0xebc4" class="the-icons span3"><i class="demo-icon -fnt-icon-grid">&#xebc4;</i> <span
            class="i-name">-fnt-icon-grid</span><span class="i-code">0xebc4</span></div>
    <div title="Code: 0xebc5" class="the-icons span3"><i class="demo-icon -fnt-icon-book-3">&#xebc5;</i> <span
            class="i-name">-fnt-icon-book-3</span><span class="i-code">0xebc5</span></div>
    <div title="Code: 0xebc6" class="the-icons span3"><i class="demo-icon -fnt-icon-easel">&#xebc6;</i> <span
            class="i-name">-fnt-icon-easel</span><span class="i-code">0xebc6</span></div>
    <div title="Code: 0xebc7" class="the-icons span3"><i class="demo-icon -fnt-icon-globe-3">&#xebc7;</i> <span
            class="i-name">-fnt-icon-globe-3</span><span class="i-code">0xebc7</span></div>
</div>
<div class="row">
    <div title="Code: 0xebc8" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-1">&#xebc8;</i> <span
            class="i-name">-fnt-icon-chart-1</span><span class="i-code">0xebc8</span></div>
    <div title="Code: 0xebc9" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-bar-4">&#xebc9;</i> <span
            class="i-name">-fnt-icon-chart-bar-4</span><span class="i-code">0xebc9</span></div>
    <div title="Code: 0xebca" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-pie-4">&#xebca;</i> <span
            class="i-name">-fnt-icon-chart-pie-4</span><span class="i-code">0xebca</span></div>
    <div title="Code: 0xebcb" class="the-icons span3"><i class="demo-icon -fnt-icon-dollar-1">&#xebcb;</i> <span
            class="i-name">-fnt-icon-dollar-1</span><span class="i-code">0xebcb</span></div>
</div>
<div class="row">
    <div title="Code: 0xebcc" class="the-icons span3"><i class="demo-icon -fnt-icon-at-3">&#xebcc;</i> <span
            class="i-name">-fnt-icon-at-3</span><span class="i-code">0xebcc</span></div>
    <div title="Code: 0xebcd" class="the-icons span3"><i class="demo-icon -fnt-icon-colon">&#xebcd;</i> <span
            class="i-name">-fnt-icon-colon</span><span class="i-code">0xebcd</span></div>
    <div title="Code: 0xebce" class="the-icons span3"><i class="demo-icon -fnt-icon-semicolon">&#xebce;</i> <span
            class="i-name">-fnt-icon-semicolon</span><span class="i-code">0xebce</span></div>
    <div title="Code: 0xebcf" class="the-icons span3"><i class="demo-icon -fnt-icon-squares">&#xebcf;</i> <span
            class="i-name">-fnt-icon-squares</span><span class="i-code">0xebcf</span></div>
</div>
<div class="row">
    <div title="Code: 0xebd0" class="the-icons span3"><i class="demo-icon -fnt-icon-money-1">&#xebd0;</i> <span
            class="i-name">-fnt-icon-money-1</span><span class="i-code">0xebd0</span></div>
    <div title="Code: 0xebd1" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-3">&#xebd1;</i> <span
            class="i-name">-fnt-icon-facebook-3</span><span class="i-code">0xebd1</span></div>
    <div title="Code: 0xebd2" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-rect">&#xebd2;</i> <span
            class="i-name">-fnt-icon-facebook-rect</span><span class="i-code">0xebd2</span></div>
    <div title="Code: 0xebd3" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-bird">&#xebd3;</i> <span
            class="i-name">-fnt-icon-twitter-bird</span><span class="i-code">0xebd3</span></div>
</div>
<div class="row">
    <div title="Code: 0xebd4" class="the-icons span3"><i class="demo-icon -fnt-icon-youtube-1">&#xebd4;</i> <span
            class="i-name">-fnt-icon-youtube-1</span><span class="i-code">0xebd4</span></div>
    <div title="Code: 0xebd5" class="the-icons span3"><i class="demo-icon -fnt-icon-windy-rain-inv">&#xebd5;</i> <span
            class="i-name">-fnt-icon-windy-rain-inv</span><span class="i-code">0xebd5</span></div>
    <div title="Code: 0xebd6" class="the-icons span3"><i class="demo-icon -fnt-icon-snow-inv">&#xebd6;</i> <span
            class="i-name">-fnt-icon-snow-inv</span><span class="i-code">0xebd6</span></div>
    <div title="Code: 0xebd7" class="the-icons span3"><i class="demo-icon -fnt-icon-snow-heavy-inv">&#xebd7;</i> <span
            class="i-name">-fnt-icon-snow-heavy-inv</span><span class="i-code">0xebd7</span></div>
</div>
<div class="row">
    <div title="Code: 0xebd8" class="the-icons span3"><i class="demo-icon -fnt-icon-hail-inv">&#xebd8;</i> <span
            class="i-name">-fnt-icon-hail-inv</span><span class="i-code">0xebd8</span></div>
    <div title="Code: 0xebd9" class="the-icons span3"><i class="demo-icon -fnt-icon-clouds-inv">&#xebd9;</i> <span
            class="i-name">-fnt-icon-clouds-inv</span><span class="i-code">0xebd9</span></div>
    <div title="Code: 0xebda" class="the-icons span3"><i class="demo-icon -fnt-icon-clouds-flash-inv">&#xebda;</i> <span
            class="i-name">-fnt-icon-clouds-flash-inv</span><span class="i-code">0xebda</span></div>
    <div title="Code: 0xebdb" class="the-icons span3"><i class="demo-icon -fnt-icon-temperature">&#xebdb;</i> <span
            class="i-name">-fnt-icon-temperature</span><span class="i-code">0xebdb</span></div>
</div>
<div class="row">
    <div title="Code: 0xebdc" class="the-icons span3"><i class="demo-icon -fnt-icon-compass-4">&#xebdc;</i> <span
            class="i-name">-fnt-icon-compass-4</span><span class="i-code">0xebdc</span></div>
    <div title="Code: 0xebdd" class="the-icons span3"><i class="demo-icon -fnt-icon-na">&#xebdd;</i> <span
            class="i-name">-fnt-icon-na</span><span class="i-code">0xebdd</span></div>
    <div title="Code: 0xebde" class="the-icons span3"><i class="demo-icon -fnt-icon-celcius">&#xebde;</i> <span
            class="i-name">-fnt-icon-celcius</span><span class="i-code">0xebde</span></div>
    <div title="Code: 0xebdf" class="the-icons span3"><i class="demo-icon -fnt-icon-fahrenheit">&#xebdf;</i> <span
            class="i-name">-fnt-icon-fahrenheit</span><span class="i-code">0xebdf</span></div>
</div>
<div class="row">
    <div title="Code: 0xebe0" class="the-icons span3"><i class="demo-icon -fnt-icon-clouds-flash-alt">&#xebe0;</i> <span
            class="i-name">-fnt-icon-clouds-flash-alt</span><span class="i-code">0xebe0</span></div>
    <div title="Code: 0xebe1" class="the-icons span3"><i class="demo-icon -fnt-icon-sun-inv-1">&#xebe1;</i> <span
            class="i-name">-fnt-icon-sun-inv-1</span><span class="i-code">0xebe1</span></div>
    <div title="Code: 0xebe2" class="the-icons span3"><i class="demo-icon -fnt-icon-moon-inv-1">&#xebe2;</i> <span
            class="i-name">-fnt-icon-moon-inv-1</span><span class="i-code">0xebe2</span></div>
    <div title="Code: 0xebe3" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-sun-inv">&#xebe3;</i> <span
            class="i-name">-fnt-icon-cloud-sun-inv</span><span class="i-code">0xebe3</span></div>
</div>
<div class="row">
    <div title="Code: 0xebe4" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-moon-inv">&#xebe4;</i> <span
            class="i-name">-fnt-icon-cloud-moon-inv</span><span class="i-code">0xebe4</span></div>
    <div title="Code: 0xebe5" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-inv">&#xebe5;</i> <span
            class="i-name">-fnt-icon-cloud-inv</span><span class="i-code">0xebe5</span></div>
    <div title="Code: 0xebe6" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-flash-inv">&#xebe6;</i> <span
            class="i-name">-fnt-icon-cloud-flash-inv</span><span class="i-code">0xebe6</span></div>
    <div title="Code: 0xebe7" class="the-icons span3"><i class="demo-icon -fnt-icon-drizzle-inv">&#xebe7;</i> <span
            class="i-name">-fnt-icon-drizzle-inv</span><span class="i-code">0xebe7</span></div>
</div>
<div class="row">
    <div title="Code: 0xebe8" class="the-icons span3"><i class="demo-icon -fnt-icon-rain-inv">&#xebe8;</i> <span
            class="i-name">-fnt-icon-rain-inv</span><span class="i-code">0xebe8</span></div>
    <div title="Code: 0xebe9" class="the-icons span3"><i class="demo-icon -fnt-icon-windy-inv">&#xebe9;</i> <span
            class="i-name">-fnt-icon-windy-inv</span><span class="i-code">0xebe9</span></div>
    <div title="Code: 0xebea" class="the-icons span3"><i class="demo-icon -fnt-icon-sunrise">&#xebea;</i> <span
            class="i-name">-fnt-icon-sunrise</span><span class="i-code">0xebea</span></div>
    <div title="Code: 0xebeb" class="the-icons span3"><i class="demo-icon -fnt-icon-sun-3">&#xebeb;</i> <span
            class="i-name">-fnt-icon-sun-3</span><span class="i-code">0xebeb</span></div>
</div>
<div class="row">
    <div title="Code: 0xebec" class="the-icons span3"><i class="demo-icon -fnt-icon-moon-4">&#xebec;</i> <span
            class="i-name">-fnt-icon-moon-4</span><span class="i-code">0xebec</span></div>
    <div title="Code: 0xebed" class="the-icons span3"><i class="demo-icon -fnt-icon-eclipse">&#xebed;</i> <span
            class="i-name">-fnt-icon-eclipse</span><span class="i-code">0xebed</span></div>
    <div title="Code: 0xebee" class="the-icons span3"><i class="demo-icon -fnt-icon-mist">&#xebee;</i> <span
            class="i-name">-fnt-icon-mist</span><span class="i-code">0xebee</span></div>
    <div title="Code: 0xebef" class="the-icons span3"><i class="demo-icon -fnt-icon-wind-1">&#xebef;</i> <span
            class="i-name">-fnt-icon-wind-1</span><span class="i-code">0xebef</span></div>
</div>
<div class="row">
    <div title="Code: 0xebf0" class="the-icons span3"><i class="demo-icon -fnt-icon-snowflake">&#xebf0;</i> <span
            class="i-name">-fnt-icon-snowflake</span><span class="i-code">0xebf0</span></div>
    <div title="Code: 0xebf1" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-sun-1">&#xebf1;</i> <span
            class="i-name">-fnt-icon-cloud-sun-1</span><span class="i-code">0xebf1</span></div>
    <div title="Code: 0xebf2" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-moon">&#xebf2;</i> <span
            class="i-name">-fnt-icon-cloud-moon</span><span class="i-code">0xebf2</span></div>
    <div title="Code: 0xebf3" class="the-icons span3"><i class="demo-icon -fnt-icon-fog-sun">&#xebf3;</i> <span
            class="i-name">-fnt-icon-fog-sun</span><span class="i-code">0xebf3</span></div>
</div>
<div class="row">
    <div title="Code: 0xebf4" class="the-icons span3"><i class="demo-icon -fnt-icon-fog-moon">&#xebf4;</i> <span
            class="i-name">-fnt-icon-fog-moon</span><span class="i-code">0xebf4</span></div>
    <div title="Code: 0xebf5" class="the-icons span3"><i class="demo-icon -fnt-icon-fog-cloud">&#xebf5;</i> <span
            class="i-name">-fnt-icon-fog-cloud</span><span class="i-code">0xebf5</span></div>
    <div title="Code: 0xebf6" class="the-icons span3"><i class="demo-icon -fnt-icon-fog">&#xebf6;</i> <span
            class="i-name">-fnt-icon-fog</span><span class="i-code">0xebf6</span></div>
    <div title="Code: 0xebf7" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-4">&#xebf7;</i> <span
            class="i-name">-fnt-icon-cloud-4</span><span class="i-code">0xebf7</span></div>
</div>
<div class="row">
    <div title="Code: 0xebf8" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-flash-1">&#xebf8;</i> <span
            class="i-name">-fnt-icon-cloud-flash-1</span><span class="i-code">0xebf8</span></div>
    <div title="Code: 0xebf9" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-flash-alt">&#xebf9;</i> <span
            class="i-name">-fnt-icon-cloud-flash-alt</span><span class="i-code">0xebf9</span></div>
    <div title="Code: 0xebfa" class="the-icons span3"><i class="demo-icon -fnt-icon-drizzle-1">&#xebfa;</i> <span
            class="i-name">-fnt-icon-drizzle-1</span><span class="i-code">0xebfa</span></div>
    <div title="Code: 0xebfb" class="the-icons span3"><i class="demo-icon -fnt-icon-rain-2">&#xebfb;</i> <span
            class="i-name">-fnt-icon-rain-2</span><span class="i-code">0xebfb</span></div>
</div>
<div class="row">
    <div title="Code: 0xebfc" class="the-icons span3"><i class="demo-icon -fnt-icon-windy">&#xebfc;</i> <span
            class="i-name">-fnt-icon-windy</span><span class="i-code">0xebfc</span></div>
    <div title="Code: 0xebfd" class="the-icons span3"><i class="demo-icon -fnt-icon-windy-rain">&#xebfd;</i> <span
            class="i-name">-fnt-icon-windy-rain</span><span class="i-code">0xebfd</span></div>
    <div title="Code: 0xebfe" class="the-icons span3"><i class="demo-icon -fnt-icon-snow-1">&#xebfe;</i> <span
            class="i-name">-fnt-icon-snow-1</span><span class="i-code">0xebfe</span></div>
    <div title="Code: 0xebff" class="the-icons span3"><i class="demo-icon -fnt-icon-snow-alt">&#xebff;</i> <span
            class="i-name">-fnt-icon-snow-alt</span><span class="i-code">0xebff</span></div>
</div>
<div class="row">
    <div title="Code: 0xec00" class="the-icons span3"><i class="demo-icon -fnt-icon-snow-heavy">&#xec00;</i> <span
            class="i-name">-fnt-icon-snow-heavy</span><span class="i-code">0xec00</span></div>
    <div title="Code: 0xec01" class="the-icons span3"><i class="demo-icon -fnt-icon-hail">&#xec01;</i> <span
            class="i-name">-fnt-icon-hail</span><span class="i-code">0xec01</span></div>
    <div title="Code: 0xec02" class="the-icons span3"><i class="demo-icon -fnt-icon-clouds">&#xec02;</i> <span
            class="i-name">-fnt-icon-clouds</span><span class="i-code">0xec02</span></div>
    <div title="Code: 0xec03" class="the-icons span3"><i class="demo-icon -fnt-icon-clouds-flash">&#xec03;</i> <span
            class="i-name">-fnt-icon-clouds-flash</span><span class="i-code">0xec03</span></div>
</div>
<div class="row">
    <div title="Code: 0xec04" class="the-icons span3"><i class="demo-icon -fnt-icon-mail-5">&#xec04;</i> <span
            class="i-name">-fnt-icon-mail-5</span><span class="i-code">0xec04</span></div>
    <div title="Code: 0xec05" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-5">&#xec05;</i> <span
            class="i-name">-fnt-icon-heart-5</span><span class="i-code">0xec05</span></div>
    <div title="Code: 0xec06" class="the-icons span3"><i class="demo-icon -fnt-icon-star-5">&#xec06;</i> <span
            class="i-name">-fnt-icon-star-5</span><span class="i-code">0xec06</span></div>
    <div title="Code: 0xec07" class="the-icons span3"><i class="demo-icon -fnt-icon-star-empty-2">&#xec07;</i> <span
            class="i-name">-fnt-icon-star-empty-2</span><span class="i-code">0xec07</span></div>
</div>
<div class="row">
    <div title="Code: 0xec08" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-4">&#xec08;</i> <span
            class="i-name">-fnt-icon-ok-4</span><span class="i-code">0xec08</span></div>
    <div title="Code: 0xec09" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-5">&#xec09;</i> <span
            class="i-name">-fnt-icon-cancel-5</span><span class="i-code">0xec09</span></div>
    <div title="Code: 0xec0a" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-5">&#xec0a;</i> <span
            class="i-name">-fnt-icon-plus-5</span><span class="i-code">0xec0a</span></div>
    <div title="Code: 0xec0b" class="the-icons span3"><i class="demo-icon -fnt-icon-help-circled-2">&#xec0b;</i> <span
            class="i-name">-fnt-icon-help-circled-2</span><span class="i-code">0xec0b</span></div>
</div>
<div class="row">
    <div title="Code: 0xec0c" class="the-icons span3"><i class="demo-icon -fnt-icon-help-circled-alt">&#xec0c;</i> <span
            class="i-name">-fnt-icon-help-circled-alt</span><span class="i-code">0xec0c</span></div>
    <div title="Code: 0xec0d" class="the-icons span3"><i class="demo-icon -fnt-icon-home-5">&#xec0d;</i> <span
            class="i-name">-fnt-icon-home-5</span><span class="i-code">0xec0d</span></div>
    <div title="Code: 0xec0e" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-5">&#xec0e;</i> <span
            class="i-name">-fnt-icon-pencil-5</span><span class="i-code">0xec0e</span></div>
    <div title="Code: 0xec0f" class="the-icons span3"><i class="demo-icon -fnt-icon-attention-4">&#xec0f;</i> <span
            class="i-name">-fnt-icon-attention-4</span><span class="i-code">0xec0f</span></div>
</div>
<div class="row">
    <div title="Code: 0xec10" class="the-icons span3"><i class="demo-icon -fnt-icon-attention-alt-1">&#xec10;</i> <span
            class="i-name">-fnt-icon-attention-alt-1</span><span class="i-code">0xec10</span></div>
    <div title="Code: 0xec11" class="the-icons span3"><i class="demo-icon -fnt-icon-cog-4">&#xec11;</i> <span
            class="i-name">-fnt-icon-cog-4</span><span class="i-code">0xec11</span></div>
    <div title="Code: 0xec12" class="the-icons span3"><i class="demo-icon -fnt-icon-mic-off">&#xec12;</i> <span
            class="i-name">-fnt-icon-mic-off</span><span class="i-code">0xec12</span></div>
    <div title="Code: 0xec13" class="the-icons span3"><i class="demo-icon -fnt-icon-clock-5">&#xec13;</i> <span
            class="i-name">-fnt-icon-clock-5</span><span class="i-code">0xec13</span></div>
</div>
<div class="row">
    <div title="Code: 0xec14" class="the-icons span3"><i class="demo-icon -fnt-icon-stopwatch-1">&#xec14;</i> <span
            class="i-name">-fnt-icon-stopwatch-1</span><span class="i-code">0xec14</span></div>
    <div title="Code: 0xec15" class="the-icons span3"><i class="demo-icon -fnt-icon-hourglass-5">&#xec15;</i> <span
            class="i-name">-fnt-icon-hourglass-5</span><span class="i-code">0xec15</span></div>
    <div title="Code: 0xec16" class="the-icons span3"><i class="demo-icon -fnt-icon-down-5">&#xec16;</i> <span
            class="i-name">-fnt-icon-down-5</span><span class="i-code">0xec16</span></div>
    <div title="Code: 0xec17" class="the-icons span3"><i class="demo-icon -fnt-icon-left-4">&#xec17;</i> <span
            class="i-name">-fnt-icon-left-4</span><span class="i-code">0xec17</span></div>
</div>
<div class="row">
    <div title="Code: 0xec18" class="the-icons span3"><i class="demo-icon -fnt-icon-right-4">&#xec18;</i> <span
            class="i-name">-fnt-icon-right-4</span><span class="i-code">0xec18</span></div>
    <div title="Code: 0xec19" class="the-icons span3"><i class="demo-icon -fnt-icon-up-5">&#xec19;</i> <span
            class="i-name">-fnt-icon-up-5</span><span class="i-code">0xec19</span></div>
    <div title="Code: 0xec1a" class="the-icons span3"><i class="demo-icon -fnt-icon-down-bold-1">&#xec1a;</i> <span
            class="i-name">-fnt-icon-down-bold-1</span><span class="i-code">0xec1a</span></div>
    <div title="Code: 0xec1b" class="the-icons span3"><i class="demo-icon -fnt-icon-left-bold-1">&#xec1b;</i> <span
            class="i-name">-fnt-icon-left-bold-1</span><span class="i-code">0xec1b</span></div>
</div>
<div class="row">
    <div title="Code: 0xec1c" class="the-icons span3"><i class="demo-icon -fnt-icon-right-bold-1">&#xec1c;</i> <span
            class="i-name">-fnt-icon-right-bold-1</span><span class="i-code">0xec1c</span></div>
    <div title="Code: 0xec1d" class="the-icons span3"><i class="demo-icon -fnt-icon-up-bold-1">&#xec1d;</i> <span
            class="i-name">-fnt-icon-up-bold-1</span><span class="i-code">0xec1d</span></div>
    <div title="Code: 0xec1e" class="the-icons span3"><i class="demo-icon -fnt-icon-down-fat">&#xec1e;</i> <span
            class="i-name">-fnt-icon-down-fat</span><span class="i-code">0xec1e</span></div>
    <div title="Code: 0xec1f" class="the-icons span3"><i class="demo-icon -fnt-icon-left-fat">&#xec1f;</i> <span
            class="i-name">-fnt-icon-left-fat</span><span class="i-code">0xec1f</span></div>
</div>
<div class="row">
    <div title="Code: 0xec20" class="the-icons span3"><i class="demo-icon -fnt-icon-right-fat">&#xec20;</i> <span
            class="i-name">-fnt-icon-right-fat</span><span class="i-code">0xec20</span></div>
    <div title="Code: 0xec21" class="the-icons span3"><i class="demo-icon -fnt-icon-up-fat">&#xec21;</i> <span
            class="i-name">-fnt-icon-up-fat</span><span class="i-code">0xec21</span></div>
    <div title="Code: 0xec22" class="the-icons span3"><i class="demo-icon -fnt-icon-flash-4">&#xec22;</i> <span
            class="i-name">-fnt-icon-flash-4</span><span class="i-code">0xec22</span></div>
    <div title="Code: 0xec23" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-5">&#xec23;</i> <span
            class="i-name">-fnt-icon-cloud-5</span><span class="i-code">0xec23</span></div>
</div>
<div class="row">
    <div title="Code: 0xec24" class="the-icons span3"><i class="demo-icon -fnt-icon-vector-pencil">&#xec24;</i> <span
            class="i-name">-fnt-icon-vector-pencil</span><span class="i-code">0xec24</span></div>
    <div title="Code: 0xec25" class="the-icons span3"><i class="demo-icon -fnt-icon-at-4">&#xec25;</i> <span
            class="i-name">-fnt-icon-at-4</span><span class="i-code">0xec25</span></div>
    <div title="Code: 0xec26" class="the-icons span3"><i class="demo-icon -fnt-icon-female-1">&#xec26;</i> <span
            class="i-name">-fnt-icon-female-1</span><span class="i-code">0xec26</span></div>
    <div title="Code: 0xec27" class="the-icons span3"><i class="demo-icon -fnt-icon-male-1">&#xec27;</i> <span
            class="i-name">-fnt-icon-male-1</span><span class="i-code">0xec27</span></div>
</div>
<div class="row">
    <div title="Code: 0xec28" class="the-icons span3"><i class="demo-icon -fnt-icon-king">&#xec28;</i> <span
            class="i-name">-fnt-icon-king</span><span class="i-code">0xec28</span></div>
    <div title="Code: 0xec29" class="the-icons span3"><i class="demo-icon -fnt-icon-anchor-2">&#xec29;</i> <span
            class="i-name">-fnt-icon-anchor-2</span><span class="i-code">0xec29</span></div>
    <div title="Code: 0xec2a" class="the-icons span3"><i class="demo-icon -fnt-icon-aboveground-rail">&#xec2a;</i> <span
            class="i-name">-fnt-icon-aboveground-rail</span><span class="i-code">0xec2a</span></div>
    <div title="Code: 0xec2b" class="the-icons span3"><i class="demo-icon -fnt-icon-airfield">&#xec2b;</i> <span
            class="i-name">-fnt-icon-airfield</span><span class="i-code">0xec2b</span></div>
</div>
<div class="row">
    <div title="Code: 0xec2c" class="the-icons span3"><i class="demo-icon -fnt-icon-airport">&#xec2c;</i> <span
            class="i-name">-fnt-icon-airport</span><span class="i-code">0xec2c</span></div>
    <div title="Code: 0xec2d" class="the-icons span3"><i class="demo-icon -fnt-icon-art-gallery">&#xec2d;</i> <span
            class="i-name">-fnt-icon-art-gallery</span><span class="i-code">0xec2d</span></div>
    <div title="Code: 0xec2e" class="the-icons span3"><i class="demo-icon -fnt-icon-bar">&#xec2e;</i> <span
            class="i-name">-fnt-icon-bar</span><span class="i-code">0xec2e</span></div>
    <div title="Code: 0xec2f" class="the-icons span3"><i class="demo-icon -fnt-icon-baseball">&#xec2f;</i> <span
            class="i-name">-fnt-icon-baseball</span><span class="i-code">0xec2f</span></div>
</div>
<div class="row">
    <div title="Code: 0xec30" class="the-icons span3"><i class="demo-icon -fnt-icon-basketball">&#xec30;</i> <span
            class="i-name">-fnt-icon-basketball</span><span class="i-code">0xec30</span></div>
    <div title="Code: 0xec31" class="the-icons span3"><i class="demo-icon -fnt-icon-beer-2">&#xec31;</i> <span
            class="i-name">-fnt-icon-beer-2</span><span class="i-code">0xec31</span></div>
    <div title="Code: 0xec32" class="the-icons span3"><i class="demo-icon -fnt-icon-belowground-rail">&#xec32;</i> <span
            class="i-name">-fnt-icon-belowground-rail</span><span class="i-code">0xec32</span></div>
    <div title="Code: 0xec33" class="the-icons span3"><i class="demo-icon -fnt-icon-bicycle-1">&#xec33;</i> <span
            class="i-name">-fnt-icon-bicycle-1</span><span class="i-code">0xec33</span></div>
</div>
<div class="row">
    <div title="Code: 0xec34" class="the-icons span3"><i class="demo-icon -fnt-icon-bus-1">&#xec34;</i> <span
            class="i-name">-fnt-icon-bus-1</span><span class="i-code">0xec34</span></div>
    <div title="Code: 0xec35" class="the-icons span3"><i class="demo-icon -fnt-icon-cafe">&#xec35;</i> <span
            class="i-name">-fnt-icon-cafe</span><span class="i-code">0xec35</span></div>
    <div title="Code: 0xec36" class="the-icons span3"><i class="demo-icon -fnt-icon-campsite">&#xec36;</i> <span
            class="i-name">-fnt-icon-campsite</span><span class="i-code">0xec36</span></div>
    <div title="Code: 0xec37" class="the-icons span3"><i class="demo-icon -fnt-icon-cemetery">&#xec37;</i> <span
            class="i-name">-fnt-icon-cemetery</span><span class="i-code">0xec37</span></div>
</div>
<div class="row">
    <div title="Code: 0xec38" class="the-icons span3"><i class="demo-icon -fnt-icon-cinema">&#xec38;</i> <span
            class="i-name">-fnt-icon-cinema</span><span class="i-code">0xec38</span></div>
    <div title="Code: 0xec39" class="the-icons span3"><i class="demo-icon -fnt-icon-college">&#xec39;</i> <span
            class="i-name">-fnt-icon-college</span><span class="i-code">0xec39</span></div>
    <div title="Code: 0xec3a" class="the-icons span3"><i class="demo-icon -fnt-icon-commerical-building">&#xec3a;</i>
        <span class="i-name">-fnt-icon-commerical-building</span><span class="i-code">0xec3a</span></div>
    <div title="Code: 0xec3b" class="the-icons span3"><i class="demo-icon -fnt-icon-credit-card-3">&#xec3b;</i> <span
            class="i-name">-fnt-icon-credit-card-3</span><span class="i-code">0xec3b</span></div>
</div>
<div class="row">
    <div title="Code: 0xec3c" class="the-icons span3"><i class="demo-icon -fnt-icon-cricket">&#xec3c;</i> <span
            class="i-name">-fnt-icon-cricket</span><span class="i-code">0xec3c</span></div>
    <div title="Code: 0xec3d" class="the-icons span3"><i class="demo-icon -fnt-icon-embassy">&#xec3d;</i> <span
            class="i-name">-fnt-icon-embassy</span><span class="i-code">0xec3d</span></div>
    <div title="Code: 0xec3e" class="the-icons span3"><i class="demo-icon -fnt-icon-fast-food">&#xec3e;</i> <span
            class="i-name">-fnt-icon-fast-food</span><span class="i-code">0xec3e</span></div>
    <div title="Code: 0xec3f" class="the-icons span3"><i class="demo-icon -fnt-icon-ferry">&#xec3f;</i> <span
            class="i-name">-fnt-icon-ferry</span><span class="i-code">0xec3f</span></div>
</div>
<div class="row">
    <div title="Code: 0xec40" class="the-icons span3"><i class="demo-icon -fnt-icon-fire-station">&#xec40;</i> <span
            class="i-name">-fnt-icon-fire-station</span><span class="i-code">0xec40</span></div>
    <div title="Code: 0xec41" class="the-icons span3"><i class="demo-icon -fnt-icon-football">&#xec41;</i> <span
            class="i-name">-fnt-icon-football</span><span class="i-code">0xec41</span></div>
    <div title="Code: 0xec42" class="the-icons span3"><i class="demo-icon -fnt-icon-fuel">&#xec42;</i> <span
            class="i-name">-fnt-icon-fuel</span><span class="i-code">0xec42</span></div>
    <div title="Code: 0xec43" class="the-icons span3"><i class="demo-icon -fnt-icon-garden">&#xec43;</i> <span
            class="i-name">-fnt-icon-garden</span><span class="i-code">0xec43</span></div>
</div>
<div class="row">
    <div title="Code: 0xec44" class="the-icons span3"><i class="demo-icon -fnt-icon-giraffe">&#xec44;</i> <span
            class="i-name">-fnt-icon-giraffe</span><span class="i-code">0xec44</span></div>
    <div title="Code: 0xec45" class="the-icons span3"><i class="demo-icon -fnt-icon-golf">&#xec45;</i> <span
            class="i-name">-fnt-icon-golf</span><span class="i-code">0xec45</span></div>
    <div title="Code: 0xec46" class="the-icons span3"><i class="demo-icon -fnt-icon-grocery-store">&#xec46;</i> <span
            class="i-name">-fnt-icon-grocery-store</span><span class="i-code">0xec46</span></div>
    <div title="Code: 0xec47" class="the-icons span3"><i class="demo-icon -fnt-icon-harbor">&#xec47;</i> <span
            class="i-name">-fnt-icon-harbor</span><span class="i-code">0xec47</span></div>
</div>
<div class="row">
    <div title="Code: 0xec48" class="the-icons span3"><i class="demo-icon -fnt-icon-heliport">&#xec48;</i> <span
            class="i-name">-fnt-icon-heliport</span><span class="i-code">0xec48</span></div>
    <div title="Code: 0xec49" class="the-icons span3"><i class="demo-icon -fnt-icon-hospital-1">&#xec49;</i> <span
            class="i-name">-fnt-icon-hospital-1</span><span class="i-code">0xec49</span></div>
    <div title="Code: 0xec4a" class="the-icons span3"><i class="demo-icon -fnt-icon-industrial-building">&#xec4a;</i>
        <span class="i-name">-fnt-icon-industrial-building</span><span class="i-code">0xec4a</span></div>
    <div title="Code: 0xec4b" class="the-icons span3"><i class="demo-icon -fnt-icon-library">&#xec4b;</i> <span
            class="i-name">-fnt-icon-library</span><span class="i-code">0xec4b</span></div>
</div>
<div class="row">
    <div title="Code: 0xec4c" class="the-icons span3"><i class="demo-icon -fnt-icon-lodging">&#xec4c;</i> <span
            class="i-name">-fnt-icon-lodging</span><span class="i-code">0xec4c</span></div>
    <div title="Code: 0xec4d" class="the-icons span3"><i class="demo-icon -fnt-icon-london-underground">&#xec4d;</i>
        <span class="i-name">-fnt-icon-london-underground</span><span class="i-code">0xec4d</span></div>
    <div title="Code: 0xec4e" class="the-icons span3"><i class="demo-icon -fnt-icon-minefield">&#xec4e;</i> <span
            class="i-name">-fnt-icon-minefield</span><span class="i-code">0xec4e</span></div>
    <div title="Code: 0xec4f" class="the-icons span3"><i class="demo-icon -fnt-icon-monument">&#xec4f;</i> <span
            class="i-name">-fnt-icon-monument</span><span class="i-code">0xec4f</span></div>
</div>
<div class="row">
    <div title="Code: 0xec50" class="the-icons span3"><i class="demo-icon -fnt-icon-museum">&#xec50;</i> <span
            class="i-name">-fnt-icon-museum</span><span class="i-code">0xec50</span></div>
    <div title="Code: 0xec51" class="the-icons span3"><i class="demo-icon -fnt-icon-pharmacy">&#xec51;</i> <span
            class="i-name">-fnt-icon-pharmacy</span><span class="i-code">0xec51</span></div>
    <div title="Code: 0xec52" class="the-icons span3"><i class="demo-icon -fnt-icon-pitch">&#xec52;</i> <span
            class="i-name">-fnt-icon-pitch</span><span class="i-code">0xec52</span></div>
    <div title="Code: 0xec53" class="the-icons span3"><i class="demo-icon -fnt-icon-police">&#xec53;</i> <span
            class="i-name">-fnt-icon-police</span><span class="i-code">0xec53</span></div>
</div>
<div class="row">
    <div title="Code: 0xec54" class="the-icons span3"><i class="demo-icon -fnt-icon-post">&#xec54;</i> <span
            class="i-name">-fnt-icon-post</span><span class="i-code">0xec54</span></div>
    <div title="Code: 0xec55" class="the-icons span3"><i class="demo-icon -fnt-icon-prison">&#xec55;</i> <span
            class="i-name">-fnt-icon-prison</span><span class="i-code">0xec55</span></div>
    <div title="Code: 0xec56" class="the-icons span3"><i class="demo-icon -fnt-icon-rail">&#xec56;</i> <span
            class="i-name">-fnt-icon-rail</span><span class="i-code">0xec56</span></div>
    <div title="Code: 0xec57" class="the-icons span3"><i class="demo-icon -fnt-icon-religious-christian">&#xec57;</i>
        <span class="i-name">-fnt-icon-religious-christian</span><span class="i-code">0xec57</span></div>
</div>
<div class="row">
    <div title="Code: 0xec58" class="the-icons span3"><i class="demo-icon -fnt-icon-religious-islam">&#xec58;</i> <span
            class="i-name">-fnt-icon-religious-islam</span><span class="i-code">0xec58</span></div>
    <div title="Code: 0xec59" class="the-icons span3"><i class="demo-icon -fnt-icon-religious-jewish">&#xec59;</i> <span
            class="i-name">-fnt-icon-religious-jewish</span><span class="i-code">0xec59</span></div>
    <div title="Code: 0xec5a" class="the-icons span3"><i class="demo-icon -fnt-icon-restaurant">&#xec5a;</i> <span
            class="i-name">-fnt-icon-restaurant</span><span class="i-code">0xec5a</span></div>
    <div title="Code: 0xec5b" class="the-icons span3"><i class="demo-icon -fnt-icon-roadblock">&#xec5b;</i> <span
            class="i-name">-fnt-icon-roadblock</span><span class="i-code">0xec5b</span></div>
</div>
<div class="row">
    <div title="Code: 0xec5c" class="the-icons span3"><i class="demo-icon -fnt-icon-school">&#xec5c;</i> <span
            class="i-name">-fnt-icon-school</span><span class="i-code">0xec5c</span></div>
    <div title="Code: 0xec5d" class="the-icons span3"><i class="demo-icon -fnt-icon-shop">&#xec5d;</i> <span
            class="i-name">-fnt-icon-shop</span><span class="i-code">0xec5d</span></div>
    <div title="Code: 0xec5e" class="the-icons span3"><i class="demo-icon -fnt-icon-skiing">&#xec5e;</i> <span
            class="i-name">-fnt-icon-skiing</span><span class="i-code">0xec5e</span></div>
    <div title="Code: 0xec5f" class="the-icons span3"><i class="demo-icon -fnt-icon-soccer">&#xec5f;</i> <span
            class="i-name">-fnt-icon-soccer</span><span class="i-code">0xec5f</span></div>
</div>
<div class="row">
    <div title="Code: 0xec60" class="the-icons span3"><i class="demo-icon -fnt-icon-swimming">&#xec60;</i> <span
            class="i-name">-fnt-icon-swimming</span><span class="i-code">0xec60</span></div>
    <div title="Code: 0xec61" class="the-icons span3"><i class="demo-icon -fnt-icon-tennis">&#xec61;</i> <span
            class="i-name">-fnt-icon-tennis</span><span class="i-code">0xec61</span></div>
    <div title="Code: 0xec62" class="the-icons span3"><i class="demo-icon -fnt-icon-theatre">&#xec62;</i> <span
            class="i-name">-fnt-icon-theatre</span><span class="i-code">0xec62</span></div>
    <div title="Code: 0xec63" class="the-icons span3"><i class="demo-icon -fnt-icon-toilet">&#xec63;</i> <span
            class="i-name">-fnt-icon-toilet</span><span class="i-code">0xec63</span></div>
</div>
<div class="row">
    <div title="Code: 0xec64" class="the-icons span3"><i class="demo-icon -fnt-icon-town-hall">&#xec64;</i> <span
            class="i-name">-fnt-icon-town-hall</span><span class="i-code">0xec64</span></div>
    <div title="Code: 0xec65" class="the-icons span3"><i class="demo-icon -fnt-icon-trash-6">&#xec65;</i> <span
            class="i-name">-fnt-icon-trash-6</span><span class="i-code">0xec65</span></div>
    <div title="Code: 0xec66" class="the-icons span3"><i class="demo-icon -fnt-icon-tree-2">&#xec66;</i> <span
            class="i-name">-fnt-icon-tree-2</span><span class="i-code">0xec66</span></div>
    <div title="Code: 0xec67" class="the-icons span3"><i class="demo-icon -fnt-icon-tree-3">&#xec67;</i> <span
            class="i-name">-fnt-icon-tree-3</span><span class="i-code">0xec67</span></div>
</div>
<div class="row">
    <div title="Code: 0xec68" class="the-icons span3"><i class="demo-icon -fnt-icon-warehouse">&#xec68;</i> <span
            class="i-name">-fnt-icon-warehouse</span><span class="i-code">0xec68</span></div>
    <div title="Code: 0xec69" class="the-icons span3"><i class="demo-icon -fnt-icon-duckduckgo">&#xec69;</i> <span
            class="i-name">-fnt-icon-duckduckgo</span><span class="i-code">0xec69</span></div>
    <div title="Code: 0xec6a" class="the-icons span3"><i class="demo-icon -fnt-icon-aim">&#xec6a;</i> <span
            class="i-name">-fnt-icon-aim</span><span class="i-code">0xec6a</span></div>
    <div title="Code: 0xec6b" class="the-icons span3"><i class="demo-icon -fnt-icon-delicious-1">&#xec6b;</i> <span
            class="i-name">-fnt-icon-delicious-1</span><span class="i-code">0xec6b</span></div>
</div>
<div class="row">
    <div title="Code: 0xec6c" class="the-icons span3"><i class="demo-icon -fnt-icon-paypal-2">&#xec6c;</i> <span
            class="i-name">-fnt-icon-paypal-2</span><span class="i-code">0xec6c</span></div>
    <div title="Code: 0xec6d" class="the-icons span3"><i class="demo-icon -fnt-icon-flattr-1">&#xec6d;</i> <span
            class="i-name">-fnt-icon-flattr-1</span><span class="i-code">0xec6d</span></div>
    <div title="Code: 0xec6e" class="the-icons span3"><i class="demo-icon -fnt-icon-android-1">&#xec6e;</i> <span
            class="i-name">-fnt-icon-android-1</span><span class="i-code">0xec6e</span></div>
    <div title="Code: 0xec6f" class="the-icons span3"><i class="demo-icon -fnt-icon-eventful">&#xec6f;</i> <span
            class="i-name">-fnt-icon-eventful</span><span class="i-code">0xec6f</span></div>
</div>
<div class="row">
    <div title="Code: 0xec70" class="the-icons span3"><i class="demo-icon -fnt-icon-smashmag">&#xec70;</i> <span
            class="i-name">-fnt-icon-smashmag</span><span class="i-code">0xec70</span></div>
    <div title="Code: 0xec71" class="the-icons span3"><i class="demo-icon -fnt-icon-gplus-3">&#xec71;</i> <span
            class="i-name">-fnt-icon-gplus-3</span><span class="i-code">0xec71</span></div>
    <div title="Code: 0xec72" class="the-icons span3"><i class="demo-icon -fnt-icon-wikipedia">&#xec72;</i> <span
            class="i-name">-fnt-icon-wikipedia</span><span class="i-code">0xec72</span></div>
    <div title="Code: 0xec73" class="the-icons span3"><i class="demo-icon -fnt-icon-lanyrd">&#xec73;</i> <span
            class="i-name">-fnt-icon-lanyrd</span><span class="i-code">0xec73</span></div>
</div>
<div class="row">
    <div title="Code: 0xec74" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-6">&#xec74;</i> <span
            class="i-name">-fnt-icon-calendar-6</span><span class="i-code">0xec74</span></div>
    <div title="Code: 0xec75" class="the-icons span3"><i class="demo-icon -fnt-icon-stumbleupon-2">&#xec75;</i> <span
            class="i-name">-fnt-icon-stumbleupon-2</span><span class="i-code">0xec75</span></div>
    <div title="Code: 0xec76" class="the-icons span3"><i class="demo-icon -fnt-icon-fivehundredpx">&#xec76;</i> <span
            class="i-name">-fnt-icon-fivehundredpx</span><span class="i-code">0xec76</span></div>
    <div title="Code: 0xec77" class="the-icons span3"><i class="demo-icon -fnt-icon-pinterest-3">&#xec77;</i> <span
            class="i-name">-fnt-icon-pinterest-3</span><span class="i-code">0xec77</span></div>
</div>
<div class="row">
    <div title="Code: 0xec78" class="the-icons span3"><i class="demo-icon -fnt-icon-bitcoin-1">&#xec78;</i> <span
            class="i-name">-fnt-icon-bitcoin-1</span><span class="i-code">0xec78</span></div>
    <div title="Code: 0xec79" class="the-icons span3"><i class="demo-icon -fnt-icon-w3c">&#xec79;</i> <span
            class="i-name">-fnt-icon-w3c</span><span class="i-code">0xec79</span></div>
    <div title="Code: 0xec7a" class="the-icons span3"><i class="demo-icon -fnt-icon-foursquare-1">&#xec7a;</i> <span
            class="i-name">-fnt-icon-foursquare-1</span><span class="i-code">0xec7a</span></div>
    <div title="Code: 0xec7b" class="the-icons span3"><i class="demo-icon -fnt-icon-html5-1">&#xec7b;</i> <span
            class="i-name">-fnt-icon-html5-1</span><span class="i-code">0xec7b</span></div>
</div>
<div class="row">
    <div title="Code: 0xec7c" class="the-icons span3"><i class="demo-icon -fnt-icon-ie-1">&#xec7c;</i> <span
            class="i-name">-fnt-icon-ie-1</span><span class="i-code">0xec7c</span></div>
    <div title="Code: 0xec7d" class="the-icons span3"><i class="demo-icon -fnt-icon-call">&#xec7d;</i> <span
            class="i-name">-fnt-icon-call</span><span class="i-code">0xec7d</span></div>
    <div title="Code: 0xec7e" class="the-icons span3"><i class="demo-icon -fnt-icon-grooveshark">&#xec7e;</i> <span
            class="i-name">-fnt-icon-grooveshark</span><span class="i-code">0xec7e</span></div>
    <div title="Code: 0xec7f" class="the-icons span3"><i class="demo-icon -fnt-icon-ninetyninedesigns">&#xec7f;</i>
        <span class="i-name">-fnt-icon-ninetyninedesigns</span><span class="i-code">0xec7f</span></div>
</div>
<div class="row">
    <div title="Code: 0xec80" class="the-icons span3"><i class="demo-icon -fnt-icon-forrst">&#xec80;</i> <span
            class="i-name">-fnt-icon-forrst</span><span class="i-code">0xec80</span></div>
    <div title="Code: 0xec81" class="the-icons span3"><i class="demo-icon -fnt-icon-digg-1">&#xec81;</i> <span
            class="i-name">-fnt-icon-digg-1</span><span class="i-code">0xec81</span></div>
    <div title="Code: 0xec82" class="the-icons span3"><i class="demo-icon -fnt-icon-spotify-2">&#xec82;</i> <span
            class="i-name">-fnt-icon-spotify-2</span><span class="i-code">0xec82</span></div>
    <div title="Code: 0xec83" class="the-icons span3"><i class="demo-icon -fnt-icon-reddit-1">&#xec83;</i> <span
            class="i-name">-fnt-icon-reddit-1</span><span class="i-code">0xec83</span></div>
</div>
<div class="row">
    <div title="Code: 0xec84" class="the-icons span3"><i class="demo-icon -fnt-icon-guest">&#xec84;</i> <span
            class="i-name">-fnt-icon-guest</span><span class="i-code">0xec84</span></div>
    <div title="Code: 0xec85" class="the-icons span3"><i class="demo-icon -fnt-icon-gowalla">&#xec85;</i> <span
            class="i-name">-fnt-icon-gowalla</span><span class="i-code">0xec85</span></div>
    <div title="Code: 0xec86" class="the-icons span3"><i class="demo-icon -fnt-icon-appstore">&#xec86;</i> <span
            class="i-name">-fnt-icon-appstore</span><span class="i-code">0xec86</span></div>
    <div title="Code: 0xec87" class="the-icons span3"><i class="demo-icon -fnt-icon-blogger">&#xec87;</i> <span
            class="i-name">-fnt-icon-blogger</span><span class="i-code">0xec87</span></div>
</div>
<div class="row">
    <div title="Code: 0xec88" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-2">&#xec88;</i> <span
            class="i-name">-fnt-icon-cc-2</span><span class="i-code">0xec88</span></div>
    <div title="Code: 0xec89" class="the-icons span3"><i class="demo-icon -fnt-icon-dribbble-4">&#xec89;</i> <span
            class="i-name">-fnt-icon-dribbble-4</span><span class="i-code">0xec89</span></div>
    <div title="Code: 0xec8a" class="the-icons span3"><i class="demo-icon -fnt-icon-evernote-1">&#xec8a;</i> <span
            class="i-name">-fnt-icon-evernote-1</span><span class="i-code">0xec8a</span></div>
    <div title="Code: 0xec8b" class="the-icons span3"><i class="demo-icon -fnt-icon-flickr-3">&#xec8b;</i> <span
            class="i-name">-fnt-icon-flickr-3</span><span class="i-code">0xec8b</span></div>
</div>
<div class="row">
    <div title="Code: 0xec8c" class="the-icons span3"><i class="demo-icon -fnt-icon-google-1">&#xec8c;</i> <span
            class="i-name">-fnt-icon-google-1</span><span class="i-code">0xec8c</span></div>
    <div title="Code: 0xec8d" class="the-icons span3"><i class="demo-icon -fnt-icon-viadeo-1">&#xec8d;</i> <span
            class="i-name">-fnt-icon-viadeo-1</span><span class="i-code">0xec8d</span></div>
    <div title="Code: 0xec8e" class="the-icons span3"><i class="demo-icon -fnt-icon-instapaper">&#xec8e;</i> <span
            class="i-name">-fnt-icon-instapaper</span><span class="i-code">0xec8e</span></div>
    <div title="Code: 0xec8f" class="the-icons span3"><i class="demo-icon -fnt-icon-weibo-1">&#xec8f;</i> <span
            class="i-name">-fnt-icon-weibo-1</span><span class="i-code">0xec8f</span></div>
</div>
<div class="row">
    <div title="Code: 0xec90" class="the-icons span3"><i class="demo-icon -fnt-icon-klout">&#xec90;</i> <span
            class="i-name">-fnt-icon-klout</span><span class="i-code">0xec90</span></div>
    <div title="Code: 0xec91" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-4">&#xec91;</i> <span
            class="i-name">-fnt-icon-linkedin-4</span><span class="i-code">0xec91</span></div>
    <div title="Code: 0xec92" class="the-icons span3"><i class="demo-icon -fnt-icon-meetup-1">&#xec92;</i> <span
            class="i-name">-fnt-icon-meetup-1</span><span class="i-code">0xec92</span></div>
    <div title="Code: 0xec93" class="the-icons span3"><i class="demo-icon -fnt-icon-vk">&#xec93;</i> <span
            class="i-name">-fnt-icon-vk</span><span class="i-code">0xec93</span></div>
</div>
<div class="row">
    <div title="Code: 0xec94" class="the-icons span3"><i class="demo-icon -fnt-icon-plancast">&#xec94;</i> <span
            class="i-name">-fnt-icon-plancast</span><span class="i-code">0xec94</span></div>
    <div title="Code: 0xec95" class="the-icons span3"><i class="demo-icon -fnt-icon-disqus">&#xec95;</i> <span
            class="i-name">-fnt-icon-disqus</span><span class="i-code">0xec95</span></div>
    <div title="Code: 0xec96" class="the-icons span3"><i class="demo-icon -fnt-icon-rss-5">&#xec96;</i> <span
            class="i-name">-fnt-icon-rss-5</span><span class="i-code">0xec96</span></div>
    <div title="Code: 0xec97" class="the-icons span3"><i class="demo-icon -fnt-icon-skype-3">&#xec97;</i> <span
            class="i-name">-fnt-icon-skype-3</span><span class="i-code">0xec97</span></div>
</div>
<div class="row">
    <div title="Code: 0xec98" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-5">&#xec98;</i> <span
            class="i-name">-fnt-icon-twitter-5</span><span class="i-code">0xec98</span></div>
    <div title="Code: 0xec99" class="the-icons span3"><i class="demo-icon -fnt-icon-youtube-2">&#xec99;</i> <span
            class="i-name">-fnt-icon-youtube-2</span><span class="i-code">0xec99</span></div>
    <div title="Code: 0xec9a" class="the-icons span3"><i class="demo-icon -fnt-icon-vimeo-3">&#xec9a;</i> <span
            class="i-name">-fnt-icon-vimeo-3</span><span class="i-code">0xec9a</span></div>
    <div title="Code: 0xec9b" class="the-icons span3"><i class="demo-icon -fnt-icon-windows-1">&#xec9b;</i> <span
            class="i-name">-fnt-icon-windows-1</span><span class="i-code">0xec9b</span></div>
</div>
<div class="row">
    <div title="Code: 0xec9c" class="the-icons span3"><i class="demo-icon -fnt-icon-xing-1">&#xec9c;</i> <span
            class="i-name">-fnt-icon-xing-1</span><span class="i-code">0xec9c</span></div>
    <div title="Code: 0xec9d" class="the-icons span3"><i class="demo-icon -fnt-icon-yahoo-1">&#xec9d;</i> <span
            class="i-name">-fnt-icon-yahoo-1</span><span class="i-code">0xec9d</span></div>
    <div title="Code: 0xec9e" class="the-icons span3"><i class="demo-icon -fnt-icon-chrome-2">&#xec9e;</i> <span
            class="i-name">-fnt-icon-chrome-2</span><span class="i-code">0xec9e</span></div>
    <div title="Code: 0xec9f" class="the-icons span3"><i class="demo-icon -fnt-icon-email">&#xec9f;</i> <span
            class="i-name">-fnt-icon-email</span><span class="i-code">0xec9f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeca0" class="the-icons span3"><i class="demo-icon -fnt-icon-macstore">&#xeca0;</i> <span
            class="i-name">-fnt-icon-macstore</span><span class="i-code">0xeca0</span></div>
    <div title="Code: 0xeca1" class="the-icons span3"><i class="demo-icon -fnt-icon-myspace">&#xeca1;</i> <span
            class="i-name">-fnt-icon-myspace</span><span class="i-code">0xeca1</span></div>
    <div title="Code: 0xeca2" class="the-icons span3"><i class="demo-icon -fnt-icon-podcast-1">&#xeca2;</i> <span
            class="i-name">-fnt-icon-podcast-1</span><span class="i-code">0xeca2</span></div>
    <div title="Code: 0xeca3" class="the-icons span3"><i class="demo-icon -fnt-icon-amazon-1">&#xeca3;</i> <span
            class="i-name">-fnt-icon-amazon-1</span><span class="i-code">0xeca3</span></div>
</div>
<div class="row">
    <div title="Code: 0xeca4" class="the-icons span3"><i class="demo-icon -fnt-icon-steam-1">&#xeca4;</i> <span
            class="i-name">-fnt-icon-steam-1</span><span class="i-code">0xeca4</span></div>
    <div title="Code: 0xeca5" class="the-icons span3"><i class="demo-icon -fnt-icon-cloudapp">&#xeca5;</i> <span
            class="i-name">-fnt-icon-cloudapp</span><span class="i-code">0xeca5</span></div>
    <div title="Code: 0xeca6" class="the-icons span3"><i class="demo-icon -fnt-icon-dropbox-2">&#xeca6;</i> <span
            class="i-name">-fnt-icon-dropbox-2</span><span class="i-code">0xeca6</span></div>
    <div title="Code: 0xeca7" class="the-icons span3"><i class="demo-icon -fnt-icon-ebay">&#xeca7;</i> <span
            class="i-name">-fnt-icon-ebay</span><span class="i-code">0xeca7</span></div>
</div>
<div class="row">
    <div title="Code: 0xeca8" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-5">&#xeca8;</i> <span
            class="i-name">-fnt-icon-facebook-5</span><span class="i-code">0xeca8</span></div>
    <div title="Code: 0xeca9" class="the-icons span3"><i class="demo-icon -fnt-icon-github-4">&#xeca9;</i> <span
            class="i-name">-fnt-icon-github-4</span><span class="i-code">0xeca9</span></div>
    <div title="Code: 0xecaa" class="the-icons span3"><i class="demo-icon -fnt-icon-github-circled-4">&#xecaa;</i> <span
            class="i-name">-fnt-icon-github-circled-4</span><span class="i-code">0xecaa</span></div>
    <div title="Code: 0xecab" class="the-icons span3"><i class="demo-icon -fnt-icon-googleplay">&#xecab;</i> <span
            class="i-name">-fnt-icon-googleplay</span><span class="i-code">0xecab</span></div>
</div>
<div class="row">
    <div title="Code: 0xecac" class="the-icons span3"><i class="demo-icon -fnt-icon-itunes">&#xecac;</i> <span
            class="i-name">-fnt-icon-itunes</span><span class="i-code">0xecac</span></div>
    <div title="Code: 0xecad" class="the-icons span3"><i class="demo-icon -fnt-icon-plurk">&#xecad;</i> <span
            class="i-name">-fnt-icon-plurk</span><span class="i-code">0xecad</span></div>
    <div title="Code: 0xecae" class="the-icons span3"><i class="demo-icon -fnt-icon-songkick">&#xecae;</i> <span
            class="i-name">-fnt-icon-songkick</span><span class="i-code">0xecae</span></div>
    <div title="Code: 0xecaf" class="the-icons span3"><i class="demo-icon -fnt-icon-lastfm-3">&#xecaf;</i> <span
            class="i-name">-fnt-icon-lastfm-3</span><span class="i-code">0xecaf</span></div>
</div>
<div class="row">
    <div title="Code: 0xecb0" class="the-icons span3"><i class="demo-icon -fnt-icon-gmail">&#xecb0;</i> <span
            class="i-name">-fnt-icon-gmail</span><span class="i-code">0xecb0</span></div>
    <div title="Code: 0xecb1" class="the-icons span3"><i class="demo-icon -fnt-icon-pinboard">&#xecb1;</i> <span
            class="i-name">-fnt-icon-pinboard</span><span class="i-code">0xecb1</span></div>
    <div title="Code: 0xecb2" class="the-icons span3"><i class="demo-icon -fnt-icon-openid-1">&#xecb2;</i> <span
            class="i-name">-fnt-icon-openid-1</span><span class="i-code">0xecb2</span></div>
    <div title="Code: 0xecb3" class="the-icons span3"><i class="demo-icon -fnt-icon-quora-1">&#xecb3;</i> <span
            class="i-name">-fnt-icon-quora-1</span><span class="i-code">0xecb3</span></div>
</div>
<div class="row">
    <div title="Code: 0xecb4" class="the-icons span3"><i class="demo-icon -fnt-icon-soundcloud-3">&#xecb4;</i> <span
            class="i-name">-fnt-icon-soundcloud-3</span><span class="i-code">0xecb4</span></div>
    <div title="Code: 0xecb5" class="the-icons span3"><i class="demo-icon -fnt-icon-tumblr-2">&#xecb5;</i> <span
            class="i-name">-fnt-icon-tumblr-2</span><span class="i-code">0xecb5</span></div>
    <div title="Code: 0xecb6" class="the-icons span3"><i class="demo-icon -fnt-icon-eventasaurus">&#xecb6;</i> <span
            class="i-name">-fnt-icon-eventasaurus</span><span class="i-code">0xecb6</span></div>
    <div title="Code: 0xecb7" class="the-icons span3"><i class="demo-icon -fnt-icon-wordpress-1">&#xecb7;</i> <span
            class="i-name">-fnt-icon-wordpress-1</span><span class="i-code">0xecb7</span></div>
</div>
<div class="row">
    <div title="Code: 0xecb8" class="the-icons span3"><i class="demo-icon -fnt-icon-yelp-1">&#xecb8;</i> <span
            class="i-name">-fnt-icon-yelp-1</span><span class="i-code">0xecb8</span></div>
    <div title="Code: 0xecb9" class="the-icons span3"><i class="demo-icon -fnt-icon-intensedebate">&#xecb9;</i> <span
            class="i-name">-fnt-icon-intensedebate</span><span class="i-code">0xecb9</span></div>
    <div title="Code: 0xecba" class="the-icons span3"><i class="demo-icon -fnt-icon-eventbrite">&#xecba;</i> <span
            class="i-name">-fnt-icon-eventbrite</span><span class="i-code">0xecba</span></div>
    <div title="Code: 0xecbb" class="the-icons span3"><i class="demo-icon -fnt-icon-scribd-1">&#xecbb;</i> <span
            class="i-name">-fnt-icon-scribd-1</span><span class="i-code">0xecbb</span></div>
</div>
<div class="row">
    <div title="Code: 0xecbc" class="the-icons span3"><i class="demo-icon -fnt-icon-posterous">&#xecbc;</i> <span
            class="i-name">-fnt-icon-posterous</span><span class="i-code">0xecbc</span></div>
    <div title="Code: 0xecbd" class="the-icons span3"><i class="demo-icon -fnt-icon-stripe">&#xecbd;</i> <span
            class="i-name">-fnt-icon-stripe</span><span class="i-code">0xecbd</span></div>
    <div title="Code: 0xecbe" class="the-icons span3"><i class="demo-icon -fnt-icon-opentable">&#xecbe;</i> <span
            class="i-name">-fnt-icon-opentable</span><span class="i-code">0xecbe</span></div>
    <div title="Code: 0xecbf" class="the-icons span3"><i class="demo-icon -fnt-icon-cart">&#xecbf;</i> <span
            class="i-name">-fnt-icon-cart</span><span class="i-code">0xecbf</span></div>
</div>
<div class="row">
    <div title="Code: 0xecc0" class="the-icons span3"><i class="demo-icon -fnt-icon-print-5">&#xecc0;</i> <span
            class="i-name">-fnt-icon-print-5</span><span class="i-code">0xecc0</span></div>
    <div title="Code: 0xecc1" class="the-icons span3"><i class="demo-icon -fnt-icon-angellist-1">&#xecc1;</i> <span
            class="i-name">-fnt-icon-angellist-1</span><span class="i-code">0xecc1</span></div>
    <div title="Code: 0xecc2" class="the-icons span3"><i class="demo-icon -fnt-icon-instagram-3">&#xecc2;</i> <span
            class="i-name">-fnt-icon-instagram-3</span><span class="i-code">0xecc2</span></div>
    <div title="Code: 0xecc3" class="the-icons span3"><i class="demo-icon -fnt-icon-dwolla">&#xecc3;</i> <span
            class="i-name">-fnt-icon-dwolla</span><span class="i-code">0xecc3</span></div>
</div>
<div class="row">
    <div title="Code: 0xecc4" class="the-icons span3"><i class="demo-icon -fnt-icon-appnet">&#xecc4;</i> <span
            class="i-name">-fnt-icon-appnet</span><span class="i-code">0xecc4</span></div>
    <div title="Code: 0xecc5" class="the-icons span3"><i class="demo-icon -fnt-icon-statusnet">&#xecc5;</i> <span
            class="i-name">-fnt-icon-statusnet</span><span class="i-code">0xecc5</span></div>
    <div title="Code: 0xecc6" class="the-icons span3"><i class="demo-icon -fnt-icon-acrobat">&#xecc6;</i> <span
            class="i-name">-fnt-icon-acrobat</span><span class="i-code">0xecc6</span></div>
    <div title="Code: 0xecc7" class="the-icons span3"><i class="demo-icon -fnt-icon-drupal-1">&#xecc7;</i> <span
            class="i-name">-fnt-icon-drupal-1</span><span class="i-code">0xecc7</span></div>
</div>
<div class="row">
    <div title="Code: 0xecc8" class="the-icons span3"><i class="demo-icon -fnt-icon-buffer">&#xecc8;</i> <span
            class="i-name">-fnt-icon-buffer</span><span class="i-code">0xecc8</span></div>
    <div title="Code: 0xecc9" class="the-icons span3"><i class="demo-icon -fnt-icon-pocket">&#xecc9;</i> <span
            class="i-name">-fnt-icon-pocket</span><span class="i-code">0xecc9</span></div>
    <div title="Code: 0xecca" class="the-icons span3"><i class="demo-icon -fnt-icon-bitbucket-1">&#xecca;</i> <span
            class="i-name">-fnt-icon-bitbucket-1</span><span class="i-code">0xecca</span></div>
    <div title="Code: 0xeccb" class="the-icons span3"><i class="demo-icon -fnt-icon-lego">&#xeccb;</i> <span
            class="i-name">-fnt-icon-lego</span><span class="i-code">0xeccb</span></div>
</div>
<div class="row">
    <div title="Code: 0xeccc" class="the-icons span3"><i class="demo-icon -fnt-icon-login-3">&#xeccc;</i> <span
            class="i-name">-fnt-icon-login-3</span><span class="i-code">0xeccc</span></div>
    <div title="Code: 0xeccd" class="the-icons span3"><i class="demo-icon -fnt-icon-stackoverflow-1">&#xeccd;</i> <span
            class="i-name">-fnt-icon-stackoverflow-1</span><span class="i-code">0xeccd</span></div>
    <div title="Code: 0xecce" class="the-icons span3"><i class="demo-icon -fnt-icon-hackernews">&#xecce;</i> <span
            class="i-name">-fnt-icon-hackernews</span><span class="i-code">0xecce</span></div>
    <div title="Code: 0xeccf" class="the-icons span3"><i class="demo-icon -fnt-icon-lkdto">&#xeccf;</i> <span
            class="i-name">-fnt-icon-lkdto</span><span class="i-code">0xeccf</span></div>
</div>
<div class="row">
    <div title="Code: 0xecd0" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-6">&#xecd0;</i> <span
            class="i-name">-fnt-icon-facebook-6</span><span class="i-code">0xecd0</span></div>
    <div title="Code: 0xecd1" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-rect-1">&#xecd1;</i> <span
            class="i-name">-fnt-icon-facebook-rect-1</span><span class="i-code">0xecd1</span></div>
    <div title="Code: 0xecd2" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-6">&#xecd2;</i> <span
            class="i-name">-fnt-icon-twitter-6</span><span class="i-code">0xecd2</span></div>
    <div title="Code: 0xecd3" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-bird-1">&#xecd3;</i> <span
            class="i-name">-fnt-icon-twitter-bird-1</span><span class="i-code">0xecd3</span></div>
</div>
<div class="row">
    <div title="Code: 0xecd4" class="the-icons span3"><i class="demo-icon -fnt-icon-vimeo-4">&#xecd4;</i> <span
            class="i-name">-fnt-icon-vimeo-4</span><span class="i-code">0xecd4</span></div>
    <div title="Code: 0xecd5" class="the-icons span3"><i class="demo-icon -fnt-icon-vimeo-rect">&#xecd5;</i> <span
            class="i-name">-fnt-icon-vimeo-rect</span><span class="i-code">0xecd5</span></div>
    <div title="Code: 0xecd6" class="the-icons span3"><i class="demo-icon -fnt-icon-tumblr-rect">&#xecd6;</i> <span
            class="i-name">-fnt-icon-tumblr-rect</span><span class="i-code">0xecd6</span></div>
    <div title="Code: 0xecd7" class="the-icons span3"><i class="demo-icon -fnt-icon-googleplus-rect">&#xecd7;</i> <span
            class="i-name">-fnt-icon-googleplus-rect</span><span class="i-code">0xecd7</span></div>
</div>
<div class="row">
    <div title="Code: 0xecd8" class="the-icons span3"><i class="demo-icon -fnt-icon-github-text">&#xecd8;</i> <span
            class="i-name">-fnt-icon-github-text</span><span class="i-code">0xecd8</span></div>
    <div title="Code: 0xecd9" class="the-icons span3"><i class="demo-icon -fnt-icon-github-5">&#xecd9;</i> <span
            class="i-name">-fnt-icon-github-5</span><span class="i-code">0xecd9</span></div>
    <div title="Code: 0xecda" class="the-icons span3"><i class="demo-icon -fnt-icon-icq">&#xecda;</i> <span
            class="i-name">-fnt-icon-icq</span><span class="i-code">0xecda</span></div>
    <div title="Code: 0xecdb" class="the-icons span3"><i class="demo-icon -fnt-icon-yandex-rect">&#xecdb;</i> <span
            class="i-name">-fnt-icon-yandex-rect</span><span class="i-code">0xecdb</span></div>
</div>
<div class="row">
    <div title="Code: 0xecdc" class="the-icons span3"><i class="demo-icon -fnt-icon-vkontakte-rect">&#xecdc;</i> <span
            class="i-name">-fnt-icon-vkontakte-rect</span><span class="i-code">0xecdc</span></div>
    <div title="Code: 0xecdd" class="the-icons span3"><i class="demo-icon -fnt-icon-odnoklassniki-1">&#xecdd;</i> <span
            class="i-name">-fnt-icon-odnoklassniki-1</span><span class="i-code">0xecdd</span></div>
    <div title="Code: 0xecde" class="the-icons span3"><i class="demo-icon -fnt-icon-odnoklassniki-rect">&#xecde;</i>
        <span class="i-name">-fnt-icon-odnoklassniki-rect</span><span class="i-code">0xecde</span></div>
    <div title="Code: 0xecdf" class="the-icons span3"><i class="demo-icon -fnt-icon-friendfeed">&#xecdf;</i> <span
            class="i-name">-fnt-icon-friendfeed</span><span class="i-code">0xecdf</span></div>
</div>
<div class="row">
    <div title="Code: 0xece0" class="the-icons span3"><i class="demo-icon -fnt-icon-friendfeed-rect">&#xece0;</i> <span
            class="i-name">-fnt-icon-friendfeed-rect</span><span class="i-code">0xece0</span></div>
    <div title="Code: 0xece1" class="the-icons span3"><i class="demo-icon -fnt-icon-blogger-1">&#xece1;</i> <span
            class="i-name">-fnt-icon-blogger-1</span><span class="i-code">0xece1</span></div>
    <div title="Code: 0xece2" class="the-icons span3"><i class="demo-icon -fnt-icon-blogger-rect">&#xece2;</i> <span
            class="i-name">-fnt-icon-blogger-rect</span><span class="i-code">0xece2</span></div>
    <div title="Code: 0xece3" class="the-icons span3"><i class="demo-icon -fnt-icon-deviantart-1">&#xece3;</i> <span
            class="i-name">-fnt-icon-deviantart-1</span><span class="i-code">0xece3</span></div>
</div>
<div class="row">
    <div title="Code: 0xece4" class="the-icons span3"><i class="demo-icon -fnt-icon-lastfm-4">&#xece4;</i> <span
            class="i-name">-fnt-icon-lastfm-4</span><span class="i-code">0xece4</span></div>
    <div title="Code: 0xece5" class="the-icons span3"><i class="demo-icon -fnt-icon-lastfm-rect">&#xece5;</i> <span
            class="i-name">-fnt-icon-lastfm-rect</span><span class="i-code">0xece5</span></div>
    <div title="Code: 0xece6" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-rect">&#xece6;</i> <span
            class="i-name">-fnt-icon-linkedin-rect</span><span class="i-code">0xece6</span></div>
    <div title="Code: 0xece7" class="the-icons span3"><i class="demo-icon -fnt-icon-picasa-1">&#xece7;</i> <span
            class="i-name">-fnt-icon-picasa-1</span><span class="i-code">0xece7</span></div>
</div>
<div class="row">
    <div title="Code: 0xece8" class="the-icons span3"><i class="demo-icon -fnt-icon-instagram-4">&#xece8;</i> <span
            class="i-name">-fnt-icon-instagram-4</span><span class="i-code">0xece8</span></div>
    <div title="Code: 0xece9" class="the-icons span3"><i class="demo-icon -fnt-icon-instagram-filled">&#xece9;</i> <span
            class="i-name">-fnt-icon-instagram-filled</span><span class="i-code">0xece9</span></div>
    <div title="Code: 0xecea" class="the-icons span3"><i class="demo-icon -fnt-icon-box-4">&#xecea;</i> <span
            class="i-name">-fnt-icon-box-4</span><span class="i-code">0xecea</span></div>
    <div title="Code: 0xeceb" class="the-icons span3"><i class="demo-icon -fnt-icon-box-rect">&#xeceb;</i> <span
            class="i-name">-fnt-icon-box-rect</span><span class="i-code">0xeceb</span></div>
</div>
<div class="row">
    <div title="Code: 0xecec" class="the-icons span3"><i class="demo-icon -fnt-icon-youku">&#xecec;</i> <span
            class="i-name">-fnt-icon-youku</span><span class="i-code">0xecec</span></div>
    <div title="Code: 0xeced" class="the-icons span3"><i class="demo-icon -fnt-icon-win8">&#xeced;</i> <span
            class="i-name">-fnt-icon-win8</span><span class="i-code">0xeced</span></div>
    <div title="Code: 0xecee" class="the-icons span3"><i class="demo-icon -fnt-icon-discover">&#xecee;</i> <span
            class="i-name">-fnt-icon-discover</span><span class="i-code">0xecee</span></div>
    <div title="Code: 0xecef" class="the-icons span3"><i class="demo-icon -fnt-icon-visa">&#xecef;</i> <span
            class="i-name">-fnt-icon-visa</span><span class="i-code">0xecef</span></div>
</div>
<div class="row">
    <div title="Code: 0xecf0" class="the-icons span3"><i class="demo-icon -fnt-icon-houzz-1">&#xecf0;</i> <span
            class="i-name">-fnt-icon-houzz-1</span><span class="i-code">0xecf0</span></div>
    <div title="Code: 0xecf1" class="the-icons span3"><i class="demo-icon -fnt-icon-glass-1">&#xecf1;</i> <span
            class="i-name">-fnt-icon-glass-1</span><span class="i-code">0xecf1</span></div>
    <div title="Code: 0xecf2" class="the-icons span3"><i class="demo-icon -fnt-icon-music-3">&#xecf2;</i> <span
            class="i-name">-fnt-icon-music-3</span><span class="i-code">0xecf2</span></div>
    <div title="Code: 0xecf3" class="the-icons span3"><i class="demo-icon -fnt-icon-search-6">&#xecf3;</i> <span
            class="i-name">-fnt-icon-search-6</span><span class="i-code">0xecf3</span></div>
</div>
<div class="row">
    <div title="Code: 0xecf4" class="the-icons span3"><i class="demo-icon -fnt-icon-search-circled">&#xecf4;</i> <span
            class="i-name">-fnt-icon-search-circled</span><span class="i-code">0xecf4</span></div>
    <div title="Code: 0xecf5" class="the-icons span3"><i class="demo-icon -fnt-icon-mail-6">&#xecf5;</i> <span
            class="i-name">-fnt-icon-mail-6</span><span class="i-code">0xecf5</span></div>
    <div title="Code: 0xecf6" class="the-icons span3"><i class="demo-icon -fnt-icon-mail-circled">&#xecf6;</i> <span
            class="i-name">-fnt-icon-mail-circled</span><span class="i-code">0xecf6</span></div>
    <div title="Code: 0xecf7" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-6">&#xecf7;</i> <span
            class="i-name">-fnt-icon-heart-6</span><span class="i-code">0xecf7</span></div>
</div>
<div class="row">
    <div title="Code: 0xecf8" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-circled">&#xecf8;</i> <span
            class="i-name">-fnt-icon-heart-circled</span><span class="i-code">0xecf8</span></div>
    <div title="Code: 0xecf9" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-empty-3">&#xecf9;</i> <span
            class="i-name">-fnt-icon-heart-empty-3</span><span class="i-code">0xecf9</span></div>
    <div title="Code: 0xecfa" class="the-icons span3"><i class="demo-icon -fnt-icon-star-6">&#xecfa;</i> <span
            class="i-name">-fnt-icon-star-6</span><span class="i-code">0xecfa</span></div>
    <div title="Code: 0xecfb" class="the-icons span3"><i class="demo-icon -fnt-icon-star-circled">&#xecfb;</i> <span
            class="i-name">-fnt-icon-star-circled</span><span class="i-code">0xecfb</span></div>
</div>
<div class="row">
    <div title="Code: 0xecfc" class="the-icons span3"><i class="demo-icon -fnt-icon-star-empty-3">&#xecfc;</i> <span
            class="i-name">-fnt-icon-star-empty-3</span><span class="i-code">0xecfc</span></div>
    <div title="Code: 0xecfd" class="the-icons span3"><i class="demo-icon -fnt-icon-user-6">&#xecfd;</i> <span
            class="i-name">-fnt-icon-user-6</span><span class="i-code">0xecfd</span></div>
    <div title="Code: 0xecfe" class="the-icons span3"><i class="demo-icon -fnt-icon-group">&#xecfe;</i> <span
            class="i-name">-fnt-icon-group</span><span class="i-code">0xecfe</span></div>
    <div title="Code: 0xecff" class="the-icons span3"><i class="demo-icon -fnt-icon-group-circled">&#xecff;</i> <span
            class="i-name">-fnt-icon-group-circled</span><span class="i-code">0xecff</span></div>
</div>
<div class="row">
    <div title="Code: 0xed00" class="the-icons span3"><i class="demo-icon -fnt-icon-torso">&#xed00;</i> <span
            class="i-name">-fnt-icon-torso</span><span class="i-code">0xed00</span></div>
    <div title="Code: 0xed01" class="the-icons span3"><i class="demo-icon -fnt-icon-video-4">&#xed01;</i> <span
            class="i-name">-fnt-icon-video-4</span><span class="i-code">0xed01</span></div>
    <div title="Code: 0xed02" class="the-icons span3"><i class="demo-icon -fnt-icon-video-circled">&#xed02;</i> <span
            class="i-name">-fnt-icon-video-circled</span><span class="i-code">0xed02</span></div>
    <div title="Code: 0xed03" class="the-icons span3"><i class="demo-icon -fnt-icon-video-alt-1">&#xed03;</i> <span
            class="i-name">-fnt-icon-video-alt-1</span><span class="i-code">0xed03</span></div>
</div>
<div class="row">
    <div title="Code: 0xed04" class="the-icons span3"><i class="demo-icon -fnt-icon-videocam-4">&#xed04;</i> <span
            class="i-name">-fnt-icon-videocam-4</span><span class="i-code">0xed04</span></div>
    <div title="Code: 0xed05" class="the-icons span3"><i class="demo-icon -fnt-icon-video-chat">&#xed05;</i> <span
            class="i-name">-fnt-icon-video-chat</span><span class="i-code">0xed05</span></div>
    <div title="Code: 0xed06" class="the-icons span3"><i class="demo-icon -fnt-icon-picture-4">&#xed06;</i> <span
            class="i-name">-fnt-icon-picture-4</span><span class="i-code">0xed06</span></div>
    <div title="Code: 0xed07" class="the-icons span3"><i class="demo-icon -fnt-icon-camera-6">&#xed07;</i> <span
            class="i-name">-fnt-icon-camera-6</span><span class="i-code">0xed07</span></div>
</div>
<div class="row">
    <div title="Code: 0xed08" class="the-icons span3"><i class="demo-icon -fnt-icon-photo">&#xed08;</i> <span
            class="i-name">-fnt-icon-photo</span><span class="i-code">0xed08</span></div>
    <div title="Code: 0xed09" class="the-icons span3"><i class="demo-icon -fnt-icon-photo-circled">&#xed09;</i> <span
            class="i-name">-fnt-icon-photo-circled</span><span class="i-code">0xed09</span></div>
    <div title="Code: 0xed0a" class="the-icons span3"><i class="demo-icon -fnt-icon-th-large-2">&#xed0a;</i> <span
            class="i-name">-fnt-icon-th-large-2</span><span class="i-code">0xed0a</span></div>
    <div title="Code: 0xed0b" class="the-icons span3"><i class="demo-icon -fnt-icon-th-3">&#xed0b;</i> <span
            class="i-name">-fnt-icon-th-3</span><span class="i-code">0xed0b</span></div>
</div>
<div class="row">
    <div title="Code: 0xed0c" class="the-icons span3"><i class="demo-icon -fnt-icon-th-list-4">&#xed0c;</i> <span
            class="i-name">-fnt-icon-th-list-4</span><span class="i-code">0xed0c</span></div>
    <div title="Code: 0xed0d" class="the-icons span3"><i class="demo-icon -fnt-icon-view-mode">&#xed0d;</i> <span
            class="i-name">-fnt-icon-view-mode</span><span class="i-code">0xed0d</span></div>
    <div title="Code: 0xed0e" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-5">&#xed0e;</i> <span
            class="i-name">-fnt-icon-ok-5</span><span class="i-code">0xed0e</span></div>
    <div title="Code: 0xed0f" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-circled-2">&#xed0f;</i> <span
            class="i-name">-fnt-icon-ok-circled-2</span><span class="i-code">0xed0f</span></div>
</div>
<div class="row">
    <div title="Code: 0xed10" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-circled2-1">&#xed10;</i> <span
            class="i-name">-fnt-icon-ok-circled2-1</span><span class="i-code">0xed10</span></div>
    <div title="Code: 0xed11" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-6">&#xed11;</i> <span
            class="i-name">-fnt-icon-cancel-6</span><span class="i-code">0xed11</span></div>
    <div title="Code: 0xed12" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-circled-4">&#xed12;</i> <span
            class="i-name">-fnt-icon-cancel-circled-4</span><span class="i-code">0xed12</span></div>
    <div title="Code: 0xed13" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-circled2-1">&#xed13;</i>
        <span class="i-name">-fnt-icon-cancel-circled2-1</span><span class="i-code">0xed13</span></div>
</div>
<div class="row">
    <div title="Code: 0xed14" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-6">&#xed14;</i> <span
            class="i-name">-fnt-icon-plus-6</span><span class="i-code">0xed14</span></div>
    <div title="Code: 0xed15" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-circled-2">&#xed15;</i> <span
            class="i-name">-fnt-icon-plus-circled-2</span><span class="i-code">0xed15</span></div>
    <div title="Code: 0xed16" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-4">&#xed16;</i> <span
            class="i-name">-fnt-icon-minus-4</span><span class="i-code">0xed16</span></div>
    <div title="Code: 0xed17" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-circled-2">&#xed17;</i> <span
            class="i-name">-fnt-icon-minus-circled-2</span><span class="i-code">0xed17</span></div>
</div>
<div class="row">
    <div title="Code: 0xed18" class="the-icons span3"><i class="demo-icon -fnt-icon-help-3">&#xed18;</i> <span
            class="i-name">-fnt-icon-help-3</span><span class="i-code">0xed18</span></div>
    <div title="Code: 0xed19" class="the-icons span3"><i class="demo-icon -fnt-icon-help-circled-3">&#xed19;</i> <span
            class="i-name">-fnt-icon-help-circled-3</span><span class="i-code">0xed19</span></div>
    <div title="Code: 0xed1a" class="the-icons span3"><i class="demo-icon -fnt-icon-info-circled-3">&#xed1a;</i> <span
            class="i-name">-fnt-icon-info-circled-3</span><span class="i-code">0xed1a</span></div>
    <div title="Code: 0xed1b" class="the-icons span3"><i class="demo-icon -fnt-icon-home-6">&#xed1b;</i> <span
            class="i-name">-fnt-icon-home-6</span><span class="i-code">0xed1b</span></div>
</div>
<div class="row">
    <div title="Code: 0xed1c" class="the-icons span3"><i class="demo-icon -fnt-icon-home-circled">&#xed1c;</i> <span
            class="i-name">-fnt-icon-home-circled</span><span class="i-code">0xed1c</span></div>
    <div title="Code: 0xed1d" class="the-icons span3"><i class="demo-icon -fnt-icon-website">&#xed1d;</i> <span
            class="i-name">-fnt-icon-website</span><span class="i-code">0xed1d</span></div>
    <div title="Code: 0xed1e" class="the-icons span3"><i class="demo-icon -fnt-icon-website-circled">&#xed1e;</i> <span
            class="i-name">-fnt-icon-website-circled</span><span class="i-code">0xed1e</span></div>
    <div title="Code: 0xed1f" class="the-icons span3"><i class="demo-icon -fnt-icon-attach-5">&#xed1f;</i> <span
            class="i-name">-fnt-icon-attach-5</span><span class="i-code">0xed1f</span></div>
</div>
<div class="row">
    <div title="Code: 0xed20" class="the-icons span3"><i class="demo-icon -fnt-icon-attach-circled">&#xed20;</i> <span
            class="i-name">-fnt-icon-attach-circled</span><span class="i-code">0xed20</span></div>
    <div title="Code: 0xed21" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-6">&#xed21;</i> <span
            class="i-name">-fnt-icon-lock-6</span><span class="i-code">0xed21</span></div>
    <div title="Code: 0xed22" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-circled">&#xed22;</i> <span
            class="i-name">-fnt-icon-lock-circled</span><span class="i-code">0xed22</span></div>
    <div title="Code: 0xed23" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-6">&#xed23;</i> <span
            class="i-name">-fnt-icon-lock-open-6</span><span class="i-code">0xed23</span></div>
</div>
<div class="row">
    <div title="Code: 0xed24" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-alt-2">&#xed24;</i> <span
            class="i-name">-fnt-icon-lock-open-alt-2</span><span class="i-code">0xed24</span></div>
    <div title="Code: 0xed25" class="the-icons span3"><i class="demo-icon -fnt-icon-eye-6">&#xed25;</i> <span
            class="i-name">-fnt-icon-eye-6</span><span class="i-code">0xed25</span></div>
    <div title="Code: 0xed26" class="the-icons span3"><i class="demo-icon -fnt-icon-eye-off-1">&#xed26;</i> <span
            class="i-name">-fnt-icon-eye-off-1</span><span class="i-code">0xed26</span></div>
    <div title="Code: 0xed27" class="the-icons span3"><i class="demo-icon -fnt-icon-tag-5">&#xed27;</i> <span
            class="i-name">-fnt-icon-tag-5</span><span class="i-code">0xed27</span></div>
</div>
<div class="row">
    <div title="Code: 0xed28" class="the-icons span3"><i class="demo-icon -fnt-icon-tags-2">&#xed28;</i> <span
            class="i-name">-fnt-icon-tags-2</span><span class="i-code">0xed28</span></div>
    <div title="Code: 0xed29" class="the-icons span3"><i class="demo-icon -fnt-icon-bookmark-3">&#xed29;</i> <span
            class="i-name">-fnt-icon-bookmark-3</span><span class="i-code">0xed29</span></div>
    <div title="Code: 0xed2a" class="the-icons span3"><i class="demo-icon -fnt-icon-bookmark-empty-1">&#xed2a;</i> <span
            class="i-name">-fnt-icon-bookmark-empty-1</span><span class="i-code">0xed2a</span></div>
    <div title="Code: 0xed2b" class="the-icons span3"><i class="demo-icon -fnt-icon-flag-3">&#xed2b;</i> <span
            class="i-name">-fnt-icon-flag-3</span><span class="i-code">0xed2b</span></div>
</div>
<div class="row">
    <div title="Code: 0xed2c" class="the-icons span3"><i class="demo-icon -fnt-icon-flag-circled">&#xed2c;</i> <span
            class="i-name">-fnt-icon-flag-circled</span><span class="i-code">0xed2c</span></div>
    <div title="Code: 0xed2d" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-up-4">&#xed2d;</i> <span
            class="i-name">-fnt-icon-thumbs-up-4</span><span class="i-code">0xed2d</span></div>
    <div title="Code: 0xed2e" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-down-4">&#xed2e;</i> <span
            class="i-name">-fnt-icon-thumbs-down-4</span><span class="i-code">0xed2e</span></div>
    <div title="Code: 0xed2f" class="the-icons span3"><i class="demo-icon -fnt-icon-download-6">&#xed2f;</i> <span
            class="i-name">-fnt-icon-download-6</span><span class="i-code">0xed2f</span></div>
</div>
<div class="row">
    <div title="Code: 0xed30" class="the-icons span3"><i class="demo-icon -fnt-icon-download-alt">&#xed30;</i> <span
            class="i-name">-fnt-icon-download-alt</span><span class="i-code">0xed30</span></div>
    <div title="Code: 0xed31" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-5">&#xed31;</i> <span
            class="i-name">-fnt-icon-upload-5</span><span class="i-code">0xed31</span></div>
    <div title="Code: 0xed32" class="the-icons span3"><i class="demo-icon -fnt-icon-share-3">&#xed32;</i> <span
            class="i-name">-fnt-icon-share-3</span><span class="i-code">0xed32</span></div>
    <div title="Code: 0xed33" class="the-icons span3"><i class="demo-icon -fnt-icon-quote-1">&#xed33;</i> <span
            class="i-name">-fnt-icon-quote-1</span><span class="i-code">0xed33</span></div>
</div>
<div class="row">
    <div title="Code: 0xed34" class="the-icons span3"><i class="demo-icon -fnt-icon-quote-circled">&#xed34;</i> <span
            class="i-name">-fnt-icon-quote-circled</span><span class="i-code">0xed34</span></div>
    <div title="Code: 0xed35" class="the-icons span3"><i class="demo-icon -fnt-icon-export-5">&#xed35;</i> <span
            class="i-name">-fnt-icon-export-5</span><span class="i-code">0xed35</span></div>
    <div title="Code: 0xed36" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-6">&#xed36;</i> <span
            class="i-name">-fnt-icon-pencil-6</span><span class="i-code">0xed36</span></div>
    <div title="Code: 0xed37" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-circled">&#xed37;</i> <span
            class="i-name">-fnt-icon-pencil-circled</span><span class="i-code">0xed37</span></div>
</div>
<div class="row">
    <div title="Code: 0xed38" class="the-icons span3"><i class="demo-icon -fnt-icon-edit-3">&#xed38;</i> <span
            class="i-name">-fnt-icon-edit-3</span><span class="i-code">0xed38</span></div>
    <div title="Code: 0xed39" class="the-icons span3"><i class="demo-icon -fnt-icon-edit-circled">&#xed39;</i> <span
            class="i-name">-fnt-icon-edit-circled</span><span class="i-code">0xed39</span></div>
    <div title="Code: 0xed3a" class="the-icons span3"><i class="demo-icon -fnt-icon-edit-alt">&#xed3a;</i> <span
            class="i-name">-fnt-icon-edit-alt</span><span class="i-code">0xed3a</span></div>
    <div title="Code: 0xed3b" class="the-icons span3"><i class="demo-icon -fnt-icon-print-6">&#xed3b;</i> <span
            class="i-name">-fnt-icon-print-6</span><span class="i-code">0xed3b</span></div>
</div>
<div class="row">
    <div title="Code: 0xed3c" class="the-icons span3"><i class="demo-icon -fnt-icon-retweet-3">&#xed3c;</i> <span
            class="i-name">-fnt-icon-retweet-3</span><span class="i-code">0xed3c</span></div>
    <div title="Code: 0xed3d" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-5">&#xed3d;</i> <span
            class="i-name">-fnt-icon-comment-5</span><span class="i-code">0xed3d</span></div>
    <div title="Code: 0xed3e" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-alt-1">&#xed3e;</i> <span
            class="i-name">-fnt-icon-comment-alt-1</span><span class="i-code">0xed3e</span></div>
    <div title="Code: 0xed3f" class="the-icons span3"><i class="demo-icon -fnt-icon-bell-5">&#xed3f;</i> <span
            class="i-name">-fnt-icon-bell-5</span><span class="i-code">0xed3f</span></div>
</div>
<div class="row">
    <div title="Code: 0xed40" class="the-icons span3"><i class="demo-icon -fnt-icon-warning-1">&#xed40;</i> <span
            class="i-name">-fnt-icon-warning-1</span><span class="i-code">0xed40</span></div>
    <div title="Code: 0xed41" class="the-icons span3"><i class="demo-icon -fnt-icon-exclamation">&#xed41;</i> <span
            class="i-name">-fnt-icon-exclamation</span><span class="i-code">0xed41</span></div>
    <div title="Code: 0xed42" class="the-icons span3"><i class="demo-icon -fnt-icon-error">&#xed42;</i> <span
            class="i-name">-fnt-icon-error</span><span class="i-code">0xed42</span></div>
    <div title="Code: 0xed43" class="the-icons span3"><i class="demo-icon -fnt-icon-error-alt">&#xed43;</i> <span
            class="i-name">-fnt-icon-error-alt</span><span class="i-code">0xed43</span></div>
</div>
<div class="row">
    <div title="Code: 0xed44" class="the-icons span3"><i class="demo-icon -fnt-icon-location-6">&#xed44;</i> <span
            class="i-name">-fnt-icon-location-6</span><span class="i-code">0xed44</span></div>
    <div title="Code: 0xed45" class="the-icons span3"><i class="demo-icon -fnt-icon-location-circled">&#xed45;</i> <span
            class="i-name">-fnt-icon-location-circled</span><span class="i-code">0xed45</span></div>
    <div title="Code: 0xed46" class="the-icons span3"><i class="demo-icon -fnt-icon-compass-5">&#xed46;</i> <span
            class="i-name">-fnt-icon-compass-5</span><span class="i-code">0xed46</span></div>
    <div title="Code: 0xed47" class="the-icons span3"><i class="demo-icon -fnt-icon-compass-circled">&#xed47;</i> <span
            class="i-name">-fnt-icon-compass-circled</span><span class="i-code">0xed47</span></div>
</div>
<div class="row">
    <div title="Code: 0xed48" class="the-icons span3"><i class="demo-icon -fnt-icon-trash-7">&#xed48;</i> <span
            class="i-name">-fnt-icon-trash-7</span><span class="i-code">0xed48</span></div>
    <div title="Code: 0xed49" class="the-icons span3"><i class="demo-icon -fnt-icon-trash-circled">&#xed49;</i> <span
            class="i-name">-fnt-icon-trash-circled</span><span class="i-code">0xed49</span></div>
    <div title="Code: 0xed4a" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-6">&#xed4a;</i> <span
            class="i-name">-fnt-icon-doc-6</span><span class="i-code">0xed4a</span></div>
    <div title="Code: 0xed4b" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-circled">&#xed4b;</i> <span
            class="i-name">-fnt-icon-doc-circled</span><span class="i-code">0xed4b</span></div>
</div>
<div class="row">
    <div title="Code: 0xed4c" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-new">&#xed4c;</i> <span
            class="i-name">-fnt-icon-doc-new</span><span class="i-code">0xed4c</span></div>
    <div title="Code: 0xed4d" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-new-circled">&#xed4d;</i> <span
            class="i-name">-fnt-icon-doc-new-circled</span><span class="i-code">0xed4d</span></div>
    <div title="Code: 0xed4e" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-5">&#xed4e;</i> <span
            class="i-name">-fnt-icon-folder-5</span><span class="i-code">0xed4e</span></div>
    <div title="Code: 0xed4f" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-circled">&#xed4f;</i> <span
            class="i-name">-fnt-icon-folder-circled</span><span class="i-code">0xed4f</span></div>
</div>
<div class="row">
    <div title="Code: 0xed50" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-close">&#xed50;</i> <span
            class="i-name">-fnt-icon-folder-close</span><span class="i-code">0xed50</span></div>
    <div title="Code: 0xed51" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-open-2">&#xed51;</i> <span
            class="i-name">-fnt-icon-folder-open-2</span><span class="i-code">0xed51</span></div>
    <div title="Code: 0xed52" class="the-icons span3"><i class="demo-icon -fnt-icon-rss-6">&#xed52;</i> <span
            class="i-name">-fnt-icon-rss-6</span><span class="i-code">0xed52</span></div>
    <div title="Code: 0xed53" class="the-icons span3"><i class="demo-icon -fnt-icon-phone-3">&#xed53;</i> <span
            class="i-name">-fnt-icon-phone-3</span><span class="i-code">0xed53</span></div>
</div>
<div class="row">
    <div title="Code: 0xed54" class="the-icons span3"><i class="demo-icon -fnt-icon-phone-circled">&#xed54;</i> <span
            class="i-name">-fnt-icon-phone-circled</span><span class="i-code">0xed54</span></div>
    <div title="Code: 0xed55" class="the-icons span3"><i class="demo-icon -fnt-icon-cog-5">&#xed55;</i> <span
            class="i-name">-fnt-icon-cog-5</span><span class="i-code">0xed55</span></div>
    <div title="Code: 0xed56" class="the-icons span3"><i class="demo-icon -fnt-icon-cog-circled">&#xed56;</i> <span
            class="i-name">-fnt-icon-cog-circled</span><span class="i-code">0xed56</span></div>
    <div title="Code: 0xed57" class="the-icons span3"><i class="demo-icon -fnt-icon-cogs">&#xed57;</i> <span
            class="i-name">-fnt-icon-cogs</span><span class="i-code">0xed57</span></div>
</div>
<div class="row">
    <div title="Code: 0xed58" class="the-icons span3"><i class="demo-icon -fnt-icon-wrench-4">&#xed58;</i> <span
            class="i-name">-fnt-icon-wrench-4</span><span class="i-code">0xed58</span></div>
    <div title="Code: 0xed59" class="the-icons span3"><i class="demo-icon -fnt-icon-wrench-circled">&#xed59;</i> <span
            class="i-name">-fnt-icon-wrench-circled</span><span class="i-code">0xed59</span></div>
    <div title="Code: 0xed5a" class="the-icons span3"><i class="demo-icon -fnt-icon-basket-4">&#xed5a;</i> <span
            class="i-name">-fnt-icon-basket-4</span><span class="i-code">0xed5a</span></div>
    <div title="Code: 0xed5b" class="the-icons span3"><i class="demo-icon -fnt-icon-basket-circled">&#xed5b;</i> <span
            class="i-name">-fnt-icon-basket-circled</span><span class="i-code">0xed5b</span></div>
</div>
<div class="row">
    <div title="Code: 0xed5c" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-7">&#xed5c;</i> <span
            class="i-name">-fnt-icon-calendar-7</span><span class="i-code">0xed5c</span></div>
    <div title="Code: 0xed5d" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-circled">&#xed5d;</i> <span
            class="i-name">-fnt-icon-calendar-circled</span><span class="i-code">0xed5d</span></div>
    <div title="Code: 0xed5e" class="the-icons span3"><i class="demo-icon -fnt-icon-mic-5">&#xed5e;</i> <span
            class="i-name">-fnt-icon-mic-5</span><span class="i-code">0xed5e</span></div>
    <div title="Code: 0xed5f" class="the-icons span3"><i class="demo-icon -fnt-icon-mic-circled">&#xed5f;</i> <span
            class="i-name">-fnt-icon-mic-circled</span><span class="i-code">0xed5f</span></div>
</div>
<div class="row">
    <div title="Code: 0xed60" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-off-4">&#xed60;</i> <span
            class="i-name">-fnt-icon-volume-off-4</span><span class="i-code">0xed60</span></div>
    <div title="Code: 0xed61" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-down-2">&#xed61;</i> <span
            class="i-name">-fnt-icon-volume-down-2</span><span class="i-code">0xed61</span></div>
    <div title="Code: 0xed62" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-1">&#xed62;</i> <span
            class="i-name">-fnt-icon-volume-1</span><span class="i-code">0xed62</span></div>
    <div title="Code: 0xed63" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-up-3">&#xed63;</i> <span
            class="i-name">-fnt-icon-volume-up-3</span><span class="i-code">0xed63</span></div>
</div>
<div class="row">
    <div title="Code: 0xed64" class="the-icons span3"><i class="demo-icon -fnt-icon-headphones-3">&#xed64;</i> <span
            class="i-name">-fnt-icon-headphones-3</span><span class="i-code">0xed64</span></div>
    <div title="Code: 0xed65" class="the-icons span3"><i class="demo-icon -fnt-icon-clock-6">&#xed65;</i> <span
            class="i-name">-fnt-icon-clock-6</span><span class="i-code">0xed65</span></div>
    <div title="Code: 0xed66" class="the-icons span3"><i class="demo-icon -fnt-icon-clock-circled">&#xed66;</i> <span
            class="i-name">-fnt-icon-clock-circled</span><span class="i-code">0xed66</span></div>
    <div title="Code: 0xed67" class="the-icons span3"><i class="demo-icon -fnt-icon-lightbulb-2">&#xed67;</i> <span
            class="i-name">-fnt-icon-lightbulb-2</span><span class="i-code">0xed67</span></div>
</div>
<div class="row">
    <div title="Code: 0xed68" class="the-icons span3"><i class="demo-icon -fnt-icon-lightbulb-alt">&#xed68;</i> <span
            class="i-name">-fnt-icon-lightbulb-alt</span><span class="i-code">0xed68</span></div>
    <div title="Code: 0xed69" class="the-icons span3"><i class="demo-icon -fnt-icon-block-4">&#xed69;</i> <span
            class="i-name">-fnt-icon-block-4</span><span class="i-code">0xed69</span></div>
    <div title="Code: 0xed6a" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full-5">&#xed6a;</i> <span
            class="i-name">-fnt-icon-resize-full-5</span><span class="i-code">0xed6a</span></div>
    <div title="Code: 0xed6b" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full-alt-2">&#xed6b;</i>
        <span class="i-name">-fnt-icon-resize-full-alt-2</span><span class="i-code">0xed6b</span></div>
</div>
<div class="row">
    <div title="Code: 0xed6c" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-small-4">&#xed6c;</i> <span
            class="i-name">-fnt-icon-resize-small-4</span><span class="i-code">0xed6c</span></div>
    <div title="Code: 0xed6d" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-vertical-2">&#xed6d;</i>
        <span class="i-name">-fnt-icon-resize-vertical-2</span><span class="i-code">0xed6d</span></div>
    <div title="Code: 0xed6e" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-horizontal-2">&#xed6e;</i>
        <span class="i-name">-fnt-icon-resize-horizontal-2</span><span class="i-code">0xed6e</span></div>
    <div title="Code: 0xed6f" class="the-icons span3"><i class="demo-icon -fnt-icon-move-3">&#xed6f;</i> <span
            class="i-name">-fnt-icon-move-3</span><span class="i-code">0xed6f</span></div>
</div>
<div class="row">
    <div title="Code: 0xed70" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-in-4">&#xed70;</i> <span
            class="i-name">-fnt-icon-zoom-in-4</span><span class="i-code">0xed70</span></div>
    <div title="Code: 0xed71" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-out-4">&#xed71;</i> <span
            class="i-name">-fnt-icon-zoom-out-4</span><span class="i-code">0xed71</span></div>
    <div title="Code: 0xed72" class="the-icons span3"><i class="demo-icon -fnt-icon-down-open-3">&#xed72;</i> <span
            class="i-name">-fnt-icon-down-open-3</span><span class="i-code">0xed72</span></div>
    <div title="Code: 0xed73" class="the-icons span3"><i class="demo-icon -fnt-icon-left-open-4">&#xed73;</i> <span
            class="i-name">-fnt-icon-left-open-4</span><span class="i-code">0xed73</span></div>
</div>
<div class="row">
    <div title="Code: 0xed74" class="the-icons span3"><i class="demo-icon -fnt-icon-right-open-4">&#xed74;</i> <span
            class="i-name">-fnt-icon-right-open-4</span><span class="i-code">0xed74</span></div>
    <div title="Code: 0xed75" class="the-icons span3"><i class="demo-icon -fnt-icon-up-open-3">&#xed75;</i> <span
            class="i-name">-fnt-icon-up-open-3</span><span class="i-code">0xed75</span></div>
    <div title="Code: 0xed76" class="the-icons span3"><i class="demo-icon -fnt-icon-down-6">&#xed76;</i> <span
            class="i-name">-fnt-icon-down-6</span><span class="i-code">0xed76</span></div>
    <div title="Code: 0xed77" class="the-icons span3"><i class="demo-icon -fnt-icon-left-5">&#xed77;</i> <span
            class="i-name">-fnt-icon-left-5</span><span class="i-code">0xed77</span></div>
</div>
<div class="row">
    <div title="Code: 0xed78" class="the-icons span3"><i class="demo-icon -fnt-icon-right-5">&#xed78;</i> <span
            class="i-name">-fnt-icon-right-5</span><span class="i-code">0xed78</span></div>
    <div title="Code: 0xed79" class="the-icons span3"><i class="demo-icon -fnt-icon-up-6">&#xed79;</i> <span
            class="i-name">-fnt-icon-up-6</span><span class="i-code">0xed79</span></div>
    <div title="Code: 0xed7a" class="the-icons span3"><i class="demo-icon -fnt-icon-down-circled-2">&#xed7a;</i> <span
            class="i-name">-fnt-icon-down-circled-2</span><span class="i-code">0xed7a</span></div>
    <div title="Code: 0xed7b" class="the-icons span3"><i class="demo-icon -fnt-icon-left-circled-2">&#xed7b;</i> <span
            class="i-name">-fnt-icon-left-circled-2</span><span class="i-code">0xed7b</span></div>
</div>
<div class="row">
    <div title="Code: 0xed7c" class="the-icons span3"><i class="demo-icon -fnt-icon-right-circled-2">&#xed7c;</i> <span
            class="i-name">-fnt-icon-right-circled-2</span><span class="i-code">0xed7c</span></div>
    <div title="Code: 0xed7d" class="the-icons span3"><i class="demo-icon -fnt-icon-up-circled-2">&#xed7d;</i> <span
            class="i-name">-fnt-icon-up-circled-2</span><span class="i-code">0xed7d</span></div>
    <div title="Code: 0xed7e" class="the-icons span3"><i class="demo-icon -fnt-icon-down-hand-1">&#xed7e;</i> <span
            class="i-name">-fnt-icon-down-hand-1</span><span class="i-code">0xed7e</span></div>
    <div title="Code: 0xed7f" class="the-icons span3"><i class="demo-icon -fnt-icon-left-hand-1">&#xed7f;</i> <span
            class="i-name">-fnt-icon-left-hand-1</span><span class="i-code">0xed7f</span></div>
</div>
<div class="row">
    <div title="Code: 0xed80" class="the-icons span3"><i class="demo-icon -fnt-icon-right-hand-1">&#xed80;</i> <span
            class="i-name">-fnt-icon-right-hand-1</span><span class="i-code">0xed80</span></div>
    <div title="Code: 0xed81" class="the-icons span3"><i class="demo-icon -fnt-icon-up-hand-1">&#xed81;</i> <span
            class="i-name">-fnt-icon-up-hand-1</span><span class="i-code">0xed81</span></div>
    <div title="Code: 0xed82" class="the-icons span3"><i class="demo-icon -fnt-icon-cw-5">&#xed82;</i> <span
            class="i-name">-fnt-icon-cw-5</span><span class="i-code">0xed82</span></div>
    <div title="Code: 0xed83" class="the-icons span3"><i class="demo-icon -fnt-icon-cw-circled">&#xed83;</i> <span
            class="i-name">-fnt-icon-cw-circled</span><span class="i-code">0xed83</span></div>
</div>
<div class="row">
    <div title="Code: 0xed84" class="the-icons span3"><i class="demo-icon -fnt-icon-arrows-cw-2">&#xed84;</i> <span
            class="i-name">-fnt-icon-arrows-cw-2</span><span class="i-code">0xed84</span></div>
    <div title="Code: 0xed85" class="the-icons span3"><i class="demo-icon -fnt-icon-shuffle-4">&#xed85;</i> <span
            class="i-name">-fnt-icon-shuffle-4</span><span class="i-code">0xed85</span></div>
    <div title="Code: 0xed86" class="the-icons span3"><i class="demo-icon -fnt-icon-play-5">&#xed86;</i> <span
            class="i-name">-fnt-icon-play-5</span><span class="i-code">0xed86</span></div>
    <div title="Code: 0xed87" class="the-icons span3"><i class="demo-icon -fnt-icon-play-circled-1">&#xed87;</i> <span
            class="i-name">-fnt-icon-play-circled-1</span><span class="i-code">0xed87</span></div>
</div>
<div class="row">
    <div title="Code: 0xed88" class="the-icons span3"><i class="demo-icon -fnt-icon-play-circled2-1">&#xed88;</i> <span
            class="i-name">-fnt-icon-play-circled2-1</span><span class="i-code">0xed88</span></div>
    <div title="Code: 0xed89" class="the-icons span3"><i class="demo-icon -fnt-icon-stop-6">&#xed89;</i> <span
            class="i-name">-fnt-icon-stop-6</span><span class="i-code">0xed89</span></div>
    <div title="Code: 0xed8a" class="the-icons span3"><i class="demo-icon -fnt-icon-stop-circled">&#xed8a;</i> <span
            class="i-name">-fnt-icon-stop-circled</span><span class="i-code">0xed8a</span></div>
    <div title="Code: 0xed8b" class="the-icons span3"><i class="demo-icon -fnt-icon-pause-5">&#xed8b;</i> <span
            class="i-name">-fnt-icon-pause-5</span><span class="i-code">0xed8b</span></div>
</div>
<div class="row">
    <div title="Code: 0xed8c" class="the-icons span3"><i class="demo-icon -fnt-icon-pause-circled">&#xed8c;</i> <span
            class="i-name">-fnt-icon-pause-circled</span><span class="i-code">0xed8c</span></div>
    <div title="Code: 0xed8d" class="the-icons span3"><i class="demo-icon -fnt-icon-record-2">&#xed8d;</i> <span
            class="i-name">-fnt-icon-record-2</span><span class="i-code">0xed8d</span></div>
    <div title="Code: 0xed8e" class="the-icons span3"><i class="demo-icon -fnt-icon-eject-3">&#xed8e;</i> <span
            class="i-name">-fnt-icon-eject-3</span><span class="i-code">0xed8e</span></div>
    <div title="Code: 0xed8f" class="the-icons span3"><i class="demo-icon -fnt-icon-backward">&#xed8f;</i> <span
            class="i-name">-fnt-icon-backward</span><span class="i-code">0xed8f</span></div>
</div>
<div class="row">
    <div title="Code: 0xed90" class="the-icons span3"><i class="demo-icon -fnt-icon-backward-circled">&#xed90;</i> <span
            class="i-name">-fnt-icon-backward-circled</span><span class="i-code">0xed90</span></div>
    <div title="Code: 0xed91" class="the-icons span3"><i class="demo-icon -fnt-icon-fast-backward-2">&#xed91;</i> <span
            class="i-name">-fnt-icon-fast-backward-2</span><span class="i-code">0xed91</span></div>
    <div title="Code: 0xed92" class="the-icons span3"><i class="demo-icon -fnt-icon-fast-forward-2">&#xed92;</i> <span
            class="i-name">-fnt-icon-fast-forward-2</span><span class="i-code">0xed92</span></div>
    <div title="Code: 0xed93" class="the-icons span3"><i class="demo-icon -fnt-icon-forward-3">&#xed93;</i> <span
            class="i-name">-fnt-icon-forward-3</span><span class="i-code">0xed93</span></div>
</div>
<div class="row">
    <div title="Code: 0xed94" class="the-icons span3"><i class="demo-icon -fnt-icon-forward-circled">&#xed94;</i> <span
            class="i-name">-fnt-icon-forward-circled</span><span class="i-code">0xed94</span></div>
    <div title="Code: 0xed95" class="the-icons span3"><i class="demo-icon -fnt-icon-step-backward">&#xed95;</i> <span
            class="i-name">-fnt-icon-step-backward</span><span class="i-code">0xed95</span></div>
    <div title="Code: 0xed96" class="the-icons span3"><i class="demo-icon -fnt-icon-step-forward">&#xed96;</i> <span
            class="i-name">-fnt-icon-step-forward</span><span class="i-code">0xed96</span></div>
    <div title="Code: 0xed97" class="the-icons span3"><i class="demo-icon -fnt-icon-target-4">&#xed97;</i> <span
            class="i-name">-fnt-icon-target-4</span><span class="i-code">0xed97</span></div>
</div>
<div class="row">
    <div title="Code: 0xed98" class="the-icons span3"><i class="demo-icon -fnt-icon-signal-4">&#xed98;</i> <span
            class="i-name">-fnt-icon-signal-4</span><span class="i-code">0xed98</span></div>
    <div title="Code: 0xed99" class="the-icons span3"><i class="demo-icon -fnt-icon-desktop-2">&#xed99;</i> <span
            class="i-name">-fnt-icon-desktop-2</span><span class="i-code">0xed99</span></div>
    <div title="Code: 0xed9a" class="the-icons span3"><i class="demo-icon -fnt-icon-desktop-circled">&#xed9a;</i> <span
            class="i-name">-fnt-icon-desktop-circled</span><span class="i-code">0xed9a</span></div>
    <div title="Code: 0xed9b" class="the-icons span3"><i class="demo-icon -fnt-icon-laptop-2">&#xed9b;</i> <span
            class="i-name">-fnt-icon-laptop-2</span><span class="i-code">0xed9b</span></div>
</div>
<div class="row">
    <div title="Code: 0xed9c" class="the-icons span3"><i class="demo-icon -fnt-icon-laptop-circled">&#xed9c;</i> <span
            class="i-name">-fnt-icon-laptop-circled</span><span class="i-code">0xed9c</span></div>
    <div title="Code: 0xed9d" class="the-icons span3"><i class="demo-icon -fnt-icon-network-1">&#xed9d;</i> <span
            class="i-name">-fnt-icon-network-1</span><span class="i-code">0xed9d</span></div>
    <div title="Code: 0xed9e" class="the-icons span3"><i class="demo-icon -fnt-icon-inbox-3">&#xed9e;</i> <span
            class="i-name">-fnt-icon-inbox-3</span><span class="i-code">0xed9e</span></div>
    <div title="Code: 0xed9f" class="the-icons span3"><i class="demo-icon -fnt-icon-inbox-circled">&#xed9f;</i> <span
            class="i-name">-fnt-icon-inbox-circled</span><span class="i-code">0xed9f</span></div>
</div>
<div class="row">
    <div title="Code: 0xeda0" class="the-icons span3"><i class="demo-icon -fnt-icon-inbox-alt">&#xeda0;</i> <span
            class="i-name">-fnt-icon-inbox-alt</span><span class="i-code">0xeda0</span></div>
    <div title="Code: 0xeda1" class="the-icons span3"><i class="demo-icon -fnt-icon-globe-5">&#xeda1;</i> <span
            class="i-name">-fnt-icon-globe-5</span><span class="i-code">0xeda1</span></div>
    <div title="Code: 0xeda2" class="the-icons span3"><i class="demo-icon -fnt-icon-globe-alt-1">&#xeda2;</i> <span
            class="i-name">-fnt-icon-globe-alt-1</span><span class="i-code">0xeda2</span></div>
    <div title="Code: 0xeda3" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-6">&#xeda3;</i> <span
            class="i-name">-fnt-icon-cloud-6</span><span class="i-code">0xeda3</span></div>
</div>
<div class="row">
    <div title="Code: 0xeda4" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-circled">&#xeda4;</i> <span
            class="i-name">-fnt-icon-cloud-circled</span><span class="i-code">0xeda4</span></div>
    <div title="Code: 0xeda5" class="the-icons span3"><i class="demo-icon -fnt-icon-flight-2">&#xeda5;</i> <span
            class="i-name">-fnt-icon-flight-2</span><span class="i-code">0xeda5</span></div>
    <div title="Code: 0xeda6" class="the-icons span3"><i class="demo-icon -fnt-icon-leaf-3">&#xeda6;</i> <span
            class="i-name">-fnt-icon-leaf-3</span><span class="i-code">0xeda6</span></div>
    <div title="Code: 0xeda7" class="the-icons span3"><i class="demo-icon -fnt-icon-font-1">&#xeda7;</i> <span
            class="i-name">-fnt-icon-font-1</span><span class="i-code">0xeda7</span></div>
</div>
<div class="row">
    <div title="Code: 0xeda8" class="the-icons span3"><i class="demo-icon -fnt-icon-fontsize-1">&#xeda8;</i> <span
            class="i-name">-fnt-icon-fontsize-1</span><span class="i-code">0xeda8</span></div>
    <div title="Code: 0xeda9" class="the-icons span3"><i class="demo-icon -fnt-icon-bold-1">&#xeda9;</i> <span
            class="i-name">-fnt-icon-bold-1</span><span class="i-code">0xeda9</span></div>
    <div title="Code: 0xedaa" class="the-icons span3"><i class="demo-icon -fnt-icon-italic-1">&#xedaa;</i> <span
            class="i-name">-fnt-icon-italic-1</span><span class="i-code">0xedaa</span></div>
    <div title="Code: 0xedab" class="the-icons span3"><i class="demo-icon -fnt-icon-text-height-1">&#xedab;</i> <span
            class="i-name">-fnt-icon-text-height-1</span><span class="i-code">0xedab</span></div>
</div>
<div class="row">
    <div title="Code: 0xedac" class="the-icons span3"><i class="demo-icon -fnt-icon-text-width-1">&#xedac;</i> <span
            class="i-name">-fnt-icon-text-width-1</span><span class="i-code">0xedac</span></div>
    <div title="Code: 0xedad" class="the-icons span3"><i class="demo-icon -fnt-icon-align-left-1">&#xedad;</i> <span
            class="i-name">-fnt-icon-align-left-1</span><span class="i-code">0xedad</span></div>
    <div title="Code: 0xedae" class="the-icons span3"><i class="demo-icon -fnt-icon-align-center-1">&#xedae;</i> <span
            class="i-name">-fnt-icon-align-center-1</span><span class="i-code">0xedae</span></div>
    <div title="Code: 0xedaf" class="the-icons span3"><i class="demo-icon -fnt-icon-align-right-1">&#xedaf;</i> <span
            class="i-name">-fnt-icon-align-right-1</span><span class="i-code">0xedaf</span></div>
</div>
<div class="row">
    <div title="Code: 0xedb0" class="the-icons span3"><i class="demo-icon -fnt-icon-align-justify-1">&#xedb0;</i> <span
            class="i-name">-fnt-icon-align-justify-1</span><span class="i-code">0xedb0</span></div>
    <div title="Code: 0xedb1" class="the-icons span3"><i class="demo-icon -fnt-icon-list-3">&#xedb1;</i> <span
            class="i-name">-fnt-icon-list-3</span><span class="i-code">0xedb1</span></div>
    <div title="Code: 0xedb2" class="the-icons span3"><i class="demo-icon -fnt-icon-indent-left-1">&#xedb2;</i> <span
            class="i-name">-fnt-icon-indent-left-1</span><span class="i-code">0xedb2</span></div>
    <div title="Code: 0xedb3" class="the-icons span3"><i class="demo-icon -fnt-icon-indent-right-1">&#xedb3;</i> <span
            class="i-name">-fnt-icon-indent-right-1</span><span class="i-code">0xedb3</span></div>
</div>
<div class="row">
    <div title="Code: 0xedb4" class="the-icons span3"><i class="demo-icon -fnt-icon-briefcase-3">&#xedb4;</i> <span
            class="i-name">-fnt-icon-briefcase-3</span><span class="i-code">0xedb4</span></div>
    <div title="Code: 0xedb5" class="the-icons span3"><i class="demo-icon -fnt-icon-off-1">&#xedb5;</i> <span
            class="i-name">-fnt-icon-off-1</span><span class="i-code">0xedb5</span></div>
    <div title="Code: 0xedb6" class="the-icons span3"><i class="demo-icon -fnt-icon-road-1">&#xedb6;</i> <span
            class="i-name">-fnt-icon-road-1</span><span class="i-code">0xedb6</span></div>
    <div title="Code: 0xedb7" class="the-icons span3"><i class="demo-icon -fnt-icon-qrcode-1">&#xedb7;</i> <span
            class="i-name">-fnt-icon-qrcode-1</span><span class="i-code">0xedb7</span></div>
</div>
<div class="row">
    <div title="Code: 0xedb8" class="the-icons span3"><i class="demo-icon -fnt-icon-barcode-1">&#xedb8;</i> <span
            class="i-name">-fnt-icon-barcode-1</span><span class="i-code">0xedb8</span></div>
    <div title="Code: 0xedb9" class="the-icons span3"><i class="demo-icon -fnt-icon-braille-1">&#xedb9;</i> <span
            class="i-name">-fnt-icon-braille-1</span><span class="i-code">0xedb9</span></div>
    <div title="Code: 0xedba" class="the-icons span3"><i class="demo-icon -fnt-icon-book-4">&#xedba;</i> <span
            class="i-name">-fnt-icon-book-4</span><span class="i-code">0xedba</span></div>
    <div title="Code: 0xedbb" class="the-icons span3"><i class="demo-icon -fnt-icon-adjust-2">&#xedbb;</i> <span
            class="i-name">-fnt-icon-adjust-2</span><span class="i-code">0xedbb</span></div>
</div>
<div class="row">
    <div title="Code: 0xedbc" class="the-icons span3"><i class="demo-icon -fnt-icon-tint-1">&#xedbc;</i> <span
            class="i-name">-fnt-icon-tint-1</span><span class="i-code">0xedbc</span></div>
    <div title="Code: 0xedbd" class="the-icons span3"><i class="demo-icon -fnt-icon-check-3">&#xedbd;</i> <span
            class="i-name">-fnt-icon-check-3</span><span class="i-code">0xedbd</span></div>
    <div title="Code: 0xedbe" class="the-icons span3"><i class="demo-icon -fnt-icon-check-empty-1">&#xedbe;</i> <span
            class="i-name">-fnt-icon-check-empty-1</span><span class="i-code">0xedbe</span></div>
    <div title="Code: 0xedbf" class="the-icons span3"><i class="demo-icon -fnt-icon-asterisk-1">&#xedbf;</i> <span
            class="i-name">-fnt-icon-asterisk-1</span><span class="i-code">0xedbf</span></div>
</div>
<div class="row">
    <div title="Code: 0xedc0" class="the-icons span3"><i class="demo-icon -fnt-icon-gift-2">&#xedc0;</i> <span
            class="i-name">-fnt-icon-gift-2</span><span class="i-code">0xedc0</span></div>
    <div title="Code: 0xedc1" class="the-icons span3"><i class="demo-icon -fnt-icon-fire-2">&#xedc1;</i> <span
            class="i-name">-fnt-icon-fire-2</span><span class="i-code">0xedc1</span></div>
    <div title="Code: 0xedc2" class="the-icons span3"><i class="demo-icon -fnt-icon-magnet-2">&#xedc2;</i> <span
            class="i-name">-fnt-icon-magnet-2</span><span class="i-code">0xedc2</span></div>
    <div title="Code: 0xedc3" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-2">&#xedc3;</i> <span
            class="i-name">-fnt-icon-chart-2</span><span class="i-code">0xedc3</span></div>
</div>
<div class="row">
    <div title="Code: 0xedc4" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-circled">&#xedc4;</i> <span
            class="i-name">-fnt-icon-chart-circled</span><span class="i-code">0xedc4</span></div>
    <div title="Code: 0xedc5" class="the-icons span3"><i class="demo-icon -fnt-icon-credit-card-4">&#xedc5;</i> <span
            class="i-name">-fnt-icon-credit-card-4</span><span class="i-code">0xedc5</span></div>
    <div title="Code: 0xedc6" class="the-icons span3"><i class="demo-icon -fnt-icon-megaphone-2">&#xedc6;</i> <span
            class="i-name">-fnt-icon-megaphone-2</span><span class="i-code">0xedc6</span></div>
    <div title="Code: 0xedc7" class="the-icons span3"><i class="demo-icon -fnt-icon-clipboard-2">&#xedc7;</i> <span
            class="i-name">-fnt-icon-clipboard-2</span><span class="i-code">0xedc7</span></div>
</div>
<div class="row">
    <div title="Code: 0xedc8" class="the-icons span3"><i class="demo-icon -fnt-icon-hdd-2">&#xedc8;</i> <span
            class="i-name">-fnt-icon-hdd-2</span><span class="i-code">0xedc8</span></div>
    <div title="Code: 0xedc9" class="the-icons span3"><i class="demo-icon -fnt-icon-key-4">&#xedc9;</i> <span
            class="i-name">-fnt-icon-key-4</span><span class="i-code">0xedc9</span></div>
    <div title="Code: 0xedca" class="the-icons span3"><i class="demo-icon -fnt-icon-certificate-2">&#xedca;</i> <span
            class="i-name">-fnt-icon-certificate-2</span><span class="i-code">0xedca</span></div>
    <div title="Code: 0xedcb" class="the-icons span3"><i class="demo-icon -fnt-icon-tasks-1">&#xedcb;</i> <span
            class="i-name">-fnt-icon-tasks-1</span><span class="i-code">0xedcb</span></div>
</div>
<div class="row">
    <div title="Code: 0xedcc" class="the-icons span3"><i class="demo-icon -fnt-icon-filter-1">&#xedcc;</i> <span
            class="i-name">-fnt-icon-filter-1</span><span class="i-code">0xedcc</span></div>
    <div title="Code: 0xedcd" class="the-icons span3"><i class="demo-icon -fnt-icon-gauge-2">&#xedcd;</i> <span
            class="i-name">-fnt-icon-gauge-2</span><span class="i-code">0xedcd</span></div>
    <div title="Code: 0xedce" class="the-icons span3"><i class="demo-icon -fnt-icon-smiley">&#xedce;</i> <span
            class="i-name">-fnt-icon-smiley</span><span class="i-code">0xedce</span></div>
    <div title="Code: 0xedcf" class="the-icons span3"><i class="demo-icon -fnt-icon-smiley-circled">&#xedcf;</i> <span
            class="i-name">-fnt-icon-smiley-circled</span><span class="i-code">0xedcf</span></div>
</div>
<div class="row">
    <div title="Code: 0xedd0" class="the-icons span3"><i class="demo-icon -fnt-icon-address-book-1">&#xedd0;</i> <span
            class="i-name">-fnt-icon-address-book-1</span><span class="i-code">0xedd0</span></div>
    <div title="Code: 0xedd1" class="the-icons span3"><i class="demo-icon -fnt-icon-address-book-alt">&#xedd1;</i> <span
            class="i-name">-fnt-icon-address-book-alt</span><span class="i-code">0xedd1</span></div>
    <div title="Code: 0xedd2" class="the-icons span3"><i class="demo-icon -fnt-icon-asl">&#xedd2;</i> <span
            class="i-name">-fnt-icon-asl</span><span class="i-code">0xedd2</span></div>
    <div title="Code: 0xedd3" class="the-icons span3"><i class="demo-icon -fnt-icon-glasses">&#xedd3;</i> <span
            class="i-name">-fnt-icon-glasses</span><span class="i-code">0xedd3</span></div>
</div>
<div class="row">
    <div title="Code: 0xedd4" class="the-icons span3"><i class="demo-icon -fnt-icon-hearing-impaired">&#xedd4;</i> <span
            class="i-name">-fnt-icon-hearing-impaired</span><span class="i-code">0xedd4</span></div>
    <div title="Code: 0xedd5" class="the-icons span3"><i class="demo-icon -fnt-icon-iphone-home">&#xedd5;</i> <span
            class="i-name">-fnt-icon-iphone-home</span><span class="i-code">0xedd5</span></div>
    <div title="Code: 0xedd6" class="the-icons span3"><i class="demo-icon -fnt-icon-person">&#xedd6;</i> <span
            class="i-name">-fnt-icon-person</span><span class="i-code">0xedd6</span></div>
    <div title="Code: 0xedd7" class="the-icons span3"><i class="demo-icon -fnt-icon-adult">&#xedd7;</i> <span
            class="i-name">-fnt-icon-adult</span><span class="i-code">0xedd7</span></div>
</div>
<div class="row">
    <div title="Code: 0xedd8" class="the-icons span3"><i class="demo-icon -fnt-icon-child-1">&#xedd8;</i> <span
            class="i-name">-fnt-icon-child-1</span><span class="i-code">0xedd8</span></div>
    <div title="Code: 0xedd9" class="the-icons span3"><i class="demo-icon -fnt-icon-blind-1">&#xedd9;</i> <span
            class="i-name">-fnt-icon-blind-1</span><span class="i-code">0xedd9</span></div>
    <div title="Code: 0xedda" class="the-icons span3"><i class="demo-icon -fnt-icon-guidedog">&#xedda;</i> <span
            class="i-name">-fnt-icon-guidedog</span><span class="i-code">0xedda</span></div>
    <div title="Code: 0xeddb" class="the-icons span3"><i class="demo-icon -fnt-icon-accessibility">&#xeddb;</i> <span
            class="i-name">-fnt-icon-accessibility</span><span class="i-code">0xeddb</span></div>
</div>
<div class="row">
    <div title="Code: 0xeddc" class="the-icons span3"><i class="demo-icon -fnt-icon-universal-access-1">&#xeddc;</i>
        <span class="i-name">-fnt-icon-universal-access-1</span><span class="i-code">0xeddc</span></div>
    <div title="Code: 0xeddd" class="the-icons span3"><i class="demo-icon -fnt-icon-male-2">&#xeddd;</i> <span
            class="i-name">-fnt-icon-male-2</span><span class="i-code">0xeddd</span></div>
    <div title="Code: 0xedde" class="the-icons span3"><i class="demo-icon -fnt-icon-female-2">&#xedde;</i> <span
            class="i-name">-fnt-icon-female-2</span><span class="i-code">0xedde</span></div>
    <div title="Code: 0xeddf" class="the-icons span3"><i class="demo-icon -fnt-icon-behance-2">&#xeddf;</i> <span
            class="i-name">-fnt-icon-behance-2</span><span class="i-code">0xeddf</span></div>
</div>
<div class="row">
    <div title="Code: 0xede0" class="the-icons span3"><i class="demo-icon -fnt-icon-blogger-2">&#xede0;</i> <span
            class="i-name">-fnt-icon-blogger-2</span><span class="i-code">0xede0</span></div>
    <div title="Code: 0xede1" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-3">&#xede1;</i> <span
            class="i-name">-fnt-icon-cc-3</span><span class="i-code">0xede1</span></div>
    <div title="Code: 0xede2" class="the-icons span3"><i class="demo-icon -fnt-icon-css">&#xede2;</i> <span
            class="i-name">-fnt-icon-css</span><span class="i-code">0xede2</span></div>
    <div title="Code: 0xede3" class="the-icons span3"><i class="demo-icon -fnt-icon-delicious-2">&#xede3;</i> <span
            class="i-name">-fnt-icon-delicious-2</span><span class="i-code">0xede3</span></div>
</div>
<div class="row">
    <div title="Code: 0xede4" class="the-icons span3"><i class="demo-icon -fnt-icon-deviantart-2">&#xede4;</i> <span
            class="i-name">-fnt-icon-deviantart-2</span><span class="i-code">0xede4</span></div>
    <div title="Code: 0xede5" class="the-icons span3"><i class="demo-icon -fnt-icon-digg-2">&#xede5;</i> <span
            class="i-name">-fnt-icon-digg-2</span><span class="i-code">0xede5</span></div>
    <div title="Code: 0xede6" class="the-icons span3"><i class="demo-icon -fnt-icon-dribbble-5">&#xede6;</i> <span
            class="i-name">-fnt-icon-dribbble-5</span><span class="i-code">0xede6</span></div>
    <div title="Code: 0xede7" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-7">&#xede7;</i> <span
            class="i-name">-fnt-icon-facebook-7</span><span class="i-code">0xede7</span></div>
</div>
<div class="row">
    <div title="Code: 0xede8" class="the-icons span3"><i class="demo-icon -fnt-icon-flickr-4">&#xede8;</i> <span
            class="i-name">-fnt-icon-flickr-4</span><span class="i-code">0xede8</span></div>
    <div title="Code: 0xede9" class="the-icons span3"><i class="demo-icon -fnt-icon-foursquare-2">&#xede9;</i> <span
            class="i-name">-fnt-icon-foursquare-2</span><span class="i-code">0xede9</span></div>
    <div title="Code: 0xedea" class="the-icons span3"><i class="demo-icon -fnt-icon-friendfeed-1">&#xedea;</i> <span
            class="i-name">-fnt-icon-friendfeed-1</span><span class="i-code">0xedea</span></div>
    <div title="Code: 0xedeb" class="the-icons span3"><i class="demo-icon -fnt-icon-friendfeed-rect-1">&#xedeb;</i>
        <span class="i-name">-fnt-icon-friendfeed-rect-1</span><span class="i-code">0xedeb</span></div>
</div>
<div class="row">
    <div title="Code: 0xedec" class="the-icons span3"><i class="demo-icon -fnt-icon-github-6">&#xedec;</i> <span
            class="i-name">-fnt-icon-github-6</span><span class="i-code">0xedec</span></div>
    <div title="Code: 0xeded" class="the-icons span3"><i class="demo-icon -fnt-icon-github-text-1">&#xeded;</i> <span
            class="i-name">-fnt-icon-github-text-1</span><span class="i-code">0xeded</span></div>
    <div title="Code: 0xedee" class="the-icons span3"><i class="demo-icon -fnt-icon-googleplus">&#xedee;</i> <span
            class="i-name">-fnt-icon-googleplus</span><span class="i-code">0xedee</span></div>
    <div title="Code: 0xedef" class="the-icons span3"><i class="demo-icon -fnt-icon-instagram-5">&#xedef;</i> <span
            class="i-name">-fnt-icon-instagram-5</span><span class="i-code">0xedef</span></div>
</div>
<div class="row">
    <div title="Code: 0xedf0" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-6">&#xedf0;</i> <span
            class="i-name">-fnt-icon-linkedin-6</span><span class="i-code">0xedf0</span></div>
    <div title="Code: 0xedf1" class="the-icons span3"><i class="demo-icon -fnt-icon-path">&#xedf1;</i> <span
            class="i-name">-fnt-icon-path</span><span class="i-code">0xedf1</span></div>
    <div title="Code: 0xedf2" class="the-icons span3"><i class="demo-icon -fnt-icon-picasa-2">&#xedf2;</i> <span
            class="i-name">-fnt-icon-picasa-2</span><span class="i-code">0xedf2</span></div>
    <div title="Code: 0xedf3" class="the-icons span3"><i class="demo-icon -fnt-icon-pinterest-4">&#xedf3;</i> <span
            class="i-name">-fnt-icon-pinterest-4</span><span class="i-code">0xedf3</span></div>
</div>
<div class="row">
    <div title="Code: 0xedf4" class="the-icons span3"><i class="demo-icon -fnt-icon-reddit-2">&#xedf4;</i> <span
            class="i-name">-fnt-icon-reddit-2</span><span class="i-code">0xedf4</span></div>
    <div title="Code: 0xedf5" class="the-icons span3"><i class="demo-icon -fnt-icon-skype-5">&#xedf5;</i> <span
            class="i-name">-fnt-icon-skype-5</span><span class="i-code">0xedf5</span></div>
    <div title="Code: 0xedf6" class="the-icons span3"><i class="demo-icon -fnt-icon-slideshare-1">&#xedf6;</i> <span
            class="i-name">-fnt-icon-slideshare-1</span><span class="i-code">0xedf6</span></div>
    <div title="Code: 0xedf7" class="the-icons span3"><i class="demo-icon -fnt-icon-stackoverflow-2">&#xedf7;</i> <span
            class="i-name">-fnt-icon-stackoverflow-2</span><span class="i-code">0xedf7</span></div>
</div>
<div class="row">
    <div title="Code: 0xedf8" class="the-icons span3"><i class="demo-icon -fnt-icon-stumbleupon-3">&#xedf8;</i> <span
            class="i-name">-fnt-icon-stumbleupon-3</span><span class="i-code">0xedf8</span></div>
    <div title="Code: 0xedf9" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-7">&#xedf9;</i> <span
            class="i-name">-fnt-icon-twitter-7</span><span class="i-code">0xedf9</span></div>
    <div title="Code: 0xedfa" class="the-icons span3"><i class="demo-icon -fnt-icon-tumblr-4">&#xedfa;</i> <span
            class="i-name">-fnt-icon-tumblr-4</span><span class="i-code">0xedfa</span></div>
    <div title="Code: 0xedfb" class="the-icons span3"><i class="demo-icon -fnt-icon-vimeo-5">&#xedfb;</i> <span
            class="i-name">-fnt-icon-vimeo-5</span><span class="i-code">0xedfb</span></div>
</div>
<div class="row">
    <div title="Code: 0xedfc" class="the-icons span3"><i class="demo-icon -fnt-icon-vkontakte-2">&#xedfc;</i> <span
            class="i-name">-fnt-icon-vkontakte-2</span><span class="i-code">0xedfc</span></div>
    <div title="Code: 0xedfd" class="the-icons span3"><i class="demo-icon -fnt-icon-w3c-1">&#xedfd;</i> <span
            class="i-name">-fnt-icon-w3c-1</span><span class="i-code">0xedfd</span></div>
    <div title="Code: 0xedfe" class="the-icons span3"><i class="demo-icon -fnt-icon-wordpress-3">&#xedfe;</i> <span
            class="i-name">-fnt-icon-wordpress-3</span><span class="i-code">0xedfe</span></div>
    <div title="Code: 0xedff" class="the-icons span3"><i class="demo-icon -fnt-icon-youtube-3">&#xedff;</i> <span
            class="i-name">-fnt-icon-youtube-3</span><span class="i-code">0xedff</span></div>
</div>
<div class="row">
    <div title="Code: 0xee00" class="the-icons span3"><i class="demo-icon -fnt-icon-music-4">&#xee00;</i> <span
            class="i-name">-fnt-icon-music-4</span><span class="i-code">0xee00</span></div>
    <div title="Code: 0xee01" class="the-icons span3"><i class="demo-icon -fnt-icon-search-7">&#xee01;</i> <span
            class="i-name">-fnt-icon-search-7</span><span class="i-code">0xee01</span></div>
    <div title="Code: 0xee02" class="the-icons span3"><i class="demo-icon -fnt-icon-mail-7">&#xee02;</i> <span
            class="i-name">-fnt-icon-mail-7</span><span class="i-code">0xee02</span></div>
    <div title="Code: 0xee03" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-7">&#xee03;</i> <span
            class="i-name">-fnt-icon-heart-7</span><span class="i-code">0xee03</span></div>
</div>
<div class="row">
    <div title="Code: 0xee04" class="the-icons span3"><i class="demo-icon -fnt-icon-star-7">&#xee04;</i> <span
            class="i-name">-fnt-icon-star-7</span><span class="i-code">0xee04</span></div>
    <div title="Code: 0xee05" class="the-icons span3"><i class="demo-icon -fnt-icon-user-7">&#xee05;</i> <span
            class="i-name">-fnt-icon-user-7</span><span class="i-code">0xee05</span></div>
    <div title="Code: 0xee06" class="the-icons span3"><i class="demo-icon -fnt-icon-videocam-5">&#xee06;</i> <span
            class="i-name">-fnt-icon-videocam-5</span><span class="i-code">0xee06</span></div>
    <div title="Code: 0xee07" class="the-icons span3"><i class="demo-icon -fnt-icon-camera-7">&#xee07;</i> <span
            class="i-name">-fnt-icon-camera-7</span><span class="i-code">0xee07</span></div>
</div>
<div class="row">
    <div title="Code: 0xee08" class="the-icons span3"><i class="demo-icon -fnt-icon-photo-1">&#xee08;</i> <span
            class="i-name">-fnt-icon-photo-1</span><span class="i-code">0xee08</span></div>
    <div title="Code: 0xee09" class="the-icons span3"><i class="demo-icon -fnt-icon-attach-6">&#xee09;</i> <span
            class="i-name">-fnt-icon-attach-6</span><span class="i-code">0xee09</span></div>
    <div title="Code: 0xee0a" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-7">&#xee0a;</i> <span
            class="i-name">-fnt-icon-lock-7</span><span class="i-code">0xee0a</span></div>
    <div title="Code: 0xee0b" class="the-icons span3"><i class="demo-icon -fnt-icon-eye-7">&#xee0b;</i> <span
            class="i-name">-fnt-icon-eye-7</span><span class="i-code">0xee0b</span></div>
</div>
<div class="row">
    <div title="Code: 0xee0c" class="the-icons span3"><i class="demo-icon -fnt-icon-tag-6">&#xee0c;</i> <span
            class="i-name">-fnt-icon-tag-6</span><span class="i-code">0xee0c</span></div>
    <div title="Code: 0xee0d" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-up-5">&#xee0d;</i> <span
            class="i-name">-fnt-icon-thumbs-up-5</span><span class="i-code">0xee0d</span></div>
    <div title="Code: 0xee0e" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-7">&#xee0e;</i> <span
            class="i-name">-fnt-icon-pencil-7</span><span class="i-code">0xee0e</span></div>
    <div title="Code: 0xee0f" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-6">&#xee0f;</i> <span
            class="i-name">-fnt-icon-comment-6</span><span class="i-code">0xee0f</span></div>
</div>
<div class="row">
    <div title="Code: 0xee10" class="the-icons span3"><i class="demo-icon -fnt-icon-location-7">&#xee10;</i> <span
            class="i-name">-fnt-icon-location-7</span><span class="i-code">0xee10</span></div>
    <div title="Code: 0xee11" class="the-icons span3"><i class="demo-icon -fnt-icon-cup-1">&#xee11;</i> <span
            class="i-name">-fnt-icon-cup-1</span><span class="i-code">0xee11</span></div>
    <div title="Code: 0xee12" class="the-icons span3"><i class="demo-icon -fnt-icon-trash-8">&#xee12;</i> <span
            class="i-name">-fnt-icon-trash-8</span><span class="i-code">0xee12</span></div>
    <div title="Code: 0xee13" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-7">&#xee13;</i> <span
            class="i-name">-fnt-icon-doc-7</span><span class="i-code">0xee13</span></div>
</div>
<div class="row">
    <div title="Code: 0xee14" class="the-icons span3"><i class="demo-icon -fnt-icon-note-1">&#xee14;</i> <span
            class="i-name">-fnt-icon-note-1</span><span class="i-code">0xee14</span></div>
    <div title="Code: 0xee15" class="the-icons span3"><i class="demo-icon -fnt-icon-cog-6">&#xee15;</i> <span
            class="i-name">-fnt-icon-cog-6</span><span class="i-code">0xee15</span></div>
    <div title="Code: 0xee16" class="the-icons span3"><i class="demo-icon -fnt-icon-params">&#xee16;</i> <span
            class="i-name">-fnt-icon-params</span><span class="i-code">0xee16</span></div>
    <div title="Code: 0xee17" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-8">&#xee17;</i> <span
            class="i-name">-fnt-icon-calendar-8</span><span class="i-code">0xee17</span></div>
</div>
<div class="row">
    <div title="Code: 0xee18" class="the-icons span3"><i class="demo-icon -fnt-icon-sound-1">&#xee18;</i> <span
            class="i-name">-fnt-icon-sound-1</span><span class="i-code">0xee18</span></div>
    <div title="Code: 0xee19" class="the-icons span3"><i class="demo-icon -fnt-icon-clock-7">&#xee19;</i> <span
            class="i-name">-fnt-icon-clock-7</span><span class="i-code">0xee19</span></div>
    <div title="Code: 0xee1a" class="the-icons span3"><i class="demo-icon -fnt-icon-lightbulb-3">&#xee1a;</i> <span
            class="i-name">-fnt-icon-lightbulb-3</span><span class="i-code">0xee1a</span></div>
    <div title="Code: 0xee1b" class="the-icons span3"><i class="demo-icon -fnt-icon-tv">&#xee1b;</i> <span
            class="i-name">-fnt-icon-tv</span><span class="i-code">0xee1b</span></div>
</div>
<div class="row">
    <div title="Code: 0xee1c" class="the-icons span3"><i class="demo-icon -fnt-icon-desktop-3">&#xee1c;</i> <span
            class="i-name">-fnt-icon-desktop-3</span><span class="i-code">0xee1c</span></div>
    <div title="Code: 0xee1d" class="the-icons span3"><i class="demo-icon -fnt-icon-mobile-6">&#xee1d;</i> <span
            class="i-name">-fnt-icon-mobile-6</span><span class="i-code">0xee1d</span></div>
    <div title="Code: 0xee1e" class="the-icons span3"><i class="demo-icon -fnt-icon-cd-3">&#xee1e;</i> <span
            class="i-name">-fnt-icon-cd-3</span><span class="i-code">0xee1e</span></div>
    <div title="Code: 0xee1f" class="the-icons span3"><i class="demo-icon -fnt-icon-inbox-4">&#xee1f;</i> <span
            class="i-name">-fnt-icon-inbox-4</span><span class="i-code">0xee1f</span></div>
</div>
<div class="row">
    <div title="Code: 0xee20" class="the-icons span3"><i class="demo-icon -fnt-icon-globe-6">&#xee20;</i> <span
            class="i-name">-fnt-icon-globe-6</span><span class="i-code">0xee20</span></div>
    <div title="Code: 0xee21" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-7">&#xee21;</i> <span
            class="i-name">-fnt-icon-cloud-7</span><span class="i-code">0xee21</span></div>
    <div title="Code: 0xee22" class="the-icons span3"><i class="demo-icon -fnt-icon-paper-plane-3">&#xee22;</i> <span
            class="i-name">-fnt-icon-paper-plane-3</span><span class="i-code">0xee22</span></div>
    <div title="Code: 0xee23" class="the-icons span3"><i class="demo-icon -fnt-icon-fire-3">&#xee23;</i> <span
            class="i-name">-fnt-icon-fire-3</span><span class="i-code">0xee23</span></div>
</div>
<div class="row">
    <div title="Code: 0xee24" class="the-icons span3"><i class="demo-icon -fnt-icon-graduation-cap-2">&#xee24;</i> <span
            class="i-name">-fnt-icon-graduation-cap-2</span><span class="i-code">0xee24</span></div>
    <div title="Code: 0xee25" class="the-icons span3"><i class="demo-icon -fnt-icon-megaphone-3">&#xee25;</i> <span
            class="i-name">-fnt-icon-megaphone-3</span><span class="i-code">0xee25</span></div>
    <div title="Code: 0xee26" class="the-icons span3"><i class="demo-icon -fnt-icon-database-3">&#xee26;</i> <span
            class="i-name">-fnt-icon-database-3</span><span class="i-code">0xee26</span></div>
    <div title="Code: 0xee27" class="the-icons span3"><i class="demo-icon -fnt-icon-key-5">&#xee27;</i> <span
            class="i-name">-fnt-icon-key-5</span><span class="i-code">0xee27</span></div>
</div>
<div class="row">
    <div title="Code: 0xee28" class="the-icons span3"><i class="demo-icon -fnt-icon-beaker-1">&#xee28;</i> <span
            class="i-name">-fnt-icon-beaker-1</span><span class="i-code">0xee28</span></div>
    <div title="Code: 0xee29" class="the-icons span3"><i class="demo-icon -fnt-icon-truck-1">&#xee29;</i> <span
            class="i-name">-fnt-icon-truck-1</span><span class="i-code">0xee29</span></div>
    <div title="Code: 0xee2a" class="the-icons span3"><i class="demo-icon -fnt-icon-money-2">&#xee2a;</i> <span
            class="i-name">-fnt-icon-money-2</span><span class="i-code">0xee2a</span></div>
    <div title="Code: 0xee2b" class="the-icons span3"><i class="demo-icon -fnt-icon-food-1">&#xee2b;</i> <span
            class="i-name">-fnt-icon-food-1</span><span class="i-code">0xee2b</span></div>
</div>
<div class="row">
    <div title="Code: 0xee2c" class="the-icons span3"><i class="demo-icon -fnt-icon-shop-1">&#xee2c;</i> <span
            class="i-name">-fnt-icon-shop-1</span><span class="i-code">0xee2c</span></div>
    <div title="Code: 0xee2d" class="the-icons span3"><i class="demo-icon -fnt-icon-diamond-1">&#xee2d;</i> <span
            class="i-name">-fnt-icon-diamond-1</span><span class="i-code">0xee2d</span></div>
    <div title="Code: 0xee2e" class="the-icons span3"><i class="demo-icon -fnt-icon-t-shirt">&#xee2e;</i> <span
            class="i-name">-fnt-icon-t-shirt</span><span class="i-code">0xee2e</span></div>
    <div title="Code: 0xee2f" class="the-icons span3"><i class="demo-icon -fnt-icon-wallet">&#xee2f;</i> <span
            class="i-name">-fnt-icon-wallet</span><span class="i-code">0xee2f</span></div>
</div>
<div class="row">
    <div title="Code: 0xee30" class="the-icons span3"><i class="demo-icon -fnt-icon-search-8">&#xee30;</i> <span
            class="i-name">-fnt-icon-search-8</span><span class="i-code">0xee30</span></div>
    <div title="Code: 0xee31" class="the-icons span3"><i class="demo-icon -fnt-icon-mail-8">&#xee31;</i> <span
            class="i-name">-fnt-icon-mail-8</span><span class="i-code">0xee31</span></div>
    <div title="Code: 0xee32" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-8">&#xee32;</i> <span
            class="i-name">-fnt-icon-heart-8</span><span class="i-code">0xee32</span></div>
    <div title="Code: 0xee33" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-empty-4">&#xee33;</i> <span
            class="i-name">-fnt-icon-heart-empty-4</span><span class="i-code">0xee33</span></div>
</div>
<div class="row">
    <div title="Code: 0xee34" class="the-icons span3"><i class="demo-icon -fnt-icon-star-8">&#xee34;</i> <span
            class="i-name">-fnt-icon-star-8</span><span class="i-code">0xee34</span></div>
    <div title="Code: 0xee35" class="the-icons span3"><i class="demo-icon -fnt-icon-user-8">&#xee35;</i> <span
            class="i-name">-fnt-icon-user-8</span><span class="i-code">0xee35</span></div>
    <div title="Code: 0xee36" class="the-icons span3"><i class="demo-icon -fnt-icon-video-5">&#xee36;</i> <span
            class="i-name">-fnt-icon-video-5</span><span class="i-code">0xee36</span></div>
    <div title="Code: 0xee37" class="the-icons span3"><i class="demo-icon -fnt-icon-picture-5">&#xee37;</i> <span
            class="i-name">-fnt-icon-picture-5</span><span class="i-code">0xee37</span></div>
</div>
<div class="row">
    <div title="Code: 0xee38" class="the-icons span3"><i class="demo-icon -fnt-icon-th-large-3">&#xee38;</i> <span
            class="i-name">-fnt-icon-th-large-3</span><span class="i-code">0xee38</span></div>
    <div title="Code: 0xee39" class="the-icons span3"><i class="demo-icon -fnt-icon-th-4">&#xee39;</i> <span
            class="i-name">-fnt-icon-th-4</span><span class="i-code">0xee39</span></div>
    <div title="Code: 0xee3a" class="the-icons span3"><i class="demo-icon -fnt-icon-th-list-5">&#xee3a;</i> <span
            class="i-name">-fnt-icon-th-list-5</span><span class="i-code">0xee3a</span></div>
    <div title="Code: 0xee3b" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-6">&#xee3b;</i> <span
            class="i-name">-fnt-icon-ok-6</span><span class="i-code">0xee3b</span></div>
</div>
<div class="row">
    <div title="Code: 0xee3c" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-circle-1">&#xee3c;</i> <span
            class="i-name">-fnt-icon-ok-circle-1</span><span class="i-code">0xee3c</span></div>
    <div title="Code: 0xee3d" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-7">&#xee3d;</i> <span
            class="i-name">-fnt-icon-cancel-7</span><span class="i-code">0xee3d</span></div>
    <div title="Code: 0xee3e" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-circle-2">&#xee3e;</i> <span
            class="i-name">-fnt-icon-cancel-circle-2</span><span class="i-code">0xee3e</span></div>
    <div title="Code: 0xee3f" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-circle-1">&#xee3f;</i> <span
            class="i-name">-fnt-icon-plus-circle-1</span><span class="i-code">0xee3f</span></div>
</div>
<div class="row">
    <div title="Code: 0xee40" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-circle-1">&#xee40;</i> <span
            class="i-name">-fnt-icon-minus-circle-1</span><span class="i-code">0xee40</span></div>
    <div title="Code: 0xee41" class="the-icons span3"><i class="demo-icon -fnt-icon-link-5">&#xee41;</i> <span
            class="i-name">-fnt-icon-link-5</span><span class="i-code">0xee41</span></div>
    <div title="Code: 0xee42" class="the-icons span3"><i class="demo-icon -fnt-icon-attach-7">&#xee42;</i> <span
            class="i-name">-fnt-icon-attach-7</span><span class="i-code">0xee42</span></div>
    <div title="Code: 0xee43" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-8">&#xee43;</i> <span
            class="i-name">-fnt-icon-lock-8</span><span class="i-code">0xee43</span></div>
</div>
<div class="row">
    <div title="Code: 0xee44" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-7">&#xee44;</i> <span
            class="i-name">-fnt-icon-lock-open-7</span><span class="i-code">0xee44</span></div>
    <div title="Code: 0xee45" class="the-icons span3"><i class="demo-icon -fnt-icon-tag-7">&#xee45;</i> <span
            class="i-name">-fnt-icon-tag-7</span><span class="i-code">0xee45</span></div>
    <div title="Code: 0xee46" class="the-icons span3"><i class="demo-icon -fnt-icon-reply-4">&#xee46;</i> <span
            class="i-name">-fnt-icon-reply-4</span><span class="i-code">0xee46</span></div>
    <div title="Code: 0xee47" class="the-icons span3"><i class="demo-icon -fnt-icon-reply-all-2">&#xee47;</i> <span
            class="i-name">-fnt-icon-reply-all-2</span><span class="i-code">0xee47</span></div>
</div>
<div class="row">
    <div title="Code: 0xee48" class="the-icons span3"><i class="demo-icon -fnt-icon-forward-4">&#xee48;</i> <span
            class="i-name">-fnt-icon-forward-4</span><span class="i-code">0xee48</span></div>
    <div title="Code: 0xee49" class="the-icons span3"><i class="demo-icon -fnt-icon-code-3">&#xee49;</i> <span
            class="i-name">-fnt-icon-code-3</span><span class="i-code">0xee49</span></div>
    <div title="Code: 0xee4a" class="the-icons span3"><i class="demo-icon -fnt-icon-retweet-4">&#xee4a;</i> <span
            class="i-name">-fnt-icon-retweet-4</span><span class="i-code">0xee4a</span></div>
    <div title="Code: 0xee4b" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-7">&#xee4b;</i> <span
            class="i-name">-fnt-icon-comment-7</span><span class="i-code">0xee4b</span></div>
</div>
<div class="row">
    <div title="Code: 0xee4c" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-alt-2">&#xee4c;</i> <span
            class="i-name">-fnt-icon-comment-alt-2</span><span class="i-code">0xee4c</span></div>
    <div title="Code: 0xee4d" class="the-icons span3"><i class="demo-icon -fnt-icon-chat-6">&#xee4d;</i> <span
            class="i-name">-fnt-icon-chat-6</span><span class="i-code">0xee4d</span></div>
    <div title="Code: 0xee4e" class="the-icons span3"><i class="demo-icon -fnt-icon-attention-5">&#xee4e;</i> <span
            class="i-name">-fnt-icon-attention-5</span><span class="i-code">0xee4e</span></div>
    <div title="Code: 0xee4f" class="the-icons span3"><i class="demo-icon -fnt-icon-location-8">&#xee4f;</i> <span
            class="i-name">-fnt-icon-location-8</span><span class="i-code">0xee4f</span></div>
</div>
<div class="row">
    <div title="Code: 0xee50" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-8">&#xee50;</i> <span
            class="i-name">-fnt-icon-doc-8</span><span class="i-code">0xee50</span></div>
    <div title="Code: 0xee51" class="the-icons span3"><i class="demo-icon -fnt-icon-docs-landscape">&#xee51;</i> <span
            class="i-name">-fnt-icon-docs-landscape</span><span class="i-code">0xee51</span></div>
    <div title="Code: 0xee52" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-6">&#xee52;</i> <span
            class="i-name">-fnt-icon-folder-6</span><span class="i-code">0xee52</span></div>
    <div title="Code: 0xee53" class="the-icons span3"><i class="demo-icon -fnt-icon-archive-2">&#xee53;</i> <span
            class="i-name">-fnt-icon-archive-2</span><span class="i-code">0xee53</span></div>
</div>
<div class="row">
    <div title="Code: 0xee54" class="the-icons span3"><i class="demo-icon -fnt-icon-rss-7">&#xee54;</i> <span
            class="i-name">-fnt-icon-rss-7</span><span class="i-code">0xee54</span></div>
    <div title="Code: 0xee55" class="the-icons span3"><i class="demo-icon -fnt-icon-rss-alt-1">&#xee55;</i> <span
            class="i-name">-fnt-icon-rss-alt-1</span><span class="i-code">0xee55</span></div>
    <div title="Code: 0xee56" class="the-icons span3"><i class="demo-icon -fnt-icon-cog-7">&#xee56;</i> <span
            class="i-name">-fnt-icon-cog-7</span><span class="i-code">0xee56</span></div>
    <div title="Code: 0xee57" class="the-icons span3"><i class="demo-icon -fnt-icon-logout-3">&#xee57;</i> <span
            class="i-name">-fnt-icon-logout-3</span><span class="i-code">0xee57</span></div>
</div>
<div class="row">
    <div title="Code: 0xee58" class="the-icons span3"><i class="demo-icon -fnt-icon-clock-8">&#xee58;</i> <span
            class="i-name">-fnt-icon-clock-8</span><span class="i-code">0xee58</span></div>
    <div title="Code: 0xee59" class="the-icons span3"><i class="demo-icon -fnt-icon-block-5">&#xee59;</i> <span
            class="i-name">-fnt-icon-block-5</span><span class="i-code">0xee59</span></div>
    <div title="Code: 0xee5a" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full-6">&#xee5a;</i> <span
            class="i-name">-fnt-icon-resize-full-6</span><span class="i-code">0xee5a</span></div>
    <div title="Code: 0xee5b" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full-circle">&#xee5b;</i>
        <span class="i-name">-fnt-icon-resize-full-circle</span><span class="i-code">0xee5b</span></div>
</div>
<div class="row">
    <div title="Code: 0xee5c" class="the-icons span3"><i class="demo-icon -fnt-icon-popup-5">&#xee5c;</i> <span
            class="i-name">-fnt-icon-popup-5</span><span class="i-code">0xee5c</span></div>
    <div title="Code: 0xee5d" class="the-icons span3"><i class="demo-icon -fnt-icon-left-open-5">&#xee5d;</i> <span
            class="i-name">-fnt-icon-left-open-5</span><span class="i-code">0xee5d</span></div>
    <div title="Code: 0xee5e" class="the-icons span3"><i class="demo-icon -fnt-icon-right-open-5">&#xee5e;</i> <span
            class="i-name">-fnt-icon-right-open-5</span><span class="i-code">0xee5e</span></div>
    <div title="Code: 0xee5f" class="the-icons span3"><i class="demo-icon -fnt-icon-down-circle-1">&#xee5f;</i> <span
            class="i-name">-fnt-icon-down-circle-1</span><span class="i-code">0xee5f</span></div>
</div>
<div class="row">
    <div title="Code: 0xee60" class="the-icons span3"><i class="demo-icon -fnt-icon-left-circle-1">&#xee60;</i> <span
            class="i-name">-fnt-icon-left-circle-1</span><span class="i-code">0xee60</span></div>
    <div title="Code: 0xee61" class="the-icons span3"><i class="demo-icon -fnt-icon-right-circle-1">&#xee61;</i> <span
            class="i-name">-fnt-icon-right-circle-1</span><span class="i-code">0xee61</span></div>
    <div title="Code: 0xee62" class="the-icons span3"><i class="demo-icon -fnt-icon-up-circle-1">&#xee62;</i> <span
            class="i-name">-fnt-icon-up-circle-1</span><span class="i-code">0xee62</span></div>
    <div title="Code: 0xee63" class="the-icons span3"><i class="demo-icon -fnt-icon-down-dir-3">&#xee63;</i> <span
            class="i-name">-fnt-icon-down-dir-3</span><span class="i-code">0xee63</span></div>
</div>
<div class="row">
    <div title="Code: 0xee64" class="the-icons span3"><i class="demo-icon -fnt-icon-right-dir-3">&#xee64;</i> <span
            class="i-name">-fnt-icon-right-dir-3</span><span class="i-code">0xee64</span></div>
    <div title="Code: 0xee65" class="the-icons span3"><i class="demo-icon -fnt-icon-down-micro">&#xee65;</i> <span
            class="i-name">-fnt-icon-down-micro</span><span class="i-code">0xee65</span></div>
    <div title="Code: 0xee66" class="the-icons span3"><i class="demo-icon -fnt-icon-up-micro">&#xee66;</i> <span
            class="i-name">-fnt-icon-up-micro</span><span class="i-code">0xee66</span></div>
    <div title="Code: 0xee67" class="the-icons span3"><i class="demo-icon -fnt-icon-cw-circle">&#xee67;</i> <span
            class="i-name">-fnt-icon-cw-circle</span><span class="i-code">0xee67</span></div>
</div>
<div class="row">
    <div title="Code: 0xee68" class="the-icons span3"><i class="demo-icon -fnt-icon-arrows-cw-3">&#xee68;</i> <span
            class="i-name">-fnt-icon-arrows-cw-3</span><span class="i-code">0xee68</span></div>
    <div title="Code: 0xee69" class="the-icons span3"><i class="demo-icon -fnt-icon-updown-circle">&#xee69;</i> <span
            class="i-name">-fnt-icon-updown-circle</span><span class="i-code">0xee69</span></div>
    <div title="Code: 0xee6a" class="the-icons span3"><i class="demo-icon -fnt-icon-target-5">&#xee6a;</i> <span
            class="i-name">-fnt-icon-target-5</span><span class="i-code">0xee6a</span></div>
    <div title="Code: 0xee6b" class="the-icons span3"><i class="demo-icon -fnt-icon-signal-5">&#xee6b;</i> <span
            class="i-name">-fnt-icon-signal-5</span><span class="i-code">0xee6b</span></div>
</div>
<div class="row">
    <div title="Code: 0xee6c" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-4">&#xee6c;</i> <span
            class="i-name">-fnt-icon-progress-4</span><span class="i-code">0xee6c</span></div>
    <div title="Code: 0xee6d" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-5">&#xee6d;</i> <span
            class="i-name">-fnt-icon-progress-5</span><span class="i-code">0xee6d</span></div>
    <div title="Code: 0xee6e" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-6">&#xee6e;</i> <span
            class="i-name">-fnt-icon-progress-6</span><span class="i-code">0xee6e</span></div>
    <div title="Code: 0xee6f" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-7">&#xee6f;</i> <span
            class="i-name">-fnt-icon-progress-7</span><span class="i-code">0xee6f</span></div>
</div>
<div class="row">
    <div title="Code: 0xee70" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-8">&#xee70;</i> <span
            class="i-name">-fnt-icon-progress-8</span><span class="i-code">0xee70</span></div>
    <div title="Code: 0xee71" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-9">&#xee71;</i> <span
            class="i-name">-fnt-icon-progress-9</span><span class="i-code">0xee71</span></div>
    <div title="Code: 0xee72" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-10">&#xee72;</i> <span
            class="i-name">-fnt-icon-progress-10</span><span class="i-code">0xee72</span></div>
    <div title="Code: 0xee73" class="the-icons span3"><i class="demo-icon -fnt-icon-progress-11">&#xee73;</i> <span
            class="i-name">-fnt-icon-progress-11</span><span class="i-code">0xee73</span></div>
</div>
<div class="row">
    <div title="Code: 0xee74" class="the-icons span3"><i class="demo-icon -fnt-icon-font-2">&#xee74;</i> <span
            class="i-name">-fnt-icon-font-2</span><span class="i-code">0xee74</span></div>
    <div title="Code: 0xee75" class="the-icons span3"><i class="demo-icon -fnt-icon-list-4">&#xee75;</i> <span
            class="i-name">-fnt-icon-list-4</span><span class="i-code">0xee75</span></div>
    <div title="Code: 0xee76" class="the-icons span3"><i class="demo-icon -fnt-icon-list-numbered-1">&#xee76;</i> <span
            class="i-name">-fnt-icon-list-numbered-1</span><span class="i-code">0xee76</span></div>
    <div title="Code: 0xee77" class="the-icons span3"><i class="demo-icon -fnt-icon-indent-left-2">&#xee77;</i> <span
            class="i-name">-fnt-icon-indent-left-2</span><span class="i-code">0xee77</span></div>
</div>
<div class="row">
    <div title="Code: 0xee78" class="the-icons span3"><i class="demo-icon -fnt-icon-indent-right-2">&#xee78;</i> <span
            class="i-name">-fnt-icon-indent-right-2</span><span class="i-code">0xee78</span></div>
    <div title="Code: 0xee79" class="the-icons span3"><i class="demo-icon -fnt-icon-cloud-8">&#xee79;</i> <span
            class="i-name">-fnt-icon-cloud-8</span><span class="i-code">0xee79</span></div>
    <div title="Code: 0xee7a" class="the-icons span3"><i class="demo-icon -fnt-icon-terminal-1">&#xee7a;</i> <span
            class="i-name">-fnt-icon-terminal-1</span><span class="i-code">0xee7a</span></div>
    <div title="Code: 0xee7b" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-rect-2">&#xee7b;</i> <span
            class="i-name">-fnt-icon-facebook-rect-2</span><span class="i-code">0xee7b</span></div>
</div>
<div class="row">
    <div title="Code: 0xee7c" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-bird-2">&#xee7c;</i> <span
            class="i-name">-fnt-icon-twitter-bird-2</span><span class="i-code">0xee7c</span></div>
    <div title="Code: 0xee7d" class="the-icons span3"><i class="demo-icon -fnt-icon-vimeo-rect-1">&#xee7d;</i> <span
            class="i-name">-fnt-icon-vimeo-rect-1</span><span class="i-code">0xee7d</span></div>
    <div title="Code: 0xee7e" class="the-icons span3"><i class="demo-icon -fnt-icon-tumblr-rect-1">&#xee7e;</i> <span
            class="i-name">-fnt-icon-tumblr-rect-1</span><span class="i-code">0xee7e</span></div>
    <div title="Code: 0xee7f" class="the-icons span3"><i class="demo-icon -fnt-icon-googleplus-rect-1">&#xee7f;</i>
        <span class="i-name">-fnt-icon-googleplus-rect-1</span><span class="i-code">0xee7f</span></div>
</div>
<div class="row">
    <div title="Code: 0xee80" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-rect-1">&#xee80;</i> <span
            class="i-name">-fnt-icon-linkedin-rect-1</span><span class="i-code">0xee80</span></div>
    <div title="Code: 0xee81" class="the-icons span3"><i class="demo-icon -fnt-icon-skype-6">&#xee81;</i> <span
            class="i-name">-fnt-icon-skype-6</span><span class="i-code">0xee81</span></div>
    <div title="Code: 0xee82" class="the-icons span3"><i class="demo-icon -fnt-icon-vkontakte-rect-1">&#xee82;</i> <span
            class="i-name">-fnt-icon-vkontakte-rect-1</span><span class="i-code">0xee82</span></div>
    <div title="Code: 0xee83" class="the-icons span3"><i class="demo-icon -fnt-icon-youtube-4">&#xee83;</i> <span
            class="i-name">-fnt-icon-youtube-4</span><span class="i-code">0xee83</span></div>
</div>
<div class="row">
    <div title="Code: 0xee84" class="the-icons span3"><i class="demo-icon -fnt-icon-odnoklassniki-rect-1">&#xee84;</i>
        <span class="i-name">-fnt-icon-odnoklassniki-rect-1</span><span class="i-code">0xee84</span></div>
    <div title="Code: 0xf004" class="the-icons span3"><i class="demo-icon -fnt-icon-down-open-2">&#xf004;</i> <span
            class="i-name">-fnt-icon-down-open-2</span><span class="i-code">0xf004</span></div>
    <div title="Code: 0xf005" class="the-icons span3"><i class="demo-icon -fnt-icon-up-open-2">&#xf005;</i> <span
            class="i-name">-fnt-icon-up-open-2</span><span class="i-code">0xf005</span></div>
    <div title="Code: 0xf006" class="the-icons span3"><i class="demo-icon -fnt-icon-right-open-3">&#xf006;</i> <span
            class="i-name">-fnt-icon-right-open-3</span><span class="i-code">0xf006</span></div>
</div>
<div class="row">
    <div title="Code: 0xf007" class="the-icons span3"><i class="demo-icon -fnt-icon-left-open-3">&#xf007;</i> <span
            class="i-name">-fnt-icon-left-open-3</span><span class="i-code">0xf007</span></div>
    <div title="Code: 0xf008" class="the-icons span3"><i class="demo-icon -fnt-icon-menu-3">&#xf008;</i> <span
            class="i-name">-fnt-icon-menu-3</span><span class="i-code">0xf008</span></div>
    <div title="Code: 0xf009" class="the-icons span3"><i class="demo-icon -fnt-icon-th-list-3">&#xf009;</i> <span
            class="i-name">-fnt-icon-th-list-3</span><span class="i-code">0xf009</span></div>
    <div title="Code: 0xf00a" class="the-icons span3"><i class="demo-icon -fnt-icon-th-thumb">&#xf00a;</i> <span
            class="i-name">-fnt-icon-th-thumb</span><span class="i-code">0xf00a</span></div>
</div>
<div class="row">
    <div title="Code: 0xf00b" class="the-icons span3"><i class="demo-icon -fnt-icon-th-thumb-empty">&#xf00b;</i> <span
            class="i-name">-fnt-icon-th-thumb-empty</span><span class="i-code">0xf00b</span></div>
    <div title="Code: 0xf00c" class="the-icons span3"><i class="demo-icon -fnt-icon-coverflow">&#xf00c;</i> <span
            class="i-name">-fnt-icon-coverflow</span><span class="i-code">0xf00c</span></div>
    <div title="Code: 0xf00d" class="the-icons span3"><i class="demo-icon -fnt-icon-coverflow-empty">&#xf00d;</i> <span
            class="i-name">-fnt-icon-coverflow-empty</span><span class="i-code">0xf00d</span></div>
    <div title="Code: 0xf00e" class="the-icons span3"><i class="demo-icon -fnt-icon-pause-4">&#xf00e;</i> <span
            class="i-name">-fnt-icon-pause-4</span><span class="i-code">0xf00e</span></div>
</div>
<div class="row">
    <div title="Code: 0xf00f" class="the-icons span3"><i class="demo-icon -fnt-icon-play-4">&#xf00f;</i> <span
            class="i-name">-fnt-icon-play-4</span><span class="i-code">0xf00f</span></div>
    <div title="Code: 0xf010" class="the-icons span3"><i class="demo-icon -fnt-icon-to-end-3">&#xf010;</i> <span
            class="i-name">-fnt-icon-to-end-3</span><span class="i-code">0xf010</span></div>
    <div title="Code: 0xf011" class="the-icons span3"><i class="demo-icon -fnt-icon-to-start-3">&#xf011;</i> <span
            class="i-name">-fnt-icon-to-start-3</span><span class="i-code">0xf011</span></div>
    <div title="Code: 0xf012" class="the-icons span3"><i class="demo-icon -fnt-icon-fast-forward-1">&#xf012;</i> <span
            class="i-name">-fnt-icon-fast-forward-1</span><span class="i-code">0xf012</span></div>
</div>
<div class="row">
    <div title="Code: 0xf013" class="the-icons span3"><i class="demo-icon -fnt-icon-fast-backward-1">&#xf013;</i> <span
            class="i-name">-fnt-icon-fast-backward-1</span><span class="i-code">0xf013</span></div>
    <div title="Code: 0xf014" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-cloud-4">&#xf014;</i> <span
            class="i-name">-fnt-icon-upload-cloud-4</span><span class="i-code">0xf014</span></div>
    <div title="Code: 0xf015" class="the-icons span3"><i class="demo-icon -fnt-icon-download-cloud-2">&#xf015;</i> <span
            class="i-name">-fnt-icon-download-cloud-2</span><span class="i-code">0xf015</span></div>
    <div title="Code: 0xf016" class="the-icons span3"><i class="demo-icon -fnt-icon-data-science">&#xf016;</i> <span
            class="i-name">-fnt-icon-data-science</span><span class="i-code">0xf016</span></div>
</div>
<div class="row">
    <div title="Code: 0xf017" class="the-icons span3"><i class="demo-icon -fnt-icon-data-science-inv">&#xf017;</i> <span
            class="i-name">-fnt-icon-data-science-inv</span><span class="i-code">0xf017</span></div>
    <div title="Code: 0xf018" class="the-icons span3"><i class="demo-icon -fnt-icon-globe-4">&#xf018;</i> <span
            class="i-name">-fnt-icon-globe-4</span><span class="i-code">0xf018</span></div>
    <div title="Code: 0xf019" class="the-icons span3"><i class="demo-icon -fnt-icon-globe-inv">&#xf019;</i> <span
            class="i-name">-fnt-icon-globe-inv</span><span class="i-code">0xf019</span></div>
    <div title="Code: 0xf01a" class="the-icons span3"><i class="demo-icon -fnt-icon-math">&#xf01a;</i> <span
            class="i-name">-fnt-icon-math</span><span class="i-code">0xf01a</span></div>
</div>
<div class="row">
    <div title="Code: 0xf01b" class="the-icons span3"><i class="demo-icon -fnt-icon-math-circled-empty">&#xf01b;</i>
        <span class="i-name">-fnt-icon-math-circled-empty</span><span class="i-code">0xf01b</span></div>
    <div title="Code: 0xf01c" class="the-icons span3"><i class="demo-icon -fnt-icon-math-circled">&#xf01c;</i> <span
            class="i-name">-fnt-icon-math-circled</span><span class="i-code">0xf01c</span></div>
    <div title="Code: 0xf01d" class="the-icons span3"><i class="demo-icon -fnt-icon-paper-plane-2">&#xf01d;</i> <span
            class="i-name">-fnt-icon-paper-plane-2</span><span class="i-code">0xf01d</span></div>
    <div title="Code: 0xf01e" class="the-icons span3"><i class="demo-icon -fnt-icon-paper-plane-alt2">&#xf01e;</i> <span
            class="i-name">-fnt-icon-paper-plane-alt2</span><span class="i-code">0xf01e</span></div>
</div>
<div class="row">
    <div title="Code: 0xf01f" class="the-icons span3"><i class="demo-icon -fnt-icon-paper-plane-alt">&#xf01f;</i> <span
            class="i-name">-fnt-icon-paper-plane-alt</span><span class="i-code">0xf01f</span></div>
    <div title="Code: 0xf020" class="the-icons span3"><i class="demo-icon -fnt-icon-color-adjust">&#xf020;</i> <span
            class="i-name">-fnt-icon-color-adjust</span><span class="i-code">0xf020</span></div>
    <div title="Code: 0xf022" class="the-icons span3"><i class="demo-icon -fnt-icon-star-half-1">&#xf022;</i> <span
            class="i-name">-fnt-icon-star-half-1</span><span class="i-code">0xf022</span></div>
    <div title="Code: 0xf024" class="the-icons span3"><i class="demo-icon -fnt-icon-star-half_empty">&#xf024;</i> <span
            class="i-name">-fnt-icon-star-half_empty</span><span class="i-code">0xf024</span></div>
</div>
<div class="row">
    <div title="Code: 0xf025" class="the-icons span3"><i class="demo-icon -fnt-icon-ccw-2">&#xf025;</i> <span
            class="i-name">-fnt-icon-ccw-2</span><span class="i-code">0xf025</span></div>
    <div title="Code: 0xf028" class="the-icons span3"><i class="demo-icon -fnt-icon-heart-broken">&#xf028;</i> <span
            class="i-name">-fnt-icon-heart-broken</span><span class="i-code">0xf028</span></div>
    <div title="Code: 0xf029" class="the-icons span3"><i class="demo-icon -fnt-icon-hash-1">&#xf029;</i> <span
            class="i-name">-fnt-icon-hash-1</span><span class="i-code">0xf029</span></div>
    <div title="Code: 0xf02a" class="the-icons span3"><i class="demo-icon -fnt-icon-reply-3">&#xf02a;</i> <span
            class="i-name">-fnt-icon-reply-3</span><span class="i-code">0xf02a</span></div>
</div>
<div class="row">
    <div title="Code: 0xf02b" class="the-icons span3"><i class="demo-icon -fnt-icon-retweet-2">&#xf02b;</i> <span
            class="i-name">-fnt-icon-retweet-2</span><span class="i-code">0xf02b</span></div>
    <div title="Code: 0xf02c" class="the-icons span3"><i class="demo-icon -fnt-icon-login-2">&#xf02c;</i> <span
            class="i-name">-fnt-icon-login-2</span><span class="i-code">0xf02c</span></div>
    <div title="Code: 0xf02d" class="the-icons span3"><i class="demo-icon -fnt-icon-logout-2">&#xf02d;</i> <span
            class="i-name">-fnt-icon-logout-2</span><span class="i-code">0xf02d</span></div>
    <div title="Code: 0xf02e" class="the-icons span3"><i class="demo-icon -fnt-icon-download-5">&#xf02e;</i> <span
            class="i-name">-fnt-icon-download-5</span><span class="i-code">0xf02e</span></div>
</div>
<div class="row">
    <div title="Code: 0xf02f" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-4">&#xf02f;</i> <span
            class="i-name">-fnt-icon-upload-4</span><span class="i-code">0xf02f</span></div>
    <div title="Code: 0xf031" class="the-icons span3"><i class="demo-icon -fnt-icon-location-5">&#xf031;</i> <span
            class="i-name">-fnt-icon-location-5</span><span class="i-code">0xf031</span></div>
    <div title="Code: 0xf032" class="the-icons span3"><i class="demo-icon -fnt-icon-monitor-1">&#xf032;</i> <span
            class="i-name">-fnt-icon-monitor-1</span><span class="i-code">0xf032</span></div>
    <div title="Code: 0xf033" class="the-icons span3"><i class="demo-icon -fnt-icon-tablet-3">&#xf033;</i> <span
            class="i-name">-fnt-icon-tablet-3</span><span class="i-code">0xf033</span></div>
</div>
<div class="row">
    <div title="Code: 0xf034" class="the-icons span3"><i class="demo-icon -fnt-icon-mobile-5">&#xf034;</i> <span
            class="i-name">-fnt-icon-mobile-5</span><span class="i-code">0xf034</span></div>
    <div title="Code: 0xf035" class="the-icons span3"><i class="demo-icon -fnt-icon-connected-object">&#xf035;</i> <span
            class="i-name">-fnt-icon-connected-object</span><span class="i-code">0xf035</span></div>
    <div title="Code: 0xf039" class="the-icons span3"><i class="demo-icon -fnt-icon-isight">&#xf039;</i> <span
            class="i-name">-fnt-icon-isight</span><span class="i-code">0xf039</span></div>
    <div title="Code: 0xf03a" class="the-icons span3"><i class="demo-icon -fnt-icon-videocam-3">&#xf03a;</i> <span
            class="i-name">-fnt-icon-videocam-3</span><span class="i-code">0xf03a</span></div>
</div>
<div class="row">
    <div title="Code: 0xf03b" class="the-icons span3"><i class="demo-icon -fnt-icon-shuffle-3">&#xf03b;</i> <span
            class="i-name">-fnt-icon-shuffle-3</span><span class="i-code">0xf03b</span></div>
    <div title="Code: 0xf03d" class="the-icons span3"><i class="demo-icon -fnt-icon-chat-5">&#xf03d;</i> <span
            class="i-name">-fnt-icon-chat-5</span><span class="i-code">0xf03d</span></div>
    <div title="Code: 0xf03f" class="the-icons span3"><i class="demo-icon -fnt-icon-bell-4">&#xf03f;</i> <span
            class="i-name">-fnt-icon-bell-4</span><span class="i-code">0xf03f</span></div>
    <div title="Code: 0xf040" class="the-icons span3"><i class="demo-icon -fnt-icon-movie">&#xf040;</i> <span
            class="i-name">-fnt-icon-movie</span><span class="i-code">0xf040</span></div>
</div>
<div class="row">
    <div title="Code: 0xf044" class="the-icons span3"><i class="demo-icon -fnt-icon-ruler">&#xf044;</i> <span
            class="i-name">-fnt-icon-ruler</span><span class="i-code">0xf044</span></div>
    <div title="Code: 0xf045" class="the-icons span3"><i class="demo-icon -fnt-icon-vector">&#xf045;</i> <span
            class="i-name">-fnt-icon-vector</span><span class="i-code">0xf045</span></div>
    <div title="Code: 0xf047" class="the-icons span3"><i class="demo-icon -fnt-icon-move">&#xf047;</i> <span
            class="i-name">-fnt-icon-move</span><span class="i-code">0xf047</span></div>
    <div title="Code: 0xf048" class="the-icons span3"><i class="demo-icon -fnt-icon-mic-4">&#xf048;</i> <span
            class="i-name">-fnt-icon-mic-4</span><span class="i-code">0xf048</span></div>
</div>
<div class="row">
    <div title="Code: 0xf04a" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-5">&#xf04a;</i> <span
            class="i-name">-fnt-icon-doc-5</span><span class="i-code">0xf04a</span></div>
    <div title="Code: 0xf04f" class="the-icons span3"><i class="demo-icon -fnt-icon-dribbble-circled-2">&#xf04f;</i>
        <span class="i-name">-fnt-icon-dribbble-circled-2</span><span class="i-code">0xf04f</span></div>
    <div title="Code: 0xf050" class="the-icons span3"><i class="demo-icon -fnt-icon-dribbble-3">&#xf050;</i> <span
            class="i-name">-fnt-icon-dribbble-3</span><span class="i-code">0xf050</span></div>
    <div title="Code: 0xf051" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-circled-2">&#xf051;</i>
        <span class="i-name">-fnt-icon-facebook-circled-2</span><span class="i-code">0xf051</span></div>
</div>
<div class="row">
    <div title="Code: 0xf052" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-4">&#xf052;</i> <span
            class="i-name">-fnt-icon-facebook-4</span><span class="i-code">0xf052</span></div>
    <div title="Code: 0xf053" class="the-icons span3"><i class="demo-icon -fnt-icon-github-circled-alt">&#xf053;</i>
        <span class="i-name">-fnt-icon-github-circled-alt</span><span class="i-code">0xf053</span></div>
    <div title="Code: 0xf054" class="the-icons span3"><i class="demo-icon -fnt-icon-github-circled-3">&#xf054;</i> <span
            class="i-name">-fnt-icon-github-circled-3</span><span class="i-code">0xf054</span></div>
    <div title="Code: 0xf055" class="the-icons span3"><i class="demo-icon -fnt-icon-github-3">&#xf055;</i> <span
            class="i-name">-fnt-icon-github-3</span><span class="i-code">0xf055</span></div>
</div>
<div class="row">
    <div title="Code: 0xf056" class="the-icons span3"><i class="demo-icon -fnt-icon-github-circled-alt2">&#xf056;</i>
        <span class="i-name">-fnt-icon-github-circled-alt2</span><span class="i-code">0xf056</span></div>
    <div title="Code: 0xf057" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-circled-2">&#xf057;</i>
        <span class="i-name">-fnt-icon-twitter-circled-2</span><span class="i-code">0xf057</span></div>
    <div title="Code: 0xf058" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-4">&#xf058;</i> <span
            class="i-name">-fnt-icon-twitter-4</span><span class="i-code">0xf058</span></div>
    <div title="Code: 0xf059" class="the-icons span3"><i class="demo-icon -fnt-icon-gplus-circled-1">&#xf059;</i> <span
            class="i-name">-fnt-icon-gplus-circled-1</span><span class="i-code">0xf059</span></div>
</div>
<div class="row">
    <div title="Code: 0xf05a" class="the-icons span3"><i class="demo-icon -fnt-icon-gplus-2">&#xf05a;</i> <span
            class="i-name">-fnt-icon-gplus-2</span><span class="i-code">0xf05a</span></div>
    <div title="Code: 0xf05b" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-circled-2">&#xf05b;</i>
        <span class="i-name">-fnt-icon-linkedin-circled-2</span><span class="i-code">0xf05b</span></div>
    <div title="Code: 0xf05c" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-3">&#xf05c;</i> <span
            class="i-name">-fnt-icon-linkedin-3</span><span class="i-code">0xf05c</span></div>
    <div title="Code: 0xf05d" class="the-icons span3"><i class="demo-icon -fnt-icon-instagram-2">&#xf05d;</i> <span
            class="i-name">-fnt-icon-instagram-2</span><span class="i-code">0xf05d</span></div>
</div>
<div class="row">
    <div title="Code: 0xf05e" class="the-icons span3"><i class="demo-icon -fnt-icon-instagram-circled">&#xf05e;</i>
        <span class="i-name">-fnt-icon-instagram-circled</span><span class="i-code">0xf05e</span></div>
    <div title="Code: 0xf05f" class="the-icons span3"><i class="demo-icon -fnt-icon-mfg-logo">&#xf05f;</i> <span
            class="i-name">-fnt-icon-mfg-logo</span><span class="i-code">0xf05f</span></div>
    <div title="Code: 0xf060" class="the-icons span3"><i class="demo-icon -fnt-icon-mfg-logo-circled">&#xf060;</i> <span
            class="i-name">-fnt-icon-mfg-logo-circled</span><span class="i-code">0xf060</span></div>
    <div title="Code: 0xf061" class="the-icons span3"><i class="demo-icon -fnt-icon-user-5">&#xf061;</i> <span
            class="i-name">-fnt-icon-user-5</span><span class="i-code">0xf061</span></div>
</div>
<div class="row">
    <div title="Code: 0xf062" class="the-icons span3"><i class="demo-icon -fnt-icon-user-male">&#xf062;</i> <span
            class="i-name">-fnt-icon-user-male</span><span class="i-code">0xf062</span></div>
    <div title="Code: 0xf063" class="the-icons span3"><i class="demo-icon -fnt-icon-user-female">&#xf063;</i> <span
            class="i-name">-fnt-icon-user-female</span><span class="i-code">0xf063</span></div>
    <div title="Code: 0xf064" class="the-icons span3"><i class="demo-icon -fnt-icon-users-3">&#xf064;</i> <span
            class="i-name">-fnt-icon-users-3</span><span class="i-code">0xf064</span></div>
    <div title="Code: 0xf067" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-4">&#xf067;</i> <span
            class="i-name">-fnt-icon-folder-4</span><span class="i-code">0xf067</span></div>
</div>
<div class="row">
    <div title="Code: 0xf068" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-open-1">&#xf068;</i> <span
            class="i-name">-fnt-icon-folder-open-1</span><span class="i-code">0xf068</span></div>
    <div title="Code: 0xf069" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-empty-2">&#xf069;</i> <span
            class="i-name">-fnt-icon-folder-empty-2</span><span class="i-code">0xf069</span></div>
    <div title="Code: 0xf06a" class="the-icons span3"><i class="demo-icon -fnt-icon-attach-4">&#xf06a;</i> <span
            class="i-name">-fnt-icon-attach-4</span><span class="i-code">0xf06a</span></div>
    <div title="Code: 0xf06d" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-circled-1">&#xf06d;</i> <span
            class="i-name">-fnt-icon-ok-circled-1</span><span class="i-code">0xf06d</span></div>
</div>
<div class="row">
    <div title="Code: 0xf06e" class="the-icons span3"><i class="demo-icon -fnt-icon-cancel-circled-3">&#xf06e;</i> <span
            class="i-name">-fnt-icon-cancel-circled-3</span><span class="i-code">0xf06e</span></div>
    <div title="Code: 0xf070" class="the-icons span3"><i class="demo-icon -fnt-icon-inbox-2">&#xf070;</i> <span
            class="i-name">-fnt-icon-inbox-2</span><span class="i-code">0xf070</span></div>
    <div title="Code: 0xf074" class="the-icons span3"><i class="demo-icon -fnt-icon-trophy-1">&#xf074;</i> <span
            class="i-name">-fnt-icon-trophy-1</span><span class="i-code">0xf074</span></div>
    <div title="Code: 0xf075" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-alt-1">&#xf075;</i> <span
            class="i-name">-fnt-icon-lock-open-alt-1</span><span class="i-code">0xf075</span></div>
</div>
<div class="row">
    <div title="Code: 0xf07b" class="the-icons span3"><i class="demo-icon -fnt-icon-link-4">&#xf07b;</i> <span
            class="i-name">-fnt-icon-link-4</span><span class="i-code">0xf07b</span></div>
    <div title="Code: 0xf07e" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-in-3">&#xf07e;</i> <span
            class="i-name">-fnt-icon-zoom-in-3</span><span class="i-code">0xf07e</span></div>
    <div title="Code: 0xf07f" class="the-icons span3"><i class="demo-icon -fnt-icon-zoom-out-3">&#xf07f;</i> <span
            class="i-name">-fnt-icon-zoom-out-3</span><span class="i-code">0xf07f</span></div>
    <div title="Code: 0xf080" class="the-icons span3"><i class="demo-icon -fnt-icon-stop-5">&#xf080;</i> <span
            class="i-name">-fnt-icon-stop-5</span><span class="i-code">0xf080</span></div>
</div>
<div class="row">
    <div title="Code: 0xf081" class="the-icons span3"><i class="demo-icon -fnt-icon-export-4">&#xf081;</i> <span
            class="i-name">-fnt-icon-export-4</span><span class="i-code">0xf081</span></div>
    <div title="Code: 0xf082" class="the-icons span3"><i class="demo-icon -fnt-icon-eye-5">&#xf082;</i> <span
            class="i-name">-fnt-icon-eye-5</span><span class="i-code">0xf082</span></div>
    <div title="Code: 0xf083" class="the-icons span3"><i class="demo-icon -fnt-icon-trash-5">&#xf083;</i> <span
            class="i-name">-fnt-icon-trash-5</span><span class="i-code">0xf083</span></div>
    <div title="Code: 0xf084" class="the-icons span3"><i class="demo-icon -fnt-icon-hdd-1">&#xf084;</i> <span
            class="i-name">-fnt-icon-hdd-1</span><span class="i-code">0xf084</span></div>
</div>
<div class="row">
    <div title="Code: 0xf085" class="the-icons span3"><i class="demo-icon -fnt-icon-info-circled-2">&#xf085;</i> <span
            class="i-name">-fnt-icon-info-circled-2</span><span class="i-code">0xf085</span></div>
    <div title="Code: 0xf086" class="the-icons span3"><i class="demo-icon -fnt-icon-info-circled-alt">&#xf086;</i> <span
            class="i-name">-fnt-icon-info-circled-alt</span><span class="i-code">0xf086</span></div>
    <div title="Code: 0xf087" class="the-icons span3"><i class="demo-icon -fnt-icon-print-4">&#xf087;</i> <span
            class="i-name">-fnt-icon-print-4</span><span class="i-code">0xf087</span></div>
    <div title="Code: 0xf088" class="the-icons span3"><i class="demo-icon -fnt-icon-fontsize">&#xf088;</i> <span
            class="i-name">-fnt-icon-fontsize</span><span class="i-code">0xf088</span></div>
</div>
<div class="row">
    <div title="Code: 0xf089" class="the-icons span3"><i class="demo-icon -fnt-icon-soundcloud-2">&#xf089;</i> <span
            class="i-name">-fnt-icon-soundcloud-2</span><span class="i-code">0xf089</span></div>
    <div title="Code: 0xf08a" class="the-icons span3"><i class="demo-icon -fnt-icon-soundcloud-circled">&#xf08a;</i>
        <span class="i-name">-fnt-icon-soundcloud-circled</span><span class="i-code">0xf08a</span></div>
    <div title="Code: 0xf08e" class="the-icons span3"><i class="demo-icon -fnt-icon-link-ext">&#xf08e;</i> <span
            class="i-name">-fnt-icon-link-ext</span><span class="i-code">0xf08e</span></div>
    <div title="Code: 0xf096" class="the-icons span3"><i class="demo-icon -fnt-icon-check-empty">&#xf096;</i> <span
            class="i-name">-fnt-icon-check-empty</span><span class="i-code">0xf096</span></div>
</div>
<div class="row">
    <div title="Code: 0xf097" class="the-icons span3"><i class="demo-icon -fnt-icon-bookmark-empty">&#xf097;</i> <span
            class="i-name">-fnt-icon-bookmark-empty</span><span class="i-code">0xf097</span></div>
    <div title="Code: 0xf098" class="the-icons span3"><i class="demo-icon -fnt-icon-phone-squared">&#xf098;</i> <span
            class="i-name">-fnt-icon-phone-squared</span><span class="i-code">0xf098</span></div>
    <div title="Code: 0xf099" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter">&#xf099;</i> <span
            class="i-name">-fnt-icon-twitter</span><span class="i-code">0xf099</span></div>
    <div title="Code: 0xf09a" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook">&#xf09a;</i> <span
            class="i-name">-fnt-icon-facebook</span><span class="i-code">0xf09a</span></div>
</div>
<div class="row">
    <div title="Code: 0xf09b" class="the-icons span3"><i class="demo-icon -fnt-icon-github-circled">&#xf09b;</i> <span
            class="i-name">-fnt-icon-github-circled</span><span class="i-code">0xf09b</span></div>
    <div title="Code: 0xf09e" class="the-icons span3"><i class="demo-icon -fnt-icon-rss">&#xf09e;</i> <span
            class="i-name">-fnt-icon-rss</span><span class="i-code">0xf09e</span></div>
    <div title="Code: 0xf0a0" class="the-icons span3"><i class="demo-icon -fnt-icon-hdd">&#xf0a0;</i> <span
            class="i-name">-fnt-icon-hdd</span><span class="i-code">0xf0a0</span></div>
    <div title="Code: 0xf0a3" class="the-icons span3"><i class="demo-icon -fnt-icon-certificate">&#xf0a3;</i> <span
            class="i-name">-fnt-icon-certificate</span><span class="i-code">0xf0a3</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0a8" class="the-icons span3"><i class="demo-icon -fnt-icon-left-circled">&#xf0a8;</i> <span
            class="i-name">-fnt-icon-left-circled</span><span class="i-code">0xf0a8</span></div>
    <div title="Code: 0xf0a9" class="the-icons span3"><i class="demo-icon -fnt-icon-right-circled">&#xf0a9;</i> <span
            class="i-name">-fnt-icon-right-circled</span><span class="i-code">0xf0a9</span></div>
    <div title="Code: 0xf0aa" class="the-icons span3"><i class="demo-icon -fnt-icon-up-circled">&#xf0aa;</i> <span
            class="i-name">-fnt-icon-up-circled</span><span class="i-code">0xf0aa</span></div>
    <div title="Code: 0xf0ab" class="the-icons span3"><i class="demo-icon -fnt-icon-down-circled">&#xf0ab;</i> <span
            class="i-name">-fnt-icon-down-circled</span><span class="i-code">0xf0ab</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0ae" class="the-icons span3"><i class="demo-icon -fnt-icon-tasks">&#xf0ae;</i> <span
            class="i-name">-fnt-icon-tasks</span><span class="i-code">0xf0ae</span></div>
    <div title="Code: 0xf0b0" class="the-icons span3"><i class="demo-icon -fnt-icon-filter">&#xf0b0;</i> <span
            class="i-name">-fnt-icon-filter</span><span class="i-code">0xf0b0</span></div>
    <div title="Code: 0xf0b2" class="the-icons span3"><i class="demo-icon -fnt-icon-resize-full-alt">&#xf0b2;</i> <span
            class="i-name">-fnt-icon-resize-full-alt</span><span class="i-code">0xf0b2</span></div>
    <div title="Code: 0xf0c3" class="the-icons span3"><i class="demo-icon -fnt-icon-beaker">&#xf0c3;</i> <span
            class="i-name">-fnt-icon-beaker</span><span class="i-code">0xf0c3</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0c5" class="the-icons span3"><i class="demo-icon -fnt-icon-docs">&#xf0c5;</i> <span
            class="i-name">-fnt-icon-docs</span><span class="i-code">0xf0c5</span></div>
    <div title="Code: 0xf0c8" class="the-icons span3"><i class="demo-icon -fnt-icon-blank">&#xf0c8;</i> <span
            class="i-name">-fnt-icon-blank</span><span class="i-code">0xf0c8</span></div>
    <div title="Code: 0xf0c9" class="the-icons span3"><i class="demo-icon -fnt-icon-menu">&#xf0c9;</i> <span
            class="i-name">-fnt-icon-menu</span><span class="i-code">0xf0c9</span></div>
    <div title="Code: 0xf0ca" class="the-icons span3"><i class="demo-icon -fnt-icon-list-bullet">&#xf0ca;</i> <span
            class="i-name">-fnt-icon-list-bullet</span><span class="i-code">0xf0ca</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0cb" class="the-icons span3"><i class="demo-icon -fnt-icon-list-numbered">&#xf0cb;</i> <span
            class="i-name">-fnt-icon-list-numbered</span><span class="i-code">0xf0cb</span></div>
    <div title="Code: 0xf0cc" class="the-icons span3"><i class="demo-icon -fnt-icon-strike">&#xf0cc;</i> <span
            class="i-name">-fnt-icon-strike</span><span class="i-code">0xf0cc</span></div>
    <div title="Code: 0xf0cd" class="the-icons span3"><i class="demo-icon -fnt-icon-underline">&#xf0cd;</i> <span
            class="i-name">-fnt-icon-underline</span><span class="i-code">0xf0cd</span></div>
    <div title="Code: 0xf0ce" class="the-icons span3"><i class="demo-icon -fnt-icon-table">&#xf0ce;</i> <span
            class="i-name">-fnt-icon-table</span><span class="i-code">0xf0ce</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0d0" class="the-icons span3"><i class="demo-icon -fnt-icon-magic">&#xf0d0;</i> <span
            class="i-name">-fnt-icon-magic</span><span class="i-code">0xf0d0</span></div>
    <div title="Code: 0xf0d2" class="the-icons span3"><i class="demo-icon -fnt-icon-pinterest-circled">&#xf0d2;</i>
        <span class="i-name">-fnt-icon-pinterest-circled</span><span class="i-code">0xf0d2</span></div>
    <div title="Code: 0xf0d3" class="the-icons span3"><i class="demo-icon -fnt-icon-pinterest-squared">&#xf0d3;</i>
        <span class="i-name">-fnt-icon-pinterest-squared</span><span class="i-code">0xf0d3</span></div>
    <div title="Code: 0xf0d4" class="the-icons span3"><i class="demo-icon -fnt-icon-gplus-squared">&#xf0d4;</i> <span
            class="i-name">-fnt-icon-gplus-squared</span><span class="i-code">0xf0d4</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0d5" class="the-icons span3"><i class="demo-icon -fnt-icon-gplus">&#xf0d5;</i> <span
            class="i-name">-fnt-icon-gplus</span><span class="i-code">0xf0d5</span></div>
    <div title="Code: 0xf0d6" class="the-icons span3"><i class="demo-icon -fnt-icon-money">&#xf0d6;</i> <span
            class="i-name">-fnt-icon-money</span><span class="i-code">0xf0d6</span></div>
    <div title="Code: 0xf0db" class="the-icons span3"><i class="demo-icon -fnt-icon-columns">&#xf0db;</i> <span
            class="i-name">-fnt-icon-columns</span><span class="i-code">0xf0db</span></div>
    <div title="Code: 0xf0dc" class="the-icons span3"><i class="demo-icon -fnt-icon-sort">&#xf0dc;</i> <span
            class="i-name">-fnt-icon-sort</span><span class="i-code">0xf0dc</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0dd" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-down">&#xf0dd;</i> <span
            class="i-name">-fnt-icon-sort-down</span><span class="i-code">0xf0dd</span></div>
    <div title="Code: 0xf0de" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-up">&#xf0de;</i> <span
            class="i-name">-fnt-icon-sort-up</span><span class="i-code">0xf0de</span></div>
    <div title="Code: 0xf0e0" class="the-icons span3"><i class="demo-icon -fnt-icon-mail-alt">&#xf0e0;</i> <span
            class="i-name">-fnt-icon-mail-alt</span><span class="i-code">0xf0e0</span></div>
    <div title="Code: 0xf0e1" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin">&#xf0e1;</i> <span
            class="i-name">-fnt-icon-linkedin</span><span class="i-code">0xf0e1</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0e4" class="the-icons span3"><i class="demo-icon -fnt-icon-gauge">&#xf0e4;</i> <span
            class="i-name">-fnt-icon-gauge</span><span class="i-code">0xf0e4</span></div>
    <div title="Code: 0xf0e5" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-empty">&#xf0e5;</i> <span
            class="i-name">-fnt-icon-comment-empty</span><span class="i-code">0xf0e5</span></div>
    <div title="Code: 0xf0e6" class="the-icons span3"><i class="demo-icon -fnt-icon-chat-empty">&#xf0e6;</i> <span
            class="i-name">-fnt-icon-chat-empty</span><span class="i-code">0xf0e6</span></div>
    <div title="Code: 0xf0e8" class="the-icons span3"><i class="demo-icon -fnt-icon-sitemap">&#xf0e8;</i> <span
            class="i-name">-fnt-icon-sitemap</span><span class="i-code">0xf0e8</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0ea" class="the-icons span3"><i class="demo-icon -fnt-icon-paste">&#xf0ea;</i> <span
            class="i-name">-fnt-icon-paste</span><span class="i-code">0xf0ea</span></div>
    <div title="Code: 0xf0eb" class="the-icons span3"><i class="demo-icon -fnt-icon-lightbulb">&#xf0eb;</i> <span
            class="i-name">-fnt-icon-lightbulb</span><span class="i-code">0xf0eb</span></div>
    <div title="Code: 0xf0ec" class="the-icons span3"><i class="demo-icon -fnt-icon-exchange">&#xf0ec;</i> <span
            class="i-name">-fnt-icon-exchange</span><span class="i-code">0xf0ec</span></div>
    <div title="Code: 0xf0ed" class="the-icons span3"><i class="demo-icon -fnt-icon-download-cloud">&#xf0ed;</i> <span
            class="i-name">-fnt-icon-download-cloud</span><span class="i-code">0xf0ed</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0ee" class="the-icons span3"><i class="demo-icon -fnt-icon-upload-cloud">&#xf0ee;</i> <span
            class="i-name">-fnt-icon-upload-cloud</span><span class="i-code">0xf0ee</span></div>
    <div title="Code: 0xf0f0" class="the-icons span3"><i class="demo-icon -fnt-icon-user-md">&#xf0f0;</i> <span
            class="i-name">-fnt-icon-user-md</span><span class="i-code">0xf0f0</span></div>
    <div title="Code: 0xf0f1" class="the-icons span3"><i class="demo-icon -fnt-icon-stethoscope">&#xf0f1;</i> <span
            class="i-name">-fnt-icon-stethoscope</span><span class="i-code">0xf0f1</span></div>
    <div title="Code: 0xf0f2" class="the-icons span3"><i class="demo-icon -fnt-icon-suitcase">&#xf0f2;</i> <span
            class="i-name">-fnt-icon-suitcase</span><span class="i-code">0xf0f2</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0f3" class="the-icons span3"><i class="demo-icon -fnt-icon-bell-alt">&#xf0f3;</i> <span
            class="i-name">-fnt-icon-bell-alt</span><span class="i-code">0xf0f3</span></div>
    <div title="Code: 0xf0f4" class="the-icons span3"><i class="demo-icon -fnt-icon-coffee">&#xf0f4;</i> <span
            class="i-name">-fnt-icon-coffee</span><span class="i-code">0xf0f4</span></div>
    <div title="Code: 0xf0f5" class="the-icons span3"><i class="demo-icon -fnt-icon-food">&#xf0f5;</i> <span
            class="i-name">-fnt-icon-food</span><span class="i-code">0xf0f5</span></div>
    <div title="Code: 0xf0f6" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-text">&#xf0f6;</i> <span
            class="i-name">-fnt-icon-doc-text</span><span class="i-code">0xf0f6</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0f7" class="the-icons span3"><i class="demo-icon -fnt-icon-building">&#xf0f7;</i> <span
            class="i-name">-fnt-icon-building</span><span class="i-code">0xf0f7</span></div>
    <div title="Code: 0xf0f8" class="the-icons span3"><i class="demo-icon -fnt-icon-hospital">&#xf0f8;</i> <span
            class="i-name">-fnt-icon-hospital</span><span class="i-code">0xf0f8</span></div>
    <div title="Code: 0xf0f9" class="the-icons span3"><i class="demo-icon -fnt-icon-ambulance">&#xf0f9;</i> <span
            class="i-name">-fnt-icon-ambulance</span><span class="i-code">0xf0f9</span></div>
    <div title="Code: 0xf0fa" class="the-icons span3"><i class="demo-icon -fnt-icon-medkit">&#xf0fa;</i> <span
            class="i-name">-fnt-icon-medkit</span><span class="i-code">0xf0fa</span></div>
</div>
<div class="row">
    <div title="Code: 0xf0fb" class="the-icons span3"><i class="demo-icon -fnt-icon-fighter-jet">&#xf0fb;</i> <span
            class="i-name">-fnt-icon-fighter-jet</span><span class="i-code">0xf0fb</span></div>
    <div title="Code: 0xf0fc" class="the-icons span3"><i class="demo-icon -fnt-icon-beer">&#xf0fc;</i> <span
            class="i-name">-fnt-icon-beer</span><span class="i-code">0xf0fc</span></div>
    <div title="Code: 0xf0fd" class="the-icons span3"><i class="demo-icon -fnt-icon-h-sigh">&#xf0fd;</i> <span
            class="i-name">-fnt-icon-h-sigh</span><span class="i-code">0xf0fd</span></div>
    <div title="Code: 0xf0fe" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-squared">&#xf0fe;</i> <span
            class="i-name">-fnt-icon-plus-squared</span><span class="i-code">0xf0fe</span></div>
</div>
<div class="row">
    <div title="Code: 0xf100" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-double-left">&#xf100;</i>
        <span class="i-name">-fnt-icon-angle-double-left</span><span class="i-code">0xf100</span></div>
    <div title="Code: 0xf101" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-double-right">&#xf101;</i>
        <span class="i-name">-fnt-icon-angle-double-right</span><span class="i-code">0xf101</span></div>
    <div title="Code: 0xf102" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-double-up">&#xf102;</i> <span
            class="i-name">-fnt-icon-angle-double-up</span><span class="i-code">0xf102</span></div>
    <div title="Code: 0xf103" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-double-down">&#xf103;</i>
        <span class="i-name">-fnt-icon-angle-double-down</span><span class="i-code">0xf103</span></div>
</div>
<div class="row">
    <div title="Code: 0xf104" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-left">&#xf104;</i> <span
            class="i-name">-fnt-icon-angle-left</span><span class="i-code">0xf104</span></div>
    <div title="Code: 0xf105" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-right">&#xf105;</i> <span
            class="i-name">-fnt-icon-angle-right</span><span class="i-code">0xf105</span></div>
    <div title="Code: 0xf106" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-up">&#xf106;</i> <span
            class="i-name">-fnt-icon-angle-up</span><span class="i-code">0xf106</span></div>
    <div title="Code: 0xf107" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-down">&#xf107;</i> <span
            class="i-name">-fnt-icon-angle-down</span><span class="i-code">0xf107</span></div>
</div>
<div class="row">
    <div title="Code: 0xf108" class="the-icons span3"><i class="demo-icon -fnt-icon-desktop">&#xf108;</i> <span
            class="i-name">-fnt-icon-desktop</span><span class="i-code">0xf108</span></div>
    <div title="Code: 0xf109" class="the-icons span3"><i class="demo-icon -fnt-icon-laptop">&#xf109;</i> <span
            class="i-name">-fnt-icon-laptop</span><span class="i-code">0xf109</span></div>
    <div title="Code: 0xf10a" class="the-icons span3"><i class="demo-icon -fnt-icon-tablet">&#xf10a;</i> <span
            class="i-name">-fnt-icon-tablet</span><span class="i-code">0xf10a</span></div>
    <div title="Code: 0xf10b" class="the-icons span3"><i class="demo-icon -fnt-icon-mobile">&#xf10b;</i> <span
            class="i-name">-fnt-icon-mobile</span><span class="i-code">0xf10b</span></div>
</div>
<div class="row">
    <div title="Code: 0xf10c" class="the-icons span3"><i class="demo-icon -fnt-icon-circle-empty">&#xf10c;</i> <span
            class="i-name">-fnt-icon-circle-empty</span><span class="i-code">0xf10c</span></div>
    <div title="Code: 0xf10d" class="the-icons span3"><i class="demo-icon -fnt-icon-quote-left">&#xf10d;</i> <span
            class="i-name">-fnt-icon-quote-left</span><span class="i-code">0xf10d</span></div>
    <div title="Code: 0xf10e" class="the-icons span3"><i class="demo-icon -fnt-icon-quote-right">&#xf10e;</i> <span
            class="i-name">-fnt-icon-quote-right</span><span class="i-code">0xf10e</span></div>
    <div title="Code: 0xf110" class="the-icons span3"><i class="demo-icon -fnt-icon-spinner">&#xf110;</i> <span
            class="i-name">-fnt-icon-spinner</span><span class="i-code">0xf110</span></div>
</div>
<div class="row">
    <div title="Code: 0xf111" class="the-icons span3"><i class="demo-icon -fnt-icon-circle">&#xf111;</i> <span
            class="i-name">-fnt-icon-circle</span><span class="i-code">0xf111</span></div>
    <div title="Code: 0xf112" class="the-icons span3"><i class="demo-icon -fnt-icon-reply">&#xf112;</i> <span
            class="i-name">-fnt-icon-reply</span><span class="i-code">0xf112</span></div>
    <div title="Code: 0xf113" class="the-icons span3"><i class="demo-icon -fnt-icon-github">&#xf113;</i> <span
            class="i-name">-fnt-icon-github</span><span class="i-code">0xf113</span></div>
    <div title="Code: 0xf114" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-empty">&#xf114;</i> <span
            class="i-name">-fnt-icon-folder-empty</span><span class="i-code">0xf114</span></div>
</div>
<div class="row">
    <div title="Code: 0xf115" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-open-empty">&#xf115;</i>
        <span class="i-name">-fnt-icon-folder-open-empty</span><span class="i-code">0xf115</span></div>
    <div title="Code: 0xf118" class="the-icons span3"><i class="demo-icon -fnt-icon-smile">&#xf118;</i> <span
            class="i-name">-fnt-icon-smile</span><span class="i-code">0xf118</span></div>
    <div title="Code: 0xf119" class="the-icons span3"><i class="demo-icon -fnt-icon-frown">&#xf119;</i> <span
            class="i-name">-fnt-icon-frown</span><span class="i-code">0xf119</span></div>
    <div title="Code: 0xf11a" class="the-icons span3"><i class="demo-icon -fnt-icon-meh">&#xf11a;</i> <span
            class="i-name">-fnt-icon-meh</span><span class="i-code">0xf11a</span></div>
</div>
<div class="row">
    <div title="Code: 0xf11b" class="the-icons span3"><i class="demo-icon -fnt-icon-gamepad">&#xf11b;</i> <span
            class="i-name">-fnt-icon-gamepad</span><span class="i-code">0xf11b</span></div>
    <div title="Code: 0xf11c" class="the-icons span3"><i class="demo-icon -fnt-icon-keyboard">&#xf11c;</i> <span
            class="i-name">-fnt-icon-keyboard</span><span class="i-code">0xf11c</span></div>
    <div title="Code: 0xf11d" class="the-icons span3"><i class="demo-icon -fnt-icon-flag-empty">&#xf11d;</i> <span
            class="i-name">-fnt-icon-flag-empty</span><span class="i-code">0xf11d</span></div>
    <div title="Code: 0xf11e" class="the-icons span3"><i class="demo-icon -fnt-icon-flag-checkered">&#xf11e;</i> <span
            class="i-name">-fnt-icon-flag-checkered</span><span class="i-code">0xf11e</span></div>
</div>
<div class="row">
    <div title="Code: 0xf120" class="the-icons span3"><i class="demo-icon -fnt-icon-terminal">&#xf120;</i> <span
            class="i-name">-fnt-icon-terminal</span><span class="i-code">0xf120</span></div>
    <div title="Code: 0xf121" class="the-icons span3"><i class="demo-icon -fnt-icon-code">&#xf121;</i> <span
            class="i-name">-fnt-icon-code</span><span class="i-code">0xf121</span></div>
    <div title="Code: 0xf122" class="the-icons span3"><i class="demo-icon -fnt-icon-reply-all">&#xf122;</i> <span
            class="i-name">-fnt-icon-reply-all</span><span class="i-code">0xf122</span></div>
    <div title="Code: 0xf123" class="the-icons span3"><i class="demo-icon -fnt-icon-star-half-alt">&#xf123;</i> <span
            class="i-name">-fnt-icon-star-half-alt</span><span class="i-code">0xf123</span></div>
</div>
<div class="row">
    <div title="Code: 0xf124" class="the-icons span3"><i class="demo-icon -fnt-icon-direction">&#xf124;</i> <span
            class="i-name">-fnt-icon-direction</span><span class="i-code">0xf124</span></div>
    <div title="Code: 0xf125" class="the-icons span3"><i class="demo-icon -fnt-icon-crop">&#xf125;</i> <span
            class="i-name">-fnt-icon-crop</span><span class="i-code">0xf125</span></div>
    <div title="Code: 0xf126" class="the-icons span3"><i class="demo-icon -fnt-icon-fork">&#xf126;</i> <span
            class="i-name">-fnt-icon-fork</span><span class="i-code">0xf126</span></div>
    <div title="Code: 0xf127" class="the-icons span3"><i class="demo-icon -fnt-icon-unlink">&#xf127;</i> <span
            class="i-name">-fnt-icon-unlink</span><span class="i-code">0xf127</span></div>
</div>
<div class="row">
    <div title="Code: 0xf128" class="the-icons span3"><i class="demo-icon -fnt-icon-help">&#xf128;</i> <span
            class="i-name">-fnt-icon-help</span><span class="i-code">0xf128</span></div>
    <div title="Code: 0xf129" class="the-icons span3"><i class="demo-icon -fnt-icon-info">&#xf129;</i> <span
            class="i-name">-fnt-icon-info</span><span class="i-code">0xf129</span></div>
    <div title="Code: 0xf12a" class="the-icons span3"><i class="demo-icon -fnt-icon-attention-alt">&#xf12a;</i> <span
            class="i-name">-fnt-icon-attention-alt</span><span class="i-code">0xf12a</span></div>
    <div title="Code: 0xf12b" class="the-icons span3"><i class="demo-icon -fnt-icon-superscript">&#xf12b;</i> <span
            class="i-name">-fnt-icon-superscript</span><span class="i-code">0xf12b</span></div>
</div>
<div class="row">
    <div title="Code: 0xf12c" class="the-icons span3"><i class="demo-icon -fnt-icon-subscript">&#xf12c;</i> <span
            class="i-name">-fnt-icon-subscript</span><span class="i-code">0xf12c</span></div>
    <div title="Code: 0xf12d" class="the-icons span3"><i class="demo-icon -fnt-icon-eraser">&#xf12d;</i> <span
            class="i-name">-fnt-icon-eraser</span><span class="i-code">0xf12d</span></div>
    <div title="Code: 0xf12e" class="the-icons span3"><i class="demo-icon -fnt-icon-puzzle">&#xf12e;</i> <span
            class="i-name">-fnt-icon-puzzle</span><span class="i-code">0xf12e</span></div>
    <div title="Code: 0xf130" class="the-icons span3"><i class="demo-icon -fnt-icon-mic">&#xf130;</i> <span
            class="i-name">-fnt-icon-mic</span><span class="i-code">0xf130</span></div>
</div>
<div class="row">
    <div title="Code: 0xf131" class="the-icons span3"><i class="demo-icon -fnt-icon-mute">&#xf131;</i> <span
            class="i-name">-fnt-icon-mute</span><span class="i-code">0xf131</span></div>
    <div title="Code: 0xf132" class="the-icons span3"><i class="demo-icon -fnt-icon-shield">&#xf132;</i> <span
            class="i-name">-fnt-icon-shield</span><span class="i-code">0xf132</span></div>
    <div title="Code: 0xf133" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-empty">&#xf133;</i> <span
            class="i-name">-fnt-icon-calendar-empty</span><span class="i-code">0xf133</span></div>
    <div title="Code: 0xf134" class="the-icons span3"><i class="demo-icon -fnt-icon-extinguisher">&#xf134;</i> <span
            class="i-name">-fnt-icon-extinguisher</span><span class="i-code">0xf134</span></div>
</div>
<div class="row">
    <div title="Code: 0xf135" class="the-icons span3"><i class="demo-icon -fnt-icon-rocket">&#xf135;</i> <span
            class="i-name">-fnt-icon-rocket</span><span class="i-code">0xf135</span></div>
    <div title="Code: 0xf136" class="the-icons span3"><i class="demo-icon -fnt-icon-maxcdn">&#xf136;</i> <span
            class="i-name">-fnt-icon-maxcdn</span><span class="i-code">0xf136</span></div>
    <div title="Code: 0xf137" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-circled-left">&#xf137;</i>
        <span class="i-name">-fnt-icon-angle-circled-left</span><span class="i-code">0xf137</span></div>
    <div title="Code: 0xf138" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-circled-right">&#xf138;</i>
        <span class="i-name">-fnt-icon-angle-circled-right</span><span class="i-code">0xf138</span></div>
</div>
<div class="row">
    <div title="Code: 0xf139" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-circled-up">&#xf139;</i> <span
            class="i-name">-fnt-icon-angle-circled-up</span><span class="i-code">0xf139</span></div>
    <div title="Code: 0xf13a" class="the-icons span3"><i class="demo-icon -fnt-icon-angle-circled-down">&#xf13a;</i>
        <span class="i-name">-fnt-icon-angle-circled-down</span><span class="i-code">0xf13a</span></div>
    <div title="Code: 0xf13b" class="the-icons span3"><i class="demo-icon -fnt-icon-html5">&#xf13b;</i> <span
            class="i-name">-fnt-icon-html5</span><span class="i-code">0xf13b</span></div>
    <div title="Code: 0xf13c" class="the-icons span3"><i class="demo-icon -fnt-icon-css3">&#xf13c;</i> <span
            class="i-name">-fnt-icon-css3</span><span class="i-code">0xf13c</span></div>
</div>
<div class="row">
    <div title="Code: 0xf13d" class="the-icons span3"><i class="demo-icon -fnt-icon-anchor">&#xf13d;</i> <span
            class="i-name">-fnt-icon-anchor</span><span class="i-code">0xf13d</span></div>
    <div title="Code: 0xf13e" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-alt">&#xf13e;</i> <span
            class="i-name">-fnt-icon-lock-open-alt</span><span class="i-code">0xf13e</span></div>
    <div title="Code: 0xf140" class="the-icons span3"><i class="demo-icon -fnt-icon-bullseye">&#xf140;</i> <span
            class="i-name">-fnt-icon-bullseye</span><span class="i-code">0xf140</span></div>
    <div title="Code: 0xf141" class="the-icons span3"><i class="demo-icon -fnt-icon-ellipsis">&#xf141;</i> <span
            class="i-name">-fnt-icon-ellipsis</span><span class="i-code">0xf141</span></div>
</div>
<div class="row">
    <div title="Code: 0xf142" class="the-icons span3"><i class="demo-icon -fnt-icon-ellipsis-vert">&#xf142;</i> <span
            class="i-name">-fnt-icon-ellipsis-vert</span><span class="i-code">0xf142</span></div>
    <div title="Code: 0xf143" class="the-icons span3"><i class="demo-icon -fnt-icon-rss-squared">&#xf143;</i> <span
            class="i-name">-fnt-icon-rss-squared</span><span class="i-code">0xf143</span></div>
    <div title="Code: 0xf144" class="the-icons span3"><i class="demo-icon -fnt-icon-play-circled">&#xf144;</i> <span
            class="i-name">-fnt-icon-play-circled</span><span class="i-code">0xf144</span></div>
    <div title="Code: 0xf145" class="the-icons span3"><i class="demo-icon -fnt-icon-ticket">&#xf145;</i> <span
            class="i-name">-fnt-icon-ticket</span><span class="i-code">0xf145</span></div>
</div>
<div class="row">
    <div title="Code: 0xf146" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-squared">&#xf146;</i> <span
            class="i-name">-fnt-icon-minus-squared</span><span class="i-code">0xf146</span></div>
    <div title="Code: 0xf147" class="the-icons span3"><i class="demo-icon -fnt-icon-minus-squared-alt">&#xf147;</i>
        <span class="i-name">-fnt-icon-minus-squared-alt</span><span class="i-code">0xf147</span></div>
    <div title="Code: 0xf148" class="the-icons span3"><i class="demo-icon -fnt-icon-level-up">&#xf148;</i> <span
            class="i-name">-fnt-icon-level-up</span><span class="i-code">0xf148</span></div>
    <div title="Code: 0xf149" class="the-icons span3"><i class="demo-icon -fnt-icon-level-down">&#xf149;</i> <span
            class="i-name">-fnt-icon-level-down</span><span class="i-code">0xf149</span></div>
</div>
<div class="row">
    <div title="Code: 0xf14a" class="the-icons span3"><i class="demo-icon -fnt-icon-ok-squared">&#xf14a;</i> <span
            class="i-name">-fnt-icon-ok-squared</span><span class="i-code">0xf14a</span></div>
    <div title="Code: 0xf14b" class="the-icons span3"><i class="demo-icon -fnt-icon-pencil-squared">&#xf14b;</i> <span
            class="i-name">-fnt-icon-pencil-squared</span><span class="i-code">0xf14b</span></div>
    <div title="Code: 0xf14c" class="the-icons span3"><i class="demo-icon -fnt-icon-link-ext-alt">&#xf14c;</i> <span
            class="i-name">-fnt-icon-link-ext-alt</span><span class="i-code">0xf14c</span></div>
    <div title="Code: 0xf14d" class="the-icons span3"><i class="demo-icon -fnt-icon-export-alt">&#xf14d;</i> <span
            class="i-name">-fnt-icon-export-alt</span><span class="i-code">0xf14d</span></div>
</div>
<div class="row">
    <div title="Code: 0xf14e" class="the-icons span3"><i class="demo-icon -fnt-icon-compass">&#xf14e;</i> <span
            class="i-name">-fnt-icon-compass</span><span class="i-code">0xf14e</span></div>
    <div title="Code: 0xf150" class="the-icons span3"><i class="demo-icon -fnt-icon-expand">&#xf150;</i> <span
            class="i-name">-fnt-icon-expand</span><span class="i-code">0xf150</span></div>
    <div title="Code: 0xf151" class="the-icons span3"><i class="demo-icon -fnt-icon-collapse">&#xf151;</i> <span
            class="i-name">-fnt-icon-collapse</span><span class="i-code">0xf151</span></div>
    <div title="Code: 0xf152" class="the-icons span3"><i class="demo-icon -fnt-icon-expand-right">&#xf152;</i> <span
            class="i-name">-fnt-icon-expand-right</span><span class="i-code">0xf152</span></div>
</div>
<div class="row">
    <div title="Code: 0xf153" class="the-icons span3"><i class="demo-icon -fnt-icon-euro">&#xf153;</i> <span
            class="i-name">-fnt-icon-euro</span><span class="i-code">0xf153</span></div>
    <div title="Code: 0xf154" class="the-icons span3"><i class="demo-icon -fnt-icon-pound">&#xf154;</i> <span
            class="i-name">-fnt-icon-pound</span><span class="i-code">0xf154</span></div>
    <div title="Code: 0xf155" class="the-icons span3"><i class="demo-icon -fnt-icon-dollar">&#xf155;</i> <span
            class="i-name">-fnt-icon-dollar</span><span class="i-code">0xf155</span></div>
    <div title="Code: 0xf156" class="the-icons span3"><i class="demo-icon -fnt-icon-rupee">&#xf156;</i> <span
            class="i-name">-fnt-icon-rupee</span><span class="i-code">0xf156</span></div>
</div>
<div class="row">
    <div title="Code: 0xf157" class="the-icons span3"><i class="demo-icon -fnt-icon-yen">&#xf157;</i> <span
            class="i-name">-fnt-icon-yen</span><span class="i-code">0xf157</span></div>
    <div title="Code: 0xf158" class="the-icons span3"><i class="demo-icon -fnt-icon-rouble">&#xf158;</i> <span
            class="i-name">-fnt-icon-rouble</span><span class="i-code">0xf158</span></div>
    <div title="Code: 0xf159" class="the-icons span3"><i class="demo-icon -fnt-icon-won">&#xf159;</i> <span
            class="i-name">-fnt-icon-won</span><span class="i-code">0xf159</span></div>
    <div title="Code: 0xf15a" class="the-icons span3"><i class="demo-icon -fnt-icon-bitcoin">&#xf15a;</i> <span
            class="i-name">-fnt-icon-bitcoin</span><span class="i-code">0xf15a</span></div>
</div>
<div class="row">
    <div title="Code: 0xf15b" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-inv">&#xf15b;</i> <span
            class="i-name">-fnt-icon-doc-inv</span><span class="i-code">0xf15b</span></div>
    <div title="Code: 0xf15c" class="the-icons span3"><i class="demo-icon -fnt-icon-doc-text-inv">&#xf15c;</i> <span
            class="i-name">-fnt-icon-doc-text-inv</span><span class="i-code">0xf15c</span></div>
    <div title="Code: 0xf15d" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-name-up">&#xf15d;</i> <span
            class="i-name">-fnt-icon-sort-name-up</span><span class="i-code">0xf15d</span></div>
    <div title="Code: 0xf15e" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-name-down">&#xf15e;</i> <span
            class="i-name">-fnt-icon-sort-name-down</span><span class="i-code">0xf15e</span></div>
</div>
<div class="row">
    <div title="Code: 0xf160" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-alt-up">&#xf160;</i> <span
            class="i-name">-fnt-icon-sort-alt-up</span><span class="i-code">0xf160</span></div>
    <div title="Code: 0xf161" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-alt-down">&#xf161;</i> <span
            class="i-name">-fnt-icon-sort-alt-down</span><span class="i-code">0xf161</span></div>
    <div title="Code: 0xf162" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-number-up">&#xf162;</i> <span
            class="i-name">-fnt-icon-sort-number-up</span><span class="i-code">0xf162</span></div>
    <div title="Code: 0xf163" class="the-icons span3"><i class="demo-icon -fnt-icon-sort-number-down">&#xf163;</i> <span
            class="i-name">-fnt-icon-sort-number-down</span><span class="i-code">0xf163</span></div>
</div>
<div class="row">
    <div title="Code: 0xf164" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-up-alt">&#xf164;</i> <span
            class="i-name">-fnt-icon-thumbs-up-alt</span><span class="i-code">0xf164</span></div>
    <div title="Code: 0xf165" class="the-icons span3"><i class="demo-icon -fnt-icon-thumbs-down-alt">&#xf165;</i> <span
            class="i-name">-fnt-icon-thumbs-down-alt</span><span class="i-code">0xf165</span></div>
    <div title="Code: 0xf166" class="the-icons span3"><i class="demo-icon -fnt-icon-youtube-squared">&#xf166;</i> <span
            class="i-name">-fnt-icon-youtube-squared</span><span class="i-code">0xf166</span></div>
    <div title="Code: 0xf167" class="the-icons span3"><i class="demo-icon -fnt-icon-youtube">&#xf167;</i> <span
            class="i-name">-fnt-icon-youtube</span><span class="i-code">0xf167</span></div>
</div>
<div class="row">
    <div title="Code: 0xf168" class="the-icons span3"><i class="demo-icon -fnt-icon-xing">&#xf168;</i> <span
            class="i-name">-fnt-icon-xing</span><span class="i-code">0xf168</span></div>
    <div title="Code: 0xf169" class="the-icons span3"><i class="demo-icon -fnt-icon-xing-squared">&#xf169;</i> <span
            class="i-name">-fnt-icon-xing-squared</span><span class="i-code">0xf169</span></div>
    <div title="Code: 0xf16a" class="the-icons span3"><i class="demo-icon -fnt-icon-youtube-play">&#xf16a;</i> <span
            class="i-name">-fnt-icon-youtube-play</span><span class="i-code">0xf16a</span></div>
    <div title="Code: 0xf16b" class="the-icons span3"><i class="demo-icon -fnt-icon-dropbox">&#xf16b;</i> <span
            class="i-name">-fnt-icon-dropbox</span><span class="i-code">0xf16b</span></div>
</div>
<div class="row">
    <div title="Code: 0xf16c" class="the-icons span3"><i class="demo-icon -fnt-icon-stackoverflow">&#xf16c;</i> <span
            class="i-name">-fnt-icon-stackoverflow</span><span class="i-code">0xf16c</span></div>
    <div title="Code: 0xf16d" class="the-icons span3"><i class="demo-icon -fnt-icon-instagram">&#xf16d;</i> <span
            class="i-name">-fnt-icon-instagram</span><span class="i-code">0xf16d</span></div>
    <div title="Code: 0xf16e" class="the-icons span3"><i class="demo-icon -fnt-icon-flickr">&#xf16e;</i> <span
            class="i-name">-fnt-icon-flickr</span><span class="i-code">0xf16e</span></div>
    <div title="Code: 0xf170" class="the-icons span3"><i class="demo-icon -fnt-icon-adn">&#xf170;</i> <span
            class="i-name">-fnt-icon-adn</span><span class="i-code">0xf170</span></div>
</div>
<div class="row">
    <div title="Code: 0xf171" class="the-icons span3"><i class="demo-icon -fnt-icon-bitbucket">&#xf171;</i> <span
            class="i-name">-fnt-icon-bitbucket</span><span class="i-code">0xf171</span></div>
    <div title="Code: 0xf172" class="the-icons span3"><i class="demo-icon -fnt-icon-bitbucket-squared">&#xf172;</i>
        <span class="i-name">-fnt-icon-bitbucket-squared</span><span class="i-code">0xf172</span></div>
    <div title="Code: 0xf173" class="the-icons span3"><i class="demo-icon -fnt-icon-tumblr">&#xf173;</i> <span
            class="i-name">-fnt-icon-tumblr</span><span class="i-code">0xf173</span></div>
    <div title="Code: 0xf174" class="the-icons span3"><i class="demo-icon -fnt-icon-tumblr-squared">&#xf174;</i> <span
            class="i-name">-fnt-icon-tumblr-squared</span><span class="i-code">0xf174</span></div>
</div>
<div class="row">
    <div title="Code: 0xf175" class="the-icons span3"><i class="demo-icon -fnt-icon-down">&#xf175;</i> <span
            class="i-name">-fnt-icon-down</span><span class="i-code">0xf175</span></div>
    <div title="Code: 0xf176" class="the-icons span3"><i class="demo-icon -fnt-icon-up">&#xf176;</i> <span
            class="i-name">-fnt-icon-up</span><span class="i-code">0xf176</span></div>
    <div title="Code: 0xf177" class="the-icons span3"><i class="demo-icon -fnt-icon-left">&#xf177;</i> <span
            class="i-name">-fnt-icon-left</span><span class="i-code">0xf177</span></div>
    <div title="Code: 0xf178" class="the-icons span3"><i class="demo-icon -fnt-icon-right">&#xf178;</i> <span
            class="i-name">-fnt-icon-right</span><span class="i-code">0xf178</span></div>
</div>
<div class="row">
    <div title="Code: 0xf179" class="the-icons span3"><i class="demo-icon -fnt-icon-apple">&#xf179;</i> <span
            class="i-name">-fnt-icon-apple</span><span class="i-code">0xf179</span></div>
    <div title="Code: 0xf17a" class="the-icons span3"><i class="demo-icon -fnt-icon-windows">&#xf17a;</i> <span
            class="i-name">-fnt-icon-windows</span><span class="i-code">0xf17a</span></div>
    <div title="Code: 0xf17b" class="the-icons span3"><i class="demo-icon -fnt-icon-android">&#xf17b;</i> <span
            class="i-name">-fnt-icon-android</span><span class="i-code">0xf17b</span></div>
    <div title="Code: 0xf17c" class="the-icons span3"><i class="demo-icon -fnt-icon-linux">&#xf17c;</i> <span
            class="i-name">-fnt-icon-linux</span><span class="i-code">0xf17c</span></div>
</div>
<div class="row">
    <div title="Code: 0xf17d" class="the-icons span3"><i class="demo-icon -fnt-icon-dribbble">&#xf17d;</i> <span
            class="i-name">-fnt-icon-dribbble</span><span class="i-code">0xf17d</span></div>
    <div title="Code: 0xf17e" class="the-icons span3"><i class="demo-icon -fnt-icon-skype">&#xf17e;</i> <span
            class="i-name">-fnt-icon-skype</span><span class="i-code">0xf17e</span></div>
    <div title="Code: 0xf180" class="the-icons span3"><i class="demo-icon -fnt-icon-foursquare">&#xf180;</i> <span
            class="i-name">-fnt-icon-foursquare</span><span class="i-code">0xf180</span></div>
    <div title="Code: 0xf181" class="the-icons span3"><i class="demo-icon -fnt-icon-trello">&#xf181;</i> <span
            class="i-name">-fnt-icon-trello</span><span class="i-code">0xf181</span></div>
</div>
<div class="row">
    <div title="Code: 0xf182" class="the-icons span3"><i class="demo-icon -fnt-icon-female">&#xf182;</i> <span
            class="i-name">-fnt-icon-female</span><span class="i-code">0xf182</span></div>
    <div title="Code: 0xf183" class="the-icons span3"><i class="demo-icon -fnt-icon-male">&#xf183;</i> <span
            class="i-name">-fnt-icon-male</span><span class="i-code">0xf183</span></div>
    <div title="Code: 0xf184" class="the-icons span3"><i class="demo-icon -fnt-icon-gittip">&#xf184;</i> <span
            class="i-name">-fnt-icon-gittip</span><span class="i-code">0xf184</span></div>
    <div title="Code: 0xf185" class="the-icons span3"><i class="demo-icon -fnt-icon-sun">&#xf185;</i> <span
            class="i-name">-fnt-icon-sun</span><span class="i-code">0xf185</span></div>
</div>
<div class="row">
    <div title="Code: 0xf186" class="the-icons span3"><i class="demo-icon -fnt-icon-moon">&#xf186;</i> <span
            class="i-name">-fnt-icon-moon</span><span class="i-code">0xf186</span></div>
    <div title="Code: 0xf187" class="the-icons span3"><i class="demo-icon -fnt-icon-box">&#xf187;</i> <span
            class="i-name">-fnt-icon-box</span><span class="i-code">0xf187</span></div>
    <div title="Code: 0xf188" class="the-icons span3"><i class="demo-icon -fnt-icon-bug">&#xf188;</i> <span
            class="i-name">-fnt-icon-bug</span><span class="i-code">0xf188</span></div>
    <div title="Code: 0xf189" class="the-icons span3"><i class="demo-icon -fnt-icon-vkontakte">&#xf189;</i> <span
            class="i-name">-fnt-icon-vkontakte</span><span class="i-code">0xf189</span></div>
</div>
<div class="row">
    <div title="Code: 0xf18a" class="the-icons span3"><i class="demo-icon -fnt-icon-weibo">&#xf18a;</i> <span
            class="i-name">-fnt-icon-weibo</span><span class="i-code">0xf18a</span></div>
    <div title="Code: 0xf18b" class="the-icons span3"><i class="demo-icon -fnt-icon-renren">&#xf18b;</i> <span
            class="i-name">-fnt-icon-renren</span><span class="i-code">0xf18b</span></div>
    <div title="Code: 0xf18c" class="the-icons span3"><i class="demo-icon -fnt-icon-pagelines">&#xf18c;</i> <span
            class="i-name">-fnt-icon-pagelines</span><span class="i-code">0xf18c</span></div>
    <div title="Code: 0xf18d" class="the-icons span3"><i class="demo-icon -fnt-icon-stackexchange">&#xf18d;</i> <span
            class="i-name">-fnt-icon-stackexchange</span><span class="i-code">0xf18d</span></div>
</div>
<div class="row">
    <div title="Code: 0xf18e" class="the-icons span3"><i class="demo-icon -fnt-icon-right-circled2">&#xf18e;</i> <span
            class="i-name">-fnt-icon-right-circled2</span><span class="i-code">0xf18e</span></div>
    <div title="Code: 0xf190" class="the-icons span3"><i class="demo-icon -fnt-icon-left-circled2">&#xf190;</i> <span
            class="i-name">-fnt-icon-left-circled2</span><span class="i-code">0xf190</span></div>
    <div title="Code: 0xf191" class="the-icons span3"><i class="demo-icon -fnt-icon-collapse-left">&#xf191;</i> <span
            class="i-name">-fnt-icon-collapse-left</span><span class="i-code">0xf191</span></div>
    <div title="Code: 0xf192" class="the-icons span3"><i class="demo-icon -fnt-icon-dot-circled">&#xf192;</i> <span
            class="i-name">-fnt-icon-dot-circled</span><span class="i-code">0xf192</span></div>
</div>
<div class="row">
    <div title="Code: 0xf193" class="the-icons span3"><i class="demo-icon -fnt-icon-wheelchair">&#xf193;</i> <span
            class="i-name">-fnt-icon-wheelchair</span><span class="i-code">0xf193</span></div>
    <div title="Code: 0xf194" class="the-icons span3"><i class="demo-icon -fnt-icon-vimeo-squared">&#xf194;</i> <span
            class="i-name">-fnt-icon-vimeo-squared</span><span class="i-code">0xf194</span></div>
    <div title="Code: 0xf195" class="the-icons span3"><i class="demo-icon -fnt-icon-try">&#xf195;</i> <span
            class="i-name">-fnt-icon-try</span><span class="i-code">0xf195</span></div>
    <div title="Code: 0xf196" class="the-icons span3"><i class="demo-icon -fnt-icon-plus-squared-alt">&#xf196;</i> <span
            class="i-name">-fnt-icon-plus-squared-alt</span><span class="i-code">0xf196</span></div>
</div>
<div class="row">
    <div title="Code: 0xf197" class="the-icons span3"><i class="demo-icon -fnt-icon-space-shuttle">&#xf197;</i> <span
            class="i-name">-fnt-icon-space-shuttle</span><span class="i-code">0xf197</span></div>
    <div title="Code: 0xf198" class="the-icons span3"><i class="demo-icon -fnt-icon-slack">&#xf198;</i> <span
            class="i-name">-fnt-icon-slack</span><span class="i-code">0xf198</span></div>
    <div title="Code: 0xf199" class="the-icons span3"><i class="demo-icon -fnt-icon-mail-squared">&#xf199;</i> <span
            class="i-name">-fnt-icon-mail-squared</span><span class="i-code">0xf199</span></div>
    <div title="Code: 0xf19a" class="the-icons span3"><i class="demo-icon -fnt-icon-wordpress">&#xf19a;</i> <span
            class="i-name">-fnt-icon-wordpress</span><span class="i-code">0xf19a</span></div>
</div>
<div class="row">
    <div title="Code: 0xf19b" class="the-icons span3"><i class="demo-icon -fnt-icon-openid">&#xf19b;</i> <span
            class="i-name">-fnt-icon-openid</span><span class="i-code">0xf19b</span></div>
    <div title="Code: 0xf19c" class="the-icons span3"><i class="demo-icon -fnt-icon-bank">&#xf19c;</i> <span
            class="i-name">-fnt-icon-bank</span><span class="i-code">0xf19c</span></div>
    <div title="Code: 0xf19d" class="the-icons span3"><i class="demo-icon -fnt-icon-graduation-cap">&#xf19d;</i> <span
            class="i-name">-fnt-icon-graduation-cap</span><span class="i-code">0xf19d</span></div>
    <div title="Code: 0xf19e" class="the-icons span3"><i class="demo-icon -fnt-icon-yahoo">&#xf19e;</i> <span
            class="i-name">-fnt-icon-yahoo</span><span class="i-code">0xf19e</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1a0" class="the-icons span3"><i class="demo-icon -fnt-icon-google">&#xf1a0;</i> <span
            class="i-name">-fnt-icon-google</span><span class="i-code">0xf1a0</span></div>
    <div title="Code: 0xf1a1" class="the-icons span3"><i class="demo-icon -fnt-icon-reddit">&#xf1a1;</i> <span
            class="i-name">-fnt-icon-reddit</span><span class="i-code">0xf1a1</span></div>
    <div title="Code: 0xf1a2" class="the-icons span3"><i class="demo-icon -fnt-icon-reddit-squared">&#xf1a2;</i> <span
            class="i-name">-fnt-icon-reddit-squared</span><span class="i-code">0xf1a2</span></div>
    <div title="Code: 0xf1a3" class="the-icons span3"><i class="demo-icon -fnt-icon-stumbleupon-circled">&#xf1a3;</i>
        <span class="i-name">-fnt-icon-stumbleupon-circled</span><span class="i-code">0xf1a3</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1a4" class="the-icons span3"><i class="demo-icon -fnt-icon-stumbleupon">&#xf1a4;</i> <span
            class="i-name">-fnt-icon-stumbleupon</span><span class="i-code">0xf1a4</span></div>
    <div title="Code: 0xf1a5" class="the-icons span3"><i class="demo-icon -fnt-icon-delicious">&#xf1a5;</i> <span
            class="i-name">-fnt-icon-delicious</span><span class="i-code">0xf1a5</span></div>
    <div title="Code: 0xf1a6" class="the-icons span3"><i class="demo-icon -fnt-icon-digg">&#xf1a6;</i> <span
            class="i-name">-fnt-icon-digg</span><span class="i-code">0xf1a6</span></div>
    <div title="Code: 0xf1a7" class="the-icons span3"><i class="demo-icon -fnt-icon-pied-piper-squared">&#xf1a7;</i>
        <span class="i-name">-fnt-icon-pied-piper-squared</span><span class="i-code">0xf1a7</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1a8" class="the-icons span3"><i class="demo-icon -fnt-icon-pied-piper-alt">&#xf1a8;</i> <span
            class="i-name">-fnt-icon-pied-piper-alt</span><span class="i-code">0xf1a8</span></div>
    <div title="Code: 0xf1a9" class="the-icons span3"><i class="demo-icon -fnt-icon-drupal">&#xf1a9;</i> <span
            class="i-name">-fnt-icon-drupal</span><span class="i-code">0xf1a9</span></div>
    <div title="Code: 0xf1aa" class="the-icons span3"><i class="demo-icon -fnt-icon-joomla">&#xf1aa;</i> <span
            class="i-name">-fnt-icon-joomla</span><span class="i-code">0xf1aa</span></div>
    <div title="Code: 0xf1ab" class="the-icons span3"><i class="demo-icon -fnt-icon-language">&#xf1ab;</i> <span
            class="i-name">-fnt-icon-language</span><span class="i-code">0xf1ab</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1ac" class="the-icons span3"><i class="demo-icon -fnt-icon-fax">&#xf1ac;</i> <span
            class="i-name">-fnt-icon-fax</span><span class="i-code">0xf1ac</span></div>
    <div title="Code: 0xf1ad" class="the-icons span3"><i class="demo-icon -fnt-icon-building-filled">&#xf1ad;</i> <span
            class="i-name">-fnt-icon-building-filled</span><span class="i-code">0xf1ad</span></div>
    <div title="Code: 0xf1ae" class="the-icons span3"><i class="demo-icon -fnt-icon-child">&#xf1ae;</i> <span
            class="i-name">-fnt-icon-child</span><span class="i-code">0xf1ae</span></div>
    <div title="Code: 0xf1b0" class="the-icons span3"><i class="demo-icon -fnt-icon-paw">&#xf1b0;</i> <span
            class="i-name">-fnt-icon-paw</span><span class="i-code">0xf1b0</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1b1" class="the-icons span3"><i class="demo-icon -fnt-icon-spoon">&#xf1b1;</i> <span
            class="i-name">-fnt-icon-spoon</span><span class="i-code">0xf1b1</span></div>
    <div title="Code: 0xf1b2" class="the-icons span3"><i class="demo-icon -fnt-icon-cube">&#xf1b2;</i> <span
            class="i-name">-fnt-icon-cube</span><span class="i-code">0xf1b2</span></div>
    <div title="Code: 0xf1b3" class="the-icons span3"><i class="demo-icon -fnt-icon-cubes">&#xf1b3;</i> <span
            class="i-name">-fnt-icon-cubes</span><span class="i-code">0xf1b3</span></div>
    <div title="Code: 0xf1b4" class="the-icons span3"><i class="demo-icon -fnt-icon-behance">&#xf1b4;</i> <span
            class="i-name">-fnt-icon-behance</span><span class="i-code">0xf1b4</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1b5" class="the-icons span3"><i class="demo-icon -fnt-icon-behance-squared">&#xf1b5;</i> <span
            class="i-name">-fnt-icon-behance-squared</span><span class="i-code">0xf1b5</span></div>
    <div title="Code: 0xf1b6" class="the-icons span3"><i class="demo-icon -fnt-icon-steam">&#xf1b6;</i> <span
            class="i-name">-fnt-icon-steam</span><span class="i-code">0xf1b6</span></div>
    <div title="Code: 0xf1b7" class="the-icons span3"><i class="demo-icon -fnt-icon-steam-squared">&#xf1b7;</i> <span
            class="i-name">-fnt-icon-steam-squared</span><span class="i-code">0xf1b7</span></div>
    <div title="Code: 0xf1b8" class="the-icons span3"><i class="demo-icon -fnt-icon-recycle">&#xf1b8;</i> <span
            class="i-name">-fnt-icon-recycle</span><span class="i-code">0xf1b8</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1b9" class="the-icons span3"><i class="demo-icon -fnt-icon-cab">&#xf1b9;</i> <span
            class="i-name">-fnt-icon-cab</span><span class="i-code">0xf1b9</span></div>
    <div title="Code: 0xf1ba" class="the-icons span3"><i class="demo-icon -fnt-icon-taxi">&#xf1ba;</i> <span
            class="i-name">-fnt-icon-taxi</span><span class="i-code">0xf1ba</span></div>
    <div title="Code: 0xf1bb" class="the-icons span3"><i class="demo-icon -fnt-icon-tree">&#xf1bb;</i> <span
            class="i-name">-fnt-icon-tree</span><span class="i-code">0xf1bb</span></div>
    <div title="Code: 0xf1bc" class="the-icons span3"><i class="demo-icon -fnt-icon-spotify">&#xf1bc;</i> <span
            class="i-name">-fnt-icon-spotify</span><span class="i-code">0xf1bc</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1bd" class="the-icons span3"><i class="demo-icon -fnt-icon-deviantart">&#xf1bd;</i> <span
            class="i-name">-fnt-icon-deviantart</span><span class="i-code">0xf1bd</span></div>
    <div title="Code: 0xf1be" class="the-icons span3"><i class="demo-icon -fnt-icon-soundcloud">&#xf1be;</i> <span
            class="i-name">-fnt-icon-soundcloud</span><span class="i-code">0xf1be</span></div>
    <div title="Code: 0xf1c0" class="the-icons span3"><i class="demo-icon -fnt-icon-database">&#xf1c0;</i> <span
            class="i-name">-fnt-icon-database</span><span class="i-code">0xf1c0</span></div>
    <div title="Code: 0xf1c1" class="the-icons span3"><i class="demo-icon -fnt-icon-file-pdf">&#xf1c1;</i> <span
            class="i-name">-fnt-icon-file-pdf</span><span class="i-code">0xf1c1</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1c2" class="the-icons span3"><i class="demo-icon -fnt-icon-file-word">&#xf1c2;</i> <span
            class="i-name">-fnt-icon-file-word</span><span class="i-code">0xf1c2</span></div>
    <div title="Code: 0xf1c3" class="the-icons span3"><i class="demo-icon -fnt-icon-file-excel">&#xf1c3;</i> <span
            class="i-name">-fnt-icon-file-excel</span><span class="i-code">0xf1c3</span></div>
    <div title="Code: 0xf1c4" class="the-icons span3"><i class="demo-icon -fnt-icon-file-powerpoint">&#xf1c4;</i> <span
            class="i-name">-fnt-icon-file-powerpoint</span><span class="i-code">0xf1c4</span></div>
    <div title="Code: 0xf1c5" class="the-icons span3"><i class="demo-icon -fnt-icon-file-image">&#xf1c5;</i> <span
            class="i-name">-fnt-icon-file-image</span><span class="i-code">0xf1c5</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1c6" class="the-icons span3"><i class="demo-icon -fnt-icon-file-archive">&#xf1c6;</i> <span
            class="i-name">-fnt-icon-file-archive</span><span class="i-code">0xf1c6</span></div>
    <div title="Code: 0xf1c7" class="the-icons span3"><i class="demo-icon -fnt-icon-file-audio">&#xf1c7;</i> <span
            class="i-name">-fnt-icon-file-audio</span><span class="i-code">0xf1c7</span></div>
    <div title="Code: 0xf1c8" class="the-icons span3"><i class="demo-icon -fnt-icon-file-video">&#xf1c8;</i> <span
            class="i-name">-fnt-icon-file-video</span><span class="i-code">0xf1c8</span></div>
    <div title="Code: 0xf1c9" class="the-icons span3"><i class="demo-icon -fnt-icon-file-code">&#xf1c9;</i> <span
            class="i-name">-fnt-icon-file-code</span><span class="i-code">0xf1c9</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1ca" class="the-icons span3"><i class="demo-icon -fnt-icon-vine">&#xf1ca;</i> <span
            class="i-name">-fnt-icon-vine</span><span class="i-code">0xf1ca</span></div>
    <div title="Code: 0xf1cb" class="the-icons span3"><i class="demo-icon -fnt-icon-codeopen">&#xf1cb;</i> <span
            class="i-name">-fnt-icon-codeopen</span><span class="i-code">0xf1cb</span></div>
    <div title="Code: 0xf1cc" class="the-icons span3"><i class="demo-icon -fnt-icon-jsfiddle">&#xf1cc;</i> <span
            class="i-name">-fnt-icon-jsfiddle</span><span class="i-code">0xf1cc</span></div>
    <div title="Code: 0xf1cd" class="the-icons span3"><i class="demo-icon -fnt-icon-lifebuoy">&#xf1cd;</i> <span
            class="i-name">-fnt-icon-lifebuoy</span><span class="i-code">0xf1cd</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1ce" class="the-icons span3"><i class="demo-icon -fnt-icon-circle-notch">&#xf1ce;</i> <span
            class="i-name">-fnt-icon-circle-notch</span><span class="i-code">0xf1ce</span></div>
    <div title="Code: 0xf1d0" class="the-icons span3"><i class="demo-icon -fnt-icon-rebel">&#xf1d0;</i> <span
            class="i-name">-fnt-icon-rebel</span><span class="i-code">0xf1d0</span></div>
    <div title="Code: 0xf1d1" class="the-icons span3"><i class="demo-icon -fnt-icon-empire">&#xf1d1;</i> <span
            class="i-name">-fnt-icon-empire</span><span class="i-code">0xf1d1</span></div>
    <div title="Code: 0xf1d2" class="the-icons span3"><i class="demo-icon -fnt-icon-git-squared">&#xf1d2;</i> <span
            class="i-name">-fnt-icon-git-squared</span><span class="i-code">0xf1d2</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1d3" class="the-icons span3"><i class="demo-icon -fnt-icon-git">&#xf1d3;</i> <span
            class="i-name">-fnt-icon-git</span><span class="i-code">0xf1d3</span></div>
    <div title="Code: 0xf1d4" class="the-icons span3"><i class="demo-icon -fnt-icon-hacker-news">&#xf1d4;</i> <span
            class="i-name">-fnt-icon-hacker-news</span><span class="i-code">0xf1d4</span></div>
    <div title="Code: 0xf1d5" class="the-icons span3"><i class="demo-icon -fnt-icon-tencent-weibo">&#xf1d5;</i> <span
            class="i-name">-fnt-icon-tencent-weibo</span><span class="i-code">0xf1d5</span></div>
    <div title="Code: 0xf1d6" class="the-icons span3"><i class="demo-icon -fnt-icon-qq">&#xf1d6;</i> <span
            class="i-name">-fnt-icon-qq</span><span class="i-code">0xf1d6</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1d7" class="the-icons span3"><i class="demo-icon -fnt-icon-wechat">&#xf1d7;</i> <span
            class="i-name">-fnt-icon-wechat</span><span class="i-code">0xf1d7</span></div>
    <div title="Code: 0xf1d8" class="the-icons span3"><i class="demo-icon -fnt-icon-paper-plane">&#xf1d8;</i> <span
            class="i-name">-fnt-icon-paper-plane</span><span class="i-code">0xf1d8</span></div>
    <div title="Code: 0xf1d9" class="the-icons span3"><i class="demo-icon -fnt-icon-paper-plane-empty">&#xf1d9;</i>
        <span class="i-name">-fnt-icon-paper-plane-empty</span><span class="i-code">0xf1d9</span></div>
    <div title="Code: 0xf1da" class="the-icons span3"><i class="demo-icon -fnt-icon-history">&#xf1da;</i> <span
            class="i-name">-fnt-icon-history</span><span class="i-code">0xf1da</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1db" class="the-icons span3"><i class="demo-icon -fnt-icon-circle-thin">&#xf1db;</i> <span
            class="i-name">-fnt-icon-circle-thin</span><span class="i-code">0xf1db</span></div>
    <div title="Code: 0xf1dc" class="the-icons span3"><i class="demo-icon -fnt-icon-header">&#xf1dc;</i> <span
            class="i-name">-fnt-icon-header</span><span class="i-code">0xf1dc</span></div>
    <div title="Code: 0xf1dd" class="the-icons span3"><i class="demo-icon -fnt-icon-paragraph">&#xf1dd;</i> <span
            class="i-name">-fnt-icon-paragraph</span><span class="i-code">0xf1dd</span></div>
    <div title="Code: 0xf1de" class="the-icons span3"><i class="demo-icon -fnt-icon-sliders">&#xf1de;</i> <span
            class="i-name">-fnt-icon-sliders</span><span class="i-code">0xf1de</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1e0" class="the-icons span3"><i class="demo-icon -fnt-icon-share">&#xf1e0;</i> <span
            class="i-name">-fnt-icon-share</span><span class="i-code">0xf1e0</span></div>
    <div title="Code: 0xf1e1" class="the-icons span3"><i class="demo-icon -fnt-icon-share-squared">&#xf1e1;</i> <span
            class="i-name">-fnt-icon-share-squared</span><span class="i-code">0xf1e1</span></div>
    <div title="Code: 0xf1e2" class="the-icons span3"><i class="demo-icon -fnt-icon-bomb">&#xf1e2;</i> <span
            class="i-name">-fnt-icon-bomb</span><span class="i-code">0xf1e2</span></div>
    <div title="Code: 0xf1e3" class="the-icons span3"><i class="demo-icon -fnt-icon-soccer-ball">&#xf1e3;</i> <span
            class="i-name">-fnt-icon-soccer-ball</span><span class="i-code">0xf1e3</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1e4" class="the-icons span3"><i class="demo-icon -fnt-icon-tty">&#xf1e4;</i> <span
            class="i-name">-fnt-icon-tty</span><span class="i-code">0xf1e4</span></div>
    <div title="Code: 0xf1e5" class="the-icons span3"><i class="demo-icon -fnt-icon-binoculars">&#xf1e5;</i> <span
            class="i-name">-fnt-icon-binoculars</span><span class="i-code">0xf1e5</span></div>
    <div title="Code: 0xf1e6" class="the-icons span3"><i class="demo-icon -fnt-icon-plug">&#xf1e6;</i> <span
            class="i-name">-fnt-icon-plug</span><span class="i-code">0xf1e6</span></div>
    <div title="Code: 0xf1e7" class="the-icons span3"><i class="demo-icon -fnt-icon-slideshare">&#xf1e7;</i> <span
            class="i-name">-fnt-icon-slideshare</span><span class="i-code">0xf1e7</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1e8" class="the-icons span3"><i class="demo-icon -fnt-icon-twitch">&#xf1e8;</i> <span
            class="i-name">-fnt-icon-twitch</span><span class="i-code">0xf1e8</span></div>
    <div title="Code: 0xf1e9" class="the-icons span3"><i class="demo-icon -fnt-icon-yelp">&#xf1e9;</i> <span
            class="i-name">-fnt-icon-yelp</span><span class="i-code">0xf1e9</span></div>
    <div title="Code: 0xf1ea" class="the-icons span3"><i class="demo-icon -fnt-icon-newspaper">&#xf1ea;</i> <span
            class="i-name">-fnt-icon-newspaper</span><span class="i-code">0xf1ea</span></div>
    <div title="Code: 0xf1eb" class="the-icons span3"><i class="demo-icon -fnt-icon-wifi">&#xf1eb;</i> <span
            class="i-name">-fnt-icon-wifi</span><span class="i-code">0xf1eb</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1ec" class="the-icons span3"><i class="demo-icon -fnt-icon-calc">&#xf1ec;</i> <span
            class="i-name">-fnt-icon-calc</span><span class="i-code">0xf1ec</span></div>
    <div title="Code: 0xf1ed" class="the-icons span3"><i class="demo-icon -fnt-icon-paypal">&#xf1ed;</i> <span
            class="i-name">-fnt-icon-paypal</span><span class="i-code">0xf1ed</span></div>
    <div title="Code: 0xf1ee" class="the-icons span3"><i class="demo-icon -fnt-icon-gwallet">&#xf1ee;</i> <span
            class="i-name">-fnt-icon-gwallet</span><span class="i-code">0xf1ee</span></div>
    <div title="Code: 0xf1f0" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-visa">&#xf1f0;</i> <span
            class="i-name">-fnt-icon-cc-visa</span><span class="i-code">0xf1f0</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1f1" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-mastercard">&#xf1f1;</i> <span
            class="i-name">-fnt-icon-cc-mastercard</span><span class="i-code">0xf1f1</span></div>
    <div title="Code: 0xf1f2" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-discover">&#xf1f2;</i> <span
            class="i-name">-fnt-icon-cc-discover</span><span class="i-code">0xf1f2</span></div>
    <div title="Code: 0xf1f3" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-amex">&#xf1f3;</i> <span
            class="i-name">-fnt-icon-cc-amex</span><span class="i-code">0xf1f3</span></div>
    <div title="Code: 0xf1f4" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-paypal">&#xf1f4;</i> <span
            class="i-name">-fnt-icon-cc-paypal</span><span class="i-code">0xf1f4</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1f5" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-stripe">&#xf1f5;</i> <span
            class="i-name">-fnt-icon-cc-stripe</span><span class="i-code">0xf1f5</span></div>
    <div title="Code: 0xf1f6" class="the-icons span3"><i class="demo-icon -fnt-icon-bell-off">&#xf1f6;</i> <span
            class="i-name">-fnt-icon-bell-off</span><span class="i-code">0xf1f6</span></div>
    <div title="Code: 0xf1f7" class="the-icons span3"><i class="demo-icon -fnt-icon-bell-off-empty">&#xf1f7;</i> <span
            class="i-name">-fnt-icon-bell-off-empty</span><span class="i-code">0xf1f7</span></div>
    <div title="Code: 0xf1f8" class="the-icons span3"><i class="demo-icon -fnt-icon-trash">&#xf1f8;</i> <span
            class="i-name">-fnt-icon-trash</span><span class="i-code">0xf1f8</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1f9" class="the-icons span3"><i class="demo-icon -fnt-icon-copyright">&#xf1f9;</i> <span
            class="i-name">-fnt-icon-copyright</span><span class="i-code">0xf1f9</span></div>
    <div title="Code: 0xf1fa" class="the-icons span3"><i class="demo-icon -fnt-icon-at">&#xf1fa;</i> <span
            class="i-name">-fnt-icon-at</span><span class="i-code">0xf1fa</span></div>
    <div title="Code: 0xf1fb" class="the-icons span3"><i class="demo-icon -fnt-icon-eyedropper">&#xf1fb;</i> <span
            class="i-name">-fnt-icon-eyedropper</span><span class="i-code">0xf1fb</span></div>
    <div title="Code: 0xf1fc" class="the-icons span3"><i class="demo-icon -fnt-icon-brush">&#xf1fc;</i> <span
            class="i-name">-fnt-icon-brush</span><span class="i-code">0xf1fc</span></div>
</div>
<div class="row">
    <div title="Code: 0xf1fd" class="the-icons span3"><i class="demo-icon -fnt-icon-birthday">&#xf1fd;</i> <span
            class="i-name">-fnt-icon-birthday</span><span class="i-code">0xf1fd</span></div>
    <div title="Code: 0xf1fe" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-area">&#xf1fe;</i> <span
            class="i-name">-fnt-icon-chart-area</span><span class="i-code">0xf1fe</span></div>
    <div title="Code: 0xf200" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-pie">&#xf200;</i> <span
            class="i-name">-fnt-icon-chart-pie</span><span class="i-code">0xf200</span></div>
    <div title="Code: 0xf201" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-line">&#xf201;</i> <span
            class="i-name">-fnt-icon-chart-line</span><span class="i-code">0xf201</span></div>
</div>
<div class="row">
    <div title="Code: 0xf202" class="the-icons span3"><i class="demo-icon -fnt-icon-lastfm">&#xf202;</i> <span
            class="i-name">-fnt-icon-lastfm</span><span class="i-code">0xf202</span></div>
    <div title="Code: 0xf203" class="the-icons span3"><i class="demo-icon -fnt-icon-lastfm-squared">&#xf203;</i> <span
            class="i-name">-fnt-icon-lastfm-squared</span><span class="i-code">0xf203</span></div>
    <div title="Code: 0xf204" class="the-icons span3"><i class="demo-icon -fnt-icon-toggle-off">&#xf204;</i> <span
            class="i-name">-fnt-icon-toggle-off</span><span class="i-code">0xf204</span></div>
    <div title="Code: 0xf205" class="the-icons span3"><i class="demo-icon -fnt-icon-toggle-on">&#xf205;</i> <span
            class="i-name">-fnt-icon-toggle-on</span><span class="i-code">0xf205</span></div>
</div>
<div class="row">
    <div title="Code: 0xf206" class="the-icons span3"><i class="demo-icon -fnt-icon-bicycle">&#xf206;</i> <span
            class="i-name">-fnt-icon-bicycle</span><span class="i-code">0xf206</span></div>
    <div title="Code: 0xf207" class="the-icons span3"><i class="demo-icon -fnt-icon-bus">&#xf207;</i> <span
            class="i-name">-fnt-icon-bus</span><span class="i-code">0xf207</span></div>
    <div title="Code: 0xf208" class="the-icons span3"><i class="demo-icon -fnt-icon-ioxhost">&#xf208;</i> <span
            class="i-name">-fnt-icon-ioxhost</span><span class="i-code">0xf208</span></div>
    <div title="Code: 0xf209" class="the-icons span3"><i class="demo-icon -fnt-icon-angellist">&#xf209;</i> <span
            class="i-name">-fnt-icon-angellist</span><span class="i-code">0xf209</span></div>
</div>
<div class="row">
    <div title="Code: 0xf20a" class="the-icons span3"><i class="demo-icon -fnt-icon-cc">&#xf20a;</i> <span
            class="i-name">-fnt-icon-cc</span><span class="i-code">0xf20a</span></div>
    <div title="Code: 0xf20b" class="the-icons span3"><i class="demo-icon -fnt-icon-shekel">&#xf20b;</i> <span
            class="i-name">-fnt-icon-shekel</span><span class="i-code">0xf20b</span></div>
    <div title="Code: 0xf20c" class="the-icons span3"><i class="demo-icon -fnt-icon-meanpath">&#xf20c;</i> <span
            class="i-name">-fnt-icon-meanpath</span><span class="i-code">0xf20c</span></div>
    <div title="Code: 0xf20d" class="the-icons span3"><i class="demo-icon -fnt-icon-buysellads">&#xf20d;</i> <span
            class="i-name">-fnt-icon-buysellads</span><span class="i-code">0xf20d</span></div>
</div>
<div class="row">
    <div title="Code: 0xf20e" class="the-icons span3"><i class="demo-icon -fnt-icon-connectdevelop">&#xf20e;</i> <span
            class="i-name">-fnt-icon-connectdevelop</span><span class="i-code">0xf20e</span></div>
    <div title="Code: 0xf210" class="the-icons span3"><i class="demo-icon -fnt-icon-dashcube">&#xf210;</i> <span
            class="i-name">-fnt-icon-dashcube</span><span class="i-code">0xf210</span></div>
    <div title="Code: 0xf211" class="the-icons span3"><i class="demo-icon -fnt-icon-forumbee">&#xf211;</i> <span
            class="i-name">-fnt-icon-forumbee</span><span class="i-code">0xf211</span></div>
    <div title="Code: 0xf212" class="the-icons span3"><i class="demo-icon -fnt-icon-leanpub">&#xf212;</i> <span
            class="i-name">-fnt-icon-leanpub</span><span class="i-code">0xf212</span></div>
</div>
<div class="row">
    <div title="Code: 0xf213" class="the-icons span3"><i class="demo-icon -fnt-icon-sellsy">&#xf213;</i> <span
            class="i-name">-fnt-icon-sellsy</span><span class="i-code">0xf213</span></div>
    <div title="Code: 0xf214" class="the-icons span3"><i class="demo-icon -fnt-icon-shirtsinbulk">&#xf214;</i> <span
            class="i-name">-fnt-icon-shirtsinbulk</span><span class="i-code">0xf214</span></div>
    <div title="Code: 0xf215" class="the-icons span3"><i class="demo-icon -fnt-icon-simplybuilt">&#xf215;</i> <span
            class="i-name">-fnt-icon-simplybuilt</span><span class="i-code">0xf215</span></div>
    <div title="Code: 0xf216" class="the-icons span3"><i class="demo-icon -fnt-icon-skyatlas">&#xf216;</i> <span
            class="i-name">-fnt-icon-skyatlas</span><span class="i-code">0xf216</span></div>
</div>
<div class="row">
    <div title="Code: 0xf217" class="the-icons span3"><i class="demo-icon -fnt-icon-cart-plus">&#xf217;</i> <span
            class="i-name">-fnt-icon-cart-plus</span><span class="i-code">0xf217</span></div>
    <div title="Code: 0xf218" class="the-icons span3"><i class="demo-icon -fnt-icon-cart-arrow-down">&#xf218;</i> <span
            class="i-name">-fnt-icon-cart-arrow-down</span><span class="i-code">0xf218</span></div>
    <div title="Code: 0xf219" class="the-icons span3"><i class="demo-icon -fnt-icon-diamond">&#xf219;</i> <span
            class="i-name">-fnt-icon-diamond</span><span class="i-code">0xf219</span></div>
    <div title="Code: 0xf21a" class="the-icons span3"><i class="demo-icon -fnt-icon-ship">&#xf21a;</i> <span
            class="i-name">-fnt-icon-ship</span><span class="i-code">0xf21a</span></div>
</div>
<div class="row">
    <div title="Code: 0xf21b" class="the-icons span3"><i class="demo-icon -fnt-icon-user-secret">&#xf21b;</i> <span
            class="i-name">-fnt-icon-user-secret</span><span class="i-code">0xf21b</span></div>
    <div title="Code: 0xf21c" class="the-icons span3"><i class="demo-icon -fnt-icon-motorcycle">&#xf21c;</i> <span
            class="i-name">-fnt-icon-motorcycle</span><span class="i-code">0xf21c</span></div>
    <div title="Code: 0xf21d" class="the-icons span3"><i class="demo-icon -fnt-icon-street-view">&#xf21d;</i> <span
            class="i-name">-fnt-icon-street-view</span><span class="i-code">0xf21d</span></div>
    <div title="Code: 0xf21e" class="the-icons span3"><i class="demo-icon -fnt-icon-heartbeat">&#xf21e;</i> <span
            class="i-name">-fnt-icon-heartbeat</span><span class="i-code">0xf21e</span></div>
</div>
<div class="row">
    <div title="Code: 0xf221" class="the-icons span3"><i class="demo-icon -fnt-icon-venus">&#xf221;</i> <span
            class="i-name">-fnt-icon-venus</span><span class="i-code">0xf221</span></div>
    <div title="Code: 0xf222" class="the-icons span3"><i class="demo-icon -fnt-icon-mars">&#xf222;</i> <span
            class="i-name">-fnt-icon-mars</span><span class="i-code">0xf222</span></div>
    <div title="Code: 0xf223" class="the-icons span3"><i class="demo-icon -fnt-icon-mercury">&#xf223;</i> <span
            class="i-name">-fnt-icon-mercury</span><span class="i-code">0xf223</span></div>
    <div title="Code: 0xf224" class="the-icons span3"><i class="demo-icon -fnt-icon-transgender">&#xf224;</i> <span
            class="i-name">-fnt-icon-transgender</span><span class="i-code">0xf224</span></div>
</div>
<div class="row">
    <div title="Code: 0xf225" class="the-icons span3"><i class="demo-icon -fnt-icon-transgender-alt">&#xf225;</i> <span
            class="i-name">-fnt-icon-transgender-alt</span><span class="i-code">0xf225</span></div>
    <div title="Code: 0xf226" class="the-icons span3"><i class="demo-icon -fnt-icon-venus-double">&#xf226;</i> <span
            class="i-name">-fnt-icon-venus-double</span><span class="i-code">0xf226</span></div>
    <div title="Code: 0xf227" class="the-icons span3"><i class="demo-icon -fnt-icon-mars-double">&#xf227;</i> <span
            class="i-name">-fnt-icon-mars-double</span><span class="i-code">0xf227</span></div>
    <div title="Code: 0xf228" class="the-icons span3"><i class="demo-icon -fnt-icon-venus-mars">&#xf228;</i> <span
            class="i-name">-fnt-icon-venus-mars</span><span class="i-code">0xf228</span></div>
</div>
<div class="row">
    <div title="Code: 0xf229" class="the-icons span3"><i class="demo-icon -fnt-icon-mars-stroke">&#xf229;</i> <span
            class="i-name">-fnt-icon-mars-stroke</span><span class="i-code">0xf229</span></div>
    <div title="Code: 0xf22a" class="the-icons span3"><i class="demo-icon -fnt-icon-mars-stroke-v">&#xf22a;</i> <span
            class="i-name">-fnt-icon-mars-stroke-v</span><span class="i-code">0xf22a</span></div>
    <div title="Code: 0xf22b" class="the-icons span3"><i class="demo-icon -fnt-icon-mars-stroke-h">&#xf22b;</i> <span
            class="i-name">-fnt-icon-mars-stroke-h</span><span class="i-code">0xf22b</span></div>
    <div title="Code: 0xf22c" class="the-icons span3"><i class="demo-icon -fnt-icon-neuter">&#xf22c;</i> <span
            class="i-name">-fnt-icon-neuter</span><span class="i-code">0xf22c</span></div>
</div>
<div class="row">
    <div title="Code: 0xf22d" class="the-icons span3"><i class="demo-icon -fnt-icon-genderless">&#xf22d;</i> <span
            class="i-name">-fnt-icon-genderless</span><span class="i-code">0xf22d</span></div>
    <div title="Code: 0xf230" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-official">&#xf230;</i>
        <span class="i-name">-fnt-icon-facebook-official</span><span class="i-code">0xf230</span></div>
    <div title="Code: 0xf231" class="the-icons span3"><i class="demo-icon -fnt-icon-pinterest">&#xf231;</i> <span
            class="i-name">-fnt-icon-pinterest</span><span class="i-code">0xf231</span></div>
    <div title="Code: 0xf232" class="the-icons span3"><i class="demo-icon -fnt-icon-whatsapp">&#xf232;</i> <span
            class="i-name">-fnt-icon-whatsapp</span><span class="i-code">0xf232</span></div>
</div>
<div class="row">
    <div title="Code: 0xf233" class="the-icons span3"><i class="demo-icon -fnt-icon-server">&#xf233;</i> <span
            class="i-name">-fnt-icon-server</span><span class="i-code">0xf233</span></div>
    <div title="Code: 0xf234" class="the-icons span3"><i class="demo-icon -fnt-icon-user-plus">&#xf234;</i> <span
            class="i-name">-fnt-icon-user-plus</span><span class="i-code">0xf234</span></div>
    <div title="Code: 0xf235" class="the-icons span3"><i class="demo-icon -fnt-icon-user-times">&#xf235;</i> <span
            class="i-name">-fnt-icon-user-times</span><span class="i-code">0xf235</span></div>
    <div title="Code: 0xf236" class="the-icons span3"><i class="demo-icon -fnt-icon-bed">&#xf236;</i> <span
            class="i-name">-fnt-icon-bed</span><span class="i-code">0xf236</span></div>
</div>
<div class="row">
    <div title="Code: 0xf237" class="the-icons span3"><i class="demo-icon -fnt-icon-viacoin">&#xf237;</i> <span
            class="i-name">-fnt-icon-viacoin</span><span class="i-code">0xf237</span></div>
    <div title="Code: 0xf238" class="the-icons span3"><i class="demo-icon -fnt-icon-train">&#xf238;</i> <span
            class="i-name">-fnt-icon-train</span><span class="i-code">0xf238</span></div>
    <div title="Code: 0xf239" class="the-icons span3"><i class="demo-icon -fnt-icon-subway">&#xf239;</i> <span
            class="i-name">-fnt-icon-subway</span><span class="i-code">0xf239</span></div>
    <div title="Code: 0xf23a" class="the-icons span3"><i class="demo-icon -fnt-icon-medium">&#xf23a;</i> <span
            class="i-name">-fnt-icon-medium</span><span class="i-code">0xf23a</span></div>
</div>
<div class="row">
    <div title="Code: 0xf23b" class="the-icons span3"><i class="demo-icon -fnt-icon-y-combinator">&#xf23b;</i> <span
            class="i-name">-fnt-icon-y-combinator</span><span class="i-code">0xf23b</span></div>
    <div title="Code: 0xf23c" class="the-icons span3"><i class="demo-icon -fnt-icon-optin-monster">&#xf23c;</i> <span
            class="i-name">-fnt-icon-optin-monster</span><span class="i-code">0xf23c</span></div>
    <div title="Code: 0xf23d" class="the-icons span3"><i class="demo-icon -fnt-icon-opencart">&#xf23d;</i> <span
            class="i-name">-fnt-icon-opencart</span><span class="i-code">0xf23d</span></div>
    <div title="Code: 0xf23e" class="the-icons span3"><i class="demo-icon -fnt-icon-expeditedssl">&#xf23e;</i> <span
            class="i-name">-fnt-icon-expeditedssl</span><span class="i-code">0xf23e</span></div>
</div>
<div class="row">
    <div title="Code: 0xf240" class="the-icons span3"><i class="demo-icon -fnt-icon-battery-4">&#xf240;</i> <span
            class="i-name">-fnt-icon-battery-4</span><span class="i-code">0xf240</span></div>
    <div title="Code: 0xf241" class="the-icons span3"><i class="demo-icon -fnt-icon-battery-3">&#xf241;</i> <span
            class="i-name">-fnt-icon-battery-3</span><span class="i-code">0xf241</span></div>
    <div title="Code: 0xf242" class="the-icons span3"><i class="demo-icon -fnt-icon-battery-2">&#xf242;</i> <span
            class="i-name">-fnt-icon-battery-2</span><span class="i-code">0xf242</span></div>
    <div title="Code: 0xf243" class="the-icons span3"><i class="demo-icon -fnt-icon-battery-1">&#xf243;</i> <span
            class="i-name">-fnt-icon-battery-1</span><span class="i-code">0xf243</span></div>
</div>
<div class="row">
    <div title="Code: 0xf244" class="the-icons span3"><i class="demo-icon -fnt-icon-battery-0">&#xf244;</i> <span
            class="i-name">-fnt-icon-battery-0</span><span class="i-code">0xf244</span></div>
    <div title="Code: 0xf245" class="the-icons span3"><i class="demo-icon -fnt-icon-mouse-pointer">&#xf245;</i> <span
            class="i-name">-fnt-icon-mouse-pointer</span><span class="i-code">0xf245</span></div>
    <div title="Code: 0xf246" class="the-icons span3"><i class="demo-icon -fnt-icon-i-cursor">&#xf246;</i> <span
            class="i-name">-fnt-icon-i-cursor</span><span class="i-code">0xf246</span></div>
    <div title="Code: 0xf247" class="the-icons span3"><i class="demo-icon -fnt-icon-object-group">&#xf247;</i> <span
            class="i-name">-fnt-icon-object-group</span><span class="i-code">0xf247</span></div>
</div>
<div class="row">
    <div title="Code: 0xf248" class="the-icons span3"><i class="demo-icon -fnt-icon-object-ungroup">&#xf248;</i> <span
            class="i-name">-fnt-icon-object-ungroup</span><span class="i-code">0xf248</span></div>
    <div title="Code: 0xf249" class="the-icons span3"><i class="demo-icon -fnt-icon-sticky-note">&#xf249;</i> <span
            class="i-name">-fnt-icon-sticky-note</span><span class="i-code">0xf249</span></div>
    <div title="Code: 0xf24a" class="the-icons span3"><i class="demo-icon -fnt-icon-sticky-note-o">&#xf24a;</i> <span
            class="i-name">-fnt-icon-sticky-note-o</span><span class="i-code">0xf24a</span></div>
    <div title="Code: 0xf24b" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-jcb">&#xf24b;</i> <span
            class="i-name">-fnt-icon-cc-jcb</span><span class="i-code">0xf24b</span></div>
</div>
<div class="row">
    <div title="Code: 0xf24c" class="the-icons span3"><i class="demo-icon -fnt-icon-cc-diners-club">&#xf24c;</i> <span
            class="i-name">-fnt-icon-cc-diners-club</span><span class="i-code">0xf24c</span></div>
    <div title="Code: 0xf24d" class="the-icons span3"><i class="demo-icon -fnt-icon-clone">&#xf24d;</i> <span
            class="i-name">-fnt-icon-clone</span><span class="i-code">0xf24d</span></div>
    <div title="Code: 0xf24e" class="the-icons span3"><i class="demo-icon -fnt-icon-balance-scale">&#xf24e;</i> <span
            class="i-name">-fnt-icon-balance-scale</span><span class="i-code">0xf24e</span></div>
    <div title="Code: 0xf250" class="the-icons span3"><i class="demo-icon -fnt-icon-hourglass-o">&#xf250;</i> <span
            class="i-name">-fnt-icon-hourglass-o</span><span class="i-code">0xf250</span></div>
</div>
<div class="row">
    <div title="Code: 0xf251" class="the-icons span3"><i class="demo-icon -fnt-icon-hourglass-1">&#xf251;</i> <span
            class="i-name">-fnt-icon-hourglass-1</span><span class="i-code">0xf251</span></div>
    <div title="Code: 0xf252" class="the-icons span3"><i class="demo-icon -fnt-icon-hourglass-2">&#xf252;</i> <span
            class="i-name">-fnt-icon-hourglass-2</span><span class="i-code">0xf252</span></div>
    <div title="Code: 0xf253" class="the-icons span3"><i class="demo-icon -fnt-icon-hourglass-3">&#xf253;</i> <span
            class="i-name">-fnt-icon-hourglass-3</span><span class="i-code">0xf253</span></div>
    <div title="Code: 0xf254" class="the-icons span3"><i class="demo-icon -fnt-icon-hourglass">&#xf254;</i> <span
            class="i-name">-fnt-icon-hourglass</span><span class="i-code">0xf254</span></div>
</div>
<div class="row">
    <div title="Code: 0xf255" class="the-icons span3"><i class="demo-icon -fnt-icon-hand-grab-o">&#xf255;</i> <span
            class="i-name">-fnt-icon-hand-grab-o</span><span class="i-code">0xf255</span></div>
    <div title="Code: 0xf256" class="the-icons span3"><i class="demo-icon -fnt-icon-hand-paper-o">&#xf256;</i> <span
            class="i-name">-fnt-icon-hand-paper-o</span><span class="i-code">0xf256</span></div>
    <div title="Code: 0xf257" class="the-icons span3"><i class="demo-icon -fnt-icon-hand-scissors-o">&#xf257;</i> <span
            class="i-name">-fnt-icon-hand-scissors-o</span><span class="i-code">0xf257</span></div>
    <div title="Code: 0xf258" class="the-icons span3"><i class="demo-icon -fnt-icon-hand-lizard-o">&#xf258;</i> <span
            class="i-name">-fnt-icon-hand-lizard-o</span><span class="i-code">0xf258</span></div>
</div>
<div class="row">
    <div title="Code: 0xf259" class="the-icons span3"><i class="demo-icon -fnt-icon-hand-spock-o">&#xf259;</i> <span
            class="i-name">-fnt-icon-hand-spock-o</span><span class="i-code">0xf259</span></div>
    <div title="Code: 0xf25a" class="the-icons span3"><i class="demo-icon -fnt-icon-hand-pointer-o">&#xf25a;</i> <span
            class="i-name">-fnt-icon-hand-pointer-o</span><span class="i-code">0xf25a</span></div>
    <div title="Code: 0xf25b" class="the-icons span3"><i class="demo-icon -fnt-icon-hand-peace-o">&#xf25b;</i> <span
            class="i-name">-fnt-icon-hand-peace-o</span><span class="i-code">0xf25b</span></div>
    <div title="Code: 0xf25c" class="the-icons span3"><i class="demo-icon -fnt-icon-trademark">&#xf25c;</i> <span
            class="i-name">-fnt-icon-trademark</span><span class="i-code">0xf25c</span></div>
</div>
<div class="row">
    <div title="Code: 0xf25d" class="the-icons span3"><i class="demo-icon -fnt-icon-registered">&#xf25d;</i> <span
            class="i-name">-fnt-icon-registered</span><span class="i-code">0xf25d</span></div>
    <div title="Code: 0xf25e" class="the-icons span3"><i class="demo-icon -fnt-icon-creative-commons">&#xf25e;</i> <span
            class="i-name">-fnt-icon-creative-commons</span><span class="i-code">0xf25e</span></div>
    <div title="Code: 0xf260" class="the-icons span3"><i class="demo-icon -fnt-icon-gg">&#xf260;</i> <span
            class="i-name">-fnt-icon-gg</span><span class="i-code">0xf260</span></div>
    <div title="Code: 0xf261" class="the-icons span3"><i class="demo-icon -fnt-icon-gg-circle">&#xf261;</i> <span
            class="i-name">-fnt-icon-gg-circle</span><span class="i-code">0xf261</span></div>
</div>
<div class="row">
    <div title="Code: 0xf262" class="the-icons span3"><i class="demo-icon -fnt-icon-tripadvisor">&#xf262;</i> <span
            class="i-name">-fnt-icon-tripadvisor</span><span class="i-code">0xf262</span></div>
    <div title="Code: 0xf263" class="the-icons span3"><i class="demo-icon -fnt-icon-odnoklassniki">&#xf263;</i> <span
            class="i-name">-fnt-icon-odnoklassniki</span><span class="i-code">0xf263</span></div>
    <div title="Code: 0xf264" class="the-icons span3"><i class="demo-icon -fnt-icon-odnoklassniki-square">&#xf264;</i>
        <span class="i-name">-fnt-icon-odnoklassniki-square</span><span class="i-code">0xf264</span></div>
    <div title="Code: 0xf265" class="the-icons span3"><i class="demo-icon -fnt-icon-get-pocket">&#xf265;</i> <span
            class="i-name">-fnt-icon-get-pocket</span><span class="i-code">0xf265</span></div>
</div>
<div class="row">
    <div title="Code: 0xf266" class="the-icons span3"><i class="demo-icon -fnt-icon-wikipedia-w">&#xf266;</i> <span
            class="i-name">-fnt-icon-wikipedia-w</span><span class="i-code">0xf266</span></div>
    <div title="Code: 0xf267" class="the-icons span3"><i class="demo-icon -fnt-icon-safari">&#xf267;</i> <span
            class="i-name">-fnt-icon-safari</span><span class="i-code">0xf267</span></div>
    <div title="Code: 0xf268" class="the-icons span3"><i class="demo-icon -fnt-icon-chrome-1">&#xf268;</i> <span
            class="i-name">-fnt-icon-chrome-1</span><span class="i-code">0xf268</span></div>
    <div title="Code: 0xf269" class="the-icons span3"><i class="demo-icon -fnt-icon-firefox-1">&#xf269;</i> <span
            class="i-name">-fnt-icon-firefox-1</span><span class="i-code">0xf269</span></div>
</div>
<div class="row">
    <div title="Code: 0xf26a" class="the-icons span3"><i class="demo-icon -fnt-icon-opera-1">&#xf26a;</i> <span
            class="i-name">-fnt-icon-opera-1</span><span class="i-code">0xf26a</span></div>
    <div title="Code: 0xf26b" class="the-icons span3"><i class="demo-icon -fnt-icon-internet-explorer">&#xf26b;</i>
        <span class="i-name">-fnt-icon-internet-explorer</span><span class="i-code">0xf26b</span></div>
    <div title="Code: 0xf26c" class="the-icons span3"><i class="demo-icon -fnt-icon-television">&#xf26c;</i> <span
            class="i-name">-fnt-icon-television</span><span class="i-code">0xf26c</span></div>
    <div title="Code: 0xf26d" class="the-icons span3"><i class="demo-icon -fnt-icon-contao">&#xf26d;</i> <span
            class="i-name">-fnt-icon-contao</span><span class="i-code">0xf26d</span></div>
</div>
<div class="row">
    <div title="Code: 0xf26e" class="the-icons span3"><i class="demo-icon -fnt-icon-500px">&#xf26e;</i> <span
            class="i-name">-fnt-icon-500px</span><span class="i-code">0xf26e</span></div>
    <div title="Code: 0xf270" class="the-icons span3"><i class="demo-icon -fnt-icon-amazon">&#xf270;</i> <span
            class="i-name">-fnt-icon-amazon</span><span class="i-code">0xf270</span></div>
    <div title="Code: 0xf271" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-plus-o">&#xf271;</i> <span
            class="i-name">-fnt-icon-calendar-plus-o</span><span class="i-code">0xf271</span></div>
    <div title="Code: 0xf272" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-minus-o">&#xf272;</i> <span
            class="i-name">-fnt-icon-calendar-minus-o</span><span class="i-code">0xf272</span></div>
</div>
<div class="row">
    <div title="Code: 0xf273" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-times-o">&#xf273;</i> <span
            class="i-name">-fnt-icon-calendar-times-o</span><span class="i-code">0xf273</span></div>
    <div title="Code: 0xf274" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-check-o">&#xf274;</i> <span
            class="i-name">-fnt-icon-calendar-check-o</span><span class="i-code">0xf274</span></div>
    <div title="Code: 0xf275" class="the-icons span3"><i class="demo-icon -fnt-icon-industry">&#xf275;</i> <span
            class="i-name">-fnt-icon-industry</span><span class="i-code">0xf275</span></div>
    <div title="Code: 0xf276" class="the-icons span3"><i class="demo-icon -fnt-icon-map-pin">&#xf276;</i> <span
            class="i-name">-fnt-icon-map-pin</span><span class="i-code">0xf276</span></div>
</div>
<div class="row">
    <div title="Code: 0xf277" class="the-icons span3"><i class="demo-icon -fnt-icon-map-signs">&#xf277;</i> <span
            class="i-name">-fnt-icon-map-signs</span><span class="i-code">0xf277</span></div>
    <div title="Code: 0xf278" class="the-icons span3"><i class="demo-icon -fnt-icon-map-o">&#xf278;</i> <span
            class="i-name">-fnt-icon-map-o</span><span class="i-code">0xf278</span></div>
    <div title="Code: 0xf279" class="the-icons span3"><i class="demo-icon -fnt-icon-map">&#xf279;</i> <span
            class="i-name">-fnt-icon-map</span><span class="i-code">0xf279</span></div>
    <div title="Code: 0xf27a" class="the-icons span3"><i class="demo-icon -fnt-icon-commenting">&#xf27a;</i> <span
            class="i-name">-fnt-icon-commenting</span><span class="i-code">0xf27a</span></div>
</div>
<div class="row">
    <div title="Code: 0xf27b" class="the-icons span3"><i class="demo-icon -fnt-icon-commenting-o">&#xf27b;</i> <span
            class="i-name">-fnt-icon-commenting-o</span><span class="i-code">0xf27b</span></div>
    <div title="Code: 0xf27c" class="the-icons span3"><i class="demo-icon -fnt-icon-houzz">&#xf27c;</i> <span
            class="i-name">-fnt-icon-houzz</span><span class="i-code">0xf27c</span></div>
    <div title="Code: 0xf27d" class="the-icons span3"><i class="demo-icon -fnt-icon-vimeo">&#xf27d;</i> <span
            class="i-name">-fnt-icon-vimeo</span><span class="i-code">0xf27d</span></div>
    <div title="Code: 0xf27e" class="the-icons span3"><i class="demo-icon -fnt-icon-black-tie">&#xf27e;</i> <span
            class="i-name">-fnt-icon-black-tie</span><span class="i-code">0xf27e</span></div>
</div>
<div class="row">
    <div title="Code: 0xf280" class="the-icons span3"><i class="demo-icon -fnt-icon-fonticons">&#xf280;</i> <span
            class="i-name">-fnt-icon-fonticons</span><span class="i-code">0xf280</span></div>
    <div title="Code: 0xf281" class="the-icons span3"><i class="demo-icon -fnt-icon-reddit-alien">&#xf281;</i> <span
            class="i-name">-fnt-icon-reddit-alien</span><span class="i-code">0xf281</span></div>
    <div title="Code: 0xf282" class="the-icons span3"><i class="demo-icon -fnt-icon-edge">&#xf282;</i> <span
            class="i-name">-fnt-icon-edge</span><span class="i-code">0xf282</span></div>
    <div title="Code: 0xf283" class="the-icons span3"><i class="demo-icon -fnt-icon-credit-card-alt">&#xf283;</i> <span
            class="i-name">-fnt-icon-credit-card-alt</span><span class="i-code">0xf283</span></div>
</div>
<div class="row">
    <div title="Code: 0xf284" class="the-icons span3"><i class="demo-icon -fnt-icon-codiepie">&#xf284;</i> <span
            class="i-name">-fnt-icon-codiepie</span><span class="i-code">0xf284</span></div>
    <div title="Code: 0xf285" class="the-icons span3"><i class="demo-icon -fnt-icon-modx">&#xf285;</i> <span
            class="i-name">-fnt-icon-modx</span><span class="i-code">0xf285</span></div>
    <div title="Code: 0xf286" class="the-icons span3"><i class="demo-icon -fnt-icon-fort-awesome">&#xf286;</i> <span
            class="i-name">-fnt-icon-fort-awesome</span><span class="i-code">0xf286</span></div>
    <div title="Code: 0xf287" class="the-icons span3"><i class="demo-icon -fnt-icon-usb">&#xf287;</i> <span
            class="i-name">-fnt-icon-usb</span><span class="i-code">0xf287</span></div>
</div>
<div class="row">
    <div title="Code: 0xf288" class="the-icons span3"><i class="demo-icon -fnt-icon-product-hunt">&#xf288;</i> <span
            class="i-name">-fnt-icon-product-hunt</span><span class="i-code">0xf288</span></div>
    <div title="Code: 0xf289" class="the-icons span3"><i class="demo-icon -fnt-icon-mixcloud">&#xf289;</i> <span
            class="i-name">-fnt-icon-mixcloud</span><span class="i-code">0xf289</span></div>
    <div title="Code: 0xf28a" class="the-icons span3"><i class="demo-icon -fnt-icon-scribd">&#xf28a;</i> <span
            class="i-name">-fnt-icon-scribd</span><span class="i-code">0xf28a</span></div>
    <div title="Code: 0xf28b" class="the-icons span3"><i class="demo-icon -fnt-icon-pause-circle">&#xf28b;</i> <span
            class="i-name">-fnt-icon-pause-circle</span><span class="i-code">0xf28b</span></div>
</div>
<div class="row">
    <div title="Code: 0xf28c" class="the-icons span3"><i class="demo-icon -fnt-icon-pause-circle-o">&#xf28c;</i> <span
            class="i-name">-fnt-icon-pause-circle-o</span><span class="i-code">0xf28c</span></div>
    <div title="Code: 0xf28d" class="the-icons span3"><i class="demo-icon -fnt-icon-stop-circle">&#xf28d;</i> <span
            class="i-name">-fnt-icon-stop-circle</span><span class="i-code">0xf28d</span></div>
    <div title="Code: 0xf28e" class="the-icons span3"><i class="demo-icon -fnt-icon-stop-circle-o">&#xf28e;</i> <span
            class="i-name">-fnt-icon-stop-circle-o</span><span class="i-code">0xf28e</span></div>
    <div title="Code: 0xf290" class="the-icons span3"><i class="demo-icon -fnt-icon-shopping-bag">&#xf290;</i> <span
            class="i-name">-fnt-icon-shopping-bag</span><span class="i-code">0xf290</span></div>
</div>
<div class="row">
    <div title="Code: 0xf291" class="the-icons span3"><i class="demo-icon -fnt-icon-shopping-basket">&#xf291;</i> <span
            class="i-name">-fnt-icon-shopping-basket</span><span class="i-code">0xf291</span></div>
    <div title="Code: 0xf292" class="the-icons span3"><i class="demo-icon -fnt-icon-hashtag">&#xf292;</i> <span
            class="i-name">-fnt-icon-hashtag</span><span class="i-code">0xf292</span></div>
    <div title="Code: 0xf293" class="the-icons span3"><i class="demo-icon -fnt-icon-bluetooth">&#xf293;</i> <span
            class="i-name">-fnt-icon-bluetooth</span><span class="i-code">0xf293</span></div>
    <div title="Code: 0xf294" class="the-icons span3"><i class="demo-icon -fnt-icon-bluetooth-b">&#xf294;</i> <span
            class="i-name">-fnt-icon-bluetooth-b</span><span class="i-code">0xf294</span></div>
</div>
<div class="row">
    <div title="Code: 0xf295" class="the-icons span3"><i class="demo-icon -fnt-icon-percent">&#xf295;</i> <span
            class="i-name">-fnt-icon-percent</span><span class="i-code">0xf295</span></div>
    <div title="Code: 0xf296" class="the-icons span3"><i class="demo-icon -fnt-icon-gitlab">&#xf296;</i> <span
            class="i-name">-fnt-icon-gitlab</span><span class="i-code">0xf296</span></div>
    <div title="Code: 0xf297" class="the-icons span3"><i class="demo-icon -fnt-icon-wpbeginner">&#xf297;</i> <span
            class="i-name">-fnt-icon-wpbeginner</span><span class="i-code">0xf297</span></div>
    <div title="Code: 0xf298" class="the-icons span3"><i class="demo-icon -fnt-icon-wpforms">&#xf298;</i> <span
            class="i-name">-fnt-icon-wpforms</span><span class="i-code">0xf298</span></div>
</div>
<div class="row">
    <div title="Code: 0xf299" class="the-icons span3"><i class="demo-icon -fnt-icon-envira">&#xf299;</i> <span
            class="i-name">-fnt-icon-envira</span><span class="i-code">0xf299</span></div>
    <div title="Code: 0xf29a" class="the-icons span3"><i class="demo-icon -fnt-icon-universal-access">&#xf29a;</i> <span
            class="i-name">-fnt-icon-universal-access</span><span class="i-code">0xf29a</span></div>
    <div title="Code: 0xf29b" class="the-icons span3"><i class="demo-icon -fnt-icon-wheelchair-alt">&#xf29b;</i> <span
            class="i-name">-fnt-icon-wheelchair-alt</span><span class="i-code">0xf29b</span></div>
    <div title="Code: 0xf29c" class="the-icons span3"><i class="demo-icon -fnt-icon-question-circle-o">&#xf29c;</i>
        <span class="i-name">-fnt-icon-question-circle-o</span><span class="i-code">0xf29c</span></div>
</div>
<div class="row">
    <div title="Code: 0xf29d" class="the-icons span3"><i class="demo-icon -fnt-icon-blind">&#xf29d;</i> <span
            class="i-name">-fnt-icon-blind</span><span class="i-code">0xf29d</span></div>
    <div title="Code: 0xf29e" class="the-icons span3"><i class="demo-icon -fnt-icon-audio-description">&#xf29e;</i>
        <span class="i-name">-fnt-icon-audio-description</span><span class="i-code">0xf29e</span></div>
    <div title="Code: 0xf2a0" class="the-icons span3"><i class="demo-icon -fnt-icon-volume-control-phone">&#xf2a0;</i>
        <span class="i-name">-fnt-icon-volume-control-phone</span><span class="i-code">0xf2a0</span></div>
    <div title="Code: 0xf2a1" class="the-icons span3"><i class="demo-icon -fnt-icon-braille">&#xf2a1;</i> <span
            class="i-name">-fnt-icon-braille</span><span class="i-code">0xf2a1</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2a2" class="the-icons span3"><i class="demo-icon -fnt-icon-assistive-listening-systems">
            &#xf2a2;</i> <span class="i-name">-fnt-icon-assistive-listening-systems</span><span
            class="i-code">0xf2a2</span></div>
    <div title="Code: 0xf2a3" class="the-icons span3"><i
            class="demo-icon -fnt-icon-american-sign-language-interpreting">&#xf2a3;</i> <span class="i-name">-fnt-icon-american-sign-language-interpreting</span><span
            class="i-code">0xf2a3</span></div>
    <div title="Code: 0xf2a4" class="the-icons span3"><i class="demo-icon -fnt-icon-asl-interpreting">&#xf2a4;</i> <span
            class="i-name">-fnt-icon-asl-interpreting</span><span class="i-code">0xf2a4</span></div>
    <div title="Code: 0xf2a5" class="the-icons span3"><i class="demo-icon -fnt-icon-glide">&#xf2a5;</i> <span
            class="i-name">-fnt-icon-glide</span><span class="i-code">0xf2a5</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2a6" class="the-icons span3"><i class="demo-icon -fnt-icon-glide-g">&#xf2a6;</i> <span
            class="i-name">-fnt-icon-glide-g</span><span class="i-code">0xf2a6</span></div>
    <div title="Code: 0xf2a7" class="the-icons span3"><i class="demo-icon -fnt-icon-sign-language">&#xf2a7;</i> <span
            class="i-name">-fnt-icon-sign-language</span><span class="i-code">0xf2a7</span></div>
    <div title="Code: 0xf2a8" class="the-icons span3"><i class="demo-icon -fnt-icon-low-vision">&#xf2a8;</i> <span
            class="i-name">-fnt-icon-low-vision</span><span class="i-code">0xf2a8</span></div>
    <div title="Code: 0xf2a9" class="the-icons span3"><i class="demo-icon -fnt-icon-viadeo">&#xf2a9;</i> <span
            class="i-name">-fnt-icon-viadeo</span><span class="i-code">0xf2a9</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2aa" class="the-icons span3"><i class="demo-icon -fnt-icon-viadeo-square">&#xf2aa;</i> <span
            class="i-name">-fnt-icon-viadeo-square</span><span class="i-code">0xf2aa</span></div>
    <div title="Code: 0xf2ab" class="the-icons span3"><i class="demo-icon -fnt-icon-snapchat">&#xf2ab;</i> <span
            class="i-name">-fnt-icon-snapchat</span><span class="i-code">0xf2ab</span></div>
    <div title="Code: 0xf2ac" class="the-icons span3"><i class="demo-icon -fnt-icon-snapchat-ghost">&#xf2ac;</i> <span
            class="i-name">-fnt-icon-snapchat-ghost</span><span class="i-code">0xf2ac</span></div>
    <div title="Code: 0xf2ad" class="the-icons span3"><i class="demo-icon -fnt-icon-snapchat-square">&#xf2ad;</i> <span
            class="i-name">-fnt-icon-snapchat-square</span><span class="i-code">0xf2ad</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2ae" class="the-icons span3"><i class="demo-icon -fnt-icon-pied-piper">&#xf2ae;</i> <span
            class="i-name">-fnt-icon-pied-piper</span><span class="i-code">0xf2ae</span></div>
    <div title="Code: 0xf2b0" class="the-icons span3"><i class="demo-icon -fnt-icon-first-order">&#xf2b0;</i> <span
            class="i-name">-fnt-icon-first-order</span><span class="i-code">0xf2b0</span></div>
    <div title="Code: 0xf2b1" class="the-icons span3"><i class="demo-icon -fnt-icon-yoast">&#xf2b1;</i> <span
            class="i-name">-fnt-icon-yoast</span><span class="i-code">0xf2b1</span></div>
    <div title="Code: 0xf2b2" class="the-icons span3"><i class="demo-icon -fnt-icon-themeisle">&#xf2b2;</i> <span
            class="i-name">-fnt-icon-themeisle</span><span class="i-code">0xf2b2</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2b3" class="the-icons span3"><i class="demo-icon -fnt-icon-google-plus-circle">&#xf2b3;</i>
        <span class="i-name">-fnt-icon-google-plus-circle</span><span class="i-code">0xf2b3</span></div>
    <div title="Code: 0xf2b4" class="the-icons span3"><i class="demo-icon -fnt-icon-font-awesome">&#xf2b4;</i> <span
            class="i-name">-fnt-icon-font-awesome</span><span class="i-code">0xf2b4</span></div>
    <div title="Code: 0xf2b5" class="the-icons span3"><i class="demo-icon -fnt-icon-handshake-o">&#xf2b5;</i> <span
            class="i-name">-fnt-icon-handshake-o</span><span class="i-code">0xf2b5</span></div>
    <div title="Code: 0xf2b6" class="the-icons span3"><i class="demo-icon -fnt-icon-envelope-open">&#xf2b6;</i> <span
            class="i-name">-fnt-icon-envelope-open</span><span class="i-code">0xf2b6</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2b7" class="the-icons span3"><i class="demo-icon -fnt-icon-envelope-open-o">&#xf2b7;</i> <span
            class="i-name">-fnt-icon-envelope-open-o</span><span class="i-code">0xf2b7</span></div>
    <div title="Code: 0xf2b8" class="the-icons span3"><i class="demo-icon -fnt-icon-linode">&#xf2b8;</i> <span
            class="i-name">-fnt-icon-linode</span><span class="i-code">0xf2b8</span></div>
    <div title="Code: 0xf2b9" class="the-icons span3"><i class="demo-icon -fnt-icon-address-book">&#xf2b9;</i> <span
            class="i-name">-fnt-icon-address-book</span><span class="i-code">0xf2b9</span></div>
    <div title="Code: 0xf2ba" class="the-icons span3"><i class="demo-icon -fnt-icon-address-book-o">&#xf2ba;</i> <span
            class="i-name">-fnt-icon-address-book-o</span><span class="i-code">0xf2ba</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2bb" class="the-icons span3"><i class="demo-icon -fnt-icon-address-card">&#xf2bb;</i> <span
            class="i-name">-fnt-icon-address-card</span><span class="i-code">0xf2bb</span></div>
    <div title="Code: 0xf2bc" class="the-icons span3"><i class="demo-icon -fnt-icon-address-card-o">&#xf2bc;</i> <span
            class="i-name">-fnt-icon-address-card-o</span><span class="i-code">0xf2bc</span></div>
    <div title="Code: 0xf2bd" class="the-icons span3"><i class="demo-icon -fnt-icon-user-circle">&#xf2bd;</i> <span
            class="i-name">-fnt-icon-user-circle</span><span class="i-code">0xf2bd</span></div>
    <div title="Code: 0xf2be" class="the-icons span3"><i class="demo-icon -fnt-icon-user-circle-o">&#xf2be;</i> <span
            class="i-name">-fnt-icon-user-circle-o</span><span class="i-code">0xf2be</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2c0" class="the-icons span3"><i class="demo-icon -fnt-icon-user-o">&#xf2c0;</i> <span
            class="i-name">-fnt-icon-user-o</span><span class="i-code">0xf2c0</span></div>
    <div title="Code: 0xf2c1" class="the-icons span3"><i class="demo-icon -fnt-icon-id-badge">&#xf2c1;</i> <span
            class="i-name">-fnt-icon-id-badge</span><span class="i-code">0xf2c1</span></div>
    <div title="Code: 0xf2c2" class="the-icons span3"><i class="demo-icon -fnt-icon-id-card">&#xf2c2;</i> <span
            class="i-name">-fnt-icon-id-card</span><span class="i-code">0xf2c2</span></div>
    <div title="Code: 0xf2c3" class="the-icons span3"><i class="demo-icon -fnt-icon-id-card-o">&#xf2c3;</i> <span
            class="i-name">-fnt-icon-id-card-o</span><span class="i-code">0xf2c3</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2c4" class="the-icons span3"><i class="demo-icon -fnt-icon-quora">&#xf2c4;</i> <span
            class="i-name">-fnt-icon-quora</span><span class="i-code">0xf2c4</span></div>
    <div title="Code: 0xf2c5" class="the-icons span3"><i class="demo-icon -fnt-icon-free-code-camp">&#xf2c5;</i> <span
            class="i-name">-fnt-icon-free-code-camp</span><span class="i-code">0xf2c5</span></div>
    <div title="Code: 0xf2c6" class="the-icons span3"><i class="demo-icon -fnt-icon-telegram">&#xf2c6;</i> <span
            class="i-name">-fnt-icon-telegram</span><span class="i-code">0xf2c6</span></div>
    <div title="Code: 0xf2c7" class="the-icons span3"><i class="demo-icon -fnt-icon-thermometer">&#xf2c7;</i> <span
            class="i-name">-fnt-icon-thermometer</span><span class="i-code">0xf2c7</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2c8" class="the-icons span3"><i class="demo-icon -fnt-icon-thermometer-3">&#xf2c8;</i> <span
            class="i-name">-fnt-icon-thermometer-3</span><span class="i-code">0xf2c8</span></div>
    <div title="Code: 0xf2c9" class="the-icons span3"><i class="demo-icon -fnt-icon-thermometer-2">&#xf2c9;</i> <span
            class="i-name">-fnt-icon-thermometer-2</span><span class="i-code">0xf2c9</span></div>
    <div title="Code: 0xf2ca" class="the-icons span3"><i class="demo-icon -fnt-icon-thermometer-quarter">&#xf2ca;</i>
        <span class="i-name">-fnt-icon-thermometer-quarter</span><span class="i-code">0xf2ca</span></div>
    <div title="Code: 0xf2cb" class="the-icons span3"><i class="demo-icon -fnt-icon-thermometer-0">&#xf2cb;</i> <span
            class="i-name">-fnt-icon-thermometer-0</span><span class="i-code">0xf2cb</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2cc" class="the-icons span3"><i class="demo-icon -fnt-icon-shower">&#xf2cc;</i> <span
            class="i-name">-fnt-icon-shower</span><span class="i-code">0xf2cc</span></div>
    <div title="Code: 0xf2cd" class="the-icons span3"><i class="demo-icon -fnt-icon-bath">&#xf2cd;</i> <span
            class="i-name">-fnt-icon-bath</span><span class="i-code">0xf2cd</span></div>
    <div title="Code: 0xf2ce" class="the-icons span3"><i class="demo-icon -fnt-icon-podcast">&#xf2ce;</i> <span
            class="i-name">-fnt-icon-podcast</span><span class="i-code">0xf2ce</span></div>
    <div title="Code: 0xf2d0" class="the-icons span3"><i class="demo-icon -fnt-icon-window-maximize">&#xf2d0;</i> <span
            class="i-name">-fnt-icon-window-maximize</span><span class="i-code">0xf2d0</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2d1" class="the-icons span3"><i class="demo-icon -fnt-icon-window-minimize">&#xf2d1;</i> <span
            class="i-name">-fnt-icon-window-minimize</span><span class="i-code">0xf2d1</span></div>
    <div title="Code: 0xf2d2" class="the-icons span3"><i class="demo-icon -fnt-icon-window-restore">&#xf2d2;</i> <span
            class="i-name">-fnt-icon-window-restore</span><span class="i-code">0xf2d2</span></div>
    <div title="Code: 0xf2d3" class="the-icons span3"><i class="demo-icon -fnt-icon-window-close">&#xf2d3;</i> <span
            class="i-name">-fnt-icon-window-close</span><span class="i-code">0xf2d3</span></div>
    <div title="Code: 0xf2d4" class="the-icons span3"><i class="demo-icon -fnt-icon-window-close-o">&#xf2d4;</i> <span
            class="i-name">-fnt-icon-window-close-o</span><span class="i-code">0xf2d4</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2d5" class="the-icons span3"><i class="demo-icon -fnt-icon-bandcamp">&#xf2d5;</i> <span
            class="i-name">-fnt-icon-bandcamp</span><span class="i-code">0xf2d5</span></div>
    <div title="Code: 0xf2d6" class="the-icons span3"><i class="demo-icon -fnt-icon-grav">&#xf2d6;</i> <span
            class="i-name">-fnt-icon-grav</span><span class="i-code">0xf2d6</span></div>
    <div title="Code: 0xf2d7" class="the-icons span3"><i class="demo-icon -fnt-icon-etsy">&#xf2d7;</i> <span
            class="i-name">-fnt-icon-etsy</span><span class="i-code">0xf2d7</span></div>
    <div title="Code: 0xf2d8" class="the-icons span3"><i class="demo-icon -fnt-icon-imdb">&#xf2d8;</i> <span
            class="i-name">-fnt-icon-imdb</span><span class="i-code">0xf2d8</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2d9" class="the-icons span3"><i class="demo-icon -fnt-icon-ravelry">&#xf2d9;</i> <span
            class="i-name">-fnt-icon-ravelry</span><span class="i-code">0xf2d9</span></div>
    <div title="Code: 0xf2da" class="the-icons span3"><i class="demo-icon -fnt-icon-eercast">&#xf2da;</i> <span
            class="i-name">-fnt-icon-eercast</span><span class="i-code">0xf2da</span></div>
    <div title="Code: 0xf2db" class="the-icons span3"><i class="demo-icon -fnt-icon-microchip">&#xf2db;</i> <span
            class="i-name">-fnt-icon-microchip</span><span class="i-code">0xf2db</span></div>
    <div title="Code: 0xf2dc" class="the-icons span3"><i class="demo-icon -fnt-icon-snowflake-o">&#xf2dc;</i> <span
            class="i-name">-fnt-icon-snowflake-o</span><span class="i-code">0xf2dc</span></div>
</div>
<div class="row">
    <div title="Code: 0xf2dd" class="the-icons span3"><i class="demo-icon -fnt-icon-superpowers">&#xf2dd;</i> <span
            class="i-name">-fnt-icon-superpowers</span><span class="i-code">0xf2dd</span></div>
    <div title="Code: 0xf2de" class="the-icons span3"><i class="demo-icon -fnt-icon-wpexplorer">&#xf2de;</i> <span
            class="i-name">-fnt-icon-wpexplorer</span><span class="i-code">0xf2de</span></div>
    <div title="Code: 0xf2e0" class="the-icons span3"><i class="demo-icon -fnt-icon-meetup">&#xf2e0;</i> <span
            class="i-name">-fnt-icon-meetup</span><span class="i-code">0xf2e0</span></div>
    <div title="Code: 0xf300" class="the-icons span3"><i class="demo-icon -fnt-icon-github-squared">&#xf300;</i> <span
            class="i-name">-fnt-icon-github-squared</span><span class="i-code">0xf300</span></div>
</div>
<div class="row">
    <div title="Code: 0xf301" class="the-icons span3"><i class="demo-icon -fnt-icon-github-circled-1">&#xf301;</i> <span
            class="i-name">-fnt-icon-github-circled-1</span><span class="i-code">0xf301</span></div>
    <div title="Code: 0xf302" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-3">&#xf302;</i> <span
            class="i-name">-fnt-icon-twitter-3</span><span class="i-code">0xf302</span></div>
    <div title="Code: 0xf303" class="the-icons span3"><i class="demo-icon -fnt-icon-flickr-1">&#xf303;</i> <span
            class="i-name">-fnt-icon-flickr-1</span><span class="i-code">0xf303</span></div>
    <div title="Code: 0xf304" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-squared">&#xf304;</i> <span
            class="i-name">-fnt-icon-twitter-squared</span><span class="i-code">0xf304</span></div>
</div>
<div class="row">
    <div title="Code: 0xf305" class="the-icons span3"><i class="demo-icon -fnt-icon-yandex">&#xf305;</i> <span
            class="i-name">-fnt-icon-yandex</span><span class="i-code">0xf305</span></div>
    <div title="Code: 0xf306" class="the-icons span3"><i class="demo-icon -fnt-icon-vimeo-1">&#xf306;</i> <span
            class="i-name">-fnt-icon-vimeo-1</span><span class="i-code">0xf306</span></div>
    <div title="Code: 0xf307" class="the-icons span3"><i class="demo-icon -fnt-icon-vimeo-circled">&#xf307;</i> <span
            class="i-name">-fnt-icon-vimeo-circled</span><span class="i-code">0xf307</span></div>
    <div title="Code: 0xf308" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-squared">&#xf308;</i> <span
            class="i-name">-fnt-icon-facebook-squared</span><span class="i-code">0xf308</span></div>
</div>
<div class="row">
    <div title="Code: 0xf309" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-1">&#xf309;</i> <span
            class="i-name">-fnt-icon-twitter-1</span><span class="i-code">0xf309</span></div>
    <div title="Code: 0xf30a" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-circled">&#xf30a;</i> <span
            class="i-name">-fnt-icon-twitter-circled</span><span class="i-code">0xf30a</span></div>
    <div title="Code: 0xf30b" class="the-icons span3"><i class="demo-icon -fnt-icon-skype-4">&#xf30b;</i> <span
            class="i-name">-fnt-icon-skype-4</span><span class="i-code">0xf30b</span></div>
    <div title="Code: 0xf30c" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-squared">&#xf30c;</i> <span
            class="i-name">-fnt-icon-linkedin-squared</span><span class="i-code">0xf30c</span></div>
</div>
<div class="row">
    <div title="Code: 0xf30d" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-circled">&#xf30d;</i> <span
            class="i-name">-fnt-icon-facebook-circled</span><span class="i-code">0xf30d</span></div>
    <div title="Code: 0xf30e" class="the-icons span3"><i class="demo-icon -fnt-icon-facebook-squared-1">&#xf30e;</i>
        <span class="i-name">-fnt-icon-facebook-squared-1</span><span class="i-code">0xf30e</span></div>
    <div title="Code: 0xf30f" class="the-icons span3"><i class="demo-icon -fnt-icon-gplus-1">&#xf30f;</i> <span
            class="i-name">-fnt-icon-gplus-1</span><span class="i-code">0xf30f</span></div>
    <div title="Code: 0xf310" class="the-icons span3"><i class="demo-icon -fnt-icon-gplus-circled">&#xf310;</i> <span
            class="i-name">-fnt-icon-gplus-circled</span><span class="i-code">0xf310</span></div>
</div>
<div class="row">
    <div title="Code: 0xf311" class="the-icons span3"><i class="demo-icon -fnt-icon-tumblr-3">&#xf311;</i> <span
            class="i-name">-fnt-icon-tumblr-3</span><span class="i-code">0xf311</span></div>
    <div title="Code: 0xf312" class="the-icons span3"><i class="demo-icon -fnt-icon-pinterest-1">&#xf312;</i> <span
            class="i-name">-fnt-icon-pinterest-1</span><span class="i-code">0xf312</span></div>
    <div title="Code: 0xf313" class="the-icons span3"><i class="demo-icon -fnt-icon-pinterest-circled-1">&#xf313;</i>
        <span class="i-name">-fnt-icon-pinterest-circled-1</span><span class="i-code">0xf313</span></div>
    <div title="Code: 0xf314" class="the-icons span3"><i class="demo-icon -fnt-icon-twitter-rect">&#xf314;</i> <span
            class="i-name">-fnt-icon-twitter-rect</span><span class="i-code">0xf314</span></div>
</div>
<div class="row">
    <div title="Code: 0xf315" class="the-icons span3"><i class="demo-icon -fnt-icon-tumblr-1">&#xf315;</i> <span
            class="i-name">-fnt-icon-tumblr-1</span><span class="i-code">0xf315</span></div>
    <div title="Code: 0xf316" class="the-icons span3"><i class="demo-icon -fnt-icon-tumblr-circled">&#xf316;</i> <span
            class="i-name">-fnt-icon-tumblr-circled</span><span class="i-code">0xf316</span></div>
    <div title="Code: 0xf317" class="the-icons span3"><i class="demo-icon -fnt-icon-jabber">&#xf317;</i> <span
            class="i-name">-fnt-icon-jabber</span><span class="i-code">0xf317</span></div>
    <div title="Code: 0xf318" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-1">&#xf318;</i> <span
            class="i-name">-fnt-icon-linkedin-1</span><span class="i-code">0xf318</span></div>
</div>
<div class="row">
    <div title="Code: 0xf319" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-circled">&#xf319;</i> <span
            class="i-name">-fnt-icon-linkedin-circled</span><span class="i-code">0xf319</span></div>
    <div title="Code: 0xf31a" class="the-icons span3"><i class="demo-icon -fnt-icon-linkedin-5">&#xf31a;</i> <span
            class="i-name">-fnt-icon-linkedin-5</span><span class="i-code">0xf31a</span></div>
    <div title="Code: 0xf31b" class="the-icons span3"><i class="demo-icon -fnt-icon-dribbble-1">&#xf31b;</i> <span
            class="i-name">-fnt-icon-dribbble-1</span><span class="i-code">0xf31b</span></div>
    <div title="Code: 0xf31c" class="the-icons span3"><i class="demo-icon -fnt-icon-dribbble-circled">&#xf31c;</i> <span
            class="i-name">-fnt-icon-dribbble-circled</span><span class="i-code">0xf31c</span></div>
</div>
<div class="row">
    <div title="Code: 0xf31d" class="the-icons span3"><i class="demo-icon -fnt-icon-wordpress-2">&#xf31d;</i> <span
            class="i-name">-fnt-icon-wordpress-2</span><span class="i-code">0xf31d</span></div>
    <div title="Code: 0xf31e" class="the-icons span3"><i class="demo-icon -fnt-icon-stumbleupon-1">&#xf31e;</i> <span
            class="i-name">-fnt-icon-stumbleupon-1</span><span class="i-code">0xf31e</span></div>
    <div title="Code: 0xf31f" class="the-icons span3"><i class="demo-icon -fnt-icon-stumbleupon-circled-1">&#xf31f;</i>
        <span class="i-name">-fnt-icon-stumbleupon-circled-1</span><span class="i-code">0xf31f</span></div>
    <div title="Code: 0xf320" class="the-icons span3"><i class="demo-icon -fnt-icon-diigo">&#xf320;</i> <span
            class="i-name">-fnt-icon-diigo</span><span class="i-code">0xf320</span></div>
</div>
<div class="row">
    <div title="Code: 0xf321" class="the-icons span3"><i class="demo-icon -fnt-icon-lastfm-1">&#xf321;</i> <span
            class="i-name">-fnt-icon-lastfm-1</span><span class="i-code">0xf321</span></div>
    <div title="Code: 0xf322" class="the-icons span3"><i class="demo-icon -fnt-icon-lastfm-circled">&#xf322;</i> <span
            class="i-name">-fnt-icon-lastfm-circled</span><span class="i-code">0xf322</span></div>
    <div title="Code: 0xf323" class="the-icons span3"><i class="demo-icon -fnt-icon-tudou">&#xf323;</i> <span
            class="i-name">-fnt-icon-tudou</span><span class="i-code">0xf323</span></div>
    <div title="Code: 0xf324" class="the-icons span3"><i class="demo-icon -fnt-icon-rdio">&#xf324;</i> <span
            class="i-name">-fnt-icon-rdio</span><span class="i-code">0xf324</span></div>
</div>
<div class="row">
    <div title="Code: 0xf325" class="the-icons span3"><i class="demo-icon -fnt-icon-rdio-circled">&#xf325;</i> <span
            class="i-name">-fnt-icon-rdio-circled</span><span class="i-code">0xf325</span></div>
    <div title="Code: 0xf326" class="the-icons span3"><i class="demo-icon -fnt-icon-amex">&#xf326;</i> <span
            class="i-name">-fnt-icon-amex</span><span class="i-code">0xf326</span></div>
    <div title="Code: 0xf327" class="the-icons span3"><i class="demo-icon -fnt-icon-spotify-1">&#xf327;</i> <span
            class="i-name">-fnt-icon-spotify-1</span><span class="i-code">0xf327</span></div>
    <div title="Code: 0xf328" class="the-icons span3"><i class="demo-icon -fnt-icon-spotify-circled">&#xf328;</i> <span
            class="i-name">-fnt-icon-spotify-circled</span><span class="i-code">0xf328</span></div>
</div>
<div class="row">
    <div title="Code: 0xf329" class="the-icons span3"><i class="demo-icon -fnt-icon-mastercard">&#xf329;</i> <span
            class="i-name">-fnt-icon-mastercard</span><span class="i-code">0xf329</span></div>
    <div title="Code: 0xf32a" class="the-icons span3"><i class="demo-icon -fnt-icon-qq-1">&#xf32a;</i> <span
            class="i-name">-fnt-icon-qq-1</span><span class="i-code">0xf32a</span></div>
    <div title="Code: 0xf32b" class="the-icons span3"><i class="demo-icon -fnt-icon-bandcamp-1">&#xf32b;</i> <span
            class="i-name">-fnt-icon-bandcamp-1</span><span class="i-code">0xf32b</span></div>
    <div title="Code: 0xf32c" class="the-icons span3"><i class="demo-icon -fnt-icon-codepen">&#xf32c;</i> <span
            class="i-name">-fnt-icon-codepen</span><span class="i-code">0xf32c</span></div>
</div>
<div class="row">
    <div title="Code: 0xf32d" class="the-icons span3"><i class="demo-icon -fnt-icon-instagram-1">&#xf32d;</i> <span
            class="i-name">-fnt-icon-instagram-1</span><span class="i-code">0xf32d</span></div>
    <div title="Code: 0xf330" class="the-icons span3"><i class="demo-icon -fnt-icon-dropbox-1">&#xf330;</i> <span
            class="i-name">-fnt-icon-dropbox-1</span><span class="i-code">0xf330</span></div>
    <div title="Code: 0xf333" class="the-icons span3"><i class="demo-icon -fnt-icon-evernote">&#xf333;</i> <span
            class="i-name">-fnt-icon-evernote</span><span class="i-code">0xf333</span></div>
    <div title="Code: 0xf336" class="the-icons span3"><i class="demo-icon -fnt-icon-flattr">&#xf336;</i> <span
            class="i-name">-fnt-icon-flattr</span><span class="i-code">0xf336</span></div>
</div>
<div class="row">
    <div title="Code: 0xf339" class="the-icons span3"><i class="demo-icon -fnt-icon-skype-1">&#xf339;</i> <span
            class="i-name">-fnt-icon-skype-1</span><span class="i-code">0xf339</span></div>
    <div title="Code: 0xf33a" class="the-icons span3"><i class="demo-icon -fnt-icon-skype-circled">&#xf33a;</i> <span
            class="i-name">-fnt-icon-skype-circled</span><span class="i-code">0xf33a</span></div>
    <div title="Code: 0xf33c" class="the-icons span3"><i class="demo-icon -fnt-icon-renren-1">&#xf33c;</i> <span
            class="i-name">-fnt-icon-renren-1</span><span class="i-code">0xf33c</span></div>
    <div title="Code: 0xf33f" class="the-icons span3"><i class="demo-icon -fnt-icon-sina-weibo">&#xf33f;</i> <span
            class="i-name">-fnt-icon-sina-weibo</span><span class="i-code">0xf33f</span></div>
</div>
<div class="row">
    <div title="Code: 0xf342" class="the-icons span3"><i class="demo-icon -fnt-icon-paypal-1">&#xf342;</i> <span
            class="i-name">-fnt-icon-paypal-1</span><span class="i-code">0xf342</span></div>
    <div title="Code: 0xf345" class="the-icons span3"><i class="demo-icon -fnt-icon-picasa">&#xf345;</i> <span
            class="i-name">-fnt-icon-picasa</span><span class="i-code">0xf345</span></div>
    <div title="Code: 0xf348" class="the-icons span3"><i class="demo-icon -fnt-icon-soundcloud-1">&#xf348;</i> <span
            class="i-name">-fnt-icon-soundcloud-1</span><span class="i-code">0xf348</span></div>
    <div title="Code: 0xf34b" class="the-icons span3"><i class="demo-icon -fnt-icon-mixi">&#xf34b;</i> <span
            class="i-name">-fnt-icon-mixi</span><span class="i-code">0xf34b</span></div>
</div>
<div class="row">
    <div title="Code: 0xf34e" class="the-icons span3"><i class="demo-icon -fnt-icon-behance-1">&#xf34e;</i> <span
            class="i-name">-fnt-icon-behance-1</span><span class="i-code">0xf34e</span></div>
    <div title="Code: 0xf351" class="the-icons span3"><i class="demo-icon -fnt-icon-google-circles">&#xf351;</i> <span
            class="i-name">-fnt-icon-google-circles</span><span class="i-code">0xf351</span></div>
    <div title="Code: 0xf354" class="the-icons span3"><i class="demo-icon -fnt-icon-vkontakte-1">&#xf354;</i> <span
            class="i-name">-fnt-icon-vkontakte-1</span><span class="i-code">0xf354</span></div>
    <div title="Code: 0xf357" class="the-icons span3"><i class="demo-icon -fnt-icon-smashing">&#xf357;</i> <span
            class="i-name">-fnt-icon-smashing</span><span class="i-code">0xf357</span></div>
</div>
<div class="row">
    <div title="Code: 0xf4ac" class="the-icons span3"><i class="demo-icon -fnt-icon-comment-4">&#xf4ac;</i> <span
            class="i-name">-fnt-icon-comment-4</span><span class="i-code">0xf4ac</span></div>
    <div title="Code: 0xf4c2" class="the-icons span3"><i class="demo-icon -fnt-icon-folder-open-empty-1">&#xf4c2;</i>
        <span class="i-name">-fnt-icon-folder-open-empty-1</span><span class="i-code">0xf4c2</span></div>
    <div title="Code: 0xf4c5" class="the-icons span3"><i class="demo-icon -fnt-icon-calendar-5">&#xf4c5;</i> <span
            class="i-name">-fnt-icon-calendar-5</span><span class="i-code">0xf4c5</span></div>
    <div title="Code: 0xf4f0" class="the-icons span3"><i class="demo-icon -fnt-icon-newspaper-2">&#xf4f0;</i> <span
            class="i-name">-fnt-icon-newspaper-2</span><span class="i-code">0xf4f0</span></div>
</div>
<div class="row">
    <div title="Code: 0xf4f7" class="the-icons span3"><i class="demo-icon -fnt-icon-camera-5">&#xf4f7;</i> <span
            class="i-name">-fnt-icon-camera-5</span><span class="i-code">0xf4f7</span></div>
    <div title="Code: 0xf50d" class="the-icons span3"><i class="demo-icon -fnt-icon-search-5">&#xf50d;</i> <span
            class="i-name">-fnt-icon-search-5</span><span class="i-code">0xf50d</span></div>
    <div title="Code: 0xf510" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-alt">&#xf510;</i> <span
            class="i-name">-fnt-icon-lock-alt</span><span class="i-code">0xf510</span></div>
    <div title="Code: 0xf512" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-5">&#xf512;</i> <span
            class="i-name">-fnt-icon-lock-5</span><span class="i-code">0xf512</span></div>
</div>
<div class="row">
    <div title="Code: 0xf513" class="the-icons span3"><i class="demo-icon -fnt-icon-lock-open-5">&#xf513;</i> <span
            class="i-name">-fnt-icon-lock-open-5</span><span class="i-code">0xf513</span></div>
    <div title="Code: 0xf514" class="the-icons span3"><i class="demo-icon -fnt-icon-joystick">&#xf514;</i> <span
            class="i-name">-fnt-icon-joystick</span><span class="i-code">0xf514</span></div>
    <div title="Code: 0xf525" class="the-icons span3"><i class="demo-icon -fnt-icon-fire-1">&#xf525;</i> <span
            class="i-name">-fnt-icon-fire-1</span><span class="i-code">0xf525</span></div>
    <div title="Code: 0xf526" class="the-icons span3"><i class="demo-icon -fnt-icon-chart-bar-5">&#xf526;</i> <span
            class="i-name">-fnt-icon-chart-bar-5</span><span class="i-code">0xf526</span></div>
</div>
<div class="row">
    <div title="Code: 0xf527" class="the-icons span3"><i class="demo-icon -fnt-icon-spread">&#xf527;</i> <span
            class="i-name">-fnt-icon-spread</span><span class="i-code">0xf527</span></div>
    <div title="Code: 0xf528" class="the-icons span3"><i class="demo-icon -fnt-icon-spinner1">&#xf528;</i> <span
            class="i-name">-fnt-icon-spinner1</span><span class="i-code">0xf528</span></div>
    <div title="Code: 0xf529" class="the-icons span3"><i class="demo-icon -fnt-icon-spinner2">&#xf529;</i> <span
            class="i-name">-fnt-icon-spinner2</span><span class="i-code">0xf529</span></div>
    <div title="Code: 0xf600" class="the-icons span3"><i class="demo-icon -fnt-icon-db-shape">&#xf600;</i> <span
            class="i-name">-fnt-icon-db-shape</span><span class="i-code">0xf600</span></div>
</div>
<div class="row">
    <div title="Code: 0xf601" class="the-icons span3"><i class="demo-icon -fnt-icon-sweden">&#xf601;</i> <span
            class="i-name">-fnt-icon-sweden</span><span class="i-code">0xf601</span></div>
    <div title="Code: 0xf603" class="the-icons span3"><i class="demo-icon -fnt-icon-logo-db">&#xf603;</i> <span
            class="i-name">-fnt-icon-logo-db</span><span class="i-code">0xf603</span></div>
</div>
</div>
<div class="container footer">Generated by <a href="http://fontello.com">fontello.com</a></div>
</body>
</html>