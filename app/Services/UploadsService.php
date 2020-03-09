<?php
namespace App\Services;

use App\Models\TypeDocument;
use Illuminate\Support\Facades\Storage;

class UploadsService
{
    protected $type;
    protected $year;
    protected $fileName;
    protected $url;

    public function __construct(string $fileName = 'file', $year = '2020', string $type = 'files')
    {
        $this->fileName = $fileName;
        $this->year = $year;
        $this->type = $type;
    }

    public function getFileCreated()
    {
        $file = request()->file($this->fileName);
        if ($file) {
            $originalName = $file->getClientOriginalName();
            $originalExt = $file->getClientOriginalExtension();
            if ($this->type == 'documentos') {
                $tipo = TypeDocument::find(request('tipo_id'));
                $typeName = strtolower(explode(" ", $tipo->nombre)[0]);
                $this->url = "$this->type/$this->year/$typeName/$originalName";
            } elseif (in_array($this->type, $this->getModels())) {
                $typeName = $this->getFileTypeName($originalExt);
                $this->url = "$this->type/$this->year/$typeName/$originalName";
            } else {
                $this->url = "$this->type/$this->year/$originalName";
            }
            // return $file->storeAs('public/documentos', $url);
            Storage::putFileAs('public', $file, $this->url);
            return $this->url;
        }
    }

    public function getFileTypeName(string $originalExt)
    {
        if (in_array($originalExt, $this->getMimesImage())) {
            return 'imagenes';
        } elseif (in_array($originalExt, $this->getMimesFile())) {
            return 'archivos';
        } else {
            return 'imagenes';
        }
    }

    public function getMimesImage()
    {
        return [
            'jpeg', 'jpg', 'png',
        ];
    }

    public function getMimesFile()
    {
        return [
            'pdf', 'docx', 'doc', 'xls', 'xlt', 'xlsx',
        ];
    }

    public function getModels()
    {
        return [
            'avisos', 'paginas', 'grupos',
        ];
    }

}
