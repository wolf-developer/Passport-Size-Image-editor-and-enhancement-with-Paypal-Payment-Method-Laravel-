<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageModel;
use Image;
use Session;
use Storage;
use Response;
use Mtownsend\RemoveBg\RemoveBg;

class HomeWebAppController extends Controller{
    private $step;

    public function __construct(){
        $this->step = 0;
    }

    public function index(){
        $step = $this->step;
        return view('mainview.index')
        ->with(compact('step'));
    }

    public function first(){
        $step = $this->step;
        return view('mainview.index')
        ->with(compact('step'));
    }

    public function upload(){
        if($this->step < 1){
            $this->step = 1;
        }
        $step = $this->step;

        Session::forget( 'aspect-ratio-x');
        Session::forget('aspect-ratio-y');
        Session::forget('image_url');
        Session::forget('enhancement');
        Session::put('aspect-ratio-x', 2);
        Session::put('aspect-ratio-y', 2);
        return view('mainview.upload_photo')
        ->with(compact('step'));
    }

    public function uploadimage(Request $request){
        if($this->step < 2){
            $this->step = 2;
        }
        $step = $this->step;

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
        if($this->step < 4){
            $this->step = 4;
        }
        $step = $this->step;

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
        
        removebg()->file($image1)->body([
            'bg_color' => '#FFFFFF',
        ])->save(public_path( 'enhancements/enhancement1/' . $image_filename));

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
            ->with(compact('image6'))
            ->with(compact('step'));
    }

    public function image_croping(Request $request){
        if($this->step < 3){
            $this->step = 3;
        }
        $step = $this->step;

        $image = session('image_filename');
        $aspect_ratio_x = session('aspect-ratio-x');
        $aspect_ratio_y = session('aspect-ratio-y');
        // dd($aspect_ratio_x,$aspect_ratio_y);
        return view( 'mainview.image_croping')
            ->with(compact('image'))
            ->with(compact('aspect_ratio_x'))
            ->with(compact('aspect_ratio_y'))
            ->with(compact('step'));
    }

    public function enchancementView(){
        if($this->step < 4){
            $this->step = 4;
        }
        $step = $this->step;
        
        $image_filename  = Session::get('image_filename');

        $image_size_x = session( 'aspect-ratio-x') * 100;
        $image_size_y = session('aspect-ratio-y') * 100;

        $img1 = Image::make(file_get_contents( 'cropimages/' . $image_filename));
        $img1->resize($image_size_x, $image_size_y);
        $image1 = 'enhancements/original/' . $image_filename;
        
        $img2 = Image::make(file_get_contents( 'enhancements/enhancement1/' . $image_filename));
        $image2 = 'enhancements/enhancement1/' . $image_filename;

        $img3 = Image::make(file_get_contents( 'enhancements/enhancement2/' . $image_filename));
        $image3 = 'enhancements/enhancement2/' . $image_filename;

        $img4 = Image::make(file_get_contents( 'enhancements/enhancement3/' . $image_filename));
        $image4 = 'enhancements/enhancement3/' . $image_filename;

        $img5 = Image::make(file_get_contents( 'enhancements/enhancement4/' . $image_filename));
        $image5 = 'enhancements/enhancement4/' . $image_filename;

        $img6 = Image::make(file_get_contents( 'enhancements/enhancement5/' . $image_filename));
        $image6 = 'enhancements/enhancement5/' . $image_filename;

        return view('mainview.enhancement')
            ->with(compact('image1'))
            ->with(compact('image2'))
            ->with(compact('image3'))
            ->with(compact('image4'))
            ->with(compact('image5'))
            ->with(compact('image6'))
            ->with(compact('step'));
    }
    
    public function previewimage($enhancement){
        $aspect_ratio_x = session('aspect-ratio-x') * 300;
        $aspect_ratio_y = session('aspect-ratio-y') * 200;

        Session::put( 'enhancement', $enhancement);
        $image_filename  = Session::get('image_filename');
        $source_image = 'enhancements/'. $enhancement.'/' . $image_filename;

        $single_img = Image::make(public_path( $source_image )); //->resize(session('aspect-ratio-x')*100, session('aspect-ratio-y')*100);
        $single_image = 'previewimages/s_' . $image_filename;
        $single_img->insert(public_path('watermark.png'), 'bottom-right', 0, 0);
        $single_img->text('PassportPhoto Editor(2021)', 120, 190, function($font) { 
            $font->size(80);  
            $font->color('#555555');  
            $font->align('center');  
            $font->valign('bottom');  
            $font->angle(90);  
        });
        $single_img->save(public_path( $single_image ));
        
        $img = Image::canvas( $aspect_ratio_x, $aspect_ratio_y);
        $img->fill(public_path( $single_image ),0,0);
        $img->pixelate(2);
        $image = 'previewimages/' . $image_filename;
        $img->save(public_path( $image ));
        
        return view( 'mainview.generateimage') 
            ->with(compact('image'))
            ->with(compact('single_image'));
    }

    public function generateimage(){
        $success = Session::get('success');
        if($success != 'Payment success'){
            $enhancement = Session::get('enhancement');
            return $this->previewimage($enhancement);
        }

        $aspect_ratio_x = session('aspect-ratio-x') * 300;
        $aspect_ratio_y = session('aspect-ratio-y') * 200;

        $enhancement = Session::get('enhancement');
        $image_filename  = Session::get('image_filename');
        $source_image = 'enhancements/'. $enhancement.'/' . $image_filename;

        $single_img = Image::make(public_path( $source_image ));
        $single_image = 'paidimages/s_' . $image_filename;
        $single_img->save(public_path( $single_image ));
        
        $img = Image::canvas( $aspect_ratio_x, $aspect_ratio_y);
        $img->fill(public_path( $source_image),0,0);
        $img->pixelate(2);
        $image = 'paidimages/' . $image_filename;
        $img->save(public_path( $image ));
        
        
        return view( 'mainview.generateimage') 
        ->with(compact('image'))
        ->with(compact('single_image'));
    }
    
    public function download_image(){
        $success = Session::get('success');
        if($success != 'Payment success'){
            return;
        }

        $image_filename  = Session::get('image_filename');
        $image = 'paidimages/' . $image_filename;

        return Response::download(public_path( $image ));
    }

    public function download_singleimage(){
        $success = Session::get('success');
        if($success != 'Payment success'){
            return;
        }
        
        $image_filename  = Session::get('image_filename');
        $single_image = 'paidimages/s_' . $image_filename;

        return Response::download(public_path( $single_image ));
    }

    public function getPhotoType(Request $request){

    }
}
