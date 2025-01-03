<!DOCTYPE html>
<html lang="fr" data-theme="night">
    [[head]]
    <body>
        [[header]]
        <title-banner x-data="{title: 'Settings', subtitle: 'Accès restreint'}"></title-banner>
        [[flash_message]]
        <div class="container mx-auto px-[200px] pt-5">
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <ul class="menu bg-base-200 rounded-box w-100">
                        <li>
                            <a href="/settings">
                                <i style="font-size: 24px;" class="fa-regular fa-gauge"></i>
                                <span class="font-medium">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="/settings/blog">
                                <i style="font-size: 24px;" class="fa-solid fa-newspaper"></i>
                                <span class="font-medium">Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="/settings/roles">
                                <i style="font-size: 24px;" class="fa-solid fa-tower-control"></i>
                                <span class="font-medium">Roles</span>
                            </a>
                        </li>

                        <li>
                            <a href="/settings/policies">
                                <i style="font-size: 24px;" class="fa-solid fa-shield"></i>
                                <span class="font-medium">Policies</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-2 bg-base-200 rounded-box p-5">[[content]]</div>
            </div>
        </div>
        [[foot]]
    </body>
</html>