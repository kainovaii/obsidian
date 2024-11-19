<!DOCTYPE html>
<html lang="en">
    [[head]]
    <body class="dark">
        <!-- outer-->
        <div class="outer">
            <!-- header-->
            [[header]]
            <!-- container-->
            <div class="outer__inner">
                [[flash_message]]
                <center>
                    <title-banner x-data="{title: 'Settings', subtitle: 'Accès restreint'}" />
                </center>
                <div class="bidding js-bidding"> 
                    <div class="bidding__body" style="padding: 0;">
                        <div class="profile__body">
                            <div class="profile__center center">
                                <div class="profile__sidebar">
                                    <div class="profile__dropdown">
                                        <div class="profile__menu">
                                            <a class="profile__link" href="/settings">
                                                <div class="icon icon-user">
                                                    <i style="font-size: 24px;" class="fa-regular fa-gauge"></i>
                                                </div>
                                                <span style="font-size: 16px;">Dashboard</span>
                                            </a>
                                            <a class="profile__link" href="/settings/blog">
                                                <div class="icon icon-user">
                                                    <i style="font-size: 24px;" class="fa-solid fa-newspaper"></i>
                                                </div>
                                                <span style="font-size: 16px;">Posts</span>
                                            </a>
                                            <a class="profile__link" href="/settings/role">
                                                <div class="icon icon-user">
                                                    <i style="font-size: 24px;" class="fa-solid fa-tower-control"></i>
                                                </div>
                                                <span style="font-size: 16px;">Roles</span>
                                            </a>
                                            <a class="profile__link" href="/settings/policy">
                                                <div class="icon icon-user">
                                                    <i style="font-size: 24px;" class="fa-solid fa-shield"></i>
                                                </div>
                                                <span style="font-size: 16px;">Policy</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile__wrapper">
                                [[content]]
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- footer-->
            <footer class="footer">
                <div class="footer__foot">
                    <div class="footer__center center">
                        <div class="footer__copyright">Copyright © 2021 UI8 LLC. All rights reserved</div>
                    </div>
                </div>
            </footer>
        </div>
        [[foot]]
    </body>
</html>
