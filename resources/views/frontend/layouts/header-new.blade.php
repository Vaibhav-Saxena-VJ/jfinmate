<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')" />
        <meta name="Keywords" content="@yield('keywords')">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{ asset('theme') }}/frontend/lib/animate/animate.min.css"/>
        <link href="{{ asset('theme') }}/frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="{{ asset('theme') }}/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('theme') }}/frontend/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('theme') }}/frontend/css/style.css" rel="stylesheet">


        <!-- Cutomized Scripts and CSS -->
        <script src="@yield('scripts')"></script>
        <script src="@yield('scripts2')"></script>
        <link rel="stylesheet" href="@yield('links')"/>
        <style>
        /**----------------------------------------
START: Theme Header CSS
----------------------------------------*/
.header {
  background-color: transparent;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 99;
}
@media only screen and (max-width: 992px) {
  .header {
    position: inherit;
  }
}
.header .header-container {
  max-width: 1420px;
  width: 100%;
  padding: 0 15px;
  margin: 0 auto;
}
.header .primary-header-inner {
  background-color: var(--mt-color-common-white);
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 50px;
  border-radius: 0 0 15px 15px;
}
@media (max-width: 1170px) {
  .header .primary-header-inner {
    padding: 20px 0;
  }
}
.header .primary-header-inner .header-logo img {
  max-width: 170px;
}
@media (max-width: 1399px) {
  .header .primary-header-inner .header-logo img {
    max-width: 150px;
  }
}
@media (max-width: 1170px) {
  .header .primary-header-inner .header-logo img {
    max-width: 150px;
  }
}
.header .primary-header-inner .header-menu-wrap {
  display: flex !important;
  align-items: center;
}
.header .primary-header-inner .header-menu-wrap .sub-menu {
  margin: 0;
  padding: 0;
  list-style: none;
}
@media only screen and (max-width: 992px) {
  .header .primary-header-inner .header-menu-wrap .sub-menu {
    display: none;
  }
}
.header .primary-header-inner .header-menu-wrap .sub-menu li {
  display: inline-block;
  position: relative;
  margin: 0 20px;
}
@media (max-width: 1170px) {
  .header .primary-header-inner .header-menu-wrap .sub-menu li {
    margin: 0 10px;
  }
}
.header .primary-header-inner .header-menu-wrap .sub-menu li a {
  font-family: var(--mt-ff-body);
  color: var(--mt-color-heading-primary);
  display: block;
  font-size: 17px;
  padding: 52px 0;
  letter-spacing: 0;
  font-weight: 500;
  text-transform: capitalize;
  position: relative;
  text-decoration: none;
  -webkit-font-smoothing: antialiased;
  transition: all 0.3s ease-in-out;
}
.header .primary-header-inner .header-menu-wrap .sub-menu li a i {
  font-size: 13px;
}
.header .primary-header-inner .header-menu-wrap .sub-menu li a:before {
  content: "";
  background-color: var(--mt-color-theme-primary);
  width: 0;
  height: 2px;
  position: absolute;
  bottom: 48px;
  transform: skewX(30deg);
  transition: all 0.4s ease-in-out;
}
.header .primary-header-inner .header-menu-wrap .sub-menu li ul {
  background-color: var(--mt-color-common-white);
  display: block;
  width: 220px;
  padding: 0;
  -webkit-box-shadow: 0px 50px 100px 0px rgba(64, 1, 4, 0.1), 0px -6px 0px 0px rgba(248, 99, 107, 0.004);
  box-shadow: 0px 50px 100px 0px rgba(64, 1, 4, 0.1), 0px -6px 0px 0px rgba(248, 99, 107, 0.004);
  position: absolute;
  left: 0;
  top: 132px;
  opacity: 0;
  visibility: hidden;
  z-index: 0;
  -webkit-transform: rotate3d(1, 0, 0, -90deg);
  transform: rotate3d(1, 0, 0, -90deg);
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
  transition: all 0.6s ease;
}
.header .primary-header-inner .header-menu-wrap .sub-menu li:hover > ul {
  visibility: visible;
  transition: all 0.6s ease;
  opacity: 1;
  transform: none;
}
.header .primary-header-inner .header-menu-wrap .sub-menu li li {
  display: flex;
  justify-content: space-between;
  text-align: left;
  position: relative;
  transition: all 0.3s ease-in-out;
}
.header .primary-header-inner .header-menu-wrap .sub-menu li li:not(:last-of-type) {
  border-bottom: 1px dashed var(--mt-color-border-1);
}
.header .primary-header-inner .header-menu-wrap .sub-menu li li:last-child {
  margin: 0;
  border-bottom: none;
}
.header .primary-header-inner .header-menu-wrap .sub-menu li li:hover {
  background-color: var(--mt-color-theme-primary);
}
.header .primary-header-inner .header-menu-wrap .sub-menu li li a {
  display: block;
  height: auto;
  line-height: inherit;
  color: var(--mt-color-common-black);
  font-weight: 500;
  font-size: 15px;
  padding: 15px 0;
  letter-spacing: 0;
  width: 100%;
  -webkit-font-smoothing: antialiased;
  margin: 0;
}
.header .primary-header-inner .header-menu-wrap .sub-menu li li a:hover {
  padding-left: 10px;
  color: var(--mt-color-common-white);
}
.header .primary-header-inner .header-menu-wrap .sub-menu li li a:before {
  display: none;
}
.header .primary-header-inner .header-menu-wrap .sub-menu li:hover a:before {
  width: 100%;
}
.header .primary-header-inner .header-menu-wrap .sub-menu .menu-item-has-children {
  position: relative;
}
.header .primary-header-inner .header-menu-wrap .sub-menu .menu-item-has-children a {
  padding-right: 15px;
}
@media (max-width: 1170px) {
  .header .primary-header-inner .header-menu-wrap .sub-menu .menu-item-has-children a {
    padding-right: 15px;
  }
}
.header .primary-header-inner .header-menu-wrap .sub-menu .menu-item-has-children ul li {
  margin: 0;
  padding-left: 25px;
}
.header .primary-header-inner .header-menu-wrap .sub-menu .menu-item-has-children ul li a {
  padding-right: 0;
}
.header .primary-header-inner .header-menu-wrap .sub-menu .menu-item-has-children:after {
  background-image: none;
  font-family: "Font Awesome 6 Pro";
  font-size: 12px;
  content: "+";
  color: var(--mt-color-heading-primary);
  position: absolute;
  top: 51%;
  right: 0;
  transform: translateY(-50%);
  transition: all 0.3s ease-in-out;
  cursor: pointer;
}
.header .primary-header-inner .header-menu-wrap .sub-menu .menu-item-has-children:hover:before {
  color: var(--mt-color-theme-primary);
}
.header .primary-header-inner .header-right {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 767px) {
  .header .primary-header-inner .header-right .header-logo img {
    width: 90px;
  }
}
.header .primary-header-inner .header-right .header-btn {
  background-color: var(--mt-color-theme-primary);
  color: var(--mt-color-common-white);
  margin-left: 20px;
}
.header .primary-header-inner .header-right .header-btn:hover {
  color: var(--mt-color-heading-primary);
}
.header .primary-header-inner .header-right .header-btn:after, .header .primary-header-inner .header-right .header-btn:before {
  background-color: var(--mt-color-theme-secondary);
}
@media only screen and (max-width: 992px) {
  .header .primary-header-inner .header-right .header-btn {
    margin-left: 0;
    margin-right: 30px;
  }
}
@media only screen and (max-width: 767px) {
  .header .primary-header-inner .header-right .header-btn {
    display: none;
  }
}
.header .primary-header-inner .header-right .sidebar-trigger {
  background-color: var(--mt-color-heading-primary);
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  row-gap: 7px;
  padding: 15px 10px;
  margin-left: 40px;
  border-radius: 3px;
}
@media (max-width: 1170px) {
  .header .primary-header-inner .header-right .sidebar-trigger {
    margin-left: 15px;
  }
}
@media only screen and (max-width: 992px) {
  .header .primary-header-inner .header-right .sidebar-trigger {
    display: none;
  }
}
.header .primary-header-inner .header-right .sidebar-trigger span {
  background-color: var(--mt-color-common-white);
  width: 30px;
  height: 3px;
  display: block;
  border-radius: 2px;
  transition: all 0.3s ease-in-out;
}
.header .primary-header-inner .header-right .sidebar-trigger span:nth-child(2) {
  width: 20px;
}
.header .primary-header-inner .header-right .sidebar-trigger span:nth-child(3) {
  width: 25px;
}
.header .primary-header-inner .header-right .sidebar-trigger:hover span:nth-child(2) {
  width: 25px;
}
.header .primary-header-inner .header-right .sidebar-trigger:hover span:nth-child(3) {
  width: 20px;
}
.header .primary-header-inner .header-right .header-right-item {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 992px) {
  .header .primary-header-inner .header-right .header-right-item {
    line-height: 1;
  }
}
.header .primary-header-inner .header-right .header-right-item .mobile-side-menu-toggle {
  color: var(--mt-color-heading-primary);
  font-size: 30px;
}
.header .primary-header-inner .header-right .header-right-item .search-icon {
  font-size: 16px;
  margin-left: 55px;
  cursor: pointer;
}
@media only screen and (max-width: 992px) {
  .header .primary-header-inner .header-right .header-right-item .search-icon {
    margin-right: 20px;
  }
}
@media only screen and (max-width: 992px) {
  .header .primary-header-inner .mean-push {
    display: none;
  }
  .header .primary-header-inner .header-right {
    width: 100%;
  }
}

