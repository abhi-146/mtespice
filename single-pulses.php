<?php
//Single-pulses.php

$upload_dir = wp_upload_dir();

get_header(); ?>

<style>

/*-----------------------------------*\
  #single-pulses.css
\*-----------------------------------*/

/**
 *
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/
@import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
:root {

/**
 * COLORS
 */

--gold-crayola: #20a7db;
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

/**
 * TYPOGRAPHY
 */

/* font-family */
--fontFamily-forum: 'Forum', cursive;
--fontFamily-dm_sans: 'DM Sans', sans-serif;

/* font-size */
--fontSize-display-1: calc(1.3rem + 6.7vw);
--fontSize-headline-1: calc(2rem + 2.5vw);
--fontSize-headline-2: calc(1.3rem + 2.4vw);
--fontSize-title-1: calc(1.6rem + 1.2vw);
--fontSize-title-2: 2.2rem;
--fontSize-title-3: 2.1rem;
--fontSize-title-4: calc(1.6rem + 1.2vw);
--fontSize-body-1: 2.4rem;
--fontSize-body-2: 1.6rem;
--fontSize-body-3: 1.8rem;
--fontSize-body-4: 1.6rem;
--fontSize-label-1: 1.4rem;
--fontSize-label-2: 1.4rem;

/* font-weight */
--weight-regular: 400;
--weight-bold: 700;

/* line-height */
--lineHeight-1: 1em;
--lineHeight-2: 1.2em;
--lineHeight-3: 1.5em;
--lineHeight-4: 1.6em;
--lineHeight-5: 1.85em;
--lineHeight-6: 1.4em;

/* letter-spacing */
--letterSpacing-1: 0.15em;
--letterSpacing-2: 0.4em;
--letterSpacing-3: 0.2em;
--letterSpacing-4: 0.3em;
--letterSpacing-5: 3px;

/**
 * SPACING
 */

--section-space: 30px;

/**
 * SHADOW
 */

--shadow-1: 0px 0px 25px 0px hsla(0, 0%, 0%, 0.25);

/**
 * BORDER RADIUS
 */

--radius-24: 24px;
--radius-circle: 50%;

/**
 * TRANSITION
 */

--transition-1: 250ms ease;
--transition-2: 500ms ease;
--transition-3: 1000ms ease;

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
background-color: #fff;
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
font-family: "Berkshire Swash", serif;
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

