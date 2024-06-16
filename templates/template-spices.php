<?php
/*
Template Name: Spices
*/
 
$upload_dir = wp_upload_dir(); 

get_header(); ?>

<style>
    /*-----------------------------------*\
  #index.css
\*-----------------------------------*/

/**
 *
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

/**
 * COLORS
 */

--gold-crayola: hsl(291, 71%, 38%);
--quick-silver: hsla(0, 0%, 65%, 1);
--davys-grey: hsla(30, 3%, 34%, 1);
--smoky-black-1: hsla(40, 12%, 5%, 1);
--smoky-black-2: rgb(222, 222, 222);
--smoky-black-3: hsla(0, 3%, 7%, 1);
--eerie-black-1: hsla(210, 4%, 9%, 1);
--eerie-black-2: hsla(210, 4%, 11%, 1);
--eerie-black-3: hsla(180, 2%, 8%, 1);
--eerie-black-4: hsla(0, 0%, 13%, 1);
--white: hsla(0, 0%, 100%, 1);
--white-alpha-20: hsla(0, 0%, 100%, 0.2);
--white-alpha-10: hsla(0, 0%, 100%, 0.1);
--black: hsla(0, 0%, 0%, 1);
--black-alpha-80: hsla(0, 0%, 0%, 0.8);
--black-alpha-15: hsla(0, 0%, 0%, 0.15);

/**
 * GRADIENT COLOR
 */

--loading-text-gradient: linear-gradient(90deg, transparent 0% 16.66%, var(--smoky-black-3) 33.33% 50%, transparent 66.66% 75%);
--gradient-1: linear-gradient(to top, hsla(0, 0%, 0%, 0.9), hsla(0, 0%, 0%, 0.7), transparent);




}


/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*,
*::before,
*::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

li {
list-style: none;
}

a,
img,
data,
span,
input,
button,
select,
ion-icon,
textarea {
display: block;
}

a {
color: inherit;
text-decoration: none;
}

img {
height: auto;
}

input,
button,
select,
textarea {
background: none;
border: none;
font: inherit;
}

input,
select,
textarea {
width: 100%;
outline: none;
}

button {
cursor: pointer;
}

address {
font-style: normal;
}

html {
font-size: 10px;
scroll-behavior: smooth;
}

body {
background-color: var(--eerie-black-1);
color: var(--white);
font-family: var(--fontFamily-dm_sans);
font-size: var(--fontSize-body-4);
font-weight: var(--weight-regular);
line-height: var(--lineHeight-5);
overflow: hidden;
height: 300vh;
}

body.loaded {
overflow: overlay;
}

body.nav-active {
overflow: hidden;
}

::-webkit-scrollbar {
width: 5px;
}

::-webkit-scrollbar-track {
background-color: transparent;
}

::-webkit-scrollbar-thumb {
background-color: var(--gold-crayola);
}





/*-----------------------------------*\
#TYPOGRAPHY
\*-----------------------------------*/

.display-1,
.headline-1,
.headline-2,
.title-1,
.title-2,
.title-3,
.title-4 {
color: var(--white);
font-family: var(--fontFamily-forum);
font-weight: var(--weight-regular);
line-height: var(--lineHeight-2);
}

.display-1 {
margin-bottom: 40px;
font-size: var(--fontSize-display-1);
line-height: var(--lineHeight-1);
}

.headline-1 {
font-size: var(--fontSize-headline-1);
}

.headline-2 {
font-size: var(--fontSize-headline-2);
line-height: var(--lineHeight-6);
}

.title-1 {
font-size: var(--fontSize-title-1);
}

.title-2 {
font-size: var(--fontSize-title-2);
}

.title-3 {
font-size: var(--fontSize-title-3);
}

.title-4 {
font-size: var(--fontSize-title-4);
}

.body-1 {
font-size: var(--fontSize-body-1);
line-height: var(--lineHeight-6);
}

.body-2 {
font-size: var(--fontSize-body-2);
line-height: var(--lineHeight-4);
}

.body-3 {
font-size: var(--fontSize-body-3);
}

.body-4 {
font-size: var(--fontSize-body-4);
}

.label-1 {
font-size: var(--fontSize-label-1);
}

.label-2 {
font-size: var(--fontSize-label-2);
}





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

.container {
padding-inline: 16px;
}

.separator {
width: 8px;
height: 8px;
border: 1px solid var(--gold-crayola);
transform: rotate(45deg);
}