@media only screen and (max-width: 992px) {
  .mobile-side-menu .header-right {
    display: none !important;
  }
}
.side-menu-icon {
  position: absolute;
  right: 20px;
  top: 25px;
  z-index: 100;
  display: block;
  cursor: pointer;
}
@media only screen and (max-width: 992px) {
  .side-menu-icon {
    display: none;
  }
}

.side-menu-wrapper {
  position: fixed;
  overflow-y: auto;
  top: 0;
  right: 0;
  width: 850px;
  -webkit-transform: translateX(850px);
  -ms-transform: translateX(850px);
  transform: translateX(850px);
  height: 100%;
  display: block;
  background-color: var(--mt-color-theme-bg-dark-deep);
  z-index: 100;
  padding: 40px;
  -webkit-transition: transform 0.5s ease;
  -o-transition: transform 0.5s ease;
  transition: transform 0.5s ease;
  backface-visibility: hidden;
}
.side-menu-wrapper .side-menu-close {
  background-color: var(--mt-color-theme-primary);
  position: absolute;
  top: 40px;
  right: 40px;
  font-size: 18px;
  color: #fff;
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50%;
  text-align: center;
}
.side-menu-wrapper.is-open {
  -webkit-transform: translateX(0);
  -ms-transform: translateX(0);
  transform: translateX(0);
}
@media only screen and (max-width: 992px) {
  .side-menu-wrapper {
    display: none;
  }
}

