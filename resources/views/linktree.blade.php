<!DOCTYPE html>
<html lang="en">

<head>
    <title>@pahamify | Linktree</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #eceef1;
            --btn-bg: #ffffff;
            --btn-text: #000000;
            --btn-radius: 8px;
            --btn-inner-radius: 4px;
            --link-gap: 14px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--btn-text);
            min-height: 100vh;
        }

        .topbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 200;
            padding: 14px;
        }

        .topbar-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            min-width: 40px;
            border-radius: 9999px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(8px);
            cursor: pointer;
            transition: background 0.2s;
            color: #000;
            text-decoration: none;
        }

        .topbar-btn:hover {
            background: rgba(255, 255, 255, 1);
            color: #000;
            text-decoration: none;
        }

        .topbar-btn.subscribe-btn {
            padding: 0 12px;
            gap: 6px;
            font-size: 14px;
            font-weight: 500;
        }

        .page-wrapper {
            padding-top: 80px;
            padding-bottom: 40px;
        }

        .avatar-img {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-title {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.3px;
        }

        .profile-bio {
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5;
        }

        .social-btn {
            background: transparent;
            border: none;
            padding: 8px;
            cursor: pointer;
            color: #000;
            transition: transform 0.15s;
            line-height: 1;
        }

        .social-btn:hover {
            transform: scale(1.075);
        }

        .social-btn svg {
            width: 32px;
            height: 32px;
            fill: currentColor;
            display: block;
        }

        .link-card {
            display: block;
            background: var(--btn-bg);
            border-radius: var(--btn-radius);
            text-decoration: none;
            color: var(--btn-text);
            transition: background 0.15s, transform 0.1s;
            position: relative;
            margin-bottom: var(--link-gap);
        }

        .link-card:last-child {
            margin-bottom: 0;
        }

        .link-card:hover {
            background: #f5f5f5;
            color: var(--btn-text);
            text-decoration: none;
        }

        .link-card:active {
            transform: scale(0.99);
        }

        .link-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 64px;
            padding: 12px 56px;
            position: relative;
        }

        .link-thumb {
            position: absolute;
            left: 8px;
            top: 8px;
            bottom: 8px;
            width: 48px;
            height: 48px;
            border-radius: var(--btn-inner-radius);
            overflow: hidden;
        }

        .link-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .link-title {
            font-size: 14px;
            font-weight: 500;
            line-height: 1.2;
            text-align: center;
            color: var(--btn-text);
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .link-more-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: transparent;
            border: none;
            cursor: pointer;
            opacity: 0.5;
            transition: opacity 0.15s, background 0.15s;
            color: var(--btn-text);
            padding: 0;
        }

        .link-card:hover .link-more-btn {
            opacity: 1;
            background: rgba(0, 0, 0, 0.08);
        }

        .dots-icon {
            width: 3px;
            height: 11px;
        }

        .footer-cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0 20px;
            height: 44px;
            background: #fff;
            border: 1px solid #dde0e4;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
            font-size: 14px;
            font-weight: 600;
            color: #000;
            text-decoration: none;
            transition: background 0.15s;
        }

        .footer-cta:hover {
            background: #f5f5f5;
            color: #000;
            text-decoration: none;
        }

        .footer-links a,
        .footer-links button {
            font-size: 10px;
            color: #000;
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
            text-decoration: none;
        }

        .footer-links a:hover,
        .footer-links button:hover {
            text-decoration: underline;
        }

        .footer-links .sep {
            padding: 0 4px;
            font-size: 10px;
        }
    </style>
</head>