.contact-label {
font-weight: var(--weight-bold);
}

.contact-number {
color: var(--gold-crayola);
max-width: max-content;
margin-inline: auto;
}

.hover-underline {
position: relative;
max-width: max-content;
}

.hover-underline::after {
content: "";
position: absolute;
left: 0;
bottom: 0;
width: 100%;
height: 5px;
border-block: 1px solid var(--gold-crayola);
transform: scaleX(0.2);
opacity: 0;
transition: var(--transition-2);
}

.hover-underline:is(:hover, :focus-visible)::after {
transform: scaleX(1);
opacity: 1;
}

.contact-number::after {
bottom: -5px;
}

.text-center {
text-align: center;
}

.img-cover {
width: 100%;
height: 100%;
object-fit: cover;
}

.section-subtitle {
position: relative;
color: var(--gold-crayola);
font-weight: var(--weight-bold);
text-transform: uppercase;
letter-spacing: var(--letterSpacing-2);
margin-block-end: 12px;
}

.btn {
position: relative;
color: var(--gold-crayola);
font-size: var(--fontSize-label-2);
font-weight: var(--weight-bold);
text-transform: uppercase;
letter-spacing: var(--letterSpacing-5);
max-width: max-content;
border: 2px solid var(--gold-crayola);
padding: 12px 45px;
overflow: hidden;
z-index: 1;
}

.btn::before {
content: "";
position: absolute;
bottom: 100%;
left: 50%;
transform: translateX(-50%);
width: 200%;
height: 200%;
border-radius: var(--radius-circle);
background-color: var(--gold-crayola);
transition: var(--transition-2);
z-index: -1;
}

.btn .text {
transition: var(--transition-1);
}

.btn .text-2 {
position: absolute;
top: 100%;
left: 50%;
transform: translateX(-50%);
min-width: max-content;
color: var(--smoky-black-1);
}

.btn:is(:hover, :focus-visible)::before {
bottom: -50%;
}

.btn:is(:hover, :focus-visible) .text-1 {
transform: translateY(-40px);
}

.btn:is(:hover, :focus-visible) .text-2 {
top: 50%;
transform: translate(-50%, -50%);
}

.btn-secondary {
background-color: var(--gold-crayola);
color: var(--black);
}

.btn-secondary::before {
background-color: var(--smoky-black-1);
}

.btn-secondary .text-2 {
color: var(--white);
}

.has-before,
.has-after {
position: relative;
z-index: 1;
}

.has-before::before,
.has-after::after {
content: "";
position: absolute;
}

.section {
position: relative;
padding-block: var(--section-space);
overflow: hidden;
z-index: 1;
}

.bg-black-10 {
background-color: var(--smoky-black-2);
}

.grid-list {
display: grid;
gap: 40px;
}

.hover\:shine {
position: relative;
}

