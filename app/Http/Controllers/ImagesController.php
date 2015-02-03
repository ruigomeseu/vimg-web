<?php namespace Vimg\Http\Controllers;

use GrahamCampbell\Throttle\Throttle;
use Vimg\Http\Requests\UploadImageRequest;
use Vimg\Image;

class ImagesController extends Controller {

    public function index()
    {
        return \View::make('index');
    }


    public function show($hashId)
    {
        $id = \App::make('HashIds')->decode($hashId);

        $image = Image::find($id[0]);


        $imagePath = 'https://s3.amazonaws.com/vimg.co/' . $image->path;

        return \View::make('show', array('image' => $imagePath));
    }

    public function store(UploadImageRequest $request, Throttle $throttle)
    {
        if($request->file('image')->getSize() > 2*1024*1024) {
            return response()->json(['success' => false]);
        }

        $expectedHash = strtoupper(hash('sha256', $request->input('device_id') . 'l3w1ld1mg'));

        if($request->input('device_hash') != $expectedHash)
        {
            return response()->json(['success' => '0']);
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