<body>

    <div class="topbar">
        <div class="d-flex justify-content-between align-items-center">
            <a href="https://linktr.ee" target="_blank" class="topbar-btn" aria-label="Linktree">
                <svg width="18" height="18" viewBox="0 0 28 28" fill="none">
                    <path
                        d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"
                        fill="currentColor" />
                </svg>
            </a>
            <div class="d-flex" style="gap:8px;">
                <button class="topbar-btn subscribe-btn" aria-label="Subscribe">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z" />
                    </svg>
                    <span>Subscribe</span>
                </button>
                <button class="topbar-btn" aria-label="Share profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="container page-wrapper">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">

                <div class="text-center mb-2 pt-3">
                    <div class="mb-3">
                        <img src="https://ugc.production.linktr.ee/QzVygerQReyNJjz9EezH_1aOIXRSE4YoDmKP5?io=true&size=avatar-v3_0"
                            alt="pahamify" class="avatar-img">
                    </div>
                    <h1 class="profile-title">@pahamify</h1>
                    <p class="profile-bio px-4">Live Class + TO UTBK terbesar di Indonesia.</p>
                </div>

                <div class="d-flex justify-content-center flex-wrap mb-2">
                    <button class="social-btn" title="TikTok"
                        onclick="window.open('https://tiktok.com/@pahamify','_blank')">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M15.9453 8.68918V15.6727C15.9453 19.1598 13.1048 22.0004 9.6177 22.0004C8.27369 22.0004 7.01685 21.5717 5.99251 20.8525C4.35796 19.7047 3.29004 17.8085 3.29004 15.6727C3.29004 12.1783 6.12333 9.34505 9.6104 9.34505C9.90101 9.34505 10.1843 9.36685 10.4676 9.40318V12.9121H10.4386C10.3151 12.8758 10.1843 12.8394 10.0536 12.8177H9.9954C9.86466 12.8032 9.74114 12.7813 9.60309 12.7813C8.00491 12.7813 6.70448 14.0817 6.70448 15.6799C6.70448 17.2782 8.00491 18.5786 9.60309 18.5786C11.2014 18.5786 12.5018 17.2782 12.5018 15.6799V2.00037H15.938C15.938 2.29822 15.9671 2.58881 16.0179 2.87213C16.2649 4.1798 17.035 5.30584 18.1175 6.01053C18.873 6.50452 19.7593 6.78785 20.7182 6.78785V10.2241C18.9416 10.2241 17.288 9.65222 15.9453 8.68918Z" />
                        </svg>
                    </button>
                    <button class="social-btn" title="X" onclick="window.open('https://x.com/pahamify','_blank')">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M17.8048 2.96973H20.8705L14.1394 10.6338L22.0034 21.0304H15.8321L11.0004 14.7125L5.46893 21.0304H2.40328L9.53424 12.8331L2.00342 2.96973H8.32798L12.6932 8.74114L17.8048 2.96973ZM16.7318 19.231H18.4313L7.43494 4.70248H5.60888L16.7318 19.231Z" />
                        </svg>
                    </button>
                    <button class="social-btn" title="Instagram"
                        onclick="window.open('https://instagram.com/pahamify','_blank')">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M12 2C9.2912 2 8.94131 2 7.86907 2.05643C7.03985 2.07241 6.21934 2.22888 5.44244 2.51919C4.78781 2.77878 4.23476 3.11738 3.67043 3.68172C3.11738 4.23476 2.76749 4.78781 2.51919 5.45372C2.27088 6.08578 2.10158 6.80813 2.05643 7.88036C2.01129 8.94131 2 9.27991 2 12C2 14.7088 2 15.0474 2.05643 16.1196C2.10158 17.1919 2.28217 17.9255 2.51919 18.5576C2.77878 19.2122 3.11738 19.7652 3.67043 20.3296C4.23476 20.8826 4.78781 21.2325 5.44244 21.4808C6.08578 21.7291 6.80813 21.8984 7.86907 21.9436C8.94131 21.9887 9.27991 22 12 22C14.7088 22 15.0474 22 16.1196 21.9436C17.1806 21.8984 17.9142 21.7178 18.5463 21.4808C19.2137 21.2306 19.8184 20.8377 20.3183 20.3296C20.8826 19.7652 21.2212 19.2009 21.4695 18.5576C21.7178 17.9142 21.8871 17.1919 21.9436 16.1196C21.9887 15.0587 22 14.7201 22 12C22 9.2912 21.9887 8.9526 21.9436 7.88036C21.9225 7.05065 21.7622 6.23037 21.4695 5.45372C21.2189 4.78649 20.8261 4.18182 20.3183 3.68172C19.754 3.11738 19.2122 2.77878 18.5463 2.51919C17.7686 2.23315 16.9482 2.08051 16.1196 2.06772C15.0474 2.01129 14.7088 2 12 2ZM11.0971 3.80587H12C14.6637 3.80587 14.9797 3.80587 16.0406 3.8623C16.6724 3.8686 17.2985 3.98313 17.8916 4.2009C18.3657 4.38149 18.693 4.59594 19.0429 4.94582C19.3928 5.29571 19.6072 5.63431 19.7991 6.09706C19.9345 6.45824 20.0925 6.97743 20.1377 7.95937C20.1828 9.00903 20.1941 9.32506 20.1941 12C20.1941 14.6637 20.1941 14.9797 20.1377 16.0406C20.1314 16.6724 20.0169 17.2985 19.7991 17.8916C19.6185 18.3657 19.3928 18.693 19.0429 19.0429C18.7043 19.3928 18.3657 19.6072 17.8916 19.7878C17.2992 20.0094 16.6731 20.1278 16.0406 20.1377C14.9797 20.1828 14.6637 20.1941 12 20.1941C9.32506 20.1941 9.00903 20.1941 7.95937 20.1377C7.3238 20.1322 6.69388 20.0177 6.09706 19.7991C5.63431 19.6072 5.307 19.3928 4.94582 19.0429C4.60722 18.7043 4.38149 18.3657 4.2009 17.8916C3.98313 17.2985 3.8686 16.6724 3.8623 16.0406C3.80587 14.9797 3.79458 14.6637 3.79458 12C3.79458 9.32506 3.80587 9.00903 3.85102 7.95937C3.85602 7.32375 3.97057 6.69376 4.18962 6.09706C4.38149 5.63431 4.59594 5.307 4.94582 4.94582C5.29571 4.60722 5.62302 4.38149 6.09706 4.2009C6.69376 3.98185 7.32375 3.86731 7.95937 3.8623C8.87359 3.81716 9.23476 3.80587 11.0971 3.79458V3.80587ZM17.3386 5.46501C16.6893 5.46501 16.1422 6.01209 16.1422 6.6614C16.1422 7.31071 16.6893 7.85779 17.3386 7.85779C17.9879 7.85779 18.535 7.31071 18.535 6.6614C18.535 6.01209 17.9879 5.46501 17.3386 5.46501ZM12 6.86456C9.1814 6.86456 6.86456 9.1814 6.86456 12C6.86456 14.8186 9.1814 17.1354 12 17.1354C14.8186 17.1354 17.1354 14.8186 17.1354 12C17.1354 9.1814 14.8186 6.86456 12 6.86456ZM12 8.67043C13.8448 8.67043 15.3296 10.1552 15.3296 12C15.3296 13.8448 13.8448 15.3296 12 15.3296C10.1552 15.3296 8.67043 13.8448 8.67043 12C8.67043 10.1552 10.1552 8.67043 12 8.67043Z" />
                        </svg>
                    </button>
                </div>

                <div class="mt-3">

                    <a href="https://linktr.ee/starterpackUTBK" target="_blank" rel="noopener noreferrer"
                        class="link-card">
                        <div class="link-inner">
                            <div class="link-thumb">
                                <img src="https://ugc.production.linktr.ee/615f9fdc-7cb4-4d25-96cc-f07c61281255_FAK-MAR-251212-004-00--1-.png?io=true&size=thumbnail-stack_v1_0"
                                    alt="">
                            </div>
                            <span class="link-title">(NEW!) Starter Pack UTBK 2026</span>
                            <button class="link-more-btn" tabindex="-1" aria-hidden="true">
                                <svg class="dots-icon" viewBox="0 0 3 11" fill="none">
                                    <path fill="currentColor"
                                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                                </svg>
                            </button>
                        </div>
                    </a>

                    <a href="https://pahamify.com/download/" target="_blank" rel="noopener noreferrer"
                        class="link-card">
                        <div class="link-inner">
                            <div class="link-thumb">
                                <img src="https://ugc.production.linktr.ee/01cc6716-59c6-478c-b896-eaa88b20317a_pahamify-logo.jpeg?io=true&size=thumbnail-stack_v1_0"
                                    alt="">
                            </div>
                            <span class="link-title">Download Apps Pahamify</span>
                            <button class="link-more-btn" tabindex="-1" aria-hidden="true">
                                <svg class="dots-icon" viewBox="0 0 3 11" fill="none">
                                    <path fill="currentColor"
                                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                                </svg>
                            </button>
                        </div>
                    </a>

                    <a href="https://tryout.pahamify.com" target="_blank" rel="noopener noreferrer" class="link-card">
                        <div class="link-inner">
                            <div class="link-thumb">
                                <img src="https://ugc.production.linktr.ee/f63106ac-295e-4997-856e-d962cd9401f4_logo-TO-gratisArtboard-267.png?io=true&size=thumbnail-stack_v1_0"
                                    alt="">
                            </div>
                            <span class="link-title">Cobain Tryout GRATIS</span>
                            <button class="link-more-btn" tabindex="-1" aria-hidden="true">
                                <svg class="dots-icon" viewBox="0 0 3 11" fill="none">
                                    <path fill="currentColor"
                                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                                </svg>
                            </button>
                        </div>
                    </a>

                    <a href="https://bit.ly/cobakelasmipi" target="_blank" rel="noopener noreferrer" class="link-card">
                        <div class="link-inner">
                            <div class="link-thumb">
                                <img src="https://ugc.production.linktr.ee/01c61338-8edf-4f83-b454-f36000f12025_FREE-TRIAL-LIVE-CLASS--21-.png?io=true&size=thumbnail-stack_v1_0"
                                    alt="">
                            </div>
                            <span class="link-title">Cobain Live Class GRATIS</span>
                            <button class="link-more-btn" tabindex="-1" aria-hidden="true">
                                <svg class="dots-icon" viewBox="0 0 3 11" fill="none">
                                    <path fill="currentColor"
                                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                                </svg>
                            </button>
                        </div>
                    </a>

                    <a href="https://pegasus.pahamify.com/" target="_blank" rel="noopener noreferrer" class="link-card">
                        <div class="link-inner">
                            <div class="link-thumb">
                                <img src="https://ugc.production.linktr.ee/b1fefbea-8f73-47f3-8b36-4f120bc7a714_Highlight---Logo.png?io=true&size=thumbnail-stack_v1_0"
                                    alt="">
                            </div>
                            <span class="link-title">Cobain Fitur Pegasus GRATIS</span>
                            <button class="link-more-btn" tabindex="-1" aria-hidden="true">
                                <svg class="dots-icon" viewBox="0 0 3 11" fill="none">
                                    <path fill="currentColor"
                                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                                </svg>
                            </button>
                        </div>
                    </a>

                    <a href="http://pay.pahamify.com" target="_blank" rel="noopener noreferrer" class="link-card">
                        <div class="link-inner">
                            <div class="link-thumb">
                                <img src="https://ugc.production.linktr.ee/b8a6df51-ac42-44b1-b10c-b0c900ef03f7_Logo-9x9.jpeg?io=true&size=thumbnail-stack_v1_0"
                                    alt="">
                            </div>
                            <span class="link-title">Langganan Paket di Pahamify</span>
                            <button class="link-more-btn" tabindex="-1" aria-hidden="true">
                                <svg class="dots-icon" viewBox="0 0 3 11" fill="none">
                                    <path fill="currentColor"
                                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                                </svg>
                            </button>
                        </div>
                    </a>

                    <a href="http://wa.me/6281384126247" target="_blank" rel="noopener noreferrer" class="link-card">
                        <div class="link-inner">
                            <div class="link-thumb">
                                <img src="https://ugc.production.linktr.ee/1c98b775-6408-45fd-b673-465396e12643_logo-whatsapp-png-46042.png?io=true&size=thumbnail-stack_v1_0"
                                    alt="">
                            </div>
                            <span class="link-title">Hubungi CS Pahamify</span>
                            <button class="link-more-btn" tabindex="-1" aria-hidden="true">
                                <svg class="dots-icon" viewBox="0 0 3 11" fill="none">
                                    <path fill="currentColor"
                                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" />
                                </svg>
                            </button>
                        </div>
                    </a>

                </div>

                <div class="d-flex flex-column align-items-center pt-5 pb-5" style="gap:24px;">
                    <a href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_campaign=footer_logo_cta&utm_content=pahamify"
                        target="_blank" class="footer-cta">
                        Join pahamify on Linktree
                    </a>
                    <div class="footer-links d-flex align-items-center">
                        <button>Cookie Preferences</button>
                        <span class="sep">•</span>
                        <a href="https://linktr.ee/s/about/trust-center/report/?field86145911=https%3A%2F%2Flinktr.ee%2Fpahamify"
                            target="_blank" rel="noopener noreferrer">Report</a>
                        <span class="sep">•</span>
                        <a href="https://linktr.ee/privacy" target="_blank" rel="noopener noreferrer">Privacy</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