.hover\:shine::after {
content: "";
position: absolute;
top: 0;
left: 0;
width: 50%;
height: 100%;
background-image: linear-gradient(to right, transparent 0%, #fff6 100%);
transform: skewX(-0.08turn) translateX(-180%);
}

.hover\:shine:is(:hover, :focus-within)::after {
transform: skewX(-0.08turn) translateX(275%);
transition: var(--transition-3);
}

.img-holder {
aspect-ratio: var(--width) / var(--height);
overflow: hidden;
background-color: var(--eerie-black-4);
}

.btn-text {
color: var(--gold-crayola);
padding-block-end: 4px;
margin-inline: auto;
text-transform: uppercase;
letter-spacing: var(--letterSpacing-3);
font-weight: var(--weight-bold);
transition: var(--transition-1);
}

.btn-text:is(:hover, :focus-visible) {
color: var(--white);
}

.shape {
display: none;
position: absolute;
max-width: max-content;
z-index: -1;
}

.w-100 {
width: 100%;
}

.move-anim {
animation: move 5s linear infinite;
}

@keyframes move {

0%,
100% {
  transform: translateY(0);
}

50% {
  transform: translateY(30px);
}
}

.has-bg-image {
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

.input-field {
background-color: var(--eerie-black-2);
color: var(--white);
height: 56px;
padding: 10px 20px;
border: 1px solid var(--white-alpha-10);
margin-block-end: 20px;
outline: none;
transition: border-color var(--transition-2);
}

.input-field::placeholder {
color: inherit;
}

.input-field:focus {
border-color: var(--gold-crayola);
}

.icon-wrapper {
position: relative;
margin-block-end: 20px;
}

.icon-wrapper .input-field {
margin-block-end: 0;
padding-inline-start: 40px;
appearance: none;
cursor: pointer;
}

.icon-wrapper ion-icon {
position: absolute;
top: 50%;
transform: translateY(-50%);
font-size: 1.4rem;
--ionicon-stroke-width: 50px;
pointer-events: none;
}

.icon-wrapper ion-icon:first-child {
left: 15px;
}

.icon-wrapper ion-icon:last-child {
right: 10px;
}


/*-----------------------------------*\
#HEADER
\*-----------------------------------*/

.header .btn {
display: none;
}

.header {
position: fixed;
top: 0;
left: 0;
width: 100%;
background-color: transparent;
padding-block: 40px;
z-index: 4;
border-block-end: 1px solid transparent;
transition: var(--transition-1);
}

.header.active {
padding-block: 20px;
background-color: var(--eerie-black-4);
border-color: var(--black-alpha-15);
}

.header.hide {
transform: translateY(-100%);
transition-delay: 250ms;
}

.header .container {
padding-inline: 20px;
display: flex;
justify-content: space-between;
align-items: center;
gap: 8px;
}

.nav-open-btn {
padding: 12px;
padding-inline-end: 0;
}

.nav-open-btn .line {
width: 30px;
height: 2px;
background-color: var(--white);
margin-block: 4px;
transform-origin: left;
animation: menuBtn 400ms ease-in-out alternate infinite;
}

@keyframes menuBtn {
0% {
  transform: scaleX(1);
}

100% {
  transform: scaleX(0.5);
}
}

.nav-open-btn .line-2 {
animation-delay: 150ms;
}

.nav-open-btn .line-3 {
animation-delay: 300ms;
}

.navbar {
position: fixed;
background-color: var(--smoky-black-1);
top: 0;
left: -360px;
bottom: 0;
max-width: 360px;
width: 100%;
padding-inline: 30px;
padding-block-end: 50px;
overflow-y: auto;
visibility: hidden;
z-index: 2222;
transition: var(--transition-2);
}

.navbar.active {
visibility: visible;
transform: translateX(360px);
}

.navbar .close-btn {
color: var(--white);
border: 1px solid currentColor;
padding: 4px;
border-radius: var(--radius-circle);
margin-inline-start: auto;
margin-block: 30px 20px;
}

.navbar .close-btn ion-icon {
--ionicon-stroke-width: 40px;
}

.navbar .close-btn:is(:hover, :focus-visible) {
color: var(--gold-crayola);
}

.navbar .logo {
max-width: max-content;
margin-inline: auto;
margin-block-end: 60px;
}

.navbar-list {
border-block-end: 1px solid var(--white-alpha-20);
margin-block-end: 100px;
}

.navbar-item {
border-block-start: 1px solid var(--white-alpha-20);
}

.navbar-link {
position: relative;
font-size: var(--fontSize-label-2);
text-transform: uppercase;
padding-block: 10px;
max-width: unset;
}

.navbar-link::after {
display: none;
}

.navbar-link .span {
transition: var(--transition-1);
}

.navbar-link:is(:hover, :focus-visible, .active) .span {
color: var(--gold-crayola);
transform: translateX(20px);
}

.navbar-link .separator {
position: absolute;
top: 50%;
left: 0;
transform: translateY(-50%) rotate(45deg);
opacity: 0;
transition: var(--transition-1);
}

.navbar-link:is(:hover, :focus-visible, .active) .separator {
opacity: 1;
}

.navbar-title {
margin-block-end: 15px;
}

.navbar-text {
margin-block: 10px;
}

.navbar .body-4 {
color: var(--quick-silver);
}

.sidebar-link {
transition: var(--transition-1);
}

.sidebar-link:is(:hover, :focus-visible) {
color: var(--gold-crayola);
}

.navbar .text-center .separator {
margin-block: 30px;
margin-inline: auto;
}

.navbar .contact-label {
margin-block-end: 10px;
}

.navbar::-webkit-scrollbar-thumb {
background-color: var(--white-alpha-10);
}

.overlay {
position: fixed;
top: 0;
left: 0;
bottom: 0;
right: 0;
background-color: var(--black-alpha-80);
opacity: 0;
pointer-events: none;
transition: var(--transition-2);
z-index: 1;
}

.overlay.active {
opacity: 1;
pointer-events: all;
}





/*-----------------------------------*\
#HERO
\*-----------------------------------*/

.hero .slider-btn {
display: none;
}

.hero {
position: relative;
padding-block: 120px;
min-height: 100vh;
overflow: hidden;
z-index: 1;
}

.hero .slider-item {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
width: 100%;
height: 100%;
display: grid;
place-content: center;
padding-block-start: 100px;
opacity: 0;
visibility: hidden;
transition: var(--transition-3);
z-index: 1;
}

.hero .slider-item.active {
opacity: 1;
visibility: visible;
}

.hero .slider-bg {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
transform: scale(1.15);
pointer-events: none;
user-select: none;
z-index: -1;
}

.hero .slider-item.active .slider-bg {
animation: smoothScale 7s linear forwards;
}

@keyframes smoothScale {
0% {
  transform: scale(1);
}

100% {
  transform: scale(1.15);
}
}

.hero .section-subtitle::after {
margin-block: 14px 20px;
}

.hero-text {
margin-block: 10px 40px;
}

.hero .btn {
margin-inline: auto;
}

.hero-btn {
position: absolute;
bottom: 15px;
right: 15px;
z-index: 2;
background-color: var(--gold-crayola);
width: 110px;
height: 110px;
padding: 12px;
transform: scale(0.6);
}

.hero-btn img {
margin-inline: auto;
margin-block-end: 6px;
}

.hero-btn .span {
color: var(--black);
font-weight: var(--weight-bold);
text-transform: uppercase;
letter-spacing: var(--letterSpacing-1);
line-height: var(--lineHeight-3);
}

.hero-btn::after {
inset: 0;
border: 1px solid var(--gold-crayola);
animation: rotate360 15s linear infinite;
}

.slider-reveal {
transform: translateY(30px);
opacity: 0;
}

.hero .slider-item.active .slider-reveal {
animation: sliderReveal 1s ease forwards;
}

@keyframes sliderReveal {
0% {
  transform: translateY(30px);
  opacity: 0;
}

100% {
  transform: translateY(0);
  opacity: 1;
}
}

.hero .slider-item.active .section-subtitle {
animation-delay: 500ms;
}

.hero .slider-item.active .hero-title {
animation-delay: 1000ms;
}

.hero .slider-item.active .hero-text {
animation-delay: 1.5s;
}

.hero .slider-item.active .btn {
animation-delay: 2s;
}





/*-----------------------------------*\
#SERVICE
\*-----------------------------------*/

.service .section-title {
margin-block-end: 16px;
}

.service .section-text {
margin-block-end: 40px;
}

.service-card {
overflow: hidden;
}

.service-card .has-before {
padding-block: 30px;
margin-block-end: 26px;
z-index: 1;
}

.service-card .has-before::before {
top: 0;
left: 50%;
transform: translateX(-50%);
width: 140px;
height: 100%;
background-image: url('../images/img-pattern.svg');
background-position: center;
background-size: cover;
background-repeat: repeat;
transition: var(--transition-2);
transition-delay: 0;
z-index: -1;
will-change: transform;
}

.service-card:is(:hover, :focus-within) .has-before::before {
transform: rotateY(0.5turn) translateX(50%);
transition-delay: 300ms;
}

.service-card .card-banner {
transition: var(--transition-2);
}

.service-card:is(:hover, :focus-within) .card-banner {
transform: scale(1.05);
}

.service .card-title {
margin-block-end: 12px;
}






/*-----------------------------------*\
#ABOUT
\*-----------------------------------*/

.about .section-text {
margin-block: 15px 30px;
}

.about .btn {
margin-inline: auto;
margin-block-start: 26px;
}

.about .container {
display: grid;
gap: 120px;
}

.about-banner {
position: relative;
margin-block-end: 120px;
}

.about-banner>.w-100 {
padding-inline-start: 50px;
}

.about .abs-img {
position: absolute;
}

.about .abs-img::before {
z-index: -1;
}

.about .abs-img-1 {
bottom: -120px;
left: 0;
width: 150px;
padding-block: 50px;
}

.about .abs-img-2 {
top: -65px;
right: 0;
overflow: hidden;
}

.about .abs-img-1::before {
top: 0;
bottom: 0;
left: 50%;
transform: translateX(-50%);
width: 140px;
background-image: url('../images/img-pattern.svg');
background-repeat: repeat;
}

.about .abs-img-2::before {
inset: 0;
background-image: url('../images/badge-2-bg.png');
background-repeat: no-repeat;
background-size: contain;
animation: rotate360 15s linear infinite;
}





/*-----------------------------------*\
#SPECIAL DISH
\*-----------------------------------*/

.special-dish-content {
padding-block: 70px;
}

.special-dish .abs-img {
margin-inline: auto;
margin-block-end: 12px;
}

.special-dish .section-text {
margin-block: 16px 40px;
}

.special-dish-content .wrapper {
display: flex;
justify-content: center;
align-items: center;
gap: 20px;
margin-block-end: 40px;
}

.special-dish-content .del {
text-decoration: none;
color: var(--davys-grey);
}

.special-dish-content .span {
color: var(--gold-crayola);
}

.special-dish .btn {
margin-inline: auto;
}


/*-----------------------------------*\
#TESTIMONIALS
\*-----------------------------------*/

.testi {
padding-block-end: 340px;
position: static;
}

.section-container {
height: 100vh;
width: 100%;
display: flex;
align-items: center;
justify-content: center;
}

.testimonial {
top: 130px;
position: relative;
max-width: 900px;
width: 100%;
}

.testimonial .slides {
display: flex;
overflow: hidden;
}

.testimonial .slide {
min-width: 100%;
transition: transform 0.5s ease-in-out;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
row-gap: 10px;
}

.slide img {
height: 170px;
width: 170px;
object-fit: cover;
border-radius: 50%;
}

.slide p {
text-align: center;
padding: 0 100px;
font-size: 30px;
line-height: 50px;
}

.slide .quote-icon {
font-size: 30px;
color: #4070f4;
}

.details .name {
font-size: 40px;
}

.navigation {
position: absolute;
top: 50%;
width: 100%;
display: flex;
justify-content: space-between;
transform: translateY(-50%);
}

.navigation button {
background: none;
border: none;
font-size: 30px;
cursor: pointer;
color: #fff;
transition: color 0.3s;
}

.navigation button:hover {
color: #4070f4;
}

/*-----------------------------------*\
#FEATURES
\*-----------------------------------*/

.features .section-title {
margin-block-end: 40px;
}

.feature-card {
padding: 30px 20px 40px;
}

.feature-item:nth-child(2n+1) .feature-card {
background-color: var(--eerie-black-3);
}

.feature-item:nth-child(2n) .feature-card {
background-color: var(--smoky-black-3);
}

.feature-card .card-icon {
max-width: max-content;
margin-inline: auto;
transition: var(--transition-2);
}

.feature-card:hover .card-icon {
transform: scale(-1) rotate(180deg);
}

.feature-card .card-title {
margin-block: 20px;
}

.feature-card .card-text {
color: var(--quick-silver);
line-height: var(--lineHeight-6);
}


/*-----------------------------------*\
#EVENT
\*-----------------------------------*/

.event .section-title {
margin-block-end: 40px;
}

.event-card {
position: relative;
overflow: hidden;
}

.event-card .card-content {
background-image: var(--gradient-1);
position: absolute;
bottom: 0;
width: 100%;
padding: 35px 35px 25px;
}

.event-card .publish-date {
position: absolute;
top: 30px;
left: 25px;
padding: 5px 10px;
color: var(--gold-crayola);
background-color: var(--black);
font-weight: var(--weight-bold);
letter-spacing: var(--letterSpacing-1);
line-height: 14px;
}

.event-card .card-subtitle {
color: var(--gold-crayola);
text-transform: uppercase;
font-weight: var(--weight-bold);
letter-spacing: var(--letterSpacing-2);
margin-block-end: 5px;
}

.event-card .card-banner .img-cover {
transition: var(--transition-2);
}

.event-card:is(:hover, :focus-within) .img-cover {
transform: scale(1.05);
}

.event .btn {
margin-inline: auto;
margin-block-start: 40px;
}


/*-----------------------------------*\
#FOOTER
\*-----------------------------------*/

.footer-top {
margin-block-end: 70px;
}

.footer-brand {
position: relative;
padding: 50px 40px;
background: var(--smoky-black-1) url("../images/footer-form-bg.png");
background-position: center top;
background-repeat: repeat;
}

.footer-brand::before,
.footer-brand::after {
top: 0;
width: 15px;
height: 100%;
background-image: url("../images/footer-form-pattern.svg");
}

.footer-brand::before {
left: 0;
}

.footer-brand::after {
right: 0;
}

.footer-brand .logo {
max-width: max-content;
margin-inline: auto;
margin-block-end: 40px;
}

.footer-brand :is(.body-4, .label-1) {
color: var(--quick-silver);
line-height: var(--lineHeight-3);
}

.footer-brand .contact-link {
margin-block: 6px;
transition: var(--transition-1);
}

.footer-brand .contact-link:is(:hover, :focus-visible) {
color: var(--gold-crayola);
}

.footer-brand .wrapper {
display: flex;
justify-content: center;
gap: 2px;
margin-block: 40px 25px;
}

.footer-brand .separator {
animation: rotate360 15s linear infinite;
}

.footer-brand .label-1 {
margin-block-end: 30px;
}

.footer-brand .label-1 .span {
display: inline;
color: var(--white);
}

.footer-brand .icon-wrapper .input-field {
cursor: text;
}

.footer-brand .btn {
min-width: 100%;
}

.footer-list {
display: grid;
gap: 20px;
}

.footer-list .bx{
font-size: 25px;
}

.footer-link {
color: var(--quick-silver);
font-weight: var(--weight-bold);
text-transform: uppercase;
letter-spacing: var(--letterSpacing-4);
margin-inline: auto;
transition: var(--transition-1);
}

.footer-link:is(:hover, :focus-visible) {
color: var(--gold-crayola);
}

.copyright {
color: var(--quick-silver);
line-height: var(--lineHeight-3);
}

.copyright .link {
display: inline;
color: var(--gold-crayola);
text-decoration: underline;
}





/*-----------------------------------*\
#BACK TO TOP
\*-----------------------------------*/

.back-top-btn {
position: fixed;
bottom: 20px;
right: 20px;
background-color: var(--gold-crayola);
color: var(--smoky-black-1);
font-size: 22px;
width: 50px;
height: 50px;
border-radius: var(--radius-circle);
display: grid;
place-items: center;
box-shadow: var(--shadow-1);
transition: var(--transition-1);
opacity: 0;
visibility: hidden;
z-index: 4;
}

.back-top-btn:is(:hover, :focus-visible) {
background-color: var(--white);
color: var(--gold-crayola);
}

.back-top-btn.active {
opacity: 1;
visibility: visible;
}





/*-----------------------------------*\
#MEDIA QUERIES
\*-----------------------------------*/

@media (max-width: 575px) {
.header {
  top: -25px;
}

.header img {
  width: 80px;
}


.navigation {
  display: none;
}

.slide img {
  height: 90px;
  width: 90px;
  object-fit: cover;
  border-radius: 50%;
}

.slide p {
  padding: 0 20px;
  line-height: 20px;
  font-size: 15px;
  height: 90px;
}

.details .name{
  font-size: 20px;
}

.testimonial {
  position: relative;
  max-width: 900px;
  width: 100%;
}

.testimonial .slide {
  min-width: 100%;
  transition: transform 0.5s ease-in-out;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  row-gap: 50px;
}


}

/**
* responsive for larger than 575px screen
*/

@media (min-width: 575px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fontSize-body-2: 2rem;

}



/**
 * REUSED STYLE
 */

:is(.service, .about) .section-text {
  max-width: 420px;
  margin-inline: auto;
}

.contact-number {
  --fontSize-body-1: 3rem;
}







/**
 * HEADER
 */

.header {
  top: -35px;
}

.header.active {
  top: 0;
}

.header .btn {
  display: block;
  margin-inline-start: auto;
}



/**
 * HERO
 */

.hero-btn {
  transform: scale(0.7);
}



/**
 * SERVICE
 */

.service .container {
  max-width: 420px;
  margin-inline: auto;
}



/**
 * ABOUT
 */

.about .container {
  gap: 80px;
}

.about-banner>.w-100 {
  padding-inline-start: 90px;
}

.about .abs-img-1 {
  width: 285px;
}

.about .contact-number {
  --fontSize-body-1: 2.4rem;
}


/**
 * EVENT
 */

.event .container {
  max-width: 420px;
  margin-inline: auto;
}



/**
 * FOOTER
 */

.footer-brand>* {
  max-width: 460px;
  margin-inline: auto;
}

.footer .input-wrapper {
  position: relative;
}

.footer .input-field {
  margin-block-end: 0;
  padding-inline-end: 205px;
}

.footer-brand .btn {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  min-width: max-content;
}

}





/**
* responsive for larger than 768px screen
*/

@media (min-width: 768px) {

/**
 * REUSED STYLE
 */

.grid-list {
  grid-template-columns: 1fr 1fr;
}

:is(.service, .event) .container {
  max-width: 820px;
}

:is(.service, .event) .grid-list li:last-child {
  grid-column: 1 / 3;
  width: calc(50% - 20px);
  margin-inline: auto;
}



/**
 * HEADER
 */

.navbar-list {
  margin-inline: 30px;
}



/**
 * HERO
 */

.hero .slider-btn {
  display: grid;
  position: absolute;
  z-index: 1;
  color: var(--gold-crayola);
  font-size: 2.4rem;
  border: 1px solid var(--gold-crayola);
  width: 45px;
  height: 45px;
  place-items: center;
  top: 50%;
  transform: translateY(-50%) rotate(45deg);
  transition: var(--transition-1);
}

.hero .slider-btn ion-icon {
  transform: rotate(-45deg);
}

.hero .slider-btn.prev {
  left: 30px;
}

.hero .slider-btn.next {
  right: 30px;
}

.hero .slider-btn:is(:hover, :focus-visible) {
  background-color: var(--gold-crayola);
  color: var(--black);
}


/**
 * FOOTER
 */

.footer-brand {
  grid-column: 1 / 3;
}

}





/**
* responsive for larger than 992px screen
*/

@media (min-width: 992px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * spacing
   */

  --section-space: 100px;

}



/**
 * REUSED STYLE
 */

:is(.service, .event) .container {
  max-width: unset;
}

:is(.service, .event) .grid-list {
  grid-template-columns: repeat(4, 1fr);
}

:is(.service, .event) .grid-list li:last-child {
  grid-column: auto;
  width: 100%;
}







/**
 * SERVICE
 */

.service .shape {
  display: block;
}

.service .shape-1 {
  bottom: 0;
  left: 0;
}

.service .shape-2 {
  top: 0;
  right: 0;
}



/**
 * ABOUT
 */

.about .container {
  grid-template-columns: 0.7fr 1fr;
  gap: 30px;
}



/**
 * SPECIAL DISH
 */

.special-dish {
  display: grid;
  grid-template-columns: 1fr 1fr;
  text-align: left;
}

.special-dish-content {
  padding-inline: 50px 25px;
}

.special-dish-content .container {
  position: relative;
}

.special-dish .section-subtitle::after,
.special-dish .btn {
  margin-inline: 0;
}

.special-dish-content .wrapper {
  justify-content: flex-start;
}

.special-dish .abs-img {
  position: absolute;
  top: 10px;
  left: -40px;
  animation: move 5s linear infinite;
}

/**
 * TESTIMONIALS
 */

.testi-text {
  max-width: 910px;
  margin-inline: auto;
}

/**
 * FOOTER
 */

.footer .grid-list {
  grid-template-columns: 0.45fr 1fr 0.45fr;
  align-items: center;
}

.footer-brand {
  grid-column: auto;
  order: 1;
  padding-block: 100px;
}

.footer-list:last-child {
  order: 2;
}

}