.side-menu-content .side-menu-header {
  font-family: var(--mt-ff-body);
  font-size: 30px;
  max-width: 600px;
  line-height: 1.5;
  font-weight: 400;
  width: 100%;
  margin-bottom: 40px;
}
.side-menu-content .side-menu-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 25px;
  border: 1px solid transparent;
  transition: all 0.3s ease-in-out;
  margin-bottom: 30px;
}
.side-menu-content .side-menu-item .side-menu-thumb-box {
  display: flex;
  align-items: center;
  column-gap: 30px;
}
.side-menu-content .side-menu-item .side-menu-thumb-box img {
  max-width: 150px;
}
.side-menu-content .side-menu-item .side-menu-thumb-box .side-menu-info .side-menu-title {
  font-family: var(--mt-ff-body);
  font-size: 32px;
  font-weight: 500;
  color: var(--mt-color-theme-primary);
  line-height: 1;
  margin-bottom: 10px;
}
.side-menu-content .side-menu-item .side-menu-thumb-box .side-menu-info p {
  max-width: 400px;
  width: 100%;
}
.side-menu-content .side-menu-item .side-menu-thumb-box .side-menu-info p:last-child {
  margin-bottom: 0;
}
.side-menu-content .side-menu-item .side-menu-arrow {
  font-size: 45px;
  color: var(--mt-color-theme-primary);
  transform: rotate(-45deg);
  transition: all 0.3s ease-in-out;
}
.side-menu-content .side-menu-item:hover {
  border: 1px solid var(--mt-color-border-6);
}
.side-menu-content .side-menu-item:hover .side-menu-arrow {
  transform: rotate(0deg);
}
.side-menu-content .side-menu-item:last-child {
  margin-bottom: 0;
}

.side-menu-overlay {
  background-color: rgba(0, 0, 0, 0.7);
  height: 100%;
  width: 0%;
  position: fixed;
  top: 0;
  z-index: 9;
  right: 0;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 600ms ease;
  -o-transition: all 600ms ease;
  transition: all 600ms ease;
  z-index: 10;
}
.side-menu-overlay.is-open {
  width: 100%;
  opacity: 0.5;
  visibility: visible;
  cursor: url(../img/cancel.html), auto;
}
@media only screen and (max-width: 992px) {
  .side-menu-overlay {
    display: none;
  }
}

