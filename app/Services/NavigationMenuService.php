<?php

namespace App\Services;

class NavigationMenuService
{
    public function getMenuItems()
    {
        return [
            [
                'name' => 'Tablero de resumen',
                'icon_default' => 'eva-grid-outline',
                'icon_active' => 'eva-grid',
                'route_name' => 'admin.index',
                'permission_slug' => 'admin',
            ],
            [
                'name' => 'Avisos',
                'icon_default' => 'eva-message-circle-outline',
                'icon_active' => 'eva-message-circle',
                'route_name' => 'admin.posts.index',
                'permission_slug' => 'avisos.lista',
            ],
            [
                'name' => 'Menús',
                'icon_default' => 'eva-list-outline',
                'icon_active' => 'eva-list',
                'route_name' => 'admin.menus.index',
                'permission_slug' => 'menus.lista',
            ],
            [
                'name' => 'Anuncios',
                'icon_default' => 'eva-radio-outline',
                'icon_active' => 'eva-radio',
                'route_name' => 'admin.ads.index',
                'permission_slug' => 'anuncios.lista',
            ],
            [
                'name' => 'Grupos de convocatorias',
                'icon_default' => 'eva-flag-outline',
                'icon_active' => 'eva-flag',
                'route_name' => 'admin.announcement_groups.index',
                'permission_slug' => 'grupos.lista',
            ],
            [
                'name' => 'Convocatorias',
                'icon_default' => 'eva-speaker-outline',
                'icon_active' => 'eva-speaker',
                'route_name' => 'admin.announcements.index',
                'permission_slug' => 'convocatorias.lista',
            ],
            [
                'name' => 'Documentos',
                'icon_default' => 'eva-file-text-outline',
                'icon_active' => 'eva-file-text',
                'route_name' => 'admin.documents.index',
                'permission_slug' => 'documentos.lista',
            ],
            [
                'name' => 'Resoluciones',
                'icon_default' => 'eva-file-outline',
                'icon_active' => 'eva-file',
                'route_name' => 'admin.documents.resolucion.create',
                'permission_slug' => 'documentos.registrar.resolucion',
            ],
            [
                'name' => 'Álbumes',
                'icon_default' => 'eva-layers-outline',
                'icon_active' => 'eva-layers',
                'route_name' => 'admin.albums.index',
                'permission_slug' => 'albumes.lista',
            ],
            [
                'name' => 'Fotos',
                'icon_default' => 'eva-image-outline',
                'icon_active' => 'eva-image',
                'route_name' => 'admin.photos.index',
                'permission_slug' => 'fotos.lista',
            ],
            [
                'name' => 'Vídeos',
                'icon_default' => 'eva-video-outline',
                'icon_active' => 'eva-video',
                'route_name' => 'admin.videos.index',
                'permission_slug' => 'videos.lista',
            ],
            [
                'name' => 'Slideshows',
                'icon_default' => 'eva-map-outline',
                'icon_active' => 'eva-map',
                'route_name' => 'admin.slideshows.index',
                'permission_slug' => 'slideshows.lista',
            ],
            [
                'name' => 'Enlaces externos',
                'icon_default' => 'eva-external-link-outline',
                'icon_active' => 'eva-external-link',
                'route_name' => 'admin.external_links.index',
                'permission_slug' => 'enlaces.externos.lista',
            ],
            [
                'name' => 'Permisos',
                'icon_default' => 'eva-shield-outline',
                'icon_active' => 'eva-shield',
                'route_name' => 'admin.permissions.index',
                'permission_slug' => 'permisos.lista',
            ],
            [
                'name' => 'Roles',
                'icon_default' => 'eva-lock-outline',
                'icon_active' => 'eva-lock',
                'route_name' => 'admin.roles.index',
                'permission_slug' => 'roles.lista',
            ],
            [
                'name' => 'Usuarios',
                'icon_default' => 'eva-people-outline',
                'icon_active' => 'eva-people',
                'route_name' => 'admin.users.index',
                'permission_slug' => 'usuarios.lista',
            ],
        ];
    }
}