/**
* responsive for larger than 1200px screen
*/

@media (min-width: 1200px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fontSize-title-2: 2.5rem;

}



/**
 * REUSED STYLE
 */

.container,
:is(.service, .event) .container {
  max-width: 1200px;
  width: 100%;
  margin-inline: auto;
}




/**
 * HEADER
 */

.nav-open-btn,
.navbar>*:not(.navbar-list),
.header .overlay {
  display: none;
}

.header .container {
  max-width: unset;
}

.navbar,
.navbar.active,
.navbar-list {
  all: unset;
}

.navbar,
.navbar.active {
  margin-inline: auto 20px;
}

.navbar-list {
  display: flex;
  gap: 30px;
}

.navbar-item {
  border-block-start: none;
}

.navbar .separator {
  display: none;
}

.navbar-link:is(:hover, :focus-visible, .active) .span {
  transform: unset;
}

.navbar-link {
  font-weight: var(--weight-bold);
  letter-spacing: var(--letterSpacing-1);
}

.navbar-link::after {
  display: block;
}

.navbar-link.active::after {
  transform: scaleX(1);
  opacity: 1;
}

.header .btn {
  margin-inline-start: 0;
}



/**
 * HERO
 */

.hero {
  height: 880px;
}

.hero-btn {
  bottom: 50px;
  right: 50px;
  transform: scale(1);
}



