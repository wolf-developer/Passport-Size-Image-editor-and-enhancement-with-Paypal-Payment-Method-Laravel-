<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageModel;
use Image;
use Session;
use Storage;
use Mtownsend\RemoveBg\RemoveBg;

class HomeWebAppController extends Controller{
    public function index(){
        return view('mainview.index');
    }

    public function upload(){
        Session::forget( 'aspect-ratio-x');
        Session::forget('aspect-ratio-y');
        Session::forget('image_url');
        Session::put('aspect-ratio-x', 2);
        Session::put('aspect-ratio-y', 2);
        return view('mainview.upload_photo');
    }

    public function uploadimage(Request $request){
        // $this->validate($request, [
        //     'file' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
        // ]);
        // print_r($request->file);
        $originalImage = $request->file('file');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path() . '/thumbnail/';
        $originalPath = public_path() . '/images/';

        $dummyfilename = time() . $originalImage->getClientOriginalName();

        $thumbnailImage->save($originalPath . $dummyfilename);
        $thumbnailImage->resize(450, 450);
        $thumbnailImage->save($thumbnailPath . $dummyfilename);

        $imagemodel = new ImageModel();
        $imagemodel->image_filename = time() . $dummyfilename;
        $imagemodel->save();
        Session::put( 'image_filename', $dummyfilename);
        return redirect()->route('image_croping');
    }

    public function enchancement(Request $request){
        $crop_width = $request->crop_width;
        $crop_height = $request->crop_height;
        $x = $request->x;
        $y = $request->y;
        $original_img = $request->original_img;

        $image_filename  = Session::get('image_filename');

        $image_size_x = session( 'aspect-ratio-x') * 100;
        $image_size_y = session('aspect-ratio-y') * 100;


        $img = Image::make(file_get_contents('images/'.$image_filename));
        $img->crop($crop_width, $crop_height, $x, $y);
        $img->save(public_path( 'cropimages/' . $image_filename));

        $img1 = Image::make(file_get_contents( 'cropimages/' . $image_filename));
        $img1->resize($image_size_x, $image_size_y);
        $img1->save(public_path( 'enhancements/original/' . $image_filename));
        $image1 = 'enhancements/original/' . $image_filename;
        
        // removebg()->file($image1)->body([
        //     'bg_color' => '#FFFFFF',
        // ])->save(public_path( 'enhancements/enhancement1/' . $image_filename));

        $img2 = Image::make(file_get_contents( 'enhancements/enhancement1/' . $image_filename));
        $image2 = 'enhancements/enhancement1/' . $image_filename;
        $img2->save(public_path($image2));

        $img3 = Image::make(file_get_contents( 'enhancements/enhancement1/' . $image_filename));
        $img3->brightness(10);//Image brightness, -100-100, default 0
        $image3 = 'enhancements/enhancement2/' . $image_filename;
        $img3->save(public_path($image3));

        $img4 = Image::make(file_get_contents( 'enhancements/enhancement1/' . $image_filename));
        $img4->contrast(-5);
        $image4 = 'enhancements/enhancement3/' . $image_filename;
        $img4->save(public_path($image4));

        $img5 = Image::make(file_get_contents( 'enhancements/enhancement1/' . $image_filename));
        $img5->contrast(-10);
        $image5 = 'enhancements/enhancement4/' . $image_filename;
        $img5->save(public_path($image5));

        $img6 = Image::make(file_get_contents( 'enhancements/enhancement1/' . $image_filename));
        $img6->contrast(-15);      
        $image6 = 'enhancements/enhancement5/' . $image_filename;
        $img6->save(public_path($image6));

        return view('mainview.enhancement')
            ->with(compact('image1'))
            ->with(compact('image2'))
            ->with(compact('image3'))
            ->with(compact('image4'))
            ->with(compact('image5'))
            ->with(compact('image6'));
    }

    public function enchancementView(){
        return view('mainview.enhancement');
    }
    
    public function image_croping(Request $request){
        $image = session('image_filename');
        $aspect_ratio_x = session('aspect-ratio-x');
        $aspect_ratio_y = session('aspect-ratio-y');
        // dd($aspect_ratio_x,$aspect_ratio_y);
        return view( 'mainview.image_croping')
            ->with(compact('image'))
            ->with(compact('aspect_ratio_x'))
            ->with(compact('aspect_ratio_y'));
    }
    
    public function generateimage($enhancement){
        $aspect_ratio_x = session('aspect-ratio-x') * 300;
        $aspect_ratio_y = session('aspect-ratio-y') * 200;

        $image_filename  = Session::get('image_filename');

        $img = Image::canvas( $aspect_ratio_x, $aspect_ratio_y);
        $img->fill(public_path( 'enhancements/'. $enhancement.'/' . $image_filename),0,0);
        $img->pixelate(2);
        $img->save(public_path( 'paidimages/' . $image_filename));
        $image1 = 'paidimages/' . $image_filename;
        $singleimage = 'paidimages/' . $image_filename;

        
        return view( 'mainview.generateimage') 
            ->with(compact('image1'));
    }

    public function getPhotoType(Request $request){

    }
}
