<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HsController extends Controller
{
    public function __CONSTRUCT(){}



        public function index(){
            return view('login');
        }  

        public function forgot_password(){
            return view('auth-forgot-password-basic');
        } 
        public function register(){
            return view('auth-register-basic');
        } 
        public function login(){
            return view('auth-login-basic');
        } 
        public function dashboard(){
            return view('dashboard');
        } 
        public function blank(){
            return view('layouts-blank');
        } 
        public function container(){
            return view('layouts-container');
        } 
        public function fluid(){
            return view('layouts-fluid');
        } 
        public function without_menu(){
            return view('layouts-without-menu');
        } 
        public function without_navbar(){
            return view('layouts-without-navbar');
        } 
        public function account_settings_account(){
            return view('pages-account-settings-account');
        } 
        public function account_settings_connections(){
            return view('pages-account-settings-connections');
        } 
        public function account_settings_notifications(){
            return view('pages-account-settings-notifications');
        } 
        public function misc_error(){
            return view('pages-misc-error');
        } 
        public function misc_under_maintenance(){
            return view('pages-misc-under-maintenance');
        } 
        public function accordion(){
            return view('ui-accordion');
        } 
        public function alerts(){
            return view('ui-alerts');
        } 
        public function badges(){
            return view('ui-badges');
        } 
        public function buttons(){
            return view('ui-buttons');
        } 
        public function carousel(){
            return view('ui-carousel');
        } 
        public function collapse(){
            return view('ui-collapse');
        } 
        public function dropdowns(){
            return view('ui-dropdowns');
        } 
        public function footer(){
            return view('ui-footer');
        } 
        public function list_groups(){
            return view('ui-list-groups');
        } 
        public function modals(){
            return view('ui-modals');
        } 
        public function navbar(){
            return view('ui-navbar');
        } 
        public function offcanvas(){
            return view('ui-offcanvas');
        } 
        public function pagination_breadcrumbs(){
            return view('ui-pagination-breadcrumbs');
        } 
        public function progress(){
            return view('ui-progress');
        } 
        public function spinners(){
            return view('ui-spinners');
        } 
        public function tabs_pills(){
            return view('ui-tabs-pills');
        } 
        public function toasts(){
            return view('ui-toasts');
        } 
        public function tooltips_popovers(){
            return view('ui-tooltips-popovers');
        } 
        public function typography(){
            return view('ui-typography');
        } 
        public function perfect_scrollbar(){
            return view('extended-ui-perfect-scrollbar');
        } 
        public function text_divider(){
            return view('extended-ui-text-divider');
        } 
        public function boxicons(){
            return view('icons-boxicons');
        } 
        public function horizontal(){
            return view('form-layouts-horizontal');
        } 
        public function vertical(){
            return view('form-layouts-vertical');
        } 
        public function basic_inputs(){
            return view('forms-basic-inputs');
        } 
        public function input_groups(){
            return view('forms-input-groups');
        } 
        public function basic(){
            return view('tables-basic');
        }
        
    

}