/**
 * SERVICE
 */

.service .grid-list {
  gap: 150px;
}

.service .section-text {
  margin-block-end: 75px;
}



/**
 * ABOUT
 */

.about {
  padding-block: 170px 100px;
}



/**
 * SPECIAL DISH
 */

.special-dish-content {
  padding: 225px 120px;
  padding-inline-end: 0;
}

.special-dish-content .container {
  max-width: 460px;
  margin-inline: 0;
}


/**
 * TESTIMONIALS
 */

.form-left,
.form-right {
  padding: 75px 60px;
}




/**
 * FEATURES
 */

.features .grid-list {
  grid-template-columns: repeat(4, 1fr);
}

}





/**
* responsive for larger than 1400px screen
*/

@media (min-width: 1400px) {

/**
 * HEADER
 */

.navbar {
  margin-inline: auto;
}



/**
 * ABOUT
 */

.about-content {
  padding-inline-end: 90px;
}

.about .shape {
  display: block;
  top: 46%;
  left: 0;
}



/**
 * SPECIAL DISH
 */

.special-dish {
  overflow: visible;
  position: relative;
}

.special-dish .shape {
  display: block;
  right: 0;
  z-index: 1;
}

.special-dish .shape-1 {
  top: 45%;
}

.special-dish .shape-2 {
  bottom: 0;
  transform: translateY(50%);
  width: max-content;
}



/**
 * FEATURES
 */

.features {
  overflow: visible;
}

.features .shape {
  display: block;
}

.features .shape-1 {
  top: -100px;
  right: 0;
}

.features .shape-2 {
  bottom: 80px;
  left: 0;
}

}
</style>