.sticky-header-wrap {
  width: 100%;
  position: fixed;
  left: 0;
  top: 0;
  display: none;
  z-index: 99;
}
.sticky-header-wrap.fixed {
  display: block;
  animation-name: menuSticky;
  -webkit-animation-name: menuSticky;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-timing-function: ease;
  -webkit-animation-timing-function: ease;
  box-shadow: 0px 1px 3px 0px rgba(255, 255, 255, 0.1);
}
.sticky-header-wrap .header {
  background-color: var(--mt-color-common-white);
  position: relative;
  top: 0;
}
.sticky-header-wrap .header .top-bar {
  display: none;
}

.header-2 .sticky-header-wrap .header {
  background-color: #171719;
}

@-webkit-keyframes menuSticky {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0%);
  }
}
@keyframes menuSticky {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0%);
  }
}
.mobile-side-menu-overlay,
.mobile-side-menu {
  display: none;
}

@media only screen and (max-width: 992px) {
  .mobile-side-menu {
    background-color: var(--mt-color-common-white);
    position: fixed;
    overflow-y: auto;
    top: 0;
    right: 0;
    width: 80%;
    -webkit-transform: translateX(100%);
    -ms-transform: translateX(100%);
    transform: translateX(100%);
    height: 100%;
    display: block;
    z-index: 100;
    padding: 40px 40px 40px 40px;
    -webkit-transition: transform 0.5s ease;
    -o-transition: transform 0.5s ease;
    transition: transform 0.5s ease;
    backface-visibility: hidden;
  }
}
@media only screen and (max-width: 992px) and (max-width: 767px) {
  .mobile-side-menu {
    padding: 40px 20px;
    width: 100%;
    max-width: 320px;
  }
}
@media only screen and (max-width: 992px) {
  .mobile-side-menu.is-open {
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }
  .mobile-side-menu .side-menu-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 50px;
  }
  .mobile-side-menu .side-menu-head a img {
    max-width: 120px;
  }
  .mobile-side-menu .side-menu-head .mobile-side-menu-close {
    position: fixed;
    top: 35px;
    right: 40px;
    color: var(--mt-color-heading-primary);
    font-size: 17px;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid var(--mt-color-border-1);
  }
}
@media only screen and (max-width: 992px) and (max-width: 767px) {
  .mobile-side-menu .side-menu-head .mobile-side-menu-close {
    right: 16px;
  }
}
@media only screen and (max-width: 992px) {
  .mobile-side-menu .side-menu-head .mobile-side-menu-close:hover {
    background-color: var(--mt-color-theme-primary);
    color: var(--mt-color-common-white);
  }
  .mobile-side-menu .side-menu-wrap {
    overflow: hidden;
    margin-bottom: 50px;
  }
  .mobile-side-menu p {
    color: var(--mt-color-common-white);
    margin-bottom: 50px;
  }
  .mobile-side-menu .list-header {
    color: var(--mt-color-common-white);
    font-family: var(--mt-ff-body);
    font-weight: 400;
    margin-bottom: 30px;
  }
  .mobile-side-menu .side-menu-list li {
    font-family: var(--mt-ff-heading);
    font-size: 14px;
    font-weight: 500;
    color: var(--mt-color-heading-primary);
  }
  .mobile-side-menu .side-menu-list li span,
  .mobile-side-menu .side-menu-list li a {
    color: var(--mt-color-heading-primary);
    margin-left: 10px;
    font-size: 14px;
  }
  .mobile-side-menu .side-menu-list li i {
    margin-right: 10px;
  }
  .mobile-side-menu .side-menu-social ul {
    display: flex;
    align-items: center;
    column-gap: 10px;
    list-style: none;
  }
  .mobile-side-menu .side-menu-social ul li a {
    background-color: var(--mt-color-theme-bg-dark-deep);
    color: var(--mt-color-theme-primary);
    font-size: 18px;
    width: 50px;
    padding: 15px 0;
    line-height: 1;
    text-align: center;
    border-radius: 2px;
    display: block;
    margin-bottom: 10px;
    transition: all 0.3s ease-in-out;
  }
  .mobile-side-menu .side-menu-social ul li a:hover {
    background-color: var(--mt-color-theme-primary);
    color: var(--mt-color-common-white);
  }
  .mobile-side-menu .mean-bar {
    background-color: transparent;
    min-height: auto;
    padding: 0;
  }
  .mobile-side-menu .mean-bar .meanmenu-reveal {
    display: none !important;
  }
  .mobile-side-menu .mean-bar .mean-nav {
    background-color: transparent;
    margin-top: 0;
    padding-top: 20px;
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul {
    display: block !important;
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li {
    position: relative;
    float: none;
    display: block;
    width: auto;
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li:not(:last-of-type) {
    margin-bottom: 24px;
    padding-bottom: 20px;
    border-bottom: 1px solid var(--mt-color-border-1);
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li a {
    color: var(--mt-color-heading-primary);
    font-size: 22px;
    font-weight: 600;
    line-height: 1;
    border-top: none;
    padding: 0;
    float: none;
  }
}
@media only screen and (max-width: 992px) and (max-width: 767px) {
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li a {
    font-size: 18px;
  }
}
@media only screen and (max-width: 992px) {
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li a.mean-expand {
    background-color: var(--mt-color-theme-primary);
    color: var(--mt-color-common-white);
    position: absolute;
    padding: 0;
    top: -3px;
    right: 0;
    width: 25px;
    height: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li a.mean-expand:before, .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li a.mean-expand:after {
    font-size: 14px;
    font-family: "Font Awesome 6 Pro";
    font-weight: 900;
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li a.mean-expand:before {
    content: "+";
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li a.mean-expand.mean-clicked {
    background-color: var(--mt-color-theme-secondary);
    color: var(--mt-color-heading-primary);
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li a.mean-expand.mean-clicked:after {
    content: "\f068";
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li a.mean-expand.mean-clicked:before {
    display: none;
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li a.mean-expand i {
    display: none;
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li ul {
    padding: 0 0 0 30px;
    margin-top: 20px;
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li ul li:not(:last-of-type) {
    padding-bottom: 15px;
    margin-bottom: 15px;
  }
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li ul li a {
    padding: 0;
    font-size: 20px;
    font-weight: 500;
    text-transform: capitalize;
  }
}
@media only screen and (max-width: 992px) and (max-width: 767px) {
  .mobile-side-menu .mean-bar .mean-nav.mean-nav > ul li ul li a {
    font-size: 14px;
  }
}
@media only screen and (max-width: 992px) {
  .mobile-side-menu-overlay {
    background-color: rgba(0, 0, 0, 0.7);
    height: 100%;
    width: 0%;
    position: fixed;
    top: 0;
    z-index: 9;
    right: 0;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 600ms ease;
    -o-transition: all 600ms ease;
    transition: all 600ms ease;
    z-index: 10;
    display: block;
  }
  .mobile-side-menu-overlay.is-open {
    width: 100%;
    opacity: 0.5;
    visibility: visible;
    cursor: url(../img/cancel.html), auto;
  }
}
#popup-search-box {
  background-color: rgba(0, 0, 0, 0.95);
  position: fixed;
  width: 100%;
  height: 100%;
  top: -100%;
  left: 0;
  right: 0;
  white-space: nowrap;
  z-index: 9999;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 500ms ease all;
  -moz-transition: 500ms ease all;
  transition: 500ms ease all;
}
#popup-search-box .box-inner-wrap {
  width: 100%;
  height: 100%;
}
#popup-search-box .box-inner-wrap form {
  position: relative;
  width: 100%;
  max-width: 560px;
  margin: 0 auto;
  padding: 0 15px;
}
#popup-search-box .box-inner-wrap form input {
  width: 100%;
  padding: 30px 30px;
  padding-right: 80px;
  background: transparent;
  border: none;
  color: #ddd;
  border: 1px solid #666;
}
#popup-search-box .box-inner-wrap form input::-webkit-input-placeholder {
  color: #666;
  font-size: 20px;
}
#popup-search-box .box-inner-wrap form input:-moz-placeholder {
  color: #666;
  font-size: 20px;
}
#popup-search-box .box-inner-wrap form input::-moz-placeholder {
  color: #666;
  font-size: 20px;
}
#popup-search-box .box-inner-wrap form input:-ms-input-placeholder {
  color: #666;
  font-size: 20px;
}
#popup-search-box .box-inner-wrap form input:focus {
  outline: none;
}
#popup-search-box .box-inner-wrap:hover {
  cursor: url(../img/cross.html), auto;
}
#popup-search-box .box-inner-wrap button {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 80px;
  height: 100%;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  background: transparent;
  border: none;
  color: #444;
  font-size: 50px;
  -webkit-transition: 500ms ease all;
  -moz-transition: 500ms ease all;
  transition: 500ms ease all;
}
#popup-search-box .box-inner-wrap button:hover {
  color: #ddd;
}
#popup-search-box .box-inner-wrap button:focus {
  outline: none;
}
#popup-search-box.toggled {
  top: 0;
  opacity: 1;
  visibility: visible;
}

