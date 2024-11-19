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
                    <title-banner x-data="{title: 'Profil', subtitle: 'Accès restreint'}" />
                </center>
                <div class="bidding js-bidding"> 
                    <div class="bidding__body" style="padding: 0;">
                        <div class="profile__body">
                            <div class="profile__center center">
                                <div class="profile__sidebar">
                                    <div class="profile__dropdown">
                                        <div class="profile__menu">
                                            <a class="profile__link" href="/users/account">
                                                <div class="icon icon-user">
                                                    <i style="font-size: 24px;" class="fa-regular fa-user"></i>
                                                </div>
                                                <span style="font-size: 16px;">Profil</span>
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
