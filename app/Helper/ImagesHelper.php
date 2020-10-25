<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ImagesHelper {

   static function GetImagePath($strAction, $id, $filename) {

        $default = URL::to('/assets/production/images/not-available.jpg');

        if($filename == '') {
            return $default;
        }

        $path = "http://backend.hatly.loc/";
        $checkFile = public_path() . '/uploads';

        switch ($strAction) {
            case "users":
                $fullPath = $path.'uploads' . '/users/' . $id . '/' . $filename;
                $checkFile = $checkFile . '/users/' . $id . '/' . $filename;
                return is_file($checkFile) ? URL::to($fullPath) : $default;
                break;
        }

        return $default;
    }

    static function checkDoc($fieldInput){
        if ($fieldInput == '') {
            return false;
        }

        if (is_object($fieldInput)) {
            $fileObj = $fieldInput;
        } else {
            if (!Request::hasFile($fieldInput)) {
                return false;
            }

            $fileObj = Request::file($fieldInput);
        }

        if ($fileObj->getSize() >= 2000000) {
            return false;
        }
        $extensionExplode = explode('/' , $fileObj->getMimeType()); // getting image extension
        unset($extensionExplode[0]);
        $extensionExplode = array_values($extensionExplode);
        $extension = $extensionExplode[0];

        if (!in_array($extension, ['jpg', 'JPG', 'jpeg', 'JPEG', 'DWG','PDF','pdf','dwg'])) {
            return false;
        }
        return 1;
    }

    static function uploadImage($strAction, $fieldInput, $id, $customPath = '') {

        if ($fieldInput == '') {
            return false;
        }

        if (is_object($fieldInput)) {
            $fileObj = $fieldInput;
        } else {
            if (!Request::hasFile($fieldInput)) {
                return false;
            }

            $fileObj = Request::file($fieldInput);
        }

        if ($fileObj->getSize() >= 2000000) {
            return false;
        }

        $extensionExplode = explode('/' , $fileObj->getMimeType()); // getting image extension
        unset($extensionExplode[0]);
        $extensionExplode = array_values($extensionExplode);
        $extension = $extensionExplode[0];

        if (!in_array($extension, ['jpg', 'jpeg', 'JPG', 'JPEG', 'png', 'PNG', 'gif', 'GIF','zip','rar','docx','pdf','dwg'])) {
            return false;
        }

        $rand = rand() . date("YmdhisA");
        $fileName = 'hatly' . '-' . $rand;
        $directory = '';
        $path = public_path() . '/uploads/';

        if ($strAction == 'users') {
            $directory = $path . 'users/' . $id;
        }
        
        $fileName_full = $fileName . '.' . $extension;

        if ($directory == '') {
            return false;
        }

        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        if ($fileObj->move($directory, $fileName_full)){
            return $fileName_full;
        }

        return false;
    }

    static function uploadChatAttachment($strAction, $fieldInput, $customPath = '', $inputFile = false) {

        if ($fieldInput == '') {
            return false;
        }
        $fileType = '';
        if (is_object($fieldInput)) {
            $fileObj = $fieldInput;
        } else {
            if (!Input::hasFile($fieldInput)) {
                return false;
            }
            $fileObj = Input::file($fieldInput);
        }


        if ($fileObj->getSize() >= 200000000000) {
            return false;
        }
        $extension = $fieldInput->getClientOriginalExtension(); // getting image extension

        if (!in_array('.'.$extension, ['.pdf','.png','.jpg','.jpeg'])) {
            return false;
        }

        if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' ){
            $fileType = 'image';
        }else{
            $fileType = 'file';
        }
        
        $rand = rand() . date("YmdhisA");
        $fileName = 'aliensera' . '-' . $rand.'.'.$extension;
        $directory = '';

        $path = public_path() . '/uploads/';
        $path = str_replace('frontend', 'engine', $path);

        if ($strAction == 'chat') {
            $directory = $path . 'chat/';
        }

        $fileName_full = $fileObj->getClientOriginalName();
        if ($directory == '') {
            return false;
        }

        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        if ($fileObj->move($directory, $fileName)){
            return [$fileName,str_replace('.'.$extension, "", $fileName_full),$fileType];
        }

        return false;
    }

    static function deleteDirectory($dir) {
        system('rm -r ' . escapeshellarg($dir), $retval);
        return $retval == 0; // UNIX commands return zero on success
    }

}