.popup-tags {
  position: relative;
  margin: 0 auto;
}

.header-2 .header-container {
  max-width: 1440px;
}
.header-2 .top-bar-inner,
.header-2 .top-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 0;
  border-bottom: 1px solid var(--mt-color-border-2);
}
@media only screen and (max-width: 767px) {
  .header-2 .top-bar-inner,
  .header-2 .top-bar {
    display: none;
  }
}
.header-2 .top-bar-inner .top-bar-list,
.header-2 .top-bar .top-bar-list {
  list-style: none;
}
@media only screen and (max-width: 767px) {
  .header-2 .top-bar-inner .top-bar-list,
  .header-2 .top-bar .top-bar-list {
    display: none;
  }
}
.header-2 .top-bar-inner .top-bar-list li,
.header-2 .top-bar .top-bar-list li {
  font-family: var(--mt-ff-body);
  display: inline-flex;
  align-items: center;
  font-size: 14px;
  color: var(--mt-color-grey-3);
}
.header-2 .top-bar-inner .top-bar-list li:not(:last-of-type),
.header-2 .top-bar .top-bar-list li:not(:last-of-type) {
  margin-right: 60px;
}
@media only screen and (max-width: 992px) {
  .header-2 .top-bar-inner .top-bar-list li:not(:last-of-type),
  .header-2 .top-bar .top-bar-list li:not(:last-of-type) {
    margin-right: 30px;
  }
}
.header-2 .top-bar-inner .top-bar-list li i,
.header-2 .top-bar .top-bar-list li i {
  margin-top: -2px;
  margin-right: 10px;
}
.header-2 .top-bar-inner .top-btn-list,
.header-2 .top-bar .top-btn-list {
  list-style: none;
}
.header-2 .top-bar-inner .top-btn-list li,
.header-2 .top-bar .top-btn-list li {
  display: inline-flex;
}
.header-2 .top-bar-inner .top-btn-list li:not(:last-of-type),
.header-2 .top-bar .top-btn-list li:not(:last-of-type) {
  padding-right: 5px;
}
.header-2 .top-bar-inner .top-btn-list li:not(:last-of-type):after,
.header-2 .top-bar .top-btn-list li:not(:last-of-type):after {
  content: "/";
  color: var(--mt-color-grey-3);
  right: -5px;
}
.header-2 .top-bar-inner .top-btn-list li a,
.header-2 .top-bar .top-btn-list li a {
  font-family: var(--mt-ff-body);
  font-size: 14px;
  color: var(--mt-color-grey-3);
  padding-right: 5px;
}
.header-2 .top-bar-inner .top-btn-list li a:hover,
.header-2 .top-bar .top-btn-list li a:hover {
  color: var(--mt-color-theme-primary);
}
.header-2 .primary-header-inner {
  background-color: transparent;
  padding: 0;
}
@media only screen and (max-width: 767px) {
  .header-2 .primary-header-inner {
    padding: 20px 0;
  }
}
.header-2 .primary-header-inner .header-menu-wrap .sub-menu li a {
  color: var(--mt-color-common-white);
  padding: 42px 0;
}
.header-2 .primary-header-inner .header-menu-wrap .sub-menu li a:hover {
  color: var(--mt-color-theme-primary);
}
.header-2 .primary-header-inner .header-menu-wrap .sub-menu li a:before {
  bottom: 40px;
}
.header-2 .primary-header-inner .header-menu-wrap .sub-menu li ul {
  top: 110px;
}
.header-2 .primary-header-inner .header-menu-wrap .sub-menu .menu-item-has-children:after {
  color: var(--mt-color-common-white);
}
.header-2 .primary-header-inner .header-menu-wrap .sub-menu .menu-item-has-children:hover:after {
  color: var(--mt-color-theme-primary);
}
.header-2 .primary-header-inner .header-right .sidebar-trigger {
  background-color: var(--mt-color-theme-secondary);
}
.header-2 .primary-header-inner .header-right .sidebar-trigger span {
  background-color: var(--mt-color-heading-primary);
}
@media only screen and (max-width: 992px) {
  .header-2 .header-container {
    padding: 0;
  }
  .header-2 .top-bar {
    background-color: var(--mt-color-common-black);
    padding: 20px 15px;
    border-bottom: 1px solid #222;
  }
  .header-2 .primary-header-inner {
    background-color: var(--mt-color-common-black);
    padding: 20px 15px;
    border-radius: 0;
  }
  .header-2 .primary-header-inner .header-right .header-right-item .mobile-side-menu-toggle {
    color: var(--mt-color-common-white);
  }
}

