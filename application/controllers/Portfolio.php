<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller
{
    public function index()
    {
        $data['name']   = 'Muhammad Shubair VK';
        $data['title']  = 'PHP Developer';
        $data['github'] = 'Shuhairvk';

        $data['skills'] = array(
            'PHP', 'CodeIgniter 3', 'Laravel', 'MySQL', 'JavaScript',
            'jQuery', 'HTML/CSS', 'REST APIs', 'Git', 'Linux / CWP'
        );

        $data['projects'] = array(
            array(
                'name'  => 'MLM / Subscription Platform',
                'desc'  => 'Large CodeIgniter back office with member management, subscriptions, and admin tools.',
                'tech'  => 'CodeIgniter 3, MySQL, jQuery',
                'image' => 'img/project-mlm.jpg',
                'link'  => ''
            ),
            array(
                'name'  => 'Trading Platform',
                'desc'  => 'Trading website with user accounts, wallets, transactions, and an admin panel to manage trades and users.',
                'tech'  => 'CodeIgniter 3, MySQL, JavaScript, APIs',
                'image' => 'img/project-trading.jpg',
                'link'  => ''
            ),
            array(
                'name'  => 'Affiliate & Commission System',
                'desc'  => 'Referral tracking and automatic commission calculation, with payout reports for admins and earnings dashboards for affiliates.',
                'tech'  => 'CodeIgniter 3, MySQL, jQuery',
                'image' => 'img/project-affiliate.jpg',
                'link'  => ''
            ),
            array(
                'name'  => 'Club Platform',
                'desc'  => 'Member platform with custom email templates and responsive styling.',
                'tech'  => 'CodeIgniter 3, MySQL, HTML/CSS',
                'image' => 'img/project-club.jpg',
                'link'  => ''
            ),
            array(
                'name'  => 'Lessons Management Admin',
                'desc'  => 'Admin panel with DataTables: server-side filtering, sorting, and search.',
                'tech'  => 'CodeIgniter 3, DataTables, JavaScript',
                'image' => 'img/project-lessons.jpg',
                'link'  => ''
            ),
            array(
                'name'  => 'Music / Media Platform',
                'desc'  => 'Media site with embeds and performance optimization.',
                'tech'  => 'PHP, JavaScript, MySQL',
                'image' => 'img/project-music.jpg',
                'link'  => ''
            ),
            array(
                'name'  => 'Laravel Login & Registration',
                'desc'  => 'Auth system with validation and sessions in Laravel 12.',
                'tech'  => 'Laravel 12, MySQL',
                'image' => 'img/project-laravel.jpg',
                'link'  => ''
            ),
        );

        $this->load->view('portfolio/index', $data);
    }
}