<main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="hero text-center" aria-label="home" id="home">

                <ul class="hero-slider" data-hero-slider>

                    <li class="slider-item active" data-hero-slider-item>

                        <div class="slider-bg">
                            <img src="<?php echo $upload_dir['baseurl'] . '/images/hr-slider-2.jpg'?>" width="1880" height="950" alt=""
                                class="img-cover">
                        </div>

                        <p class="label-2 section-subtitle slider-reveal">Unlocking Global Spice Treasures</p>

                        <h1 class="display-1 hero-title slider-reveal">
                            SPICES <br>

                        </h1>



                        <a href="#" class="btn btn-primary slider-reveal">
                            <span class="text text-1">Explore Now</span>

                            <span class="text text-2" aria-hidden="true">Explore Now</span>
                        </a>

                    </li>
                </ul>
            </section>

            <!-- 
        - #SPICES
      -->

            <section class="section event bg-black-10" aria-label="event">
                <div class="container">

                    <h2 class="section-subtitle label-2 text-center">MTE EXIM Spices have been one of the leading spice
                        exporters
                        for over a decade and export various varieties of high grade spices.</h2>

                    <p class="section-text text-center" style="color: black; margin: 30px;">A spice adds flavour, aroma
                        and colour to our food. Most
                        spices have various medicinal properties and hence used in the preparation of medicines from
                        ancient times. They are also used as as in ingredient in cosmetics and perfumes.</p>

                    <ul class="grid-list">

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/chillies.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/chilli-pepper.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Dry Chillies
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/cumin seed.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/cumin seed.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Cumin Seeds
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/fennel.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/fennel.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Fennel Seeds
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/turmeric.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/turmeric.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Turmeric
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/ajwain.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/ajwain.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Ajwain
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/fenugreek.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/fenugreek.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Fenugreek
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/dill_seed.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/dill_seed.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Dill Seeds
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/cardamom.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/cardamom.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Cardamom
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/garlic.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/garlic.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Garlic
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/nutmeg.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/nutmeg.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Nutmeg
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/black-pepper.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/black-pepper.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Black Pepper
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/cinnamon.jpg'?>" width="350" height="450"
                                        loading="lazy" alt="Flavour so good you’ll try to eat with your eyes."
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <div class="card-icon">
                                        <img src="<?php echo $upload_dir['baseurl'] . '/product_images/cinnamon.png'?>" width="100" height="80"
                                            loading="lazy" alt="icon">
                                    </div>

                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        Cinnamon
                                    </h3>
                                </div>

                            </div>
                        </li>

                    </ul>


                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/shape-1.png'?>" width="246" height="412" loading="lazy" alt="shape"
                        class="shape shape-1 move-anim">
                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/shape-2.png'?>" width="343" height="345" loading="lazy" alt="shape"
                        class="shape shape-2 move-anim">

                </div>
            </section>
        </article>
    </main>

<?php get_footer(); ?>