.header-4 .top-bar {
  background-color: var(--mt-color-theme-primary);
  padding: 0 20px;
  border-bottom: none;
}
.header-4 .top-bar .top-bar-inner {
  border-bottom: 0;
}
.header-4 .top-bar .top-bar-inner .top-bar-list li {
  color: var(--mt-color-common-white);
}
.header-4 .top-bar .top-bar-inner .top-btn-list li:after {
  color: var(--mt-color-common-white);
}
.header-4 .top-bar .top-bar-inner .top-btn-list li a {
  color: var(--mt-color-common-white);
}

</style>
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
<header class="header sticky-active">
            <div class="header-container">
                <!-- <div class="top-bar">
                    <ul class="top-bar-list">
                        <li><i class="fa-light fa-clock"></i>Mon - Sat 8.00 - 18.00. Sun Closed</li>
                        <li><i class="fa-light fa-location-dot"></i>1010 Avenue, NY 10018 US.</li>
                    </ul>
                    <ul class="top-btn-list">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div> -->
                <div class="primary-header">
                    <div class="primary-header-inner">
                        <div class="header-logo d-lg-block">
                            <a href="{{ url('/') }}">
                                <!-- <img src="{{ asset('theme') }}/img/logo/logo-v.png" alt="Logo" style="height: 50px;"> -->
                                <div style="display: flex; align-items: center;">
                                    <img src="{{ asset('theme') }}/img/logo/logo-v.png" alt="Logo" style="height: 50px;">
                                    <span style="margin-left: 10px; font-size: 24px; font-weight: bold;">
                                        <span style="color: #175cff;">Vajra</span><span style="color: #ffc226;">Techne</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="header-menu-wrap">
                            <div class="mobile-menu-items">
                                <ul class="sub-menu">
                                    <!-- <li class="menu-item-has-children active">
                                        <a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">It Solution</a></li>
                                            <li><a href="index-2.html">Software Landing</a></li>
                                            <li><a href="index-3.html">Digital Marketing</a></li>
                                            <li><a href="index-4.html">Digital Agency</a></li>
                                        </ul>
                                    </li> -->
                                    <li>
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/services') }}">Service</a>
                                    </li>
                                    <li><a href="{{ url('/projects') }}">Projects</a></li>
                                    <li><a href="#">Blogs</a></li>
                                    <li><a href="{{ url ('/contact') }}">Contact</a></li>
                                </ul>
                            </div>
                            <div class="header-right">
                                <a href="#" class="mt-primary-btn primary-2 header-btn">Get A Quote</a>
                                <div class="sidebar-icon">
                                    <button class="sidebar-trigger open">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                                <div class="header-logo d-none d-lg-none">
                                    <a href="index.html">
                                        <img src="{{ asset('theme') }}/img/logo/logo-v.png" alt="Logo">
                                    </a>
                                </div>
                                <div class="header-right-item">
                                    <a href="javascript:void(0)" class="mobile-side-menu-toggle d-lg-none"
                                        ><i class="fa-sharp fa-solid fa-bars"></i
                                    ></a>
                                </div>
                            </div>
                            <!-- /.header-right -->
                        </div>
                        <!-- /.header-menu-wrap -->
                    </div>
                    <!-- /.primary-header-inner -->
                </div>
                <!-- /.primary-header -->
            </div>
        </header>
          
        {{-- main content --}}
            <div class="main-content">
                @yield('content')
            </div>
        {{-- end main content --}}

        @include('frontend.layouts.footer-new')          
    </body>
</html>