.details-btn {
    margin-left: 50px;
    display: none;
    padding: 5px 20px;
    background-color: var(--gold-crayola);
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.event-card:hover .details-btn {
    display: inline-block;
}

.popup {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}

.popup-content {
    color: black;
    background-color: #fff;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.popup-image {
    flex: 2;
    margin-right: 20px;
}

.popup-image img {
    width: 100%;
    height: auto;
}

.popup-text {
    flex: 2;
}

.close {
    position: absolute;
    right: 20px;
    top: 20px;
    color: var(--gold-crayola);
    font-size: 35px;
    font-weight: bold;
    cursor: pointer;
}

.enquiry-btn {
    padding: 5px 20px;
    background-color: var(--gold-crayola);
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: block;
    margin: 20px 0;
}

.contact-info {
    margin-top: 20px;
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

.details-btn {
  margin-left: 90px;
}

.popup{
  background-color: #fff;
  overflow: auto;
}

.popup-image img {
    width: 54vh;
    height: 40vh;
}

.popup-content {
    color: black;
    margin: 5% auto;
    padding: 20px;
    width: 100%;
    height: 100%;
    border: none;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

 .popup-image {
                margin: 0 0 20px 25px;
            }

 .popup-text {
                text-align: center;
            }

.close {
                font-size: 30px;
            }

.enquiry-btn {
                width: 100%;
                margin: 10px 0;
            }



iframe {
  margin-top: 20px;
    width: 100%;
    height: 500px;
    border: 0;
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


.left-address, .right-address{
    flex: 1;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    color: #000;
    width: 682px;
}

.details-btn {
  margin-left: 92px;
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

.details-btn {
  margin-left: 30px;
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

.details-btn {
  margin-left: 50px;

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

.hero.single-template {
    min-height: 12vh !important;
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
                            PULSES <br>

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

                    <h2 class="section-subtitle label-2 text-center">NK Agro is India’s largest exporter of Chilli</h2>

                    <p class="section-text text-center" style="color: black; margin: 30px;">We export over 25 varieties of chillies in all leading markets across the world. We have an extensive network to source them from all major chilli producing states of India which are Andhra Pradesh, Karnataka, Orissa, West Bengal, Maharashtra, Madhya Pradesh and Gujarat.</p>

                        <ul class="grid-list">

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 450; --height: 350;">
                                    <img src="./assets/product_images/chillies.jpg" width="450" height="350"
                                        loading="lazy" alt=""
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        S17 Teja Stem
                                    </h3>
                                    <button class="details-btn" onclick="showPopup()">Details</button>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 450; --height: 350;">
                                    <img src="./assets/product_images/chillies.jpg" width="450" height="350"
                                        loading="lazy" alt=""
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        S17 Teja Stem
                                    </h3>
                                    <button class="details-btn" onclick="showPopup()">Details</button>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 450; --height: 350;">
                                    <img src="./assets/product_images/chillies.jpg" width="450" height="350"
                                        loading="lazy" alt=""
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        S17 Teja Stem
                                    </h3>
                                    <button class="details-btn" onclick="showPopup()">Details</button>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 450; --height: 350;">
                                    <img src="./assets/product_images/chillies.jpg" width="450" height="350"
                                        loading="lazy" alt=""
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        S17 Teja Stem
                                    </h3>
                                    <button class="details-btn" onclick="showPopup()">Details</button>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 450; --height: 350;">
                                    <img src="./assets/product_images/chillies.jpg" width="450" height="350"
                                        loading="lazy" alt=""
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        S17 Teja Stem
                                    </h3>
                                    <button class="details-btn" onclick="showPopup()">Details</button>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 450; --height: 350;">
                                    <img src="./assets/product_images/chillies.jpg" width="450" height="350"
                                        loading="lazy" alt=""
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        S17 Teja Stem
                                    </h3>
                                    <button class="details-btn" onclick="showPopup()">Details</button>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 450; --height: 350;">
                                    <img src="./assets/product_images/chillies.jpg" width="450" height="350"
                                        loading="lazy" alt=""
                                        class="img-cover">
                                </div>

                                <div class="card-content">
                                    <h3 class="card-title title-2 text-center" style="margin: 20px;">
                                        S17 Teja Stem
                                    </h3>
                                    <button class="details-btn" onclick="showPopup()">Details</button>
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

            <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="hidePopup()">&times;</span>
            <div class="popup-image">
                <img src="./assets/product_images/chillies.jpg" alt="Chillies">
            </div>
            <div class="popup-text">
                <h2>S17 Teja with Stem</h2>
                <h3>Product Specifications:</h3>
                <p>Product Name: S17 Teja with Stem</p>
                <p>Moisture: Less than 10%</p>
                <p>Length: 6-9 cm (without stem)</p>
                <p>Pungency: 85000 SHU - 100000 SHU</p>
                <p>Color Value: 60 ASTA - 80 ASTA</p>
                <p>Capsaicin content: 0.589%</p>
                <p>The S17 Teja chilli is the most spiciest variety available in India. The red factor and the compelling taste in our food is enhanced by Teja S17. The major world cuisines like Chinese, American, Thai, Italian, Japanese and Indian use this quality to enrich the taste, colour and smell of the food. It is also used in the making of chilli powder and is rich in various vitamins and minerals.</p>
                <button class="enquiry-btn">Submit an Enquiry</button>
                <div class="contact-info">
                    <p>For Sales Enquiries:</p>
                    <p>&#x1F4DE; +91 96666 66122 | &#x1F4E7; info@nkexpo.com</p>
                </div>
            </div>
        </div>
    </div>
        </article>
    </main>

<?php get_footer(); ?>