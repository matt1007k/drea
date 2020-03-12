<?php

use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();

        //roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.lista',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un rol',
            'slug' => 'roles.ver',
            'description' => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un rol',
            'slug' => 'roles.editar',
            'description' => 'Editar los datos de cualquier rol del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un rol',
            'slug' => 'roles.eliminar',
            'description' => 'Eliminar los datos de cualquier rol del sistema',
        ]);
        Permission::create([
            'name' => 'Registrar un rol',
            'slug' => 'roles.registrar',
            'description' => 'Registrar un rol del sistema',
        ]);
        //permisos
        Permission::create([
            'name' => 'Navegar permisos',
            'slug' => 'permisos.lista',
            'description' => 'Lista y navega todos los permisos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un permiso',
            'slug' => 'permisos.ver',
            'description' => 'Ver en detalle cada permiso del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un permiso',
            'slug' => 'permisos.editar',
            'description' => 'Editar los datos de cualquier permiso del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un permiso',
            'slug' => 'permisos.eliminar',
            'description' => 'Eliminar los datos de cualquier permiso del sistema',
        ]);
        //usuarios
        Permission::create([
            'name' => 'Registrar un usuario',
            'slug' => 'usuarios.registrar',
            'description' => 'Registrar un usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'usuarios.lista',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un usuario',
            'slug' => 'usuarios.ver',
            'description' => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un usuario',
            'slug' => 'usuarios.editar',
            'description' => 'Editar los datos de cualquier usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un usuario',
            'slug' => 'usuarios.eliminar',
            'description' => 'Eliminar los datos de cualquier usuario del sistema',
        ]);
        //documentos
        Permission::create([
            'name' => 'Navegar documentos',
            'slug' => 'documentos.lista',
            'description' => 'Lista y navega todos los documentos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un documento',
            'slug' => 'documentos.ver',
            'description' => 'Ver en detalle cada documento del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un documento',
            'slug' => 'documentos.editar',
            'description' => 'Editar los datos de cualquier documento del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un documento',
            'slug' => 'documentos.eliminar',
            'description' => 'Eliminar los datos de cualquier documento del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un documento',
            'slug' => 'documentos.registrar',
            'description' => 'Crear un documento en el sistema',
        ]);
        Permission::create([
            'name' => 'Crear un resolución',
            'slug' => 'documentos.registrar.resolucion',
            'description' => 'Crear un resolución (documento) en el sistema',
        ]);
        Permission::create([
            'name' => 'Editar un resolución',
            'slug' => 'documentos.editar.resolucion',
            'description' => 'Editar un resolución (documento) en el sistema',
        ]);
        $roleResolucion = Role::where('slug', 'resolucion')->first();
        $roleResolucion->givePermissionTo(
            'documentos.lista',
            'documentos.ver',
            'documentos.registrar.resolucion',
            'documentos.editar.resolucion',
            'documentos.eliminar'
        );
        //tipo de documentos
        Permission::create([
            'name' => 'Crear un tipo de documento',
            'slug' => 'tipo-documento.registrar',
            'description' => 'Crear un tipo de documento del sistema',
        ]);

        //anuncios
        Permission::create([
            'name' => 'Navegar anuncios',
            'slug' => 'anuncios.lista',
            'description' => 'Lista y navega todos los anuncios del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un anuncio',
            'slug' => 'anuncios.ver',
            'description' => 'Ver en detalle cada anuncio del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un anuncio',
            'slug' => 'anuncios.editar',
            'description' => 'Editar los datos de cualquier anuncio del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un anuncio',
            'slug' => 'anuncios.eliminar',
            'description' => 'Eliminar los datos de cualquier anuncio del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un anuncio',
            'slug' => 'anuncios.registrar',
            'description' => 'Crear un anuncio en el sistema',
        ]);

        //álbumes
        Permission::create([
            'name' => 'Navegar álbumes',
            'slug' => 'albumes.lista',
            'description' => 'Lista y navega todos los álbumes del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un álbum',
            'slug' => 'albumes.ver',
            'description' => 'Ver en detalle cada álbum del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un álbum',
            'slug' => 'albumes.editar',
            'description' => 'Editar los datos de cualquier álbum del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un álbum',
            'slug' => 'albumes.eliminar',
            'description' => 'Eliminar los datos de cualquier álbum del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un álbum',
            'slug' => 'albumes.registrar',
            'description' => 'Crear un álbum en el sistema',
        ]);

        //grupos
        Permission::create([
            'name' => 'Navegar grupos',
            'slug' => 'grupos.lista',
            'description' => 'Lista y navega todos los grupos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un grupo',
            'slug' => 'grupos.ver',
            'description' => 'Ver en detalle cada grupo del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un grupo',
            'slug' => 'grupos.editar',
            'description' => 'Editar los datos de cualquier grupo del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un grupo',
            'slug' => 'grupos.eliminar',
            'description' => 'Eliminar los datos de cualquier grupo del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un grupo',
            'slug' => 'grupos.registrar',
            'description' => 'Crear un grupo en el sistema',
        ]);

        //convocatorias
        Permission::create([
            'name' => 'Navegar convocatorias',
            'slug' => 'convocatorias.lista',
            'description' => 'Lista y navega todos los convocatorias del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un convocatoria',
            'slug' => 'convocatorias.ver',
            'description' => 'Ver en detalle cada convocatoria del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un convocatoria',
            'slug' => 'convocatorias.editar',
            'description' => 'Editar los datos de cualquier convocatoria del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un convocatoria',
            'slug' => 'convocatorias.eliminar',
            'description' => 'Eliminar los datos de cualquier convocatoria del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un convocatoria',
            'slug' => 'convocatorias.registrar',
            'description' => 'Crear un convocatoria en el sistema',
        ]);

        //enlaces de una convocatoria
        Permission::create([
            'name' => 'Navegar enlaces de una convocatoria',
            'slug' => 'cv.enlaces.lista',
            'description' => 'Lista y navega todos los enlaces de una convocatoria del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un enlace de una convocatoria',
            'slug' => 'cv.enlaces.editar',
            'description' => 'Editar los datos de cualquier enlace de una convocatoria del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un enlace de una convocatoria',
            'slug' => 'cv.enlaces.eliminar',
            'description' => 'Eliminar los datos de cualquier enlace de una convocatoria del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un enlace de una convocatoria',
            'slug' => 'cv.enlaces.registrar',
            'description' => 'Crear un enlace de una convocatoria en el sistema',
        ]);

        //enlaces externos
        Permission::create([
            'name' => 'Navegar enlaces externos',
            'slug' => 'enlaces.externos.lista',
            'description' => 'Lista y navega todos los enlaces externos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un enlace externo',
            'slug' => 'enlaces.externos.ver',
            'description' => 'Ver en detalle cada enlace externo del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un enlace externo',
            'slug' => 'enlaces.externos.editar',
            'description' => 'Editar los datos de cualquier enlace externo del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un enlace externo',
            'slug' => 'enlaces.externos.eliminar',
            'description' => 'Eliminar los datos de cualquier enlace externo del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un enlace externo',
            'slug' => 'enlaces.externos.registrar',
            'description' => 'Crear un enlace externo en el sistema',
        ]);

        //menús
        Permission::create([
            'name' => 'Navegar menús',
            'slug' => 'menus.lista',
            'description' => 'Lista y navega todos los menús del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un menú',
            'slug' => 'menus.ver',
            'description' => 'Ver en detalle cada menú del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un menú',
            'slug' => 'menus.editar',
            'description' => 'Editar los datos de cualquier menú del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un menú',
            'slug' => 'menus.eliminar',
            'description' => 'Eliminar los datos de cualquier menú del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un menú',
            'slug' => 'menus.registrar',
            'description' => 'Crear un menú en el sistema',
        ]);

        //submenús
        Permission::create([
            'name' => 'Navegar submenús',
            'slug' => 'submenus.lista',
            'description' => 'Lista y navega todos los submenús del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un submenú',
            'slug' => 'submenus.editar',
            'description' => 'Editar los datos de cualquier submenú del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un submenú',
            'slug' => 'submenus.eliminar',
            'description' => 'Eliminar los datos de cualquier submenú del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un submenú',
            'slug' => 'submenus.registrar',
            'description' => 'Crear un submenú en el sistema',
        ]);

        //paginas
        Permission::create([
            'name' => 'Navegar paginas',
            'slug' => 'paginas.lista',
            'description' => 'Lista y navega todos los paginas del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un pagina',
            'slug' => 'paginas.ver',
            'description' => 'Ver en detalle cada pagina del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un pagina',
            'slug' => 'paginas.editar',
            'description' => 'Editar los datos de cualquier pagina del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un pagina',
            'slug' => 'paginas.eliminar',
            'description' => 'Eliminar los datos de cualquier pagina del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un pagina',
            'slug' => 'paginas.registrar',
            'description' => 'Crear un pagina en el sistema',
        ]);

        //fotos
        Permission::create([
            'name' => 'Navegar fotos',
            'slug' => 'fotos.lista',
            'description' => 'Lista y navega todos los fotos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un foto',
            'slug' => 'fotos.ver',
            'description' => 'Ver en detalle cada foto del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un foto',
            'slug' => 'fotos.editar',
            'description' => 'Editar los datos de cualquier foto del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un foto',
            'slug' => 'fotos.eliminar',
            'description' => 'Eliminar los datos de cualquier foto del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un foto',
            'slug' => 'fotos.registrar',
            'description' => 'Crear un foto en el sistema',
        ]);

        //avisos
        Permission::create([
            'name' => 'Navegar avisos',
            'slug' => 'avisos.lista',
            'description' => 'Lista y navega todos los avisos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un aviso',
            'slug' => 'avisos.ver',
            'description' => 'Ver en detalle cada aviso del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un aviso',
            'slug' => 'avisos.editar',
            'description' => 'Editar los datos de cualquier aviso del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un aviso',
            'slug' => 'avisos.eliminar',
            'description' => 'Eliminar los datos de cualquier aviso del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un aviso',
            'slug' => 'avisos.registrar',
            'description' => 'Crear un aviso en el sistema',
        ]);

        //slideshows
        Permission::create([
            'name' => 'Navegar slideshows',
            'slug' => 'slideshows.lista',
            'description' => 'Lista y navega todos los slideshows del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un slideshow',
            'slug' => 'slideshows.ver',
            'description' => 'Ver en detalle cada slideshow del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un slideshow',
            'slug' => 'slideshows.editar',
            'description' => 'Editar los datos de cualquier slideshow del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un slideshow',
            'slug' => 'slideshows.eliminar',
            'description' => 'Eliminar los datos de cualquier slideshow del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un slideshow',
            'slug' => 'slideshows.registrar',
            'description' => 'Crear un slideshow en el sistema',
        ]);

        //videos
        Permission::create([
            'name' => 'Navegar videos',
            'slug' => 'videos.lista',
            'description' => 'Lista y navega todos los videos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de un video',
            'slug' => 'videos.ver',
            'description' => 'Ver en detalle cada video del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de un video',
            'slug' => 'videos.editar',
            'description' => 'Editar los datos de cualquier video del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar un video',
            'slug' => 'videos.eliminar',
            'description' => 'Eliminar los datos de cualquier video del sistema',
        ]);
        Permission::create([
            'name' => 'Crear un video',
            'slug' => 'videos.registrar',
            'description' => 'Crear un video en el sistema',
        ]);
    }
}
