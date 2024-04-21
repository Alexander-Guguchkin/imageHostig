<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use function Pest\Laravel\json;
use function Symfony\Component\String\s;


class ImageController extends Controller
{
    public function addImages(Request $request)
    {
        $files = $request->file('images');
        foreach ($files as $file) {
            $path = $file->store('images', 'public');
            $originalFilename =$this->formatFileName($file->getClientOriginalName());
            $filename = $this->unicalName($originalFilename);
            Image::create([
                'filename'=>$file->hashName(),
                'original_filename'=>$filename,
                'path'=>$path,
            ]);
        }
       $this->getImages();
    }
    public function getImages(){
        $results = Image::all();
        return view('home', ['results' => $results]);
    }

    private function formatFileName($filename)
    {
        $converter = array(
            'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
            'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
            'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
            'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
            'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
            'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
            'э' => 'e',    'ю' => 'yu',   'я' => 'ya',

            'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
            'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
            'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
            'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
            'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
            'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
            'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
        );
        $filename = strtolower(strtr($filename, $converter));
        return $filename;
    }

    public function unicalName($filename)
    {

        $images = Image::all();
        foreach ($images as $image) {
            if ($filename == $image->original_filename){
                $newFilename =  ($image->id) . $filename ;
                return $newFilename;
            }
        }
        return $filename;
    }
    public function getImage($id)
    {
        $results = Image::find($id);
        return view('imageWindow', ['results' => $results]);
    }
}


