====================================================
  APARAJITA HEALTH KAVACH — COMPLETE SETUP GUIDE
====================================================

FOLDER STRUCTURE (ye sab Hostinger mein upload karo):
------------------------------------------------------
public_html/
├── Front End/          ← Frontend website files
├── Image/              ← Logo & images
├── backend/
│   ├── config.php      ← ⚠️ DB credentials yahan update karo
│   └── contact.php     ← Form handler
└── admin/
    ├── index.php       ← Login page
    ├── dashboard.php   ← Leads dashboard
    ├── update_status.php
    └── logout.php

====================================================
STEP 1 — Hostinger mein MySQL Database banao
====================================================
1. hPanel login karo
2. "Databases" → "MySQL Databases" jaao
3. Ek naya database banao (e.g. u123456789_aparajita)
4. Ek user banao + password set karo
5. User ko database se assign karo

====================================================
STEP 2 — config.php update karo
====================================================
backend/config.php kholo aur ye 3 cheezein update karo:
  define('DB_NAME', 'u123456789_aparajita');  // tumhara DB name
  define('DB_USER', 'u123456789_admin');       // tumhara DB user
  define('DB_PASS', 'YourPassword123');        // tumhara DB password

Admin login bhi change karo:
  define('ADMIN_USERNAME', 'admin');
  define('ADMIN_PASSWORD', 'Aparajita@2025');  // strong password rakho

====================================================
STEP 3 — Files Upload karo (Hostinger File Manager)
====================================================
1. hPanel → File Manager → public_html
2. Ye saari files/folders upload karo

====================================================
STEP 4 — Test karo
====================================================
Form test:   https://yoursite.com/Front End/index.html
Admin login: https://yoursite.com/admin/

====================================================
