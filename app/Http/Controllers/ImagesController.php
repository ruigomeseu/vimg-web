<?php namespace Vimg\Http\Controllers;

use GrahamCampbell\Throttle\Throttle;
use Vimg\Http\Requests\UploadImageRequest;
use Vimg\Image;

class ImagesController extends Controller {


    public function show($hashId) {
        $id = \App::make('HashIds')->decode($hashId);

        $image = Image::find($id[0]);

        echo '<img src="https://s3.amazonaws.com/vimg.co/' . $image->path , '">';
    }

    public function store(UploadImageRequest $request, Throttle $throttle) {

        if($request->file('image')->getSize() > 1*1024*1024) {
            return response()->json(['success' => false]);
        }

        $throttler = $throttle->get($request, 3, 1);

        if($throttler->attempt()) {

            $contents = file_get_contents($request->file('image')->getRealPath());

            $uniqueFilename = uniqid() . $request->file('image')->getClientOriginalName();

            if(\Storage::disk('s3')->put($uniqueFilename, $contents, 'public'))
            {
                $image = new Image;
                $image->device_id = $request->input('device_id');
                $image->path = $uniqueFilename;
                $image->ip = $request->getClientIp();
                $image->save();

                $hashId = \App::make('HashIds')->encode($image->id);

                return response()->json(['success' => true, 'id' => $hashId]);
            }

        }

        return response()->json(['success' => false]);

    }

}