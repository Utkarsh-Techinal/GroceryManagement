<?php
session_start()
?>

<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>DOT |Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link rel="icon" href="assets/images/Logo-dot.png">
    <script src="https://kit.fontawesome.com/5fdd48a981.js" crossorigin="anonymous"></script>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no" >

<link href="main.07a59de7b920cd76b874.css" rel="stylesheet"></head>
 <bkl>
<style>

    .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
    box-shadow: 2px 2px 3px #999;
    z-index: 5000;
}

.my-float{
	margin-top:22px;
}
.card {
  font-size: .875rem;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

@-ms-viewport {
  width: device-width;
}

article,
aside,
dialog,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
  display: block;
}

body {
  margin: 0;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fafafa;
}

[tabindex="-1"]:focus {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 500;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

dfn {
  font-style: italic;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #9c27b0;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:hover {
  color: #0a6ebd;
  text-decoration: underline;
}

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):hover,
a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

pre,
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg:not(:root) {
  overflow: hidden;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

label {
  display: inline-block;
  margin-bottom: .5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

@media print {

  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }

  a:not(.btn) {
    text-decoration: underline;
  }

  abbr[title]::after {
    content: " ("attr(title) ")";
  }

  pre {
    white-space: pre-wrap !important;
  }

  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }

  thead {
    display: table-header-group;
  }

  tr,
  img {
    page-break-inside: avoid;
  }

  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }

  h2,
  h3 {
    page-break-after: avoid;
  }

  @page {
    size: a3;
  }

  body {
    min-width: 992px !important;
  }

  .container {
    min-width: 992px !important;
  }

  .navbar {
    display: none;
  }

  .badge {
    border: 1px solid #000;
  }

  .table {
    border-collapse: collapse !important;
  }

  .table td,
  .table th {
    background-color: #fff !important;
  }

  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

@-ms-viewport {
  width: device-width;
}

article,
aside,
dialog,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
  display: block;
}

body {
  margin: 0;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fafafa;
}

[tabindex="-1"]:focus {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 500;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

dfn {
  font-style: italic;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #9c27b0;
  text-decoration: none;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:hover {
  color: #0a6ebd;
  text-decoration: underline;
}

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):hover,
a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

pre,
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg:not(:root) {
  overflow: hidden;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

label {
  display: inline-block;
  margin-bottom: .5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 400;
  line-height: 1.2;
  color: inherit;
}

h1,
.h1 {
  font-size: 2.5rem;
}

h2,
.h2 {
  font-size: 2rem;
}

h3,
.h3 {
  font-size: 1.75rem;
}

h4,
.h4 {
  font-size: 1.5rem;
}

h5,
.h5 {
  font-size: 1.25rem;
}

h6,
.h6 {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: 7rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: 2.8125rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: 2.125rem;
  font-weight: 300;
  line-height: 1.2;
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
  font-size: 80%;
  font-weight: 400;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d;
}

.blockquote-footer::before {
  content: "\2014 \00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fafafa;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 90%;
  color: #6c757d;
}

code,
kbd,
pre,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

code {
  font-size: 87.5%;
  color: #e91e63;
  word-break: break-word;
}

a>code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #ffffff;
  background-color: #212529;
  border-radius: 0.2rem;
  box-shadow: inset 0 -0.1rem 0 rgba(0, 0, 0, 0.25);
}

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 500;
  box-shadow: none;
}

pre {
  display: block;
  font-size: 87.5%;
  color: #212529;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters>.col,
.no-gutters>[class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col,
.col-auto,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm,
.col-sm-auto,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md,
.col-md-auto,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg,
.col-lg-auto,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
  max-width: none;
}

.col-1 {
  flex: 0 0 8.333333%;
  max-width: 8.333333%;
}

.col-2 {
  flex: 0 0 16.666667%;
  max-width: 16.666667%;
}

.col-3 {
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}

.col-5 {
  flex: 0 0 41.666667%;
  max-width: 41.666667%;
}

.col-6 {
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  flex: 0 0 58.333333%;
  max-width: 58.333333%;
}

.col-8 {
  flex: 0 0 66.666667%;
  max-width: 66.666667%;
}

.col-9 {
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  flex: 0 0 83.333333%;
  max-width: 83.333333%;
}

.col-11 {
  flex: 0 0 91.666667%;
  max-width: 91.666667%;
}

.col-12 {
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  order: -1;
}

.order-last {
  order: 13;
}

.order-0 {
  order: 0;
}

.order-1 {
  order: 1;
}

.order-2 {
  order: 2;
}

.order-3 {
  order: 3;
}

.order-4 {
  order: 4;
}

.order-5 {
  order: 5;
}

.order-6 {
  order: 6;
}

.order-7 {
  order: 7;
}

.order-8 {
  order: 8;
}

.order-9 {
  order: 9;
}

.order-10 {
  order: 10;
}

.order-11 {
  order: 11;
}

.order-12 {
  order: 12;
}

.offset-1 {
  margin-left: 8.333333%;
}

.offset-2 {
  margin-left: 16.666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.333333%;
}

.offset-5 {
  margin-left: 41.666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.333333%;
}

.offset-8 {
  margin-left: 66.666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.333333%;
}

.offset-11 {
  margin-left: 91.666667%;
}

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }

  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-sm-1 {
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }

  .col-sm-2 {
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }

  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-sm-4 {
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }

  .col-sm-5 {
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }

  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-sm-7 {
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }

  .col-sm-8 {
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }

  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-sm-10 {
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }

  .col-sm-11 {
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }

  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .order-sm-first {
    order: -1;
  }

  .order-sm-last {
    order: 13;
  }

  .order-sm-0 {
    order: 0;
  }

  .order-sm-1 {
    order: 1;
  }

  .order-sm-2 {
    order: 2;
  }

  .order-sm-3 {
    order: 3;
  }

  .order-sm-4 {
    order: 4;
  }

  .order-sm-5 {
    order: 5;
  }

  .order-sm-6 {
    order: 6;
  }

  .order-sm-7 {
    order: 7;
  }

  .order-sm-8 {
    order: 8;
  }

  .order-sm-9 {
    order: 9;
  }

  .order-sm-10 {
    order: 10;
  }

  .order-sm-11 {
    order: 11;
  }

  .order-sm-12 {
    order: 12;
  }

  .offset-sm-0 {
    margin-left: 0;
  }

  .offset-sm-1 {
    margin-left: 8.333333%;
  }

  .offset-sm-2 {
    margin-left: 16.666667%;
  }

  .offset-sm-3 {
    margin-left: 25%;
  }

  .offset-sm-4 {
    margin-left: 33.333333%;
  }

  .offset-sm-5 {
    margin-left: 41.666667%;
  }

  .offset-sm-6 {
    margin-left: 50%;
  }

  .offset-sm-7 {
    margin-left: 58.333333%;
  }

  .offset-sm-8 {
    margin-left: 66.666667%;
  }

  .offset-sm-9 {
    margin-left: 75%;
  }

  .offset-sm-10 {
    margin-left: 83.333333%;
  }

  .offset-sm-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }

  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-md-1 {
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }

  .col-md-2 {
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }

  .col-md-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-md-4 {
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }

  .col-md-5 {
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }

  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-md-7 {
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }

  .col-md-8 {
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }

  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-md-10 {
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }

  .col-md-11 {
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }

  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .order-md-first {
    order: -1;
  }

  .order-md-last {
    order: 13;
  }

  .order-md-0 {
    order: 0;
  }

  .order-md-1 {
    order: 1;
  }

  .order-md-2 {
    order: 2;
  }

  .order-md-3 {
    order: 3;
  }

  .order-md-4 {
    order: 4;
  }

  .order-md-5 {
    order: 5;
  }

  .order-md-6 {
    order: 6;
  }

  .order-md-7 {
    order: 7;
  }

  .order-md-8 {
    order: 8;
  }

  .order-md-9 {
    order: 9;
  }

  .order-md-10 {
    order: 10;
  }

  .order-md-11 {
    order: 11;
  }

  .order-md-12 {
    order: 12;
  }

  .offset-md-0 {
    margin-left: 0;
  }

  .offset-md-1 {
    margin-left: 8.333333%;
  }

  .offset-md-2 {
    margin-left: 16.666667%;
  }

  .offset-md-3 {
    margin-left: 25%;
  }

  .offset-md-4 {
    margin-left: 33.333333%;
  }

  .offset-md-5 {
    margin-left: 41.666667%;
  }

  .offset-md-6 {
    margin-left: 50%;
  }

  .offset-md-7 {
    margin-left: 58.333333%;
  }

  .offset-md-8 {
    margin-left: 66.666667%;
  }

  .offset-md-9 {
    margin-left: 75%;
  }

  .offset-md-10 {
    margin-left: 83.333333%;
  }

  .offset-md-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }

  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-lg-1 {
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }

  .col-lg-2 {
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }

  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-lg-4 {
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }

  .col-lg-5 {
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }

  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-lg-7 {
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }

  .col-lg-8 {
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }

  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-lg-10 {
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }

  .col-lg-11 {
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }

  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .order-lg-first {
    order: -1;
  }

  .order-lg-last {
    order: 13;
  }

  .order-lg-0 {
    order: 0;
  }

  .order-lg-1 {
    order: 1;
  }

  .order-lg-2 {
    order: 2;
  }

  .order-lg-3 {
    order: 3;
  }

  .order-lg-4 {
    order: 4;
  }

  .order-lg-5 {
    order: 5;
  }

  .order-lg-6 {
    order: 6;
  }

  .order-lg-7 {
    order: 7;
  }

  .order-lg-8 {
    order: 8;
  }

  .order-lg-9 {
    order: 9;
  }

  .order-lg-10 {
    order: 10;
  }

  .order-lg-11 {
    order: 11;
  }

  .order-lg-12 {
    order: 12;
  }

  .offset-lg-0 {
    margin-left: 0;
  }

  .offset-lg-1 {
    margin-left: 8.333333%;
  }

  .offset-lg-2 {
    margin-left: 16.666667%;
  }

  .offset-lg-3 {
    margin-left: 25%;
  }

  .offset-lg-4 {
    margin-left: 33.333333%;
  }

  .offset-lg-5 {
    margin-left: 41.666667%;
  }

  .offset-lg-6 {
    margin-left: 50%;
  }

  .offset-lg-7 {
    margin-left: 58.333333%;
  }

  .offset-lg-8 {
    margin-left: 66.666667%;
  }

  .offset-lg-9 {
    margin-left: 75%;
  }

  .offset-lg-10 {
    margin-left: 83.333333%;
  }

  .offset-lg-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }

  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-xl-1 {
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }

  .col-xl-2 {
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }

  .col-xl-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }

  .col-xl-4 {
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }

  .col-xl-5 {
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }

  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-xl-7 {
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }

  .col-xl-8 {
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }

  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }

  .col-xl-10 {
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }

  .col-xl-11 {
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }

  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .order-xl-first {
    order: -1;
  }

  .order-xl-last {
    order: 13;
  }

  .order-xl-0 {
    order: 0;
  }

  .order-xl-1 {
    order: 1;
  }

  .order-xl-2 {
    order: 2;
  }

  .order-xl-3 {
    order: 3;
  }

  .order-xl-4 {
    order: 4;
  }

  .order-xl-5 {
    order: 5;
  }

  .order-xl-6 {
    order: 6;
  }

  .order-xl-7 {
    order: 7;
  }

  .order-xl-8 {
    order: 8;
  }

  .order-xl-9 {
    order: 9;
  }

  .order-xl-10 {
    order: 10;
  }

  .order-xl-11 {
    order: 11;
  }

  .order-xl-12 {
    order: 12;
  }

  .offset-xl-0 {
    margin-left: 0;
  }

  .offset-xl-1 {
    margin-left: 8.333333%;
  }

  .offset-xl-2 {
    margin-left: 16.666667%;
  }

  .offset-xl-3 {
    margin-left: 25%;
  }

  .offset-xl-4 {
    margin-left: 33.333333%;
  }

  .offset-xl-5 {
    margin-left: 41.666667%;
  }

  .offset-xl-6 {
    margin-left: 50%;
  }

  .offset-xl-7 {
    margin-left: 58.333333%;
  }

  .offset-xl-8 {
    margin-left: 66.666667%;
  }

  .offset-xl-9 {
    margin-left: 75%;
  }

  .offset-xl-10 {
    margin-left: 83.333333%;
  }

  .offset-xl-11 {
    margin-left: 91.666667%;
  }
}

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid rgba(0, 0, 0, 0.06);
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid rgba(0, 0, 0, 0.06);
}

.table tbody+tbody {
  border-top: 2px solid rgba(0, 0, 0, 0.06);
}

.table .table {
  background-color: #fafafa;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid rgba(0, 0, 0, 0.06);
}

.table-bordered th,
.table-bordered td {
  border: 1px solid rgba(0, 0, 0, 0.06);
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary>th,
.table-primary>td {
  background-color: #c1e2fc;
}

.table-hover .table-primary:hover {
  background-color: #a9d7fb;
}

.table-hover .table-primary:hover>td,
.table-hover .table-primary:hover>th {
  background-color: #a9d7fb;
}

.table-secondary,
.table-secondary>th,
.table-secondary>td {
  background-color: #d6d8db;
}

.table-hover .table-secondary:hover {
  background-color: #c8cbcf;
}

.table-hover .table-secondary:hover>td,
.table-hover .table-secondary:hover>th {
  background-color: #c8cbcf;
}

.table-success,
.table-success>th,
.table-success>td {
  background-color: #cde9ce;
}

.table-hover .table-success:hover {
  background-color: #bbe1bd;
}

.table-hover .table-success:hover>td,
.table-hover .table-success:hover>th {
  background-color: #bbe1bd;
}

.table-info,
.table-info>th,
.table-info>td {
  background-color: #b8ecf3;
}

.table-hover .table-info:hover {
  background-color: #a2e6ef;
}

.table-hover .table-info:hover>td,
.table-hover .table-info:hover>th {
  background-color: #a2e6ef;
}

.table-warning,
.table-warning>th,
.table-warning>td {
  background-color: #fff9c8;
}

.table-hover .table-warning:hover {
  background-color: #fff6af;
}

.table-hover .table-warning:hover>td,
.table-hover .table-warning:hover>th {
  background-color: #fff6af;
}

.table-danger,
.table-danger>th,
.table-danger>td {
  background-color: #fccac7;
}

.table-hover .table-danger:hover {
  background-color: #fbb3af;
}

.table-hover .table-danger:hover>td,
.table-hover .table-danger:hover>th {
  background-color: #fbb3af;
}

.table-light,
.table-light>th,
.table-light>td {
  background-color: #fdfdfe;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover>td,
.table-hover .table-light:hover>th {
  background-color: #ececf6;
}

.table-dark,
.table-dark>th,
.table-dark>td {
  background-color: #c6c8ca;
}

.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}

.table-hover .table-dark:hover>td,
.table-hover .table-dark:hover>th {
  background-color: #b9bbbe;
}

.table-active,
.table-active>th,
.table-active>td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover>td,
.table-hover .table-active:hover>th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #fafafa;
  background-color: #212529;
  border-color: #32383e;
}

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: rgba(0, 0, 0, 0.06);
}

.table-dark {
  color: #fafafa;
  background-color: #212529;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #32383e;
}

.table-dark.table-bordered {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }

  .table-responsive-sm>.table-bordered {
    border: 0;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }

  .table-responsive-md>.table-bordered {
    border: 0;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }

  .table-responsive-lg>.table-bordered {
    border: 0;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }

  .table-responsive-xl>.table-bordered {
    border: 0;
  }
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table-responsive>.table-bordered {
  border: 0;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.4375rem 0;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: rgba(0, 0, 0, 0);
  background-clip: padding-box;
  border: 1px solid #d2d2d2;
  border-radius: 0;
  box-shadow: none;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #495057;
  background-color: rgba(0, 0, 0, 0);
  border-color: #9acffa;
  outline: 0;
  box-shadow: none, 0 0 0 0.2rem rgba(33, 150, 243, 0.25);
}

.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:disabled,
.form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

select.form-control:not([size]):not([multiple]) {
  height: calc(2.4375rem + 2px);
}

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: rgba(0, 0, 0, 0);
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.4375rem + 1px);
  padding-bottom: calc(0.4375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5625rem + 1px);
  padding-bottom: calc(0.5625rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.4375rem;
  padding-bottom: 0.4375rem;
  margin-bottom: 0;
  line-height: 1.5;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm,
.input-group-sm>.form-control-plaintext.form-control,
.input-group-sm>.input-group-prepend>.form-control-plaintext.input-group-text,
.input-group-sm>.input-group-append>.form-control-plaintext.input-group-text,
.input-group-sm>.input-group-prepend>.form-control-plaintext.btn,
.input-group-sm>.input-group-append>.form-control-plaintext.btn,
.form-control-plaintext.form-control-lg,
.input-group-lg>.form-control-plaintext.form-control,
.input-group-lg>.input-group-prepend>.form-control-plaintext.input-group-text,
.input-group-lg>.input-group-append>.form-control-plaintext.input-group-text,
.input-group-lg>.input-group-prepend>.form-control-plaintext.btn,
.input-group-lg>.input-group-append>.form-control-plaintext.btn {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm,
.input-group-sm>.form-control,
.input-group-sm>.input-group-prepend>.input-group-text,
.input-group-sm>.input-group-append>.input-group-text,
.input-group-sm>.input-group-prepend>.btn,
.input-group-sm>.input-group-append>.btn {
  padding: 0.25rem 0;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

select.form-control-sm:not([size]):not([multiple]),
.input-group-sm>select.form-control:not([size]):not([multiple]),
.input-group-sm>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
.input-group-sm>.input-group-append>select.input-group-text:not([size]):not([multiple]),
.input-group-sm>.input-group-prepend>select.btn:not([size]):not([multiple]),
.input-group-sm>.input-group-append>select.btn:not([size]):not([multiple]) {
  height: calc(2.125rem + 2px);
}

.form-control-lg,
.input-group-lg>.form-control,
.input-group-lg>.input-group-prepend>.input-group-text,
.input-group-lg>.input-group-append>.input-group-text,
.input-group-lg>.input-group-prepend>.btn,
.input-group-lg>.input-group-append>.btn {
  padding: 0.5625rem 0;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control-lg:not([size]):not([multiple]),
.input-group-lg>select.form-control:not([size]):not([multiple]),
.input-group-lg>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
.input-group-lg>.input-group-append>select.input-group-text:not([size]):not([multiple]),
.input-group-lg>.input-group-prepend>select.btn:not([size]):not([multiple]),
.input-group-lg>.input-group-append>select.btn:not([size]):not([multiple]) {
  height: calc(4.125rem + 2px);
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row>.col,
.form-row>[class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input:disabled~.form-check-label {
  color: #6c757d;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #4caf50;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(76, 175, 80, 0.8);
  border-radius: .2rem;
}

.was-validated .form-control:valid,
.form-control.is-valid,
.was-validated .custom-select:valid,
.custom-select.is-valid {
  border-color: #4caf50;
}

.was-validated .form-control:valid:focus,
.form-control.is-valid:focus,
.was-validated .custom-select:valid:focus,
.custom-select.is-valid:focus {
  border-color: #4caf50;
  box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
}

.was-validated .form-control:valid~.valid-feedback,
.was-validated .form-control:valid~.valid-tooltip,
.form-control.is-valid~.valid-feedback,
.form-control.is-valid~.valid-tooltip,
.was-validated .custom-select:valid~.valid-feedback,
.was-validated .custom-select:valid~.valid-tooltip,
.custom-select.is-valid~.valid-feedback,
.custom-select.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .form-check-input:valid~.form-check-label,
.form-check-input.is-valid~.form-check-label {
  color: #4caf50;
}

.was-validated .form-check-input:valid~.valid-feedback,
.was-validated .form-check-input:valid~.valid-tooltip,
.form-check-input.is-valid~.valid-feedback,
.form-check-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid~.custom-control-label,
.custom-control-input.is-valid~.custom-control-label {
  color: #4caf50;
}

.was-validated .custom-control-input:valid~.custom-control-label::before,
.custom-control-input.is-valid~.custom-control-label::before {
  background-color: #a3d7a5;
}

.was-validated .custom-control-input:valid~.valid-feedback,
.was-validated .custom-control-input:valid~.valid-tooltip,
.custom-control-input.is-valid~.valid-feedback,
.custom-control-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid:checked~.custom-control-label::before,
.custom-control-input.is-valid:checked~.custom-control-label::before {
  background-color: #6ec071;
}

.was-validated .custom-control-input:valid:focus~.custom-control-label::before,
.custom-control-input.is-valid:focus~.custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
}

.was-validated .custom-file-input:valid~.custom-file-label,
.custom-file-input.is-valid~.custom-file-label {
  border-color: #4caf50;
}

.was-validated .custom-file-input:valid~.custom-file-label::before,
.custom-file-input.is-valid~.custom-file-label::before {
  border-color: inherit;
}

.was-validated .custom-file-input:valid~.valid-feedback,
.was-validated .custom-file-input:valid~.valid-tooltip,
.custom-file-input.is-valid~.valid-feedback,
.custom-file-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .custom-file-input:valid:focus~.custom-file-label,
.custom-file-input.is-valid:focus~.custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #f44336;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(244, 67, 54, 0.8);
  border-radius: .2rem;
}

.was-validated .form-control:invalid,
.form-control.is-invalid,
.was-validated .custom-select:invalid,
.custom-select.is-invalid {
  border-color: #f44336;
}

.was-validated .form-control:invalid:focus,
.form-control.is-invalid:focus,
.was-validated .custom-select:invalid:focus,
.custom-select.is-invalid:focus {
  border-color: #f44336;
  box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25);
}

.was-validated .form-control:invalid~.invalid-feedback,
.was-validated .form-control:invalid~.invalid-tooltip,
.form-control.is-invalid~.invalid-feedback,
.form-control.is-invalid~.invalid-tooltip,
.was-validated .custom-select:invalid~.invalid-feedback,
.was-validated .custom-select:invalid~.invalid-tooltip,
.custom-select.is-invalid~.invalid-feedback,
.custom-select.is-invalid~.invalid-tooltip {
  display: block;
}

.was-validated .form-check-input:invalid~.form-check-label,
.form-check-input.is-invalid~.form-check-label {
  color: #f44336;
}

.was-validated .form-check-input:invalid~.invalid-feedback,
.was-validated .form-check-input:invalid~.invalid-tooltip,
.form-check-input.is-invalid~.invalid-feedback,
.form-check-input.is-invalid~.invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid~.custom-control-label,
.custom-control-input.is-invalid~.custom-control-label {
  color: #f44336;
}

.was-validated .custom-control-input:invalid~.custom-control-label::before,
.custom-control-input.is-invalid~.custom-control-label::before {
  background-color: #fbb4af;
}

.was-validated .custom-control-input:invalid~.invalid-feedback,
.was-validated .custom-control-input:invalid~.invalid-tooltip,
.custom-control-input.is-invalid~.invalid-feedback,
.custom-control-input.is-invalid~.invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid:checked~.custom-control-label::before,
.custom-control-input.is-invalid:checked~.custom-control-label::before {
  background-color: #f77066;
}

.was-validated .custom-control-input:invalid:focus~.custom-control-label::before,
.custom-control-input.is-invalid:focus~.custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(244, 67, 54, 0.25);
}

.was-validated .custom-file-input:invalid~.custom-file-label,
.custom-file-input.is-invalid~.custom-file-label {
  border-color: #f44336;
}

.was-validated .custom-file-input:invalid~.custom-file-label::before,
.custom-file-input.is-invalid~.custom-file-label::before {
  border-color: inherit;
}

.was-validated .custom-file-input:invalid~.invalid-feedback,
.was-validated .custom-file-input:invalid~.invalid-tooltip,
.custom-file-input.is-invalid~.invalid-feedback,
.custom-file-input.is-invalid~.invalid-tooltip {
  display: block;
}

.was-validated .custom-file-input:invalid:focus~.custom-file-label,
.custom-file-input.is-invalid:focus~.custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25);
}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline .form-check {
  width: 100%;
}

@media (min-width: 576px) {
  .form-inline label {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0;
  }

  .form-inline .form-group {
    display: flex;
    flex: 0 0 auto;
    flex-flow: row wrap;
    align-items: center;
    margin-bottom: 0;
  }

  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }

  .form-inline .form-control-plaintext {
    display: inline-block;
  }

  .form-inline .input-group {
    width: auto;
  }

  .form-inline .form-check {
    display: flex;
    align-items: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }

  .form-inline .form-check-input {
    position: relative;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }

  .form-inline .custom-control {
    align-items: center;
    justify-content: center;
  }

  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.46875rem 1rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn:hover,
.btn:focus {
  text-decoration: none;
}

.btn:focus,
.btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.25);
}

.btn.disabled,
.btn:disabled {
  opacity: 0.65;
  box-shadow: none;
}

.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.btn:not(:disabled):not(.disabled):active,
.btn:not(:disabled):not(.disabled).active {
  background-image: none;
  box-shadow: none;
}

.btn:not(:disabled):not(.disabled):active:focus,
.btn:not(:disabled):not(.disabled).active:focus {
  box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.25), none;
}

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #ffffff;
  background-color: #2196f3;
  border-color: #2196f3;
  box-shadow: none;
}

.btn-primary:hover {
  color: #ffffff;
  background-color: #0c83e2;
  border-color: #0c7cd5;
}

.btn-primary:focus,
.btn-primary.focus {
  box-shadow: none, 0 0 0 0.2rem rgba(33, 150, 243, 0.5);
}

.btn-primary.disabled,
.btn-primary:disabled {
  color: #ffffff;
  background-color: #2196f3;
  border-color: #2196f3;
}

.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled).active,
.show>.btn-primary.dropdown-toggle {
  color: #ffffff;
  background-color: #0c7cd5;
  border-color: #0b75c9;
}

.btn-primary:not(:disabled):not(.disabled):active:focus,
.btn-primary:not(:disabled):not(.disabled).active:focus,
.show>.btn-primary.dropdown-toggle:focus {
  box-shadow: none, 0 0 0 0.2rem rgba(33, 150, 243, 0.5);
}

.btn-secondary {
  color: #ffffff;
  background-color: #6c757d;
  border-color: #6c757d;
  box-shadow: none;
}

.btn-secondary:hover {
  color: #ffffff;
  background-color: #5a6268;
  border-color: #545b62;
}

.btn-secondary:focus,
.btn-secondary.focus {
  box-shadow: none, 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-secondary.disabled,
.btn-secondary:disabled {
  color: #ffffff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:not(:disabled):not(.disabled):active,
.btn-secondary:not(:disabled):not(.disabled).active,
.show>.btn-secondary.dropdown-toggle {
  color: #ffffff;
  background-color: #545b62;
  border-color: #4e555b;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus,
.btn-secondary:not(:disabled):not(.disabled).active:focus,
.show>.btn-secondary.dropdown-toggle:focus {
  box-shadow: none, 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-success {
  color: #ffffff;
  background-color: #4caf50;
  border-color: #4caf50;
  box-shadow: none;
}

.btn-success:hover {
  color: #ffffff;
  background-color: #409444;
  border-color: #3d8b40;
}

.btn-success:focus,
.btn-success.focus {
  box-shadow: none, 0 0 0 0.2rem rgba(76, 175, 80, 0.5);
}

.btn-success.disabled,
.btn-success:disabled {
  color: #ffffff;
  background-color: #4caf50;
  border-color: #4caf50;
}

.btn-success:not(:disabled):not(.disabled):active,
.btn-success:not(:disabled):not(.disabled).active,
.show>.btn-success.dropdown-toggle {
  color: #ffffff;
  background-color: #3d8b40;
  border-color: #39833c;
}

.btn-success:not(:disabled):not(.disabled):active:focus,
.btn-success:not(:disabled):not(.disabled).active:focus,
.show>.btn-success.dropdown-toggle:focus {
  box-shadow: none, 0 0 0 0.2rem rgba(76, 175, 80, 0.5);
}

.btn-info {
  color: #ffffff;
  background-color: #00bcd4;
  border-color: #00bcd4;
  box-shadow: none;
}

.btn-info:hover {
  color: #ffffff;
  background-color: #009aae;
  border-color: #008fa1;
}

.btn-info:focus,
.btn-info.focus {
  box-shadow: none, 0 0 0 0.2rem rgba(0, 188, 212, 0.5);
}

.btn-info.disabled,
.btn-info:disabled {
  color: #ffffff;
  background-color: #00bcd4;
  border-color: #00bcd4;
}

.btn-info:not(:disabled):not(.disabled):active,
.btn-info:not(:disabled):not(.disabled).active,
.show>.btn-info.dropdown-toggle {
  color: #ffffff;
  background-color: #008fa1;
  border-color: #008394;
}

.btn-info:not(:disabled):not(.disabled):active:focus,
.btn-info:not(:disabled):not(.disabled).active:focus,
.show>.btn-info.dropdown-toggle:focus {
  box-shadow: none, 0 0 0 0.2rem rgba(0, 188, 212, 0.5);
}

.btn-warning {
  color: #212529;
  background-color: #ffeb3b;
  border-color: #ffeb3b;
  box-shadow: none;
}

.btn-warning:hover {
  color: #212529;
  background-color: #ffe715;
  border-color: #ffe608;
}

.btn-warning:focus,
.btn-warning.focus {
  box-shadow: none, 0 0 0 0.2rem rgba(255, 235, 59, 0.5);
}

.btn-warning.disabled,
.btn-warning:disabled {
  color: #212529;
  background-color: #ffeb3b;
  border-color: #ffeb3b;
}

.btn-warning:not(:disabled):not(.disabled):active,
.btn-warning:not(:disabled):not(.disabled).active,
.show>.btn-warning.dropdown-toggle {
  color: #212529;
  background-color: #ffe608;
  border-color: #fae100;
}

.btn-warning:not(:disabled):not(.disabled):active:focus,
.btn-warning:not(:disabled):not(.disabled).active:focus,
.show>.btn-warning.dropdown-toggle:focus {
  box-shadow: none, 0 0 0 0.2rem rgba(255, 235, 59, 0.5);
}

.btn-danger {
  color: #ffffff;
  background-color: #f44336;
  border-color: #f44336;
  box-shadow: none;
}

.btn-danger:hover {
  color: #ffffff;
  background-color: #f22112;
  border-color: #ea1c0d;
}

.btn-danger:focus,
.btn-danger.focus {
  box-shadow: none, 0 0 0 0.2rem rgba(244, 67, 54, 0.5);
}

.btn-danger.disabled,
.btn-danger:disabled {
  color: #ffffff;
  background-color: #f44336;
  border-color: #f44336;
}

.btn-danger:not(:disabled):not(.disabled):active,
.btn-danger:not(:disabled):not(.disabled).active,
.show>.btn-danger.dropdown-toggle {
  color: #ffffff;
  background-color: #ea1c0d;
  border-color: #de1b0c;
}

.btn-danger:not(:disabled):not(.disabled):active:focus,
.btn-danger:not(:disabled):not(.disabled).active:focus,
.show>.btn-danger.dropdown-toggle:focus {
  box-shadow: none, 0 0 0 0.2rem rgba(244, 67, 54, 0.5);
}

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
  box-shadow: none;
}

.btn-light:hover {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}

.btn-light:focus,
.btn-light.focus {
  box-shadow: none, 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-light.disabled,
.btn-light:disabled {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active,
.btn-light:not(:disabled):not(.disabled).active,
.show>.btn-light.dropdown-toggle {
  color: #212529;
  background-color: #dae0e5;
  border-color: #d3d9df;
}

.btn-light:not(:disabled):not(.disabled):active:focus,
.btn-light:not(:disabled):not(.disabled).active:focus,
.show>.btn-light.dropdown-toggle:focus {
  box-shadow: none, 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-dark {
  color: #ffffff;
  background-color: #343a40;
  border-color: #343a40;
  box-shadow: none;
}

.btn-dark:hover {
  color: #ffffff;
  background-color: #23272b;
  border-color: #1d2124;
}

.btn-dark:focus,
.btn-dark.focus {
  box-shadow: none, 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-dark.disabled,
.btn-dark:disabled {
  color: #ffffff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:not(:disabled):not(.disabled):active,
.btn-dark:not(:disabled):not(.disabled).active,
.show>.btn-dark.dropdown-toggle {
  color: #ffffff;
  background-color: #1d2124;
  border-color: #171a1d;
}

.btn-dark:not(:disabled):not(.disabled):active:focus,
.btn-dark:not(:disabled):not(.disabled).active:focus,
.show>.btn-dark.dropdown-toggle:focus {
  box-shadow: none, 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-outline-primary {
  color: #2196f3;
  background-color: transparent;
  background-image: none;
  border-color: #2196f3;
}

.btn-outline-primary:hover {
  color: #ffffff;
  background-color: #2196f3;
  border-color: #2196f3;
}

.btn-outline-primary:focus,
.btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.5);
}

.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
  color: #2196f3;
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active,
.btn-outline-primary:not(:disabled):not(.disabled).active,
.show>.btn-outline-primary.dropdown-toggle {
  color: #ffffff;
  background-color: #2196f3;
  border-color: #2196f3;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.5);
}

.btn-outline-secondary {
  color: #6c757d;
  background-color: transparent;
  background-image: none;
  border-color: #6c757d;
}

.btn-outline-secondary:hover {
  color: #ffffff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:focus,
.btn-outline-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
  color: #6c757d;
  background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active,
.btn-outline-secondary:not(:disabled):not(.disabled).active,
.show>.btn-outline-secondary.dropdown-toggle {
  color: #ffffff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-outline-success {
  color: #4caf50;
  background-color: transparent;
  background-image: none;
  border-color: #4caf50;
}

.btn-outline-success:hover {
  color: #ffffff;
  background-color: #4caf50;
  border-color: #4caf50;
}

.btn-outline-success:focus,
.btn-outline-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.5);
}

.btn-outline-success.disabled,
.btn-outline-success:disabled {
  color: #4caf50;
  background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active,
.btn-outline-success:not(:disabled):not(.disabled).active,
.show>.btn-outline-success.dropdown-toggle {
  color: #ffffff;
  background-color: #4caf50;
  border-color: #4caf50;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.5);
}

.btn-outline-info {
  color: #00bcd4;
  background-color: transparent;
  background-image: none;
  border-color: #00bcd4;
}

.btn-outline-info:hover {
  color: #ffffff;
  background-color: #00bcd4;
  border-color: #00bcd4;
}

.btn-outline-info:focus,
.btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.5);
}

.btn-outline-info.disabled,
.btn-outline-info:disabled {
  color: #00bcd4;
  background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active,
.btn-outline-info:not(:disabled):not(.disabled).active,
.show>.btn-outline-info.dropdown-toggle {
  color: #ffffff;
  background-color: #00bcd4;
  border-color: #00bcd4;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.5);
}

.btn-outline-warning {
  color: #ffeb3b;
  background-color: transparent;
  background-image: none;
  border-color: #ffeb3b;
}

.btn-outline-warning:hover {
  color: #212529;
  background-color: #ffeb3b;
  border-color: #ffeb3b;
}

.btn-outline-warning:focus,
.btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 235, 59, 0.5);
}

.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
  color: #ffeb3b;
  background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active,
.btn-outline-warning:not(:disabled):not(.disabled).active,
.show>.btn-outline-warning.dropdown-toggle {
  color: #212529;
  background-color: #ffeb3b;
  border-color: #ffeb3b;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 235, 59, 0.5);
}

.btn-outline-danger {
  color: #f44336;
  background-color: transparent;
  background-image: none;
  border-color: #f44336;
}

.btn-outline-danger:hover {
  color: #ffffff;
  background-color: #f44336;
  border-color: #f44336;
}

.btn-outline-danger:focus,
.btn-outline-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.5);
}

.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
  color: #f44336;
  background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active,
.btn-outline-danger:not(:disabled):not(.disabled).active,
.show>.btn-outline-danger.dropdown-toggle {
  color: #ffffff;
  background-color: #f44336;
  border-color: #f44336;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.5);
}

.btn-outline-light {
  color: #f8f9fa;
  background-color: transparent;
  background-image: none;
  border-color: #f8f9fa;
}

.btn-outline-light:hover {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:focus,
.btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled,
.btn-outline-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active,
.btn-outline-light:not(:disabled):not(.disabled).active,
.show>.btn-outline-light.dropdown-toggle {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
  color: #343a40;
  background-color: transparent;
  background-image: none;
  border-color: #343a40;
}

.btn-outline-dark:hover {
  color: #ffffff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:focus,
.btn-outline-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
  color: #343a40;
  background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active,
.btn-outline-dark:not(:disabled):not(.disabled).active,
.show>.btn-outline-dark.dropdown-toggle {
  color: #ffffff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show>.btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-link {
  font-weight: 400;
  color: #9c27b0;
  background-color: transparent;
}

.btn-link:hover {
  color: #0a6ebd;
  text-decoration: underline;
  background-color: transparent;
  border-color: transparent;
}

.btn-link:focus,
.btn-link.focus {
  text-decoration: underline;
  border-color: transparent;
  box-shadow: none;
}

.btn-link:disabled,
.btn-link.disabled {
  color: #999999;
}

.btn-lg,
.btn-group-lg>.btn {
  padding: 1.125rem 2.25rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.btn-sm,
.btn-group-sm>.btn {
  padding: 0.40625rem 1.25rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.1875rem;
}

.btn-block {
  display: block;
  width: 100%;
}

.btn-block+.btn-block {
  margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}

.fade {
  opacity: 0;
  transition: opacity 0.15s linear;
}

.fade.show {
  opacity: 1;
}

.collapse {
  display: none;
}

.collapse.show {
  display: block;
}

tr.collapse.show {
  display: table-row;
}

tbody.collapse.show {
  display: table-row-group;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}

.dropup,
.dropdown {
  position: relative;
}

.dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.dropup .dropdown-menu {
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropleft .dropdown-toggle::after {
  display: none;
}

.dropleft .dropdown-toggle::before {
  display: inline-block;
  width: 0;
  height: 0;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.625rem 1.25rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover,
.dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #f8f9fa;
}

.dropdown-item.active,
.dropdown-item:active {
  color: #ffffff;
  text-decoration: none;
  background-color: #2196f3;
}

.dropdown-item.disabled,
.dropdown-item:disabled {
  color: #6c757d;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.25rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group>.btn,
.btn-group-vertical>.btn {
  position: relative;
  flex: 0 1 auto;
}

.btn-group>.btn:hover,
.btn-group-vertical>.btn:hover {
  z-index: 1;
}

.btn-group>.btn:focus,
.btn-group>.btn:active,
.btn-group>.btn.active,
.btn-group-vertical>.btn:focus,
.btn-group-vertical>.btn:active,
.btn-group-vertical>.btn.active {
  z-index: 1;
}

.btn-group .btn+.btn,
.btn-group .btn+.btn-group,
.btn-group .btn-group+.btn,
.btn-group .btn-group+.btn-group,
.btn-group-vertical .btn+.btn,
.btn-group-vertical .btn+.btn-group,
.btn-group-vertical .btn-group+.btn,
.btn-group-vertical .btn-group+.btn-group {
  margin-left: -1px;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}

.btn-toolbar .input-group {
  width: auto;
}

.btn-group>.btn:first-child {
  margin-left: 0;
}

.btn-group>.btn:not(:last-child):not(.dropdown-toggle),
.btn-group>.btn-group:not(:last-child)>.btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group>.btn:not(:first-child),
.btn-group>.btn-group:not(:first-child)>.btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}

.dropdown-toggle-split::after {
  margin-left: 0;
}

.btn-sm+.dropdown-toggle-split,
.btn-group-sm>.btn+.dropdown-toggle-split {
  padding-right: 0.9375rem;
  padding-left: 0.9375rem;
}

.btn-lg+.dropdown-toggle-split,
.btn-group-lg>.btn+.dropdown-toggle-split {
  padding-right: 1.6875rem;
  padding-left: 1.6875rem;
}

.btn-group.show .dropdown-toggle {
  box-shadow: none;
}

.btn-group.show .dropdown-toggle.btn-link {
  box-shadow: none;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}

.btn-group-vertical .btn,
.btn-group-vertical .btn-group {
  width: 100%;
}

.btn-group-vertical>.btn+.btn,
.btn-group-vertical>.btn+.btn-group,
.btn-group-vertical>.btn-group+.btn,
.btn-group-vertical>.btn-group+.btn-group {
  margin-top: -1px;
  margin-left: 0;
}

.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical>.btn-group:not(:last-child)>.btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical>.btn:not(:first-child),
.btn-group-vertical>.btn-group:not(:first-child)>.btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle>.btn,
.btn-group-toggle>.btn-group>.btn {
  margin-bottom: 0;
}

.btn-group-toggle>.btn input[type="radio"],
.btn-group-toggle>.btn input[type="checkbox"],
.btn-group-toggle>.btn-group>.btn input[type="radio"],
.btn-group-toggle>.btn-group>.btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}

.input-group>.form-control,
.input-group>.custom-select,
.input-group>.custom-file {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group>.form-control:focus,
.input-group>.custom-select:focus,
.input-group>.custom-file:focus {
  z-index: 3;
}

.input-group>.form-control+.form-control,
.input-group>.form-control+.custom-select,
.input-group>.form-control+.custom-file,
.input-group>.custom-select+.form-control,
.input-group>.custom-select+.custom-select,
.input-group>.custom-select+.custom-file,
.input-group>.custom-file+.form-control,
.input-group>.custom-file+.custom-select,
.input-group>.custom-file+.custom-file {
  margin-left: -1px;
}

.input-group>.form-control:not(:last-child),
.input-group>.custom-select:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group>.form-control:not(:first-child),
.input-group>.custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group>.custom-file {
  display: flex;
  align-items: center;
}

.input-group>.custom-file:not(:last-child) .custom-file-label,
.input-group>.custom-file:not(:last-child) .custom-file-label::before {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group>.custom-file:not(:first-child) .custom-file-label,
.input-group>.custom-file:not(:first-child) .custom-file-label::before {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: flex;
}

.input-group-prepend .btn,
.input-group-append .btn {
  position: relative;
  z-index: 2;
}

.input-group-prepend .btn+.btn,
.input-group-prepend .btn+.input-group-text,
.input-group-prepend .input-group-text+.input-group-text,
.input-group-prepend .input-group-text+.btn,
.input-group-append .btn+.btn,
.input-group-append .btn+.input-group-text,
.input-group-append .input-group-text+.input-group-text,
.input-group-append .input-group-text+.btn {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.4375rem 0;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
  margin-top: 0;
}

.input-group>.input-group-prepend>.btn,
.input-group>.input-group-prepend>.input-group-text,
.input-group>.input-group-append:not(:last-child)>.btn,
.input-group>.input-group-append:not(:last-child)>.input-group-text,
.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
.input-group>.input-group-append:last-child>.input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group>.input-group-append>.btn,
.input-group>.input-group-append>.input-group-text,
.input-group>.input-group-prepend:not(:first-child)>.btn,
.input-group>.input-group-prepend:not(:first-child)>.input-group-text,
.input-group>.input-group-prepend:first-child>.btn:not(:first-child),
.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
}

.custom-control-inline {
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.custom-control-input:checked~.custom-control-label::before {
  color: #ffffff;
  background-color: #2196f3;
  box-shadow: none;
}

.custom-control-input:focus~.custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(33, 150, 243, 0.25);
}

.custom-control-input:active~.custom-control-label::before {
  color: #ffffff;
  background-color: #cae6fc;
  box-shadow: none;
}

.custom-control-input:disabled~.custom-control-label {
  color: #6c757d;
}

.custom-control-input:disabled~.custom-control-label::before {
  background-color: #e9ecef;
}

.custom-control-label {
  margin-bottom: 0;
}

.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: 0;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  user-select: none;
  background-color: #dee2e6;
  box-shadow: inset 0 0.25rem 0.25rem rgba(0, 0, 0, 0.1);
}

.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: 0;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 50% 50%;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
  background-color: #2196f3;
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23ffffff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
  background-color: #2196f3;
  box-shadow: none;
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23ffffff' d='M0 2h4'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
  background-color: rgba(33, 150, 243, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
  background-color: rgba(33, 150, 243, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}

.custom-radio .custom-control-input:checked~.custom-control-label::before {
  background-color: #2196f3;
}

.custom-radio .custom-control-input:checked~.custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23ffffff'/%3E%3C/svg%3E");
}

.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
  background-color: rgba(33, 150, 243, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(2.4375rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #ffffff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
  background-size: 8px 10px;
  border: 1px solid #d2d2d2;
  border-radius: 0.25rem;
  appearance: none;
}

.custom-select:focus {
  border-color: #9acffa;
  outline: 0;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(154, 207, 250, 0.5);
}

.custom-select:focus::-ms-value {
  color: #495057;
  background-color: rgba(0, 0, 0, 0);
}

.custom-select[multiple],
.custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}

.custom-select:disabled {
  color: #6c757d;
  background-color: #e9ecef;
}

.custom-select::-ms-expand {
  opacity: 0;
}

.custom-select-sm {
  height: calc(2.125rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 75%;
}

.custom-select-lg {
  height: calc(4.125rem + 2px);
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  font-size: 125%;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(2.4375rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(2.4375rem + 2px);
  margin: 0;
  opacity: 0;
}

.custom-file-input:focus~.custom-file-control {
  border-color: #9acffa;
  box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.25);
}

.custom-file-input:focus~.custom-file-control::before {
  border-color: #9acffa;
}

.custom-file-input:lang(en)~.custom-file-label::after {
  content: "Browse";
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(2.4375rem + 2px);
  padding: 0.46875rem 1rem;
  line-height: 1.3;
  color: #495057;
  background-color: transparent;
  border: 0 solid #d2d2d2;
  border-radius: 0;
  box-shadow: none;
}

.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(calc(2.4375rem + 2px) - 0 * 2);
  padding: 0.46875rem 1rem;
  line-height: 1.3;
  color: #495057;
  content: "Browse";
  background-color: transparent;
  border-left: 0 solid #d2d2d2;
  border-radius: 0 0 0 0;
}

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}

.nav-link:hover,
.nav-link:focus {
  text-decoration: none;
}

.nav-link.disabled {
  color: #6c757d;
}

.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-item {
  margin-bottom: -1px;
}

.nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover,
.nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #fafafa;
  border-color: #dee2e6 #dee2e6 #fafafa;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
  color: #ffffff;
  background-color: #2196f3;
}

.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.tab-content>.tab-pane {
  display: none;
}

.tab-content>.active {
  display: block;
}

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}

.navbar>.container,
.navbar>.container-fluid {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap;
}

.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.navbar-toggler:hover,
.navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}

@media (max-width: 575.98px) {

  .navbar-expand-sm>.container,
  .navbar-expand-sm>.container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-sm .navbar-nav .dropdown-menu-right {
    right: 0;
    left: auto;
  }

  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-sm>.container,
  .navbar-expand-sm>.container-fluid {
    flex-wrap: nowrap;
  }

  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-sm .navbar-toggler {
    display: none;
  }

  .navbar-expand-sm .dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
  }
}

@media (max-width: 767.98px) {

  .navbar-expand-md>.container,
  .navbar-expand-md>.container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-md .navbar-nav .dropdown-menu-right {
    right: 0;
    left: auto;
  }

  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-md>.container,
  .navbar-expand-md>.container-fluid {
    flex-wrap: nowrap;
  }

  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-md .navbar-toggler {
    display: none;
  }

  .navbar-expand-md .dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
  }
}

@media (max-width: 991.98px) {

  .navbar-expand-lg>.container,
  .navbar-expand-lg>.container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-lg .navbar-nav .dropdown-menu-right {
    right: 0;
    left: auto;
  }

  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-lg>.container,
  .navbar-expand-lg>.container-fluid {
    flex-wrap: nowrap;
  }

  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-lg .navbar-toggler {
    display: none;
  }

  .navbar-expand-lg .dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
  }
}

@media (max-width: 1199.98px) {

  .navbar-expand-xl>.container,
  .navbar-expand-xl>.container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-xl .navbar-nav .dropdown-menu-right {
    right: 0;
    left: auto;
  }

  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-xl>.container,
  .navbar-expand-xl>.container-fluid {
    flex-wrap: nowrap;
  }

  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-xl .navbar-toggler {
    display: none;
  }

  .navbar-expand-xl .dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
  }
}

.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start;
}

.navbar-expand>.container,
.navbar-expand>.container-fluid {
  padding-right: 0;
  padding-left: 0;
}

.navbar-expand .navbar-nav {
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .dropdown-menu-right {
  right: 0;
  left: auto;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand>.container,
.navbar-expand>.container-fluid {
  flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-expand .dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover,
.navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show>.nav-link,
.navbar-light .navbar-nav .active>.nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover,
.navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #ffffff;
}

.navbar-dark .navbar-brand:hover,
.navbar-dark .navbar-brand:focus {
  color: #ffffff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show>.nav-link,
.navbar-dark .navbar-nav .active>.nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #ffffff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
  color: #ffffff;
}

.navbar-dark .navbar-text a:hover,
.navbar-dark .navbar-text a:focus {
  color: #ffffff;
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid #eeeeee;
  border-radius: 0.25rem;
}

.card>hr {
  margin-right: 0;
  margin-left: 0;
}

.card>.list-group:first-child .list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.card>.list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.card-body {
  flex: 1 1 auto;
  padding: 1.25rem;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link+.card-link {
  margin-left: 1.25rem;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: #fff;
  border-bottom: 1px solid #eeeeee;
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header+.list-group .list-group-item:first-child {
  border-top: 0;
}

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: #fff;
  border-top: 1px solid #eeeeee;
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
}

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px);
}

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck {
  display: flex;
  flex-direction: column;
}

.card-deck .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-deck {
    flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px;
  }

  .card-deck .card {
    display: flex;
    flex: 1 0 0%;
    flex-direction: column;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
  }
}

.card-group {
  display: flex;
  flex-direction: column;
}

.card-group>.card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-group {
    flex-flow: row wrap;
  }

  .card-group>.card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }

  .card-group>.card+.card {
    margin-left: 0;
    border-left: 0;
  }

  .card-group>.card:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .card-group>.card:first-child .card-img-top,
  .card-group>.card:first-child .card-header {
    border-top-right-radius: 0;
  }

  .card-group>.card:first-child .card-img-bottom,
  .card-group>.card:first-child .card-footer {
    border-bottom-right-radius: 0;
  }

  .card-group>.card:last-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }

  .card-group>.card:last-child .card-img-top,
  .card-group>.card:last-child .card-header {
    border-top-left-radius: 0;
  }

  .card-group>.card:last-child .card-img-bottom,
  .card-group>.card:last-child .card-footer {
    border-bottom-left-radius: 0;
  }

  .card-group>.card:only-child {
    border-radius: 0.25rem;
  }

  .card-group>.card:only-child .card-img-top,
  .card-group>.card:only-child .card-header {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
  }

  .card-group>.card:only-child .card-img-bottom,
  .card-group>.card:only-child .card-footer {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
  }

  .card-group>.card:not(:first-child):not(:last-child):not(:only-child) {
    border-radius: 0;
  }

  .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
  .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
  .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,
  .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
    border-radius: 0;
  }
}

.card-columns .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-columns {
    column-count: 3;
    column-gap: 1.25rem;
  }

  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.breadcrumb-item+.breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  padding-left: 0.5rem;
  color: #6c757d;
  content: "/";
}

.breadcrumb-item+.breadcrumb-item:hover::before {
  text-decoration: underline;
}

.breadcrumb-item+.breadcrumb-item:hover::before {
  text-decoration: none;
}

.breadcrumb-item.active {
  color: #6c757d;
}

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: 0;
  line-height: 1.25;
  color: #2196f3;
  background-color: transparent;
  border: 0 solid #dee2e6;
}

.page-link:hover {
  color: #0a6ebd;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus {
  z-index: 2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.25);
}

.page-link:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link {
  z-index: 1;
  color: #ffffff;
  background-color: #2196f3;
  border-color: #2196f3;
}

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: transparent;
  border-color: #dee2e6;
}

.pagination-lg .page-link {
  padding: 0.75rem 0;
  font-size: 1.25rem;
  line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0;
  font-size: 0.875rem;
  line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}

@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 500;
}

.alert-dismissible {
  padding-right: 4rem;
}

.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #114e7e;
  background-color: #d3eafd;
  border-color: #c1e2fc;
}

.alert-primary hr {
  border-top-color: #a9d7fb;
}

.alert-primary .alert-link {
  color: #0b3251;
}

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db;
}

.alert-secondary hr {
  border-top-color: #c8cbcf;
}

.alert-secondary .alert-link {
  color: #202326;
}

.alert-success {
  color: #285b2a;
  background-color: #dbefdc;
  border-color: #cde9ce;
}

.alert-success hr {
  border-top-color: #bbe1bd;
}

.alert-success .alert-link {
  color: #18381a;
}

.alert-info {
  color: #00626e;
  background-color: #ccf2f6;
  border-color: #b8ecf3;
}

.alert-info hr {
  border-top-color: #a2e6ef;
}

.alert-info .alert-link {
  color: #00353b;
}

.alert-warning {
  color: #857a1f;
  background-color: #fffbd8;
  border-color: #fff9c8;
}

.alert-warning hr {
  border-top-color: #fff6af;
}

.alert-warning .alert-link {
  color: #5c5415;
}

.alert-danger {
  color: #7f231c;
  background-color: #fdd9d7;
  border-color: #fccac7;
}

.alert-danger hr {
  border-top-color: #fbb3af;
}

.alert-danger .alert-link {
  color: #551713;
}

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}

.alert-light hr {
  border-top-color: #ececf6;
}

.alert-light .alert-link {
  color: #686868;
}

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}

.alert-dark hr {
  border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
  color: #040505;
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }

  to {
    background-position: 0 0;
  }
}

.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
  box-shadow: inset 0 0.1rem 0.1rem rgba(0, 0, 0, 0.1);
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: #ffffff;
  text-align: center;
  background-color: #2196f3;
  transition: width 0.6s ease;
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  animation: progress-bar-stripes 1s linear infinite;
}

.media {
  display: flex;
  align-items: flex-start;
}

.media-body {
  flex: 1;
}

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover,
.list-group-item-action:focus {
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: inherit;
  border: 0 solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.list-group-item:hover,
.list-group-item:focus {
  z-index: 1;
  text-decoration: none;
}

.list-group-item.disabled,
.list-group-item:disabled {
  color: #6c757d;
  background-color: inherit;
}

.list-group-item.active {
  z-index: 2;
  color: #ffffff;
  background-color: #2196f3;
  border-color: #2196f3;
}

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0;
}

.list-group-item-primary {
  color: #114e7e;
  background-color: #c1e2fc;
}

.list-group-item-primary.list-group-item-action:hover,
.list-group-item-primary.list-group-item-action:focus {
  color: #114e7e;
  background-color: #a9d7fb;
}

.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #114e7e;
  border-color: #114e7e;
}

.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db;
}

.list-group-item-secondary.list-group-item-action:hover,
.list-group-item-secondary.list-group-item-action:focus {
  color: #383d41;
  background-color: #c8cbcf;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #383d41;
  border-color: #383d41;
}

.list-group-item-success {
  color: #285b2a;
  background-color: #cde9ce;
}

.list-group-item-success.list-group-item-action:hover,
.list-group-item-success.list-group-item-action:focus {
  color: #285b2a;
  background-color: #bbe1bd;
}

.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #285b2a;
  border-color: #285b2a;
}

.list-group-item-info {
  color: #00626e;
  background-color: #b8ecf3;
}

.list-group-item-info.list-group-item-action:hover,
.list-group-item-info.list-group-item-action:focus {
  color: #00626e;
  background-color: #a2e6ef;
}

.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #00626e;
  border-color: #00626e;
}

.list-group-item-warning {
  color: #857a1f;
  background-color: #fff9c8;
}

.list-group-item-warning.list-group-item-action:hover,
.list-group-item-warning.list-group-item-action:focus {
  color: #857a1f;
  background-color: #fff6af;
}

.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #857a1f;
  border-color: #857a1f;
}

.list-group-item-danger {
  color: #7f231c;
  background-color: #fccac7;
}

.list-group-item-danger.list-group-item-action:hover,
.list-group-item-danger.list-group-item-action:focus {
  color: #7f231c;
  background-color: #fbb3af;
}

.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #7f231c;
  border-color: #7f231c;
}

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover,
.list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #818182;
  border-color: #818182;
}

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover,
.list-group-item-dark.list-group-item-action:focus {
  color: #1b1e21;
  background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #1b1e21;
  border-color: #1b1e21;
}

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 500;
  line-height: 1;
  color: #000000;
  text-shadow: 0 1px 0 #ffffff;
  opacity: .5;
}

.close:hover,
.close:focus {
  color: #000000;
  text-decoration: none;
  opacity: .75;
}

.close:not(:disabled):not(.disabled) {
  cursor: pointer;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
}

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 500;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
}

.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}

.badge-primary {
  color: #ffffff;
  background-color: #2196f3;
}

.badge-primary[href]:hover,
.badge-primary[href]:focus {
  color: #ffffff;
  text-decoration: none;
  background-color: #0c7cd5;
}

.badge-secondary {
  color: #ffffff;
  background-color: #6c757d;
}

.badge-secondary[href]:hover,
.badge-secondary[href]:focus {
  color: #ffffff;
  text-decoration: none;
  background-color: #545b62;
}

.badge-success {
  color: #ffffff;
  background-color: #4caf50;
}

.badge-success[href]:hover,
.badge-success[href]:focus {
  color: #ffffff;
  text-decoration: none;
  background-color: #3d8b40;
}

.badge-info {
  color: #ffffff;
  background-color: #00bcd4;
}

.badge-info[href]:hover,
.badge-info[href]:focus {
  color: #ffffff;
  text-decoration: none;
  background-color: #008fa1;
}

.badge-warning {
  color: #212529;
  background-color: #ffeb3b;
}

.badge-warning[href]:hover,
.badge-warning[href]:focus {
  color: #212529;
  text-decoration: none;
  background-color: #ffe608;
}

.badge-danger {
  color: #ffffff;
  background-color: #f44336;
}

.badge-danger[href]:hover,
.badge-danger[href]:focus {
  color: #ffffff;
  text-decoration: none;
  background-color: #ea1c0d;
}

.badge-light {
  color: #212529;
  background-color: #f8f9fa;
}

.badge-light[href]:hover,
.badge-light[href]:focus {
  color: #212529;
  text-decoration: none;
  background-color: #dae0e5;
}

.badge-dark {
  color: #ffffff;
  background-color: #343a40;
}

.badge-dark[href]:hover,
.badge-dark[href]:focus {
  color: #ffffff;
  text-decoration: none;
  background-color: #1d2124;
}

.modal-open {
  overflow: hidden;
}

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: transform 0.3s ease-out;
  transform: translate(0, -25%);
}

.modal.show .modal-dialog {
  transform: translate(0, 0);
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - (0.5rem * 2));
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.5);
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.26;
}

.modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #e9ecef;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem;
}

.modal-header .close {
  padding: 1rem;
  margin: -1rem -1rem -1rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #e9ecef;
}

.modal-footer> :not(:first-child) {
  margin-left: .25rem;
}

.modal-footer> :not(:last-child) {
  margin-right: .25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }

  .modal-dialog-centered {
    min-height: calc(100% - (1.75rem * 2));
  }

  .modal-content {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.5);
  }

  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px;
  }
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top,
.bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .arrow,
.bs-tooltip-auto[x-placement^="top"] .arrow {
  bottom: 0;
}

.bs-tooltip-top .arrow::before,
.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: rgba(97, 97, 97, 0.9);
}

.bs-tooltip-right,
.bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-right .arrow,
.bs-tooltip-auto[x-placement^="right"] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-right .arrow::before,
.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: rgba(97, 97, 97, 0.9);
}

.bs-tooltip-bottom,
.bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow,
.bs-tooltip-auto[x-placement^="bottom"] .arrow {
  top: 0;
}

.bs-tooltip-bottom .arrow::before,
.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: rgba(97, 97, 97, 0.9);
}

.bs-tooltip-left,
.bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-left .arrow,
.bs-tooltip-auto[x-placement^="left"] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-left .arrow::before,
.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: rgba(97, 97, 97, 0.9);
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #ffffff;
  text-align: center;
  background-color: rgba(97, 97, 97, 0.9);
  border-radius: 0.25rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.2);
}

.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}

.popover .arrow::before,
.popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top,
.bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem;
}

.bs-popover-top .arrow,
.bs-popover-auto[x-placement^="top"] .arrow {
  bottom: calc((0.5rem + 1px) * -1);
}

.bs-popover-top .arrow::before,
.bs-popover-auto[x-placement^="top"] .arrow::before,
.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
  border-width: 0.5rem 0.5rem 0;
}

.bs-popover-top .arrow::before,
.bs-popover-auto[x-placement^="top"] .arrow::before {
  bottom: 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}


.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
  bottom: 1px;
  border-top-color: #ffffff;
}

.bs-popover-right,
.bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem;
}

.bs-popover-right .arrow,
.bs-popover-auto[x-placement^="right"] .arrow {
  left: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-right .arrow::before,
.bs-popover-auto[x-placement^="right"] .arrow::before,
.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
  border-width: 0.5rem 0.5rem 0.5rem 0;
}

.bs-popover-right .arrow::before,
.bs-popover-auto[x-placement^="right"] .arrow::before {
  left: 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}


.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
  left: 1px;
  border-right-color: #ffffff;
}

.bs-popover-bottom,
.bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem;
}

.bs-popover-bottom .arrow,
.bs-popover-auto[x-placement^="bottom"] .arrow {
  top: calc((0.5rem + 1px) * -1);
}

.bs-popover-bottom .arrow::before,
.bs-popover-auto[x-placement^="bottom"] .arrow::before,
.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
  border-width: 0 0.5rem 0.5rem 0.5rem;
}

.bs-popover-bottom .arrow::before,
.bs-popover-auto[x-placement^="bottom"] .arrow::before {
  top: 0;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}


.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
  top: 1px;
  border-bottom-color: #ffffff;
}

.bs-popover-bottom .popover-header::before,
.bs-popover-auto[x-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left,
.bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem;
}

.bs-popover-left .arrow,
.bs-popover-auto[x-placement^="left"] .arrow {
  right: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-left .arrow::before,
.bs-popover-auto[x-placement^="left"] .arrow::before,
.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
  border-width: 0.5rem 0 0.5rem 0.5rem;
}

.bs-popover-left .arrow::before,
.bs-popover-auto[x-placement^="left"] .arrow::before {
  right: 0;
  border-left-color: rgba(0, 0, 0, 0.25);
}


.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
  right: 1px;
  border-left-color: #ffffff;
}

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  color: inherit;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-item {
  position: relative;
  display: none;
  align-items: center;
  width: 100%;
  transition: transform 0.6s ease;
  backface-visibility: hidden;
  perspective: 1000px;
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0;
}

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
  transform: translateX(0);
}

@supports (transform-style: preserve-3d) {

  .carousel-item-next.carousel-item-left,
  .carousel-item-prev.carousel-item-right {
    transform: translate3d(0, 0, 0);
  }
}

.carousel-item-next,
.active.carousel-item-right {
  transform: translateX(100%);
}

@supports (transform-style: preserve-3d) {

  .carousel-item-next,
  .active.carousel-item-right {
    transform: translate3d(100%, 0, 0);
  }
}

.carousel-item-prev,
.active.carousel-item-left {
  transform: translateX(-100%);
}

@supports (transform-style: preserve-3d) {

  .carousel-item-prev,
  .active.carousel-item-left {
    transform: translate3d(-100%, 0, 0);
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  color: #ffffff;
  text-align: center;
  opacity: 0.5;
}

.carousel-control-prev:hover,
.carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  opacity: .9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators li {
  position: relative;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  background-color: rgba(255, 255, 255, 0.5);
}

.carousel-indicators li::before {
  position: absolute;
  top: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}

.carousel-indicators li::after {
  position: absolute;
  bottom: -10px;
  left: 0;
  display: inline-block;
  width: 100%;
  height: 10px;
  content: "";
}

.carousel-indicators .active {
  background-color: #ffffff;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #ffffff;
  text-align: center;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.bg-primary {
  background-color: #2196f3 !important;
}

a.bg-primary:hover,
a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #0c7cd5 !important;
}

.bg-secondary {
  background-color: #6c757d !important;
}

a.bg-secondary:hover,
a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important;
}

.bg-success {
  background-color: #4caf50 !important;
}

a.bg-success:hover,
a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #3d8b40 !important;
}

.bg-info {
  background-color: #00bcd4 !important;
}

a.bg-info:hover,
a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #008fa1 !important;
}

.bg-warning {
  background-color: #ffeb3b !important;
}

a.bg-warning:hover,
a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #ffe608 !important;
}

.bg-danger {
  background-color: #f44336 !important;
}

a.bg-danger:hover,
a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #ea1c0d !important;
}

.bg-light {
  background-color: #f8f9fa !important;
}

a.bg-light:hover,
a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important;
}

.bg-dark {
  background-color: #343a40 !important;
}

a.bg-dark:hover,
a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important;
}

.bg-white {
  background-color: #ffffff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border {
  border: 1px solid #dee2e6 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.border-right {
  border-right: 1px solid #dee2e6 !important;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-left {
  border-left: 1px solid #dee2e6 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #2196f3 !important;
}

.border-secondary {
  border-color: #6c757d !important;
}

.border-success {
  border-color: #4caf50 !important;
}

.border-info {
  border-color: #00bcd4 !important;
}

.border-warning {
  border-color: #ffeb3b !important;
}

.border-danger {
  border-color: #f44336 !important;
}

.border-light {
  border-color: #f8f9fa !important;
}

.border-dark {
  border-color: #343a40 !important;
}

.border-white {
  border-color: #ffffff !important;
}

.rounded {
  border-radius: 0.25rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: flex !important;
}

.d-inline-flex {
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }

  .d-sm-inline {
    display: inline !important;
  }

  .d-sm-inline-block {
    display: inline-block !important;
  }

  .d-sm-block {
    display: block !important;
  }

  .d-sm-table {
    display: table !important;
  }

  .d-sm-table-row {
    display: table-row !important;
  }

  .d-sm-table-cell {
    display: table-cell !important;
  }

  .d-sm-flex {
    display: flex !important;
  }

  .d-sm-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }

  .d-md-inline {
    display: inline !important;
  }

  .d-md-inline-block {
    display: inline-block !important;
  }

  .d-md-block {
    display: block !important;
  }

  .d-md-table {
    display: table !important;
  }

  .d-md-table-row {
    display: table-row !important;
  }

  .d-md-table-cell {
    display: table-cell !important;
  }

  .d-md-flex {
    display: flex !important;
  }

  .d-md-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }

  .d-lg-inline {
    display: inline !important;
  }

  .d-lg-inline-block {
    display: inline-block !important;
  }

  .d-lg-block {
    display: block !important;
  }

  .d-lg-table {
    display: table !important;
  }

  .d-lg-table-row {
    display: table-row !important;
  }

  .d-lg-table-cell {
    display: table-cell !important;
  }

  .d-lg-flex {
    display: flex !important;
  }

  .d-lg-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }

  .d-xl-inline {
    display: inline !important;
  }

  .d-xl-inline-block {
    display: inline-block !important;
  }

  .d-xl-block {
    display: block !important;
  }

  .d-xl-table {
    display: table !important;
  }

  .d-xl-table-row {
    display: table-row !important;
  }

  .d-xl-table-cell {
    display: table-cell !important;
  }

  .d-xl-flex {
    display: flex !important;
  }

  .d-xl-inline-flex {
    display: inline-flex !important;
  }
}

@media print {
  .d-print-none {
    display: none !important;
  }

  .d-print-inline {
    display: inline !important;
  }

  .d-print-inline-block {
    display: inline-block !important;
  }

  .d-print-block {
    display: block !important;
  }

  .d-print-table {
    display: table !important;
  }

  .d-print-table-row {
    display: table-row !important;
  }

  .d-print-table-cell {
    display: table-cell !important;
  }

  .d-print-flex {
    display: flex !important;
  }

  .d-print-inline-flex {
    display: inline-flex !important;
  }
}

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}

.embed-responsive::before {
  display: block;
  content: "";
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.857143%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row {
  flex-direction: row !important;
}

.flex-column {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.justify-content-start {
  justify-content: flex-start !important;
}

.justify-content-end {
  justify-content: flex-end !important;
}

.justify-content-center {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch {
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important;
  }

  .flex-sm-column {
    flex-direction: column !important;
  }

  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }

  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .justify-content-sm-start {
    justify-content: flex-start !important;
  }

  .justify-content-sm-end {
    justify-content: flex-end !important;
  }

  .justify-content-sm-center {
    justify-content: center !important;
  }

  .justify-content-sm-between {
    justify-content: space-between !important;
  }

  .justify-content-sm-around {
    justify-content: space-around !important;
  }

  .align-items-sm-start {
    align-items: flex-start !important;
  }

  .align-items-sm-end {
    align-items: flex-end !important;
  }

  .align-items-sm-center {
    align-items: center !important;
  }

  .align-items-sm-baseline {
    align-items: baseline !important;
  }

  .align-items-sm-stretch {
    align-items: stretch !important;
  }

  .align-content-sm-start {
    align-content: flex-start !important;
  }

  .align-content-sm-end {
    align-content: flex-end !important;
  }

  .align-content-sm-center {
    align-content: center !important;
  }

  .align-content-sm-between {
    align-content: space-between !important;
  }

  .align-content-sm-around {
    align-content: space-around !important;
  }

  .align-content-sm-stretch {
    align-content: stretch !important;
  }

  .align-self-sm-auto {
    align-self: auto !important;
  }

  .align-self-sm-start {
    align-self: flex-start !important;
  }

  .align-self-sm-end {
    align-self: flex-end !important;
  }

  .align-self-sm-center {
    align-self: center !important;
  }

  .align-self-sm-baseline {
    align-self: baseline !important;
  }

  .align-self-sm-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important;
  }

  .flex-md-column {
    flex-direction: column !important;
  }

  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-md-wrap {
    flex-wrap: wrap !important;
  }

  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .justify-content-md-start {
    justify-content: flex-start !important;
  }

  .justify-content-md-end {
    justify-content: flex-end !important;
  }

  .justify-content-md-center {
    justify-content: center !important;
  }

  .justify-content-md-between {
    justify-content: space-between !important;
  }

  .justify-content-md-around {
    justify-content: space-around !important;
  }

  .align-items-md-start {
    align-items: flex-start !important;
  }

  .align-items-md-end {
    align-items: flex-end !important;
  }

  .align-items-md-center {
    align-items: center !important;
  }

  .align-items-md-baseline {
    align-items: baseline !important;
  }

  .align-items-md-stretch {
    align-items: stretch !important;
  }

  .align-content-md-start {
    align-content: flex-start !important;
  }

  .align-content-md-end {
    align-content: flex-end !important;
  }

  .align-content-md-center {
    align-content: center !important;
  }

  .align-content-md-between {
    align-content: space-between !important;
  }

  .align-content-md-around {
    align-content: space-around !important;
  }

  .align-content-md-stretch {
    align-content: stretch !important;
  }

  .align-self-md-auto {
    align-self: auto !important;
  }

  .align-self-md-start {
    align-self: flex-start !important;
  }

  .align-self-md-end {
    align-self: flex-end !important;
  }

  .align-self-md-center {
    align-self: center !important;
  }

  .align-self-md-baseline {
    align-self: baseline !important;
  }

  .align-self-md-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important;
  }

  .flex-lg-column {
    flex-direction: column !important;
  }

  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }

  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .justify-content-lg-start {
    justify-content: flex-start !important;
  }

  .justify-content-lg-end {
    justify-content: flex-end !important;
  }

  .justify-content-lg-center {
    justify-content: center !important;
  }

  .justify-content-lg-between {
    justify-content: space-between !important;
  }

  .justify-content-lg-around {
    justify-content: space-around !important;
  }

  .align-items-lg-start {
    align-items: flex-start !important;
  }

  .align-items-lg-end {
    align-items: flex-end !important;
  }

  .align-items-lg-center {
    align-items: center !important;
  }

  .align-items-lg-baseline {
    align-items: baseline !important;
  }

  .align-items-lg-stretch {
    align-items: stretch !important;
  }

  .align-content-lg-start {
    align-content: flex-start !important;
  }

  .align-content-lg-end {
    align-content: flex-end !important;
  }

  .align-content-lg-center {
    align-content: center !important;
  }

  .align-content-lg-between {
    align-content: space-between !important;
  }

  .align-content-lg-around {
    align-content: space-around !important;
  }

  .align-content-lg-stretch {
    align-content: stretch !important;
  }

  .align-self-lg-auto {
    align-self: auto !important;
  }

  .align-self-lg-start {
    align-self: flex-start !important;
  }

  .align-self-lg-end {
    align-self: flex-end !important;
  }

  .align-self-lg-center {
    align-self: center !important;
  }

  .align-self-lg-baseline {
    align-self: baseline !important;
  }

  .align-self-lg-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important;
  }

  .flex-xl-column {
    flex-direction: column !important;
  }

  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }

  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .justify-content-xl-start {
    justify-content: flex-start !important;
  }

  .justify-content-xl-end {
    justify-content: flex-end !important;
  }

  .justify-content-xl-center {
    justify-content: center !important;
  }

  .justify-content-xl-between {
    justify-content: space-between !important;
  }

  .justify-content-xl-around {
    justify-content: space-around !important;
  }

  .align-items-xl-start {
    align-items: flex-start !important;
  }

  .align-items-xl-end {
    align-items: flex-end !important;
  }

  .align-items-xl-center {
    align-items: center !important;
  }

  .align-items-xl-baseline {
    align-items: baseline !important;
  }

  .align-items-xl-stretch {
    align-items: stretch !important;
  }

  .align-content-xl-start {
    align-content: flex-start !important;
  }

  .align-content-xl-end {
    align-content: flex-end !important;
  }

  .align-content-xl-center {
    align-content: center !important;
  }

  .align-content-xl-between {
    align-content: space-between !important;
  }

  .align-content-xl-around {
    align-content: space-around !important;
  }

  .align-content-xl-stretch {
    align-content: stretch !important;
  }

  .align-self-xl-auto {
    align-self: auto !important;
  }

  .align-self-xl-start {
    align-self: flex-start !important;
  }

  .align-self-xl-end {
    align-self: flex-end !important;
  }

  .align-self-xl-center {
    align-self: center !important;
  }

  .align-self-xl-baseline {
    align-self: baseline !important;
  }

  .align-self-xl-stretch {
    align-self: stretch !important;
  }
}

.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }

  .float-sm-right {
    float: right !important;
  }

  .float-sm-none {
    float: none !important;
  }
}

@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }

  .float-md-right {
    float: right !important;
  }

  .float-md-none {
    float: none !important;
  }
}

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }

  .float-lg-right {
    float: right !important;
  }

  .float-lg-none {
    float: none !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }

  .float-xl-right {
    float: right !important;
  }

  .float-xl-none {
    float: none !important;
  }
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports (position: sticky) {
  .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  clip-path: inset(50%);
  border: 0;
}

.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
  clip-path: none;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.m-0 {
  margin: 0 !important;
}

.mt-0,
.my-0 {
  margin-top: 0 !important;
}

.mr-0,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.mt-1,
.my-1 {
  margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.mt-2,
.my-2 {
  margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.mt-3,
.my-3 {
  margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
  margin-right: 1rem !important;
}

.mb-3,
.my-3 {
  margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
  margin-left: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 3rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
  padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
  padding-left: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.pt-3,
.py-3 {
  padding-top: 1rem !important;
}

.pr-3,
.px-3 {
  padding-right: 1rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
  padding-left: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.pt-5,
.py-5 {
  padding-top: 3rem !important;
}

.pr-5,
.px-5 {
  padding-right: 3rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
  padding-left: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }

  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }

  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }

  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }

  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }

  .m-sm-1 {
    margin: 0.25rem !important;
  }

  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }

  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }

  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }

  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }

  .m-sm-2 {
    margin: 0.5rem !important;
  }

  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }

  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }

  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }

  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }

  .m-sm-3 {
    margin: 1rem !important;
  }

  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important;
  }

  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important;
  }

  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important;
  }

  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important;
  }

  .m-sm-4 {
    margin: 1.5rem !important;
  }

  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important;
  }

  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important;
  }

  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }

  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important;
  }

  .m-sm-5 {
    margin: 3rem !important;
  }

  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important;
  }

  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important;
  }

  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important;
  }

  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important;
  }

  .p-sm-0 {
    padding: 0 !important;
  }

  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }

  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }

  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }

  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }

  .p-sm-1 {
    padding: 0.25rem !important;
  }

  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }

  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }

  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }

  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }

  .p-sm-2 {
    padding: 0.5rem !important;
  }

  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }

  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }

  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }

  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }

  .p-sm-3 {
    padding: 1rem !important;
  }

  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important;
  }

  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important;
  }

  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important;
  }

  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important;
  }

  .p-sm-4 {
    padding: 1.5rem !important;
  }

  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important;
  }

  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important;
  }

  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }

  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important;
  }

  .p-sm-5 {
    padding: 3rem !important;
  }

  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important;
  }

  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important;
  }

  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important;
  }

  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important;
  }

  .m-sm-auto {
    margin: auto !important;
  }

  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }

  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }

  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }

  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }

  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }

  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }

  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }

  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }

  .m-md-1 {
    margin: 0.25rem !important;
  }

  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }

  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }

  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }

  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }

  .m-md-2 {
    margin: 0.5rem !important;
  }

  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }

  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }

  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }

  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }

  .m-md-3 {
    margin: 1rem !important;
  }

  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important;
  }

  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important;
  }

  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important;
  }

  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important;
  }

  .m-md-4 {
    margin: 1.5rem !important;
  }

  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important;
  }

  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important;
  }

  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important;
  }

  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important;
  }

  .m-md-5 {
    margin: 3rem !important;
  }

  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important;
  }

  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important;
  }

  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important;
  }

  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important;
  }

  .p-md-0 {
    padding: 0 !important;
  }

  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }

  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }

  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }

  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }

  .p-md-1 {
    padding: 0.25rem !important;
  }

  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }

  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }

  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }

  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }

  .p-md-2 {
    padding: 0.5rem !important;
  }

  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }

  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }

  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }

  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }

  .p-md-3 {
    padding: 1rem !important;
  }

  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important;
  }

  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important;
  }

  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important;
  }

  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important;
  }

  .p-md-4 {
    padding: 1.5rem !important;
  }

  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important;
  }

  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important;
  }

  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important;
  }

  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important;
  }

  .p-md-5 {
    padding: 3rem !important;
  }

  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important;
  }

  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important;
  }

  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important;
  }

  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important;
  }

  .m-md-auto {
    margin: auto !important;
  }

  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }

  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }

  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }

  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }

  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }

  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }

  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }

  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }

  .m-lg-1 {
    margin: 0.25rem !important;
  }

  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }

  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }

  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }

  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }

  .m-lg-2 {
    margin: 0.5rem !important;
  }

  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }

  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }

  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }

  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }

  .m-lg-3 {
    margin: 1rem !important;
  }

  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important;
  }

  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important;
  }

  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important;
  }

  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important;
  }

  .m-lg-4 {
    margin: 1.5rem !important;
  }

  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important;
  }

  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important;
  }

  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }

  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important;
  }

  .m-lg-5 {
    margin: 3rem !important;
  }

  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important;
  }

  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important;
  }

  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important;
  }

  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important;
  }

  .p-lg-0 {
    padding: 0 !important;
  }

  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }

  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }

  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }

  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }

  .p-lg-1 {
    padding: 0.25rem !important;
  }

  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }

  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }

  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }

  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }

  .p-lg-2 {
    padding: 0.5rem !important;
  }

  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }

  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }

  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }

  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }

  .p-lg-3 {
    padding: 1rem !important;
  }

  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important;
  }

  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important;
  }

  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important;
  }

  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important;
  }

  .p-lg-4 {
    padding: 1.5rem !important;
  }

  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important;
  }

  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important;
  }

  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }

  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important;
  }

  .p-lg-5 {
    padding: 3rem !important;
  }

  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important;
  }

  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important;
  }

  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important;
  }

  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
  }

  .m-lg-auto {
    margin: auto !important;
  }

  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }

  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }

  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }

  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }

  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }

  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }

  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }

  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }

  .m-xl-1 {
    margin: 0.25rem !important;
  }

  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }

  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }

  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }

  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }

  .m-xl-2 {
    margin: 0.5rem !important;
  }

  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }

  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }

  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }

  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }

  .m-xl-3 {
    margin: 1rem !important;
  }

  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important;
  }

  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important;
  }

  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important;
  }

  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important;
  }

  .m-xl-4 {
    margin: 1.5rem !important;
  }

  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important;
  }

  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important;
  }

  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }

  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important;
  }

  .m-xl-5 {
    margin: 3rem !important;
  }

  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important;
  }

  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important;
  }

  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important;
  }

  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important;
  }

  .p-xl-0 {
    padding: 0 !important;
  }

  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }

  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }

  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }

  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }

  .p-xl-1 {
    padding: 0.25rem !important;
  }

  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }

  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }

  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }

  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }

  .p-xl-2 {
    padding: 0.5rem !important;
  }

  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }

  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }

  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }

  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }

  .p-xl-3 {
    padding: 1rem !important;
  }

  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important;
  }

  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important;
  }

  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important;
  }

  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important;
  }

  .p-xl-4 {
    padding: 1.5rem !important;
  }

  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important;
  }

  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important;
  }

  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }

  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important;
  }

  .p-xl-5 {
    padding: 3rem !important;
  }

  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important;
  }

  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important;
  }

  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important;
  }

  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important;
  }

  .m-xl-auto {
    margin: auto !important;
  }

  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }

  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }

  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }

  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}

.text-justify {
  text-align: justify !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }

  .text-sm-right {
    text-align: right !important;
  }

  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }

  .text-md-right {
    text-align: right !important;
  }

  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }

  .text-lg-right {
    text-align: right !important;
  }

  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }

  .text-xl-right {
    text-align: right !important;
  }

  .text-xl-center {
    text-align: center !important;
  }
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 500 !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #fff !important;
}

.text-primary {
  color: #2196f3 !important;
}

a.text-primary:hover,
a.text-primary:focus {
  color: #0c7cd5 !important;
}

.text-secondary {
  color: #6c757d !important;
}

a.text-secondary:hover,
a.text-secondary:focus {
  color: #545b62 !important;
}

.text-success {
  color: #4caf50 !important;
}

a.text-success:hover,
a.text-success:focus {
  color: #3d8b40 !important;
}

.text-info {
  color: #00bcd4 !important;
}

a.text-info:hover,
a.text-info:focus {
  color: #008fa1 !important;
}

.text-warning {
  color: #ffeb3b !important;
}

a.text-warning:hover,
a.text-warning:focus {
  color: #ffe608 !important;
}

.text-danger {
  color: #f44336 !important;
}

a.text-danger:hover,
a.text-danger:focus {
  color: #ea1c0d !important;
}

.text-light {
  color: #f8f9fa !important;
}

a.text-light:hover,
a.text-light:focus {
  color: #dae0e5 !important;
}

.text-dark {
  color: #343a40 !important;
}

a.text-dark:hover,
a.text-dark:focus {
  color: #1d2124 !important;
}

.text-muted,
.bmd-help {
  color: #6c757d !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

.btn {
  position: relative;
  padding: 12px 30px;
  margin: 0.3125rem 1px;
  font-size: .75rem;
  font-weight: 400;
  line-height: 1.428571;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 0;
  cursor: pointer;
  background-color: transparent;
  border: 0;
  border-radius: 0.2rem;
  outline: 0;
  transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  will-change: box-shadow, transform;
}

.btn:focus,
.btn.focus,
.btn:active:focus,
.btn:active.focus,
.btn.active:focus,
.btn.active.focus {
  outline: 0;
}

.btn.btn-primary {
  color: #fff;
 background: #fe8c00; 
background: -webkit-linear-gradient(to left, #f83600, #fe8c00);  
background: linear-gradient(to left, #f83600, #fe8c00); 
  box-shadow: 0 2px 2px 0 rgba(156, 39, 176, 0.14), 0 3px 1px -2px rgba(156, 39, 176, 0.2), 0 1px 5px 0 rgba(156, 39, 176, 0.12);
}

.btn.btn-primary:hover {
  color: #fff;
  background: #fe8c00; 
background: -webkit-linear-gradient(to left, #f83600, #fe8c00); 
background: linear-gradient(to left, #f83600, #fe8c00);
}

.btn.btn-primary:focus,
.btn.btn-primary.focus,
.btn.btn-primary:hover {
  color: #fff;
  background: #fe8c00;  
background: -webkit-linear-gradient(to left, #f83600, #fe8c00);  
background: linear-gradient(to left, #f83600, #fe8c00); 
}

.btn.btn-primary:active,
.btn.btn-primary.active,
.open>.btn.btn-primary.dropdown-toggle,
.show>.btn.btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #9124a3;
  border-color: #701c7e;
  box-shadow: 0 2px 2px 0 rgba(156, 39, 176, 0.14), 0 3px 1px -2px rgba(156, 39, 176, 0.2), 0 1px 5px 0 rgba(156, 39, 176, 0.12);
}

.btn.btn-primary:active:hover,
.btn.btn-primary:active:focus,
.btn.btn-primary:active.focus,
.btn.btn-primary.active:hover,
.btn.btn-primary.active:focus,
.btn.btn-primary.active.focus,
.open>.btn.btn-primary.dropdown-toggle:hover,
.open>.btn.btn-primary.dropdown-toggle:focus,
.open>.btn.btn-primary.dropdown-toggle.focus,
.show>.btn.btn-primary.dropdown-toggle:hover,
.show>.btn.btn-primary.dropdown-toggle:focus,
.show>.btn.btn-primary.dropdown-toggle.focus {
  color: #fff;
  background-color: #9124a3;
  border-color: #3f1048;
}

.open>.btn.btn-primary.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #9c27b0;
}

.open>.btn.btn-primary.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #9124a3;
}

.btn.btn-primary.disabled:focus,
.btn.btn-primary.disabled.focus,
.btn.btn-primary:disabled:focus,
.btn.btn-primary:disabled.focus {
  background-color: #9c27b0;
  border-color: #9c27b0;
}

.btn.btn-primary.disabled:hover,
.btn.btn-primary:disabled:hover {
  background-color: #9c27b0;
  border-color: #9c27b0;
}

.btn.btn-primary:focus,
.btn.btn-primary:active,
.btn.btn-primary:hover {
  box-shadow: 0 14px 26px -12px rgba(156, 39, 176, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(156, 39, 176, 0.2);
}

.btn.btn-primary.btn-link {
  background-color: transparent;
  color: #9c27b0;
  box-shadow: none;
}

.btn.btn-primary.btn-link:hover,
.btn.btn-primary.btn-link:focus,
.btn.btn-primary.btn-link:active {
  background-color: transparent;
  color: #9c27b0;
}

.btn.btn-secondary {
  color: #333333;
  background-color: #fafafa;
  border-color: #ccc;
  box-shadow: 0 2px 2px 0 rgba(250, 250, 250, 0.14), 0 3px 1px -2px rgba(250, 250, 250, 0.2), 0 1px 5px 0 rgba(250, 250, 250, 0.12);
}

.btn.btn-secondary:hover {
  color: #333333;
  background-color: #f2f2f2;
  border-color: #adadad;
}

.btn.btn-secondary:focus,
.btn.btn-secondary.focus,
.btn.btn-secondary:hover {
  color: #333333;
  background-color: #f2f2f2;
  border-color: #adadad;
}

.btn.btn-secondary:active,
.btn.btn-secondary.active,
.open>.btn.btn-secondary.dropdown-toggle,
.show>.btn.btn-secondary.dropdown-toggle {
  color: #333333;
  background-color: #f2f2f2;
  border-color: #adadad;
  box-shadow: 0 2px 2px 0 rgba(250, 250, 250, 0.14), 0 3px 1px -2px rgba(250, 250, 250, 0.2), 0 1px 5px 0 rgba(250, 250, 250, 0.12);
}

.btn.btn-secondary:active:hover,
.btn.btn-secondary:active:focus,
.btn.btn-secondary:active.focus,
.btn.btn-secondary.active:hover,
.btn.btn-secondary.active:focus,
.btn.btn-secondary.active.focus,
.open>.btn.btn-secondary.dropdown-toggle:hover,
.open>.btn.btn-secondary.dropdown-toggle:focus,
.open>.btn.btn-secondary.dropdown-toggle.focus,
.show>.btn.btn-secondary.dropdown-toggle:hover,
.show>.btn.btn-secondary.dropdown-toggle:focus,
.show>.btn.btn-secondary.dropdown-toggle.focus {
  color: #333333;
  background-color: #f2f2f2;
  border-color: #8c8c8c;
}

.open>.btn.btn-secondary.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #fafafa;
}

.open>.btn.btn-secondary.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #f2f2f2;
}

.btn.btn-secondary.disabled:focus,
.btn.btn-secondary.disabled.focus,
.btn.btn-secondary:disabled:focus,
.btn.btn-secondary:disabled.focus {
  background-color: #fafafa;
  border-color: #ccc;
}

.btn.btn-secondary.disabled:hover,
.btn.btn-secondary:disabled:hover {
  background-color: #fafafa;
  border-color: #ccc;
}

.btn.btn-secondary:focus,
.btn.btn-secondary:active,
.btn.btn-secondary:hover {
  box-shadow: 0 14px 26px -12px rgba(250, 250, 250, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(250, 250, 250, 0.2);
}

.btn.btn-secondary.btn-link {
  background-color: transparent;
  color: #fafafa;
  box-shadow: none;
}

.btn.btn-secondary.btn-link:hover,
.btn.btn-secondary.btn-link:focus,
.btn.btn-secondary.btn-link:active {
  background-color: transparent;
  color: #fafafa;
}

.btn.btn-info {
  color: #fff;
  background-color: #00bcd4;
  border-color: #00bcd4;
  box-shadow: 0 2px 2px 0 rgba(0, 188, 212, 0.14), 0 3px 1px -2px rgba(0, 188, 212, 0.2), 0 1px 5px 0 rgba(0, 188, 212, 0.12);
}

.btn.btn-info:hover {
  color: #fff;
  background-color: #00aec5;
  border-color: #008697;
}

.btn.btn-info:focus,
.btn.btn-info.focus,
.btn.btn-info:hover {
  color: #fff;
  background-color: #00aec5;
  border-color: #008697;
}

.btn.btn-info:active,
.btn.btn-info.active,
.open>.btn.btn-info.dropdown-toggle,
.show>.btn.btn-info.dropdown-toggle {
  color: #fff;
  background-color: #00aec5;
  border-color: #008697;
  box-shadow: 0 2px 2px 0 rgba(0, 188, 212, 0.14), 0 3px 1px -2px rgba(0, 188, 212, 0.2), 0 1px 5px 0 rgba(0, 188, 212, 0.12);
}

.btn.btn-info:active:hover,
.btn.btn-info:active:focus,
.btn.btn-info:active.focus,
.btn.btn-info.active:hover,
.btn.btn-info.active:focus,
.btn.btn-info.active.focus,
.open>.btn.btn-info.dropdown-toggle:hover,
.open>.btn.btn-info.dropdown-toggle:focus,
.open>.btn.btn-info.dropdown-toggle.focus,
.show>.btn.btn-info.dropdown-toggle:hover,
.show>.btn.btn-info.dropdown-toggle:focus,
.show>.btn.btn-info.dropdown-toggle.focus {
  color: #fff;
  background-color: #00aec5;
  border-color: #004b55;
}

.open>.btn.btn-info.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #00bcd4;
}

.open>.btn.btn-info.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #00aec5;
}

.btn.btn-info.disabled:focus,
.btn.btn-info.disabled.focus,
.btn.btn-info:disabled:focus,
.btn.btn-info:disabled.focus {
  background-color: #00bcd4;
  border-color: #00bcd4;
}

.btn.btn-info.disabled:hover,
.btn.btn-info:disabled:hover {
  background-color: #00bcd4;
  border-color: #00bcd4;
}

.btn.btn-info:focus,
.btn.btn-info:active,
.btn.btn-info:hover {
  box-shadow: 0 14px 26px -12px rgba(0, 188, 212, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 188, 212, 0.2);
}

.btn.btn-info.btn-link {
  background-color: transparent;
  color: #00bcd4;
  box-shadow: none;
}

.btn.btn-info.btn-link:hover,
.btn.btn-info.btn-link:focus,
.btn.btn-info.btn-link:active {
  background-color: transparent;
  color: #00bcd4;
}

.btn.btn-success {
  color: #fff;
  background-color: #4caf50;
  border-color: #4caf50;
  box-shadow: 0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12);
}

.btn.btn-success:hover {
  color: #fff;
  background-color: #47a44b;
  border-color: #39843c;
}

.btn.btn-success:focus,
.btn.btn-success.focus,
.btn.btn-success:hover {
  color: #fff;
  background-color: #47a44b;
  border-color: #39843c;
}

.btn.btn-success:active,
.btn.btn-success.active,
.open>.btn.btn-success.dropdown-toggle,
.show>.btn.btn-success.dropdown-toggle {
  color: #fff;
  background-color: #47a44b;
  border-color: #39843c;
  box-shadow: 0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12);
}

.btn.btn-success:active:hover,
.btn.btn-success:active:focus,
.btn.btn-success:active.focus,
.btn.btn-success.active:hover,
.btn.btn-success.active:focus,
.btn.btn-success.active.focus,
.open>.btn.btn-success.dropdown-toggle:hover,
.open>.btn.btn-success.dropdown-toggle:focus,
.open>.btn.btn-success.dropdown-toggle.focus,
.show>.btn.btn-success.dropdown-toggle:hover,
.show>.btn.btn-success.dropdown-toggle:focus,
.show>.btn.btn-success.dropdown-toggle.focus {
  color: #fff;
  background-color: #47a44b;
  border-color: #255627;
}

.open>.btn.btn-success.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #4caf50;
}

.open>.btn.btn-success.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #47a44b;
}

.btn.btn-success.disabled:focus,
.btn.btn-success.disabled.focus,
.btn.btn-success:disabled:focus,
.btn.btn-success:disabled.focus {
  background-color: #4caf50;
  border-color: #4caf50;
}

.btn.btn-success.disabled:hover,
.btn.btn-success:disabled:hover {
  background-color: #4caf50;
  border-color: #4caf50;
}

.btn.btn-success:focus,
.btn.btn-success:active,
.btn.btn-success:hover {
  box-shadow: 0 14px 26px -12px rgba(76, 175, 80, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(76, 175, 80, 0.2);
}

.btn.btn-success.btn-link {
  background-color: transparent;
  color: #4caf50;
  box-shadow: none;
}

.btn.btn-success.btn-link:hover,
.btn.btn-success.btn-link:focus,
.btn.btn-success.btn-link:active {
  background-color: transparent;
  color: #4caf50;
}

.btn.btn-warning {
  color: #fff;
  background-color: #ff9800;
  border-color: #ff9800;
  box-shadow: 0 2px 2px 0 rgba(255, 152, 0, 0.14), 0 3px 1px -2px rgba(255, 152, 0, 0.2), 0 1px 5px 0 rgba(255, 152, 0, 0.12);
}

.btn.btn-warning:hover {
  color: #fff;
  background-color: #f08f00;
  border-color: #c27400;
}

.btn.btn-warning:focus,
.btn.btn-warning.focus,
.btn.btn-warning:hover {
  color: #fff;
  background-color: #f08f00;
  border-color: #c27400;
}

.btn.btn-warning:active,
.btn.btn-warning.active,
.open>.btn.btn-warning.dropdown-toggle,
.show>.btn.btn-warning.dropdown-toggle {
  color: #fff;
  background-color: #f08f00;
  border-color: #c27400;
  box-shadow: 0 2px 2px 0 rgba(255, 152, 0, 0.14), 0 3px 1px -2px rgba(255, 152, 0, 0.2), 0 1px 5px 0 rgba(255, 152, 0, 0.12);
}

.btn.btn-warning:active:hover,
.btn.btn-warning:active:focus,
.btn.btn-warning:active.focus,
.btn.btn-warning.active:hover,
.btn.btn-warning.active:focus,
.btn.btn-warning.active.focus,
.open>.btn.btn-warning.dropdown-toggle:hover,
.open>.btn.btn-warning.dropdown-toggle:focus,
.open>.btn.btn-warning.dropdown-toggle.focus,
.show>.btn.btn-warning.dropdown-toggle:hover,
.show>.btn.btn-warning.dropdown-toggle:focus,
.show>.btn.btn-warning.dropdown-toggle.focus {
  color: #fff;
  background-color: #f08f00;
  border-color: #804c00;
}

.open>.btn.btn-warning.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #ff9800;
}

.open>.btn.btn-warning.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #f08f00;
}

.btn.btn-warning.disabled:focus,
.btn.btn-warning.disabled.focus,
.btn.btn-warning:disabled:focus,
.btn.btn-warning:disabled.focus {
  background-color: #ff9800;
  border-color: #ff9800;
}

.btn.btn-warning.disabled:hover,
.btn.btn-warning:disabled:hover {
  background-color: #ff9800;
  border-color: #ff9800;
}

.btn.btn-warning:focus,
.btn.btn-warning:active,
.btn.btn-warning:hover {
  box-shadow: 0 14px 26px -12px rgba(255, 152, 0, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(255, 152, 0, 0.2);
}

.btn.btn-warning.btn-link {
  background-color: transparent;
  color: #ff9800;
  box-shadow: none;
}

.btn.btn-warning.btn-link:hover,
.btn.btn-warning.btn-link:focus,
.btn.btn-warning.btn-link:active {
  background-color: transparent;
  color: #ff9800;
}

.btn.btn-danger {
  color: #fff;
  background-color: #f44336;
  border-color: #f44336;
  box-shadow: 0 2px 2px 0 rgba(244, 67, 54, 0.14), 0 3px 1px -2px rgba(244, 67, 54, 0.2), 0 1px 5px 0 rgba(244, 67, 54, 0.12);
}

.btn.btn-danger:hover {
  color: #fff;
  background-color: #f33527;
  border-color: #e11b0c;
}

.btn.btn-danger:focus,
.btn.btn-danger.focus,
.btn.btn-danger:hover {
  color: #fff;
  background-color: #f33527;
  border-color: #e11b0c;
}

.btn.btn-danger:active,
.btn.btn-danger.active,
.open>.btn.btn-danger.dropdown-toggle,
.show>.btn.btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #f33527;
  border-color: #e11b0c;
  box-shadow: 0 2px 2px 0 rgba(244, 67, 54, 0.14), 0 3px 1px -2px rgba(244, 67, 54, 0.2), 0 1px 5px 0 rgba(244, 67, 54, 0.12);
}

.btn.btn-danger:active:hover,
.btn.btn-danger:active:focus,
.btn.btn-danger:active.focus,
.btn.btn-danger.active:hover,
.btn.btn-danger.active:focus,
.btn.btn-danger.active.focus,
.open>.btn.btn-danger.dropdown-toggle:hover,
.open>.btn.btn-danger.dropdown-toggle:focus,
.open>.btn.btn-danger.dropdown-toggle.focus,
.show>.btn.btn-danger.dropdown-toggle:hover,
.show>.btn.btn-danger.dropdown-toggle:focus,
.show>.btn.btn-danger.dropdown-toggle.focus {
  color: #fff;
  background-color: #f33527;
  border-color: #a21309;
}

.open>.btn.btn-danger.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #f44336;
}

.open>.btn.btn-danger.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #f33527;
}

.btn.btn-danger.disabled:focus,
.btn.btn-danger.disabled.focus,
.btn.btn-danger:disabled:focus,
.btn.btn-danger:disabled.focus {
  background-color: #f44336;
  border-color: #f44336;
}

.btn.btn-danger.disabled:hover,
.btn.btn-danger:disabled:hover {
  background-color: #f44336;
  border-color: #f44336;
}

.btn.btn-danger:focus,
.btn.btn-danger:active,
.btn.btn-danger:hover {
  box-shadow: 0 14px 26px -12px rgba(244, 67, 54, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(244, 67, 54, 0.2);
}

.btn.btn-danger.btn-link {
  background-color: transparent;
  color: #f44336;
  box-shadow: none;
}

.btn.btn-danger.btn-link:hover,
.btn.btn-danger.btn-link:focus,
.btn.btn-danger.btn-link:active {
  background-color: transparent;
  color: #f44336;
}

.btn.btn-rose {
  color: #fff;
  background-color: #e91e63;
  border-color: #e91e63;
  box-shadow: 0 2px 2px 0 rgba(233, 30, 99, 0.14), 0 3px 1px -2px rgba(233, 30, 99, 0.2), 0 1px 5px 0 rgba(233, 30, 99, 0.12);
}

.btn.btn-rose:hover {
  color: #fff;
  background-color: #ea2c6d;
  border-color: #b8124a;
}

.btn.btn-rose:focus,
.btn.btn-rose.focus,
.btn.btn-rose:hover {
  color: #fff;
  background-color: #ea2c6d;
  border-color: #b8124a;
}

.btn.btn-rose:active,
.btn.btn-rose.active,
.open>.btn.btn-rose.dropdown-toggle,
.show>.btn.btn-rose.dropdown-toggle {
  color: #fff;
  background-color: #ea2c6d;
  border-color: #b8124a;
  box-shadow: 0 2px 2px 0 rgba(233, 30, 99, 0.14), 0 3px 1px -2px rgba(233, 30, 99, 0.2), 0 1px 5px 0 rgba(233, 30, 99, 0.12);
}

.btn.btn-rose:active:hover,
.btn.btn-rose:active:focus,
.btn.btn-rose:active.focus,
.btn.btn-rose.active:hover,
.btn.btn-rose.active:focus,
.btn.btn-rose.active.focus,
.open>.btn.btn-rose.dropdown-toggle:hover,
.open>.btn.btn-rose.dropdown-toggle:focus,
.open>.btn.btn-rose.dropdown-toggle.focus,
.show>.btn.btn-rose.dropdown-toggle:hover,
.show>.btn.btn-rose.dropdown-toggle:focus,
.show>.btn.btn-rose.dropdown-toggle.focus {
  color: #fff;
  background-color: #ea2c6d;
  border-color: #7b0c32;
}

.open>.btn.btn-rose.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #e91e63;
}

.open>.btn.btn-rose.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #ea2c6d;
}

.btn.btn-rose.disabled:focus,
.btn.btn-rose.disabled.focus,
.btn.btn-rose:disabled:focus,
.btn.btn-rose:disabled.focus {
  background-color: #e91e63;
  border-color: #e91e63;
}

.btn.btn-rose.disabled:hover,
.btn.btn-rose:disabled:hover {
  background-color: #e91e63;
  border-color: #e91e63;
}

.btn.btn-rose:focus,
.btn.btn-rose:active,
.btn.btn-rose:hover {
  box-shadow: 0 14px 26px -12px rgba(233, 30, 99, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(233, 30, 99, 0.2);
}

.btn.btn-rose.btn-link {
  background-color: transparent;
  color: #e91e63;
  box-shadow: none;
}

.btn.btn-rose.btn-link:hover,
.btn.btn-rose.btn-link:focus,
.btn.btn-rose.btn-link:active {
  background-color: transparent;
  color: #e91e63;
}

.btn,
.btn.btn-default {
  color: #fff;
  background-color: #999999;
  border-color: #999999;
  box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12);
}

.btn:hover,
.btn.btn-default:hover {
  color: #fff;
  background-color: #919191;
  border-color: #7a7a7a;
}

.btn:focus,
.btn.focus,
.btn:hover,
.btn.btn-default:focus,
.btn.btn-default.focus,
.btn.btn-default:hover {
  color: #fff;
  background-color: #919191;
  border-color: #7a7a7a;
}

.btn:active,
.btn.active,
.open>.btn.dropdown-toggle,
.show>.btn.dropdown-toggle,
.btn.btn-default:active,
.btn.btn-default.active,
.open>.btn.btn-default.dropdown-toggle,
.show>.btn.btn-default.dropdown-toggle {
  color: #fff;
  background-color: #919191;
  border-color: #7a7a7a;
  box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12);
}

.btn:active:hover,
.btn:active:focus,
.btn:active.focus,
.btn.active:hover,
.btn.active:focus,
.btn.active.focus,
.open>.btn.dropdown-toggle:hover,
.open>.btn.dropdown-toggle:focus,
.open>.btn.dropdown-toggle.focus,
.show>.btn.dropdown-toggle:hover,
.show>.btn.dropdown-toggle:focus,
.show>.btn.dropdown-toggle.focus,
.btn.btn-default:active:hover,
.btn.btn-default:active:focus,
.btn.btn-default:active.focus,
.btn.btn-default.active:hover,
.btn.btn-default.active:focus,
.btn.btn-default.active.focus,
.open>.btn.btn-default.dropdown-toggle:hover,
.open>.btn.btn-default.dropdown-toggle:focus,
.open>.btn.btn-default.dropdown-toggle.focus,
.show>.btn.btn-default.dropdown-toggle:hover,
.show>.btn.btn-default.dropdown-toggle:focus,
.show>.btn.btn-default.dropdown-toggle.focus {
  color: #fff;
  background-color: #919191;
  border-color: #595959;
}

.open>.btn.dropdown-toggle.bmd-btn-icon,
.open>.btn.btn-default.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #999999;
}

.open>.btn.dropdown-toggle.bmd-btn-icon:hover,
.open>.btn.btn-default.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #919191;
}

.btn.disabled:focus,
.btn.disabled.focus,
.btn:disabled:focus,
.btn:disabled.focus,
.btn.btn-default.disabled:focus,
.btn.btn-default.disabled.focus,
.btn.btn-default:disabled:focus,
.btn.btn-default:disabled.focus {
  background-color: #999999;
  border-color: #999999;
}

.btn.disabled:hover,
.btn:disabled:hover,
.btn.btn-default.disabled:hover,
.btn.btn-default:disabled:hover {
  background-color: #999999;
  border-color: #999999;
}

.btn:focus,
.btn:active,
.btn:hover,
.btn.btn-default:focus,
.btn.btn-default:active,
.btn.btn-default:hover {
  box-shadow: 0 14px 26px -12px rgba(153, 153, 153, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(153, 153, 153, 0.2);
}

.btn.btn-link,
.btn.btn-default.btn-link {
  background-color: transparent;
  color: #999999;
  box-shadow: none;
}

.btn.btn-link:hover,
.btn.btn-link:focus,
.btn.btn-link:active,
.btn.btn-default.btn-link:hover,
.btn.btn-default.btn-link:focus,
.btn.btn-default.btn-link:active {
  background-color: transparent;
  color: #999999;
}

.btn.btn-white,
.btn.btn-white:focus,
.btn.btn-white:hover {
  background-color: #fff;
  color: #999999;
}

.btn.btn-white.btn-link {
  color: #fff;
  background: transparent;
  box-shadow: none;
}

.btn.btn-link:hover,
.btn.btn-link:focus,
.btn.btn-link:active {
  text-decoration: none !important;
}

.btn.btn-raised.btn-link,
.btn-group-raised .btn.btn-link {
  box-shadow: none;
}

.btn.btn-raised.btn-link.active,
.btn-group-raised .btn.btn-link.active {
  box-shadow: none;
}

.btn.btn-raised.btn-link:hover,
.btn.btn-raised.btn-link:focus,
.btn.btn-raised.btn-link:active,
.btn-group-raised .btn.btn-link:hover,
.btn-group-raised .btn.btn-link:focus,
.btn-group-raised .btn.btn-link:active {
  box-shadow: none;
}

fieldset[disabled][disabled] .btn.btn-raised,
.btn.btn-raised.disabled,
.btn.btn-raised:disabled,
.btn.btn-raised[disabled],
fieldset[disabled][disabled] .btn-group-raised .btn,
.btn-group-raised .btn.disabled,
.btn-group-raised .btn:disabled,
.btn-group-raised .btn[disabled] {
  box-shadow: none;
}

.btn.btn-outline,
.btn.btn-outline-primary,
.btn.btn-outline-secondary,
.btn.btn-outline-info,
.btn.btn-outline-success,
.btn.btn-outline-warning,
.btn.btn-outline-danger {
  border-color: currentColor;
  border-style: solid;
  border-width: 1px;
}

.btn.btn-outline {
  color: #333333;
  background-color: transparent;
  border-color: #333333;
}

.btn.btn-outline:hover {
  color: #333333;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #333333;
}

.btn.btn-outline:focus,
.btn.btn-outline.focus,
.btn.btn-outline:hover {
  color: #333333;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #333333;
}

.btn.btn-outline:active,
.btn.btn-outline.active,
.open>.btn.btn-outline.dropdown-toggle,
.show>.btn.btn-outline.dropdown-toggle {
  color: #333333;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #333333;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.btn.btn-outline:active:hover,
.btn.btn-outline:active:focus,
.btn.btn-outline:active.focus,
.btn.btn-outline.active:hover,
.btn.btn-outline.active:focus,
.btn.btn-outline.active.focus,
.open>.btn.btn-outline.dropdown-toggle:hover,
.open>.btn.btn-outline.dropdown-toggle:focus,
.open>.btn.btn-outline.dropdown-toggle.focus,
.show>.btn.btn-outline.dropdown-toggle:hover,
.show>.btn.btn-outline.dropdown-toggle:focus,
.show>.btn.btn-outline.dropdown-toggle.focus {
  color: #333333;
  background-color: rgba(153, 153, 153, 0.4);
  border-color: #333333;
}

.open>.btn.btn-outline.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.btn.btn-outline.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(153, 153, 153, 0.2);
}

.btn.btn-outline.disabled:focus,
.btn.btn-outline.disabled.focus,
.btn.btn-outline:disabled:focus,
.btn.btn-outline:disabled.focus {
  background-color: transparent;
  border-color: #333333;
}

.btn.btn-outline.disabled:hover,
.btn.btn-outline:disabled:hover {
  background-color: transparent;
  border-color: #333333;
}

.bg-inverse .btn.btn-outline {
  color: #333333;
  background-color: transparent;
  border-color: #333333;
}

.bg-inverse .btn.btn-outline:hover {
  color: #333333;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline:focus,
.bg-inverse .btn.btn-outline.focus,
.bg-inverse .btn.btn-outline:hover {
  color: #333333;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline:active,
.bg-inverse .btn.btn-outline.active,
.open>.bg-inverse .btn.btn-outline.dropdown-toggle,
.show>.bg-inverse .btn.btn-outline.dropdown-toggle {
  color: #333333;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.bg-inverse .btn.btn-outline:active:hover,
.bg-inverse .btn.btn-outline:active:focus,
.bg-inverse .btn.btn-outline:active.focus,
.bg-inverse .btn.btn-outline.active:hover,
.bg-inverse .btn.btn-outline.active:focus,
.bg-inverse .btn.btn-outline.active.focus,
.open>.bg-inverse .btn.btn-outline.dropdown-toggle:hover,
.open>.bg-inverse .btn.btn-outline.dropdown-toggle:focus,
.open>.bg-inverse .btn.btn-outline.dropdown-toggle.focus,
.show>.bg-inverse .btn.btn-outline.dropdown-toggle:hover,
.show>.bg-inverse .btn.btn-outline.dropdown-toggle:focus,
.show>.bg-inverse .btn.btn-outline.dropdown-toggle.focus {
  color: #333333;
  background-color: rgba(204, 204, 204, 0.25);
  border-color: rgba(204, 204, 204, 0.25);
}

.open>.bg-inverse .btn.btn-outline.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.bg-inverse .btn.btn-outline.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline.disabled:focus,
.bg-inverse .btn.btn-outline.disabled.focus,
.bg-inverse .btn.btn-outline:disabled:focus,
.bg-inverse .btn.btn-outline:disabled.focus {
  background-color: transparent;
  border-color: #333333;
}

.bg-inverse .btn.btn-outline.disabled:hover,
.bg-inverse .btn.btn-outline:disabled:hover {
  background-color: transparent;
  border-color: #333333;
}

.btn.btn-outline.btn-link {
  background-color: transparent;
}

.btn.btn-outline-primary {
  color: #9c27b0;
  background-color: transparent;
  border-color: #9c27b0;
}

.btn.btn-outline-primary:hover {
  color: #9c27b0;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #9c27b0;
}

.btn.btn-outline-primary:focus,
.btn.btn-outline-primary.focus,
.btn.btn-outline-primary:hover {
  color: #9c27b0;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #9c27b0;
}

.btn.btn-outline-primary:active,
.btn.btn-outline-primary.active,
.open>.btn.btn-outline-primary.dropdown-toggle,
.show>.btn.btn-outline-primary.dropdown-toggle {
  color: #9c27b0;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #9c27b0;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.btn.btn-outline-primary:active:hover,
.btn.btn-outline-primary:active:focus,
.btn.btn-outline-primary:active.focus,
.btn.btn-outline-primary.active:hover,
.btn.btn-outline-primary.active:focus,
.btn.btn-outline-primary.active.focus,
.open>.btn.btn-outline-primary.dropdown-toggle:hover,
.open>.btn.btn-outline-primary.dropdown-toggle:focus,
.open>.btn.btn-outline-primary.dropdown-toggle.focus,
.show>.btn.btn-outline-primary.dropdown-toggle:hover,
.show>.btn.btn-outline-primary.dropdown-toggle:focus,
.show>.btn.btn-outline-primary.dropdown-toggle.focus {
  color: #9c27b0;
  background-color: rgba(153, 153, 153, 0.4);
  border-color: #9c27b0;
}

.open>.btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(153, 153, 153, 0.2);
}

.btn.btn-outline-primary.disabled:focus,
.btn.btn-outline-primary.disabled.focus,
.btn.btn-outline-primary:disabled:focus,
.btn.btn-outline-primary:disabled.focus {
  background-color: transparent;
  border-color: #9c27b0;
}

.btn.btn-outline-primary.disabled:hover,
.btn.btn-outline-primary:disabled:hover {
  background-color: transparent;
  border-color: #9c27b0;
}

.bg-inverse .btn.btn-outline-primary {
  color: #9c27b0;
  background-color: transparent;
  border-color: #9c27b0;
}

.bg-inverse .btn.btn-outline-primary:hover {
  color: #9c27b0;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-primary:focus,
.bg-inverse .btn.btn-outline-primary.focus,
.bg-inverse .btn.btn-outline-primary:hover {
  color: #9c27b0;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-primary:active,
.bg-inverse .btn.btn-outline-primary.active,
.open>.bg-inverse .btn.btn-outline-primary.dropdown-toggle,
.show>.bg-inverse .btn.btn-outline-primary.dropdown-toggle {
  color: #9c27b0;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.bg-inverse .btn.btn-outline-primary:active:hover,
.bg-inverse .btn.btn-outline-primary:active:focus,
.bg-inverse .btn.btn-outline-primary:active.focus,
.bg-inverse .btn.btn-outline-primary.active:hover,
.bg-inverse .btn.btn-outline-primary.active:focus,
.bg-inverse .btn.btn-outline-primary.active.focus,
.open>.bg-inverse .btn.btn-outline-primary.dropdown-toggle:hover,
.open>.bg-inverse .btn.btn-outline-primary.dropdown-toggle:focus,
.open>.bg-inverse .btn.btn-outline-primary.dropdown-toggle.focus,
.show>.bg-inverse .btn.btn-outline-primary.dropdown-toggle:hover,
.show>.bg-inverse .btn.btn-outline-primary.dropdown-toggle:focus,
.show>.bg-inverse .btn.btn-outline-primary.dropdown-toggle.focus {
  color: #9c27b0;
  background-color: rgba(204, 204, 204, 0.25);
  border-color: rgba(204, 204, 204, 0.25);
}

.open>.bg-inverse .btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.bg-inverse .btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-primary.disabled:focus,
.bg-inverse .btn.btn-outline-primary.disabled.focus,
.bg-inverse .btn.btn-outline-primary:disabled:focus,
.bg-inverse .btn.btn-outline-primary:disabled.focus {
  background-color: transparent;
  border-color: #9c27b0;
}

.bg-inverse .btn.btn-outline-primary.disabled:hover,
.bg-inverse .btn.btn-outline-primary:disabled:hover {
  background-color: transparent;
  border-color: #9c27b0;
}

.btn.btn-outline-primary.btn-link {
  background-color: transparent;
}

.btn.btn-outline-secondary {
  color: #333333;
  background-color: transparent;
  border-color: #333333;
}

.btn.btn-outline-secondary:hover {
  color: #333333;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #333333;
}

.btn.btn-outline-secondary:focus,
.btn.btn-outline-secondary.focus,
.btn.btn-outline-secondary:hover {
  color: #333333;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #333333;
}

.btn.btn-outline-secondary:active,
.btn.btn-outline-secondary.active,
.open>.btn.btn-outline-secondary.dropdown-toggle,
.show>.btn.btn-outline-secondary.dropdown-toggle {
  color: #333333;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #333333;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.btn.btn-outline-secondary:active:hover,
.btn.btn-outline-secondary:active:focus,
.btn.btn-outline-secondary:active.focus,
.btn.btn-outline-secondary.active:hover,
.btn.btn-outline-secondary.active:focus,
.btn.btn-outline-secondary.active.focus,
.open>.btn.btn-outline-secondary.dropdown-toggle:hover,
.open>.btn.btn-outline-secondary.dropdown-toggle:focus,
.open>.btn.btn-outline-secondary.dropdown-toggle.focus,
.show>.btn.btn-outline-secondary.dropdown-toggle:hover,
.show>.btn.btn-outline-secondary.dropdown-toggle:focus,
.show>.btn.btn-outline-secondary.dropdown-toggle.focus {
  color: #333333;
  background-color: rgba(153, 153, 153, 0.4);
  border-color: #333333;
}

.open>.btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(153, 153, 153, 0.2);
}

.btn.btn-outline-secondary.disabled:focus,
.btn.btn-outline-secondary.disabled.focus,
.btn.btn-outline-secondary:disabled:focus,
.btn.btn-outline-secondary:disabled.focus {
  background-color: transparent;
  border-color: #333333;
}

.btn.btn-outline-secondary.disabled:hover,
.btn.btn-outline-secondary:disabled:hover {
  background-color: transparent;
  border-color: #333333;
}

.bg-inverse .btn.btn-outline-secondary {
  color: #333333;
  background-color: transparent;
  border-color: #333333;
}

.bg-inverse .btn.btn-outline-secondary:hover {
  color: #333333;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-secondary:focus,
.bg-inverse .btn.btn-outline-secondary.focus,
.bg-inverse .btn.btn-outline-secondary:hover {
  color: #333333;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-secondary:active,
.bg-inverse .btn.btn-outline-secondary.active,
.open>.bg-inverse .btn.btn-outline-secondary.dropdown-toggle,
.show>.bg-inverse .btn.btn-outline-secondary.dropdown-toggle {
  color: #333333;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.bg-inverse .btn.btn-outline-secondary:active:hover,
.bg-inverse .btn.btn-outline-secondary:active:focus,
.bg-inverse .btn.btn-outline-secondary:active.focus,
.bg-inverse .btn.btn-outline-secondary.active:hover,
.bg-inverse .btn.btn-outline-secondary.active:focus,
.bg-inverse .btn.btn-outline-secondary.active.focus,
.open>.bg-inverse .btn.btn-outline-secondary.dropdown-toggle:hover,
.open>.bg-inverse .btn.btn-outline-secondary.dropdown-toggle:focus,
.open>.bg-inverse .btn.btn-outline-secondary.dropdown-toggle.focus,
.show>.bg-inverse .btn.btn-outline-secondary.dropdown-toggle:hover,
.show>.bg-inverse .btn.btn-outline-secondary.dropdown-toggle:focus,
.show>.bg-inverse .btn.btn-outline-secondary.dropdown-toggle.focus {
  color: #333333;
  background-color: rgba(204, 204, 204, 0.25);
  border-color: rgba(204, 204, 204, 0.25);
}

.open>.bg-inverse .btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.bg-inverse .btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-secondary.disabled:focus,
.bg-inverse .btn.btn-outline-secondary.disabled.focus,
.bg-inverse .btn.btn-outline-secondary:disabled:focus,
.bg-inverse .btn.btn-outline-secondary:disabled.focus {
  background-color: transparent;
  border-color: #333333;
}

.bg-inverse .btn.btn-outline-secondary.disabled:hover,
.bg-inverse .btn.btn-outline-secondary:disabled:hover {
  background-color: transparent;
  border-color: #333333;
}

.btn.btn-outline-secondary.btn-link {
  background-color: transparent;
}

.btn.btn-outline-info {
  color: #00bcd4;
  background-color: transparent;
  border-color: #00bcd4;
}

.btn.btn-outline-info:hover {
  color: #00bcd4;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #00bcd4;
}

.btn.btn-outline-info:focus,
.btn.btn-outline-info.focus,
.btn.btn-outline-info:hover {
  color: #00bcd4;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #00bcd4;
}

.btn.btn-outline-info:active,
.btn.btn-outline-info.active,
.open>.btn.btn-outline-info.dropdown-toggle,
.show>.btn.btn-outline-info.dropdown-toggle {
  color: #00bcd4;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #00bcd4;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.btn.btn-outline-info:active:hover,
.btn.btn-outline-info:active:focus,
.btn.btn-outline-info:active.focus,
.btn.btn-outline-info.active:hover,
.btn.btn-outline-info.active:focus,
.btn.btn-outline-info.active.focus,
.open>.btn.btn-outline-info.dropdown-toggle:hover,
.open>.btn.btn-outline-info.dropdown-toggle:focus,
.open>.btn.btn-outline-info.dropdown-toggle.focus,
.show>.btn.btn-outline-info.dropdown-toggle:hover,
.show>.btn.btn-outline-info.dropdown-toggle:focus,
.show>.btn.btn-outline-info.dropdown-toggle.focus {
  color: #00bcd4;
  background-color: rgba(153, 153, 153, 0.4);
  border-color: #00bcd4;
}

.open>.btn.btn-outline-info.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.btn.btn-outline-info.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(153, 153, 153, 0.2);
}

.btn.btn-outline-info.disabled:focus,
.btn.btn-outline-info.disabled.focus,
.btn.btn-outline-info:disabled:focus,
.btn.btn-outline-info:disabled.focus {
  background-color: transparent;
  border-color: #00bcd4;
}

.btn.btn-outline-info.disabled:hover,
.btn.btn-outline-info:disabled:hover {
  background-color: transparent;
  border-color: #00bcd4;
}

.bg-inverse .btn.btn-outline-info {
  color: #00bcd4;
  background-color: transparent;
  border-color: #00bcd4;
}

.bg-inverse .btn.btn-outline-info:hover {
  color: #00bcd4;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-info:focus,
.bg-inverse .btn.btn-outline-info.focus,
.bg-inverse .btn.btn-outline-info:hover {
  color: #00bcd4;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-info:active,
.bg-inverse .btn.btn-outline-info.active,
.open>.bg-inverse .btn.btn-outline-info.dropdown-toggle,
.show>.bg-inverse .btn.btn-outline-info.dropdown-toggle {
  color: #00bcd4;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.bg-inverse .btn.btn-outline-info:active:hover,
.bg-inverse .btn.btn-outline-info:active:focus,
.bg-inverse .btn.btn-outline-info:active.focus,
.bg-inverse .btn.btn-outline-info.active:hover,
.bg-inverse .btn.btn-outline-info.active:focus,
.bg-inverse .btn.btn-outline-info.active.focus,
.open>.bg-inverse .btn.btn-outline-info.dropdown-toggle:hover,
.open>.bg-inverse .btn.btn-outline-info.dropdown-toggle:focus,
.open>.bg-inverse .btn.btn-outline-info.dropdown-toggle.focus,
.show>.bg-inverse .btn.btn-outline-info.dropdown-toggle:hover,
.show>.bg-inverse .btn.btn-outline-info.dropdown-toggle:focus,
.show>.bg-inverse .btn.btn-outline-info.dropdown-toggle.focus {
  color: #00bcd4;
  background-color: rgba(204, 204, 204, 0.25);
  border-color: rgba(204, 204, 204, 0.25);
}

.open>.bg-inverse .btn.btn-outline-info.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.bg-inverse .btn.btn-outline-info.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-info.disabled:focus,
.bg-inverse .btn.btn-outline-info.disabled.focus,
.bg-inverse .btn.btn-outline-info:disabled:focus,
.bg-inverse .btn.btn-outline-info:disabled.focus {
  background-color: transparent;
  border-color: #00bcd4;
}

.bg-inverse .btn.btn-outline-info.disabled:hover,
.bg-inverse .btn.btn-outline-info:disabled:hover {
  background-color: transparent;
  border-color: #00bcd4;
}

.btn.btn-outline-info.btn-link {
  background-color: transparent;
}

.btn.btn-outline-success {
  color: #4caf50;
  background-color: transparent;
  border-color: #4caf50;
}

.btn.btn-outline-success:hover {
  color: #4caf50;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #4caf50;
}

.btn.btn-outline-success:focus,
.btn.btn-outline-success.focus,
.btn.btn-outline-success:hover {
  color: #4caf50;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #4caf50;
}

.btn.btn-outline-success:active,
.btn.btn-outline-success.active,
.open>.btn.btn-outline-success.dropdown-toggle,
.show>.btn.btn-outline-success.dropdown-toggle {
  color: #4caf50;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #4caf50;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.btn.btn-outline-success:active:hover,
.btn.btn-outline-success:active:focus,
.btn.btn-outline-success:active.focus,
.btn.btn-outline-success.active:hover,
.btn.btn-outline-success.active:focus,
.btn.btn-outline-success.active.focus,
.open>.btn.btn-outline-success.dropdown-toggle:hover,
.open>.btn.btn-outline-success.dropdown-toggle:focus,
.open>.btn.btn-outline-success.dropdown-toggle.focus,
.show>.btn.btn-outline-success.dropdown-toggle:hover,
.show>.btn.btn-outline-success.dropdown-toggle:focus,
.show>.btn.btn-outline-success.dropdown-toggle.focus {
  color: #4caf50;
  background-color: rgba(153, 153, 153, 0.4);
  border-color: #4caf50;
}

.open>.btn.btn-outline-success.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.btn.btn-outline-success.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(153, 153, 153, 0.2);
}

.btn.btn-outline-success.disabled:focus,
.btn.btn-outline-success.disabled.focus,
.btn.btn-outline-success:disabled:focus,
.btn.btn-outline-success:disabled.focus {
  background-color: transparent;
  border-color: #4caf50;
}

.btn.btn-outline-success.disabled:hover,
.btn.btn-outline-success:disabled:hover {
  background-color: transparent;
  border-color: #4caf50;
}

.bg-inverse .btn.btn-outline-success {
  color: #4caf50;
  background-color: transparent;
  border-color: #4caf50;
}

.bg-inverse .btn.btn-outline-success:hover {
  color: #4caf50;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-success:focus,
.bg-inverse .btn.btn-outline-success.focus,
.bg-inverse .btn.btn-outline-success:hover {
  color: #4caf50;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-success:active,
.bg-inverse .btn.btn-outline-success.active,
.open>.bg-inverse .btn.btn-outline-success.dropdown-toggle,
.show>.bg-inverse .btn.btn-outline-success.dropdown-toggle {
  color: #4caf50;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.bg-inverse .btn.btn-outline-success:active:hover,
.bg-inverse .btn.btn-outline-success:active:focus,
.bg-inverse .btn.btn-outline-success:active.focus,
.bg-inverse .btn.btn-outline-success.active:hover,
.bg-inverse .btn.btn-outline-success.active:focus,
.bg-inverse .btn.btn-outline-success.active.focus,
.open>.bg-inverse .btn.btn-outline-success.dropdown-toggle:hover,
.open>.bg-inverse .btn.btn-outline-success.dropdown-toggle:focus,
.open>.bg-inverse .btn.btn-outline-success.dropdown-toggle.focus,
.show>.bg-inverse .btn.btn-outline-success.dropdown-toggle:hover,
.show>.bg-inverse .btn.btn-outline-success.dropdown-toggle:focus,
.show>.bg-inverse .btn.btn-outline-success.dropdown-toggle.focus {
  color: #4caf50;
  background-color: rgba(204, 204, 204, 0.25);
  border-color: rgba(204, 204, 204, 0.25);
}

.open>.bg-inverse .btn.btn-outline-success.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.bg-inverse .btn.btn-outline-success.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-success.disabled:focus,
.bg-inverse .btn.btn-outline-success.disabled.focus,
.bg-inverse .btn.btn-outline-success:disabled:focus,
.bg-inverse .btn.btn-outline-success:disabled.focus {
  background-color: transparent;
  border-color: #4caf50;
}

.bg-inverse .btn.btn-outline-success.disabled:hover,
.bg-inverse .btn.btn-outline-success:disabled:hover {
  background-color: transparent;
  border-color: #4caf50;
}

.btn.btn-outline-success.btn-link {
  background-color: transparent;
}

.btn.btn-outline-warning {
  color: #ff9800;
  background-color: transparent;
  border-color: #ff9800;
}

.btn.btn-outline-warning:hover {
  color: #ff9800;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #ff9800;
}

.btn.btn-outline-warning:focus,
.btn.btn-outline-warning.focus,
.btn.btn-outline-warning:hover {
  color: #ff9800;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #ff9800;
}

.btn.btn-outline-warning:active,
.btn.btn-outline-warning.active,
.open>.btn.btn-outline-warning.dropdown-toggle,
.show>.btn.btn-outline-warning.dropdown-toggle {
  color: #ff9800;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #ff9800;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.btn.btn-outline-warning:active:hover,
.btn.btn-outline-warning:active:focus,
.btn.btn-outline-warning:active.focus,
.btn.btn-outline-warning.active:hover,
.btn.btn-outline-warning.active:focus,
.btn.btn-outline-warning.active.focus,
.open>.btn.btn-outline-warning.dropdown-toggle:hover,
.open>.btn.btn-outline-warning.dropdown-toggle:focus,
.open>.btn.btn-outline-warning.dropdown-toggle.focus,
.show>.btn.btn-outline-warning.dropdown-toggle:hover,
.show>.btn.btn-outline-warning.dropdown-toggle:focus,
.show>.btn.btn-outline-warning.dropdown-toggle.focus {
  color: #ff9800;
  background-color: rgba(153, 153, 153, 0.4);
  border-color: #ff9800;
}

.open>.btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(153, 153, 153, 0.2);
}

.btn.btn-outline-warning.disabled:focus,
.btn.btn-outline-warning.disabled.focus,
.btn.btn-outline-warning:disabled:focus,
.btn.btn-outline-warning:disabled.focus {
  background-color: transparent;
  border-color: #ff9800;
}

.btn.btn-outline-warning.disabled:hover,
.btn.btn-outline-warning:disabled:hover {
  background-color: transparent;
  border-color: #ff9800;
}

.bg-inverse .btn.btn-outline-warning {
  color: #ff9800;
  background-color: transparent;
  border-color: #ff9800;
}

.bg-inverse .btn.btn-outline-warning:hover {
  color: #ff9800;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-warning:focus,
.bg-inverse .btn.btn-outline-warning.focus,
.bg-inverse .btn.btn-outline-warning:hover {
  color: #ff9800;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-warning:active,
.bg-inverse .btn.btn-outline-warning.active,
.open>.bg-inverse .btn.btn-outline-warning.dropdown-toggle,
.show>.bg-inverse .btn.btn-outline-warning.dropdown-toggle {
  color: #ff9800;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.bg-inverse .btn.btn-outline-warning:active:hover,
.bg-inverse .btn.btn-outline-warning:active:focus,
.bg-inverse .btn.btn-outline-warning:active.focus,
.bg-inverse .btn.btn-outline-warning.active:hover,
.bg-inverse .btn.btn-outline-warning.active:focus,
.bg-inverse .btn.btn-outline-warning.active.focus,
.open>.bg-inverse .btn.btn-outline-warning.dropdown-toggle:hover,
.open>.bg-inverse .btn.btn-outline-warning.dropdown-toggle:focus,
.open>.bg-inverse .btn.btn-outline-warning.dropdown-toggle.focus,
.show>.bg-inverse .btn.btn-outline-warning.dropdown-toggle:hover,
.show>.bg-inverse .btn.btn-outline-warning.dropdown-toggle:focus,
.show>.bg-inverse .btn.btn-outline-warning.dropdown-toggle.focus {
  color: #ff9800;
  background-color: rgba(204, 204, 204, 0.25);
  border-color: rgba(204, 204, 204, 0.25);
}

.open>.bg-inverse .btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.bg-inverse .btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-warning.disabled:focus,
.bg-inverse .btn.btn-outline-warning.disabled.focus,
.bg-inverse .btn.btn-outline-warning:disabled:focus,
.bg-inverse .btn.btn-outline-warning:disabled.focus {
  background-color: transparent;
  border-color: #ff9800;
}

.bg-inverse .btn.btn-outline-warning.disabled:hover,
.bg-inverse .btn.btn-outline-warning:disabled:hover {
  background-color: transparent;
  border-color: #ff9800;
}

.btn.btn-outline-warning.btn-link {
  background-color: transparent;
}

.btn.btn-outline-danger {
  color: #f44336;
  background-color: transparent;
  border-color: #f44336;
}

.btn.btn-outline-danger:hover {
  color: #f44336;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #f44336;
}

.btn.btn-outline-danger:focus,
.btn.btn-outline-danger.focus,
.btn.btn-outline-danger:hover {
  color: #f44336;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #f44336;
}

.btn.btn-outline-danger:active,
.btn.btn-outline-danger.active,
.open>.btn.btn-outline-danger.dropdown-toggle,
.show>.btn.btn-outline-danger.dropdown-toggle {
  color: #f44336;
  background-color: rgba(153, 153, 153, 0.2);
  border-color: #f44336;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.btn.btn-outline-danger:active:hover,
.btn.btn-outline-danger:active:focus,
.btn.btn-outline-danger:active.focus,
.btn.btn-outline-danger.active:hover,
.btn.btn-outline-danger.active:focus,
.btn.btn-outline-danger.active.focus,
.open>.btn.btn-outline-danger.dropdown-toggle:hover,
.open>.btn.btn-outline-danger.dropdown-toggle:focus,
.open>.btn.btn-outline-danger.dropdown-toggle.focus,
.show>.btn.btn-outline-danger.dropdown-toggle:hover,
.show>.btn.btn-outline-danger.dropdown-toggle:focus,
.show>.btn.btn-outline-danger.dropdown-toggle.focus {
  color: #f44336;
  background-color: rgba(153, 153, 153, 0.4);
  border-color: #f44336;
}

.open>.btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(153, 153, 153, 0.2);
}

.btn.btn-outline-danger.disabled:focus,
.btn.btn-outline-danger.disabled.focus,
.btn.btn-outline-danger:disabled:focus,
.btn.btn-outline-danger:disabled.focus {
  background-color: transparent;
  border-color: #f44336;
}

.btn.btn-outline-danger.disabled:hover,
.btn.btn-outline-danger:disabled:hover {
  background-color: transparent;
  border-color: #f44336;
}

.bg-inverse .btn.btn-outline-danger {
  color: #f44336;
  background-color: transparent;
  border-color: #f44336;
}

.bg-inverse .btn.btn-outline-danger:hover {
  color: #f44336;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-danger:focus,
.bg-inverse .btn.btn-outline-danger.focus,
.bg-inverse .btn.btn-outline-danger:hover {
  color: #f44336;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-danger:active,
.bg-inverse .btn.btn-outline-danger.active,
.open>.bg-inverse .btn.btn-outline-danger.dropdown-toggle,
.show>.bg-inverse .btn.btn-outline-danger.dropdown-toggle {
  color: #f44336;
  background-color: rgba(204, 204, 204, 0.15);
  border-color: rgba(204, 204, 204, 0.15);
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.bg-inverse .btn.btn-outline-danger:active:hover,
.bg-inverse .btn.btn-outline-danger:active:focus,
.bg-inverse .btn.btn-outline-danger:active.focus,
.bg-inverse .btn.btn-outline-danger.active:hover,
.bg-inverse .btn.btn-outline-danger.active:focus,
.bg-inverse .btn.btn-outline-danger.active.focus,
.open>.bg-inverse .btn.btn-outline-danger.dropdown-toggle:hover,
.open>.bg-inverse .btn.btn-outline-danger.dropdown-toggle:focus,
.open>.bg-inverse .btn.btn-outline-danger.dropdown-toggle.focus,
.show>.bg-inverse .btn.btn-outline-danger.dropdown-toggle:hover,
.show>.bg-inverse .btn.btn-outline-danger.dropdown-toggle:focus,
.show>.bg-inverse .btn.btn-outline-danger.dropdown-toggle.focus {
  color: #f44336;
  background-color: rgba(204, 204, 204, 0.25);
  border-color: rgba(204, 204, 204, 0.25);
}

.open>.bg-inverse .btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: transparent;
}

.open>.bg-inverse .btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon:hover {
  background-color: rgba(204, 204, 204, 0.15);
}

.bg-inverse .btn.btn-outline-danger.disabled:focus,
.bg-inverse .btn.btn-outline-danger.disabled.focus,
.bg-inverse .btn.btn-outline-danger:disabled:focus,
.bg-inverse .btn.btn-outline-danger:disabled.focus {
  background-color: transparent;
  border-color: #f44336;
}

.bg-inverse .btn.btn-outline-danger.disabled:hover,
.bg-inverse .btn.btn-outline-danger:disabled:hover {
  background-color: transparent;
  border-color: #f44336;
}

.btn.btn-outline-danger.btn-link {
  background-color: transparent;
}

.btn.btn-lg,
.btn-group-lg>.btn,
.btn-group-lg .btn {
  padding: 1.125rem 2.25rem;
  font-size: 0.875rem;
  line-height: 1.333333;
  border-radius: 0.2rem;
}

.btn.btn-sm,
.btn-group-sm>.btn,
.btn-group-sm .btn {
  padding: 0.40625rem 1.25rem;
  font-size: 0.6875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.btn.btn-round {
  border-radius: 30px;
}

.btn.btn-fab,
.btn.btn-just-icon {
  font-size: 24px;
  height: 41px;
  min-width: 41px;
  width: 41px;
  padding: 0;
  overflow: hidden;
  position: relative;
  line-height: 41px;
}

.btn.btn-fab.btn-round,
.btn.btn-just-icon.btn-round {
  border-radius: 50%;
}

.btn-group-sm .btn.btn-fab,
.btn.btn-fab.btn-sm,
.btn-group-sm>.btn.btn-fab,
.btn.btn-fab.btn-fab-mini,
.btn-group-sm .btn.btn-just-icon,
.btn.btn-just-icon.btn-sm,
.btn-group-sm>.btn.btn-just-icon,
.btn.btn-just-icon.btn-fab-mini {
  height: 30px;
  min-width: 30px;
  width: 30px;
}

.btn-group-sm .btn.btn-fab .material-icons,
.btn-group-sm .btn.btn-fab .fa,
.btn.btn-fab.btn-sm .material-icons,
.btn-group-sm>.btn.btn-fab .material-icons,
.btn.btn-fab.btn-sm .fa,
.btn-group-sm>.btn.btn-fab .fa,
.btn.btn-fab.btn-fab-mini .material-icons,
.btn.btn-fab.btn-fab-mini .fa,
.btn-group-sm .btn.btn-just-icon .material-icons,
.btn-group-sm .btn.btn-just-icon .fa,
.btn.btn-just-icon.btn-sm .material-icons,
.btn-group-sm>.btn.btn-just-icon .material-icons,
.btn.btn-just-icon.btn-sm .fa,
.btn-group-sm>.btn.btn-just-icon .fa,
.btn.btn-just-icon.btn-fab-mini .material-icons,
.btn.btn-just-icon.btn-fab-mini .fa {
  font-size: 17px;
  line-height: 29px;
}

.btn-group-lg .btn.btn-fab,
.btn.btn-fab.btn-lg,
.btn-group-lg>.btn.btn-fab,
.btn-group-lg .btn.btn-just-icon,
.btn.btn-just-icon.btn-lg,
.btn-group-lg>.btn.btn-just-icon {
  height: 57px;
  min-width: 57px;
  width: 57px;
  line-height: 56px;
}

.btn-group-lg .btn.btn-fab .material-icons,
.btn-group-lg .btn.btn-fab .fa,
.btn.btn-fab.btn-lg .material-icons,
.btn-group-lg>.btn.btn-fab .material-icons,
.btn.btn-fab.btn-lg .fa,
.btn-group-lg>.btn.btn-fab .fa,
.btn-group-lg .btn.btn-just-icon .material-icons,
.btn-group-lg .btn.btn-just-icon .fa,
.btn.btn-just-icon.btn-lg .material-icons,
.btn-group-lg>.btn.btn-just-icon .material-icons,
.btn.btn-just-icon.btn-lg .fa,
.btn-group-lg>.btn.btn-just-icon .fa {
  font-size: 32px;
  line-height: 56px;
}

.btn.btn-fab .material-icons,
.btn.btn-fab .fa,
.btn.btn-just-icon .material-icons,
.btn.btn-just-icon .fa {
  margin-top: 0;
  position: absolute;
  width: 100%;
  transform: none;
  left: 0;
  top: 0;
  height: 100%;
  line-height: 41px;
  font-size: 20px;
}

.btn-just-icon.btn-lg,
.btn-group-lg>.btn-just-icon.btn {
  font-size: 24px;
  height: 41px;
  min-width: 41px;
  width: 41px;
}

.input-group-btn>.btn {
  border: 0;
}

.btn .material-icons,
.btn:not(.btn-just-icon):not(.btn-fab) .fa {
  position: relative;
  display: inline-block;
  top: 0;
  margin-top: -1em;
  margin-bottom: -1em;
  font-size: 1.1rem;
  vertical-align: middle;
}

.bg-inverse fieldset[disabled][disabled] .btn,
.bg-inverse .btn.disabled,
.bg-inverse .btn:disabled,
.bg-inverse .btn[disabled],
.bg-inverse fieldset[disabled][disabled] .input-group-btn .btn,
.bg-inverse .input-group-btn .btn.disabled,
.bg-inverse .input-group-btn .btn:disabled,
.bg-inverse .input-group-btn .btn[disabled],
.bg-inverse fieldset[disabled][disabled] .btn-group,
.bg-inverse .btn-group.disabled,
.bg-inverse .btn-group:disabled,
.bg-inverse .btn-group[disabled],
.bg-inverse fieldset[disabled][disabled] .btn-group-vertical,
.bg-inverse .btn-group-vertical.disabled,
.bg-inverse .btn-group-vertical:disabled,
.bg-inverse .btn-group-vertical[disabled] {
  color: rgba(255, 255, 255, 0.3);
}

.btn-group,
.btn-group-vertical {
  position: relative;
  margin: 10px 1px;
}

.btn-group .dropdown-menu,
.btn-group-vertical .dropdown-menu {
  border-radius: 0 0 0.25rem 0.25rem;
}

.btn-group.btn-group-raised,
.btn-group-vertical.btn-group-raised {
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.btn-group .btn+.btn,
.btn-group .btn,
.btn-group .btn:active,
.btn-group .btn-group,
.btn-group-vertical .btn+.btn,
.btn-group-vertical .btn,
.btn-group-vertical .btn:active,
.btn-group-vertical .btn-group {
  margin: 0;
}

.btn-group>.btn-group,
.btn-group-vertical>.btn-group {
  margin: 0;
}

.form-check {
  margin-bottom: .5rem;
  padding-left: 0;
}

.form-check .form-check-label {
  cursor: pointer;
  padding-left: 0;
}

.form-group.is-focused .form-check .form-check-label {
  color: rgba(0, 0, 0, 0.26);
}

.form-group.is-focused .form-check .form-check-label:hover,
.form-group.is-focused .form-check .form-check-label:focus {
  color: rgba(0, 0, 0, .54);
}

fieldset[disabled] .form-group.is-focused .form-check .form-check-label {
  color: rgba(0, 0, 0, 0.26);
}

.form-check .form-check-input {
  opacity: 0;
  position: absolute;
  margin: 0;
  z-index: -1;
  width: 0;
  height: 0;
  overflow: hidden;
  left: 0;
  pointer-events: none;
}

.form-check .form-check-sign {
  vertical-align: middle;
  position: relative;
  top: -2px;
  float: left;
  padding-right: 10px;
  display: inline-block;
}

.form-check .form-check-sign:before {
  display: block;
  position: absolute;
  left: 0;
  content: "";
  background-color: rgba(0, 0, 0, 0.84);
  height: 20px;
  width: 20px;
  border-radius: 100%;
  z-index: 1;
  opacity: 0;
  margin: 0;
  top: 0;
  -webkit-transform: scale3d(2.3, 2.3, 1);
  -moz-transform: scale3d(2.3, 2.3, 1);
  -o-transform: scale3d(2.3, 2.3, 1);
  -ms-transform: scale3d(2.3, 2.3, 1);
  transform: scale3d(2.3, 2.3, 1);
}

.form-check .form-check-sign .check {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 1px solid rgba(0, 0, 0, .54);
  overflow: hidden;
  z-index: 1;
  border-radius: 3px;
}

.form-check .form-check-sign .check:before {
  position: absolute;
  content: "";
  transform: rotate(45deg);
  display: block;
  margin-top: -3px;
  margin-left: 7px;
  width: 0;
  color: #fff;
  height: 0;
  box-shadow: 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0 inset;
  animation: checkboxOff 0.3s forwards;
}

.form-check .form-check-input:focus+.form-check-sign .check:after {
  opacity: 0.2;
}

.form-check .form-check-input:checked~.form-check-sign .check {
  background: #9c27b0;
}

.form-check .form-check-input:checked~.form-check-sign .check:before {
  color: #FFFFFF;
  box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
  animation: checkboxOn 0.3s forwards;
}

.form-check .form-check-input:checked~.form-check-sign:before {
  animation: rippleOn 500ms;
}

.form-check .form-check-input:checked~.form-check-sign .check:after {
  animation: rippleOn 500ms forwards;
}

.form-check .form-check-input:not(:checked)+.form-check-sign:before {
  animation: rippleOff 500ms;
}

.form-check .form-check-input:not(:checked)+.form-check-sign .check:after {
  animation: rippleOff 500ms;
}

.form-check .rtl .form-check .form-check-sign .check::before {
  margin-right: 10px;
}

fieldset[disabled] .form-check,
fieldset[disabled] .form-check .form-check-input,
.form-check .form-check-input[disabled]~.form-check-sign .check,
.form-check .form-check-input[disabled]+.circle {
  opacity: 0.5;
}

.form-check .form-check-input[disabled]~.form-check-sign .check {
  border-color: #000000;
  opacity: .26;
}

.form-check .form-check-input[disabled]+.form-check-sign .check:after {
  background-color: rgba(0, 0, 0, 0.87);
  transform: rotate(-45deg);
}

.form-check .form-check-input[disabled][checked]+.form-check-sign .check {
  background-color: #000000;
}

@keyframes checkboxOn {
  0% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px;
  }

  50% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px 2px 0 11px;
  }

  100% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
  }
}

@keyframes rippleOn {
  0% {
    opacity: 0;
  }

  50% {
    opacity: 0.2;
  }

  100% {
    opacity: 0;
  }
}

@keyframes rippleOff {
  0% {
    opacity: 0;
  }

  50% {
    opacity: 0.2;
  }

  100% {
    opacity: 0;
  }
}

.form-check .form-check-label {
  cursor: pointer;
  padding-left: 25px;
  position: relative;
}

.form-group.is-focused .form-check .form-check-label {
  color: rgba(0, 0, 0, 0.26);
}

.form-group.is-focused .form-check .form-check-label:hover,
.form-group.is-focused .form-check .form-check-label:focus {
  color: rgba(0, 0, 0, .54);
}

fieldset[disabled] .form-group.is-focused .form-check .form-check-label {
  color: rgba(0, 0, 0, 0.26);
}

.form-check .form-check-label span {
  display: block;
  position: absolute;
  left: -1px;
  top: -1px;
  transition-duration: 0.2s;
}

.form-check .form-check-label .circle {
  border: 1px solid rgba(0, 0, 0, .54);
  height: 15px;
  width: 15px;
  border-radius: 100%;
  top: 1px;
}

.form-check .form-check-label .circle .check {
  height: 15px;
  width: 15px;
  border-radius: 100%;
  background-color: #9c27b0;
  -webkit-transform: scale3d(0, 0, 0);
  -moz-transform: scale3d(0, 0, 0);
  -o-transform: scale3d(0, 0, 0);
  -ms-transform: scale3d(0, 0, 0);
  transform: scale3d(0, 0, 0);
}

.form-check .form-check-input {
  opacity: 0;
  height: 0;
  width: 0;
  overflow: hidden;
}

.form-check .form-check-input:checked~.check,
.form-check .form-check-input:checked~.circle {
  opacity: 1;
}

.form-check .form-check-input:checked~.check {
  background-color: #9c27b0;
}

.form-check .form-check-input:checked~.circle {
  border-color: #9c27b0;
}

.form-check .form-check-input:checked .check:before {
  animation: checkboxOn .5s forwards;
}

.form-check .form-check-input:checked~.circle .check {
  -webkit-transform: scale3d(0.65, 0.65, 1);
  -moz-transform: scale3d(0.65, 0.65, 1);
  -o-transform: scale3d(0.65, 0.65, 1);
  -ms-transform: scale3d(0.65, 0.65, 1);
  transform: scale3d(0.65, 0.65, 1);
}

.form-check .form-check-input[disabled]~.check,
.form-check .form-check-input[disabled]~.circle {
  opacity: 0.26;
}

.form-check .form-check-input[disabled]~.check {
  background-color: #000000;
}

.form-check .form-check-input[disabled]~.circle {
  border-color: #000000;
}

.form-check .form-check-input[disabled]+.circle .check {
  background-color: #000000;
}

.form-check .form-check-sign {
  vertical-align: middle;
  position: relative;
  top: -2px;
  float: left;
  padding-right: 10px;
  display: inline-block;
}

.form-check .form-check-label .circle:before {
  display: block;
  position: absolute;
  left: -1px;
  content: "";
  background-color: rgba(0, 0, 0, 0.84);
  height: 15px;
  width: 15px;
  border-radius: 100%;
  z-index: 1;
  opacity: 0;
  margin: 0;
  top: -1px;
  -webkit-transform: scale3d(2.3, 2.3, 1);
  -moz-transform: scale3d(2.3, 2.3, 1);
  -o-transform: scale3d(2.3, 2.3, 1);
  -ms-transform: scale3d(2.3, 2.3, 1);
  transform: scale3d(2.3, 2.3, 1);
}

.form-check .form-check-label .form-check-input:checked+.circle:before {
  animation: rippleOn .5s;
}

.form-check .form-check-label .form-check-input:checked+.circle .check:before {
  color: #FFFFFF;
  box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
  animation: checkboxOn 0.3s forwards;
}

.form-check+.form-check {
  margin-top: 0;
}

@keyframes checkboxOn {
  0% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px;
  }

  50% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px 2px 0 11px;
  }

  100% {
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
  }
}

@keyframes rippleOn {
  0% {
    opacity: 0;
  }

  50% {
    opacity: 0.2;
  }

  100% {
    opacity: 0;
  }
}

@keyframes rippleOff {
  0% {
    opacity: 0;
  }

  50% {
    opacity: 0.2;
  }

  100% {
    opacity: 0;
  }
}

form {
  margin-bottom: 1.125rem;
}

.card form {
  margin: 0;
}

.navbar form {
  margin-bottom: 0;
}

.navbar form .bmd-form-group {
  display: inline-block;
  padding-top: 0;
}

.navbar form .btn {
  margin-bottom: 0;
}

.form-control {
  background: no-repeat center bottom, center calc(100% - 1px);
  background-size: 0 100%, 100% 100%;
  border: 0;
  height: 36px;
  transition: background 0s ease-out;
  padding-left: 0;
  padding-right: 0;
  border-radius: 0;
  font-size: 14px;
}

.form-control:focus,
.bmd-form-group.is-focused .form-control {
  background-size: 100% 100%, 100% 100%;
  transition-duration: 0.3s;
  box-shadow: none;
}

.form-control::-moz-placeholder {
  color: #AAAAAA;
  font-weight: 400;
  font-size: 14px;
}

.form-control:-ms-input-placeholder {
  color: #AAAAAA;
  font-weight: 400;
  font-size: 14px;
}

.form-control::-webkit-input-placeholder {
  color: #AAAAAA;
  font-weight: 400;
  font-size: 14px;
}

.has-white .form-control::-moz-placeholder {
  color: #fff;
}

.has-white .form-control:-ms-input-placeholder {
  color: #fff;
}

.has-white .form-control::-webkit-input-placeholder {
  color: #fff;
}

.bmd-help {
  position: absolute;
  display: none;
  font-size: .8rem;
  font-weight: normal;
}

.bmd-form-group.is-focused .bmd-help {
  display: block;
}

.bmd-help:nth-of-type(2) {
  padding-top: 1rem;
}

.bmd-help+.bmd-help {
  position: relative;
  margin-bottom: 0;
}

.radio label,
.is-focused .radio label,
.radio-inline,
.is-focused .radio-inline,
.checkbox label,
.is-focused .checkbox label,
.checkbox-inline,
.is-focused .checkbox-inline,
.switch label,
.is-focused .switch label {
  color: #999999;
}

.radio label label:has(input[type=radio][disabled]),
.radio label label:has(input[type=radio][disabled]):hover,
.radio label label:has(input[type=radio][disabled]):focus,
.radio label label:has(input[type=checkbox][disabled]),
.radio label label:has(input[type=checkbox][disabled]):hover,
.radio label label:has(input[type=checkbox][disabled]):focus,
fieldset[disabled] .radio label,
fieldset[disabled] .radio label:hover,
fieldset[disabled] .radio label:focus,
.is-focused .radio label label:has(input[type=radio][disabled]),
.is-focused .radio label label:has(input[type=radio][disabled]):hover,
.is-focused .radio label label:has(input[type=radio][disabled]):focus,
.is-focused .radio label label:has(input[type=checkbox][disabled]),
.is-focused .radio label label:has(input[type=checkbox][disabled]):hover,
.is-focused .radio label label:has(input[type=checkbox][disabled]):focus,
fieldset[disabled] .is-focused .radio label,
fieldset[disabled] .is-focused .radio label:hover,
fieldset[disabled] .is-focused .radio label:focus,
.radio-inline label:has(input[type=radio][disabled]),
.radio-inline label:has(input[type=radio][disabled]):hover,
.radio-inline label:has(input[type=radio][disabled]):focus,
.radio-inline label:has(input[type=checkbox][disabled]),
.radio-inline label:has(input[type=checkbox][disabled]):hover,
.radio-inline label:has(input[type=checkbox][disabled]):focus,
fieldset[disabled] .radio-inline,
fieldset[disabled] .radio-inline:hover,
fieldset[disabled] .radio-inline:focus,
.is-focused .radio-inline label:has(input[type=radio][disabled]),
.is-focused .radio-inline label:has(input[type=radio][disabled]):hover,
.is-focused .radio-inline label:has(input[type=radio][disabled]):focus,
.is-focused .radio-inline label:has(input[type=checkbox][disabled]),
.is-focused .radio-inline label:has(input[type=checkbox][disabled]):hover,
.is-focused .radio-inline label:has(input[type=checkbox][disabled]):focus,
fieldset[disabled] .is-focused .radio-inline,
fieldset[disabled] .is-focused .radio-inline:hover,
fieldset[disabled] .is-focused .radio-inline:focus,
.checkbox label label:has(input[type=radio][disabled]),
.checkbox label label:has(input[type=radio][disabled]):hover,
.checkbox label label:has(input[type=radio][disabled]):focus,
.checkbox label label:has(input[type=checkbox][disabled]),
.checkbox label label:has(input[type=checkbox][disabled]):hover,
.checkbox label label:has(input[type=checkbox][disabled]):focus,
fieldset[disabled] .checkbox label,
fieldset[disabled] .checkbox label:hover,
fieldset[disabled] .checkbox label:focus,
.is-focused .checkbox label label:has(input[type=radio][disabled]),
.is-focused .checkbox label label:has(input[type=radio][disabled]):hover,
.is-focused .checkbox label label:has(input[type=radio][disabled]):focus,
.is-focused .checkbox label label:has(input[type=checkbox][disabled]),
.is-focused .checkbox label label:has(input[type=checkbox][disabled]):hover,
.is-focused .checkbox label label:has(input[type=checkbox][disabled]):focus,
fieldset[disabled] .is-focused .checkbox label,
fieldset[disabled] .is-focused .checkbox label:hover,
fieldset[disabled] .is-focused .checkbox label:focus,
.checkbox-inline label:has(input[type=radio][disabled]),
.checkbox-inline label:has(input[type=radio][disabled]):hover,
.checkbox-inline label:has(input[type=radio][disabled]):focus,
.checkbox-inline label:has(input[type=checkbox][disabled]),
.checkbox-inline label:has(input[type=checkbox][disabled]):hover,
.checkbox-inline label:has(input[type=checkbox][disabled]):focus,
fieldset[disabled] .checkbox-inline,
fieldset[disabled] .checkbox-inline:hover,
fieldset[disabled] .checkbox-inline:focus,
.is-focused .checkbox-inline label:has(input[type=radio][disabled]),
.is-focused .checkbox-inline label:has(input[type=radio][disabled]):hover,
.is-focused .checkbox-inline label:has(input[type=radio][disabled]):focus,
.is-focused .checkbox-inline label:has(input[type=checkbox][disabled]),
.is-focused .checkbox-inline label:has(input[type=checkbox][disabled]):hover,
.is-focused .checkbox-inline label:has(input[type=checkbox][disabled]):focus,
fieldset[disabled] .is-focused .checkbox-inline,
fieldset[disabled] .is-focused .checkbox-inline:hover,
fieldset[disabled] .is-focused .checkbox-inline:focus,
.switch label label:has(input[type=radio][disabled]),
.switch label label:has(input[type=radio][disabled]):hover,
.switch label label:has(input[type=radio][disabled]):focus,
.switch label label:has(input[type=checkbox][disabled]),
.switch label label:has(input[type=checkbox][disabled]):hover,
.switch label label:has(input[type=checkbox][disabled]):focus,
fieldset[disabled] .switch label,
fieldset[disabled] .switch label:hover,
fieldset[disabled] .switch label:focus,
.is-focused .switch label label:has(input[type=radio][disabled]),
.is-focused .switch label label:has(input[type=radio][disabled]):hover,
.is-focused .switch label label:has(input[type=radio][disabled]):focus,
.is-focused .switch label label:has(input[type=checkbox][disabled]),
.is-focused .switch label label:has(input[type=checkbox][disabled]):hover,
.is-focused .switch label label:has(input[type=checkbox][disabled]):focus,
fieldset[disabled] .is-focused .switch label,
fieldset[disabled] .is-focused .switch label:hover,
fieldset[disabled] .is-focused .switch label:focus {
  color: #999999;
}

[class^='bmd-label'],
[class*=' bmd-label'] {
  color: #999999;
}

.form-control,
.is-focused .form-control {
  background-image: linear-gradient(to top, #9c27b0 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.form-control:invalid {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.form-control:read-only {
  background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

fieldset[disabled][disabled] .form-control,
.form-control.disabled,
.form-control:disabled,
.form-control[disabled] {
  background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px;
}

.form-control.form-control-success,
.is-focused .form-control.form-control-success {
  background-image: linear-gradient(to top, #9c27b0 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg==";
}

.form-control.form-control-warning,
.is-focused .form-control.form-control-warning {
  background-image: linear-gradient(to top, #9c27b0 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+";
}

.form-control.form-control-danger,
.is-focused .form-control.form-control-danger {
  background-image: linear-gradient(to top, #9c27b0 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4=";
}

.is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #999999;
}

.is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(153, 153, 153, 0.8);
  border-radius: .2rem;
}

.was-validated .is-focused .form-control:valid,
.is-focused .form-control.is-valid,
.was-validated .is-focused .custom-select:valid,
.is-focused .custom-select.is-valid {
  border-color: #999999;
}

.was-validated .is-focused .form-control:valid:focus,
.is-focused .form-control.is-valid:focus,
.was-validated .is-focused .custom-select:valid:focus,
.is-focused .custom-select.is-valid:focus {
  border-color: #999999;
  box-shadow: 0 0 0 0.2rem rgba(153, 153, 153, 0.25);
}

.was-validated .is-focused .form-control:valid~.valid-feedback,
.was-validated .is-focused .form-control:valid~.valid-tooltip,
.is-focused .form-control.is-valid~.valid-feedback,
.is-focused .form-control.is-valid~.valid-tooltip,
.was-validated .is-focused .custom-select:valid~.valid-feedback,
.was-validated .is-focused .custom-select:valid~.valid-tooltip,
.is-focused .custom-select.is-valid~.valid-feedback,
.is-focused .custom-select.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .is-focused .form-check-input:valid~.form-check-label,
.is-focused .form-check-input.is-valid~.form-check-label {
  color: #999999;
}

.was-validated .is-focused .form-check-input:valid~.valid-feedback,
.was-validated .is-focused .form-check-input:valid~.valid-tooltip,
.is-focused .form-check-input.is-valid~.valid-feedback,
.is-focused .form-check-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .is-focused .custom-control-input:valid~.custom-control-label,
.is-focused .custom-control-input.is-valid~.custom-control-label {
  color: #999999;
}

.was-validated .is-focused .custom-control-input:valid~.custom-control-label::before,
.is-focused .custom-control-input.is-valid~.custom-control-label::before {
  background-color: #d9d9d9;
}

.was-validated .is-focused .custom-control-input:valid~.valid-feedback,
.was-validated .is-focused .custom-control-input:valid~.valid-tooltip,
.is-focused .custom-control-input.is-valid~.valid-feedback,
.is-focused .custom-control-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .is-focused .custom-control-input:valid:checked~.custom-control-label::before,
.is-focused .custom-control-input.is-valid:checked~.custom-control-label::before {
  background-color: #b3b3b3;
}

.was-validated .is-focused .custom-control-input:valid:focus~.custom-control-label::before,
.is-focused .custom-control-input.is-valid:focus~.custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(153, 153, 153, 0.25);
}

.was-validated .is-focused .custom-file-input:valid~.custom-file-label,
.is-focused .custom-file-input.is-valid~.custom-file-label {
  border-color: #999999;
}

.was-validated .is-focused .custom-file-input:valid~.custom-file-label::before,
.is-focused .custom-file-input.is-valid~.custom-file-label::before {
  border-color: inherit;
}

.was-validated .is-focused .custom-file-input:valid~.valid-feedback,
.was-validated .is-focused .custom-file-input:valid~.valid-tooltip,
.is-focused .custom-file-input.is-valid~.valid-feedback,
.is-focused .custom-file-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .is-focused .custom-file-input:valid:focus~.custom-file-label,
.is-focused .custom-file-input.is-valid:focus~.custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(153, 153, 153, 0.25);
}

.is-focused [class^='bmd-label'],
.is-focused [class*=' bmd-label'] {
  color: #9c27b0;
}

.is-focused .bmd-label-placeholder {
  color: #999999;
}

.is-focused .form-control {
  border-color: #d2d2d2;
}

.is-focused .bmd-help {
  color: #555555;
}

.has-success [class^='bmd-label'],
.has-success [class*=' bmd-label'] {
  color: #4caf50;
}

.has-success .form-control,
.is-focused .has-success .form-control {
  background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.has-success .form-control:invalid {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.has-success .form-control:read-only {
  background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

fieldset[disabled][disabled] .has-success .form-control,
.has-success .form-control.disabled,
.has-success .form-control:disabled,
.has-success .form-control[disabled] {
  background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px;
}

.has-success .form-control.form-control-success,
.is-focused .has-success .form-control.form-control-success {
  background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg==";
}

.has-success .form-control.form-control-warning,
.is-focused .has-success .form-control.form-control-warning {
  background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+";
}

.has-success .form-control.form-control-danger,
.is-focused .has-success .form-control.form-control-danger {
  background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4=";
}

.has-success .is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #4caf50;
}

.has-success .is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(76, 175, 80, 0.8);
  border-radius: .2rem;
}

.was-validated .has-success .is-focused .form-control:valid,
.has-success .is-focused .form-control.is-valid,
.was-validated .has-success .is-focused .custom-select:valid,
.has-success .is-focused .custom-select.is-valid {
  border-color: #4caf50;
}

.was-validated .has-success .is-focused .form-control:valid:focus,
.has-success .is-focused .form-control.is-valid:focus,
.was-validated .has-success .is-focused .custom-select:valid:focus,
.has-success .is-focused .custom-select.is-valid:focus {
  border-color: #4caf50;
  box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
}

.was-validated .has-success .is-focused .form-control:valid~.valid-feedback,
.was-validated .has-success .is-focused .form-control:valid~.valid-tooltip,
.has-success .is-focused .form-control.is-valid~.valid-feedback,
.has-success .is-focused .form-control.is-valid~.valid-tooltip,
.was-validated .has-success .is-focused .custom-select:valid~.valid-feedback,
.was-validated .has-success .is-focused .custom-select:valid~.valid-tooltip,
.has-success .is-focused .custom-select.is-valid~.valid-feedback,
.has-success .is-focused .custom-select.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-success .is-focused .form-check-input:valid~.form-check-label,
.has-success .is-focused .form-check-input.is-valid~.form-check-label {
  color: #4caf50;
}

.was-validated .has-success .is-focused .form-check-input:valid~.valid-feedback,
.was-validated .has-success .is-focused .form-check-input:valid~.valid-tooltip,
.has-success .is-focused .form-check-input.is-valid~.valid-feedback,
.has-success .is-focused .form-check-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-success .is-focused .custom-control-input:valid~.custom-control-label,
.has-success .is-focused .custom-control-input.is-valid~.custom-control-label {
  color: #4caf50;
}

.was-validated .has-success .is-focused .custom-control-input:valid~.custom-control-label::before,
.has-success .is-focused .custom-control-input.is-valid~.custom-control-label::before {
  background-color: #a3d7a5;
}

.was-validated .has-success .is-focused .custom-control-input:valid~.valid-feedback,
.was-validated .has-success .is-focused .custom-control-input:valid~.valid-tooltip,
.has-success .is-focused .custom-control-input.is-valid~.valid-feedback,
.has-success .is-focused .custom-control-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-success .is-focused .custom-control-input:valid:checked~.custom-control-label::before,
.has-success .is-focused .custom-control-input.is-valid:checked~.custom-control-label::before {
  background-color: #6ec071;
}

.was-validated .has-success .is-focused .custom-control-input:valid:focus~.custom-control-label::before,
.has-success .is-focused .custom-control-input.is-valid:focus~.custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
}

.was-validated .has-success .is-focused .custom-file-input:valid~.custom-file-label,
.has-success .is-focused .custom-file-input.is-valid~.custom-file-label {
  border-color: #4caf50;
}

.was-validated .has-success .is-focused .custom-file-input:valid~.custom-file-label::before,
.has-success .is-focused .custom-file-input.is-valid~.custom-file-label::before {
  border-color: inherit;
}

.was-validated .has-success .is-focused .custom-file-input:valid~.valid-feedback,
.was-validated .has-success .is-focused .custom-file-input:valid~.valid-tooltip,
.has-success .is-focused .custom-file-input.is-valid~.valid-feedback,
.has-success .is-focused .custom-file-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-success .is-focused .custom-file-input:valid:focus~.custom-file-label,
.has-success .is-focused .custom-file-input.is-valid:focus~.custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
}

.has-success .is-focused [class^='bmd-label'],
.has-success .is-focused [class*=' bmd-label'] {
  color: #4caf50;
}

.has-success .is-focused .bmd-label-placeholder {
  color: #4caf50;
}

.has-success .is-focused .form-control {
  border-color: #4caf50;
}

.has-success .is-focused .bmd-help {
  color: #555555;
}

.has-info [class^='bmd-label'],
.has-info [class*=' bmd-label'] {
  color: #00bcd4;
}

.has-info .form-control,
.is-focused .has-info .form-control {
  background-image: linear-gradient(to top, #00bcd4 2px, rgba(0, 188, 212, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.has-info .form-control:invalid {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.has-info .form-control:read-only {
  background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

fieldset[disabled][disabled] .has-info .form-control,
.has-info .form-control.disabled,
.has-info .form-control:disabled,
.has-info .form-control[disabled] {
  background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px;
}

.has-info .form-control.form-control-success,
.is-focused .has-info .form-control.form-control-success {
  background-image: linear-gradient(to top, #00bcd4 2px, rgba(0, 188, 212, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg==";
}

.has-info .form-control.form-control-warning,
.is-focused .has-info .form-control.form-control-warning {
  background-image: linear-gradient(to top, #00bcd4 2px, rgba(0, 188, 212, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+";
}

.has-info .form-control.form-control-danger,
.is-focused .has-info .form-control.form-control-danger {
  background-image: linear-gradient(to top, #00bcd4 2px, rgba(0, 188, 212, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4=";
}

.has-info .is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #00bcd4;
}

.has-info .is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(0, 188, 212, 0.8);
  border-radius: .2rem;
}

.was-validated .has-info .is-focused .form-control:valid,
.has-info .is-focused .form-control.is-valid,
.was-validated .has-info .is-focused .custom-select:valid,
.has-info .is-focused .custom-select.is-valid {
  border-color: #00bcd4;
}

.was-validated .has-info .is-focused .form-control:valid:focus,
.has-info .is-focused .form-control.is-valid:focus,
.was-validated .has-info .is-focused .custom-select:valid:focus,
.has-info .is-focused .custom-select.is-valid:focus {
  border-color: #00bcd4;
  box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.25);
}

.was-validated .has-info .is-focused .form-control:valid~.valid-feedback,
.was-validated .has-info .is-focused .form-control:valid~.valid-tooltip,
.has-info .is-focused .form-control.is-valid~.valid-feedback,
.has-info .is-focused .form-control.is-valid~.valid-tooltip,
.was-validated .has-info .is-focused .custom-select:valid~.valid-feedback,
.was-validated .has-info .is-focused .custom-select:valid~.valid-tooltip,
.has-info .is-focused .custom-select.is-valid~.valid-feedback,
.has-info .is-focused .custom-select.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-info .is-focused .form-check-input:valid~.form-check-label,
.has-info .is-focused .form-check-input.is-valid~.form-check-label {
  color: #00bcd4;
}

.was-validated .has-info .is-focused .form-check-input:valid~.valid-feedback,
.was-validated .has-info .is-focused .form-check-input:valid~.valid-tooltip,
.has-info .is-focused .form-check-input.is-valid~.valid-feedback,
.has-info .is-focused .form-check-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-info .is-focused .custom-control-input:valid~.custom-control-label,
.has-info .is-focused .custom-control-input.is-valid~.custom-control-label {
  color: #00bcd4;
}

.was-validated .has-info .is-focused .custom-control-input:valid~.custom-control-label::before,
.has-info .is-focused .custom-control-input.is-valid~.custom-control-label::before {
  background-color: #55ecff;
}

.was-validated .has-info .is-focused .custom-control-input:valid~.valid-feedback,
.was-validated .has-info .is-focused .custom-control-input:valid~.valid-tooltip,
.has-info .is-focused .custom-control-input.is-valid~.valid-feedback,
.has-info .is-focused .custom-control-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-info .is-focused .custom-control-input:valid:checked~.custom-control-label::before,
.has-info .is-focused .custom-control-input.is-valid:checked~.custom-control-label::before {
  background-color: #08e3ff;
}

.was-validated .has-info .is-focused .custom-control-input:valid:focus~.custom-control-label::before,
.has-info .is-focused .custom-control-input.is-valid:focus~.custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(0, 188, 212, 0.25);
}

.was-validated .has-info .is-focused .custom-file-input:valid~.custom-file-label,
.has-info .is-focused .custom-file-input.is-valid~.custom-file-label {
  border-color: #00bcd4;
}

.was-validated .has-info .is-focused .custom-file-input:valid~.custom-file-label::before,
.has-info .is-focused .custom-file-input.is-valid~.custom-file-label::before {
  border-color: inherit;
}

.was-validated .has-info .is-focused .custom-file-input:valid~.valid-feedback,
.was-validated .has-info .is-focused .custom-file-input:valid~.valid-tooltip,
.has-info .is-focused .custom-file-input.is-valid~.valid-feedback,
.has-info .is-focused .custom-file-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-info .is-focused .custom-file-input:valid:focus~.custom-file-label,
.has-info .is-focused .custom-file-input.is-valid:focus~.custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.25);
}

.has-info .is-focused [class^='bmd-label'],
.has-info .is-focused [class*=' bmd-label'] {
  color: #00bcd4;
}

.has-info .is-focused .bmd-label-placeholder {
  color: #00bcd4;
}

.has-info .is-focused .form-control {
  border-color: #00bcd4;
}

.has-info .is-focused .bmd-help {
  color: #555555;
}

.has-white [class^='bmd-label'],
.has-white [class*=' bmd-label'] {
  color: #fff;
}

.has-white .form-control,
.is-focused .has-white .form-control {
  background-image: linear-gradient(to top, #fff 2px, rgba(255, 255, 255, 0) 2px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px);
}

.has-white .form-control:invalid {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px);
}

.has-white .form-control:read-only {
  background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px);
}

fieldset[disabled][disabled] .has-white .form-control,
.has-white .form-control.disabled,
.has-white .form-control:disabled,
.has-white .form-control[disabled] {
  background-image: linear-gradient(to right, #FFFFFF 0%, #FFFFFF 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px;
}

.has-white .form-control.form-control-success,
.is-focused .has-white .form-control.form-control-success {
  background-image: linear-gradient(to top, #fff 2px, rgba(255, 255, 255, 0) 2px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg==";
}

.has-white .form-control.form-control-warning,
.is-focused .has-white .form-control.form-control-warning {
  background-image: linear-gradient(to top, #fff 2px, rgba(255, 255, 255, 0) 2px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+";
}

.has-white .form-control.form-control-danger,
.is-focused .has-white .form-control.form-control-danger {
  background-image: linear-gradient(to top, #fff 2px, rgba(255, 255, 255, 0) 2px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4=";
}

.has-white .is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #fff;
}

.has-white .is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: .2rem;
}

.was-validated .has-white .is-focused .form-control:valid,
.has-white .is-focused .form-control.is-valid,
.was-validated .has-white .is-focused .custom-select:valid,
.has-white .is-focused .custom-select.is-valid {
  border-color: #fff;
}

.was-validated .has-white .is-focused .form-control:valid:focus,
.has-white .is-focused .form-control.is-valid:focus,
.was-validated .has-white .is-focused .custom-select:valid:focus,
.has-white .is-focused .custom-select.is-valid:focus {
  border-color: #fff;
  box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
}

.was-validated .has-white .is-focused .form-control:valid~.valid-feedback,
.was-validated .has-white .is-focused .form-control:valid~.valid-tooltip,
.has-white .is-focused .form-control.is-valid~.valid-feedback,
.has-white .is-focused .form-control.is-valid~.valid-tooltip,
.was-validated .has-white .is-focused .custom-select:valid~.valid-feedback,
.was-validated .has-white .is-focused .custom-select:valid~.valid-tooltip,
.has-white .is-focused .custom-select.is-valid~.valid-feedback,
.has-white .is-focused .custom-select.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-white .is-focused .form-check-input:valid~.form-check-label,
.has-white .is-focused .form-check-input.is-valid~.form-check-label {
  color: #fff;
}

.was-validated .has-white .is-focused .form-check-input:valid~.valid-feedback,
.was-validated .has-white .is-focused .form-check-input:valid~.valid-tooltip,
.has-white .is-focused .form-check-input.is-valid~.valid-feedback,
.has-white .is-focused .form-check-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-white .is-focused .custom-control-input:valid~.custom-control-label,
.has-white .is-focused .custom-control-input.is-valid~.custom-control-label {
  color: #fff;
}

.was-validated .has-white .is-focused .custom-control-input:valid~.custom-control-label::before,
.has-white .is-focused .custom-control-input.is-valid~.custom-control-label::before {
  background-color: white;
}

.was-validated .has-white .is-focused .custom-control-input:valid~.valid-feedback,
.was-validated .has-white .is-focused .custom-control-input:valid~.valid-tooltip,
.has-white .is-focused .custom-control-input.is-valid~.valid-feedback,
.has-white .is-focused .custom-control-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-white .is-focused .custom-control-input:valid:checked~.custom-control-label::before,
.has-white .is-focused .custom-control-input.is-valid:checked~.custom-control-label::before {
  background-color: white;
}

.was-validated .has-white .is-focused .custom-control-input:valid:focus~.custom-control-label::before,
.has-white .is-focused .custom-control-input.is-valid:focus~.custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
}

.was-validated .has-white .is-focused .custom-file-input:valid~.custom-file-label,
.has-white .is-focused .custom-file-input.is-valid~.custom-file-label {
  border-color: #fff;
}

.was-validated .has-white .is-focused .custom-file-input:valid~.custom-file-label::before,
.has-white .is-focused .custom-file-input.is-valid~.custom-file-label::before {
  border-color: inherit;
}

.was-validated .has-white .is-focused .custom-file-input:valid~.valid-feedback,
.was-validated .has-white .is-focused .custom-file-input:valid~.valid-tooltip,
.has-white .is-focused .custom-file-input.is-valid~.valid-feedback,
.has-white .is-focused .custom-file-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-white .is-focused .custom-file-input:valid:focus~.custom-file-label,
.has-white .is-focused .custom-file-input.is-valid:focus~.custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
}

.has-white .is-focused [class^='bmd-label'],
.has-white .is-focused [class*=' bmd-label'] {
  color: #fff;
}

.has-white .is-focused .bmd-label-placeholder {
  color: #fff;
}

.has-white .is-focused .form-control {
  border-color: #fff;
}

.has-white .is-focused .bmd-help {
  color: #555555;
}

.has-white .form-control:focus {
  color: #fff;
}

.has-warning [class^='bmd-label'],
.has-warning [class*=' bmd-label'] {
  color: #ff9800;
}

.has-warning .form-control,
.is-focused .has-warning .form-control {
  background-image: linear-gradient(to top, #ff9800 2px, rgba(255, 152, 0, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.has-warning .form-control:invalid {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.has-warning .form-control:read-only {
  background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

fieldset[disabled][disabled] .has-warning .form-control,
.has-warning .form-control.disabled,
.has-warning .form-control:disabled,
.has-warning .form-control[disabled] {
  background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px;
}

.has-warning .form-control.form-control-success,
.is-focused .has-warning .form-control.form-control-success {
  background-image: linear-gradient(to top, #ff9800 2px, rgba(255, 152, 0, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg==";
}

.has-warning .form-control.form-control-warning,
.is-focused .has-warning .form-control.form-control-warning {
  background-image: linear-gradient(to top, #ff9800 2px, rgba(255, 152, 0, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+";
}

.has-warning .form-control.form-control-danger,
.is-focused .has-warning .form-control.form-control-danger {
  background-image: linear-gradient(to top, #ff9800 2px, rgba(255, 152, 0, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4=";
}

.has-warning .is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #ff9800;
}

.has-warning .is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(255, 152, 0, 0.8);
  border-radius: .2rem;
}

.was-validated .has-warning .is-focused .form-control:valid,
.has-warning .is-focused .form-control.is-valid,
.was-validated .has-warning .is-focused .custom-select:valid,
.has-warning .is-focused .custom-select.is-valid {
  border-color: #ff9800;
}

.was-validated .has-warning .is-focused .form-control:valid:focus,
.has-warning .is-focused .form-control.is-valid:focus,
.was-validated .has-warning .is-focused .custom-select:valid:focus,
.has-warning .is-focused .custom-select.is-valid:focus {
  border-color: #ff9800;
  box-shadow: 0 0 0 0.2rem rgba(255, 152, 0, 0.25);
}

.was-validated .has-warning .is-focused .form-control:valid~.valid-feedback,
.was-validated .has-warning .is-focused .form-control:valid~.valid-tooltip,
.has-warning .is-focused .form-control.is-valid~.valid-feedback,
.has-warning .is-focused .form-control.is-valid~.valid-tooltip,
.was-validated .has-warning .is-focused .custom-select:valid~.valid-feedback,
.was-validated .has-warning .is-focused .custom-select:valid~.valid-tooltip,
.has-warning .is-focused .custom-select.is-valid~.valid-feedback,
.has-warning .is-focused .custom-select.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-warning .is-focused .form-check-input:valid~.form-check-label,
.has-warning .is-focused .form-check-input.is-valid~.form-check-label {
  color: #ff9800;
}

.was-validated .has-warning .is-focused .form-check-input:valid~.valid-feedback,
.was-validated .has-warning .is-focused .form-check-input:valid~.valid-tooltip,
.has-warning .is-focused .form-check-input.is-valid~.valid-feedback,
.has-warning .is-focused .form-check-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-warning .is-focused .custom-control-input:valid~.custom-control-label,
.has-warning .is-focused .custom-control-input.is-valid~.custom-control-label {
  color: #ff9800;
}

.was-validated .has-warning .is-focused .custom-control-input:valid~.custom-control-label::before,
.has-warning .is-focused .custom-control-input.is-valid~.custom-control-label::before {
  background-color: #ffcc80;
}

.was-validated .has-warning .is-focused .custom-control-input:valid~.valid-feedback,
.was-validated .has-warning .is-focused .custom-control-input:valid~.valid-tooltip,
.has-warning .is-focused .custom-control-input.is-valid~.valid-feedback,
.has-warning .is-focused .custom-control-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-warning .is-focused .custom-control-input:valid:checked~.custom-control-label::before,
.has-warning .is-focused .custom-control-input.is-valid:checked~.custom-control-label::before {
  background-color: #ffad33;
}

.was-validated .has-warning .is-focused .custom-control-input:valid:focus~.custom-control-label::before,
.has-warning .is-focused .custom-control-input.is-valid:focus~.custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(255, 152, 0, 0.25);
}

.was-validated .has-warning .is-focused .custom-file-input:valid~.custom-file-label,
.has-warning .is-focused .custom-file-input.is-valid~.custom-file-label {
  border-color: #ff9800;
}

.was-validated .has-warning .is-focused .custom-file-input:valid~.custom-file-label::before,
.has-warning .is-focused .custom-file-input.is-valid~.custom-file-label::before {
  border-color: inherit;
}

.was-validated .has-warning .is-focused .custom-file-input:valid~.valid-feedback,
.was-validated .has-warning .is-focused .custom-file-input:valid~.valid-tooltip,
.has-warning .is-focused .custom-file-input.is-valid~.valid-feedback,
.has-warning .is-focused .custom-file-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-warning .is-focused .custom-file-input:valid:focus~.custom-file-label,
.has-warning .is-focused .custom-file-input.is-valid:focus~.custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(255, 152, 0, 0.25);
}

.has-warning .is-focused [class^='bmd-label'],
.has-warning .is-focused [class*=' bmd-label'] {
  color: #ff9800;
}

.has-warning .is-focused .bmd-label-placeholder {
  color: #ff9800;
}

.has-warning .is-focused .form-control {
  border-color: #ff9800;
}

.has-warning .is-focused .bmd-help {
  color: #555555;
}

.has-danger [class^='bmd-label'],
.has-danger [class*=' bmd-label'] {
  color: #f44336;
}

.has-danger .form-control,
.is-focused .has-danger .form-control {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.has-danger .form-control:invalid {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.has-danger .form-control:read-only {
  background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

fieldset[disabled][disabled] .has-danger .form-control,
.has-danger .form-control.disabled,
.has-danger .form-control:disabled,
.has-danger .form-control[disabled] {
  background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px;
}

.has-danger .form-control.form-control-success,
.is-focused .has-danger .form-control.form-control-success {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg==";
}

.has-danger .form-control.form-control-warning,
.is-focused .has-danger .form-control.form-control-warning {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+";
}

.has-danger .form-control.form-control-danger,
.is-focused .has-danger .form-control.form-control-danger {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4=";
}

.has-danger .is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #f44336;
}

.has-danger .is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(244, 67, 54, 0.8);
  border-radius: .2rem;
}

.was-validated .has-danger .is-focused .form-control:valid,
.has-danger .is-focused .form-control.is-valid,
.was-validated .has-danger .is-focused .custom-select:valid,
.has-danger .is-focused .custom-select.is-valid {
  border-color: #f44336;
}

.was-validated .has-danger .is-focused .form-control:valid:focus,
.has-danger .is-focused .form-control.is-valid:focus,
.was-validated .has-danger .is-focused .custom-select:valid:focus,
.has-danger .is-focused .custom-select.is-valid:focus {
  border-color: #f44336;
  box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25);
}

.was-validated .has-danger .is-focused .form-control:valid~.valid-feedback,
.was-validated .has-danger .is-focused .form-control:valid~.valid-tooltip,
.has-danger .is-focused .form-control.is-valid~.valid-feedback,
.has-danger .is-focused .form-control.is-valid~.valid-tooltip,
.was-validated .has-danger .is-focused .custom-select:valid~.valid-feedback,
.was-validated .has-danger .is-focused .custom-select:valid~.valid-tooltip,
.has-danger .is-focused .custom-select.is-valid~.valid-feedback,
.has-danger .is-focused .custom-select.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-danger .is-focused .form-check-input:valid~.form-check-label,
.has-danger .is-focused .form-check-input.is-valid~.form-check-label {
  color: #f44336;
}

.was-validated .has-danger .is-focused .form-check-input:valid~.valid-feedback,
.was-validated .has-danger .is-focused .form-check-input:valid~.valid-tooltip,
.has-danger .is-focused .form-check-input.is-valid~.valid-feedback,
.has-danger .is-focused .form-check-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-danger .is-focused .custom-control-input:valid~.custom-control-label,
.has-danger .is-focused .custom-control-input.is-valid~.custom-control-label {
  color: #f44336;
}

.was-validated .has-danger .is-focused .custom-control-input:valid~.custom-control-label::before,
.has-danger .is-focused .custom-control-input.is-valid~.custom-control-label::before {
  background-color: #fbb4af;
}

.was-validated .has-danger .is-focused .custom-control-input:valid~.valid-feedback,
.was-validated .has-danger .is-focused .custom-control-input:valid~.valid-tooltip,
.has-danger .is-focused .custom-control-input.is-valid~.valid-feedback,
.has-danger .is-focused .custom-control-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-danger .is-focused .custom-control-input:valid:checked~.custom-control-label::before,
.has-danger .is-focused .custom-control-input.is-valid:checked~.custom-control-label::before {
  background-color: #f77066;
}

.was-validated .has-danger .is-focused .custom-control-input:valid:focus~.custom-control-label::before,
.has-danger .is-focused .custom-control-input.is-valid:focus~.custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(244, 67, 54, 0.25);
}

.was-validated .has-danger .is-focused .custom-file-input:valid~.custom-file-label,
.has-danger .is-focused .custom-file-input.is-valid~.custom-file-label {
  border-color: #f44336;
}

.was-validated .has-danger .is-focused .custom-file-input:valid~.custom-file-label::before,
.has-danger .is-focused .custom-file-input.is-valid~.custom-file-label::before {
  border-color: inherit;
}

.was-validated .has-danger .is-focused .custom-file-input:valid~.valid-feedback,
.was-validated .has-danger .is-focused .custom-file-input:valid~.valid-tooltip,
.has-danger .is-focused .custom-file-input.is-valid~.valid-feedback,
.has-danger .is-focused .custom-file-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-danger .is-focused .custom-file-input:valid:focus~.custom-file-label,
.has-danger .is-focused .custom-file-input.is-valid:focus~.custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25);
}

.has-danger .is-focused [class^='bmd-label'],
.has-danger .is-focused [class*=' bmd-label'] {
  color: #f44336;
}

.has-danger .is-focused .bmd-label-placeholder {
  color: #f44336;
}

.has-danger .is-focused .form-control {
  border-color: #f44336;
}

.has-danger .is-focused .bmd-help {
  color: #555555;
}

.has-rose [class^='bmd-label'],
.has-rose [class*=' bmd-label'] {
  color: #e91e63;
}

.has-rose .form-control,
.is-focused .has-rose .form-control {
  background-image: linear-gradient(to top, #e91e63 2px, rgba(233, 30, 99, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.has-rose .form-control:invalid {
  background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

.has-rose .form-control:read-only {
  background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}

fieldset[disabled][disabled] .has-rose .form-control,
.has-rose .form-control.disabled,
.has-rose .form-control:disabled,
.has-rose .form-control[disabled] {
  background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
  background-repeat: repeat-x;
  background-size: 3px 1px;
}

.has-rose .form-control.form-control-success,
.is-focused .has-rose .form-control.form-control-success {
  background-image: linear-gradient(to top, #e91e63 2px, rgba(233, 30, 99, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg==";
}

.has-rose .form-control.form-control-warning,
.is-focused .has-rose .form-control.form-control-warning {
  background-image: linear-gradient(to top, #e91e63 2px, rgba(233, 30, 99, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+";
}

.has-rose .form-control.form-control-danger,
.is-focused .has-rose .form-control.form-control-danger {
  background-image: linear-gradient(to top, #e91e63 2px, rgba(233, 30, 99, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4=";
}

.has-rose .is-focused .valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #e91e63;
}

.has-rose .is-focused .valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: .5rem;
  margin-top: .1rem;
  font-size: .875rem;
  line-height: 1;
  color: #fff;
  background-color: rgba(233, 30, 99, 0.8);
  border-radius: .2rem;
}

.was-validated .has-rose .is-focused .form-control:valid,
.has-rose .is-focused .form-control.is-valid,
.was-validated .has-rose .is-focused .custom-select:valid,
.has-rose .is-focused .custom-select.is-valid {
  border-color: #e91e63;
}

.was-validated .has-rose .is-focused .form-control:valid:focus,
.has-rose .is-focused .form-control.is-valid:focus,
.was-validated .has-rose .is-focused .custom-select:valid:focus,
.has-rose .is-focused .custom-select.is-valid:focus {
  border-color: #e91e63;
  box-shadow: 0 0 0 0.2rem rgba(233, 30, 99, 0.25);
}

.was-validated .has-rose .is-focused .form-control:valid~.valid-feedback,
.was-validated .has-rose .is-focused .form-control:valid~.valid-tooltip,
.has-rose .is-focused .form-control.is-valid~.valid-feedback,
.has-rose .is-focused .form-control.is-valid~.valid-tooltip,
.was-validated .has-rose .is-focused .custom-select:valid~.valid-feedback,
.was-validated .has-rose .is-focused .custom-select:valid~.valid-tooltip,
.has-rose .is-focused .custom-select.is-valid~.valid-feedback,
.has-rose .is-focused .custom-select.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-rose .is-focused .form-check-input:valid~.form-check-label,
.has-rose .is-focused .form-check-input.is-valid~.form-check-label {
  color: #e91e63;
}

.was-validated .has-rose .is-focused .form-check-input:valid~.valid-feedback,
.was-validated .has-rose .is-focused .form-check-input:valid~.valid-tooltip,
.has-rose .is-focused .form-check-input.is-valid~.valid-feedback,
.has-rose .is-focused .form-check-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-rose .is-focused .custom-control-input:valid~.custom-control-label,
.has-rose .is-focused .custom-control-input.is-valid~.custom-control-label {
  color: #e91e63;
}

.was-validated .has-rose .is-focused .custom-control-input:valid~.custom-control-label::before,
.has-rose .is-focused .custom-control-input.is-valid~.custom-control-label::before {
  background-color: #f492b4;
}

.was-validated .has-rose .is-focused .custom-control-input:valid~.valid-feedback,
.was-validated .has-rose .is-focused .custom-control-input:valid~.valid-tooltip,
.has-rose .is-focused .custom-control-input.is-valid~.valid-feedback,
.has-rose .is-focused .custom-control-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-rose .is-focused .custom-control-input:valid:checked~.custom-control-label::before,
.has-rose .is-focused .custom-control-input.is-valid:checked~.custom-control-label::before {
  background-color: #ee4c83;
}

.was-validated .has-rose .is-focused .custom-control-input:valid:focus~.custom-control-label::before,
.has-rose .is-focused .custom-control-input.is-valid:focus~.custom-control-label::before {
  box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(233, 30, 99, 0.25);
}

.was-validated .has-rose .is-focused .custom-file-input:valid~.custom-file-label,
.has-rose .is-focused .custom-file-input.is-valid~.custom-file-label {
  border-color: #e91e63;
}

.was-validated .has-rose .is-focused .custom-file-input:valid~.custom-file-label::before,
.has-rose .is-focused .custom-file-input.is-valid~.custom-file-label::before {
  border-color: inherit;
}

.was-validated .has-rose .is-focused .custom-file-input:valid~.valid-feedback,
.was-validated .has-rose .is-focused .custom-file-input:valid~.valid-tooltip,
.has-rose .is-focused .custom-file-input.is-valid~.valid-feedback,
.has-rose .is-focused .custom-file-input.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .has-rose .is-focused .custom-file-input:valid:focus~.custom-file-label,
.has-rose .is-focused .custom-file-input.is-valid:focus~.custom-file-label {
  box-shadow: 0 0 0 0.2rem rgba(233, 30, 99, 0.25);
}

.has-rose .is-focused [class^='bmd-label'],
.has-rose .is-focused [class*=' bmd-label'] {
  color: #e91e63;
}

.has-rose .is-focused .bmd-label-placeholder {
  color: #e91e63;
}

.has-rose .is-focused .form-control {
  border-color: #e91e63;
}

.has-rose .is-focused .bmd-help {
  color: #555555;
}

.bmd-form-group {
  position: relative;
}

.bmd-form-group:not(.has-success):not(.has-danger) [class^='bmd-label'].bmd-label-floating,
.bmd-form-group:not(.has-success):not(.has-danger) [class*=' bmd-label'].bmd-label-floating {
  color: #AAAAAA;
}

.bmd-form-group [class^='bmd-label'],
.bmd-form-group [class*=' bmd-label'] {
  position: absolute;
  pointer-events: none;
  transition: 0.3s ease all;
}

.bmd-form-group [class^='bmd-label'].bmd-label-floating,
.bmd-form-group [class*=' bmd-label'].bmd-label-floating {
  will-change: left, top, contents;
  margin: 0;
  line-height: 1.4;
  font-weight: 400;
}

.bmd-form-group.is-filled .bmd-label-placeholder {
  display: none;
}

.bmd-form-group.bmd-collapse-inline {
  display: flex;
  align-items: center;
  padding: 0;
  min-height: 2.1em;
}

.bmd-form-group.bmd-collapse-inline .collapse {
  flex: 1;
  display: none;
}

.bmd-form-group.bmd-collapse-inline .collapse.show {
  max-width: 1200px;
}

.bmd-form-group.bmd-collapse-inline .collapsing,
.bmd-form-group.bmd-collapse-inline .width:not(.collapse),
.bmd-form-group.bmd-collapse-inline .collapse.show {
  display: block;
}

.bmd-form-group.bmd-collapse-inline .collapsing {
  transition-duration: 0.2s;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

.bmd-form-group .form-control,
.bmd-form-group label,
.bmd-form-group input::placeholder {
  line-height: 1.1;
}

.bmd-form-group label {
  color: #AAAAAA;
}

.bmd-form-group .radio label,
.bmd-form-group label.radio-inline,
.bmd-form-group .checkbox label,
.bmd-form-group label.checkbox-inline,
.bmd-form-group .switch label {
  line-height: 1.5;
}

.bmd-form-group .checkbox label,
.bmd-form-group .radio label,
.bmd-form-group label {
  font-size: 0.875rem;
}

.bmd-form-group .bmd-label-floating,
.bmd-form-group .bmd-label-placeholder {
  top: 0.6125rem;
}

.bmd-form-group .is-focused .bmd-label-floating,
.bmd-form-group .is-filled .bmd-label-floating {
  top: -1rem;
  left: 0;
  font-size: 0.6875rem;
}

.bmd-form-group .bmd-label-static {
  top: 0.35rem;
  left: 0;
  font-size: 0.875rem;
}

.bmd-form-group .bmd-help {
  margin-top: 0;
  font-size: 0.75rem;
}

.bmd-form-group .form-control.form-control-success,
.bmd-form-group .form-control.form-control-warning,
.bmd-form-group .form-control.form-control-danger {
  background-size: 0 100%, 100% 100%, 0.9375rem 0.9375rem;
}

.bmd-form-group .form-control.form-control-success,
.bmd-form-group .form-control.form-control-success:focus,
.bmd-form-group.is-focused .bmd-form-group .form-control.form-control-success,
.bmd-form-group .form-control.form-control-warning,
.bmd-form-group .form-control.form-control-warning:focus,
.bmd-form-group.is-focused .bmd-form-group .form-control.form-control-warning,
.bmd-form-group .form-control.form-control-danger,
.bmd-form-group .form-control.form-control-danger:focus,
.bmd-form-group.is-focused .bmd-form-group .form-control.form-control-danger {
  padding-right: 0;
  background-repeat: no-repeat, no-repeat;
  background-position: center bottom, center calc(100% - 1px), center right 0.46875rem;
}

.bmd-form-group .form-control.form-control-success:focus,
.bmd-form-group.is-focused .bmd-form-group .form-control.form-control-success,
.bmd-form-group .form-control.form-control-warning:focus,
.bmd-form-group.is-focused .bmd-form-group .form-control.form-control-warning,
.bmd-form-group .form-control.form-control-danger:focus,
.bmd-form-group.is-focused .bmd-form-group .form-control.form-control-danger {
  background-size: 100% 100%, 100% 100%, 0.9375rem 0.9375rem;
}

.bmd-form-group.bmd-form-group-sm .form-control,
.bmd-form-group.bmd-form-group-sm label,
.bmd-form-group.bmd-form-group-sm input::placeholder {
  line-height: 1.1;
}

.bmd-form-group.bmd-form-group-sm label {
  color: #AAAAAA;
}

.bmd-form-group.bmd-form-group-sm .radio label,
.bmd-form-group.bmd-form-group-sm label.radio-inline,
.bmd-form-group.bmd-form-group-sm .checkbox label,
.bmd-form-group.bmd-form-group-sm label.checkbox-inline,
.bmd-form-group.bmd-form-group-sm .switch label {
  line-height: 1.5;
}

.bmd-form-group.bmd-form-group-sm .checkbox label,
.bmd-form-group.bmd-form-group-sm .radio label,
.bmd-form-group.bmd-form-group-sm label {
  font-size: 0.875rem;
}

.bmd-form-group.bmd-form-group-sm .bmd-label-floating,
.bmd-form-group.bmd-form-group-sm .bmd-label-placeholder {
  top: 0.175rem;
}

.bmd-form-group.bmd-form-group-sm .is-focused .bmd-label-floating,
.bmd-form-group.bmd-form-group-sm .is-filled .bmd-label-floating {
  top: -1.25rem;
  left: 0;
  font-size: 0.6875rem;
}

.bmd-form-group.bmd-form-group-sm .bmd-label-static {
  top: 0.1rem;
  left: 0;
  font-size: 0.875rem;
}

.bmd-form-group.bmd-form-group-sm .bmd-help {
  margin-top: 0;
  font-size: 0.65625rem;
}

.bmd-form-group.bmd-form-group-sm .form-control.form-control-success,
.bmd-form-group.bmd-form-group-sm .form-control.form-control-warning,
.bmd-form-group.bmd-form-group-sm .form-control.form-control-danger {
  background-size: 0 100%, 100% 100%, 0.6875rem 0.6875rem;
}

.bmd-form-group.bmd-form-group-sm .form-control.form-control-success,
.bmd-form-group.bmd-form-group-sm .form-control.form-control-success:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-success,
.bmd-form-group.bmd-form-group-sm .form-control.form-control-warning,
.bmd-form-group.bmd-form-group-sm .form-control.form-control-warning:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning,
.bmd-form-group.bmd-form-group-sm .form-control.form-control-danger,
.bmd-form-group.bmd-form-group-sm .form-control.form-control-danger:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger {
  padding-right: 0;
  background-repeat: no-repeat, no-repeat;
  background-position: center bottom, center calc(100% - 1px), center right 0.34375rem;
}

.bmd-form-group.bmd-form-group-sm .form-control.form-control-success:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-success,
.bmd-form-group.bmd-form-group-sm .form-control.form-control-warning:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning,
.bmd-form-group.bmd-form-group-sm .form-control.form-control-danger:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger {
  background-size: 100% 100%, 100% 100%, 0.6875rem 0.6875rem;
}

.bmd-form-group.bmd-form-group-lg .form-control,
.bmd-form-group.bmd-form-group-lg label,
.bmd-form-group.bmd-form-group-lg input::placeholder {
  line-height: 1.1;
}

.bmd-form-group.bmd-form-group-lg label {
  color: #AAAAAA;
}

.bmd-form-group.bmd-form-group-lg .radio label,
.bmd-form-group.bmd-form-group-lg label.radio-inline,
.bmd-form-group.bmd-form-group-lg .checkbox label,
.bmd-form-group.bmd-form-group-lg label.checkbox-inline,
.bmd-form-group.bmd-form-group-lg .switch label {
  line-height: 1.5;
}

.bmd-form-group.bmd-form-group-lg .checkbox label,
.bmd-form-group.bmd-form-group-lg .radio label,
.bmd-form-group.bmd-form-group-lg label {
  font-size: 0.875rem;
}

.bmd-form-group.bmd-form-group-lg .bmd-label-floating,
.bmd-form-group.bmd-form-group-lg .bmd-label-placeholder {
  top: 0.7375rem;
}

.bmd-form-group.bmd-form-group-lg .is-focused .bmd-label-floating,
.bmd-form-group.bmd-form-group-lg .is-filled .bmd-label-floating {
  top: -1rem;
  left: 0;
  font-size: 0.6875rem;
}

.bmd-form-group.bmd-form-group-lg .bmd-label-static {
  top: 0.35rem;
  left: 0;
  font-size: 0.875rem;
}

.bmd-form-group.bmd-form-group-lg .bmd-help {
  margin-top: 0;
  font-size: 0.9375rem;
}

.bmd-form-group.bmd-form-group-lg .form-control.form-control-success,
.bmd-form-group.bmd-form-group-lg .form-control.form-control-warning,
.bmd-form-group.bmd-form-group-lg .form-control.form-control-danger {
  background-size: 0 100%, 100% 100%, 1.1875rem 1.1875rem;
}

.bmd-form-group.bmd-form-group-lg .form-control.form-control-success,
.bmd-form-group.bmd-form-group-lg .form-control.form-control-success:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-success,
.bmd-form-group.bmd-form-group-lg .form-control.form-control-warning,
.bmd-form-group.bmd-form-group-lg .form-control.form-control-warning:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning,
.bmd-form-group.bmd-form-group-lg .form-control.form-control-danger,
.bmd-form-group.bmd-form-group-lg .form-control.form-control-danger:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger {
  padding-right: 0;
  background-repeat: no-repeat, no-repeat;
  background-position: center bottom, center calc(100% - 1px), center right 0.59375rem;
}

.bmd-form-group.bmd-form-group-lg .form-control.form-control-success:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-success,
.bmd-form-group.bmd-form-group-lg .form-control.form-control-warning:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning,
.bmd-form-group.bmd-form-group-lg .form-control.form-control-danger:focus,
.bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger {
  background-size: 100% 100%, 100% 100%, 1.1875rem 1.1875rem;
}

.form-control,
label,
input::placeholder {
  line-height: 1.1;
}

label {
  color: #AAAAAA;
}

.radio label,
label.radio-inline,
.checkbox label,
label.checkbox-inline,
.switch label {
  line-height: 1.5;
}

.checkbox label,
.radio label,
label {
  font-size: 0.875rem;
}

.bmd-label-floating,
.bmd-label-placeholder {
  top: 0.6125rem;
}

.is-focused .bmd-label-floating,
.is-filled .bmd-label-floating {
  top: -1rem;
  left: 0;
  font-size: 0.6875rem;
}

.bmd-label-static {
  top: 0.35rem;
  left: 0;
  font-size: 0.875rem;
}

.bmd-help {
  margin-top: 0;
  font-size: 0.75rem;
}

.form-control.form-control-success,
.form-control.form-control-warning,
.form-control.form-control-danger {
  background-size: 0 100%, 100% 100%, 0.9375rem 0.9375rem;
}

.form-control.form-control-success,
.form-control.form-control-success:focus,
.bmd-form-group.is-focused .form-control.form-control-success,
.form-control.form-control-warning,
.form-control.form-control-warning:focus,
.bmd-form-group.is-focused .form-control.form-control-warning,
.form-control.form-control-danger,
.form-control.form-control-danger:focus,
.bmd-form-group.is-focused .form-control.form-control-danger {
  padding-right: 0;
  background-repeat: no-repeat, no-repeat;
  background-position: center bottom, center calc(100% - 1px), center right 0.46875rem;
}

.form-control.form-control-success:focus,
.bmd-form-group.is-focused .form-control.form-control-success,
.form-control.form-control-warning:focus,
.bmd-form-group.is-focused .form-control.form-control-warning,
.form-control.form-control-danger:focus,
.bmd-form-group.is-focused .form-control.form-control-danger {
  background-size: 100% 100%, 100% 100%, 0.9375rem 0.9375rem;
}

select,
select.form-control {
  -moz-appearance: none;
  -webkit-appearance: none;
}

@media (min-width: 576px) {
  .form-inline .input-group {
    display: inline-flex;
    align-items: center;
  }
}

.form-control-feedback {
  position: absolute;
  top: 4px;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  pointer-events: none;
  opacity: 0;
}

.has-success .form-control-feedback {
  color: #4caf50;
  opacity: 1;
}

.has-danger .form-control-feedback {
  color: #f44336;
  opacity: 1;
}

.form-group {
  padding-bottom: 10px;
  position: relative;
  margin: 8px 0 0;
}

.form-group .bmd-label-static {
  top: -10px;
}

textarea {
  height: auto !important;
  resize: none;
  line-height: 1.428571 !important;
}

.form-group input[type=file] {
  opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.form-newsletter .input-group,
.form-newsletter .form-group {
  float: left;
  width: 78%;
  margin-right: 2%;
  margin-top: 9px;
  padding-top: 5px;
}

.form-newsletter .btn {
  float: left;
  width: 20%;
  margin: 9px 0 0;
}

.form-file-upload .input-group-btn:last-child>.btn-round {
  border-radius: 30px;
}

.form-file-upload .input-group-btn .btn {
  margin: 0;
}

.form-file-upload .input-group {
  width: 100%;
}

.input-group .input-group-btn {
  padding: 0 12px;
}

.form-control[disabled],
fieldset[disabled] .form-control,
.form-group .form-control[disabled],
fieldset[disabled] .form-group .form-control {
  background-color: transparent;
  cursor: not-allowed;
  border-bottom: 1px dotted #d2d2d2;
  background-repeat: no-repeat;
}

.input-group .input-group-text {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 15px 0 15px;
  background-color: transparent;
  border-color: transparent;
}

.img-thumbnail {
  border-radius: 16px;
}

.img-raised {
  box-shadow: 0 5px 15px -8px rgba(0, 0, 0, 0.24), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.rounded {
  border-radius: 6px !important;
}

.navbar {
  border: 0;
  border-radius: 3px;
  padding: 0.625rem 0;
  margin-bottom: 20px;
  height: auto !important;
  color: #555;
  background-color: #fff !important;
  box-shadow: 0 4px 18px 0px rgba(0, 0, 0, 0.12), 0 7px 10px -5px rgba(0, 0, 0, 0.15);
}

.navbar .dropdown-item:hover,
.navbar .dropdown-item:focus {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 255, 255, 0.4);
  background-color: #fff;
  color: #555;
}

.navbar .navbar-toggler .navbar-toggler-icon {
  background-color: #555;
}

.navbar.fixed-top {
  border-radius: 0;
}

.navbar .navbar-nav .nav-item .nav-link {
  position: relative;
  color: inherit;
  padding: 0.9375rem;
  font-weight: 400;
  font-size: 12px;
  text-transform: uppercase;
  border-radius: 3px;
  line-height: 20px;
}

.navbar .navbar-nav .nav-item .nav-link:not(.btn-just-icon) .fa {
  position: relative;
  top: 2px;
  margin-top: -4px;
  margin-right: 4px;
}

.navbar .navbar-nav .nav-item .nav-link .material-icons,
.navbar .navbar-nav .nav-item .nav-link .fa {
  font-size: 1.25rem;
  max-width: 24px;
  margin-top: -1.1em;
}

.navbar .navbar-nav .nav-item .nav-link:not(.btn) .material-icons {
  margin-top: -7px;
  top: 3px;
  position: relative;
  margin-right: 3px;
}

.navbar .navbar-nav .nav-item .nav-link.profile-photo {
  padding: 0;
  margin: 0 3px;
}

.navbar .navbar-nav .nav-item .nav-link.profile-photo:after {
  display: none;
}

.navbar .navbar-nav .nav-item .nav-link.profile-photo .profile-photo-small {
  height: 40px;
  width: 40px;
}

.navbar .navbar-nav .nav-item .nav-link.profile-photo .ripple-container {
  border-radius: 50%;
}

.navbar .navbar-nav .dropdown-menu-right {
  transform-origin: 100% 0;
}

.navbar .navbar-nav .nav-item.active .nav-link,
.navbar .navbar-nav .nav-item.active .nav-link:hover,
.navbar .navbar-nav .nav-item.active .nav-link:focus {
  color: inherit;
  background-color: rgba(255, 255, 255, 0.1);
}

.navbar .btn,
.navbar .navbar-nav .nav-item .btn {
  margin-top: 0;
  margin-bottom: 0;
}

.navbar .navbar-toggler {
  cursor: pointer;
  outline: 0;
}

.navbar .navbar-toggler .navbar-toggler-icon {
  width: 22px;
  height: 2px;
  vertical-align: middle;
  outline: 0;
  display: block;
  border-radius: 1px;
}

.navbar .navbar-toggler .navbar-toggler-icon+.navbar-toggler-icon {
  margin-top: 4px;
}

.navbar.navbar-absolute {
  position: absolute;
  width: 100%;
  padding-top: 10px;
  z-index: 1029;
}

.navbar .navbar-wrapper {
  display: inline-flex;
  align-items: center;
}

.navbar .navbar-brand {
  position: relative;
  color: inherit;
  height: 50px;
  font-size: 1.125rem;
  line-height: 30px;
  padding: 0.625rem 0;
  font-weight: 300;
  margin-left: 1rem;
}

.navbar>.container {
  flex: 1;
}

.navbar.bg-primary {
  color: #fff;
  background-color: #9c27b0 !important;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(156, 39, 176, 0.46);
}

.navbar.bg-primary .dropdown-item:hover,
.navbar.bg-primary .dropdown-item:focus {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
  background-color: #9c27b0;
  color: #fff;
}

.navbar.bg-primary .navbar-toggler .navbar-toggler-icon {
  background-color: #fff;
}

.navbar.bg-info {
  color: #fff;
  background-color: #00bcd4 !important;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(0, 188, 212, 0.46);
}

.navbar.bg-info .dropdown-item:hover,
.navbar.bg-info .dropdown-item:focus {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4);
  background-color: #00bcd4;
  color: #fff;
}

.navbar.bg-info .navbar-toggler .navbar-toggler-icon {
  background-color: #fff;
}

.navbar.bg-warning {
  color: #fff;
  background-color: #ff9800 !important;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(255, 152, 0, 0.46);
}

.navbar.bg-warning .dropdown-item:hover,
.navbar.bg-warning .dropdown-item:focus {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4);
  background-color: #ff9800;
  color: #fff;
}

.navbar.bg-warning .navbar-toggler .navbar-toggler-icon {
  background-color: #fff;
}

.navbar.bg-rose {
  color: #fff;
  background-color: #e91e63 !important;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(233, 30, 99, 0.46);
}

.navbar.bg-rose .dropdown-item:hover,
.navbar.bg-rose .dropdown-item:focus {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4);
  background-color: #e91e63;
  color: #fff;
}

.navbar.bg-rose .navbar-toggler .navbar-toggler-icon {
  background-color: #fff;
}

.navbar.bg-danger {
  color: #fff;
  background-color: #f44336 !important;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(244, 67, 54, 0.46);
}

.navbar.bg-danger .dropdown-item:hover,
.navbar.bg-danger .dropdown-item:focus {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4);
  background-color: #f44336;
  color: #fff;
}

.navbar.bg-danger .navbar-toggler .navbar-toggler-icon {
  background-color: #fff;
}

.navbar.bg-success {
  color: #fff;
  background-color: #4caf50 !important;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(76, 175, 80, 0.46);
}

.navbar.bg-success .dropdown-item:hover,
.navbar.bg-success .dropdown-item:focus {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4);
  background-color: #4caf50;
  color: #fff;
}

.navbar.bg-success .navbar-toggler .navbar-toggler-icon {
  background-color: #fff;
}

.navbar.bg-dark {
  color: #fff;
  background-color: #212121 !important;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(33, 33, 33, 0.46);
}

.navbar.bg-dark .dropdown-item:hover,
.navbar.bg-dark .dropdown-item:focus {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(33, 33, 33, 0.4);
  background-color: #212121;
  color: #fff;
}

.navbar.bg-dark .navbar-toggler .navbar-toggler-icon {
  background-color: #fff;
}

.navbar.navbar-transparent {
  background-color: transparent !important;
  box-shadow: none;
}

.navbar .notification {
  position: absolute;
  top: 5px;
  border: 1px solid #FFF;
  right: 10px;
  font-size: 9px;
  background: #f44336;
  color: #FFFFFF;
  min-width: 20px;
  padding: 0px 5px;
  height: 20px;
  border-radius: 10px;
  text-align: center;
  line-height: 19px;
  vertical-align: middle;
  display: block;
}

.navbar .navbar-minimize {
  padding: 3px 0 0 15px;
}

.navbar .collapse .navbar-nav .nav-item .nav-link {
  position: relative;
  padding: 10px 15px;
  font-weight: 400;
  font-size: 12px;
  text-transform: uppercase;
  border-radius: 3px;
  line-height: 20px;
  margin-left: 5px;
  color: inherit;
}

.navbar .collapse .navbar-nav .nav-item .nav-link:not(.btn-just-icon) .fa {
  position: relative;
  top: 2px;
  margin-top: -4px;
  margin-right: 4px;
}

.navbar .collapse .navbar-nav .nav-item .nav-link .material-icons,
.navbar .collapse .navbar-nav .nav-item .nav-link .fa {
  font-size: 1.25rem;
  max-width: 24px;
  margin-top: -1.1em;
}

.navbar .collapse .navbar-nav .nav-item .nav-link:not(.btn) .material-icons {
  margin-top: -3px;
  top: 0px;
  position: relative;
  margin-right: 3px;
}

.navbar .collapse .navbar-nav .nav-item .nav-link .notification {
  top: 0px;
}

.off-canvas-sidebar .navbar .navbar-collapse .navbar-nav .nav-item .nav-link {
  padding-top: 15px;
  padding-bottom: 15px;
  font-weight: 500;
  font-size: 12px;
  text-transform: uppercase;
  border-radius: 3px;
  color: #fff;
  margin: 0 15px;
}

.off-canvas-sidebar .navbar .navbar-collapse .navbar-nav .nav-item .nav-link:hover {
  background: rgba(200, 200, 200, 0.2);
}

.off-canvas-sidebar .navbar.navbar-transparent {
  padding-top: 25px !important;
}

.alert {
  border: 0;
  border-radius: 3px;
  position: relative;
  padding: 20px 15px;
  line-height: 20px;
}

.alert b {
  font-weight: 500;
  text-transform: uppercase;
  font-size: 12px;
}

.alert,
.alert.alert-default {
  background-color: white;
  color: #555555;
}

.alert a,
.alert .alert-link,
.alert.alert-default a,
.alert.alert-default .alert-link {
  color: #555555;
}

.alert.alert-inverse {
  background-color: #292929;
  color: #fff;
}

.alert.alert-inverse a,
.alert.alert-inverse .alert-link {
  color: #fff;
}

.alert.alert-primary {
  background-color: #a72abd;
  color: #ffffff;
}

.alert.alert-primary a,
.alert.alert-primary .alert-link {
  color: #ffffff;
}

.alert.alert-success {
  background-color: #55b559;
  color: #ffffff;
}

.alert.alert-success a,
.alert.alert-success .alert-link {
  color: #ffffff;
}

.alert.alert-info {
  background-color: #00cae3;
  color: #ffffff;
}

.alert.alert-info a,
.alert.alert-info .alert-link {
  color: #ffffff;
}

.alert.alert-warning {
  background-color: #ff9e0f;
  color: #ffffff;
}

.alert.alert-warning a,
.alert.alert-warning .alert-link {
  color: #ffffff;
}

.alert.alert-danger {
  background-color: #f55145;
  color: #ffffff;
}

.alert.alert-danger a,
.alert.alert-danger .alert-link {
  color: #ffffff;
}

.alert.alert-rose {
  background-color: #ea2c6d;
  color: #ffffff;
}

.alert.alert-rose a,
.alert.alert-rose .alert-link {
  color: #ffffff;
}

.alert-info,
.alert-danger,
.alert-warning,
.alert-success,
.alert-rose {
  color: #ffffff;
}

.alert-default a,
.alert-default .alert-link {
  color: rgba(0, 0, 0, 0.87);
}

.alert span {
  display: block;
  max-width: 89%;
}

.alert.alert-danger {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4);
}

.alert.alert-danger i {
  color: #f44336;
}

.alert.alert-warning {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4);
}

.alert.alert-warning i {
  color: #ff9800;
}

.alert.alert-success {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4);
}

.alert.alert-success i {
  color: #4caf50;
}

.alert.alert-info {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4);
}

.alert.alert-info i {
  color: #00bcd4;
}

.alert.alert-primary {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
}

.alert.alert-primary i {
  color: #9c27b0;
}

.alert.alert-rose {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4);
}

.alert.alert-rose i {
  color: #e91e63;
}

.alert.alert-with-icon {
  padding-left: 66px;
}

.alert.alert-with-icon i[data-notify="icon"] {
  font-size: 30px;
  display: block;
  left: 15px;
  position: absolute;
  top: 50%;
  margin-top: -15px;
  color: #fff;
}

.alert .close {
  line-height: .5;
}

.alert .close i {
  color: #fff;
  font-size: 11px;
}

.alert i[data-notify="icon"] {
  display: none;
}

.alert .alert-icon {
  display: block;
  float: left;
  margin-right: 1.071rem;
}

.alert .alert-icon i {
  margin-top: -7px;
  top: 5px;
  position: relative;
}

.alert [data-notify="dismiss"] {
  margin-right: 5px;
}

.places-buttons .btn {
  margin-bottom: 30px;
}

.page-header {
  min-height: 100vh;
  max-height: 1000px;
  display: flex !important;
  height: 100%;
  padding: 0;
  color: #fff;
  position: relative;
}

.page-header .page-header-image {
  position: absolute;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.page-header .content-center {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 2;
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  color: #FFFFFF;
  padding: 0 15px;
  width: 100%;
  max-width: 880px;
}

.page-header footer {
  position: absolute;
  bottom: 0;
  width: 100%;
}

.page-header .container {
  height: 100%;
  z-index: 1;
}

.page-header .category,
.page-header .description {
  color: rgba(255, 255, 255, 0.8);
}

.page-header.page-header-small {
  min-height: 60vh;
  max-height: 440px;
}

.page-header.page-header-mini {
  min-height: 40vh;
  max-height: 340px;
}

.page-header .title {
  margin-bottom: 15px;
}

.page-header .title+h4 {
  margin-top: 10px;
}

.page-header:after,
.page-header:before {
  position: absolute;
  z-index: 0;
  width: 100%;
  height: 100%;
  display: block;
  left: 0;
  top: 0;
  content: "";
}

.page-header:before {
  background-color: rgba(0, 0, 0, 0.3);
}

html * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body,
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4 {
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 300;
  line-height: 1.5em;
}

h1,
.h1 {
  font-size: 3.3125rem;
  line-height: 1.15em;
}

h2,
.h2 {
  font-size: 2.25rem;
}

h3,
.h3 {
  font-size: 1.5625rem;
  line-height: 1.4em;
  margin: 20px 0 10px;
}

h4,
.h4 {
  font-size: 1.125rem;
  line-height: 1.4em;
  font-weight: 300;
}

h5,
.h5 {
  font-size: 1.0625rem;
  line-height: 1.4em;
  margin-bottom: 15px;
}

h6,
.h6 {
  font-size: 0.75rem;
  text-transform: uppercase;
  font-weight: 500;
}

.title,
.title a,
.card-title,
.card-title a,
.info-title,
.info-title a,
.footer-brand,
.footer-brand a,
.footer-big h5,
.footer-big h5 a,
.footer-big h4,
.footer-big h4 a,
.media .media-heading,
.media .media-heading a {
  color: #3C4858;
  text-decoration: none;
}

.card-blog .card-title {
  font-weight: 700;
}

h2.title {
  margin-bottom: 2.142rem;
}

.description,
.card-description,
.footer-big p {
  color: #999999;
}

.text-warning {
  color: #ff9800 !important;
}

.text-primary {
  color: #9c27b0 !important;
}

.text-danger {
  color: #f44336 !important;
}

.text-success {
  color: #4caf50 !important;
}

.text-info {
  color: #00bcd4 !important;
}

.text-rose {
  color: #e91e63 !important;
}

.text-gray {
  color: #999999 !important;
}

.nav-tabs {
  border: 0;
  border-radius: 3px;
  padding: 0 15px;
}

.nav-tabs .nav-item .nav-link {
  position: relative;
  color: #fff;
  border: 0;
  margin: 0;
  border-radius: 3px;
  line-height: 24px;
  text-transform: uppercase;
  font-size: 12px;
  padding: 10px 15px;
  background-color: transparent;
  transition: 0.3s background-color 0s;
}

.nav-tabs .nav-item .nav-link:hover {
  border: 0;
}

.nav-tabs .nav-item .nav-link,
.nav-tabs .nav-item .nav-link:hover,
.nav-tabs .nav-item .nav-link:focus {
  border: 0 !important;
  color: #fff !important;
  font-weight: 500;
}

.nav-tabs .nav-item.disabled .nav-link,
.nav-tabs .nav-item.disabled .nav-link:hover {
  color: rgba(255, 255, 255, 0.5);
}

.nav-tabs .nav-item .material-icons {
  margin: -1px 5px 0 0;
}

.nav-tabs .nav-item .nav-link.active {
  background-color: rgba(255, 255, 255, 0.2);
  transition: 0.3s background-color 0.2s;
}

.nav-tabs .nav-link {
  border-bottom: 0.214rem solid transparent;
}

.nav-tabs .nav-link {
  color: #555555;
}

.nav-tabs .nav-link.active {
  color: #333333;
  border-color: #9c27b0;
}

.nav-tabs .nav-link.active:hover,
.nav-tabs .nav-link.active:focus {
  border-color: #9c27b0;
}

.nav-tabs .nav-link.disabled {
  color: #999999;
}

.nav-tabs .nav-link.disabled,
.nav-tabs .nav-link.disabled:hover,
.nav-tabs .nav-link.disabled:focus {
  color: #999999;
}

.nav-tabs.header-primary .nav-link {
  color: white;
}

.nav-tabs.header-primary .nav-link.active {
  color: #fff;
  border-color: #fff;
}

.nav-tabs.header-primary .nav-link.active:hover,
.nav-tabs.header-primary .nav-link.active:focus {
  border-color: #fff;
}

.nav-tabs.header-primary .nav-link.disabled {
  color: rgba(255, 255, 255, 0.84);
}

.nav-tabs.header-primary .nav-link.disabled,
.nav-tabs.header-primary .nav-link.disabled:hover,
.nav-tabs.header-primary .nav-link.disabled:focus {
  color: rgba(255, 255, 255, 0.84);
}

.nav-tabs.bg-inverse .nav-link {
  color: white;
}

.nav-tabs.bg-inverse .nav-link.active {
  color: #fff;
  border-color: #fff;
}

.nav-tabs.bg-inverse .nav-link.active:hover,
.nav-tabs.bg-inverse .nav-link.active:focus {
  border-color: #fff;
}

.nav-tabs.bg-inverse .nav-link.disabled {
  color: rgba(255, 255, 255, 0.84);
}

.nav-tabs.bg-inverse .nav-link.disabled,
.nav-tabs.bg-inverse .nav-link.disabled:hover,
.nav-tabs.bg-inverse .nav-link.disabled:focus {
  color: rgba(255, 255, 255, 0.84);
}

.card-nav-tabs {
  margin-top: 45px;
}

.card-nav-tabs .card-header {
  margin-top: -30px !important;
}

.tab-content .tab-pane .td-actions {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.card .tab-content .form-check {
  margin-top: 6px;
}

.tooltip-arrow {
  display: none;
}

.tooltip.show {
  opacity: 1;
  -webkit-transform: translate3d(0, 0px, 0);
  -moz-transform: translate3d(0, 0px, 0);
  -o-transform: translate3d(0, 0px, 0);
  -ms-transform: translate3d(0, 0px, 0);
  transform: translate3d(0, 0px, 0);
}

.tooltip {
  opacity: 0;
  transition: opacity, transform .2s ease;
  -webkit-transform: translate3d(0, 5px, 0);
  -moz-transform: translate3d(0, 5px, 0);
  -o-transform: translate3d(0, 5px, 0);
  -ms-transform: translate3d(0, 5px, 0);
  transform: translate3d(0, 5px, 0);
  font-size: 0.875rem;
}

.tooltip.bs-tooltip-top .arrow::before,
.tooltip.bs-tooltip-auto[x-placement^="top"] .arrow::before,
.tooltip.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #fff;
}

.tooltip.bs-tooltip-right .arrow::before,
.tooltip.bs-tooltip-auto[x-placement^="right"] .arrow::before,
.tooltip.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #fff;
}

.tooltip.bs-tooltip-left .arrow::before,
.tooltip.bs-tooltip-auto[x-placement^="left"] .arrow::before,
.tooltip.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #fff;
}

.tooltip.bs-tooltip-bottom .arrow::before,
.tooltip.bs-tooltip-auto[x-placement^="bottom"] .arrow::before,
.tooltip.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #fff;
}

.tooltip-inner {
  padding: 10px 15px;
  min-width: 130px;
}

.popover,
.tooltip-inner {
  line-height: 1.5em;
  background: #fff;
  border: none;
  border-radius: 3px;
  box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
  color: #555;
}

.popover {
  padding: 0;
  box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.popover.left>.arrow,
.popover.right>.arrow,
.popover.top>.arrow,
.popover.bottom>.arrow {
  border: none;
}

.popover.bs-popover-top .arrow::before,
.popover.bs-popover-auto[x-placement^="top"] .arrow::before,
.popover.bs-popover-auto[x-placement^="top"] .arrow::before,
.popover.bs-popover-bottom .arrow::before,
.popover.bs-popover-auto[x-placement^="bottom"] .arrow::before,
.popover.bs-popover-auto[x-placement^="bottom"] .arrow::before,
.popover.bs-popover-right .arrow::before,
.popover.bs-popover-auto[x-placement^="right"] .arrow::before,
.popover.bs-popover-auto[x-placement^="right"] .arrow::before,
.popover.bs-popover-left .arrow::before,
.popover.bs-popover-auto[x-placement^="left"] .arrow::before,
.popover.bs-popover-auto[x-placement^="left"] .arrow::before {
  border: 0;
}

.popover-header {
  background-color: #fff;
  border: none;
  padding: 15px 15px 5px;
  font-size: 1.125rem;
  margin: 0;
  color: #555;
}

.popover-body {
  padding: 10px 15px 15px;
  line-height: 1.4;
  color: #555;
}

.dropdown-menu {
  display: none;
  padding: 0.3125rem 0;
  border: 0;
  opacity: 0;
  transform: scale(0);
  transform-origin: 0 0;
  will-change: transform, opacity;
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
}

.dropdown-menu.showing {
  animation-name: bmd-dropdown-animation;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

.open>.dropdown-menu,
.dropdown-menu.show {
  display: block;
  opacity: 1;
  transform: scale(1);
}

.dropdown-menu.hiding {
  display: block;
  opacity: 0;
  transform: scale(0);
}

.dropdown-menu[x-placement="bottom-start"] {
  transform-origin: 0 0;
}

.dropdown-menu[x-placement="bottom-end"] {
  transform-origin: 100% 0;
}

.dropdown-menu[x-placement="top-start"] {
  transform-origin: 0 100%;
}

.dropdown-menu[x-placement="top-end"] {
  transform-origin: 100% 100%;
}

.dropdown-menu .disabled>a {
  color: #777;
}

.dropdown-menu .disabled>a:focus,
.dropdown-menu .disabled>a:hover {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  color: #777;
}

.dropdown-menu.dropdown-with-icons .dropdown-item {
  padding: 0.75rem 1.25rem 0.75rem 0.75rem;
}

.dropdown-menu.dropdown-with-icons .dropdown-item .material-icons {
  vertical-align: middle;
  font-size: 24px;
  position: relative;
  margin-top: -4px;
  top: 1px;
  margin-right: 12px;
  opacity: .5;
}

.dropdown-menu .dropdown-item,
.dropdown-menu li>a {
  position: relative;
  width: auto;
  display: flex;
  flex-flow: nowrap;
  align-items: center;
  color: #333;
  font-weight: normal;
  text-decoration: none;
  font-size: .8125rem;
  border-radius: 0.125rem;
  margin: 0 0.3125rem;
  -webkit-transition: all 150ms linear;
  -moz-transition: all 150ms linear;
  -o-transition: all 150ms linear;
  -ms-transition: all 150ms linear;
  transition: all 150ms linear;
  min-width: 7rem;
  padding: 0.625rem 1.25rem;
  overflow: hidden;
  line-height: 1.428571;
  text-overflow: ellipsis;
  word-wrap: break-word;
}

@media (min-width: 768px) {

  .dropdown-menu .dropdown-item,
  .dropdown-menu li>a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}

.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus,
.dropdown-menu a:hover,
.dropdown-menu a:focus,
.dropdown-menu a:active {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
  background-color: #9c27b0;
  color: #FFFFFF;
}

a[data-toggle="collapse"][aria-expanded="true"] .caret,
a[aria-expanded="true"] .caret,
.dropdown.open .caret,
.dropup.open .caret,
.btn-group.bootstrap-select.open .caret {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

.dropdown-toggle.bmd-btn-icon::after,
.dropdown-toggle.bmd-btn-fab::after {
  display: none;
}

.dropdown-toggle.bmd-btn-icon~.dropdown-menu.dropdown-menu-top-left,
.dropdown-toggle.bmd-btn-icon~.dropdown-menu.dropdown-menu-top-right,
.dropdown-toggle.bmd-btn-fab~.dropdown-menu.dropdown-menu-top-left,
.dropdown-toggle.bmd-btn-fab~.dropdown-menu.dropdown-menu-top-right {
  bottom: 2rem;
}

.dropdown-toggle:after {
  will-change: transform;
  transition: transform 150ms linear;
}

.dropdown-toggle.bmd-btn-fab-sm~.dropdown-menu.dropdown-menu-top-left,
.dropdown-toggle.bmd-btn-fab-sm~.dropdown-menu.dropdown-menu-top-right {
  bottom: 2.5rem;
}

.dropdown-toggle.bmd-btn-icon~.dropdown-menu {
  margin: 0;
}

.show>.dropdown-toggle:not(.dropdown-item):after {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

.dropdown-header {
  font-size: 0.75rem;
  padding-top: .625rem;
  padding-bottom: .625rem;
  text-transform: none;
  color: #777;
  line-height: 1.428571;
  font-weight: inherit;
}

@keyframes bmd-dropdown-animation {
  from {
    opacity: 0;
    transform: scale(0);
  }

  to {
    opacity: 1;
    transform: scale(1);
  }
}

.dropdown-menu.bootstrap-datetimepicker-widget {
  opacity: 0;
  transform: scale(0);
  transition-duration: 0.3s;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transform-origin: 0 0;
  will-change: transform, opacity;
  top: 0;
}

.dropdown-menu.bootstrap-datetimepicker-widget.top {
  transform-origin: 0 100%;
}

.dropdown-menu.bootstrap-datetimepicker-widget.open {
  opacity: 1;
  transform: scale(1);
  top: 0;
}

.togglebutton {
  vertical-align: middle;
}

.togglebutton,
.togglebutton label,
.togglebutton input,
.togglebutton .toggle {
  user-select: none;
}

.togglebutton label {
  cursor: pointer;
  color: rgba(0, 0, 0, 0.26);
}

.form-group.is-focused .togglebutton label {
  color: rgba(0, 0, 0, 0.26);
}

.form-group.is-focused .togglebutton label:hover,
.form-group.is-focused .togglebutton label:focus {
  color: rgba(0, 0, 0, .54);
}

fieldset[disabled] .form-group.is-focused .togglebutton label {
  color: rgba(0, 0, 0, 0.26);
}

.togglebutton label input[type=checkbox] {
  opacity: 0;
  width: 0;
  height: 0;
}

.togglebutton label .toggle {
  text-align: left;
  margin-left: 5px;
}

.togglebutton label .toggle,
.togglebutton label input[type=checkbox][disabled]+.toggle {
  content: "";
  display: inline-block;
  width: 30px;
  height: 15px;
  background-color: rgba(80, 80, 80, 0.7);
  border-radius: 15px;
  margin-right: 15px;
  transition: background 0.3s ease;
  vertical-align: middle;
}

.togglebutton label .toggle:after {
  content: "";
  display: inline-block;
  width: 20px;
  height: 20px;
  background-color: #FFFFFF;
  border-radius: 20px;
  position: relative;
  box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
  left: -5px;
  top: -2.5px;
  border: 1px solid rgba(0, 0, 0, .54);
  transition: left 0.3s ease, background 0.3s ease, box-shadow 0.1s ease;
}

.togglebutton label input[type=checkbox][disabled]+.toggle:after,
.togglebutton label input[type=checkbox][disabled]:checked+.toggle:after {
  background-color: #BDBDBD;
}

.togglebutton label input[type=checkbox]+.toggle:active:after,
.togglebutton label input[type=checkbox][disabled]+.toggle:active:after {
  box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.1);
}

.togglebutton label input[type=checkbox]:checked+.toggle:after {
  left: 15px;
}

.togglebutton label input[type=checkbox]:checked+.toggle {
  background-color: rgba(156, 39, 176, 0.7);
}

.togglebutton label input[type=checkbox]:checked+.toggle:after {
  border-color: #9c27b0;
}

.togglebutton label input[type=checkbox]:checked+.toggle:active:after {
  box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(156, 39, 176, 0.1);
}

.ripple {
  position: relative;
}

.ripple-container {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: 100%;
  overflow: hidden;
  pointer-events: none;
  border-radius: inherit;
}

.ripple-container .ripple-decorator {
  position: absolute;
  width: 20px;
  height: 20px;
  margin-top: -10px;
  margin-left: -10px;
  pointer-events: none;
  background-color: rgba(0, 0, 0, 0.05);
  border-radius: 100%;
  opacity: 0;
  transform: scale(1);
  transform-origin: 50%;
}

.ripple-container .ripple-decorator.ripple-on {
  opacity: 0.1;
  transition: opacity 0.15s ease-in 0s, transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
}

.ripple-container .ripple-decorator.ripple-out {
  opacity: 0;
  transition: opacity 0.1s linear 0s !important;
}

.footer {
  padding: 0.9375rem 0;
  text-align: center;
  display: -webkit-flex;
  /* Safari */
  /* Safari 6.1+ */
  display: flex;
}

.footer ul {
  margin-bottom: 0;
  padding: 0;
  list-style: none;
}

.footer ul li {
  display: inline-block;
}

.footer ul li a {
  color: inherit;
  padding: 0.9375rem;
  font-weight: 500;
  font-size: 12px;
  text-transform: uppercase;
  border-radius: 3px;
  text-decoration: none;
  position: relative;
  display: block;
}

.footer ul li a:hover {
  text-decoration: none;
}

.footer ul li .btn {
  margin: 0;
}

.footer ul.links-horizontal:first-child a {
  padding-left: 0;
}

.footer ul.links-horizontal:last-child a {
  padding-right: 0;
}

.footer ul.links-vertical li {
  display: block;
  margin-left: -5px;
  margin-right: -5px;
}

.footer ul.links-vertical li a {
  padding: 5px;
}

.footer .social-buttons a,
.footer .social-buttons .btn {
  margin-top: 5px;
  margin-bottom: 5px;
}

.footer .footer-brand {
  float: left;
  height: 50px;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
  margin-left: -15px;
}

.footer .footer-brand:hover,
.footer .footer-brand:focus {
  color: #3C4858;
}

.footer .copyright {
  padding: 15px 0;
}

.footer .copyright .material-icons {
  font-size: 18px;
  position: relative;
  top: 3px;
}

.footer .pull-center {
  display: inline-block;
  float: none;
}

.off-canvas-sidebar .footer {
  position: absolute;
  bottom: 0;
  width: 100%;
}

@media screen and (min-width: 768px) {
  .footer .copyright {
    padding-right: 15px;
  }
}

.wrapper {
  position: relative;
  top: 0;
  height: 100vh;
}

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  width: 260px;
  background: #fff;
  box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.sidebar .caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid\9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}

.sidebar[data-background-color="black"] {
  background-color: #191919;
}

.sidebar .sidebar-wrapper {
  position: relative;
  height: calc(100vh - 75px);
  overflow: auto;
  width: 260px;
  z-index: 4;
  padding-bottom: 30px;
}

.sidebar .sidebar-wrapper .dropdown .dropdown-backdrop {
  display: none !important;
}

.sidebar .sidebar-wrapper .navbar-form {
  border: none;
  box-shadow: none;
}

.sidebar .sidebar-wrapper .navbar-form .input-group {
  font-size: 1.7em;
  height: 36px;
  width: 78%;
  padding-left: 17px;
}

.sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a span,
.sidebar .sidebar-wrapper .user .user-info [data-toggle="collapse"]~div>ul>li>a span {
  display: inline-block;
}

.sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
.sidebar .sidebar-wrapper .user .user-info [data-toggle="collapse"]~div>ul>li>a .sidebar-normal {
  margin: 0;
  position: relative;
  transform: translateX(0px);
  opacity: 1;
  white-space: nowrap;
  display: block;
}

.sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-mini,
.sidebar .sidebar-wrapper .user .user-info [data-toggle="collapse"]~div>ul>li>a .sidebar-mini {
  text-transform: uppercase;
  width: 30px;
  margin-right: 15px;
  text-align: center;
  letter-spacing: 1px;
  position: relative;
  float: left;
  display: inherit;
}

.sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a i,
.sidebar .sidebar-wrapper .user .user-info [data-toggle="collapse"]~div>ul>li>a i {
  font-size: 17px;
  line-height: 20px;
  width: 26px;
}

.sidebar .logo-tim {
  border-radius: 50%;
  border: 1px solid #333;
  display: block;
  height: 61px;
  width: 61px;
  float: left;
  overflow: hidden;
}

.sidebar .logo-tim img {
  width: 60px;
  height: 60px;
}

.sidebar .nav {
  margin-top: 20px;
  display: block;
}

.sidebar .nav .caret {
  margin-top: 13px;
  position: absolute;
  right: 6px;
}

.sidebar .nav li>a:hover,
.sidebar .nav li>a:focus {
  background-color: transparent;
  outline: none;
}

.sidebar .nav li:first-child>a {
  margin: 0 15px;
}

.sidebar .nav li:hover>a,
.sidebar .nav li .dropdown-menu a:hover,
.sidebar .nav li .dropdown-menu a:focus,
.sidebar .nav li.active>[data-toggle="collapse"] {
  background-color: rgba(200, 200, 200, 0.2);
  color: #3C4858;
  box-shadow: none;
}

.sidebar .nav li.active>[data-toggle="collapse"] i {
  color: #a9afbb;
}

.sidebar .nav li.active>a,
.sidebar .nav li.active>a i {
  color: #fff;
}

.sidebar .nav li.separator {
  margin: 15px 0;
}

.sidebar .nav li.separator:after {
  width: calc(100% - 30px);
  content: "";
  position: absolute;
  height: 1px;
  left: 15px;
  background-color: rgba(180, 180, 180, 0.3);
}

.sidebar .nav li.separator+li {
  margin-top: 31px;
}

.sidebar .nav p {
  margin: 0;
  line-height: 30px;
  font-size: 14px;
  position: relative;
  display: block;
  height: auto;
  white-space: nowrap;
}

.sidebar .nav i {
  font-size: 24px;
  float: left;
  margin-right: 15px;
  line-height: 30px;
  width: 30px;
  text-align: center;
  color: #a9afbb;
}

.sidebar .nav li a,
.sidebar .nav li .dropdown-menu a {
  margin: 10px 15px 0;
  border-radius: 3px;
  color: #3C4858;
  padding-left: 10px;
  padding-right: 10px;
  text-transform: capitalize;
  font-size: 13px;
  padding: 10px 15px;
}

.sidebar .sidebar-background {
  position: absolute;
  z-index: 1;
  height: 100%;
  width: 100%;
  display: block;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: center center;
}

.sidebar .sidebar-background:after {
  position: absolute;
  z-index: 3;
  width: 100%;
  height: 100%;
  content: "";
  display: block;
  background: #FFFFFF;
  opacity: .93;
}

.sidebar .logo {
  padding: 15px 0px;
  margin: 0;
  display: block;
  position: relative;
  z-index: 4;
}

.sidebar .logo:after {
  content: '';
  position: absolute;
  bottom: 0;
  right: 15px;
  height: 1px;
  width: calc(100% - 30px);
  background-color: rgba(180, 180, 180, 0.3);
}

.sidebar .logo p {
  float: left;
  font-size: 20px;
  margin: 10px 10px;
  color: #fff;
  line-height: 20px;
}

.sidebar .logo .simple-text {
  text-transform: uppercase;
  padding: 5px 0px;
  display: inline-block;
  font-size: 18px;
  color: #3C4858;
  white-space: nowrap;
  font-weight: 400;
  line-height: 30px;
  overflow: hidden;
  text-align: center;
  display: block;
}

.sidebar .logo-tim {
  border-radius: 50%;
  border: 1px solid #333;
  display: block;
  height: 61px;
  width: 61px;
  float: left;
  overflow: hidden;
}

.sidebar .logo-tim img {
  width: 60px;
  height: 60px;
}

.sidebar[data-background-color="black"] .nav .nav-item .nav-link {
  color: #fff;
}

.sidebar[data-background-color="black"] .nav .nav-item i {
  color: rgba(255, 255, 255, 0.8);
}

.sidebar[data-background-color="black"] .nav .nav-item.active [data-toggle="collapse"],
.sidebar[data-background-color="black"] .nav .nav-item:hover [data-toggle="collapse"] {
  color: #fff;
}

.sidebar[data-background-color="black"] .nav .nav-item.active [data-toggle="collapse"] i,
.sidebar[data-background-color="black"] .nav .nav-item:hover [data-toggle="collapse"] i {
  color: rgba(255, 255, 255, 0.8);
}

.sidebar[data-background-color="black"] .user a {
  color: #fff;
}

.sidebar[data-background-color="black"] .simple-text {
  color: #fff;
}

.sidebar[data-background-color="black"] .sidebar-background:after {
  background: #000;
  opacity: .8;
}

.sidebar[data-background-color="black"] .nav li .dropdown-menu .dropdown-item {
  color: #fff;
}

.sidebar[data-color="purple"] li.active>a {
  background-color: #9c27b0;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
}

.sidebar[data-color="azure"] li.active>a {
  background-color: #00bcd4;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4);
}

.sidebar[data-color="green"] li.active>a {
  background-color: #4caf50;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4);
}

.sidebar[data-color="orange"] li.active>a {
  background-color: #ff9800;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4);
}

.sidebar[data-color="danger"] li.active>a {
  background-color: #f44336;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4);
}

.sidebar[data-color="rose"] li.active>a {
  background-color: #e91e63;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4);
}

.sidebar[data-color="white"] li.active>a {
  background-color: #fff;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 255, 255, 0.4);
}

.sidebar[data-color="white"] .nav .nav-item.active>a:not([data-toggle="collapse"]) {
  color: #3C4858;
  opacity: 1;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(60, 72, 88, 0.4);
}

.sidebar[data-color="white"] .nav .nav-item.active>a:not([data-toggle="collapse"]) i {
  color: rgba(60, 72, 88, 0.8);
}

.sidebar[data-background-color="red"] .nav .nav-item .nav-link {
  color: #fff;
}

.sidebar[data-background-color="red"] .nav .nav-item i {
  color: rgba(255, 255, 255, 0.8);
}

.sidebar[data-background-color="red"] .nav .nav-item.active [data-toggle="collapse"],
.sidebar[data-background-color="red"] .nav .nav-item:hover [data-toggle="collapse"] {
  color: #fff;
}

.sidebar[data-background-color="red"] .nav .nav-item.active [data-toggle="collapse"] i,
.sidebar[data-background-color="red"] .nav .nav-item:hover [data-toggle="collapse"] i {
  color: rgba(255, 255, 255, 0.8);
}

.sidebar[data-background-color="red"] .user a {
  color: #fff;
}

.sidebar[data-background-color="red"] .simple-text {
  color: #fff;
}

.sidebar[data-background-color="red"] .sidebar-background:after {
  background: #f44336;
  opacity: .8;
}

.sidebar[data-background-color="red"] .user:after,
.sidebar[data-background-color="red"] .logo:after,
.sidebar[data-background-color="red"] .nav li.separator:after {
  background-color: rgba(255, 255, 255, 0.3);
}

.sidebar[data-background-color="red"] .nav li:hover:not(.active)>a,
.sidebar[data-background-color="red"] .nav li.active>[data-toggle="collapse"] {
  background-color: rgba(255, 255, 255, 0.1);
}

.sidebar[data-image]:after,
.sidebar.has-image:after {
  opacity: .77;
}

.off-canvas-sidebar .navbar-collapse .nav>li>a,
.off-canvas-sidebar .navbar-collapse .nav>li>a:hover {
  color: #fff;
  margin: 0 15px;
}

.off-canvas-sidebar .navbar-collapse .nav>li>a:focus,
.off-canvas-sidebar .navbar-collapse .nav>li>a:hover {
  background: rgba(200, 200, 200, 0.2);
}

.main-panel {
  position: relative;
  float: right;
  width: calc(100% - 260px);
  transition: 0.33s, cubic-bezier(0.685, 0.0473, 0.346, 1);
}

.main-panel>.content {
  margin-top: 70px;
  padding: 30px 15px;
  min-height: calc(100vh - 123px);
}

.main-panel>.footer {
  border-top: 1px solid #e7e7e7;
}

.main-panel>.navbar {
  margin-bottom: 0;
}

.main-panel .header {
  margin-bottom: 30px;
}

.main-panel .header .title {
  margin-top: 10px;
  margin-bottom: 10px;
}

.perfect-scrollbar-on .sidebar,
.perfect-scrollbar-on .main-panel {
  height: 100%;
  max-height: 100%;
}

.sidebar,
.main-panel,
.sidebar-wrapper {
  -webkit-transition-property: top, bottom, width;
  transition-property: top, bottom, width;
  -webkit-transition-duration: .2s, .2s, .35s;
  transition-duration: .2s, .2s, .35s;
  -webkit-transition-timing-function: linear, linear, ease;
  transition-timing-function: linear, linear, ease;
  -webkit-overflow-scrolling: touch;
}

.visible-on-sidebar-regular {
  display: inline-block !important;
}

.visible-on-sidebar-mini {
  display: none !important;
}

@media (min-width: 991px) {
  .sidebar-mini .visible-on-sidebar-regular {
    display: none !important;
  }

  .sidebar-mini .visible-on-sidebar-mini {
    display: inline-block !important;
  }

  .sidebar-mini .sidebar,
  .sidebar-mini .sidebar .sidebar-wrapper {
    width: 80px;
  }

  .sidebar-mini .main-panel {
    width: calc(100% - 80px);
  }

  .sidebar-mini .sidebar {
    display: block;
    font-weight: 200;
    z-index: 9999;
  }

  .sidebar-mini .sidebar .logo a.logo-normal {
    opacity: 0;
    -webkit-transform: translate3d(-25px, 0, 0);
    -moz-transform: translate3d(-25px, 0, 0);
    -o-transform: translate3d(-25px, 0, 0);
    -ms-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0);
  }

  .sidebar-mini .sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .sidebar-mini .sidebar .sidebar-wrapper .user .user-info [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .sidebar-mini .sidebar .sidebar-wrapper .user .user-info>a>span,
  .sidebar-mini .sidebar .sidebar-wrapper>.nav li>a p {
    -webkit-transform: translate3d(-25px, 0, 0);
    -moz-transform: translate3d(-25px, 0, 0);
    -o-transform: translate3d(-25px, 0, 0);
    -ms-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0);
    opacity: 0;
  }

  .sidebar-mini .sidebar:hover {
    width: 260px;
  }

  .sidebar-mini .sidebar:hover .logo a.logo-normal {
    opacity: 1;
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
  }

  .sidebar-mini .sidebar:hover .sidebar-wrapper {
    width: 260px;
  }

  .sidebar-mini .sidebar:hover .sidebar-wrapper>.nav li>a p,
  .sidebar-mini .sidebar:hover .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .sidebar-mini .sidebar:hover .sidebar-wrapper .user .user-info [data-toggle="collapse"]~div>ul>li>a .sidebar-normal,
  .sidebar-mini .sidebar:hover .sidebar-wrapper .user .user-info>a>span {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    opacity: 1;
  }

  .sidebar .nav .nav-item.active-pro {
    position: absolute;
    width: 100%;
    bottom: 13px;
    left: 0;
  }
}

.fixed-plugin .dropdown .dropdown-menu {
  border-radius: 10px;
}

.fixed-plugin .dropdown .dropdown-menu li.adjustments-line {
  border-bottom: 1px solid #ddd;
}

.fixed-plugin .dropdown .dropdown-menu li {
  padding: 5px 2px !important;
}

.fixed-plugin .dropdown .dropdown-menu .adjustments-line .bootstrap-switch {
  position: absolute;
  right: 10px !important;
}

.fixed-plugin .dropdown .dropdown-menu .adjustments-line label {
  margin-bottom: .1rem !important;
}

.fixed-plugin li>a,
.fixed-plugin .badge {
  transition: all .34s;
  -webkit-transition: all .34s;
  -moz-transition: all .34s;
}

.fixed-plugin {
  position: fixed;
  top: 115px;
  right: 0;
  width: 64px;
  background: rgba(0, 0, 0, 0.3);
  z-index: 3;
  border-radius: 8px 0 0 8px;
  text-align: center;
}

.fixed-plugin .fa-cog {
  color: #FFFFFF;
  padding: 10px;
  border-radius: 0 0 6px 6px;
  width: auto;
}

.fixed-plugin .dropdown-menu {
  right: 80px;
  left: auto;
  width: 290px;
  border-radius: 0.1875rem;
  padding: 0 10px;
}

.fixed-plugin .dropdown-menu:after,
.fixed-plugin .dropdown-menu:before {
  right: 10px;
  margin-left: auto;
  left: auto;
}

.fixed-plugin .fa-circle-thin {
  color: #FFFFFF;
}

.fixed-plugin .active .fa-circle-thin {
  color: #00bbff;
}

.fixed-plugin .dropdown-menu>.active>a,
.fixed-plugin .dropdown-menu>.active>a:hover,
.fixed-plugin .dropdown-menu>.active>a:focus {
  color: #777777;
  text-align: center;
}

.fixed-plugin img {
  border-radius: 0;
  width: 100%;
  height: 100px;
  margin: 0 auto;
}

.fixed-plugin .dropdown-menu li>a:hover,
.fixed-plugin .dropdown-menu li>a:focus {
  box-shadow: none;
}

.fixed-plugin .badge {
  border: 3px solid #FFFFFF;
  border-radius: 50%;
  cursor: pointer;
  display: inline-block;
  height: 23px;
  margin-right: 5px;
  position: relative;
  width: 23px;
  padding: 8px;
}

.fixed-plugin .badge.active,
.fixed-plugin .badge:hover {
  border-color: #00bbff;
}

.fixed-plugin .badge-black {
  background-color: #000;
}

.fixed-plugin .badge-azure {
  background-color: #2CA8FF;
}

.fixed-plugin .badge-green {
  background-color: #18ce0f;
}

.fixed-plugin .badge-orange {
  background-color: #f96332;
}

.fixed-plugin .badge-yellow {
  background-color: #FFB236;
}

.fixed-plugin .badge-danger {
  background-color: #f44336;
}

.fixed-plugin .badge-purple {
  background-color: #9368E9;
}

.fixed-plugin .badge-white {
  background-color: rgba(200, 200, 200, 0.2);
}

.fixed-plugin .badge-rose {
  background-color: #e91e63;
}

.fixed-plugin h5 {
  font-size: 14px;
  margin: 10px;
}

.fixed-plugin .dropdown-menu li {
  display: block;
  padding: 18px 2px;
  width: 25%;
  float: left;
}

.fixed-plugin li.adjustments-line,
.fixed-plugin li.header-title,
.fixed-plugin li.button-container {
  width: 100%;
  height: 50px;
  min-height: inherit;
}

.fixed-plugin li.button-container {
  height: auto;
}

.fixed-plugin li.button-container div {
  margin-bottom: 5px;
}

.fixed-plugin .btn {
  position: relative;
  padding: 12px 30px;
  margin: 0.3125rem 1px;
  font-size: .75rem;
  border-radius: 0.2rem;
  transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  will-change: box-shadow, transform;
}

.fixed-plugin .btn.btn-primary {
  color: #fff;
  background-color: #9c27b0;
  border-color: #9c27b0;
  box-shadow: 0 2px 2px 0 rgba(156, 39, 176, 0.14), 0 3px 1px -2px rgba(156, 39, 176, 0.2), 0 1px 5px 0 rgba(156, 39, 176, 0.12);
}

.fixed-plugin .btn.btn-primary:hover {
  color: #fff;
  background-color: #9124a3;
  border-color: #701c7e;
}

.fixed-plugin .btn.btn-primary:focus,
.fixed-plugin .btn.btn-primary.focus,
.fixed-plugin .btn.btn-primary:hover {
  color: #fff;
  background-color: #9124a3;
  border-color: #701c7e;
}

.fixed-plugin .btn.btn-primary:active,
.fixed-plugin .btn.btn-primary.active,
.open>.fixed-plugin .btn.btn-primary.dropdown-toggle,
.show>.fixed-plugin .btn.btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #9124a3;
  border-color: #701c7e;
  box-shadow: 0 2px 2px 0 rgba(156, 39, 176, 0.14), 0 3px 1px -2px rgba(156, 39, 176, 0.2), 0 1px 5px 0 rgba(156, 39, 176, 0.12);
}

.fixed-plugin .btn.btn-primary:active:hover,
.fixed-plugin .btn.btn-primary:active:focus,
.fixed-plugin .btn.btn-primary:active.focus,
.fixed-plugin .btn.btn-primary.active:hover,
.fixed-plugin .btn.btn-primary.active:focus,
.fixed-plugin .btn.btn-primary.active.focus,
.open>.fixed-plugin .btn.btn-primary.dropdown-toggle:hover,
.open>.fixed-plugin .btn.btn-primary.dropdown-toggle:focus,
.open>.fixed-plugin .btn.btn-primary.dropdown-toggle.focus,
.show>.fixed-plugin .btn.btn-primary.dropdown-toggle:hover,
.show>.fixed-plugin .btn.btn-primary.dropdown-toggle:focus,
.show>.fixed-plugin .btn.btn-primary.dropdown-toggle.focus {
  color: #fff;
  background-color: #9124a3;
  border-color: #3f1048;
}

.open>.fixed-plugin .btn.btn-primary.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #9c27b0;
}

.open>.fixed-plugin .btn.btn-primary.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #9124a3;
}

.fixed-plugin .btn.btn-primary.disabled:focus,
.fixed-plugin .btn.btn-primary.disabled.focus,
.fixed-plugin .btn.btn-primary:disabled:focus,
.fixed-plugin .btn.btn-primary:disabled.focus {
  background-color: #9c27b0;
  border-color: #9c27b0;
}

.fixed-plugin .btn.btn-primary.disabled:hover,
.fixed-plugin .btn.btn-primary:disabled:hover {
  background-color: #9c27b0;
  border-color: #9c27b0;
}

.fixed-plugin .btn.btn-primary:focus,
.fixed-plugin .btn.btn-primary:active,
.fixed-plugin .btn.btn-primary:hover {
  box-shadow: 0 14px 26px -12px rgba(156, 39, 176, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(156, 39, 176, 0.2);
}

.fixed-plugin .btn.btn-primary.btn-link {
  background-color: transparent;
  color: #9c27b0;
  box-shadow: none;
}

.fixed-plugin .btn.btn-primary.btn-link:hover,
.fixed-plugin .btn.btn-primary.btn-link:focus,
.fixed-plugin .btn.btn-primary.btn-link:active {
  background-color: transparent;
  color: #9c27b0;
}

.fixed-plugin .btn.btn-secondary {
  color: #333333;
  background-color: #fafafa;
  border-color: #ccc;
  box-shadow: 0 2px 2px 0 rgba(250, 250, 250, 0.14), 0 3px 1px -2px rgba(250, 250, 250, 0.2), 0 1px 5px 0 rgba(250, 250, 250, 0.12);
}

.fixed-plugin .btn.btn-secondary:hover {
  color: #333333;
  background-color: #f2f2f2;
  border-color: #adadad;
}

.fixed-plugin .btn.btn-secondary:focus,
.fixed-plugin .btn.btn-secondary.focus,
.fixed-plugin .btn.btn-secondary:hover {
  color: #333333;
  background-color: #f2f2f2;
  border-color: #adadad;
}

.fixed-plugin .btn.btn-secondary:active,
.fixed-plugin .btn.btn-secondary.active,
.open>.fixed-plugin .btn.btn-secondary.dropdown-toggle,
.show>.fixed-plugin .btn.btn-secondary.dropdown-toggle {
  color: #333333;
  background-color: #f2f2f2;
  border-color: #adadad;
  box-shadow: 0 2px 2px 0 rgba(250, 250, 250, 0.14), 0 3px 1px -2px rgba(250, 250, 250, 0.2), 0 1px 5px 0 rgba(250, 250, 250, 0.12);
}

.fixed-plugin .btn.btn-secondary:active:hover,
.fixed-plugin .btn.btn-secondary:active:focus,
.fixed-plugin .btn.btn-secondary:active.focus,
.fixed-plugin .btn.btn-secondary.active:hover,
.fixed-plugin .btn.btn-secondary.active:focus,
.fixed-plugin .btn.btn-secondary.active.focus,
.open>.fixed-plugin .btn.btn-secondary.dropdown-toggle:hover,
.open>.fixed-plugin .btn.btn-secondary.dropdown-toggle:focus,
.open>.fixed-plugin .btn.btn-secondary.dropdown-toggle.focus,
.show>.fixed-plugin .btn.btn-secondary.dropdown-toggle:hover,
.show>.fixed-plugin .btn.btn-secondary.dropdown-toggle:focus,
.show>.fixed-plugin .btn.btn-secondary.dropdown-toggle.focus {
  color: #333333;
  background-color: #f2f2f2;
  border-color: #8c8c8c;
}

.open>.fixed-plugin .btn.btn-secondary.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #fafafa;
}

.open>.fixed-plugin .btn.btn-secondary.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #f2f2f2;
}

.fixed-plugin .btn.btn-secondary.disabled:focus,
.fixed-plugin .btn.btn-secondary.disabled.focus,
.fixed-plugin .btn.btn-secondary:disabled:focus,
.fixed-plugin .btn.btn-secondary:disabled.focus {
  background-color: #fafafa;
  border-color: #ccc;
}

.fixed-plugin .btn.btn-secondary.disabled:hover,
.fixed-plugin .btn.btn-secondary:disabled:hover {
  background-color: #fafafa;
  border-color: #ccc;
}

.fixed-plugin .btn.btn-secondary:focus,
.fixed-plugin .btn.btn-secondary:active,
.fixed-plugin .btn.btn-secondary:hover {
  box-shadow: 0 14px 26px -12px rgba(250, 250, 250, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(250, 250, 250, 0.2);
}

.fixed-plugin .btn.btn-secondary.btn-link {
  background-color: transparent;
  color: #fafafa;
  box-shadow: none;
}

.fixed-plugin .btn.btn-secondary.btn-link:hover,
.fixed-plugin .btn.btn-secondary.btn-link:focus,
.fixed-plugin .btn.btn-secondary.btn-link:active {
  background-color: transparent;
  color: #fafafa;
}

.fixed-plugin .btn.btn-info {
  color: #fff;
  background-color: #00bcd4;
  border-color: #00bcd4;
  box-shadow: 0 2px 2px 0 rgba(0, 188, 212, 0.14), 0 3px 1px -2px rgba(0, 188, 212, 0.2), 0 1px 5px 0 rgba(0, 188, 212, 0.12);
}

.fixed-plugin .btn.btn-info:hover {
  color: #fff;
  background-color: #00aec5;
  border-color: #008697;
}

.fixed-plugin .btn.btn-info:focus,
.fixed-plugin .btn.btn-info.focus,
.fixed-plugin .btn.btn-info:hover {
  color: #fff;
  background-color: #00aec5;
  border-color: #008697;
}

.fixed-plugin .btn.btn-info:active,
.fixed-plugin .btn.btn-info.active,
.open>.fixed-plugin .btn.btn-info.dropdown-toggle,
.show>.fixed-plugin .btn.btn-info.dropdown-toggle {
  color: #fff;
  background-color: #00aec5;
  border-color: #008697;
  box-shadow: 0 2px 2px 0 rgba(0, 188, 212, 0.14), 0 3px 1px -2px rgba(0, 188, 212, 0.2), 0 1px 5px 0 rgba(0, 188, 212, 0.12);
}

.fixed-plugin .btn.btn-info:active:hover,
.fixed-plugin .btn.btn-info:active:focus,
.fixed-plugin .btn.btn-info:active.focus,
.fixed-plugin .btn.btn-info.active:hover,
.fixed-plugin .btn.btn-info.active:focus,
.fixed-plugin .btn.btn-info.active.focus,
.open>.fixed-plugin .btn.btn-info.dropdown-toggle:hover,
.open>.fixed-plugin .btn.btn-info.dropdown-toggle:focus,
.open>.fixed-plugin .btn.btn-info.dropdown-toggle.focus,
.show>.fixed-plugin .btn.btn-info.dropdown-toggle:hover,
.show>.fixed-plugin .btn.btn-info.dropdown-toggle:focus,
.show>.fixed-plugin .btn.btn-info.dropdown-toggle.focus {
  color: #fff;
  background-color: #00aec5;
  border-color: #004b55;
}

.open>.fixed-plugin .btn.btn-info.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #00bcd4;
}

.open>.fixed-plugin .btn.btn-info.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #00aec5;
}

.fixed-plugin .btn.btn-info.disabled:focus,
.fixed-plugin .btn.btn-info.disabled.focus,
.fixed-plugin .btn.btn-info:disabled:focus,
.fixed-plugin .btn.btn-info:disabled.focus {
  background-color: #00bcd4;
  border-color: #00bcd4;
}

.fixed-plugin .btn.btn-info.disabled:hover,
.fixed-plugin .btn.btn-info:disabled:hover {
  background-color: #00bcd4;
  border-color: #00bcd4;
}

.fixed-plugin .btn.btn-info:focus,
.fixed-plugin .btn.btn-info:active,
.fixed-plugin .btn.btn-info:hover {
  box-shadow: 0 14px 26px -12px rgba(0, 188, 212, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 188, 212, 0.2);
}

.fixed-plugin .btn.btn-info.btn-link {
  background-color: transparent;
  color: #00bcd4;
  box-shadow: none;
}

.fixed-plugin .btn.btn-info.btn-link:hover,
.fixed-plugin .btn.btn-info.btn-link:focus,
.fixed-plugin .btn.btn-info.btn-link:active {
  background-color: transparent;
  color: #00bcd4;
}

.fixed-plugin .btn.btn-success {
  color: #fff;
  background-color: #4caf50;
  border-color: #4caf50;
  box-shadow: 0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12);
}

.fixed-plugin .btn.btn-success:hover {
  color: #fff;
  background-color: #47a44b;
  border-color: #39843c;
}

.fixed-plugin .btn.btn-success:focus,
.fixed-plugin .btn.btn-success.focus,
.fixed-plugin .btn.btn-success:hover {
  color: #fff;
  background-color: #47a44b;
  border-color: #39843c;
}

.fixed-plugin .btn.btn-success:active,
.fixed-plugin .btn.btn-success.active,
.open>.fixed-plugin .btn.btn-success.dropdown-toggle,
.show>.fixed-plugin .btn.btn-success.dropdown-toggle {
  color: #fff;
  background-color: #47a44b;
  border-color: #39843c;
  box-shadow: 0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12);
}

.fixed-plugin .btn.btn-success:active:hover,
.fixed-plugin .btn.btn-success:active:focus,
.fixed-plugin .btn.btn-success:active.focus,
.fixed-plugin .btn.btn-success.active:hover,
.fixed-plugin .btn.btn-success.active:focus,
.fixed-plugin .btn.btn-success.active.focus,
.open>.fixed-plugin .btn.btn-success.dropdown-toggle:hover,
.open>.fixed-plugin .btn.btn-success.dropdown-toggle:focus,
.open>.fixed-plugin .btn.btn-success.dropdown-toggle.focus,
.show>.fixed-plugin .btn.btn-success.dropdown-toggle:hover,
.show>.fixed-plugin .btn.btn-success.dropdown-toggle:focus,
.show>.fixed-plugin .btn.btn-success.dropdown-toggle.focus {
  color: #fff;
  background-color: #47a44b;
  border-color: #255627;
}

.open>.fixed-plugin .btn.btn-success.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #4caf50;
}

.open>.fixed-plugin .btn.btn-success.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #47a44b;
}

.fixed-plugin .btn.btn-success.disabled:focus,
.fixed-plugin .btn.btn-success.disabled.focus,
.fixed-plugin .btn.btn-success:disabled:focus,
.fixed-plugin .btn.btn-success:disabled.focus {
  background-color: #4caf50;
  border-color: #4caf50;
}

.fixed-plugin .btn.btn-success.disabled:hover,
.fixed-plugin .btn.btn-success:disabled:hover {
  background-color: #4caf50;
  border-color: #4caf50;
}

.fixed-plugin .btn.btn-success:focus,
.fixed-plugin .btn.btn-success:active,
.fixed-plugin .btn.btn-success:hover {
  box-shadow: 0 14px 26px -12px rgba(76, 175, 80, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(76, 175, 80, 0.2);
}

.fixed-plugin .btn.btn-success.btn-link {
  background-color: transparent;
  color: #4caf50;
  box-shadow: none;
}

.fixed-plugin .btn.btn-success.btn-link:hover,
.fixed-plugin .btn.btn-success.btn-link:focus,
.fixed-plugin .btn.btn-success.btn-link:active {
  background-color: transparent;
  color: #4caf50;
}

.fixed-plugin .btn.btn-warning {
  color: #fff;
  background-color: #ff9800;
  border-color: #ff9800;
  box-shadow: 0 2px 2px 0 rgba(255, 152, 0, 0.14), 0 3px 1px -2px rgba(255, 152, 0, 0.2), 0 1px 5px 0 rgba(255, 152, 0, 0.12);
}

.fixed-plugin .btn.btn-warning:hover {
  color: #fff;
  background-color: #f08f00;
  border-color: #c27400;
}

.fixed-plugin .btn.btn-warning:focus,
.fixed-plugin .btn.btn-warning.focus,
.fixed-plugin .btn.btn-warning:hover {
  color: #fff;
  background-color: #f08f00;
  border-color: #c27400;
}

.fixed-plugin .btn.btn-warning:active,
.fixed-plugin .btn.btn-warning.active,
.open>.fixed-plugin .btn.btn-warning.dropdown-toggle,
.show>.fixed-plugin .btn.btn-warning.dropdown-toggle {
  color: #fff;
  background-color: #f08f00;
  border-color: #c27400;
  box-shadow: 0 2px 2px 0 rgba(255, 152, 0, 0.14), 0 3px 1px -2px rgba(255, 152, 0, 0.2), 0 1px 5px 0 rgba(255, 152, 0, 0.12);
}

.fixed-plugin .btn.btn-warning:active:hover,
.fixed-plugin .btn.btn-warning:active:focus,
.fixed-plugin .btn.btn-warning:active.focus,
.fixed-plugin .btn.btn-warning.active:hover,
.fixed-plugin .btn.btn-warning.active:focus,
.fixed-plugin .btn.btn-warning.active.focus,
.open>.fixed-plugin .btn.btn-warning.dropdown-toggle:hover,
.open>.fixed-plugin .btn.btn-warning.dropdown-toggle:focus,
.open>.fixed-plugin .btn.btn-warning.dropdown-toggle.focus,
.show>.fixed-plugin .btn.btn-warning.dropdown-toggle:hover,
.show>.fixed-plugin .btn.btn-warning.dropdown-toggle:focus,
.show>.fixed-plugin .btn.btn-warning.dropdown-toggle.focus {
  color: #fff;
  background-color: #f08f00;
  border-color: #804c00;
}

.open>.fixed-plugin .btn.btn-warning.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #ff9800;
}

.open>.fixed-plugin .btn.btn-warning.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #f08f00;
}

.fixed-plugin .btn.btn-warning.disabled:focus,
.fixed-plugin .btn.btn-warning.disabled.focus,
.fixed-plugin .btn.btn-warning:disabled:focus,
.fixed-plugin .btn.btn-warning:disabled.focus {
  background-color: #ff9800;
  border-color: #ff9800;
}

.fixed-plugin .btn.btn-warning.disabled:hover,
.fixed-plugin .btn.btn-warning:disabled:hover {
  background-color: #ff9800;
  border-color: #ff9800;
}

.fixed-plugin .btn.btn-warning:focus,
.fixed-plugin .btn.btn-warning:active,
.fixed-plugin .btn.btn-warning:hover {
  box-shadow: 0 14px 26px -12px rgba(255, 152, 0, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(255, 152, 0, 0.2);
}

.fixed-plugin .btn.btn-warning.btn-link {
  background-color: transparent;
  color: #ff9800;
  box-shadow: none;
}

.fixed-plugin .btn.btn-warning.btn-link:hover,
.fixed-plugin .btn.btn-warning.btn-link:focus,
.fixed-plugin .btn.btn-warning.btn-link:active {
  background-color: transparent;
  color: #ff9800;
}

.fixed-plugin .btn.btn-danger {
  color: #fff;
  background-color: #f44336;
  border-color: #f44336;
  box-shadow: 0 2px 2px 0 rgba(244, 67, 54, 0.14), 0 3px 1px -2px rgba(244, 67, 54, 0.2), 0 1px 5px 0 rgba(244, 67, 54, 0.12);
}

.fixed-plugin .btn.btn-danger:hover {
  color: #fff;
  background-color: #f33527;
  border-color: #e11b0c;
}

.fixed-plugin .btn.btn-danger:focus,
.fixed-plugin .btn.btn-danger.focus,
.fixed-plugin .btn.btn-danger:hover {
  color: #fff;
  background-color: #f33527;
  border-color: #e11b0c;
}

.fixed-plugin .btn.btn-danger:active,
.fixed-plugin .btn.btn-danger.active,
.open>.fixed-plugin .btn.btn-danger.dropdown-toggle,
.show>.fixed-plugin .btn.btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #f33527;
  border-color: #e11b0c;
  box-shadow: 0 2px 2px 0 rgba(244, 67, 54, 0.14), 0 3px 1px -2px rgba(244, 67, 54, 0.2), 0 1px 5px 0 rgba(244, 67, 54, 0.12);
}

.fixed-plugin .btn.btn-danger:active:hover,
.fixed-plugin .btn.btn-danger:active:focus,
.fixed-plugin .btn.btn-danger:active.focus,
.fixed-plugin .btn.btn-danger.active:hover,
.fixed-plugin .btn.btn-danger.active:focus,
.fixed-plugin .btn.btn-danger.active.focus,
.open>.fixed-plugin .btn.btn-danger.dropdown-toggle:hover,
.open>.fixed-plugin .btn.btn-danger.dropdown-toggle:focus,
.open>.fixed-plugin .btn.btn-danger.dropdown-toggle.focus,
.show>.fixed-plugin .btn.btn-danger.dropdown-toggle:hover,
.show>.fixed-plugin .btn.btn-danger.dropdown-toggle:focus,
.show>.fixed-plugin .btn.btn-danger.dropdown-toggle.focus {
  color: #fff;
  background-color: #f33527;
  border-color: #a21309;
}

.open>.fixed-plugin .btn.btn-danger.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #f44336;
}

.open>.fixed-plugin .btn.btn-danger.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #f33527;
}

.fixed-plugin .btn.btn-danger.disabled:focus,
.fixed-plugin .btn.btn-danger.disabled.focus,
.fixed-plugin .btn.btn-danger:disabled:focus,
.fixed-plugin .btn.btn-danger:disabled.focus {
  background-color: #f44336;
  border-color: #f44336;
}

.fixed-plugin .btn.btn-danger.disabled:hover,
.fixed-plugin .btn.btn-danger:disabled:hover {
  background-color: #f44336;
  border-color: #f44336;
}

.fixed-plugin .btn.btn-danger:focus,
.fixed-plugin .btn.btn-danger:active,
.fixed-plugin .btn.btn-danger:hover {
  box-shadow: 0 14px 26px -12px rgba(244, 67, 54, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(244, 67, 54, 0.2);
}

.fixed-plugin .btn.btn-danger.btn-link {
  background-color: transparent;
  color: #f44336;
  box-shadow: none;
}

.fixed-plugin .btn.btn-danger.btn-link:hover,
.fixed-plugin .btn.btn-danger.btn-link:focus,
.fixed-plugin .btn.btn-danger.btn-link:active {
  background-color: transparent;
  color: #f44336;
}

.fixed-plugin .btn.btn-rose {
  color: #fff;
  background-color: #e91e63;
  border-color: #e91e63;
  box-shadow: 0 2px 2px 0 rgba(233, 30, 99, 0.14), 0 3px 1px -2px rgba(233, 30, 99, 0.2), 0 1px 5px 0 rgba(233, 30, 99, 0.12);
}

.fixed-plugin .btn.btn-rose:hover {
  color: #fff;
  background-color: #ea2c6d;
  border-color: #b8124a;
}

.fixed-plugin .btn.btn-rose:focus,
.fixed-plugin .btn.btn-rose.focus,
.fixed-plugin .btn.btn-rose:hover {
  color: #fff;
  background-color: #ea2c6d;
  border-color: #b8124a;
}

.fixed-plugin .btn.btn-rose:active,
.fixed-plugin .btn.btn-rose.active,
.open>.fixed-plugin .btn.btn-rose.dropdown-toggle,
.show>.fixed-plugin .btn.btn-rose.dropdown-toggle {
  color: #fff;
  background-color: #ea2c6d;
  border-color: #b8124a;
  box-shadow: 0 2px 2px 0 rgba(233, 30, 99, 0.14), 0 3px 1px -2px rgba(233, 30, 99, 0.2), 0 1px 5px 0 rgba(233, 30, 99, 0.12);
}

.fixed-plugin .btn.btn-rose:active:hover,
.fixed-plugin .btn.btn-rose:active:focus,
.fixed-plugin .btn.btn-rose:active.focus,
.fixed-plugin .btn.btn-rose.active:hover,
.fixed-plugin .btn.btn-rose.active:focus,
.fixed-plugin .btn.btn-rose.active.focus,
.open>.fixed-plugin .btn.btn-rose.dropdown-toggle:hover,
.open>.fixed-plugin .btn.btn-rose.dropdown-toggle:focus,
.open>.fixed-plugin .btn.btn-rose.dropdown-toggle.focus,
.show>.fixed-plugin .btn.btn-rose.dropdown-toggle:hover,
.show>.fixed-plugin .btn.btn-rose.dropdown-toggle:focus,
.show>.fixed-plugin .btn.btn-rose.dropdown-toggle.focus {
  color: #fff;
  background-color: #ea2c6d;
  border-color: #7b0c32;
}

.open>.fixed-plugin .btn.btn-rose.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #e91e63;
}

.open>.fixed-plugin .btn.btn-rose.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #ea2c6d;
}

.fixed-plugin .btn.btn-rose.disabled:focus,
.fixed-plugin .btn.btn-rose.disabled.focus,
.fixed-plugin .btn.btn-rose:disabled:focus,
.fixed-plugin .btn.btn-rose:disabled.focus {
  background-color: #e91e63;
  border-color: #e91e63;
}

.fixed-plugin .btn.btn-rose.disabled:hover,
.fixed-plugin .btn.btn-rose:disabled:hover {
  background-color: #e91e63;
  border-color: #e91e63;
}

.fixed-plugin .btn.btn-rose:focus,
.fixed-plugin .btn.btn-rose:active,
.fixed-plugin .btn.btn-rose:hover {
  box-shadow: 0 14px 26px -12px rgba(233, 30, 99, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(233, 30, 99, 0.2);
}

.fixed-plugin .btn.btn-rose.btn-link {
  background-color: transparent;
  color: #e91e63;
  box-shadow: none;
}

.fixed-plugin .btn.btn-rose.btn-link:hover,
.fixed-plugin .btn.btn-rose.btn-link:focus,
.fixed-plugin .btn.btn-rose.btn-link:active {
  background-color: transparent;
  color: #e91e63;
}

.fixed-plugin .btn,
.fixed-plugin .btn.btn-default {
  color: #fff;
  background-color: #999999;
  border-color: #999999;
  box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12);
}

.fixed-plugin .btn:hover,
.fixed-plugin .btn.btn-default:hover {
  color: #fff;
  background-color: #919191;
  border-color: #7a7a7a;
}

.fixed-plugin .btn:focus,
.fixed-plugin .btn.focus,
.fixed-plugin .btn:hover,
.fixed-plugin .btn.btn-default:focus,
.fixed-plugin .btn.btn-default.focus,
.fixed-plugin .btn.btn-default:hover {
  color: #fff;
  background-color: #919191;
  border-color: #7a7a7a;
}

.fixed-plugin .btn:active,
.fixed-plugin .btn.active,
.open>.fixed-plugin .btn.dropdown-toggle,
.show>.fixed-plugin .btn.dropdown-toggle,
.fixed-plugin .btn.btn-default:active,
.fixed-plugin .btn.btn-default.active,
.open>.fixed-plugin .btn.btn-default.dropdown-toggle,
.show>.fixed-plugin .btn.btn-default.dropdown-toggle {
  color: #fff;
  background-color: #919191;
  border-color: #7a7a7a;
  box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12);
}

.fixed-plugin .btn:active:hover,
.fixed-plugin .btn:active:focus,
.fixed-plugin .btn:active.focus,
.fixed-plugin .btn.active:hover,
.fixed-plugin .btn.active:focus,
.fixed-plugin .btn.active.focus,
.open>.fixed-plugin .btn.dropdown-toggle:hover,
.open>.fixed-plugin .btn.dropdown-toggle:focus,
.open>.fixed-plugin .btn.dropdown-toggle.focus,
.show>.fixed-plugin .btn.dropdown-toggle:hover,
.show>.fixed-plugin .btn.dropdown-toggle:focus,
.show>.fixed-plugin .btn.dropdown-toggle.focus,
.fixed-plugin .btn.btn-default:active:hover,
.fixed-plugin .btn.btn-default:active:focus,
.fixed-plugin .btn.btn-default:active.focus,
.fixed-plugin .btn.btn-default.active:hover,
.fixed-plugin .btn.btn-default.active:focus,
.fixed-plugin .btn.btn-default.active.focus,
.open>.fixed-plugin .btn.btn-default.dropdown-toggle:hover,
.open>.fixed-plugin .btn.btn-default.dropdown-toggle:focus,
.open>.fixed-plugin .btn.btn-default.dropdown-toggle.focus,
.show>.fixed-plugin .btn.btn-default.dropdown-toggle:hover,
.show>.fixed-plugin .btn.btn-default.dropdown-toggle:focus,
.show>.fixed-plugin .btn.btn-default.dropdown-toggle.focus {
  color: #fff;
  background-color: #919191;
  border-color: #595959;
}

.open>.fixed-plugin .btn.dropdown-toggle.bmd-btn-icon,
.open>.fixed-plugin .btn.btn-default.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #999999;
}

.open>.fixed-plugin .btn.dropdown-toggle.bmd-btn-icon:hover,
.open>.fixed-plugin .btn.btn-default.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #919191;
}

.fixed-plugin .btn.disabled:focus,
.fixed-plugin .btn.disabled.focus,
.fixed-plugin .btn:disabled:focus,
.fixed-plugin .btn:disabled.focus,
.fixed-plugin .btn.btn-default.disabled:focus,
.fixed-plugin .btn.btn-default.disabled.focus,
.fixed-plugin .btn.btn-default:disabled:focus,
.fixed-plugin .btn.btn-default:disabled.focus {
  background-color: #999999;
  border-color: #999999;
}

.fixed-plugin .btn.disabled:hover,
.fixed-plugin .btn:disabled:hover,
.fixed-plugin .btn.btn-default.disabled:hover,
.fixed-plugin .btn.btn-default:disabled:hover {
  background-color: #999999;
  border-color: #999999;
}

.fixed-plugin .btn:focus,
.fixed-plugin .btn:active,
.fixed-plugin .btn:hover,
.fixed-plugin .btn.btn-default:focus,
.fixed-plugin .btn.btn-default:active,
.fixed-plugin .btn.btn-default:hover {
  box-shadow: 0 14px 26px -12px rgba(153, 153, 153, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(153, 153, 153, 0.2);
}

.fixed-plugin .btn.btn-link,
.fixed-plugin .btn.btn-default.btn-link {
  background-color: transparent;
  color: #999999;
  box-shadow: none;
}

.fixed-plugin .btn.btn-link:hover,
.fixed-plugin .btn.btn-link:focus,
.fixed-plugin .btn.btn-link:active,
.fixed-plugin .btn.btn-default.btn-link:hover,
.fixed-plugin .btn.btn-default.btn-link:focus,
.fixed-plugin .btn.btn-default.btn-link:active {
  background-color: transparent;
  color: #999999;
}

.fixed-plugin .btn:focus,
.fixed-plugin .btn.focus,
.fixed-plugin .btn:active:focus,
.fixed-plugin .btn:active.focus,
.fixed-plugin .btn.active:focus,
.fixed-plugin .btn.active.focus {
  outline: 0;
}

.fixed-plugin .btn.btn-round {
  border-radius: 30px;
}

.fixed-plugin .button-container .btn:not(.btn-facebook):not(.btn-twitter) {
  display: block;
}

.fixed-plugin .button-container.github-star {
  margin-left: 78px;
}

.fixed-plugin #sharrreTitle {
  text-align: center;
  padding: 10px 0;
  height: 50px;
}

.fixed-plugin li.header-title {
  height: 30px;
  line-height: 25px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  text-align: center;
}

.fixed-plugin .adjustments-line p {
  float: left;
  display: inline-block;
  margin-bottom: 0;
  font-size: 1em;
  color: #3C4858;
  padding-top: 0px;
}

.fixed-plugin .adjustments-line a .badge-colors {
  position: relative;
  top: -2px;
}

.fixed-plugin .adjustments-line .togglebutton {
  padding-right: 7px;
}

.fixed-plugin .adjustments-line .togglebutton .toggle {
  margin-right: 0;
}

.fixed-plugin .dropdown-menu>li.adjustments-line>a {
  padding-right: 0;
  padding-left: 0;
  /*border-bottom: 1px solid #ddd;*/
  border-radius: 0;
  margin: 0;
}

.fixed-plugin .dropdown-menu>li>a.img-holder {
  font-size: 16px;
  text-align: center;
  border-radius: 10px;
  background-color: #FFF;
  border: 3px solid #FFF;
  padding-left: 0;
  padding-right: 0;
  opacity: 1;
  cursor: pointer;
  display: block;
  max-height: 100px;
  overflow: hidden;
  padding: 0;
  min-width: 25%;
}

.fixed-plugin .dropdown-menu>li>a.switch-trigger:hover,
.fixed-plugin .dropdown-menu>li>a.switch-trigger:focus {
  background-color: transparent;
}

.fixed-plugin .dropdown-menu>li:hover>a.img-holder,
.fixed-plugin .dropdown-menu>li:focus>a.img-holder {
  border-color: rgba(0, 187, 255, 0.53);
}

.fixed-plugin .dropdown-menu>.active>a.img-holder,
.fixed-plugin .dropdown-menu>.active>a.img-holder {
  border-color: #00bbff;
  background-color: #FFFFFF;
}

.fixed-plugin .dropdown-menu>li>a img {
  margin-top: auto;
}

.fixed-plugin .btn-social {
  width: 50%;
  display: block;
  width: 48%;
  float: left;
  font-weight: 600;
}

.fixed-plugin .btn-social i {
  margin-right: 5px;
}

.fixed-plugin .btn-social:first-child {
  margin-right: 2%;
}

.fixed-plugin .adjustments-line a:hover,
.fixed-plugin .adjustments-line a:focus,
.fixed-plugin .adjustments-line a {
  color: transparent;
}

.fixed-plugin .dropdown .dropdown-menu {
  top: -40px !important;
  opacity: 0;
  left: -303px !important;
  transform-origin: 100% 0;
}

.fixed-plugin .dropdown.show .dropdown-menu {
  opacity: 1;
  transform: scale(1);
}

.fixed-plugin .dropdown-menu:before,
.fixed-plugin .dropdown-menu:after {
  content: "";
  display: inline-block;
  position: absolute;
  top: 65px;
  width: 16px;
  transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
}

.fixed-plugin .dropdown-menu:before {
  border-bottom: 16px solid rgba(0, 0, 0, 0);
  border-left: 16px solid rgba(0, 0, 0, 0.2);
  border-top: 16px solid rgba(0, 0, 0, 0);
  right: -16px;
}

.fixed-plugin .dropdown-menu:after {
  border-bottom: 16px solid rgba(0, 0, 0, 0);
  border-left: 16px solid #fff;
  border-top: 16px solid rgba(0, 0, 0, 0);
  right: -15px;
}

.wrapper-full-page~.fixed-plugin .dropdown.open .dropdown-menu {
  -webkit-transform: translateY(-17%);
  -moz-transform: translateY(-17%);
  -o-transform: translateY(-17%);
  -ms-transform: translateY(-17%);
  transform: translateY(-17%);
}

.wrapper-full-page~.fixed-plugin .dropdown .dropdown-menu {
  -webkit-transform: translateY(-19%);
  -moz-transform: translateY(-19%);
  -o-transform: translateY(-19%);
  -ms-transform: translateY(-19%);
  transform: translateY(-19%);
}

.table>thead>tr>th {
  border-bottom-width: 1px;
  font-size: 1.0625rem;
  font-weight: 300;
}

.table .form-check {
  margin-top: 0;
}

.table .form-check .form-check-sign {
  top: -13px;
  left: 0;
  padding-right: 0;
}

.table .radio,
.table .checkbox {
  margin-top: 0;
  margin-bottom: 0;
  padding: 0;
  width: 15px;
}

.table .radio .icons,
.table .checkbox .icons {
  position: relative;
}

.table .flag img {
  max-width: 18px;
  margin-top: -2px;
}

.table>thead>tr>th,
.table>tbody>tr>th,
.table>tfoot>tr>th,
.table>thead>tr>td,
.table>tbody>tr>td,
.table>tfoot>tr>td {
  padding: 12px 8px;
  vertical-align: middle;
  border-color: #ddd;
}

.table thead tr th {
  font-size: 1.063rem;
}

.table .th-description {
  max-width: 150px;
}

.table .td-price {
  font-size: 26px;
  font-weight: 300;
  margin-top: 5px;
  text-align: right;
}

.table .td-total {
  font-weight: 500;
  font-size: 1.0625rem;
  padding-top: 20px;
  text-align: right;
}

.table .td-actions .btn {
  margin: 0px;
  padding: 5px;
}

.table>tbody>tr {
  position: relative;
}

.table-shopping>thead>tr>th {
  font-size: 0.75rem;
  text-transform: uppercase;
}

.table-shopping>tbody>tr>td {
  font-size: 14px;
}

.table-shopping>tbody>tr>td b {
  display: block;
  margin-bottom: 5px;
}

.table-shopping .td-name {
  font-weight: 400;
  font-size: 1.5em;
  line-height: 1.42857143;
}

.table-shopping .td-name small {
  color: #999999;
  font-size: 0.75em;
  font-weight: 300;
}

.table-shopping .td-number {
  font-weight: 300;
  font-size: 1.125rem;
}

.table-shopping .td-name {
  min-width: 200px;
}

.table-shopping .td-number {
  text-align: right;
  min-width: 150px;
}

.table-shopping .td-number small {
  margin-right: 3px;
}

.table-shopping .img-container {
  width: 120px;
  max-height: 160px;
  overflow: hidden;
  display: block;
}

.table-shopping .img-container img {
  width: 100%;
}

.table-inverse {
  color: rgba(255, 255, 255, 0.84);
}

.table thead th {
  font-size: 0.95rem;
  font-weight: 500;
  border-top-width: 0;
  border-bottom-width: 1px;
}

thead.thead-inverse th,
.table-inverse thead th {
  color: rgba(255, 255, 255, 0.54);
}

.table-inverse th,
.table-inverse td,
.table-inverse thead th {
  border-color: rgba(255, 255, 255, 0.06);
}

.table-striped>tbody>tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}

.table.table-hover tbody tr:hover {
  background-color: #f5f5f5;
}

.dataTable>thead>tr>th,
.dataTable>tbody>tr>th,
.dataTable>tfoot>tr>th,
.dataTable>thead>tr>td,
.dataTable>tbody>tr>td,
.dataTable>tfoot>tr>td {
  padding: 5px !important;
}

body {
  background-color: #eee;
  color: #3C4858;
  font-weight: 300;
}

legend {
  border-bottom: 0;
}

.serif-font {
  font-family: "Roboto Slab", "Times New Roman", serif;
}

* {
  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
  -webkit-tap-highlight-color: transparent;
}

*:focus {
  outline: 0;
}

a {
  color: #9c27b0;
}

a:hover,
a:focus {
  color: #89229b;
  text-decoration: none;
}

a.text-info:hover,
a.text-info:focus {
  color: #00a5bb;
}

a .material-icons {
  vertical-align: middle;
}

.form-check,
label {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}

/*           Animations              */
.animation-transition-general,
.sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a span,
.sidebar .sidebar-wrapper .user .user-info [data-toggle="collapse"]~div>ul>li>a span,
.sidebar .nav p {
  -webkit-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  transition: all 300ms linear;
}

.animation-transition-slow {
  -webkit-transition: all 370ms linear;
  -moz-transition: all 370ms linear;
  -o-transition: all 370ms linear;
  -ms-transition: all 370ms linear;
  transition: all 370ms linear;
}

.animation-transition-fast {
  -webkit-transition: all 150ms ease 0s;
  -moz-transition: all 150ms ease 0s;
  -o-transition: all 150ms ease 0s;
  -ms-transition: all 150ms ease 0s;
  transition: all 150ms ease 0s;
}

.caret,
.sidebar a {
  -webkit-transition: all 150ms ease-in;
  -moz-transition: all 150ms ease-in;
  -o-transition: all 150ms ease-in;
  -ms-transition: all 150ms ease-in;
  transition: all 150ms ease-in;
}

.offline-doc .navbar.navbar-transparent {
  padding-top: 25px;
  border-bottom: none;
}

.offline-doc .navbar.navbar-transparent .navbar-minimize {
  display: none;
}

.offline-doc .navbar.navbar-transparent .navbar-brand,
.offline-doc .navbar.navbar-transparent .collapse .navbar-nav .nav-link {
  color: #fff !important;
}

.offline-doc .footer {
  z-index: 3 !important;
  position: absolute;
  width: 100%;
  background: transparent;
  bottom: 0;
  color: #fff;
}

.offline-doc .page-header {
  display: flex;
  align-items: center;
}

.offline-doc .page-header .content-center {
  z-index: 3;
}

.offline-doc .page-header .content-center .brand .title {
  color: #fff;
}

.offline-doc .page-header:after {
  background-color: rgba(0, 0, 0, 0.5);
  content: "";
  display: block;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 2;
}

.bd-docs .bd-toc-item .bd-sidenav a span {
  float: right;
  margin-top: 5px;
  padding: 3px 7px;
  font-size: 8px;
  line-height: 9px;
  background-color: #9c27b0;
}

.bootstrap-datetimepicker-widget .timepicker .table-condesed .btn .ripple-container {
  width: 40px;
  height: 40px;
  margin: -11px 3px;
}

.off-canvas-sidebar .wrapper-full-page .page-header {
  padding: 15vh 0 !important;
}

html[dir="rtl"] .main-panel {
  float: left;
}

html[dir="rtl"] .sidebar,
html[dir="rtl"] .off-canvas-sidebar nav .navbar-collapse {
  text-align: right;
}

html[dir="rtl"] .sidebar {
  left: unset;
  right: 0;
}

html[dir="rtl"] .sidebar .nav {
  padding-right: 0;
}

html[dir="rtl"] .sidebar .nav i {
  float: right;
  margin-left: 15px;
  margin-right: unset;
}

html[dir="rtl"] .card.card-chart {
  direction: ltr;
}

html[dir="rtl"] .card.card-chart .card-title,
html[dir="rtl"] .card.card-chart .card-category {
  text-align: right;
}

html[dir="rtl"] .card .card-body,
html[dir="rtl"] .card .card-footer {
  direction: rtl;
}

html[dir="rtl"] .form-check .form-check-sign .check:before {
  margin-right: 10px;
}

.btn.btn-facebook {
  color: #ffffff;
  background-color: #3b5998;
  border-color: #3b5998;
  box-shadow: 0 2px 2px 0 rgba(59, 89, 152, 0.14), 0 3px 1px -2px rgba(59, 89, 152, 0.2), 0 1px 5px 0 rgba(59, 89, 152, 0.12);
}

.btn.btn-facebook:hover {
  color: #ffffff;
  background-color: #37538d;
  border-color: #2a3f6c;
}

.btn.btn-facebook:focus,
.btn.btn-facebook.focus,
.btn.btn-facebook:hover {
  color: #ffffff;
  background-color: #37538d;
  border-color: #2a3f6c;
}

.btn.btn-facebook:active,
.btn.btn-facebook.active,
.open>.btn.btn-facebook.dropdown-toggle,
.show>.btn.btn-facebook.dropdown-toggle {
  color: #ffffff;
  background-color: #37538d;
  border-color: #2a3f6c;
  box-shadow: 0 2px 2px 0 rgba(59, 89, 152, 0.14), 0 3px 1px -2px rgba(59, 89, 152, 0.2), 0 1px 5px 0 rgba(59, 89, 152, 0.12);
}

.btn.btn-facebook:active:hover,
.btn.btn-facebook:active:focus,
.btn.btn-facebook:active.focus,
.btn.btn-facebook.active:hover,
.btn.btn-facebook.active:focus,
.btn.btn-facebook.active.focus,
.open>.btn.btn-facebook.dropdown-toggle:hover,
.open>.btn.btn-facebook.dropdown-toggle:focus,
.open>.btn.btn-facebook.dropdown-toggle.focus,
.show>.btn.btn-facebook.dropdown-toggle:hover,
.show>.btn.btn-facebook.dropdown-toggle:focus,
.show>.btn.btn-facebook.dropdown-toggle.focus {
  color: #ffffff;
  background-color: #37538d;
  border-color: #17233c;
}

.open>.btn.btn-facebook.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #3b5998;
}

.open>.btn.btn-facebook.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #37538d;
}

.btn.btn-facebook.disabled:focus,
.btn.btn-facebook.disabled.focus,
.btn.btn-facebook:disabled:focus,
.btn.btn-facebook:disabled.focus {
  background-color: #3b5998;
  border-color: #3b5998;
}

.btn.btn-facebook.disabled:hover,
.btn.btn-facebook:disabled:hover {
  background-color: #3b5998;
  border-color: #3b5998;
}

.btn.btn-facebook:focus,
.btn.btn-facebook:active,
.btn.btn-facebook:hover {
  box-shadow: 0 14px 26px -12px rgba(59, 89, 152, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(59, 89, 152, 0.2);
}

.btn.btn-facebook.btn-link {
  background-color: transparent;
  color: #3b5998;
  box-shadow: none;
}

.btn.btn-facebook.btn-link:hover,
.btn.btn-facebook.btn-link:focus,
.btn.btn-facebook.btn-link:active {
  background-color: transparent;
  color: #3b5998;
}

.btn.btn-twitter {
  color: #ffffff;
  background-color: #55acee;
  border-color: #55acee;
  box-shadow: 0 2px 2px 0 rgba(85, 172, 238, 0.14), 0 3px 1px -2px rgba(85, 172, 238, 0.2), 0 1px 5px 0 rgba(85, 172, 238, 0.12);
}

.btn.btn-twitter:hover {
  color: #ffffff;
  background-color: #47a5ed;
  border-color: #1d91e8;
}

.btn.btn-twitter:focus,
.btn.btn-twitter.focus,
.btn.btn-twitter:hover {
  color: #ffffff;
  background-color: #47a5ed;
  border-color: #1d91e8;
}

.btn.btn-twitter:active,
.btn.btn-twitter.active,
.open>.btn.btn-twitter.dropdown-toggle,
.show>.btn.btn-twitter.dropdown-toggle {
  color: #ffffff;
  background-color: #47a5ed;
  border-color: #1d91e8;
  box-shadow: 0 2px 2px 0 rgba(85, 172, 238, 0.14), 0 3px 1px -2px rgba(85, 172, 238, 0.2), 0 1px 5px 0 rgba(85, 172, 238, 0.12);
}

.btn.btn-twitter:active:hover,
.btn.btn-twitter:active:focus,
.btn.btn-twitter:active.focus,
.btn.btn-twitter.active:hover,
.btn.btn-twitter.active:focus,
.btn.btn-twitter.active.focus,
.open>.btn.btn-twitter.dropdown-toggle:hover,
.open>.btn.btn-twitter.dropdown-toggle:focus,
.open>.btn.btn-twitter.dropdown-toggle.focus,
.show>.btn.btn-twitter.dropdown-toggle:hover,
.show>.btn.btn-twitter.dropdown-toggle:focus,
.show>.btn.btn-twitter.dropdown-toggle.focus {
  color: #ffffff;
  background-color: #47a5ed;
  border-color: #126db2;
}

.open>.btn.btn-twitter.dropdown-toggle.bmd-btn-icon {
  color: inherit;
  background-color: #55acee;
}

.open>.btn.btn-twitter.dropdown-toggle.bmd-btn-icon:hover {
  background-color: #47a5ed;
}

.btn.btn-twitter.disabled:focus,
.btn.btn-twitter.disabled.focus,
.btn.btn-twitter:disabled:focus,
.btn.btn-twitter:disabled.focus {
  background-color: #55acee;
  border-color: #55acee;
}

.btn.btn-twitter.disabled:hover,
.btn.btn-twitter:disabled:hover {
  background-color: #55acee;
  border-color: #55acee;
}

.btn.btn-twitter:focus,
.btn.btn-twitter:active,
.btn.btn-twitter:hover {
  box-shadow: 0 14px 26px -12px rgba(85, 172, 238, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(85, 172, 238, 0.2);
}

.btn.btn-twitter.btn-link {
  background-color: transparent;
  color: #55acee;
  box-shadow: none;
}

.btn.btn-twitter.btn-link:hover,
.btn.btn-twitter.btn-link:focus,
.btn.btn-twitter.btn-link:active {
  background-color: transparent;
  color: #55acee;
}

.card {
  border: 0;
  margin-bottom: 30px;
  margin-top: 30px;
  border-radius: 6px;
  color: #333333;
  background: #fff;
  width: 100%;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.card .card-category:not([class*="text-"]) {
  color: #999999;
}

.card .card-category {
  margin-top: 10px;
}

.card .card-category .material-icons {
  position: relative;
  top: 8px;
  line-height: 0;
}

.card .form-check {
  margin-top: 5px;
}

.card .card-title {
  margin-top: 0.625rem;
}

.card .card-title:last-child {
  margin-bottom: 0;
}

.card.no-shadow .card-header-image,
.card.no-shadow .card-header-image img {
  box-shadow: none !important;
}

.card .card-body,
.card .card-footer {
  padding: 0.9375rem 1.875rem;
}

.card .card-body+.card-footer {
  padding-top: 0rem;
  border: 0;
  border-radius: 6px;
}

.card .card-footer {
  display: flex;
  align-items: center;
  background-color: transparent;
  border: 0;
}

.card .card-footer .author,
.card .card-footer .stats {
  display: inline-flex;
}

.card .card-footer .stats {
  color: #999999;
}

.card .card-footer .stats .material-icons {
  position: relative;
  top: -10px;
  margin-right: 3px;
  margin-left: 3px;
  font-size: 18px;
}

.card.bmd-card-raised {
  box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
}

@media (min-width: 992px) {
  .card.bmd-card-flat {
    box-shadow: none;
  }
}

.card .card-header {
  border-bottom: none;
  background: transparent;
}

.card .card-header .title {
  color: #fff;
}

.card .card-header .nav-tabs {
  padding: 0;
}

.card .card-header.card-header-image {
  position: relative;
  padding: 0;
  z-index: 1;
  margin-left: 15px;
  margin-right: 15px;
  margin-top: -30px;
  border-radius: 6px;
}

.card .card-header.card-header-image img {
  width: 100%;
  border-radius: 6px;
  pointer-events: none;
  box-shadow: 0 5px 15px -8px rgba(0, 0, 0, 0.24), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card .card-header.card-header-image .card-title {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: #fff;
  font-size: 1.125rem;
  text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
}

.card .card-header.card-header-image .colored-shadow {
  transform: scale(0.94);
  top: 12px;
  filter: blur(12px);
  position: absolute;
  width: 100%;
  height: 100%;
  background-size: cover;
  z-index: -1;
  transition: opacity .45s;
  opacity: 0;
}

.card .card-header.card-header-image.no-shadow {
  box-shadow: none;
}

.card .card-header.card-header-image.no-shadow.shadow-normal {
  box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card .card-header.card-header-image.no-shadow .colored-shadow {
  display: none !important;
}

.card .card-header-primary .card-icon,
.card .card-header-primary .card-text,
.card .card-header-primary:not(.card-header-icon):not(.card-header-text),
.card.bg-primary,
.card.card-rotate.bg-primary .front,
.card.card-rotate.bg-primary .back {
background: #fe8c00;  
background: -webkit-linear-gradient(to left, #f83600, #fe8c00); 
background: linear-gradient(to left, #f83600, #fe8c00); 
}

.card .card-header-info .card-icon,
.card .card-header-info .card-text,
.card .card-header-info:not(.card-header-icon):not(.card-header-text),
.card.bg-info,
.card.card-rotate.bg-info .front,
.card.card-rotate.bg-info .back {
  background: linear-gradient(60deg, #26c6da, #00acc1);
}

.card .card-header-success .card-icon,
.card .card-header-success .card-text,
.card .card-header-success:not(.card-header-icon):not(.card-header-text),
.card.bg-success,
.card.card-rotate.bg-success .front,
.card.card-rotate.bg-success .back {
  background: linear-gradient(60deg, #66bb6a, #43a047);
}

.card .card-header-warning .card-icon,
.card .card-header-warning .card-text,
.card .card-header-warning:not(.card-header-icon):not(.card-header-text),
.card.bg-warning,
.card.card-rotate.bg-warning .front,
.card.card-rotate.bg-warning .back {
  background: linear-gradient(60deg, #ffa726, #fb8c00);
}

.card .card-header-danger .card-icon,
.card .card-header-danger .card-text,
.card .card-header-danger:not(.card-header-icon):not(.card-header-text),
.card.bg-danger,
.card.card-rotate.bg-danger .front,
.card.card-rotate.bg-danger .back {
  background: linear-gradient(60deg, #ef5350, #e53935);
}

.card .card-header-rose .card-icon,
.card .card-header-rose .card-text,
.card .card-header-rose:not(.card-header-icon):not(.card-header-text),
.card.bg-rose,
.card.card-rotate.bg-rose .front,
.card.card-rotate.bg-rose .back {
  background: linear-gradient(60deg, #ec407a, #d81b60);
}

.card .card-header-primary .card-icon,
.card .card-header-primary:not(.card-header-icon):not(.card-header-text),
.card .card-header-primary .card-text {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
}

.card .card-header-danger .card-icon,
.card .card-header-danger:not(.card-header-icon):not(.card-header-text),
.card .card-header-danger .card-text {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4);
}

.card .card-header-rose .card-icon,
.card .card-header-rose:not(.card-header-icon):not(.card-header-text),
.card .card-header-rose .card-text {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4);
}

.card .card-header-warning .card-icon,
.card .card-header-warning:not(.card-header-icon):not(.card-header-text),
.card .card-header-warning .card-text {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4);
}

.card .card-header-info .card-icon,
.card .card-header-info:not(.card-header-icon):not(.card-header-text),
.card .card-header-info .card-text {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4);
}

.card .card-header-success .card-icon,
.card .card-header-success:not(.card-header-icon):not(.card-header-text),
.card .card-header-success .card-text {
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4);
}

.card [class*="card-header-"],
.card[class*="bg-"] {
  color: #fff;
}

.card [class*="card-header-"] .card-title a,
.card [class*="card-header-"] .card-title,
.card [class*="card-header-"] .icon i,
.card[class*="bg-"] .card-title a,
.card[class*="bg-"] .card-title,
.card[class*="bg-"] .icon i {
  color: #fff;
}

.card [class*="card-header-"] .icon i,
.card[class*="bg-"] .icon i {
  border-color: rgba(255, 255, 255, 0.25);
}

.card [class*="card-header-"] .author a,
.card [class*="card-header-"] .stats,
.card [class*="card-header-"] .card-category,
.card [class*="card-header-"] .card-description,
.card[class*="bg-"] .author a,
.card[class*="bg-"] .stats,
.card[class*="bg-"] .card-category,
.card[class*="bg-"] .card-description {
  color: rgba(255, 255, 255, 0.8);
}

.card [class*="card-header-"] .author a:hover,
.card [class*="card-header-"] .author a:focus,
.card [class*="card-header-"] .author a:active,
.card[class*="bg-"] .author a:hover,
.card[class*="bg-"] .author a:focus,
.card[class*="bg-"] .author a:active {
  color: #fff;
}

.card .author .avatar {
  width: 30px;
  height: 30px;
  overflow: hidden;
  border-radius: 50%;
  margin-right: 5px;
}

.card .author a {
  color: #3C4858;
  text-decoration: none;
}

.card .author a .ripple-container {
  display: none;
}

.card .card-category-social .fa {
  font-size: 24px;
  position: relative;
  margin-top: -4px;
  top: 2px;
  margin-right: 5px;
}

.card .card-category-social .material-icons {
  position: relative;
  top: 5px;
}

.card[class*="bg-"],
.card[class*="bg-"] .card-body {
  border-radius: 6px;
}

.card[class*="bg-"] h1 small,
.card[class*="bg-"] h2 small,
.card[class*="bg-"] h3 small,
.card[class*="bg-"] .card-body h1 small,
.card[class*="bg-"] .card-body h2 small,
.card[class*="bg-"] .card-body h3 small {
  color: rgba(255, 255, 255, 0.8);
}

.card .card-stats {
  background: transparent;
  display: flex;
}

.card .card-stats .author,
.card .card-stats .stats {
  display: inline-flex;
}

.card {
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
}

.card .table tr:first-child td {
  border-top: none;
}

.card .card-title {
  margin-top: 0;
  margin-bottom: 3px;
}

.card .card-body {
  padding: 0.9375rem 20px;
  position: relative;
}

.card .card-body .form-group {
  margin: 8px 0 0;
}

.card .card-header {
  z-index: 3 !important;
}

.card .card-header .card-title {
  margin-bottom: 3px;
}

.card .card-header .card-category {
  margin: 0;
}

.card .card-header.card-header-text {
  display: inline-block;
}

.card .card-header.card-header-text:after {
  content: "";
  display: table;
}

.card .card-header.card-header-icon i,
.card .card-header.card-header-text i {
  width: 33px;
  height: 33px;
  text-align: center;
  line-height: 33px;
}

.card .card-header.card-header-icon .card-title,
.card .card-header.card-header-text .card-title {
  margin-top: 15px;
  color: #3C4858;
}

.card .card-header.card-header-icon h4,
.card .card-header.card-header-text h4 {
  font-weight: 300;
}

.card .card-header.card-header-tabs .nav-tabs {
  background: transparent;
  padding: 0;
}

.card .card-header.card-header-tabs .nav-tabs-title {
  float: left;
  padding: 10px 10px 10px 0;
  line-height: 24px;
}

.card.card-plain .card-header.card-header-icon+.card-body .card-title,
.card.card-plain .card-header.card-header-icon+.card-body .card-category {
  margin-top: -20px;
}

.card .card-actions {
  position: absolute;
  z-index: 1;
  top: -50px;
  width: calc(100% - 30px);
  left: 17px;
  right: 17px;
  text-align: center;
}

.card .card-actions .card-header {
  padding: 0;
  min-height: 160px;
}

.card .card-actions .btn {
  padding-left: 12px;
  padding-right: 12px;
}

.card .card-actions .fix-broken-card {
  position: absolute;
  top: -65px;
}

.card.card-chart .card-footer i:nth-child(1n+2) {
  width: 18px;
  text-align: center;
}

.card.card-chart .card-category {
  margin: 0;
}

.card .card-body+.card-footer,
.card .card-footer {
  padding: 0;
  padding-top: 10px;
  margin: 0 15px 10px;
  border-radius: 0;
  justify-content: space-between;
  align-items: center;
}

.card .card-body+.card-footer h6,
.card .card-footer h6 {
  width: 100%;
}

.card .card-body+.card-footer .stats,
.card .card-footer .stats {
  color: #999999;
  font-size: 12px;
  line-height: 22px;
}

.card .card-body+.card-footer .stats .card-category,
.card .card-footer .stats .card-category {
  padding-top: 7px;
  padding-bottom: 7px;
  margin: 0;
}

.card .card-body+.card-footer .stats .material-icons,
.card .card-footer .stats .material-icons {
  position: relative;
  top: 4px;
  font-size: 16px;
}

.card [class*="card-header-"] {
  margin: 0px 15px 0;
  padding: 0;
  position: relative;
}

.card [class*="card-header-"] .card-title+.card-category {
  color: rgba(255, 255, 255, 0.8);
}

.card [class*="card-header-"] .card-title+.card-category a {
  color: #fff;
}

.card [class*="card-header-"]:not(.card-header-icon):not(.card-header-text):not(.card-header-image) {
  border-radius: 3px;
  margin-top: -20px;
  padding: 15px;
}

.card [class*="card-header-"] .card-icon,
.card [class*="card-header-"] .card-text {
  border-radius: 3px;
  background-color: #999999;
  padding: 15px;
  margin-top: -20px;
  margin-right: 15px;
  float: left;
}

.card [class*="card-header-"] .card-text {
  float: none;
  display: inline-block;
  margin-right: 0;
}

.card [class*="card-header-"] .card-text .card-title {
  color: #fff;
  margin-top: 0;
}

.card [class*="card-header-"] .ct-chart .card-title {
  color: #fff;
}

.card [class*="card-header-"] .ct-chart .card-category {
  margin-bottom: 0;
  color: rgba(255, 255, 255, 0.62);
}

.card [class*="card-header-"] .ct-chart .ct-label {
  color: rgba(255, 255, 255, 0.7);
}

.card [class*="card-header-"] .ct-chart .ct-grid {
  stroke: rgba(255, 255, 255, 0.2);
}

.card [class*="card-header-"] .ct-chart .ct-series-a .ct-point,
.card [class*="card-header-"] .ct-chart .ct-series-a .ct-line,
.card [class*="card-header-"] .ct-chart .ct-series-a .ct-bar,
.card [class*="card-header-"] .ct-chart .ct-series-a .ct-slice-donut {
  stroke: rgba(255, 255, 255, 0.8);
}

.card [class*="card-header-"] .ct-chart .ct-series-a .ct-slice-pie,
.card [class*="card-header-"] .ct-chart .ct-series-a .ct-area {
  fill: rgba(255, 255, 255, 0.4);
}

.card [class*="card-header-"] .ct-chart .ct-series-a .ct-bar {
  stroke-width: 10px;
}

.card [class*="card-header-"] .ct-chart .ct-point {
  stroke-width: 10px;
  stroke-linecap: round;
}

.card [class*="card-header-"] .ct-chart .ct-line {
  fill: none;
  stroke-width: 4px;
}

.card [data-header-animation="true"] {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  -webkit-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
  -moz-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
  -o-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
  -ms-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
  transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
}

.card:hover [data-header-animation="true"] {
  -webkit-transform: translate3d(0, -50px, 0);
  -moz-transform: translate3d(0, -50px, 0);
  -o-transform: translate3d(0, -50px, 0);
  -ms-transform: translate3d(0, -50px, 0);
  transform: translate3d(0, -50px, 0);
}

.card .map {
  height: 280px;
  border-radius: 6px;
  margin-top: 15px;
}

.card .map.map-big {
  height: 420px;
}

.card .card-body.table-full-width {
  padding: 0;
}

.card .card-plain .card-header-icon {
  margin-right: 15px !important;
}

.table-sales {
  margin-top: 40px;
}

.iframe-container {
  width: 100%;
}

.iframe-container iframe {
  width: 100%;
  height: 500px;
  border: 0;
  box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card-wizard .nav.nav-pills .nav-item {
  margin: 0;
}

.card-wizard .nav.nav-pills .nav-item .nav-link {
  padding: 6px 15px !important;
}

.card-wizard .nav-pills:not(.flex-column) .nav-item+.nav-item:not(:first-child) {
  margin-left: 0;
}

.card-wizard .nav-item .nav-link.active,
.card-wizard .nav-item .nav-link:hover,
.card-wizard .nav-item .nav-link:focus {
  background-color: inherit !important;
  box-shadow: none !important;
}

.card-wizard .input-group-text {
  padding: 6px 15px 0px !important;
}

.card-wizard .card-footer {
  border-top: none !important;
}

.card-chart .card-body+.card-footer,
.card-product .card-body+.card-footer {
  border-top: 1px solid #eee;
}

.card-product .price {
  color: inherit;
}

.card-collapse {
  margin-bottom: 15px;
}

.card-collapse .card .card-header a[aria-expanded="true"] {
  color: #e91e63;
}

.card-stats .card-header.card-header-icon,
.card-stats .card-header.card-header-text {
  text-align: right;
}

.card-stats .card-header .card-icon+.card-title,
.card-stats .card-header .card-icon+.card-category {
  padding-top: 10px;
}

.card-stats .card-header.card-header-icon .card-title,
.card-stats .card-header.card-header-text .card-title,
.card-stats .card-header.card-header-icon .card-category,
.card-stats .card-header.card-header-text .card-category {
  margin: 0;
}

.card-stats .card-header .card-category {
  margin-bottom: 0;
  margin-top: 0;
}

.card-stats .card-header .card-category:not([class*="text-"]) {
  color: #999999;
  font-size: 14px;
}

.card-stats .card-header+.card-footer {
  border-top: 1px solid #eee;
  margin-top: 20px;
}

.card-stats .card-header.card-header-icon i {
  font-size: 36px;
  line-height: 56px;
  width: 56px;
  height: 56px;
  text-align: center;
}

.card-stats .card-body {
  text-align: right;
}

.card-profile {
  margin-top: 30px;
  text-align: center;
}

.card-profile .card-avatar {
  margin: -50px auto 0;
 
}

.card-profile .card-avatar+.card-body {
  margin-top: 15px;
}

.card-profile .card-avatar img {
  width: 100%;
  height: auto;
}

.card-profile .card-body+.card-footer {
  margin-top: -15px;
}

.card-profile .card-footer .btn.btn-just-icon {
  font-size: 20px;
  padding: 12px 12px;
  line-height: 1em;
}

.card-profile.card-plain .card-avatar {
  margin-top: 0;
}

.card-profile .card-header:not([class*="card-header-"]) {
  background: transparent;
}

.card-profile .card-avatar {
  max-width: 130px;
  max-height: 130px;
}

.card-plain {
  background: transparent;
  box-shadow: none;
}

.card-plain .card-header:not(.card-avatar) {
  margin-left: 0;
  margin-right: 0;
}

.card-plain .card-body {
  padding-left: 5px;
  padding-right: 5px;
}

.card-plain .card-header-image {
  margin: 0 !important;
  border-radius: 6px;
}

.card-plain .card-header-image img {
  border-radius: 6px;
}

.card-plain .card-footer {
  padding-left: 5px;
  padding-right: 5px;
  background-color: transparent;
}

/*
Animate.css - http://daneden.me/animate
Licensed under the MIT license - http://opensource.org/licenses/MIT

Copyright (c) 2015 Daniel Eden
*/
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
}

.animated.bounceIn,
.animated.bounceOut {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
}

.animated.flipOutX,
.animated.flipOutY {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
}

@-webkit-keyframes shake {

  from,
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes shake {

  from,
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

.shake {
  -webkit-animation-name: shake;
  animation-name: shake;
}

@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
}

@-webkit-keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
  }
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
  }
}

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut;
}

@-webkit-keyframes fadeOutDown {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
}

@keyframes fadeOutDown {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
}

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  animation-name: fadeOutDown;
}

@-webkit-keyframes fadeOutUp {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
}

@keyframes fadeOutUp {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
}

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp;
}

.ct-chart .ct-series-a .ct-point,
.ct-chart .ct-series-a .ct-line,
.ct-chart .ct-series-a .ct-bar,
.ct-chart .ct-series-a .ct-slice-donut,
.ct-chart .ct-series-a .ct-slice-pie,
.ct-chart .ct-series-a .ct-slice-donut-solid,
.ct-chart .ct-series-a .ct-area {
  stroke: #00bcd4;
}

.ct-chart .ct-series-b .ct-point,
.ct-chart .ct-series-b .ct-line,
.ct-chart .ct-series-b .ct-bar,
.ct-chart .ct-series-b .ct-slice-donut,
.ct-chart .ct-series-b .ct-slice-pie,
.ct-chart .ct-series-b .ct-slice-donut-solid,
.ct-chart .ct-series-b .ct-area {
  stroke: #f44336;
}

.ct-chart .ct-series-c .ct-point,
.ct-chart .ct-series-c .ct-line,
.ct-chart .ct-series-c .ct-bar,
.ct-chart .ct-series-c .ct-slice-donut,
.ct-chart .ct-series-c .ct-slice-pie,
.ct-chart .ct-series-c .ct-slice-donut-solid,
.ct-chart .ct-series-c .ct-area {
  stroke: #ff9800;
}

.ct-chart .ct-bar {
  fill: none;
  stroke-width: 10px;
}

.ct-chart .ct-line {
  fill: none;
  stroke-width: 4px;
}

.ct-chart .ct-point {
  stroke-width: 10px;
  stroke-linecap: round;
}

.ct-chart .ct-grid {
  stroke: rgba(0, 0, 0, 0.2);
  stroke-width: 1px;
  stroke-dasharray: 2px;
}

.ct-chart .ct-label {
  fill: rgba(0, 0, 0, 0.4);
  color: rgba(0, 0, 0, 0.4);
  display: -webkit-flex;
  display: flex;
}

.ct-chart .ct-label.ct-vertical.ct-start {
  -webkit-box-align: flex-end;
  -webkit-align-items: flex-end;
  -ms-flex-align: flex-end;
  align-items: flex-end;
  -webkit-box-pack: flex-end;
  -webkit-justify-content: flex-end;
  -ms-flex-pack: flex-end;
  justify-content: flex-end;
  text-align: right;
  text-anchor: end;
}

.ct-chart .ct-series-a .ct-slice-pie,
.ct-chart .ct-series-a .ct-slice-donut-solid,
.ct-chart .ct-series-a .ct-area {
  fill: #00bcd4;
}

.ct-chart .ct-series-b .ct-slice-pie,
.ct-chart .ct-series-b .ct-slice-donut-solid,
.ct-chart .ct-series-b .ct-area {
  fill: #f44336;
}

.ct-chart .ct-series-c .ct-slice-pie,
.ct-chart .ct-series-c .ct-slice-donut-solid,
.ct-chart .ct-series-c .ct-area {
  fill: #ff9800;
}

/* perfect-scrollbar v0.6.13 */
.ps-container {
  -ms-touch-action: auto;
  touch-action: auto;
  overflow: hidden !important;
  -ms-overflow-style: none;
}

@supports (-ms-overflow-style: none) {
  .ps-container {
    overflow: auto !important;
  }
}

@media screen and (-ms-high-contrast: active),
(-ms-high-contrast: none) {
  .ps-container {
    overflow: auto !important;
  }
}

.ps-container.ps-active-x>.ps-scrollbar-x-rail,
.ps-container.ps-active-y>.ps-scrollbar-y-rail {
  display: block;
  background-color: transparent;
}

.ps-container.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: 0.9;
}

.ps-container.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
  background-color: #999;
  height: 11px;
}

.ps-container.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: 0.9;
}

.ps-container.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
  background-color: #999;
  width: 11px;
}

.ps-container>.ps-scrollbar-x-rail {
  display: none;
  position: absolute;
  /* please don't change 'position' */
  opacity: 0;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  -o-transition: background-color .2s linear, opacity .2s linear;
  -moz-transition: background-color .2s linear, opacity .2s linear;
  transition: background-color .2s linear, opacity .2s linear;
  bottom: 0px;
  /* there must be 'bottom' for ps-scrollbar-x-rail */
  height: 15px;
}

.ps-container>.ps-scrollbar-x-rail>.ps-scrollbar-x {
  position: absolute;
  /* please don't change 'position' */
  background-color: #aaa;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, -webkit-border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, -webkit-border-radius .2s ease-in-out;
  -o-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
  -moz-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -webkit-border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
  bottom: 2px;
  /* there must be 'bottom' for ps-scrollbar-x */
  height: 6px;
}

.ps-container>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x,
.ps-container>.ps-scrollbar-x-rail:active>.ps-scrollbar-x {
  height: 11px;
}

.ps-container>.ps-scrollbar-y-rail {
  display: none;
  position: absolute;
  /* please don't change 'position' */
  opacity: 0;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  -o-transition: background-color .2s linear, opacity .2s linear;
  -moz-transition: background-color .2s linear, opacity .2s linear;
  transition: background-color .2s linear, opacity .2s linear;
  right: 0;
  /* there must be 'right' for ps-scrollbar-y-rail */
  width: 15px;
}

.ps-container>.ps-scrollbar-y-rail>.ps-scrollbar-y {
  position: absolute;
  /* please don't change 'position' */
  background-color: #aaa;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, -webkit-border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, -webkit-border-radius .2s ease-in-out;
  -o-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
  -moz-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
  transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -webkit-border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
  right: 2px;
  /* there must be 'right' for ps-scrollbar-y */
  width: 6px;
}

.ps-container>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y,
.ps-container>.ps-scrollbar-y-rail:active>.ps-scrollbar-y {
  width: 11px;
}

.ps-container:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: 0.9;
}

.ps-container:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
  background-color: #999;
  height: 11px;
}

.ps-container:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: 0.9;
}

.ps-container:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
  background-color: #999;
  width: 11px;
}

.ps-container:hover>.ps-scrollbar-x-rail,
.ps-container:hover>.ps-scrollbar-y-rail {
  opacity: 0.6;
}

.ps-container:hover>.ps-scrollbar-x-rail:hover {
  background-color: #eee;
  opacity: 0.9;
}

.ps-container:hover>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x {
  background-color: #999;
}

.ps-container:hover>.ps-scrollbar-y-rail:hover {
  background-color: #eee;
  opacity: 0.9;
}

.ps-container:hover>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y {
  background-color: #999;
}

@media all and (max-width: 991px) {

  [class*="navbar-expand-"]>.container,
  [class*="navbar-expand-"]>.container-fluid {
    padding-left: 15px;
    padding-right: 15px;
  }

  .navbar .navbar-collapse .navbar-nav>li.button-container {
    padding: 15px;
  }

  .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
    width: -webkit-fill-available !important;
  }

  .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) .dropdown-menu.show {
    min-width: auto;
    left: auto;
  }

  .carousel .card .card-body {
    max-width: 340px;
    margin: 0 auto;
    min-height: 400px;
  }

  .navbar-collapse {
    position: fixed;
    display: block;
    top: 0px;
    height: 100vh;
    width: 230px;
    right: 0;
    margin-right: 0 !important;
    z-index: 1032;
    visibility: visible;
    background-color: #999;
    overflow-y: visible;
    border-top: none;
    text-align: left;
    padding-right: 0;
    padding-left: 0;
    max-height: none !important;
    -webkit-transform: translate3d(230px, 0, 0);
    -moz-transform: translate3d(230px, 0, 0);
    -o-transform: translate3d(230px, 0, 0);
    -ms-transform: translate3d(230px, 0, 0);
    transform: translate3d(230px, 0, 0);
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .navbar-collapse::after {
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    position: absolute;
    background-color: #fff;
    display: block;
    content: "";
    z-index: 1;
  }

  .navbar-collapse .dropdown-toggle:after {
    position: absolute;
    right: 16px;
    margin-top: 8px;
  }

  .navbar-collapse .navbar-nav {
    position: relative;
    z-index: 3;
  }

  .navbar-collapse .navbar-nav .nav-item .nav-link {
    color: #3C4858;
    margin: 5px 15px;
  }

  .navbar-collapse .navbar-nav .nav-item.button-container .nav-link {
    margin: 15px;
  }

  .navbar-collapse .navbar-nav .nav-item:after {
    width: calc(100% - 30px);
    content: "";
    display: block;
    height: 1px;
    margin-left: 15px;
  }

  .navbar-collapse .navbar-nav .nav-item:last-child:after {
    display: none;
  }

  .nav-open .navbar-collapse {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
  }

  .nav-open .navbar-translate {
    -webkit-transform: translate3d(-230px, 0, 0);
    -moz-transform: translate3d(-230px, 0, 0);
    -o-transform: translate3d(-230px, 0, 0);
    -ms-transform: translate3d(-230px, 0, 0);
    transform: translate3d(-230px, 0, 0);
  }

  .navbar .navbar-translate {
    width: 100%;
    position: relative;
    display: flex;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transition: transform 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: transform 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: transform 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: transform 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: transform 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .navbar .dropdown.show .dropdown-menu {
    display: block;
  }

  .navbar .dropdown .dropdown-menu {
    display: none;
  }

  .navbar .dropdown-menu .dropdown-item {
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }

  .navbar .dropdown.show .dropdown-menu,
  .navbar .dropdown .dropdown-menu {
    background-color: transparent;
    border: 0;
    padding-bottom: 15px;
    transition: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    transform: none !important;
    width: auto;
    margin-bottom: 15px;
    padding-top: 0;
    height: 300px;
    animation: none;
    opacity: 1;
    overflow-y: scroll;
  }

  .navbar.navbar-transparent .navbar-toggler .navbar-toggler-icon {
    background-color: #fff;
  }

  #bodyClick {
    height: 100%;
    width: 100%;
    position: fixed;
    opacity: 0;
    top: 0;
    left: auto;
    right: 230px;
    content: "";
    z-index: 1029;
    overflow-x: hidden;
  }

  #navbar .navbar-collapse,
  #navigation .navbar-collapse {
    display: none !important;
  }

  .dropdown-menu.show .dropdown-item.open+.dropdown-menu.show {
    right: 101% !important;
  }

  .dropdown-menu.show .dropdown-item.open+.dropdown-menu.show .dropdown-item.open+.dropdown-menu,
  .dropdown-menu.show .dropdown-item.open+.dropdown-menu.show .dropdown-item.open+.dropdown-menu.show {
    left: -165px !important;
  }
}

@media all and (min-width: 991px) {
  .navbar .navbar-nav {
    align-items: center;
  }

  .navbar .navbar-nav .button-container {
    margin-left: 0.1875px;
  }

  .sidebar .navbar-form {
    display: none !important;
  }
}

@media screen and (max-width: 991px) {
  .presentation-page .section-components .components-macbook {
    max-width: 850px !important;
    max-height: 480px !important;
    margin-top: 12vh;
    left: -12px;
  }

  .presentation-page .section-components .coloured-card-img,
  .presentation-page .section-components .table-img {
    display: none;
  }

  .presentation-page .section-components .social-img {
    left: 47%;
    top: 37%;
  }

  .presentation-page .section-components .pin-btn-img {
    top: 54%;
  }

  .presentation-page .section-components .share-btn-img {
    top: 12%;
  }

  .presentation-page .section-components .coloured-card-btn-img {
    top: -2%;
    left: 65%;
  }

  .presentation-page .section-content .area-img {
    max-width: 130px;
    max-height: 170px;
  }

  .presentation-page .section-content .info-img {
    max-width: 170px;
    max-height: 120px;
  }
}

@media screen and (max-width: 767px) {
  .presentation-page .section-components .components-macbook {
    max-width: 350px !important;
    max-height: 250px !important;
    margin-top: 12vh;
    left: -12px;
  }

  .presentation-page .section-components .coloured-card-img,
  .presentation-page .section-components .table-img {
    display: none;
  }

  .presentation-page .section-components .social-img {
    left: -7%;
    top: 37%;
  }

  .presentation-page .section-components .pin-btn-img {
    top: 54%;
  }

  .presentation-page .section-components .share-btn-img {
    top: 7%;
  }

  .presentation-page .section-components .coloured-card-btn-img {
    top: -2%;
  }

  .login-page .container {
    padding-top: 100px !important;
  }

  .presentation-page #cd-vertical-nav,
  .index-page #cd-vertical-nav,
  .section-page #cd-vertical-nav {
    display: none;
  }

  .index-page .cd-section .tim-typo .tim-note {
    width: 60px;
  }
}

@media screen and (max-width: 400px) {
  .cd-vertical-nav {
    display: none !important;
  }
}

/*          Changes for small display      */
@media (max-width: 991px) {
  .form-group textarea {
    padding-top: 15px;
  }

  .nav-open .menu-on-left .main-panel {
    position: initial;
  }

  html,
  body {
    overflow-x: hidden;
  }

  .nav-open .menu-on-left .main-panel,
  .nav-open .menu-on-left .wrapper-full-page,
  .nav-open .menu-on-left .navbar-fixed>div {
    -webkit-transform: translate3d(260px, 0, 0);
    -moz-transform: translate3d(260px, 0, 0);
    -o-transform: translate3d(260px, 0, 0);
    -ms-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0);
  }

  .menu-on-left .sidebar,
  .menu-on-left .off-canvas-sidebar {
    left: 0;
    right: auto;
    -webkit-transform: translate3d(-260px, 0, 0);
    -moz-transform: translate3d(-260px, 0, 0);
    -o-transform: translate3d(-260px, 0, 0);
    -ms-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0);
  }

  .menu-on-left .close-layer {
    left: auto;
    right: 0;
  }

  .timeline:before {
    left: 5%;
  }

  .timeline>li>.timeline-badge {
    left: 5%;
  }

  .timeline>li>.timeline-panel {
    float: right;
    width: 86%;
  }

  .timeline>li>.timeline-panel:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto;
  }

  .timeline>li>.timeline-panel:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
    right: auto;
  }

  .nav-mobile-menu .dropdown .dropdown-menu {
    display: none;
    position: static !important;
    background-color: transparent;
    width: auto;
    float: none;
    box-shadow: none;
  }

  .nav-mobile-menu .dropdown .dropdown-menu.showing {
    animation: initial;
    animation-duration: 0s;
  }

  .nav-mobile-menu .dropdown .dropdown-menu.hiding {
    transform: none;
    opacity: 1;
  }

  .nav-mobile-menu .dropdown.show .dropdown-menu {
    display: block;
  }

  .nav-mobile-menu li.active>a {
    background-color: rgba(255, 255, 255, 0.1);
  }

  .navbar-minimize {
    display: none;
  }

  .card .form-horizontal .label-on-left,
  .card .form-horizontal .label-on-right {
    padding-left: 15px;
    padding-top: 8px;
  }

  .card .form-horizontal .form-group {
    margin-top: 0px;
  }

  .card .form-horizontal .checkbox-radios {
    padding-bottom: 15px;
  }

  .card .form-horizontal .checkbox-radios .checkbox:first-child,
  .card .form-horizontal .checkbox-radios .radio:first-child {
    margin-top: 0;
  }

  .card .form-horizontal .checkbox-inline {
    margin-top: 0;
  }

  .sidebar {
    display: none;
    box-shadow: none;
  }

  .sidebar .sidebar-wrapper {
    padding-bottom: 60px;
  }

  .sidebar .nav-mobile-menu {
    margin-top: 0;
  }

  .sidebar .nav-mobile-menu .notification {
    float: left;
    line-height: 30px;
    margin-right: 8px;
  }

  .sidebar .nav-mobile-menu .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }

  .main-panel {
    width: 100%;
  }

  .navbar-transparent {
    padding-top: 15px;
    background-color: rgba(0, 0, 0, 0.45);
  }

  body {
    position: relative;
  }

  .nav-open .main-panel,
  .nav-open .wrapper-full-page,
  .nav-open .navbar .container .navbar-toggler,
  .nav-open .navbar .container .navbar-wrapper,
  .nav-open .navbar .container {
    left: 0;
    -webkit-transform: translate3d(-260px, 0, 0);
    -moz-transform: translate3d(-260px, 0, 0);
    -o-transform: translate3d(-260px, 0, 0);
    -ms-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0);
  }

  .nav-open .sidebar {
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
  }

  .nav-open .off-canvas-sidebar .navbar-collapse,
  .nav-open .sidebar {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  .wrapper-full-page,
  .navbar .container .navbar-toggler,
  .navbar .container .navbar-wrapper,
  .navbar .container {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    left: 0;
  }

  .off-canvas-sidebar .navbar .container {
    transform: none;
  }

  .main-panel,
  .navbar-collapse {
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .navbar .navbar-collapse.collapse,
  .navbar .navbar-collapse.collapse.in,
  .navbar .navbar-collapse.collapsing {
    display: none !important;
  }

  .off-canvas-sidebar .navbar .navbar-collapse.collapse,
  .off-canvas-sidebar .navbar .navbar-collapse.collapse.in,
  .off-canvas-sidebar .navbar .navbar-collapse.collapsing {
    display: block !important;
  }

  .navbar-nav>li {
    float: none;
    position: relative;
    display: block;
  }

  .off-canvas-sidebar nav .navbar-collapse {
    margin: 0;
  }

  .off-canvas-sidebar nav .navbar-collapse>ul {
    margin-top: 19px;
  }

  .sidebar,
  .off-canvas-sidebar nav .navbar-collapse {
    position: fixed;
    display: block;
    top: 0;
    height: 100vh;
    width: 260px;
    right: 0;
    left: auto;
    z-index: 1032;
    visibility: visible;
    background-color: #9A9A9A;
    overflow-y: visible;
    border-top: none;
    text-align: left;
    padding-right: 0px;
    padding-left: 0;
    -webkit-transform: translate3d(260px, 0, 0);
    -moz-transform: translate3d(260px, 0, 0);
    -o-transform: translate3d(260px, 0, 0);
    -ms-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0);
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .sidebar>ul,
  .off-canvas-sidebar nav .navbar-collapse>ul {
    position: relative;
    z-index: 4;
    width: 100%;
  }

  .sidebar::before,
  .off-canvas-sidebar nav .navbar-collapse::before {
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    position: absolute;
    background-color: #282828;
    display: block;
    content: "";
    z-index: 1;
  }

  .sidebar .logo,
  .off-canvas-sidebar nav .navbar-collapse .logo {
    position: relative;
    z-index: 4;
  }

  .sidebar .navbar-form,
  .off-canvas-sidebar nav .navbar-collapse .navbar-form {
    margin: 10px 0px;
    float: none !important;
    padding-top: 1px;
    padding-bottom: 1px;
    position: relative;
  }

  .sidebar .table-responsive,
  .off-canvas-sidebar nav .navbar-collapse .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-x: scroll;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    -webkit-overflow-scrolling: touch;
  }

  .form-group.form-search .form-control {
    font-size: 1.7em;
    height: 37px;
    width: 78%;
  }

  .navbar-form .btn {
    position: absolute;
    top: -5px;
    right: -50px;
  }

  .close-layer {
    height: 100%;
    width: 100%;
    position: absolute;
    opacity: 0;
    top: 0;
    left: auto;
    background: rgba(0, 0, 0, 0.35);
    content: "";
    z-index: 9999;
    overflow-x: hidden;
    -webkit-transition: all 370ms ease-in;
    -moz-transition: all 370ms ease-in;
    -o-transition: all 370ms ease-in;
    -ms-transition: all 370ms ease-in;
    transition: all 370ms ease-in;
  }

  .close-layer.visible {
    opacity: 1;
  }

  .navbar-toggler .icon-bar {
    display: block;
    position: relative;
    background: #555 !important;
    width: 24px;
    height: 2px;
    border-radius: 1px;
    margin: 0 auto;
  }

  .navbar-header .navbar-toggler {
    padding: 15px;
    margin-top: 4px;
    width: 40px;
    height: 40px;
  }

  .bar1,
  .bar2,
  .bar3 {
    outline: 1px solid transparent;
  }

  @keyframes topbar-x {
    0% {
      top: 0px;
      transform: rotate(0deg);
    }

    45% {
      top: 6px;
      transform: rotate(145deg);
    }

    75% {
      transform: rotate(130deg);
    }

    100% {
      transform: rotate(135deg);
    }
  }

  @-webkit-keyframes topbar-x {
    0% {
      top: 0px;
      -webkit-transform: rotate(0deg);
    }

    45% {
      top: 6px;
      -webkit-transform: rotate(145deg);
    }

    75% {
      -webkit-transform: rotate(130deg);
    }

    100% {
      -webkit-transform: rotate(135deg);
    }
  }

  @-moz-keyframes topbar-x {
    0% {
      top: 0px;
      -moz-transform: rotate(0deg);
    }

    45% {
      top: 6px;
      -moz-transform: rotate(145deg);
    }

    75% {
      -moz-transform: rotate(130deg);
    }

    100% {
      -moz-transform: rotate(135deg);
    }
  }

  @keyframes topbar-back {
    0% {
      top: 6px;
      transform: rotate(135deg);
    }

    45% {
      transform: rotate(-10deg);
    }

    75% {
      transform: rotate(5deg);
    }

    100% {
      top: 0px;
      transform: rotate(0);
    }
  }

  @-webkit-keyframes topbar-back {
    0% {
      top: 6px;
      -webkit-transform: rotate(135deg);
    }

    45% {
      -webkit-transform: rotate(-10deg);
    }

    75% {
      -webkit-transform: rotate(5deg);
    }

    100% {
      top: 0px;
      -webkit-transform: rotate(0);
    }
  }

  @-moz-keyframes topbar-back {
    0% {
      top: 6px;
      -moz-transform: rotate(135deg);
    }

    45% {
      -moz-transform: rotate(-10deg);
    }

    75% {
      -moz-transform: rotate(5deg);
    }

    100% {
      top: 0px;
      -moz-transform: rotate(0);
    }
  }

  @keyframes bottombar-x {
    0% {
      bottom: 0px;
      transform: rotate(0deg);
    }

    45% {
      bottom: 6px;
      transform: rotate(-145deg);
    }

    75% {
      transform: rotate(-130deg);
    }

    100% {
      transform: rotate(-135deg);
    }
  }

  @-webkit-keyframes bottombar-x {
    0% {
      bottom: 0px;
      -webkit-transform: rotate(0deg);
    }

    45% {
      bottom: 6px;
      -webkit-transform: rotate(-145deg);
    }

    75% {
      -webkit-transform: rotate(-130deg);
    }

    100% {
      -webkit-transform: rotate(-135deg);
    }
  }

  @-moz-keyframes bottombar-x {
    0% {
      bottom: 0px;
      -moz-transform: rotate(0deg);
    }

    45% {
      bottom: 6px;
      -moz-transform: rotate(-145deg);
    }

    75% {
      -moz-transform: rotate(-130deg);
    }

    100% {
      -moz-transform: rotate(-135deg);
    }
  }

  @keyframes bottombar-back {
    0% {
      bottom: 6px;
      transform: rotate(-135deg);
    }

    45% {
      transform: rotate(10deg);
    }

    75% {
      transform: rotate(-5deg);
    }

    100% {
      bottom: 0px;
      transform: rotate(0);
    }
  }

  @-webkit-keyframes bottombar-back {
    0% {
      bottom: 6px;
      -webkit-transform: rotate(-135deg);
    }

    45% {
      -webkit-transform: rotate(10deg);
    }

    75% {
      -webkit-transform: rotate(-5deg);
    }

    100% {
      bottom: 0px;
      -webkit-transform: rotate(0);
    }
  }

  @-moz-keyframes bottombar-back {
    0% {
      bottom: 6px;
      -moz-transform: rotate(-135deg);
    }

    45% {
      -moz-transform: rotate(10deg);
    }

    75% {
      -moz-transform: rotate(-5deg);
    }

    100% {
      bottom: 0px;
      -moz-transform: rotate(0);
    }
  }

  .navbar-toggler .icon-bar:nth-child(2) {
    top: 0px;
    -webkit-animation: topbar-back 500ms linear 0s;
    -moz-animation: topbar-back 500ms linear 0s;
    animation: topbar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  .navbar-toggler .icon-bar:nth-child(3) {
    opacity: 1;
  }

  .navbar-toggler .icon-bar:nth-child(4) {
    bottom: 0px;
    -webkit-animation: bottombar-back 500ms linear 0s;
    -moz-animation: bottombar-back 500ms linear 0s;
    animation: bottombar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  .navbar-toggler.toggled .icon-bar:nth-child(2) {
    top: 6px;
    -webkit-animation: topbar-x 500ms linear 0s;
    -moz-animation: topbar-x 500ms linear 0s;
    animation: topbar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  .navbar-toggler.toggled .icon-bar:nth-child(3) {
    opacity: 0;
  }

  .navbar-toggler.toggled .icon-bar:nth-child(4) {
    bottom: 6px;
    -webkit-animation: bottombar-x 500ms linear 0s;
    -moz-animation: bottombar-x 500ms linear 0s;
    animation: bottombar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  @-webkit-keyframes fadeIn {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  @-moz-keyframes fadeIn {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  @keyframes fadeIn {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  .dropdown-menu .divider {
    background-color: rgba(229, 229, 229, 0.15);
  }

  .navbar-nav {
    margin: 1px 0;
  }

  .navbar-nav .open .dropdown-menu>li>a {
    padding: 15px 15px 5px 50px;
  }

  .navbar-nav .open .dropdown-menu>li:first-child>a {
    padding: 5px 15px 5px 50px;
  }

  .navbar-nav .open .dropdown-menu>li:last-child>a {
    padding: 15px 15px 25px 50px;
  }

  [class*="navbar-"] .navbar-nav>li>a,
  [class*="navbar-"] .navbar-nav>li>a:hover,
  [class*="navbar-"] .navbar-nav>li>a:focus,
  [class*="navbar-"] .navbar-nav .active>a,
  [class*="navbar-"] .navbar-nav .active>a:hover,
  [class*="navbar-"] .navbar-nav .active>a:focus,
  [class*="navbar-"] .navbar-nav .open .dropdown-menu>li>a,
  [class*="navbar-"] .navbar-nav .open .dropdown-menu>li>a:hover,
  [class*="navbar-"] .navbar-nav .open .dropdown-menu>li>a:focus,
  [class*="navbar-"] .navbar-nav .navbar-nav .open .dropdown-menu>li>a:active {
    color: white;
  }

  [class*="navbar-"] .navbar-nav>li>a,
  [class*="navbar-"] .navbar-nav>li>a:hover,
  [class*="navbar-"] .navbar-nav>li>a:focus,
  [class*="navbar-"] .navbar-nav .open .dropdown-menu>li>a,
  [class*="navbar-"] .navbar-nav .open .dropdown-menu>li>a:hover,
  [class*="navbar-"] .navbar-nav .open .dropdown-menu>li>a:focus {
    opacity: .7;
    background: transparent;
  }

  [class*="navbar-"] .navbar-nav.navbar-nav .open .dropdown-menu>li>a:active {
    opacity: 1;
  }

  [class*="navbar-"] .navbar-nav .dropdown>a:hover .caret {
    border-bottom-color: #777;
    border-top-color: #777;
  }

  [class*="navbar-"] .navbar-nav .dropdown>a:active .caret {
    border-bottom-color: white;
    border-top-color: white;
  }

  .dropdown-menu {
    display: none;
  }

  .navbar-fixed-top {
    -webkit-backface-visibility: hidden;
  }

  #bodyClick {
    height: 100%;
    width: 100%;
    position: fixed;
    opacity: 0;
    top: 0;
    left: auto;
    right: 260px;
    content: "";
    z-index: 9999;
    overflow-x: hidden;
  }

  .social-line .btn {
    margin: 0 0 10px 0;
  }

  .subscribe-line .form-control {
    margin: 0 0 10px 0;
  }

  .social-line.pull-right {
    float: none;
  }

  .footer:not(.footer-big) nav>ul li {
    float: none;
  }

  .social-area.pull-right {
    float: none !important;
  }

  .form-control+.form-control-feedback {
    margin-top: -8px;
  }

  .navbar-toggle:hover,
  .navbar-toggle:focus {
    background-color: transparent !important;
  }

  .media-post .author {
    width: 20%;
    float: none !important;
    display: block;
    margin: 0 auto 10px;
  }

  .media-post .media-body {
    width: 100%;
  }

  .navbar-collapse.collapse {
    height: 100% !important;
  }

  .navbar-collapse.collapse.in {
    display: block;
  }

  .navbar-header .collapse,
  .navbar-toggle {
    display: block !important;
  }

  .navbar-header {
    float: none;
  }

  .navbar-collapse .nav p {
    font-size: 1rem;
    margin: 0;
  }
}

@media (min-width: 992px) {
  .main-panel .navbar .navbar-collapse .navbar-nav .nav-item .nav-link p {
    display: none;
  }

  .nav-mobile-menu,
  .sidebar .navbar-form {
    display: none !important;
  }
}
input[type=range]::-webkit-slider-thumb {
    -webkit-appearance: none;
    border: none;
    height: 32px;
    width: 32px;
    background: goldenrod;
    background-image: url('http://iconizer.net/files/Duesseldorf/orig/heart.png') no-repeat;
    margin-top: -15px;
    border-radius: 0 !important;
}
input[type=range]+.thumb {
    background-color: #FF8780 !important;
}
input[type=range]+.thumb.active{
  top: -35px !important;
}
.delivery-boys{
  color: black !important;
  position: relative;
  top: 40px;
}
@media(min-width: 1100px){
  .delivery-body{
    margin-top: -200px;
}

}
.edit-circle{
  border-radius: 50%;
  width: 35px;
  height: 35px;
  background-color: white;
  position : absolute;
  right:110px;
  top: -40px;
  text-align: center;
  padding-left: 5px;
  padding-top: 2px;
  border: 1px solid gray;
}
.edit-circle>input {
  display: none;
    
}
.edit-btn{
  position: absolute;
  right: 27px;
  bottom: 12px;
}
    .edit-img{
  position: relative;
  left:55px;
  top:25px
}
    .user-card{
    height: 355px;
}
        #preloader  {
     position: fixed;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-color: #FFFFFF;
     z-index: 99;
    height: 100%;
 }

#status  {
     width: 100%;
     height: 100%;
     position: absolute;
   
     background-image: url("https://i.ibb.co/2h7qHk1/132.gif");
     background-repeat: no-repeat;
     background-position: center;
 }
  
</style>
</bkl>
<body>
    <div id="preloader">
  <div id="status"></div>
</div>
<div class="app-container app-theme-gray" >
        <div class="app-main">
            <div class="app-sidebar-wrapper">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Team DOT" class="logo-src"><img src="assets/images/Logo-dot.png" width="60px"></a>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                    <div class="scrollbar-sidebar scrollbar-container">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Menu</li>
                                <li class="mm-active">
                                    <a href="Dashboard.php">
                                        <i class="metismenu-icon"><img src="assets/icons/dashboard.png" width="20px">  </i>
                                        Dashboards
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Profile.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Profile.png" width="20px">  </i>
                                        Profile
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Item.php">
                                        <i class="metismenu-icon"><img src="assets/icons/online-shop.png" width="20px">  </i>
                                        Items
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Order.php">
                                        <i class="metismenu-icon"><img src="assets/icons/orders.png" width="20px">  </i>
                                        Orders
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Stock Ups.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Stock.png" width="20px">  </i>
                                        Stock Ups
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Analytics.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Analytic.png" width="20px">  </i>
                                        Analytics
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Map.php">
                                       <i class="metismenu-icon"><img src="assets/icons/1.png" width="20px">  </i>
                                        Map
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Support.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Support.png" width="20px">  </i>
                                        Support
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="../index.php">
                                        <i class="metismenu-icon"><img src="assets/icons/logout.png" width="20px">  </i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-sidebar-overlay d-none animated fadeIn"></div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="header-mobile-wrapper">
                        <div class="app-header__logo">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template" class="logo-src"></a>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                            <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-header">
                        <div class="page-title-heading">
                            <?php echo $_SESSION["Shop Name"]; ?>
                            <div class="page-title-subheading">
                                <img width="30" class="rounded-circle" src="assets/icons/1.png">
                                <?php 
                                echo $_SESSION["Address"]; 
                                echo " , ";
                                echo $_SESSION["city"];
                                ?>

                            </div>
                        </div>
                     <div class="app-header-right">
                            <div class="search-wrapper">
                                <i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
                                <input type="text" placeholder="Search...">
                            </div>
                            <div class="header-btn-lg pr-0">
                                <div class="header-dots">
                                    <div class="dropdown">
                                        
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-vicious-stance">
                                                    <div class="menu-header-image opacity-4" style="background-image: url('assets/images/dropdown-header/city5.jpg');"></div>
                                                    <div class="menu-header-content text-white">
                                                        <h5 class="menu-header-title">Grid Dashboard</h5>
                                                        <h6 class="menu-header-subtitle">Easy grid navigation inside dropdowns</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-menu grid-menu-xl grid-menu-3col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                            Automation
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Reports
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Settings
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Content
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Activity
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Contacts
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-shadow btn btn-primary btn-sm">Follow-ups</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 btn btn-link">
                                            <i class="typcn typcn-bell"></i>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header mb-0">
                                                <div class="dropdown-menu-header-inner bg-night-sky">
                                                    <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                                    <div class="menu-header-content text-light">
                                                        <h5 class="menu-header-title">Notifications</h5>
                                                        <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                                        <span>Events</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                                        <span>System</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="p-3">
                                                                <div class="notifications-box">
                                                                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Build the production release
                                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class= "vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Something not important
                                                                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/1.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                          
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/4.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/5.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/9.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/7.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/8.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                                <div class="avatar-icon"><i>+</i></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has an info state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Build the production release
                                                                                        <span class="badge badge-danger ml-2">New</span>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has a dark state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="p-3">
                                                                <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                        class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                        class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="no-results pt-3 pb-0">
                                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <span class="swal2-success-line-tip"></span>
                                                                    <span class="swal2-success-line-long"></span>
                                                                    <div class="swal2-success-ring"></div>
                                                                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                                </div>
                                                                <div class="results-subtitle">All caught up!</div>
                                                                <div class="results-title">There are no system errors!</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-btn-lg pr-0">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     <?php
                      $connect = mysqli_connect('database-server.cil0lbnaent8.ap-south-1.rds.amazonaws.com','admin','Dash_Utkarsh','DOT') or die("Failed to Connect with Database ");
                      $y= $_SESSION["user_id"];
                      $sql = "Select * From Profile_R where s_id = {$y}";
                     
                         $result = mysqli_query($connect,$sql) or die("Query Unsuccessful.");
                        
                      $row = mysqli_fetch_assoc($result);
                                                   
                                                    
                                              if(isset($row['images']))
                                                    { 
                                    echo '<img width="45"  height="45" class= "rounded" src="assets/images/Shopkeeper/'. $row['images'].'" >';
                                                    }
                                              else
                                                    {
                                echo "<img width='45' height='45' class='rounded' src='assets\images\Shopkeeper\Profile.png'>" ;
                                                    }
                               ?>
                                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                                </a>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-info">
                                                            <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city1.jpg');"></div>
                                                            <div class="menu-header-content text-left">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="50" height="50" class="rounded-circle"
                                                                                 src="assets\images\Shopkeeper\<?php echo $row['images']; ?>"
                                                                                 alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading"><?php echo $_SESSION["username"]; ?>
                                                                            </div>
                                                                            <div class="widget-subheading opacity-8">Thanks For being a Part of DOT family.
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right mr-2">
                                                                           <a href="../logout.php"> <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                               </button></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scroll-area-xs" style="height: 150px;">
                                                        <div class="scrollbar-container ps">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item-header nav-item">Activity
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Chat
                                                                        <div class="ml-auto badge badge-pill badge-info">8
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Recover Password
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item-header nav-item">My Account
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Settings
                                                                        <div class="ml-auto badge badge-success">New
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Messages
                                                                        <div class="ml-auto badge badge-warning">512
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Logs
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider mb-0 nav-item"></li>
                                                    </ul>
                                                    <div class="grid-menu grid-menu-2col">
                                                        <div class="no-gutters row">
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                                    <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                                    Message Inbox
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                    <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                                    <b>Support Tickets</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider nav-item">
                                                        </li>
                                                        <li class="nav-item-btn text-center nav-item">
                                                            <button class="btn-wide btn btn-primary btn-sm">
                                                                Open Messages
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    </div>
                        <div class="app-header-overlay d-none animated fadeIn"></div>
                    </div>
                    <div class="app-inner-layout app-inner-layout-page">
                        
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__sidebar">
                                <div class="app-layout__sidebar-inner dropdown-menu-rounded">
                                    <div class="nav flex-column">
                                        <div class="nav-item-header text-primary nav-item">
                                            Dashboards Examples
                                        </div>
                                        <a class="dropdown-item active" href="analytics-dashboard.html">Analytics</a>
                                        <a class="dropdown-item" href="management-dashboard.html">Management</a>
                                        <a class="dropdown-item" href="advertisement-dashboard.html">Advertisement</a>
                                        <a class="dropdown-item" href="index.html">Helpdesk</a>
                                        <a class="dropdown-item" href="monitoring-dashboard.html">Monitoring</a>
                                        <a class="dropdown-item" href="crypto-dashboard.html">Cryptocurrency</a>
                                        <a class="dropdown-item" href="pm-dashboard.html">Project Management</a>
                                        <a class="dropdown-item" href="product-dashboard.html">Product</a>
                                        <a class="dropdown-item" href="statistics-dashboard.html">Statistics</a>
                                    </div>                            </div>
                            </div>
                            <div class="content">
                          <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Your Profile</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form action="update_profile.php" method="post">
                    <?php
                      $connect = mysqli_connect('database-server.cil0lbnaent8.ap-south-1.rds.amazonaws.com','admin','Dash_Utkarsh','DOT') or die("Failed to Connect with Database ");
                      $y= $_SESSION["user_id"];
                      $sql = "Select * From Profile_R where s_id = {$y}";
                     
                         $result = mysqli_query($connect,$sql) or die("Query Unsuccessful.");
                        
                      $row = mysqli_fetch_assoc($result);

                   ?>
                      <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Shop's Name</label>
                          <input type="text" class="form-control" value="<?php echo $row['s_name']; ?>" name="shop_name" disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">User id</label>
                          <input type="text" class="form-control" value="<?php echo $row['s_id']; ?>" name="userid" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="email" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Name</label>
                          <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name" disabled>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Aadhar Card Number</label>
                            <?php 
                            if(isset($row['AadharCard'])){
                            echo '<input type="text" class="form-control" name="aadhar" value="'.$row['AadharCard'].'" disabled>';
                            }
                            else{
                             echo '<input type="text" class="form-control" name="aadhar" >';
                            }
                            ?>
                          
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" value="<?php echo $row['address'];  ?>" name="Address" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control" value="<?php echo $row['city'];  ?>" name="city" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">State</label>
                          <input type="text" class="form-control" value="<?php echo $row['state']; ?>" name="state" disabled>
                        </div>
                      </div>
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact Number</label>
                          <input type="text" class="form-control" value=" <?php echo $row['contact']; ?>" name="Contact" >
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" name="update_R">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
<!--              ================================-->
              <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
             <?php
                      $connect = mysqli_connect('database-server.cil0lbnaent8.ap-south-1.rds.amazonaws.com','admin','Dash_Utkarsh','DOT') or die("Failed to Connect with Database ");
                      $y= $_SESSION["user_id"];
                      $sql = "Select * From Profile_R where s_id = {$y}";
                     $result = mysqli_query($connect,$sql) or die("Query Unsuccessful.");
                      $row = mysqli_fetch_assoc($result);
                   
                                                     
                      if(isset($row['images']))
                    {
            echo '<img width="45"  height="45" class= "rounded" src="assets/images/Shopkeeper/'. $row['images'].'" >';
                      }
                    else{
             echo "<img width='45' height='45' class='rounded' src='assets/images/Shopkeeper/Profile.png'>" ;}
                ?>
                   
                  </a>
                </div>
                <div class="card-body user-card">
                    <div>
                        <?php
                      $z= $_SESSION["user_id"];
                      $sql = "Select * From Profile_R where s_id = {$z}";
                      $result = mysqli_query($connect,$sql) or die("Query Unsuccessful.");
                      $row = mysqli_fetch_assoc($result);

                                            $a=$row['shop_img'];
                                                     
                                            if(isset($row['shop_img']))
                                                    {
                                                 echo '
                                                <img width="100%" height="150px" data-toggle="modal" data-target="#shop-photo" src="assets/images/shop/'. $a.'" >';
                                                    }
                                            else
                                                    {
                                                    echo "<img width='100%' height='150' data-toggle='modal' data-target='#shop-photo' src='assets\icons\shop.png'>" ;
                                                    }
                        
                        ?>
<!--                        <img src="assets/images/originals/city.jpg" width="100%" height="150px" data-toggle="modal" data-target="#shop-photo">-->
                    </div>
                <div class="edit-circle">
                <label for="file-input">
                    <button type="button" data-toggle="modal" data-target="#profile" 
                                                                class="btn-icon btn-icon-only btn btn-link edit-btn" style=""><img src="assets/icons/edit.png" class='edit-img' width="27px"></button>
                
                </label>
                <input id="file-input" type="file" name="img"/>
                </div>
                  <h6 class="card-category text-gray"><?php echo $row['s_name']; ?></h6>
                  <h4 class="card-title"><?php echo $_SESSION["username"]; ?></h4>
                  <p class="card-description" style="min-width: 500px">
                    
                  </p>
                  <a href="recover.php" class="btn btn-primary btn-round">Reset Password</a>
                </div>
              </div>
            </div>
<!--              ============================old one --------------------------->
              
          
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
                                    
                                    <div class="container-fluid delivery-body">
                                        <div class="card mb-3">
                                            <div class="card-header-tab card-header">
                                            <div class="card-header card-header-primary" style="width : 100%">
                                                    <h4 class="card-title">Delivery Boys</h4>
                                                    <p class="card-category"></p>
                                                    <button type="button" data-toggle="modal" data-target="#exampleModal" 
                                                                class="btn-icon btn-icon-only btn btn-link" style="
                                                                margin-left: 80%; float: right"><img src="assets/icons/button-circle-add-512.webp" width="35px"></button>
                                                  </div>                                                
                                                  <div class="btn-actions-pane-right actions-icon-btn">
                                                    
                                                </div>
                                              </div>
               
                                            <div class="container-fluid">
                                                <div class="card-body row align-items-center">
                                                    <!--   Delivery Boy Cards -->
                                                    
                                                    <?php
                                                        include "../config.php";
                                                        $x = $_SESSION["user_id"];
                                                        $sql = "Select * From DeliveryBoy_R where Approval =1 and s_id = $x";
                                                        $result = mysqli_query($connect,$sql) or die("Query Unsuccessful.");
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row = mysqli_fetch_assoc($result)){
                                                     ?>
                                                    
                                                    <div class="col-lg-4 justify-content-center align-items-center mb-4">
                                                        <div class="card" style="width: 100%; box-shadow: 0px 0px 12px rgba(0,0,0,0.6);">
                                                            <div class="profile text-center p-4">
                                                                <div class="circle">
                                                                    <img src="assets\images\deliveryboy/<?php echo $row['images']; ?>" class="card-img-top" alt="..." style="border-radius: 50%; height: 150px; width: 150px; margin: auto;">
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="card-body bg-light" style="height: 200px">
                                                                <h5 style="font-weight: 60;"><?php echo $row['d_name'];?></h5>
                                                              <p class="card-text">
                                                                  <table>
                                                                      <tr>
                                                                          <td style="vertical-align: top; width: 50%;"><img src="./assets/icons/1.png" width="20" alt="">&nbsp; Address:</td>
                                                                          <td style="word-wrap: break-word;"><?php echo $row['d_address'];?></td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td style="vertical-align: top; width: 50%;"><img src="./assets/icons/contact1.png" width="20" alt="">&nbsp; Contact No.</td>
                                                                          <td style="word-wrap: break-word;"><?php echo $row['d_contact'];?></td>
                                                                      </tr>
                                                                      <tr>
                                                                          <td style="vertical-align: top; width: 50%;"><img src="./assets/icons/1200px-Aadhaar_Logo.svg.png"  width="20" alt="">&nbsp; Aadhar No.</td>
                                                                          <td style="word-wrap: break-word;"><?php echo $row['d_aadhar'];?></td>
                                                                      </tr>
                                                                      
<!--
                                                                      <div class="edit-circle">
                                                                    <label for="file-input">
                                                                    <img src="assets/icons/edit.png" width="25px">
                                                                    </label>

                                                                    <input id="file-input" type="file" />
                                                                      </div>
-->
                                                                  </table>
                                                                  </p>
                                                              </div>
                                                             
                                                        </div>
                                                        </div>
                                                        <?php } } ?>
                                             </div>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                                </div>
                        
    </body>  
<!-- ======================================== Delivery Boy ADD Profile =========================================-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Your Dilvery Boy.</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                  
                <div class="modal-body">
                    <form id="form" action="profiles.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" >
      </div>
     <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="add" >
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Contact Number</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="con" >
      </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Aadhar Card Number</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="addhar" >
      </div>                    
    
      <div class="material-form-field">
                        <label for="img">Profile Image:</label>
                        <input type="file" name="image">
                        </div>
      <button type="submit" class="btn btn-primary" name="save">Submit</button>
</form>
                </div>
                  
              
                  
                </div>
             </div>
          </div>
<!--  ==========================================ShopKeeper Upload Images ====================================================  -->
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Upload Your Image.</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                  
                <div class="modal-body">
                    <form id="form" action="Shopkeeper_image.php" method="POST" enctype="multipart/form-data">
                        
                        
                        <div class="material-form-field">
                            <label for="img">Profile Image:</label>
                            <input type="file" name="img">
                        </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                  
              
                  
                </div>
             </div>
          </div>
<!--========================================Shop Photo ==================================================================-->
<div class="modal fade" id="shop-photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Upload Yours Shop Image.</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form id="form" action="shop_img.php" method="POST" enctype="multipart/form-data">
                        <div class="material-form-field">
                            <label for="img">Profile Image:</label>
                            <input type="file" name="img">
                        </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
             </div>
          </div>
<!--      ======================================== EDIT in Delivery Boy===============================================-->
   
<!--    =================================================JavaSceripts==================================================-->
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// makes sure the whole site is loaded
jQuery(window).load(function() {
        // will first fade out the loading animation
    jQuery("#status").delay(1000).fadeOut();
        // will fade out the whole DIV that covers the website.
        jQuery("#preloader").delay(1000).fadeOut();

})

</script>
<script>
     $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
    </script>
    </body>

</html>

